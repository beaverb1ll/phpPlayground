<?php 
session_start();
session_destroy();
?>
<html>
Logged off.

<a href="/Manager/home.php">Home, should fail</a>
</html>