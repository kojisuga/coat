<?php session_start(); ?>
	

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
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/Cart.css?<?php echo file_date(get_template_directory() . '/css/Cart.css'); ?>" type="text/css" />

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
	<div class="title fs50 titleFontFamily ">MY CART</div>
	
	<div class="ContentsArea">
<?php
	$totalPrice = 0;

	if (isset($_SESSION['cartPaint']['cartCnt'])) {
		echo 	'<div class="title">coat original paint</div>';

		for($cartCnt = 0; $cartCnt < $_SESSION['cartPaint']['cartCnt']; $cartCnt++){
			echo '<div class="cartContents">';
			echo '<div class="image" style="background:#'.$_SESSION["cartPaint"][$cartCnt]["colorParam"].'"></div>';
			echo '<div class="caption">';
			echo 	'<div class="parts">';
			echo 		'<div class="label">color</div>';
			echo 		'<div class="data">'.$_SESSION['cartPaint'][$cartCnt]['color'].'</div>';
			echo 	'</div><!--parts --> ';
			echo 	'<div class="parts">';
			echo 		'<div class="label">type</div>';
			echo 		'<div class="data">'.$_SESSION['cartPaint'][$cartCnt]['type'].'</div>';
			echo 	'</div><!--parts --> ';
			echo 	'<div class="parts">';
			echo 		'<div class="label">volume</div>';
			echo 		'<div class="data">'.$_SESSION['cartPaint'][$cartCnt]['volume'].'</div>';
			echo 	'</div><!--parts --> ';
			echo 	'<div class="parts">';
			echo 		'<div class="label">price</div>';
			echo 		'<div class="data">'.$_SESSION['cartPaint'][$cartCnt]['price'].'</div>';
			echo 	'</div><!--parts --> ';
			echo '</div>';
			echo '</div><!--cartContents --> ';
			$cleanedString = str_replace(["¥", ' '], '', $_SESSION['cartPaint'][$cartCnt]['price']);
			$totalPrice += intval($cleanedString);
		}
	}
?>
	</div><!--ContentsArea --> 
	<div class="ContentsArea" id="total">
		<div class="totalPrice">
			<div class="caption"></div>

			<div class="parts">
				<div class="label">小計</div>
				<div class="data"><?php echo "¥ ".$totalPrice; $_SESSION['totalPrice'] = $totalPrice; ?></div>
			</div>
			<a class="aLink" href="<?php echo home_url();?>/order"><div class="divBtn">購入に進む</div></a>
		</div>
	</div><!--ContentsArea --> 

</div><!--PageWrapper --> 
<?php require "footer.php"; ?> 																	<!-- Call common.php ---->

</body>
</html>