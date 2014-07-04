<?php
	
	$data=var_export($_REQUEST,true);
	$data2=var_export($_FILES ,true);
 
	file_put_contents('r.txt',$data);
	file_put_contents('f.txt',$data2);
	
 	//$filename = $_POST['fileid'].'.png';
 	$filename = $_POST['name'];
 	
 	file_put_contents('uploads/'.$filename, file_get_contents ( $_FILES["file"]["tmp_name"]),  FILE_APPEND);
 	
	$result=array(
		"succ"=>1,
		"data"=>array()
	);
	
	echo json_encode($result);