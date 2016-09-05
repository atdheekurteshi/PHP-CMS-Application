<?php

//User Page Setup

function dataOnUserPage($dbc,$id)
{
    $q="SELECT * FROM users WHERE id=$id";
    $r=mysqli_query($dbc,$q);
    $data=mysqli_fetch_assoc($r);
    $data['fullname']=$data['first'].",".$data['last'];
    $data['fullname_reverse']=$data['last'].",".$data['first'];

    return $data;
}
#Settings Page Setup
function dataOnSettingsPage($dbc,$id){

    //Creating a query to pull data from database
    $q="SELECT * FROM settings WHERE id ='$id'";
    //Attaching to a $r variable the query and the database
    $r=mysqli_query($dbc,$q);
    //Fetching fields from $r=results variable via $page variable
    $data = mysqli_fetch_assoc($r);
    return $data;

}
#Page Setup
function dataOnPage($dbc,$id)
{
    //Creating a query to pull data from database
    $q="SELECT * FROM pages WHERE id =$id";
    //Attaching to a $r variable the query and the database
    $r=mysqli_query($dbc,$q);
    //Fetching fields from $r=results variable via $page variable

    $data = mysqli_fetch_assoc($r);
    $data['body_nohtml']=strip_tags($data['body']);


    if($data['body']==$data['body_nohtml'])
    {
          $data['body_formated']='<p> body_formated '.$data['body'].'</p>';

    }
    else{
        
           "body_nohtml" .$data['body_nohtml']=$data['body'];

    }

    return $data;
}


?>
