<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Test extends CI_Controller {
	
	  public function test() {
	

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://allpayindia.com/api/user/authenticate-by-signature?content-type=application/json&X-Signature=J70fJDMz20SXI...........jkDAdQ==&Cache-control=no-cache&X-Signature-Key=5246138C8560B148AB9493B0B2BF78C71BB4B02B&Accept=*/*",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS =>"{\t\r\n\t\t\t\"login\"    : \"1234567\",\r\n\t\t\t\"password\": \"secret\",\r\n\t\t\t\"retailerId\"  : \"123456\",\r\n\t\t\t\"bbpsAgentId\"  : \"A5984509\"\r\n\t\t\t\t\r\n}",
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json"
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

	  }
}

?>