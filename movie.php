<?php
  session_start();
  if (!isset($_SESSION["username"])){
    header('Location: index.html#popup');
  }
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body1 {
    font-family: Arial, Helvetica, sans-serif;
    background-color: black;
	background-image:url('image2.jpg');
}

* {
    box-sizing: border-box;
}

/* Add padding to containers */
.container {
    padding: 16px;
    background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Overwrite default styles of hr */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
    background-color: black;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.registerbtn:hover {
    opacity: 1;
}

/* Add a blue text color to links */
a {
    color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
    background-color: #f1f1f1;
    text-align: center;
}
</style>
</head>
<body background="movie2.jpg">

<form action="movie.php" method="post">
  <div class="container" >
    <table width="100%" background="image2.jpg">
 <tr><th><label><b>Movie Name</b></label></th>
    <th><input type="text" placeholder="Enter Name" name="mname" required></th></tr>
   <tr><th><label ><b>Movie Type</b></label></th>
    <th><input type="text" placeholder="Enter Type" name="mtype" required></th></tr>
    
	<tr><th><label ><b>Language</b></label></th>
    <td><input type="text" placeholder="Enter Language" name="mlang" required></td></tr>

    <tr><th><label"><b>Image</b></label></th>
    <th><input type="file" placeholder="Enter image" name="mimage" required></th></tr>

<tr><th><button type="submit2" name="submit2" class="registerbtn">Go</button></th>
<th><button type="submit3" name="submit3" class="registerbtn">Cancel</button></th></tr>
 
	 </table>

   
  </div>
  
</form>
<?php
if(isset($_POST['submit2']))
{
echo "hii";
$name=$_POST['mname'];
$type=$_POST['mtype'];
$lang=$_POST['mlang'];
$image=$_POST['mimage'];
$con=new mysqli("localhost","root","","movieadd");
$sql="insert into amovie(name,type,language,image) values ('$name','$type','$lang','$image')";
if($con->query($sql)==true)
{
echo"sucessfully";
}
else
{
echo"error:".$sql."<br>".$con->error;
}
}
?>
</body>
</html>
