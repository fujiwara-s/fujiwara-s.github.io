<?php
//array関数を使ってトランプの画像名を配列で作成
    $cards=array("Jk.png","01.png","02.png","03.png","04.png","05.png","06.png",
    "07.png","08.png","09.png","10.png","11.png","12.png","13.png");

//0～13の範囲でランダム数値を1つ取得
    $rightcard=mt_rand(0,13);

//フォームのPOST送信データを各変数に代入
    $leftcard=$_POST['leftCard'];
    $select=$_POST['select'];


?>
<html>
	<head>
		<meta http-equiv="Content-Type"content="text/html;charset=UTF-8">
	</head>
	<body>
		<div align="center">
		<font size="6">
			<?php
                echo 'High ＆ LOWゲーム<br>';
                print'<hr>';

                echo'<img src="../cards/',$cards[$leftcard],'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';//特殊文字を入れる(カード間隔を作るため)
                echo'<img src="../cards/',$cards[$rightcard],'">';
                echo '<br>';

                echo"「",$select,"」を選択しました。";

            ?>
		</font>
		<br>
		</div>
	</body>
</html>
