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
		<link rel="stylesheet" href="css/access.css">
		<!-- ↑ここにはそのページ用のcss↑ -->

		<title>アクセス | HALシネマ</title>

	</head>

	<body>

	<?php include("header.php"); ?>

		<div id="wrapper" class="clearfix">

			<!-- ↓メインのコンテンツを置くとこ↓ -->
			<article>

				<div id="contentszone">
					<h2 class="clearfix">アクセス</h2>
					<div id="contentscover"><!-- コンテンツ横の余白16pxを作るための箱 -->
						<div id="mapzone">
							googlemapが入ります。
						</div>
						<div id="accessdatazone">
							<h3>HALシネマ</h3>
							<table>
								<tr>
									<td>住所</td>
									<td>〒160-0023 東京都新宿区西新宿１－７－３</td>
								</tr>
								<tr>
									<td>TEL</td>
									<td>03-3344-1010</td>
								</tr>
								<tr>
									<td>新宿駅西口より徒歩５分</td>
								</tr>
							</table>
						</div>
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
