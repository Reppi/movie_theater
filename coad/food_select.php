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
		<link rel="stylesheet" href="css/ticket.css">
		<!-- ↑ここにはそのページ用のcss↑ -->

		<title>フード予約 | HALシネマ</title>

	</head>

	<body>

	<?php include("header.php"); ?>
		<div id="wrapper" class="clearfix">

			<!-- ↓メインのコンテンツを置くとこ↓ -->
			<article>

			<div id="contentszone">
				<h2 class="clearfix">フード予約</h2>
				<div id="contentscover">
				
				
				<div id="select">
					<div class="select_content">
						<p class="select_name">ポップコーン</p>
						<p class="price">1800円</p>
						<p class="select_sum">
							<form><input type="number">枚</form>
						</p>
					</div>

					<p class="select_border"></p>

					<div class="select_content">
						<p class="select_name">チェロス</p>
						<p class="price">1500円</p>
						<p class="select_sum">
							<form><input type="number">枚</form>
						</p>
						<p class="clearfix"></p>
					</div>

					<p class="select_border"></p>

					<div class="select_content">
						<p class="select_name">ホットドック</p>
						<p class="price">1300円</p>
						<p class="select_sum">
							<form><input type="number">枚</form>
						</p>
						<pclass="clearfix"></p>
					</div>

					<p class="select_border"></p>

					<div class="select_content">
						<p class="select_name">ドリンクS</p>
						<p class="price">1200円</p>
						<p class="select_sum">
							<form><input type="number">枚</form>
						</p>
						<p class="clearfix"></p>
					</div>

					<p class="select_border"></p>

					<div class="select_content">
						<p class="select_name">ドリンクM</p>
						<p class="price">1000円</p>
						<p class="select_sum">
							<form><input type="number">枚</form>
						</p>
						<p class="clearfix"></p>
					</div>

					<p class="select_border"></p>

					<div class="select_content">
						<p class="select_name">ドリンクL</p>
						<p class="price">1000円</p>
						<p class="select_sum">
							<form><input type="number">枚</form>
						</p>
						<p class="clearfix"></p>
					</div>

					<p class="select_border"></p>
				
				</div><!-- /select -->
			
				<div id="ticket_rest">
					<p class="float_left" id="food">|</p>
					<p class="float_left" id="sum">合計</p>
					<p class="float_left" id="money">1000円</p>
				</div>
				<p class="clearfix"></p>

				<a href="#"><p id="next">次へ</p></a>

			</div><!-- /contentscover -->
			</div><!-- /contentzoon -->

				<div id="bannerzone">
					<!-- サイドコンテンツ置くとこ 横幅236px -->バナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナー
				</div>

			</article>
			<!-- ↑メインのコンテンツを置くとこ↑ -->

		</div>

	<?php include("footer.php"); ?>

	</body>

</html>