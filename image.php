<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<head>
	<title>Images</title>
</head>
<body>
<h1>Les images :</h1>
<table>
<?php 
	$Repertoire = "Images";//Nom du dossier des images
	$Indice = opendir($Repertoire);//ouverture du fichier
	$Image = 0;//Créer et Règle le compteur d'image à 0
	$TargetPNG = "/png/";//paramètre recherche fichier png
	$TargetJPG = "/jpg/";//paramètre recherche fichier jpg
	$ImageLigne = 0;
	$Fichier = 2;
	do  
	{
		
		echo "<tr>";
		while($ImageLigne < 4 && !empty($Fichier))
		{
			
			if(preg_match($TargetPNG, $Fichier) || preg_match($TargetJPG, $Fichier))//Test le type
			{
				echo "<td>";
				echo "<a href=\"Images/", $Fichier, "\" ><img src=\"$Repertoire/$Fichier\" height=\"70\">", $Fichier, "</img></a>";//Affiche l'image avec un lien vers elle
				$Image++;//compteur d'image
				$ImageLigne++;
				echo "</td>";
			}
			$Fichier = readdir($Indice);
		}
		echo "</tr>";
		$ImageLigne = 0;
		
	}while(!empty($Fichier));//Test s'il n'y a plus de nouveau fichiers
	
	?>
</table>
<h3>Il y a <?php echo "$Image"; //Compteur d'images ?> images.</h3>
</body>
</html>