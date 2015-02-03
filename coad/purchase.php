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
$userAddress = "";
$userAddressPrefecture = "";
$userAddressMunicipalities = "";
$setUserCardNo = "";
$userCardNo1 = "";
$userCardNo2 = "";
$userCardNo3 = "";
$userCardNo4 = "";
$userCardEndMonth = "";
$userCardEndYear = "";
$userCardName = "";
$userCardNameSei = "";
$userCardNameMei = "";
$selectSheet = "";
$selectMember = "";
// TODO: スクリーンIDを植え継ぐ
$screenId = "SC1";


if(isset($_POST['movie_id'])){
  $movieId = $_POST['movie_id'];
}
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

$setUserCardNo = $userCardNo1."-".$userCardNo2."-".$userCardNo3."-".$userCardNo4;
$userCardName = $userCardNameSei.$userCardNameMei;


$foodGetStrSet = "";
$foodGetArray = array();
$selectFoodGetArray = array();
// foodをゲットする
for($i = 0; $i <= 5; $i++){
	$foodStr = "food_".($i+1);
	if(isset($_POST[$foodStr]) &&
	 $_POST[$foodStr] !== "" &&
	 $_POST[$foodStr] != 0) {
	 $foodGetStrSet .= $foodStr.",";
	$foodGetArray[$foodStr] = $_POST[$foodStr];
	}
}

// Foodのfood_idと各個数
foreach($foodGetArray as $key => $value){
	$keyName = str_replace("food_","",$key);
	$selectFoodGetArray[$keyName] = $value;
}

$ticketStrSet = "";
$ticketArray = array();
for($i = 0; $i <= 5; $i++){
	$targetStr = "ticket".($i+1);
	if(isset($_POST[$targetStr]) &&
		$_POST[$targetStr] !== "" &&
		$_POST[$targetStr] != 0) {
		$ticketStrSet .= $targetStr.",";
		$ticketArray[$targetStr] = $_POST[$targetStr];
	}
}


if(isset($_POST['select_sheet'])){
	$selectSheet = $_POST['select_sheet'];
}
if($selectMember == 1){
  // TODO: 会員を押した場合
    // TODO: 会員ユーザ,passwordが一致し返り値会員IDを取得
}else{
  // TODO: 非会員を押した場合
    // TODO: お客様情報を登録する。
    $InsertUserTicketFlag = InsertUserTicket($dbh,$userNameSei,$userNameMei,$userAddressPrefecture,$userAddressMunicipalities,$userEmail,$selectMember);
    if(!$InsertUserTicketFlag){
      $err['InsertUserTicket'] = "非会員ユーザ登録エラー";
    }
}
// MARK: ユーザ番号を取得
$lastUserId = getLastUserId($dbh);
$lastUserId = $lastUserId['user_id'];

// MARK: カード情報を登録する
$InsertCardTicketFlag = InsertCardTicket($dbh,$setUserCardNo,$userCardEndYear,$userCardEndMonth,$userCardName,$lastUserId);
if($InsertCardTicketFlag){
  echo "カード情報登録終了";
}
// MARK: 返り値 カードIDを受け取る
$lastCardId = InsertCardTicketLastId($dbh);
$lastCardId = $lastCardId['card_id'];

$chk = InsertTicketReserved($dbh,$ticketStrSet,$movieId,$screenId,$lastUserId,$lastCardId);
if($chk){
	// echo "成功";
  var_dump($chk);
  // TODO: フードのデータ・ユーザID・カードIDを含めて InsertTicketReservedを編集。
  $InsertTicketLastId = InsertTicketLastId($dbh);
  $InsertTicketLastId = $InsertTicketLastId['reserved_id'];

  // MARK: foodの配列
  // $foodGetArray

  foreach($foodGetArray as $foodValue){
    // TODO: フード情報のデータ形式に変換
    $InsertFoodFlag = InsertFoodFlag($dbh,$foodValue,$InsertTicketLastId);
    var_dump($InsertFoodFlag);
  }




  $foodData = $_POST['food_1'];
  echo $foodData;
}else{
	// echo "失敗";
}
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
		<link rel="stylesheet" href="css/purchase.css">
		<!-- ↑ここにはそのページ用のcss↑ -->

		<title>予約完了しました | HALシネマ</title>

	</head>

	<body>

	<?php include("header.php"); ?>

		<div id="wrapper" class="clearfix">

			<!-- ↓メインのコンテンツを置くとこ↓ -->
			<article>

				<div id="contentszone">
					<h2 class="clearfix">ご予約完了</h2>
					<div id="contentscover">
						<h3>ご予約ありがとうございました。</h3>

					<div id="dai">ご予約番号</div>

					<div id="box"><?php echo $screenId; ?></div>


					<div id="naka1">ご注文番号は当日確認できるよう、控えてお持ちください。</div>


					<div id="naka2">ご注文内容はご登録されたメールにお送り致します。<br />
					ご確認お願いします。</div>

					<a href="#"><button class="button2" type="submit">トップへ戻る</button></a>




					</div>
				</div>

				<div id="main">
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
