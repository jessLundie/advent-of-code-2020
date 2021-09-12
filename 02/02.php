<?php

include "02-input.php";

$inputs = explode("\n", $inputs);

$valid_passwords = 0;

foreach ( $inputs as $entry ) {

	$min = substr( $entry, 0, (strpos($entry, "-")) );
	$max = substr( $entry, (strpos($entry, "-") + 1) ,((strpos($entry, " ")) - (strpos($entry, "-")) - 1));
	$letter = substr( $entry, strpos( $entry, ":") - 1, 1);
	$password = substr( $entry, strrpos($entry, " ") + 1 );
	$letter_count = substr_count( $password, $letter);

 	if (  $letter_count >= $min && $letter_count <= $max ) {
	 	$valid_passwords++;
 	}
}
echo "There are $valid_passwords valid passwords.";
