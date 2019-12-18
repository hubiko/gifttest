<html>
    <head>
        <link rel="stylesheet" href="./css/main.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <div class='main'>
        <div class='container'>
            <div class="paper">
                <img src="./pics/paper.jpg" class='imgpaper'>
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
$code = '3';
$codeU = $_POST["code"];
if($code==$codeU) {
    $_SESSION["g4"]=1;
    header("Location:http://localhost/giftest/map.php");
} else
echo "Zadala jsi špatný kód.";
}
?>