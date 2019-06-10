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
menu -->



<nav class="navigation"  >

	<button type="button" class="open_menu">
		 <img data-0="display:block;position: fixed;
		             margin-left: 3vw;
		             margin-top:3vh;"
			  data-9499="display:block;position: fixed;
			             margin-left: 3vw;
			             margin-top:3vh;"
			  data-9500="display:none;position: fixed;
			             margin-left: 3vw;
			             margin-top:3vh;"
			  data-end="display:none;position: fixed;
			             margin-left: 3vw;
			             margin-top:3vh;"
			  src="img/open.png" alt="">

		 <img data-0="display:none;position: fixed;
		             margin-left: 3vw;
		             margin-top:3vh;"
			  data-9499="display:none;position: fixed;
			             margin-left: 3vw;
			             margin-top:3vh;"
			  data-9500="display:block;position: fixed;
			             margin-left: 3vw;
			             margin-top:3vh;"
			  data-end="display:block;position: fixed;
			             margin-left: 3vw;
			             margin-top:3vh;"
			  src="img/open2.png" alt="">
		 <!-- <svg viewBox="0 0 200 200" style="enable-background:new 0 0 200 200;"  >
		 	<g>
				<rect fill="#ff0000" data-0="fill:#000000" data-3000="fill:#ffffff" x="O" y="0" width="156" height="64">
			</g>
		 </svg> -->
	</button>

	<div class="menu" data-0="background-color:var(--noir);" data-9499="background-color:var(--blanc);" data-9500="background-color:var(--blanc);" data-end="background-color:var(--blanc);" >

		<h1 data-0="font-family: 'VG5000';
		          color: var(--blanc);
		          font-size: 3em;
		          margin-left: 10%;
		          margin-top: 10%;
		          position: absolute;"
		data-9499="bfont-family: 'VG5000';
		          color: var(--blanc);
		          font-size: 3em;
		          margin-left: 10%;
		          margin-top: 10%;
		          position: absolute;"
		data-9500="font-family: 'VG5000';
		          color: var(--rouge);
		          font-size: 3em;
		          margin-left: 10%;
		          margin-top: 10%;
		          position: absolute;"
		data-end="font-family: 'VG5000';
		          color: var(--rouge);
		          font-size: 3em;
		          margin-left: 10%;
		          margin-top: 10%;
		          position: absolute;" >

							Dear Data, <br> My Data
		</h1>

		<button  type="button" class="close_menu">
			<img data-0="display:block;position: absolute;
								margin-top: 5%;"
				 data-9499="display:block;position: absolute;

         					 margin-top: 5%;"
				 data-9500="display:none;position: absolute;

         					 margin-top: 5%;"
				 data-end="display:none;position: absolute;
         					 margin-top: 5%;"
				 src="img/close.png" alt="">

			<img data-0="display:none;position: absolute;

								margin-top: 5%;"
				 data-9499="display:none;position: absolute;

         					 margin-top: 5%;"
				 data-9500="display:block;position: absolute;
         					 margin-top: 5%;"
				 data-end="display:block;position: absolute;
         					 margin-top: 5%;"
				 src="img/close2.png" alt="">
		</button>

		<div class="overflow">


		<div class="progress_bar" data-0="height:calc(0%/3);background-color:var(--blanc);" 	data-9499="height:calc(33%/3);background-color:var(--blanc);" data-9500="height:calc(33%/4);background-color:var(--rouge);" data-end="height:calc(100%/4);background-color:var(--rouge);">

		</div>

		<ul class="liste_liens">

			<li><a data-0="font-family: 'VG5000'
										color: var(--blanc);"
			data-9499="font-family: 'VG5000';
										color: var(--blanc);"
			data-9500="font-family: 'VG5000';
										color: var(--rouge);"
			data-end="font-family: 'VG5000';
										color: var(--rouge);"
		  href="#grace_au_traces">Grâce aux traces ...</a></li>
			<li><a data-0="font-family: 'VG5000'
										color: var(--blanc);"
			data-9499="font-family: 'VG5000';
										color: var(--blanc);"
			data-9500="font-family: 'VG5000';
										color: var(--rouge);"
			data-end="font-family: 'VG5000';
										color: var(--rouge);"
			href="#tu_donnes_le_droit">Tu donnes le droit ...</a></li>
			<li><a data-0="font-family: 'VG5000'
										color: var(--blanc);"
			data-9499="font-family: 'VG5000';
										color: var(--blanc);"
			data-9500="font-family: 'VG5000';
										color: var(--rouge);"
			data-end="font-family: 'VG5000';
										color: var(--rouge);"
			href="#retrouve_la_maitrise">Retrouve la maîtrise ...</a></li>
			<li><a data-0="font-family: 'VG5000'
										color: var(--blanc);"
			data-9499="font-family: 'VG5000';
										color: var(--blanc);"
			data-9500="font-family: 'VG5000';
										color: var(--rouge);"
			data-end="font-family: 'VG5000';
										color: var(--rouge);"
			href="#choix_du_nav">Le choix du navigateur ...</a></li>

		</ul>
	</div>

	</div>
