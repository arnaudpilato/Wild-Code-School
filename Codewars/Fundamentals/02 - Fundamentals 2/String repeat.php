function repeatStr(int $n, string $str): string
{
  $operator = '';
  for ($i = 0; $i < $n; $i++) {
    $operator .= $str;
  }
  return $operator;
}
