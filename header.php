<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php wp_head(); ?>
	<title><?php bloginfo('name'); wp_title('|'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<meta name="description" content="<?php bloginfo('description') ?>" />
	<meta name="keywords" content="卵子提供,卵子提供　台湾,卵子提供　大新,卵子提供　海外,卵子提供　費用,卵巣摘出,高齢妊娠,精子提供,着床前診断,PGT-A" />
	<link rel="stylesheet prefetch" href="<?php bloginfo('template_directory') ?>/style.css" />
	<link rel="stylesheet prefetch" href="<?php bloginfo('template_directory') ?>/tablet.css" media="screen and (max-width: 1000px)" />
	<link rel="stylesheet prefetch" href="<?php bloginfo('template_directory') ?>/mobile.css" media="screen and (max-width: 782px)" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ant-design-icons/dist/anticons.min.css" />
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
	<script>
		<?php
			$need_loading=get_post_meta($post->ID, 'loading', true);
			if($need_loading==true){
				echo 'var needLoading=true';
			}else{
				echo 'var needLoading=false';
			}
		?>
	</script>

	<script src="<?php bloginfo('template_directory') ?>/loading.js"></script>
	<?php wp_body_open(); ?>
	<section id="loading">
		<svg width="199" height="300" viewBox="0 0 199 300">
			<path d="M131.63 3.1306C131.63 3.1306 94.1803 1.5706 82.5303 28.9306C70.8703 56.2906 69.3604 70.6806 69.3604 70.6806C69.3604 70.6806 82.2704 34.6906 94.1204 24.7906C105.98 14.8906 119.2 9.1806 131.63 3.1306Z" fill="#2383C6"></path>
			<path d="M64.96 89.9604L67.01 70.4304C67.08 69.8304 68.7 55.3704 80.35 28.0004C92.51 -0.539577 130.13 0.720424 131.73 0.770424L141.1 1.16042L132.67 5.26042C131.07 6.04042 129.46 6.81042 127.84 7.59042C116.98 12.7904 105.75 18.1704 95.65 26.6104C84.43 35.9804 71.72 71.1304 71.6 71.4804L64.96 89.9604ZM119.19 6.51042C107.73 8.45042 91.45 14.0204 84.71 29.8504C83.43 32.8404 82.29 35.6804 81.24 38.3504C84.81 31.9604 88.74 26.2004 92.61 22.9704C101.09 15.8904 110.18 10.9504 119.19 6.51042Z" fill="#2383C6"></path>
			<path d="M124.51 17.4194C124.51 17.4194 148.5 -8.35057 171.6 10.0194C194.7 28.3794 188.6 110.549 194.11 142.399C184.34 124.039 182.26 88.1994 178.12 56.8094C173.96 25.4094 164.49 -2.43058 124.51 17.4194Z" fill="#2383C6"></path>
			<path d="M198.59 155.48L192.18 143.43C184.26 128.56 181.27 102.47 178.37 77.2396C177.6 70.5696 176.81 63.6796 175.94 57.0996C173.81 40.9896 169.83 21.6696 157.84 15.2896C150.12 11.1896 139.23 12.5596 125.47 19.3896L114.71 24.7296L122.89 15.9396C123.14 15.6696 148.54 -11.0804 172.94 8.31959C189.86 21.7696 191.71 64.9096 193.34 102.97C193.99 118.2 194.61 132.59 196.24 142.05L198.59 155.48ZM147.81 8.53959C152.29 8.53959 156.31 9.49959 159.91 11.4196C173.57 18.6996 177.88 38.2996 180.29 56.5196C181.16 63.1396 181.96 70.0496 182.72 76.7296C184.66 93.5796 186.64 110.82 190.06 124.58C189.63 117.94 189.32 110.64 189 103.13C187.49 67.8396 185.61 23.9296 170.25 11.7196C158.48 2.35959 146.5 5.25959 138 9.87959C141.48 8.98959 144.75 8.53959 147.81 8.53959Z" fill="#2383C6"></path>
			<path d="M110.649 27.3193C110.649 27.3193 94.3592 45.4893 112.429 57.6893C130.499 69.8893 135.229 74.5593 137.899 92.1593C140.559 109.759 144.409 123.049 158.629 134.159C172.849 145.279 182.329 152.599 180.549 209.279C189.139 179.449 187.069 152.059 171.369 136.059C155.679 120.059 146.489 106.769 142.349 75.3193C138.499 65.5593 125.759 56.0693 120.129 51.7293C114.499 47.3893 108.839 46.4893 110.649 27.3193Z" fill="#2383C6"></path>
			<path d="M177.81 226.63L178.36 209.22C180.1 153.59 171.02 146.49 157.27 135.74C143.05 124.62 138.61 111.44 135.73 92.4398C133.19 75.6298 129.09 71.4398 111.13 59.3098C105.71 55.6498 102.6 51.1198 101.88 45.8298C100.49 35.6298 108.61 26.4398 108.96 26.0498L113.44 21.0498L112.83 27.4898C111.35 43.0898 114.86 45.5098 119.29 48.5698C120.03 49.0798 120.79 49.6098 121.54 50.1898L122.28 50.7598C128.2 55.3098 140.51 64.7698 144.4 74.6298L144.52 75.0698C148.48 105.14 156.86 118.26 173 134.72C188.37 150.39 191.89 177.75 182.67 209.79L177.81 226.63ZM108.13 35.1898C106.77 38.1098 105.72 41.6998 106.22 45.3498C106.79 49.4898 109.31 53.0998 113.72 56.0798C132.3 68.6298 137.32 73.7898 140.06 91.8798C142.86 110.37 146.88 122.34 160.05 132.64C172.64 142.49 181.56 149.46 182.8 186.95C185.02 165.89 180.55 148.43 169.74 137.4C153.02 120.36 144.32 106.77 140.2 75.7898C136.61 67.0098 125.05 58.1198 119.47 53.8298L118.72 53.2598C118.02 52.7298 117.33 52.2398 116.65 51.7698C111.81 48.4198 108.4 45.1898 108.13 35.1898Z" fill="#2383C6"></path>
			<path d="M77.0195 96.1895C77.0195 96.1895 77.7595 107.579 81.3295 115.099C84.8995 122.619 83.4195 132.069 94.5495 132.419C105.69 132.769 110.99 131.509 126.46 119.959C99.9795 129.489 100.17 132.379 90.3895 126.839C90.3895 126.839 87.3095 122.009 83.4195 111.929C79.5395 101.859 77.0195 96.1895 77.0195 96.1895Z" fill="#2383C6"></path>
			<path d="M102.72 133.87C100.19 134.18 97.5298 134.22 94.4598 134.12C84.9898 133.82 83.2498 127.46 81.7098 121.85C81.1498 119.82 80.5798 117.72 79.6698 115.81C76.0098 108.1 75.2398 96.7999 75.2098 96.3199L74.5498 86.1699L78.6998 95.5199C78.7298 95.5799 81.2798 101.33 85.1398 111.35C88.3398 119.66 90.9998 124.37 91.7498 125.63C98.0498 129.15 99.2198 128.69 110.84 124.1C114.68 122.58 119.46 120.69 125.83 118.4L136.66 114.5L127.59 121.27C116.11 129.86 109.95 132.98 102.72 133.87ZM113 126.9C112.73 127 112.48 127.11 112.22 127.21C108.86 128.54 106.24 129.58 104.03 130.28C106.82 129.74 109.63 128.72 113 126.9ZM85.1698 120.73C85.1898 120.81 85.2098 120.95 85.2298 121.03C86.9098 127.14 88.1698 130.89 94.6498 130.89C94.6698 130.89 94.6998 130.89 94.7198 130.89C93.1498 130.89 91.4698 129.53 89.4298 128.38L89.0498 128.13L88.8198 127.76C88.7398 127.61 87.2998 125.32 85.1698 120.73Z" fill="#2383C6"></path>
			<path d="M1.89047 194.92L4.00047 203.52L6.13047 194.92C7.50047 189.4 8.37047 185.23 9.07047 181.88C11.3705 170.88 11.7205 169.19 21.9505 157.17C25.0905 152.78 25.9605 149.05 24.5105 146.08C22.3305 141.59 15.9705 141.18 15.2505 141.15L9.49047 140.9L13.6305 144.91C14.8105 146.05 16.4205 148.23 16.4105 149.36C16.4105 149.52 16.3805 149.56 16.2905 149.64C15.4605 150.43 -4.42953 169.25 1.89047 194.92Z" fill="#F27179"></path>
			<path d="M43.5 82.6899C37.02 80.7699 25 81.7099 15.52 87.2399C8.89003 91.0999 4.60003 96.5699 3.10003 103.04C-0.849966 120.11 -1.29997 124.18 9.96003 137.53L13.32 134.73C6.15003 126.02 4.67003 116.42 9.13003 107.71C14.3 97.6199 26.74 90.5599 38.05 91.3199C58.89 92.6799 62.93 109.95 62.87 114.5C62.82 118.27 64.03 121.54 65.56 125.68C66.88 129.25 68.38 133.29 69.52 138.73C71.85 156.5 58.29 164.07 57.68 164.29C67.23 161.65 73.87 159.75 76.79 154.15C81.02 146.05 77.62 136.43 74.63 127.95C72.95 123.21 71.37 118.73 71.29 115.08C70.22 90.5499 54.73 85.9999 44.48 82.9799L43.5 82.6899Z" fill="#F27179"></path>
			<path d="M97.1 192.87C84.46 198.36 58.16 209.79 47.47 204.28C41.8 201.36 38.57 196.86 35.14 192.1C31.19 186.61 27.1 180.93 19.2 177.98L14.75 176.32L16.68 180.94C17.2 182.18 29.56 211.38 45.2 213.9C48.73 214.47 52.32 214.91 56.18 214.91C67.72 214.91 81.67 210.97 103.6 194.74L117.94 184.11L101.71 190.89C100.4 191.44 98.85 192.11 97.1 192.87Z" fill="#F27179"></path>
			<line x1="15" x2="174" y1="250" y2="250" stroke="#FDF4F5" stroke-width="10" stroke-linecap="round"></line>
			<line id="loadingBar" x1="15" x2="174" y1="250" y2="250" stroke="#F27179" stroke-width="10" stroke-linecap="round" stroke-dasharray="80 100%"></line>
		</svg>

	</section>
	<header id="header" class="has-black-color">
		<table width="100%">
			<tr>
				<td align="left">
					<?php the_custom_logo(); ?>
					<h1 hidden><?php bloginfo('name') ?></h1>
				</td>
				<td align="right">
					<nav>
						<?php wp_nav_menu(array('theme_location' => 'header')); ?>
						<?php wp_nav_menu(array('theme_location' => 'language')); ?>
					</nav>
				</td>
				<td width="120"></td>
			</tr>
		</table>
		<div id="menu">
			<a href="javascript:;" onclick="showMenu(this)">
				<svg width="45" height="60" viewBox="0 0 45 60">
					<line class="svg-line1" x1="10" y1="6" x2="35" y2="6" stroke-width="2.5" stroke="white"></line>
					<line class="svg-line2" x1="10" y1="16" x2="35" y2="16" stroke-width="2.5" stroke="white"></line>
					<line class="svg-line3" x1="10" y1="26" x2="35" y2="26" stroke-width="2.5" stroke="white"></line>
					<line class="svg-line4" x1="12.5" y1="6" x2="33.5" y2="26" stroke-width="2.5" stroke="white"></line>
					<line class="svg-line5" x1="12.5" y1="26" x2="33.5" y2="6" stroke-width="2.5" stroke="white"></line>
					<text class="svg-text1" font-family="sans-serif" font-size="smaller" x="22.5" y="45" dominant-baseline="middle" fill="white" text-anchor="middle">MENU</text>
					<text class="svg-text2" font-family="sans-serif" font-size="smaller" x="22.5" y="45" dominant-baseline="middle" fill="white" text-anchor="middle">CLOSE</text>
				</svg>
			</a>
			<table width="100%" height="100%">
				<tr>
					<td class="has-white-color">
						<?php wp_nav_menu(array('theme_location' => 'full')); ?>
					</td>
					<td valign="center">
						<?php wp_nav_menu(array('theme_location' => 'social')); ?>
					</td>
				</tr>
			</table>
		</div>
	</header>