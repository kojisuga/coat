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
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/Reserve.css?<?php echo file_date(get_template_directory() . '/css/Reserve.css'); ?>" type="text/css" />

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

<script>
//------------------------------------
// ____OnClick(){}
//------------------------------------
$(function(){
	// メニュークリック
	$(".item").on("click", function() {
		var id = $(this).attr("id");
		var bodyChange_y = 0;

		if(id.indexOf("top") > -1){
			bodyChange_y =1;
		}
		else if(id.indexOf("menu") > -1){
			bodyChange_y =$("#treat").offset().top - 0;
		}
		else if(id.indexOf("reserve") > -1){
			bodyChange_y =$("#repletion").offset().top - 0;
		}
		else if(id.indexOf("attention") > -1){
			bodyChange_y =$("#attention").offset().top - 0;
		}

		if( bodyChange_y > 0 ){
			 $("body,html").animate({scrollTop:bodyChange_y},500);
		}
		console.log(id);
	});

});
// -------------------------
// フェードイン
// -------------------------
$(function(){
	$(window).scroll(function(){
		FadeInMenuSide();
	});
});
function FadeInMenuSide(){
	var scrolltop = $(window).scrollTop();
	if(scrolltop > 400){
		$("#side_menu").css("opacity","1");
	}
	else{
		$("#side_menu").css("opacity","0");
	}
}


//------------------------------------
// ____MouseOver(){}
//------------------------------------

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
<!-- side menu -->
<div id="side_menu">
	<div class="item" id = "s_">身体(しんたい)性を繋ぐ</div>
	<div class="item" id = "s_">手あてと灸の景色を繋ぐ</div>
</div>
<div class="PageWrapper"> 
	<div class="title fs8">繋ぐもの</div>
	<!-- sub_menu ---->
	<div class="ContentsArea FadeIn" id="sub_menu">
		<div class="line"></div>
		<div class="wrapper">
			<div class="item" id = "t_">身体(しんたい)性を繋ぐ</div>
			<div class="item" id = "t_">手あてと灸の景色を繋ぐ</div>
		</div>
	</div>

	
	<!-- physical ---->
	<div class="ContentsArea" id="physical">
		<div class="image FadeIn"><img src="<?php echo get_template_directory_uri(); ?>/image/connect1.jpg"></div>
		<div class="content">
			<div class="title FadeIn fs6"><div class="line"></div><div class="text">身体(しんたい)性を繋ぐ</div></div>
			<!-- parts -->
			<div class="parts FadeIn">
				<div class="title fs4">
手をあて感じ考える、解剖学
				</div>
				<div class="caption">解剖学や生理学など、身体の仕組みを知ることは
机の上の書籍の中の、どこかの誰かの体の話として
どうしても自分自身からかけ離れたものになりがちでした

知識は自分の身体を見るためにある
知識はこの手で感じることができる

そんなふうに思います


落ち着いて自分の身体に触れてみると 毎日活き活きと動いている存在に気づきます
身体にいのちが宿っています

内臓はどこにどんなふうにあるのか手で感じ取り、確かめてみましょう

机上の知識といのち宿る身体を繋ぐのは手
手から身体を学びます

~~~
会ではさらに 思考をめぐらせ内臓に寄り添います

ある、いる、なる

物質的な内臓がある、いのち宿る内臓がいる

そして、内臓として考え内臓になる時間を設けてみます
~~~

内臓に関する情報は少なめに、あまり難しくせず
楽しく内臓のことを知れるようにしています

知識と手と思考で身体に寄り添い
もって生まれたこの身体とともに歩んでゆけますように
				</div>
			</div><!-- parts end -->
		
			<!-- parts start-->
			<div class="parts FadeIn">
				<div class="title fs4">身体喫茶</div>
				<div class="caption">
いつかどこかで喫茶店のマスターになりたい正観が 今 オンラインにてできる形で実現させようとする試み

おしゃべり好きなマスター(マッサージが得意)がお客さまとの会話の中でキーワードを拾っては　
身体の話に繋げていく

そんな場所

お話会のようにテーマを決めて話を進めていきますが感想の時間を設けてみなさまと交流もさせてください

身体喫茶オンラインにご来店の際には
どうぞお好きなお飲みものやお菓子心地よい環境をお作りになってのんびりお過ごしください
				</div>
			</div>
		</div>
	</div><!-- physical -->
	
	<!-- hands ---->
	<div class="ContentsArea" id="physical">
		<div class="image FadeIn"><img src="<?php echo get_template_directory_uri(); ?>/image/connect2.jpg"></div>
		<div class="content">
			<div class="title FadeIn fs6"><div class="line"></div><div class="text">手あてと灸の景色を繋ぐ</div></div>
			<!-- parts -->
			<div class="parts FadeIn">
				<div class="title fs4">
手あてとお灸の会
				</div>
				<div class="caption">やわらく包むようにふれる手あて
赤ちゃんのころこうしてふれてもらえたのだと思うと
優しさからのふれあいに安心で守られるようです

三月三日
生命力の強い蓬の新芽を摘み乾かし 乾いた蓬を搗くまたは砕きザルで濾します
色が白くなるまで精製を繰り返し
蓬の裏にある白い産毛だけを取り出したモグサは 家族を健やかにする相棒となります



手あてでからだを整えたら
ロウソクに火を灯し 灸をすえるあたりに手でふれ 指先でふれ細かく探します

モグサをゴマ粒大にひねりツボに置き 線香に火をうつしモグサに灯します

日々ふれて交わす わたしの身体とのあいさつです

繊細に感じる手をつくること 弱いところに小さな火をおき
少ないエネルギーで必要な効果を生む
小さくても積み重ねるその力は必ず変化を起こします

手をあてる姿と自ら整える灸
それらの行為と景色が　家族の平和をつくること
女性に繋ぎ伝え話し合い　ともに歩んでいきたいです
				</div>
			</div><!-- hands end -->	
		</div>
	</div><!-- physical -->	
</div><!--PageWrapper --> 
<?php require "footer.php"; ?> 																	<!-- Call common.php ---->

</body>
</html>