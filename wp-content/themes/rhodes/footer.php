<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rhodes
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

        <div class="container">
            <div class="footerrhodes">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/footer_rhodes.png" />
                <p class="location"><span>54-58 Mt Cotton Road, Capalaba Qld 4157 Australia</span><span>Tel: 1800 443 446</span></p>
            </div>
            <div class="footerheran">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/footer_heran.png" />
                <p class="location"><span>Level 3, Suite 301 'Pivotal Point'</span><span>50 Marine Parade, Southport Qld, 4215 Australia</span><span>Tel: (07) 5528 0111</span></p>
            </div>
            <p class="tagline"><span>Building in Queensland since 1952</span></p>
            <div class="footermenu">
                 <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
            </div>
            <div class="copyright">
                <p>Every effort has been made to accurately describe the details of this development, however this website is presented as a guide only. All marketing material, including models, illustrations and plans are illustrative only.</p>
                <p>Visitors are advised to undertake their own investigations to satisfy themselves as to all aspects of the development. All details were correct at the time the website went live and are subject to change without notice.</p>
                <p>This website is representative as a guide only and does not constitute an offer or inducement. Visitors should refer to survey plans (proposed or final) in contract for clarification of your actual unit size.</p>
                <p>Copyright &copy;2015 <a href="http://www.heran.com.au" title="Heran Building Group Pty Ltd">Heran Building Group Pty Ltd</a></p>
            </div>
        </div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>



</body>
</html>
