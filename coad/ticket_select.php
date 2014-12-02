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

		<title>チケット選択 | HALシネマ</title>

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
					<h2 class="clearfix">チケット選択</h2>
					<div id="contentscover">
					<h3>会員登録をお済ですか？</h3>

			<div id="button">
				<p id="member_read">会員登録を既にお済みの方は【会員】のボタン。まだのお客様は、【非会員】のボタンを押してください。</p>
				<div id="member_button">
					<a href="#"><p class="button">会員</p></a>
					<a href="#"><p class="button" id="right">非会員</p></a>
					<p class="clearfix"></p>
				</div>
			</div>

			<div id="sheet_ticket">
				<h3>現在選択中の座席</h3>
					<div class="select_width">
						<p class="select_sheet_box"></p>
						<p class="select_sheet_num">C-3</p>
					</div>
					<div class="select_width">
						<p class="select_sheet_box"></p>
						<p class="select_sheet_num">C-4</p>
					</div>
					<p class="clearfix"></p>
			</div><!-- /sheet_ticket -->

			<p class="clearfix"></p>

			
			<div id="ticket_select">
				<h3>チケット選択</h3>
			</div>
			<div id="select">
				<div class="select_content">
					<p class="select_name">一般</p>
					<p class="price">1800円</p>
					<p class="select_sum">
						<form><input type="number">枚</form>
					</p>
				</div>

				<p class="select_border"></p>

				<div class="select_content">
					<p class="select_name">大学生</p>
					<p class="price">1500円</p>
					<p class="select_sum">
						<form><input type="number">枚</form>
					</p>
					<pclass="clearfix"></p>
				</div>

				<p class="select_border"></p>

				<div class="select_content">
					<p class="select_name">高校生</p>
					<p class="price">1300円</p>
					<p class="select_sum">
						<form><input type="number">枚</form>
					</p>
					<pclass="clearfix"></p>
				</div>

				<p class="select_border"></p>

				<div class="select_content">
					<p class="select_name">中学生</p>
					<p class="price">1200円</p>
					<p class="select_sum">
						<form><input type="number">枚</form>
					</p>
					<pclass="clearfix"></p>
				</div>

				<p class="select_border"></p>

				<div class="select_content">
					<p class="select_name">シニア</p>
					<p class="price">1000円</p>
					<p class="select_sum">
						<form><input type="number">枚</form>
					</p>
					<pclass="clearfix"></p>
				</div>

				<p class="select_border"></p>

				<div class="select_content">
					<p class="select_name">カップル</p>
					<p class="price">1000円</p>
					<p class="select_sum">
						<form><input type="number">枚</form>
					</p>
					<pclass="clearfix"></p>
				</div>

				<p class="select_border"></p>
				
			</div>
			
			<div id="ticket_rest">
				<p class="float_left" id="rest">残りチケット数</p>
				<p class="float_left" id="rest_num">2枚</p>
				<p class="float_left">|</p>
				<p class="float_left" id="sum">合計</p>
				<p class="float_left" id="money">1000円</p>
			</div>
			<p class="clearfix"></p>

			<a href="#"><p id="next">次へ</p></a>


			</div><!-- /contentscover -->
			</div><!-- /contentszoon -->

				<div id="bannerzone">
					<!-- サイドコンテンツ置くとこ 横幅236px -->バナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナー
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