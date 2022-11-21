<?php 
error_reporting(0);

  $bot_admin       = "5296269245:AAGM8il31wEY0DGdGavhR6tYMXVfd3TfOSk";
  $group_admin     = "-721388334";
  $bot_kullanici   = "5145997957:AAGrUH6vGZz5hxHZVRBQEyg37x8x1Dle0vw";
  $group_kullanici = "-741573433";

  function TelegramSendMessage($token, $parametre)
  {
    $ch = curl_init();
    $url = "https://api.telegram.org/bot".$token."/sendmessage";
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $parametre);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
  }

?>