<?php $banner_img = get_field ('banner_image_url');

?>
<div class="banner <?php
	if (!is_page('home')) {
		echo 'banner-sample';
	}
?>" style="background-image: url( <?php echo $banner_img ?>);">
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