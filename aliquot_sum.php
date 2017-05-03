<?php
/**
 * Return $n aliquot sums starting at $base
 * @param int $base
 * @param int $n - length of sequence
 * @return array
 */
function sequence(int $base, int $n) : array {
  $result = [$base];
  for ($idx = 0; $idx < $n - 1; $idx++) {
    $result[] = sum($result[count($result) - 1]);
  }
  return $result;
}

/**
 * sum of factors of $num excluding $num
 * @param int $num
 * @return int
 */
function sum(int $num) : int {
  $factors = [];
  for($x = 1; $x < $num; $x++) {
    if ($num % $x == 0) {
      $factors[] = $x;
    }
  }
  $sum = 0;
  forEach($factors as $factor) {
    $sum += $factor;
  }
  return $sum;
}

print_r(sequence(7,4));
?>