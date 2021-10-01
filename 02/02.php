<?php

$inputs = file_get_contents('02-input.txt', true);

$inputs = explode("\n", $inputs);

$valid_passwords = 0;


foreach ( $inputs as $entry ) {

	$first_dash = strpos($entry, "-");
	$first_semi = strpos($entry, ":");
	$first_space = strpos($entry, " ");
	$last_space = strrpos($entry, " ");

	if ( !empty($entry) ) {

		$min = substr( $entry, 0, $first_dash );
		$max = substr( $entry, $first_dash + 1 ,$first_space - $first_dash - 1);
		$letter = substr( $entry, $first_semi - 1, 1);
		$password = substr( $entry, $last_space + 1 );
		$letter_count = substr_count( $password, $letter);

	 	if (  $letter_count >= $min && $letter_count <= $max ) {
		 	$valid_passwords++;
	 	}
	}
}

echo "There are $valid_passwords valid passwords.";
