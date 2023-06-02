<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Searched!</title>
</head>
<body>
  <?php
  $search_input = $_POST['search_input'];
  echo "You searched for: $search_input";


// $poke_api_url = 'https://pokeapi.co/api/v2/pokemon/{$search_input}';

// // Read JSON file
// $json_data = file_get_contents($poke_api_url);

// // Decode JSON data into PHP array
// $response_data = json_decode($json_data);

// // Store all pokemon results in a variable
// $poke_objects = $response_data->results;

// // Fetch pokemon data one by one
// foreach ($poke_objects as $pokemon) {
//   // Store each pokemon url and name in variables
//   $name = $pokemon->name;
//   $url = $pokemon->url;
//   echo "<br />";
//   echo $name;
//   echo "<br />";
//   // Read JSON file from pokemon url
//   $poke_json_data = file_get_contents($url);
//   // Decode JSON data into PHP array
//   $poke_response_data = json_decode($poke_json_data);
//   // Extract the first sprite image url
//   $poke_image_url = $poke_response_data->sprites->front_default;
//   echo "<image src='$poke_image_url' alt='$name' />";
// }

  ?>
</body>
</html>
