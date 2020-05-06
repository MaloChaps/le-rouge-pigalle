<?php
session_start(); 
$bdd = new PDO('mysql:host=localhost;dbname=lerouge;charset=utf8', 'root', '');
// $bdd = new PDO('mysql:host=kbworldwnvmalo.mysql.db;dbname=kbworldwnvmalo;charset=utf8', 'kbworldwnvmalo', 'Arcoi600');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Administration - Le rouge</title>
	<link rel="stylesheet" type="text/css" href="css/admin-rouge.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>	
	<?php if (isset($_SESSION['id'])) { ?>

	
	<header>
		<img src="../public/img/component/logo_rouge-min.png">
	</header>

	<div class="hello-section">
		<p class="h1">Hello <?php echo $_SESSION['nom']; ?></p>
		<div class="line"></div>
	</div>
	

	<div class="box-content">
		<a href="section/upcoming.php" class="box">upcoming event</a>
		<a href="section/friends.php" class="box">friends & family</a>
		<a href="#" class="box">hours</a>
		<a href="../index.html" class="box"><i class="fas fa-home"></i>retour au site</a>
		<a href="deconnexion.php" class="box"><i class="fas fa-sign-in-alt"></i>deconnexion</a>
	</div>

	<?php }else{header("Location: index.php");}?>

	

</body>
</html>