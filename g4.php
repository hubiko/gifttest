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
$code = '4';
$codeU = $_POST["code"];
if($code==$codeU) {
    header("Location:http://localhost/giftest/final.php");
} else
echo "Zadala jsi špatný kód.";
}
?>