<?php
	$y = date("Y");
	$m = date("n");
	$d = date("j");
	$w = date("w");
?>
<!DOCTYPE html>

<html>

	<head>

		<meta charset="UTF-8">

		<!-- ↓ここには全ページ共通のcss↓ -->
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/common.css">
		<!-- ↑ここには全ページ共通のcss↑ -->

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
						<div class="week"><?php echo "<p>".$m."/".$d."</p>"; ?></div>
						<div class="week"></div>
						<div class="week"></div>
						<div class="week"></div>
						<div class="week"></div>
						<div class="week"></div>
						<div class="week"></div>
					</div>

					<div id="today"><p>9月11日(木)</p></div>
					
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
				</div>
			</article>
			<!-- ↑メインのコンテンツを置くとこ↑ -->

		</div>

	<?php include("footer.php"); ?>

	</body>

</html>