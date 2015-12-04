<?php 
if( function_exists( 'get_field' ) ) :
    $cjhsmp_header_sponsor = ( get_field( 'cjhsmp_header_sponsor', 'option' ) ? get_field( 'cjhsmp_header_sponsor', 'option' ) : '' );
    $cjhsmp_header_sponsor_url = ( get_field( 'cjhsmp_header_sponsor_url', 'option' ) ? get_field( 'cjhsmp_header_sponsor_url', 'option' ) : '' );
endif;
if( !empty( $cjhsmp_header_sponsor ) ) :
    $url = $cjhsmp_header_sponsor['url']; ?>
    <h2 class="site__sponsored-logo" style="background-image: url(<?php echo $url; ?>)">
        <a href="<?php echo $cjhsmp_header_sponsor_url; ?>"></a>
        <span class="ir">
            <?php _e( 'Site funded by Yelkin Family Foundation', FCWP_TAXDOMAIN ); ?>
        </span>
    </h1>
<?php endif; ?>