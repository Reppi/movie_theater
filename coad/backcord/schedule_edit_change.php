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

  if($_SERVER['REQUEST_METHOD'] == "POST"){
    // MARK: 送信ボタンを押した時
    $movieId        = $_POST['movieId'];
    $startTimeYear  = $_POST['startTimeYear'];
    $startTimeGatu  = $_POST['startTimeGatu'];
    $startTimeNiti  = $_POST['startTimeNiti'];
    $startTimeZi    = $_POST['startTimeZi'];
    $startTimeFun   = $_POST['startTimeFun'];
    $endTimeYear    = $_POST['endTimeYear'];
    $endTimeGatu    = $_POST['endTimeGatu'];
    $endTimeNiti    = $_POST['endTimeNiti'];
    $endTimeZi      = $_POST['endTimeZi'];
    $endTimeFun     = $_POST['endTimeFun'];

    $beforeStartTime= $_POST['beforeStartTime'];
    $beforeEndTime  = $_POST['beforeEndTime'];

    if ($movieId == "" ) {
      $err['movieId'] = "未選択です。";
    }
    if ( $startTimeGatu == "" ) {
      $err['startTime'] = "未入力項目があります。";
    }
    if ( $startTimeNiti == "" ) {
      $err['startTime'] = "未入力項目があります。";
    }
    if ( $startTimeZi == "" ) {
      $err['startTime'] = "未入力項目があります。";
    }
    if ( $startTimeFun == "" ) {
      $err['startTime'] = "未入力項目があります。";
    }
    if ( $endTimeGatu == "" ) {
      $err['endTime'] = "未入力項目があります。";
    }
    if ( $endTimeNiti == "" ) {
      $err['endTime'] = "未入力項目があります。";
    }
    if ( $endTimeZi == "" ) {
      $err['endTime'] = "未入力項目があります。";
    }
    if ( $endTimeFun == "" ) {
      $err['endTime'] = "未入力項目があります。";
    }

    if (empty($err)){
      // MARK: ゼロパッディング
      $startTimeGatu  = sprintf('%02d', $startTimeGatu);
      $startTimeNiti  = sprintf('%02d', $startTimeNiti);
      $startTimeZi    = sprintf('%02d', $startTimeZi);
      $startTimeFun   = sprintf('%02d', $startTimeFun);

      $endTimeGatu    = sprintf('%02d', $endTimeGatu);
      $endTimeNiti    = sprintf('%02d', $endTimeNiti);
      $endTimeZi      = sprintf('%02d', $endTimeZi);
      $endTimeFun     = sprintf('%02d', $endTimeFun);

      // MARK: 日付をdatetime形式に変換
      $startTime  = "$startTimeYear-$startTimeGatu-$startTimeNiti $startTimeZi:$startTimeFun:00";
      $endTime    = "$endTimeYear-$endTimeGatu-$endTimeNiti $endTimeZi:$endTimeFun:00";

      $su = updateDataSchedule($dbh, $movieId, $startTime, $endTime, $beforeStartTime, $beforeEndTime);

      if ($su) {
        header("Location: ./schedule_edit.php");
        exit;
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
		<title>上映スケジュールの編集 | HALシネマ</title>

	</head>

	<body>

		<div id="wrapper">

			<div id="main">

				<h1>上映スケジュールの編集</h1>
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
				        </td>
				      </tr>
				      <tr>
				        <th><lable id="startDate">開始日時</lable></th>
				        <td>
				          <input type="text" class="input_year" name="startTimeYear" value="<?php echo $startTimeYear; ?>">年 <input type="text" class="input_day" name="startTimeGatu" value="<?php echo $startTimeGatu; ?>">月 <input type="text" class="input_day" name="startTimeNiti" value="<?php echo $startTimeNiti; ?>">日
				          <input type="text" class="input_day" name="startTimeZi" value="<?php echo $startTimeZi; ?>">時 <input type="text" class="input_day" name="startTimeFun" value="<?php echo $startTimeFun; ?>">分
				          <span class="err"><?php if(isset($err['startTime'])) echo "<br>".$err['startTime']; ?></span>
				          <input type="hidden" name="beforeStartTime" value="<?php echo $getStartTime; ?>">
				        </td>
				      </tr>
				      <tr>
				        <th><lable id="endDate">終了日時</lable></th>
				        <td>
				          <input type="text" class="input_year" name="endTimeYear" value="<?php echo $endTimeYear; ?>">年 <input type="text" class="input_day" name="endTimeGatu" value="<?php echo $endTimeGatu; ?>">月 <input type="text" class="input_day" name="endTimeNiti" value="<?php echo $endTimeNiti; ?>">日
				          <input type="text" class="input_day" name="endTimeZi" value="<?php echo $endTimeZi; ?>">時 <input type="text" class="input_day" name="endTimeFun" value="<?php echo $endTimeFun; ?>">分
				          <span class="err"><?php if(isset($err['endTime'])) echo "<br>".$err['endTime']; ?></span>
				          <input type="hidden" name="beforeEndTime" value="<?php echo $getEndTime; ?>">
				        </td>
				      </tr>
				    </table>
				    <div class="btn"><input type="submit" name="submit" value="編集する"></div>
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
