<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Searched!</title>
</head>
<body>
  <!-- back btn -->
  <a href="index.php">Back</a>
<?php
$search_input = $_POST['search_input'];
echo "<br />";
echo "You searched for: $search_input";

$poke_api_url = "https://pokeapi.co/api/v2/pokemon/" . $search_input;

// // Read JSON file
$json_data = file_get_contents($poke_api_url);

// // Decode JSON data into PHP array
$response_data = json_decode($json_data);

// // Store pokemon data in variables
$name = $response_data->name;
echo "<br />";
echo "<h1>$name</h1>";
echo "<br />";
$image_url = $response_data->sprites->front_default;
echo "<image  width='300px' src='$image_url' alt='$name' />";
$moves = $response_data->moves;
$moves = array_slice($moves, 0, 8);
echo "<br />";
// print_r($moves);
forEach ($moves as $move) {
  $move_name = $move->move->name;
  echo "<br />";
  echo $move_name;
  echo "<br />";
}
  ?>
</body>
</html>
