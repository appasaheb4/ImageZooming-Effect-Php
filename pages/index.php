<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 <!--        zooming images-->
 <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <script src="../assets/jquery.imgzoom.js" type="text/javascript"></script>
        <style>
            .imgBox{
                width:400px;     
                height:80px;
            }   
        </style>  


</head>
<body>  

<div class="container">
  <h2>Rounded Corners</h2>
  <p>The .img-rounded class adds rounded corners to an image (not available in IE8):</p>  
  <div class="imgBox">          
  <img src="../assets/download1.jpeg" data-origin="../assets/download1.jpeg" class="img-rounded" alt="Cinque Terre"> 
  </div>
     
  <script type="text/javascript">
                                                    $('.imgBox').imgZoom({
                                                        boxWidth: 800,
                                                        boxHeight: 400,
                                                        marginLeft: 5,
                                                        origin: 'data-origin'
                                                    });
                                                </script>  




</div>  

</body>
</html>