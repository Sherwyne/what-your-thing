<?php
$name  = $_REQUEST["first_name"]  . ' ' . $_REQUEST["last_name"] ;
$email = $_REQUEST["email"];
$company = $_REQUEST["company"];

function clean_text($string){
	$string = trim($string);
	$string = stripslashes($string);
	$string = htmlspecialchars($string);
	return $string;
}

if (isset($name) && isset($email)) {
	$file_open = fopen("../data.csv", "a");
	$form_data = array(
		'name' => $name,
		'email' => $email,
		'company' => $company
	);
	$status = fputcsv($file_open, $form_data);
	if($status){
		echo 'success';
	} else {
		echo 'failed';
	}
	$name = '';
	$email = '';
	$company = '';
	

}
?>