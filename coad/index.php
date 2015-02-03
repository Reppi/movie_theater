<?php
require_once("header-meta.php");
?>
﻿<!-- HTML5で開発します -->
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

		<?php include("header.php"); ?>

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

	<?php include("footer.php"); ?>

	</body>

</html>
