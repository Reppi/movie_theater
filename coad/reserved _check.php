<?php

require_once("functions.php");

$dbh = connectDb();
$ticketGetArray = getTicketData($dbh);
$foodGetDataArray = getFoodData($dbh);

$movieId = "";
$ticketStartTime = "";
$ticketEndTime = "";
$userNameSei = "";
$userNameMei = "";
$userTell = "";
$userEmail = "";
$userAddressPrefecture = "";
$userAddressMunicipalities = "";
$userCardNo1 = "";
$userCardNo2 = "";
$userCardNo3 = "";
$userCardNo4 = "";
$userCardEndMonth = "";
$userCardEndYear = "";
$userCardNameSei = "";
$userCardNameMei = "";
$selectSheet = "";
$selectMember = "";

if(isset($_POST['movie_id'])){
  $movieId = $_POST['movie_id'];
}
echo "$movieId";
$getMovieDataArray = getTargetMovieData($dbh,$movieId);

if(isset($_POST['ticket_start_time'])){
  $ticketStartTime = $_POST['ticket_start_time'];
}
$ticketStartTimeY = substr($ticketStartTime, 0,4);
$ticketStartTimeM = substr($ticketStartTime, 5,2);
$ticketStartTimeD = substr($ticketStartTime, 8,2);
$ticketStartTimeH = substr($ticketStartTime, -8,2);
$ticketStartTimeH = substr($ticketStartTime, -5,2);

if(isset($_POST['ticket_end_time'])){
  $ticketEndTime = $_POST['ticket_end_time'];
}
$ticketEndTimeY = substr($ticketEndTime, 0,4);
$ticketEndTimeM = substr($ticketEndTime, 5,2);
$ticketEndTimeD = substr($ticketEndTime, 8,2);
$ticketEndTimeH = substr($ticketEndTime, -8,2);
$ticketEndTimeH = substr($ticketEndTime, -5,2);

if(isset($_POST['user_name_sei'])){
	$userNameSei = $_POST['user_name_sei'];
}

if(isset($_POST['user_name_mei'])){
	$userNameMei = $_POST['user_name_mei'];
}

if(isset($_POST['user_tell'])){
	$userTell = $_POST['user_tell'];
}

if(isset($_POST['user_email'])){
	$userEmail = $_POST['user_email'];
}

if(isset($_POST['user_address_prefecture'])){
	$userAddressPrefecture = $_POST['user_address_prefecture'];
}

if(isset($_POST['user_address_municipalities'])){
	$userAddressMunicipalities = $_POST['user_address_municipalities'];
}


if(isset($_POST['user_card_no_1'])){
	$userCardNo1 = $_POST['user_card_no_1'];
}

if(isset($_POST['user_card_no_2'])){
	$userCardNo2 = $_POST['user_card_no_2'];
}

if(isset($_POST['user_card_no_3'])){
	$userCardNo3 = $_POST['user_card_no_3'];
}

if(isset($_POST['user_card_no_4'])){
	$userCardNo4 = $_POST['user_card_no_4'];
}

if(isset($_POST['user_card_end_month'])){
	$userCardEndMonth = $_POST['user_card_end_month'];
}

if(isset($_POST['user_card_end_year'])){
	$userCardEndYear = $_POST['user_card_end_year'];
}

if(isset($_POST['user_card_name_sei'])){
	$userCardNameSei = $_POST['user_card_name_sei'];
}

if(isset($_POST['user_card_name_mei'])){
	$userCardNameMei = $_POST['user_card_name_mei'];
}

if(isset($_POST['select_member'])){
	$selectMember = $_POST['select_member'];
}
echo $selectMember;

$foodGetArray = array();
$selectFoodGetArray = array();
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


