<?php 

//Javascript File

?>

<!-- Latest compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        $('.dropdown-toggle').dropdown();
    });
</script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<script>
    $(document).ready(function(){


        /*$('#btn-debug').hide();
         var isClicked = false;
         $('#btn').click(function () {
         isClicked = true;
         });

         if (isClicked) {
         // The link has been clicked.
         $('#btn-debug').show();
         } else if(isClicked) {
         // The link has not been clicked.
         $('#btn-debug').hide();
         $('#btn').hide('slow',function(){
         $('#btn').show();
         });
         }*/
        $('#btn-debug').hide();

        $("#btn").click('button',function(){

            $('#btn-debug').toggle();


        });

    });

</script>