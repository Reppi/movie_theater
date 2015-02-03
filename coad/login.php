<?php
require_once("header-meta.php");
?>
<!DOCTYPE html>
<!-- test -->
<!--「海賊王に俺はなる！」-->
<html>

  <head>

    <meta charset="UTF-8">

    <!-- ↓ここには全ページ共通のcss↓ -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <!-- ↑ここには全ページ共通のcss↑ -->

    <!-- ↓ここにはそのページ用のcss↓ -->
    <link rel="stylesheet" href="css/sign_up.css">
    <!-- ↑ここにはそのページ用のcss↑ -->

    <title>ログインページ | HALシネマ</title>

  </head>

  <body>

  <?php include("header.php"); ?>

    <div id="wrapper" class="clearfix sign-up">

      <!-- ↓メインのコンテンツを置くとこ↓ -->
      <article>

        <div id="contentszone">
          <h2 class="clearfix">ログイン</h2>
          <div class="article-detail">
            <h3>お客様情報入力</h3>
            <form action="login_in.php" method="post">
              <div class="glid-list">
                <p>ログインID<span><input type="text" class="text-box text-box-col-1" name="user_id"></span></p>
              </div>
              <div class="glid-list">
                <p>パスワード<span><input type="password" class="text-box text-box-col-1" name="password"></span></p>
              </div>
              <p><input type="submit" name="login" value="ログイン"></p>
            </form>
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
