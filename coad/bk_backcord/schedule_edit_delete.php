<?php
  require_once "functions.php";
  $dbh = connectDb();

  $err = Array();

  // MARK: post用 変数
  $movieId        = "";
  $startTimeYear  = "";
  $startTimeGatu  = "";
  $startTimeNiti  = "";
  $startTimeZi    = "";
  $startTimeFun   = "";
  $endTimeYear    = "";
  $endTimeGatu    = "";
  $endTimeNiti    = "";
  $endTimeZi      = "";
  $endTimeFun     = "";

  $beforeStartTime= "";
  $beforeEndTime  = "";


  // MARK: get用 変数
  $getMovieId     = "";
  $getStartTime   = "";
  $getEndTime     = "";



    // MARK: GET
    if (isset($_GET['movieId'])){
      $getMovieId = $_GET['movieId'];
    }

    if (isset($_GET['startTime'])){
      $getStartTime = $_GET['startTime'];
    }

    if (isset($_GET['endTime'])){
      $getEndTime = $_GET['endTime'];
    }

    $movieData      = getMovieData($dbh, $getMovieId);
    $startTimeArray = timeFormatArray($getStartTime);
    $endTimeArray   = timeFormatArray($getEndTime);

    $startTimeYear  = $startTimeArray['Y'];
    $startTimeGatu  = $startTimeArray['m'];
    $startTimeNiti  = $startTimeArray['d'];
    $startTimeZi    = $startTimeArray['G'];
    $startTimeFun   = $startTimeArray['i'];

    $endTimeYear    = $endTimeArray['Y'];
    $endTimeGatu    = $endTimeArray['m'];
    $endTimeNiti    = $endTimeArray['d'];
    $endTimeZi      = $endTimeArray['G'];
    $endTimeFun     = $endTimeArray['i'];

    $chkStartTime  = "$startTimeYear-$startTimeGatu-$startTimeNiti $startTimeZi:$startTimeFun";
    $chkEndTime    = "$endTimeYear-$endTimeGatu-$endTimeNiti $endTimeZi:$endTimeFun";

  if($_SERVER['REQUEST_METHOD'] == "POST"){
    // MARK: 送信ボタンを押した時
    $movieId        = $_POST['movieId'];

    $beforeStartTime= $_POST['beforeStartTime'];
    $beforeEndTime  = $_POST['beforeEndTime'];

    if ($movieId == "" ) {
      $err['movieId'] = "未選択です。";
    }
    if ( $beforeStartTime == "" ) {
      $err['beforeStartTime'] = "正常に処理が行われませんでした。";
    }
    if ( $beforeStartTime == "" ) {
      $err['beforeStartTime'] = "正常に処理が行われませんでした。";
    }


    if (empty($err)){
      // MARK: ゼロパッディング

      $su = deleteDataSchedule($dbh, $movieId, $beforeStartTime, $beforeEndTime);

      if ($su) {
        header("Location: ./schedule_edit.php");
        exit;
      }else{
        echo "正常に削除処理を行えませんでした。もう一度行ってください。";
      }
    }
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

		<title>上映スケジュールの削除 | HALシネマ</title>

	</head>

	<body>

		<div id="wrapper">

			<div id="main">

				<h1>上映スケジュールの削除</h1>
				<ul>
					<li><a href="schedule_edit.php">戻る</a></li>
				</ul>
				<div id="maininner">

					<div class="content-inner">
					<form class="" action="" method="post">
						<table class="table-grid-tate">
							<tr>
								<th><lable id="movieName">映画名</lable></th>
								<td>
									<?php echo $movieData['movie_title']; ?>
									<input type="hidden" name="movieId" value="<?php echo $getMovieId; ?>">
									<span class="err"><?php if(isset($err['movieId'])) echo "<br>".$err['movieId']; ?></span>
									<?php echo "dev: $getMovieId"; ?>
								</td>
							</tr>
							<tr>
								<th><lable id="startDate">開始日時</lable></th>
								<td>
									<?php echo h($chkStartTime); ?>
									<span class="err"><?php if(isset($err['beforeStartTime'])) echo "<br>".$err['startTime']; ?></span>
									<input type="hidden" name="beforeStartTime" value="<?php echo $getStartTime; ?>">
									<?php echo "dev: $getStartTime"; ?>
								</td>
							</tr>
							<tr>
								<th><lable id="endDate">終了日時</lable></th>
								<td>
									<?php echo h($chkStartTime); ?>
									<span class="err"><?php if(isset($err['beforeEndTime'])) echo "<br>".$err['endTime']; ?></span>
									<input type="hidden" name="beforeEndTime" value="<?php echo $getEndTime; ?>">
									<?php echo "dev: $getEndTime"; ?>
								</td>
							</tr>
						</table>
						<p class="space-txt"><strong>本当に上記の内容を削除しますか？</strong></p>
						<div class="btn"><input type="submit" name="submit" value="削除する"></div>
					</form>
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
