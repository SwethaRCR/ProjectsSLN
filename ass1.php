<?php
function test($x, $y, $z) 
{
  $max = max($x, max($y, $z));
  return $max;
}

echo test(1, 2, 3)."<br>";
echo test(1, 3, 2)."<br>";
echo test(1, 1, 1)."<br>";
echo test(1, 2, 2)."<br>";
?>