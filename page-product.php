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
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/Product.css?<?php echo file_date(get_template_directory() . '/css/Product.css'); ?>" type="text/css" />

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
		
		$("#palletteBtn").on("click", function() {
			$(this).addClass("hide");
		console.log($(this).parent());
			$(this).parent().find(".content").removeClass("hide");
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
	<div class="title fs50 titleFontFamily ">PRODUCT</div>
	<!-- top ---->
	<div class="ContentsArea" id="product">
			<div class="caption">COATオリジナルの塗料やカラーブック、ブラシといったオリジナル製品の購入ができます</div>
			<div class="parts" id="paint">
				<div class="object">
					<div class="caption">
						<div class="title titleFontFamily fs40">COAT<br>ORIGINAL<br>PAINT</div>
						<div class="txt">ガラス塗料を基本としたオリジナル塗料。100種類以上もの色からあなたのお気に入りのカラーを見つけられます</div>
					</div>
					<div class="image"><img class="" src="<?php echo get_template_directory_uri(); ?>/image/product/paint_all.jpg"></div>
				</div>
				<div class="option" id="palette">
					<div class="label" id="palletteBtn">カラーを選択</div>
					<div class="content hide">
						
<?php
						$page_id = get_page_by_path('colorsamle');
						$page_id = $page_id -> ID; //ここでページIDの「40」が出力される
							
						$groupList = get_field( 'colorGroup', $page_id );
						if ( $groupList ) {
							foreach ( $groupList as $group ) {
								echo '<div class="group" id="">';
								$groupName  = $group['groupName_'];		// text.
								$groupImage  = $group['groupImage'];	// url.
								$colorList = $group['colorInGroup'];	// repeat fields.
								echo '<div class="g_name">'.$groupName.'</div>';
								echo '<div class="image"><img class="" src="' . $groupImage . '"></div>';
								echo '<div class="partsArea">';
								if ( $colorList ) { 
									foreach ( $colorList as $color ) {
										$colorName = $color['colorName'];
										$colorParam = str_replace("#","",$color['colorParam']);
										echo '<a href="' .home_url(). '/p_detail/?group='.$groupName.'&color='.$colorName.'&param='.$colorParam.'"><div class="parts"><div class="colorView" style="background-color:#'.$colorParam.'"></div><div class="c_name">'.$colorName.'</div></div></a>';
									} // end foreach colorlist
								}
								echo '</div>';	//	close div partsArea.
								echo '</div>';	//	close div group.
							} // end foreach group

						}
?>						
					</div>
				</div>
			</div>
			<div class="parts" id="tools">
				<div class="object">
					<div class="caption">
						<div class="title titleFontFamily fs40">TOOLS</div>
						<div class="txt">セルフペイントに必要なスターターキットや付属品、ブラシやローラーといったオリジナル製品をお取り扱いしています。</div>
					</div>
					<div class="image"><img class="" src="<?php echo get_template_directory_uri(); ?>/image/product/paint_tool.jpg"></div>
				</div>
				<div class="detailProduct">
<?php

		// カスタムループのクエリ
		$args = array(
			'category_name' => 'product-original', // カテゴリー名
			'post_type' => 'post', // 投稿タイプ
			'order' => 'ASC', // 昇順 (古い順) に設定
			'orderby' => 'date', // 日付で並び替え
		);
		$custom_query = new WP_Query($args);

		// カスタムループ開始
		if ($custom_query->have_posts()) :
			while ($custom_query->have_posts()) :
				$custom_query->the_post();
				$post_id = get_the_ID(); // 取得した投稿のID
				$acf_name = get_field('name', $post_id);
				$acf_price = get_field('price', $post_id);
				$acf_note = get_field('note', $post_id);
				$acf_image = get_field('mainImage', $post_id);
				echo '<a class="pLink" href="'.get_permalink($post_id).'">';
				echo '<div class="parts">';
				echo	'<div class="image"><img class="" src="'.$acf_image.'"></div>';
				echo	'<div class="title">'. $acf_name .'</div>';
				echo	'<div class="caption"></div>';
				echo '</div>';
				echo '</a>';


				// 投稿内容を表示
			endwhile;
		else :
			// 該当する投稿がない場合の表示
			echo '該当する投稿がありません。';
		endif;
		wp_reset_postdata();


?>
				</div>
			</div><!-- tools -->
	</div><!--ContentsArea --> 
	

</div><!--PageWrapper --> 
<?php require "footer.php"; ?> 																	<!-- Call common.php ---->

</body>
</html>