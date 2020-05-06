<?php
session_start(); 
$bdd = new PDO('mysql:host=localhost;dbname=lerouge;charset=utf8', 'root', '');
// $bdd = new PDO('mysql:host=kbworldwnvmalo.mysql.db;dbname=kbworldwnvmalo;charset=utf8', 'kbworldwnvmalo', 'Arcoi600');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Upcoming Event - Admin</title>
	<link rel="stylesheet" type="text/css" href="../css/friends.css">	
</head>

<body>
	<header>
		<a href="../admin-rouge.php">Retour administration</a>
	</header>
	
	<div class="hello-section">
		<p class="h1">Friends & Family</p>
		<div class="line"></div>
	</div>
		
	<main>
		
		<?php if (isset($_SESSION['id'])) { ?>
		<form action="" method="post">
			<div>
			<label>Titre</label>
			<input type="text" name="title"></div>

			<div>
				<label>Contenu</label>
				<textarea name="text" id="editor"></textarea>
			</div>
			
			<div>
			<input class="send" type="submit" name="envoyer" value="envoyer">
			</div>

		</form>


	</main>
	<?php }else{header("Location: ../index.php");}?>
	
	
	
</body>
</html>