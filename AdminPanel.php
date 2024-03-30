<?php
session_start();

if (isset ($_SESSION ['id'] ) && isset ($_SESSION ['empid'])){






?>

<!DOCTYPE html>

<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="adminpanel.css">
  <title style="font-size: large;">Homepage</title>


<head>
<div class="logo">Hello! Admin</div>
<div class="topnav" id="mytopnav">
  <a href="#mySidenav">&#9776;</a> 
  <a href="#Home">Customers Account</a>
  <a href="AdminACC.php">Admin Account</a>
  <a href="ProductDB.php">Product</a>
  <a href="#About">Order History</a>

        <div class="logout">
        <a style="text-decoration:none" href= "logout.php">Logout</a>
        </div>
</div>


</head>
<body>
  <div id="mySidenav">
    <a href="#" class="closebtn">&times;</a>
    <a href="#Home">Home</a>
    <a href="#Video">Video</a>
    <a href="gallery.html">Gallery</a>
    <a href="#About">Location</a>
    <div class="logout">
        <a style="text-decoration:none" href= "logout.php">Logout</a>
        </div>
  </div>

<div id="Home">
<div class="homecorn">
<img src="homecorn.jpg">
</div>
</div>


</body>

</html>
<?php
}else{
    header(Location: "index.php");
    exit();
}
?>