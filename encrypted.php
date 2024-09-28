<?php

$secretKey = "0123456789123456";

function encryptedData ($encryptionText) {
	global $secretKey;
	$encrypted = openssl_encrypt($encryptionText, "AES-128-ECB", $secretKey, OPENSSL_RAW_DATA);
	$encode = base64_encode($encrypted);
	return $encode;
}

function decryptedData ($decryptionText) {
	global $secretKey;
	$decode = base64_decode($decryptionText);
	$decrypted = openssl_decrypt($decode, "AES-128-ECB", $secretKey, OPENSSL_RAW_DATA);
	return $decrypted;
}

?>