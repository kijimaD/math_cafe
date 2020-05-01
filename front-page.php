<?php get_header(); ?>

<?php
$text_data = [
    'slide01_p' => ['3Dしろくま＆自家焙煎コーヒー', '3D Shirokuma & Homemade Coffee'],
    'slide02_h' => ['数学塾', 'Mathmatics School'],
    'slide02_p' => ['数学を好きになる塾', '...(わからない)'],
    'slide03_h' => ['プログラミング教室', 'Programming School'],
    'slide03_p' => ['すべての人に創る力を', 'Power to create for all'],
    'carousel_previous' => ['前に戻る', 'Previous'],
    'carousel_next' => ['次に進む', 'Next'],
    'about_h' => ['数学カフェについて', 'About Us'],
    'about_p' => ['元々数学講師だったオーナーが数学塾をしながらカフェを始めたのがここ、数学カフェ。多くの人が算数や数学に触れるのは学生のみ。本当は楽しい数学のはずが、「勉強」として出会ってしまったことで嫌いになってしまった人も多いのでは？<br><br>店内にはミニテストや数学を好きになってもらう仕掛けをご用意しております。話しのネタにしてもいいし、少しでも数学がお客様の日常に馴染む接点の場になれましたら格別の喜びです。', 'This is the math cafe where the owner, who was originally a math teacher, started a cafe while doing a math school. Many students only touch math and math. Actually it should be fun math, but many people have disliked it because they met as "study"? <br> <br> In the store, we have a mechanism to let you like mini-tests and math. It\'s okay to use it as a story, and it would be a great pleasure if mathematics could become a place of contact where you could become familiar with your daily life.'],
    'about_menu' => ['メニューを見る', 'Menu'],
    'about_shop' => ['店舗情報を見る', 'Shop Info'],
    'about_math_h' => ['数学塾', 'Math School'],
    'about_math_p' => ['数学は年齢も性別も、社会的地位も関係なく、誰にでも平等です。難しい問題が解けた時の爽快感!　そんな数学の魅力と面白さを伝える塾です。', 'Mathematics is equal for everyone, regardless of age, gender or social status. A refreshing feeling when solving difficult problems! A private school that conveys the charm and fun of such mathematics.'],
    'about_math_a' => ['数学塾について', 'About Math School'],
    'about_programming_h' => ['プログラミング教室', 'Programming School'],
    'about_programming_p' => ['2020年から必修化となるプログラミング。日本一楽しんで学べる教室です。', 'Programming that will be compulsory from 2020. This is the most enjoyable classroom in Japan.'],
    'about_programming_a' => ['プログラミング教室について', 'About Programming School'],
    'article_list' => ['一覧', ' List'],
    'menu_h' => ['メニュー', 'Menu'],
    'menu_p' => ['※税別価格です。', '* All prices exclude tax.'],
    'tab_01' => ['コーヒー', 'Coffee'],
    'tab_02' => ['ドリンク', 'Drink'],
    'tab_03' => ['ランチ', 'Lunch'],
    'tab_04' => ['デザート', 'Dessert'],
    'info_h' => ['店舗情報', 'Info'],
    'info_p' => ['数学カフェは、おしゃれな町並みのなかにあります。駅チカで、立ち寄りやすくなっています。', 'Our store is located in a fashionable street. ＊＊＊＊＊暫定です＊＊＊＊＊'],
    'info_table_name_head' => ['店名', 'Name'],
    'info_table_address_head' => ['住所', 'Address'],
    'info_table_address_body' => ['〒892-0821　鹿児島県鹿児島市名山町4-1名山ビル2F', 'Address*****'],
    'info_table_phone_head' => ['電話番号', 'Phone'],
    'info_table_open_head' => ['営業時間', 'Business hour'],
    'info_table_holiday_head' => ['定休日', 'Regular holiday'],
    'info_table_holiday_body' => ['なし', 'None'],
    'info_table_credit_head' => ['クレジットカード', 'Credit card'],
    'info_table_credit_body' => ['利用可', 'OK'],
    'info_table_emoney_head' => ['電子マネー', 'E-money'],
    'info_table_emoney_body' => ['主要電子マネー利用可(ICカード式、QRコード式)', 'Cover major brand(IC-card, QR-code)'],
    'info_table_smoking_head' => ['禁煙・喫煙', 'Cigarette'],
    'info_table_smoking_body' => ['店内全面禁煙', 'No smoking'],
    'info_table_parking_head' => ['駐車場', 'Parking'],
    'info_table_parking_body' => ['なし', 'None'],
    'info_access_h' => ['アクセス', 'Access'],
    'info_access_p' => ['鹿児島市電「市役所前駅」から徒歩1分', '1 minute walk from Kagoshima City Tram "Shiyakusho-mae Station"'],
    '' => ['', ''],
];
?>

