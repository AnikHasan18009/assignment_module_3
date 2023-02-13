<?php

function evenORodd(int $x):string
{
  $result=($x%2==0)?"{$x} is even.":"{$x} is odd.";
  return $result;
}

echo evenORodd(5),"\n";
echo evenORodd(10),"\n";

