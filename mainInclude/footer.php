<!-- Start Footer -->
<footer class="container-fluid bg-dark text-center p-2">
        <small class="text-white">
            Copyright &copy; 2023 || Designed By e-Learning || <a href="#login" data-toggle="modal" data-target="#adminLogModalCenter" style="color:navajowhite; font-weight:500;">Admin Login</a>
        </small>
    </footer>
    <!-- End Footer -->

    <!-- Start Student Registration -->

    <?php
    include_once('registrationForm.php');
    ?>
    <!-- End Student Registration -->

    <!-- Start Student Login -->
    <div class="modal fade" id="stuLogModalCenter" tabindex="-1" role="dialog" aria-labelledby="stuLogModalCenterLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="stuLogModalCenterLabel">Student Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="stuLoginForm">
                        <div class="form-group">
                            <i class="fas fa-envelope"></i>
                            <label for="stuLogmail" class="pl-2 font-weight-bold">Email address</label>
                            <input type="email" class="form-control" id="stuLogmail" name="stuLogmail" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <i class="fas fa-key"></i>
                            <label for="stuLogpass" class="pl-2 font-weight-bold">Password</label>
                            <input type="password" class="form-control" id="stuLogpass" name="stuLogpass" placeholder="Password">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Next Time</button> -->
                    <button type="button" class="btn btn-primary" id="stuLoginBtn" onclick="checkStuLogin()">Login</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Student Login -->


    <!-- Start Admin Login -->
    <div class="modal fade" id="adminLogModalCenter" tabindex="-1" role="dialog" aria-labelledby="adminLogModalCenterLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="adminLogModalCenterLabel">Admin Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="adminLoginForm">
                        <div class="form-group">
                            <i class="fas fa-envelope"></i>
                            <label for="adminLogmail" class="pl-2 font-weight-bold">Email address</label>
                            <input type="email" class="form-control" id="adminLogmail" name="adminLogmail" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <i class="fas fa-key"></i>
                            <label for="adminLogpass" class="pl-2 font-weight-bold">Password</label>
                            <input type="password" class="form-control" id="adminLogpass" name="adminLogpass" placeholder="Password">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Next Time</button> -->
                    <button type="button" class="btn btn-primary" id="adminLoginBtn">Login</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Admin Login -->
    <!-- Javascript Source Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/ajaxRequest.js"></script>
    <script src="js/propper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>