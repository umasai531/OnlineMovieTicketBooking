
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.navbar {
    overflow: visible;
    background-color: #333;
    font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: visible;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>
<body background="movie2.jpg" text="red">
<form action="adminhome.php" method="post">



<div class="navbar">
  
  <a class="active" href="content.php" target="f2"><i class="fa fa-fw fa-home"></i> Home</a> 
  <a class="active" href="movie.php" target="f2"> Add movie</a> 
  <a class="active" href="listmovie.php" target="f2" > List movie</a> 
  <a class="active" href="delete.php" target="f2"> Delete movie </a> 
  
  
 <a class="active" href="aaccount.php" target="f2">My Account</a> 
 <a class="active" href="cadmin.php" target="f2"> Change Password</a> 
 <a class="active" href="ahistory.php" target="f2">User Booking Details</a> 
 
 <a class="active" href="logout.php" target="ahome1">logout</a>
</div>
<?php
session_start(); 
  if (!isset($_SESSION["username"])){
    header('Location: Index1.html#popup');
  }
  else
  {
echo $_SESSION["username"];
  }
?>

</form>

</body>
</html>
