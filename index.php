<?php
include_once 'class.push.php';
$push	= new pushmessage();

$params	= array("pushtype"=>"android", $idphone=>"APA91bFfYp6PtljKfiFJkQnZ0oHIO6G3qEcfzHn4CmGbSsY-uKeJM1mC-YllYL9J0kAa5tua_vPPqvyD2ay1LxWkj390dVhjRgY_HFJxcZpoEOtcU4bsT95WtlAI0LvODRlMI3wcwy76", $mst=>"Hello, an android user");
$rtn = $push->sendMessage($params);
echo "apa ni?".$rtn;
//print_r($rtn);
