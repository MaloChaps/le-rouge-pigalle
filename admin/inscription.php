<?php 
session_start(); 
include('connexion.php');
if (isset($_SESSION['id'])) { ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inscription - Administration le rouge</title>

</head>
<body>

	<form action="" method="post">
		<label>Nom</label>
		<input type="name" name="nom" placeholder="votre nom"><br>

		<label>mail</label>
		<input type="email" name="mail" placeholder="votre maill"><br>

		<label>mot de passe</label>
		<input type="password" name="mdp" placeholder="rentrer votre mdp"><br>

		<label>confirmation mot de passe</label>
		<input type="password" name="mdp2" placeholder="confirmer votre mdp"><br>

		<input type="submit" name="envoyer" value="envoyer" placeholder="Go !">
		
	</form>
	<?php }else{header("Location: index.php");}?>
	<?php if(isset($message)) {
		echo $message;
	} ?>

	
	<?php 
		

	

		if (isset($_POST['envoyer']) && $_POST['envoyer'] == "envoyer") {

		$nom = htmlspecialchars($_POST['nom']);
		$mail = htmlspecialchars($_POST['mail']);
		$pass_hache = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
		$pass_hache_confirm = password_hash($_POST['mdp2'], PASSWORD_DEFAULT);


			if(!empty($_POST) && !empty($_POST['nom']) && !empty($_POST['mail']) && !empty($_POST['mdp']) && !empty($_POST['mdp2'])){
				$pseudolenght = strlen($nom);

				if($pseudolenght <= 255){
					if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
						$reqmail = $bdd->prepare("SELECT * FROM membres WHERE mail = ?");
						$reqmail->execute(array($mail));
						$mailexist = $reqmail->rowCount();

						if($mailexist == 0){

							if($_POST['mdp'] == $_POST['mdp2']){

								$req = $bdd->prepare('INSERT INTO membres(nom, mail, mdp) VALUES(:nom, :mail, :mdp)');
								$req->execute(array(
								'nom' => $nom,
								'mail' => $mail,
								'mdp' => $pass_hache));
								echo "Félicitation un compte pour".$_POST['nom'].' est ajouté, connectez-vous dès maintenant<a href="index.php"> connexion </a>';

							}else{echo "les mots de passes ne correspondent pas";}

						}else{echo "le mail est deja utilisé";}

					}else{echo "ce nest pas un mail";}

				}else{echo "trop long";}

			}else{echo "erreur";}

			
		}

	?>

</body>
</html>