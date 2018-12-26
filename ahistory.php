<?php
session_start();
$con=new mysqli("localhost","root","","booking");

$sql="SELECT * from book";


$ans=$con->query($sql);



if($ans->num_rows>=1)
{
echo "<html><body background='movie2.jpg' text='red'>";
echo "<table align=center border=0 width=85% cellpadding=10 cellspacing=5>";
echo "<tr><th><h2>Name</h2></th><th><h2>Date</h2></th><th><h2>ShowTime</h2></th><th><h2>Tickets<h2></th>><th><h2>Amount<h2></th></tr>";
while($row = $ans->fetch_assoc())
{
echo "<tr><th><h3>".$row['name']."</h3></th><th><h3>".$row['date']."</h3></th><th><h3>".$row['showtime']."</h3></th><th><h3>".$row['tickets']."</h3></th><th><h3>".$row['amount']."</h3></th></tr>";
}
echo"</table></body></html>";
}
else
{
echo "<h2> sorry! no records to display</h2>";
echo"error:".$sql."<br>".$con->error;
}
?>