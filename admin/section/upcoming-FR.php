<?php
session_start(); 
include('../connexion.php');
$reponse = $bdd->query('SELECT * FROM upcoming_fr ORDER BY id DESC LIMIT 1');
while ($donnees = $reponse->fetch())
{?>
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
		<a href="../index.php">Retour administration</a>
	</header>
	
	<div class="hello-section">
		<p class="h1">Evénment à venir</p>
		<div class="line"></div>
	</div>
	<main>
		<form action="" method="post">
			
			<div>
			<label>Lien event</label>
			<input type="text" name="lien" placeholder="lien de l'event" value="<?php echo $donnees['lien'] ?>"></div>

			<div>
				<label>Contenu</label>
				<textarea name="event" id="editor"><?php echo $donnees['event']?></textarea>
			</div>
			
			<div>
			<input class="send" type="submit" name="envoyer" value="envoyer">
			</div>
			
		</form>

	</main>

	
	<?php }else{header("Location: ../connexion-admin.php");}?>
	<?php } ?>
	<?php 
	if (isset($_POST['envoyer']) && $_POST['envoyer'] == "envoyer") {

		$lien = htmlspecialchars($_POST['lien']);
		$event = htmlspecialchars($_POST['event']);
		$id = 1;

		if (!empty($_POST['lien']) && !empty($_POST['event'])) {
			// $req = $bdd->prepare('INSERT INTO upcoming(lien, event) VALUES(:lien, :event)');
			// 					$req->execute(array(
			// 					'lien' => $lien,
			// 					'event' => $event));

			$update = $bdd->prepare('UPDATE upcoming SET lien = ?, event = ? WHERE id = ?');
			$update->execute(array($lien, $event, $id));
			// echo '<p style="color: green">Modification effectuée</p>';
			header("Location: upcoming-FR.php");

		}else{echo "Erreur";}
	}
	?>



</body>
</html>