</nav>
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

<div id="grace_au_traces" data-scrollpos="600" class="titre_partie_1" data-600="opacity:0;top:20vw;" data-900="opacity:1;top:20vw;" data-1200="opacity:0;top:20vw;">
        <h1>Grâce aux traces que tu laisses quand tu navigues sur le web</h1>
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


			<div id="tu_donnes_le_droit" data-scrollpos="6000" class="titre_partie_1" data-5900="opacity:0;top:15vw;z-index:-1" data-6000="opacity:1;top:15vw;z-index:3000" data-6800="opacity:1;top:15vw;" data-7000="opacity:0;top:15vw; z-index:-1">
				<h1 id="tu_donnes_droit_titre">Tu nous en donnes <br> même le droit</h1>
				<p id="text_v2">
					Si tu achète une paire de chaussures sur Zalando, ce site connait
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


			<div class="fcku titre_partie_1" data-9300="opacity:0;top:22vw;" data-9500="opacity:1;top:22vw;" data-9800="opacity:0;top:22vw;" >
				<h1>Mais tout n’est pas noir et blanc</h1>
			</div>

<!--
deuxieme partie  -->

			<div  class="fcku titre_partie_2" data-9499="opacity:0;top:0%" data-9500="opacity:1;top:0%" data-9800="opacity:1;top:0%" data-11000="opacity:1;top:0%" data-11001="opacity:0;top:0%" >
				<h1 id="transition" data-9500="opacity:0;top:0%" data-9800="opacity:1;top:0%" data-11000="opacity:0;top:0%">Mais tout n’est pas noir et blanc</h1>
			</div>

			<div class="fcku titre_partie_2" id="retrouve_la_maitrise" data-scrollpos="11400" data-10089="opacity:0;top:0%" data-10090="opacity:1;top:0%" data-11400="opacity:1;top:0%" data-11700="opacity:1;top:0%" data-11701="opacity:0;top:0%" >
				<h1 data-11100="opacity:0;margin-top:20vw;" data-11400="opacity:1;margin-top:20vw;" data-11700="opacity:0;margin-top:20vw;">Tu peux retrouver <br>la maîtrise de <br>ta vie privée</h1>
			</div>

			<div class="fcku titre_partie_2"  data-11679="opacity:0;top:0%" data-11680="opacity:1;top:0%" data-12100="opacity:1;top:0%" data-12300="opacity:1;top:0%" data-12301="opacity:0;top:0%" >
				<h1 data-11800="opacity:0;top:0%" data-12100="opacity:1;top:0%" data-12300="opacity:0;top:0%">Avec quelques <br>	 gestes simples</h1>
			</div>

			<div  class="fcku titre_partie_2"  data-12299="opacity:0;top:0%" data-12300="opacity:1;top:0%" data-12700="opacity:1;top:0%" data-13000="opacity:1;top:0%" data-13001="opacity:0;top:0%" >
				<h1 data-12400="opacity:0;margin-top:20vw;" data-12700="opacity:1;margin-top:20vw;" data-13000="opacity:0;margin-top:20vw;">Notamment avec <br>le choix
