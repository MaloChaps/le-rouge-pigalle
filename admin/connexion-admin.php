<?php 
include('../connexion.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Connexion - Le rouge pigalle</title>
</head>
<body>
	<style type="text/css">
		/*font*/
		@font-face {
			font-family: "Poppins-Regular";
			src: url('../public/font/poppins/Poppins-Regular.ttf');
		}

		@font-face {
			font-family: "Neue-Bold";
			src: url('../public/font/neue/NeueHaasGroteskDisplay-Bold.otf');
		}

		@font-face {
			font-family: "Neue-Medium";
			src: url('../public/font/neue/NeueHaasGroteskDisplay-Medium.otf');
		}
		body{
			background: white;
			display: flex;
			justify-content: center;
			align-items: center;
			width: 100%;
			height: 100vh;
			flex-direction: column;
			overflow: hidden;
		}
		
		form{
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
		}

		label{
			font-family: Neue-Bold;
			font-size: 18px;
			text-transform: uppercase;
			margin-bottom: 0px;
			color: black;
		}
		input{
			margin: 10px 0px 10px 0px;
			border-radius: 20px;
			border: solid black 1.5px;
			padding: 10px;
		}

		.submit{
			border: none;
			width: 100%;
			margin: 20px 0px 20px 0px;
			cursor: pointer;
			transition: 0.3s ease;
		}

		.submit:hover{
			color: white;
			background: black;
			transition: 0.3s ease;
		}

		.error{
			font-family: Poppins-Regular;
			color: red;
			font-size: 15px;
		}

		@media only screen and (min-device-width : 320px) and (max-device-width : 425px) {

			body{
				height: 100vh;
			}

			label {
			    font-family: Neue-Bold;
			    font-size: 55px;
			    text-transform: uppercase;
			    margin-bottom: 0px;
			    color: black;
			}

			input {
			    margin: 10px 0px 10px 0px;
			    border-radius: 130px;
			    border: solid black 1.5px;
			    padding: 10px;
			    width: 400px;
			    height: 50px;
			}

			.submit {
			    border: none;
			    width: 100%;
			    margin: 70px 0px 20px 0px;
			    cursor: pointer;
			    transition: 0.3s ease;
			    width: 200px;
			    height: 70px;
			}
			input[type="text"]
			{
			    font-size:30px;
			    padding: 20px 0px 20px 30px;
			}
			input[type="password"]
			{
			    font-size:30px;
			   padding: 20px 0px 20px 30px;
			}

		}
	</style>

	<form method="post" action="">
		<label>mail</label>
		<input type="text" name="mail" placeholder="votre mail" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>"><br>

		<label>mot de passe</label>
		<input type="password" name="mdp" placeholder="votre mot de passe">

		<input class="submit" type="submit" name="envoyer">

	</form>
	

	<?php 

	if(!empty($_POST) && !empty($_POST['mail']) && !empty($_POST['mdp'])){
	

		$req = $bdd->prepare('SELECT * FROM membres WHERE mail = :mail');
		$req->execute(array('mail' => $_POST['mail']));
		$resultat = $req->fetch();

		// Comparaison du pass envoyé via le formulaire avec la base
		$isPasswordCorrect = password_verify($_POST['mdp'], $resultat['mdp']);

		if (!$resultat)
		{
		    echo 'Mauvais identifiant ou mot de passe !';
		}
		else
		{
		    if ($isPasswordCorrect) {
		        session_start();
		        $_SESSION['id'] = $resultat['id'];
		        $_SESSION['mail'] = $resultat['mail'];
		        $_SESSION['nom'] = $resultat['nom'];
		        header("Location: index.php");
		       
		    }
		    else {
		        echo '<p class="error" >Mauvais identifiant ou mot de passe !</p>';
		    }
		}

	}
	?>

</body>
</html>