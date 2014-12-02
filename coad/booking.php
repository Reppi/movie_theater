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

		<!-- ↓グローバルメニュー↓ -->
		<header id="header">

			<!-- ↓トップリンクナビがあるとこ↓ -->
			<nav id="toplinkbar">

				<a href="#"><img class="logo" src="images/logo.jpg"></a>
				<a href="#"><img class="member_botton" src="images/member_botton.png"></a>

				<div id="toplinkbar_inner">
					<ul>
						<a href="#"><li id="toplinkbar_menu1">サイトマップ</li></a>
						<a href="#"><li id="toplinkbar_menu2">よくあるご質問</li></a>
						<a href="#"><li>お問い合わせ</li></a>
					</ul>
				</div>

			</nav>
			<!-- ↑トップリンクナビがあるとこ↑ -->

			<!-- ↓グローバルメニューがあるとこ↓ -->
			<nav id="global">

				<div id="global_inner">

					<ul>
						<a href="#"><li id="global_menu1">映画スケジュール</li></a>
						<a href="#"><li id="global_menu2">上映予定作品</li></a>
						<a href="#"><li id="global_menu3">イベント情報</li></a>
						<a href="#"><li id="global_menu4">館内情報</li></a>
						<a href="#"><li id="global_menu5">上映ランキング</li></a>
						<a href="#"><li>アクセス</li></a>
					</ul>

				</div>

			</nav>
			<!-- ↑グローバルメニューがあるとこ↑ -->

		</header>
		<!-- ↑グローバルメニュー↑ -->

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

		<!-- ↓フッターおくとこ↓ -->
		<footer id="footer">

			<div id="fotter_inner">

				<div class="fotter_block">
					banner置くってさ
				</div>

				<div class="fotter_block">

					<ul>
						<li>映画スケジュール</li>
						<li>上映予定作品</li>
						<li>イベント情報</li>
						<li>館内情報</li>
						<li>上映スケジュール</li>
						<li>アクセス</li>
					</ul>

				</div>

				<div id="last_block" class="fotter_block">

					<ul>
						<li>新着情報</li>
						<li>作品情報</li>
						<li>よくあるご質問</li>
						<li>お問い合わせ</li>
					</ul>

				</div>

			</div>

		</footer>
		<!-- ↑フッターおくとこ -->

	</body>

</html>