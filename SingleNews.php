<!--〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓-->
<!--Css------------------------------------------------------------------------------------------------------------------>
<script>function Css_________________________________________________________________________________________(){}</script>
<!--〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓-->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/News.css?<?php echo file_date(get_template_directory() . '/css/News.css'); ?>" type="text/css" />

<!----------------------------------------------------------------------------------------------------------------------->
<script>function ____page_Contents(){}</script>
<!----------------------------------------------------------------------------------------------------------------------->
<div class="ContentsLayoutWrapper">
	<div class="title fs5"><?php echo apply_filters('the_content',$posts->post_title); ?></div>
	<div class="bodytext"><?php echo apply_filters('the_content',$posts->post_content); ?></div>
	
</div><!-- ContentsLayoutWrapper -->
