<?php
$file = file_get_contents("2p.js");

$json = json_decode($file, true);

foreach ($json as $v){
	$dom = $v["campaign"]["base_url"];
	$code = $v["campaign"]["unique_code"];
$jsn []= array("dom" => $dom, 
			   "code" => $code
			   );

}

echo json_encode($jsn);