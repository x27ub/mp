<?php
$ip    = $_SERVER['REMOTE_ADDR'];
 $agent = $_SERVER['HTTP_USER_AGENT'];
 $prot  = $_SERVER['SERVER_PROTOCOL'];
 $req   = $_SERVER['REQUEST_METHOD'];
 $gate  = $_SERVER['GATEWAY_INTERFACE'];
 $host  = $_SERVER['REMOTE_HOST'];
 $sname = $_SERVER['SERVER_NAME'];
 $ref   = $_SERVER['HTTP_REFERER'];
 $fileName = "log.txt";
 $fileHandle = fopen($fileName, 'a') or die("can't open file");
 $dte = date("D, d M Y g:i:s a O");
 $string = "$ip -$sname -$host -$ref -$req -$gate -$prot -$dte [$agent] \n";
 fwrite($fileHandle,$string);
 fclose($fileHandle);
?>
