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

		<?php

			// DB接続設定
<<<<<<< .merge_file_zbxAeo
			$connect = mysqli_connect("localhost","user","user");
=======
			$connect = mysqli_connect("localhost","root","");
>>>>>>> .merge_file_Vlm5z2
			mysqli_select_db($connect,"hal_cinema");
			mysqli_set_charset($connect,"utf8");
			// DB接続設定終わり

			$message	= "映画情報を全て入力してください";
			$colorclass	= "fontblue";

			if( isset($_POST["title"]) && isset($_POST["thumbnail"]) && isset($_POST["start_year"]) && isset($_POST["start_month"]) && isset($_POST["start_day"]) && isset($_POST["end_year"]) && isset($_POST["end_month"]) && isset($_POST["end_day"]) && isset($_POST["genre"]) && isset($_POST["detail"]) && isset($_POST["time"]) && isset($_POST["actor"]) && isset($_POST["director"]) && isset($_POST["url"]) )
			{
				$message	= "登録処理が正常に処理されました";
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

				//idカウント
				$sql = "SELECT count(movie_id) as id FROM movie";
				$result = mysqli_query($connect,$sql);
				while( $data = mysqli_fetch_array($result) )
				{
					$id = $data["id"];
				}

				//映画情報をインサート
				$sql = "INSERT INTO movie(movie_id,movie_title,thumbnail,start_day,end_day,movie_detail,show_time,actor,director,url,genre_id) VALUES (".$id.",'".$title."','".$thumbnail."','".$start."','".$end."','".$detail."','".$time."','".$actor."','".$director."','".$url."','".$genre."')";
				$result = mysqli_query($connect,$sql);
			}
			else if( !isset($_POST["title"]) && isset($_POST["checkFlag"]) )
			{
				$message	= "全ての項目を入力してください";
				$colorclass	= "fontred";
			}

			//ジャンル情報を引っこ抜く
			$sql = "SELECT genre_name as genre FROM genre";
			$result = mysqli_query($connect,$sql);

		?>


	</head>

	<body>

		<div id="wrapper">
<<<<<<< .merge_file_zbxAeo

=======
			
>>>>>>> .merge_file_Vlm5z2
			<div id="main">

				<h1>映画情報登録</h1>

				<?php echo "<h2 class='".$colorclass."'>".$message."</h2>"; ?>

				<div id="maininner">

					<form action="moviedata_edit_input.php" id="input_editform" method="POST">

						<table>
							<tr>
								<td class="input_tagname">タイトル</td>
								<td class="input_tag"><input type="text" name="title" maxlength="255" id="input_title" value=""></td>
							</tr>
							<tr>
								<td class="input_tagname">サムネイル</td>
								<td class="input_tag"><input type="file" name="thumbnail"></td>
							</tr>
							<tr>
								<td class="input_tagname">公開開始日</td>
								<td class="input_tag"><input type="text" name="start_year" maxlength="4" class="input_year">年<input type="text" name="start_month" maxlength="2" class="input_month">月<input type="text" name="start_day" maxlength="2" class="input_day">日</td>
							</tr>
							<tr>
								<td class="input_tagname">公開終了日</td>
								<td class="input_tag"><input type="text" name="end_year" maxlength="4" class="input_year">年<input type="text" name="end_month" maxlength="2" class="input_month">月<input type="text" name="end_day" maxlength="2" class="input_day">日</td>
							</tr>
							<tr>
							<td class="input_tagname">ジャンル</td>
								<td class="input_tag">
									<select name="genre">
										<?php
											while( $data = mysqli_fetch_array($result) )
											{
												echo "<option value='".$data["genre"]."'>".$data["genre"]."</option>";
											}
										?>
									</select>
								</td>
							</tr>
							<tr>
								<td class="input_tagname">詳細文</td>
								<td class="input_tag"><textarea name="detail"></textarea></td>
							</tr>
							<tr>
								<td class="input_tagname">上映時間</td>
								<td class="input_tag"><input type="text" name="time" maxlength="3" id="input_time">分</td>
							</tr>
							<tr>
								<td class="input_tagname">俳優</td>
								<td class="input_tag"><textarea name="actor"></textarea></td>
							</tr>
							<tr>
								<td class="input_tagname">監督名</td>
								<td class="input_tag"><input type="text" name="director"></td>
							</tr>
							<tr>
								<td class="input_tagname">映画URL</td>
								<td class="input_tag"><input type="text" name="url"></td>
							</tr>
							<input type="hidden" name="checkFlag" value="1">
							<tr><td><input type="submit" value="登録する" id="input_button"></td></tr>
						</table>

					</form>

				</div>

			</div>

			<div id="menu">

				<h1>メニュー</h1>

				<div id="menuinner">
<<<<<<< .merge_file_zbxAeo

=======
					
>>>>>>> .merge_file_Vlm5z2
					<ul>
						<li><a href="menu.php">トップページ</a></li>
						<li><a href="moviedata_edit.php">映画情報登録・編集</a></li>
						<li><a href="schedule_edit.php">上映スケジュール登録・編集</a></li>
						<li><a href="output_pdf.php">月別予約状況PDF出力</a></li>
					</ul>
<<<<<<< .merge_file_zbxAeo

				</div>

			</div>

=======
					
				</div>

			</div>
			
>>>>>>> .merge_file_Vlm5z2
		</div>

	</body>

<<<<<<< .merge_file_zbxAeo
</html>
=======
</html>
>>>>>>> .merge_file_Vlm5z2
