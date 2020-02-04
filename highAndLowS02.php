<html>
   <center>
	<head>
		<meta http-equiv="Content-Type"content="text/html;charset=UTF-8">
	</head>
	<body>
		<font size = "6">High & LOWゲーム</font><hr>
	</body>
   </center>

   <?php
   $cards = array("Jk.png","01.png","02.png","03png","04.png","05.png","06.png",
       "07.png","08.png","09.png","10.png","11.png","12.png","13.png");
   $leftcard = mt_rand(1,13);
   ?>
   <center>

    <!--左のカードをランダムで表示-->
    <img src = "../cards/<?php echo $cards[$leftcard];?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src = "../cards/bg.png">
   </center><br>
</html>
