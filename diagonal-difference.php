<?php

// Given a square matrix, calculate the absolute difference between the sums of its diagonals

function solution($input)
{

	$ld = $rd = 0;

	$totalItems = count($input);

	for ($i = 0; $i < $totalItems; $i++) {

		for ($j = 0; $j < $totalItems; $j++) {

			if ($i == $j) {

				$ld += $input[$i][$j];
			}

			if ($i == $totalItems - $j - 1) {

				$rd += $input[$i][$j];
			}
		}
	}

	return abs($ld - $rd);
}

$input = [
	[3],
	[11, 2, 4],
	[4, 5, 6],
	[10, 8, -12]
];

echo ($result = solution($input)) ? $result : 'Not found';
