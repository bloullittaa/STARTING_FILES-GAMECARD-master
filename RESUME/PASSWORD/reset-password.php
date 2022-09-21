<!DOCTYPE html>
<html>
    <head>
        <title>RESET PASSWORD</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="reset-password.css">
    
    
    </head>

    <body>
        
        <div class="FORM">
            <div class="FORM-text">
               
                <header><a href="../home.php">Game Card</a></header>
                <h1>Reset Your Password</h1>
                
                <form action="../extern/reset-request.inc.php" method="post">
                    <label>email</label> <br>
                    <input type="text" name="email" placeholder="Entrez votre email" required>
                    <br>
    
                    <button type="submit" name="reset-request-submit">Receive new password by email</button><br>
                    <img src="../img-site/original%20(1).gif">
                    <a href="../ACCOUNT/signup.php" id="back-signup">SIGN UP</a> <br> <br>
                    <a href="../ACCOUNT/login.php" id="back-login">LOG IN</a>
                
                
                </form>

            </div>
        

        </div>
  
    </body>

</html>













