<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Modifier</title>
	</head>
	<body>
		<?php
			session_start();
			if (isset($_SESSION['login']))
			{
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
				if (isset($_POST['nom']) && isset($_POST['prenom']))
				{
					if ($_POST['nom'] == "")
						$name = "NULL";
					else
						$name = "'".$_POST['nom']."'";
					if ($_POST['prenom'] == "")
						$prenom = "NULL";
					else
						$prenom = "'".$_POST['prenom']."'";
					if ($_POST['profil'] == "private")
						$profil = 0;
					else
						$profil = 1;
					if ($_POST['mdp'] != $_POST['mdpv'])
						echo "<font color='red' size='2'>Les mots de passe doivent être identiques</font><br/>";
					else
					{
						if ($_POST['mdp'] == "")
							$pass = $row['password'];
						else
							$pass = password_hash($_POST['mdp'], PASSWORD_BCRYPT);
						if ($_FILES['avatar']['tmp_name'])
						{
							if ($_FILES['icone']['error'] > 0)
								echo "Erreur lors du transfert";
							else
							{
								$valext = array('jpg', 'jpeg', 'gif', 'png');
								//1. strrchr renvoie l'extension avec le point (« . »).
								//2. substr(chaine,1) ignore le premier caractère de chaine.
								//3. strtolower met l'extension en minuscules.
								$upext = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
								if (!in_array($upext,$valext))
									echo "Extension incorrecte";
								else
								{
									$snom = md5(uniqid(rand(), true)).".".$upext;
									$nom = "../images/".$snom;
									$resultat = move_uploaded_file($_FILES['avatar']['tmp_name'],$nom);
									$sqlu = $bdd->query("UPDATE user SET password = '".$pass."', firstname = ".$prenom.", lastname = ".$name.", avatar = '".$snom."', public = '".$profil."' WHERE login = '".$_SESSION['login']."'");
									header("Location: profil.php");
									exit;
								}
							}
						}
						else
						{
							$sqlu = $bdd->query("UPDATE user SET password = '".$pass."', firstname = ".$prenom.", lastname = ".$name.", public = '".$profil."' WHERE login = '".$_SESSION['login']."'");
							header("Location: profil.php");
							exit;
						}
					}
				}
			}
			else
			{
				header("Location: login.php");
				exit;
			}
		?>
		<form action="update.php" method="POST" enctype="multipart/form-data">
			<label for="prenom"> Prénom:
				<input type="text" name="prenom" value="<?php echo $row['firstname']?>">
			</label>
			<br/><label for="nom"> Nom:
				<input type="text" name="nom" value="<?php echo $row['lastname']?>">
			</label>
			<br/><label for="profil"> Profil:
				<input type="radio" name="profil" value="private" <?php if ($row['public'] == 0) echo "checked";?>> Privé
				<input type="radio" name="profil" value="public" <?php if ($row['public'] == 1) echo "checked";?>> Publique
			</label>
			<br/><label for="avatar"> Avatar:
				<input type="hidden" name="MAX_FILE_SIZE" value="1048576"/>
				<input type="file" name="avatar">
			</label>
			<br/><label for="mdp"> Mot de passe</font>:
				<input type="password" name="mdp">
			</label>
			<br/><label for="mdpv"> Vérifier le mot de passe</font>:
				<input type="password" name="mdpv">
			</label>
			<br/><br/>
			<input type="submit" value="Modifier">
			<br/><br/><a href='logout.php'>Déconnexion</a>
		</form>
	</body>
</html>