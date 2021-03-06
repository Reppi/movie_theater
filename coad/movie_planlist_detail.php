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
    <link rel="stylesheet" href="css/movie_planlist_detail.css">
    <!-- ↑ここにはそのページ用のcss↑ -->

    <title>近日公開予定映画詳細 | HALシネマ</title>

	<?php
		//映画一覧画面から取ってきた情報代入
		$title		= $_GET['title'];
		$thumbail 	= $_GET['thm'];
		$detail		= $_GET['det'];
		$actor		= $_GET['act'];
		$director	= $_GET['dir'];
	?>

  </head>

  <body>

    <?php include("header.php"); ?>

    <div id="wrapper" class="clearfix movie-planlist-detail">

      <!-- ↓メインのコンテンツを置くとこ↓ -->
      <article>

        <div id="contentszone">
          <h2 class="clearfix"><?php echo $title ?></h2>
          <div class="article-detail">
            <div class="clearfix col2-wrp">
              <div class="vi-img">
		<?php
			echo "<img src='images/movieimages/".$thumbail."' >"
		?>
                <div class="vi-detail-msg">
			<p><?php echo $detail ?></p>
                </div>
              </div>
              <div class="detail-list">
                <h3>詳細情報</h3>
              </div>
            </div>
            <div class="detail-txt">
              <p>
		<?php echo $actor."<br>".$director ?>
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

    <!-- ↓フッターおくとこ↓ -->
    <footer id="footer">

      <div id="fotter_inner">

        <div class="fotter_block">
          banner置くってさ
        </div>

        <div class="fotter_block">

          <ul>
            <li>映画スケジュール</li>
            <li>上映予定作品</li>
            <li>イベント情報</li>
            <li>館内情報</li>
            <li>上映スケジュール</li>
            <li>アクセス</li>
          </ul>

        </div>

        <div id="last_block" class="fotter_block">

          <ul>
            <li>新着情報</li>
            <li>作品情報</li>
            <li>よくあるご質問</li>
            <li>お問い合わせ</li>
          </ul>

        </div>

      </div>

    </footer>
    <!-- ↑フッターおくとこ -->

  </body>

</html>
