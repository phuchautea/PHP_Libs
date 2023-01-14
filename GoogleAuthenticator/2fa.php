<?php
require_once 'GoogleAuthenticator.php';
function Create2FACode()
{
    $ga = new GoogleAuthenticator();
    $secret = $ga->createSecret();
    return $secret;
}
function Check2FACode($code, $secret)
{
    $ga = new GoogleAuthenticator();
    $checkResult = $ga->verifyCode($secret, $code, 2);
    if ($checkResult) {
        return true;
    } else {
        return false;
    }
}
$secret = Create2FACode();
if (Check2FACode($code, $secret) == true) {
    // do something
} else {
    echo 'Invalid Authentication Code';
}
?>
