
<?php

/**
 * Returns the smallest positive integer
 * that does not occur in the input array.
 *
 * Time complexity: O(n)
 * Auxiliary space: O(1) (excluding PHP copy-on-write)
 */
function solution(array $input = []): int
{
    $n = count($input);

    if ($n === 0) {
        return 1;
    }

    $numberOneIsPresent = false;

    // Step 1: Check whether 1 exists and
    // normalize out-of-range values.
    for ($i = 0; $i < $n; $i++) {
        if ($input[$i] === 1) {
            $numberOneIsPresent = true;
        } elseif ($input[$i] <= 0 || $input[$i] > $n) {
            $input[$i] = 1;
        }
    }

    // If 1 is missing, it is the answer.
    if (!$numberOneIsPresent) {
        return 1;
    }

    // Step 2: Mark existing positive integers
    // by negating values at their corresponding indices.
    for ($i = 0; $i < $n; $i++) {
        $index = abs($input[$i]) - 1;

        if ($input[$index] > 0) {
            $input[$index] *= -1;
        }
    }

    // Step 3: Find the first unmarked index.
    for ($i = 0; $i < $n; $i++) {
        if ($input[$i] > 0) {
            return $i + 1;
        }
    }

    // All integers from 1 to n are present.
    return $n + 1;
}

// Test cases
$testCases = [
    [[1, 2, 3], 4],
    [[3, 4, -1, 1], 2],
    [[7, 8, 9, 11, 12], 1],
    [[2, 3], 1],
    [[1, 1], 2],
    [[1], 2],
    [[], 1],
    [[0, -1, -2], 1],
    [[2, 1], 3],
    [[0, 1, 3, 6, 4, 5, 1, 2, -50, 50, 80, -15], 7],
];

foreach ($testCases as [$input, $expected]) {
    $actual = solution($input);

    echo ($actual === $expected ? "PASS" : "FAIL")
        . " | Expected: $expected"
        . " | Actual: $actual\n";
}
