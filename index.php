<?php include('template/header.php');?>
    <!-- Debug page section -->
    <div id="btn-debug">
            <pre>
                <?php
                if(isset($_GET)==$debug)
                {
                    echo '<h2>GET</h2>'."\n";
                    echo $debug['label'];
                }
                ?>
            </pre>
            <pre>
                <?php
                if(isset($_POST)==$debug['value'])
                {
                    echo '<h2>POST</h2>';

                }
                ?>
            </pre>
            <pre>
                <h2>ARRAY </h2>
                <?php
                    if(isset($_GET['debug'])==$debug['value'])
                    {
                        print_r($page);
                    }
                ?>
            </pre>

    </div>

    <div class="container">

        <div class="page-header">
            <h2><?php echo $page['title']?></h2>
        </div>
        <p class="lead"><?php echo $page['header']?></p>
        <?php  echo($page['body']);?>
    </div>

   <?php include(D_TEMPLATE.'/footer.php');?>

</body>
</html>