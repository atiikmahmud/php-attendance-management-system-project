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

                    <div class="emp-profile-card text-light shadow-lg">
                        <div class="profile-img">
                            <img src="images2/uploads/e8cad3a0257a628d63c0ad2f1866abfe.jpg" alt="" style="width:120px; height: 120px; border-radius:50%;">
                            <div class="profile-emp-id">
                                <strong>Emp-ID: Jr-101</strong>
                            </div>
                        </div>
                        <div class="profile-emp-details">
                            <strong>Name: </strong>Atik Mahmud <br>
                            <strong>Designation: </strong>Jr. Software Engineer <br>
                            <strong>Date of Birth: </strong>15-11-1996 <br>
                            <strong>Phone No.: </strong>01749941982 <br>
                            <strong>Email: </strong>atiikmahmud@gmail.com <br>
                            <strong>Address: </strong>622/A, Siroil, Boalia, Rajshahi
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
