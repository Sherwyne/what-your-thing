<?php
$name  = $_REQUEST["first_name"]  . ' ' . $_REQUEST["last_name"] ;
$email = $_REQUEST["email"];
$company = $_REQUEST["company"];
$contact = $_REQUEST["contact"];


if (isset($name) && isset($email)) {
	$file_open = fopen("../data.csv", "a");
	$form_data = array(
		'name' => $name,
		'company' => $company,
		'email' => $email,
		'contact' => $contact
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