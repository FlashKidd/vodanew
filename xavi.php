<?php
//Business of the day
require_once('Tools.php');

    $scoreTarget = TargetScore();

    if ($scoreTarget < 10000){
        $scoreTarget = rand(10000,15000);
    }

for ($i=0;$i<1;$i++){
$cookies = [
"XSRF-TOKEN=eyJpdiI6Imhxa1pyMGRXZG1MR0tEalZLc2pYaGc9PSIsInZhbHVlIjoiNGhHRnVYWEsxR3dwYzUvT09hbGZWbE1tczhaeXlXeHd2Y25PNnlHcFNTcXZ1SGN4RlgrcjF4aDFlMmZ1bis5eDZ6UHZNQWU4TDBkckt1SFAwMU44ZW9xVytFeUtxTGFnOWZzckJSYmNqQ00vaFZVMkRQc2w0aHUzeVc2bmFhaTIiLCJtYWMiOiIyYjRlMmM1ZTYxNTM5OGIzNzI3Yjg1MjUyYmQ0N2UyOWQzNmIyY2QyY2U4NjE0ZWEyMTlmMDRkZGUyMGQxNzc3IiwidGFnIjoiIn0%3D; vodacom_mzansi_games_session=eyJpdiI6IkRXSnkrOG5NeHJtZmk5RjJBUmlDb1E9PSIsInZhbHVlIjoiNGdkWHRwaTdKQ2htUVdoc3VEZGlmRWMvd0VlZmN4MHBKZmtxUmlKeGhET0p4OHU5RG9vajg3U1VodkNoK3JTWkpVK2pKcGprc2dBaU1VQXRxakpITXpIaUpWT2w5M3NxTGQxd3VhWnQyYjBMRHJDcTFRQ3NrVkFLY3NKZXZUZDkiLCJtYWMiOiI5OTRlZWU0Yjc1OTA3ZGQ5ZmJhMzJhZWIyYTg4ZTEwNjQ5MjBlZmVjYTc5Y2ZlZDI4ZjliMTU5Njg1MzlkYWY2IiwidGFnIjoiIn0%3D",

"XSRF-TOKEN=eyJpdiI6InhYR1RlOGRzTmlFdFZjMENQQmZwRmc9PSIsInZhbHVlIjoid3JScFJOM3B2eWw4Q0FTcWRaRXhtTTc2aCtnOWlTUkg1UkhwRkh6OVl3SCtzZlVSM2ZNUkxGeXNBeUQyVWtGd0Vqb2t2RjZ6Uks5MjRTUWM0eFYwTWFkR2QzSkpDRURIbm9jUEIwSkpDSkplU1poWDNHSDAxWUdkNmJZZkVPQ2MiLCJtYWMiOiJlNjVmNDUwN2ZhMjI3MjIzYzJlMDMxZmY3Y2Y5YjhlZDdkMWMxNWRmYWQyMWNkYmQ3MTQyZWNhZWYzNTY5ZmNjIiwidGFnIjoiIn0%3D; vodacom_mzansi_games_session=eyJpdiI6Ik1nR2tmaUR0VW55S0c4K1prVDJ2aHc9PSIsInZhbHVlIjoiSHdZeVZnZUFYSzJybWtmVFNXT1lmWnRWa01XMFY1VFJiVzVhWVEya2ttOGtMeHJ6SDlzS0YxbzRzc2RSZXNROXdIdm9oUDZ1V01jM3lnZDZXVllPUSt5bE9nV1NqSm10b0FBT2NLdDIveURqc0wvTkNoaUI0VFlQMTdlV2tqYWwiLCJtYWMiOiI1ZDQ2OTRmYWQxMjJlY2VmNGI2NTE2ZWJlMDM1NTVmYTY2NGMwN2UyZGE1MmU2M2MzNDE3MzVmYjBkYzk4NDgwIiwidGFnIjoiIn0%3D",

  
  "XSRF-TOKEN=eyJpdiI6ImdqRGV0MWJLbnlNSmo0M0YxeWhSckE9PSIsInZhbHVlIjoiS2NRcm1FZ3JLZUxBUEo5NFZSRWpDemtzUlBqZjdobzFyRXl6cU51cGVueWUrTEZLWUoyMzV0MzloVitsY2hmajh3RGtLdmVtUWZhQVRUSGFyR0dic2ZkcjE4emowck5OSWN2UDYxSkc4Wmd5Z2cveFhsblZNcUZtVnhBZ25tbzYiLCJtYWMiOiIzZTNmNzlhZmE2MjQ5ZmFlYWU2NjY5NTU3MTgzZjEzZmJlZWFhZWU3MDVkNGZhMWQyYTE1MGE5NDJhNzQ4OTRlIiwidGFnIjoiIn0%3D; vodacom_mzansi_games_session=eyJpdiI6Im5LYWVxS08vSHEwcFIyeUluZ2xINWc9PSIsInZhbHVlIjoiVzNwZllFaGNuajdEdEIzaTR1TmpRUWlkUml2WWNtR3hEY29oeE9oMnlTZGNIcEdYa0NadjFrVzk2d3lqOGswak10UVJFSXBlV0l5VFBSRW5KM0NmaElHWkY5TndkUWNaVlQyb1pSaU42SUxqRVVzZ05JRExONkJSSlB5b2FXTDEiLCJtYWMiOiI1ZDg1Yzc2NDQ2NDQzZGU0NWUwNGYyZTZkOTc2Yzc5ODA3Mjg4YzVmM2JmNWNjODg4Y2Q5NWVhNjJkMjIzZjRiIiwidGFnIjoiIn0%3D",


  "XSRF-TOKEN=eyJpdiI6IjdTMitrK2pRM0hvQzNTTDJGNlVnb1E9PSIsInZhbHVlIjoiRkxWMnNCcTFSQ2RsVGphTjRVeUlaOGxScU4xYVBIdlRtaW5oaEpLeFgxZ3JCcllZWkJzZnVuN2I3SjdJVTJpT3RaNmZiMjFtUWYxR0FsT3I4SDF2Z0FZOFYyZEJOVXhtMzhXRWdYcTRnT0I4aHFNaTJaS1ZZT3Z3dWVJNmpoWE4iLCJtYWMiOiI2NGFiODA5Mzg0OGQyY2JjNDNiOWMwZTg4ZDFkYjc5NDBiZDhiZTFjYTM1ZjAyOTY4Yzk0MjMzOTJmODJjNGI3IiwidGFnIjoiIn0%3D; vodacom_mzansi_games_session=eyJpdiI6Ik95c2p0MzhPaCtBNTBkSUdFMU9UTEE9PSIsInZhbHVlIjoiK1ZPV0IwejFmK1hhbElwOHFKQlpDdmhrV282QnpJR3g3TEN6K2JId0M0M25iMHlmeCttM1VvTlNBS28xQ3ZaSFJjbWd6RStDU0xKQTc4NDdQc1hPQlk1TFhOWElaMzYyUzJTZmgzRTdaRmRabDFuSzZtK09waE1Mb0pvaTdmM2IiLCJtYWMiOiJhMzYzOGY3Y2YyZjhiODA4MWZkZmQ1MDEyZWFlMzVkODZkODRkOTRlNTI5OTAyNGMxZWJkNmVkMDdkOWJmNjk5IiwidGFnIjoiIn0%3D",*/

  "XSRF-TOKEN=eyJpdiI6ImNrQStQSTREeTQvWEZDcjVGU0N6R1E9PSIsInZhbHVlIjoiYWNvZlBZRjJhZGN1K3RMRnlESFJRWGV1MHByZ0xrRy9PNDdKVy90N3ZqWlF4T0tWVm9WdVMwSkFlOFRSNlpVdmtkZERYRC9ZRTlNd3lHTWJRSG9MejYrUVBDRG5NMWNmaGZnT0JSTHkraXg4aFRjK0FHZ04rV0NLTE5lNVFpbnIiLCJtYWMiOiIwNTBjYmZiMDE5NmY2M2U4MWQxYTEyNmVjNmI5ZTgyNzg0MjlkN2Q1ZTMwODBiZDhiYzM2MDJhZWJjYTQwNmNkIiwidGFnIjoiIn0%3D; vodacom_mzansi_games_session=eyJpdiI6Im9ESnN1aDRYRnpZN1pMc21OTkZ5YXc9PSIsInZhbHVlIjoiYkFDTFpaQkJLTW9qVmpFM2dVNEhWQ3Y2STFHRHNhYld6VnJ1aGpVQmFjdGJZWHB0b1ZJVndlYTFqcWJIVG9jK2xiNXdHSTZvY3JKdWxIVEMybXJXZDdpdUV0a0pVMktaaDJJbVpCb21sNUR1Y1NLWGR3ZGpERjE0MHNlVTVEcnEiLCJtYWMiOiIwYWZhNzcwZGQ1MTZhNjA5MThhM2NmNjA0MDAzNDJkMmIzMjk3NTRmZjBiNTEyZGFmMzgwZWEyNjMwMWQxNjU3IiwidGFnIjoiIn0%3D",

//"XSRF-TOKEN=eyJpdiI6IlhWU0h6cUs5TzFjOWYxbXZHckVWQnc9PSIsInZhbHVlIjoiUk5CbDNtK1g0ZEFQeWJHdjdmVGJ3anIrS1g4RG5wMGVnT3dIQ0tyTCtUVWZvLzF4N2NOdHh3UEorSk9wWWM4ckpMWnVnazg0TCtJcUw1bTl1VjRiMUw4U2d3MWh5aHgrcFluNWc1U0I2THJvaFdZdllMRUVENjI2NlpOcVdrZ2UiLCJtYWMiOiJkMDAxNWQ2ZjdjYWZkN2U0MTZhNGY4NmUxZmQ4M2UyNzk1NGE3ZTcxYmUzNWFlMzJkZDFkMzBjZDY1MzBkZjZjIiwidGFnIjoiIn0%3D; vodacom_mzansi_games_session=eyJpdiI6ImZwN0JERjJjZ1NYWDJYSUtqSFd5Rmc9PSIsInZhbHVlIjoiTzFGbWVQaUpseHhicm5kZGxpQ3dDRGpPM3V2eGtLV3RVeHcydkprOHlOZGlMUk8vR2pWNllDZkt3ZkwwTDJEVHcvbDVSR0gvUkZhZFhhQ3Eyb3phQVo2N3ZYazM2RDdBdEQxYkpETURhWUlkZXFvK29kTnAvWnVwdGlqQWlNWWEiLCJtYWMiOiJjN2EyNDQ1NmYyNjdiNWJjOTdiNjJiNWViY2Y0NWU1MzBkZjI5NDQ3NmRkNTM0YzkyMDc0ZTZhM2RiOTczMzFiIiwidGFnIjoiIn0%3D"
];
foreach ($cookies as $cookie) {

        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://play.mzansigames.club/play-now');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        $headers = array(
            'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
            'Accept-Language: en-US,en;q=0.9',
            'Cache-Control: no-cache',
            'Connection: keep-alive',
            'Cookie: '.$cookie,
            'Pragma: no-cache',
            'Referer: https://play.mzansigames.club/',
            'Sec-CH-UA: \"Safari\";v=\"15\", \"AppleWebKit\";v=\"605\"',
            'Sec-CH-UA-Mobile: ?1',
            'Sec-CH-UA-Platform: \"iOS\"',
            'Sec-Fetch-Dest: empty',
            'Sec-Fetch-Mode: navigate',
            'Sec-Fetch-Site: same-origin',
            'Upgrade-Insecure-Requests: 1',
            'User-Agent: Mozilla/5.0 (Linux; Android 8.0.0; SM-G955U Build/R16NW) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Mobile Safari/537.36'
        );
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        $curl = curl_exec($ch);
        $redirectedUrl = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
                    
        curl_close($ch);
        $query_str = parse_url($redirectedUrl, PHP_URL_QUERY);
        parse_str($query_str, $query_params);
        $unique_id = isset($query_params['unique_id']) ? $query_params['unique_id'] : '';
        $game_id = isset($query_params['game_id']) ? $query_params['game_id'] : '';
        $sigv1 = isset($query_params['sigv1']) ? $query_params['sigv1'] : '';

       // echo "<br>Uniquie_id: $unique_id<hr>";
        //echo "<br>Game_id: $game_id<hr>";

        ###################
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://play.mzansigames.club/check-user-status/'.$unique_id.'/'.$sigv1.'');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        $headers = array(
            'Referer:'.$redirectedUrl,
            'Sec-CH-UA: \"Safari\";v=\"15\", \"AppleWebKit\";v=\"605\"',
            'Sec-CH-UA-Mobile: ?1',
            'Sec-CH-UA-Platform: \"iOS\"',
            'Sec-Fetch-Dest: empty',
            'Sec-Fetch-Mode: navigate',
            'Sec-Fetch-Site: same-origin',
            'Upgrade-Insecure-Requests: 1',
        );
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_HEADER, 1);

        $curl = curl_exec($ch);

        // Separate headers and body
        $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $header = substr($curl, 0, $header_size);
        $body = substr($curl, $header_size);
        curl_close($ch);

        
        
        $x_power = X_Power($header);
        echo "<br> X-Powered-Version: $x_power\n";
        
        $score = $scoreTarget;

        $increment = 1;
        ///////////////////////////
        $uA = RandomUa();
        //echo "\n<br>UA used => $uA\n";
        $memory = validate_request($x_power,$score);
        $OnePieceIsReal = generateRandomDivisionData($score,$redirectedUrl,$x_power,$memory,$increment,$uA);

//defaultscore += Math.floor(Math.random() * (499 - 383 + 1)) + 383 + scoreAppender;
  //scoreAppender += defaultscore;);
        



}

}