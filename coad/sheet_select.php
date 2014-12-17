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

<!DOCTYPE html>
<html lang="ja">
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
		<script src="./js/lib/jquery-1.11.1.min.js" type="text/javascript"></script>
		<script type="text/javascript">

		  function selectSheet(rowVal, colVal ,thisBtn){

		    var addTxt  = '<div class="select_width"> <p class="select_sheet_box"></p> <p class="select_sheet_num">'+rowVal+'-'+colVal+'</p> </div>';
		    var val       = rowVal+String(colVal);
		    var addInput = '';

		    $("#select_sheet").append(addTxt);

		    // TODO: 選択されたら .selectedSheetを追加する。
		    $(thisBtn).addClass("selectedSheet");

		    // TODO: もし、選択(selectedSheet)されていたら取り消せる。

		    var addInputHiddenVal = $("#add_input_hidden").html();
		    if(addInputHiddenVal == ""){
		      addInput = '<input id="add_input_hidden_this" type="hidden" name="selectSheet" value="'+val+'">';
		      $("#add_input_hidden").html(addInput);
		    } else {
		      var addHiddenVal = $("#add_input_hidden_this").val();
		      val += (","+addHiddenVal);
		      addInput = '<input id="add_input_hidden_this" type="hidden" name="selectSheet" value="'+val+'">';
		      $("#add_input_hidden").html(addInput);
		    }
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
              <p onclick="selectSheet('a',8,this)" class="num">8</p>
              <p onclick="selectSheet('a',7,this)" class="num">7</p>
              <p onclick="selectSheet('a',6,this)" class="num">6</p>
              <p onclick="selectSheet('a',5,this)" class="num">5</p>
              <p onclick="selectSheet('a',4,this)" class="num">4</p>
            </div>
            <div><!-- 数字の各列 -->
              <p onclick="selectSheet('b',8,this)" class="num">8</p>
              <p onclick="selectSheet('b',7,this)" class="num">7</p>
              <p onclick="selectSheet('b',6,this)" class="num">6</p>
              <p onclick="selectSheet('b',5,this)" class="num reservation">5</p><!-- php用のbackground -->
              <p onclick="selectSheet('b',4,this)" class="num recommended">4</p>
            </div>
            <div><!-- 数字の各列 -->
              <p onclick="selectSheet('c',8,this)" class="num">8</p>
              <p onclick="selectSheet('c',7,this)" class="num">7</p>
              <p onclick="selectSheet('c',6,this)" class="num">6</p>
              <p onclick="selectSheet('c',5,this)" class="num">5</p>
              <p onclick="selectSheet('c',4,this)" class="num">4</p>
            </div>
            <div><!-- 数字の各列 -->
              <p onclick="selectSheet('d',8,this)" class="num">8</p>
              <p onclick="selectSheet('d',7,this)" class="num">7</p>
              <p onclick="selectSheet('d',6,this)" class="num">6</p>
              <p onclick="selectSheet('d',5,this)" class="num">5</p>
              <p onclick="selectSheet('d',4,this)" class="num">4</p>
            </div>
            <div><!-- 数字の各列 -->
              <p onclick="selectSheet('e',8,this)" class="num">8</p>
              <p onclick="selectSheet('e',7,this)" class="num">7</p>
              <p onclick="selectSheet('e',6,this)" class="num">6</p>
              <p onclick="selectSheet('e',5,this)" class="num">5</p>
              <p onclick="selectSheet('e',4,this)" class="num">4</p>
            </div>
            <div><!-- 数字の各列 -->
              <p onclick="selectSheet('f',8,this)" class="num">8</p>
              <p onclick="selectSheet('f',7,this)" class="num">7</p>
              <p onclick="selectSheet('f',6,this)" class="num">6</p>
              <p onclick="selectSheet('f',5,this)" class="num">5</p>
              <p onclick="selectSheet('f',4,this)" class="num">4</p>
            </div>
          </div><!-- /sheet_num_left -->

          <div id="sheet_num_right"><!-- シートの数字部分 -->
            <div><!-- 数字の各列 -->
              <p onclick="selectSheet('a',3,this)" class="num">3</p>
              <p onclick="selectSheet('a',2,this)" class="num">2</p>
              <p onclick="selectSheet('a',1,this)" class="num">1</p>
            </div>
            <div><!-- 数字の各列 -->
              <p onclick="selectSheet('b',3,this)" class="num">3</p>
              <p onclick="selectSheet('b',2,this)" class="num">2</p>
              <p onclick="selectSheet('b',1,this)" class="num">1</p>
            </div>
            <div><!-- 数字の各列 -->
              <p onclick="selectSheet('c',3,this)" class="num">3</p>
              <p onclick="selectSheet('c',2,this)" class="num">2</p>
              <p onclick="selectSheet('c',1,this)" class="num">1</p>
            </div>
            <div><!-- 数字の各列 -->
              <p onclick="selectSheet('d',3,this)" class="num">3</p>
              <p onclick="selectSheet('d',2,this)" class="num">2</p>
              <p onclick="selectSheet('d',1,this)" class="num">1</p>
            </div>
            <div><!-- 数字の各列 -->
              <p onclick="selectSheet('e',3,this)" class="num">3</p>
              <p onclick="selectSheet('e',2,this)" class="num">2</p>
              <p onclick="selectSheet('e',1,this)" class="num">1</p>
            </div>
            <div><!-- 数字の各列 -->
              <p onclick="selectSheet('f',3,this)" class="num">3</p>
              <p onclick="selectSheet('f',2,this)" class="num">2</p>
              <p onclick="selectSheet('f',1,this)" class="num">1</p>
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

        <div id="select_sheet" class="clearfix">
<!--          <div class="select_width">
            <p class="select_sheet_box"></p>
            <p class="select_sheet_num">C-3</p>
          </div>
          <div class="select_width">
            <p class="select_sheet_box"></p>
            <p class="select_sheet_num">C-4</p>
          </div> -->

        </div><!-- /select_sheet -->

        
        <form action="./ticket_select.php" method="post">
          <div id="add_input_hidden"></div>
          <input type="hidden" name="movie_id" value="<?php echo $movieId ?>">
          <input type="hidden" name="ticket_start_time" value="<?php echo $ticketStartTime; ?>">
          <input type="hidden" name="ticket_end_time" value="<?php echo $ticketEndTime; ?>">
          <input class="ticket" type="submit" value="チケット選択">
        </form>
        <!-- <p id="ticket">チケット選択</p> -->
      </div>
      </div><!-- /content_zoon -->

    <!-- ↓サイドメニュー（バナーのとこ）↓ -->
    <article>
      
        <div id="bannerzone">
          <div class="search">
            <form action="#" method="get">
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