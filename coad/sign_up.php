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
            <form action="entry.php" method="post">
              <div class="glid-list">
                <p>ログインID<span><input type="text" class="text-box text-box-col-1" name="user_id"></span></p>
              </div>
              <div class="glid-list">
                <p>パスワード<span><input type="password" class="text-box text-box-col-1" name="password"></span></p>
              </div>
              <div class="glid-list">
                <p>お名前<span><input type="text" class="text-box text-box-col-2" name="name_sei"><input type="text" class="text-box text-box-col-2 text-box-col-2-last" name="name_mei"></span></p>
              </div>
              <div class="glid-list">
                <p>ふりがな<span><input type="text" class="text-box text-box-col-2" name="furi_sei"><input type="text" class="text-box text-box-col-2 text-box-col-2-last" name="furi_mei"></span></p>
              </div>
              <div class="glid-list">
                <p>性別<span><label for=""><input type="radio" name="sex" class="radio-col-2" value="1" >男性</label>&nbsp;<label for=""><input type="radio" name="sex" class="radio-col-2" value="2" >女性</label></span></p>
              </div>
              <div class="glid-list">
                <p>都道府県<span>
                  <select name="address_prefecture">
                    <option value="北海道">北海道</option>
                    <option value="青森県">青森県</option>
                    <option value="秋田県">秋田県</option>
                    <option value="岩手県">岩手県</option>
                    <option value="山形県">山形県</option>
                    <option value="宮城県">宮城県</option>
                    <option value="福島県">福島県</option>
                    <option value="茨城県">茨城県</option>
                    <option value="栃木県">栃木県</option>
                    <option value="群馬県">群馬県</option>
                    <option value="埼玉県">埼玉県</option>
                    <option value="神奈川県">神奈川県</option>
                    <option value="千葉県">千葉県</option>
                    <option value="東京都">東京都</option>
                    <option value="山梨県">山梨県</option>
                    <option value="長野県">長野県</option>
                    <option value="新潟県">新潟県</option>
                    <option value="富山県">富山県</option>
                    <option value="石川県">石川県</option>
                    <option value="福井県">福井県</option>
                    <option value="岐阜県">岐阜県</option>
                    <option value="静岡県">静岡県</option>
                    <option value="愛知県">愛知県</option>
                    <option value="三重県">三重県</option>
                    <option value="滋賀県">滋賀県</option>
                    <option value="京都府">京都府</option>
                    <option value="大阪府">大阪府</option>
                    <option value="兵庫県">兵庫県</option>
                    <option value="奈良県">奈良県</option>
                    <option value="和歌山県">和歌山県</option>
                    <option value="鳥取県">鳥取県</option>
                    <option value="島根県">島根県</option>
                    <option value="岡山県">岡山県</option>
                    <option value="広島県">広島県</option>
                    <option value="山口県">山口県</option>
                    <option value="徳島県">徳島県</option>
                    <option value="香川県">香川県</option>
                    <option value="愛媛県">愛媛県</option>
                    <option value="高知県">高知県</option>
                    <option value="福岡県">福岡県</option>
                    <option value="佐賀県">佐賀県</option>
                    <option value="長崎県">長崎県</option>
                    <option value="熊本県">熊本県</option>
                    <option value="大分県">大分県</option>
                    <option value="宮崎県">宮崎県</option>
                    <option value="鹿児島県">鹿児島県</option>
                    <option value="沖縄県">沖縄県</option>
                  </select>
                </span></p>
              </div>
              <div class="glid-list">
                <p>市町村・番地<span><input type="text" class="text-box text-box-col-1" name="address_municipalities"></span></p>
              </div>
              <div class="glid-list">
                <p>メールアドレス<span><input type="text" class="text-box text-box-col-1" name="email"></span></p>
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