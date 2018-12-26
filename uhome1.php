<?php

session_start();
if (!isset($_SESSION['username'])) {
header('Location: Index1.html');

}
?>
<html>
<head>

<frameset rows="10%,*">
<frame name="f1" src="uhome.php" noresize="noresize">


<frame name="f2" src="content.php" noresize="noresize">
</head>
</html>