if(isset($_POST['select_sheet'])){
	$selectSheet = $_POST['select_sheet'];
}
// echo "selectSheet: ".$selectSheet;




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
		<link rel="stylesheet" href="css/reserved _check.css">
		<!-- ↑ここにはそのページ用のcss↑ -->

		<title>ご予約情報確認 | HALシネマ</title>

	</head>

	<body>

	<?php include("header.php"); ?>

		<div id="wrapper" class="clearfix">

			<!-- ↓メインのコンテンツを置くとこ↓ -->
			<article>

				<div id="contentszone">
					<h2 class="clearfix">予約確認画面</h2>
					<div id="contentscover">
						<h3>ご予約チケット情報</h3>

						<p class="clearfix"></p>

						<div id="select">
							<div class="select_content">
								<p class="select_name">上映日</p>
								<p class="space">　</p>
								<p class="select_sum">
									<?php echo $ticketStartTimeY; ?>年 <?php echo $ticketStartTimeM; ?>月 <?php echo $ticketStartTimeD; ?>日<!--XX:XX～XX:XX-->
								</p>
							</div>

							<p class="select_border"></p>

							<div class="select_content">
								<p class="select_name">作品名</p>
								<p class="space">　</p>
								<p class="select_sum">
									<?php echo $getMovieDataArray['movie_title']; ?>
								</p>
								<pclass="clearfix"></p>
							</div>

							<p class="select_border"></p>

							<div class="select_content">
								<p class="select_name">座席</p>
								<p class="space">　</p>
								<p class="select_sum">
									<?php echo $selectSheet; ?>
								</p>
								<pclass="clearfix"></p>
							</div>

							<p class="select_border"></p>

							<div class="select_content">
								<p class="select_name">チケット</p>
								<p class="space">　</p>
								<p class="select_sum">
<?php
$ticketSum = 0;
foreach($ticketArray as $key => $value){

	$target = str_replace("ticket","",$key);
	$target --;
	// if ($ticketGetArray['ticket_id'] == $target){
	// 	$ticketGetArray;
	// }

	foreach($ticketGetArray as $key2 => $value2){
		if($target == $value2['ticket_id']){
			echo $value2['ticket_name'];
			$ticketSum += (int)$value2['ticket_price'];
		}
	}

	if($value === end($ticketArray)){
		echo ",";
	}
}

?>
								</p>
								<pclass="clearfix"></p>
							</div>

							<p class="select_border"></p>

							<div class="select_content">
								<p class="select_name">フード注文予約</p>
								<p class="space">　</p>
								<p class="select_sum">
<?php
								$foodSum = 0;
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
								</p>
								<pclass="clearfix"></p>
							</div>

							<p class="select_border"></p>

							<div class="select_content">
								<p class="select_name">合計金額</p>
								<p class="space">　</p>
								<p class="select_sum">
									<?php echo $foodSum + $ticketSum; ?>円
								</p>
								<pclass="clearfix"></p>
							</div>

						<p class="select_border"></p>

						</div>
						<p class="clearfix"></p>

						<!-- TODO:戻るボタン  -->
						<!-- <p class="next" id="ticketnext">チケット予約へ戻る</p> -->


					<h3>お客様情報</h3>

					<div id="select">
						<div class="select_content">
							<p class="select_name">お名前</p>
							<p class="space">　</p>
							<p class="select_sum">
								<?php echo $userNameSei ." ". $userNameMei; ?>
							</p>
						</div>

						<p class="select_border"></p>

						<div class="select_content">
							<p class="select_name">電話番号</p>
							<p class="space">　</p>
							<p class="select_sum">
								<?php echo $userTell; ?>
							</p>
							<pclass="clearfix"></p>
						</div>

						<p class="select_border"></p>

						<div class="select_content">
							<p class="select_name">メールアドレス</p>
							<p class="space">　</p>
							<p class="select_sum">
								<?php echo $userEmail; ?>
							</p>
							<pclass="clearfix"></p>
						</div>

						<p class="select_border"></p>

						<div class="select_content">
							<p class="select_name" style="height:120px;">住所</p>
							<p class="space" style="height:120px;">　</p>
							<p class="select_sum">
								<?php echo $userAddressPrefecture; ?><br>
								<?php echo $userAddressMunicipalities; ?>
							</p>
							<pclass="clearfix"></p>
						</div>

						<p class="select_border"></p>

					</div>
					<p class="clearfix"></p>
					<!-- TODO:戻るボタン  -->
					<!-- <p class="next" id="usernext">お客様情報入力へ戻る</p> -->


					<h3>お客様情報</h3>

					<div id="select">
						<div class="select_content">
							<p class="select_name">カード番号</p>
							<p class="space">　</p>
							<p class="select_sum">
								<?php echo $userCardNo1; ?>-<?php echo $userCardNo2; ?>-<?php echo $userCardNo3; ?>-<?php echo $userCardNo4; ?>
							</p>
						</div>

						<p class="select_border"></p>

						<div class="select_content">
							<p class="select_name">有効期限</p>
							<p class="space">　</p>
							<p class="select_sum">
								<?php echo $userCardEndMonth; ?>月 <?php echo $userCardEndYear; ?>年
							</p>
							<pclass="clearfix"></p>
						</div>

						<p class="select_border"></p>

						<div class="select_content">
							<p class="select_name">お名前</p>
							<p class="space">　</p>
							<p class="select_sum">
								<?php echo $userCardNameSei; ?> <?php echo $userCardNameMei; ?>
							</p>
							<pclass="clearfix"></p>
						</div>

						<p class="select_border"></p>

