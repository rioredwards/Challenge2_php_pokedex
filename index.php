<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hello World!</title>
</head>
<body>
<?php

$dummy_api_url = 'https://dummy.restapiexample.com/api/v1/employees';
$poke_api_url = 'https://pokeapi.co/api/v2/pokemon/ditto';

// Read JSON file
$dummy_json_data = file_get_contents($dummy_api_url);
$poke_json_data = file_get_contents($poke_api_url);

// Decode JSON data into PHP array
$dummy_response_data = json_decode($dummy_json_data);
$poke_response_data = json_decode($poke_json_data);

// All user data exists in 'data' object
$dummy_user_data = $dummy_response_data->data;
$poke_ability_data = $poke_response_data->abilities;

// Cut long data into small & select only first 10 records
$dummy_user_data = array_slice($dummy_user_data, 0, 9);
$poke_ability_data = array_slice($poke_ability_data, 0, 9);

// Print data if need to debug
// print_r($dummy_user_data);
// print_r($poke_ability_data);

// Traverse array and display user data
// foreach ($dummy_user_data as $user) {
// 	echo "name: ".$user->employee_name;
// 	echo "<br />";
// 	echo "name: ".$user->employee_age;
// 	echo "<br /> <br />";
// }

foreach ($poke_ability_data as $ability) {
	echo "name: ".$ability->ability->name;
	echo "<br /> <br />";
}

?>
</body>
</html>
