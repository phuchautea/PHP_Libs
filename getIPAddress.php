<?php
function getIPAddress()
{
	if (isset($_SERVER)) {
		if (isset($_SERVER["HTTP_X_FORWARDED_FOR"])) {
			$ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
			if (strpos($ip, ",")) {
				$expIP = explode(",", $ip);
				$ip = $expIP[0];
			}
		} elseif (isset($_SERVER["HTTP_CLIENT_IP"])) {
			$ip = $_SERVER["HTTP_CLIENT_IP"];
		} else {
			$ip = $_SERVER["REMOTE_ADDR"];
		}
	} else {
		if (getenv('HTTP_X_FORWARDED_FOR')) {
			$ip = getenv('HTTP_X_FORWARDED_FOR');
			if (strpos($ip, ",")) {
				$expIP = explode(",", $ip);
				$ip = $expIP[0];
			}
		} elseif (getenv('HTTP_CLIENT_IP')) {
			$ip = getenv('HTTP_CLIENT_IP');
		} else {
			$ip = getenv('REMOTE_ADDR');
		}
	}
	return $ip;
}
echo getIPAddress();
?>
