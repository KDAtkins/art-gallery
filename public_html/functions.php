<?php

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