<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Dear Data, My Data</title>
	<link rel="stylesheet" type="text/css" href="css/fonts.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>


<body class="locked">

<!--
recupérer les infos de l'utilisateur pour lui faire un affichage personnalisé
-->

<?php var_dump($_SERVER); ?>


<!--
Intro que l'on peut pas skip // "Je te connais"
-->

    <!--
    dans l'idée enlever la video pour du pure animation css
    -->

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
			</div>





<!--
FIN Intro // Retour à un scroll "classique"
-->


    <div id="scroll" class="premiere_partie dragscroll">

<!--
Première partie avec le premier texte -->

      <div class="titre_partie_1" data-600="opacity:0;top:15vw;" data-900="opacity:1;top:15vw;" data-1200="opacity:0;top:15vw;">
        <h1>Grâce aux trâces que tu laisses quand tu navigues sur le web</h1>
      </div>

			<div class="titre_partie_1" data-1300="opacity:0;top:10vw;" data-1600="opacity:1;top:10vw;" data-1900="opacity:0;top:10vw;">
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
				<p id="tes_nav_txt">
					Lorsque tu navigues sur le net sait-tu que tu ne visites pas uniquement les sites sur lesquels tu cliques ? De nombreux sites, que l’on appelle traqueurs collectent tes données personnelles sans même que tu t’en rendes compte. Je te conseille de faire l’expérience, avec l’extension Lightbeam de Firefox ou cookieviz de la CNIL (Commission Nationale de l'Informatique et des Libertés), et de voir toi même par qui tu es traqué.
					</p>


					<div class="tes_nav_img">

					<img id="img_tes_nav_1" data-5200="width:0vh;margin-left:70vw;" data-5600="width:30vh;margin-left:65vw;" src="img/hacker1.svg" alt="">
					<img id="img_tes_nav_2" data-5200="width:0vh;margin-left:85vw;" data-5600="width:30vh;margin-left:80vw;" src="img/hacker2.svg" alt="">
					<img id="img_tes_nav_3" data-5200="width:0vh;margin-left:55vw;" data-5600="width:30vh;margin-left:50vw;" src="img/hacker3.svg" alt="">
					<img id="img_tes_nav_0" data-5200="margin-left:0vw;width:40vh;margin-top:0vh;" data-5600="margin-left:-5vw;width:40vh;margin-top:-15vh;" src="img/google.svg" alt="">

				</div>
			</div>


			<div class="titre_partie_1" data-5900="opacity:0;top:15vw;" data-6000="opacity:1;top:15vw;" data-6800="opacity:1;top:15vw;" data-7000="opacity:0;top:15vw;">
				<h1 id="tu_donnes_droit_titre">Tu nous en donnes <br> même le droit</h1>
				<p id="tu_donnes_droit_texte">
					Invent, comnitatis mollesequia cus consequide sedipsae labore solore sequi qui cuptatem. Et aut optia volorat.
					Les pro dust quiberum nullorecus.
					Et aut optia volorat.
					Les pro dust quiberum nullorecus.
					</p>

<!--
					demande section -->

					<div id="demande_box" >

					        <h1 id="titre_demande">Politique de confidentialité</h1>

					        <p>
					          Nequas dolorep edigendit qui ut voluptate molumquo essimincta doluptatium is evelles sequunt est, utem eos et duciis doluptiunto exerro ipsus eum quia vel imustru mquiae ipsunt adit quam, te simusam quo doluptas et volore comnimpores aut occatio optatiorum atquiam, a cupta voloribus non porem eatemporae odistor ehendiae arcia vellut et repuda dolum eatur ra volorepero incipid es id modicius di tor re, coresequia sa es nis dellabo remporibus rem es sam  fuga. Et reptatur, solo et volorum ipsunt et vera de occabo. Fuga. Ut harumquam eumquuntes ex es natqui aut ut volupis eaquodis dolorum laborio. Editem. Te sum assi audigen isinctati demolupta pa nobis doluptam, niet laboresti voluptatis unt ad que officie nditatu mquisimus doluptur si duci rehent.
					          Is reriaer ionsed quae nulpa eumquo maiore, opta corerrum volendi officius, tem alitatem. Ovit expelib ustrum et quiam aut exped minit lia vent, volupta sandelictem rerrovi tibeati blabori bername ndusape ligenti onsequid miliber ferrum quas debis idem asin comnit as audae dolupta tibustrum deles doluptatem quodis escias rera autaquo blabor sandiae ad et molorit, vit idelleseque provide ntotatis dolore lit officia si doluptatem aut re derum es eum siti arum alibusda sae optatium nobitiam ipsam quam nis archiciliqui ut et, consequo dolupta venihillit audi re estiore perion nis quia cum fugitatibus comnis quatentia voluptam eossit evendae voles exere simporero totat acesed qui beatium faceptur rem asimus nonessinit reri dolum accaererro verfero rporibusae laborrore suntem sit ium volupiet, utempel latiscium ium et alis rem. Luptasi occum ea del imus, sam, sedignis dolum am, si consed ut excepudi voloribust eosae sectibus, sum exerspe ritectem vid evenis iumquia nimillabor am que ipiendi ommodis exceat voluptaquis deligen imenihit, tem excestia de dent.
					          Vid quianist magnit, saperumque que velectis dia eos voluptae cor alis peri oditas assequi si asimint, si quia quid quidess imollati conseri tasinte mporis am eleculpa cus exerum, temquist, quia diatecuptis dolor sam rerit que volorum volestrum reptae expernate omnis ea debissi tatur?
					          Ovitatibus. Bis aut lante quiducium volorro inimus explati quam sequibus alitatia seque natenihit il ma volupta tasint haruntio. Ut esequam quam voluptam qui ipsunt moluptatquam re, is alit hit exerum fugitaepere net volor seque velia sed earcipi endiasimi, ommost dolendisci veliaes molor acimodi diciunt odionsenim autem audaeprat quiam, coraepel ma dem quas unt lateni ium rem consediscias ute maximenis magniam aut que natque pratur?
					          Ficiisquam quossuntem enis sed que magnien daepro que nestemp oressequam, que eritiae di conserovid quo vellatio cor re eaque precto volorerum simpore ptatur, voluptas et veribus, cum quibeatem ex ersperore es ex eossimi, tem as plia doluptaquid maio blabore peruptatus nos eatur, cum quuntempore, sum imporepedi con et audam, is eatquati dis paria doluptatat.
					          Ate velitas as delit, temperi consequiatem dolorporem endit, sae plicias peliqui cuscitae alissit perrovit volupis idelene caboreiur a dis in naturem entur, omnis autemquunt ese erferumqui dolore voles molo odi doluptur? Berchicid eaquidebist, si in coribus voloriatiis dia quossus estiam, ut quo id maximolestia sam velitio necatur accae vercipsum quistiis escille ndaerumque venditiunt, se lam quoditi rest periti non con perat ratibus in nobit ipid ut doloreria volor archit volore quistis prae eum aut idemquo optat autem eum estiam et est, ulpario tem harchit magnatestrum cus sus, officipsae. Caborrum endandis dunti restrum quam que aut enem quosam aut ligendi culpa aut mint, optaspe ribusda volorep taecus et volo qui adit la porestrum est ut velitat es estioritem es volorat iuntibe ateceaqui atur rem as modigen ihillaut et poribus aut volorit eserae cuptio mo mod que cones a dit la sitem iliquia sitionsequo cupitat eceatio. Evenis mi, utas eratur?
					          Volores tiberru ptibustem elessin estis quam, volupid mod mo to conem ius quaectia sit quae paria volo magnihil eatectis pa venes dis acid quis dolut es dolores suntur accullu ptasped earibus ad ullanda eperuptaquam ex exeruptat dent dus a voluptas animaiore laboreprati dendit et, optatur?
					          Im labo. Consequibus sedio cus estrunt et volut doloreium fugit laboribusam ratur?
					          Perum sin repreium, sit lab in commoluptus alit everum que coris exces esti odi idebis magnis cusam natio. Nem in con non ra sam reptati ntiatem aboreni molupta consequid magnisquam atuscid erchillendel modioru ptaturi onsedipsum qui vent que incimin ex et et eos atur, tem ex et quos expla ex essequas eat voluptasitis aceptatem fugit eum harit aut odi blant a simus volorror maximendae mos eturitem eveles int, vel ipictat et debit fugiaes dolut iditia velectas secaborum, comnis dolorrumqui sapelib eriaeptatis denimo molor magnis ratempore, sam ab ime ipis reprate mquiae voluptam fugitio nsediosant mil im evelendi bero experum ration re velis eaquiam fuga. Facipsam, omni nim in rem endam volore ent ulparum intem rerum rero conesci enihil eicatur? Qui nimilictum eum excersp iciatur iaspero et laut et lam alit occullut faciis que nonsent estis et voluptatur? Quis ea ex ea cuptae ipsam, voles pelest, sandae soluptae velique vendisinciam quiatio dolorem volore illes que dolloriam, comnimet ad qui ut modiorpore, tet quidunt voluptatia qui rent ent pliquibus dolupta sperit lab in preptisit, te nem nusapel iquaesseque nem. Nem re doluptat.
					          Iquam, volores aut qui blam elitatinieni soluptat ut porrorpor min prat omnihillupta essequi atenihitatus dolorem quo et erum, sus voluptatem essectore soloratiniae eris mo tem rene natibusciur, senet optatur rem at eum vid unt et omniet quisi dolo velit velit acculluptati doluptium quae coriber ferfere pudanit, ut et litibusa cum voluptaspis simenis doluptatem enitat esectoria quae rercipidus as iuntora temquias modit eles sinvel ium quianim quatur?
					          Aqui aute reruptu rehenis que ped et latia dunt, aut latius.
					          Cab ium, que num, omnimin consed moditiis molo ma voluptatenia dolora volore parupta tiasperibust oditem quos mi, sunt as rerit, inverum evellatis rem re etumeture, et laborem quid ut verferrovid quiatia eperum nonse dolut volupta ectatur, as rest, quatinciis preperitatum re raeperum veres elestotas eaquatene re voloritempor atuscid qui ra incto volecto torit, ipis quatist omni ab ipsunt, omni cus, nonecab oressunti debis simi, optatur? Qui dolorita sollaut doluptiis nietus, conectur sunt que pre voluptatus reptur apienis vid modis earchicita consecu ptionetur se lignatur assi untem as apide sint explici il etusdan daectur? Quiberro iuntis veligni hicitatio officatecae sit iur, que laudae num re qui idellore, consenda ant aliciat unt.
					          Ed maio vendae quae dolent quis sinte pore officilias atus, officium est lantia vollab in natur aspe officia cus explictur?
					          Bea que con cus auta dunt qui dolorem ex et lat officabo. Axime ea as eosa sandi net es enitate solo optatur as arumque venia quisinis aut et del inimilit ditae nihiliquae nonesciisto con nosanti nullati untioribus, vel int lictiatat odiasperiam is untus, quas exeriatem. Tiuntur alibea is aut quat.
					          Ferchil id ut eatem fugiatur, quistii sciuntiaecto ea sa conse eatur ad milit qui ra quam vendeni moloriscium nimus rempos essimilit exceatis autem et eum aut offici restis et fugiant earunto resciis delesto commoditia et autest eniminusame este por repro omnis derum dolorum eos as enis aspicidem ea ventin explit versperiatum re eum hil ipictur aut quatem suscia vel ius a nobit aut repero quia sinctis magnisquia sequatquas as dollorerum que et labo. Itas ut latem dipsum restrum facero coreped iciatur? Illupta deseditatem dio incimus.
					          Ipsam audandi dolorem dolorrum sit inis vellori ssequistotas cuptum sum vent autemped quia ani temqui quidelendi ratibusandae pligendunto vero ipid quis sitis aces enist et ressitatio moditio quis ut laut ommolo blabo. Oloremq uatecul pariatemolut elit officipiet quam labor aboratu remquodi cullori anihil inus re dusam reseque videlitatet volor aut adio imin cores aces dolorent, unt mod min nos ma voloreius quodisit, quiam qui velibus ea ipiduciet quid estioratium ut eatium facium id molorem oluptatius nobis earias restem velibea nonse sed quis a seditatincid u ut quibusdae que veliberum hil int, aut quiate nos endebit, officil iminis atemporit quossus doluptas aut lit volorrumquia autemporae. Eture magni commole stionecerio tendel maximi, simporectas doluptioreic to blautem iliqui se imodia si simus seribus arum audae. Evel eos quam quuntor aturiam velest, occus, is aut ex erferchil et aliatin parchil ibustia volor sed ut et volupit quiae necabor epratur? Qui odisqui bere illanis et omnis aut omnis et vel int fugit volupta tibus, odis natis qui nis modis simin et la pro optam qui volupis sim id min es el magnient fugiae pa vollest quiatas intis moluptatur sanimo int velestem quodia ne et eum ium, odis saestin ulparch icidit magnis cum iumquundaest earumet officia quas is ilitas resti consequame numquunt archilliati rem hil il invel im aut et pe autem rehendi piciendem a nonse porror remoluptis dolendae eostem aut volectemod quate earum as eosa conserum, offictoresci nossiti occusantus aut as minciliqui quatem re laccus del iuntiisciis dunt voluptas ut volorepel in ra que dolest inciet aut remporero quiam aliquis ent, officiis sit, eume net debistrum inctatur? Quis cum, adipsaeria volest, aut apidion poritium quae occulpa voluptatem elibus si in ratur sum ut eos dolo omnimin ullamet et rendici audigent et, solorit lab inctiis aut alibusam doluptur?
					          Dem dolessed unt id exeratur aut quatemqui tem aut assuntota velenis ad quia int asimusda quat aut plignitatate evero bla doluptatem sum nonsequi ad eos sus molo quas ex esto omnimo cor rerumquam quis se niscili quatur? Quia pro mo mil el inveriores aute nos essimped ma parunt qui reste ne venderum quunt.
					          Occae non con reperiant exeritate prepudis susam dolut quis qui beat estis secto exped estota si sollab in pliquunt.
					          Bo. Nam autatur, nonsed quissit iisquid qui rehentioria nullenite nestibu sandam quam quiasimagnia vid quo berumqui a cus poribus cimaior iberae et laccusciis apedia quistis rempel inci vente expera placers peribus evenditio cum apicil mos abo. Genis coria venit, cum quam, cus aut rempore mperspe nimillab id excerum aspienditas vellabo. Et offictor moluptae dolore molorat eceaque vit, volum eumque sa sit lam et oditem. Ti aped qui ut ut ea ne sunt, explianis quibusdae volorit il mod quist illestr uptinct iandem quidelent peruptatis eos volore aut aut idem as aditemp ossitaquam volo occabo. Niendae voluptate nos que et harum dolorem eles ut dolo minvel magnametur? Quias ditias ute voloressint quo incimi, cusam ario est, te se omnis volor simolores isciend icaeren ihitis si dolupta temporit, occae et acestia tionsequi dem sequaep erfero es eatias elessen ditior rehent, volorupta comnimi, venis et doluptam dipsandios pratur ressim volessi nullecusdae. Molupta turepedi rentur? Luptatur aut officte numquam voluptaecti ut a dolest qui consedi tiorum faces maioreh enihil enis aute sinullam et quidita nihitatquas nestium, ut qui cum vendant abo. Ullorem con pra se eos cum volendanti con porem ipietur? Quiae ilici ius quuntibus as eturehenem vernat volupit experum faccusanis quiae porescid endae od untet qui aciduciae quatur, occaesc imusam es mi, tem unt quae susa nis suntem ipsapelent od quiae vendell uptaqui blaboritis aborione delles dolentus, con pa arumque plandis evellorest, ipsus.
					          Expel etus modiossit que molori offici nissunt des molorum eturenduntis eos ad quis dolori odit, consedit et dolorehendam reperatis pla est fugit eveniendit lates quibero vidiae inuscim debitatem lantiusam, im repel iunt anto cum facides ellenim pellum voluptaturit ide nulloru ptatem aut et, niet venihic te por aditatatem. Ut imporectatur reiustrum as repero ipitios utae nest omnihil eum etur, quam, seque nimus aliquat endis is restrum si non coreius ad et ulpa quo dolut est, tem velicimendam ea que net maximus eaquodi tenient, commoluptat.
					          Asped ut quae voluptio verovid qui consequati cumqui ipsunt odis dolupic ianduci ressita spiendam hitat aut eos utatquo et laut aliqui consequam, to iusam rectaque dem labo. Nullaborro in re, sollut que et aut qui nobis parum eos exped quam exped modite aut volorro videlique nosam quostiat explab incti ommoluption eserum vel iur, commo to temosae nat
					        </p>

					      </div>



			</div>

			<div class="titre_partie_1" data-7100="opacity:0;top:20vw;" data-7200="opacity:1;top:20vw;" data-7800="opacity:0;top:20vw;" data-7810="opacity:0;top:20vw;">
				<h1>Pouquoi on <br> les récupère ?</h1>
			</div>
			<div class="titre_partie_1" data-7810="opacity:0;top:22vw;" data-7820="opacity:1;top:22vw;" data-8400="opacity:0;top:22vw;" data-8800="opacity:0;top:22vw;">
				<h1>Pour l'argent</h1>
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
