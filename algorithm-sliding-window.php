<?php

// Given a string  $input return the longest substring.

function solution($str)
{
	if ($str === null || strlen($str) == 0) {

		return 0;
	}

	$i = $j = $max = 0;
	$set = [];

	while ($i < strlen($str)) {

		$char = $str[$i];
		while (in_array($char, $set)) {

			$curr = $str[$j];

			// array_splice($array, $key, $length)
			array_splice($set, array_search($str[$j], $set), 1);

			$j++;
		}

		array_push($set, $char);
		$max = max($max, ($i - $j + 1));
		$i++;
	}

	return $max;
}

$input = "pwwkew";
echo ($result = solution($input)) ? $result : 'Not found';
