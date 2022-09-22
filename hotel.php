<!DOCTYPE html>
<html>
 <head>
  <title>HOTEL PHP</title>
 </head>
 <body>
    <?php
        $valores = array();
        for ($x=0;$x<10;$x++) {
            $num_aleatorio = rand(0,5);
            array_push($valores,$num_aleatorio);
            if ($valores[$x] == 0) {
                echo 'La taula ',$x,' esta buida'."<br/>";}
            elseif ($valores[$x]== 5) {
                echo 'La taula ',$x,' esta plena'."<br/>";}
            else {
                echo "A la taula ".$x." hi ha ".$valores[$x]." comensals"."<br/>";
        }       
    }  
    ?>
 </body>
</html>