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

			$id		= $_GET["id"];
			$message	= "更新する情報を編集してください";
			$information	= array();

			// DB接続設定
<<<<<<< .merge_file_AlvDXN
			$connect = mysqli_connect("localhost","user","user");
=======
			$connect = mysqli_connect("localhost","root","");
>>>>>>> .merge_file_1ZHgN2
			mysqli_select_db($connect,"hal_cinema");
			mysqli_set_charset($connect,"utf8");
			// DB接続設定終わり

			//取得してきた映画idから映画情報を引っこ抜く
			$sql = "SELECT movie_title as title,thumbnail as thum,start_day as sday,end_day as eday,movie_detail as detail,show_time as time,actor as act,director as dir,url as url,genre_id as genre FROM movie WHERE movie_id = '".$id."'";
			$result = mysqli_query($connect,$sql);

			//ジャンル情報を引っこ抜く
			$sql = "SELECT genre_name as genre FROM genre";
			$resultGenre = mysqli_query($connect,$sql);

			while( $data = mysqli_fetch_array($result) )
			{
				$information[0] = $data["title"];
				$information[1] = $data["thum"];
				$information[2] = $data["sday"];
				$information[3] = $data["eday"];
				$information[4] = $data["detail"];
				$information[5] = $data["time"];
				$information[6] = $data["act"];
				$information[7] = $data["dir"];
				$information[8] = $data["url"];
				$information[9] = $data["genre"];
				list($sy, $sm, $sd) = explode('-', $information[2]);//日付データの分解
				list($ey, $em, $ed) = explode('-', $information[3]);//日付データの分解
			}

		?>

		<title>映画情報編集 | HALシネマ</title>

	</head>

	<body>

		<div id="wrapper">
<<<<<<< .merge_file_AlvDXN

=======
			
>>>>>>> .merge_file_1ZHgN2
			<div id="main">

				<h1>映画情報更新</h1>

				<div id="maininner">

					<?php echo "<h2>".$message."</h2>"; ?>
<<<<<<< .merge_file_AlvDXN

=======
					
>>>>>>> .merge_file_1ZHgN2
					<form action="moviedata_edit_updata.php" id="input_editform" method="post">

						<table>
							<tr>
								<td class="input_tagname">タイトル</td>
								<td class="input_tag"><input type="text" name="title" maxlength="255" id="input_title" value = <?php echo $information[0] ?> ></td>
							</tr>
							<tr>
								<td class="input_tagname">サムネイル</td>
								<td class="input_tag"><input type="file" name="thumbnail"></td>
							</tr>
							<tr>
								<td class="input_tagname">公開開始日</td>
								<td class="input_tag"><input type="text" name="start_year" maxlength="4" class="input_year" value=<?php echo $sy; ?> >年<input type="text" name="start_month" maxlength="2" class="input_month" value=<?php echo $sm; ?> >月<input type="text" name="start_day" maxlength="2" class="input_day" value=<?php echo $sd; ?> >日</td>
							</tr>
							<tr>
								<td class="input_tagname">公開終了日</td>
								<td class="input_tag"><input type="text" name="end_year" maxlength="4" class="input_year" value=<?php echo $ey; ?> >年<input type="text" name="end_month" maxlength="2" class="input_month" value=<?php echo $em; ?> >月<input type="text" name="end_day" maxlength="2" class="input_day" value=<?php echo $ed; ?> >日</td>
							</tr>
							<tr>
							<td class="input_tagname">ジャンル</td>
								<td class="input_tag">
									<select name="genre">
										<?php
											while( $data = mysqli_fetch_array($resultGenre) )
											{
												echo "<option value='".$data["genre"]."'>".$data["genre"]."</option>";
											}
										?>
									</select>
								</td>
							</tr>
							<tr>
								<td class="input_tagname">詳細文</td>
								<td class="input_tag"><textarea name="detail"><?php echo $information[4]; ?></textarea></td>
							</tr>
							<tr>
								<td class="input_tagname">上映時間</td>
								<td class="input_tag"><input type="text" name="time" maxlength="3" id="input_time"  value = <?php echo $information[5]; ?> >分</td>
							</tr>
							<tr>
								<td class="input_tagname">俳優</td>
								<td class="input_tag"><textarea name="actor"><?php echo $information[6]; ?></textarea></td>
							</tr>
							<tr>
								<td class="input_tagname">監督名</td>
								<td class="input_tag"><input type="text" name="director" value=<?php echo $information[7]; ?>></td>
							</tr>
							<tr>
								<td class="input_tagname">映画URL</td>
								<td class="input_tag"><input type="text" name="url" value=<?php echo $information[8]; ?>></td>
							</tr>
							<input type="hidden" name="id" value=<?php echo $id; ?> >
							<tr><td><input type="submit" value="更新する" id="input_button"></td></tr>
						</table>
					</form>

				</div>

			</div>

			<div id="menu">

				<h1>メニュー</h1>

				<div id="menuinner">
<<<<<<< .merge_file_AlvDXN

=======
					
>>>>>>> .merge_file_1ZHgN2
					<ul>
						<li><a href="menu.php">トップページ</a></li>
						<li><a href="moviedata_edit.php">映画情報登録・編集</a></li>
						<li><a href="schedule_edit.php">上映スケジュール登録・編集</a></li>
						<li><a href="output_pdf.php">月別予約状況PDF出力</a></li>
					</ul>
<<<<<<< .merge_file_AlvDXN

				</div>

			</div>

=======
					
				</div>

			</div>
			
>>>>>>> .merge_file_1ZHgN2
		</div>

	</body>

<<<<<<< .merge_file_AlvDXN
</html>
=======
</html>
>>>>>>> .merge_file_1ZHgN2
