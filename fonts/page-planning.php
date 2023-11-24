<!DOCTYPE html>
<!--〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓-->
<!--Header構成------------------------------------------------------------------------------------------------------------>
<!--〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓-->
<head>
<meta></meta>

<!--〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓-->
<!--Css------------------------------------------------------------------------------------------------------------------>
<script>function Css_________________________________________________________________________________________(){}</script>
<!--〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓-->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css?<?php echo file_date(get_template_directory() . '/style.css'); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/Paint.css?<?php echo file_date(get_template_directory() . '/css/Paint.css'); ?>" type="text/css" />

<!--〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓-->
<!--Jquery--------------------------------------------------------------------------------------------------------------->
<script>function Jquery______________________________________________________________________________________(){}</script>
<!--〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓-->
<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>

<!----------------------------------------------------------------------------------------------------------------------->
<script>function ____Onload(){}</script>
<!----------------------------------------------------------------------------------------------------------------------->
<script>
$(function(){

	$(window).on('load',function(){
		FadeInMenu();
	});
	$(window).resize(function (){
		FadeInMenu();
	});
	$(document).ready(function(){
		FadeInMenu();
	});
});
function FadeInMenu(){
	$(".MenuPc").css("opacity","1");
}
</script>

<!----------------------------------------------------------------------------------------------------------------------->
<script>function ____OnClick(){}</script>
<!----------------------------------------------------------------------------------------------------------------------->
<script>
jQuery(function($){
		$(".SubMenuBtn").on("click", function() {
			// hide の状況をチェック
			classStr = $(this).find(".more").attr("class");
			if( classStr.indexOf("hide") > -1 ){
		$(this).addClass("subMenuClose");
		$(this).removeClass("subMenuOpen");
				$(this).find(".content").addClass("hide");
				$(this).find(".more").removeClass("hide");
			}
			else{
		$(this).removeClass("subMenuClose");
		$(this).addClass("subMenuOpen");

				$(this).find(".content").removeClass("hide");
				$(this).find(".more").addClass("hide");
			}
		});
});
	
</script>
<!----------------------------------------------------------------------------------------------------------------------->
<script>function ____MouseOver(){}</script>
<!----------------------------------------------------------------------------------------------------------------------->

</head>

