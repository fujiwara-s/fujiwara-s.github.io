<?php

    $leftCard = $_POST['leftCard'];
    $select = $_POST['select'];

?>

<html>
	<head>
        <meta http-equiv="content-Type"content="text/html;charset=UTF-8">
    </head>

    <body>
    	<div align="center">
         	<font size = "6">High & Lowゲーム</font><hr>

    		<?php
    		  echo "送信カード番号:",$leftCard,"<br>";
    		  echo "High/Low選択:",$select,"<br>";
    		?>
    	</div>
    </body>
</html>
