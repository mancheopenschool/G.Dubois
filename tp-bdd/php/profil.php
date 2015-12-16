<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Profil</title>
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
				echo "<a href='update.php'>Modifier</a>";
				echo "<br/><br/><a href='logout.php'>Déconnexion</a>";
			}
			else
			{
				header("Location: login.php");
				exit;
			}
		?>
	</body>
</html>