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
$max_count = 0;
foreach ($attempts as $attempt) {
  $sort_attempts[$attempt['id']]['id'] = $attempt['id'];
  $sort_attempts[$attempt['id']]['results'][] = $attempt['result'];
  if (count($sort_attempts[$attempt['id']]['results']) > $max_count) {
    $max_count = count($sort_attempts[$attempt['id']]['results']); 
   };
};
//$sort_attempts = array_column($sort_attempts, null, 'id');
$dash = '<span style="font-weight: bold">-</span>';
foreach ($race_participants as &$race_participant) {
  $race_participant += $sort_attempts[$race_participant['id']];
  if (count($race_participant['results']) < $max_count) {
    array_push($race_participant['results'], $dash);
  };
  $race_participant['total'] = array_sum($race_participant['results']); 
};