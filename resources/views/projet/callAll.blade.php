			
		<?php 
			session_start();
			
    ?>
@if(count($callingAll)>1)
@foreach($callingAll as $row)
 <?php 
      $nom = $row['nom'];
      $prenom = $row['prenom'];
      $adresse = $row['address'];
      $email = $row['email'];
      $telephone = $row['telephone'];
        //Création du fichier dans le repertoire outgoing
        $file ="/var/spool/asterisk/outgoing/$nom.call";

        if(!is_file($file)){
        $contents=["[plateform]","\nChanel: SIP/$telephone","\nMaxRetries: 2","\nRetryTime: 60","\nWaitTime: 30","\nContexte: plateforme","\nExtension: 01"];
        file_put_contents($file, $contents);


        $_SESSION['message1'] = "Fichiers crees avec succes";
        }else{
         $_SESSION['message1'] = "L/'ouverture du fichier a echouer";
        }
         // Ougtoing file
            $outgoing = '/var/spool/asterisk/outgoing/';
        //rename($file, $outgoing . pathinfo($file, PATHINFO_BASENAME));
                
        header("location: {{route('automatiqueCallCenter.index')}}");
  ?>
@endforeach

@else
  <h1>Aucun utilisateur</h1>
@endif
