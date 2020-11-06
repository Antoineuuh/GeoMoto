<!DOCTYPE html>
<html>
<head>
	<title>GeoMoto - Site officiel</title>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Ubuntu&display=swap" rel="stylesheet"> 

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyChKeDf-TjS4wkWgIXCHhgMt72E62xWMR0&callback=initMap&libraries=&v=weekly" defer></script>

    <script>

      function initMap() {
        
        const paris = { lat: 48.858, lng: 2.294 };
       
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 5,
          center: paris,
        });
        
        const marker = new google.maps.Marker({
          position: paris,
          map: map,
        });
      }

    </script>
</head>

<body>
	
	<div class="header">

		<div id="navigation">

			<nav>
				
				<div class="navTabs pageWidth">

					<div class="headerLogo">

						<a href="index.php">

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

	<div class="video">

		<video id="glass" playsinline autoplay muted loop>

			<source src="media/motorbike.mp4" type="video/mp4">
			
		</video>
		
	</div>

	<div class="spacer" style="margin-top: -500px;"></div>

	<div class="pageWidth py">

		<div class="textTitleContainer">

			<h3 class="textTitle">NOUS SOMMES GEOMOTO</h3>

			<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vehicula tellus nec mollis varius. Morbi ut dui cursus, eleifend leo nec, mattis sapien. Vivamus in felis quam.</p>

			<p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vehicula tellus nec mollis varius. Morbi ut dui cursus, eleifend leo nec, mattis sapien. Vivamus in felis quam. Duis facilisis nibh eget sagittis semper. Etiam magna nisi, vehicula eget ultrices sit amet, tincidunt in eros. Suspendisse quis elit at ligula rutrum elementum nec ut ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vehicula tellus nec mollis varius. Morbi ut dui cursus, eleifend leo nec, mattis sapien. Vivamus in felis quam.</p>
				
		</div>

		<div class="divider div-transparent div-arrow-down"></div>

		<div class="center">

			<video id="introductionVideo" playsinline autoplay muted loop>

				<source src="media/geomotoback.mp4" type="video/mp4">
			
			</video>

		</div>	

		<div class="divider div-transparent div-arrow-down"></div>

		<span class="scambleText">

			<span class="tagline">GE0M0T0 PR0T0C0L</span>
			<span class="tagline">MR0C - SWD - BR4</span>
			
		</span>

		<div class="textIntroductionContainer">

			<h3 class="textTitle">DECOUVREZ-NOUS</h3>

			<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vehicula tellus nec mollis varius. Morbi ut dui cursus, eleifend leo nec, mattis sapien. Vivamus in felis quam.</p>

			<p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vehicula tellus nec mollis varius. Morbi ut dui cursus, eleifend leo nec, mattis sapien. Vivamus in felis quam. Duis facilisis nibh eget sagittis semper. Etiam magna nisi, vehicula eget ultrices sit amet, tincidunt in eros. Suspendisse quis elit at ligula rutrum elementum nec ut ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vehicula tellus nec mollis varius. Morbi ut dui cursus, eleifend leo nec, mattis sapien. Vivamus in felis quam.</p>

			<a href="#footer" class="btn btn-black">Nos réseaux sociaux</a>
				
		</div>
		
	</div>

	<div class="backgroundPrimary">

		<div class="pageWidth py"> 

			<div class="mapFirst">

				<h3 class="title">faites des rencontres partout en france !</h3>

				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vehicula tellus nec mollis varius. Morbi ut dui cursus, eleifend leo nec, mattis sapien. Vivamus in felis quam. Duis facilisis nibh eget sagittis semper. Etiam magna nisi, vehicula eget ultrices sit amet, tincidunt in eros. Suspendisse quis elit at ligula rutrum elementum nec ut ante.</p>

				<a href="index.html" class="btn btn-white">En savoir plus</a>

			</div>

			<div class="mapLast">

				<div id="map"></div>

				<div class="ribbon-wrapper">

					<div class="ribbon-front">Carte interactive</div>
					<div class="ribbon-edge-bottomright"></div>

				</div>
				
			</div>
			
		</div>
		
	</div>

	<div class="pageWidth py">

		<div class="divider div-transparent div-arrow-down" style="margin-bottom: 100px; margin-top: 70px;"></div>

		<div class="textTitleContainer">

			<h3 class="textTitle">SUIVEZ L'ACTUALITé</h3>

			<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vehicula tellus nec mollis varius. Morbi ut dui cursus, eleifend leo nec, mattis sapien. Vivamus in felis quam.</p>
				
		</div>

		<div class="newContainer">

			<div class="block-item">

                <div class="heading">

                    <img src="image/ARTICLE_SCOOTER.png" class="image" alt="">

                    <h3 class="titleActu">
                    	<a href="index.html">Actu de la semaine #1 : Implementation du GitHub !</a>
                    	<span class="small">il y a 2 mois par <a href="index.html">Antoineuuh</a></span>
                    </h3>

                </div>

                <div class="descriptionActu">
                    À LA UNE CETTE SEMAINE Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vehicula tellus nec mollis varius. Morbi ut dui cursus, eleifend leo nec, mattis sapien. Vivamus in felis quam. Duis facilisis nibh eget sagittis semper. Etiam magna nisi, vehicula eget ultrices sit amet, tincidunt in eros. Suspendisse quis elit at ligula rutrum elementum nec ut ante...
                </div>
            </div>
			
			<div class="block-item">

                <div class="heading">

                    <img src="image/ARTICLE_SCOOTER.png" class="image" alt="">

                    <h3 class="titleActu">
                    	<a href="index.html">Actu de la semaine #1 : Implementation du projet !</a>
                    	<span class="small">il y a 3 jours par <a href="index.html">TitiLeChatPot</a></span>
                    </h3>

                </div>

                <div class="descriptionActu">
                    À LA UNE CETTE SEMAINE Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vehicula tellus nec mollis varius. Morbi ut dui cursus, eleifend leo nec, mattis sapien. Vivamus in felis quam. Duis facilisis nibh eget sagittis semper. Etiam magna nisi, vehicula eget ultrices sit amet, tincidunt in eros. Suspendisse quis elit at ligula rutrum elementum nec ut ante...
                </div>
            </div>

		</div>

	</div>

	<div class="center" style="margin-top: -30px;">

		<a href="index.html" class="btn btn-black">Plus d'articles</a>
			
	</div>

	<div class="spacer"></div>

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