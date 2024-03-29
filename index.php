<?php
    include_once "./classes/vdb.php";
    $db = new vdb();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>verkiezingen</title>
        <link rel="stylesheet" href="style/style.css">
        <script src="js/vk.js"></script>
    </head>
    <body>
        <ul id='navul'>
            <li onclick="redirect('index.php')" class="navitem navselected" id="homebtn"><p>⌂</p></li>
            <li class="navitem hoverdiv">
             
                <a href="partijen.php"><p id="spnav">partijen</p></a>
            
                <div class="hoverbox"> 
                    <?php

                    $rows = $db->GetPartijen();

                    foreach($rows as $row) {

                        echo "
                            <div onclick=redirect('Partijen.php?id=$row[PartijId]') class='hoverbox-content'>
                                <p>$row[PartijName]</p>
                            </div>
                            ";
                    }
                    ?>
                </div>
            </li>
            <li onclick="redirect('verkiezingen.php')" class="navitem"><p>verkiezingen</p></li>
            <li onclick="redirect('themas.php')" class="navitem"><p>thema's</p></li>
        </ul>

        <div id="content">
            <div id="contentcontainer">
                <h1>Welkom op de homepagina!</h1>
                <p>Je kunt <a href="verkiezingen.php">hier</a> gemakkelijk het aankomende roster van alle verkiezingen bekijken. <br>
                    Informatie over alle partijen is te vinden op <a href="partijen.php">deze pagina</a>. <br>
                </p>
            </div>
        </div>
    </body>
</html>
