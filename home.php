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
                    <h2 class="text-uppercase text-light text-center pt-1">employee list</h2>
                    <table class="table text-light mt-3">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Emp-ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Designation</th>
                                <th scope="col">Superviser</th>
                                <th scope="col">Details</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Emp-101</td>
                                <td>Sayem Basar</td>
                                <td>Jr. Software Engineer</td>
                                <td>Pranto Kumer</td>
                                <td><a type="button" class="btn btn-info" href="users_details.php?uid=<?php echo $id; ?>" target="_blank">Details</a></td>
                                <td>
                                    <a href="#" class="pl-1"><img src="images/edit.png" alt="" height="30px" width="30px" onclick="return confirm('Are you sure you want to edit this user?');"></a>

                                    <a href="#"><img src="images/delete.png" alt="" height="30px" width="30px" onclick="return confirm('Are you sure you want to delete this user?');"></a>

                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Emp-102</td>
                                <td>Atik Mahmud</td>
                                <td>Jr. Software Engineer</td>
                                <td>Pranto Kumer</td>
                                <td><a type="button" class="btn btn-info" href="users_details.php?uid=<?php echo $id; ?>" target="_blank">Details</a></td>
                                <td>
                                    <a href="#" class="pl-1"><img src="images/edit.png" alt="" height="30px" width="30px" onclick="return confirm('Are you sure you want to edit this user?');"></a>

                                    <a href="#"><img src="images/delete.png" alt="" height="30px" width="30px" onclick="return confirm('Are you sure you want to delete this user?');"></a>

                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Emp-103</td>
                                <td>Amit Kumer</td>
                                <td>Jr. Software Engineer</td>
                                <td>Pranto Kumer</td>
                                <td><a type="button" class="btn btn-info" href="users_details.php?uid=<?php echo $id; ?>" target="_blank">Details</a></td>
                                <td>
                                    <a href="#" class="pl-1"><img src="images/edit.png" alt="" height="30px" width="30px" onclick="return confirm('Are you sure you want to edit this user?');"></a>

                                    <a href="#"><img src="images/delete.png" alt="" height="30px" width="30px" onclick="return confirm('Are you sure you want to delete this user?');"></a>

                                </td>
                            </tr>


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

