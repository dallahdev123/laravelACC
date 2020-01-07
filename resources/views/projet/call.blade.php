
		<?php 
			session_start();	
		?>
			<?php 
			
					$nom = $calling['nom'];
					$prenom = $calling['prenom'];
					$adresse = $calling['address'];
					$email = $calling['adresse'];
					$telephone = $calling['telephone'];
			
			//Création du fichier dans le repertoire outgoing
			$file ="/var/spool/asterisk/outgoing/$nom.call";

			if(!is_file($file)){
			$contents=["[plateform]","\nChanel: SIP/$telephone","\nMaxRetries: 2","\nRetryTime: 60","\nWaitTime: 30","\nContexte: plateform","\nExtension: 01"];
			file_put_contents($file, $contents);

			$_SESSION['message1'] = "Fichier cree avec succes";
			}else{
			$_SESSION['message1'] = "L\'ouverture du fichier a echouer";
			}
			header('location: ../resourses/view/projet/index.blade.php');
			// Ougtoing file
			$outgoing = '/var/spool/asterisk/outgoing/';
			//rename($file, $outgoing . pathinfo($file, PATHINFO_BASENAME));
		?>