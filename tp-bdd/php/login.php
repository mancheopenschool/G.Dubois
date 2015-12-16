<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Connexion</title>
	</head>
	<body>
		<form action="login.php" method="POST">
			<label for="login"> Login:
				<input type="text" name="login">
			</label>
			<label for="password"> Password:
				<input type="password" name="password">
			</label>
			<input type="submit" value="Login">
		</form>
		<hr/>
		<a href="inscription.php">Inscription</a>
		<?php
			echo "<br/><br/>";
			if (isset($_GET['l']))
				echo $_GET['l']." déconnecté";
			else if (isset($_GET['r']))
				echo $_GET['r']." inscrit";
			if (isset($_POST['login']) && isset($_POST['password']))
			{
				if ($_POST['login'] != "")
				{
					if ($_POST['password'] != "")
					{
						try
						{
							$bdd = new PDO('mysql:host=localhost;dbname=tp-php;charset=utf8','root','07081990');
						}
						catch (Exception $e)
						{
							die('Erreur : ' . $e->getMessage());
						}
						$login = $_POST['login'];
						$password = $_POST['password'];

						$sql = $bdd->query("SELECT login,password FROM user WHERE login = '".$login."'");
						$row = $sql->fetch();

						if ($row == false)
							echo "Ce login n'existe pas";
						else
						{
							if (!password_verify($password, $row['password']))
								echo "Mot de passe incorrect";
							else
							{
								session_start();
								$_SESSION['login'] = $_POST['login'];
								header("Location: profil.php");
								exit;
							}
						}
					}
					else
						echo "Vous n'avez pas saisi de mot de passe";
				}
				else
					echo "Vous n'avez pas saisi d'identifiant";
			}
		?>
	</body>
</html>