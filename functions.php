<?php

if (!defined('ABSPATH')) {
    exit;
}

function papelesalaruta_setup(): void
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);

    register_nav_menus([
        'primary' => __('Menú principal', 'papelesalaruta'),
    ]);
}
add_action('after_setup_theme', 'papelesalaruta_setup');

function papelesalaruta_enqueue_assets(): void
{
    wp_enqueue_style(
        'papelesalaruta-style',
        get_stylesheet_uri(),
        [],
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'papelesalaruta_enqueue_assets');

function papelesalaruta_render_breadcrumbs(): void
{
    echo '<nav class="breadcrumbs" aria-label="Breadcrumbs"><div class="container">';
    echo '<a href="' . esc_url(home_url('/')) . '">Inicio</a>';

    if (!is_front_page()) {
        echo ' <span aria-hidden="true">›</span> ';
        echo '<span>' . esc_html(wp_get_document_title()) . '</span>';
    }

    echo '</div></nav>';
}

function papelesalaruta_cta(string $title, string $text, string $primary_label, string $primary_url, ?string $secondary_label = null, ?string $secondary_url = null): void
{
    ?>
    <aside class="card" aria-labelledby="cta-title-<?php echo esc_attr(sanitize_title($title)); ?>">
        <h3 id="cta-title-<?php echo esc_attr(sanitize_title($title)); ?>"><?php echo esc_html($title); ?></h3>
        <p><?php echo esc_html($text); ?></p>
        <div class="cta-row">
            <a class="btn btn-primary" href="<?php echo esc_url($primary_url); ?>"><?php echo esc_html($primary_label); ?></a>
            <?php if ($secondary_label && $secondary_url) : ?>
                <a class="btn btn-secondary" href="<?php echo esc_url($secondary_url); ?>"><?php echo esc_html($secondary_label); ?></a>
            <?php endif; ?>
        </div>
    </aside>
    <?php
}

function papelesalaruta_render_faq_schema(array $faqs): void
{
    if (empty($faqs)) {
        return;
    }

    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => array_map(static function ($faq) {
            return [
                '@type' => 'Question',
                'name' => wp_strip_all_tags($faq['q']),
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => wp_kses_post($faq['a']),
                ],
            ];
        }, $faqs),
    ];

    echo '<script type="application/ld+json">' . wp_json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>';
}