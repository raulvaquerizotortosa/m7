<!DOCTYPE html>
<html>
 <head>
  <title>FORM PHP</title>
 </head>
 <body>
    <?php
        <!-- iniciem les variables -->
        $nom = "Jhon";
        $cognoms = "Doe";
        $edat = 30;
        <!--No hem funcionaba la data i no la he posat al formulari. -->
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
         <ul>
            <li><p>Es diu: <?php echo $nom, ' ',$cognoms ;?></p></li>
            <li><p>Te <?php echo $edat, ' anys';?></p></li>
            <li><p>El seu telefon es: <?php echo $tel;?></p></li>
            <li><p>Viu a <?php echo $adr;?></p></li>
            <li><p>El seu email es<?php echo $adre;?></p></li>
            <li><p>I actualment <?php echo $treball, ' treballa';?></p></li>
            <li><p>la seva alçada es: <?php echo $alçada;?></p></li>
         </ul>
    </form> 
 </body>
</html>
