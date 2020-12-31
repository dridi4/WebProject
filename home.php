<?php
session_start();
if (strlen($_SESSION['id']==0)) {
  header('location:index.php');
  } else{
	
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>DOCTOR - Responsive HTML &amp; Bootstrap Template</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="assets/css/demo_1/style.css">
	<script src="js/modernizr.js"></script>
	<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
	
	<!-- ====================================================
	header section -->
	<header class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-5 header-logo">
					<br>
					<a href="index.html"><img src="img/logo.png" alt="" class="img-responsive logo"></a>
				</div>

				<div class="col-md-7">
					<nav class="navbar navbar-default">
					  <div class="container-fluid nav-bar">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					    </div>

					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					      
					      <ul class="nav navbar-nav navbar-right">
					        <li><a class="menu active" href="#home" >Domicile</a></li>
					        <li><a class="menu" href="#about">à propos de nous</a></li>
					        <li><a class="menu" href="#service">Nos services </a></li>
					        <li><a class="menu" href="#team">equipe</a></li>
							<li><a class="menu" href="#contact"> Prendre un rendez-vous</a></li>
							<li><a class="menu" href="file:///C:/Users/SOS041120/Desktop/StarAdmin-Free-Bootstrap-Admin-Template-master/src/pages/tables/basic-table.html"> tableau de bord</a></li>
							<li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                 </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <a class="dropdown-item"><a href="logout.php">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
              </div>
            </li>
					      </ul>
					    </div><!-- /navbar-collapse -->
					  </div><!-- / .container-fluid -->
					</nav>
				</div>
			</div>
		</div>
	</header> <!-- end of header area -->

	<section class="slider" id="home">
		<div class="container-fluid">
			<div class="row">
			    <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
					<div class="header-backup"></div>
			        <!-- Wrapper for slides -->
			        <div class="carousel-inner" role="listbox">
			            <div class="item active">
			            	<img src="img/slide-one.jpg" alt="">
			                <div class="carousel-caption">
		               			<h1>fournir</h1>
		               			<p>service de haute qualité pour les hommes & amp; femmes</p>
		               			<button>apprendre encore plus</button>
			                </div>
			            </div>
			            <div class="item">
			            	<img src="img/slide-two.jpg" alt="">
			                <div class="carousel-caption">
		               			<h1>fournir</h1>
		               			<p>service de haute qualité pour les hommes & amp; femmes</p>
		               			<button>apprendre encore plus</button>
			                </div>
			            </div>
			            <div class="item">
			            	<img src="img/slide-three.jpg" alt="">
			                <div class="carousel-caption">
		               			<h1>fournir</h1>
		               			<p>service de haute qualité pour les hommes & amp; femmes</p>
		               			<button>apprendre encore plus</button>
			                </div>
			            </div>
			            <div class="item">
			            	<img src="img/slide-four.jpg" alt="">
			                <div class="carousel-caption">
		               			<h1>fournir</h1>
		               			<p>service de haute qualité pour les hommes & amp; femmes</p>
		               			<button>apprendre encore plus</button>
			                </div>
			            </div>
			        </div>
			        <!-- Controls -->
			        <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
			            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			            <span class="sr-only">Précédente</span>
			        </a>
			        <a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
			            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			            <span class="sr-only">Next</span>
			        </a>
			    </div>
			</div>
		</div>
	</section><!-- end of slider section -->

	<!-- about section -->
	<section class="about text-center" id="about">
		<div class="container">
			<div class="row">
				<h2>A Propos De Nous</h2>
				<h4>Depuis 30 ans d'existence,le Clinique El-Gazella a accueilli des patients du monde entier et se sont toujours engagées dans une démarche d’innovation permanente.
Ce complexe offre des prestations d’hôtellerie hospitalière de haute qualité de par ses suites, ses chambres individuelles ou doubles et salles de bain, assurant un bon confort pour tous les patients et leurs familles</h4>
				<div class="col-md-4 col-sm-6">
					<div class="single-about-detail clearfix">
						<div class="about-img">
							<img class="img-responsive" src="img/item1.jpg" alt="">
						</div>
						<div class="about-details">
							<div class="pentagon-text">
								<h1>E</h1>
							</div>
							<h3>Specialiste des enfants</h3>
							<p>Une approche complète autour du sommeil de votre enfant. Alliant un suivi paramédical, un soutien humain, des conseils pratiques, une prise en compte de votre enfant dans son environnement tout en valorisant vos intuitions de parents. Sans forcing et sans entrainement au sommeil. Découvrez les consultations à Tunis et à l’étranger.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="single-about-detail">
						<div class="about-img">
							<img class="img-responsive" src="img/item2.jpg" alt="">
						</div>
						<div class="about-details">
							<div class="pentagon-text">
								<h1>C</h1>
							</div>

							<h3> Specialité Cardiologie</h3>
							<p>La cardiologie est la spécialité médicale consacrée au cœur et aux vaisseaux ainsi qu’à leurs maladies. Le cardiologue évalue notamment la fonction cardiaque, la morphologie et la taille des cavités, l'intégrité des valves ainsi que la perméabilité des artères et des veines. La prise en charge des maladies coronaires, de l’hypertension artérielle et de l’insuffisance cardiaque.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="single-about-detail">
						<div class="about-img">
							<img class="img-responsive" src="img/item3.jpg" alt="">
						</div>
						<div class="about-details">
							<div class="pentagon-text">
								<h1>H</h1>
							</div>
							<h3>Specialisté Hématologie</h3>
							<p>Cette spécialité étudie le sang et ses maladies (hémopathies).
Avec ses deux versants ; clinique et biologique, le diagnostique et la prise en charge thérapeutique des hémopathies bénignes et malignes :(les anémies, les leucémies : leucémie lymphoïde chronique,leucémie aigue myéloblastique, la maladie de Hodgkin, les lymphomes non Hodgkiniens) sont assurés.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- end of about section -->


	<!-- service section starts here -->
	<section class="service text-center" id="service">
		<div class="container">
			<div class="row">
				<h2>Nos services</h2>
				<h4>Lorem Ipsum est le texte factice standard de l'industrie depuis les années 1500 </h4>
				<div class="col-md-3 col-sm-6">
					<div class="single-service">
						<div class="single-service-img">
							<div class="service-img">
								<img class="heart img-responsive" src="img/service1.png" alt="">
							</div>
						</div>
						<h3>Problème cardiaque</h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-service">
						<div class="single-service-img">
							<div class="service-img">
								<img class="brain img-responsive" src="img/service2.png" alt="">
							</div>
						</div>
						<h3>problème cérébral</h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-service">
						<div class="single-service-img">
							<div class="service-img">
								<img class="knee img-responsive" src="img/service3.png" alt="">
							</div>
						</div>
						<h3>problème de genou</h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-service">
						<div class="single-service-img">
							<div class="service-img">
								<img class="bone img-responsive" src="img/service4.png" alt="">
							</div>
						</div>
						<h3>problème d'os humains</h3>
					</div>
				</div>
			</div>
		</div>
	</section><!-- end of service section -->


	<!-- team section -->
	<section class="team" id="team">
		<div class="container">
			<div class="row">
				<div class="team-heading text-center">
					<h2>equipes</h2>
					<h4>bienvenue</h4>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person">
						<img class="img-responsive" src="img/member1.jpg" alt="member-1">
					</div>
					<div class="person-detail">
						<div class="arrow-bottom"></div>
						<h3>Dr. M. Weiner</h3>
						<p>Specialité Cardiologie,
							l'un des meilleurs de ce domaine
							a obtenu un diplôme de l'école de médecine à marseille
							et il est le capitaine de l'équipe de Cardiologie </p>
					</div>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person-detail">
						<div class="arrow-top"></div>
						<h3>Dr. Danielle</h3>
						<p>obtenu un déplome d'Oxford en La médecine générale.
							membre de l'organisation mondiale de la sante </p>
					</div>
					<div class="person">
						<img class="img-responsive" src="img/member2.jpg" alt="member-2">
					</div>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person">
						<img class="img-responsive" src="img/member3.jpg" alt="member-3">
					</div>
					<div class="person-detail">
						<div class="arrow-bottom"></div>
						<h3>Dr. Caitlin</h3>
						<p>un spécialiste en pédiatrie de puis 2009
						</p>
					</div>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person-detail">
						<div class="arrow-top"></div>
						<h3>Dr. Joseph</h3>
						<p>une jeune docteur qui est la responsable de l'equipe de l'Hématologie</p>
					</div>
					<div class="person">
						<img class="img-responsive" src="img/member4.jpg" alt="member-4">
					</div>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person">
						<img class="img-responsive" src="img/member5.jpg" alt="member-5">
					</div>
					<div class="person-detail">
						<div class="arrow-bottom"></div>
						<h3>Dr. Michael</h3>
						<p>un docteur d'orl et Chirurgien
						</p>
					</div>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person-detail">
						<div class="arrow-top"></div>
						<h3>Dr. Hasina</h3>
						<p> une docteur dans la gynécologie et mombre de l'organisation mondiale de la sante   </p>
					</div>
					<div class="person">
						<img class="img-responsive" src="img/member6.jpg" alt="member-5">
					</div>
				</div>
			</div>
		</div>
	</section><!-- end of team section -->

	<!-- map section -->
	<div class="api-map" id="contact">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 map" id="map"></div>
			</div>
		</div>
	</div><!-- end of map section -->

	<!-- contact section starts here -->
	<section class="contact">
		<div class="container">
			<div class="row">
				<div class="contact-caption clearfix">
					<div class="contact-heading text-center">
						<h2>contact us</h2>
					</div>
					<div class="col-md-5 contact-info text-left">
						<h3>contact information</h3>
						<div class="info-detail">
							<ul><li><i class="fa fa-calendar"></i><span>Lundi-vendredi:</span> 9:30 AM to 6:30 PM</li></ul>
							<ul><li><i class="fa fa-map-marker"></i><span>Adresse:</span> 123 Rue nkhilet , tunis, Ariana, CP 123</li></ul>
							<ul><li><i class="fa fa-phone"></i><span>télephone:</span> (216) 987-1235</li></ul>
							<ul><li><i class="fa fa-fax"></i><span>Fax:</span> (216) 984-1234</li></ul>
							<ul><li><i class="fa fa-envelope"></i><span>Email:</span> info@clinique.com</li></ul>
						</div>
					</div>
					<div class="col-md-6 col-md-offset-1 contact-form">
						<h3>laissez nous un message</h3>

						<form action="index.html">
                           <fieldset>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                      <label for="name">Nom & Prénom</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Votre Nom">
                                   </div>
                                   <div class="col-md-4 col-sm-4">
                                        <label for="date">Date</label>
                                        <input type="date" name="date" value="" class="form-control">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="service">Service</label>
                                        <select class="form-control" name="service">
                                             <option>Chirurgie Générale</option>
											 <option>Endoscopie</option>
                                             <option>Maternité</option>
                                             <option>Radiologie</option>
											 <option>Urologie</option>
											 <option>Orthopédie</option>
											 <option>Pédiatrie</option>
											 <option>Chirugie esthétique</option>
											 <option>Gynécologie</option>											
											 <option>Autres...</option>
                                     </select>
                                   </div>
                                        <div class="col-md-12 col-sm-12">
                                        <label for="médecin">médecin</label>
                                        <select class="form-control" name="médecin">
                                             <option>Dr.Danielle</option>
											 <option>Dr.M.weiner</option>
                                             <option>Dr.Joseph</option>
                                             <option>Dr.Hasina</option>
											 <option>Dr.Caitlin</option>
											 <option>Dr.Micheal</option>
											
                                     </select>
                                   </div>
                       <div class="col-md-12 col-sm-12">
                     <label for="appt"> temps: </label>
                 
               <input type="time" id="appt" name="appt" min="09:00" max="18:00" required></td>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="telephone">Téléphone</label>
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="+xxx xx xxx xxx">
                                </div>
									
									<div class="col-md-7 col-sm-7">
                                        <label for="pays">Pays</label>
                                        <select class="form-control" name="pays">
                                            <option>---Veuillez choisir votre pays---</option>
                                 <OPTION>Afghanistan</OPTION>
                                 <OPTION>Afrique du Sud</OPTION>
                                 <OPTION>Albanie</OPTION>
                                 <OPTION>Alg&eacute;rie</OPTION>
                                 <OPTION>Allemagne</OPTION>
                                 <OPTION>Andorre</OPTION>
                                 <OPTION>Angola</OPTION>
                                 <OPTION>Anguilla</OPTION>
                                 <OPTION>Antarctique</OPTION>
                                 <OPTION>Antigua-et-Barbuda</OPTION>
                                 <OPTION>Antilles n&eacute;erlandaises</OPTION>
                                 <OPTION>Arabie-Saoudite</OPTION>
                                 <OPTION>Argentine</OPTION>
                                 <OPTION>Arm&eacute;nie</OPTION>
                                 <OPTION>Aruba</OPTION>
                                 <OPTION>Australie</OPTION>
                                 <OPTION>Autriche</OPTION>
                                 <OPTION>Azerba&iuml;djan</OPTION>
                                 <OPTION>Bahamas</OPTION>
                                 <OPTION>Bahre&iuml;n</OPTION>
                                 <OPTION>Bangladesh</OPTION>
                                 <OPTION>Barbade</OPTION>
                                 <OPTION>Belgique</OPTION>
                                 <OPTION>Belize</OPTION>
                                 <OPTION>B&eacute;nin</OPTION>
                                 <OPTION>Bermudes</OPTION>
                                 <OPTION>Bhoutan</OPTION>
                                 <OPTION>Bi&eacute;lorussie</OPTION>
                                 <OPTION>Bolivie</OPTION>
                                 <OPTION>Bosnie-Herz&eacute;govine</OPTION>
                                 <OPTION>Botswana</OPTION>
                                 <OPTION>Br&eacute;sil</OPTION>
                                 <OPTION>Brunei</OPTION>
                                 <OPTION>Bulgarie</OPTION>
                                 <OPTION>Burkina Faso</OPTION>
                                 <OPTION>Burundi</OPTION>
                                 <OPTION>Cambodge</OPTION>
                                 <OPTION>Cameroun</OPTION>
                                 <OPTION>Canada</OPTION>
                                 <OPTION>Cap-Vert</OPTION>
                                 <OPTION>Chili</OPTION>
                                 <OPTION>Chine</OPTION>
                                 <OPTION>Chypre</OPTION>
                                 <OPTION>Colombie</OPTION>
                                 <OPTION>Comores</OPTION>
                                 <OPTION>Congo, r&eacute;publique d&eacute;mocratique</OPTION>
                                 <OPTION>Cor&eacute;e-du-Nord</OPTION>
                                 <OPTION>Cor&eacute;e-du-Sud</OPTION>
                                 <OPTION>Costa Rica</OPTION>
                                 <OPTION>C&ocirc;te-d'Ivoire</OPTION>
                                 <OPTION>Croatie</OPTION>
                                 <OPTION>Cuba</OPTION>
                                 <OPTION>Danemark</OPTION>
                                 <OPTION>Djibouti</OPTION>
                                 <OPTION>Dominique</OPTION>
                                 <OPTION>Egypte</OPTION>
                                 <OPTION>Emirats arabes unis</OPTION>
                                 <OPTION>Equateur</OPTION>
                                 <OPTION>Erythr&eacute;e</OPTION>
                                 <OPTION>Espagne</OPTION>
                                 <OPTION>Estonie</OPTION>
                                 <OPTION>Etat de la Cit&eacute; du Vatican</OPTION>
                                 <OPTION>Etats-Unis</OPTION>
                                 <OPTION>Ethiopie</OPTION>
                                 <OPTION>Fidji</OPTION>
                                 <OPTION>Finlande</OPTION>
                                 <OPTION>France m&eacute;tropolitaine</OPTION>
                                 <OPTION>France</OPTION>
                                 <OPTION>Gabon</OPTION>
                                 <OPTION>Gambie</OPTION>
                                 <OPTION>G&eacute;orgie du Sud</OPTION>
                                 <OPTION>G&eacute;orgie</OPTION>
                                 <OPTION>Ghana</OPTION>
                                 <OPTION>Gibraltar</OPTION>
                                 <OPTION>Gr&egrave;ce</OPTION>
                                 <OPTION>Grenade</OPTION>
                                 <OPTION>Groenland</OPTION>
                                 <OPTION>Guadeloupe</OPTION>
                                 <OPTION>Guam</OPTION>
                                 <OPTION>Guatemala</OPTION>
                                 <OPTION>Guin&eacute;e &eacute;quatoriale</OPTION>
                                 <OPTION>Guin&eacute;e</OPTION>
                                 <OPTION>Guin&eacute;e-Bissau</OPTION>
                                 <OPTION>Guyana</OPTION>
                                 <OPTION>Guyane fran&ccedil;aise</OPTION>
                                 <OPTION>Ha&iuml;ti</OPTION>
                                 <OPTION>Honduras</OPTION>
                                 <OPTION>Hong-Kong</OPTION>
                                 <OPTION>Hongrie</OPTION>
                                 <OPTION>Ile Bouvet</OPTION>
                                 <OPTION>Ile Christmas</OPTION>
                                 <OPTION>Ile Norfolk</OPTION>
                                 <OPTION>Ile Pitcairn</OPTION>
                                 <OPTION>Iles Ca&iuml;mans</OPTION>
                                 <OPTION>Iles Cocos (Keeling)</OPTION>
                                 <OPTION>Iles Cook</OPTION>
                                 <OPTION>Iles F&eacute;ro&eacute;</OPTION>
                                 <OPTION>Iles Heard et McDonald</OPTION>
                                 <OPTION>Iles Malouines</OPTION>
                                 <OPTION>Iles Mariannes du Nord</OPTION>
                                 <OPTION>Iles Marshall</OPTION>
                                 <OPTION>Iles Mineures Am&eacute;ricaines</OPTION>
                                 <OPTION>Iles Salomon</OPTION>
                                 <OPTION>Iles Sandwich du sud</OPTION>
                                 <OPTION>Iles Turks et Caicos</OPTION>
                                 <OPTION>Iles Vierges am&eacute;ricaines</OPTION>
                                 <OPTION>Iles Vierges du Royaume-Uni</OPTION>
                                 <OPTION>Inde</OPTION>
                                 <OPTION>Indon&eacute;sie</OPTION>
                                 <OPTION>Irak</OPTION>
                                 <OPTION>Iran</OPTION>
                                 <OPTION>Irlande</OPTION>
                                 <OPTION>Islande</OPTION>
                                 <OPTION>Isra&euml;l</OPTION>
                                 <OPTION>Italie</OPTION>
                                 <OPTION>Jama&iuml;que</OPTION>
                                 <OPTION>Japon</OPTION>
                                 <OPTION>Jordanie</OPTION>
                                 <OPTION>Kazakhstan</OPTION>
                                 <OPTION>Kenya</OPTION>
                                 <OPTION>Kirghizistan</OPTION>
                                 <OPTION>Kiribati</OPTION>
                                 <OPTION>Kowe&iuml;t</OPTION>
                                 <OPTION>Laos</OPTION>
                                 <OPTION>Lesotho</OPTION>
                                 <OPTION>Lettonie</OPTION>
                                 <OPTION>Liban</OPTION>
                                 <OPTION>Lib&eacute;ria</OPTION>
                                 <OPTION>Libye</OPTION>
                                 <OPTION>Liechtenstein</OPTION>
                                 <OPTION>Lituanie</OPTION>
                                 <OPTION>Luxembourg</OPTION>
                                 <OPTION>Macao</OPTION>
                                 <option>Macédoine, ex-république yougoslave
                                 de</option>
                                 <OPTION>Madagascar</OPTION>
                                 <OPTION>Malawi</OPTION>
                                 <OPTION>Malaysia</OPTION>
                                 <OPTION>Maldives</OPTION>
                                 <OPTION>Mali</OPTION>
                                 <OPTION>Malte</OPTION>
                                 <OPTION>Maroc</OPTION>
                                 <OPTION>Martinique</OPTION>
                                 <OPTION>Maurice</OPTION>
                                 <OPTION>Mauritanie</OPTION>
                                 <OPTION>Mayotte</OPTION>
                                 <OPTION>Mexique</OPTION>
                                 <OPTION>Micron&eacute;sie</OPTION>
                                 <OPTION>Moldavie</OPTION>
                                 <OPTION>Monaco</OPTION>
                                 <OPTION>Mongolie</OPTION>
                                 <OPTION>Montserrat</OPTION>
                                 <OPTION>Mozambique</OPTION>
                                 <OPTION>Myanmar</OPTION>
                                 <OPTION>Namibie</OPTION>
                                 <OPTION>Nauru</OPTION>
                                 <OPTION>N&eacute;pal</OPTION>
                                 <OPTION>Nicaragua</OPTION>
                                 <OPTION>Niger</OPTION>
                                 <OPTION>Nigeria</OPTION>
                                 <OPTION>Niue</OPTION>
                                 <OPTION>Norv&egrave;ge</OPTION>
                                 <OPTION>Nouvelle-Cal&eacute;donie</OPTION>
                                 <OPTION>Nouvelle-Z&eacute;lande</OPTION>
                                 <OPTION>Oman</OPTION>
                                 <OPTION>Ouganda</OPTION>
                                 <OPTION>Ouzb&eacute;kistan</OPTION>
                                 <OPTION>Pakistan</OPTION>
                                 <OPTION>Palaos</OPTION>
                                 <OPTION>Panama</OPTION>
                                 <OPTION>Papouasie-Nouvelle-Guin&eacute;e</OPTION>
                                 <OPTION>Paraguay</OPTION>
                                 <OPTION>Pays-Bas</OPTION>
                                 <OPTION>P&eacute;rou</OPTION>
                                 <OPTION>Philippines</OPTION>
                                 <OPTION>Pologne</OPTION>
                                 <OPTION>Polyn&eacute;sie fran&ccedil;aise</OPTION>
                                 <OPTION>Porto Rico</OPTION>
                                 <OPTION>Portugal</OPTION>
                                 <OPTION>Qatar</OPTION>
                                 <OPTION>R&eacute;publique centrafricaine</OPTION>
                                 <OPTION>R&eacute;publique dominicaine</OPTION>
                                 <OPTION>R&eacute;publique du Congo</OPTION>
                                 <OPTION>R&eacute;publique tch&egrave;que</OPTION>
                                 <OPTION>R&eacute;union</OPTION>
                                 <OPTION>Roumanie</OPTION>
                                 <OPTION>Royaume-Uni</OPTION>
                                 <OPTION>Russie</OPTION>
                                 <OPTION>Rwanda</OPTION>
                                 <OPTION>Sahara occidental</OPTION>
                                 <OPTION>Saint Kitts et Nevis</OPTION>
                                 <OPTION>Sainte-H&eacute;l&egrave;ne</OPTION>
                                 <OPTION>Sainte-Lucie</OPTION>
                                 <OPTION>Saint-Marin</OPTION>
                                 <OPTION>Saint-Pierre-et-Miquelon</OPTION>
                                 <OPTION>Saint-Vincent-et-les-Grenadines</OPTION>
                                 <OPTION>Salvador</OPTION>
                                 <OPTION>Samoa-Am&eacute;ricaines</OPTION>
                                 <OPTION>Samoa-Occidentales</OPTION>
                                 <OPTION>Samoa-Occidentales</OPTION>
                                 <OPTION>S&atilde;o Tom&eacute; e Pr&iacute;ncipe</OPTION>
                                 <OPTION>S&eacute;n&eacute;gal</OPTION>
                                 <OPTION>Seychelles</OPTION>
                                 <OPTION>Sierra Leone</OPTION>
                                 <OPTION>Singapour</OPTION>
                                 <OPTION>Slovaquie</OPTION>
                                 <OPTION>Slov&eacute;nie</OPTION>
                                 <OPTION>Somalie</OPTION>
                                 <OPTION>Soudan</OPTION>
                                 <OPTION>Sri Lanka</OPTION>
                                 <OPTION>Su&egrave;de</OPTION>
                                 <OPTION>Suisse</OPTION>
                                 <OPTION>Suriname</OPTION>
                                 <OPTION>Svalbard et Jan Mayen</OPTION>
                                 <OPTION>Swaziland</OPTION>
                                 <OPTION>Syrie</OPTION>
                                 <OPTION>Tadjikistan</OPTION>
                                 <OPTION>Taiwan</OPTION>
                                 <OPTION>Tanzanie</OPTION>
                                 <OPTION>Tchad</OPTION>
                                 <OPTION>Terres australes fran&ccedil;aises</OPTION>
                                 <option>Territoire britannique de l'océan Indien</option>
                                 <OPTION>Tha&iuml;lande</OPTION>
                                 <OPTION>Timor oriental</OPTION>
                                 <OPTION>Togo</OPTION>
                                 <OPTION>Tokelau</OPTION>
                                 <OPTION>Tonga</OPTION>
                                 <OPTION>Trinit&eacute;-et-Tobago</OPTION>
                                 <OPTION>Tunisie</OPTION>
                                 <OPTION>Turkm&eacute;nistan</OPTION>
                                 <OPTION>Turquie</OPTION>
                                 <OPTION>Tuvalu</OPTION>
                                 <OPTION>Ukraine</OPTION>
                                 <OPTION>Uruguay</OPTION>
                                 <OPTION>Vanuatu</OPTION>
                                 <OPTION>Venezuela</OPTION>
                                 <OPTION>Vi&ecirc;tnam</OPTION>
                                 <OPTION>Wallis-et-Futuna</OPTION>
                                 <OPTION>Y&eacute;men</OPTION>
                                 <OPTION>Yougoslavie</OPTION>
                                 <OPTION>Zambie</OPTION>
                                 <OPTION>Zimbabwe</OPTION>
								 </select>
                                   </div>
                                     <label> </label>

						     <div class="col-md-12 col-sm-12">
                                     <label for="Message">Message</label>
                                        <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message"></textarea>
                                        <button type="submit" class="form-control" id="cf-submit" name="submit">Envoyer</button>
                                </div>
                              </div>
                        </form>
                    </div>

               </div>
          </div>
     </section>

  function test(){
    var service = f.Service.select;
    var médecin= f.médecin.select;
   
    if( service = "Chirurgie Générale" )
    {
        médecin= "Dr.joseph";
    }
	</section><!-- end of contact section -->

	<!-- footer starts here -->
	<footer class="footer clearfix">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 footer-para">
					<p>& copy; Mostafizur Tous droits réservés</p>
				</div>
				<div class="col-xs-6 text-right">
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
					<a href=""><i class="fa fa-skype"></i></a>
				</div>
			</div>
		</div>
	</footer>

	<!-- script tags
	============================================================= -->
	<script src="js/jquery-2.1.1.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/gmaps.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>
<?php } ?>