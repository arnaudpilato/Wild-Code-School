function basicOp($op, $val1, $val2)
{
  if ($op == '+') {
    return $result = $val1 + $val2;
  } elseif ($op == '-') {
    return $result = $val1 - $val2;
  } elseif ($op == '*') {
    return $result = $val1 * $val2;
  } else {
    return $result = $val1 / $val2;
  }
}