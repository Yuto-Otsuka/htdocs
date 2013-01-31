<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html"; charset="utf-8">
		<title>ガチャサンプル</title>
	</head>
	<body>
	<form method="POST" action="index.php">
		<center>
		<input type="submit" value="ガチャを回して下さい！" name="play">
		<br>
		<br>
		<?php
			if(isset($_POST[play])){
				$random_value = rand(0,10);
				if($random_value == 0){
					print 'レアアイテム<br><img src="takara.jpeg" width="350" height="350">';
				}
				else if($random_value == 1 || $random_value == 2 || $random_value == 3){
					print 'ノーマルアイテム<br><img src="coin.jpg" width="448" height="336">';
				}
				else{
					print 'ゴミアイテム<br><img src="tawashi.jpg" width="350" height="350">';
				}
			}
		?>
		</center>
	</form>
	</body>
</html>
