<?php

function getOptions(){

	$categories = ['all' => 'All', 'wood' => 'Wood', 'steel' => 'Steel', 'stone' => 'Stone', 'metal' => 'Metal'];
	$options = '';

	while(list($key, $value) = each($categories)){

		$options .= '<option value="' . $key . '">' . $value . '</option>';

	}

	return $options;

}


function get_image_category_name(){
	include 'connect.php';

	try{
		return $dbh->query('SELECT imageCategory, imageName FROM image');
	}catch(Exception $e){
		echo "Error! " . $e->getMessage() . "<br>";
		return false;
	}
}

//function get_image_name(){
//	include 'connect.php';
//
//	try{
//		$dbh->query('SELECT imageName FROM image');
//	}catch(Exception $e){
//		echo "Error! " . $e->getMessage() . "<br>";
//		return false;
//	}
//}

?>