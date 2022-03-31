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

                                    if (isset($_GET['uid'])) {
                                        $id = $_GET['uid'];
                                    }else{
                                        echo "Nothing";
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
                                        }
                                    }else{
                                        echo "Fetch Error";
                                    }


                                ?>



        <!-- Start In Body Area -->
        <div class="col-md-10" style="background: #1A2236">
            <div class="in-body-area ">
                <div class="container">
                    <h2 class="text-uppercase text-light text-center mt-3">Employee Attendance</h2>
                    <div class="add-emp">

                        <form method="POST" class="text-light" action="emp-attend.php?uid=<?php echo $id; ?>">
                            <?php  
                                 if (empty($image)) {                                      
                            ?>
                                <img src="images/log.png" style="width:150px; height: 150px;" class="text-center mb-1">
                            <?php }else{ ?>
                                <img src="images2/uploads/<?php echo $image; ?>" style="width:150px; height: 150px; border-radius:50%;" class="text-center mb-1">
                            <?php } ?>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" value="<?php echo $first_name ." ". $last_name ?>" disabled>
                                </div>

                                <div class="form-group col-md-4">
                                    <input type="time" class="form-control" name="time" autocomplete="off">
                                </div>

                                <input type="hidden" name="employee_id" value="<?php echo $employee_id ?>">

                                <input type="hidden" name="date" value="<?php $date = date('d/m/Y'); echo $date; ?>">

                                <div class="form-group col-md-4">
                                    <div class="input-group">
                                        <select class="custom-select option" name="attendance" id="inputGroupSelect01">
                                            <option selected>Attendance</option>
                                            <option value="Present">Present</option>
                                            <option value="Absent">Absent</option>
                                            <option value="Leave">Leave</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary" name="attend">Submit</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>


        <?php
         if(isset($_POST["attend"])) {
             
            $employee_id  = mysqli_real_escape_string($con,$_POST['employee_id']);
		    $time         = mysqli_real_escape_string($con,$_POST['time']);		
		    $date         = mysqli_real_escape_string($con,$_POST['date']);
		    $attendance   = mysqli_real_escape_string($con,$_POST['attendance']);            
             
            if (!empty(attendance)) {
			
			$sql1 = "SELECT id FROM attendance WHERE date = '$date' and employee_id = '$employee_id'";
			$result1 = mysqli_query($con,$sql1);
			$row1 = mysqli_fetch_array($result1);
			$count1 = mysqli_num_rows($result1);

			if ($count1) {
				echo "<script> alert('Attendance already updated!'); </script>";
                echo "<script> window.location.href='employee.php'; </script>";
			}

			else{
				$sql = "INSERT INTO attendance(employee_id,time,date,attendance) VALUES('$employee_id','$time','$date','$attendance')";	
				
				$result = mysqli_query($con,$sql);

				if($result) {
					echo "<script> alert('Employee Attendance Successfully Updated'); </script>";
					echo "<script> window.location.href='employee.php'; </script>";
				}else {
					echo "<script> alert('Sorry! Employee Attendance Not Updated'); </script>";
				}
			}
		}else{
			echo "<script> alert('ERROR: Field Empty!!!'); </script>";
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
