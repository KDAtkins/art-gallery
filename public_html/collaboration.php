<?php

if(!empty($_FILES)){

	$temp = $_FILES['file']['tmp_name'];
	$dir_sep = DIRECTORY_SEPARATOR;
	$folders = array('gallery/all','gallery/collaboration');

	$destination_path0 = dirname(__FILE__).$dir_sep.$folders[0].$dir_sep;
	$destination_path1 = dirname(__FILE__).$dir_sep.$folders[1].$dir_sep;

	$target_path0 = $destination_path0.$_FILES['file']['name'];
	$target_path1 = $destination_path0.$_FILES['file']['name'];

	move_uploaded_file($temp, $target_path0);
	move_uploaded_file($temp, $target_path1);

}

//$folders = array('gallery/all', 'gallery/burningman', 'gallery/collaboration', 'gallery/fabrication', 'gallery/mixed', 'gallery/steel', 'gallery/stone', 'gallery/wood');
//
//
//for($i = 0; $i < count($folders) ; $i++){
//	echo $folders[$i];
//}