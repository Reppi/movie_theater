
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
    <link rel="stylesheet" href="css/movie_detail.css">
    <!-- ↑ここにはそのページ用のcss↑ -->

    <title>映画詳細 | HALシネマ</title>

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

    <div id="wrapper" class="clearfix movie-detail">

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
          <!-- サイドコンテンツ置くとこ 横幅236px -->バナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナー
        </div>

      </article>
      <!-- ↑メインのコンテンツを置くとこ↑ -->

    </div>

    <?php include("footer.php"); ?>

  </body>

</html>