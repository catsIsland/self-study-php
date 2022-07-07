<?php

echo $te;

phpinfo();

function test($a){
  echo 'test' . $a;
}

function getComment($string){
  echo $string;
}

test('引数');

echo('<br>');

getComment('テストです');

echo('<br>');
function getSum($int1, $int2){
  $int3 = $int1 + $int2;
  return $int3;
}

$resultOfSum = getSUm(5,4);
echo $resultOfSum;


// camcel case => checkPostalCode;
// snake case => check_postal_code;
$postalCoast = '123-4567';
function checkPostalCode($str){
  $replaced = str_replace('-', '', $str);
  $length = strlen($replaced);
  if($length === 7){
    return true;
  }
  return false;
}

var_dump(checkPostalCode($postalCoast));

echo('<br>');

echo __DIR__;
echo('<br>');
echo __FILE__;




?>