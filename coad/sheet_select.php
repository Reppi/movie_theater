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
		<link rel="stylesheet" href="css/sheet.css">
		<!-- ↑ここにはそのページ用のcss↑ -->

		<title>座席選択 | HALシネマ</title>

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

		<div id="wrapper" class="clearfix">

			<!-- ↓メインのコンテンツを置くとこ↓ -->
			<article>

				<div id="contentszone">
					<h2 class="clearfix">座席選択</h2>
					<div id="contentscover">
					<div id="screen">
					<p id="screen_top"><img src="images/screen.png"></p>
					
					<div id="sheet_line"><!-- シートの英語部分 -->
						<p class="line">a</p>
						<p class="line">b</p>
						<p class="line">c</p>
						<p class="line">d</p>
						<p class="line">e</p>
						<p class="line">f</p>
					</div><!-- /sheet_line -->

					<div id="sheet_num_left"><!-- シートの数字部分 -->
						<div><!-- 数字の各列 -->
							<p class="num">8</p>
							<p class="num">7</p>
							<p class="num">6</p>
							<p class="num">5</p>
							<p class="num">4</p>
						</div>
						<div><!-- 数字の各列 -->
							<p class="num">8</p>
							<p class="num">7</p>
							<p class="num">6</p>
							<p class="num reservation">5</p><!-- php用のbackground -->
							<p class="num recommended">4</p>
						</div>
						<div><!-- 数字の各列 -->
							<p class="num">8</p>
							<p class="num">7</p>
							<p class="num">6</p>
							<p class="num">5</p>
							<p class="num">4</p>
						</div>
						<div><!-- 数字の各列 -->
							<p class="num">8</p>
							<p class="num">7</p>
							<p class="num">6</p>
							<p class="num">5</p>
							<p class="num">4</p>
						</div>
						<div><!-- 数字の各列 -->
							<p class="num">8</p>
							<p class="num">7</p>
							<p class="num">6</p>
							<p class="num">5</p>
							<p class="num">4</p>
						</div>
						<div><!-- 数字の各列 -->
							<p class="num">8</p>
							<p class="num">7</p>
							<p class="num">6</p>
							<p class="num">5</p>
							<p class="num">4</p>
						</div>
					</div><!-- /sheet_num_left -->

					<div id="sheet_num_right"><!-- シートの数字部分 -->
						<div><!-- 数字の各列 -->
							<p class="num">3</p>
							<p class="num">2</p>
							<p class="num">1</p>
						</div>
						<div><!-- 数字の各列 -->
							<p class="num">3</p>
							<p class="num">2</p>
							<p class="num">1</p>
						</div>
						<div><!-- 数字の各列 -->
							<p class="num">3</p>
							<p class="num">2</p>
							<p class="num">1</p>
						</div>
						<div><!-- 数字の各列 -->
							<p class="num">3</p>
							<p class="num">2</p>
							<p class="num">1</p>
						</div>
						<div><!-- 数字の各列 -->
							<p class="num">3</p>
							<p class="num">2</p>
							<p class="num">1</p>
						</div>
						<div><!-- 数字の各列 -->
							<p class="num">3</p>
							<p class="num">2</p>
							<p class="num">1</p>
						</div>
					</div><!-- /sheet_num_right -->
					<p class="clear"></p><!-- float解除 -->

					<div class="support">
						<p class="recommended_support"></p>
						<p class="recommended_sheet">おすすめ座席</p>
						<p class="reservation_support"></p>
						<p class="reservation_sheet">予約済み</p>
					</div><!-- /support -->
					<p class="clear"></p>

				</div><!-- /screen -->

				<div id="slice"><h3>選択中の座席</h3></div>

				<div id="select_sheet">
					<div class="select_width">
						<p class="select_sheet_box"></p>
						<p class="select_sheet_num">C-3</p>
					</div>
					<div class="select_width">
						<p class="select_sheet_box"></p>
						<p class="select_sheet_num">C-4</p>
					</div>
					<p class="clearfix"></p>
				</div><!-- /select_sheet -->

				

				<p id="ticket">チケット選択</p>
			</div>
			</div><!-- /content_zoon -->

		<!-- ↓サイドメニュー（バナーのとこ）↓ -->
		<article>
			
				<div id="bannerzone">
					<div class="search">
						<form action="#">
							<input type="text" size="15">
							<input type="submit" value="検索">
						</form>
					</div>
					<!-- サイドコンテンツ置くとこ 横幅220px 縦幅84px -->バナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナー
				</div>

			</article>
			<!-- ↑メインのコンテンツを置くとこ↑ -->

		</div>

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