<?php

$url = 'https://jsonplaceholder.typicode.com/users';
// Sample example to get data.
$resource = curl_init($url);
curl_setopt($resource,CURLOPT_RETURNTRANSFER,true);
$result = curl_exec($resource);
$code = curl_getinfo($resource,CURLINFO_HTTP_CODE);
echo '<pre>';
//var_dump($code);
echo '</pre>';
curl_close($resource);
//echo $result;

// Get response status code

// set_opt_array

// Post request
$user = [
    'name' => 'John Doe',
    'username' => 'john',
    'email' => 'john@example.com'
];

$ch = curl_init($url);
curl_setopt_array($ch, [
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode($user),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => array('Content-Type: application/json')
]);
$result = curl_exec($ch);
curl_close($ch);
var_dump($result);
