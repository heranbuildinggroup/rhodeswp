<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package rhodes
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if( CFS()->get( 'vimeo_link' ) ): ?>
        <?php echo CFS()->get( 'vimeo_link' ); ?>
    <?php endif; ?>

    <div class="homecontent">
        <header class="entry-header">
            
            <div class="page-subtitle">
                <?php if( CFS()->get( 'page_sub_title' ) ): ?><?php echo CFS()->get( 'page_sub_title' ); ?><?php endif; ?>
            </div>
            
            <?php if(is_page(array(4, 15))) : ?>
                <h2 class="entry-title"><?php echo get_split_title($post->ID); ?></h2>
            <?php endif; ?>

        </header><!-- .entry-header -->
        
    <?php if( is_page( 9 ) ) { ?>

<div class="litetooltip-hotspot-wrapper" style="max-width: 1180px">
<div class="litetooltip-hotspot-container" style="padding-bottom: 63.983050847457626%">
<img src="<?php bloginfo('stylesheet_directory'); ?>/img/locations.jpg" data-width="1180" data-height="755" />
<div class="hotspot" style="top: 32.18543046357616%; left: 1.0169491525423728%; width: 2.711864406779661%; height: 3.9735099337748347%; background: transparent; border: 1px solid transparent; border-radius: 0px; opacity: 0.8" id="hotspot_1447051104404" data-location="bottom-left" data-template="template" data-templatename="" data-opacity="0.8" data-backcolor="#000000" data-textcolor="#ffffff" data-textalign="center" data-margin="5" data-padding="10" data-width="0" data-delay="0" data-trigger="hover" data-issticky="true" data-hotspot-x="1.0169491525423728" data-hotspot-y="32.18543046357616" data-hotspot-blink="false" data-hotspot-bgcolor="transparent" data-hotspot-bordercolor="transparent" data-hotspot-borderradius="0">
<div class="data-container">Marine Mirage</div>
</div>

<div class="hotspot" style="top: 32.847682119205295%; left: 4.661016949152542%; width: 2.457627118644068%; height: 3.708609271523179%; background: transparent; border: 1px solid transparent; border-radius: 0px; opacity: 0.8" id="hotspot_1447051110762" data-location="bottom-left" data-template="template" data-templatename="" data-opacity="0.8" data-backcolor="#000000" data-textcolor="#ffffff" data-textalign="center" data-margin="5" data-padding="10" data-width="0" data-delay="0" data-trigger="hover" data-issticky="true" data-hotspot-x="4.661016949152542" data-hotspot-y="32.847682119205295" data-hotspot-blink="false" data-hotspot-bgcolor="transparent" data-hotspot-bordercolor="transparent" data-hotspot-borderradius="0">
<div class="data-container">Southport Yacht Club</div>
</div>

<div class="hotspot" style="top: 32.450331125827816%; left: 7.288135593220339%; width: 2.8813559322033897%; height: 3.8410596026490067%; background: transparent; border: 1px solid transparent; border-radius: 0px; opacity: 0.8" id="hotspot_1447051115745" data-location="bottom-left" data-template="" data-templatename="" data-opacity="0.8" data-backcolor="#000000" data-textcolor="#ffffff" data-textalign="center" data-margin="5" data-padding="10" data-width="0" data-delay="0" data-trigger="hover" data-issticky="true" data-hotspot-x="7.288135593220339" data-hotspot-y="32.450331125827816" data-hotspot-blink="false" data-hotspot-bgcolor="transparent" data-hotspot-bordercolor="transparent" data-hotspot-borderradius="0">
<div class="data-container">Main Beach</div>
</div>

<div class="hotspot" style="top: 29.933774834437088%; left: 14.40677966101695%; width: 2.6271186440677963%; height: 4.370860927152318%; background: transparent; border: 1px solid transparent; border-radius: 0px; opacity: 0.8" id="hotspot_1447051121099" data-location="top-left" data-template="" data-templatename="" data-opacity="0.8" data-backcolor="#000000" data-textcolor="#ffffff" data-textalign="center" data-margin="5" data-padding="10" data-width="0" data-delay="0" data-trigger="hover" data-issticky="true" data-hotspot-x="14.40677966101695" data-hotspot-y="29.933774834437088" data-hotspot-blink="false" data-hotspot-bgcolor="transparent" data-hotspot-bordercolor="transparent" data-hotspot-borderradius="0">
<div class="data-container">Surfers Paradise</div>
</div>

<div class="hotspot" style="top: 33.50993377483444%; left: 16.94915254237288%; width: 2.9661016949152543%; height: 3.708609271523179%; background: transparent; border: 1px solid transparent; border-radius: 0px; opacity: 0.8" id="hotspot_1447050495940" data-location="bottom-right" data-template="" data-templatename="" data-opacity="0.8" data-backcolor="#000000" data-textcolor="#ffffff" data-textalign="center" data-margin="5" data-padding="10" data-width="0" data-delay="0" data-trigger="hover" data-issticky="true" data-hotspot-x="16.94915254237288" data-hotspot-y="33.50993377483444" data-hotspot-blink="false" data-hotspot-bgcolor="transparent" data-hotspot-bordercolor="transparent" data-hotspot-borderradius="0">
<div class="data-container">Broadwater Parklands</div>
</div>

<div class="hotspot" style="top: 31.788079470198678%; left: 21.1864406779661%; width: 2.711864406779661%; height: 4.105960264900662%; background: transparent; border: 1px solid transparent; border-radius: 0px; opacity: 0.8" id="hotspot_1447051128667" data-location="top-left" data-template="" data-templatename="" data-opacity="0.8" data-backcolor="#000000" data-textcolor="#ffffff" data-textalign="center" data-margin="5" data-padding="10" data-width="0" data-delay="0" data-trigger="hover" data-issticky="true" data-hotspot-x="21.1864406779661" data-hotspot-y="31.788079470198678" data-hotspot-blink="false" data-hotspot-bgcolor="transparent" data-hotspot-bordercolor="transparent" data-hotspot-borderradius="0">
<div class="data-container">Southport CBD</div>
</div>

<div class="hotspot" style="top: 48.60927152317881%; left: 16.52542372881356%; width: 2.9661016949152543%; height: 4.768211920529802%; background: transparent; border: 1px solid transparent; border-radius: 0px; opacity: 0.8" id="hotspot_1447050503299" data-location="bottom-right" data-template="" data-templatename="" data-opacity="0.8" data-backcolor="#000000" data-textcolor="#ffffff" data-textalign="center" data-margin="5" data-padding="10" data-width="0" data-delay="0" data-trigger="hover" data-issticky="true" data-hotspot-x="16.52542372881356" data-hotspot-y="48.60927152317881" data-hotspot-blink="false" data-hotspot-bgcolor="transparent" data-hotspot-bordercolor="transparent" data-hotspot-borderradius="0">
<div class="data-container">Boatramp</div>
</div>

<div class="hotspot" style="top: 45.033112582781456%; left: 20.677966101694913%; width: 2.5423728813559325%; height: 4.370860927152318%; background: transparent; border: 1px solid transparent; border-radius: 0px; opacity: 0.8" id="hotspot_1447051134972" data-location="top-left" data-template="" data-templatename="" data-opacity="0.8" data-backcolor="#000000" data-textcolor="#ffffff" data-textalign="center" data-margin="5" data-padding="10" data-width="0" data-delay="0" data-trigger="hover" data-issticky="true" data-hotspot-x="20.677966101694913" data-hotspot-y="45.033112582781456" data-hotspot-blink="false" data-hotspot-bgcolor="transparent" data-hotspot-bordercolor="transparent" data-hotspot-borderradius="0">
<div class="data-container">Local Restaurants and Cafes</div>
</div>

<div class="hotspot" style="top: 48.60927152317881%; left: 33.05084745762712%; width: 2.7966101694915255%; height: 4.370860927152318%; background: transparent; border: 1px solid transparent; border-radius: 0px; opacity: 0.8" id="hotspot_1447050509711" data-location="top" data-template="" data-templatename="" data-opacity="0.8" data-backcolor="#000000" data-textcolor="#ffffff" data-textalign="center" data-margin="5" data-padding="10" data-width="0" data-delay="0" data-trigger="hover" data-issticky="true" data-hotspot-x="33.05084745762712" data-hotspot-y="48.60927152317881" data-hotspot-blink="false" data-hotspot-bgcolor="transparent" data-hotspot-bordercolor="transparent" data-hotspot-borderradius="0">
<div class="data-container">Charis Seafoods</div>
</div>

<div class="hotspot" style="top: 31.65562913907285%; left: 62.37288135593221%; width: 3.050847457627119%; height: 4.635761589403973%; background: transparent; border: 1px solid transparent; border-radius: 0px; opacity: 0.8" id="hotspot_1447050513342" data-location="bottom" data-template="" data-templatename="" data-opacity="0.8" data-backcolor="#000000" data-textcolor="#ffffff" data-textalign="center" data-margin="5" data-padding="10" data-width="0" data-delay="0" data-trigger="hover" data-issticky="true" data-hotspot-x="62.37288135593221" data-hotspot-y="31.65562913907285" data-hotspot-blink="false" data-hotspot-bgcolor="transparent" data-hotspot-bordercolor="transparent" data-hotspot-borderradius="0">
<div class="data-container">Griffith University</div>
</div>

<div class="hotspot" style="top: 31.920529801324506%; left: 73.30508474576271%; width: 3.050847457627119%; height: 4.503311258278146%; background: transparent; border: 1px solid transparent; border-radius: 0px; opacity: 0.8" id="hotspot_1447050516174" data-location="bottom" data-template="" data-templatename="" data-opacity="0.8" data-backcolor="#000000" data-textcolor="#ffffff" data-textalign="center" data-margin="5" data-padding="10" data-width="0" data-delay="0" data-trigger="hover" data-issticky="true" data-hotspot-x="73.30508474576271" data-hotspot-y="31.920529801324506" data-hotspot-blink="false" data-hotspot-bgcolor="transparent" data-hotspot-bordercolor="transparent" data-hotspot-borderradius="0">
<div class="data-container">New Gold rhodes Hospital</div>
</div>

<div class="hotspot" style="top: 29.933774834437088%; left: 90%; width: 5%; height: 7.549668874172186%; background: transparent; border: 1px solid transparent; border-radius: 0px; opacity: 0.8" id="hotspot_1447051146741" data-location="top-right" data-template="" data-templatename="" data-opacity="0.8" data-backcolor="#000000" data-textcolor="#ffffff" data-textalign="center" data-margin="5" data-padding="10" data-width="0" data-delay="0" data-trigger="hover" data-issticky="true" data-hotspot-x="90" data-hotspot-y="29.933774834437088" data-hotspot-blink="false" data-hotspot-bgcolor="transparent" data-hotspot-bordercolor="transparent" data-hotspot-borderradius="0">
<div class="data-container">5 Minutes to: Harbour Town, Helensvale Train Station, M1 Motorway</div>
</div>

</div>
</div>                   
        
    <?php } else { } ?>
        

        <div class="entry-content">
            <?php the_content(); ?>
            <?php
                wp_link_pages( array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'rhodes' ),
                    'after'  => '</div>',
                ) );
            ?>

        </div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'rhodes' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
    </div>

</article><!-- #post-## -->

