
<nav class="navbar navbar-default" role="navigation">
    <button   style="width:50px;height: 50px; float: left; " type="button" id="btn" class="btn btn-warning"><i class="fa fa-bug" aria-hidden="true"></i></button>
    <div class="container">


       
        <div id="navbar" class="collapse navbar-collapse">
            <!-- Indicates caution should be taken with this action -->

            <ul class="nav navbar-nav">
                  <?php

                    navMain($dbc,$pageId);

                  ?>
            </ul>
        </div><!--/.nav-collapse -->
    </div
</nav>