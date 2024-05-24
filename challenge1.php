<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM GET / POST</title>
</head>
<body>
    <?php
     $voornaam = $achternaam = $bestelling = "";
    
     if(!empty($_GET)) {
         $voornaam = $_GET['voornaam'];
         $achternaam = $_GET['achternaam'];
         $bestelling = intval($_GET['bestelling']);
     }
     
     if (!empty($_POST)) {
         $voornaam = $_POST['voornaam'];
         $achternaam = $_POST['achternaam'];
         $bestelling = intval($_POST['bestelling']);
     }
 
    ?>

    <form action="" method="post">
        <fieldset>
            <legend>Reactie van huidig nieuwsbericht</legend>
            <label for="naam">Naam</label>
            <input type="text" name="naam" id="naam">
            <label for="bericht">Bericht</label>
            <textarea name="bericht" id="bericht" cols="30" rows="10"></textarea>
            <input type="submit" name="submit" value="Verstuur">
        </fieldset>
    </form>
</body>
</html>