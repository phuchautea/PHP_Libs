<?php
require_once 'GoogleAuthenticator.php';
function create2FACode()
{
    $ga = new GoogleAuthenticator();
    return $ga->createSecret();
}
function check2FACode($code, $secret)
{
    $ga = new GoogleAuthenticator();
    if ($ga->verifyCode($secret, $code, 2)) {
        return true;
    }
    return false;
}
$secret = create2FACode();
if (check2FACode($code, $secret)) {
    // do something
} else {
    echo 'Invalid Authentication Code';
}
?>
