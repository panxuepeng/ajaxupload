<?php

	$result=array(
		"succ"=>1,
		"data"=>array()
	);
		
	$filenames = explode(',' , $_GET['filename'] );
	foreach($filenames as $thefile){
		$filepath='uploads/'.$thefile;
		$thekey=substr($thefile,  0 , strripos($thefile, '.') );
		$result['data'][$thekey]=file_exists($filepath) ? filesize($filepath) : 0 ;
	}
	
	echo json_encode($result);
