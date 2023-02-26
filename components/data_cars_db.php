<?php
function returnValues($race_json_decode)
{
    return (array_values($race_json_decode));
};

function get_race_participants() {
    $cars_json_content = file_get_contents('data_cars.json');
    $race_json_decode = json_decode($cars_json_content, true);
    $race_participants = returnValues($race_json_decode);
    return $race_participants;
};

$attempts_json_content = file_get_contents('data_attempts.json');
$attempts = json_decode($attempts_json_content, true);

$new_race_participants = [];
$total = [];
foreach (get_race_participants() as $new_race_participant):    
    $results = [];
    foreach ($attempts as $attempt):
        if ($new_race_participant['id'] === $attempt['id']):
            $results [] = $attempt['result'];  
        endif;
    endforeach; 
    $new_race_participant['result'] = $results;
    $new_race_participant['total'] = array_sum($results);
    array_push($new_race_participants, $new_race_participant);
    array_push($total, $new_race_participant['total']); 
endforeach;
