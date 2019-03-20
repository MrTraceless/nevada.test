<?php 

$banner_img = get_field ('banner_image_url');

$banner_img2 = get_field ('banner_image_url', 'option');
$banner_404 = get_field ('banner_404_url', 'option');




?>
<div class="banner <?php
	if (!is_page('home')) {
		echo 'banner-sample';
	}
?>" style="background-image: url( <?php if (is_archive()){
	echo $banner_img2; } elseif (is_single()){
		echo $banner_img2;
	}elseif(is_404()) {
		echo $banner_404;
	} else {
		echo $banner_img;
	} ?>);">
<div class="banner-wrapper">
	<div class="banner__container page-container">
		<div class="banner__logo">
		<a href="<?php home_url(); ?>">
               <img alt="" src="<?php echo get_field('common_main_logo','options'); ?>">
            </a>
            </div>
		</div>
	</div>
</div>