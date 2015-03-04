<?php
require_once("header-meta.php");
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
		<link rel="stylesheet" href="css/index.css">
		<!-- ↑ここにはそのページ用のcss↑ -->

		<title>トップページ | HALシネマ</title>

	</head>

	<body>

		<?php include("header.php"); ?>

		<div id="wrapper" class="clearfix">

			<!-- ↓メインのコンテンツを置くとこ↓ -->
			<article>

				<!-- <div id="mainvisual"></div> -->
				<div>
					<p>
						<a href="#top">
					    <img src="./images/topimage.png" alt="" />
					  </a>
					</p>
				</div>

				<div class="contents">
					<div class="samune circle"><div class="inner_circle" style="background-image:url('./images/topcol1.jpg');"></div></div>
					<h4 id="cinema_information">館内情報</h4>
					<p>広々とした場内と大スクリーンの劇場。<br>フロアには映画のポスターやちらしがたくさん。</p>
				</div>
				<div class="contents">
					<div class="samune circle"><div class="inner_circle" style="background-image:url('./images/topcol2.jpg');"></div></div>
					<h4 id="put_movie"><a href="movie_list.php">上映中映画</a></h4>
					<p>現在上映中の映画と今週公開予定の映画 193作品を紹介</p>
				</div>
				<div class="contents">
					<div class="samune circle"><div class="inner_circle" style="background-image:url('./images/topcol3.jpg');"></div></div>
					<h4 id="movie_ranking"><a href="ranking.php">作品ランキング</a></h4>
					<p>上映中作品の週間ランキングをご紹介！毎日更新されるので是非ご覧ください。</p>
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
				<?php include("bannerzone.php"); ?>
			</div>

		</div>

	<?php include("footer.php"); ?>

	</body>

</html>
