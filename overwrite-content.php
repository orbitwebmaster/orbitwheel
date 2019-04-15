<?php
$json_string = file_get_contents('php://input');

$file_handle = fopen('data.json', 'w');
fwrite($file_handle, $json_string);
fclose($file_handle);
?>