<!-- 						<div class="select_content">
							<p class="select_name">セキュリティコード</p>
							<p class="space">　</p>
							<p class="select_sum">
							xxxx
							</p>
							<pclass="clearfix"></p>
						</div> -->

<!-- 						<p class="select_border"></p> -->

						</div>

						<p class="clearfix"></p>
						
						<!-- TODO:戻るボタン  -->
						<!-- <p class="next" id="cardnext">カード情報入力へ戻る</p> -->

						<!-- <p class="select_border"></p> -->

						</div>

						<p class="clearfix"></p>

						<form action="purchase.php" method="post">

<input type="hidden" name="movie_id" value="<?php echo $movieId; ?>">
<input type="hidden" name="ticket_start_time" value="<?php echo $ticketStartTime; ?>">
<input type="hidden" name="ticket_end_time" value="<?php echo $ticketEndTime; ?>">
<input type="hidden" name="user_name_sei" value="<?php echo $userNameSei; ?>">
<input type="hidden" name="user_name_mei" value="<?php echo $userNameMei; ?>">
<input type="hidden" name="user_tell" value="<?php echo $userTell; ?>">
<input type="hidden" name="user_email" value="<?php echo $userEmail; ?>">
<input type="hidden" name="user_address_prefecture" value="<?php echo $userAddressPrefecture; ?>">
<input type="hidden" name="user_address_municipalities" value="<?php echo $userAddressMunicipalities; ?>">
<input type="hidden" name="user_card_no_1" value="<?php echo $userCardNo1; ?>">
<input type="hidden" name="user_card_no_2" value="<?php echo $userCardNo2; ?>">
<input type="hidden" name="user_card_no_3" value="<?php echo $userCardNo3; ?>">
<input type="hidden" name="user_card_no_4" value="<?php echo $userCardNo4; ?>">
<input type="hidden" name="user_card_end_month" value="<?php echo $userCardEndMonth; ?>">
<input type="hidden" name="user_card_end_year" value="<?php echo $userCardEndYear; ?>">
<input type="hidden" name="user_card_name_sei" value="<?php echo $userCardNameSei; ?>">
<input type="hidden" name="user_card_name_mei" value="<?php echo $userCardNameMei; ?>">
<input type="hidden" name="select_sheet" value="<?php echo $selectSheet; ?>">
<?php
foreach($selectFoodGetArray as $key => $value){
?>
	<input type="hidden" name="food_<?php echo $key; ?>" value="<?php echo $value; ?>">
<?php
}
?>

<?php
foreach($ticketArray as $key => $value){
?>
	<input type="hidden" name="<?php echo $key; ?>" value="<?php echo $value; ?>">
<?php
}
?>

							<p><input id="lastnext" type="submit" value="次へ"></p>
						</form>
						</div>


						<div id="bannerzone">
							<!-- サイドコンテンツ置くとこ 横幅236px -->バナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナー
						</div>


					</div>

				</div>

			</article>
			<!-- ↑メインのコンテンツを置くとこ↑ -->

		</div>

	<?php include("footer.php"); ?>

	</body>

</html>