<?php
/*
Template Name: Checklist Auto
*/
get_header();

$faqs = [
    ['q' => '¿Qué documentación obligatoria debo llevar en el auto?', 'a' => 'Licencia de conducir vigente, cédula verde o azul según corresponda, comprobante de seguro y VTV/RTO vigente donde aplique.'],
    ['q' => '¿Es obligatorio llevar matafuegos y balizas?', 'a' => 'Sí, se exige matafuegos con control vigente y balizas triangulares para emergencias en ruta.'],
];
?>
<main id="main-content" class="container">
    <section>
        <h1>Checklist para circular en auto en Argentina</h1>
        <p>Esta guía te ayuda a validar los papeles obligatorios para auto y elementos de seguridad que suelen controlar en rutas y ciudades argentinas.</p>
        <ul class="checklist">
            <li>Licencia de conducir vigente y acorde a la categoría.</li>
            <li>Cédula del vehículo (verde y/o azul digital o física).</li>
            <li>Seguro automotor con póliza vigente.</li>
            <li>Comprobante de VTV/RTO cuando corresponda por jurisdicción.</li>
            <li>Matafuegos vigente y balizas triangulares.</li>
        </ul>
        <p>También te puede interesar: <a href="<?php echo esc_url(home_url('/mi-argentina/')); ?>">documentación digital en Mi Argentina</a> y <a href="<?php echo esc_url(home_url('/vtv/')); ?>">guía de VTV/RTO por provincia</a>.</p>
    </section>

    <section>
        <h2>Antes de salir a la ruta</h2>
        <div class="grid cards cards-3">
            <article class="card">
                <h3>Revisá vencimientos</h3>
                <p>Chequeá fechas de licencia, póliza y VTV para evitar infracciones.</p>
            </article>
            <article class="card">
                <h3>Control visual</h3>
                <p>Confirmá luces, neumáticos y parabrisas en condiciones.</p>
            </article>
            <article class="card">
                <h3>Guardá backups</h3>
                <p>Tené una copia digital ordenada de tus documentos en el celular.</p>
            </article>
        </div>
    </section>

    <section>
        <h2>Preguntas frecuentes sobre auto</h2>
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