<?php get_template_part( 'includes/head' ); ?>
<header class="body__header" role="banner">
	<div class="body__content">
      <?php get_template_part( 'includes/logo' ); ?>
      <div class="header__aside">
        <div class="header__aside--right">
        </div>
        <div class="header__aside--left">
          <?php get_search_form(); ?>
          <?php get_template_part( 'includes/socialicons' ); ?>
        </div>
      </div>
	</div>
</header>
<div class="header__menu">
  <div class="body__content primary__menu" role="navigation">
    <?php get_template_part( 'includes/menu', 'primary' ); ?>
  </div>
</div>