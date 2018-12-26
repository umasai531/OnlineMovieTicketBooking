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
 

body {
    color: red;
	background-color:black;
}

h1,h3 {
    color: red;
}
</style>
</head>
<body align="center" background="movie2.jpg">
<form action="table1.php" method="post">


<div class="creditCardForm">
    <div class="heading">
        <h1>Confirm Purchase</h1>
    </div>
	<div><h3>Total Amount is:<?php echo $_SESSION["ticketvalue"];?></h3></div>
    <div class="payment">
            <div class="form-group owner">
                <label for="owner">Owner</label>
                <input type="text" class="form-control" id="owner">
            </div>
            <div class="form-group CVV">
                <label for="cvv">CVV</label>
                <input type="text" class="form-control" id="cvv">
            </div>
            <div class="form-group" id="card-number-field">
                <label for="cardNumber">Card Number</label>
                <input type="text" class="form-control" id="cardNumber">
            </div>
            <div class="form-group" id="expiration-date">
                <label>Expiration Date</label>
                <select>
                    <option value="01">January</option>
                    <option value="02">February </option>
                    <option value="03">March</option>
                    <option value="04">April</option>
                    <option value="05">May</option>
                    <option value="06">June</option>
                    <option value="07">July</option>
                    <option value="08">August</option>
                    <option value="09">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
                <select>
                    <option value="16"> 2016</option>
                    <option value="17"> 2017</option>
                    <option value="18"> 2018</option>
                    <option value="19"> 2019</option>
                    <option value="20"> 2020</option>
                    <option value="21"> 2021</option>
                </select>
            </div>
            <div class="form-group" id="credit_cards">
                <img src="visa.jpg" id="visa">
                <img src="mastercard.jpg" id="mastercard">
                <img src="amex.jpg" id="amex">
            </div>
			<div class="form-group" id="amount">
                <label for="TotalAmount">Total Amount</label>
                <input type="number" class="form-control" id="amount" value="<?php echo $_SESSION["ticketvalue"];?>">
            </div>
            
              <input type="submit"  name="submit2"  value="Confirm" onClick="table1.php" style="background-color:red;color: black;padding: 14px 20px;margin: 8px 0;border: red;cursor: pointer;width: 100px;" >
            
        </form>
    </div>
</div>
</body>
		</html>
		