<?php
include('config/js.php');
include('config/css.php');
include('config/setup.php');
$dbc=mysqli_connect('localhost','atdhek','652000') or die('Could not connect to database'.mysqli_connect_error());
mysqli_select_db($dbc,'atomcms');
?>