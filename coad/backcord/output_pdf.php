<html lang="ja">

	<head>

		<title>PDF作成画面</title>
		<!-- 文字化け対策 -->
		<meta http-equiv="content-type" content="text/html" charset="shift_jis">
		<link rel="stylesheet" type="text/css" href="css/style.css" />

	</head>

	<body>
		<h1>PDF作成フォーム</h1>
		<form action="pdf.php" method="POST">

			<select name="month">
				<option value="01">1月</option>
				<option value="02">2月</option>
				<option value="03">3月</option>
				<option value="04">4月</option>
				<option value="05">5月</option>
				<option value="06">6月</option>
				<option value="07">7月</option>
				<option value="08">8月</option>
				<option value="09">9月</option>
				<option value="10">10月</option>
				<option value="11">11月</option>
				<option value="12">12月</option>
			</select>
			<input type="submit" value="PDFに出力する">

		</form>

	</body>

</html>