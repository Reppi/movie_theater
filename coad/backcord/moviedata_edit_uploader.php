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

		<?php
			error_reporting(E_ALL & ~E_NOTICE);
			$message	= "アップロードする画像を選択してください。";

			//画像アップロード処理
			if(is_uploaded_file($_FILES["thumbnail"]["tmp_name"]))
			{
				if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], "../images/thumbnail/".$_FILES["thumbnail"]["name"]))
				{
					chmod("../images/thumbnail/".$_FILES["thumbnail"]["name"], 0644);
				}
				$message = "アップロードされました";
			}
		?>

		<title>映画画像アップローダー | HALシネマ</title>

	</head>

	<body>

		<div id="wrapper">

			<div id="main">

				<h1>映画画像アップローダー</h1>

				<div id="maininner">

					<?php echo "<h2 id='uploader_h2'>".$message."</h2>"; ?>

					<form action="moviedata_edit_uploader.php" id="input_editform" method="post" enctype="multipart/form-data">
						<input type="file" name="thumbnail">
						<input type="submit" value="アップロード">
					</form>
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
