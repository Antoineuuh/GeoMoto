<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="contact.css">
	<title>GéoMoto - Site Officiel</title>
</head>
<body>
		<div class="header">

		<div id="navigation">

			<nav>
				
				<div class="navTabs pageWidth">

					<div class="headerLogo">

						<a href="index.html">

                            <img src="image/LOGO.png">

                        </a>
						
					</div>

					<div class="navResponsive">

						<li class="navTab logTab">
                            <label>
                                <a href="connection.php" class="navLink login">Connexion</a>
                            </label>
                        </li>

                        <li class="navTab logTab">
                            <label>
                                <a href="inscription.php" class="navLink signup">Inscription</a>
                            </label>
                        </li>

                        <ul class="publicTabs">

                            <li class="navTab"><a href="index.php" class="navLink">GeoMoto</a></li>
                            <li class="navTab"><a href="index.php" class="navLink">Article</a></li>
                            <li class="navTab"><a href="index.php" class="navLink">Devblog</a></li>
                            <li class="navTab"><a href="contact.php" class="navLink">Contact</a></li>

                        </ul>
						
					</div>
					
				</div>

			</nav>
			
		</div>
		
	</div>

	<?php
		include 'database.php';

	?>
	
<?php 

	if (isset($_POST['formlogin'])) {
		extract($_POST);

		if (!empty($lemail) && !empty($lpassword))
		{
			
				$q = $db->prepare("SELECT * FROM users WHERE email = :email");
				$q->execute(['email' => $lemail]);
				$result = $q->fetch();
				

				if ($result == true)
				{
					//Le comtpe existe bien 
					if(password_verify($lpassword, $result['password']))
					{
						echo "Connection réussite ";

							$_SESSION['pseudo'] = $result['pseudo'];
							$_SESSION['email'] = $result['email'];
							$_SESSION['date'] = $result['date'];


					}
					else
					{
						echo "Le mot de passe n'est pas correcte";
					}
				}
				else
				{
					echo "Le compte portant l'email : ". $lemail. " n'existe pas";
				}

		}
		else
		{
			echo "Veuillez completer l'ensemble des champs ! ";
		}
		


	}

?>


<div class="login-box">
		<h1>Connexion</h1>
<form method="post">
	<div class="textbox">

		<input  type="email" name="lemail" id="lemail" placeholder="Email" required> 
	</div>
	<div class="textbox">
		<input type="password" name="lpassword"  id="lpassword" placeholder="Password" required> 
	</div>

		<input class="btnlogin" type="submit" name="formlogin" id="formlogin" value="Connexion"> 

	</div>
</form>

</body>
</html>