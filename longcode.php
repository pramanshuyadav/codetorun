<?php 

$data = array("source" => "13035551212",
"destination" => "13038884444",
"message" => "hey there");

$data = http_build_query($data);
$baseurl = "https://api.trumpialc.com/sms/send?token=XXXX";
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$retval = curl_exec($ch);
curl_close($ch);

$object = json_decode($retval);
print_r($object);
?>