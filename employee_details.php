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

                    <div class="person-id-card">
                        <div class="row">
                            <!--image section-->
                            <div class="col-md-6">
                                <div class="person-id-image">
                                    <?php  
                                            if (empty($image)) {                                      
                                            ?>
                                            <img src="images/log.png" alt="" height="350px" width="350px" class="rounded">
                                            <?php }else{ ?>
                                            
                                            <img src="images2/uploads/<?php echo $image; ?>" alt="" height="350px" width="350px" class="rounded">
                                            
                                            <?php } ?>
                                </div>

                            </div>
                            <!--image section-->
                            <div class="col-md-6">
                                <div class="pp-details">
                                    <div class="person-id-details text-light">
                                        <h4><?php echo $first_name ." ". $last_name; ?></h4>
                                        <span style="font-size:14px"><?php echo $designation; ?></span>
                                    </div>

                                    <div class="persion-id-quiets">
                                        “If there's one thing you learn by working on a lot of different Web sites, it's that almost any design idea--no matter how appallingly bad--can be made usable in the right circumstances, with enough effort.”
                                    </div>

                                    <div class="persion-id-all-details">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <i class="far fa-calendar-alt"></i><br>
                                                <i class="fas fa-mobile-alt"></i><br>
                                                <i class="far fa-envelope-open"></i><br>
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <div class="col-md-11">
                                                <div class="ppp-details">
                                                    <?php echo $joining_date; ?> <br>
                                                    <?php echo $phn_no; ?> <br>
                                                    <?php echo $email; ?> <br>
                                                    <?php echo $address; ?>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>

                        </div>

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
