<?php
session_start();
require '../extern/dbh.ext.php';
$id = $_SESSION["userId"];
$theme = $_GET["theme"];
$questionId = $_GET["id"];





?>

<!DOCTYPE html>

<html>

<head>
    <title>Signal</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="endofthegame.css">


</head>

<body>
    <div class="logo" style="margin-bottom:100px;">
        <a href="../home.php" style="text-decoration:none">Game Card</a>
    </div>
    <div class="gif" style="text-align:center">
        <img src="../img-site/original%20(1).gif" width="300px">

    </div>



    <form action="../extern/signal.ext.php?questionId=<?php echo $questionId; ?>&theme=<?php echo $theme; ?>" method="post" style="text-align:center">
        <label for="object-select" style="font-family:elgoc;">Objet du signalement ?</label><br>

        <select name="objet" id="objet-select" style="margin-bottom:30px;margin-top:30px">

            <option value="orthographe">Ortographe</option>
            <option value="contenu">Contenu innaproprié</option>
            <option value="anachronisme">Anachronisme</option>
            <option value="prop">Aucune proposition valide</option>
            <option value="syntaxe">Syntaxe</option>

        </select>
        <br>

        <button type="submit" style="color:black;" name="submit-signal">Envoyer</button>


    </form>
    <div class="p" style="text-align:center;">

        <a href="jeu-principal.php" style="text-decoration:none" style="margin-top:10px;">BACK HOME</a>
    </div>

</body>


</html>
