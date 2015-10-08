<?php
$headers['CLIENT-IP'] = '202.103.229.40';  
$headers['X-FORWARDED-FOR'] = '202.103.229.40'; 
 
$headerArr = array();  
foreach( $headers as $n => $v ) {  
    $headerArr[] = $n .':' . $v;   
}
 
ob_start();
$ch = curl_init();
curl_setopt ($ch, CURLOPT_URL, "http://202.197.191.131:8090/One/ExamEnd.aspx");
curl_setopt ($ch, CURLOPT_HTTPHEADER , $headerArr );  //构造IP
curl_setopt ($ch, CURLOPT_REFERER, "http://www.163.com/ ");   //构造来路
curl_setopt( $ch, CURLOPT_HEADER, 1);
 
curl_exec($ch);
curl_close ($ch);
$out = ob_get_contents();
ob_clean();
 
echo $out;