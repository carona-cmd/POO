<?php
//une classe d'écriture dans un fichier
class Adaptateur_Fichier1
{
	function __construct($contenu1, $contenu2)
	{
		// on met le contenu dans un fichier TXT
		file_put_contents(getcwd().'/fichier1.txt', 
											$contenu1.PHP_EOL.$contenu2.PHP_EOL, 
											FILE_APPEND);
	}

	function test()
	{
		echo '<p>Fonction test de l\'adaptateur Fichier1</p>';
	}
}