<?php
// Create array to hold list of todo items
$items = array();
//$all_items = array();
//List items formatted for CLI
function list_items($list){

    $output = "";

    foreach ($list as $key => $item) { 
      $key += 1;
      $output .= "[{$key}] {$item}\n";  
        
    }
    return $output;  
}
function get_input($upper = FALSE) 
{
       $input = trim(fgets(STDIN));

    if ($upper == true) {

       $input = strtoupper($input);
    }
      return $input;
}   
  do {
      echo list_items($items);  
      echo '(N)ew item, (R)emove item, (Q)uit : '; 
       $input = get_input(TRUE);
     
    if ($input == 'N') {
        echo 'Enter item: ';
        $items[] = trim(fgets(STDIN));      

      }elseif ($input == 'R') {        
        echo 'Enter item number to (R)emove:';       
        $key = trim(fgets(STDIN));        
        unset($items[$key]);
      }
     
    //if ($input == 'SO') {
        //echo 'choose items to (SO)rt';
        //$key = get_input();
      //}        
      //elseif($input == 'B') {
        //echo '(B)eginning?';
      //}       
      //elseif ($input == 'E') {
        //echo '(E)nd?';
      //}              
      //elseif ($input =='O') {

       //echo '(O)pen file?:';

       //$key = get_input();
       
      //$handle = fopen($key, "r");
      //$contents = fread($handle, filesize($key));
      //$contents_array = explode("\n", $contents);
      //print_r($contents_array);
      //fclose($handle);
  //}
      //elseif ($input =='F') {
      //$items = ['First'];
      //$first_item = array_shift($items);
      //print_r($items);          
    //}         
      //elseif ($input =='L') {   
      //$items = ['Last'];
      //$last_item = array_pop($items); 
      //print_r($items);  

} while ($input != 'Q');
      echo "Goodbye!\n";

exit(0);
