<?php
  require_once "functions.php";
  $dbh = connectDb();

  if (isset($_GET['id'])){
    $id = $_GET['id'];
  }




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
				      <td>映画タイトル名xxxxx</td>
				    </tr>
				    <tr>
				      <th><lable id="movieThm">映画サムネイル</lable></th>
				      <td><img src="./img/xxx.jpg" alt="thm image" /></td>
				    </tr>
				    <tr>
				      <th><lable id="startDate">公開開始日</lable></th>
				      <td>2015.xx.xx</td>
				    </tr>
				    <tr>
				      <th><lable id="endDate">公開終了日</lable></th>
				      <td>2015.xx.xx</td>
				    </tr>
				    <tr>
				      <th><lable id="genre">ジャンル</lable></th>
				      <td>ジャンル名1</td>
				    </tr>
				    <tr>
				      <th><lable id="msg">説明文</lable></th>
				      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem labore voluptatum accusamus provident veritatis eius veniam officiis voluptates. Magni labore possimus dolores perferendis reprehenderit, excepturi soluta perspiciatis veritatis at ipsam!</td>
				    </tr>
				    <tr>
				      <th><lable id="movieTime">上映時間</lable></th>
				      <td>128分</td>
				    </tr>
				    <tr>
				      <th><lable id="haiyu">俳優</lable></th>
				      <td>xxxxx</td>
				    </tr>
				    <tr>
				      <th><lable id="kantoku">監督名</lable></th>
				      <td>xxxxx</td>
				    </tr>
				    <tr>
				      <th><lable id="url">映画URL</lable></th>
				      <td>http://xxxx.xxxx/xxxx</td>
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
