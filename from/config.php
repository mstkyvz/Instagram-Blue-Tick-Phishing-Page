<?php 
error_reporting(0);

  $bot_admin       = "";
  $group_admin     = "";
  $bot_kullanici   = "";
  $group_kullanici = "";

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
