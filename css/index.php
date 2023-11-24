<!DOCTYPE html>
<!--〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓-->
<!--Header構成------------------------------------------------------------------------------------------------------------>
<!--〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓-->
<head>
<meta></meta>

<!--〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓-->
<!--Css------------------------------------------------------------------------------------------------------------------>
<!--〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓-->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css?<?php echo file_date(get_template_directory() . '/style.css'); ?>" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/Main.css?<?php echo file_date(get_template_directory() . '/css/Main.css'); ?>" type="text/css" />
<?php require "common.php"; ?> 																	<!-- Call common.php ---->

<!--〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓-->
<!--Jquery--------------------------------------------------------------------------------------------------------------->
<!--〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓-->
<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>

<script>
// -------------------------
// フェードイン
// -------------------------
$(function(){
	$(window).scroll(function(){
		FadeInMenu();
	});
});
function FadeInMenu(){
	var scrolltop = $(window).scrollTop();
	if(scrolltop > 400){
		$(".MenuPc").css("opacity","1");
	}
	else{
		$(".MenuPc").css("opacity","0");
	}
}
		
// slide start(only right)
$(function(){
		
	$(window).on('load',function(){
		StartSlide();
	});
	$(window).resize(function (){
		StartSlide();
	});
	$(document).ready(function(){
		StartSlide();
	});
});
function StartSlide(){
		$(this).delay(5000).queue(function(next) {
			$(".partsR").addClass("bgAnime");
			$(".partsR").find("img").addClass("bgAnimeScale");
		});
}		

		
</script>
	
</head>

<!--〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓-->
<!--body構成-------------------------------------------------------------------------------------------------------------->
<!--〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓-->
<body>
<?php require "common.php"; ?> 																	<!-- Call common.php ---->
<?php require "header.php"; ?> 																	<!-- Call common.php ---->

