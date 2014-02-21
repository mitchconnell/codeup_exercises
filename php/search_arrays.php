<?php

// first names
$names = ['Tina', 'Dana', 'Mike', "Amy", 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael']

// Return tru if name in array
function search_name($name, $array)
{
  return (is_int(array_search($name, $array))) ? TRUE : FALSE;
}

function search_name_array($array1, $array2)
{
  $count = 0;
  foreach($array1 as $value)
  {
    if(is_int(array_search($value, $array2))){
      $count++;
    }
  }
  return $count;
}

// Search for name says exits
if(search_name('Mike', $names)) {
  echo 'name exists';
} else {
  echo 'does not exits';
}

echo "\n\n==\n\n";
$number_of_matches = search_name_array($names, $compare);
echo "There are {$number_of_matches} matches between the arrays"; 


