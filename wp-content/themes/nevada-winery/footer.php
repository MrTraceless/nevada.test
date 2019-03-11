	<footer class="footer" role="contentinfo">

		<!-- <div class="page-footer__inner">
			<p class="copyright">&copy; <?php echo date("Y"); ?> All rights reserved.</p>
		</div> -->
		<div class="footer-container">
			<a href="<?php home_url(); ?>">
           		<img alt="" src="<?php echo get_field('footer-logo'); ?>">
        	</a>
			<p class="footer-container__text">Copyright vadasunsetInteractive <?php echo date("Y"); ?></p>
		</div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
