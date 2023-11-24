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
	<div class="item" id = "s_menu">メニュー</div>
	<div class="item" id = "s_reserve">ご予約</div>
	<div class="item" id = "s_attention">注意事項</div>
</div>
<div class="PageWrapper"> 
	<div class="title fs8">施術について</div>
	<!-- sub_menu ---->
	<div class="ContentsArea FadeIn" id="sub_menu">
		<div class="line"></div>
		<div class="wrapper">
			<div class="item" id = "t_menu">メニュー</div>
			<div class="item" id = "t_reserve">ご予約</div>
			<div class="item" id = "t_attention">注意事項</div>
		</div>
	</div>

	
	<!-- intro ---->
	<div class="ContentsArea" id="intro">
		<div class="caption FadeIn">
赤ちゃんが安心の中でゆっくり眠っているような心地よい 感覚

肌からの繊細な感覚を大切にし
共にいのちの悦びを祝福する交流となれたらと思います

ゆっくり休みにいらしていただけたらうれしいです
		</div>
		<div class="image FadeIn"><img src="<?php echo get_template_directory_uri(); ?>/image/treat.jpg"></div>
		<div class="option FadeIn">
着衣でのマッサージ
やわらかな手あて
スウェディッシュマッサージ
フットケア
リフレクソロジー
鍼灸

好みや希望をお伺いしお話します

頭　顔　背中　腕手　お腹　脚　足裏　の中からお時間に合わせてそのとき必要な部位へ施術します
		</div>
	</div>
	
	<!-- treat ---->
	<div class="ContentsArea" id="treat">
		<div class="content">
			<div class="parts FadeIn">
				<div class="title">ふかくゆだねる</div>
				<div class="option">
130分  15000円
施術 90分  気がけやお茶など  40分
				</div>
				<div class="caption">
もし・ゆだねることを避けてきたならいちど手放して「心地よい」をひたすらに味わってみる
素直にいのちの悦びを感じる永遠の時間となりますよう
				</div>
			</div>
			<div class="parts FadeIn">
				<div class="title">からだゆるめる</div>
				<div class="option">
100分  10000円
施術   60分  着替えやお茶など  40分
				</div>
				<div class="caption">
日々の生活で拾いきれないからだの小さな感覚に気づく
ゆっくり感じることでぽつりぽつりと　いのちが発芽します
				</div>
			</div>
			<div class="parts FadeIn">
				<div class="title">おひるね</div>
				<div class="option">
70分 5000円
施術  30分  着替えやお茶など  40分
				</div>
				<div class="caption">
うとうととお休みつつ整える　よいお昼寝になれたら嬉しいです
初めましての方や忙しいときの息抜きとして

※すべて女性が担当します
				</div>
			</div>
			<div class="parts FadeIn">
				<div class="title">4hands care</div>
				<div class="option">
120分  24,000円
施術  80分  着替えやお茶など40分

80分  12,000円
施術  80分  着替えやお茶など40分
				</div>
				<div class="caption">
ゆるりと生きるふたりがお客さまひとりに同時にふれて施術します
お互いの祖母に夫婦ふたりでふれて 悦ばれたことからはじまりました
どこまでも温かいケアです

男女それぞれの手やエネルギーとお客さまを含めた3人の交流
深いような浮いているような味わったことのない心地よさをたのしめるようです
全身くまなく感覚することでからだと一体となり地に立つことができます


着衣でのマッサージ　手あて　スウェディッシュマッサージ　ストレッチ　フットケア　リフレクソロジー　表情筋フェイシャルなど
全身へ施術しますが好みや希望をお伺いしお話します

※夫婦で担当します
				</div>
			</div>
		</div>
	</div>
	<!-- repletion ---->
	<div class="ContentsArea" id="repletion">
		<div class="content FadeIn" id="reserve">
			<div class="title fs7">ご予約について</div>
			<div class="caption">
時間　10:00-15:00(来店時間）の間で希望を相談ください
新規さまも承ります
夏季と冬季では時間が変わります

__________


◯予約方法

メールにて→　elvahome8@gmail.com
①フルネーム
②電話番号
③住所
④基礎疾患やアレルギーなど
⑤予約希望日を第三希望まで／希望の時間帯や帰りの時間／人数
⑥既往歴やどのような身体になりたいかなど事前に伝えておきたいことがあればご記入ください

必ず 注意事項 をご確認ください。
			</div>
		</div>	

		<div class="content FadeIn" id="attention">
			<div class="title fs7">注意事項</div>
			<div class="caption">
施術より１時間前の食事はさけて下さい

施術の後は　眠けや怠さが出ることがありますが
体が調整されていく過程であるとみてゆっくり過ごしてください

施術を受けた日は　運動　重労働　アルコール　鍼灸使用の場合は風呂（シャワーは可）を控え　静かにお過ごしください
鍼灸の後は血圧を上げたり血流を促すことはお避けください　また冷やす事もお気をつけください　
ご自分のからだに寄り添いましょう

※体調が著しくすぐれない時や生理が重く動けないときは　予約をキャンセルし　お家でゆっくり休んでください
キャンセル料は発生しません


 ご予約希望でコロナワクチン接種済みまたは接種予定の方へ 
 
これまで　インフルエンザワクチンについては接種直後の施術をお断りしておりました
( 接種直後に受けに来られる方が過去に何人かいらしたためです )
この度コロナワクチンについても同様に接種直後はお控えいただきたくお願いします

いついかなるときもお迎えしたい気持ちはありますが
整体や鍼灸によって症状の悪化を促してしまうことは避けたいと考えています

つきましてはワクチン接種された方はその後1か月経ってからご予約くださいませ

どうかご協力をお願いいたします
			</div>
		</div>
	</div>

</div><!--PageWrapper --> 
<?php require "footer.php"; ?> 																	<!-- Call common.php ---->

</body>
</html>