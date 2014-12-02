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

    <title>映画館テンプレ</title>

  </head>

  <body>

    <!-- ↓グローバルメニュー↓ -->
    <header id="header">

      <!-- ↓トップリンクナビがあるとこ↓ -->
      <nav id="toplinkbar">

        <a href="#"><img class="logo" src="images/logo.jpg"></a>
        <a href="#"><img class="member_botton" src="images/member_botton.png"></a>

        <div id="toplinkbar_inner">
          <ul>
            <a href="#"><li id="toplinkbar_menu1">サイトマップ</li></a>
            <a href="#"><li id="toplinkbar_menu2">よくあるご質問</li></a>
            <a href="#"><li>お問い合わせ</li></a>
          </ul>
        </div>

      </nav>
      <!-- ↑トップリンクナビがあるとこ↑ -->

      <!-- ↓グローバルメニューがあるとこ↓ -->
      <nav id="global">

        <div id="global_inner">

          <ul>
            <a href="#"><li id="global_menu1">映画スケジュール</li></a>
            <a href="#"><li id="global_menu2">上映予定作品</li></a>
            <a href="#"><li id="global_menu3">イベント情報</li></a>
            <a href="#"><li id="global_menu4">館内情報</li></a>
            <a href="#"><li id="global_menu5">上映ランキング</li></a>
            <a href="#"><li>アクセス</li></a>
          </ul>

        </div>

      </nav>
      <!-- ↑グローバルメニューがあるとこ↑ -->

    </header>
    <!-- ↑グローバルメニュー↑ -->

    <div id="wrapper" class="clearfix sign-up">

      <!-- ↓メインのコンテンツを置くとこ↓ -->
      <article>

        <div id="contentszone">
          <h2 class="clearfix">イベント詳細</h2>
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