// -------------------------
// LoadEvent
// -------------------------
$(function(){

	$(window).on('load',function(){
		FadeInFunc();
		SlideInFunc();
	});
	$(window).resize(function (){
		FadeInFunc();
		SlideInFunc();
	});
	$(document).ready(function(){
		FadeInFunc();
		SlideInFunc();
	});
});

function FadeInFunc(){
	$(".FadeInLeft").each(function(){
		if ( $(this).offset().top > 0 ) {
			var offset = $(this).offset().top;
			var scrolltop = $(window).scrollTop();
			var windowH = $(window).height();
	
			if (scrolltop > offset - windowH * 0.75){
				$(this).css("opacity","1");
				moveX="translate(0,0)";
				$(this).css("-webkit-transform",moveX);
			}
		}
	});

	$(".FadeInRight").each(function(){
		if ( $(this).offset().top > 0 ) {
			var offset = $(this).offset().top;
			var scrolltop = $(window).scrollTop();
			var windowH = $(window).height();
	
			if (scrolltop > offset - windowH * 0.75){
				$(this).css("opacity","1");
				moveX="translate(0,0)";
				$(this).css("-webkit-transform",moveX);
			}
		}
	});
	
	$(".FadeInUp").each(function(){
		if ( $(this).offset().top > 0 ) {
			var offset = $(this).offset().top;
			var scrolltop = $(window).scrollTop();
			var windowH = $(window).height();
	
			if (scrolltop > offset - windowH * 0.75){
				$(this).css("opacity","1");
				moveX="translateY(0)";
				$(this).css("-webkit-transform",moveX);
			}
		}
	});
	$(".FadeIn").each(function(){
		if ( $(this).offset().top >= 0 ) {
			var offset = $(this).offset().top;
			var scrolltop = $(window).scrollTop();
			var windowH = $(window).height();
			
			if (scrolltop > offset - windowH * 0.75){
					// ディレイ設定の場合はaddClassを遅らせる
					nameStr = $(this).attr("title");
					if("delay250ms" == nameStr){
						delayAddClass=250;
					}
					else if("delay500ms" == nameStr){
						delayAddClass=500;
					}
					else if("delay750ms" == nameStr){
						delayAddClass=750;
					}
					else if("delay1000ms" == nameStr){
						delayAddClass=1000;
					}
					else if("delay1500ms" == nameStr){
						delayAddClass=1500;
					}
					else{
						delayAddClass=0;
					}
					$(this).delay(delayAddClass).queue(function(next) {
							$(this).css("opacity","1");
							next();
					});	
			}
		}
	});
	$(".FadeInSlideMaskRight").each(function(){
		if ( $(this).offset().top > 0 ) {
			var offset = $(this).offset().top;
			var scrolltop = $(window).scrollTop();
			var windowH = $(window).height();
	
			if (scrolltop > offset - windowH * 0.75){
				$(this).css("transform","scale(0,0)");
			}
		}
	});
	$(".FadeInSlideMaskLeft").each(function(){
		if ( $(this).offset().top > 0 ) {
			var offset = $(this).offset().top;
			var scrolltop = $(window).scrollTop();
			var windowH = $(window).height();
	
			if (scrolltop > offset - windowH * 0.75){
				$(this).css("transform","scale(0,0)");
			}
		}
	});
}
function SlideInFunc(){
	$(".mask_slide_up").each(function(i){
		if ( $(this).offset().top > 0 ) {
			var offset = $(this).offset().top;
			var scrolltop = $(window).scrollTop();
			var windowH = $(window).height();
	
			if (scrolltop > offset - windowH * 0.75){
					
					// ディレイ設定の場合はaddClassを遅らせる
					nameStr = $(this).attr("title");
					if("delay250ms" == nameStr){
						console.log("250");
						delayAddClass=250;
					}
					else if("delay500ms" == nameStr){
						console.log("500");
						delayAddClass=500;
					}
					else if("delay750ms" == nameStr){
						console.log("750");
						delayAddClass=750;
					}
					else if("delay1000ms" == nameStr){
						console.log("1000");
						delayAddClass=1000;
					}
					else if("delay1500ms" == nameStr){
						console.log("1500");
						delayAddClass=1500;
					}
					else{
						delayAddClass=0;
					}
					$(this).delay(delayAddClass).queue(function(next) {
							$(this).addClass("mask_slide_up_do");
							next();
					});					

			}
		}
	});
	$(".mask_slide_down").each(function(i){
		if ( $(this).offset().top > 0 ) {
			var offset = $(this).offset().top;
			var scrolltop = $(window).scrollTop();
			var windowH = $(window).height();
	
			if (scrolltop > offset - windowH * 0.75){
					
					// ディレイ設定の場合はaddClassを遅らせる
					nameStr = $(this).attr("title");
					if("delay250ms" == nameStr){
						console.log("250");
						delayAddClass=250;
					}
					else if("delay500ms" == nameStr){
						console.log("500");
						delayAddClass=500;
					}
					else if("delay750ms" == nameStr){
						console.log("750");
						delayAddClass=750;
					}
					else if("delay1000ms" == nameStr){
						console.log("1000");
						delayAddClass=1000;
					}
					else if("delay1500ms" == nameStr){
						console.log("1500");
						delayAddClass=1500;
					}
					else{
						delayAddClass=0;
					}
					$(this).delay(delayAddClass).queue(function(next) {
							$(this).addClass("mask_slide_down_do");
							next();
					});					

			}
		}
	});
		$(".slideMask_right").each(function(i){
		if ( $(this).offset().top > 0 ) {
			var offset = $(this).offset().top;
			var scrolltop = $(window).scrollTop();
			var windowH = $(window).height();
	
			if (scrolltop > offset - windowH * 0.75){
					
					// ディレイ設定の場合はaddClassを遅らせる
					nameStr = $(this).attr("title");
					if("delay250ms" == nameStr){
						delayAddClass=250;
					}
					else if("delay500ms" == nameStr){
						delayAddClass=500;
					}
					else if("delay750ms" == nameStr){
						delayAddClass=750;
					}
					else if("delay1000ms" == nameStr){
						delayAddClass=1000;
					}
					else if("delay1500ms" == nameStr){
						delayAddClass=1500;
					}
					else{
						delayAddClass=0;
					}
					$(this).delay(delayAddClass).queue(function(next) {
							$(this).addClass("slideMask_right_do");
							$(this).find(".child").addClass("child_do");
							next();
					});					

			}
		}
	});
}

// -------------------------
// フェードイン
// -------------------------
$(function(){
	$(window).scroll(function(){
		FadeInFunc();
		SlideInFunc();
	});
});
