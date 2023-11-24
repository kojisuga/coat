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
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/About.css?<?php echo file_date(get_template_directory() . '/css/About.css'); ?>" type="text/css" />

<!--〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓-->
<!--Jquery--------------------------------------------------------------------------------------------------------------->
<!--〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓-->
<!-- js -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
$(function(){
	$(window).on('load',function(){
		FadeInMenu();
		ScrollImage();
	});
	$(window).resize(function (){
		FadeInMenu();
		ScrollImage();
	});
	$(document).ready(function(){
		FadeInMenu();
		ScrollImage();
	});
});

function FadeInMenu(){
	$(".MenuPc").css("opacity","1");
}
		
function ScrollImage(){
		console.log("scrollImage");
	$(".scrollImgArea").addClass("imageScrollDone");

}
</script>


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
		<div class="parts FadeIn">
			<div class="title fs50 titleFontFamily ">ABOUT</div>
			<div class="caption">
					塗る・覆う・包み込む という意味を持つ「COAT」を社名とし、コンセプトに沿った質感や色を組み合わせたカラープランニングと、<br>
					これまで培った塗る技術を生かし、愛着をもって過ごせる空間づくりをご提案しています。<br>
					<br>
					また、日本古来より深く浸透してきた染色技術に見られる素晴らしい色彩文化、<br>左官や土壁にもある温かみのある自然素材からもヒントを得て、<br>人や環境に優しい新しいペイントの研究、製造をする事で、心身が健やかに過ごせる環境づくりを目指しています。
			</div>
		</div>
		<!-- IMAGE -->
		<div class="image scrollImgArea">
				<div class="wrap mask_slide_pr"><img src="<?php echo get_template_directory_uri(); ?>/image/about/about_top_1.jpg"><div class="mask_slide_up" title=""></div></div><div class="wrap mask_slide_pr"><img src="<?php echo get_template_directory_uri(); ?>/image/about/about_top_2.jpg"><div class="mask_slide_up" title="delay250ms"></div></div><div class="wrap mask_slide_pr"><img src="<?php echo get_template_directory_uri(); ?>/image/about/about_top_3.jpg"><div class="mask_slide_up" title="delay750ms"></div></div><div class="wrap mask_slide_pr"><img src="<?php echo get_template_directory_uri(); ?>/image/about/about_top_4.jpg"><div class="mask_slide_up" title="delay1000ms"></div></div><div class="wrap mask_slide_pr"><img src="<?php echo get_template_directory_uri(); ?>/image/about/about_top_5.jpg"><div class="mask_slide_up" title="delay250ms"></div></div><div class="wrap mask_slide_pr"><img src="<?php echo get_template_directory_uri(); ?>/image/about/about_top_6.jpg"><div class="mask_slide_up" title="delay250ms"></div></div>
		</div>

	</div><!--ContentsArea --> 
	<div class="ContentsArea" id="SubMenu">
		<div class="Parts Left FadeIn">
				<div class="Numbering"># 1 </div>
				<div class="underline"> </div>

				<div class="Title">concept<br>こだわり</div>
<!--
				<div class="more">view</div>
-->
		</div>
		<div class="linePortrait FadeIn"></div>
		<div class="Parts Right FadeIn" title="delay250ms">
				<div class="Numbering"># 2 </div>
				<div class="underline"> </div>
				<div class="Title">profile<br>会社概要</div>
<!--
				<div class="more">view</div>
