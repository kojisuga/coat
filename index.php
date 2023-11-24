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
		$(".MenuPc").css("opacity","1");
	}
}
		
// slide start(only right)
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
		<div class="partsL">
			<video autoplay muted loop playsinline poster="" class="videoObject" >
				<source class="VideoContents" src="<?php echo get_template_directory_uri(); ?>/movie/top/web_top_image_left.mp4" type="video/mp4">
			</video>
		</div>
		<div class="partsR">
			<video autoplay muted loop playsinline poster="" class="videoObject" >
				<source class="VideoContents" src="<?php echo get_template_directory_uri(); ?>/movie/top/web_top_image_right.mp4" type="video/mp4">
			</video>
		</div>
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
				<div class="title fs50 titleFontFamily FadeIn" title="">PLANNING</div>
				<div class="img_sub FadeIn" ><img src="<?php echo get_template_directory_uri(); ?>/image/top/top_plan_l.jpg"></div>
				<div class="caption FadeIn">
					基本的な色彩理論を踏まえて 経験に基づく独自の理論による提案をしています。<br>
					<br>
					色の世界は無限で 秘めた力も多様です。<br>
					<br>
					心地良いと感じる色は人によって様々であり その個性を尊重して、色・質感で表現するのが空間における色彩計画です。<br>
					色そのもののイメージだけではなく、表面の凹凸・質感 光沢などを踏まえて選ぶこと、時間の流れや光を充分に意識することを大切にします。<br>


				</div>
				<a class="more FadeIn" href="planning"><div class="detail">more</div></a>
		</div>
		<div class="Parts right FadeIn">
				<div class="img_sub FadeIn" ><img src="<?php echo get_template_directory_uri(); ?>/image/top/top_plan_r.jpg"></div>
		</div>
	</div>
	<!-- Paint ------>
	<div class="ContentsArea" id="Paint">
			<div class="Parts right">
				<div class="img_main FadeIn"><img src="<?php echo get_template_directory_uri(); ?>/image/top/top_paint_r.jpg"></div>
			</div>
			<div class="Parts left">
				<div class="title fs50 titleFontFamily FadeIn" title="">PAINTING</div>
				<div class="img_sub FadeIn" title="delay500ms"><img src="<?php echo get_template_directory_uri(); ?>/image/top/top_paint_l.jpg"></div>
				<div class="caption FadeIn">
					空間に色を加えることは、住環境では暮らしや行動へ影響を与えてくれ、
					店舗や商業施設では、人の気持ちを動かすことへの効果が期待できます。<br><br>
					単体だとただ一つの色にすぎなくても、何色か組み合わせたり家具やインテリアと合わせたりすることで、歴史や文化を感じたりその空間に深みを増します。<br>
					質感が加わることで光の影響を存分に得て、空間に広がりや奥行きを持たせてくれます。<br><br>
					どんな空間にしたいか、色と質感でバランスを整えていくことで感性に響く個性溢れる空間を作り出します。<br>
				</div>
				<a class="more FadeIn" href="paint"><div class="detail">more</div></a>
		</div>
	</div>		

	<!-- gallery ------>
	<div class="ContentsArea" id="Gallery">
		<div class="title fs50 titleFontFamily FadeIn">GALLERY
		</div>
		<div class="contents">
				
				<?php
				$page_id = get_page_by_path('gallery');
				$page_id = $page_id -> ID; 
				
				$InfoList = get_field( 'info', $page_id );
				$cnt=0;
				if ( $InfoList ) {
					foreach ( $InfoList as $info ) {
						
						$imageUrl = $info['image'];
						//						$title = $info[''];
						$type = $info['painttype'];
						$color = $info['color'];
						
						echo '<div class="parts mask_slide_pr">';
						echo '<div class="image"><img src="'.$imageUrl.'"></div>';
						echo '<div class="type">'.$type.'</div>';
						echo '<div class="color">'.$color.'</div>';
						
						$timing = 250 * ( $cnt % 3 );
						$timing = "delay" . $timing . "ms";
						$cnt++;
						
						echo '<div class="mask_slide_up" title="'.$timing.'"></div>';
						echo '</div>';
						
					}
				}
				?>				
				
			
		</div><!-- content -->
	</div>

	<!-- News ------>
	<div class="ContentsArea FadeIn" id="Journal">
			<div class="title fs50 titleFontFamily">JOURNAL</div>
		<div class="ListWrapper">
				

<?php
$args = array(
'post_type' => 'post', // 投稿タイプを指定
'posts_per_page' => -1, // 取得する投稿の数 (-1で全ての投稿を取得)
'category_name' => 'news' // 取得するカテゴリーのスラッグを指定
);

$posts = new WP_Query($args);

if ($posts->have_posts()) {
	while ($posts->have_posts()) {
		
		$posts->the_post();
		// 投稿の表示や処理を行う部分
						
		$raw_date = get_the_date('Y.m.d');
		
		// 日付を指定したフォーマットに変換
		$formatted_date = date('Y.m.d', strtotime($raw_date));
?>
				
		<a class="pLink" href="<?php the_permalink(); ?>">
			<div class="List FadeIn">
								<div class="Date"><?php echo $raw_date; ?></div>
				<div class="Title"><?php the_title(); ?></div><!--<span class="tag">#event</span>-->
			</div>
		</a>
<?php
	}
} else {
	echo '該当する投稿はありません。';
}

wp_reset_postdata();
?>
				
		</div>
			<a href="about"><div class="detail">view</div></a>
	</div>
	<!-- Contact ------>

	</div><!--PageWrapper --> 
<?php require "footer.php"; ?> 																	<!-- Call common.php ---->

</body>
</html>