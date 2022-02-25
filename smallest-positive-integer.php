<?php

// Given an array $input of N integers, returns the smallest positive integer (greater than 0) that does not occur in the array.

function solution($input = [])
{

	if (count($input) == 0) {

		return 1;
	}

	$n = count($input);

	$numberOneIsPresent = false;

	for ($i = 0; $i < $n; $i++) {

		if ($input[$i] == 1) {

			$numberOneIsPresent = true;
		} else if ($input[$i] <= 0 || $input[$i] > $n) {

			// negative and greater numbers are set to 1 to be ignore
			$input[$i] = 1;
		}
	}

	for ($j = 0; $j < $n; $j++) {

		$index = abs($input[$j]) - 1;

		if ($input[$index] > 0) {

			$input[$index] = -1 * $input[$index];
		}
	}

	for ($k = 0; $k < $n; $k++) {

		if ($input[$k] > 0) {

			return $k + 1;
		}
	}

	return $n + 1;
}

$input = [0, 1, 3, 6, 4, 5, 1, 2, -50, 50, 80, -15];
echo ($result = solution($input)) ? $result : 'Not found';