<!--〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓-->
<!--body構成-------------------------------------------------------------------------------------------------------------->
<script>function Body______________________________________________________________________________________(){}</script>
<!--〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓-->
<body>
<?php require "common.php"; ?> 																	<!-- Call common.php ---->
<?php require "header.php"; ?> 																	<!-- Call common.php ---->
<!----------------------------------------------------------------------------------------------------------------------->
<script>function ____page_header(){}</script>
<!----------------------------------------------------------------------------------------------------------------------->
<div class="PageWrapper"> 
	<!-- top ---->
	<div class="ContentsArea" id="top">
			<!-- caption -->
			<div class="pLeft">
				<div class="title fs50 titleFontFamily ">
					<div class="slideMask_right" title="delay250ms">
						<div class="child" title="">
							PLANNING
						</div>
					</div>
				</div>
				<div class="caption">
					<div class="slideMask_right" title="delay500ms">
						<div class="child" title="">
							基本的な色彩理論を踏まえて 経験に基づく独自の理論による提案をしています。<br>
							<br>
							色の世界は無限で 秘めた力も多様です。<br>
							<br>
							心地良いと感じる色は人によって様々であり その個性を尊重して、色・質感で表現するのが空間における色彩計画です。<br>
							色そのもののイメージだけではなく、表面の凹凸・質感 光沢などを踏まえて選ぶこと、時間の流れや光を充分に意識することを大切にします。<br>
						</div>
					</div>
				</div>
			</div>
			<!-- IMAGE -->
			<div class="pRight">
				<div class="image">
					<div class="slideMask_right" title="">
						<img class="child" src="<?php echo get_template_directory_uri(); ?>/image/plan/plan_top_1.jpg">
					</div>
				</div>
			</div>
	</div><!--ContentsArea --> 
	<div class="ContentsArea FadeIn" id="SubMenu">
		<div class="Parts Left SubMenuBtn subMenuClose">
				<div class="Numbering"># 1 </div>
				<div class="Title">planningについて<br><span class="s_eng">about planning</span></div>
				<div class="more">+ view</div>
				<div class="content hide">
					<div class="image"><img src="<?php echo get_template_directory_uri(); ?>/image/sample.jpg"></div>
					<div class="text">
						空間に色を加えることは、住環境では暮らしや行動へ影響を与えてくれ、<br>
						店舗や商業施設では、人の気持ちを動かすことへの効果が期待できます。<br>
						単体だとただ一つの色にすぎなくても、何色か組み合わせたり家具やインテリアと合わせたりすることで、歴史や文化を感じたりその空間に深みを増します。<br>
						質感が加わることで光の影響を存分に得て、空間に広がりや奥行きを持たせてくれます。<br>
						どんな空間にしたいか、色と質感でバランスを整えていくことで感性に響く個性溢れる空間を作り出します。<br>
					</div>
					<div class="closeBtn">× close</div>
				</div>
		</div>
			<div class="Parts Left SubMenuBtn subMenuClose">
				<div class="Numbering"># 2 </div>
				<div class="Title">ペイントカラーのご相談<br><span class="s_eng">consult of paint color</span></div>
				<div class="more">+ view</div>
				<div class="content hide">
					<div class="image"><img src="<?php echo get_template_directory_uri(); ?>/image/sample.jpg"></div>
					<div class="text">
						ここに文字がきます。アイウエオかきくけこ abcdefghijklmnopqrlstvwxyz<br>
						<br>
						ここに文字がきます。ここに文字がきます。アイウエオかきくけこ abcdefghijklmnopqrlstvwxyz<br>
						ここに文字がきます。ここに文字がきます。ここに文字がきます。アイウエオかきくけこ abcdefghijklmnopqrlstvwxyz<br>
						<br>
					</div>
					<div class="image"><img src="<?php echo get_template_directory_uri(); ?>/image/sample.jpg"></div>
					<div class="text">
						ここに文字がきます。アイウエオかきくけこ abcdefghijklmnopqrlstvwxyz<br>
						<br>
						ここに文字がきます。ここに文字がきます。アイウエオかきくけこ abcdefghijklmnopqrlstvwxyz<br>
						ここに文字がきます。ここに文字がきます。ここに文字がきます。アイウエオかきくけこ abcdefghijklmnopqrlstvwxyz<br>
						<br>
					</div>
					<div class="closeBtn">× close</div>
			</div>			</div>
			<div class="Parts Left SubMenuBtn subMenuClose">
				<div class="Numbering"># 3 </div>
				<div class="Title">空間プランニングのご相談<br><span class="s_eng">consult of space planning</span></div>
				<div class="more">+ view</div>
				<div class="content hide">
					<div class="image"><img src="<?php echo get_template_directory_uri(); ?>/image/sample.jpg"></div>
					<div class="text">
						ここに文字がきます。アイウエオかきくけこ abcdefghijklmnopqrlstvwxyz<br>
						<br>
						ここに文字がきます。ここに文字がきます。アイウエオかきくけこ abcdefghijklmnopqrlstvwxyz<br>
						ここに文字がきます。ここに文字がきます。ここに文字がきます。アイウエオかきくけこ abcdefghijklmnopqrlstvwxyz<br>
						<br>
					</div>
					<div class="image"><img src="<?php echo get_template_directory_uri(); ?>/image/sample.jpg"></div>
					<div class="text">
						ここに文字がきます。アイウエオかきくけこ abcdefghijklmnopqrlstvwxyz<br>
						<br>
						ここに文字がきます。ここに文字がきます。アイウエオかきくけこ abcdefghijklmnopqrlstvwxyz<br>
						ここに文字がきます。ここに文字がきます。ここに文字がきます。アイウエオかきくけこ abcdefghijklmnopqrlstvwxyz<br>
						<br>
					</div>
					<div class="closeBtn">× close</div>
				</div>
			</div>
	</div><!--ContentsArea --> 
	<!--ContentsArea #profile--> 
	<div class="ContentsArea" id="member">
			<div class="title fs50 titleFontFamily FadeIn">member</div>
			<div class="parts FadeIn">
				<div class="image"><img src="<?php echo get_template_directory_uri(); ?>/image/sample_portrait.jpg"></div>
				<div class="caption">
					<div class="personname">
						Akiko Kobayashi 小林明子
					</div>
					<div class="job">
						Color Planner カラープランナー
					</div>
					<div class="txt">
						大学卒業後、インテリア商社勤務。退職後に専門学校で建築、インテリアコーディネートを学ぶ。<br>
						国内、海外旅行で目に触れた建築や景色に心動かされた経験から、空間での色や質感の効果や美しさを表現できる素材に興味を持ち、海外のペイント文化に目を向ける。<br>
						輸入業務を経験、色彩の提案・ペイントの調合から販売、ワークショップ企画、開催を行う。<br>
						<br>
						2007年よりカラープランナーとして活動をスタート。より住空間に寄り添った提案を目指し、2015年から拠点を東京から鎌倉に移す。色が持つ力により空間デザインの幅がより広がっていくことに期待し、<br>
						様々なアプローチで可能性を探る。2018年、COAT COLOR BOOKを発表。レシピ監修を行う。<br>

					</div>
				</div>
			</div>
	</div><!--ContentsArea --> 
	

</div><!--PageWrapper --> 
<?php require "footer.php"; ?> 																	<!-- Call common.php ---->

</body>
</html>