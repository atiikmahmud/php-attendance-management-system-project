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

                        <form method="POST" class="text-light" action="search-attendance.php">
                            
                            <img src="images/log.png" style="width:150px; height: 150px;" class="text-center mb-2"> 

                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <div class="input-group">
                                        <select class="custom-select option" name="employee_id" id="inputGroupSelect01">
                                            <option selected>Emp-ID</option>


                                            <!-- id search php code -->

                                            <?php                        
                                            $query = "SELECT employee_id FROM employee";
                                            $result = mysqli_query($con,$query);

                                            if ($result) {
                                            while($row = mysqli_fetch_assoc($result)){
                                                $id            = $row['id'];
                                                $employee_id   = $row['employee_id'];
                                                
                                            ?>

                                            <!-- id search php code -->

                                            <option value="<?php echo $employee_id; ?>"><?php echo $employee_id; ?></option>
                                            
                                            <?php }} ?>

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group col-md-3">
                                    <div class="input-group">
                                        <select class="custom-select option" name="attendance" id="inputGroupSelect01">
                                            <option selected>Attendance</option>
                                            <option value="Present">Present</option>
                                            <option value="Absent">Absent</option>
                                            <option value="Leave">Leave</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control" name="fromdate" placeholder="From (01/03/2020)" autocomplete="off">
                                </div>

                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control" name="todate" placeholder="To (31/03/2020)" autocomplete="off">
                                </div>  

                            </div>

                            <button type="submit" class="btn btn-primary" name="search">Search</button>

                   
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
