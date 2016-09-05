<?php
if($_POST)
{
    header('Location:index.php');
}

?>
<nav class="navbar navbar-default">

    <div class="container">

            <ul class="nav navbar-nav" role="navigation">
                <li  class="active"><a href='index.php'>Dashboard</a></li>
                <li><a href='page.php'>Page</a></li>
                <li><a href='user.php'>User</a></li>
                <li><a href='settings.php'>Settings</a></li>
            </ul>


            <ul class="nav navbar-nav navbar-right">

                 <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo "Welcome ".strtoupper($user['fullname_reverse'])?><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href='logout.php'>Logout</a></li></ul>
                    </ul>
                </li>
            </ul>
     </div>

</nav>