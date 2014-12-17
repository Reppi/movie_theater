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
		<link rel="stylesheet" href="css/event_list.css">
		<!-- ↑ここにはそのページ用のcss↑ -->

		<title>イベント一覧 | HALシネマ</title>

		<?php
			// DB接続設定
			$connect = mysqli_connect("localhost","root","");
			mysqli_select_db($connect,"hal_cinema");
			mysqli_set_charset($connect,"utf8");
			// DB接続設定終わり

			//タイトル・サムネイル画像・作品詳細・俳優・監督情報を取得
			$sql = "SELECT event_title as title,event_thumbnail as thm,event_detail as det,event_day as day FROM event ORDER BY event_id DESC";
			$result = mysqli_query($connect,$sql);
		?>

	</head>

	<body>

	<?php include("header.php"); ?>

		<div id="wrapper" class="clearfix">

			<!-- ↓メインのコンテンツを置くとこ↓ -->
			<article>

				<div id="contentszone">
					<h2 class="clearfix">イベント一覧</h2>
					<div id="contentscover">
						<?php
							error_reporting(E_ALL & ~E_NOTICE);
							//映画情報を入れたdivを映画の総数だけ生成
							while( $data = mysqli_fetch_array( $result ) )
							{
								if( $data["day"] >= date(Ynj) )
								{
									echo "<a href='event_detail.php?title=".$data["title"]."&thm=".$data["thm"]."&det=".$data["det"]."&day=".$data["day"]."'><div class='eventlist_box'>";
									echo "<div class='eventlist_content'>";
									echo "<div class='eventlist_thumbnail'><img src='images/eventthm/".$data["thm"]."'></div>";
									echo "<div class='eventlist_details'>";
									echo "<h3 class='eventlist_title'>".$data["title"]."</h3>";
									echo "<p class='eventlist_text'>".$data["det"]."</p>";
									echo "</div>";
									echo "</div>";
									echo "</div></a>";
								}
							}
						?>

						<p id="next">過去のイベント</p>
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