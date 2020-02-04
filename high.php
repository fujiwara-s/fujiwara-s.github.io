<html>
    <head>
        <meta http-eqiv="content-Type"content="text/html;charset=UTF-8">
    </head>
    <body>
        <center>
            <font size = "6" color = "pink">
            High & Low ゲーム
            </font>
        </center>

<?php

    $cards = array("Jk.png","01.png","02.png","03.png","04.png","05.png","06.png",
                    "07.png","08.png","09.png","10.png","11.png","12.png","13.png");
    $leftcard = mt_rand(1,13);
?>
<center>
    <!--左のカードをランダムで表示-->
    <img src = "../cards/<?php echo $cards[$leftcard];?>">
    <img src = "../cards/bg.png">
</center><br>

<form action = "highAndLowS07.php" method = "POST">
    <center>
        High<input type="radio"name="select"value="High">
        Low<input type="radio"name="select"value="Low">
    </center>
    <center>
        <input type="submit" value="決定">
    </center>
    <input type="hidden"name="leftcard" value="<?php echo $leftcard;?>">
</form>
    </body>
</html>
