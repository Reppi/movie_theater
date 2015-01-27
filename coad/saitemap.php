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
		<link rel="stylesheet" href="css/saitemap.css">
		<!-- ↑ここにはそのページ用のcss↑ -->

		<title>サイトマップ | HALシネマ</title>

	</head>

	<body>

	<?php include("header.php"); ?>

		<div id="wrapper" class="clearfix">

			<!-- ↓メインのコンテンツを置くとこ↓ -->
			<article>

				<div id="contentszone">
					<h2 class="clearfix">サイトマップ</h2>
					<div id="contentscover"><!-- コンテンツ横の余白16pxを作るための箱 -->
						<h5 class="top">ホーム</h5>
						<p><a href="index.php">ホーム</a></p>
						<h5>劇場案内</h5>
						<p><a href="institution.php">館内情報</a></p>
						<p><a href="access.php">アクセス</a></p>
						<h5>作品</h5>
						<p><a href="schedule.php">映画スケジュール</a></p>
						<p><a href="movie_planlist.php">上映予定作品</a></p>
						<p><a href="ranking.php">上映ランキング</a></p>
						<h5>ログイン</h5>
						<p><a href="login.php">ログイン</a></p>
						<p><a href="sign_up.php">会員登録</a></p>
						<h5>よくあるご質問</h5>
						<p><a href="common_question.php">よくあるご質問</a></p>
						<h5>お問い合わせ</h5>
						<p><a href="contact.php">お問い合わせ</a></p>
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