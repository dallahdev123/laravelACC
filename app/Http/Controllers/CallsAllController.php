<?php

namespace App\Http\Controllers;

use App\DbCallCenter;
use Illuminate\Http\Request;

class CallsAllController extends Controller
{
    public function call()
    {
        $callingAll = DbCallCenter::all();
        if(count($callingAll)>1){
            foreach($callingAll as $row){
                $nom = $row['nom'];
                $prenom = $row['prenom'];
                $adresse = $row['address'];
                $email = $row['email'];
                $telephone = $row['telephone'];
                
                $file ="/var/spool/asterisk/outgoing/$nom.call";
                if(!is_file($file)){
                    $contents=["[plateform]","\nChanel: SIP/$telephone","\nMaxRetries: 2","\nRetryTime: 60","\nWaitTime: 30","\nContexte: plateform","\nExtension: 01"];
                    file_put_contents($file, $contents);
                    //rename($file, $outgoing . pathinfo($file, PATHINFO_BASENAME));
                    $outgoing = '/var/spool/asterisk/outgoing/';
                    }else{
                    echo "L\'ouverture du fichier a echouer";
                    }
            }

        }else{
            echo "L\'ouverture du fichier a echouer";
        }
            return redirect()->route('automatiqueCallCenter.index');
    }

}