de ton navigateur</h1>
			</div>

			<div class="fcku titre_partie_2" data-12999="opacity:0;top:0%" data-13000="opacity:1;top:0%" data-13400="opacity:1;top:0%" data-13700="opacity:1;top:0%" data-13701="opacity:0;top:0%" >
				<p data-13100="opacity:0;top:9vh" data-13400="opacity:1;top:9vh" data-13700="opacity:0;top:9vh" >Le navigateur Internet est le logiciel que tu utilises pour aller sur le Web. Et tu es dépendant de lui pour toutes tes
navigations, que ce soit sur ton téléphone ou ton ordi.
Il est donc très important de bien le choisir.
</p>
			</div>

			<div id="choix_du_nav" data-scrollpos="14000" class="fcku titre_partie_2"  data-13699="opacity:0;top:0%" data-13700="opacity:1;top:0%" data-14000="opacity:1;top:0%" data-14300="opacity:1;top:0%" data-14301="opacity:0;top:0%" >
				<img id="focus_chrome" data-13700="opacity:0;top:0%" data-14000="opacity:1;top:0%" data-14300="opacity:0;top:0%" src="img/chrome.svg" alt="">
				<h1 id="focus_titre" data-13700="opacity:0;top:0%" data-14000="opacity:1;top:0%" data-14300="opacity:0;top:0%">Google Chrome</h1>
				<p id="focus_p" data-13700="opacity:0;top:0%" data-14000="opacity:1;top:0%" data-14300="opacity:0;top:0%" >Chrome est développé par Google, c’est le navigateur Internet le plus utilisé au monde et il est très performant.
Mais tu dois savoir que le respect de la vie privée n’est pas la priorité d’une société comme Google, dont le business repose sur tes données.
			</div>

			<div  class="fcku titre_partie_2"  data-14299="opacity:0;top:0%" data-14300="opacity:1;top:0%" data-14600="opacity:1;top:0%" data-14900="opacity:1;top:0%" data-14901="opacity:0;top:0%" >
				<h1 data-14300="opacity:0;top:0%" data-14600="opacity:1;top:0%" data-14900="opacity:0;top:0%">Je t’invite grandement à un
					en essayer un autre</h1>
			</div>

			<div  class="fcku titre_partie_2"  data-14899="opacity:0;top:0%" data-14900="opacity:1;top:0%" data-15200="opacity:1;top:0%" data-15500="opacity:1;top:0%" data-15501="opacity:0;top:0%" >
				<img id="focus_brave" data-14900="opacity:0;top:0%" data-15200="opacity:1;top:0%" data-15500="opacity:0;top:0%" src="img/brave.svg" alt="">
				<h1 id="focus_titre_brave" data-14900="opacity:0;top:0%" data-15200="opacity:1;top:0%" data-15500="opacity:0;top:0%"9vhrave</h1>
				<p id="focus_p_brave" data-14900="opacity:0;top:0%" data-15200="opacity:1;top:0%" data-15500="opacity:0;top:0%" >
					Brave est un navigateur développé par une équipe de spécialistes de la vie privée. Le petit Lion est très performant, il affiche tes sites web plus rapidement que les autres. Pourquoi ? Il supprime beaucoup de contenu sur les pages que tu visites essentiellement du contenu publicitaire. Mais si tu veux jouer à Forge Of Empire par contre ou un autre jeu du même genre ça risque d’être plus compliqué.
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

		$('nav').on('click', 'a', function(){
			var target = $(this).attr('href'),
				pos = $(target).attr('data-scrollpos');

			$('html, body').animate({'scrollTop': pos}, 1500, 'swing')



		})

		$('.open_menu').on('click', function(){
		$('.menu').addClass('visible');
		$('.open_menu').addClass('not_visible');
	})

	$('.close_menu').on('click', function(){
		$('.menu').removeClass('visible');
		$('.open_menu').removeClass('not_visible');
	})

		</script>
</body>
</html>
