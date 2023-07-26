<!-- Including Header -->
<?php
include_once('./mainInclude/header.php');
?>
<!-- End Header -->


<!-- Start course Page Banner -->
<div class="container-fluid bg-dark">
    <div class="row">
        <img src="./images/universalBanner.jpg" alt="courses" style="height:400px; width:100%; object-fit:cover; box-shadow:10px;">
    </div>
</div>
<!-- End course Page Banner -->

<!-- Start Main Content -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <img src="./images/Course-banner/Untitled.png" alt="React JS" class="card-img-top">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Course Name: Learn Node JS</h5>
                <p class="card-text">Description: Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil voluptatibus, libero reprehenderit earum fugiat sunt consequuntur porro animi, ipsa inventore praesentium sint provident pariatur ipsum! Dolorum quod accusamus quasi modi. </p>
                <p class="card-text">
                    Duration: 10 Days
                </p>
                <form action="" method="post">
                <p class="card-text d-inline">Price: <small><del>&#8377 26,000</del></small></p>
                <p class="font-weight-border">&#8377 1500</p>
                <button type="submit" class="btn btn-primary text-white font-weight-bolder float-right" name="buy">Buy Now</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">Lesson No.</th>
                    <th scope="col">Lesson Name</th>
                </tr>
            </thead>
            <thead>
                <tr>
                    <th scope="row">01.</th>
                    <td scope="col">Introduction</td>
                </tr>
            </thead>
        </table>
    </div>
</div>

<!-- End Main Content -->

<!-- Including footer -->
<?php
include_once('./mainInclude/footer.php');
?>
<!-- End footer -->