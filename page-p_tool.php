<?php
/** 
 * Template Name: ProductTool
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
		
		$(".liquidOpen").on("click", function(){
			$(this).css("color","black");
			$(this).parent().find(".contents").css("height","100%");
		});
		
		$(".opt1OpenTrig").on("click", function(){
			$("#selectOption1").css("display","block");
			$("#selectOption1").css("height","100%");
		});
		$(".b_name").on("click", function(){
			$(this).css("color","black");
			$("#selectOption2").css("display","block");
			$("#selectOption2").css("height","100%");
		});
		$(".b_name2").on("click", function(){
			$(this).css("color","black");
			$("#viewMoney").css("display","block");
			$("#viewMoney").css("height","100%");
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
				<div class="color" style="background-color:#<?php echo $param;?>" ></div>
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
		<div class="ContentsArea" id="selectType">
			<div class="title">Please select product type.</div>
			<div class="captionArea">塗料をお買い求めの方は paint を、<br>
			お買い求め前に色を実際に見てみたい方は sample をお選びください。</div>
			<div class="parts opt1OpenTrig">
				<div class="image"><img src="<?php echo get_template_directory_uri(); ?>/image/product_detail/paintBottle.jpg"></div>
				<div class="p_name">塗料(容量 1L) </div>
			</div>
			<div class="parts opt1OpenTrig">
				<div class="image"><img src="<?php echo get_template_directory_uri(); ?>/image/product_detail/paintBottle.jpg"></div>
				<div class="p_name">塗料(容量 2L) </div>
			</div>
			<div class="parts opt1OpenTrig">
				<div class="image"><img src="<?php echo get_template_directory_uri(); ?>/image/product_detail/paintBottle.jpg"></div>
				<div class="p_name">塗料(容量 3L) </div>
			</div>
			<div class="parts opt1OpenTrig">
				<div class="image"><img src="<?php echo get_template_directory_uri(); ?>/image/product_detail/paintBottle.jpg"></div>
				<div class="p_name">塗料(容量 4L) </div>
			</div>
			<div class="parts opt1OpenTrig">
				<div class="image"><img src="<?php echo get_template_directory_uri(); ?>/image/product_detail/colorBook.jpg"></div>
				<div class="p_name">塗料sample </div>
			</div>
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
			<div class="image"><img src="<?php echo get_template_directory_uri(); ?>/image/product_detail/sample_paint_01.jpg">
			</div>
		</div><!--ContentsArea --> 

		<div class="ContentsArea" id="viewMoney">
			<div class="price">価格  ¥18,400</div>
			<div class="btn">カートに入れる</div>
		</div><!--ContentsArea --> 
	

</div><!--PageWrapper --> 
<?php require "footer.php"; ?> 																	<!-- Call common.php ---->

	
</body>
</html>