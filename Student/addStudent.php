<?php
// Create connection
include_once('../db-connection.php');

// Checking email already registered
if (isset($_POST['checkemail']) && isset($_POST['stumail'])) {
    $stumail = $_POST['stumail'];
    $sql = "SELECT stu_email FROM student WHERE stu_email = '" . $stumail . "'";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($res); // Use mysqli_num_rows to get the number of rows

    // Send the response as JSON
    echo json_encode($row);
}

// Insert student data
if (isset($_POST['stuname']) && isset($_POST['stumail']) && isset($_POST['stupass'])) {
    $stuname = $_POST['stuname'];
    $stumail = $_POST['stumail'];
    $stupass = $_POST['stupass'];

    // Check if the email already exists
    $checkSql = "SELECT stu_email FROM student WHERE stu_email = '" . $stumail . "'";
    $checkResult = mysqli_query($conn, $checkSql);

    if (mysqli_num_rows($checkResult) > 0) {
        // Email already exists, return an error response
        echo json_encode("Email already registered");
    } else {
        // Email doesn't exist, insert the student data
        $insertSql = "INSERT INTO student (stu_name, stu_email, stu_pass) VALUES ('$stuname', '$stumail', '$stupass')";
        $insertResult = mysqli_query($conn, $insertSql);

        if ($insertResult) {
            echo json_encode("OK");
        } else {
            echo json_encode("Failed in PHP: " . mysqli_error($conn));
        }
    }
}



// Student Login Verification
if (isset($_POST['stuLogmail']) && isset($_POST['stuLogpass'])) {
    $stuLogEmail = $_POST['stuLogmail']; // Correct the variable name
    $stuLogPass = $_POST['stuLogpass']; // Correct the variable name

    $sql = "SELECT stu_email, stu_pass FROM student WHERE stu_email = '".$stuLogEmail."' AND stu_pass = '".$stuLogPass."'";
    $result = mysqli_query($conn,$sql);

    $row = $result->num_rows;

    if($row === 1){
        echo json_encode($row);
    }
    else if($row === 0){
        echo json_encode($row);
    }
}

?>
