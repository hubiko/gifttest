<html>
    <head>
        <link rel="stylesheet" href="./css/main.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <?php
    session_start();
    $_SESSION["g1"] = 1;
    ?>
    
        <div calss="main">
            <div class="container">
                <div class='turtleSpace'>
                    <div id="turtle">
                        <?php if(isset($_SESSION["krunyr"])) 
                            echo "<img src='./pics/turtle.jpg' width='350px'>";                 //želva ok
                                else
                                    echo"<img src='./pics/turtle.jpg' width='350px'>";          //želva obráceně
                         ?>       
                    </div>
                    <div id="turtleText">
                        <p class='turtleStart'>
                            <?php if(isset($_SESSION["krunyr"])==1)
                                    echo "Zachránila si mne!
                                            <br> Jsem ti nad slunce vděčná. Zasloužíš si odměnu!<br> Ale nebude to jen tak. Přečti si následující příběh, snad tě dovede 
                                            tam, kam má...";
                                        if(isset($_SESSION["krunyr"])==0)
                                            echo "POMOC!<br> Uvízla jsem!<br><br>                              
                                          
                                            <span>Pokud chceš najít zoufalou želvu, musíš si nejprve přečíst její příběch.";


                            ?>                            
                        </p>
                    </div>
                    <div class="icons">
                        <div id="g1">
                            <?php
                                if(isset($_SESSION["g1"])) {
                                    echo "<a href='./g1.php'><img src='./pics/g1.png' width='120px'></a>";
                                } else 
                                    echo "<img src='./pics/wrong.jpg' width='120px'>";
                            ?>
                        </div>
                        <div id="g2">
                            <?php
                                if(isset($_SESSION["g2"])) {
                                    echo "<a href='./g2.php'><img src='./pics/g2.png' width='120px'></a>";
                                }
                                else 
                                echo "<img src='./pics/g2w.png' width='120px'>";
                            ?>
                        </div>
                        <div id="g3">
                            <?php
                                if(isset($_SESSION["g3"])) {
                                    echo "<a href='./g3.php'><img src='./pics/g3.png' width='120px'></a>";
                                }
                                else 
                                echo "<img src='./pics/g3w.png' width='120px'>";
                            ?>
                        </div>
                        <div id="g4">
                            <?php
                                if(isset($_SESSION["g4"])) {
                                    echo "<a href='./g4.php'><img src='./pics/g4.png' width='120px'></a>";
                                }
                                else 
                                echo "<img src='./pics/g4w.png' width='120px'>";
                            ?>
                        </div>
                    </div>
                </div>
                <div id="mapbutton">                    
                    <form action="#" method='post'>
                        <input type="submit" name="reset" valu="Reset session">
                    </form> 
                </div>        
            </div>
        </div>       
               
    <?php
        if(isset($_POST["reset"])) {
            unset($_SESSION["g2"]);
            unset($_SESSION["g3"]);
            unset($_SESSION["g4"]);
            unset($_SESSION["krunyr"]);
        }
        ?>
    </body>
</html>



    