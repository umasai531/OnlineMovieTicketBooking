<?php
if(isset($_POST['submit2']))
{
echo "hii";
$uname=$_POST['uname'];
$dob=$_POST['dob'];
$email=$_POST['gmail'];
$pwd=$_POST['psw'];
$gen=$_POST['gender'];
$num=$_POST['number'];
$image=$_POST['image'];
$con=new mysqli("localhost","root","","signup");
$sql="insert into asignup(name,dob,gender,email,password,number,image) values ('$uname','$dob','$gen','$email','$pwd','$num','$image')";
if($con->query($sql)==true)
{
include 'Index.html';
echo"<html><body align=center><h1 text='red'>Updated sucessfully </h1><body></html>";

}
else
{
echo"error:".$sql."<br>".$con->error;
}
}
?>
</body>
</html>





