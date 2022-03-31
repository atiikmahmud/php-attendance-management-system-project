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
                <h4 class="text-uppercase text-light text-center pt-3">employee list</h4>
                <table class="table text-light mt-3">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Image</th>
                            <th scope="col">Emp-ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Designation</th>
                            <th scope="col">Supervisor</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php                        
                    $query = "SELECT * FROM employee ORDER BY employee_id ASC";
                    $cnt=1;
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
                    ?>


                        <tr>
                            <td scope="row"><?php echo $cnt; ?></td>
                            <td>
                                <?php  
                                if (empty($image)) {                                     
                            ?>
                                <img src="images/log.png" style="width:50px; height: 50px; border-radius:50%;" class="border border-info rounded-circle" />
                                <?php }else{ ?>
                                <img src="images2/uploads/<?php echo $image; ?>" style="width:50px; height: 50px; border-radius:50%;" />
                                <?php } ?>
                            </td>
                            <td><a href="employee_details.php?uid=<?php echo $id; ?>" style="color:#F8F9FA; "><?php echo $employee_id; ?></a></td>
                            <td><?php echo $first_name ." ". $last_name; ?></td>
                            <td><?php echo $designation; ?></td>
                            <td><?php echo $supervisor; ?></td>
                            <td> 
                                <a href="attendance_details.php?uid=<?php echo $employee_id; ?>"><i class="far fa-calendar-alt"></i></a> 
                                
                                <a href="emp-attend.php?uid=<?php echo $id; ?>"><i class="fas fa-id-card-alt info"></i></a>                   
                                
                                <a href="employee_edit.php?uid=<?php echo $id; ?>" onclick="return confirm('Are you sure you want to edit this employee ?');"><i class="fas fa-user-edit edit"></i></a>
                                
                                <a href="employee_delete.php?uid=<?php echo $id; ?>" onclick="return confirm('Are you sure you want to delete this employee?');"><i class="fas fa-trash-alt delete"></i></a>
                            </td>
                        </tr>

                        <?php
                             $cnt=$cnt+1;
                                 }} ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- End In Body Area -->

<!-- footer Include -->
<?php  
    include 'inc/footer.php';
?>
