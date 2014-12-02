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
    <link rel="stylesheet" href="css/contact.css">
    <!-- ↑ここにはそのページ用のcss↑ -->

    <title>お問い合わせ | HALシネマ</title>

  </head>

  <body>

  <?php include("header.php"); ?>

    <div id="wrapper" class="clearfix contact">

      <!-- ↓メインのコンテンツを置くとこ↓ -->
      <article>
        <div id="contentszone">
          <h2 class="clearfix">お問い合わせ</h2>
          <div class="article-detail">
            <form action="" method="post">
              <h3>お問い合わせ種別</h3>
              <div class="glid-list">
                <select name="category" id="">
                  <option value=""> - 選択してください。 - </option>
                  <option value="">サービスに関するお問い合わせ</option>
                  <option value="">その他</option>
                </select>
              </div>
              <h3>お問い合わせ内容</h3>
              <p><textarea name="" id="" cols="30" rows="10" class="textarea"></textarea></p>
              <p><input type="submit" value="送信"></p>
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