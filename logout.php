<?php
  session_start();
  if (!isset($_SESSION["username"])){
    header('Location: index.html#popup');
  }
?>
<html>
<head>
<style>
.button {
    background-color: pink;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
</head>
<body align="center" background="movie3.jpg" text="red">
<form action="logout.php" method="post">
<h2><b><i>Logging Out</i></b></h2>
<hr>
<button class="button"value="Logout" name="logout" href="Index1.html">Logout</button>

</form>
</body>
</html>
<?php

if(isset($_POST['logout']))
{
unset($_SESSION['username']);

session_destroy();
  
 header('Location: Index1.html');
 }

  ?>
   