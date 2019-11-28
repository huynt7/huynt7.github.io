<?php

ini_set('display_errors', 'On');
error_reporting(-1);

$txt = "firstname=mart&lastname=test&email=good";

$url = "http://damarist.de/post.php";






    //init curl
    $ch = curl_init();

    //optionen f\374r curl
    curl_setopt($ch,CURLOPT_URL,"http://www.damarist.de/post.php");  //URL zum login
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);        // ergebnis zur\374ckschicken
    curl_setopt($ch,CURLOPT_HEADER, true);        //Header mitnehmen
    curl_setopt($ch,CURLOPT_USERAGENT, "Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:27.0) Gecko/20100101 Firefox/27.0"); //Useragent
    
curl_setopt($ch, CURLOPT_POST, 1);
        
curl_setopt($ch, CURLOPT_POSTFIELDS, $txt);


curl_setopt($ch,CURLOPT_FOLLOWLOCATION,true);


    //cURL ausf\374hren
    $result = curl_exec($ch);

    //curl schlie\337en
    curl_close($ch);

    //Ausgabe
    return $result;
        

?>