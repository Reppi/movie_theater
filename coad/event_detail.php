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
    <link rel="stylesheet" href="css/event_detail.css">
    <!-- ↑ここにはそのページ用のcss↑ -->

    <title>イベント詳細 | HALシネマ</title>
	<?php
		//映画一覧画面から取ってきた情報代入
		$title		= $_GET['title'];
		$thumbail 	= $_GET['thm'];
		$detail		= $_GET['det'];
		$day		= $_GET['day'];
		$event_day	= @spliti ("-", $day, 3);

		// DB接続設定
		$connect = mysqli_connect("localhost","user","user");
		mysqli_select_db($connect,"hal_cinema");
		mysqli_set_charset($connect,"utf8");
		// DB接続設定終わり

		//俳優・監督情報を取得
		$sql = "SELECT movie.actor as act,movie.director as dir FROM event,movie WHERE event.event_id = movie.movie_id";
		$result = mysqli_query($connect,$sql);
		$data = mysqli_fetch_array( $result, MYSQLI_ASSOC );

	?>
<!-- SELECT 受注表.受注番号,顧客表.顧客名,
         商品表.商品名,受注表.受注個数,受注表.納品日
         FROM 受注表,顧客表,商品表
         WHERE 受注表.顧客コード = 顧客表.顧客コード
               AND 受注表.商品コード = 商品表.商品コード ; -->
  </head>

  <body>

  <?php include("header.php"); ?>

    <div id="wrapper" class="clearfix event-detail">

      <!-- ↓メインのコンテンツを置くとこ↓ -->
      <article>

        <div id="contentszone">
          <h2 class="clearfix">イベント詳細</h2>
          <div class="article-detail">
            <h3><?php echo $title; ?></h3>
            <div class="clearfix col2-wrp">
              <div class="thm-img">
                <img src="./images/sumple264x234.jpg">
              </div>
              <div class="detail-list">
                <p class="date">開催日:<time><?php echo $event_day[0]."年".$event_day[1]."月".$event_day[2]."日"; ?></time></p>
                <ul>
                  <li><?php echo $data["dir"]."監督" ?></li>
                  <li><?php echo $data["act"] ?></li>
                </ul>
                <p>※登壇者の予定は変更になることもございますので、あらかじめご了承ください。</p>
              </div>
            </div>
            <div class="detail-txt">
              <p>
			<?php echo $detail; ?>
              </p>
            </div>
          </div>
        </div>

        <div id="bannerzone">
          <?php include("bannerzone.php"); ?>
        </div>

      </article>
      <!-- ↑メインのコンテンツを置くとこ↑ -->

    </div>

  <?php include("footer.php"); ?>

  </body>

</html>
