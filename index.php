<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Dear Data, My Data</title>
	<link rel="stylesheet" type="text/css" href="css/font.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>


<body class="locked">

<!--
recupérer les infos de l'utilisateur pour lui faire un affichage personnalisé
-->
<pre style="display:none">
<?php var_dump($_SERVER); ?>
</pre>

<!--
Intro que l'on peut pas skip // "Je te connais"
-->

    <!--
    dans l'idée enlever la video pour du pure animation css
    -->
<!--
			<div class="introtext">
					<div id="intro-texte1" class="slide current" data-duration="2">
						<p>Je te connais</p>
					</div>
					<div id="intro-texte2" class="slide" data-duration="2">
						<p>Je sais tout <br> de toi</p>
					</div>
					<div id="intro-texte3" class="slide" data-duration="2">
						<p>Comment ?</p>
					</div>
          <div id="intro-texte4" class="slide" data-duration="2">
						<p>Comment ?</p>
					</div>
          <button id="scrollbtn">
            scroooool
          </button>
			</div> -->





<!--
FIN Intro // Retour à un scroll "classique"
-->


    <div id="scroll" class="premiere_partie dragscroll">

<!--
Première partie avec le premier texte -->

<div class="titre_partie_1" data-600="opacity:0;top:15vw;" data-900="opacity:1;top:15vw;" data-1200="opacity:0;top:15vw;">
        <h1>Grâce aux trâces que tu laisses quand tu navigues sur le web</h1>
</div>

<div class="titre_partie_1" data-1300="opacity:0;top:20vw;" data-1600="opacity:1;top:20vw;" data-1900="opacity:0;top:20vw;">
        <p>
					Sur Internet, quand tu achètes, joues, likes, partages, on n’arrête pas de récolter tes information	personnelles. Ces données comme ton âge, ton adresse, ton orientation sexuelle, etc, c’est un peu de toi,	de ta vie privée. Certaines de tes données sont dites sensibles, c’est-à-dire qu’elles sont plus intimes que d’autres: cela peut être par exemple ton orientation sexuelle et ta vie sexuelle en général, tes opinions politiques ou ton dossier médical. </p>
</div>

<!--
	Image sur les données personnelles // infographie -->

<div data-1920="opacity:0;top:15vw;" data-1930="opacity:1;top:15vw;" data-5700="opacity:1;top:15vw;" data-5800="opacity:0;top:15vw;" >

						<div class="image_dataperso" data-1950="display:none;top:0vw;" data-2000="display:flex;top:0vw;z-index:1"  data-2050="display:none;">
			        <img src="img/donnee_perso_1.svg"></img>
			      </div>
						<div class="image_dataperso" data-2000="display:none;top:0vw;" data-2050="display:flex;top:0vw;z-index:2"  data-2100="display:none;">
			        <img src="img/donnee_perso_2.svg"></img>
			      </div>
						<div class="image_dataperso" data-2050="display:none;top:0vw;" data-2100="display:flex;top:0vw;z-index:3"  data-2150="display:none;">
			        <img src="img/donnee_perso_3.svg"></img>
			      </div>
						<div class="image_dataperso" data-2100="display:none;top:0vw;" data-2150="display:flex;top:0vw;z-index:4"  data-2200="display:none;">
			        <img src="img/donnee_perso_4.svg"></img>
			      </div>
						<div class="image_dataperso" data-2150="display:none;top:0vw;" data-2200="display:flex;top:0vw;z-index:5"  data-2250="display:none;">
			        <img src="img/donnee_perso_5.svg"></img>
			      </div>
						<div class="image_dataperso" data-2200="display:none;top:0vw;" data-2250="display:flex;top:0vw;z-index:6"  data-2300="display:none;">
			        <img src="img/donnee_perso_6.svg"></img>
			      </div>
						<div class="image_dataperso" data-2250="display:none;top:0vw;" data-2300="display:flex;top:0vw;z-index:7"  data-2350="display:none;">
			        <img src="img/donnee_perso_7.svg"></img>
			      </div>
						<div class="image_dataperso" data-2300="display:none;top:0vw;" data-2350="display:flex;top:0vw;z-index:8"  data-2400="display:none;">
			        <img src="img/donnee_perso_8.svg"></img>
			      </div>
						<div class="image_dataperso" data-2350="display:none;top:0vw;" data-2400="display:flex;top:0vw;z-index:9"  data-2450="display:none;">
			        <img src="img/donnee_perso_9.svg"></img>
			      </div>
						<div class="image_dataperso" data-2400="display:none;top:0vw;" data-2450="display:flex;top:0vw;z-index:10" data-2500="display:none;"  >
			        <img src="img/donnee_perso_10.svg"></img>
			      </div>
						<div class="image_dataperso" data-2450="display:none;top:0vw;" data-2500="display:flex;top:0vw;z-index:11" data-2550="display:none;"  >
			        <img src="img/donnee_perso_11.svg"></img>
			      </div>
						<div class="image_dataperso" data-2500="display:none;top:0vw;" data-2550="display:flex;top:0vw;z-index:12" data-2600="display:none;"  >
			        <img src="img/donnee_perso_12.svg"></img>
			      </div>
						<div class="image_dataperso" data-2550="display:none;top:0vw;" data-2600="display:flex;top:0vw;z-index:13" data-2650="display:none;"  >
			        <img src="img/donnee_perso_13.svg"></img>
			      </div>
						<div class="image_dataperso" data-2600="display:none;top:0vw;" data-2650="display:flex;top:0vw;z-index:14" data-2700="display:none;"  >
			        <img src="img/donnee_perso_14.svg"></img>
			      </div>
						<div class="image_dataperso" data-2650="display:none;top:0vw;" data-2700="display:flex;top:0vw;z-index:15"  data-2750="display:none;" >
			        <img src="img/donnee_perso_15.svg"></img>
			      </div>
						<div class="image_dataperso" data-2700="display:none;top:0vw;" data-2750="display:flex;top:0vw;z-index:1"  data-2800="display:none;">
			        <img src="img/donnee_perso_16.svg"></img>
			      </div>
						<div class="image_dataperso" data-2750="display:none;top:0vw;" data-2800="display:flex;top:0vw;z-index:2"  data-2850="display:none;">
			        <img src="img/donnee_perso_17.svg"></img>
			      </div>
						<div class="image_dataperso" data-2800="display:none;top:0vw;" data-2850="display:flex;top:0vw;z-index:3"  data-2900="display:none;">
			        <img src="img/donnee_perso_18.svg"></img>
			      </div>
						<div class="image_dataperso" data-2850="display:none;top:0vw;" data-2900="display:flex;top:0vw;z-index:4"  data-2950="display:none;">
			        <img src="img/donnee_perso_19.svg"></img>
			      </div>
						<div class="image_dataperso" data-2900="display:none;top:0vw;" data-2950="display:flex;top:0vw;z-index:5"  data-3000="display:none;">
			        <img src="img/donnee_perso_20.svg"></img>
			      </div>
						<div class="image_dataperso" data-2950="display:none;top:0vw;" data-3000="display:flex;top:0vw;z-index:6"  data-3050="display:none;">
			        <img src="img/donnee_perso_21.svg"></img>
			      </div>
						<div class="image_dataperso" data-3000="display:none;top:0vw;" data-3050="display:flex;top:0vw;z-index:7"  data-3100="display:none;">
			        <img src="img/donnee_perso_22.svg"></img>
			      </div>

			</div>
