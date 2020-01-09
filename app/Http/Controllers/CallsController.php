<?php

namespace App\Http\Controllers;

use App\DbCallCenter;
use Illuminate\Http\Request;

class CallsController extends Controller
{
    public function call($id)
    {
        $calling = DbCallCenter::findOrFail($id);
        $nom = $calling['nom'];
		$prenom = $calling['prenom'];
		$adresse = $calling['address'];
		$email = $calling['adresse'];
		$telephone = $calling['telephone'];
			
			//Création du fichier dans le repertoire outgoing
			$file ="/var/spool/asterisk/outgoing/$nom.call";

			if(!is_file($file)){
			$contents=["[plateform]","\nChannel: SIP/$telephone","\nMaxRetries: 0","\nRetryTime: 60","\nWaitTime: 30","\nContexte: automatique","\nExtension: 10"];
			file_put_contents($file, $contents);
            //rename($file, $outgoing . pathinfo($file, PATHINFO_BASENAME));
            $outgoing = '/var/spool/asterisk/outgoing/';
            }else{
            echo "L\'ouverture du fichier a echouer";
            }
            return redirect()->route('automatiqueCallCenter.index');
    }
}