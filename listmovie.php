<?php
  session_start();
  if (!isset($_SESSION["username"])){
    header('Location: index.html#popup');
  }
?>
<html>
<head>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: pink;
    color: white;
}</style>
</head>
<body background="movie2.jpg">


<?php


$con=new mysqli("localhost","root","","movieadd");
$sql="SELECT * from amovie";
$ans=$con->query($sql);

if($ans->num_rows>=1)
{
echo "<html><body background='movie2.jpg' text='red'>";
echo "<table align=center border=0 width=85% cellpadding=10 cellspacing=5>";
echo "<tr><th><h1>Movie</h2></th><th><h2>Type</h2></th><th><h2>Language</h2></th><th><h2>Image<h2></th></tr>";
while($row = $ans->fetch_assoc())
{
echo "<tr><td><h3>".$row['name']."</h3></td><td><h3>".$row['type']."</h3></td><td><h3>".$row['language']."</h3></td><td><img src='".$row['image']."'width=100 height=100</td></tr>";
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