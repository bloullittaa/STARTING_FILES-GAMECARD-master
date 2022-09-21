<!DOCTYPE html>

<html>
    <head>
        <title>Create New Password</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="create-new-password.css">
    
    </head>
    
    <body>
        
        
        
        
        
            <div class="FORM">
                <div class="FORM-text">
                  
                    
                    
                
                    <header><a href="../home.php">Game Card</a></header>
                    <h1>Update Your Password</h1>
                    <form action="../extern/reset-password.inc.php" method="post"> 
                        <input type="hidden" name="selector" value="">
                        <input type="hidden" name="validator" value="">
                        <input type="password" name="password1" placeholder="Enter your new password" required>
                        <input type="password" name="password2" placeholder="Confirm your new password" required> <br>
                        <button type="submit" name="reset-password-submit">Reset Password</button> <br>
                        <img src="../img-site/original%20(1).gif">
                        <a href="../ACCOUNT/signup.php" id="back-signup">SIGN UP</a> <br> <br>
                        <a href="../ACCOUNT/login.php" id="back-login">LOG IN</a>
                    </form>
                    
                </div>
                
            </div>
        
        
    
    </body>


</html>