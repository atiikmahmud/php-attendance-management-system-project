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
                    <h4 class="text-uppercase text-light text-center mt-3">Edit employee</h4>
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
                                            <img src="images/log.png" style="width:150px; height: 150px;" class="text-center mb-1">
                                            <?php }else{ ?>
                                            <img src="images2/uploads/<?php echo $image; ?>" style="width:150px; height: 150px; border-radius:50%;" class="text-center mb-1">
                                            <?php } ?>
                                        </label>
                                        <input type="file" class="image hidden" id="image" name="image">
                                        <button name="profile" class="btn btn-primary">Change Profile Picture</button>
                                    </div>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                        </form>


                        <?php  
                                        
                                        if (isset($_POST['profile'])) {
                                            $tmp_product_image  = $_FILES["image"]["tmp_name"];
                                            $product_image      = $_FILES["image"]["name"];

                                            if (!empty($product_image)) {
                
                                                $target_dir = "images2/uploads/";
                                                $target_file = $target_dir . basename($product_image);
                                                $target_file = md5($target_file);
                                                $uploadOk = 1;
                                                $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                                                $check = getimagesize($tmp_product_image);
                                                if($check !== false) {
                                                    $uploadOk = 1;
                                                    if (file_exists($target_file)) {
                                                        echo "Sorry, file already exists.";
                                                        $uploadOk = 0;
                                                    }

                                                    if ($uploadOk == 0) {
                                                        echo "Sorry, your file was not uploaded.";
                                                    
                                                    } else {
                                                        $uploadOk = 1;


                                                        $extension=end(explode(".", $product_image));
                                                        $prod = $target_file;
                                                        $newfilename=$prod .".".$extension;
                                                        move_uploaded_file($tmp_product_image, $target_dir.$newfilename);

                                                        $query = "UPDATE employee SET image = '$newfilename' WHERE id='$id'";
                                                        $result = mysqli_query($con,$query);
                                                        if ($result) {

                                                            echo "<script>alert('Profile Picture Uploaded Successfully')</script>";
                                                            $pathLocation = 'location: http://localhost/attendance/employee_edit.php?uid='.$userId;
                                                            
                                                            header($pathLocation);

                                                        }else{
                                                            echo "<script>alert('ERROR!!! While Updating')</script>";
                                                            echo "<script>window.location.href='employee.php'</script>";
                                                        }
                                                        
                                                    }
                                                } else {
                                                    echo "File is not an image.";
                                                    $uploadOk = 0;
                                                }
                                            }else{
                                                echo "<script>alert('Field Empty')</script>";
                                            }
                                        }

                                    ?>



                        <form method="POST" class="text-light" action="employee_edit.php?uid=<?php echo $id; ?>">
                            
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" name="first_name" value="<?php echo $first_name; ?>" autocomplete="off" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" name="last_name" value="<?php echo $last_name; ?>" autocomplete="off" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" name="dob" value="<?php echo $dob; ?>" autocomplete="off" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" name="employee_id" value="<?php echo $employee_id; ?>" autocomplete="off" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" name="designation" value="<?php echo $designation; ?>" autocomplete="off" required>
                                </div>

                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" name="supervisor" value="<?php echo $supervisor; ?>" autocomplete="off" required>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" autocomplete="off" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" name="phn_no" value="<?php echo $phn_no; ?>" autocomplete="off" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" name="salary" value="<?php echo $salary; ?>" autocomplete="off" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <input type="Text" class="form-control" name="joining_date" value="<?php echo $joining_date; ?>" autocomplete="off" required>
                                    <div class="input-group pt-3">
                                        <select class="custom-select option" name="gender" id="inputGroupSelect01">
                                            <option value="<?php echo $gender; ?>" selected><?php echo $gender; ?></option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group col-md-8">
                                    <textarea class="form-control textarea-height " rows="3" name="address" autocomplete="off" ;><?php echo $address; ?></textarea>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary" name="update_profile">Update</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>


        <?php
        
         if(isset($_POST["update_profile"])) {

            $first_name    = mysqli_real_escape_string($con,$_POST['first_name']);
            $last_name     = mysqli_real_escape_string($con,$_POST['last_name']);
            $employee_id   = mysqli_real_escape_string($con,$_POST['employee_id']);		
            $designation   = mysqli_real_escape_string($con,$_POST['designation']);
            $dob           = mysqli_real_escape_string($con,$_POST['dob']);
            $gender        = mysqli_real_escape_string($con,$_POST['gender']);
            $supervisor    = mysqli_real_escape_string($con,$_POST['supervisor']);
            $address       = mysqli_real_escape_string($con,$_POST['address']);
            $joining_date  = mysqli_real_escape_string($con,$_POST['joining_date']);
            $salary        = mysqli_real_escape_string($con,$_POST['salary']);
            $phn_no        = mysqli_real_escape_string($con,$_POST['phn_no']);
            $email	       = mysqli_real_escape_string($con,$_POST['email']); 		

                            
                                            
            if (!empty($first_name)|| !empty($last_name) || !empty($employee_id) || !empty($designation) || !empty($dob) || !empty($gender) || !empty($supervisor) || !empty($address) || !empty($joining_date) || !empty($salary)|| !empty($phn_no) || !empty($email)) {
                                                
            $query = "UPDATE employee SET first_name ='$first_name',last_name ='$last_name', employee_id ='$employee_id', designation ='$designation', dob ='$dob', gender ='$gender', supervisor ='$supervisor', address ='$address', joining_date ='$joining_date', salary ='$salary', phn_no ='$phn_no', email ='$email' WHERE id = '$id'";
            
             $result = mysqli_query($con,$query);
                if ($result) {

                 echo "<script>alert('Profile Updated Successfully')</script>";
                 $pathLocation = 'location: http://localhost/attendance/employee_edit.php?uid='.$userId;
                 header($pathLocation);

                 }else{
                 echo "<script>alert('ERROR!!! While Updating Profile')</script>";
                 }
                    }else{
                     echo "<script>alert('Field Must Not be Empty')</script>";
                          }                                                  
                      }
                                        
                ?>




    </div>
</div>

<!-- End In Body Area -->

<!-- footer Include -->
<?php  
    include 'inc/footer.php';
?>
