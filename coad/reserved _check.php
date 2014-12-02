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
		<link rel="stylesheet" href="css/reserved _check.css">
		<!-- ↑ここにはそのページ用のcss↑ -->

		<title>ご予約情報確認 | HALシネマ</title>

	</head>

	<body>

	<?php include("header.php"); ?>

		<div id="wrapper" class="clearfix">

			<!-- ↓メインのコンテンツを置くとこ↓ -->
			<article>

				<div id="contentszone">
					<h2 class="clearfix">予約確認画面</h2>
					<div id="contentscover">
						<h3>ご予約チケット情報</h3>

						<p class="clearfix"></p>

						<div id="select">
							<div class="select_content">
								<p class="select_name">上映日</p>
								<p class="space">　</p>
								<p class="select_sum">
									XXXX年 XX月 XX日<!--XX:XX～XX:XX-->
								</p>
							</div>

							<p class="select_border"></p>

							<div class="select_content">
								<p class="select_name">作品名</p>
								<p class="space">　</p>
								<p class="select_sum">
									XXXXXXXXXXXXXX
								</p>
								<pclass="clearfix"></p>
							</div>

							<p class="select_border"></p>

							<div class="select_content">
								<p class="select_name">座席</p>
								<p class="space">　</p>
								<p class="select_sum">
									X-XX
								</p>
								<pclass="clearfix"></p>
							</div>

							<p class="select_border"></p>

							<div class="select_content">
								<p class="select_name">チケット</p>
								<p class="space">　</p>
								<p class="select_sum">
									XXXXXXXXXXXXXXX
								</p>
								<pclass="clearfix"></p>
							</div>

							<p class="select_border"></p>

							<div class="select_content">
								<p class="select_name">フード注文予約</p>
								<p class="space">　</p>
								<p class="select_sum">
									XXXXXX,XXXX(X)
								</p>
								<pclass="clearfix"></p>
							</div>

							<p class="select_border"></p>

							<div class="select_content">
								<p class="select_name">合計金額</p>
								<p class="space">　</p>
								<p class="select_sum">
									XXXX円
								</p>
								<pclass="clearfix"></p>
							</div>

						<p class="select_border"></p>

						</div>
						<p class="clearfix"></p>

						<p class="next" id="ticketnext">チケット予約へ戻る</p>


					<h3>お客様情報</h3>

					<div id="select">
						<div class="select_content">
							<p class="select_name">お名前</p>
							<p class="space">　</p>
							<p class="select_sum">
								XXXX XXXX
							</p>
						</div>

						<p class="select_border"></p>

						<div class="select_content">
							<p class="select_name">電話番号</p>
							<p class="space">　</p>
							<p class="select_sum">
								XXX-XXXX-XXXX
							</p>
							<pclass="clearfix"></p>
						</div>

						<p class="select_border"></p>

						<div class="select_content">
							<p class="select_name">メールアドレス</p>
							<p class="space">　</p>
							<p class="select_sum">
								XXXXXXXX@XXXX.XX.XX
							</p>
							<pclass="clearfix"></p>
						</div>

						<p class="select_border"></p>

						<div class="select_content">
							<p class="select_name">住所</p>
							<p class="space">　</p>
							<p class="select_sum">
								XXXXXXXXXXXXXX　XX-XX-XXXX
							</p>
							<pclass="clearfix"></p>
						</div>

						<p class="select_border"></p>

					</div>
					<p class="clearfix"></p>

					<p class="next" id="usernext">お客様情報入力へ戻る</p>


					<h3>お客様情報</h3>

					<div id="select">
						<div class="select_content">
							<p class="select_name">カード番号</p>
							<p class="space">　</p>
							<p class="select_sum">
								＊＊＊＊-＊＊＊＊-＊＊＊＊-XXXX
							</p>
						</div>

						<p class="select_border"></p>

						<div class="select_content">
							<p class="select_name">有効期限</p>
							<p class="space">　</p>
							<p class="select_sum">
								XX月 XXXX年
							</p>
							<pclass="clearfix"></p>
						</div>

						<p class="select_border"></p>

						<div class="select_content">
							<p class="select_name">お名前</p>
							<p class="space">　</p>
							<p class="select_sum">
								XXXX XXXX
							</p>
							<pclass="clearfix"></p>
						</div>

						<p class="select_border"></p>

						<div class="select_content">
							<p class="select_name">セキュリティコード</p>
							<p class="space">　</p>
							<p class="select_sum">
								XXXX
							</p>
							<pclass="clearfix"></p>
						</div>

						<p class="select_border"></p>

						</div>

						<p class="clearfix"></p>

						<p class="next" id="cardnext">カード情報入力へ戻る</p>

						<p class="select_border"></p>

						</div>

						<p class="clearfix"></p>

						<p id="lastnext">次へ</p>

						</div>


						<div id="bannerzone">
							<!-- サイドコンテンツ置くとこ 横幅236px -->バナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナー
						</div>


					</div>

				</div>

			</article>
			<!-- ↑メインのコンテンツを置くとこ↑ -->

		</div>

	<?php include("footer.php"); ?>

	</body>

</html>