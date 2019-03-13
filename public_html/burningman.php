<?php

if(!empty($_FILES)){

	$temp = $_FILES['file']['tmp_name'];
	$dir_sep = DIRECTORY_SEPARATOR;
	$folder = 'gallery/burningman';

	$destination_path = dirname(__FILE__).$dir_sep.$folder.$dir_sep;

	$target_path = $destination_path.$_FILES['file']['name'];

	move_uploaded_file($temp, $target_path);

}