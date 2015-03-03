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
		<link rel="stylesheet" href="css/moviedata_edit.css">
		<!-- ↑ここにはそのページ用のcss↑ -->

		<title>映画情報登録・編集 | HALシネマ</title>
		<?php

			// DB接続設定
			$connect = mysqli_connect("localhost","root","");
			mysqli_select_db($connect,"hal_cinema");
			mysqli_set_charset($connect,"utf8");
			// DB接続設定終わり

			if( isset($_POST["title"]) )
			{
				$message	= "更新処理が正常に処理されました";
				$colorclass	= "fontblue";
				$id		= $_POST["id"];
				$title		= $_POST["title"];
				$thumbnail	= $_POST["thumbnail"];
				$start_year	= $_POST["start_year"];
				$start_month	= $_POST["start_month"];
				$start_day	= $_POST["start_day"];
				$end_year	= $_POST["end_year"];
				$end_month	= $_POST["end_month"];
				$end_day	= $_POST["end_day"];
				$genre		= $_POST["genre"];
				$detail		= $_POST["detail"];
				$time		= $_POST["time"];
				$actor		= $_POST["actor"];
				$director	= $_POST["director"];
				$url		= $_POST["url"];

				//開始日時と終了日時を変換
				$sy		= $start_year;
				$sm		= $start_month;
				$sd		= $start_day;
				$start		= $sy."-".$sm."-".$sd;

				$ey		= $end_year;
				$em		= $end_month;
				$ed		= $end_day;
				$end		= $ey."-".$em."-".$ed;

				//上映時間を正しい形へ
				if( strlen($time) < 3 )
				{
					$time = "0".$time;
				}

				//映画情報をインサート
				$sql = "UPDATE movie SET movie_title='".$title."',thumbnail='".$thumbnail."',start_day='".$start."',end_day='".$end."',movie_detail='".$detail."',show_time='".$time."',actor='".$actor."',director='".$director."',url='".$url."',genre_id='".$genre."' WHERE movie_id = ".$id."";
				$result = mysqli_query($connect,$sql);

			}
			else
			{
				$message	= "更新処理に失敗しました";
				$colorclass	= "fontred";
			}

		?>
	</head>

	<body>

		<div id="wrapper">
			
			<div id="main">

				<h1>映画情報更新</h1>

				<div id="maininner">
					<ul id="editmenu">
						<li><?php echo "<span class='".$colorclass."'>".$message."</span>"; ?></li>
						<li><a href="moviedata_edit.php">戻る</a></li>
					</ul>
				</div>

			</div>

			<div id="menu">

				<h1>メニュー</h1>

				<div id="menuinner">
					
					<ul>
						<li><a href="menu.php">トップページ</a></li>
						<li><a href="moviedata_edit.php">映画情報登録・編集</a></li>
						<li><a href="schedule_edit.php">上映スケジュール登録・編集</a></li>
						<li><a href="output_pdf.php">月別予約状況PDF出力</a></li>
					</ul>
					
				</div>

			</div>
			
		</div>

	</body>

</html>