<?php 
/* 
 * Return an array of pascals triangle with $length
 */

function pascal(int $length): array {
  $triangle = [];
  for ($idx = 0; $idx < $length; $idx++) {
    $row = [1];
    $prev_idx = $idx - 1;
    for ($idx2 = 1; $idx2 < $idx; $idx2++) {
      $prev_row = $triangle[$prev_idx]; // array
      if ($prev_row) {
        $row[] = getVal($prev_row, $idx2) + getVal($prev_row, $idx2 - 1);
      } else {
        $row[] =  1;
      }
    }
    $triangle[] = $row;
  }

  return $triangle;
}

function getVal(array $prev_row, int $idx): int {
  if (isset($prev_row[$idx])) {
    return $prev_row[$idx];
  } else {
    return 0;
  }
}

if (!isset($argv[1])) {
  echo "please pass an int";
} else {
  echo "Printing pascals triangle array with $argv[1] rows";
  $result = pascal($argv[1]);
  print_r($result);
}
?>