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

        <!-- LOGO -->
        <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo-wrap" aria-label="<?php bloginfo('name'); ?> - Inicio">
            <div class="logo-icon">
                <?php
                $logo = get_template_directory_uri() . '/images/logo-icon.png';
                ?>
                <img src="<?php echo esc_url($logo); ?>"
                     alt="Logo Papeles a la Ruta"
                     onerror="this.style.display='none'; this.nextElementSibling.style.display='block'">
                <!-- SVG fallback si no hay imagen -->
                <svg style="display:none" viewBox="0 0 64 64" width="58" height="58" xmlns="http://www.w3.org/2000/svg">
                    <!-- Car body -->
                    <rect x="6" y="30" width="38" height="14" rx="4" fill="#4a7acc"/>
                    <path d="M10 30 L16 20 L34 20 L40 30Z" fill="#6a9ae0"/>
                    <circle cx="13" cy="46" r="5" fill="#1a2a3a"/>
                    <circle cx="13" cy="46" r="2.5" fill="#ccc"/>
                    <circle cx="33" cy="46" r="5" fill="#1a2a3a"/>
                    <circle cx="33" cy="46" r="2.5" fill="#ccc"/>
                    <!-- Moto -->
                    <circle cx="50" cy="46" r="5" fill="#1a2a3a"/>
                    <circle cx="50" cy="46" r="2.5" fill="#ccc"/>
                    <rect x="44" y="34" width="16" height="6" rx="3" fill="#cc2200"/>
                    <path d="M44 34 L48 28 L56 28 L58 34Z" fill="#ee4422"/>
                </svg>
            </div>
            <div class="logo-text">
                <span class="logo-line1">Papeles al</span>
                <span class="logo-line2">Ruta.com.ar</span>
            </div>
        </a>

        <!-- NAV / Action Buttons -->
        <nav class="main-nav" aria-label="Navegación principal">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'container'      => false,
                'fallback_cb'    => static function () {
                    ?>
                    <ul>
                        <li>
                            <a href="<?php echo esc_url(home_url('/checklist-auto/')); ?>">
                                <span class="nav-icon">📞</span> Cotizá tu Seguro
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(home_url('/vtv/')); ?>">
                                <span class="nav-icon">🌐</span> Turno VTV
                            </a>
                        </li>
                        <li>
                            <a href="tel:08001234667">
                                <span class="nav-icon">📞</span> 0800-123-4667
                            </a>
                        </li>
                    </ul>
                    <?php
                },
            ]);
            ?>
        </nav>

    </div>
</header>
<?php papelesalaruta_render_breadcrumbs(); ?>