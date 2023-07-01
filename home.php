<?php
  session_start();
  if(!isset($_SESSION['username']))
  header('location:info.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>h2{
         
         color:red;
         background-color:magenta;
        }</style>
</head>
<body >

<h2> Welcome <?php echo $_SESSION['username']; ?></h2>
    <a href = "logout.php">LOGOUT</a>
</body>
</html>
