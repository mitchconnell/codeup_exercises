<?php

$items = array();

function list_items($list) {
    $todos = "";
    foreach ($list as $key => $item) {
        $temp_key = $key + 1;
       
        $todos .= "[{$temp_key}] {$item}\n";
    }
    return $todos;    
}

function get_input($upper = FALSE) {
    $input = trim(fgets(STDIN));
    
    if ($upper == TRUE) {
       $input = strtoupper($input);
    }
    return $input;
}

do {
    echo list_items($items);
   
    echo '(N)ew item, (O)pen, (R)emove item, (S)ort items, (Q)uit, S(A)ve : ';
    
    $input = get_input(true);
  
    if ($input == 'N') {
       
        echo 'Enter item: ';
     
        $new_items = get_input();

        echo 'Add to the (B)eginning or (E)nd of the list? ';
        $input = get_input(true);
        if ($input == 'B') {
            array_unshift($items, $new_items);
        } elseif ($input == 'E') {
            array_push($items, $new_items);
          }       
        } elseif ($input == 'R') {
        
        echo 'Enter item number to remove: ';
    
        $rekey = get_input();
        $rekey = $rekey - 1;
       
        unset($items[$rekey]);
        $items = array_values($items);
   
      } elseif ($input == 'O') {
        $filename = "data/todo_list.txt";
        $handle = fopen($filename, "r");
        $contents = fread($handle, filesize($filename));
        $contents_array = explode("\n", $contents);
        fclose($handle);
        foreach ($contents_array as $new_info) {
           array_push($items, $new_info);
        }

      } elseif ($input == 'A') {
        echo 'What is the name of the file to save? ';
        $filename = get_input();
        $handle = fopen($filename, "w");
        if (file_exists($filename)){
            echo 'File already exists - overwrite it? ';
            if ($input == 'Y') {
            echo '(Y)es overwrite';
            } elseif($input == 'N') {
            echo '(N)o do not overwrite';
            }    
        }        
        foreach ($items as $task) {
        fwrite($handle, PHP_EOL . $task);
        
        } 
        file_put_contents($filename, $input);
        
        fclose($handle);

    } elseif ($input == 'S') {
        echo 'Do you want to sort (A to Z) or (Z to A)? (enter A or Z) ';
        $input = get_input(true);
        if ($input == 'A') {
            sort($items);
        } else {
            rsort($items);
        }           
      } elseif ($input == 'F') {
        array_pop($items);    
      } elseif ($input == 'L') {
        array_shift($items);
    }
}        

 while ($input != 'Q');

echo "Goodbye!\n";

exit(0);

