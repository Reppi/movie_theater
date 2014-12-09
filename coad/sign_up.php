<!-- HTML5で開発します -->
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

    <title>会員登録ページ | HALシネマ</title>

  </head>

  <body>

  <?php include("header.php"); ?>

    <div id="wrapper" class="clearfix sign-up">

      <!-- ↓メインのコンテンツを置くとこ↓ -->
      <article>

        <div id="contentszone">
          <h2 class="clearfix">会員登録</h2>
          <div class="article-detail">
            <h3>お客様情報入力</h3>
            <form action="" method="post">
              <div class="glid-list">
                <p>ログインID<span><input type="text" class="text-box text-box-col-1"></span></p>
              </div>
              <div class="glid-list">
                <p>お名前<span><input type="text" class="text-box text-box-col-2"><input type="text" class="text-box text-box-col-2 text-box-col-2-last"></span></p>
              </div>
              <div class="glid-list">
                <p>ふりがな<span><input type="text" class="text-box text-box-col-2" ><input type="text" class="text-box text-box-col-2 text-box-col-2-last" ></span></p>
              </div>
              <div class="glid-list">
                <p>性別<span><label for=""><input type="radio" name="sex" class="radio-col-2" >男性</label>&nbsp;<label for=""><input type="radio" name="sex" class="radio-col-2" >女性</label></span></p>
              </div>
              <div class="glid-list">
                <p>住所<span><input type="text" class="text-box text-box-col-1"></span></p>
              </div>
              <div class="glid-list">
                <p>メールアドレス<span><input type="text" class="text-box text-box-col-1"></span></p>
              </div>
              <div class="glid-list">
                <p>パスワード<span><input type="text" class="text-box text-box-col-1"></span></p>
              </div>
              <p><input type="submit" value="登録"></p>
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