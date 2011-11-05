<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
</div>
<div id="footer-separator"></div>
<div id="footer">
	<div class="footer-navigation"><h2>Site navigation</h2><?php wp_nav_menu( array('menu' => 'site-navigation' )); ?></div>
	<div class="footer-navigation"><h2>Useful links</h2><?php wp_nav_menu( array('menu' => 'useful-links' )); ?></div>
	<div id="contact-us">
		<h2>Contact us</h2>
		<ul>
			<li>Phone: <span class="blue">(+44) 0207 183 0323</span></li>
			<li>Email: <span class="blue"><a href="mailto:julian@build-doctor.com">julian@build-doctor.com</a></span></li>
			<li>Twitter: <span class="blue"><a target="_blank" href="http://twitter.com/#/builddoctor">@builddoctor</a></span></li>
		</ul>
		<div class="follow-us">
			<h2>Follow us</h2>
			<ul>
				<li><a target="_blank" href="http://twitter.com/builddoctor"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/social/twitter.png" alt="" /></a></li>
				<li><a target="_blank" href="https://github.com/builddoctor"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/social/google.png" alt="" /></a></li>
				<li><a href="mailto:medic@build-doctor.com"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/social/gmail.png" alt="" /></a></li>
				<li><a target="_blank" href="http://feeds.feedburner.com/TheBuildDoctor"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/social/rss.png" alt="" /></a></li>
			</ul>
		</div>
	</div>
</div>
	<div id="copyright">
		<p>Copyright &copy; 2007-<?php echo date("Y"); ?> The Build Doctor Ltd. All Rights Reserved</p>
	</div>
</div>


		<?php wp_footer(); ?>
</body>
</html>
