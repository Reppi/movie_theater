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

		<title>公開予定映画一覧 | HALシネマ</title>

		<?php
			// DB接続設定
			$connect = mysqli_connect("localhost","user","user");
			mysqli_select_db($connect,"hal_cinema");
			mysqli_set_charset($connect,"utf8");
			// DB接続設定終わり

			//タイトル・サムネイル画像・作品詳細・俳優・監督情報を取得
			$sql = "SELECT movie_title as title,thumbnail as thm,movie_detail as det,actor as act,director as dir,start_day as sday, end_day as eday FROM movie ORDER BY movie_id DESC";
			$result = mysqli_query($connect,$sql);
		?>
	</head>

	<body>

	<?php include("header.php"); ?>

		<div id="wrapper" class="clearfix">

			<!-- ↓メインのコンテンツを置くとこ↓ -->
			<article>

				<div id="contentszone">
					<h2 class="clearfix">映画一覧</h2>
					<div id="contentszonecover">
						<?php
							error_reporting(E_ALL & ~E_NOTICE);
							//映画情報を入れたdivを映画の総数だけ生成
							while( $data = mysqli_fetch_array( $result ) )
							{
								if( $data["sday"] <= date("Y-m-d H:i:s") || date("Y-m-d H:i:s") >= $data["eday"] )
								{
									echo "<a href='movie_planlist_detail.php?title=".$data["title"]."&thm=".$data["thm"]."&det=".$data["det"]."&act=".$data["act"]."&dir=".$data["dir"]."'><div class='movielist_box'>";
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
						<p id="next">公開中作品一覧へ</p>
					</div>
				</div>

				<div id="bannerzone">
					<?php include("bannerzone.php"); ?>
				</div>

			</article>
			<!-- ↑メインのコンテンツを置くとこ↑ -->

		</div>

	<?php include("footer.php"); ?>

	</body>

</html>
