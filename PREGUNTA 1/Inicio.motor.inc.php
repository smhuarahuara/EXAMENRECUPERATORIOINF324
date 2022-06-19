<?php
session_start();
$_SESSION["id"]=$_GET["id"];
echo $_SESSION["id"];
?>