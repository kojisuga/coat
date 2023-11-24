<?php
/**
 * Twenty Nineteen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

/**
 * Twenty Nineteen only works in WordPress 4.7 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

if ( ! function_exists( 'twentynineteen_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function twentynineteen_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Twenty Nineteen, use a find and replace
		 * to change 'twentynineteen' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'twentynineteen', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary', 'twentynineteen' ),
				'footer' => __( 'Footer Menu', 'twentynineteen' ),
				'social' => __( 'Social Links Menu', 'twentynineteen' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 190,
				'width'       => 190,
				'flex-width'  => false,
				'flex-height' => false,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'twentynineteen' ),
					'shortName' => __( 'S', 'twentynineteen' ),
					'size'      => 19.5,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'twentynineteen' ),
					'shortName' => __( 'M', 'twentynineteen' ),
					'size'      => 22,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'twentynineteen' ),
					'shortName' => __( 'L', 'twentynineteen' ),
					'size'      => 36.5,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'twentynineteen' ),
					'shortName' => __( 'XL', 'twentynineteen' ),
					'size'      => 49.5,
					'slug'      => 'huge',
				),
			)
		);

		// Editor color palette.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Primary', 'twentynineteen' ),
					'slug'  => 'primary',
					'color' => twentynineteen_hsl_hex( 'default' === get_theme_mod( 'primary_color' ) ? 199 : get_theme_mod( 'primary_color_hue', 199 ), 100, 33 ),
				),
				array(
					'name'  => __( 'Secondary', 'twentynineteen' ),
					'slug'  => 'secondary',
					'color' => twentynineteen_hsl_hex( 'default' === get_theme_mod( 'primary_color' ) ? 199 : get_theme_mod( 'primary_color_hue', 199 ), 100, 23 ),
				),
				array(
					'name'  => __( 'Dark Gray', 'twentynineteen' ),
					'slug'  => 'dark-gray',
					'color' => '#111',
				),
				array(
					'name'  => __( 'Light Gray', 'twentynineteen' ),
					'slug'  => 'light-gray',
					'color' => '#767676',
				),
				array(
					'name'  => __( 'White', 'twentynineteen' ),
					'slug'  => 'white',
					'color' => '#FFF',
				),
			)
		);

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );
	}
endif;
add_action( 'after_setup_theme', 'twentynineteen_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function twentynineteen_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Footer', 'twentynineteen' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'twentynineteen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

}
add_action( 'widgets_init', 'twentynineteen_widgets_init' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width Content width.
 */
