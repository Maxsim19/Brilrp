<?php
require_once("http://wh9904.web1.maze-host.ru/SampQueryAPI.php"); 

$query = new SampQueryAPI('185.189.15.22', '4879'); 
$serverInfo = $query->getInfo(); 
$serverRules = $query->getRules(); 


[
 { 
    "color": "FF0000", 
    "dopname": "", 
    "maxonline": $serverInfo['maxplayers'], 
    "name": "BY LITE", 
    "online": $serverInfo['players']
 }
]