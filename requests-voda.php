<?php

require_once '/var/www/html/vodanew/Zebra_cURL.php';
$curl = new Zebra_cURL();
$curl->cache('cache', 59);
$curl->ssl(true, 2, '/var/www/html/vodanew/cacert.pem');
$curl->threads = 10;
$curl->option(CURLOPT_TIMEOUT, 900);


$starttime = microtime(true);

$c_values = [
    
"XSRF-TOKEN=eyJpdiI6Imhxa1pyMGRXZG1MR0tEalZLc2pYaGc9PSIsInZhbHVlIjoiNGhHRnVYWEsxR3dwYzUvT09hbGZWbE1tczhaeXlXeHd2Y25PNnlHcFNTcXZ1SGN4RlgrcjF4aDFlMmZ1bis5eDZ6UHZNQWU4TDBkckt1SFAwMU44ZW9xVytFeUtxTGFnOWZzckJSYmNqQ00vaFZVMkRQc2w0aHUzeVc2bmFhaTIiLCJtYWMiOiIyYjRlMmM1ZTYxNTM5OGIzNzI3Yjg1MjUyYmQ0N2UyOWQzNmIyY2QyY2U4NjE0ZWEyMTlmMDRkZGUyMGQxNzc3IiwidGFnIjoiIn0%3D; vodacom_mzansi_games_session=eyJpdiI6IkRXSnkrOG5NeHJtZmk5RjJBUmlDb1E9PSIsInZhbHVlIjoiNGdkWHRwaTdKQ2htUVdoc3VEZGlmRWMvd0VlZmN4MHBKZmtxUmlKeGhET0p4OHU5RG9vajg3U1VodkNoK3JTWkpVK2pKcGprc2dBaU1VQXRxakpITXpIaUpWT2w5M3NxTGQxd3VhWnQyYjBMRHJDcTFRQ3NrVkFLY3NKZXZUZDkiLCJtYWMiOiI5OTRlZWU0Yjc1OTA3ZGQ5ZmJhMzJhZWIyYTg4ZTEwNjQ5MjBlZmVjYTc5Y2ZlZDI4ZjliMTU5Njg1MzlkYWY2IiwidGFnIjoiIn0%3D",

"XSRF-TOKEN=eyJpdiI6IlF0QmpSbDQrUitCWDJ3Y1hORUJ4V1E9PSIsInZhbHVlIjoiWUdyRkNMcWNYUTZRUnhRcVA2a1M1UkxKM0k4dElWd21DeGt1T3V4aUN6S3FmOXFlQlJPWTc4ME0zOFE5REx0aThPMkQ4SmUxeEdUS25CL1pheU03QXlKTGdHaHMzZFB1MEx3Z3JIaS92cmkxNE1zamFwaFBLaUFBUU1qVDlYQ08iLCJtYWMiOiJjODQwZDI3YjA1NjI2YmVhYWEwY2YxZjY5ODZkN2M2ZTQ2ZTA1ZTQ5Y2RiYmFkMzY4NGRkOTIwNzQ2MDIwNWYzIiwidGFnIjoiIn0%3D; vodacom_mzansi_games_session=eyJpdiI6InVVRGpnRlFpT0hYZjdoZEdPUCt6SHc9PSIsInZhbHVlIjoiYjc4a1cwQU9aeng1YXVqaFRXQUJxZTVTQXhJaS9MSVpQaktjT0U1ZXgyQXIxVTNLWjg2S1F2MTY2RlFhaWc1ZWRwQTl0b3lKV2V5MzdnVDdmZG84Nis0WE9XNjhUZEpMVkFTR05IWHVCSGFMWnhOcmQ0cnpUVEVtbDRDeU1mMFMiLCJtYWMiOiIzOTdiNjUyN2I2YjlmNmNlZWFhOGZhNjE5OTNkZGQxMDlmMjE5NDc5ODMzMzViM2NkNWE4YWZhNzY2ZDFjNDczIiwidGFnIjoiIn0%3D",

  
  "XSRF-TOKEN=eyJpdiI6ImdqRGV0MWJLbnlNSmo0M0YxeWhSckE9PSIsInZhbHVlIjoiS2NRcm1FZ3JLZUxBUEo5NFZSRWpDemtzUlBqZjdobzFyRXl6cU51cGVueWUrTEZLWUoyMzV0MzloVitsY2hmajh3RGtLdmVtUWZhQVRUSGFyR0dic2ZkcjE4emowck5OSWN2UDYxSkc4Wmd5Z2cveFhsblZNcUZtVnhBZ25tbzYiLCJtYWMiOiIzZTNmNzlhZmE2MjQ5ZmFlYWU2NjY5NTU3MTgzZjEzZmJlZWFhZWU3MDVkNGZhMWQyYTE1MGE5NDJhNzQ4OTRlIiwidGFnIjoiIn0%3D; vodacom_mzansi_games_session=eyJpdiI6Im5LYWVxS08vSHEwcFIyeUluZ2xINWc9PSIsInZhbHVlIjoiVzNwZllFaGNuajdEdEIzaTR1TmpRUWlkUml2WWNtR3hEY29oeE9oMnlTZGNIcEdYa0NadjFrVzk2d3lqOGswak10UVJFSXBlV0l5VFBSRW5KM0NmaElHWkY5TndkUWNaVlQyb1pSaU42SUxqRVVzZ05JRExONkJSSlB5b2FXTDEiLCJtYWMiOiI1ZDg1Yzc2NDQ2NDQzZGU0NWUwNGYyZTZkOTc2Yzc5ODA3Mjg4YzVmM2JmNWNjODg4Y2Q5NWVhNjJkMjIzZjRiIiwidGFnIjoiIn0%3D",


  "XSRF-TOKEN=eyJpdiI6IjdTMitrK2pRM0hvQzNTTDJGNlVnb1E9PSIsInZhbHVlIjoiRkxWMnNCcTFSQ2RsVGphTjRVeUlaOGxScU4xYVBIdlRtaW5oaEpLeFgxZ3JCcllZWkJzZnVuN2I3SjdJVTJpT3RaNmZiMjFtUWYxR0FsT3I4SDF2Z0FZOFYyZEJOVXhtMzhXRWdYcTRnT0I4aHFNaTJaS1ZZT3Z3dWVJNmpoWE4iLCJtYWMiOiI2NGFiODA5Mzg0OGQyY2JjNDNiOWMwZTg4ZDFkYjc5NDBiZDhiZTFjYTM1ZjAyOTY4Yzk0MjMzOTJmODJjNGI3IiwidGFnIjoiIn0%3D; vodacom_mzansi_games_session=eyJpdiI6Ik95c2p0MzhPaCtBNTBkSUdFMU9UTEE9PSIsInZhbHVlIjoiK1ZPV0IwejFmK1hhbElwOHFKQlpDdmhrV282QnpJR3g3TEN6K2JId0M0M25iMHlmeCttM1VvTlNBS28xQ3ZaSFJjbWd6RStDU0xKQTc4NDdQc1hPQlk1TFhOWElaMzYyUzJTZmgzRTdaRmRabDFuSzZtK09waE1Mb0pvaTdmM2IiLCJtYWMiOiJhMzYzOGY3Y2YyZjhiODA4MWZkZmQ1MDEyZWFlMzVkODZkODRkOTRlNTI5OTAyNGMxZWJkNmVkMDdkOWJmNjk5IiwidGFnIjoiIn0%3D",

  "XSRF-TOKEN=eyJpdiI6ImNrQStQSTREeTQvWEZDcjVGU0N6R1E9PSIsInZhbHVlIjoiYWNvZlBZRjJhZGN1K3RMRnlESFJRWGV1MHByZ0xrRy9PNDdKVy90N3ZqWlF4T0tWVm9WdVMwSkFlOFRSNlpVdmtkZERYRC9ZRTlNd3lHTWJRSG9MejYrUVBDRG5NMWNmaGZnT0JSTHkraXg4aFRjK0FHZ04rV0NLTE5lNVFpbnIiLCJtYWMiOiIwNTBjYmZiMDE5NmY2M2U4MWQxYTEyNmVjNmI5ZTgyNzg0MjlkN2Q1ZTMwODBiZDhiYzM2MDJhZWJjYTQwNmNkIiwidGFnIjoiIn0%3D; vodacom_mzansi_games_session=eyJpdiI6Im9ESnN1aDRYRnpZN1pMc21OTkZ5YXc9PSIsInZhbHVlIjoiYkFDTFpaQkJLTW9qVmpFM2dVNEhWQ3Y2STFHRHNhYld6VnJ1aGpVQmFjdGJZWHB0b1ZJVndlYTFqcWJIVG9jK2xiNXdHSTZvY3JKdWxIVEMybXJXZDdpdUV0a0pVMktaaDJJbVpCb21sNUR1Y1NLWGR3ZGpERjE0MHNlVTVEcnEiLCJtYWMiOiIwYWZhNzcwZGQ1MTZhNjA5MThhM2NmNjA0MDAzNDJkMmIzMjk3NTRmZjBiNTEyZGFmMzgwZWEyNjMwMWQxNjU3IiwidGFnIjoiIn0%3D",

"XSRF-TOKEN=eyJpdiI6IkM2d1ZFVW94bTFDbnc2MDRxTEc5V1E9PSIsInZhbHVlIjoiZGMwL3NDd0lGUXpFc1d2US9TM2R5dW9GdVpUcHRyRjVSTE1BL2EvZjdlb2pJMGNrRXdoa2ZEazlZaVpIUTRWZUZkWkhPYzlqNno0TGZNNEdCYkQ3Q0hIK2EvaG9EaU4yWWxHaGVkU0JEdVRwWEVicC9NaEZxc21Nei9vSmpHeGMiLCJtYWMiOiJiZGVkYTQ4MTdmNTZkYmRiOWYwMTQ0MGU0ZjBiZjIzZWZjNzhlMTcyMzRkMjZmMzJlZDFlZjY2ZGY0MjJjMDNlIiwidGFnIjoiIn0%3D; vodacom_mzansi_games_session=eyJpdiI6Ii9iVkcrSWgyTXhlWEtxeFlEM0F5dXc9PSIsInZhbHVlIjoiTzNlTW45OExUQXpRWERCYTJ5cXVTcmZzT1d6N0pjQk1aNmtkUnBpdWxZUkJtYVZWR0phUmJDVDdHVUcxVlYxWTBRUUthZnlManY0UkJKQzh0Mk5UaEFVeFVPeDJ5cmx3OCtlS2VDb2NYam5UM3p4S0tjdWtNOXNIWGRXSUFMeDgiLCJtYWMiOiI5N2U5Zjc1NzRjYzkzYTJiZmI2NTJjOTIxMDRjNjg3YjIyMDU4OGIxMTJlNmIwZjNhN2Q2MzJlMDcxMzY0YzNjIiwidGFnIjoiIn0%3D",
'XSRF-TOKEN=eyJpdiI6IngxSW1QQ1h0cDkxM0JBajlUOVNGbHc9PSIsInZhbHVlIjoiQXJXS0tGYWNtUUtQQ0dTeUNQdElFMXVENm9ITS9aejZoMGdpVXdCdFhLdHBRWWFCVis3UmpJSGdmcjg4VjZ3SnNXRGZqTU1hR0RwdnVoMkVvWG9jb1VRQXpKL3UvZmd5bjRGcFBkUzlOSUlUaUdDeGQ1QWxJWUFOTk4yV0dqdnIiLCJtYWMiOiIyNjA1MmExNjBhYzA2OTJkZDVhMmM1ZDU5NDVhODdlYzVlOTY2YTMyOTRlMTAyNGFiZjliMjNmNjM4NzAyZGVkIiwidGFnIjoiIn0%3D; vodacom_mzansi_games_session=eyJpdiI6IjBOVUdJNDJmRXh6bEhtTFJ4ZU9PWnc9PSIsInZhbHVlIjoicnI1b3FndjhIRXpKYlNzQ3lQbVVrcnZ0SDJnaU1PSkJrelBzaHJsRWN0eTV2dEE0YUNHZEtiaENRenVoTzdvNUpQZncrYnVPYTk1SUYxMVowMkNLbXF1SEJJajBPZTVlK0hOZEdKSWVGZWRIR01uVExZaFZ2MXp6Ny9MbEZ3aU8iLCJtYWMiOiI3NTQ3ZDhkNTVkN2EyNzM2YWQ2YmYzYTcyMWRmYTkxNDhiZGQzZjdkMDAzM2Y5ZTQxNDNhNzExMzA1ZjQzZGNjIiwidGFnIjoiIn0%3D' => 270825982860,

"XSRF-TOKEN=eyJpdiI6ImxyRzJ0SVJZRm92MU1GT2laZTF1RVE9PSIsInZhbHVlIjoiTWd5eFg4a2NoUGE4SUhiaVYvSHlHVUpNZ0w2ZFZ3eVFiMDBPVGZpS3c1cHU1YjA2NERuYjhyUmVSdnJNUSt1bmUwMlRXR01HZFlLcCthTXpmakg3Y0NiMXpKWWZsNHpoVE1hNnlwb29iRjNoYlQwOEkxSXAvS2ZYRVdjSnhNZGciLCJtYWMiOiIyOTA1YzZjZjk0MDJiMWNmOTljM2Y5M2Q5ZDBjZjI1YzY3ZWZjNTc1Mjk3NTU4ZjJmOTZiNjYwMTRlMWNkMzlmIiwidGFnIjoiIn0%3D; vodacom_mzansi_games_session=eyJpdiI6IkM5WVlLWXRMWUJZUGxTczBKZmhiOWc9PSIsInZhbHVlIjoiU3BQTlIxRHhyTzdxUFhQaml3VytJTm83VU9aamxLQS9TOU9oemxtYmRkalo0cDhpb21MbkNjaUNHQXk4VXhOYnhSeWFSZENrQ2R1NG4vMm14KzM1S2pQQmtvUy9yRGpHcFFmMVR6QkhhM1ZtNGpDSVN4K3BEd3BGRDhUUVFTTTgiLCJtYWMiOiI2MzBiMWUzMWE5NWE3Nzk4OTAzNjI5OTI0N2UyNDNlNzIwYzRiNDhiMjI4NmE3ODJmZWUxYzNkZDc3MzMyYjUwIiwidGFnIjoiIn0%3D" => 277063768248,

"XSRF-TOKEN=eyJpdiI6IlFXRXlxUEFHdG5zQ0RpL1YzMlI0cEE9PSIsInZhbHVlIjoiMitLWk44V3E1bVc3Mk9zQ1NicWpzVTRadjVkQ0pQaHppMEk5THkzcUhRQThPL0pjMVpHb0I1QkZsSnN6R2xPb0UxdmhBMklscDJyVHVKU3hFaUpEang3TTRSdUt4a29BOVFBU3FTK0RoZVZEdGo4U1BuWWpFZEdMZCtMQ0Y1bWciLCJtYWMiOiJmMjZiYjQyMjFiMDg3NWRiZjA4YTA1N2MyNDdiNTM2NjJiYjFiYWMwMzhlMmQ5NWQxMDc5NWMwMDcxMGNhYzczIiwidGFnIjoiIn0%3D; vodacom_mzansi_games_session=eyJpdiI6InVaemV5TFdKSmNLQXZtdjdUNVgxZ3c9PSIsInZhbHVlIjoiWUR5L3Vqamw0enNWem9xbWd6SEduYW1CaU9Wd3Y4WElFenkxSzRJYk4wWG0xY25wQW10MGlrZVBMc2NjNzFpYnFDRXBXZkU5SVoxNExRUGJKRFlhZmY3aEl2QThja1piOThYdFkvc1dUVEUvak05QUNpY3lTN1RrOEZQR21kVkEiLCJtYWMiOiJlOWU0OWYyMjQ4MGFjYTUzODY0YzgxNjAzMjc3MDg2NTVlMmRiZTgyNDViMGVkY2Y0NzE3ZjllYjRkN2IxNmMwIiwidGFnIjoiIn0%3D" => 270766334122,

"XSRF-TOKEN=eyJpdiI6IjBsQkRJSm5GYm9ITEUwWWRUZ05zTmc9PSIsInZhbHVlIjoiOHV4K0xoeHZRV0F5czVHZFRXUGZvR0ZHbnllVjUvRVdtSGkvMnZKQ0xwZXlPZVFyaUQvL2RrM3BwY0ViVHNkSVhMM0xBNCtQTWR2NFZjZDlGZTBUMTR1WDh1VG53L0N3UUc0R2QvMVZCSUZZWTNYNlNGTnJiZjVmRVZHVWppYVIiLCJtYWMiOiIyM2FmM2IwOTRjNjhkNGYyMGVjYjVmOTM3YjQ5ZjZmMjRiN2ZjNGFjZDkyMTE5NGEwZjhhNjJkODRjNDAyZDg4IiwidGFnIjoiIn0%3D; vodacom_mzansi_games_session=eyJpdiI6IkNLaUhqcEM0VGZsay9BWHB2azBMVEE9PSIsInZhbHVlIjoiRzVSTTlVUm8vY0UyZTErb2FzTkdpVjZIbThqU0ltRFFub1FJK3R4b1RndG5PRk5lY0VCVmhuUDRlWG4xTEhIeXhOUzVEcUcxenJ0QTRVWTUvSDE3clJEV3BQdHViS3dDL1VuUzczTHZIbXFlUURLazZ6R2xJV2tlTGgyaGJNa2ciLCJtYWMiOiI5ZmY2YTQyNGY4MmY5M2RkNjgxNzE5Nzg5MmQ4MjVmNTVmOTg0ZDczNzBiMmQ5ZTE0YzMyZDQyZTYzOWM5ZTVmIiwidGFnIjoiIn0%3D" => 270725248866,

"XSRF-TOKEN=eyJpdiI6Imhxa1pyMGRXZG1MR0tEalZLc2pYaGc9PSIsInZhbHVlIjoiNGhHRnVYWEsxR3dwYzUvT09hbGZWbE1tczhaeXlXeHd2Y25PNnlHcFNTcXZ1SGN4RlgrcjF4aDFlMmZ1bis5eDZ6UHZNQWU4TDBkckt1SFAwMU44ZW9xVytFeUtxTGFnOWZzckJSYmNqQ00vaFZVMkRQc2w0aHUzeVc2bmFhaTIiLCJtYWMiOiIyYjRlMmM1ZTYxNTM5OGIzNzI3Yjg1MjUyYmQ0N2UyOWQzNmIyY2QyY2U4NjE0ZWEyMTlmMDRkZGUyMGQxNzc3IiwidGFnIjoiIn0%3D; vodacom_mzansi_games_session=eyJpdiI6IkRXSnkrOG5NeHJtZmk5RjJBUmlDb1E9PSIsInZhbHVlIjoiNGdkWHRwaTdKQ2htUVdoc3VEZGlmRWMvd0VlZmN4MHBKZmtxUmlKeGhET0p4OHU5RG9vajg3U1VodkNoK3JTWkpVK2pKcGprc2dBaU1VQXRxakpITXpIaUpWT2w5M3NxTGQxd3VhWnQyYjBMRHJDcTFRQ3NrVkFLY3NKZXZUZDkiLCJtYWMiOiI5OTRlZWU0Yjc1OTA3ZGQ5ZmJhMzJhZWIyYTg4ZTEwNjQ5MjBlZmVjYTc5Y2ZlZDI4ZjliMTU5Njg1MzlkYWY2IiwidGFnIjoiIn0%3D" => 270827286570,

"XSRF-TOKEN=eyJpdiI6IjdTMitrK2pRM0hvQzNTTDJGNlVnb1E9PSIsInZhbHVlIjoiRkxWMnNCcTFSQ2RsVGphTjRVeUlaOGxScU4xYVBIdlRtaW5oaEpLeFgxZ3JCcllZWkJzZnVuN2I3SjdJVTJpT3RaNmZiMjFtUWYxR0FsT3I4SDF2Z0FZOFYyZEJOVXhtMzhXRWdYcTRnT0I4aHFNaTJaS1ZZT3Z3dWVJNmpoWE4iLCJtYWMiOiI2NGFiODA5Mzg0OGQyY2JjNDNiOWMwZTg4ZDFkYjc5NDBiZDhiZTFjYTM1ZjAyOTY4Yzk0MjMzOTJmODJjNGI3IiwidGFnIjoiIn0%3D; vodacom_mzansi_games_session=eyJpdiI6Ik95c2p0MzhPaCtBNTBkSUdFMU9UTEE9PSIsInZhbHVlIjoiK1ZPV0IwejFmK1hhbElwOHFKQlpDdmhrV282QnpJR3g3TEN6K2JId0M0M25iMHlmeCttM1VvTlNBS28xQ3ZaSFJjbWd6RStDU0xKQTc4NDdQc1hPQlk1TFhOWElaMzYyUzJTZmgzRTdaRmRabDFuSzZtK09waE1Mb0pvaTdmM2IiLCJtYWMiOiJhMzYzOGY3Y2YyZjhiODA4MWZkZmQ1MDEyZWFlMzVkODZkODRkOTRlNTI5OTAyNGMxZWJkNmVkMDdkOWJmNjk5IiwidGFnIjoiIn0%3D" => 270829775873



];

$urls_ar = array();

foreach ($c_values as $c) {

    
  $url = 'http://67.207.90.206/vodanew/xavi.php?c=' . urlencode($c);


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
