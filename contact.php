<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="contact.css">
	<meta charset="utf-8">
	<title>Géomoto - Site Officiel</title>
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

	
	<div class="contact-section">
		<div class="inner-width">
			<h1> Contacter-nous ! </h1>
			<input type="text" name="name" placeholder="Votre Nom" class="name">
			<input type="email" name="email" placeholder="Votre Email" class="email">
			<textarea rows="1" placeholder="Message" class="message"></textarea>
			<button>Envoyer</button>
		</div>
	</div>


	<footer>
		
		<div class="footer" id="footer">

			<div class="pageContent">

				<div class="pageWidth">
					
					<div class="footerAbout">

						<h3 class="title">à propos de GeoMoto</h3>

						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vehicula tellus nec mollis varius. Morbi ut dui cursus, eleifend leo nec, mattis sapien. Vivamus in felis quam. Duis facilisis nibh eget sagittis semper. Etiam magna nisi, vehicula eget ultrices sit amet, tincidunt in eros. Suspendisse quis elit at ligula rutrum elementum nec ut ante.</p>

						<p>© 2020 GEOMOTO - Tout droits réservés.</p>
						
					</div>

					<div class="footerLink">

                        <h3 class="title">Liens utiles</h3>

                        <div>

                            <ul class="">
                                <li><a href="index.html">GeoMoto</a></li>
                                <li><a href="index.html">Article</a></li>
                                <li><a href="mailto:support@geomoto.com">Contact</a></li>
                            </ul>

                            <ul class="">
                                <li><a href="index.html">Devblog</a></li>
                                <li><a href="index.html">Forum</a></li>
                            </ul>

                        </div>

                    </div>

                    <div class="footerLast">

                        <h3 class="title">Inscription 

                        	<div class="btn-footer" onclick="openConnexion();">Vers l'inscription </div>

                        </h3>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vehicula tellus nec mollis varius. Morbi ut dui cursus, eleifend leo nec, mattis sapien. Vivamus in felis quam. Duis facilisis nibh eget sagittis semper.</p>
                    </div>


				</div>


				
			</div>
			
		</div>

	</footer>

</body>
</html>