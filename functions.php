<?php

function generatePassword($filters)
{
  // basic chars array
  $noChars = [34, 39, 60, 62]; //problematic chars
  $charsArray = [];
  for ($i = 33; $i < 127; $i++) {
    if (!array_search($i, $noChars)) {
      $charsArray[] = chr($i);
    }
  }

  // applying filters
  $letters = $filters['letters'] ?? false;
  $numbers = $filters['numbers'] ?? false;
  $symbols = $filters['symbols'] ?? false;

  if($letters || $numbers || $symbols){
    if(!$letters){
      $filteredArray = preg_filter('/[^a-z]/i','$0',$charsArray);
      $charsArray = [];
      foreach ($filteredArray as $value) {
        $charsArray[] = $value;
      }
      
    }
    if(!$numbers){
      $filteredArray = preg_filter('/[^0-9]/i','$0',$charsArray);
      $charsArray = [];
      foreach ($filteredArray as $value) {
        $charsArray[] = $value;
      }
    }
    if(!$symbols){
      $filteredArray = preg_filter('/[a-zA-Z0-9]/','$0',$charsArray);
      $charsArray = [];
      foreach ($filteredArray as $value) {
        $charsArray[] = $value;
      }
    }
  }

  $newPwd = '';
  for ($i = 0; $i < $filters['pwdLength']; $i++) {
    $newPwd .= $charsArray[rand(0, count($charsArray) - 1)];
  }
  return $newPwd;
}

function redirectSuccess()
{
  header('Location: ./pwd_success.php');
}
