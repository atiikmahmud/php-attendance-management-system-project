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
                <h4 class="text-uppercase text-light text-center mt-3">Employee Attendance Details in 2020</h4>
                <div class="add-emp">
                    <div class="atten-all-month">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active date" id="nav-jan-tab" data-toggle="tab" href="#nav-jan" role="tab" aria-controls="nav-jan" aria-selected="true">Jan.</a>

                                <a class="nav-item nav-link date" id="nav-feb-tab" data-toggle="tab" href="#nav-feb" role="tab" aria- controls="nav-feb" aria-selected="false">Feb.</a>

                                <a class="nav-item nav-link date" id="nav-mar-tab" data-toggle="tab" href="#nav-mar" role="tab" aria- controls="nav-mar" aria-selected="false">Mar.</a>

                                <a class="nav-item nav-link" id="nav-apr-tab" data-toggle="tab" href="#nav-apr" role="tab" aria- controls="nav-apr" aria-selected="false">Apr.</a>

                                <a class="nav-item nav-link" id="nav-may-tab" data-toggle="tab" href="#nav-may" role="tab" aria- controls="nav-may" aria-selected="false">May.</a>

                                <a class="nav-item nav-link" id="nav-jun-tab" data-toggle="tab" href="#nav-jun" role="tab" aria- controls="nav-jun" aria-selected="false">Jun.</a>

                                <a class="nav-item nav-link" id="nav-jul-tab" data-toggle="tab" href="#nav-jul" role="tab" aria- controls="nav-jul" aria-selected="false">Jul.</a>

                                <a class="nav-item nav-link" id="nav-aug-tab" data-toggle="tab" href="#nav-aug" role="tab" aria- controls="nav-aug" aria-selected="false">Aug.</a>

                                <a class="nav-item nav-link" id="nav-sep-tab" data-toggle="tab" href="#nav-sep" role="tab" aria- controls="nav-sep" aria-selected="false">Sep.</a>

                                <a class="nav-item nav-link" id="nav-oct-tab" data-toggle="tab" href="#nav-oct" role="tab" aria- controls="nav-oct" aria-selected="false">Oct.</a>

                                <a class="nav-item nav-link" id="nav-nov-tab" data-toggle="tab" href="#nav-nov" role="tab" aria- controls="nav-nov" aria-selected="false">Nov.</a>

                                <a class="nav-item nav-link" id="nav-dec-tab" data-toggle="tab" href="#nav-dec" role="tab" aria- controls="nav-dec" aria-selected="false">Dec.</a>

                                <a class="nav-item nav-link" id="nav-total-tab" data-toggle="tab" href="#nav-total" role="tab" aria- controls="nav-total" aria-selected="false">All</a>



                            </div>
                        </nav>

                        <!--################### Start January ####################################################################################-->



                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-jan" role="tabpanel" aria-labelledby="nav-jan-tab">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="month-title">
                                            Present Dates
                                        </div>
                                        <div class="monthly-dates text-light">


                                            <!--php code for january-->

                                            <?php                        
                                include 'db/db.php';
                                $userId = $_GET['uid'];
                                    if ($userId) {
                                        $id = $userId;
                                    }else{
                                        echo "<script>alert('ERROR!!! While Data Fetching')</script>";
                                        echo "<script>window.location.href='employee.php'</script>";
                                    }

                                    $query = "SELECT date FROM attendance where date BETWEEN '01/01/2020' and '31/01/2020' and employee_id = '".$id."' and attendance = 'Present'";
                                    $result = mysqli_query($con,$query);

                                    if ($result) {
                                        while($row = mysqli_fetch_assoc($result)){
                                    $jdate = $row['date'];
                                            
                                            
                                            
                                            echo '
                                            
                                            <div class="each-date">
                                                '.$jdate.'
                                            </div>
                                            
                                            ';
                                      
                                        }
                                        
                                    }else{
                                        echo "Fetch Error";
                                    }


                                ?>

                                            <!--php code for january-->


                                            
                            

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="month-title">
                                            Absent Dates
                                        </div>
                                        <div class="monthly-dates text-light">
                                            <!--php code for january-->

                                            <?php                        
                                include 'db/db.php';
                                $userId = $_GET['uid'];
                                    if ($userId) {
                                        $id = $userId;
                                    }else{
                                        echo "<script>alert('ERROR!!! While Data Fetching')</script>";
                                        echo "<script>window.location.href='employee.php'</script>";
                                    }

                                    $query = "SELECT date FROM attendance where date BETWEEN '01/01/2020' and '31/01/2020' and employee_id = '".$id."' and attendance = 'Absent'";
                                    $result = mysqli_query($con,$query);

                                    if ($result) {
                                        while($row = mysqli_fetch_assoc($result)){
                                    $jdate = $row['date'];
                                            
                                            
                                            
                                            echo '
                                            
                                            <div class="each-date">
                                                '.$jdate.'
                                            </div>
                                            
                                            ';
                                      
                                        }
                                        
                                    }else{
                                        echo "Fetch Error";
                                    }


                                ?>

                                            <!--php code for january-->


                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="month-title">
                                            Leaves Dates
                                        </div>
                                        <div class="monthly-dates text-light">
                                            <!--php code for january-->

                                            <?php                        
                                include 'db/db.php';
                                $userId = $_GET['uid'];
                                    if ($userId) {
                                        $id = $userId;
                                    }else{
                                        echo "<script>alert('ERROR!!! While Data Fetching')</script>";
                                        echo "<script>window.location.href='employee.php'</script>";
                                    }

                                    $query = "SELECT date FROM attendance where date BETWEEN '01/01/2020' and '31/01/2020' and employee_id = '".$id."' and attendance = 'Leave'";
                                    $result = mysqli_query($con,$query);

                                    if ($result) {
                                        while($row = mysqli_fetch_assoc($result)){
                                    $jdate = $row['date'];
                                            
                                            
                                            
                                            echo '
                                            
                                            <div class="each-date">
                                                '.$jdate.'
                                            </div>
                                            
                                            ';
                                      
                                        }
                                        
                                    }else{
                                        echo "Fetch Error";
                                    }


                                ?>

                                            <!--php code for january-->


                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="monthly-value text-light text-center">
                                            <?php

                    $query = "SELECT count(date) as totalemp FROM attendance where date BETWEEN '01/01/2020' and '31/01/2020' and employee_id = '".$id."' and attendance = 'Present'"; 
                    $result = mysqli_query($con,$query); 
                    $values = mysqli_fetch_assoc($result); 
                    $totalemp = $values['totalemp']; 
                    echo $totalemp;
                    
                    ?> 
                                      Days
                                       
                                       
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="monthly-value text-light text-center">
                                             <?php

                    $query = "SELECT count(date) as totalemp FROM attendance where date BETWEEN '01/01/2020' and '31/01/2020' and employee_id = '".$id."' and attendance = 'Absent'"; 
                    $result = mysqli_query($con,$query); 
                    $values = mysqli_fetch_assoc($result); 
                    $totalemp = $values['totalemp']; 
                    echo $totalemp;
                    
                    ?> 
                                      Days
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="monthly-value text-light text-center">
                                            <?php

                    $query = "SELECT count(date) as totalemp FROM attendance where date BETWEEN '01/01/2020' and '31/01/2020' and employee_id = '".$id."' and attendance = 'Leave'"; 
                    $result = mysqli_query($con,$query); 
                    $values = mysqli_fetch_assoc($result); 
                    $totalemp = $values['totalemp']; 
                    echo $totalemp;
                    
                    ?> 
                                      Days
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--############################################## End January #################################################### -->

                            <!--############################################## Start February #################################################-->

                            <div class="tab-pane fade" id="nav-feb" role="tabpanel" aria-labelledby="nav-feb-tab">

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="month-title">
                                            Present Dates
                                        </div>
                                        <div class="monthly-dates text-light">


                                            <!--php code for january-->

                                            <?php                        
                                include 'db/db.php';
                                $userId = $_GET['uid'];
                                    if ($userId) {
                                        $id = $userId;
                                    }else{
                                        echo "<script>alert('ERROR!!! While Data Fetching')</script>";
                                        echo "<script>window.location.href='employee.php'</script>";
                                    }

                                    $query = "SELECT date FROM attendance where date BETWEEN '01/02/2020' and '29/02/2020' and employee_id = '".$id."' and attendance = 'Present'";
                                    $result = mysqli_query($con,$query);

                                    if ($result) {
                                        while($row = mysqli_fetch_assoc($result)){
                                    $date = $row['date'];
                                            
                                            
                                            
                                            echo '
                                            
                                            <div class="each-date">
                                                '.$date.'
                                            </div>
                                            
                                            ';
                                      
                                        }
                                        
                                    }else{
                                        echo "Fetch Error";
                                    }


                                ?>

                                            <!--php code for january-->


                                            
                            

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="month-title">
                                            Absent Dates
                                        </div>
                                        <div class="monthly-dates text-light">
                                            <!--php code for january-->

                                            <?php                        
                                include 'db/db.php';
                                $userId = $_GET['uid'];
                                    if ($userId) {
                                        $id = $userId;
                                    }else{
                                        echo "<script>alert('ERROR!!! While Data Fetching')</script>";
                                        echo "<script>window.location.href='employee.php'</script>";
                                    }

                                    $query = "SELECT date FROM attendance where date BETWEEN '01/02/2020' and '29/02/2020' and employee_id = '".$id."' and attendance = 'Absent'";
                                    $result = mysqli_query($con,$query);

                                    if ($result) {
                                        while($row = mysqli_fetch_assoc($result)){
                                    $date = $row['date'];
                                            
                                            
                                            
                                            echo '
                                            
                                            <div class="each-date">
                                                '.$date.'
                                            </div>
                                            
                                            ';
                                      
                                        }
                                        
                                    }else{
                                        echo "Fetch Error";
                                    }


                                ?>

                                            <!--php code for january-->


                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="month-title">
                                            Leaves Dates
                                        </div>
                                        <div class="monthly-dates text-light">
                                            <!--php code for january-->

                                            <?php                        
                                include 'db/db.php';
                                $userId = $_GET['uid'];
                                    if ($userId) {
                                        $id = $userId;
                                    }else{
                                        echo "<script>alert('ERROR!!! While Data Fetching')</script>";
                                        echo "<script>window.location.href='employee.php'</script>";
                                    }

                                    $query = "SELECT date FROM attendance where date BETWEEN '01/02/2020' and '29/02/2020' and employee_id = '".$id."' and attendance = 'Leave'";
                                    $result = mysqli_query($con,$query);

                                    if ($result) {
                                        while($row = mysqli_fetch_assoc($result)){
                                    $date = $row['date'];
                                            
                                            
                                            
                                            echo '
                                            
                                            <div class="each-date">
                                                '.$date.'
                                            </div>
                                            
                                            ';
                                      
                                        }
                                        
                                    }else{
                                        echo "Fetch Error";
                                    }


                                ?>

                                            <!--php code for january-->


                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="monthly-value text-light text-center">
                                            <?php

                    $query = "SELECT count(date) as totalemp FROM attendance where date BETWEEN '01/02/2020' and '29/02/2020' and employee_id = '".$id."' and attendance = 'Present'"; 
                    $result = mysqli_query($con,$query); 
                    $values = mysqli_fetch_assoc($result); 
                    $totalemp = $values['totalemp']; 
                    echo $totalemp;
                    
                    ?> 
                                      Days
                                       
                                       
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="monthly-value text-light text-center">
                                             <?php

                    $query = "SELECT count(date) as totalemp FROM attendance where date BETWEEN '01/02/2020' and '29/02/2020' and employee_id = '".$id."' and attendance = 'Absent'"; 
                    $result = mysqli_query($con,$query); 
                    $values = mysqli_fetch_assoc($result); 
                    $totalemp = $values['totalemp']; 
                    echo $totalemp;
                    
                    ?> 
                                      Days
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="monthly-value text-light text-center">
                                            <?php

                    $query = "SELECT count(date) as totalemp FROM attendance where date BETWEEN '01/02/2020' and '29/02/2020' and employee_id = '".$id."' and attendance = 'Leave'"; 
                    $result = mysqli_query($con,$query); 
                    $values = mysqli_fetch_assoc($result); 
                    $totalemp = $values['totalemp']; 
                    echo $totalemp;
                    
                    ?> 
                                      Days
                                        </div>
                                    </div>
                                </div>




                            </div>

                            <!--############################################### End February ######################################################-->

                            <div class="tab-pane fade" id="nav-mar" role="tabpanel" aria-labelledby="nav-mar-tab">
                                <!--########################## Start March #########################-->
                                
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="month-title">
                                            Present Dates
                                        </div>
                                        <div class="monthly-dates text-light">


                                            <!--php code for january-->

                                            <?php                        
                                include 'db/db.php';
                                $userId = $_GET['uid'];
                                    if ($userId) {
                                        $id = $userId;
                                    }else{
                                        echo "<script>alert('ERROR!!! While Data Fetching')</script>";
                                        echo "<script>window.location.href='employee.php'</script>";
                                    }

                                    $query = "SELECT date FROM attendance where date BETWEEN '01/03/2020' and '31/03/2020' and employee_id = '".$id."' and attendance = 'Present'";
                                    $result = mysqli_query($con,$query);

                                    if ($result) {
                                        while($row = mysqli_fetch_assoc($result)){
                                    $date = $row['date'];
                                            
                                            
                                            
                                            echo '
                                            
                                            <div class="each-date">
                                                '.$date.'
                                            </div>
                                            
                                            ';
                                      
                                        }
                                        
                                    }else{
                                        echo "Fetch Error";
                                    }


                                ?>

                                            <!--php code for january-->


                                            
                            

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="month-title">
                                            Absent Dates
                                        </div>
                                        <div class="monthly-dates text-light">
                                            <!--php code for january-->

                                            <?php                        
                                include 'db/db.php';
                                $userId = $_GET['uid'];
                                    if ($userId) {
                                        $id = $userId;
                                    }else{
                                        echo "<script>alert('ERROR!!! While Data Fetching')</script>";
                                        echo "<script>window.location.href='employee.php'</script>";
                                    }

                                    $query = "SELECT date FROM attendance where date BETWEEN '01/03/2020' and '31/03/2020' and employee_id = '".$id."' and attendance = 'Absent'";
                                    $result = mysqli_query($con,$query);

                                    if ($result) {
                                        while($row = mysqli_fetch_assoc($result)){
                                    $date = $row['date'];
                                            
                                            
                                            
                                            echo '
                                            
                                            <div class="each-date">
                                                '.$date.'
                                            </div>
                                            
                                            ';
                                      
                                        }
                                        
                                    }else{
                                        echo "Fetch Error";
                                    }


                                ?>

                                            <!--php code for january-->


                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="month-title">
                                            Leaves Dates
                                        </div>
                                        <div class="monthly-dates text-light">
                                            <!--php code for january-->

                                            <?php                        
                                include 'db/db.php';
                                $userId = $_GET['uid'];
                                    if ($userId) {
                                        $id = $userId;
                                    }else{
                                        echo "<script>alert('ERROR!!! While Data Fetching')</script>";
                                        echo "<script>window.location.href='employee.php'</script>";
                                    }

                                    $query = "SELECT date FROM attendance where date BETWEEN '01/03/2020' and '31/03/2020' and employee_id = '".$id."' and attendance = 'Leave'";
                                    $result = mysqli_query($con,$query);

                                    if ($result) {
                                        while($row = mysqli_fetch_assoc($result)){
                                    $date = $row['date'];
                                            
                                            
                                            
                                            echo '
                                            
                                            <div class="each-date">
                                                '.$date.'
                                            </div>
                                            
                                            ';
                                      
                                        }
                                        
                                    }else{
                                        echo "Fetch Error";
                                    }


                                ?>

                                            <!--php code for january-->


                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="monthly-value text-light text-center">
                                            <?php

                    $query = "SELECT count(date) as totalemp FROM attendance where date BETWEEN '01/03/2020' and '31/03/2020' and employee_id = '".$id."' and attendance = 'Present'"; 
                    $result = mysqli_query($con,$query); 
                    $values = mysqli_fetch_assoc($result); 
                    $totalemp = $values['totalemp']; 
                    echo $totalemp;
                    
                    ?> 
                                      Days
                                       
                                       
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="monthly-value text-light text-center">
                                             <?php

                    $query = "SELECT count(date) as totalemp FROM attendance where date BETWEEN '01/03/2020' and '31/03/2020' and employee_id = '".$id."' and attendance = 'Absent'"; 
                    $result = mysqli_query($con,$query); 
                    $values = mysqli_fetch_assoc($result); 
                    $totalemp = $values['totalemp']; 
                    echo $totalemp;
                    
                    ?> 
                                      Days
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="monthly-value text-light text-center">
                                            <?php

                    $query = "SELECT count(date) as totalemp FROM attendance where date BETWEEN '01/03/2020' and '31/03/2020' and employee_id = '".$id."' and attendance = 'Leave'"; 
                    $result = mysqli_query($con,$query); 
                    $values = mysqli_fetch_assoc($result); 
                    $totalemp = $values['totalemp']; 
                    echo $totalemp;
                    
                    ?> 
                                      Days
                                        </div>
                                    </div>
                                </div>
                                
                                <!--########################## End March #########################-->
                            </div>

                            <div class="tab-pane fade" id="nav-apr" role="tabpanel" aria-labelledby="nav-apr-tab">
                                <!--############################## Start April ################################-->
                                
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="month-title">
                                            Present Dates
                                        </div>
                                        <div class="monthly-dates text-light">


                                            <!--php code for january-->

                                            <?php                        
                                include 'db/db.php';
                                $userId = $_GET['uid'];
                                    if ($userId) {
                                        $id = $userId;
                                    }else{
                                        echo "<script>alert('ERROR!!! While Data Fetching')</script>";
                                        echo "<script>window.location.href='employee.php'</script>";
                                    }

                                    $query = "SELECT date FROM attendance where date BETWEEN '01/04/2020' and '30/04/2020' and employee_id = '".$id."' and attendance = 'Present'";
                                    $result = mysqli_query($con,$query);

                                    if ($result) {
                                        while($row = mysqli_fetch_assoc($result)){
                                    $date = $row['date'];
                                            
                                            
                                            
                                            echo '
                                            
                                            <div class="each-date">
                                                '.$date.'
                                            </div>
                                            
                                            ';
                                      
                                        }
                                        
                                    }else{
                                        echo "Fetch Error";
                                    }


                                ?>

                                            <!--php code for january-->


                                            
                            

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="month-title">
                                            Absent Dates
                                        </div>
                                        <div class="monthly-dates text-light">
                                            <!--php code for january-->

                                            <?php                        
                                include 'db/db.php';
                                $userId = $_GET['uid'];
                                    if ($userId) {
                                        $id = $userId;
                                    }else{
                                        echo "<script>alert('ERROR!!! While Data Fetching')</script>";
                                        echo "<script>window.location.href='employee.php'</script>";
                                    }

                                    $query = "SELECT date FROM attendance where date BETWEEN '01/04/2020' and '30/04/2020' and employee_id = '".$id."' and attendance = 'Absent'";
                                    $result = mysqli_query($con,$query);

                                    if ($result) {
                                        while($row = mysqli_fetch_assoc($result)){
                                    $date = $row['date'];
                                            
                                            
                                            
                                            echo '
                                            
                                            <div class="each-date">
                                                '.$date.'
                                            </div>
                                            
                                            ';
                                      
                                        }
                                        
                                    }else{
                                        echo "Fetch Error";
                                    }


                                ?>

                                            <!--php code for january-->


                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="month-title">
                                            Leaves Dates
                                        </div>
                                        <div class="monthly-dates text-light">
                                            <!--php code for january-->

                                            <?php                        
                                include 'db/db.php';
                                $userId = $_GET['uid'];
                                    if ($userId) {
                                        $id = $userId;
                                    }else{
                                        echo "<script>alert('ERROR!!! While Data Fetching')</script>";
                                        echo "<script>window.location.href='employee.php'</script>";
                                    }

                                    $query = "SELECT date FROM attendance where date BETWEEN '01/04/2020' and '30/04/2020' and employee_id = '".$id."' and attendance = 'Leave'";
                                    $result = mysqli_query($con,$query);

                                    if ($result) {
                                        while($row = mysqli_fetch_assoc($result)){
                                    $date = $row['date'];
                                            
                                            
                                            
                                            echo '
                                            
                                            <div class="each-date">
                                                '.$date.'
                                            </div>
                                            
                                            ';
                                      
                                        }
                                        
                                    }else{
                                        echo "Fetch Error";
                                    }


                                ?>

                                            <!--php code for january-->


                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="monthly-value text-light text-center">
                                            <?php

                    $query = "SELECT count(date) as totalemp FROM attendance where date BETWEEN '01/04/2020' and '30/04/2020' and employee_id = '".$id."' and attendance = 'Present'"; 
                    $result = mysqli_query($con,$query); 
                    $values = mysqli_fetch_assoc($result); 
                    $totalemp = $values['totalemp']; 
                    echo $totalemp;
                    
                    ?> 
                                      Days
                                       
                                       
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="monthly-value text-light text-center">
                                             <?php

                    $query = "SELECT count(date) as totalemp FROM attendance where date BETWEEN '01/04/2020' and '30/04/2020' and employee_id = '".$id."' and attendance = 'Absent'"; 
                    $result = mysqli_query($con,$query); 
                    $values = mysqli_fetch_assoc($result); 
                    $totalemp = $values['totalemp']; 
                    echo $totalemp;
                    
                    ?> 
                                      Days
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="monthly-value text-light text-center">
                                            <?php

                    $query = "SELECT count(date) as totalemp FROM attendance where date BETWEEN '01/04/2020' and '30/04/2020' and employee_id = '".$id."' and attendance = 'Leave'"; 
                    $result = mysqli_query($con,$query); 
                    $values = mysqli_fetch_assoc($result); 
                    $totalemp = $values['totalemp']; 
                    echo $totalemp;
                    
                    ?> 
                                      Days
                                        </div>
                                    </div>
                                </div>
                                
                                <!--############################## End April ################################-->
                            </div>

                            <div class="tab-pane fade" id="nav-may" role="tabpanel" aria-labelledby="nav-may-tab">
                                
                                <!--###################################### Start May #############################################-->
                                
                                
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="month-title">
                                            Present Dates
                                        </div>
                                        <div class="monthly-dates text-light">


                                            <!--php code for january-->

                                            <?php                        
                                include 'db/db.php';
                                $userId = $_GET['uid'];
                                    if ($userId) {
                                        $id = $userId;
                                    }else{
                                        echo "<script>alert('ERROR!!! While Data Fetching')</script>";
                                        echo "<script>window.location.href='employee.php'</script>";
                                    }

                                    $query = "SELECT date FROM attendance where date BETWEEN '01/03/2020' and '30/03/2020' and employee_id = '".$id."' and attendance = 'Present'";
                                    $result = mysqli_query($con,$query);

                                    if ($result) {
                                        while($row = mysqli_fetch_assoc($result)){
                                    $date = $row['date'];
                                            
                                            
                                            
                                            echo '
                                            
                                            <div class="each-date">
                                                '.$date.'
                                            </div>
                                            
                                            ';
                                      
                                        }
                                        
                                    }else{
                                        echo "Fetch Error";
                                    }


                                ?>

                                            <!--php code for january-->


                                            
                            

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="month-title">
                                            Absent Dates
                                        </div>
                                        <div class="monthly-dates text-light">
                                            <!--php code for january-->

                                            <?php                        
                                include 'db/db.php';
                                $userId = $_GET['uid'];
                                    if ($userId) {
                                        $id = $userId;
                                    }else{
                                        echo "<script>alert('ERROR!!! While Data Fetching')</script>";
                                        echo "<script>window.location.href='employee.php'</script>";
                                    }

                                    $query = "SELECT date FROM attendance where date BETWEEN '01/03/2020' and '30/03/2020' and employee_id = '".$id."' and attendance = 'Absent'";
                                    $result = mysqli_query($con,$query);

                                    if ($result) {
                                        while($row = mysqli_fetch_assoc($result)){
                                    $date = $row['date'];
                                            
                                            
                                            
                                            echo '
                                            
                                            <div class="each-date">
                                                '.$date.'
                                            </div>
                                            
                                            ';
                                      
                                        }
                                        
                                    }else{
                                        echo "Fetch Error";
                                    }


                                ?>

                                            <!--php code for january-->


                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="month-title">
                                            Leaves Dates
                                        </div>
                                        <div class="monthly-dates text-light">
                                            <!--php code for january-->

                                            <?php                        
                                include 'db/db.php';
                                $userId = $_GET['uid'];
                                    if ($userId) {
                                        $id = $userId;
                                    }else{
                                        echo "<script>alert('ERROR!!! While Data Fetching')</script>";
                                        echo "<script>window.location.href='employee.php'</script>";
                                    }

                                    $query = "SELECT date FROM attendance where date BETWEEN '01/03/2020' and '30/03/2020' and employee_id = '".$id."' and attendance = 'Leave'";
                                    $result = mysqli_query($con,$query);

                                    if ($result) {
                                        while($row = mysqli_fetch_assoc($result)){
                                    $date = $row['date'];
                                            
                                            
                                            
                                            echo '
                                            
                                            <div class="each-date">
                                                '.$date.'
                                            </div>
                                            
                                            ';
                                      
                                        }
                                        
                                    }else{
                                        echo "Fetch Error";
                                    }


                                ?>

                                            <!--php code for january-->


                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="monthly-value text-light text-center">
                                            <?php

                    $query = "SELECT count(date) as totalemp FROM attendance where date BETWEEN '01/03/2020' and '30/03/2020' and employee_id = '".$id."' and attendance = 'Present'"; 
                    $result = mysqli_query($con,$query); 
                    $values = mysqli_fetch_assoc($result); 
                    $totalemp = $values['totalemp']; 
                    echo $totalemp;
                    
                    ?> 
                                      Days
                                       
                                       
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="monthly-value text-light text-center">
                                             <?php

                    $query = "SELECT count(date) as totalemp FROM attendance where date BETWEEN '01/03/2020' and '30/03/2020' and employee_id = '".$id."' and attendance = 'Absent'"; 
                    $result = mysqli_query($con,$query); 
                    $values = mysqli_fetch_assoc($result); 
                    $totalemp = $values['totalemp']; 
                    echo $totalemp;
                    
                    ?> 
                                      Days
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="monthly-value text-light text-center">
                                            <?php

                    $query = "SELECT count(date) as totalemp FROM attendance where date BETWEEN '01/03/2020' and '30/03/2020' and employee_id = '".$id."' and attendance = 'Leave'"; 
                    $result = mysqli_query($con,$query); 
                    $values = mysqli_fetch_assoc($result); 
                    $totalemp = $values['totalemp']; 
                    echo $totalemp;
                    
                    ?> 
                                      Days
                                        </div>
                                    </div>
                                </div>
                                
                                <!--###################################### End May #############################################-->
                                
                            </div>

                            

                            <div class="tab-pane fade" id="nav-jun" role="tabpanel" aria-labelledby="nav-jun-tab">...</div>

                            <div class="tab-pane fade" id="nav-jul" role="tabpanel" aria-labelledby="nav-jul-tab">...</div>

                            <div class="tab-pane fade" id="nav-aug" role="tabpanel" aria-labelledby="nav-aug-tab">...</div>

                            <div class="tab-pane fade" id="nav-sep" role="tabpanel" aria-labelledby="nav-sep-tab">...</div>

                            <div class="tab-pane fade" id="nav-oct" role="tabpanel" aria-labelledby="nav-oct-tab">...</div>

                            <div class="tab-pane fade" id="nav-nov" role="tabpanel" aria-labelledby="nav-nov-tab">...</div>

                            <div class="tab-pane fade" id="nav-dec" role="tabpanel" aria-labelledby="nav-dec-tab">...</div>

                            <div class="tab-pane fade" id="nav-total" role="tabpanel" aria-labelledby="nav-total-tab">...</div>

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
