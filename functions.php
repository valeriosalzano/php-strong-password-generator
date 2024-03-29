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

  if ($letters || $numbers || $symbols) {
    if (!$letters) {
      $charsArray = preg_filter('/[^a-z]/i', '$0', $charsArray);
    }
    if (!$numbers) {
      $charsArray = preg_filter('/[^0-9]/i', '$0', $charsArray);
    }
    if (!$symbols) {
      $charsArray = preg_filter('/[a-zA-Z0-9]/', '$0', $charsArray);
    }
  }

  $repetitions = $filters['repetitions'] ?? false;

  $newPwd = '';

  if (!$repetitions) {
    if ($filters['pwdLength'] > count($charsArray)) {
      $filters['pwdLength'] = count($charsArray);
    }
    foreach ($charsArray as $key => $value) {
      $filteredArray[] = $value;
    }
    $charsArray = $filteredArray;
  }


  for ($i = 0; $i < $filters['pwdLength']; $i++) {
    $randomKey = array_rand($charsArray, 1);
    $newPwd .= $charsArray[$randomKey];

    if (!$repetitions) {
      array_splice($charsArray, $randomKey, 1);
    }
  }
  return $newPwd;
}

function redirectSuccess()
{
  header('Location: ./pwd_success.php');
}
