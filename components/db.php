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

$res = [];
function getId ($arrays, $key, $value, $result) {
  foreach ($arrays as $array) {
    
  if ($array[$key] == $value && in_array($result, $array)) {
    $res[$key] = $value;
    $arr[] = $array[$result];
    print_r($arr);
   // $res[$result] = array_values($array);
  }
};
  return $res;
};

print_r(getId($attempts, 'id', '1', 'result'));