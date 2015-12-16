<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Profil</title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
	</head>
	<body>
		<?php
			session_start();
			if (isset($_SESSION['login']))
			{
				echo "<h1>Bienvenue ".$_SESSION['login']."</h1>";
				try
				{
					$bdd = new PDO('mysql:host=localhost;dbname=tp-php;charset=utf8','root','07081990');
				}
				catch (Exception $e)
				{
					die('Erreur : ' . $e->getMessage());
				}

				$sql = $bdd->query("SELECT * FROM user WHERE login = '".$_SESSION['login']."'");
				$row = $sql->fetch();

				$profil = ($row['public'] == 1) ? "public" : 'privé';
				setlocale (LC_TIME, 'fr_FR.utf8','fra');
				if ($row['last_login'] != "1990-08-07 03:25:00")
				{
					$tmstmp = strtotime($row['last_login']);
					echo "<p>Dernière connexion le ".strftime("%A %e %B à %T",$tmstmp)."</p>";
				}
				else
					echo "<p>Première connexion</p>";
				$sqlu = $bdd->query("UPDATE user SET last_login = '".date('Y-m-d H:i:s')."' WHERE login = '".$_SESSION['login']."'");
				echo "<p>Votre profil est ".$profil."</p>";
				echo "<img src='../images/".$row['avatar']."'>";
				if (is_null($row['firstname']))
					echo "<p>Pas de prénom indiqué</p>";
				else
					echo "<p>Prénom: ".$row['firstname']."</p>";
				if (is_null($row['lastname']))
					echo "<p>Pas de nom indiqué</p>";
				else
					echo "<p>Nom: ".$row['lastname']."</p>";
			}
			else
			{
				header("Location: login.php");
				exit;
			}
		?>
		<a href='update.php'>Modifier</a>
		<br/><br/><a href='logout.php'>Déconnexion</a>
		<br/>Growth in code:<br/><div class="progressBar" id="progressGC"><div></div></div>
		<br/>Happiness in code:<br/><div class="progressBar" id="progressHC"><div></div></div>
		<br/>Happiness in life:<br/><div class="progressBar" id="progressHL"><div></div></div>
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
		<script type="text/javascript" src="../js/script.js"></script>
		<script>
			progress(<?php echo $row['growth-code'] ?>, $('#progressGC'));
			progress(<?php echo $row['happiness-code'] ?>, $('#progressHC'));
			progress(<?php echo $row['happiness-life'] ?>, $('#progressHL'));
		</script>
	</body>
</html>