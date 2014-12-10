<?php

$selectSheet = "";
if ( !isset($_POST['selectSheet']) ) {
	header("Location: ./sheet_select.php");
	exit;
}
$selectSheet = $_POST['selectSheet'];
// echo $selectSheet;

$selectSheetArray = Array();

$selectSheetArray = explode(",",$selectSheet);



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
		<link rel="stylesheet" href="css/ticket.css">
		<!-- ↑ここにはそのページ用のcss↑ -->

		<title>チケット選択 | HALシネマ</title>

	</head>

	<body>

	<?php include("header.php"); ?>

		<div id="wrapper" class="clearfix">

			<!-- ↓メインのコンテンツを置くとこ↓ -->
			<article>
			<form action="" method="post">
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
<?php
foreach ($selectSheetArray as $value) {
	$rowVal = strtoupper(substr($value,0,1));
	$colVal = substr($value,1,1);
?>
					<div class="select_width">
						<p class="select_sheet_box"></p>
						<p class="select_sheet_num"><?php echo $rowVal; ?>-<?php echo $colVal; ?></p>
					</div>
<?
} // /foreach
?>
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
						<input type="number">枚
					</p>
				</div>

				<p class="select_border"></p>

				<div class="select_content">
					<p class="select_name">大学生</p>
					<p class="price">1500円</p>
					<p class="select_sum">
						<input type="number">枚
					</p>
					<pclass="clearfix"></p>
				</div>

				<p class="select_border"></p>

				<div class="select_content">
					<p class="select_name">高校生</p>
					<p class="price">1300円</p>
					<p class="select_sum">
						<input type="number">枚
					</p>
					<pclass="clearfix"></p>
				</div>

				<p class="select_border"></p>

				<div class="select_content">
					<p class="select_name">中学生</p>
					<p class="price">1200円</p>
					<p class="select_sum">
						<input type="number">枚
					</p>
					<pclass="clearfix"></p>
				</div>

				<p class="select_border"></p>

				<div class="select_content">
					<p class="select_name">シニア</p>
					<p class="price">1000円</p>
					<p class="select_sum">
						<input type="number">枚
					</p>
					<pclass="clearfix"></p>
				</div>

				<p class="select_border"></p>

				<div class="select_content">
					<p class="select_name">カップル</p>
					<p class="price">1000円</p>
					<p class="select_sum">
						<input type="number">枚
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
			<input id="next" type="submit" value="次へ">

			</form>
			</div><!-- /contentscover -->
			</div><!-- /contentszoon -->

				<div id="bannerzone">
					<!-- サイドコンテンツ置くとこ 横幅236px -->バナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナー
				</div>

			</article>
			<!-- ↑メインのコンテンツを置くとこ↑ -->

		</div>

	<?php include("footer.php"); ?>

	</body>

</html>