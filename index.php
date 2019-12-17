<html>
    <head>
        <link rel="stylesheet" href="./css/main.css">
    </head>
    <body>
        <div calss="main">
            <div class="container">
                <div class="indexform">
                    <h1>Zadej kód</h1>
                    <form method='post' action='#' >
                    <input type="text" name="code">
                    <input type="submit" name="ok">
                    </form> 
                </div>        
            </div>
        </div>        
    </body>
</html>


<?php
if(isset($_POST["ok"])) {
$code = '1234';
$codeU = $_POST["code"];
if($code==$codeU) {
header("Location:http://localhost/giftest/map.php");
} else
echo "Zadala jsi špatný kód.";
}
?>