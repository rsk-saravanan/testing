<?php

/* 
	$jb_subject_array 	= 	array('New journal issue preprocessing job: ', 'New book preprocessing job: ', 'New typesetting job: ' );
	
	$jobName = "New journal issue preprocessing job: NI 25:2 (2015)";
	$pos      = stripos($jobName, ":");
	$jobName = substr($jobName, $pos+1);
	echo trim($jobName); 

*/

/* echo phpinfo();die;
 
/*
$jb_subject_array 	= 	array('New journal issue preprocessing job: ', 'New book preprocessing job: ', 'New typesetting job: ' );
$mailSubject 		= 	'New journal issue preprocessing job:  RRO 51:1 (2016)';
$clientID 			=	'';
$title				=	'';

foreach ($jb_subject_array as $value) {
	if (strpos($mailSubject, $value) !== false) {
		$clientID 		= 	24;
		$title			=	trim(str_ireplace($value, "", $mailSubject));
	}	
}

if($clientID!='' && $title!='') {
	echo "Client : " . $clientID . " - " . $title;
}
 */

/* $line = "Imprint: Baby";

$x = explode(":", $line);

echo "Count : " . count($x);
if(count($x)==2 && trim($x[1])!='') {
echo "<pre>";
print_r($x);
echo "</pre>";
}

if(count($x)>1) {
	$mailContents[trim($x[0])]= trim($x[1]) ;
}
print_r($mailContents); */

//$clients = $commonFn->getAccount(1,"",array('Client'));


//Short Term Client array
$clientInfo = array(
		'40'=>array('name'=>'BMJ','shortName'=>'BMJ','color'=>'#367967'),
		'47'=>array('name'=>'Sense Publishers', 'shortName'=>'Sense', 'color'=>'#ECB40F'),
		'78'=>array('name'=>'Dove Medical Press Ltd', 'shortName'=>'Dove', 'color'=>'#EAEB4B')

);

echo "<pre>";
print_r($clientInfo);
echo "</pre>";


//making key value pair array

$clientIDs = array(10, 20);
$newClientInfo = array();
foreach ($clientIDs as $clientId)
{
	$newClientInfo[$clientId]['name'] = "Saravanan";
	$newClientInfo[$clientId]['shortName'] = "Saran";
	
}

echo "<pre>";
print_r($newClientInfo);
echo "</pre>";


?>
