<?php


$curl = curl_init('http://test.com/post.php');
curl_setopt($curl, CURLOPT_POSTFIELDS, "foo");
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl, CURLOPT_POST, true);
//curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');

curl_exec($curl);

?>
