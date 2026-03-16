<?php
/*
Template Name: Checklist Moto
*/
get_header();

$faqs = [
    ['q' => '¿Qué licencia necesito para manejar moto?', 'a' => 'Necesitás licencia habilitante para la cilindrada de tu moto y emitida por tu jurisdicción.'],
    ['q' => '¿El casco es obligatorio para conductor y acompañante?', 'a' => 'Sí, ambos deben usar casco homologado y correctamente colocado.'],
];
?>
<main id="main-content" class="container">
    <section>
        <h1>Checklist para circular en moto en Argentina</h1>
        <p>Checklist práctico para motos con foco en seguridad vial y documentación exigida en controles urbanos y rutas nacionales.</p>
        <ul class="checklist">
            <li>Licencia vigente para la categoría de moto.</li>
            <li>Cédula del motovehículo y patente visible.</li>
            <li>Seguro contra terceros al día.</li>
            <li>VTV/RTO según normativa provincial o local.</li>
            <li>Casco homologado para conductor y acompañante.</li>
        </ul>
        <p>Complementá esta guía con <a href="<?php echo esc_url(home_url('/mi-argentina/')); ?>">Mi Argentina digital</a> y el <a href="<?php echo esc_url(home_url('/checklist-auto/')); ?>">checklist para auto</a> si también manejás coche.</p>
    </section>

    <section>
        <h2>Consejos para evitar multas en moto</h2>
        <div class="grid cards">
            <article class="card">
                <h3>Documentación accesible</h3>
                <p>Guardá la documentación en formato digital para mostrarla rápido y sin pérdidas.</p>
            </article>
            <article class="card">
                <h3>Casco en regla</h3>
                <p>Usá casco homologado, en buen estado y con sujeción correcta.</p>
            </article>
        </div>
    </section>

    <section>
        <h2>Preguntas frecuentes sobre moto</h2>
        <?php foreach ($faqs as $faq) : ?>
            <article class="faq-item">
                <h3><?php echo esc_html($faq['q']); ?></h3>
                <p><?php echo esc_html($faq['a']); ?></p>
            </article>
        <?php endforeach; ?>
    </section>
</main>
<?php papelesalaruta_render_faq_schema($faqs); ?>
<?php
get_footer();
