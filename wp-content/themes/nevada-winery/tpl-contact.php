<?php
/*
 * Template Name: Contact Page
 */
?>

<?php get_header(); ?>

<?php get_template_part('template-parts/content', 'banner'); ?>

<main id="main" class="page-main page-container" role="main">

<section class="contact-us">
<div class="contact-us-text-block">
<?php
    $contact_title = get_field("contact_page_title"); ?>
	<h1 class="main__title contact-us--main__title"><?php
	echo $contact_title
?></h1>

<?php
    $contact_text = get_field("contact_page_text"); ?>
	<p class="contact-us__text"><?php
	echo $contact_text
?></p>

</div>
</section>

<?php get_template_part('template-parts/content', 'contactUs'); ?>

<section class="map-section">
<div class="map-container">

        <div class="map" id="map">

        <?php echo do_shortcode('[google_map_easy id="1"]')?>

        </div>

            <div class="map-board">

                <div class="map-board-container">

                    <div class="map-board-block">
                            <h2 class="map-board-block__title">working hours</h2>

                            <div class="worker-container">

                                <div class="worker-block">

                                    <div class="worker-block__day">Thursday: </div>

                                    <div class="worker-block__time">4 PM - 9 PM</div>

                                </div>

                                <div class="worker-block">

                                    <div class="worker-block__day">Friday: </div>

                                    <div class="worker-block__time">4 PM - 9 PM</div>

                                </div>

                                <div class="worker-block">

                                    <div class="worker-block__day">Saturday: </div>

                                    <div class="worker-block__time">4 PM - 9 PM</div>

                                </div>

                            </div>

                    </div>

                </div>

            </div>

      </div>

</section>

<section class="contact">

<div class="contact__bg" style="background-image: url( <?php echo get_field ('contact_form_banner'); ?>)">

                <div class="form-outer-block page-container">

                    <div class="form-inner-block">

                        <div class="contact-form">

                            <h2 class="h2__title contact-form--h2__title">get in touch</h2>

                            <form>

                                <input type="text" placeholder="Enter your Name" class="form-input">
                                <input type="email" placeholder="Enter your E-mail" class="form-input">
                                <input type="text" placeholder="Enter your Subject" class="form-input">
                                <textarea placeholder="Message" class=" form-textarea"></textarea>
                                <button type="button" class="button form--button">send <span class="button__arrow form--arrow"><i class="fas fa-chevron-right"></i></span></button>

                            </form>

                        </div>

                    </div>

                </div>

            </div>
</section>

</main>

<?php get_footer(); ?>