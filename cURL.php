<?php
function autoCurl($url)
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_URL, $url);
    $data = curl_exec($curl);
    curl_close($curl);
    return $data;
}
?>