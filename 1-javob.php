<?php
$myarray = array(
    'hello' => 'world',
    'coding' => 'is cool',
);

$json_file = fopen("myarray.json", "w") or die("Unable to open file!");
$json_data = json_encode($myarray);
fwrite($json_file, $json_data);
fclose($json_file);

