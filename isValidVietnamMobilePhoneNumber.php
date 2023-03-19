<?php
function isValidVietnamMobilePhoneNumber($phone_number) {
  $pattern = '/^(\\+?84|0)(86|96|97|98|32|33|34|35|36|37|38|39|91|94|83|84|85|81|82|90|93|70|79|77|76|78|92|56|58|99|59|55|87)\\d{7}$/';
  return preg_match($pattern, $phone_number);
}

$phone_number1 = '+84901234567';
$phone_number2 = '0901234567';

if (isValidVietnamMobilePhoneNumber($phone_number1)) {
  echo $phone_number1 . ' là số điện thoại di động Việt Nam hợp lệ.';
} else {
  echo $phone_number1 . ' không phải là số điện thoại di động Việt Nam hợp lệ.';
}

if (isValidVietnamMobilePhoneNumber($phone_number2)) {
  echo $phone_number2 . ' là số điện thoại di động Việt Nam hợp lệ.';
} else {
  echo $phone_number2 . ' không phải là số điện thoại di động Việt Nam hợp lệ.';
}

?>