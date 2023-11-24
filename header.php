<!--〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓-->
<!--Css------------------------------------------------------------------------------------------------------------------>
<!--〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓-->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/Header.css?<?php echo file_date(get_template_directory() . '/css/Header.css'); ?>" type="text/css" />

<!--〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓-->
<!--Jquery--------------------------------------------------------------------------------------------------------------->
<!--〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓-->
<script>
// OnClick

var $Menuflag = "CLOSE";

$(function(){
	$(".HeaderMenuIcon").on("click", function() {
		if( $Menuflag == "CLOSE" ){
			$Menuflag = "OPEN";
			
			// Menuバーのスライド
			$(".BasicHeaderMenu").css("height","100vh");
			$("#Bar1").addClass("rotate45");
			$("#Bar3").addClass("rotate_45");
			$("#Bar2").addClass("hide");
		}
		else{
			$Menuflag = "CLOSE";
			// Menuバーのスライド
			$(".BasicHeaderMenu").css("height","0vh");
			$("#Bar1").removeClass("rotate45");
			$("#Bar3").removeClass("rotate_45");
			$("#Bar2").removeClass("hide");
		}
	});
	
	
	// メニュークリック
	$(".hbutton").on("click", function() {
		var id = $(this).attr("id");
		if(id.indexOf("top") > -1){
			bodyChange_y =1;
		}
		else if(id.indexOf("concept") > -1){
			bodyChange_y =$("#Concept").offset().top - 0;
		}
		else if(id.indexOf("how") > -1){
			bodyChange_y =$("#How").offset().top - 0;
		}
		else if(id.indexOf("product") > -1){
			bodyChange_y =$("#Product").offset().top - 0;
		}
		else if(id.indexOf("about") > -1){
			bodyChange_y =$("#About").offset().top - 0;
		}
		else if(id.indexOf("contact") > -1){
			bodyChange_y =$("#Contact").offset().top - 0;
		}
		if( bodyChange_y > 0 ){
			 $("body,html").animate({scrollTop:bodyChange_y},500);
		}
		console.log(id);
	});
	
	// menu hover
	$(".hbutton").hover(function() {
		$(".menuBoard").addClass("menuBoardHover");
	$(".hbutton").css("color","lightgray");
		$(this).css("color", "black");
	}, function() {
		$(".menuBoard").removeClass("menuBoardHover");
	$(".hbutton").css("color","black");
	
	});
	
	
});
</script>

<!--〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓-->
<!--Html----------------------------------------------------------------------------------------------------------------->
<!--〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓-->

<?php
	$home = home_url();
	$current =  ($_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
	if("/"==substr($current,strlen($current)-1,1)){
		$current = substr($current,0,strlen($current)-1);
	}

	if(strstr($home,$current)){
		$opacity = 0;
	}
	else{
		$opacity = 100;
	}

?>

<!--<div class="menuBoard"></div>-->
<div class="MenuPc" style="opacity:<?php echo $opacity;?>">
	<!-- Menu -->
	<div class="Menu">
		<!--		<a href="<?php echo home_url();?>"><li class="hbutton" id="p_top"  >TOP</li></a>	-->
		<a href="about"><li class="hbutton" id="p_concept"  >ABOUT</li></a>
		<a href="planning"><li class="hbutton" id="p_service"  >PLANNING</li></a>
		<a href="paint"><li class="hbutton" id="p_service"  >PAINTING</li></a>
		<a href="gallery"><li class="hbutton" id="p_service"  >GALLERY</li></a>
		<a href="product"><li class="hbutton" id="p_product"  >PRODUCTS</li></a>
		<a href="contact"><li class="hbutton" id="p_about"  >CONTACT</li></a>
		<a href="journal"><li class="hbutton" id="p_contact"  >JOURNAL</li></a>
		<div class="icon">
			<a href="<?php echo home_url();?>/cart" class="iLink"><div class="iButton"><img src="<?php echo get_template_directory_uri(); ?>/image/common/icon_bag.png"></div></a>
			<a href="<?php echo home_url();?>/contact" class="iLink"><div class="iButton"><img src="<?php echo get_template_directory_uri(); ?>/image/common/icon_mail.png"></div></a>
			<a href="https://www.instagram.com/_coat_color_/" class="iLink"><div class="iButton"><img src="<?php echo get_template_directory_uri(); ?>/image/common/icon_insta.png"></div></a>
		</div>
	</div>
	<a href="<?php echo home_url();?>"><div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/image/logo.png"></div></a>
</div>
	

<div class="MenuMobile">
	<div class="BasicHeaderMenu">
		<div class="HeaderMenuListWrapper">
			<div class="MenuImageWrapper">
			</div><!-- HeaderMenuSnsWrapper -->
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<a href="about"><li class="hbutton" id="p_concept"  >ABOUT</li></a>
			<a href="paint"><li class="hbutton" id="p_service"  >PAINTING</li></a>
			<a href="planning"><li class="hbutton" id="p_service"  >PLANNING</li></a>
			<a href="gallery"><li class="hbutton" id="p_service"  >GALLERY</li></a>
			<a href="product"><li class="hbutton" id="p_product"  >PRODUCTS</li></a>
			<a href="contact"><li class="hbutton" id="p_about"  >CONTACT</li></a>
			<a href="journal"><li class="hbutton" id="p_contact"  >JOURNAL</li></a>
		</div><!-- HeaderMenuListWrapper -->
		
		
	</div><!-- BasicHeaderMenu -->
	<!-- MenuIcon -->
	<div class="HeaderMenuIcon">
		<div class="MenuIconBar rotate0"      id="Bar1"></div>
		<div class="MenuIconBar rotateAppear" id="Bar2"></div>
		<div class="MenuIconBar rotate0"      id="Bar3"></div>
	</div>
</div>
