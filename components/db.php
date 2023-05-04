<?php
//include ('data_cars.json');
//$json_content_cars = file_get_contents('data_cars.json');
function get_decoding($json) {
  $json_content = file_get_contents($json);
  $json_decode = json_decode($json_content, true);
  return ($json_decode);
}

$race_participants =  get_decoding('data_cars.json');
$attempts = get_decoding('data_attempts.json');
//var_dump($race_participants);
var_dump($attempts);

/*function id($el) {
  return $el['id'];
}

$ar_uniq = array_map('id', $attempts);
$ar_uniq = array_unique($ar_uniq);

foreach( $ar_uniq as $key => $value ):
  $ms = $value;
  $new = array_filter( $attempts, function($ar) use ($ms) 
  {
    foreach( $ar as $key => $value ):
      return($v == $ms);
    endforeach;
  }
);
  print_r($new);
endforeach;*/
$ids = [];
array_walk_recursive($attempts, function ( $value, $key) use (&$ids)  {
    if ( $key == "id" )    {
        $ids[] = $value;
    }
});

/*print_r(array_filter($ids, function($v) {
  return $v == 1;
}));*/


function id($key) {
  
 /* for ($el = 1; $el <= 15; $el ++) {
    $value [$key] = $el;
    //return $value;
  };//print_r($value);
  return $value [$key];*/
  return $key;
};

var_dump(id('id'));
$arr_key = [];
$arr = []; 
$res = [];
function getId ($arrays, $key, $result) {
  print_r(array_column($arrays, $key));
  foreach ($arrays as $array) {
     //$arr_key [] = $array[$key];
     
     //sort($arr_key);
  if ($array[$key] == id('id') && array_key_exists($result, $array)) {
    $res[$key] = id('id');
    $results [] = $array[$result];

     
   $res['result'] = $results;
   
  }; 
};
  return $array;
};
//var_dump(array_push($arr , $res ));
print_r(getId($attempts, 'id', 'result'));

/*for ($i = 1; $i<= 15; $i++) {
  if (array_key_exists('id', $attempts) == $i) {
      $arr[] = (array_key_exists('id', $attempts));
  };
var_dump($arr);
};*/

