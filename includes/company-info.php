<?php
$cjhsmp_street_address   = ( get_field( 'cjhsmp_street_address', 'option' ) ? get_field( 'cjhsmp_street_address', 'option' ) : '' );
$cjhsmp_city             = ( get_field( 'cjhsmp_city', 'option' ) ? get_field( 'cjhsmp_city', 'option' ) : '' );
$cjhsmp_state            = ( get_field( 'cjhsmp_state', 'option' ) ? get_field( 'cjhsmp_state', 'option' ) : '' );
$cjhsmp_zip_code         = ( get_field( 'cjhsmp_zip_code', 'option' ) ? get_field( 'cjhsmp_zip_code', 'option' ) : '' );
$cjhsmp_telephone_number = ( get_field( 'cjhsmp_telephone_number', 'option' ) ? get_field( 'cjhsmp_telephone_number', 'option' ) : '' );
$cjhsmp_name             = __( 'The Columbus Jewish Historical Society', FCWP_TAXDOMAIN );
$cjhsmp_email            = get_bloginfo( 'admin_email' );
?>
<ul class="footer__info" itemscope itemtype="http://schema.org/PostalAddress">
    <li itemprop="name">
        <?php echo date('Y')  . ' &copy; ' . $cjhsmp_name; ?>
    </li>
    <address class="footer__address">
        <li itemprop="streetAddress">
            <?php echo $cjhsmp_street_address; ?>
        </li>
        <li>
            <?php echo '<span itemprop="addressLocality">' . $cjhsmp_city . '</span>, <span itemprop="addressRegion">' . $cjhsmp_state . '</span> <span itemprop="postalCode">' . $cjhsmp_zip_code . '</span>'; ?>
        </li>
    </address>
    <li>
        <?php echo '<a href="tel:' . $cjhsmp_telephone_number . '" aria-lable="Phone Number" itemprop="telephone">' . $cjhsmp_telephone_number . '</a>'; ?>
    </li>
    <li>
        <?php echo '<a href="mailto:' . $cjhsmp_email . '" aria-lable="Email" itemprop="email">' . $cjhsmp_email . '</a>'; ?>
    </li>
</ul>