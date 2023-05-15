<?php

$endpoint = $_POST["endpoint"];
unset($_POST["endpoint"]);

$curl = curl_init($endpoint);

curl_setopt($curl,CURLOPT_POST, true);
curl_setopt($curl,CURLOPT_POSTFIELDS, http_build_query($_POST));
curl_setopt($curl,CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);
curl_close($curl);

echo $response;

?>