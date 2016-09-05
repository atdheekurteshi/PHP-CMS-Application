<?php 

//Javascript File

?>

<!-- Latest compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

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