<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Guillaume-D">
		<title>Le Huffington Post</title>
		<!-- CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet"/>
		<link href="style.css" rel="stylesheet"/>
		<link rel="icon" type="image/png" href="favicon.png"/>
	</head>
	<body>
		<div class="row">
			<div class="col-xs-offset-15 col-xs-90" id="wrapper">
				<div id="date">
					<?php
						setlocale (LC_TIME, 'fr_FR.utf8','fra');
						echo date("j")." ".strftime("%B",time())." ".date("Y");
					?>
				</div>
				<div class="row">
					<div class="col-xs-offset-20 col-xs-80" id="logo"><img src="logo.gif"/></div>
				</div>
				<br/><br/>
				<div class="row">
					<div class="col-xs-30">
						<div class="dropdown">
							<button class="btn btn-edition dropdown-toggle" type="button" data-toggle="dropdown">Édition: <b>FR</b> <span class="caret"></span></button>
							<ul class="dropdown-menu">
								<li><a href="#"><table width="100%"><tr><td width="75%">Arabic</td><td class="country-code" width="25%" text-align="right"><b>AR</b></td></tr></table></a></li>
								<li><a href="#"><table width="100%"><tr><td width="75%">Australia</td><td class="country-code" width="25%" text-align="right"><b>AU</b></td></tr></table></a></li>
								<li><a href="#"><table width="100%"><tr><td width="75%">Brasil</td><td class="country-code" width="25%" text-align="right"><b>BR</b></td></tr></table></a></li>
								<li><a href="#"><table width="100%"><tr><td width="75%">Canada</td><td class="country-code" width="25%" text-align="right"><b>CA</b></td></tr></table></a></li>
								<li><a href="#"><table width="100%"><tr><td width="75%">Deutshland</td><td class="country-code" width="25%" text-align="right"><b>DE</b></td></tr></table></a></li>
								<li><a href="#"><table width="100%"><tr><td width="75%">España</td><td class="country-code" width="25%" text-align="right"><b>ES</b></td></tr></table></a></li>
								<li><a href="#"><table width="100%"><tr><td width="75%">France</td><td class="country-code" width="25%" text-align="right"><b>FR</b></td></tr></table></a></li>
								<li><a href="#"><table width="100%"><tr><td width="75%">Greece</td><td class="country-code" width="25%" text-align="right"><b>GR</b></td></tr></table></a></li>
								<li><a href="#"><table width="100%"><tr><td width="75%">India</td><td class="country-code" width="25%" text-align="right"><b>IN</b></td></tr></table></a></li>
								<li><a href="#"><table width="100%"><tr><td width="75%">Italia</td><td class="country-code" width="25%" text-align="right"><b>IT</b></td></tr></table></a></li>
								<li><a href="#"><table width="100%"><tr><td width="75%">Japan</td><td class="country-code" width="25%" text-align="right"><b>JP</b></td></tr></table></a></li>
								<li><a href="#"><table width="100%"><tr><td width="75%">Korea</td><td class="country-code" width="25%" text-align="right"><b>KR</b></td></tr></table></a></li>
								<li><a href="#"><table width="100%"><tr><td width="75%">Maghreb</td><td class="country-code" width="25%" text-align="right"><b>MG</b></td></tr></table></a></li>
								<li><a href="#"><table width="100%"><tr><td width="75%">United Kingdom</td><td class="country-code" width="25%" text-align="right"><b>UK</b></td></tr></table></a></li>
								<li><a href="#"><table width="100%"><tr><td width="75%">United States</td><td class="country-code" width="25%" text-align="right"><b>US</b></td></tr></table></a></li>
							</ul>
						</div>
					</div>
					<div class="col-xs-40">
						<div class="input-group input-group-sm">
							<input type="text" class="form-control formulaire recherche" placeholder="Rechercher sur le HuffPost" aria-describedby="sizing-addon3">
							<span class="input-group-btn">
								<button class="btn btn-default" type="button"><span style="color:#c0c0c0;" class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
							</span>
						</div>
					</div>
					<div class="col-xs-20" style="text-align:center;">
						<div class="fb-like" data-href="http://www.huffingtonpost.fr" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
					</div>
					<div class="col-xs-10" style="text-align:center;">
						<a class="twitter-follow-button" data-show-count="false" data-show-screen-name="false" href="https://twitter.com/LeHuffPost">Suivre</a>
					</div>
					<div class="col-xs-20" style="text-align:center;">
						<div class="g-follow" data-annotation="bubble" data-height="20" data-href="//plus.google.com/u/0/107175274434699706486" data-rel="publisher"></div>
					</div>
				</div>
				<div id="topnav">
					<div class="row rowt">
						<div class="col-xs-12 unet"></div>
						<div class="col-xs-95 menut"></div>
						<div class="col-xs-13 viet"></div>
					</div>
					<div class="row rowb">
						<a href="#"><div class="col-xs-12 une"><span>À LA UNE</span></div></a>
						<a href="#"><div class="col-xs-12 menul"><span>POLITIQUE</span></div></a>
						<a href="#"><div class="col-xs-11 menul"><span>ÉCONOMIE</span></div></a>
						<a href="#"><div class="col-xs-16 menul"><span>INTERNATIONAL</span></div></a>
						<a href="#"><div class="col-xs-10 menul"><span>CULTURE</span></div></a>
						<a href="#"><div class="col-xs-10 menul"><span>MÉDIAS</span></div></a>
						<a href="#"><div class="col-xs-9 menul"><span>PEOPLE</span></div></a>
						<a href="#"><div class="col-xs-12 menul"><span>LE BON LIEN</span></div></a>
						<a href="#"><div class="col-xs-15 menul"><span>C'EST DEMAIN</span></div></a>
						<a href="#"><div class="col-xs-13 vie"><span>C'EST LA VIE</span></div></a>
					</div>
					<div>
						<ul id="liste">
							<li><a href="#">Crise au pouvoir</a></li>
							<li><a href="#">Têtes chercheuses</a></li>
							<li><a href="#">La preuve en images</a></li>
							<li><a href="#">Environnement</a></li>
							<li><a href="#">Alimentation</a></li>
							<li><a href="#">Réussir autrement</a></li>
							<li><a href="#">Déconnecter pour respirer</a></li>
							<li><a href="#">Vie de bureau</a></li>
							<li><a href="#">Ça marche</a></li>
						</ul>
					</div>
				</div> <!--topnav-->
				<div id="gros-titre">
					<div class="row">
						<div class="col-xs-30 pull-right input-group input-group-sm">
							<input type="text" class="form-control formulaire" placeholder="Entrez votre adresse email" aria-describedby="sizing-addon3">
							<span class="input-group-btn">
								<button class="btn btn-newsletter" type="button">S'inscrire</button>
							</span>
						</div>
					</div>
					<h1><a href="#">GROS TITRE</a></h1>
					<h2><a href="#">Sous-titre</a></h2>
					<div class="row">
						<div class="col-xs-offset-6 col-xs-108" id="illustration"><a href="#"><img src="http://fakeimg.pl/900x420?text=Illustration"></a></div>
					</div>
					<h3><a href="#">Phrase d'accroche</a></h3>
					<div class="commentaires"><a href="#">Commentaires</a> | <a href="#">Catégorie</a></div>
				</div> <!--gros-titre-->
				<div id="main">
					<div class="col-xs-40 blogs">
						<div id="titre-blogs">BLOGS À LA UNE</div>
						<div class="wrapper-blog">
							<div class="row blog">
								<div class="col-xs-20"><a href="#"><img src="http://fakeimg.pl/40x40?text=Photo"></a></div>
								<div class="col-xs-100">
									<div class="nom-auteur"><a href="#">Nom de l'auteur</a></div>
									<div class="description">Description de l'auteur</div>
								</div>
							</div>
							<div class="blog">
								<div class="titre-blog"><a href="#">Titre</a></div>
								<div class="contenu-blog">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
							</div>
						</div>
						<div class="wrapper-blog">
							<div class="blog">
								<div class="titre-blog"><a href="#">Titre</a></div>
								<div class="contenu-blog">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
							</div>
							<div class="row blog">
								<div class="col-xs-20"><a href="#"><img src="http://fakeimg.pl/40x40?text=Photo"></a></div>
								<div class="col-xs-100">
									<div class="nom-auteur"><a href="#">Nom de l'auteur</a></div>
									<div class="description">Description de l'auteur</div>
								</div>
							</div>
						</div>
						<div class="wrapper-blog">
							<div class="blog">
								<div class="titre-blog"><a href="#">Titre</a></div>
								<div class="contenu-blog">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
							</div>
							<div class="row blog">
								<div class="col-xs-20"><a href="#"><img src="http://fakeimg.pl/40x40?text=Photo"></a></div>
								<div class="col-xs-100">
									<div class="nom-auteur"><a href="#">Nom de l'auteur</a></div>
									<div class="description">Description de l'auteur</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-40 news">
						<div class="actus">
							<h4><a href="#">Titre de l'actualité</a></h4>
							<a href="#"><img src="http://fakeimg.pl/300x220?text=Illustration"></a>
							<div class="commentaires actu"><a href="#">Commentaires</a> | <a href="#">Catégorie</a></div>
						</div>
						<div class="actus">
							<h4><a href="#">Titre de l'actualité</a></h4>
							<a href="#"><img src="http://fakeimg.pl/300x220?text=Illustration"></a>
							<div class="commentaires actu"><a href="#">Commentaires</a> | <a href="#">Catégorie</a></div>
						</div>
						<div class="actus">
							<h4><a href="#">Titre de l'actualité</a></h4>
							<a href="#"><img src="http://fakeimg.pl/300x220?text=Illustration"></a>
							<div class="commentaires actu"><a href="#">Commentaires</a> | <a href="#">Catégorie</a></div>
						</div>
					</div>
					<div class="col-xs-40 pub">
						<a href="#"><img src="http://fakeimg.pl/300x600?text=Pub"></a>
					</div>
				</div> <!--main-->
			</div> <!--wrapper-->
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script>
			(function(d, s, id){
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
				js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.5";
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
		<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
		<script src="https://apis.google.com/js/platform.js" async defer>{lang: 'fr'}</script>
	</body>
</html>