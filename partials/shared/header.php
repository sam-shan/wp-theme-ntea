	<div class="primary-header">
		<div class="row">
			<div class="small-12 medium-4 large-4 columns">
				<div class="branding">
					<?php if ( get_theme_mod( 'custom_logo' ) ) : ?>
		                    <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'custom_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
		            <?php else : ?>
		                    <a href="/"><img src="<?php echo getRelativeThemeUrl(); ?>/images/branding/neelagiri-tea-logo.jpg" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
		            <?php endif; ?>
				</div>
			</div>
			<div class="small-12 medium-8 large-8 columns">
				<!-- Priamry-navigation -->
				<?php

	                $defaults = array(
	                    'theme_location'  => 'header-menu',
	                    'container'       => 'nav',
	                    'container_class' => 'primary-navigation',
	                    'container_id'    => '',
	                    'menu_class'      => 'menu float-right',
	                    'menu_id'         => 'menu',
	                    'echo'            => true,
	                    'fallback_cb'     => 'wp_page_menu',
	                    'before'          => '',
	                    'after'           => '',
	                    'link_before'     => '',
	                    'link_after'      => '',
	                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	                    'depth'           => 0,
	                    'walker' 		  => new My_Walker_Nav_Menu()
	                );

	                wp_nav_menu($defaults);
	            ?>
				<!-- /#. Priamry-navigation -->
				<div id="mobile-menu" class="mmenu"></div>
			</div>			
		</div>
	</div>