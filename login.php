<?php

function PasGen($length) {
	return randString( $length, array(
  "abcdefghijklnmopqrstuvwxyz",
  "ABCDEFGHIJKLNMOPQRSTUVWX­YZ",
  "0123456789",
  "!@#\$%^&*()",
));
}
ololololololo - COMBO

$value = $_POST['count_of_symbols'];
$result = PasGen ($value);
echo $result;

?>