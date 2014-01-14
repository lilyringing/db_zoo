<?php include ("_header.php"); 
      include ("_navbar.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link href="<?php echo base_url('css/bootstrap.min.css');?>" rel="stylesheet" media="screen">
	<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="http://silviomoreto.github.io/bootstrap-select/stylesheets/bootstrap-select.css">
</head>

<body>
	<div class="container-fluid">
		<div class="span3">
			<div class="text-center">
				<div class="panel-group" id="accordion">
  					<div class="panel panel-default">
    					<div class="panel-heading">
      						<h4 class="panel-title">
        					<button type="button" class="btn btn-default btn-lg" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
        					台北捷運</button>
      						</h4>
    					</div>
    						
    					<div id="collapseOne" class="panel-collapse collapse">
      						<div class="panel-body text-left">
      							<ul>
      								<li>請搭乘文湖線，在動物園站下車</li>
      								<li>請搭乘板南線，在市政府站下車，再轉乘綠1、棕18或棕21公車</li>
      								<li><strong>2014年1月11日至2月9日期間之假日</strong>，可於捷運「板南線 市政府站」、「信義線 象山站」
      									或「信義線 台北101/世貿站」下車，再轉乘「<strong>貓熊專車123路</strong>」免費接駁公車至動物園
      								</li>	
      							</ul>
      						</div>
						</div>
					</div>
							
					<div class="panel panel-default">
    					<div class="panel-heading">
      						<h4 class="panel-title">
        					<button type="button" class="btn btn-default btn-lg" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
        					公共汽車</button>
      						</h4>
    					</div>
    							
						<div id="collapseTwo" class="panel-collapse collapse">
      						<div class="panel-body text-left">
      							<ul>
      								<li>請搭乘236(含區間車)、237、282(含副線)、294、295、611、676、679、793、933、小12、棕3、棕6、
      									棕11(含副線)、棕15(含區間車)、棕18、棕21、綠1、1501、1503及1558等路線，在捷運動物園站下車</li>
      								<li><dl>
      									<dt>「貓熊專車123路」免費接駁</dt>
      									<br>
										<dd>2014年1月11日至2月9日期間之假日，交通局加開免費接駁專車「貓熊專車123路」至動物園。
											民眾可配合「『府前地下停車場』假日停車優惠」方案(取停車票卡至動物園蓋章可享6小時免費停車優惠)規劃交通方式，或者經由捷運板南線、信義線轉乘。</dd>
										<br>
										<dd>專車起迄：臺北市政府-捷運動物園站</dd>
										<br>
										<dd>專車班距：10~15分 (部分車輛彩繪大貓熊圖樣)</dd>
										<br>
										<dd>營運日期：
											2014年1/11、1/12、1/18、1/19、1/25、1/26、1/31、2/1、2/2、2/3、2/4、2/8、2/9。</dd>
									</dl></li>
      							</ul>
      						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="span6">
			<img src="<?php echo base_url("image/TrafficMap.jpg");?>" alt="Traffic Map">
		</div>
		
		<div class="span3">
			<div class="text-center">
				<div class="panel-group" id="accordion">
  					<div class="panel panel-default">
    					<div class="panel-heading">
      						<h4 class="panel-title">
        					<button type="button" class="btn btn-default btn-lg" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
        					自用車</button>
      						</h4>
    					</div>
    						
    					<div id="collapseThree" class="panel-collapse collapse">
      						<div class="panel-body text-left">
      							<ul>
      								<li>臺北(1)：辛亥路 → 國道3號臺北聯絡道 → 萬芳交流道(往木柵方向) → 左轉木柵路 → 右轉萬福橋 → 右轉新光路</li>
      								<li>臺北(2)：信義路 → 信義快速道路 → 萬芳交流道(往木柵方向) → 左轉木柵路 → 右轉萬福橋 → 右轉新光路</li>
      								<li>臺北(3)：和平東路 → 莊敬隧道 → 軍功路下坡到底 → 左轉木柵路 → 右轉萬福橋 → 右轉新光路</li>
      								<li>臺北(4)：南深公路 → 深坑→ 至深坑後右轉順行 → 進入木柵路即左轉萬福橋 → 右轉新光路</li>
      								<li>臺北(5)：新店寶橋路 → 寶僑 → 直行木新路 → 至秀明路右轉萬壽橋 → 左轉新光路</li>
      								<li>國道1號中山高速公路：建國北路高架道 → 下辛亥路左轉 → 國道3號臺北聯絡道 → 萬芳交流道(往木柵方向) → 左轉木柵路 → 右轉萬福橋 → 右轉新光路</li>
      								<li>國道3號北部第二高速公路：木柵交流道 → 國道3號臺北聯絡道 → 萬芳交流道(往木柵方向) → 左轉木柵路 → 右轉萬福橋 → 右轉新光路</li>
      								<li>國道3號北部第二高速公路：木柵交流道 → 左轉新光路三段</li>	
      							</ul>
      						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
    <script src="http://silviomoreto.github.io/bootstrap-select/javascripts/bootstrap-select.js"></script>
</body>
</html>