-->
		</div>
	</div><!--ContentsArea --> 
	<div class="ContentsArea" id="concept">
			<div class="title fs50 titleFontFamily FadeIn">concept</div>
			<div class="parts">
				<div class="main">
					<div class="image left">
						<img class="FadeIn" src="<?php echo get_template_directory_uri(); ?>/image/about/about_concept_1-1.jpg">
						<img class="FadeIn" src="<?php echo get_template_directory_uri(); ?>/image/about/about_concept_1-2.jpg">
					</div>
					<div class="caption right">
						<div class="title titleFontFamily FadeIn">色と質感<br>color and texture</div>
						<div class="txt FadeIn">
							色を作る時、ときに10種類以上の顔料を混ぜ合わせます。<br>
							”白”でも少し色味を足すことで色をより和らげたり生き生きと感じる白も作り出せます。<br>
							スパイスを加えるように、ちょっとした匙加減によってより深みを出したり、混ぜ合わせる過程では空間を想像して思考を巡らせることがとても重要です。<br>
							同時に、質感が加わることで光の影響を得て、陰影を生み出します。<br>
							<br>
							自然界にあるような素材感をイメージしながら、様々な自然の鉱物などを駆使し新しい質感を生み出す事でより空間デザインの可能性は広がっていくと想像しています。<br>
						</div>
					</div>
				</div>
				<div class="Sub FadeIn">
					<div class="caption">
					</div>
				</div>
			</div>
			<div class="parts">
				<div class="main">
					<div class="caption left">
						<div class="title titleFontFamily FadeIn">長く愛される空間づくり<br>Creating a space that will be loved for a long time</div>
						<div class="txt FadeIn">
							海外で見て感じたペイント文化は生活に根付いたものでした。<br>
							特別ではなく、大切なモノをリペアして使い続けるように、生活に当たり前にあるセルフペイントで自ら塗り替えていく作業が、普遍的な心地良さを生み出し、<br>
							経年変化による唯一無二の美しさを表現しています。<br>
							<br>
							そこから得た情報を元に日本古来にあった土壁や和紙などの自然素材を着想として、COAT独自の視点で愛着ある空間づくりのご提案をします。<br>

						</div>
					</div>
					<div class="image right">
						<img class="FadeIn" src="<?php echo get_template_directory_uri(); ?>/image/about/about_concept_2-1.jpg">
						<img class="FadeIn" src="<?php echo get_template_directory_uri(); ?>/image/about/about_concept_2-2.jpg">
						<img class="FadeIn" src="<?php echo get_template_directory_uri(); ?>/image/about/about_concept_2-3.jpg">
					</div>
				</div>
				<div class="Sub FadeIn">
					<div class="caption">
					</div>
				</div>
			</div>
	</div><!--ContentsArea --> 
	<!--ContentsArea #profile--> 
	<div class="ContentsArea" id="profile">
			<div class="title fs50 titleFontFamily FadeIn">profile</div>
			<div class="parts FadeIn">
				<div class="title">COAT合同会社について<br>about company</div>
				<div class="caption">
					<div class="txt">
							リノベーションが増えるなか 古いものを活かす事でもっと愛着のある心豊かな暮らしを提案していきたい。<br>
							そんな思いで2015年に鎌倉・雪ノ下にて COAT合同会社を設立。<br>
							<br>
							空間への色彩提案から施工の受注、ペイント・ツールなどの販売<br>
							ペイントクラスの開催、DIYサポートなどの業務をスタート予定。<br>
					</div>
				</div>
			</div>
			<div class="parts FadeIn">
				<div class="title">略歴<br>company history</div>
				<div class="caption">
					<div class="txt">
						<li>2018年10月 鎌倉市稲村ヶ崎にオフィス機能を移転</li>
						<li>2018年12月 「COAT LAB」をオープン</li>
						<li>2023年 「COAT XXXX」をオープン予定</li>
					</div>
				</div>
			</div>
			<div class="parts FadeIn" id="location">
				<div class="title">拠点<br>location</div>
				<div class="caption">
					<div class="txt">
							COAT LAB<br>
							〒248-0024 神奈川県鎌倉市稲村ガ崎3丁目3−27 1F<br>
							<br>
							COAT LABでは、COAT ORIGINAL PAINT・自然塗料SOIL PAINTを中心に人にも環境にも<br>
							負荷の少ない​ペイントや、ペイントツールをはじめカラーを楽しむためのモノを中心に販売いたします。<br>
							<br>
							また幅広い表現が可能なペイントを使いこなすために必要なノウハウの提供を行っており、<br>
							各種ワークショップや展示・イベントなどを開催するオープンスペースでもあります。
					</div>
					<div class="txt">
							PAINT STUDIO<br>
							〒259-0123 神奈川県中郡二宮町二宮1330<br>
							<br>
							ここに文章がきます。ここに文章がきます。ここに文章がきます。ここに文章がきます。<br>
							ここに文章がきます。ここに文章がきます。ここに文章がきます。ここに文章がきます。 ここに文章がきます。<br>
						<br>
					ここに文章がきます。ここに文章がきます。ここに文章がきます。ここに文章がきます。 ここに文章がきます。				</div>
				</div>
			</div>
	</div><!--ContentsArea --> 
	

</div><!--PageWrapper --> 
<?php require "footer.php"; ?> 																	<!-- Call common.php ---->

</body>
</html>