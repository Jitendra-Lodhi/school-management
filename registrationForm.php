<!-- Start Student Registration -->

<!-- Modal -->
<div class="modal fade" id="stuRegModalCenter" tabindex="-1" role="dialog" aria-labelledby="stuRegModalCenterLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="stuRegModalCenterLabel">Student Registration</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="stuRegForm">
                    <div class="form-group">
                        <i class="fas fa-user"></i>
                        <label for="stuname" class="pl-2 font-weight-bold">Email address</label>
                        <small id="statusMsg1"></small> <!-- Error message for name -->
                        <input type="text" class="form-control" id="stuname" name="stuname" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <i class="fas fa-envelope"></i>
                        <label for="stumail" class="pl-2 font-weight-bold">Email address</label>
                        <small id="statusMsg"></small> <!-- Error message for email -->
                        <input type="email" class="form-control" id="stumail" name="stumail" placeholder="Email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-key"></i>
                        <label for="stupass" class="pl-2 font-weight-bold">Password</label>
                        <small id="statusMsg3"></small> <!-- Error message for password -->
                        <input type="password" class="form-control" id="stupass" name="stupass" placeholder="Password">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <small id="successMsg"></small> <!-- Success message or error message -->
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Next Time</button> -->
                <button type="button" onclick="addStu()" class="btn btn-primary" id="signup">Connect</button>
            </div>
        </div>
    </div>
</div>
<!-- End Student Registration -->
