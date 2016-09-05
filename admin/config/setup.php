<?php
//Setup File
$siteTitle="AtomCMS 2.0";
$pageTitle="Home Page";
//Defined Template
DEFINE("D_TEMPLATE","template");

//Functions

include('function/data.php');
include('function/template.php');

//Database Conection
if(isset($_GET['page']))
{
    //Save the value of $_GET['page'] to $pageId
    $pageId=$_GET['page'];
    //echo $pageId;
}
else{
    //Set default to HomePage
    $pageId=1;
}

//Connecting to database
$dbc=mysqli_connect('localhost','atdhek','652000') or die('Could not connect to database'.mysqli_connect_error());
mysqli_select_db($dbc,'atomcms');
$debug=dataOnSettingsPage($dbc,'debug_status');
$page=dataOnPage($dbc,$pageId);
$user=dataOnUserPage($dbc,1);

//echo $debug['label']." ".$page['header'];
//echo $debug['value'];





