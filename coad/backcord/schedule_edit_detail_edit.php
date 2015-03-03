<?php
  require_once("functions.php");

  $dbh = connectDb();


?>
<!DOCTYPE html>

<html>

	<head>

		<meta charset="UTF-8">

		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/common.css">

		<link rel="stylesheet" href="css/menu.css">

		<link rel="stylesheet" href="./css/min/ysato-style.css">
		<script src="./js/script.js"></script>

		<title>上映スケジュール 一覧 | HALシネマ</title>

	</head>

	<body>

		<div id="wrapper">

			<div id="main">

				<h1>上映スケジュール 一覧</h1>
				<ul>
	        <li><a href="schedule_edit.php">戻る</a></li>
	      </ul>
				<div id="maininner">

					<div class="content-inner">
					<table>
				    <tr>
				      <th><lable id="movieName">映画名</lable></th>
				      <td><input type="text" name="movieName" value=""></td>
				    </tr>
				    <tr>
				      <th><lable id="movieThm">映画サムネイル</lable></th>
				      <td><input type="file" name="movieThm" value=""></td>
				    </tr>
				    <tr>
				      <th><lable id="startDate">公開開始日</lable></th>
				      <td><input type="date" name="startDate" value=""></td>
				    </tr>
				    <tr>
				      <th><lable id="endDate">公開終了日</lable></th>
				      <td><input type="date" name="endDate" value=""></td>
				    </tr>
				    <tr>
				      <th><lable id="genre">ジャンル</lable></th>
				      <td>
				        <select id="genre" name="genre">
				          <option value="g1">ジャンル1</option>
				          <option value="g2">ジャンル2</option>
				          <option value="g3">ジャンル3</option>
				        </select>
				      </td>
				    </tr>
				    <tr>
				      <th><lable id="msg">説明文</lable></th>
				      <td><textarea name="msg" rows="8" cols="40"></textarea></td>
				    </tr>
				    <tr>
				      <th><lable id="movieTime">上映時間</lable></th>
				      <td><input type="text" name="movieTime" value=""></td>
				    </tr>
				    <tr>
				      <th><lable id="haiyu">俳優</lable></th>
				      <td><input type="text" name="haiyu" value=""></td>
				    </tr>
				    <tr>
				      <th><lable id="kantoku">監督名</lable></th>
				      <td><input type="text" name="kantoku" value=""></td>
				    </tr>
				    <tr>
				      <th><lable id="url">映画URL</lable></th>
				      <td><input type="text" name="url" value=""></td>
				    </tr>
				  </table>
					</div>

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
					<ul>

				</div>

			</div>

		</div>

	</body>

</html>
