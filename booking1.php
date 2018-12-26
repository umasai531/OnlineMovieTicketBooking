<?php
  session_start();
  if (!isset($_SESSION["username"])){
    header('Location: index.html#popup');
  }
?>
<html>
<head>
<style>
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
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
	.button1:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);

}
</style>
</head>
<form action="booking1.php" method="post">
</form>
</html>
<?php 
$con=new mysqli("localhost","root","","movieadd");
$sql="SELECT * from amovie";
$ans=$con->query($sql);

if($ans->num_rows>=1)
{

echo "<html><body background='movie2.jpg' text='red'>";
echo "<form  action='a2.php' method='post'>";
echo "<table align=center border=0 width=85% cellpadding=10 cellspacing=5>";
echo "<tr><th><h1>Booking Movie Ticket</h2></th></tr>";

while($row = $ans->fetch_assoc())
{
echo "<td><img src='".$row['image']."'width=200 height=200</td></tr>";
echo "<tr><td><a href='a2.php' text='red' ><button name='b1' value='Booking' style='background-color:red;
    color: black;
    padding: 14px 20px;
    margin: 8px 0;
    border: red;
    cursor: pointer;
    width: 150px;' >Booking</button></a></td></tr>";
}
echo"</table></body></form></html>";
}
else
{
echo "<h2> sorry! no records to display</h2>";
echo"error:".$sql."<br>".$con->error;
}

?>
</body>
</html>