<?php
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['username'])) {
header('Location: Index1.html');

}
?>
<html>
<head>

<frameset rows="10%,*">
<frame name="f1" src="adminhome.php" noresize="noresize">


<frame name="f2" src="content.php" noresize="noresize">
</head>
</html>

