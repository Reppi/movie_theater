<?php
require_once("header-meta.php");
?>
<?php
	$y = date("Y");
	$m = date("n");
	$d = date("j");
	$w = date("w");

	$targety = date("Y");
	$targetm = date("n");
	$targetd = date("j");
	$targetw = date("w");
	$send_day = date("d");
	$send_month = date("m");




	$youbi = array("日","月","火","水","木","金","土");


	if(isset($_POST["id"])){
		$dayplus = $_POST["id"];
		$targetd = $targetd + $dayplus;
		$send_day = $send_day + $dayplus;
		$targetw = $targetw + $dayplus;

		if($targetw>=7){
			$targetw = $targetw % 7;
		}
	}


	$send_day = sprintf('%02d',$send_day);
	$targetday = $targety."-".$targetm."-".$targetd;
	$send_targetday = $targety."-".$send_month."-".$send_day;

	//DB接続
	$con = @mysql_connect("localhost","user","user");

	mysql_query("SET NAMES utf8");

	//DB選択
	$dbs = mysql_select_db("hal_cinema");



	//SQL文
	$str = "SELECT start_day , end_day FROM movie";
	// $end = "SELECT end_day FROM movie";

	$targetmovie = "SELECT movie_title , movie_id , start_day , end_day FROM movie WHERE '$targetday' >= start_day && '$targetday' <= end_day";

	// $stime = "SELECT start_time , end_time FROM schedule";
	$rows = mysql_query($targetmovie,$con);

	// $movie_id3 = array();
	// $count = 0;

	// while($fukutomi = mysql_fetch_array($rows)){
	// 	$movie_id3[$count] = $fukutomi['movie_id'];
	// 	$count++;
	// }


	// $stime = array();
	// $row = array();
	// $cont = 0;

	// foreach ($movie_id3 as $mid) {
	// 	$stime[$cont] = "SELECT start_time , end_time FROM schedule WHERE movie_id = 1";
	// 	$row[$cont] = mysql_query($stime[$cont],$con);
	// 	$cont++;
	// }



	// for($i=0;$i<count($row);$i++){
	// 	$row7=mysql_fetch_array($row[$i]);
	// 	echo $row7["start_time"];
	// 	echo $row7["end_time"];
	// }





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
								echo "<p class='blue'>".$m."/".$d."(".$youbi[$w].")</p>";
								}else if($w==0){
								echo "<p class='red'>".$m."/".$d."(".$youbi[$w].")</p>";
								}else{
								echo "<p>".$m."/".$d."(".$youbi[$w].")</p>";
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

					<div id="slider">

					<div id="today"><p><?php echo $targetm."月".$targetd."日(".$youbi[$targetw].")"; ?></p></div>

<!-- 					<div class="title">
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
					</div> -->

					<?php
						// while($row=mysql_fetch_array($row2)){
						// 	echo "<div class='title'><p>".$row["movie_title"]."</p></div>";
						// 	echo "<div class='time'>";
						// 	echo "<ul>";
						// 	for($i=0;$i<8;$i++){
						// 		echo "<li>";
						// 		if($i==0){
						// 			$c = $c + 1;
						// 			echo "<span id='screen'>screen".$c."</span>";
						// 		}else{
						// 			$st = date('H:i' , strtotime($row["start_time"]));
						// 			$et = date('H:i' , strtotime($row["end_time"]));
						// 			echo "<p><span id='st'>".$st."</span>~<span id='et'>".$et."</span></p>";
						// 			echo "<input type='hidden' name='movie_id' value='1'>";
						// 			echo "<input type='hidden' name='ticket_start_time' value='2015-03-02 16:00:00'>";
						// 			echo "<input type='hidden' name='ticket_end_time' value='2015-03-02 17:00:00'>";
						// 		}
						// 		//idを取って来て時間をループさせる。
						// 		// while();
						// 		echo "</li>";
						// 	}
						// 	echo "</ul>";
						// 	echo "</div>";
						// }
							$c = 1;
							while($row8=mysql_fetch_array($rows)){
								$new_stime = "SELECT start_time , end_time FROM schedule WHERE movie_id =".$row8['movie_id']."";
								$stime_row = mysql_query($new_stime,$con);
								$count=0;
								echo "<div class='title'><p>".$row8["movie_title"]."</p></div>";
								echo "<div class='time'>";
								echo "<ul>";
								echo "<li><span id='screen'>screen".$c."</span></li>";
								while($count<7){
									if($row=mysql_fetch_array($stime_row)){
										$st = date('H:i' , strtotime($row["start_time"]));
										$et = date('H:i' , strtotime($row["end_time"]));
										echo "<li class='gogo'>";
										echo "\n";
										echo "<form action='sheet_select.php' method='POST' class='go_ticket'>";
										echo "\n";
										echo "<p><span id='st'>".$st."</span>~<span id='et'>".$et."</span></p>";
										echo "\n";
										echo "<input type='hidden' name='movie_id' value='".$row8['movie_id']."'>";
										echo "\n";
										echo "<input type='hidden' name='ticket_start_time' value='".$send_targetday." ".$row['start_time']."'>";
										echo "\n";
										echo "<input type='hidden' name='ticket_end_time' value='".$send_targetday." ".$row['end_time']."'>";
										echo "\n";
										echo "</form>";
										echo "\n";
										echo "</li>";

										$count++;
									}else{
										echo "<li id='not'></li>";
										$count++;
									}
								}
								echo "</ul>";
								$c++;
							}



					?>
					</div><!-- slider -->

				</div>
			</article>
			<!-- ↑メインのコンテンツを置くとこ↑ -->

		</div>

	<?php include("footer.php"); ?>
<form action="schedule.php" method="POST" id="mask">
<input type="hidden" name="id" id="inmask">
</form>
	</body>

</html>
