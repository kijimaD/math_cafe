<?php
/* 外部ファイルにして共通化する？headerだけでなく、こまごましたところで用いるため？ */
$text_data = [
	'lang' => ['ja', 'en'],
	'menu' => ['メニュー', 'Menu'],
	'math' => ['数学塾', 'Math'],
	'programming' => ['プログラミング教室', 'Programming'],
	'info' => ['店舗情報', 'Info'],
	'contact' => ['お問い合わせ', 'Contact Us'],
	'access' => ['アクセス','Access'],
	'online_store' => ['オンラインストア','Online Store'],
	'sitemap' => ['サイトマップ','Sitemap'],
];

/* 固定ページの英語版は末尾に-enをつけたものにした。 */

?>

<!DOCTYPE html>
<html lang='<?php switch_lang($text_data, 'lang'); ?>'>

	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" />

		<!-- 追加CSS -->
		<link href="<?php echo get_template_directory_uri();?>/css/custom.css" type="text/css" rel="stylesheet" />

		<!-- fontawesomeCDN -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

		<title>
			<?php bloginfo('name'); ?>
		</title>
		<?php wp_head(); ?>
	</head>

	<body>

		<!-- ヘッダー -->
		<header class="py-2">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h1 class="display-4 mb-0">
							<!-- <a href="<?php echo home_url('/'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.svg" alt="<?php bloginfo('name'); ?>">
								 </a> -->
							<a href="<?php echo home_url('/'); ?>" class="text-dark" style="font-weight:900;" id="site-name">
								<?php bloginfo('name') ?>
							</a>
						</h1>
						<small class="text-dark">
							<?php bloginfo('description'); ?>
						</small>
					</div>

					<!-- カスタムメニュー（utility） -->
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-12 d-none d-lg-block" id="custom_menu">
								<?php echo get_search_form(); ?>
							</div>
							<div class="col-md-12 text-right my-0 py-0" id="custom_menu">
								<small>
									<?php pll_the_languages(); ?>
								</small>
							</div>
						</div>
					</div>
					<!-- /カスタムメニュー（utility） -->
				</div>
			</div>
		</header>
		<!-- /ヘッダー -->

		<!-- ナビゲーションバー -->
		<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
			<!-- サブコンポーネント -->
			<div class="container">
				<!-- ブランド -->
				<a class="navbar-brand" href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>
				<!-- 切り替えボタン -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!--  ナビゲーション -->
				<div class="collapse navbar-collapse" id="navbar-content">
					<!-- ナビゲーションメニュー -->
					<!-- 左側メニュー: トップページの各コンテンツへのリンク -->
					<ul class="navbar-nav mr-auto">
						<!-- <li class="nav-item">
							 <a class="nav-link" href="<?php echo home_url('/'); ?>">トップ<span class="sr-only">(current)</span></a>
							 </li> -->
						<li class="nav-item">
							<a class="nav-link" href="<?php echo home_url('/'); ?>#menu"><?php switch_lang($text_data, 'menu'); ?></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo home_url('/'); ?>math<?php suffix_en(); ?>"><?php switch_lang($text_data, 'math'); ?></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo home_url('/'); ?>programming<?php suffix_en(); ?>"><?php switch_lang($text_data, 'programming'); ?></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="https://sugakucafe.theshop.jp/about"><?php switch_lang($text_data, 'online_store'); ?></a>
						</li>
						<!-- ドロップダウン -->
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<?php switch_lang($text_data, 'info'); ?>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<!-- <a class="dropdown-item" href="<?php echo home_url('/'); ?>#shop">情報</a> -->
								<a class="dropdown-item" href="<?php echo home_url('/'); ?>#access"><?php switch_lang($text_data, 'access'); ?></a>
								<a class="dropdown-item" href="<?php echo home_url('/'); ?>sitemap<?php suffix_en(); ?>"><?php switch_lang($text_data, 'sitemap'); ?></a>
							</div>
						</li>
					</ul>

					<!-- 右側メニュー: Contactページへのリンク -->
					<ul class="navbar-nav">
						<li class="nav-item">
							<a href="<?php echo home_url('/'); ?>question" class="nav-link btn btn-success text-white"><?php switch_lang($text_data, 'contact'); ?></a>
						</li>
						<li class="nav-item d-block d-md-none mt-1">
							<?php echo get_search_form(); ?>
						</li>
					</ul>
					<!-- /ナビゲーションメニュー -->
				</div>
			</div>
			<!-- /サブコンポーネント -->
		</nav>
		<!-- /ナビゲーションバー -->

		<!-- パンくずリスト -->
		<section id="breadcrumb">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<nav>
							<small>
								<?php
								if (!is_front_page() && function_exists('bread_crumb')) :
								bread_crumb('elm_class=breadcrumb bg-white px-0 py-0&elm_id=breadcrumb&li_class=breadcrumb-item&current_class=active');
								endif;
								?>
							</small>
						</nav>
					</div>
				</div>
			</div>
		</section>
		<!-- /パンくずリスト -->
