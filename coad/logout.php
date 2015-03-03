<?php
require_once("header-meta.php");
?>
<?php
if (isset($_SESSION["USERID"])) {
  $errorMessage = "ログアウトしました。";
}
else {
  $errorMessage = "セッションがタイムアウトしました。";
}
// セッション変数のクリア
$_SESSION = array();
// セッションクリア
@session_destroy();
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
    <link rel="stylesheet" href="css/index.css">
    <!-- ↑ここにはそのページ用のcss↑ -->

    <title>トップページ | HALシネマ</title>

  </head>

  <body>
<?php include("header.php"); ?>

    <div id="wrapper" class="clearfix">

      <!-- ↓メインのコンテンツを置くとこ↓ -->
      <article>
        <h2>ログアウト完了</h2>
        <p>
        <form action="index.php">
        <input type="submit" value="トップページへ戻る">
      </form>
      </p>
      </article>
      <!-- ↑メインのコンテンツを置くとこ↑ -->

      <div id="bannerzone">
        バナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナーバナー
      </div>

    </div>

  <?php include("footer.php"); ?>

  </body>

</html>
