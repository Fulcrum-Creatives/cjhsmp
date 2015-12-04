<?php
if( function_exists( 'get_field' ) ) :
    $cjhsmp_facebook_profile_url = ( get_field( 'cjhsmp_facebook_profile_url', 'option' ) ? get_field( 'cjhsmp_facebook_profile_url', 'option' ) : '' );
    $cjhsmp_linkedin_profile_url = ( get_field( 'cjhsmp_linkedin_profile_url', 'option' ) ? get_field( 'cjhsmp_linkedin_profile_url', 'option' ) : '' );
    $cjhsmp_youtube_channel_url = ( get_field( 'cjhsmp_youtube_channel_url', 'option' ) ? get_field( 'cjhsmp_youtube_channel_url', 'option' ) : '' );
endif;
?>
<div class="header__social-links">
    <div class="social-links__icon social-links__facebook">
        <a href="<?php echo $cjhsmp_facebook_profile_url; ?>">
            <span class="ir"><?php _e( 'Facebook Link', FCWP_TEXTDOMAIN ); ?></span>
        </a>
    </div>
    <div class="social-links__icon social-links__linkedin">
        <a href="<?php echo $cjhsmp_linkedin_profile_url; ?>">
            <span class="ir"><?php _e( 'LinkedIn Link', FCWP_TEXTDOMAIN ); ?></span>
        </a>
    </div>
    <div class="social-links__icon social-links__youtube">
        <a href="<?php echo $cjhsmp_youtube_channel_url; ?>">
            <span class="ir"><?php _e( 'YouTube Link', FCWP_TEXTDOMAIN ); ?></span>
        </a>
    </div>
</div>