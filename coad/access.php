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
		<link rel="stylesheet" href="css/access.css">
		<!-- ↑ここにはそのページ用のcss↑ -->

		<title>アクセス | HALシネマ</title>

		<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyAhZHHmFPEKFhx8ze-Yss4pAiUADa5pGDM&sensor=false"></script>

		<script type="text/javascript">
			var map;
			var styledMap;
			function initialize()
		    	{
				//映画館の位置をマップ用の座標に変換
				var cinema = new google.maps.LatLng(35.691667,139.696944);

				//マップスタイル設定
				var mapStyles =
				[
					{
						featureType:"road",
						elementType:"geometry",
						stylers:
						[
							{ hue: "#FFFF00" }, 
							{ saturation: 50 }, 
							{ lightness: 30 }, 
							{ gamma: 3.0 }, 
						]
					}
				];	
				var mapOptions = 
				{
					//初期中心地
					center:cinema,
					//初期ズーム値
					zoom:18,
					//マップの表示方法の設定
					mapTypeId:google.maps.MapTypeId.ROADMAP
				};

				map = new google.maps.Map(document.getElementById("mapzone"),mapOptions);
				//styledMap = new google.maps.StyledMapType(mapStyles,{name: "mapStyles"});
				//map.mapTypes.set('mapStyles', styledMap);

				var marker = new google.maps.Marker
				({
					position:cinema , map:map , animation:google.maps.Animation.BOUNCE
				});

		       		function codeAddress()
				{
			                var address = document.getElementById("address").value;
				        var geocoder = new google.maps.Geocoder();
			            	geocoder.geocode( { 'address': address}, function(results, status)
					{
				              	if(status == google.maps.GeocoderStatus.OK)
						{
							map.setCenter(results[0].geometry.location);
						}
						else
						{
							alert("error reason: " + status);
						}
					});
				}
				var btn = document.getElementById('btn');
				btn.addEventListener('click',codeAddress,false);
			}
			window.onload = initialize;
		</script>

	</head>

	<body>

	<?php include("header.php"); ?>

		<div id="wrapper" class="clearfix">

			<!-- ↓メインのコンテンツを置くとこ↓ -->
			<article>

				<div id="contentszone">
					<h2 class="clearfix">アクセス</h2>
					<div id="contentscover"><!-- コンテンツ横の余白16pxを作るための箱 -->
						<div id="mapzone">
							googlemapが入ります。
						</div>
						<div id="accessdatazone">
							<h3>HALシネマ</h3>
							<table>
								<tr>
									<td>住所</td>
									<td>〒160-0023 東京都新宿区西新宿１－７－３</td>
								</tr>
								<tr>
									<td>TEL</td>
									<td>03-3344-1010</td>
								</tr>
								<tr>
									<td>新宿駅西口より徒歩５分</td>
								</tr>
							</table>
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