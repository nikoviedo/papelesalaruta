<?php
/*
Template Name: VTV / RTO
*/
get_header();

$faqs = [
    ['q' => '¿VTV y RTO son lo mismo?', 'a' => 'Cumplen función similar (revisión técnica obligatoria), pero el nombre y los detalles dependen de la jurisdicción.'],
    ['q' => '¿Puedo circular con la VTV vencida?', 'a' => 'No es recomendable ni legal en la mayoría de jurisdicciones. Podés recibir multas y retenciones.'],
];
?>
<main id="main-content" class="container">
    <section>
        <h1>VTV / RTO en Argentina: requisitos, turnos y vencimientos</h1>
        <p>Guía base para entender la revisión técnica vehicular en Argentina y preparar tu auto o moto antes de asistir al control.</p>
        <ul class="checklist">
            <li>Verificá tu jurisdicción (provincia/ciudad) y régimen aplicable.</li>
            <li>Controlá fecha de vencimiento de oblea o certificado.</li>
            <li>Solicitá turno oficial y reuní documentación requerida.</li>
            <li>Revisá luces, frenos, neumáticos y emisiones previamente.</li>
        </ul>
    </section>

    <section>
        <h2>Escalado por provincia y ciudad</h2>
        <p>Este portal está preparado para crear páginas específicas por jurisdicción, por ejemplo: “VTV en CABA”, “RTO en Córdoba” o “VTV en La Plata”, con requisitos y enlaces oficiales locales.</p>
        <div class="grid cards">
            <article class="card">
                <h3>Ejemplo landing provincial</h3>
                <p>Requisitos, costos, plantas habilitadas y FAQs de cada provincia.</p>
            </article>
            <article class="card">
                <h3>Ejemplo landing municipal</h3>
                <p>Turnos por ciudad, documentación exigida y tiempos de espera estimados.</p>
            </article>
        </div>
    </section>

    <section>
        <h2>Interlinking recomendado</h2>
        <p>Antes de tu turno, revisá también el <a href="<?php echo esc_url(home_url('/checklist-auto/')); ?>">checklist de auto</a>, el <a href="<?php echo esc_url(home_url('/checklist-moto/')); ?>">checklist de moto</a> y la sección de <a href="<?php echo esc_url(home_url('/mi-argentina/')); ?>">documentación digital Mi Argentina</a>.</p>
    </section>

    <section>
        <h2>Preguntas frecuentes sobre VTV/RTO</h2>
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