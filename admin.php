
<?php
session_start();
if(isset($_POST['submit1']))
{

$adminuname=$_POST['auname'];
$adminpwd=$_POST['apsw'];

$con=new mysqli("localhost","root","","signup");

$sql="SELECT * from asignup WHERE name='$adminuname' and password='$adminpwd' ";
$ans=$con->query($sql);

if($ans->num_rows==1){
$_SESSION['username'] ="administrator";
echo $_SESSION["username"];
header('Location:ahome1.php');
echo $_SESSION['username'];
}
else
{
include 'Index.html';
echo"<html><body align=center><h1 text='red'>Invalid User!!!</h1><body></html>";



}
}
?>

