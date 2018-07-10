<?php

    $folder_path = 'img/APRI/'; //image's folder path

    $dirint = dir($folder_path);

	$list=array();
    while (($archivo = $dirint->read()) !== false)
    {
    	
        if ( strpos($archivo, 'jpeg') !== false){

        	//echo $folder_path."".$archivo."<br>";

            $list[]=$folder_path."".$archivo;

        }
        
    }
    
    $dirint->close();

    sort($list);

    foreach($list as $fileName)
    {
        echo $fileName." :) <br>";

    }

?>