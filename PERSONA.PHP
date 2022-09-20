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
        $date = new Datetime("1986-03-11")
         /* No se si es correcte aquesta manera de afegir la data */
        $tel = 935555555;
        $adr = "Blackpool, England";
        $adre = "oswin@dr.who"
        $treball = False;
        $alçada = 180;
    ?>
        <h1>"Descrivint a John Doe"</h1>
        <h2>"Les dades de John són:"</h2>
        <form>
            <?php echo '<p>Es diu: $nom $cognoms</p>'; ?>
            '<p>"Te anys"</p>'
            <?php echo $edat; ?>
            '<p>"Va neixer l any: "</p>;'
            <?php echo $date; ?>
            '<p>"El seu telefon es: "</p>;'
            <?php echo $tel; ?>
            '<p>"Viu a "</p>;
            /* No he afegit la data perque no em funcionaba */
            <?php echo $adr; ?>
            '<p>"El seu e-mail es el "</p>;'
            <?php echo $adre; ?>
            '<p>"i actualment "</p>;' 
            <?php echo $treball; ?>
            '<p>"la seva alçada es "</p>;'
            <?php echo $alçada; ?>
    </form> 
 </body>
</html>
