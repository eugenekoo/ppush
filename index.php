<?php
include_once 'class.push.php';
$push	= new pushmessage();

$params	= array("pushtype"=>"android", $idphone=>"android_smart_phone_id_here", $mst=>"Hello, an android user");
$rtn = $push->sendMessage($params);
//print_r($rtn);
