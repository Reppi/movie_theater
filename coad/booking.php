<?php
require_once("functions.php");
$selectSheet = "";
$selectSheetArray = array();
$selectMember = "";
$foodStr = "";
$foodGetArray = Array();
$foodGetDataArray = Array();
$selectFood = "";
$selectFoodGetArray = Array();
$foodSum = 0;
$ticketSum = 0;

$dbh = connectDb();
$ticketGetArray = getTicketData($dbh);
$foodGetDataArray = getFoodData($dbh);

foreach($ticketGetArray as $key=>$value){
	// echo $key."<br>";
	// echo $value['ticket_price']."<br>";
	// echo $value['ticket_name']."<br>";
}


if(isset($_POST['select_sheet'])){
	$selectSheet = $_POST['select_sheet'];
}
// echo $selectSheet."   ";
$selectSheetArray = explode(",",$selectSheet);

if(isset($_POST['select_member'])){
	$selectMember = $_POST['select_member'];
}
// echo $selectMember;
if($selectMember == 1){
	// 会員なので情報を受け渡す。
	// header("Location: ");
}

// foodをゲットする
for($i = 0; $i <= 5; $i++){
	$foodStr = "food_".($i+1);
	if(isset($_POST[$foodStr]) &&
	 $_POST[$foodStr] !== "" &&
	 $_POST[$foodStr] != 0) {
	$foodGetArray[$foodStr] = $_POST[$foodStr];
	}
}

// Foodのfood_idと各個数
foreach($foodGetArray as $key => $value){
	$keyName = str_replace("food_","",$key);
	$selectFoodGetArray[$keyName] = $value;
}



if(isset($_POST['select_food'])){
	$selectFood = $_POST['select_food'];
}
// echo $selectFood;

$ticketArray = array();
for($i = 0; $i <= 5; $i++){
	$targetStr = "ticket".($i+1);
	if(isset($_POST[$targetStr]) &&
		$_POST[$targetStr] !== "" &&
		$_POST[$targetStr] != 0) {
		$ticketArray[$targetStr] = $_POST[$targetStr];
	}
}

