<!doctype html>
<html <?php language_attributes(); ?> itemscope itemtype="http://schema.org/Organization">
<head>
<meta charset="utf-8">
<title><?php wp_title("",true); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta itemprop="logo" content="http://ring.catviana.com/wp-content/themes/ring/images/the-doughnut-600.png">
<meta name="coverage" content="Worldwide">
<meta itemprop="foundingDate" content="2012-27-02">
<meta name="bitly-verification" content="2d70e68a476e"/>
<meta name="wot-verification" content="b850e1ab9f7b2171e110"/>
<meta name="alexaVerifyID" content="GRe5THB5U5zt56abbW_FLzyRDiE" />
<meta name='yandex-verification' content='63819e4ba12ec291' />
<meta name="verify-blogdash" content="a9b035998df86f9d4cea823acb1f98b4" />
<meta name="myblogguest-verification" content="NTAxMzBjOTA0NmI2OTU0OGNmMzY2MmRkNmY0ZDAzM2M=" />
<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE; chrome=1" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--Shuffler-0832beb3fbe9f105e307148e27ccdfd4-->
<!-- TradeDoubler site verification 2268934 -->
<!-- Google Tracking Code-->
<!-- Google WMT Code-->
<!-- Bing WMT Code-->

<link rel="shortcut icon" href="http://ring.catviana.com/wp-content/themes/ring/images/favicon/favicon.ico">
<link rel="apple-touch-icon" sizes="57x57" href="http://ring.catviana.com/wp-content/themes/ring/images/favicon/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="114x114" href="http://ring.catviana.com/wp-content/themes/ring/images/favicon/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="72x72" href="http://ring.catviana.com/wp-content/themes/ring/images/favicon/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="144x144" href="http://ring.catviana.com/wp-content/themes/ring/images/favicon/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="60x60" href="http://ring.catviana.com/wp-content/themes/ring/images/favicon/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="120x120" href="http://ring.catviana.com/wp-content/themes/ring/images/favicon/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="76x76" href="http://ring.catviana.com/wp-content/themes/ring/images/favicon/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="152x152" href="http://ring.catviana.com/wp-content/themes/ring/images/favicon/apple-touch-icon-152x152.png">
<link rel="icon" type="image/png" href="http://ring.catviana.com/wp-content/themes/ring/images/favicon/favicon-196x196.png" sizes="196x196">
<link rel="icon" type="image/png" href="http://ring.catviana.com/wp-content/themes/ring/images/favicon/favicon-160x160.png" sizes="160x160">
<link rel="icon" type="image/png" href="http://ring.catviana.com/wp-content/themes/ring/images/favicon/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="http://ring.catviana.com/wp-content/themes/ring/images/favicon/favicon-16x16.png" sizes="16x16">
<link rel="icon" type="image/png" href="http://ring.catviana.com/wp-content/themes/ring/images/favicon/favicon-32x32.png" sizes="32x32">
<meta name="msapplication-TileColor" content="#538aab">
<meta name="msapplication-TileImage" content="http://ring.catviana.com/wp-content/themes/ring/images/favicon/mstile-144x144.png">
<meta name="msapplication-config" content="http://ring.catviana.com/wp-content/themes/ring/images/favicon/browserconfig.xml">


<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"> 
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	
		<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
		<!--[if lt IE 8]>
		<link rel="stylesheet" type="text/css" href="http://ring.catviana.com/wp-content/themes/ring/ie78.css" />
		<![endif]-->
 
<?php wp_head(); ?>

</head>

  
<body <?php body_class(); ?>>
<div class="headWrapper" name="top">
	<div class="masthead">
		<a href="<?php echo site_url(); ?>" class="siteTitle" itemprop="name">The Doughnut</a>
		
		<nav>
		<a href="#" id="menu-icon"></a><h2 id="menuIconLable"><i class="fa fa-bars"></i> Menu</h2>
		<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
		</nav>
		
		<?php get_search_form(); ?>
	</div>
</div>

<?php if ( is_user_logged_in() ) {echo "<style>.container{margin:120px auto 0;}</style>";} ?>