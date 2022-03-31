<?php

    if(isset($_SESSION['id']) ) {
       
        $get_user_id = $_SESSION['id'];
        $query = "SELECT * FROM users WHERE id='$get_user_id'";
        $result = mysqli_query($con,$query);

        while ($row=mysqli_fetch_array($result)) {
            $id              = $row['id'];
            $image           = $row['image'];
            $usersname       = $row['usersname'];
            $email           = $row['email'];
            $password        = $row['password'];
            $status          = $row['status'];
            
        }

    }
?>