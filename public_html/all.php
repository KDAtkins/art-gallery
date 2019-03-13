<?php

if(!empty($_FILES)){

	$temp = $_FILES['file']['tmp_name'];
	$dir_sep = DIRECTORY_SEPARATOR;
	$folder = 'gallery/all';

	$destination_path = dirname(__FILE__).$dir_sep.$folder.$dir_sep;

	$target_path = $destination_path.$_FILES['file']['name'];

	move_uploaded_file($temp, $target_path);

}

//$folders = array('gallery/all', 'gallery/burningman', 'gallery/collaboration', 'gallery/fabrication', 'gallery/mixed', 'gallery/steel', 'gallery/stone', 'gallery/wood');
//
//
//for($i = 0; $i < count($folders) ; $i++){
//	echo $folders[$i];
//}