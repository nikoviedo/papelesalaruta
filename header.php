<?php
if (!defined('ABSPATH')) {
    exit;
}
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
    <div class="container site-branding">
        <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></p>
        <nav class="main-nav" aria-label="Navegación principal">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'container' => false,
                'fallback_cb' => static function () {
                    ?>
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>">Inicio</a></li>
                        <li><a href="<?php echo esc_url(home_url('/checklist-auto/')); ?>">Checklist Auto</a></li>
                        <li><a href="<?php echo esc_url(home_url('/checklist-moto/')); ?>">Checklist Moto</a></li>
                        <li><a href="<?php echo esc_url(home_url('/vtv/')); ?>">VTV / RTO</a></li>
                        <li><a href="<?php echo esc_url(home_url('/mi-argentina/')); ?>">Mi Argentina</a></li>
                    </ul>
                    <?php
                },
            ]);
            ?>
        </nav>
    </div>
</header>
<?php papelesalaruta_render_breadcrumbs(); ?>
