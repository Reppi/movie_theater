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

		<title>映画情報登録 | HALシネマ</title>

	</head>

	<body>

		<div id="wrapper">
			
			<div id="main">

				<h1>映画情報登録</h1>

				<div id="maininner">

					<form action="moviedata_edit_input.php" id="input_editform">

						<div class="input_tagname">タイトル</div><div class="input_tag"><input type="text" name="title" maxlength="255" id="input_title"></div>
						<div class="input_tagname">サムネイル</div><div class="input_tag"><input type="file" name="thumbnail"></div>
						<div class="input_tagname">公開開始日</div><div class="input_tag"><input type="text" name="start_year" maxlength="4" class="input_year">年<input type="text" name="start_month" maxlength="2" class="input_month">月<input type="text" name="strat_day" maxlength="2" class="input_day">日</div>
						<div class="input_tagname">公開終了日</div><div class="input_tag"><input type="text" name="end_year" maxlength="4" class="input_year">年<input type="text" name="end_month" maxlength="2" class="input_month">月<input type="text" name="end_day" maxlength="2" class="input_day">日</div>
						<div class="input_tagname">ジャンル</div>
						<div class="input_tag">
							<select name="genre">
								<option>データベースに登録してあるやつ</option>
							</select>
						</div>
						<div class="input_tagname">詳細文</div><div class="input_tag"><textarea name="detail"></textarea></div>
						<div class="input_tagname">上映時間</div><div class="input_tag"><input type="text" name="time" maxlength="3" id="input_time">分</div>
						<div class="input_tagname">俳優</div><div class="input_tag"><textarea name="actor"></textarea></div>
						<div class="input_tagname">監督名</div><div class="input_tag"><input type="text" name="director"></div>
						<div class="input_tagname">映画URL</div><div class="input_tag"><input type="text" name="url"></div>
						<div id="input_button"><input type="button" value="登録する"></div>

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