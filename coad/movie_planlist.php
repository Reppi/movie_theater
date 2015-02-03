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
		<link rel="stylesheet" href="css/movie_list.css">
		<!-- ↑ここにはそのページ用のcss↑ -->

		<title>映画情報一覧 | HALシネマ</title>

	</head>

	<body>

	<?php include("header.php"); ?>

		<div id="wrapper" class="clearfix">

			<!-- ↓メインのコンテンツを置くとこ↓ -->
			<article>

				<div id="contentszone">
					<h2 class="clearfix">映画一覧</h2>
					<div id="contentszonecover">
						<a href="movie_planlist_detail.php">
						<div class="movielist_box">
							<div class="movielist_content">
								<div class="movielist_thumbnail"></div>
								<div class="movielist_details">
									<h3 class="movielist_title">映画タイトル</h3>
									<p class="movielist_text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキ</p>
								</div>
							</div>
							</a>
						</div>

						<div class="movielist_box">
							<a href="movie_planlist_detail.php">
							<div class="movielist_content">
								<div class="movielist_thumbnail"></div>
								<div class="movielist_details">
									<h3 class="movielist_title">映画タイトル</h3>
									<p class="movielist_text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキ</p>
								</div>
							</div>
							</a>
						</div>

						<div class="movielist_box">
							<a href="movie_planlist_detail.php">
							<div class="movielist_content">
								<div class="movielist_thumbnail"></div>
								<div class="movielist_details">
									<h3 class="movielist_title">映画タイトル</h3>
									<p class="movielist_text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキ</p>
								</div>
							</div>
							</a>
						</div>

						<div class="movielist_box">
							<a href="movie_planlist_detail.php">
							<div class="movielist_content">
								<div class="movielist_thumbnail"></div>
								<div class="movielist_details">
									<h3 class="movielist_title">映画タイトル</h3>
									<p class="movielist_text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキ</p>
								</div>
							</div>
							</a>
						</div>
						<!--映画一覧のボタン-->
						<p id="next">過去の作品</p>
					</div>
				</div>

				<div id="bannerzone">
					<!-- サイドコンテンツ置くとこ 横幅236px -->バナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナー
				</div>

			</article>
			<!-- ↑メインのコンテンツを置くとこ↑ -->

		</div>

	<?php include("footer.php"); ?>

	</body>

</html>
