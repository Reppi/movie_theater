<?php

?>
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
<script type="javascript">
	function selectSheet(){
		
	}
</script>
	</head>

	<body>

	<?php include("header.php"); ?>

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
							<p onclick="selectSheet(a8)" class="num">8</p>
							<p onclick="selectSheet(a7)" class="num">7</p>
							<p onclick="selectSheet(a6)" class="num">6</p>
							<p onclick="selectSheet(a5)" class="num">5</p>
							<p onclick="selectSheet(a4)" class="num">4</p>
						</div>
						<div><!-- 数字の各列 -->
							<p onclick="selectSheet(b8)" class="num">8</p>
							<p onclick="selectSheet(b7)" class="num">7</p>
							<p onclick="selectSheet(b6)" class="num">6</p>
							<p onclick="selectSheet(b5)" class="num reservation">5</p><!-- php用のbackground -->
							<p onclick="selectSheet(b4)" class="num recommended">4</p>
						</div>
						<div><!-- 数字の各列 -->
							<p onclick="selectSheet(c8)" class="num">8</p>
							<p onclick="selectSheet(c7)" class="num">7</p>
							<p onclick="selectSheet(c6)" class="num">6</p>
							<p onclick="selectSheet(c5)" class="num">5</p>
							<p onclick="selectSheet(c4)" class="num">4</p>
						</div>
						<div><!-- 数字の各列 -->
							<p onclick="selectSheet(d8)" class="num">8</p>
							<p onclick="selectSheet(d7)" class="num">7</p>
							<p onclick="selectSheet(d6)" class="num">6</p>
							<p onclick="selectSheet(d5)" class="num">5</p>
							<p onclick="selectSheet(d4)" class="num">4</p>
						</div>
						<div><!-- 数字の各列 -->
							<p onclick="selectSheet(e8)" class="num">8</p>
							<p onclick="selectSheet(e7)" class="num">7</p>
							<p onclick="selectSheet(e6)" class="num">6</p>
							<p onclick="selectSheet(e5)" class="num">5</p>
							<p onclick="selectSheet(e4)" class="num">4</p>
						</div>
						<div><!-- 数字の各列 -->
							<p onclick="selectSheet(f8)" class="num">8</p>
							<p onclick="selectSheet(f7)" class="num">7</p>
							<p onclick="selectSheet(f6)" class="num">6</p>
							<p onclick="selectSheet(f5)" class="num">5</p>
							<p onclick="selectSheet(f4)" class="num">4</p>
						</div>
					</div><!-- /sheet_num_left -->

					<div id="sheet_num_right"><!-- シートの数字部分 -->
						<div><!-- 数字の各列 -->
							<p onclick="selectSheet(a3)" class="num">3</p>
							<p onclick="selectSheet(a2)" class="num">2</p>
							<p onclick="selectSheet(a1)" class="num">1</p>
						</div>
						<div><!-- 数字の各列 -->
							<p onclick="selectSheet(b3)" class="num">3</p>
							<p onclick="selectSheet(b2)" class="num">2</p>
							<p onclick="selectSheet(b1)" class="num">1</p>
						</div>
						<div><!-- 数字の各列 -->
							<p onclick="selectSheet(c3)" class="num">3</p>
							<p onclick="selectSheet(c2)" class="num">2</p>
							<p onclick="selectSheet(c1)" class="num">1</p>
						</div>
						<div><!-- 数字の各列 -->
							<p onclick="selectSheet(d3)" class="num">3</p>
							<p onclick="selectSheet(d2)" class="num">2</p>
							<p onclick="selectSheet(d1)" class="num">1</p>
						</div>
						<div><!-- 数字の各列 -->
							<p onclick="selectSheet(e3)" class="num">3</p>
							<p onclick="selectSheet(e2)" class="num">2</p>
							<p onclick="selectSheet(e1)" class="num">1</p>
						</div>
						<div><!-- 数字の各列 -->
							<p onclick="selectSheet(f3)" class="num">3</p>
							<p onclick="selectSheet(f2)" class="num">2</p>
							<p onclick="selectSheet(f1)" class="num">1</p>
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

	<?php include("footer.php"); ?>

	</body>

</html>