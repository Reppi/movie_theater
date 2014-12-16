<?php
	$y = date("Y");
	$m = date("n");
	$d = date("j");
	$w = date("w");

	$targety = date("Y");
	$targetm = date("n");
	$targetd = date("j");
	$targetw = date("w");



	$youbi = array("日","月","火","水","木","金","土");


	if(isset($_GET["id"])){
		$dayplus = $_GET["id"];
		$targetd = $targetd + $dayplus;
		$targetw = $targetw + $dayplus;

		if($targetw>=7){
			$targetw = $targetw % 7;
		}
	}


	$targetday = $targety."-".$targetm."-".$targetd;

	//DB接続
	$con = mysql_connect("localhost","root","");

	mysql_query("SET NAMES utf8");

	//DB選択
	$dbs = mysql_select_db("HAL_cinema");



	//SQL文
	$str = "SELECT start_day , end_day FROM movie";
	// $end = "SELECT end_day FROM movie";

	$targetmovie = "SELECT movie_title FROM movie WHERE '$targetday' >= start_day && '$targetday' <= end_day";

	$rows = mysql_query($targetmovie,$con);
	// $rows2 = mysql_query($end,$con);




?>
<!DOCTYPE html>

<html>

	<head>

		<meta charset="UTF-8">

		<!-- ↓ここには全ページ共通のcss↓ -->
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/common.css">
		<!-- ↑ここには全ページ共通のcss↑ -->

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

		<!-- <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"/> -->
		<script type="text/javascript" src="./js/schedule.js"></script>

		<!-- ↓ここにはそのページ用のcss↓ -->
		<link rel="stylesheet" href="css/schedule.css">
		<!-- ↑ここにはそのページ用のcss↑ -->

		<title>上映スケジュール</title>

	</head>

	<body>

	<?php include("header.php"); ?>

		<div id="wrapper" class="clearfix">

			<!-- ↓メインのコンテンツを置くとこ↓ -->
			<article>
				<div id="contentszone">
					<h2 class="clearfix">上映スケジュール</h2>
					<div id="schedule">
						<?php
							for($i=0;$i<7;$i++){
								echo "<div class='week' id='".$i."'>";

								if($w==6){
								echo "<p class='blue'>".$m."/".$d."</p>";
								}else if($w==0){
								echo "<p class='red'>".$m."/".$d."</p>";
								}else{
								echo "<p>".$m."/".$d."</p>";
								}
								echo "</div>";
								$d++;
								$w++;

								if($w==7){
									$w=0;
								}
							}

						?>
					</div>


					<div id="today"><p><?php echo $targetm."月".$targetd."日(".$youbi[$targetw].")"; ?></p></div>
					
					<div class="title">
						<p>攻殻機動隊ARISE border : 4 Ghost Stands Alone</p>
					</div>

					<div class="time">
						<ul>
							<li class="screen">SCREEN1</li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
					</div>

					<?php

						while($row=mysql_fetch_array($rows)){
							echo "<div class='title'><p>".$row["movie_title"]."</p></div>";
							echo "<div class='time'>";
							echo "<ul><li>";
							//idを取って来て時間をループさせる。
							// while();
							echo "</li></ul>";
							echo "</div>";
						}



					?>


				</div>
			</article>
			<!-- ↑メインのコンテンツを置くとこ↑ -->

		</div>

	<?php include("footer.php"); ?>

	</body>

</html>