<?php
/** 
 * Template Name: ProductColor
 */
?>
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
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/P_detail.css?<?php echo file_date(get_template_directory() . '/css/P_detail.css'); ?>" type="text/css" />

<!--〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓-->
<!--Jquery--------------------------------------------------------------------------------------------------------------->
<!--〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓-->
<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>

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
jQuery(function($){
		
		$(".b_name").on("click", function(){
			$(".b_name").css("color","black");
			$(".head").css("color","black");
			$(this).parent().parent().find(".head").css("color","#aaaaaa");
			$(this).css("color","#aaaaaa");
			$head = $(this).parent().parent().find(".head").text();
			$name = $(this).text();
			$(".tType").find(".data").text($head+" / "+$name);
			$(".choiceType").text($name);

			// get price
			$.ajax({
				url: ajaxurl, // WordPress Ajaxのエンドポイント
				type: 'post',
				data: {
					action: 'getPaintPrice', // アクション名
					type:$(".choiceType").text(),
					volume:$("#paintVolume").val(),
					postId:$(".postId").data('post-id'),
				},
				success: function(response) {
					// テーブルフィールドの値が取得できた場合の処理
					$(".tPrice").find(".data").text("¥ "+response);
				},
				error: function(error) {
					// エラーが発生した場合の処理
				}
			});
		});
		$("#paintVolume").on("change",function(){
			console.log("value"+$(this).val());
			$(".tVolume").find(".data").text($(this).val()+" L（リットル）");

			if(""!=$(".choiceType").text()){
				// get price
				$.ajax({
					url: ajaxurl, // WordPress Ajaxのエンドポイント
					type: 'post',
					data: {
						action: 'getPaintPrice', // アクション名
						type:$(".choiceType").text(),
						volume:$("#paintVolume").val(),
						postId:$(".postId").data('post-id'),
					},
					success: function(response) {
						// テーブルフィールドの値が取得できた場合の処理
						$(".tPrice").find(".data").text("¥ "+response);
					},
					error: function(error) {
						// エラーが発生した場合の処理
					}
				});
			}
		});
		$(".formTotal").submit( function(event){
			event.preventDefault();
		console.log("addToCart?");
			// add to cart
			$.ajax({
				url: ajaxurl, // WordPress Ajaxのエンドポイント
				type: 'post',
				data: {
					action: 'addToCartPaint', // アクション名
					color:$(".tColor").find(".data").text(),
					type:$(".choiceType").text(),
					volume:$("#paintVolume").val(),
					price:$(".tPrice").find(".data").text(),
					colorParam:$(".color").data('color-param'),

				},
				success: function(response) {
					// テーブルフィールドの値が取得できた場合の処理
					console.log(response);
					$(".addToCartResult").removeClass("hide");
					$(".formTotal").addClass("hide");
				},
				error: function(error) {
					// エラーが発生した場合の処理
				}
			});
			return false;
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
		<div class="hide postId" data-post-id="<?php echo get_the_ID(); ?>"></div>
		<div class="title fs50 titleFontFamily ">COAT ORIGINAL PAINT</div>

<?php
		$group = htmlspecialchars($_GET["group"]);
		$color = htmlspecialchars($_GET["color"]);
		$param = htmlspecialchars($_GET["param"]);
?>		
		
		
		<div class="ContentsArea" id="selectColor">
			<div class="selected">
				<div class="title"><?php echo $color; ?></div>
				<div class="group"><?php echo $group; ?></div>
				<div class="color" data-color-param="<?php echo $param;?>" style="background-color:#<?php echo $param;?>" ></div>
			</div>
<!--
			<div class="otherColorArea">
				<div class="title">Other color</div>
				<div class="contents">
					<div class="parts">
						<div class="color" style="background-color:#FFFFDD"></div>
						<div class="c_name">xxxxx white</div>
					</div>
					<div class="parts">
						<div class="color" style="background-color:#FFFFCC"></div>
						<div class="c_name">xxxxx white</div>
					</div>
					<div class="parts">
						<div class="color" style="background-color:#FFEEFF"></div>
						<div class="c_name">xxxxx white</div>
					</div>
					<div class="parts">
						<div class="color" style="background-color:#FFDDFF"></div>
						<div class="c_name">xxxxx white</div>
					</div>
					<div class="parts">
						<div class="color" style="background-color:#FFCCFF"></div>
						<div class="c_name">xxxxx white</div>
					</div>
					<div class="parts">
						<div class="color" style="background-color:#EEFFFF"></div>
						<div class="c_name">xxxxx white</div>
					</div>
					<div class="parts">
						<div class="color" style="background-color:#DDFFFF"></div>
						<div class="c_name">xxxxx white</div>
					</div>
					<div class="parts">
						<div class="color" style="background-color:#CCFFFF"></div>
						<div class="c_name">xxxxx white</div>
					</div>
				</div>
			</div>
-->
		</div><!--ContentsArea --> 
		<div class="ContentsArea" id="selectVolume">
			<div class="title">Please select paint volume.</div>
			<div class="captionArea">塗料をお買い求めの方は、必要な塗料の容量をお選びください。</div>

			<input type="number" name="paintVolume" id="paintVolume" value="1" min="1" step="1">

			<div class="attention">
				塗料は注文数量に応じて、複数の容器に分かれる場合ございます。<br>
				容器のサイズや数量に関してご希望のある場合は注文画面の備考欄に詳細をご記入ください。	
			</div>
		</div><!--ContentsArea --> 

		<div class="ContentsArea" id="selectOption1">
			<div class="title">Please select paint series.</div>
			<div class="captionArea">
				<div class="parts">
					<div class="head liquidOpen">GLASS series</div>
					<div class="contents smooth1s">
						<div class="b_name">GLASS FINE</div>
						<div class="b_name">GLASS BOLD</div>
						<div class="b_name">GLASS COARSE</div>
					</div>
				</div>
				<div class="parts">
					<div class="head liquidOpen">ACRYLIC  series</div>
					<div class="contents smooth1s">
						<div class="b_name">INTERIOR ACRYLIC FINISH / FLAT</div>
						<div class="b_name">INTERIOR ACRYLIC FINISH / EGGSHELL</div>
						<div class="b_name">INTERIOR ACRYLIC FINISH / SATIN</div>
						<div class="b_name">EXTERIOR ACRYLIC FINISH / FLAT</div>
						<div class="b_name">EXTERIOR ACRYLIC FINISH / SATIN</div>
					</div>
				</div>
				<div class="parts">
					<div class="head liquidOpen">SOIL PAINT series</div>
					<div class="contents smooth1s">
						<div class="b_name">SOIL PAINT( color group A.B)</div>
						<div class="b_name">SOIL PAINT( color group C)</div>
						<div class="b_name">SOIL PAINT( color group D)</div>
						<div class="b_name">SOIL PAINT( color group E)</div>
					</div>
				</div>
			</div>
			<div class="choiceType hide"></div>
			<div class="image"><img src="<?php echo get_template_directory_uri(); ?>/image/product_detail/sample_paint_01.jpg">
			</div>
			<div class="attention">
				塗料は注文数量に応じて、複数の容器に分かれる場合ございます。<br>
				容器のサイズや数量に関してご希望のある場合は注文画面の備考欄に詳細をご記入ください。	
			</div>
		</div><!--ContentsArea --> 

		<div class="ContentsArea" id="totalInfo">
			<div class="caption">your select</div>
			<div class="parts tColor"><div class="title">color</div><div class="data"><?php echo $color; ?></div></div>
			<div class="parts tVolume"><div class="title">volume</div><div class="data">1 L(リットル)</div></div>
			<div class="parts tType"><div class="title">type</div><div class="data">-</div></div>
			<div class="parts tPrice"><div class="title">price</div><div class="data">-</div></div>
			<form class="formTotal">
				<button class="fButton" type="submit">カートに入れる</button>
			</form>
			<div class="addToCartResult hide">カートに追加しました</div>
		</div><!--ContentsArea --> 
	

</div><!--PageWrapper --> 
<?php require "footer.php"; ?> 																	<!-- Call common.php ---->

	
</body>
</html>