<?php
require_once("header-meta.php");
?>
﻿<?php
$movieId = "";
$ticketStartTime = "";
$ticketEndTime = "";

if(isset($_POST['movie_id'])){
  $movieId = $_POST['movie_id'];
}


if(isset($_POST['ticket_start_time'])){
  $ticketStartTime = $_POST['ticket_start_time'];
}

if(isset($_POST['ticket_end_time'])){
  $ticketEndTime = $_POST['ticket_end_time'];
}
?>

<?php
$selectSheet = "";
$ticketMaxNum = 0;
if ( isset($_POST['selectSheet']) ) {
	$selectSheet = $_POST['selectSheet'];
}
$selectSheetArray = Array();
$selectSheetArray = explode(",",$selectSheet);
$ticketMaxNum = count($selectSheetArray);
?>
<!DOCTYPE html>
<html lang="ja">
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
		<script type="text/javascript" src="./js/lib/jquery-1.11.1.min.js"></script>
		<script type="text/javascript">
		var memberSelectFlg = false;
		// 一般
		const TICKET_1 = 0;
		const TICKET_1_PRICE = 1800;
		// 大学生
		const TICKET_2 = 1;
		const TICKET_2_PRICE = 1500;
		// 高校生
		const TICKET_3 = 2;
		const TICKET_3_PRICE = 1300;
		// 中学生
		const TICKET_4 = 3;
		const TICKET_4_PRICE = 1200;
		// シニア
		const TICKET_5 = 4;
		const TICKET_5_PRICE = 1000;
		// カップル
		const TICKET_6 = 5;
		const TICKET_6_PRICE = 1000;

		$(function(){

			const TICKET_MAX_NUM = $("#ticketMaxNum").text();
			$(".selectNumber").change(function(){
				console.log("help!");
				var counter = 0;
				var sumCounter = 0;
				$(".selectNumber").each(function(i){
					var addNum = Number($(this).val());
					counter += addNum;
					if ( addNum > 0 ) {
						switch(i){
							case TICKET_1 :
								sumCounter += Number(addNum * TICKET_1_PRICE);
								break;
							case TICKET_2 :
								sumCounter += Number(addNum * TICKET_2_PRICE);
								break;
							case TICKET_3 :
								sumCounter += Number(addNum * TICKET_3_PRICE);
								break;
							case TICKET_4 :
								sumCounter += Number(addNum * TICKET_4_PRICE);
								break;
							case TICKET_5 :
								sumCounter += Number(addNum * TICKET_5_PRICE);
								break;
							case TICKET_6 :
								sumCounter += Number(addNum * TICKET_6_PRICE);
								break;
						}
					}
					$("#sumNum").text(sumCounter);
					// console.log("SUM: "+sumCounter);
				});

				$("#counterNum").html(counter);
				if(counter > TICKET_MAX_NUM) {
					alert("選択された席より多くチケットを選択しています。");
					$("#changeSubmit").html('<input id="next" class="not_select_submit" type="button" value="次へ">');
				} else if (counter == 0 ) {
					$("#changeSubmit").html('<input id="next" class="not_select_submit" type="button" value="次へ">');
				} else if (counter == TICKET_MAX_NUM && memberSelectFlg ) {
					$("#changeSubmit").html('<input id="next" type="submit" value="次へ">');
				}
			}).change();
		});

			function selectMember(getFlagNum) {
				const NON_MEMVER = 0;
				const MEMVER = 1;
				if(getFlagNum == MEMVER){
					if( $("#btnMember").hasClass("select_member") ){
						// 選択されている。
						$("#selectMemberAddInput").html("");
					} else {
						// 選択されていない。
						var selectMemberInputTag = "<input type='hidden' name='select_member' value='"+MEMVER+"'>"
						$("#selectMemberAddInput").html(selectMemberInputTag);
						memberSelectFlg = true;
					}
					if( $("#btnNonMember").hasClass("select_member")){
						$("#btnNonMember").toggleClass("select_member");
					}
					$("#btnMember").toggleClass("select_member");
				} else if(getFlagNum == NON_MEMVER) {
					if($("#btnNonMember").hasClass("select_member")){
						// 選択されている。
						$("#selectMemberAddInput").html("");
					} else {
						// 選択されていない。
						var selectMemberInputTag = "<input type='hidden' name='select_member' value='"+NON_MEMVER+"'>"
						$("#selectMemberAddInput").html(selectMemberInputTag);
						memberSelectFlg = true;
					}
					if( $("#btnMember").hasClass("select_member")){
						$("#btnMember").toggleClass("select_member");
					}
					$("#btnNonMember").toggleClass("select_member");
				}

			}
		</script>
	</head>

	<body>

	<?php include("header.php"); ?>

		<div id="wrapper" class="clearfix">

			<!-- ↓メインのコンテンツを置くとこ↓ -->
			<article>
			<form action="./food_select.php" method="post">
				<div id="contentszone">
					<h2 class="clearfix">チケット選択</h2>
					<div id="contentscover">
					<h3>会員登録をお済ですか？</h3>

			<div id="button">
				<p id="member_read">会員登録を既にお済みの方は【会員】のボタン。まだのお客様は、【非会員】のボタンを押してください。</p>
				<div id="member_button">
					<p id="btnMember" class="button" onclick="selectMember(1)">会員</p>
					<p id="btnNonMember" class="button right" onclick="selectMember(0)">非会員</p>
					<p class="clearfix"></p>
				<div id="selectMemberAddInput"></div>
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
						<input class="selectNumber" type="number" name="ticket1">枚
					</p>
				</div>

				<p class="select_border"></p>

				<div class="select_content">
					<p class="select_name">大学生</p>
					<p class="price">1500円</p>
					<p class="select_sum">
						<input class="selectNumber" type="number" name="ticket2">枚
					</p>
					<pclass="clearfix"></p>
				</div>

				<p class="select_border"></p>

				<div class="select_content">
					<p class="select_name">高校生</p>
					<p class="price">1300円</p>
					<p class="select_sum">
						<input class="selectNumber" type="number" name="ticket3">枚
					</p>
					<pclass="clearfix"></p>
				</div>

				<p class="select_border"></p>

				<div class="select_content">
					<p class="select_name">中学生</p>
					<p class="price">1200円</p>
					<p class="select_sum">
						<input class="selectNumber" type="number" name="ticket4">枚
					</p>
					<pclass="clearfix"></p>
				</div>

				<p class="select_border"></p>

				<div class="select_content">
					<p class="select_name">シニア</p>
					<p class="price">1000円</p>
					<p class="select_sum">
						<input class="selectNumber" type="number" name="ticket5">枚
					</p>
					<pclass="clearfix"></p>
				</div>

				<p class="select_border"></p>

				<div class="select_content">
					<p class="select_name">カップル</p>
					<p class="price">1000円</p>
					<p class="select_sum">
						<input class="selectNumber" type="number" name="ticket6">枚
					</p>
					<pclass="clearfix"></p>
				</div>

				<p class="select_border"></p>

			</div>

			<div id="ticket_rest">
				<p class="float_left" id="rest">残りチケット数</p>
				<p class="float_left" id="rest_num"><span id="counterNum">0</span> / <span id="ticketMaxNum"><?php echo $ticketMaxNum; ?></span>枚</p>
				<p class="float_left">|</p>
				<p class="float_left" id="sum">合計</p>
				<p class="float_left" id="money"><span id="sumNum">0</span>円</p>
			</div>
			<p class="clearfix"></p>
			<input type="hidden" name="select_sheet" value="<?php echo $selectSheet; ?>">
      <input type="hidden" name="movie_id" value="<?php echo $movieId ?>">
      <input type="hidden" name="ticket_start_time" value="<?php echo $ticketStartTime; ?>">
      <input type="hidden" name="ticket_end_time" value="<?php echo $ticketEndTime; ?>">
			<div id="changeSubmit"><input id="next" class="not_select_submit" type="button" value="次へ"></div>

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
