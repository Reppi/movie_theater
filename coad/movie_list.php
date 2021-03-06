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
		<link rel="stylesheet" href="css/movie_list.css">
		<!-- ↑ここにはそのページ用のcss↑ -->

		<script src="js/jquery.min.js"></script>

		<title>公開中映画一覧 | HALシネマ</title>

		<?php
			// DB接続設定
			$connect = mysqli_connect("localhost","user","user");
			mysqli_select_db($connect,"hal_cinema");
			mysqli_set_charset($connect,"utf8");
			// DB接続設定終わり

			//タイトル・サムネイル画像・作品詳細・俳優・監督情報を取得
			$sql = "SELECT movie_title as title,thumbnail as thm,movie_detail as det,actor as act,director as dir,start_day as sday FROM movie ORDER BY movie_id DESC";
			$result = mysqli_query($connect,$sql);
		?>

	</head>

	<body>

		<?php include("header.php"); ?>

		<div id="wrapper" class="clearfix">

			<!-- ↓メインのコンテンツを置くとこ↓ -->
			<article>

				<div id="contentszone">
					<h2 class="clearfix">公開中の映画一覧</h2>
					<div id="contentszonecover">
						<?php
							error_reporting(E_ALL & ~E_NOTICE);
							//映画情報を入れたdivを映画の総数だけ生成
							while( $data = mysqli_fetch_array( $result ) )
							{
								if( $data["sday"] <= date(Ynj))
								{
									echo "<a href='movie-detail.php?title=".$data["title"]."&thm=".$data["thm"]."&det=".$data["det"]."&act=".$data["act"]."&dir=".$data["dir"]."'><div class='movielist_box'>";
									echo "<div class='movielist_content'>";
									echo "<div class='movielist_thumbnail'><img src='images/thumbnail/".$data["thm"]."'></div>";
									echo "<div class='movielist_details'>";
									echo "<h3 class='movielist_title'>".$data["title"]."</h3>";
									echo "<p class='movielist_text'>".$data["det"]."</p>";
									echo "</div>";
									echo "</div>";
									echo "</div></a>";
								}
							}
						?>

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
