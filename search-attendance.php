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
                    <h4 class="text-uppercase text-light text-center mt-3">Search Employee Attendance</h4>
                    <div class="add-emp">

                        <form method="" class="text-light" action="">
                            

     <?php 

    include('db/db.php');
    if (isset($_POST['search'])) {

        
        $employee_id  = mysqli_real_escape_string($con,$_POST['employee_id']);     
        $attendance   = mysqli_real_escape_string($con,$_POST['attendance']);
        $fromdate     = mysqli_real_escape_string($con,$_POST['fromdate']);
        $todate       = mysqli_real_escape_string($con,$_POST['todate']);
             

        if (!empty($employee_id)|| !empty($attendance) || !empty($fromdate) || !empty($todate)) {
            
            $sql = "SELECT image,first_name,last_name, attendance.employee_id, designation, count(attendance.employee_id) as days FROM employee LEFT JOIN attendance ON employee.employee_id = attendance.employee_id where date BETWEEN '".$fromdate."' and '".$todate."' and attendance.employee_id = '".$employee_id."' and attendance.attendance = '".$attendance."'";

            $result = mysqli_query($con,$sql);
            
            if ($result) {
                if (empty($result)){
                    
                    echo 'Sorry';
                    
                }else{
                    
                while($row = mysqli_fetch_assoc($result)){
                                    
                                    $image       = $row['image'];
                                    $first_name  = $row['first_name'];
                                    $last_name   = $row['last_name'];
                                    $employee_id = $row['employee_id'];
                                    $designation = $row['designation'];
                                    $date        = $row['days'];
                                    
                                $img = "images2/uploads/".$image;

                                echo '

                                <img src="'.$img.'" style="width:150px; height: 150px; border-radius:50%;" class="text-center mb-3">

                                <div class="form-row">
                               
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control" value="'.$first_name .' '.$last_name.'" disabled>
                                </div>

                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control" value="'.$employee_id.'" disabled>
                                </div> 

                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control" value="'.$designation.'" disabled>
                                </div> 

                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control" value="'.$date.' Days" disabled>
                                </div> 

                            </div>';
                                }
                }
            }

            else{
                echo "<script> alert('Sorry!'); </script>";
                //echo "<script> window.location.href='attendance.php'; </script>";
            }
        }else{
            echo "<script> alert('Sorry! Searching Problem'); </script>";
            //echo "<script> window.location.href='attendance.php'; </script>";
        }
            
    }
    
            

    ?> 
                        </form>

                        <a class="btn btn-primary" href="attendance.php" role="button">Search Again</a>

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
