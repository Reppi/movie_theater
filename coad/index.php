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
		<link rel="stylesheet" href="css/index.css">
		<!-- ↑ここにはそのページ用のcss↑ -->

		<title>トップページ | HALシネマ</title>

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
						<a href="common_question.php"><li id="toplinkbar_menu2">よくあるご質問</li></a>
						<a href="contact.php"><li>お問い合わせ</li></a>
					</ul>
				</div>

			</nav>
			<!-- ↑トップリンクナビがあるとこ↑ -->

			<!-- ↓グローバルメニューがあるとこ↓ -->
			<nav id="global">

				<div id="global_inner">

					<ul>
						<a href="schedule.php"><li id="global_menu1">上映スケジュール</li></a>
						<a href="movie_planlist.php"><li id="global_menu2">上映予定作品</li></a>
						<a href="event_planlist.php"><li id="global_menu3">イベント情報</li></a>
						<a href="institution.php"><li id="global_menu4">館内情報</li></a>
						<a href="ranking.php"><li id="global_menu5">上映ランキング</li></a>
						<a href="access.php"><li>アクセス</li></a>
					</ul>

				</div>

			</nav>
			<!-- ↑グローバルメニューがあるとこ↑ -->

		</header>
		<!-- ↑グローバルメニュー↑ -->

		<div id="wrapper" class="clearfix">

			<!-- ↓メインのコンテンツを置くとこ↓ -->
			<article>

				<div id="mainvisual"></div>

				<div class="contents">
					<div class="samune circle"><div class="inner_circle"></div></div>
					<h4 id="cinema_information">館内情報</h4>
					<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
				</div>
				<div class="contents">
					<div class="samune circle"><div class="inner_circle"></div></div>
					<h4 id="put_movie"><a href="movie_list.php">上映中映画</a></h4>
					<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
				</div>
				<div class="contents">
					<div class="samune circle"><div class="inner_circle"></div></div>
					<h4 id="movie_ranking"><a href="ranking.php">作品ランキング</a></h4>
					<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
				</div>

				<div id="contentszone">
					<h2 class="clearfix">新着情報</h2>
					<dl>
						<dt>2014.12.24</dt>
						<dd>hogehogeパラダイス本日公開！</dd>
						<dt>2014.12.24</dt>
						<dd>ぬるぽ地獄本日公開！</dd>
						<dt>2014.12.24</dt>
						<dd>ZONEof401-未開の地-本日公開！</dd>
					</dl>
				</div>

			</article>
			<!-- ↑メインのコンテンツを置くとこ↑ -->

			<div id="bannerzone">
				バナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナー
			</div>

		</div>

		<!-- ↓フッターおくとこ↓ -->
		<footer id="footer" class="clearfix">

			<div id="fotter_inner">

				<div class="fotter_block">
					banner置くってさ
				</div>

				<div class="fotter_block">

					<ul>
						<li><a href="schedule.php">映画スケジュール</a></li>
						<li><a href="movie_planlist.php">上映予定作品</a></li>
						<li><a href="event_planlist.php">イベント情報</a></li>
						<li><a href="institution.php">館内情報</a></li>
						<li><a href="movie_list.php">上映スケジュール</a></li>
						<li><a href="access.php">アクセス</a></li>
					</ul>

				</div>

				<div id="last_block" class="fotter_block">

					<ul>
						<li><a href="movie_list.php">作品情報</a></li>
						<li><a href="common_question.php">よくあるご質問</a></li>
						<li><a href="contact.php">お問い合わせ</a></li>
					</ul>

				</div>

			</div>

		</footer>
		<!-- ↑フッターおくとこ -->

	</body>

</html>