<!-- メイン -->
<main>
    <!-- メインビジュアル -->
    <div class="py-4">
	<div class="container">
	    <!-- カルーセル外枠 -->
	    <div id="main_visual" class="carousel slide" data-ride="carousel">
		<!-- インジケーター -->
		<ol class="carousel-indicators">
		    <li data-target="#main_visual" data-slide-to="0" class="active"></li>
		    <li data-target="#main_visual" data-slide-to="1"></li>
		    <li data-target="#main_visual" data-slide-to="2"></li>
		</ol>
		<!-- /インジケーター -->
		<!-- カルーセル内枠 -->
		<div class="carousel-inner">
		    <!-- スライド01 -->
		    <div class="carousel-item active">
			<img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/slide_01.jpg" alt="<?php bloginfo('name') ?>" />
			<div class="carousel-caption d-none d-md-block">
			    <h2><?php bloginfo('name') ?></h2>
			    <p><?php switch_lang($text_data, 'slide01_p'); ?></p>
			</div>
		    </div>
		    <!-- /スライド01 -->
		    <!-- スライド02 -->
		    <div class="carousel-item">
			<img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/slide_02.jpg" alt="数学塾" />
			<div class="carousel-caption d-none d-md-block">
			    <h2><?php switch_lang($text_data, 'slide02_h'); ?></h2>
			    <p><?php switch_lang($text_data, 'slide02_p'); ?></p>
			</div>
		    </div>
		    <!-- /スライド02 -->
		    <!-- スライド03 -->
		    <div class="carousel-item">
			<img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/slide_03.jpg" alt="プログラミング教室" />
			<div class="carousel-caption d-none d-md-block">
			    <h2><?php switch_lang($text_data, 'slide03_h'); ?></h2>
			    <p><?php switch_lang($text_data, 'slide03_p'); ?></p>
			</div>
		    </div>
		    <!-- /スライド03 -->
		</div>
		<!-- /カルーセル内枠 -->
		<!-- コントローラー -->
		<a class="carousel-control-prev" href="#main_visual" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only"><?php switch_lang($text_data, 'carousel_previous'); ?></span>
		</a>
		<a class="carousel-control-next" href="#main_visual" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only"><?php switch_lang($text_data, 'carousel_next'); ?></span>
		</a>
		<!-- /コントローラー -->
	    </div>
	    <!-- /カルーセル -->
	</div>
    </div>
    <!-- /メインビジュアル -->

    <!-- コンテンツ01-1（店概要） -->
    <div class="py-4 bg-light">
	<section id="about">
	    <div class="container">
		<!-- 上段 -->
		<div class="row mb-4">
		    <div class="col-md-9 mb-3">
			<h3 class="mb-3"><?php switch_lang($text_data, 'about_h'); ?></h3>
			<p><?php switch_lang($text_data, 'about_p'); ?></p>
			<a href="#menu" class="btn btn-outline-secondary"><?php switch_lang($text_data, 'about_menu'); ?></a>
			<a href="#shop" class="btn btn-outline-secondary"><?php switch_lang($text_data, 'about_shop'); ?></a>
		    </div>
		    <div class="col-md-3">
			<img src="<?php bloginfo('template_url'); ?>/images/about01.jpg" alt="coffee" class="img-fluid rounded float-right" style="" />
		    </div>
		</div>
	    </div>
	</section>
    </div>
    <!-- /上段 -->
    <!-- /コンテンツ01 -->

    <!-- コンテンツ01-2（店概要） -->
    <div class="py-4 bg-light">
	<section id="about">
	    <div class="container">
		<!-- 上段 -->
		<div class="row mb-4">
		    <div class="col-md-9 mb-3 order-md-1">
			<h3 class="mb-3"><?php switch_lang($text_data, 'about_math_h'); ?></h3>
			<p><?php switch_lang($text_data, 'about_math_p'); ?></p>
			<a href="<?php echo home_url('/'); ?>math<?php suffix_en(); ?>" class="btn btn-outline-primary"><?php switch_lang($text_data, 'about_math_a'); ?></a>
		    </div>
		    <div class="col-md-3 order-md-0">
			<img src="<?php bloginfo('template_url'); ?>/images/about02.jpg" alt="math school" class="img-fluid rounded" style="" />
		    </div>
		</div>
	    </div>
	</section>
    </div>
    <!-- /上段 -->
    <!-- /コンテンツ01 -->

    <!-- コンテンツ01-3（店概要） -->
    <div class="py-4 bg-light">
	<section id="about">
	    <div class="container">
		<!-- 上段 -->
		<div class="row mb-4">
		    <div class="col-md-9 mb-3 order-md-1">
			<h3 class="mb-3 "><?php switch_lang($text_data, 'about_programming_h'); ?></h3>
			<p><?php switch_lang($text_data, 'about_programming_p'); ?></p>
			<a href="<?php echo home_url('/'); ?>programming<?php suffix_en(); ?>" class="btn btn-outline-primary"><?php switch_lang($text_data, 'about_programming_a'); ?></a>
		    </div>
		    <div class="col-md-3 order-md-0">
			<img src="<?php bloginfo('template_url'); ?>/images/about03.jpg" alt="programming school" class="img-fluid rounded float-right" style="" />
		    </div>
		</div>
	    </div>
	</section>
    </div>
    <!-- /上段 -->
    <!-- /コンテンツ01 -->

    <!-- コンテンツ02（新着記事） -->
    <div class="py-4">
	<section id="news">
	    <div class="container shadow">
		<div class="row">

		    <!-- whileバージョン 該当カテゴリーがないとエラーになるので注意!! -->
		    <?php

		    if(get_locale() == 'ja'):
		    $article_cat_list = array(
			'information' => 2,
			'column' => 2,
		    );
		    else:
		    $article_cat_list = array(
			'information-en' => 2,
			'column-en' => 2,
		    );
		    endif;

		    foreach ($article_cat_list as $article_cat_name => $article_cat_num) :
					$article_posts = new WP_Query('posts_per_page=' . $article_cat_num . '&category_name=' . $article_cat_name);
		    ?>
		    <div class="col-lg-6 my-3">
			<aside id="<?php echo $article_cat_name; ?>-info" class="news-list">
			    <h3 class="my-3">
				<?php echo esc_html(get_category_by_slug($article_cat_name)->name); ?>
			    </h3>
			    <hr>
			    <div class="row">
				<?php
				if ($article_posts->have_posts()):
				while ($article_posts->have_posts()):
				$article_posts->the_post();
				?>
				    <!-- コンテンツ繰り返し部分 -->
				    <div class="card border-0 my-3 px-3">
					<div class="row">
					    <div class="col-12">
						<a href="<?php the_permalink(); ?>" class="post-link">
						    <?php the_post_thumbnail(
							'medium',
							array(
							    'alt' => the_title_attribute('echo=0'),
							    'title' =>
								the_title_attribute('echo=0'),
							    'class' =>
								'card-img',
							)
						    ); ?>
						</a>
					    </div>
					    <div class="col-12">
						<div class="card-body">
						    <h5>
							<a href="<?php the_permalink(); ?>">
							    <?php the_title(); ?></a>
						    </h5>
						    <small>
							<time class="entry-date" datetime="<?php the_time('Y-m-d'); ?>">
							    <?php the_time(get_option('date_format')); ?>
							</time>
						    </small>
						    <hr>
						    <h5 class="card-title"><a href="<?php the_permalink(); ?>"></a>
						    </h5>
						    <div class="card-text">
							<?php the_pickup_excerpt(); ?>
						    </div>
						</div>
					    </div>
					</div>
				    </div>
				    <!-- コンテンツ繰り返し部分 -->
				<?php
				endwhile;
				endif;
				?>
				<div class="col-12">
				    <a href="<?php echo get_term_link($article_cat_name, 'category'); ?>" class="btn btn-outline-secondary btn-block my-3">
					<?php echo esc_html(get_category_by_slug($article_cat_name)->name); ?><?php switch_lang($text_data, 'article_list'); ?></a>
				</div>
			    </div>
		    </div>
					<?php
					endforeach;
					?>
		</div>
	    </div>
	</section>
    </div>
    <!-- / whileバージョン -->

    <!-- /コンテンツ02 -->

    <!-- コンテンツ03 -->
    <div class="py-4 bg-light">
	<section id="menu">
	    <div class="container">
		<h3 class="mb-3"><?php switch_lang($text_data, 'menu_h'); ?></h3>
		<p><?php switch_lang($text_data, 'menu_p'); ?></p>

		<!-- タブ型ナビゲーション -->
		<div class="nav nav-tabs border-0" id="tab-menus" role="tablist">
		    <!-- タブ01 -->
		    <a class="nav-item nav-link active border-0" id="tab-menu01" data-toggle="tab" href="#panel-menu01" role="tab" aria-controls="panel-menu01" aria-selected="true"><?php switch_lang($text_data, 'tab_01'); ?></a>
		    <!-- タブ02 -->
		    <a class="nav-item nav-link border-0" id="tab-menu02" data-toggle="tab" href="#panel-menu02" role="tab" aria-controls="panel-menu02" aria-selected="false"><?php switch_lang($text_data, 'tab_02'); ?></a>
		    <!-- タブ03 -->
		    <a class="nav-item nav-link border-0" id="tab-menu03" data-toggle="tab" href="#panel-menu03" role="tab" aria-controls="panel-menu03" aria-selected="false"><?php switch_lang($text_data, 'tab_03'); ?></a>
		    <!-- タブ04 -->
		    <a class="nav-item nav-link border-0" id="tab-menu04" data-toggle="tab" href="#panel-menu04" role="tab" aria-controls="panel-menu04" aria-selected="false"><?php switch_lang($text_data, 'tab_04'); ?></a>
		</div>
		<!-- /タブ型ナビゲーション -->

		<!-- タブパネル -->
		<div class="tab-content" id="panel-menus">
		    <!-- パネル01 -->
		    <div class="tab-pane fade show active" id="panel-menu01" role="tabpanel" aria-labelledby="tab-menu01">
			<div class="row p-3 bg-white">
			    <div class="col-md-7 order-md-2">
				<!-- <h4 class="text">コーヒー</h4> -->
				<table class="table table-hover table-borderless">
				    <tbody>
					<tr>
					    <th>くまラテ hot</th>
					    <td><div class="text-right">557円</div></td>
					</tr>
					<tr>
					    <th>くまラテ ice</th>
					    <td><div class="text-right">563円</div></td>
					</tr>
					<tr>
					    <th>完全なる自家焙煎コーヒー hot</th>
					    <td><div class="text-right">496円</div></td>
					</tr>
					<tr>
					    <th>完全なる自家焙煎コーヒー ice</th>
					    <td><div class="text-right">496円</div></td>
					</tr>
					<tr>
					    <th>√プチーノ</th>
					    <td><div class="text-right">547円</div></td>
					</tr>
				    </tbody>
				</table>
			    </div>
			    <div class="col-md-5">
				<img src="<?php bloginfo('template_url'); ?>/images/coffee.jpg" alt="コーヒー" class="img-fluid rounded" />
			    </div>
			</div>
		    </div>

		    <!-- パネル02 -->
		    <div class="tab-pane fade" id="panel-menu02" role="tabpanel" aria-labelledby="tab-menu02">
			<div class="row p-3 bg-white">
			    <div class="col-md-7 order-md-2">
				<table class="table table-hover table-borderless">
				    <tbody>
					<tr>
					    <th>紅茶 hot or ice</th>
					    <td><div class="text-right">457円</div></td>
					</tr>
					<tr>
					    <th>黒糖タピオカバナナジュース</th>
					    <td><div class="text-right">569円</div></td>
					</tr>
					<tr>
					    <th>オレンジジュース</th>
					    <td><div class="text-right">401円</div></td>
					</tr>
					<tr>
					    <th>アップルジュース</th>
					    <td><div class="text-right">409円</div></td>
					</tr>
				    </tbody>
				</table>
			    </div>
			    <div class="col-md-5">
				<img src="<?php bloginfo('template_url'); ?>/images/drink.jpg" alt="ドリンク" class="img-fluid rounded" />
			    </div>
			</div>
		    </div>

		    <!-- パネル03 -->
		    <div class="tab-pane fade" id="panel-menu03" role="tabpanel" aria-labelledby="tab-menu03">
			<div class="row p-3 bg-white">
			    <div class="col-md-7 order-md-2">
				<table class="table table-hover table-borderless">
				    <tbody>
					<tr>
					    <th>黒豚なんこつカレー</th>
					    <td><div class="text-right">659円</div></td>
					</tr>
					<tr>
					    <th>すうがっくまバーグ</th>
					    <td><div class="text-right">797円</div></td>
					</tr>
					<tr>
					    <th>ヘルシーなんこつ丼</th>
					    <td><div class="text-right">661円</div></td>
					</tr>
				    </tbody>
				</table>
			    </div>
			    <div class="col-md-5">
				<img src="<?php bloginfo('template_url'); ?>/images/lunch.jpg" alt="ランチ" class="img-fluid rounded" />
			    </div>
			</div>
		    </div>

		    <!-- パネル04 -->
		    <div class="tab-pane fade" id="panel-menu04" role="tabpanel" aria-labelledby="tab-menu04">
			<div class="row p-3 bg-white">
			    <div class="col-md-7 order-md-2">
				<table class="table table-hover table-borderless">
				    <tbody>
					<tr>
					    <th>フルーツ温泉しろくまの湯(2〜3人用)</th>
					    <td><div class="text-right">1801円</div></td>
					</tr>
					<tr>
					    <th>ちび熊</th>
					    <td><div class="text-right">541円</div></td>
					</tr>
					<tr>
					    <th>円周率アップルπ</th>
					    <td><div class="text-right">314円</div></td>
					</tr>
				    </tbody>
				</table>
			    </div>
			    <div class="col-md-5">
				<img src="<?php bloginfo('template_url'); ?>/images/dessert.jpg" alt="デザート" class="img-fluid rounded" />
			    </div>
			</div>
		    </div>

		</div><!-- /タブパネル -->
	    </div>
	</section>
    </div>

    <!-- /コンテンツ03 -->

    <!-- コンテンツ05 -->
    <div class="py-4 bg-white">
	<section id="information">
	    <div class="container">

		<div class="row">
		    <!-- 左側セクション -->
		    <div class="col-md-6">
			<section id="shop">
			    <h4 class="mb-3"><?php switch_lang($text_data, 'info_h'); ?></h4>
			    <p><?php switch_lang($text_data, 'info_p'); ?></p>
			    <!-- 店舗情報の表 -->
			    <table class="table table-hover">
				<tbody>
				    <tr>
					<th><?php switch_lang($text_data, 'info_table_name_head'); ?></th>
					<td><?php bloginfo('name') ?></td>
				    </tr>
				    <tr>
					<th><?php switch_lang($text_data, 'info_table_address_head'); ?></th>
					<td><?php switch_lang($text_data, 'info_table_address_body'); ?></td>
				    </tr>
				    <tr>
					<th><?php switch_lang($text_data, 'info_table_phone_head'); ?></th>
					<td>050-3490-1163</td>
				    </tr>
				    <tr>
					<th><?php switch_lang($text_data, 'info_table_open_head'); ?></th>
					<td>8:00-17:00</td>
				    </tr>
				    <tr>
					<th><?php switch_lang($text_data, 'info_table_holiday_head'); ?></th>
					<td><?php switch_lang($text_data, 'info_table_holiday_body'); ?></td>
				    </tr>
				    <tr>
					<th><?php switch_lang($text_data, 'info_table_credit_head'); ?></th>
					<td><?php switch_lang($text_data, 'info_table_credit_body'); ?></td>
				    </tr>
				    <tr>
					<th><?php switch_lang($text_data, 'info_table_emoney_head'); ?></th>
					<td><?php switch_lang($text_data, 'info_table_emoney_body'); ?></td>
				    </tr>
				    <tr>
					<th><?php switch_lang($text_data, 'info_table_smoking_head'); ?></th>
					<td><?php switch_lang($text_data, 'info_table_smoking_body'); ?></td>
				    </tr>
				    <tr>
					<th><?php switch_lang($text_data, 'info_table_parking_head'); ?></th>
					<td><?php switch_lang($text_data, 'info_table_parking_body'); ?></td>
				    </tr>
				    <tr class="bg-light">
					<th>SNS</th>
					<td></td>
				    </tr>
				    <tr>
					<th>Instagram</th>
					<td><a href="https://www.instagram.com/mathscafe/?hl=ja">mathscafe</td>
				    </tr>
				    <tr>
					<th>Twitter</th>
					<td><a href="https://twitter.com/3deco">3deco</td>
				    </tr>
				    <tr>
					<th>Youtube</th>
					<td><a href="https://www.youtube.com/channel/UC2tiftbSLltdK6f347QCpFw">数学カフェ-Kagoshima-</a></td>
				    </tr>
				</tbody>
			    </table>

			    <!-- /店舗情報の表 -->
						</section>
					</div>
					<!-- /左側セクション -->
					<!-- 右側セクション -->
					<div class="col-md-6">
						<section id="access">
							<h4 class="mb-3"><?php switch_lang($text_data, 'info_access_h'); ?></h4>
							<!-- アクセスマップ -->
							<div class="embed-responsive embed-responsive-4by3">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4407.303448556333!2d130.55570288813428!3d31.592884389081274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbe57487d4f5da29!2zU0FOREVDTyBDT0ZGRUXvvZ7mlbDlrabjgqvjg5XjgqfvvZ4!5e0!3m2!1sja!2sjp!4v1584867673756!5m2!1sja!2sjp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
							</div>
							<!-- /アクセスマップ -->
							<p><?php switch_lang($text_data, 'info_access_p'); ?></p> <!-- なぜかできない -->
						</section>
					</div>
						<!-- /右側セクション -->
					</div>
				</p>
			</div>
		</section>
	</div>
	<!-- /コンテンツ05 -->
</main>
<!-- /メイン -->

<?php get_footer(); ?>
