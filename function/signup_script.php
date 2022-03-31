<?php 

	include('db/db.php');
	if (isset($_POST['signup'])) {

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
			
			$sql1 = "SELECT id FROM employee WHERE email = '".$email."' and employee_id = '".$employee_id."'";
			$result1 = mysqli_query($con,$sql1);
			$row1 = mysqli_fetch_array($result1);
			$count1 = mysqli_num_rows($result1);

			if ($count1) {
				echo "<script> alert('Email or Employee ID No. Already Exists'); </script>";
			}

            else if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) 
            {
             echo "<script> alert('Error ! Email address is not valid!'); </script>"; 
            }else{
				$sql = "INSERT INTO employee(first_name,last_name,employee_id,designation,dob,gender,supervisor,address,joining_date,salary,phn_no,email) VALUES('$first_name','$last_name','$employee_id','$designation','$dob','$gender','$supervisor','$address','$joining_date','$salary','$phn_no','$email')";
				
				
				$result = mysqli_query($con,$sql);
				

				if($result) {
					echo "<script> alert('Employee Successfully Registered'); </script>";
					echo "<script> window.location.href='employee.php'; </script>";
				}else {
					echo "<script> alert('Employee Not Inserted'); </script>";
				}
			}
		}else{
			echo "<script> alert('ERROR: Field Empty!!!'); </script>";
		}
            
    }
	
            

?>

