<?php include 'inc/check_session.php'; ?>
<?php include 'inc/fetch_user.php'; ?>
<?php
    if (!isset($_SESSION['id'])) {
		header("location: index.php");
	}
?>

<?php  
    if (isset($_GET['ref'])) {
        if ($_GET['ref'] == 'index') {
            $title = "IOTMDCP | Login";
        }elseif ($_GET['ref'] == 'dashboard') {
            $title = "IOTMDCP | Dashboard";
        }elseif ($_GET['ref'] == 'attendance') {
            $title = "IOTMDCP | Search Attendance";
        }elseif ($_GET['ref'] == 'Notification') {
            $title = "Notification";
        }elseif ($_GET['ref'] == 'user-profile') {
            $title = "IOTMDCP | Profile";
        }elseif ($_GET['ref'] == 'employee') {
            $title = "IOTMDCP | Employee List";
        }elseif ($_GET['ref'] == 'add-employee') {
            $title = "IOTMDCP | Add Employee";
        }else{
            $title = "IOTMDCP | Attendance";
        }

    }else{
        $title = "IOTMDCP | Attendance";
    }
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/all.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Title Icon -->
    <link rel="icon" type="image/png" href="images/icons/img.ico" />

    <script src="js/sweet-alert.js"></script>

    <title><?php echo $title ?></title>

    <script>
var d = new Date(<?php echo time() * 1000 ?>);

function updateClock() {
  // Increment the date
  d.setTime(d.getTime() + 1000);

  // Translate time to pieces
  var currentHours = d.getHours();
  var currentMinutes = d.getMinutes();
  var currentSeconds = d.getSeconds();

  // Add the beginning zero to minutes and seconds if needed
  currentMinutes = (currentMinutes < 10 ? "0" : "") + currentMinutes;
  currentSeconds = (currentSeconds < 10 ? "0" : "") + currentSeconds;

  // Determine the meridian
  var meridian = (currentHours < 12) ? "am" : "pm";

  // Convert the hours out of 24-hour time
  currentHours = (currentHours > 12) ? currentHours - 12 : currentHours;
  currentHours = (currentHours == 0) ? 12 : currentHours;

  // Generate the display string
  var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + meridian;

  // Update the time
  document.getElementById("clock").firstChild.nodeValue = currentTimeString;
}

window.onload = function() {
  updateClock();
  setInterval('updateClock()', 1000);
}
</script>

</head>
