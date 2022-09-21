<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="addQuest.css">
    <title>ADD QUESTIONS</title>
</head>

<body>
    <div class="FORM">

        <div class="form-text">

            <header><a href="../home.php">Game Card</a></header>
               <p style="color:orange;font-size:15px;">
           
            </p>

            <h1>ADD CUSTOM QUESTIONS</h1>

            <form action="../includes/addQuest.inc.php" method="post">

                <label for="theme">Theme</label><br>
                <input name="theme" placeholder="theme" autocomplete="off"><br>
                <label for="question">Question</label><br>
                <input name="question" placeholder="add a question" autocomplete="off"><br>
                <label for="reponse">Answer</label><br>
                <input name="reponse" placeholder="add an answer" autocomplete="off"><br>
                <label for="type">Type</label><br>
                <input name="type" placeholder="qcm/texte" autocomplete="off"><br>
                <label for="type">Propositions(Qcm Only)</label><br>
                <input name="prop1" placeholder="proposition 1" autocomplete="off"><br>
                <input name="prop2" placeholder="proposition 2" autocomplete="off"><br>
                <input name="prop3" placeholder="proposition 3" autocomplete="off"><br>
                <label for="level">Level</label><br>
                <input name="level" placeholder="1, 2, or 3" autocomplete="off">
                <br>
                <button type="submit" style="margin-top:-5px;margin-bottom:5px;margin-right:10px" name="adding-quest">ADD</button>
                <a href="removeQuest.php">Want to Remove ?</a>


            </form>
        </div>
    </div>

</body>


</html>
