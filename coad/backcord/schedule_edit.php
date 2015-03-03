<?php
  require_once "functions.php";

  $dbh = connectDb();
  $movieList = getScheduleList($dbh);
  // var_dump($movieList);
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
		<title>上映スケジュールの一覧 | HALシネマ</title>

	</head>

	<body>

		<div id="wrapper">

			<div id="main">

				<h1>上映スケジュールの一覧</h1>
        <ul>
          <li><a href="schedule_edit_add.php">スケジュール登録</a></li>
        </ul>
				<div id="maininner">
          <div class="content-inner">
          <table>
            <?php foreach($movieList as $value): ?>
              <tr>
                <td><img src="../images/thumbnail/<?php echo $value['thumbnail']; ?>" alt="<?php echo $value['thumbnail']; ?>"></td>
                <td><?php echo $value['movie_title']; ?></td>
                <td><?php echo $value['genre_name']; ?></td>
                <td><?php echo timeFormatYMD($value['start_time']); ?></td>
                <td><?php echo timeFormatYMD($value['end_time']); ?></td>
                <td><a href="schedule_edit_change.php?movieId=<?php echo $value['movie_id']; ?>&startTime=<?php echo $value['start_time']; ?>&endTime=<?php echo $value['end_time']; ?>">予定の編集</a></td>
                <td><a href="schedule_edit_delete.php?movieId=<?php echo $value['movie_id']; ?>&startTime=<?php echo $value['start_time']; ?>&endTime=<?php echo $value['end_time']; ?>">予定の削除</a></td>
              </tr>
            <?php endforeach; ?>
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
