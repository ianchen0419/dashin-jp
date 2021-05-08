<?php get_header();?>

<div id="visual">
	<div class="page-title">
		<img src="<?php echo get_stylesheet_directory_uri().'/img/title.png' ?>" height="100%" />
		<div class="wrapper-size">
			<h1 class="has-blue-color has-text-align-center">このページは存在していません</h1>
		</div>
	</div>
</div>
<main id="contact">
	<p>お探しのページは存在していません。下記メニューリストを通してお求めの情報を見つければ幸いです。</p>
	<div class="wrapper-size has-gray-color">
		<?php wp_nav_menu(array('theme_location' => 'full')); ?>
	</div>
</main>


<?php get_footer();?>