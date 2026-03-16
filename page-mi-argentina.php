<?php
/*
Template Name: Mi Argentina
*/
get_header();

$faqs = [
    ['q' => '¿Qué documentos vehiculares puedo mostrar en Mi Argentina?', 'a' => 'Dependiendo de disponibilidad: licencia de conducir, cédula y comprobante de seguro digital, entre otros documentos personales.'],
    ['q' => '¿Necesito conexión para mostrar mis documentos?', 'a' => 'Es recomendable tener conectividad y batería. Para evitar problemas, verificá acceso antes de viajar.'],
];
?>
<main id="main-content" class="container">
    <section>
        <h1>Mi Argentina: documentación digital para circular</h1>
        <p>Aprendé cómo usar la app Mi Argentina para llevar documentación digital y agilizar controles de tránsito en todo el país.</p>
        <ul class="checklist">
            <li>Instalá y validá tu identidad en la app oficial.</li>
            <li>Revisá que licencia, cédula y seguro aparezcan correctamente.</li>
            <li>Mantené el celular con batería y acceso rápido a los documentos.</li>
            <li>Complementá siempre con datos actualizados de tu jurisdicción.</li>
        </ul>
    </section>

    <section>
        <h2>Cuándo conviene usar documentación digital</h2>
        <div class="grid cards">
            <article class="card">
                <h3>Controles urbanos</h3>
                <p>Mostrá la documentación desde el celular en pocos segundos.</p>
            </article>
            <article class="card">
                <h3>Viajes largos</h3>
                <p>Sumá copia física o respaldo para prevenir imprevistos técnicos.</p>
            </article>
        </div>
    </section>

    <section>
        <h2>Enlaces útiles relacionados</h2>
        <p>Completá tu preparación con <a href="<?php echo esc_url(home_url('/checklist-auto/')); ?>">checklist auto</a>, <a href="<?php echo esc_url(home_url('/checklist-moto/')); ?>">checklist moto</a> y <a href="<?php echo esc_url(home_url('/vtv/')); ?>">guía VTV/RTO</a>.</p>
    </section>

    <section>
        <h2>Preguntas frecuentes sobre Mi Argentina</h2>
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