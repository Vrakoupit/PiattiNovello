<?php

	if(isset($_POST['send_message']))
	{
		if(!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['message']))
		{
			$header="MIME-Version: 1.0\r\n";
			$header.='From:'. $_POST['email'] . "\n";
			$header.='Content-Type:text/html; charset="uft-8"'."\n";
			$header.='Content-Transfer-Encoding: 8bit';

			$message='
			<html>
				<body>
					<div align="left">
						<p>Bonjour Valérie,</p>
						<p>Voici le message laissé par '. stripcslashes($_POST['name']) .' avec l\'adresse mail suivante '. $_POST['email'] .'</p>
						<p>"'.nl2br(stripcslashes($_POST['message'])).'"</p>
						<p></p>
					</div>
				</body>
			</html>
			';

			mail("valerienovello@orange.fr", "Vous avez un nouveau message", $message, $header);
		}
		$msg="Votre message a bien été envoyé !";
	}
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, maximum-scale=1">

	<title>i piatti novello</title>

	<link href='http://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">


	<script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/classie.js"></script>


</head>
<body>
	<div style="overflow:hidden;">
		<header class="header" id="header">
			<div class="container">	
				<h1 class="">i piatti noveIIo</h1>
			</div>
		</div>
	</header>


	<nav class="main-nav-outer" id="test">
		<div class="container">
			<ul class="main-nav">
				<li><a href="#header">Accueil</a></li>
				<li><a href="#service">I Piatti</a></li>
				<li><a href="#portfolio">Créations</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
			<a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
		</div>
	</nav>



	<section class="main-section" id="service">
		<div class="container">
			<h2 id="h2_1">i piatti noveIIo</h2>
			<div class="row">
				<div class="col-lg-12 col-sm-6">
					<p style="text-align:center; width:80%; margin: 15px auto 0; letter-spacing: .5px;">Riche de son travail de sculpteur, <span>Valérie Novello</span> se consacre avec enthousiasme à la céramique<br>dans son atelier de Gentilly, aux portes de Paris.</p>
					<p style="text-align:center; width:80%; margin: 10px auto 0; letter-spacing: .5px;">C’est ici, dans ce lieu de création, qu’elle a découvert le plaisir d’un nouveau geste,<br>marquant ainsi de son empreinte ces objets quotidiens qui nous accompagnent, assiettes, plats, bols.</p>
					<p style="text-align:center; width:80%; margin: 10px auto 0; letter-spacing: .5px;">Forme, teinte, matière, chaque pièce est unique et s’inscrit dans une série,<br>chaque série possédant son caractère propre :</p>
					<p style="text-align:center; width:80%; margin: 0 auto 40px; font-weight: 500; color: black; letter-spacing: .5px;">plâtres colorés vernissés,<br>terres cuites émaillées rehaussées de dessins à l’engobe.</p>
				</div>
			</div>
		</section>

		<section class="main-section paddind" id="portfolio">
			<div class="container">

				<div class="col-lg-12 col-sm-6">
					<div class="Portfolio-box box-img-1">
					</div>
					<div class="Portfolio-box box-img-2">
					</div>
					<div class="Portfolio-box box-img-3">
					</div>
					<div class="Portfolio-box box-img-4" >
					</div>
				</div>

				<div class="col-lg-12 col-sm-6">
					<div class="Portfolio-box box-img-5">
					</div>
					<div class="Portfolio-box box-img-6">
					</div>
					<div class="Portfolio-box box-img-7">
					</div>
					<div class="Portfolio-box box-img-8" >
					</div>
				</div>

				<div class="col-lg-12 col-sm-6">
					<div class="Portfolio-box box-img-9">
					</div>
					<div class="Portfolio-box box-img-10">
					</div>
					<div class="Portfolio-box box-img-11">
					</div>
					<div class="Portfolio-box box-img-12" >
					</div>
				</div>

				<div class="col-lg-12 col-sm-6">
					<div class="Portfolio-box box-img-13">
					</div>
					<div class="Portfolio-box box-img-14">
					</div>
					<div class="Portfolio-box box-img-15">
					</div>
					<div class="Portfolio-box box-img-16" >
					</div>
				</div>
			</div>
		</section>

		<div class="container">
			<section class="main-section contact" id="contact">
				<h3>Contactez-nous</h3>

				<div class="row">
					<div class="col-lg-6 col-sm-5">
						<div class="form">
							<form method="post" action="">
								<input class="input-text" type="text" name="name" placeholder="Votre nom *">
								<input class="input-text" type="text" name="email" placeholder="Votre adresse mail *">
								<textarea class="input-text text-area" name="message" placeholder="Votre message *" cols="0" rows="0"></textarea>
								<input class="input-btn" type="submit" name="send_message" value="Envoyer votre message">
							</form>
							<?php
							if(isset($msg))
							{
								echo '<script language="javascript">';
								echo 'alert("Votre message a bien été envoyé.")';
								echo '</script>';
							}
							?>
						</div>	
					</div>
					<div class="col-lg-6 col-sm-7">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6249.322624627558!2d2.3450755543218893!3d48.81020593034602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67173e0d5614f%3A0x869db967a58d093d!2s20+Rue+Labourse%2C+94250+Gentilly!5e0!3m2!1sfr!2sfr!4v1474215197474" frameborder="0" style="border:0; height: 400px; width: 100%; " allowfullscreen></iframe>
					</div>
				</div>
			</section>
		</div>
		<footer class="footer">
			<div class="container">
				<span class="copyright">Valérie Novello | <a href="http://wwww.valerienovello.com">valerienovello.com</a></span>
			</div>
		</footer>


		<script type="text/javascript">
			$(document).ready(function(e) {
				$('#test').scrollToFixed();
				$('.res-nav_click').click(function(){
					$('.main-nav').slideToggle();
					return false    

				});

			});
		</script>


		<script type="text/javascript">
			$(window).load(function(){

				$('.main-nav li a').bind('click',function(event){
					var $anchor = $(this);

					$('html, body').stop().animate({
						scrollTop: $($anchor.attr('href')).offset().top - 102
					}, 1500,'easeInOutExpo');
					event.preventDefault();
				});
			})
		</script>
	</body>
	</html>