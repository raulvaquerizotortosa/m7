<!DOCTYPE html>
<html>
 <head>
  <title>FORM PHP</title>
 </head>
 <body>
    <?php
        $nom = "Jhon";
        $cognoms = "Doe";
        $edat = 30;
        $date = new Datetime("1986-03-11");
        $tel = 935555555;
        $adr = "Blackpool, England";
        $adre = "oswin@dr.who";
        $treball = False;
        $alçada = 180;
    ?>
        <h1>Descrivint a <?php echo $nom, ' ',$cognoms ;?></h1>
        <h2>Les dades de <?php echo $nom, ' ' ;?> són:</h2>
        <form>
            <p>Es diu: <?php echo $nom, ' ',$cognoms ;?></p>
            <p>Te <?php echo $edat, ' anys';?></p>
            <p>El seu telefon es: <?php echo $tel;?></p>
            <p>Viu a <?php echo $adr;?></p>
            <p>El seu email es<?php echo $adre;?></p>
            <p>I actualment <?php echo $treball, ' treballa';?></p>
            <p>la seva alçada es: <?php echo $alçada;?></p>
    </form> 
 </body>
</html>
