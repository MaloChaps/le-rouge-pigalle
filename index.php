<!DOCTYPE html>
<html>
<head>
	<title>Le Rouge Pigalle</title>
	<meta charset="utf-8">
	<link rel="icon" href="public/img/component/favicon.png"/>

	<!-- css -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="public/css/index.css">
	<link rel="stylesheet" type="text/css" href="public/css/mobile-index.css">

</head>
<body>
	
	<div class="loader">
		<img src="public/img/component/logo_rouge-min.png" alt="logo le rouge">
	</div>

	<header class="header-section">
			<div class="nav-burger">
				<div class="burger-menu">
					<img id="nav-open" src="public/img/component/burger.svg" alt="menu burger">
				</div>
			</div>
				<div class="nav-open">
					<div class="nav-open-content">
						<img id="nav-close" src="public/img/component/cross.svg" alt="fermer menu">
						<div>
						<a href="#">Upcoming event</a>
						<a href="#">Friends & family</a>
						<a href="#">Je t’aime party</a>
						<a href="#">Press</a>
						<a href="#">Contact</a>
						</div>
					</div>
			
			</div>

			<div class="social-header">
				<a href="https://www.facebook.com/lerougepigalle75009/" target="_blanck"><i class="fab fa-facebook-f"></i></a>
				<a href="https://www.instagram.com/lerouge_pigalle/" target="_blanck"><i class="fab fa-instagram"></i></a>
			</div>

			<div class="langue-header">
				<a href="fr/index.php">fr</a>
				<a href="index.php">en</a>
			</div>
	</header>

	<header class="header-section-mobile">
		<div class="nav-mobile-close-mobile">
			<div class="burger-menu-mobile">
				<img id="nav-open-mobile" src="public/img/component/burger.svg" alt="ouvrir menu du rouge">
			</div>

			<div class="langue-header-mobile">
				<a href="fr/index.php" style="color: #A5A5A5">fr</a>
				<a href="index.php">en</a>
			</div>
		</div>

			<div class="nav-open-mobile">
					<div class="nav-open-content-mobile">
						<img id="nav-close-mobile" src="public/img/component/cross.svg" alt="fermer le menu du rouge">
						<div>
						<a href="#">Upcoming event</a>
						<a href="#">Friends & family</a>
						<a href="#">Je t’aime party</a>
						<a href="#">Press</a>
						<a href="#">Contact</a></div>
					</div>
				</div>
	</header>
	
	<div class="hero-section">
			<img id="logo-hero" src="public/img/component/logo_rouge-min.png">
			<h1 style="display: none;">Le rouge pigalle</h1>
			<div><img src="public/img/component/arrow.svg"></div>
	</div>

	<div class="landing-section">

		<div class="upcoming-section">
			<?php
			include('admin/connexion.php');
			$reponse = $bdd->query('SELECT * FROM upcoming ORDER BY id DESC LIMIT 1');
			while ($donnees = $reponse->fetch())
			{?>
			<h2 id="title-upcoming" class="h1">Upcoming<br> event.</h2>
			<div id="line-upcoming" class="full-line"></div>
			<section>
				<div id="subtitle-upcoming"><p class="h4" >what happened this week<hr class="little-line"></p></div>
				<article id="paragraphe-upcoming" class="paragraphe">
					<?php echo $donnees['event'] ?>
				</article>
				<div id="btn-upcoming" class="btn-upcoming">
					<a href="mailto:paul.sery@laposte.net" ><button class="button-classic">booking</button></a>
					<a href="<?php echo $donnees['lien'] ?>" target="_blanck" class="cta">event <img src="public/img/component/arrow-line.svg" alt="information suivante"></a>
				</div>
			</section>
		<?php }?>
		</div>

		<div class="video-section">
			<div class="full-video">
				<div class="full-video-content">
					<i id="play-btn"  onclick="playVid()" class="fas fa-play"></i>
					<video id="video-rouge" autoplay="" loop="" muted="">
						<source src="public/videos/video-rouge.mp4" type="video/mp4">
						<source src="public/videos/video-rouge.webm" type="video/webm">
					</video>
				</div>

				<div class="full-line"></div>
			</div>
			<div class="info-video">
				<div class="info-video-content">
					<a href="https://www.facebook.com/sharer/sharer.php?u=https://lerouepigalle.com" target="_blanck" class="h5">share</a>
					<div>
						<div class="little-line" style="margin-bottom: 25px"></div>
						<p class="h5">Pigalle. La nuit</p>
					</div>
					<p class="line-info-video" style="color: transparent;"> </p>
				</div>

				<div class="full-line"></div>
			</div>
		</div>
	
		<div class="cover-section">
			<div class="info-cover">
				<p class="h5">cover</p>
			</div>

			<section class="cover-content">
				<article>
					<div class="img-cover"><img src="public/img/covers/cover1.png" alt="album du rouge"></div>
					<p class="h5">sweet turn up</p>
					<div class="little-line"></div>
				</article>

				<article>
					<div class="img-cover"><img src="public/img/covers/cover2.png" alt="album du rouge"></div>
					<p class="h5">Week-end active.</p>
					<div class="little-line"></div>
				</article>

				<article>
					<div class="img-cover"><img src="public/img/covers/cover3.png" alt="album du rouge"></div>
					<p class="h5">Back to business. Turn up !</p>
					<div class="little-line"></div>
				</article>

				<article>
					<div class="img-cover"><img src="public/img/covers/cover4.png" alt="album du rouge"></div>
					<p class="h5">Vibe over everything</p>
					<div class="little-line"></div>
				</article>
			</section>
		</div>

		<div class="love-section">
			<h2 class="h1">Je t'aime<br> party.</h2>
			<div class="full-line"></div>

			<section class="love-content">
				<article><p class="img-title">“You know you look so good tonight”</p></article>
				<div class="love-parallax" id="parallax"></div>
			</section>
		</div>

		

		<div class="red-section">
			<h2 class="h1">Red is<br> your's.</h2>
			<div class="full-line"></div>

			<section>
				<article>
					<a href="mailto:paul.sery@laposte.net"><button class="button-classic">booking</button></a>
					<p class="img-title">“Red and sulphurous night in the heart of Pigalle”</p>
				</article>
					<div class="red-parallax" id="parallax"></div>
			</section>
		</div>

		<div class="audit-section">
			<h2 id="title-upcoming" class="h1">Audit &<br>collaboration.</h2>
			<div id="line-upcoming" class="full-line"></div>

			<section class="audit-content">
				<article>
					<a href="mailto:@laposte.net"><button class="button-classic">Contact</button></a>
				</article>
					<div class="audit-parallax" id="parallax"></div>
				
			</section>
		</div>

		<div class="friends-section">
			<div class="friends-title">
				<p class="h1">friends <br>and family.</p>
				<div>
					<img src="public/img/friends/friends.png" alt="image de jambe du rouge">
				</div>
			</div>
			
			<section class="friends-content">
				<?php
			include('admin/connexion.php');
			$reponse = $bdd->query('SELECT * FROM box_ ORDER BY id DESC LIMIT 1');
			while ($donnees = $reponse->fetch())
			{?>
				<article>
					<p class="h6"><?php echo $donnees['titre1']?></p>
					<p class="paragraphe-2">
						<?php echo $donnees['text1']?>
					</p>
				</article>

				<article>
					<p class="h6"><?php echo $donnees['titre2']?></p>
					<p class="paragraphe-2">
						<?php echo $donnees['text2']?>
					</p>
				</article>

				<article>
					<p class="h6"><?php echo $donnees['titre3']?></p>
					<p class="paragraphe-2">
						<?php echo $donnees['text3']?>
					</p>
				</article>

				<article>
					<p class="h6"><?php echo $donnees['titre4']?></p>
					<p class="paragraphe-2">
						<?php echo $donnees['text4']?>
					</p>
				</article>



			<?php }?>
			</section>
		</div>

	</div>
		<footer class="footer-section">
		<div class="footer-content">
			<div class="info-footer">
				<p>Le rouge pigalle</p>
				<a href="https://goo.gl/maps/cTgctirkjztw83Mh7" target="_blanck">77 rue Jean-Baptiste Pigalle, 75009</a>
				<a href="tel:+33624704986">General info : 06 24 70 49 86</a>
				<div>
					<a href="https://www.facebook.com/lerougepigalle75009/" target="_blanck"><i class="fab fa-facebook-f"></i></a>
					<a href="https://www.instagram.com/lerouge_pigalle/" target="_blanck"><i class="fab fa-instagram"></i></a>
				</div>
			</div>

			<div class="hours-footer">
				<p>Hours</p>
				<p>Monday: Closed<br>
					Tuesday: Closed<br>
					Wednesday: Closed<br>
					Thursday: 12am / 6am<br>
					Friday: 12am / 6am<br>
					Saturday: 12am / 6am<br>
					Sunday: Closed
				</p>
			</div>
			<div class="bio-footer">
				<p>Le Rouge. A building dating back over a hundred years, classified as a historic building, first a theater or cabaret, then a place to live or a club, an experience out of time.</p>
			</div>

			
		</div>

		<p class="copyright-footer">© 2019-2020 <a href="https://blancpetrole.com"> Blanc Petrole.</a> All rights reserved. </p>
	</footer>
		
	
	<!-- script scroll reveal -->
	<script src="https://unpkg.com/scrollreveal"></script>
	<script src="https://code.jquery.com/jquery-latest.js"></script>

	<!-- script page -->
	<script type="text/javascript" src="public/js/index.js"></script>
	<script type="text/javascript">
		$(window).load(function() {
     $(".loader").fadeOut("1000"); 
 	});
		var vid = document.getElementById("video-rouge"); 
		var playBtn = document.getElementById("play-btn"); 

		function playVid() { 
		  vid.play();
		  playBtn.style.display = "none";
		} 

		function pauseVid() { 
		  vid.pause(); 
		} 

	</script>
</body>
</html>