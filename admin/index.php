<?php include('template/header.php');?>
<!-- Debug page section -->


<div class="container" xmlns="http://www.w3.org/1999/html">

    <div class="page-header">
        <h2>Admin Dashboard</h2>
    </div>
    <p class="lead"></p>
    <!-- <?php  echo($page['body']);?>-->
    <div class="row">
        <div class="col-md-4">

         <h3>Page List</h3>


            <?php

            $q="SELECT * FROM pages ORDER BY label ASC ";
            $r=mysqli_query($dbc,$q);

            while ($page_list=mysqli_fetch_assoc($r))
            {?>

                <div class="list-group">
                    <a href="#" class="list-group-item "><?php echo $page_list['label'];?>
                        <h4 class="list-group-item-heading"><?php echo $page_list['header'];?></h4>
                        <p class="list-group-item-text"><?php echo substr(strip_tags($page_list['body']), 0, 20);?></p>
                    </a>

                </div>


            <?php }?>

        </div>
        <div class="col-md-7">
            <h3>Page Form</h3>

            <form class="form-horizontal" role="form" method="post" action="index.php"  enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Label</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="label" name="label" placeholder="Label">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Header</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="header" name="header" placeholder="Header">
                    </div>
                </div>
                 <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Body</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="body" name="body" placeholder="Body">
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <button type="submit" class="btn btn-primary">Send</button>
                        <input type="hidden" id="submitted" name="submitted" value="1" class="btn btn-primary"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <! Will be used to display an alert to the user>
                    </div>
                </div>
            </form>
            <?php


            //var_dump($_SERVER['submitted']);
            //$post = file_get_contents('php://input');
           // echo $post
            if(isset($_POST['submitted'])==1) {
                $q="INSERT INTO pages(title,label,header,body) VALUES('$_POST[label]','$_POST[title]','$_POST[header]','$_POST[body]')";
                $r=mysqli_query($dbc,$q);
                if($r){

                    echo "<p>Row Added</p>";

                }
                else
                {
                    echo "Row not added".$q."\n".mysqli_error($dbc);
                }
            }
            ?>
        </div>


    </div>


</div>

<?php include(D_TEMPLATE.'/footer.php');?>

</body>
</html>