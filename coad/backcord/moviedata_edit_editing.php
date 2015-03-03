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

		<title>映画情報編集 | HALシネマ</title>

		<?php

			// DB接続設定
			$connect = mysqli_connect("localhost","user","user");
			mysqli_select_db($connect,"hal_cinema");
			mysqli_set_charset($connect,"utf8");
			// DB接続設定終わり

			//映画id・タイトル・サムネイル画像・作品詳細を取得
			$sql = "SELECT movie_id as id,movie_title as title,thumbnail as thm,movie_detail as det FROM movie ORDER BY movie_id DESC";
			$result = mysqli_query($connect,$sql);

		?>

	</head>

	<body>

		<div id="wrapper">

			<div id="main">

				<h1>映画情報編集</h1>

				<div id="maininner">
				<?php
					error_reporting(E_ALL & ~E_NOTICE);
					while( $data = mysqli_fetch_array( $result ) )
					{
						echo "<a href='moviedata_edit_editing_input.php?id=".$data["id"]."'>";
						echo "<div class='moviedata_edit_box'>";
						echo "<div class='moviedata_edit_content'>";
						echo "<div class='moviedata_edit_thumbnail'><img src='images/thumbnail/".$data["thm"]."'></div>";
						echo "<div class='moviedata_edit_details'>";
						echo "<h3 class='moviedata_edit_title'>".$data["title"]."</h3>";
						echo "<p class='moviedata_edit_text'>".$data["det"]."</p>";
						echo "</div>";
						echo "</div>";
						echo "</div>";
						echo "</a>";
					}
				?>
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
