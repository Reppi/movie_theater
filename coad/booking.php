<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
$movieId = "";
$ticketStartTime = "";
$ticketEndTime = "";

if(isset($_POST['movie_id'])){
  $movieId = $_POST['movie_id'];
}
// echo "movieId: ";
// echo $movieId;

if(isset($_POST['ticket_start_time'])){
  echo $ticketStartTime = $_POST['ticket_start_time'];
}
// echo "ticketStartTime: ";
// echo $ticketStartTime;

if(isset($_POST['ticket_end_time'])){
  echo $ticketEndTime = $_POST['ticket_end_time'];
}
// echo "Time: ";
// echo $ticketEndTime;


?>
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
$getMoive = getMovieDetailData($dbh,$movieId);
var_dump($getMoive);
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

if($_POST['select_member'] != ""){
	$selectMember = $_POST['select_member'];
  echo "SELECTMENBER: ".$selectMember;
}

// echo $selectMember;
if($selectMember == 1){
	//メンバー処理
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
			// echo $value2['ticket_name'];
			$ticketSum += (int)$value2['ticket_price'];
		}
	}

	if($value === end($ticketArray)){
		// echo ",";
	}
}

// MARK: 時間分解
//2014-12-17 10:00:00
$ticketStartTimeY = substr($ticketStartTime,0,4);
$ticketStartTimeM = substr($ticketStartTime,5,2);
$ticketStartTimeD = substr($ticketStartTime,8,2);
$ticketStartTimeHour = substr($ticketStartTime,-8,2);
$ticketStartTimeMin = substr($ticketStartTime-5,2);

$ticketEndTimeY = substr($ticketEndTime,0,4);
$ticketEndTimeM = substr($ticketEndTime,5,2);
$ticketEndTimeD = substr($ticketEndTime,8,2);
$ticketEndTimeHour = substr($ticketEndTime,-8,2);
$ticketEndTimeMin = substr($ticketEndTime-5,2);

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
								<?php echo $ticketStartTimeY;?> 年 <?php echo $ticketStartTimeM; ?>月 <?php echo $ticketStartTimeD; ?>日<br />
								<?php echo $ticketStartTimeHour.":".$ticketStartTimeMin; ?> 〜 <?php echo $ticketEndTimeHour.":".$ticketEndTimeMin; ?>
							</div>
							<p class="clearfix"></p>
						</div>

						<p class="information_border"></p>

						<div class="information_content">
							<div class="content_name">作品名</div>
							<div class="element">
								<?php echo $getMoive["movie_title"]; ?>
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


				<form action="./reserved _check.php" method="post">
				<?php
					if($selectMember == 1){
						// 会員を押してる
						?>
						<?php
						// TODO: 現在の状態を判定
						// MARK:もし、ログインしているならば
							// TODO: 何も表示しない
						// MARK:もし、ログインしていないならば
							// TODO: ユーザ名・パスワード入力させる。
						?>
						<?php
					}else{
						// 非会員を押した
						?>
				<h3>お客様情報入力</h3>
					<div id="guest">
						<div class="information_content">
							<div class="content_name">お名前</div>
							<div class="element">
								<div class="text_name">
									<input type="text" name="user_name_sei">
									<input type="text" class="text" name="user_name_mei">
								</div>
								<p class="clearfix"></p>
							</div>
						</div><!-- /information_content -->

						<p class="information_border"></p>

						<div class="information_content">
							<div class="content_name">電話番号</div>
							<div class="element">
									<input type="text" class="text_content" name="user_tell">
							</div>
						</div><!-- /information_content -->

						<p class="information_border"></p>

						<div class="information_content">
							<div class="content_name">メールアドレス</div>
							<div class="element">
									<input type="text" class="text_content" name="user_email">
							</div>
						</div><!-- /information_content -->

						<p class="information_border"></p>

						<div class="information_content" style="height:80px;">
							<div class="content_name">住所</div>
							<div class="element">
								<input type="text" name="user_address_prefecture"><br><br>
								<input type="text" class="text_content" name="user_address_municipalities">
							</div>
						</div><!-- /information_content -->

						<p class="information_border"></p>

					</div><!-- /guest -->
						<?php
					}
				?>

					<h3>クレジットカード情報</h3>

					<div id="credit">

						<div class="information_content">
							<div class="content_name">カード番号</div>
							<div class="element input_col4">
									<input type="text" name="user_card_no_1">
									<input type="text" class="card" name="user_card_no_2">
									<input type="text" class="card" name="user_card_no_3">
									<input type="text" class="card" name="user_card_no_4">
							</div>
						</div><!-- /information_content -->
						<p class="information_border"></p>

						<div class="information_content">
							<div class="content_name">有効期限</div>
							<div class="element text_name">
									<input type="text" name="user_card_end_month" placeholder="月">
									<input type="text" class="text" name="user_card_end_year" placeholder="年">
							</div>
						</div><!-- /information_content -->
						<p class="information_border"></p>

						<div class="information_content">
							<div class="content_name">お名前</div>
							<div class="element text_name">
									<input type="text" name="user_card_name_sei">
									<input type="text" class="text" name="user_card_name_mei">
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
				foreach($selectFoodGetArray as $key => $value){
				?>
					<input type="hidden" name="food_<?php echo $key; ?>" value="<?php echo $value; ?>">
				<?php
				}
				?>
				<input type="hidden" name="select_sheet" value="<?php
				foreach( $selectSheetArray as $value ) {
					$strLen = mb_strlen($value);
					if ($strLen == 2 ){
						$strFirst = substr($value,0,1);
						$strEnd = substr($value,-1,1);
						$strFirstApper = strtoupper($strFirst);
						echo $strFirstApper."-".$strEnd;
						if($value !== end($selectSheetArray)){
							echo ",";
						}
					}
				}
				?>">
						<p class="information_border"></p>
						<input type="hidden" name="movie_id" value="<?php echo $movieId ?>">
						<input type="hidden" name="ticket_start_time" value="<?php echo $ticketStartTime; ?>">
						<input type="hidden" name="ticket_end_time" value="<?php echo $ticketEndTime; ?>">
						<input type='hidden' name='select_member' value='<?php echo $selectMember; ?>'>
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
