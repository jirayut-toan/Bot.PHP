<?php
$access_token = 'GlxpHTGJf86xMl2lPNrtpen2aFkfk7vP7TPAqBEW7dUXWhV4YQtXvk1F1+HDcJ9r1MtXHG5SqoxuWXz7nKq5jWCFNIo4bpnjccw9g4kr3O7EyL7hPNJCL+WcDSLtbAtaouxGFf6pcP5FnQpgjYhQgAdB04t89/1O/w1cDnyilFU=';

$url = 'https://protected-ravine-40993.herokuapp.com/';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
