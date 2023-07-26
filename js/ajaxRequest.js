$(document).ready(function() {
  // AJAX call for already existing email verification
  $('#stumail').on('keypress', function() { // Use 'keypress' event instead of 'blur'
    var stumail = $(this).val(); // Use $(this) to refer to the current element
function addStu(){
    var stuname = $('#stuname').val(); // Correct the variable name
    var stumail = $('#stumail').val(); // Correct the variable name
    var stupass = $('#stupass').val(); // Correct the variable name
    $.ajax({
      url: 'Student/addStudent.php',
      method: 'POST',
      data: {
        stuname: stuname,
        stumail: stumail,
        stupass: stupass,
      },
      success: function(data) {
        console.log(data);
      }})};
        if (data > 0) { // Check if data is greater than 0
          // Email already exists
          $('#statusMsg').html("<small style='color:red;'>Email already exists. Please use a different email.</small>");
          $('#signup').attr('disabled', false);
        } else {
          // Email is valid and doesn't exist
          $('#statusMsg').html("");
          $('#signup').attr('disabled', false);
        }
      },
      error: function(xhr, status, error) {
        console.error('AJAX request failed:', error);
      }
    });
//   });
// });


function addStu() {
  var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
  var stuname = $('#stuname').val();
  var stumail = $('#stumail').val();
  var stupass = $('#stupass').val();

  // Checking form fields on form submission
  if (stuname.trim() === '') {
    $('#statusMsg1').html("<small style='color:red;'>Please Enter Name!</small>");
    $('#stuname').focus();
    return false;
  } else if (stumail.trim() === '') {
    $('#statusMsg').html("<small style='color: red;'>Please Enter Email</small>");
    $('#stumail').focus();
    return false;
  } else if (stumail.trim() !== '' && !reg.test(stumail)) {
    $('#statusMsg').html("<small style='color: red;'>Please Enter Valid Email</small>");
    $('#stumail').focus();
    return false;
  } else if (stupass.trim() === '') {
    $('#statusMsg3').html("<small style='color:red;'>Please Enter Password</small>");
    $('#stupass').focus();
    return false;
  } else {
    $.ajax({
      url: 'Student/addStudent.php',
      method: 'POST',
      data: {
        stuname: stuname,
        stumail: stumail,
        stupass: stupass,
      },
      success: function(data) {
        console.log(data);
        if (data === 'OK') {
          $('#successMsg').html("<span class='alert-success'>Registration Successful!</span>");
          clearStuRegField();
          $('#stuRegForm').hide(); // Hide the form container after successful submission
        } else if (data === 'Failed in PHP') {
          $('#successMsg').html("<span class='alert-danger'>Unable to Register</span>");
        }
      },
      error: function(xhr, status, error) {
        console.error("AJAX request failed:", error);
      }
    });
  }
}

// Empty all fields and remove the success and error messages
function clearStuRegField() {
  $('#stuRegForm').trigger("reset");
  $('#statusMsg1').html("");
  $('#statusMsg').html("");
  $('#statusMsg3').html("");
}


// Ajax Call For Student Login Verification
function checkStuLogin(){
  var stuLogEmail = $('#stuLogmail').val(); // Correct the variable name
  var stuLogpass = $('#stuLopass').val(); // Correct the variable name
  $.ajax({
    url: "Student/addStudent.php",
    method: "POST",
    data: {
      stuLogmail: stuLogEmail, // Use the correct variable name
      stuLogpass: stuLogpass, // Use the correct variable name
    },
    success: function(data) {
      console.log(data);
    }
  });
}

