<?php
declare(strict_types=1);

/**
 * Simple CLI test file.
 * Save as tets1.php and run: php tets1.php
 */

// test 999;

function add(int $a, int $b): int {
    return $a + $b;
}

$tests = [
    ['args' => [1, 2], 'expected' => 3],
    ['args' => [0, 0], 'expected' => 0],
    ['args' => [-1, 1], 'expected' => 0],
];

$failures = [];

foreach ($tests as $i => $t) {
    $result = add($t['args'][0], $t['args'][1]);
    if ($result !== $t['expected']) {
        $failures[] = "Test #{$i} failed: add({$t['args'][0]}, {$t['args'][1]}) returned {$result}, expected {$t['expected']}";
    }
}

if (empty($failures)) {
    echo "All tests passed.\n";
    exit(0);
}

echo "Failures:\n";
echo implode("\n", $failures) . "\n";
exit(1);
?>