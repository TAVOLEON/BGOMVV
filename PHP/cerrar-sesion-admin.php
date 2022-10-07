<?php
session_start();
session_destroy();
header("location: ../sii-login.php");
?>