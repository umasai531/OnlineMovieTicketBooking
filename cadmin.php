<?php
  session_start();
  if (!isset($_SESSION["username"])){
    header('Location: index.html#popup');
  }
?>
<html>
     <head>
    
    <title>Password Change</title>
     </head>
    <body background="movie2.jpg" text="white" align="center">
    <h1><b><ul>Change Password</b></ul></h1>
	<hr>
   <form method="POST" action="cadmin.php">
    <table>
    <tr>
   <th>Enter your UserName</th>
    <td><input type="username" size="10" name="username"></td>
    </tr>
    <tr>
    <th>Enter your existing password:</th>
    <td><input type="password" size="10" name="password"></td>
    </tr>
  <tr>
    <th>Enter your new password:</th>
    <td><input type="password" size="10" name="newpassword"></td>
    </tr>
    <tr>
   <th>Re-enter your new password:</th>
   <td><input type="password" size="10" name="confirmnewpassword"></td>
    </tr>
    </table>
    <p><input type="submit" value="Update Password" name="submit">
    </form>
	</body>
    </html>  
  
   <?php

     if(isset($_POST['submit']))
	 {
$username = $_POST['username'];
        $password = $_POST['password'];
        $newpassword = $_POST['newpassword'];
        $confirmnewpassword = $_POST['confirmnewpassword'];
		
		$con=new mysqli("localhost","root","","signup");
$sql="select password from asignup WHERE name='$username'";
$ans=$con->query($sql);
while($row = $ans->fetch_assoc())
{


$oldpassworddb =$row['password'];

if($password===$oldpassworddb)
{

if ($newpassword==$confirmnewpassword)
{

$querychange ="UPDATE asignup SET password='$newpassword' WHERE name='$username'";
$ans1=$con->query($querychange);
echo "Your password has been changed";
}
else 
 echo "New password dont match!";
}

else
 echo "Old password doesnt match!";
}
}
?>
