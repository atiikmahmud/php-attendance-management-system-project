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
                    <h4 class="text-uppercase text-light text-center mt-3 mb-3">User Profile</h4>
                    <div class="add-emp">

                        <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>" enctype="multipart/form-data">
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

                                                        $query = "UPDATE users SET image = '$newfilename' WHERE id='$id'";
                                                        $result = mysqli_query($con,$query);
                                                        if ($result) {

                                                            echo "<script>alert('Profile Picture Uploaded Successfully')</script>";

                                                            echo "<script>window.location.href='user-profile.php'</script>";

                                                        }else{
                                                            echo "<script>alert('ERROR!!! While Updating')</script>";
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
                                    
                                    
                                    
                                    <?php                        
                                    $query = "SELECT usersname,email,status FROM users where id = '$id' ";
                                    
                                    $result = mysqli_query($con,$query);

                            if ($result) {
                                while($row = mysqli_fetch_assoc($result)){
                                    
                                    $usersname      = $row['usersname'];
                                    $email          = $row['email'];
                                    $status         = $row['status'];
                                    }
                                        
                                    }else{
                                        echo "Fetch Error";
                                    }


                                ?>

                        <form method="POST" class="text-light" action="">


                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" value="<?php echo $usersname; ?>" name="usersname" autocomplete="off" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" value="<?php echo $email; ?>"  name="email" autocomplete="off" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" value="<?php echo $status; ?>"  name="status" autocomplete="off" required>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary" name="update_profile">Submit</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>


        <?php
        
         if(isset($_POST["update_profile"])) {

                $usersname     = mysqli_real_escape_string($con,$_POST['usersname']);
                $email         = mysqli_real_escape_string($con,$_POST['email']);
                $status        = mysqli_real_escape_string($con,$_POST['status']);

                if (!empty($usersname)|| !empty($email) || !empty($status)) 
                { 
                    $query = "UPDATE users SET usersname ='$usersname', email ='$email', status ='$status' where id ='$id' ";

                    $result = mysqli_query($con,$query);
                    if ($result) {

                     echo "<script>Swal.fire({
                                              position: 'top-center',
                                              icon: 'success',
                                              title: 'Profile Successfully Updated!',
                                              showConfirmButton: false,
                                              timer: 1500
                                            })
                                            </script>";
                     
                     header( "refresh:1.5;url=user-profile.php" );

                     }else{
                     echo "<script>alert('ERROR!!! While Updating Profile')</script>";
                     echo "<script>Swal.fire({
                                              position: 'top-center',
                                              icon: 'error',
                                              title: 'ERROR! While Updating Profile!',
                                              showConfirmButton: false,
                                              timer: 1500
                                            })
                                            </script>";
                     
                     header( "refresh:1.5;url=user-profile.php" );
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
