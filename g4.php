<html>
    <head>
        <link rel="stylesheet" href="./css/main.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <div class='main'>
        <div class='container'>
            <div class="paper">
                <img src="./pics/p4.png" class='imgpaper'>
            </div>
            <div class='gform'>
                <h1>Zadej kód</h1>
                <form action='#' method='post'>
                <input type="text" name="code">
                <input type="submit" name="ok">
                </form>
            </div>            
        </div>
    </div>
    
        
    </body>

<?php
if(isset($_POST["ok"])) {
session_start();
$code = '6355';
$codeU = $_POST["code"];
if($code==$codeU) {
    unset($_SESSION["g2"]);
            unset($_SESSION["g3"]);
            unset($_SESSION["g4"]);
            unset($_SESSION["krunyr"]);
    header("Location:http://localhost/giftest/pics/certificate_sign.pdf");
} else
echo "Zadala jsi špatný kód.";
}
?>