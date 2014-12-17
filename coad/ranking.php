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
    <link rel="stylesheet" href="css/ranking.css">
    <!-- ↑ここにはそのページ用のcss↑ -->

    <title>ランキング | HALシネマ</title>

		<?php
			// DB接続設定
			$connect = mysqli_connect("localhost","root","");
			mysqli_select_db($connect,"hal_cinema");
			mysqli_set_charset($connect,"utf8");
			// DB接続設定終わり

			//チケット予約情報を取得
			$sql = "SELECT mo.movie_id,count(mo.movie_id) as cnt,tr.reserved_time as rday,mo.movie_title as title,mo.thumbnail as thm,mo.movie_detail as det,mo.actor as act,mo.director as dir FROM ticket_reserved as tr,movie as mo WHERE tr.reserved_movieid = mo.movie_id GROUP BY mo.movie_id ORDER BY count(mo.movie_id) DESC";
			$result = mysqli_query($connect,$sql);
		?>

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

    <div id="wrapper" class="clearfix ranking-content">

      <!-- ↓メインのコンテンツを置くとこ↓ -->
      <article>
        <div id="contentszone">
          <h2 class="clearfix">映画ランキング</h2>
          <div class="article-detail">
            <h3>詳細情報</h3>
            <div class="tab-btn clearfix">
              <ul>
                <li class="tab-active">週間</li>
                <li>月間</li>
              </ul>
            </div>

		<?php
			
			error_reporting(E_ALL & ~E_NOTICE);
			$rankcnt = 1;
			//チケット販売数が多い順にランキング生成
			while( $data = mysqli_fetch_array( $result ) )
			{
				echo "<a href='movie_planlist_detail.php?title=".$data["title"]."&thm=".$data["thm"]."&det=".$data["det"]."&act=".$data["act"]."&dir=".$data["dir"]."'>";
				echo "<div class='rank-list-wrp'>";
				echo "<div class='rank-list clearfix'>";

				if( $rankcnt == 1 ){echo "<div class='rank-no rank1'>";}
				else if( $rankcnt == 2 ){echo "<div class='rank-no rank2'>";}
				else if( $rankcnt == 3 ){echo "<div class='rank-no rank3'>";}
				else{echo "<div class='rank-no'>";}
				echo $rankcnt."</div>";
				$rankcnt++;

				echo "<div class='rank-thm'><img src='images/thumbnail/".$data["thm"]."' alt='サンプルサムネイル'></div>";
				echo "<div class='rank-title'><h4>".$data["title"]."</h4></div>";
				echo "</div>";
				echo "</div>";
				echo "</a>";
			}
		?>
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