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
		<link rel="stylesheet" href="css/booking.css">
		<!-- ↑ここにはそのページ用のcss↑ -->

		<title>お客様情報入力 | HALシネマ</title>

	</head>

	<body>

	<?php include("header.php"); ?>

		<div id="wrapper"　class="clearfix">

			<!-- ↓メインのコンテンツを置くとこ↓ -->
			<article>

				<div id="contentszone">
					<h2 class="clearfix">お客様情報入力</h2>
					<div id="contentscover">
					<h3>選択中チケット情報</h3>

					<div id="information">
						<div class="information_content">
							<div class="content_name">上映日</div>
							<div class="element">
								2014 年 6月 27日 (土)<br />
								17:00 〜 19:30
							</div>
							<p class="clearfix"></p>
						</div>

						<p class="information_border"></p>

						<div class="information_content">
							<div class="content_name">作品名</div>
							<div class="element">
								アイ・フランケンシュタイン
							</div>
							<p class="clearfix">
						</div>

						<p class="information_border"></p>

						<div class="information_content">
							<div class="content_name">座席</div>
							<div class="element">
								M-16
							</div>
							<p class="clearfix"></p>
						</div>

						<p class="information_border"></p>

						<div class="information_content">
							<div class="content_name">チケット</div>
							<div class="element">
								大学生チケット１枚
							</div>
							<p class="clearfix"></p>
						</div>

						<p class="information_border"></p>

						<div class="information_content">
							<div class="content_name">フード注文予約</div>
							<div class="element">
								ポップコーン、ドリンク(L)
							</div>
							<p class="clearfix"></p>
						</div>

						<p class="information_border"></p>

						<div class="information_content">
							<div class="content_name">合計金額</div>
							<div class="element">
								3,000円
							</div>
							<p class="clearfix"></p>
						</div>
						<p class="information_border"></p>

					</div><!-- /information -->

					<h3>お客様情報入力</h3>

					<div id="guest">
						<div class="information_content">
							<div class="content_name">お名前</div>
							<div class="element">
								<form class="text_name">
									<input type="text">
									<input type="text" class="text">
								</form>
								<p class="clearfix"></p>
							</div>
						</div><!-- /information_content -->

						<p class="information_border"></p>

						<div class="information_content">
							<div class="content_name">電話番号</div>
							<div class="element">
								<form>
									<input type="text" class="text_content">
								</form>
							</div>
						</div><!-- /information_content -->

						<p class="information_border"></p>

						<div class="information_content">
							<div class="content_name">メールアドレス</div>
							<div class="element">
								<form>
									<input type="text" class="text_content">
								</form>
							</div>
						</div><!-- /information_content -->

						<p class="information_border"></p>

						<div class="information_content">
							<div class="content_name">住所</div>
							<div class="element">
								<form>
									<input type="text" class="text_content">
								</form>
							</div>
						</div><!-- /information_content -->

						<p class="information_border"></p>

					</div><!-- /guest -->

					<h3>クレジットカード情報</h3>

					<div id="credit">

						<div class="information_content">
							<div class="content_name">カード番号</div>
							<div class="element">
								<form class="card_name">
									<input type="password">
									<input type="password" class="card">
									<input type="password" class="card">
									<input type="password" class="card">
								</form>
							</div>
						</div><!-- /information_content -->
						<p class="information_border"></p>

						<div class="information_content">
							<div class="content_name">有効期限</div>
							<div class="element">
								<form class="text_name">
									<input type="text">
									<input type="text" class="text">
								</form>
							</div>
						</div><!-- /information_content -->
						<p class="information_border"></p>
						
						<div class="information_content">
							<div class="content_name">お名前</div>
							<div class="element">
								<form class="text_name">
									<input type="text">
									<input type="text" class="text">
								</form>
							</div>
						</div><!-- /information_content -->
						
						<p class="information_border"></p>
						<a href="#"><p id="next">次へ</p></a>

					</div><!-- /credit -->
				</div><!-- /contentscover -->
				</div><!-- /contentszoon -->
				<div id="bannerzone">
					<!-- サイドコンテンツ置くとこ 横幅236px -->バナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナー
				</div>

			</article>
			<!-- ↑メインのコンテンツを置くとこ↑ -->

		</div>
		<p class="clearfix"></p>

	<?php include("footer.php"); ?>

	</body>

</html>