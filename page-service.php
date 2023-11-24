<?php
/** 
 * Template Name: ColorSampleFormat
 */
?>
<!DOCTYPE html>
<html lang="ja">
<!--
〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓
Header構成
〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓-->
<head>

<!--
〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓
Css
〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓-->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css?<?php echo file_date(get_template_directory() . '/style.css'); ?>" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/Service.css?<?php echo file_date(get_template_directory() . '/css/Service.css'); ?>" type="text/css" />

<!--
〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓
Jquery
〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓-->
<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>

<!--
〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓
body構成
〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓-->

<body>
<?php require "common.php"; ?> 																	<!-- Call common.php ---->
<?php require "header.php"; ?> 																	<!-- Call header.php ---->

<div class="PageWrapper">
	<div class="title fs8"><?php echo the_title();?></div>
	<div class="SubTitle">
		<div class="menu line">planning</div>
		<div class="menu line">paint</div>
		<div class="menu line">color sample</div>
		<div class="menu">how to</div>
	</div>
	<div class="PageContentsWrapper">
	</div><!-- PageContentsWrapper -->
	<div class="PageContentsWrapper">
	</div><!-- PageContentsWrapper -->
	<div class="PageContentsWrapper">
<?php
	if( have_rows("colorsample",14) ):
	
		global $DataList;
		global $Cnt;
		
		$DataList = array();
		$Cnt = 0;
		// データフィールドに入力がある値をループ
		while ( have_rows("colorsample",14) ) : the_row();
			$DataList[$Cnt]['color'] = get_sub_field('color');
			$DataList[$Cnt]['text']  = get_sub_field('text');
?>
		<div class="color_parts">
			<div class="color" style="background-color:<?php echo $DataList[$Cnt]['color']; ?>"></div>
			<div class="text"><?php echo $DataList[$Cnt]['text'];  ?></div>
		</div>
<?php 
			$Cnt++;
		endwhile; 
	endif; 
?>

	</div><!-- PageContentsWrapper -->
</div><!-- PageWrapper -->
<!-- Call footer.php ---->
</body>
</html>
