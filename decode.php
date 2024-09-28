<?php
$json = file_get_contents('php://input');
$data = json_decode($json, true);
$password = $data['password'];
$decode = $data['decode'];
	
$temp = array();

if ($password=='12358491') {
	require 'encrypted.php';
	$decrypted = decryptedData($decode);
	if ($decrypted === false) {
		$temp['status'] = "error";
		$temp['decode'] = "Error while decrypting the text";
	} else {
		$temp['status'] = "success";
		$temp['decode'] = $decrypted;
	}
} else {
	$temp['status'] = "unauthorized";
}

echo json_encode($temp);
?>