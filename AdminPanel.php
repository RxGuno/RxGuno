<?php
session_start();

if (isset ($_SESSION ['id'] ) && isset ($_SESSION ['empid'])){






?>

<!DOCTYPE html>

<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="admin panel.css">
  <title style="font-size: large;">Homepage</title>


<head>
<div class="logo">Hello! Admin</div>
<div class="topnav" id="mytopnav">
  <a href="#mySidenav">&#9776;</a> 
  <a href="#Home">Customers Account</a>
  <a href="AdminACC.php">Admin Account</a>
  <a href="ProductDB.php">Product</a>
  <a href="#Order">Order History</a>

        <div class="logout">
        <a style="text-decoration:none" href= "logout.php">Logout</a>
        </div>
</div>


</head>
<body>
  <div id="mySidenav">
    <a href="#" class="closebtn">&times;</a>
    <a href="#Home">Home</a>
    <a href="#AdminACC.php">Admin</a>
    <a href="ProductDB.php">Product</a>
    <a href="#Order">Order History</a>
    <div class="logout">
        <a style="text-decoration:none" href= "logout.php">Logout</a>
        </div>
  </div>

<div id="Home">
<div class="logohome">
<img src="AA Main Logo.png">
</div>
</div>

<div class="box">
<article>
    <a href="#">Customer Account</a>
        <img src="person-circle-outline.svg" class="icon">
</article>
</div>


<div class="box">
    <article>
        <a href="#">Admin Account</a>
            <img src="person-circle-sharp.svg" class="icon">
    </article>
    </div>
    


    <div class="box">
        <article>
            <a href="#">Product</a>
                <img src="shirt-sharp.svg" class="icon">
        </article>
        </div>


        <div class="box">
            <article>
                <a href="#">Order history</a>
                    <img src="receipt-sharp.svg" class="icon">
            </article>
            </div>


</body>

</html>
<?php
}else{
    header(Location: "index.php");
    exit();
}
?>
