<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <div>
    <label class="screen-reader-text ir" for="s"><?php _x( 'Search Maps:', 'label' ); ?></label>
    <input type="text" class="s" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="<?php esc_attr_e( 'Search the Map Project', FCWP_TAXDOMAIN ); ?>" />
    <input type="submit" class="searchsubmit" id="submit searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
  </div>
</form>