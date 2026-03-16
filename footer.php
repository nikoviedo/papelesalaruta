<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
<footer class="site-footer">
    <div class="container">
        <p><strong><?php bloginfo('name'); ?></strong> — Guía utilitaria para circular en regla en Argentina.</p>
        <p>
            <a href="<?php echo esc_url(home_url('/checklist-auto/')); ?>">Checklist Auto</a> ·
            <a href="<?php echo esc_url(home_url('/checklist-moto/')); ?>">Checklist Moto</a> ·
            <a href="<?php echo esc_url(home_url('/vtv/')); ?>">VTV / RTO</a> ·
            <a href="<?php echo esc_url(home_url('/mi-argentina/')); ?>">Mi Argentina</a>
        </p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
