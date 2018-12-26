 <?php
session_start();
if(isset($_POST['submitu']))
{
$uname=$_POST['uname'];
$pwd=$_POST['psw'];

$con=new mysqli("localhost","root","","signup");

$sql="SELECT * from asignup WHERE name='$uname' and password='$pwd' ";
$ans=$con->query($sql);

if($ans->num_rows==1){
$_SESSION['username']=$uname;
echo $_SESSION["username"];
header('Location:uhome1.php');
echo $_SESSION['username'];
}
else
{
include 'Index.html';
echo"<html><body align=center><h1 text='red'>Invalid User!!!</h1><body></html>";
echo"error:".$sql."<br>".$con->error;
}
}
?>
