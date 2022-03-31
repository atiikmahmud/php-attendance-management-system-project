<!-- Header Include -->

<?php  
    include 'inc/header.php';
?>

<!-- Navbar Include -->
<?php  
    include 'inc/navbar.php';
?>

<!-- start body area -->

<?php
                                    
    if(isset($_GET["uid"])) {
        include 'db/db.php';
        $id = $_GET['uid'];

        $query2 = "SELECT * FROM employee WHERE id = '$id'";
        $result2 = mysqli_query($con,$query2);
        while ($row = mysqli_fetch_assoc($result2)) {            
                
                    $query = "DELETE FROM employee WHERE id = '$id'";
                    $result = mysqli_query($con,$query);
                    if ($result) {
                        echo "<script>alert('Employee Deleted Successfully')</script>";
                        echo "<script>window.location.href='employee.php'</script>";
                    }else{
                        echo "<script>alert('Database Delete Error')</script>";
                    }               
                
            
            }
        
        
    }else{
    	echo "<script>window.location.href='employee.php'</script>";
    }
    
?>

<!-- End In Body Area -->

<!-- footer Include -->
<?php  
    include 'inc/footer.php';
?>
