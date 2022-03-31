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


        <?php                        
                    include 'db/db.php';
                                $userId = $_GET['uid'];
                                    if ($userId) {
                                        $id = $userId;
                                    }else{
                                        echo "<script>alert('ERROR!!! While Updating')</script>";
                                        echo "<script>window.location.href='employee.php'</script>";
                                    }

                                    $query = "SELECT * FROM employee WHERE id = '$id'";
                                    $result = mysqli_query($con,$query);

                                    if ($result) {
                                        while($row = mysqli_fetch_assoc($result)){
                                    $id            = $row['id'];
                                    $image         = $row['image'];
                                    $first_name    = $row['first_name'];
                                    $last_name     = $row['last_name'];
                                    $employee_id   = $row['employee_id'];
                                    $designation   = $row['designation'];
                                    $dob           = $row['dob'];
                                    $gender        = $row['gender'];
                                    $supervisor    = $row['supervisor'];
                                    $address       = $row['address'];
                                    $joining_date  = $row['joining_date'];
                                    $salary        = $row['salary'];
                                    $phn_no        = $row['phn_no'];
                                    $email         = $row['email'];
                                      
                                        }
                                        
                                    }else{
                                        echo "Fetch Error";
                                    }


                                ?>



        <!-- Start In Body Area -->
        <div class="col-md-10" style="background: #1A2236">
            <div class="in-body-area ">
                <div class="container">
                    <h4 class="text-uppercase text-light text-center mt-3">employee profile</h4>
                    <div class="add-emp">

                        <form method="post" action="" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="col-md-4"></div>
                                <div class="form-group col-md-4 text-center">
                                    <div class="text-center">
                                        <label for="image">
                                            <?php  
                                            if (empty($image)) {                                      
                                            ?>
                                            <img src="images/log.png" style="width:150px; height: 150px;" class="text-center mt-1">
                                            <?php }else{ ?>
                                            <img src="images2/uploads/<?php echo $image; ?>" style="width:150px; height: 150px; border-radius:50%;" class="text-center mt-1">
                                            <?php } ?>
                                        </label>
                                        
                                    </div>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                        </form>


                        



                        <form method="" class="text-light" action="">
                            
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" value="<?php echo $first_name; ?>"disabled>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control"  value="<?php echo $last_name; ?>" disabled>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" name="dob" value="<?php echo $dob; ?>"  disabled>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" name="employee_id" value="<?php echo $employee_id; ?>" disabled>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" name="designation" value="<?php echo $designation; ?>" disabled>
                                </div>

                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" name="supervisor" value="<?php echo $supervisor; ?>" disabled>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" disabled>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" name="phn_no" value="<?php echo $phn_no; ?>" disabled>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" name="salary" value="<?php echo $salary; ?>" disabled>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <input type="Text" class="form-control" name="joining_date" value="<?php echo $joining_date; ?>" disabled>
                                    <div class="input-group pt-3">
                                        <input type="Text" class="form-control" name="gender" value="<?php echo $gender; ?>" disabled>
                                    </div>
                                </div>


                                <div class="form-group col-md-8">
                                    <textarea class="form-control textarea-height " rows="3" name="address" autocomplete="off" ; disabled><?php echo $address; ?></textarea>
                                </div>
                            </div>
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
