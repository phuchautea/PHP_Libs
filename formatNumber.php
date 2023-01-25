<?php
function formatNumber($number){
    return number_format($number, 0, ',', '.');
}
echo formatNumber(20000);
?>