<!--
transition vers les trackeurs -->

			<div id="big-brother" class="titre_partie_1" data-3500="opacity:0;top:15vw;" data-3800="opacity:1;top:15vw;" data-4100="opacity:0;top:15vw;">
				<h1>«Big Brother is watching you !»</h1>
				<img src="img/oeil.svg" alt="">
			</div>

			<div class="titre_partie_1" data-4100="opacity:0;top:15vw;" data-4400="opacity:1;top:15vw;" data-4800="opacity:0;top:15vw;">
				<h1 id="surveille">On te surveille</h1>
			</div>

<!--
Tout au long de tes navigations -->

			<div class="titre_partie_1" data-4800="opacity:0;top:15vw;" data-5100="opacity:1;top:15vw;" data-5700="opacity:1;top:15vw;" data-5800="opacity:0;top:15vw;">
				<h1 id="tes_nav_titre">Tout au long de tes navigations</h1>
				<p id="text_v2">
					Lorsque tu navigues sur le net sait-tu que tu ne visites pas uniquement les sites sur lesquels tu cliques ? De nombreux sites, que l’on appelle traqueurs collectent tes données personnelles sans même que tu t’en rendes compte. Je te conseille de faire l’expérience, avec l’extension Lightbeam de Firefox ou cookieviz de la CNIL (Commission Nationale de l'Informatique et des Libertés), et de voir toi même par qui tu es traqué.
					</p>


					<div class="tes_nav_img">

					<img id="img_tes_nav_1" 
						data-5200="width:0%;bottom:0vh;left:50%" 
						data-5600="width:30%;bottom:20vh;left:20%" src="img/hacker3.svg" alt="">
					<img id="img_tes_nav_2" 
						data-5200="width:0%;bottom:0vh;left:50%" 
						data-5600="width:30%;bottom:20vh;left:50%" src="img/hacker1.svg" alt="">
					<img id="img_tes_nav_3" 
						data-5200="width:0%;left:50%;bottom:0vh" 
						data-5600="width:30%;left:80%;bottom:20vh" src="img/hacker2.svg" alt="">
					<img id="img_tes_nav_0" 
						data-5200="width:40vh;" 
						data-5600="width:50vh;" src="img/google.svg" alt="">

				</div>
			</div>


			<div class="titre_partie_1" data-5900="opacity:0;top:15vw;z-index:-1" data-6000="opacity:1;top:15vw;z-index:3000" data-6800="opacity:1;top:15vw;" data-7000="opacity:0;top:15vw; z-index:-1">
				<h1 id="tu_donnes_droit_titre">Tu nous en donnes <br> même le droit</h1>
				<p id="text_v2">
					Si tu achètes une paire de chaussures sur Zalando, ce site connait
ta pointure, ton sexe, ta carte de crédit et ton adresse. Il stocke
toute ces informations dans des fichiers texte qu’il crée et que
l’on nomme cookie. Lorsque tu acceptes l’utilisation des cookies
tu donnes le droit aux sites que tu visites de collecter tes
données par le biais des cookies.
					</p>

<!--
					demande section -->

					<div id="demande_box" >


					        <h2 id="titre_demande">Règles de confidentialité Google</h2>

					        <p>
										<span>Lorsque vous utilisez nos services, vous nous faites confiance pour le traitement de vos informations. Nous savons qu'il s'agit d'une lourde responsabilité, c'est pourquoi nous nous efforçons de les protéger, tout en vous permettant d'en garder le contrôle.</span><br><br>
										Nous utilisons les informations que nous collectons <span>pour personnaliser</span> nos services en fonction de vous, notamment pour vous proposer des recommandations, du contenu personnalisé et des résultats de recherche personnalisés. Par exemple, le Check-up Sécurité offre des astuces de sécurité adaptées à votre utilisation des produits Google. Le service Google Play exploite quant à lui des informations, telles que les applications que vous avez déjà installées et les vidéos que vous avez regardées sur YouTube pour vous proposer de nouvelles applications susceptibles de vous intéresser.<br><br>
										Selon vos paramètres, nous pouvons également <span>vous présenter des annonces personnalisées</span> sélectionnées sur la base de vos centres d'intérêt. Par exemple, si vous effectuez une recherche sur "VTT", il est possible qu'une annonce faisant la promotion d'équipement de sport s'affiche lorsque vous parcourez un site sur lequel la diffusion des annonces est assurée par Google. Vous pouvez accéder aux paramètres des annonces afin de gérer les informations que nous utilisons pour vous présenter des annonces.<br><br>
										<span>Les informations que nous collectons incluent les identifiants uniques, le type et les paramètres du navigateur, le type et les paramètres de l'appareil, le système d'exploitation, des données relatives au réseau mobile (telles que le nom de l'opérateur et le numéro de téléphone) et le numéro de version de l'application. Nous recueillons aussi des informations relatives aux interactions entre vos applications, vos navigateurs, vos appareils et nos services, telles que l'adresse IP, les rapports d'erreur, l'activité du système, ainsi que la date, l'heure et l'URL de provenance de votre demande.</span><br><br>
										<span>Vous pouvez <a href="https://takeout.google.com/?utm_source=pp&hl=fr">exporter</a> une copie du contenu de votre compte Google</span> si vous souhaitez en créer une sauvegarde ou l'utiliser avec un service autre que Google.<br><br>
										<span>Vous pouvez également formuler une demande de <a href="https://support.google.com/legal?p=privpol_remove&hl=fr">suppression</a> de contenu de services Google spécifiques</span>, sur la base de la législation en vigueur.<br><br>
									</p>

					      </div>



			</div>

			<div class="titre_partie_1" data-7100="opacity:0;" data-7200="opacity:1;"  data-8400="opacity:1;" data-8800="opacity:0;">

					<img id="billet" src="img/billet.svg" alt="" data-7100="margin-top:-300vh;position:absolute;z-index:20;" data-8800="margin-top:300vh;position:absolute;z-index:20;">

					<div class="fcku titre_partie_1"  data-7200="opacity:1;top:20vw;" data-7800="opacity:0;top:20vw;" data-7810="opacity:0;top:20vw;">

						<h1>Pouquoi on <br> les récupère ?</h1>

					</div>
					<div class="fcku titre_partie_1" data-7950="opacity:0;top:22vw;" data-7960="opacity:1;top:22vw;" data-8400="opacity:1;top:22vw;" >
						<h1>Pour l'argent</h1>
					</div>

			</div>

			<div class="titre_partie_1" data-8600="opacity:0;top:20vw;" data-8900="opacity:1;top:20vw;" data-9200="opacity:0;top:20vw;">
				<p>
				Les données, tes données, c’est un peu l’or noir d’aujourd’hui.
				Pour certaines entreprises, elles ont beaucoup de valeur.
				Pourquoi ? Parce qu’elles permettent de mieux te connaître
				et de te proposer des produits et services que tu seras tenté
				d’acheter. C’est la publicité 2.0.
			  </p>
			</div>


    </div>



	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/skrollr.min.js"></script>
	<script type="text/javascript" src="js/intro.js"></script>
	<!-- <script type="text/javascript" src="js/main.js"></script> -->
	<script type="text/javascript">
		var s = skrollr.init({
			edgeStrategy: 'set',
			easing: {
				WTF: Math.random,
				inverted: function(p) {
					return 1-p;
				}
			}
		});
		</script>
</body>
</html>
