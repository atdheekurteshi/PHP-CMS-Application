<?php

function navMain($dbc,$pageId)
{

    $q="SELECT * FROM pages";
    $r=mysqli_query($dbc,$q);

    while($row=mysqli_fetch_assoc($r))
    {?>

        <li <?php if($pageId==$row['id']){echo'class="active"';}?> ><a href=?page=<?php echo $row['id'];?>&debug=<?php echo $row['id'];?>><?php echo $row['label'];?></a></li>


    <?php }

}

?>





