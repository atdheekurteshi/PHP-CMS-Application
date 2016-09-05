<?php include('template/header.php');?>

    <!-- Begin page content -->
    <div class="container">

        <div class="page-header">
            <h2><?php echo $page['title']?></h2>
        </div>
        <p class="lead"><?php echo $page['header']?></p>
        <p><?php echo $page['body']?></p>
    </div>
<?php include(D_TEMPLATE.'/footer.php');?>