<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="signup.css">
            <title>SIGN UP</title>
		</head>

		<body>
            
            
            <div class="FORM">
                
                <div class="FORM-text">
                    <header><a href="../home.php">Game Card</a></header>
                    <h1>Sign Up</h1>
                    
                  
			
                    <form action="../includes/signup.inc.php" method="post">

                    <label>name</label>  <br>
                    <input type="text" name="prenom" placeholder="Entrez votre prenom" required autocomplete="off" > <br>
                   

                    <label>username</label> <br>
                    <input type="text" name="username" placeholder="Tapez un nom d'utilisateur" required autocomplete="off" >
                
                    <br>

                       
                    <label>email</label> <br>
                    <input type="email" name="email" placeholder="Entrez votre email" required autocomplete="off"> <br>

                    <label>password</label> <br>
                    <input type="password" name="password" placeholder="Votre mot de passe" required autocomplete="off"> <br>

                    <label>confirm your password </label> <br>
                    <input type="password" name="password2" placeholder="Retaper votre mot de passe" required autocomplete="off"> <br>
                        
                       
                    
                    <input type="checkbox" name="accepter" value="OK" checked required autocomplete="off"><span id="accept">J’accepte les
                    conditions d'utilisation</span> 
                    

                    <button type="submit" name="signup-submit">Sign Up</button>
                    

                    </form>
                    <p>ALREADY HAVE AN ACCOUNT ?<a href="login.php"> LOG IN</a></p>

                </div>
     
            </div>
			
		</body>

	</html>
