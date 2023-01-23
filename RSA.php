<?php
function encrypt($string, $key) {
    $keyFinal = "-----BEGIN PUBLIC KEY-----\r\n" . chunk_split($key) . "-----END PUBLIC KEY-----";
    openssl_public_encrypt($string, $encrypted_data, $keyFinal);
    return base64_encode($encrypted_data); 
}
function encrypt_rsa($original_string,$private_secret_key){
	return encrypt($original_string, $private_secret_key);
}
?>