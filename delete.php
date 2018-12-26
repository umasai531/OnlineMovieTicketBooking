<?php
  session_start();
  if (!isset($_SESSION["username"])){
    header('Location: index.html#popup');
  }
?>
<html>
<body background="movie2.jpg" text="red">
<form action="delete.php" method="post">
<table align="center">
<tr><th><h3>Enter the movie delete</h3></th>
<td><input type="text" name="m1" placeholder="delete" required></td></tr>
<tr> <td><button style="background-color: red;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 50%;
    opacity: 0.9;"type="submit3" name="submit3" >submit</button></td></tr>
</table>
</form>
<?php

if(isset($_POST['submit3']))
{
$d1=$_POST['m1'];
$con=new mysqli("localhost","root","","movieadd");
$sql="DELETE from amovie WHERE name='$d1'";

if($con->query($sql) == true) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}

}
?>
</body>
</html>