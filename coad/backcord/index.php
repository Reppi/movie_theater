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
		<link rel="stylesheet" href="css/index.css">
		<!-- ↑ここにはそのページ用のcss↑ -->

		<title>管理者ログイン | HALシネマ</title>

		<?php
			error_reporting(E_ALL & ~E_NOTICE);
			$message = "";
			//ログイン押した後の処理書くよ
			if( isset( $_POST["id"] ) && isset( $_POST["pass"] ) )
			{
				$id = $_POST["id"];
				$pass = $_POST["pass"];
				$connect = mysqli_connect("localhost","root","");
				mysqli_select_db($connect,"hal_cinema");
				mysqli_set_charset($connect,"utf8");
				$sql = "SELECT count(*) as cnt FROM administrator WHERE id = '".$id."' AND password = '".$pass."'";
				$result = mysqli_query($connect,$sql);
				while( $data = mysqli_fetch_array($result) )
				{
					if( $data['cnt'] == 1 )
					{
						header("Location:menu.php");
					}
					else
					{
						$message = "IDかパスワードが違います";
					}
				}
			}
		?>

	</head>

	<body>

		<div id="wrapper">
			
			<div id="main">

				<h1>管理者ログイン</h1>

				<div id="maininner">

					<form action="index.php" method="post">
						<?php echo "<span id='loginerror'>".$message."</span><br>"; ?>
						ID<input type="text" name="id" id="loginid"><br><br>
						PASS<input type="password" name="pass" id="loginpass"><br><br>
						<input type="submit" value="ログイン" id="loginbutton">

					</form>

				</div>

			</div>

			<div id="menu">

				<h1>メニュー</h1>

				<div id="menuinner">
					
					<ul>
						<li>トップページ</li>
						<li>映画情報登録・編集</li>
						<li>上映スケジュール登録・編集</li>
						<li>月別予約状況PDF出力</li>
					<ul>
					
				</div>

			</div>
			
		</div>

	</body>

</html>