<div class="PageWrapper"> 
	<!-- top image ---->
	<div class="ContentsArea" id="TopImage">
			<div class="partsL topimg_L_3"><img src="<?php echo get_template_directory_uri(); ?>/image/top/top_left_3.jpg"></div>
			<div class="partsL topimg_L_2"><img src="<?php echo get_template_directory_uri(); ?>/image/top/top_left_2.jpg"></div>
			<div class="partsL topimg_L_1"><img src="<?php echo get_template_directory_uri(); ?>/image/top/top_left_1.jpg"></div>
			<div class="partsR topimg_R_3"><img src="<?php echo get_template_directory_uri(); ?>/image/top/top_right_3.jpg"></div>
			<div class="partsR topimg_R_2"><img src="<?php echo get_template_directory_uri(); ?>/image/top/top_right_2.jpg"></div>
			<div class="partsR topimg_R_1"><img src="<?php echo get_template_directory_uri(); ?>/image/top/top_right_1.jpg"></div>
		<div class="partsCenter"><img src="<?php echo get_template_directory_uri(); ?>/image/logo_w.png"></div>
	</div>
	

	<!-- concept ------>
	<div class="ContentsArea" id="Concept">
		<div class="wrapper">
			<div class="title ">
					<div class="fs50 titleFontFamily FadeIn" title="">ABOUT<br>COAT</div>
					<div class="append FadeIn" title="delay250ms" ><div>painting / planning company</div></div>
			</div>
			<div class="caption FadeIn"  title="delay250ms">
				<!--<div class="caption FadeIn delay1500ms">	-->
				<div class="txt "">
						塗る・覆う・包み込む という意味を持つ「COAT」を社名とし、コンセプトに沿った質感や色を組み合わせたカラープランニングと、<br>
						これまで培った塗る技術を生かし、愛着をもって過ごせる空間づくりをご提案しています。<br>
						<br>
						また、日本古来より深く浸透してきた染色技術に見られる素晴らしい色彩文化、<br>左官や土壁にもある温かみのある自然素材からもヒントを得て、<br>人や環境に優しい新しいペイントの研究、製造をする事で、心身が健やかに過ごせる環境づくりを目指しています。
				</div>
				<a href="about" class="FadeIn"><div class="detail">more</div></a>
			</div>
		</div>
	</div><!-- concept ------>
		
	<!-- Paint ------>
	<div class="ContentsArea" id="Paint">
		<div class="Parts left">
				<div class="title fs50 titleFontFamily FadeIn" title="">PAINTING</div>
				<div class="img_sub FadeIn" ><img src="<?php echo get_template_directory_uri(); ?>/image/top/top_plan_l.jpg"></div>
				<div class="caption FadeIn">
					基本的な色彩理論を踏まえて 経験に基づく独自の理論による提案をしています。<br>
					<br>
					色の世界は無限で 秘めた力も多様です。<br>
					<br>
					心地良いと感じる色は人によって様々であり その個性を尊重して、色・質感で表現するのが空間における色彩計画です。<br>
					色そのもののイメージだけではなく、表面の凹凸・質感 光沢などを踏まえて選ぶこと、時間の流れや光を充分に意識することを大切にします。<br>


				</div>
				<a class="more FadeIn" href="about"><div class="detail">more</div></a>
		</div>
		<div class="Parts right FadeIn">
				<div class="img_sub FadeIn" ><img src="<?php echo get_template_directory_uri(); ?>/image/top/top_plan_r.jpg"></div>
		</div>
	</div>
	<!-- Paint ------>
	<div class="ContentsArea" id="Paint">
			<div class="Parts right">
				<div class="img_main FadeIn"><img src="<?php echo get_template_directory_uri(); ?>/image/top_paint_r.jpg"></div>
			</div>
			<div class="Parts left">
				<div class="title fs50 titleFontFamily FadeIn" title="">PLANNING</div>
				<div class="img_sub FadeIn" title="delay500ms"><img src="<?php echo get_template_directory_uri(); ?>/image/top_paint_l.jpg"></div>
				<div class="caption FadeIn">
					空間に色を加えることは、住環境では暮らしや行動へ影響を与えてくれ、
					店舗や商業施設では、人の気持ちを動かすことへの効果が期待できます。<br><br>
					単体だとただ一つの色にすぎなくても、何色か組み合わせたり家具やインテリアと合わせたりすることで、歴史や文化を感じたりその空間に深みを増します。<br>
					質感が加わることで光の影響を存分に得て、空間に広がりや奥行きを持たせてくれます。<br><br>
					どんな空間にしたいか、色と質感でバランスを整えていくことで感性に響く個性溢れる空間を作り出します。<br>
				</div>
				<a class="more FadeIn" href="about"><div class="detail">more</div></a>
		</div>
	</div>		

	<!-- gallery ------>
	<div class="ContentsArea" id="Gallery">
		<div class="title fs50 titleFontFamily FadeIn">GALLERY
		</div>
		<div class="contents">
				<div class="parts mask_slide_pr">
					<div class="image"><img src="<?php echo get_template_directory_uri(); ?>/image/top_gallery_1.jpg"></div>
					<div class="type">house docor</div>
					<div class="option">glass paint</div>
					<div class="mask_slide_up"></div>
				</div>	
				<div class="parts mask_slide_pr">
					<div class="image"><img src="<?php echo get_template_directory_uri(); ?>/image/top_gallery_2.jpg"></div>
					<div class="type">house docor</div>
					<div class="option ">glass paint</div>
					<div class="mask_slide_up" title="delay250ms"></div>
				</div>	
				<div class="parts mask_slide_pr">
					<div class="image"><img src="<?php echo get_template_directory_uri(); ?>/image/top_gallery_3.jpg"></div>
					<div class="type">house docor</div>
					<div class="option">glass paint</div>
					<div class="mask_slide_up" title="delay500ms"></div>
				</div>	
				<div class="parts mask_slide_pr">
					<div class="image"><img src="<?php echo get_template_directory_uri(); ?>/image/top_gallery_4.jpg"></div>
					<div class="type">house docor</div>
					<div class="option">glass paint</div>
					<div class="mask_slide_up"></div>
				</div>	
				<div class="parts mask_slide_pr">
					<div class="image"><img src="<?php echo get_template_directory_uri(); ?>/image/top_gallery_5.jpg"></div>
					<div class="type">house docor</div>
					<div class="option">glass paint</div>
					<div class="mask_slide_up" title="delay250ms"></div>
				</div>	
				<div class="parts mask_slide_pr">
					<div class="image"><img src="<?php echo get_template_directory_uri(); ?>/image/top_gallery_6.jpg"></div>
					<div class="type">house docor</div>
					<div class="option">glass paint</div>
					<div class="mask_slide_up" title="delay500ms"></div>
				</div>	
		</div><!-- content -->
	</div>

	<!-- News ------>
	<div class="ContentsArea FadeIn" id="Journal">
			<div class="title fs50 titleFontFamily">JOURNAL</div>
		<div class="ListWrapper">
				<div class="List"><div class="Date">2022.04.20</div><div class="Title">ホームページをリニューアルしました</div></div>
				<div class="List"><div class="Date">2022.04.20</div><div class="Title">価格改訂のお知らせ</div></div>
				<div class="List"><div class="Date">2022.04.20</div><div class="Title">新規アトリエのご紹介</div></div>
		</div>
			<a href="about"><div class="detail">view</div></a>
	</div>
	<!-- Contact ------>

	</div><!--PageWrapper --> 
<?php require "footer.php"; ?> 																	<!-- Call common.php ---->

</body>
</html>