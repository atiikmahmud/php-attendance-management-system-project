<?php
include('function/signup_script.php');
?>

<!-- Header Include -->
<?php  
    include 'inc/header.php';
?>

<!-- Navbar Include -->
<?php  
    include 'inc/navbar.php';
?>

<!-- start body area -->
<div class="body-area container-fluid">
    <div class="row">

        <!-- Side-Bar Include -->
        <?php  
    include 'inc/side-bar.php';
?>

        <!-- Start In Body Area -->
        <div class="col-md-10" style="background: #1A2236">
            <div class="in-body-area ">
                <div class="container">
                    <h4 class="text-uppercase text-light text-center mt-3">add employee</h4>
                    <div class="add-emp">

                        <form method="POST" class="text-light">
                            <img src="images/log.png" alt="" height="150px" width="150px" class="text-center mb-3">

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" name="first_name" placeholder="First Name" autocomplete="off" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" name="last_name" placeholder="Last Name" autocomplete="off" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" name="dob" placeholder="Birthdate (dd-mm-yyyy)" autocomplete="off" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" name="employee_id" placeholder="Emp-ID" autocomplete="off" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" name="designation" placeholder="Designation" autocomplete="off" required>
                                </div>

                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" name="supervisor" placeholder="Supervisor" autocomplete="off" required>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <input type="email" class="form-control" name="email" placeholder="Email" autocomplete="off" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" name="phn_no" placeholder="Mobile" autocomplete="off" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" name="salary" placeholder="Salary" autocomplete="off" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <input type="Text" class="form-control" name="joining_date" placeholder="Joining Date (dd-mm-yyyy)" autocomplete="off" required>
                                    <div class="gender pt-3">
                                        <div class="input-group ">
                                        <select class="custom-select optionn" name="gender" id="inputGroupSelect01">     
                                            <option selected>Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-8">
                                    <textarea class="form-control textarea-heightt" rows="3" name="address" placeholder="Address" autocomplete="off"></textarea>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary" name="signup">Submit</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End In Body Area -->

<!-- footer Include -->
<?php  
    include 'inc/footer.php';
?>
