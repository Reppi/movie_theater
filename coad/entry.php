<!-- HTML5で開発します -->
<!DOCTYPE html>

<html>

	<head>

		<meta charset="UTF-8">

		<!-- ↓ここには全ページ共通のcss↓ -->
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/common.css">
		<!-- ↑ここには全ページ共通のcss↑ -->

		<!-- ↓ここにはそのページ用のcss↓ -->
		<link rel="stylesheet" href="css/purchase.css">
		<!-- ↑ここにはそのページ用のcss↑ -->

		<title>予約完了しました | HALシネマ</title>

	</head>

	<body>

	<?php include("header.php"); ?>

		<div id="wrapper" class="clearfix">

			<!-- ↓メインのコンテンツを置くとこ↓ -->
			<article>

				<div id="contentszone">
					<h2 class="clearfix">ご予約完了</h2>
					<div id="contentscover">
						

						<?php
						//データベースに接続 
							$host_name = "localhost";
    						$dbms_user = "root";
						    $dbms_pass = "";

						    $con = mysqli_connect($host_name,$dbms_user,$dbms_pass);
						    mysqli_query($con,"SET NAMES utf8");

						    mysqli_select_db($con,"hal_cinema");

							$user_id = $_POST['user_id'];
							$name_sei = $_POST['name_sei'];
							$name_mei = $_POST['name_mei'];
							$furi_sei = $_POST['furi_sei'];
							$furi_mei = $_POST['furi_mei'];
							$sex = $_POST['sex'];
							$address_prefecture = $_POST['address_prefecture'];
							$address_municipalities = $_POST['address_municipalities'];
							$email = $_POST['email'];
							$password = $_POST['password'];

							//以下のSQL文は、同じユーザidが存在するかを調べるためのものである。
    						//パスワードをチェックしないのは、もし万が一、一致してしまうとユーザ名とパスワードがばれてしまうからである。
						    $sql="SELECT * FROM user where user_id='{$user_id}';";
						    $result=mysqli_query($con,$sql) or exit("データの抽出に失敗しました。");

						    //以下のプログラムは、すでに同じユーザ名が存在すれば、登録済みのメッセージを出すためのものである。
						    if(mysqli_num_rows($result)!=0){
						      echo "すでに{$user_id}様は登録済みです。もう一度別の名前で登録してください。<br>";
						    }

						    else{
						      //以下のプログラムは新規登録を行うためのプログラムである。
						      $sql="INSERT INTO user values('$user_id','$password','$name_sei','$name_mei','$furi_sei','$furi_mei','$sex','','$address_prefecture','$address_municipalities','$email','','','');";
						      $result=mysqli_query($con,$sql);
						      echo "{$user_id}様の登録が完了しました。";
						    }
						    	mysqli_close($con);

							?> 




					</div>
				</div>

				

		


				<div id="bannerzone">
					<!-- サイドコンテンツ置くとこ 横幅236px -->バナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナー
				</div>

			</article>
			<!-- ↑メインのコンテンツを置くとこ↑ -->

		</div>

	<?php include("footer.php"); ?>

	</body>

</html>