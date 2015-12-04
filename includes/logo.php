<div class="header__logo">
	    <?php 
	    if( function_exists( 'get_field' ) ) :
	    	$cjhsmp_header_logo = ( get_field( 'cjhsmp_header_logo', 'option' ) ? get_field( 'cjhsmp_header_logo', 'option' ) : '' );
		endif;
	    if( !empty( $cjhsmp_header_logo ) ) :
	        $url = $cjhsmp_header_logo['url']; ?>
		    <h1 class="site__logo" style="background-image: url(<?php echo $url; ?>)">
			    <a href="<?php echo home_url(); ?>"></a>
		    	<span class="ir">
		    		<?php echo bloginfo('name'); ?>
		    	</span>
		    </h1>
	    	<?php else : ?>
	    	<h1  class="site__logo-text">
	    		<a href="<?php echo home_url(); ?>">
	    			<?php echo bloginfo('name'); ?>
	    		</a>
	    	</h1>
	    <?php endif; ?>
	</a>
</div>