<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Inscription</title>
	</head>
	<body>
		<form action="inscription.php" method="POST" enctype="multipart/form-data">
			<label for="login"> Login<font color="red">*</font>:
				<input type="text" name="login" <?php if (isset($_POST['login'])) echo 'value="'.$_POST['login'].'"';?>>
			</label>
			<br/><label for="mdp"> Mot de passe<font color="red">*</font>:
				<input type="password" name="mdp">
			</label>
			<br/><label for="mdpv"> Vérifier le mot de passe<font color="red">*</font>:
				<input type="password" name="mdpv">
			</label>
			<br/><label for="prenom"> Prénom:
				<input type="text" name="prenom" <?php if (isset($_POST['prenom'])) echo 'value="'.$_POST['prenom'].'"';?>>
			</label>
			<br/><label for="nom"> Nom:
				<input type="text" name="nom" <?php if (isset($_POST['nom'])) echo 'value="'.$_POST['nom'].'"';?>>
			</label>
			<br/><label for="avatar"> Avatar:
				<input type="hidden" name="MAX_FILE_SIZE" value="1048576"/>
				<input type="file" name="avatar">
			</label>
			<br/><font color="red" size="2">* Champ obligatoire</font>
			<br/><br/>
			<input type="submit" value="S'inscrire">
		</form>
		<hr/>
		<?php
			try
			{
				$bdd = new PDO('mysql:host=localhost;dbname=tp-php;charset=utf8','root','07081990');
			}
			catch (Exception $e)
			{
				die('Erreur : ' . $e->getMessage());
			}

			if (isset($_POST['login']))
			{
				if ($_POST['login'] == "")
					echo "Le login doit être renseigné";
				else
				{
					if ($_POST['mdp'] == "" || $_POST['mdpv'] == "")
						echo "Le mot de passe doit être renseigné";
					else
					{
						$sql = $bdd->query("SELECT * FROM user WHERE login = '".$_POST['login']."'");
						$row = $sql->fetch();
						if ($row == true)
						{
							echo "Ce nom d'utilisateur existe déjà";
						}
						else
						{
							if ($_POST['mdp'] != $_POST['mdpv'])
								echo "Les mots de passe doivent être identiques";
							else
							{
								$hash = password_hash($_POST['mdp'], PASSWORD_BCRYPT);
								if ($_POST['nom'] == "")
									$lastname = "NULL";
								else
									$lastname = "'".$_POST['nom']."'";
								if ($_POST['prenom'] == "")
									$firstname = "NULL";
								else
									$firstname = "'".$_POST['prenom']."'";
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
											$avatar = md5(uniqid(rand(), true)).".".$upext;
											$nom = "../images/".$avatar;
											$resultat = move_uploaded_file($_FILES['avatar']['tmp_name'],$nom);
										}
									}
								}
								else
									$avatar = "avatar.jpg";
								$sqli = $bdd->query("INSERT INTO user (login, password, firstname, lastname, avatar) VALUES ('".$_POST['login']."', '".$hash."', ".$firstname.", ".$lastname.", '".$avatar."')");
								header("Location: login.php?r=".$_POST['login']);
								exit;
							}
						}
					}
				}
			}
		?>
	</body>
</html>