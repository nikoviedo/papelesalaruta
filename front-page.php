<?php
get_header();

$home_faqs = [
    [
        'q' => '¿Qué papeles me pueden pedir en un control de tránsito en Argentina?',
        'a' => 'En general: licencia vigente, cédula del vehículo, comprobante de seguro al día, DNI y constancia de VTV/RTO si tu jurisdicción la exige.',
    ],
    [
        'q' => '¿Sirven los documentos digitales desde Mi Argentina?',
        'a' => 'Sí, la app Mi Argentina permite exhibir licencia, cédula y seguro digital en controles habilitados. Igual conviene chequear requerimientos locales y batería del teléfono.',
    ],
    [
        'q' => '¿Cada cuánto vence la VTV o RTO?',
        'a' => 'Depende de la provincia, antigüedad del vehículo y normativa local. Revisá nuestra guía de VTV/RTO y el calendario de tu jurisdicción.',
    ],
];
?>
<main id="main-content">
    <section class="hero">
        <div class="container">
            <h1>Checklist obligatorio para circular en auto o moto en Argentina</h1>
            <p>Guía rápida, clara y actualizable para tener tus papeles al día: licencia, cédula, seguro, VTV/RTO, matafuegos, balizas y documentación digital en Mi Argentina.</p>
            <ul class="checklist">
                <li>Validá qué documentación es obligatoria hoy.</li>
                <li>Evitá multas por vencimientos.</li>
                <li>Consultá requisitos por tipo de vehículo y jurisdicción.</li>
            </ul>
            <div class="cta-row">
                <a class="btn btn-primary" href="<?php echo esc_url(home_url('/checklist-auto/')); ?>">Ver checklist auto</a>
                <a class="btn btn-secondary" href="<?php echo esc_url(home_url('/checklist-moto/')); ?>">Ver checklist moto</a>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <h2>Accesos rápidos por tipo de vehículo</h2>
            <div class="grid cards">
                <article class="card">
                    <h3>Checklist Auto</h3>
                    <p>Todo lo necesario para circular en auto particular: papeles, elementos de seguridad y recomendaciones para ruta.</p>
                    <a href="<?php echo esc_url(home_url('/checklist-auto/')); ?>">Ir a checklist auto</a>
                </article>
                <article class="card">
                    <h3>Checklist Moto</h3>
                    <p>Documentación y seguridad para motos: licencia correspondiente, seguro, casco homologado y controles frecuentes.</p>
                    <a href="<?php echo esc_url(home_url('/checklist-moto/')); ?>">Ir a checklist moto</a>
                </article>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <h2>Documentación digital en Mi Argentina</h2>
            <p>Si manejás con la app Mi Argentina, podés mostrar documentación digital desde el celular para agilizar controles. Te explicamos cómo tener todo accesible.</p>
            <a class="btn btn-secondary" href="<?php echo esc_url(home_url('/mi-argentina/')); ?>">Ver guía Mi Argentina</a>
        </div>
    </section>

    <section>
        <div class="container">
            <h2>VTV / RTO: cuándo te toca y cómo sacar turno</h2>
            <p>La revisión técnica puede variar por provincia o municipio. Consultá requisitos, vigencias y recomendaciones para aprobar en el primer intento.</p>
            <a class="btn btn-secondary" href="<?php echo esc_url(home_url('/vtv/')); ?>">Consultar VTV / RTO</a>
        </div>
    </section>

    <section>
        <div class="container">
            <h2>Recordatorio de vencimientos</h2>
            <p class="notice">Tip utilitario: agendá recordatorios 30 días antes del vencimiento de licencia, seguro y VTV/RTO para evitar multas y demoras.</p>
            <div class="grid cards">
                <article class="card">
                    <h3>Licencia de conducir</h3>
                    <p>Verificá la fecha de vencimiento según tu categoría y jurisdicción.</p>
                </article>
                <article class="card">
                    <h3>Seguro automotor</h3>
                    <p>Comprobá que la póliza y el medio de pago estén al día.</p>
                </article>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <h2>Preguntas frecuentes</h2>
            <?php foreach ($home_faqs as $faq) : ?>
                <article class="faq-item">
                    <h3><?php echo esc_html($faq['q']); ?></h3>
                    <p><?php echo esc_html($faq['a']); ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section>
        <div class="container">
            <h2>Gestiones rápidas</h2>
            <div class="grid cards">
                <?php
                papelesalaruta_cta(
                    'Cotizá tu seguro automotor',
                    'Compará opciones de cobertura y mantené tu constancia vigente para circular tranquilo.',
                    'Cotizar seguro',
                    home_url('/checklist-auto/'),
                    'Ver checklist completo',
                    home_url('/checklist-auto/')
                );

                papelesalaruta_cta(
                    'Sacá turno para VTV / RTO',
                    'Revisá tu vencimiento y prepará el vehículo antes de presentarte en planta.',
                    'Sacar turno VTV',
                    home_url('/vtv/'),
                    'Ver requisitos',
                    home_url('/vtv/')
                );
                ?>
            </div>
        </div>
    </section>
</main>
<?php papelesalaruta_render_faq_schema($home_faqs); ?>
<?php
get_footer();
