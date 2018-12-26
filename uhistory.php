<?php
session_start();
$un=$_SESSION["username"];
$con=new mysqli("localhost","root","","booking");

$sql="SELECT * from book WHERE name='$un'";


$ans=$con->query($sql);



if($ans->num_rows>=1)
{
echo "<html><body background='movie2.jpg' text='white'>";
echo "<table  border=0 width=85% cellpadding=5 cellspacing=5>";

while($row = $ans->fetch_assoc())
{
echo "<tr><th><h3>Name:</h3></th><td>".$row['name']."</td></tr><tr><th><h3>Date:</th><td>".$row['date']."</h3></td></tr><tr><th><h3>Showtime:</th><td>".$row['showtime']."</h3></td></tr><tr><th><h3>Tickets:</th><td>".$row['tickets']."</h3></td></tr><tr><th>Amount:</th><td>".$row['amount']."</td></tr>";


}
}
else
{
echo "<h2> sorry! no records to display</h2>";
echo"error:".$sql."<br>".$con->error;
}
?>