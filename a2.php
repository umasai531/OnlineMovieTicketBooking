<?php
  session_start();
  if (!isset($_SESSION["username"])){
    header('Location: index.html#popup');
  }
?>
<html>
  <head>
  <style>
  legend{
  font-size:60;
  font-color:red;
  }
  label{
  font-size:20
  }
  b {
    background-image: url("rt.jpg");
}
body {
    color: red;

}
p
{ align:left;
}

h1 {
    color: red;
}
  </style>
  </head>
  <body align="center" text="red" background="movie2.jpg">
<div id="container">
  <div id="form">
    <form id="book_tickets" action="a2.php" method="post">
      <fieldset>
        <h1>Booking Details</h1>
		<hr>
		<p align="left"><h3>Each Ticket Costs $100</h3></p>
		<table>
          <tr><th><label >Date<br/><span id="dateNote"></span></label></th>
		  <th><input type="date" name="date" id="date" min="today" required /></th>
		  </tr>
        
	       <tr><th>
          <label >No. of Tickets</label></th>
          <th><input type="number" min="1" name="tickets" id="tickets_quantity" required /></th>
        

         <tr><th> <label >Time</label></th>
         <th> <select  name="theater" required>
            <option></option>
            <option value="8:00am to 10:30 a.m">8:00am to 10:30 a.m</option>
            <option value="12:00pm to 2:30p.m">12:00pm to 2:30p.m</option>
            <option value="6:00p.m to 9:00p.m">6:00p.m to 9:00p.m</option>
			<option value="9:30p.m to 12:00a.m">9:30p.m to 12:00a.m</option>
          </select></th></tr>
       
		
          <tr><td><input type="submit" href="card.php" name="submit2"  value="Book Tickets" style="background-color:red;color: black;padding: 14px 20px;margin: 8px 0;border: red;cursor: pointer;width: 100px;" /></td>
       <td> <input type="reset" id="reset" value="RESET" style="background-color:red;color: black;padding: 14px 20px;margin: 8px 0;border: red;cursor: pointer;width: 100px;"  /></td></tr></table>
		</fieldset>
		</div>
		</body>
		</html>
		
		<?php
if(isset($_POST['submit2']))
{
$un=$_SESSION["username"];
$date=$_POST['date'];
$tic=$_POST['tickets'];

$time=$_POST['theater'];
$total=($tic*100);
$_SESSION['ticketvalue'] =$total;
$_SESSION['date'] =$date;
$_SESSION['ticket']=$tic;
$_SESSION['time'] =$time;

$con=new mysqli("localhost","root","","booking");
$sql="insert into book(name,date,showtime,tickets,amount) values ('$un','$date','$time','$tic','$total')";
if($con->query($sql)==true)
{

header('Location:card.php');

}
else
{
echo"error:".$sql."<br>".$con->error;
}
}
?>