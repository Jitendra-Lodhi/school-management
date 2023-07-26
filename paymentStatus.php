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
<div class="container">
    <h2 class="text-center my-4">Payment Status </h2>
    <form method="post" action="">
        <div class="form-group row">
            <label class="offset-sm-3 col-form-label">Order ID:</label>
            <div>
                <input type="text" class="form-control mx-3">
            </div>
            <div>
                <input type="submit" class="btn btn-primary mx-4" value="View">
            </div>
        </div>
    </form>
    </h2>

</div>
<!-- End Main Content -->

<!-- Including Contact us -->
<?php
include_once('contactUs.php');
?>
<!-- End Contact us -->

<!-- Including footer -->
<?php
include_once('./mainInclude/footer.php');
?>
<!-- End footer -->