function twentynineteen_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'twentynineteen_content_width', 640 );
}
add_action( 'after_setup_theme', 'twentynineteen_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function twentynineteen_scripts() {
	wp_enqueue_style( 'twentynineteen-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

	wp_style_add_data( 'twentynineteen-style', 'rtl', 'replace' );

	if ( has_nav_menu( 'menu-1' ) ) {
		wp_enqueue_script( 'twentynineteen-priority-menu', get_theme_file_uri( '/js/priority-menu.js' ), array(), '1.0', true );
		wp_enqueue_script( 'twentynineteen-touch-navigation', get_theme_file_uri( '/js/touch-keyboard-navigation.js' ), array(), '1.0', true );
	}

	wp_enqueue_style( 'twentynineteen-print-style', get_template_directory_uri() . '/print.css', array(), wp_get_theme()->get( 'Version' ), 'print' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'twentynineteen_scripts' );

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function twentynineteen_skip_link_focus_fix() {
	// The following is minified via `terser --compress --mangle -- js/skip-link-focus-fix.js`.
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<?php
}
add_action( 'wp_print_footer_scripts', 'twentynineteen_skip_link_focus_fix' );

/**
 * Enqueue supplemental block editor styles.
 */
function twentynineteen_editor_customizer_styles() {

	wp_enqueue_style( 'twentynineteen-editor-customizer-styles', get_theme_file_uri( '/style-editor-customizer.css' ), false, '1.0', 'all' );

	if ( 'custom' === get_theme_mod( 'primary_color' ) ) {
		// Include color patterns.
		require_once get_parent_theme_file_path( '/inc/color-patterns.php' );
		wp_add_inline_style( 'twentynineteen-editor-customizer-styles', twentynineteen_custom_colors_css() );
	}
}
add_action( 'enqueue_block_editor_assets', 'twentynineteen_editor_customizer_styles' );

/**
 * Display custom color CSS in customizer and on frontend.
 */
function twentynineteen_colors_css_wrap() {

	// Only include custom colors in customizer or frontend.
	if ( ( ! is_customize_preview() && 'default' === get_theme_mod( 'primary_color', 'default' ) ) || is_admin() ) {
		return;
	}

	require_once get_parent_theme_file_path( '/inc/color-patterns.php' );

	$primary_color = 199;
	if ( 'default' !== get_theme_mod( 'primary_color', 'default' ) ) {
		$primary_color = get_theme_mod( 'primary_color_hue', 199 );
	}
	?>

	<style type="text/css" id="custom-theme-colors" <?php echo is_customize_preview() ? 'data-hue="' . absint( $primary_color ) . '"' : ''; ?>>
		<?php echo twentynineteen_custom_colors_css(); ?>
	</style>
	<?php
}
add_action( 'wp_head', 'twentynineteen_colors_css_wrap' );

/**
 * SVG Icons class.
 */
require get_template_directory() . '/classes/class-twentynineteen-svg-icons.php';

/**
 * Custom Comment Walker template.
 */
require get_template_directory() . '/classes/class-twentynineteen-walker-comment.php';

/**
 * Enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * SVG Icons related functions.
 */
require get_template_directory() . '/inc/icon-functions.php';

/**
 * Custom template tags for the theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * css for キャッシュ.
 */
 function file_date($filename){
  if (file_exists($filename)) {
    return date('Y-m-d-His', filemtime($filename));
  }
}
/**
 * テンプレート階層化
 */
add_filter('page_template_hierarchy', 'my_page_templates');
function my_page_templates($templates) {
    global $wp_query;
 
    $template = get_page_template_slug();
    $pagename = $wp_query->query['pagename'];
 
    if (! $template && $pagename) {
        $decoded = urldecode($pagename);
 
        if ($decoded == $pagename) {
            array_unshift($templates, "page/{$pagename}.php");
        }
    }
 
    return $templates;
}

//--------------------
// Original Function
//--------------------
function DEBUG_OUT($str,$option){

	if("TRUE"==$option){
		echo $str;
	}
}
// For Debug switch.
global $DebugOption;
//$DebugOption = "TRUE";
$DebugOption = "FALSE";
function add_my_ajaxurl() {
?>
    <script>
        var ajaxurl = '<?php echo admin_url( 'admin-ajax.php'); ?>';
    </script>
<?php
}
add_action( 'wp_head', 'add_my_ajaxurl', 1 );

//-------------------------------------------------------------------------------------
// contact
//-------------------------------------------------------------------------------------
function contact(){
 	session_start();
	$result = "";
	//----------------
	// send mail.
	//----------------
	//言語,エンコード設定
	mb_language("ja");
	mb_internal_encoding("UTF-8");
	
	//宛先
	$address="yoshikoro23@hotmail.co.jp";
	$to = $address;
	//送信者
	$from = $_POST['email'];
	//件名
	$subject = "ホームページの問い合わせ";
	//本文
	$text = "ホームページから問い合わせがありました。\n";
	$text .= "\n";
	$text .= "名前:".$_POST['personalname']."\n";
	$text .= "メールアドレス:".$_POST['email']."\n";
	$text .= "\n";
	$text .= "内容:".$_POST['query']."\n";
	
	//ヘッダー設定
	$header = "Content-Type: multipart/mixed;boundary=\"__BOUNDARY__\"\n";
	$header .= "Return-Path: " . $to . " \n";
	$header .= "From: " . $from ." \n";
	$header .= "Sender: " . $from ." \n";
	$header .= "Reply-To: " . $to . " \n";
	
	//本文設定
	$body = "--__BOUNDARY__\n";
	$body .= "Content-Type: text/plain; charset=\"ISO-2022-JP\"\n\n";
	$body .= $text . "\n\n";
	$body .= "--__BOUNDARY__\n";
			
	//送信
	if(mb_send_mail( $to, $subject, $body, $header)){
		$result ="true";
	}
	else{
		$result ="false";
	}
	
	echo $result;
	// dieしておかないと末尾に余計なデータ「0」が付与されるので注意
	die();// dieしておかないと末尾に余計なデータ「0」が付与されるので注意
}
add_action( 'wp_ajax_contact', 'contact' );
add_action( 'wp_ajax_nopriv_contact', 'contact' );

//--------------------------------
// 塗料金額の取得.
//--------------------------------
function getPaintPrice(){
	$type = $_POST['type'];
	$volume = $_POST['volume'];
	$postId = $_POST['postId'];
	$retPrice = 0;

	error_log(print_r("Func  In getPaintPrice _____", true));
	error_log(print_r("Param In type  :".$type, true));
	error_log(print_r("Param In volume:".$volume, true));
	error_log(print_r("Param In postId:".$postId, true));

	// search table.
	// ACFで作成したテーブルフィールドの値を取得
	$table_data = get_field('price', $postId );

	// error_log(print_r($table_data, true));

	foreach ($table_data['body'] as $row) {
		
		error_log(print_r($row[0]['c']."と".$type."を比較", true));

		if ($row[0]['c'] == $type) {
			$retPrice = $row[2]['c'];
			break;
		}
	}

	$retPrice *= $volume;

	echo $retPrice;

	die();		// dieしておかないと末尾に余計なデータ「0」が付与されるので注意
}
add_action( 'wp_ajax_getPaintPrice', 'getPaintPrice' );
add_action( 'wp_ajax_nopriv_getPaintPrice', 'getPaintPrice' );

//--------------------------------
// 塗料のカートへの追加
//--------------------------------
function addToCartPaint(){
	$color = $_POST['color'];
	$type = $_POST['type'];
	$volume = $_POST['volume'];
	$price = $_POST['price'];
	$colorParam  = $_POST['colorParam'];

	error_log(print_r("Func  In addToCartPaint _____", true));
	error_log(print_r("Param In color  :".$color, true));
	error_log(print_r("Param In type  :".$type, true));
	error_log(print_r("Param In volume  :".$volume, true));
	error_log(print_r("Param In price  :".$price, true));

	session_start();
	if (!isset($_SESSION['cartPaint']['cartCnt'])) {
		$_SESSION['cartPaint']['cartCnt'] = 0;
	}
	$cartCnt = $_SESSION['cartPaint']['cartCnt'];
	$_SESSION['cartPaint'][$cartCnt]['color'] = $color;
	$_SESSION['cartPaint'][$cartCnt]['type'] = $type;
	$_SESSION['cartPaint'][$cartCnt]['volume'] = $volume;
	$_SESSION['cartPaint'][$cartCnt]['price'] = $price;
	$_SESSION['cartPaint'][$cartCnt]['colorParam'] = $colorParam;

	$_SESSION['cartPaint']['cartCnt']++;

	error_log(print_r("Param Out cartCnt  :".$_SESSION['cartPaint']['cartCnt'], true));

	die();		// dieしておかないと末尾に余計なデータ「0」が付与されるので注意
}
add_action( 'wp_ajax_addToCartPaint', 'addToCartPaint' );
add_action( 'wp_ajax_nopriv_addToCartPaint', 'addToCartPaint' );

/*
//--------------------------------
// 
//--------------------------------
function (){
	die();		// dieしておかないと末尾に余計なデータ「0」が付与されるので注意
}
add_action( 'wp_ajax_', '' );
add_action( 'wp_ajax_nopriv_', '' );
*/


/**
 * wp_headの余白削除
 */
add_filter( 'show_admin_bar', '__return_false' );

