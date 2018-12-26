<?php
  session_start();
  if (!isset($_SESSION["username"])){
    header('Location: index.html#popup');
  }
?>
<html>
<head>
<h2>Booking Details</h2>
<style>
</style>
</head>
<hr>
<body background="movie2.jpg" text="white">
<form action="table1.php" method="post">
</form>
<?php

$un=$_SESSION["username"];

$con=new mysqli("localhost","root","","signup");

$con1=new mysqli("localhost","root","","booking");

$sql2="insert into book(name) values ('$un')";




?>
<?php
$con=new mysqli("localhost","root","","signup");

$sql="SELECT * from asignup WHERE name='$un'";


$ans=$con->query($sql);



if($ans->num_rows==1)
{
echo "<html><body background='movie2.jpg' text='red'>";
echo "<table  border=0 width=85% cellpadding=5 cellspacing=5>";

while($row = $ans->fetch_assoc())
{
echo "<tr><th><h3>Name:</h3></th><td>".$row['name']."</td></tr><tr><th><h3>Dateofbirth:</th><td>".$row['dob']."</h3></td></tr><tr><th><h3>Gender:</th><td>".$row['gender']."</h3></td></tr><tr><th><h3>Email:</th><td>".$row['email']."</h3></td></tr><tr><th>Mobile:</th><td>".$row['number']."</td></tr>";


}
}
else
{
echo "<h2> sorry! no records to display</h2>";
echo"error:".$sql."<br>".$con->error;
}
?>

 <tr><th><h3>Date:</h3></th><td><?php echo $_SESSION["date"];?></td></tr><tr><th><h3>ShowTime:</th><td><?php echo $_SESSION["time"];?></h3></td></tr><tr><th><h3>Tickets:</th><td><?php echo $_SESSION["ticket"];?></h3></td></tr><tr><th><h3>Amount:</th><td><?php echo $_SESSION["ticketvalue"];?></h3></td></tr>


</body>
</html>
        