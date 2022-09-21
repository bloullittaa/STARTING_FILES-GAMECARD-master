<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="removeQuest.css">
    <title>ADD QUESTIONS</title>
</head>

<body>
    <div class="FORM">

        <div class="form-text">

            <header><a href="../home.php">Game Card</a></header>
            <h1>REMOVE QUESTONS</h1>
            <p style="color:orange">
          
            </p>

            <form action="../includes/removeQuest.inc.php" method="post">
                
                    <label for="theme">Theme</label><br>
                    <input name="theme" placeholder="theme"><br>
                    <label for="type">Type</label><br>
                    <input name="type" placeholder="texte/qcm"><br>
                    <label for="question">Question</label><br>
                    <input name="question" placeholder="add a question" autocomplete="off"><br>
                    <button type="submit" style="margin-top:-5px;margin-bottom:5px" name="update">UPDATE</button>
                    <br>
    
            </form>
        </div>
    </div>


</body>



</html>
