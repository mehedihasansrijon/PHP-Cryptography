<?php
$json = file_get_contents('php://input');
$data = json_decode($json, true);
$password = $data['password'];
$encode = $data['encode'];
	
$temp = array();

if ($password=='12358491') {
	require 'encrypted.php';
	$encrypted = encryptedData($encode);
	if ($encrypted === false) {
		$temp['status'] = "error";
		$temp['encode'] = "Error while encrypting the text";
	} else {
		$temp['status'] = "success";
		$temp['encode'] = $encrypted;
	}
} else {
	$temp['status'] = "unauthorized";
}

echo json_encode($temp);
?>