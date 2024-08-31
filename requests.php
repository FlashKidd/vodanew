<?php


require_once '/var/www/html/vodanew/Zebra_cURL.php';
$curl = new Zebra_cURL();
$curl->cache('cache', 59);
$curl->ssl(true, 2, '/var/www/html/cacert.pem');
$curl->threads = 10;


$starttime = microtime(true);

$c_values = [

"XSRF-TOKEN=eyJpdiI6InhYR1RlOGRzTmlFdFZjMENQQmZwRmc9PSIsInZhbHVlIjoid3JScFJOM3B2eWw4Q0FTcWRaRXhtTTc2aCtnOWlTUkg1UkhwRkh6OVl3SCtzZlVSM2ZNUkxGeXNBeUQyVWtGd0Vqb2t2RjZ6Uks5MjRTUWM0eFYwTWFkR2QzSkpDRURIbm9jUEIwSkpDSkplU1poWDNHSDAxWUdkNmJZZkVPQ2MiLCJtYWMiOiJlNjVmNDUwN2ZhMjI3MjIzYzJlMDMxZmY3Y2Y5YjhlZDdkMWMxNWRmYWQyMWNkYmQ3MTQyZWNhZWYzNTY5ZmNjIiwidGFnIjoiIn0%3D; vodacom_mzansi_games_session=eyJpdiI6Ik1nR2tmaUR0VW55S0c4K1prVDJ2aHc9PSIsInZhbHVlIjoiSHdZeVZnZUFYSzJybWtmVFNXT1lmWnRWa01XMFY1VFJiVzVhWVEya2ttOGtMeHJ6SDlzS0YxbzRzc2RSZXNROXdIdm9oUDZ1V01jM3lnZDZXVllPUSt5bE9nV1NqSm10b0FBT2NLdDIveURqc0wvTkNoaUI0VFlQMTdlV2tqYWwiLCJtYWMiOiI1ZDQ2OTRmYWQxMjJlY2VmNGI2NTE2ZWJlMDM1NTVmYTY2NGMwN2UyZGE1MmU2M2MzNDE3MzVmYjBkYzk4NDgwIiwidGFnIjoiIn0%3D",

  
  "XSRF-TOKEN=eyJpdiI6ImdqRGV0MWJLbnlNSmo0M0YxeWhSckE9PSIsInZhbHVlIjoiS2NRcm1FZ3JLZUxBUEo5NFZSRWpDemtzUlBqZjdobzFyRXl6cU51cGVueWUrTEZLWUoyMzV0MzloVitsY2hmajh3RGtLdmVtUWZhQVRUSGFyR0dic2ZkcjE4emowck5OSWN2UDYxSkc4Wmd5Z2cveFhsblZNcUZtVnhBZ25tbzYiLCJtYWMiOiIzZTNmNzlhZmE2MjQ5ZmFlYWU2NjY5NTU3MTgzZjEzZmJlZWFhZWU3MDVkNGZhMWQyYTE1MGE5NDJhNzQ4OTRlIiwidGFnIjoiIn0%3D; vodacom_mzansi_games_session=eyJpdiI6Im5LYWVxS08vSHEwcFIyeUluZ2xINWc9PSIsInZhbHVlIjoiVzNwZllFaGNuajdEdEIzaTR1TmpRUWlkUml2WWNtR3hEY29oeE9oMnlTZGNIcEdYa0NadjFrVzk2d3lqOGswak10UVJFSXBlV0l5VFBSRW5KM0NmaElHWkY5TndkUWNaVlQyb1pSaU42SUxqRVVzZ05JRExONkJSSlB5b2FXTDEiLCJtYWMiOiI1ZDg1Yzc2NDQ2NDQzZGU0NWUwNGYyZTZkOTc2Yzc5ODA3Mjg4YzVmM2JmNWNjODg4Y2Q5NWVhNjJkMjIzZjRiIiwidGFnIjoiIn0%3D",


  "XSRF-TOKEN=eyJpdiI6IjdTMitrK2pRM0hvQzNTTDJGNlVnb1E9PSIsInZhbHVlIjoiRkxWMnNCcTFSQ2RsVGphTjRVeUlaOGxScU4xYVBIdlRtaW5oaEpLeFgxZ3JCcllZWkJzZnVuN2I3SjdJVTJpT3RaNmZiMjFtUWYxR0FsT3I4SDF2Z0FZOFYyZEJOVXhtMzhXRWdYcTRnT0I4aHFNaTJaS1ZZT3Z3dWVJNmpoWE4iLCJtYWMiOiI2NGFiODA5Mzg0OGQyY2JjNDNiOWMwZTg4ZDFkYjc5NDBiZDhiZTFjYTM1ZjAyOTY4Yzk0MjMzOTJmODJjNGI3IiwidGFnIjoiIn0%3D; vodacom_mzansi_games_session=eyJpdiI6Ik95c2p0MzhPaCtBNTBkSUdFMU9UTEE9PSIsInZhbHVlIjoiK1ZPV0IwejFmK1hhbElwOHFKQlpDdmhrV282QnpJR3g3TEN6K2JId0M0M25iMHlmeCttM1VvTlNBS28xQ3ZaSFJjbWd6RStDU0xKQTc4NDdQc1hPQlk1TFhOWElaMzYyUzJTZmgzRTdaRmRabDFuSzZtK09waE1Mb0pvaTdmM2IiLCJtYWMiOiJhMzYzOGY3Y2YyZjhiODA4MWZkZmQ1MDEyZWFlMzVkODZkODRkOTRlNTI5OTAyNGMxZWJkNmVkMDdkOWJmNjk5IiwidGFnIjoiIn0%3D"

];

$urls_ar = array();
foreach ($c_values as $c) {

    
  $url = 'http://67.207.90.206/vodanew/xavi.php?cookie=' . urlencode($c);


array_push($urls_ar, $url);

}



$curl->get($urls_ar, function($result) {
    if ($result->response[1] == CURLE_OK) {
        echo 'Success: ', $result->body;
    } else {
        echo 'Error: ', $result->response[0], PHP_EOL;
    }
});

$endtime = microtime(true);
$duration = $endtime - $starttime;
echo "Execution time: " . $duration . " seconds";