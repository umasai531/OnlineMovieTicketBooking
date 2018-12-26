<?php
  session_start();
  if (!isset($_SESSION["username"])){
    header('Location: index.html#popup');
  }
?>
<html>
<head>
<h2>My Account</h2>
<style>
</style>
</head>
<hr>
<body background="movie2.jpg" text="white">
<form action="aacount.php" method="post">
</form>
<?php
$un=$_SESSION["username"];

$con=new mysqli("localhost","root","","signup");
$sql="SELECT * from asignup where name='$un'";
$ans=$con->query($sql);

if($ans->num_rows==1)
{
echo "<html><body background='movie2.jpg' text='red'>";
echo "<table  border=0 width=85% cellpadding=5 cellspacing=5>";

while($row = $ans->fetch_assoc())
{
echo "<tr><th><h3>Name:</h3></th><td>".$row['name']."</td></tr><tr><th><h3>Dateofbirth:</th><td>".$row['dob']."</h3></td></tr><tr><th><h3>Gender:</th><td>".$row['gender']."</h3></td></tr><tr><th><h3>Email:</th><td>".$row['email']."</h3></td></tr><tr><th>Date of Birth:</th><td>".$row['dob']."</td></tr><tr><th>Mobile:</th><td>".$row['number']."</td></tr><tr align='left'><td>image:<img src='".$row['image']."'width=100 height=100</td></tr>";


}

echo"</table></body></html>";

}
else
{
echo "<h2> sorry! no records to display</h2>";
}

?>

</body>
</html>
        