$ticketSum;
foreach($ticketArray as $key => $value){

	$target = str_replace("ticket","",$key);
	$target --;
	// if ($ticketGetArray['ticket_id'] == $target){
	// 	$ticketGetArray;
	// }

	foreach($ticketGetArray as $key2 => $value2){
		if($target == $value2['ticket_id']){
			echo $value2['ticket_name'];
		}
	}

	if($value === end($ticketArray)){
		echo ",";
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
		<link rel="stylesheet" href="css/booking.css">
		<!-- ↑ここにはそのページ用のcss↑ -->

		<title>お客様情報入力 | HALシネマ</title>

	</head>

	<body>

	<?php include("header.php"); ?>

		<div id="wrapper"　class="clearfix">

			<!-- ↓メインのコンテンツを置くとこ↓ -->
			<article>

				<div id="contentszone">
					<h2 class="clearfix">お客様情報入力</h2>
					<div id="contentscover">
					<h3>選択中チケット情報</h3>

					<div id="information">
						<div class="information_content">
							<div class="content_name">上映日</div>
							<div class="element">
								2014 年 6月 27日 (土)<br />
								17:00 〜 19:30
							</div>
							<p class="clearfix"></p>
						</div>

						<p class="information_border"></p>

						<div class="information_content">
							<div class="content_name">作品名</div>
							<div class="element">
								アイ・フランケンシュタイン
							</div>
							<p class="clearfix">
						</div>

						<p class="information_border"></p>

						<div class="information_content">
							<div class="content_name">座席</div>
							<div class="element">

<?php
foreach( $selectSheetArray as $value ) {
	$strLen = mb_strlen($value);
	if ($strLen == 2 ){
		$strFirst = substr($value,0,1);
		$strEnd = substr($value,-1,1);
		$strFirstApper = strtoupper($strFirst);

		echo $strFirstApper."-".$strEnd;

		if($value !== end($selectSheetArray)){
			echo ", ";
		}
	}
}
?>

<!-- 								M-16 -->
							</div>
							<p class="clearfix"></p>
						</div>

						<p class="information_border"></p>
						<div class="information_content">
							<div class="content_name">チケット</div>
							<div class="element">
							<?php
							foreach($ticketArray as $key => $value){

								$target = str_replace("ticket","",$key);
								$target --;
								// if ($ticketGetArray['ticket_id'] == $target){
								// 	$ticketGetArray;
								// }

								foreach($ticketGetArray as $key2 => $value2){
									if($target == $value2['ticket_id']){
										echo $value2['ticket_name'];
									}
								}
								// TODO: 最後の時だけカンマスキップする。
								if($value === end($ticketArray)){
									echo ",";
								}
							}
							?>
							</div>
							<p class="clearfix"></p>
						</div>

						<p class="information_border"></p>

						<div class="information_content">
							<div class="content_name">フード注文予約</div>
							<div class="element">
							<?php
								// foreach($foodGetDataArray as $key=>$value){
								// 	echo $value['food_name'];
								// 	if($value !== end($foodGetDataArray)) {
								// 		echo " , ";
								// 	}
								// }
								foreach($selectFoodGetArray as $key => $value){
									$target = ((Int)$key-1);
									// echo "target: ".$target;
									echo $foodName = $foodGetDataArray[$target]["food_name"];
									$foodPrice = ($foodGetDataArray[$target]["food_price"]);
									$foodCount = ($selectFoodGetArray[$key]);
									$foodSum += $foodPrice * $foodCount;
									if($value !== end($selectFoodGetArray)){
										echo " , ";
									}
								}
							?>
							</div>
							<p class="clearfix"></p>
						</div>

						<p class="information_border"></p>

						<div class="information_content">
							<div class="content_name">合計金額</div>
							<div class="element">
<?php
	echo $ticketSum + $foodSum;
?>

								円
							</div>
							<p class="clearfix"></p>
						</div>
						<p class="information_border"></p>

					</div><!-- /information -->

					<h3>お客様情報入力</h3>
				<form action="./reserved _check.php" method="post">
					<div id="guest">
						<div class="information_content">
							<div class="content_name">お名前</div>
							<div class="element">
								<div class="text_name">
									<input type="text">
									<input type="text" class="text">
								</div>
								<p class="clearfix"></p>
							</div>
						</div><!-- /information_content -->

						<p class="information_border"></p>

						<div class="information_content">
							<div class="content_name">電話番号</div>
							<div class="element">
									<input type="text" class="text_content">
							</div>
						</div><!-- /information_content -->

						<p class="information_border"></p>

						<div class="information_content">
							<div class="content_name">メールアドレス</div>
							<div class="element">
									<input type="text" class="text_content">
							</div>
						</div><!-- /information_content -->

						<p class="information_border"></p>

						<div class="information_content">
							<div class="content_name">住所</div>
							<div class="element">
									<input type="text" class="text_content">
							</div>
						</div><!-- /information_content -->

						<p class="information_border"></p>

					</div><!-- /guest -->

					<h3>クレジットカード情報</h3>

					<div id="credit">

						<div class="information_content">
							<div class="content_name">カード番号</div>
							<div class="element input_col4">
									<input type="text">
									<input type="text" class="card">
									<input type="text" class="card">
									<input type="text" class="card">
							</div>
						</div><!-- /information_content -->
						<p class="information_border"></p>

						<div class="information_content">
							<div class="content_name">有効期限</div>
							<div class="element text_name">
									<input type="text">
									<input type="text" class="text">
							</div>
						</div><!-- /information_content -->
						<p class="information_border"></p>
						
						<div class="information_content">
							<div class="content_name">お名前</div>
							<div class="element text_name">
									<input type="text">
									<input type="text" class="text">
							</div>
						</div><!-- /information_content -->

				<?php
				foreach($ticketArray as $key => $value){
				?>
					<input type="hidden" name="<?php echo $key; ?>" value="<?php echo $value; ?>">
				<?php
				}
				?>

				<?php
				foreach($foodGetDataArray as $key => $value){
				?>
					<input type="hidden" name="<?php echo $key; ?>" value="<?php echo $value; ?>">
				<?php
				}
				?>


						<p class="information_border"></p>
						<p><input id="next" type="submit"></p>
				</form>
					</div><!-- /credit -->
				</div><!-- /contentscover -->
				</div><!-- /contentszoon -->
				<div id="bannerzone">
					<!-- サイドコンテンツ置くとこ 横幅236px -->バナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナー
				</div>

			</article>
			<!-- ↑メインのコンテンツを置くとこ↑ -->

		</div>
		<p class="clearfix"></p>

	<?php include("footer.php"); ?>

	</body>

</html>