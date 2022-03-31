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
                    <h4 class="text-uppercase text-light text-center mt-3 mb-3">dashboard</h4>
                    <div class="show-box">
                        <div class="row">

                            <div class="col-md-3">
                                <div class="single-tabs">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <i class="fas fa-users all-users"></i>
                                        </div>

                                        <div class="col-md-6">

                                            <?php

                    $query = "SELECT COUNT(id) AS totalemp FROM employee"; 
                    $result = mysqli_query($con,$query); 
                    $values = mysqli_fetch_assoc($result); 
                    $totalemp = $values['totalemp']; 
                    
                    ?>

                                            <p>
                                                <span class="emp-per">+06.2%</span>
                                                <span><?php echo $totalemp; ?></span>
                                            </p>
                                            <p class="all-margin-bottom">Employees</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--Single tabs end-->
                            <div class="col-md-3">
                                <div class="single-tabs">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <i class="fas fa-user-check all-users"></i>
                                        </div>

                                        <div class="col-md-6">

                                            <?php

                    $query = "SELECT COUNT(id) AS preemp FROM attendance where date = '".date('d/m/Y')."' and attendance = 'Present' "; 
                    $result = mysqli_query($con,$query); 
                    $values = mysqli_fetch_assoc($result); 
                    $preemp = $values['preemp']; 
                    
                    ?>

                                            <p>
                                                <span class="emp-per">+06.2%</span>
                                                <span><?php echo $preemp; ?></span>
                                            </p>
                                            <p class="all-margin-bottom">Present</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--Single tabs end-->
                            <div class="col-md-3">
                                <div class="single-tabs">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <i class="fas fa-user-times all-users"></i>
                                        </div>

                                        <div class="col-md-6">

                                            <?php

                    $query = "SELECT COUNT(id) AS absemp FROM attendance where date = '".date('d/m/Y')."' and attendance = 'Absent' "; 
                    $result = mysqli_query($con,$query); 
                    $values = mysqli_fetch_assoc($result); 
                    $absemp = $values['absemp']; 
                    
                    ?>

                                            <p>
                                                <span class="emp-per">+06.2%</span>
                                                <span><?php echo $absemp; ?></span>
                                            </p>
                                            <p class="all-margin-bottom">Absent</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--Single tabs end-->
                            <div class="col-md-3">
                                <div class="single-tabs">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <i class="fas fa-user-shield all-users"></i>
                                        </div>

                                        <div class="col-md-6">
                                            <?php

                    $query = "SELECT COUNT(id) AS total FROM users"; 
                    $result = mysqli_query($con,$query); 
                    $values = mysqli_fetch_assoc($result); 
                    $num_rows = $values['total']; 
                    
                    ?>

                                            <p>
                                                <span class="emp-per">+06.2%</span>
                                                <span><?php echo $num_rows; ?></span>
                                            </p>
                                            <p class="all-margin-bottom">Users</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--Single tabs end-->


                        </div>
                    </div>

                    <!-- Start Calender PHP Code -->

                    <?php
                        // Set your timezone
                        date_default_timezone_set('Asia/Dhaka');

                        // Get prev & next month
                        if (isset($_GET['ym'])) {
                            $ym = $_GET['ym'];
                        } else {
                            // This month
                            $ym = date('Y-m');
                        }

                        // Check format
                        $timestamp = strtotime($ym . '-01');
                        if ($timestamp === false) {
                            $ym = date('Y-m');
                            $timestamp = strtotime($ym . '-01');
                        }

                        // Today
                        $today = date('Y-m-j', time());

                        // For H3 title
                        $html_title = date('Y / m', $timestamp);

                        // Create prev & next month link     mktime(hour,minute,second,month,day,year)
                        $prev = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)-1, 1, date('Y', $timestamp)));
                        $next = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)+1, 1, date('Y', $timestamp)));
                        // You can also use strtotime!
                        // $prev = date('Y-m', strtotime('-1 month', $timestamp));
                        // $next = date('Y-m', strtotime('+1 month', $timestamp));

                        // Number of days in the month
                        $day_count = date('t', $timestamp);

                        // 0:Sun 1:Mon 2:Tue ...
                        $str = date('w', mktime(0, 0, 0, date('m', $timestamp), 1, date('Y', $timestamp)));
                        //$str = date('w', $timestamp);


                        // Create Calendar!!
                        $weeks = array();
                        $week = '';

                        // Add empty cell
                        $week .= str_repeat('<td></td>', $str);

                        for ( $day = 1; $day <= $day_count; $day++, $str++) {

                            $date = $ym . '-' . $day;

                            if ($today == $date) {
                                $week .= '<td class="today">' . $day;
                            } else {
                                $week .= '<td>' . $day;
                            }
                            $week .= '</td>';

                            // End of the week OR End of the month
                            if ($str % 7 == 6 || $day == $day_count) {

                                if ($day == $day_count) {
                                    // Add empty cell
                                    $week .= str_repeat('<td></td>', 6 - ($str % 7));
                                }

                                $weeks[] = '<tr>' . $week . '</tr>';

                                // Prepare for new week
                                $week = '';
                            }

                        }
                        ?>

                    <!-- End Calender PHP Code -->

                    <div class="calender">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="calender-prog">
                                    <p class="text-light text-center"><?php echo $html_title; ?></p>
                                    
                                    
                                    <!--<p class="text-light text-center"><a href="?ym=<?php echo $prev; ?>">&lt;</a> <?php echo $html_title; ?> <a href="?ym=<?php echo $next; ?>">&gt;</a></p>-->
                                    
                                    
                                    <div class="calender-table">
                                        <table class="table table-bordered text-light cal-tbl">

                                            <tr>
                                                <th class="cal-th">S</th>
                                                <th class="cal-th">M</th>
                                                <th class="cal-th">T</th>
                                                <th class="cal-th">W</th>
                                                <th class="cal-th">T</th>
                                                <th class="cal-th">F</th>
                                                <th class="cal-th">S</th>
                                            </tr>

                                            <tr>
                                                <?php
                                                    foreach ($weeks as $week) {
                                                        echo $week;
                                                    }
                                                ?>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--End Calender Section-->

                            <div class="col-md-4">
                                <div class="calender-prog">
                                    <p class="text-center">Attendance Progress</p>

                                    <?php 
                                    
                                    if($totalemp == $preemp){
                                    
                                    
                                    echo '<div class="progress green mt-5">
                                        <span class="progress-left">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <span class="progress-right">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <div class="progress-value">100%</div>
                                    </div>';
                                        
                                    }
                                    
                                    else{
                                    
                                    
                                    echo '<div class="progress red mt-5">
                                        <span class="progress-left">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <span class="progress-right">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <div class="progress-value">75%</div>
                                    </div>';
                                    

                                    }
                                    
                                    ?> 


                                    <div id="clock">&nbsp;</div>

                                </div>
                            </div>
                            <!--End Calender Section-->

                            <div class="col-md-4 prog">
                                <div class="calender-prog">
                                    <div class="emp-progress-bar text">
                                        <p class="text-center">Attendance</p>
                                        <div class="emp-prog">
                                            <!--Status Php Code -->

                                            <?php                        
                                        $query = "SELECT image,first_name,last_name,attendance.employee_id as em_id,attendance FROM employee LEFT JOIN attendance ON employee.employee_id = attendance.employee_id where date = '".date('d/m/Y')."' and attendance = 'Present' ";
                                        
                                        $result = mysqli_query($con,$query);

                                        if ($result) {
                                            while($row = mysqli_fetch_assoc($result)){
                                                $image         = $row['image'];
                                                $first_name    = $row['first_name'];
                                                $last_name     = $row['last_name'];
                                                $employee_id   = $row['em_id'];
                                                $attendance    = $row['attendance'];
                                                
                                        ?>

                                            <!--Status Php Code -->

                                            <!-- Start Emp Present Status -->

                                            <div class="row">
                                                <div class="col-md-1">
                                                    <?php
                                                    if (empty($image)) {
                                                    ?>
                                                    <img src="images/log.png" style="width:50px; height: 50px; border-radius:50%;" class="border border-info rounded-circle" />
                                                    <?php }else{ ?>
                                                    <img src="images2/uploads/<?php echo $image; ?>" style="width:50px; height: 50px; border-radius:50%;" />
                                                    <?php } ?>
                                                </div>
                                                <div class="col-md-5 mt-1 ml-5">
                                                    <p class="present-name"><?php echo $first_name ." ". $last_name; ?> <br> <span class="present-id"><?php echo $employee_id; ?></span></p>

                                                </div>

                                                <div class="col-md-4 mt-2">
                                                    <p class="present text-center"><?php echo $attendance;  ?></p>
                                                </div>

                                            </div>

                                            <?php }} ?>

                                            <!-- End Emp Present Status -->

                                            <!--Status Php Code -->

                                            <?php                        
                                        $query = "SELECT image,first_name,last_name,attendance.employee_id as em_id,attendance FROM employee LEFT JOIN attendance ON employee.employee_id = attendance.employee_id where date = '".date('d/m/Y')."' and attendance = 'Absent' ";
                                        
                                        $result = mysqli_query($con,$query);

                                        if ($result) {
                                            while($row = mysqli_fetch_assoc($result)){
                                                $image         = $row['image'];
                                                $first_name    = $row['first_name'];
                                                $last_name     = $row['last_name'];
                                                $employee_id   = $row['em_id'];
                                                $attendance    = $row['attendance'];
                                                
                                        ?>

                                            <!--Status Php Code -->

                                            <!-- Start Emp Present Status -->

                                            <div class="row">
                                                <div class="col-md-1">
                                                    <?php
                                                    if (empty($image)) {
                                                    ?>
                                                    <img src="images/log.png" style="width:50px; height: 50px; border-radius:50%;" class="border border-info rounded-circle" />
                                                    <?php }else{ ?>
                                                    <img src="images2/uploads/<?php echo $image; ?>" style="width:50px; height: 50px; border-radius:50%;" />
                                                    <?php } ?>
                                                </div>
                                                <div class="col-md-5 mt-1 ml-5">
                                                    <p class="present-name"><?php echo $first_name ." ". $last_name; ?> <br> <span class="present-id"><?php echo $employee_id; ?></span></p>

                                                </div>

                                                <div class="col-md-4 mt-2">
                                                    <p class="absent text-center"><?php echo $attendance;  ?></p>
                                                </div>

                                            </div>

                                            <?php }} ?>

                                            <!-- End Emp Present Status -->


                                        </div>
                                    </div>


                                </div>
                            </div>
                            <!--End Calender Section-->

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
