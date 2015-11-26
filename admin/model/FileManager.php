<?php
class FileManager
{
	private static $DIRECTORY_PATH = '../assets/img/';

	public static function uploadFile($inputName, $fileInputName = null, $fileInputPath = '')
	{
		// print_r($_FILES);
		$directoryPath = FileManager::$DIRECTORY_PATH.$fileInputPath;
		$fileName = basename($_FILES[$inputName]['name']);
		$maxFileSize = 1000000;	//1Mo
		$fileSize = filesize($_FILES[$inputName]['tmp_name']);
		$extensions = array('.jpg', '.jpeg', '.png', '.gif');
		$extension = strrchr($_FILES[$inputName]['name'], '.');
		
		if ($fileInputName != null) {
			$fileName = $fileInputName.$extension;
		}

		//Début des vérifications de sécurité...
		if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
		{
			$file['ERROR'][]['code'] = 1;
			$file['ERROR'][]['message'] = 'Vous devez uploader une image';
		}
		if($fileSize > $maxFileSize)
		{
			$file['ERROR'][]['code'] = 2;
			$file['ERROR'][]['message'] = 'Le fichier est trop volumineux';
		}
		if(!isset($file['ERROR'])) //S'il n'y a pas d'erreur, on upload
		{
			//On formate le nom du fichier
			$fileName = strtr($fileName, 
				'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
				'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
			$fileName = preg_replace('/([^.a-z0-9]+)/i', '-', $fileName);
			if(move_uploaded_file($_FILES[$inputName]['tmp_name'], $directoryPath.$fileName)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
			{
				$file['name'] = $fileName;
				$file['path'] = $directoryPath;
				$file['size'] = $fileSize;
				$file['extension'] = $extension;
			} else {	//Sinon (la fonction renvoie FALSE)
				$file['ERROR'][]['code'] = 0;
				$file['ERROR'][]['message'] = 'Echec de l\'upload !';
			}
		}
		return $file;
	}

	public static function downloadFile($file, $fileName)
	{
		if(file_exists($file))
		{
			header('Content-type: application/force-download');
			header('Content-Disposition: attachment; filename="'.$fileName.'"');
			readfile($file);
			return true;
		}
		return false;
	}

	public static function getContentFile($fileInputName)
	{
		return explode(CHR(13).CHR(10), file_get_contents($_FILES[$fileInputName]["tmp_name"]));
	}
	
	public static function getFilename($fileInputName)
	{
		return basename($_FILES[$fileInputName]['name']);
	}

	public static function editFile($file, $content)
	{
		$file = fopen($file, 'w');
		foreach($content as $value)
		{
			fwrite($file, $value.PHP_EOL);
		}
		fclose($file);
	}

	public static function supprFile($fileInputName)
	{
		$directoryPath = FileManager::$DIRECTORY_PATH;		//Adresse du dossier.
		unlink($directoryPath.$fileInputName);		//Suppression du fichier
	}

	public static function addCompatibility($fileContent)		// Rendre compatible avec CSV eTarget
	{
		foreach($fileContent as $key => $mail)
		{
			$expl = explode(';', $fileContent[$key]);
			$expl[0] = strtolower(str_replace(CHR(13).CHR(10), '', $expl[0]));	// Formatte le mail en mettant que des minuscules et en enlevant les retours a la lignes
			if( !filter_var($expl[0], FILTER_VALIDATE_EMAIL) )	// Verification du bon format du mail
			{
				unset($fileContent[$key]);
			}
			else
				$fileContent[$key] = $expl[0];
		}
		return array_values($fileContent);
	}
}
?>