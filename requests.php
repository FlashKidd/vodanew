<?php

require_once '/var/www/html/vodanew/Zebra_cURL.php';
$curl = new Zebra_cURL();
$curl->cache('cache', 59);
$curl->ssl(true, 2, '/var/www/html/vodanew/cacert.pem');
$curl->threads = 10;
$curl->option(CURLOPT_TIMEOUT, 900);


$starttime = microtime(true);

$c_values = ["XSRF-TOKEN=eyJpdiI6Ik9OV3RYMThZTWhqWEc0TkIwQUZONnc9PSIsInZhbHVlIjoidWNVNEthT1FmOW40NnJZcDRJOXlvSys1OTVHVGcwZUpXNmdyM1ZUUmVpaFU4dTl1ZU9aVHlLUCt5OCtTZUY2cnpnTGdSMHh2UEIrcElYbUFObERORG5BaC9lREIwVjdzaU9ZNkhGSWpIL0Z1dnJKQmhxMlN4Q0xDZDduNlBOdjIiLCJtYWMiOiJmYjQxYWY1NDZkOGU5NmQxMjRiNWEwMzJjNjY2ZjNlZTY4NzViNzFlOWJiOTAwY2EwMjMwNzMxYjFhZmUzYWEwIiwidGFnIjoiIn0%3D; yello_rush_session=eyJpdiI6IkFldC9QalNTWnZibGZTVjBvTDU1c0E9PSIsInZhbHVlIjoiQzBRS2x2bXZzZlc1TVh4S3laVG11elluVmo0VmZ3a3RLQUVLbkFwNE80OEIwSVlGTlo3RHA4VmtmbFdqQmdLZlBDY0hFTWVuWCswMW5WL2hZV3ZQNjhicXdiUk5QeGZuMXBCYzZwbWhxNFNESG5xampEenIzcmxOdWZxNEx0MmYiLCJtYWMiOiI1MTljZDk5NjliZTEzOGM0Y2JkMGFiYmJkMGQ3MzUyYmJhNTRhNzIxYTI3M2E0MDViNDg5MzlmOTZkNzlhYmI2IiwidGFnIjoiIn0%3D",

"XSRF-TOKEN=eyJpdiI6IkxZdzlaS0taRFI3RW5mL0RZNjRmaXc9PSIsInZhbHVlIjoiR1crVDYwZ2JvTTNkeDZiandQK1IrZXRaTmxrQlZCb3BIK2hxeHk3ZFYwUzNEYVAzSnJwa1QwTEdIb3FLcnluQk41VC9pOVFvQ0NlUXRwV0EwWXRtR1FURmp1Yk9zZ3FWd0lLaHdOaVlrM2Y1L0JPT3N2U29hUFM3bCtJcHVNMVEiLCJtYWMiOiI3MDUwMWJjNjU3NmVhNGM1ODg0ZDVjMDAwMTI0MTM0OWFhNmY2YmRjZWY4MGEyMzdiZWQ4ZmYyY2VmYmRmOWI0IiwidGFnIjoiIn0%3D; yello_rush_session=eyJpdiI6ImFwc1RIYVRnN1IzdE1xNXk4U0VoSUE9PSIsInZhbHVlIjoiK0ZmRks3azVnOXRBS2hjWWdSVlUreWY5eXBVeXhSdkRpZmt4MnNtdlJBN0x2S2JuT3ByMm9VckQwWG9rOFQzWEJVQ2U0djJKTGY2c2tJUG1BRjJrSmQyS0tJUFl5M2tzRncydkdka1FsRUoyVExCeWdhdEhaKytENEM5eHIrMG0iLCJtYWMiOiIwOGNlMWYxY2ZlM2Y4NTNjNmU0MmFjNDdkM2FmNmZmZWIyOTM4MDEwYWU2MDE1NDA2MTVkNjlhMTg2NzUzZmRjIiwidGFnIjoiIn0%3D",

"XSRF-TOKEN=eyJpdiI6IlhWeGQ5a2NkeFhGWVZnWkRyclZOekE9PSIsInZhbHVlIjoiZ1lpLzJEaFNaWFJESVVoWWVwbFJLa3JKNFJSeG8rUVp6U0VLTXRRaXdZc05taVI1aVBJZGs1WjJCa1lSdnBpY1FTcllvSjZTQmY0NGp0TTlON250RnVYQjVqbFF0QUgzaEJySkc4V3hJdWhWdU5wazJlb05WVXM1eXJkbmNEQnMiLCJtYWMiOiJjMmU3OWM0ZjI3YTczOGNhZGE0YTIzMjM5ODNlZjMwMDFmZGY4NDNjOWM1NzIyNzk2ZGNhOTQ5Mzk1Y2E2NGM1IiwidGFnIjoiIn0%3D; yello_rush_session=eyJpdiI6Im9zNjkrcGhaWlBpZnh0bFR3bzRySXc9PSIsInZhbHVlIjoic1kzY3ZjeUFLK3V0VUxHZlpGbzhxYy8vQ3NDdVFoNXFQclozZ1JtSDE4N2JaZXN1anR3cjVUM3BqQ1FmbVRaQ28vbnhGY3hBUWp6ZG5JWVNxWHNQeXl3S2pYUnlyVEtPN09iSDBGa2JaV2hPRyt6NEltaTNEWmJ2R3NnUlhkUWkiLCJtYWMiOiJlYjg2NjYxYzkxYjk1NDMzNDY1NGMwODQ2NzlhNmNjNWQ0OTI2YWFmMDgwM2I2ZTBmMjIwZWE5MzczYWZhNDlkIiwidGFnIjoiIn0%3D",

"XSRF-TOKEN=eyJpdiI6IkhJTWdTMzVvZHBpZUV6dHJBbVIyUFE9PSIsInZhbHVlIjoiWE0vSkVHWDlZdjR6RFYxc253bTRodXdSNUhzRVNycmhaRUphb29yRzdwOUJVc3dmR1VYTEIyUFdSUVp2Q3FxV2tlZGZrQS9jYVA2bnNmeXNYT2ZZQU9XYStONVVhS3FCallsdkVyUUwyZEcrQ0RQYmpQaHh1dXBHV0lVVWVvdmgiLCJtYWMiOiJkNDczNjIxNzI5MmZhZjU1Y2MxMWMzOWUyOGNhZTZjODRmODUxYjgxMzI2MDg1ZTBkNGIwYWI5MGU4ODcwZTliIiwidGFnIjoiIn0%3D; yello_rush_session=eyJpdiI6IjZTL2pmSUE2YktsdkdrMkdqdkNqM3c9PSIsInZhbHVlIjoiYTVIS2EvUW4wT3IvMk5TSTJEcDZpQlhDRWxOcER5dXkvdWdaTVNyV2EvVkgrVlE1S0Nvby9jOTY3a243SDVCM3V0TlRxWEwweHlyM1Q2bGdWYWhUSG5JeEZENFVmeHZHZzJWZXN0K3Q1SWEwRmFXdER6U3pSWXUwQ1ZhLzRJay8iLCJtYWMiOiIxODYwOGYzNWE0NDMxY2Q5NzE1ZWQ1OWExNjRmODM4MDAwYzhjYTVlMGM1NjlhZmJjYjczMTBmYmM2MjNiMWFlIiwidGFnIjoiIn0%3D",

"XSRF-TOKEN=eyJpdiI6InBUYVhIUFVub0EwOTd6SEp1WGdvQ3c9PSIsInZhbHVlIjoiTDJrZDdWbXRTVzhTTHJVaXpCT1BRbjFYYzU2a3gvODMwYzRHVFgrTnphZlBVcFA5MlFtTWNYYXJGamIreGRFQU8vaUxEaDEwMFFCTG9aTjFsU1JBWkJSNjRIYnAzNzBNZStwcUg2VkRVMXNVZmZMbk1DYUpETUVaOUIxcnlnTWYiLCJtYWMiOiIyYTJhMjQ4ZDBkMjI2NDhiMDA4NzAwMDFhNWI3YzVhOGJhNjFjZGQ5NzYwMGMxYjM2ZDU1Mzc0ZjRmNjQ5YmRhIiwidGFnIjoiIn0%3D; yello_rush_session=eyJpdiI6InB3eVJvcnpFb3VmRWZzeTMvUFdvVVE9PSIsInZhbHVlIjoiNGRmOVFzOUJ0V0k5TEdMekFNRkN3dStCSjc1NXA4OXg0SzJKd2t1Tk5LWis2dzZaWEVReUxxVWJRc3Fjc0dsbmZCK0Q1ZmN4ZEZPczl3TU12cUZqcnRGRGhhdEtBVnlQZytBWTJWWU1razVRZTNrN1hxT21ib1FFQkhKZjhGWFEiLCJtYWMiOiI0NzJlMGI3ODNmY2U0YmMxNjE2YWRiMzUyMWNlYjYwZjUyYzBkMGUwYWFkNjhiN2Q5ODI4ZWE1MjFiOTBhNWRhIiwidGFnIjoiIn0%3D",
"XSRF-TOKEN=eyJpdiI6Ik9EeUZmNHhuZTZyRVg2eE4rL1BjREE9PSIsInZhbHVlIjoiRmkrOXlSV2lscTVPZVNFQUh4eHBJTDNadlJqcGQrUElqd05uMjE3S3k4cjdGcTVGdGdXQzRTUlJRWlFNaWU1a1VDa2tmSkpQNngyVkgyeGFiQ2ZxazFpRWxCTDAwUE1TVEFCdG8xSk8yeUc5dUh0RkIvcXFMRDNFSjYxdUNuWFIiLCJtYWMiOiI0YWMyMjRhNjFhMGRmNjQwMjVhZGExODk4ODdhODMzN2Q3ZDA0YjFjMDA0MmRjNmIxMGZiY2UyMGJkN2E5MDVlIiwidGFnIjoiIn0%3D; yello_rush_session=eyJpdiI6IkVqV0RhQ0xwbmNUci9wZkxFUzFMVWc9PSIsInZhbHVlIjoiNHpSYS9CTjVocWJ3ay9nVVdIKzArekJWdnBuMU1QZzlQSGw3c2lHenZ4LzJTMGU0Z3NaT3hpMFY5cDVqRWNUY01DQVB4Vjk0WU5YYkpOSkF3dGRycFZoeXN4czdXM0NNbGNMQW1BRHBGZXlnOTlJQWVaSGFCbmlGNnludFZFcVciLCJtYWMiOiI2NTBhMWQ0ZTk1ODhhMTlmZGIwZWVkNjhjMzQwZmUzZjI5MDdjNTczZGU5MzlkMjk1ZjQyMDEzMjRiNzNiZWUwIiwidGFnIjoiIn0%3D",
      //boki
      "XSRF-TOKEN=eyJpdiI6IlRRRTFaUEJDbkcxdmlrUFFQQ2FWMGc9PSIsInZhbHVlIjoiSTVkSHUvYzZVT2RZWFlqUlVabk5SUk5VRUhKdjl0b21WTlYxVFk2RzkvVVQ4VFRxbzR5dE5ORitwYUErR3p6K0FxdHZDRW9sRzkzcllqOTVVL21nMm4zdUIxdzdTRitSbnY2MUJLcnFHK2JHbWlKTmZ2bzdaQXptMGxaRnRuZ3kiLCJtYWMiOiI4YzA5NTcxZTg3Y2VlMDBmNjY2OTRhMGI1NDk2Yjc4ZWI3ODExY2NlODNmMmE1M2Q0Y2RmZjdkYzlhNDBhMTZlIiwidGFnIjoiIn0%3D; yello_rush_session=eyJpdiI6Ikl2VmN4SGorT2lQOVd3UGd1ZXBSalE9PSIsInZhbHVlIjoiRDNPSWxpSm1SamR2QXV0SWtBVXlXN2pOWEhZbnY0TmY5T2IxZmpqY1ZRK3FCaGhhM29Mc21wckJQeHcxY2Q5ZzNPSjVyNW1MLzlkRWxaRERqZ05SLy9GZC9EZWQrdkkvOFlvb1pOUXRiTDdJeHlEQnRyTTRndXdPN2VFdjZCb1MiLCJtYWMiOiJjMTQzMWM3NjM3M2M3NTcyZWJhYmY1ZTc5YThkNWRmYzU1ZDlhYWFkNTc4YjIyNDc4OWFlMGYyNjFmOWQwMmFjIiwidGFnIjoiIn0%3D",


    //27735576855 - aerdaf sasd tao
 
      "XSRF-TOKEN=eyJpdiI6IlRqR2xTVkZTaXZ0bU9CQlkzZDZvWEE9PSIsInZhbHVlIjoiZFdwcUYvM29BcEFaSjdtTVBIR05iWnlFZDE1OXVFNC95Nm5ZRFg2cmVJSGhFWGVQbnFzc1BFYlNVS3RUQk5adE5YZ21GVk9UNVpKeDk4OXdDRXF6SXd5ZENOaGR4MVhNbVhDVTY1czlLQlNUak44Tk5GTUtQL05uUDFSVjY0VWwiLCJtYWMiOiJlMWNmMTA4ODlhZjcyMTNmM2Q1Yjc5N2RlYTU1NzViOTAzZjRjNjExMTczYjc2MGNjNTNkNDZmNzU2MjVmMDExIiwidGFnIjoiIn0%3D; yello_rush_session=eyJpdiI6InAyWGQ4SSs3dDYrTCtUKzNMeDMzOEE9PSIsInZhbHVlIjoib3hVMGlBT2daQm9QOGFJQkMxdzNUcnVVaTh6c1AvWXFreEQrckZWYjJFVkczdHFRNTd6bnJRVTRtb0JycmE4aGNVeUhqY1F1bi9icjJKclBoSWlDM09uTzVhTjhTbTU4SzZYUmRWVVhYYjFkaUJ4azgrWm12a1BhMzQzNVVKYisiLCJtYWMiOiI1ZmVkYzJlN2QyN2YwMDQ0MTkwYzM3ZWZlNjM2YWMwMTM1NjY4OWJiMWViYWVhMmNiODZmYTBkYjZmZWJiNWY0IiwidGFnIjoiIn0%3D",

  
    //27635414238 - vhatshudzi
  
      "XSRF-TOKEN=eyJpdiI6ImExSDIxcStzc0s2RFFNYVZIM21NL1E9PSIsInZhbHVlIjoiUkRRMDVEZnVHNEdrNE1yOTJSRU14NE95djZVbjdCWjcyZW5SMGFaemJtZlBxRW5aVmw1Rmc1TzZ3c3RxMXNkYmpCdUgybWFpT0w3bE5GcXZaNU1MRGpZQU1wZHBaQ251UnExVTIxbzF4OFU5Ly9aUFp2cnROdHpUaFZYamNZT3IiLCJtYWMiOiIzNjFkMjliZmJiMjI2MjRkYTMyM2I0NTk0OWY3MGRmNTMzMjkzMmU1YzdjY2M1YWI3NGEyODYyZjM4ZDZjZjI4IiwidGFnIjoiIn0%3D; yello_rush_session=eyJpdiI6IjhKQTFZYzdVWnlYK1RqS01kZGhtdHc9PSIsInZhbHVlIjoiMXRTMjg2Y0JoMnYxTHRwblR0SFBnNWlpMDIzUnYwNTMrQWhycU05Uis0NnhzYTFqUzVvcGMxTTM0ci93MUZxNWo4K3Bnd1VSYnYwVEQ4TkV1c2w5VVVyWXlIaG5qS0p4SDFMZmVud0N4RTg0U3dXZUoyVVdobUJSeHJGQkwva0oiLCJtYWMiOiJhZWIxODg3OTRmNjI1NDZiMjI1Y2U5ODliMjk4YzE2OWNiYTA2ZWU5MGI3YmUyMGYyZGE3Mjc2MjhiYjUyMDU5IiwidGFnIjoiIn0%3D",
 
 
    //27655307882 - NmAyJui

      "XSRF-TOKEN=eyJpdiI6ImVIYjJ2cHNhNjhRV2twamFyeUp6VGc9PSIsInZhbHVlIjoiR1JoajFhOEpqNDVkTXRKN1pqQjU0STNFSndmUzRnQXZHdDZlV0dJbkZRTWVHbGJ0TUFDWVRVOTJVblRpZ2oyVGJ3TjhhenVGaGpTbmdUdnZYdGM5b0pPd3JXSDhNTEpqZlpUQVp2RC95c1pTUDY1MUZ0S05QcTBxUThrSGtlcmYiLCJtYWMiOiJlOTE2NThhNWZmZWI0NGRiZjJjM2FkNDcxMWY3M2UxZGFjMDdiZGFkNWVmMjg4NzYyY2UyNTI4NGQyOWUyZDU1IiwidGFnIjoiIn0%3D; yello_rush_session=eyJpdiI6IlN0RFo0MUNPUWY1S1RNVG4rdERGbEE9PSIsInZhbHVlIjoiakczbGtuVitkdDk3QjRrU0h0dkdad0xpV2tSdjFmSDM4VVlGa1U4TkJlYk1tR3VabUh6R29mc3QzcGJ1SHpYejk5K0YvTTErVlRsNkJuaTJmNy9ueWJKNVFlcE9QUFg2bksxUHRtcFV1NVpJTXhxNmtTREVXckdqS1RkWmp6VDEiLCJtYWMiOiIxYWUyMjQ5NDZhYzdjMzkzMjZlOTQ2YWM3MTY5N2E4MDVhZTdlYmM0NDA4ZGM1YWE0MWFmYTczZDQ0M2QxMDdmIiwidGFnIjoiIn0%3D",
  

    //27783692266 - scelombali
    
      "XSRF-TOKEN=eyJpdiI6Ii9ENXpOOGlOSlhMNU5GdVdUYXRnbUE9PSIsInZhbHVlIjoiZnJJMXVOVGlUOForNjI3bmFYOVVibkpoYURMejJRZmw3UEUxdHRKVGllWGw3QnRkTHdBVHRtNitjNzRUWHR1aG9jbXNYaDFoZDZCS0tRUEk0a1lmZ0dqaVhnc2RWd0hTcXlGYS9BZWZHTFkvOWRicmg0L3p2blNLOVI0SFVFZGIiLCJtYWMiOiI0ZmYyODE2OTBjYzNiMDE4NTgyNDg5NTRlODEyNjAyM2Y5MDU1MGFjNjhjODZmZTMxMDk4MGI2MTAyN2U3ZGI4IiwidGFnIjoiIn0%3D; yello_rush_session=eyJpdiI6IjR1WFZQaFh4TWNvVmV0MnRLVjFkT1E9PSIsInZhbHVlIjoiZGwxYjFOcjU5dmNORlE0cHBrVXZWTHdYcFFQRDV3VldkSXFCcnRJeDE4WWdKQTU4M1pxOXpLOUIzeUtKc3Q5UWJKVS9ZcTdkRlNWT2p5N0ROZmh0cHNnWnIvdkxMMUFHNjRyeVdVWlZXc0FXSXJxVi9HT2piWU1GK3BPSlU3ZHYiLCJtYWMiOiIyNWMyZTczZTMwZjZiNTBkZGY5ZmE0Mjk5MDQzMjEwYjNkZmNkZjNhZmU3ZTI2OWRlN2NiOWMyOTVhMGQ1ZWM2IiwidGFnIjoiIn0%3D"


];

$urls_ar = array();

foreach ($c_values as $c) {

    
  $url = 'http://67.207.90.206/vodanew/xavi-mtn.php?c=' . urlencode($c);


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
