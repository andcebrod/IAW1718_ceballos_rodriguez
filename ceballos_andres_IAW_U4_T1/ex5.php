<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ex5 php</title>
    <style media="screen">
    #main {
     margin: 50px auto;
     width: 80%;
    }

    .cell {
      float: left;
      height: 50px;
      width: 50px;
    }

    .row {
      clear: left;
    }
    .red {
      background-color: red;
    }
    .gray {
      background-color: gray;
    }


    </style>
  </head>


  <body>

    <?php


    $tam=10;
    
    for ($i=0;$i<$tam;$i++) {
        echo "<div class=\"row\">";

        for ($j=0;$j<$tam;$j++) {

           if ((($i+$j)%2)==1) {
             $gray="gray";
             echo "<div class=\"cell $gray \"></div>";
           } else {
             $red="red";
             echo "<div class=\"cell $red \"></div>";
           }
        }
        echo "</div>";
    }





     ?>


  </body>
</html>
