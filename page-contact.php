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
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/Contact.css?<?php echo file_date(get_template_directory() . '/css/Contact.css'); ?>" type="text/css" />

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
		
		$(".formAppear").on("click", function() {
			$("#contactBody").removeClass("hide");
			formID = $(this).attr("id").replace("formApp", "");
			console.log(formID);
			$(".formBody").addClass("hide");
			$("#frame"+formID).removeClass("hide");
		
			// scroll
			bodyChange_y =$("#contactBody").offset().top - 40;
			
			if( bodyChange_y > 0 ){
				$("body,html").animate({scrollTop:bodyChange_y},500);
			}		
		
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
	<div class="title fs50 titleFontFamily ">CONTACT</div>
	<!-- top ---->
	<div class="ContentsArea" id="contactHeader">
			<div class="caption">お問い合わせ・ご相談をお客様の立場に合わせてお選びください</div>
			<div class="selectArea">
				<div class="parts formAppear" id="formApp1">
					<div class="wrap">
						<div class="numbering">
							contact #1
						</div>
						<div class="title">
							工務店・施工業者様
						</div>
					</div>
					<div class="caption"></div>	
				</div>
				<div class="parts formAppear" id="formApp2">
					<div class="wrap">
						<div class="numbering">
							contact #2
						</div>
						<div class="title">
							店舗・オフィス オーナー様
						</div>
					</div>
					<div class="caption"></div>	
				</div>
				<div></div>
				<div class="parts formAppear" id="formApp3">
					<div class="wrap">
						<div class="numbering">
							contact #3
						</div>
						<div class="title">
							デザイナー・設計者様
						</div>
					</div>
					<div class="caption"></div>	
				</div>
				<div class="parts formAppear" id="formApp4">
					<div class="wrap">
						<div class="numbering">
							contact #4
						</div>
						<div class="title">
							個人住宅 オーナー様
						</div>
					</div>
				</div>
			</div>
	</div><!--ContentsArea --> 
	<div class="ContentsArea hide" id="contactBody">
			<div class="formBody hide" id="frame1">
				<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSd89TcXqUSSFRNgthEaSkTgb3VghNjLHuIVNUsI4bYqY-d2Gw/viewform?embedded=true" width="640" height="2200" frameborder="0" marginheight="0" marginwidth="0">読み込んでいます…</iframe>
			</div>
			<div class="formBody hide" id="frame2">
				<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfStJZ8dcRG_cKRTCs8YzpbJQjwpNRuIuL7ihtXdFPVaxTYxw/viewform?embedded=true" width="640" height="2100" frameborder="0" marginheight="0" marginwidth="0">読み込んでいます…</iframe>
			</div>
			<div class="formBody hide" id="frame3">
				<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSd0cjcAiSABPpUhL738HqyzZJ8R3Q8U-C94UqRJ8_uApqaSZg/viewform?embedded=true" width="640" height="2200" frameborder="0" marginheight="0" marginwidth="0">読み込んでいます…</iframe>
			</div>
			<div class="formBody hide" id="frame4">
				<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeXJrO1yUX40hf7BsW8pJZYsDCtd6PUDQNFyR2oCRQmQ6q7_Q/viewform?embedded=true" width="640" height="1660" frameborder="0" marginheight="0" marginwidth="0">読み込んでいます…</iframe>
			</div>
			
			
	</div><!--ContentsArea --> 

</div><!--PageWrapper --> 
<?php require "footer.php"; ?> 																	<!-- Call common.php ---->

</body>
</html>