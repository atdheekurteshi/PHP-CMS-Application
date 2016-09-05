<?php
session_start();
include('config/connection.php');
//var_dump($_POST);
if($_POST)
{

    $q="SELECT * FROM users WHERE email='$_POST[email]' AND password ='$_POST[password]'";
    $r=mysqli_query($dbc,$q);
    $num=mysql_num_rows($r);
    if(num==1)
    {
        $_SESSION['username']=$_POST['email'];
        header('Location:index.php');
    }

}
?>

<!-- Debug page section -->
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
                <div class="panel-info">

                <div class="panel-heading">
                    <h2>Login</h2>
                </div>


                <div class="panel-body">


                    <form action="index.php" method="post" role="form" >

                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>

                        <button type="submit" class="btn btn-default">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>






