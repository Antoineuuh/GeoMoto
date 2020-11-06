<?php session_start();
	// session_unset();
	// session_destroy();
 ?>

	
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="contact.css">
	<title>GéoMoto -  Site Officiel</title>
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

	if(isset($_SESSION['pseudo']) && (isset($_SESSION['date']) && (isset($_SESSION['email']))))
	{

		?>

		<p> Pseudo : <?php echo $_SESSION['pseudo']; ?> </p>
		<p> Date de création : <?php echo $_SESSION['date']; ?> </p>
		<p> Email : <?php echo $_SESSION['email']; ?> </p>
		
		<?php

	}else{
		// echo "Veuillez vous inscrire afin de pouvoir avoir toute les fonctionalités de GéoMoto";
	}


	?>

<div class="sign-box">
	<h1>Inscription</h1>
	<form method="post">
	<div class="textbox">
		<input type="text" name="pseudo" id="pseudo" placeholder="Pseudo" required> 
	</div>
	<div class="textbox">
		<input type="email" name="email" id="email" placeholder="Email " required>
	</div>
	<div class="textbox">
		<input type="text" name="age" id="age" placeholder="Age" required>
	</div>
	<div class="textbox">
		<input type="password" name="password"  id="password" placeholder="Mot de passe " required>
	</div>
	<div class="textbox">
		<input type="password" name="cpassword" id="cpassword" placeholder="Confirmer votre mot de passe" required>
	</div>
		<input class="btnsign" type="submit" name="formsend" id="formsend" value="Inscription">

	</div>

	</form>


</body>
</html>

<?php 


	// $q = $db->query("SELECT * FROM users");
	// while ($users = $q->fetch()) {
	// 	echo " id : " . $users['id'] . "pseudo : " . $users['pseudo'] . "<br/>";
	// }


	if(isset($_POST['formsend'])){

		extract($_POST);


		if(!empty($pseudo) && !empty($age) && !empty($email) && !empty($password) && !empty($cpassword)){

			if($password == $cpassword){

				$options = [
				'cost' => 12,
			];
			
				$hashpass = password_hash($password, PASSWORD_BCRYPT, $options);

				include 'database.php';
				global $db;

				$c = $db->prepare("SELECT pseudo FROM users WHERE pseudo = :pseudo");
				$c->execute([
					'pseudo' => $pseudo
				]);
				$result = $c->rowCount();



				$c = $db->prepare("SELECT email FROM users WHERE email = :email");
				$c->execute([
					'email' => $email
				]);
				$result = $c->rowCount();




				if ($result == 0){
				$q = $db->prepare("INSERT INTO users(pseudo,email,age,password) VALUES(:pseudo,:email,:age,:password)");
				$q->execute([
					'pseudo' => $pseudo,
					'email' => $email,
					'age' => $age,
					'password' => $hashpass

				]);
				echo "Le compte à été créee";

				}else{
					echo "Ce Pseudo ou cette Email existe déjà !";
				}


			}

		// 	if(password_verify($password, $hashpass)){
		// 		echo "Le mot de passe est le même";
		// 	} else{
		// 		echo "Le mot de passe n'est pas correcte";
		// }


		}else{
			echo "Les Champs ne sont pas tous remplies";
		}



	}


?>
