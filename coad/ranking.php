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
    <link rel="stylesheet" href="css/ranking.css">
    <!-- ↑ここにはそのページ用のcss↑ -->

    <title>ランキング | HALシネマ</title>

		<?php

			//週間ランキングなら0 月間なら1
			$rankingType = 0;

			// DB接続設定
			$connect = mysqli_connect("localhost","user","user");
			mysqli_select_db($connect,"hal_cinema");
			mysqli_set_charset($connect,"utf8");
			// DB接続設定終わり

			//$nowdate = date(Ynj);

			//チケット予約情報を取得
			if( $rankingType == 0 )
			{
				$sql = "SELECT mo.movie_id,count(mo.movie_id) as cnt,tr.reserved_time as rday,mo.movie_title as title,mo.thumbnail as thm,mo.movie_detail as det,mo.actor as act,mo.director as dir FROM ticket_reserved as tr,movie as mo WHERE tr.reserved_movieid = mo.movie_id GROUP BY mo.movie_id ORDER BY count(mo.movie_id) DESC";
			}
			else if( $rankingType == 1 )
			{
				$sql = "SELECT mo.movie_id,count(mo.movie_id) as cnt,tr.reserved_time as rday,mo.movie_title as title,mo.thumbnail as thm,mo.movie_detail as det,mo.actor as act,mo.director as dir FROM ticket_reserved as tr,movie as mo WHERE tr.reserved_movieid = mo.movie_id GROUP BY mo.movie_id ORDER BY count(mo.movie_id) DESC";
			}

			$result = mysqli_query($connect,$sql);

		?>

  </head>

  <body>

  <?php include("header.php"); ?>

    <div id="wrapper" class="clearfix ranking-content">

      <!-- ↓メインのコンテンツを置くとこ↓ -->
      <article>
        <div id="contentszone">
          <h2 class="clearfix">映画ランキング</h2>
          <div class="article-detail">
            <h3>詳細情報</h3>
            <div class="tab-btn clearfix">
              <ul>
		<?php
			if( $rankingType == 0 )
			{
		                echo "<li class='tab-active'>週間</li>";
		                echo "<li>月間</li>";
			}
			else if( $rankingType == 1 )
			{
		                echo "<li>週間</li>";
		                echo "<li class='tab-active'>月間</li>";
			}
		?>

              </ul>
            </div>

		<?php

			error_reporting(E_ALL & ~E_NOTICE);
			$rankcnt = 1;
			//チケット販売数が多い順にランキング生成
			while( $data = mysqli_fetch_array( $result ) )
			{
				if($rankcnt<11)
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

					echo "<div class='rank-thm'><img src='images/rankingthumbnail/".$data["thm"]."' alt='サンプルサムネイル'></div>";
					echo "<div class='rank-title'><h4>".$data["title"]."</h4></div>";
					echo "</div>";
					echo "</div>";
					echo "</a>";
				}
			}
		?>
            </div>
          </div>
        <div id="bannerzone">
          <?php include("bannerzone.php"); ?>
        </div>

      </article>
      <!-- ↑メインのコンテンツを置くとこ↑ -->

    </div>

  <?php include("footer.php"); ?>

  </body>

</html>
