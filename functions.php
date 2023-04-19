<?php

function generatePassword($pwdLength)
{
  $newPwd = '';
  for ($i = 0; $i < $pwdLength; $i++) {

    do {
      $number = rand(33, 127);
    } while ($number == 60 || $number == 62); // no "<" and ">" chars
    
    $newPwd .= chr($number);
  }
  return $newPwd;
}
