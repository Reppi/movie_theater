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
		<link rel="stylesheet" href="css/creditcard_changer.css">
		<!-- ↑ここにはそのページ用のcss↑ -->

		<title>クレジットカード情報入力 | HALシネマ</title>

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

		<div id="wrapper" class="clearfix">

			<!-- ↓メインのコンテンツを置くとこ↓ -->
			<article>

				<div id="contentszone">
					<h2 class="clearfix">クレジットカード情報入力</h2>
					<div id="contentscover">
						<div id="button">
							<p id="member_read">クレジットカード情報を入力してください。</p>
						</div>

						<p class="clearfix"></p>

						<div id="select">
							<div class="select_content">
								<p class="select_name">クレジットカード番号</p>
								<p class="space">　</p>
								<p class="select_sum">
									<form>
										<input type="text" class="creditnumber" maxlength="4" name="creditcardnumber1">
										<input type="text" class="creditnumber" maxlength="4" name="creditcardnumber2">
										<input type="text" class="creditnumber" maxlength="4" name="creditcardnumber3">
										<input type="text" class="creditnumber" maxlength="4" name="creditcardnumber4">
									</form>
								</p>
							</div>

							<p class="select_border"></p>

							<div class="select_content">
								<p class="select_name">カード名義</p>
								<p class="space">　</p>
								<p class="select_sum">
									<form><input type="text" class="normalwidth"></form>
								</p>
								<pclass="clearfix"></p>
							</div>

							<p class="select_border"></p>

							<div class="select_content">
								<p class="select_name">ＹＥＡＲ</p>
								<p class="space">　</p>
								<p class="select_sum">
									<form>
										<select name="creditcard_year">
											<option>2015</option>
											<option>2016</option>
											<option>2017</option>
											<option>2018</option>
										</select>
									</form>
								</p>
								<pclass="clearfix"></p>
							</div>

							<p class="select_border"></p>

							<div class="select_content">
								<p class="select_name">ＭＯＮＴＨ</p>
								<p class="space">　</p>
								<p class="select_sum">
									<form>
										<select name="creditcard_month">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
											<option>8</option>
											<option>9</option>
											<option>10</option>
											<option>11</option>
											<option>12</option>
										</select>
									</form>
								</p>
								<pclass="clearfix"></p>
							</div>

							<p class="select_border"></p>

							<div class="select_content">
								<p class="select_name">セキュリティコード</p>
								<p class="space">　</p>
								<p class="select_sum">
									<form>
										<input type="text" class="creditnumber" maxlength="4" name="securitycord">
									</form>
								</p>
								<pclass="clearfix"></p>
							</div>

						<p class="select_border"></p>
					
					</div>
				</div>
				<p class="clearfix"></p>

				<p id="next">入力情報確認画面へ</p>

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