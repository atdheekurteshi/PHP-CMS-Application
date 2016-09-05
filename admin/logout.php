<?php
session_start();
session_unset($_SESSION['username']);
header('Location:login.php');

//session_destroy();//This will destroy all keys that we have.