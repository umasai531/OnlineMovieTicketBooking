<?php
  session_start();
  if (!isset($_SESSION["username"])){
    header('Location: index.html#popup');
  }
?>
<html>
<body background="movie2.jpg" text="red">
<form action="content.php" method="post">
<h2 style="margin-left:400px;"><marquee> heloo welcome to online movie ticket booking</marquee>
</form>
</body>
</html>