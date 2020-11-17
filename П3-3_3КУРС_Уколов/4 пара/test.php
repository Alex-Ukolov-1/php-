<?php
session_start();
$text = $_POST['logged_in_user_name'];
$_SESSION['mytext'] = $text;
echo $_SESSION['mytext'];
?>