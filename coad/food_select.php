<?php
$movieId = "";
$ticketStartTime = "";
$ticketEndTime = "";

if(isset($_POST['movie_id'])){
  $movieId = $_POST['movie_id'];
}
// echo "movieId: ";
// echo $movieId;

if(isset($_POST['ticket_start_time'])){
  $ticketStartTime = $_POST['ticket_start_time'];
}
// echo "ticketStartTime: ";
// echo $ticketStartTime;

if(isset($_POST['ticket_end_time'])){
  $ticketEndTime = $_POST['ticket_end_time'];
}
// echo "Time: ";
// echo $ticketEndTime;
?>

<?php

$selectSheet 			= "";
$selectMember 		= "";

if(isset($_POST['select_sheet'])){
	$selectSheet = $_POST['select_sheet'];
}
if(isset($_POST['select_member'])){
	$selectMember = $_POST['select_member'];
}

$ticketArray = array();

for($i = 0; $i <= 5; $i++){
	$targetStr = "ticket".($i+1);
	if(isset($_POST[$targetStr]) &&
	 $_POST[$targetStr] !== "" &&
	 $_POST[$targetStr] != 0) {
		$ticketArray[$targetStr] = $_POST[$targetStr];
	}
}
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
		<link rel="stylesheet" href="css/ticket.css">
		<!-- ↑ここにはそのページ用のcss↑ -->

		<title>フード予約 | HALシネマ</title>
		<script type="text/javascript" src="./js/lib/jquery-1.11.1.min.js"></script>
		<script type="text/javascript">
		// ポップコーン
		const FOOD_1 = 0;
		const FOOD_1_PRICE = 600;
		// チェロス
		const FOOD_2 = 1;
		const FOOD_2_PRICE = 350;
		// ホットドック
		const FOOD_3 = 2;
		const FOOD_3_PRICE = 500;
		// ドリンクS
		const FOOD_4 = 3;
		const FOOD_4_PRICE = 250;
		// ドリンクM
		const FOOD_5 = 4;
		const FOOD_5_PRICE = 300;
		// ドリンクM
		const FOOD_6 = 5;
		const FOOD_6_PRICE = 350;

	$(function(){

		$(".select_number").change(function(){
			var sumCounter = 0;
			$(".select_number").each(function(i){
				var addNum = Number($(this).val());
				if(addNum > 0){
					switch(i){
						case FOOD_1 :
							sumCounter += Number(addNum * FOOD_1_PRICE);
							break;
						case FOOD_2 :
							sumCounter += Number(addNum * FOOD_2_PRICE);
							break;
						case FOOD_3 :
							sumCounter += Number(addNum * FOOD_3_PRICE);
							break;
						case FOOD_4 :
							sumCounter += Number(addNum * FOOD_4_PRICE);
							break;
						case FOOD_5 :
							sumCounter += Number(addNum * FOOD_5_PRICE);
							break;
						case FOOD_6 :
							sumCounter += Number(addNum * FOOD_6_PRICE);
							break;
					}
				}
				$("#foodPrice").text(sumCounter);
			});
		}).change();

	});

		</script>
	</head>

	<body>

	<?php include("header.php"); ?>
		<div id="wrapper" class="clearfix">

			<!-- ↓メインのコンテンツを置くとこ↓ -->
			<article>

			<div id="contentszone">
				<h2 class="clearfix">フード予約</h2>
				<div id="contentscover">
				
				
				<div id="select">
				<form action="./booking.php" method="post">
					<div class="select_content">
						<p class="select_name">ポップコーン</p>
						<p class="price">600円</p>
						<p class="select_sum">
							<input class="select_number" type="number" name="food_1">枚
						</p>
					</div>

					<p class="select_border"></p>

					<div class="select_content">
						<p class="select_name">チェロス</p>
						<p class="price">350円</p>
						<p class="select_sum">
							<input class="select_number" type="number" name="food_2">枚
						</p>
						<p class="clearfix"></p>
					</div>

					<p class="select_border"></p>

					<div class="select_content">
						<p class="select_name">ホットドック</p>
						<p class="price">500円</p>
						<p class="select_sum">
							<input class="select_number" type="number" name="food_3">枚
						</p>
						<pclass="clearfix"></p>
					</div>

					<p class="select_border"></p>

					<div class="select_content">
						<p class="select_name">ドリンクS</p>
						<p class="price">250円</p>
						<p class="select_sum">
							<input class="select_number" type="number" name="food_4">枚
						</p>
						<p class="clearfix"></p>
					</div>

					<p class="select_border"></p>

					<div class="select_content">
						<p class="select_name">ドリンクM</p>
						<p class="price">300円</p>
						<p class="select_sum">
							<input class="select_number" type="number" name="food_5">枚
						</p>
						<p class="clearfix"></p>
					</div>

					<p class="select_border"></p>

					<div class="select_content">
						<p class="select_name">ドリンクL</p>
						<p class="price">350円</p>
						<p class="select_sum">
							<input class="select_number" type="number" name="food_6">枚
						</p>
						<p class="clearfix"></p>
					</div>

					<p class="select_border"></p>
				
				</div><!-- /select -->
			
				<div id="ticket_rest">
					<p class="float_left" id="food">|</p>
					<p class="float_left" id="sum">合計</p>
					<p class="float_left" id="money"><span id="foodPrice">0</span>円</p>
				</div>
				<p class="clearfix"></p>
				<input type="hidden" name="select_sheet" value="<?php echo $selectSheet; ?>">
				<input type="hidden" name="select_member" value="<?php echo $selectMember; ?>">
				<?php
				foreach($ticketArray as $key => $value){
				?>
					<input type="hidden" name="<?php echo $key; ?>" value="<?php echo $value; ?>">
				<?php
				}
				?>
          <input type="hidden" name="movie_id" value="<?php echo $movieId ?>">
          <input type="hidden" name="ticket_start_time" value="<?php echo $ticketStartTime; ?>">
          <input type="hidden" name="ticket_end_time" value="<?php echo $ticketEndTime; ?>">

				<p><input id="next" type="submit" value="次へ"></p>
				</form>
			</div><!-- /contentscover -->
			</div><!-- /contentzoon -->

				<div id="bannerzone">
					<!-- サイドコンテンツ置くとこ 横幅236px -->バナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナー
				</div>

			</article>
			<!-- ↑メインのコンテンツを置くとこ↑ -->

		</div>

	<?php include("footer.php"); ?>

	</body>

</html>