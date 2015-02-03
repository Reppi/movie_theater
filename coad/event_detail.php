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

  </head>

  <body>

  <?php include("header.php"); ?>

    <div id="wrapper" class="clearfix event-detail">

      <!-- ↓メインのコンテンツを置くとこ↓ -->
      <article>

        <div id="contentszone">
          <h2 class="clearfix">イベント詳細</h2>
          <div class="article-detail">
            <h3>二条にて「舞妓はレディ」舞台挨拶の開催決定！！</h3>
            <div class="clearfix col2-wrp">
              <div class="thm-img">
                <img src="./images/sumple264x234.jpg">
              </div>
              <div class="detail-list">
                <p class="date">開催日:<time>2014年10月22日</time></p>
                <ul>
                  <li>周防 正行監督</li>
                  <li>上白石 萌音</li>
                </ul>
                <p>※登壇者の予定は変更になることもございますので、あらかじめご了承ください。</p>
              </div>
            </div>
            <div class="detail-txt">
              <p>
                10月17日（金）映画「ゴッドタン キス我慢選手権 THE MOVIE2 サイキック・ラブ」の公開を記念して、10月5日（土）TOHOシネマズ 名古屋ベイシティ、梅田にて『世界最速！先行プレミア上映』（舞台挨拶付き有料先行上映）の開催が決定いたしました！<br>
                ゲストには、劇団ひとりさんと佐久間宣行監督をお迎えし、舞台挨拶を実施致します。<br>
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
