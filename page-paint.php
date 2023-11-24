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
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/Paint.css?<?php echo file_date(get_template_directory() . '/css/Paint.css'); ?>" type="text/css" />

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
		$(".SubMenuBtn").on("click", function() {
			// hide の状況をチェック
			classStr = $(this).find(".more").attr("class");
			if( classStr.indexOf("hide") > -1 ){
		$(this).addClass("subMenuClose");
		$(this).removeClass("subMenuOpen");
				$(this).find(".content").addClass("hide");
				$(this).find(".more").removeClass("hide");
			}
			else{
		$(this).removeClass("subMenuClose");
		$(this).addClass("subMenuOpen");

				$(this).find(".content").removeClass("hide");
				$(this).find(".more").addClass("hide");
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
	<!-- top ---->
	<div class="ContentsArea" id="top">
			<!-- caption -->
			<div class="pLeft">
				<div class="title fs50 titleFontFamily ">
					<div class="slideMask_right" title="delay250ms">
						<div class="child" title="">
						PAINTING
						</div>
					</div>
				</div>
				<div class="caption">
					<div class="slideMask_right" title="delay500ms">
						<div class="child" title="">
							空間に色を加えることは、住環境では暮らしや行動へ影響を与えてくれ、
							店舗や商業施設では、人の気持ちを動かすことへの効果が期待できます。<br><br>
							単体だとただ一つの色にすぎなくても、何色か組み合わせたり家具やインテリアと合わせたりすることで、歴史や文化を感じたりその空間に深みを増します。
							質感が加わることで光の影響を存分に得て、空間に広がりや奥行きを持たせてくれます。<br><br>
							どんな空間にしたいか、色と質感でバランスを整えていくことで感性に響く個性溢れる空間を作り出します。
						</div>
					</div>
				</div>
			</div>
			<!-- IMAGE -->
			<div class="pRight">
				<div class="image">
					<div class="slideMask_right" title="">
						<img class="child" src="<?php echo get_template_directory_uri(); ?>/image/paint/paint_top_1.jpg">
					</div>
				</div>
			</div>
	</div><!--ContentsArea --> 
	<div class="ContentsArea FadeIn" id="SubMenu">
		<div class="Parts Left SubMenuBtn subMenuClose">
				<div class="Numbering"># 1 </div>
				<div class="Title">paintingについて<br><span class="s_eng">about painting</span></div>
				<div class="more">+ view</div>
				<div class="content hide">
					<div class="image"><img src="<?php echo get_template_directory_uri(); ?>/image/paint/paint1_1.jpg"></div>
					<div class="text">
						塗るということ<br>
						天井、壁、ドア、窓枠、テーブル、椅子、照明器具、木の床、スピーカー、時計、植木鉢、シャッター、コンクリートの床、、、、いろいろなものを塗ってきました。表面を「塗る」という行為だけで、そのモノの表情はガラリと変わります。<br><br>
						ペインター。絵描きのことをそう呼びます。
					</div>
					<div class="image"><img src="<?php echo get_template_directory_uri(); ?>/image/paint/paint1_2.jpg"></div>						
					<div class="text">
						わたしたちが職業としているペインターは絵描きではありませんが、絵を描くように空間にある様々な構成要素の色を変え、質感を与えて調和させていくのが仕事です。例えば、柔らかい光を提供してくれる素敵な照明器具があったとして、その背景となる天井がどんな色と質感かによって、光の広がりかたや色の見え方も変わってきます。美しいファブリックが貼られた椅子も、その背景である壁の色と質感を上手に選べば、その美しさが最大限に活きてバランスの取れた存在感を放ちます。調和させていく作業のツールとして、ペイントが選択肢の豊富さからもっとも優れた素材だと考えます。ときには素敵な壁紙と組合わせることで印象的な空間を作ったり、手持ちの家具を塗って色を変えることで全体のバランスを取ったりと、素材としての柔軟性も持ち合わせています。<br><br>
						その素材として、デザイン性・安全性を兼ね備えたcoat original paintを中心に最適なペイントを選択しています。<br>
						<br>
					</div>
					<div class="text">
						ペイントすることは気軽に楽しくできる作業です。<br>
						とりあえず気軽に塗って色を変えて楽しむこともできるし、もっと綺麗さや繊細さを求める方もいるでしょう。このように段階的に楽しむことができるのもペイントの良さだと考え、DIYで楽しみたい方へのサービスからプロによる施工までを提供しています。<br><br>
					</div>
					<div class="closeBtn">× close</div>
				</div>
		</div>
			<div class="Parts Left SubMenuBtn subMenuClose">
				<div class="Numbering"># 2 </div>
				<div class="Title">工事の受注の流れ<br><span class="s_eng">construction order flow</span></div>
				<div class="more">+ view</div>
				<div class="content hide">
					<div class="image"><img src="<?php echo get_template_directory_uri(); ?>/image/sample.jpg"></div>
					<div class="text">
						コンタクト→ヒアリング・図面確認→お見積もり→ご契約→施工
						＊要検討
					</div>
					<div class="closeBtn">× close</div>
			</div>			</div>
			<div class="Parts Left SubMenuBtn subMenuClose">
				<div class="Numbering"># 3 </div>
				<div class="Title">サポートサービス<br><span class="s_eng">support service</span></div>
				<div class="more">+ view</div>
				<div class="content hide">
					<div class="image"><img src="<?php echo get_template_directory_uri(); ?>/image/paint/paint3_1.jpg"></div>
					<div class="text">
						プロのペインターがDIYペイントをお手伝いします。<br>
						毎日過ごす空間を、ご自分あるいはご家族と共に塗ることで部屋にも愛着が湧き、メンテナンスをしながら住うことで心地よさを長く維持できます。<br>
						<br>
						ペイント作業で大事なのは塗る前の準備です。塗らない箇所をカバーするマスキングの作業や、的確な作業手順の提案なども含め、プロのペインターがお手伝いすることで仕上がりの完成度が格段にアップします。<br>
						体験的にペイントを楽しんでみたい方から本格的にペイントを覚えたい方まで、お客様のご要望にあったサポートのご提案をいたします。<br>
						<br>
					</div>
					<div class="closeBtn">× close</div>
				</div>

		</div>
			<div class="Parts Right SubMenuBtn subMenuClose">
				<div class="Numbering"># 4 </div>
				<div class="Title">体験会の紹介<br><span class="s_eng">trial session</span></div>
				<div class="more">+ view</div>
				<div class="content hide">
					<div class="image"><img src="<?php echo get_template_directory_uri(); ?>/image/sample.jpg"></div>
					<div class="text">
						ここに文字がきます。アイウエオかきくけこ abcdefghijklmnopqrlstvwxyz<br>
						<br>
						ここに文字がきます。ここに文字がきます。アイウエオかきくけこ abcdefghijklmnopqrlstvwxyz<br>
						ここに文字がきます。ここに文字がきます。ここに文字がきます。アイウエオかきくけこ abcdefghijklmnopqrlstvwxyz<br>
						<br>
					</div>
					<div class="image"><img src="<?php echo get_template_directory_uri(); ?>/image/sample.jpg"></div>
					<div class="text">
						ここに文字がきます。アイウエオかきくけこ abcdefghijklmnopqrlstvwxyz<br>
						<br>
						ここに文字がきます。ここに文字がきます。アイウエオかきくけこ abcdefghijklmnopqrlstvwxyz<br>
						ここに文字がきます。ここに文字がきます。ここに文字がきます。アイウエオかきくけこ abcdefghijklmnopqrlstvwxyz<br>
						<br>
					</div>
					<div class="closeBtn">× close</div>
				</div>
		</div>
	</div><!--ContentsArea --> 
	<!--ContentsArea #profile--> 
	<div class="ContentsArea" id="member">
			<div class="title fs50 titleFontFamily FadeIn">member</div>
			<div class="parts FadeIn">
				<div class="image">
					<img src="<?php echo get_template_directory_uri(); ?>/image/paint/paint_profile.jpg">
					<div class="personname">
						Osamu Yamaguchi
					</div>
					<div class="job">
						Decorative Painter
					</div>

				</div>
				<div class="caption">
					<div class="txt">
						塗ることを仕事にしたのは映画やCM、PVのセットを作る映像美術制作会社に所属したのが始まり。<br>
						塗るという行為だけで、あらゆるモノの表情を次々と変えていく面白さに魅了される。<br>
						<br>
						出向したアミューズメントパークの美術塗装における色調合・色管理・ドキュメンテーション作成業務で2000色超を扱い、色の奥深い世界を感覚的・体系的に学ぶ。<br>
						アミューズメントパークの仕事完了と同時に退職。<br>
						<br>
						建設関連会社にて外国製ペイントの輸入・販売に関する立ち上げを担当。<br>
						海外メーカー研修時に触れた、街並み・建築内外装での色彩や質感の使い方に感銘を受け、ペイント表現の深さ・可能性を改めて学び「日本の壁に色彩と質感を」をキーワードにsquare meter（平方メートルの意）の屋号で独立。<br>
						独自に海外ペイントの輸入も行い、国内外の多種多様なペイントを使いオリジナル仕上げを提案、店舗内装を中心に多数の物件で施工を行う。<br>
						<br>
						その後基本に立ち返り日常に色彩と質感を取り入れ居住環境をより楽しいものにと、住宅でのインテリアペイント普及を命題に2015年、カラープランナー小林明子と共にCOAT合同会社設立後、2018年、鎌倉・稲村ヶ崎にCOAT COLOR LABを開設。<br>
						2023年、COAT PAINT STUDIO開設に伴い、責任者としてオリジナルペイントの開発を開始。<br>
					</div>
				</div>
			</div>
	</div><!--ContentsArea --> 
	

</div><!--PageWrapper --> 
<?php require "footer.php"; ?> 																	<!-- Call common.php ---->

</body>
</html>