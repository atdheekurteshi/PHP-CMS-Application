<?php
include ('config/connection.php');
?>

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
