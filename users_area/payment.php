<?php
include("../Includes/connect.php");
include("../functions/common_function.php");
?>

<?php

$user_ip =getIPAddress();
$get_user = "SELECT * FROM user_table WHERE user_ip='$user_ip'";
$result = mysqli_query($con,$get_user);

$run_query = mysqli_fetch_array($result);
$user_id = $run_query['user_id'];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payoffline</title>
</head>
<body>
    <a href="order.php?user_id=<?php echo $user_id ?>">Pay offline</a>
</body>
</html>