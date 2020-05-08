<?php
session_start(); 
include('../connexion.php');
$reponse = $bdd->query('SELECT * FROM friends ORDER BY id DESC LIMIT 1');
while ($donnees = $reponse->fetch()){
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
		<a href="../index.php">Retour administration</a>
	</header>
	
	<div class="hello-section">
		<p class="h1">Friends & Family</p>
		<div class="line"></div>
	</div>
		
	<main>
		
		<?php if (isset($_SESSION['id'])) { ?>
		<form action="" method="post">
			
			<div class="box1">
				<div>
				<label>Titre <?php echo $donnees['titre1'] ?></label>
				<input type="text" name="titre1" value="<?php echo $donnees['titre1'] ?>"></div>
				
				<div>
					<label>Contenu</label>
					<textarea name="text1" id="editor"><?php echo $donnees['text1'] ?></textarea>
				</div>
			</div>

			<div class="box2">
				<div>
				<label>Titre <?php echo $donnees['titre2'] ?></label>
				<input type="text" name="titre2" value="<?php echo $donnees['titre2'] ?>"></div>
				
				<div>
					<label>Contenu</label>
					<textarea name="text2" id="editor"><?php echo $donnees['text2'] ?></textarea>
				</div>
			</div>
			
			<div class="box3">
				<div>
				<label>Titre <?php echo $donnees['titre3'] ?></label>
				<input type="text" name="titre3" value="<?php echo $donnees['titre3'] ?>"></div>
				
				<div>
					<label>Contenu</label>
					<textarea name="text3" id="editor"><?php echo $donnees['text3'] ?></textarea>
				</div>
			</div>

			<div class="box4">
				<div>
				<label>Titre <?php echo $donnees['titre4'] ?></label>
				<input type="text" name="titre4" value="<?php echo $donnees['titre4'] ?>"></div>
				
				<div>
					<label>Contenu</label>
					<textarea name="text4" id="editor"><?php echo $donnees['text4'] ?></textarea>
				</div>
				
			</div>

			<div>
			<input class="send" type="submit" name="envoyer" value="envoyer">
			</div>

		</form>


	</main>
	<?php }else{header("Location: ../connexion-admin.php");}?>
	<?php }?>
	<?php 
	if (isset($_POST['envoyer']) && $_POST['envoyer'] == "envoyer") {

		$id = $donnees['id'];

		$titre1 = ($_POST['titre1']);
		$text1 = ($_POST['text1']);

		$titre2 = ($_POST['titre2']);
		$text2 = ($_POST['text2']);

		$titre3 = ($_POST['titre3']);
		$text3 = ($_POST['text3']);	

		$titre4 = ($_POST['titre4']);
		$text4 = ($_POST['text4']);	



			$update = $bdd->prepare('UPDATE friends SET 
				titre1 = ?, 
				text1 = ?, 
				titre2 = ?, 
				text2 = ?, 
				titre3 = ?, 
				text3 = ?, 
				titre4 = ?, 
				text4 = ?
				WHERE id = 1');
			$update->execute(array(
				$titre1,
				 $text1,
				 $titre2,
				 $text2,
				 $titre3,
				 $text3,
				 $titre4,
				 $text4));

			echo '<p style="color: green">Modifications effectuées</p>';
			// header("Location: friends.php");
	}
	?>
	
</body>
</html>