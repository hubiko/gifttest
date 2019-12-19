<html>
    <head>
        <link rel="stylesheet" href="./css/main.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <div class='main'>
        <div class='container'>
            <div class="paper">
                <img src="./pics/p3.png" class='imgpaper'>
            </div>
            <div class='gform'>                
                <form action='#' method='post'>
                <input type="submit" name="ok" value="Zpět">
                </form>
            </div>            
        </div>
    </div>
    
        
    </body>

<?php
if(isset($_POST["ok"])) {
    session_start();
/*session_start();
$code = '3';
$codeU = $_POST["code"];
if($code==$codeU) {
    $_SESSION["g4"]=1;
    $_SESSION["krunyr"] = 3;
    header("Location:http://localhost/giftest/map.php");
} else
echo "Zadala jsi špatný kód.";*/
$_SESSION["g4"]=1;
$_SESSION["krunyr"] = 3;
header("Location:http://localhost/giftest/map.php");
}

?>