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
	<link rel="stylesheet" type="text/css" href="../css/upcoming.css">	
</head>

<body>

	<?php if (isset($_SESSION['id'])) { ?>

	<header>
		<a href="../admin-rouge.php">Retour administration</a>
	</header>
	
	<div class="hello-section">
		<p class="h1">Upcoming event</p>
		<div class="line"></div>
	</div>
		
	<main>
		<form action="" method="post">
			<div>
			<label>lien</label>
			<input type="text" name="lien"></div>

			<div>
				<label>Contenu</label>
				<textarea name="event" id="editor"></textarea>
			</div>
			
			<div>
			<input class="send" type="submit" name="envoyer" value="envoyer">
			</div>

		</form>

	</main>

	
	<?php }else{header("Location: ../index.php");}?>
	
	<?php 
	if (isset($_POST['envoyer']) && $_POST['envoyer'] == "envoyer") {

		$lien = htmlspecialchars($_POST['lien']);
		$event = htmlspecialchars($_POST['event']);

		if (!empty($_POST['lien']) && !empty($_POST['event'])) {
			$req = $bdd->prepare('INSERT INTO upcoming(lien, event) VALUES(:lien, :event)');
								$req->execute(array(
								'lien' => $lien,
								'event' => $event));


		}else{echo "Erreur";}
	}
	?>

</body>
</html>