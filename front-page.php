<?php
get_header();
?>
<main id="main-content" class="landing-home">
    <section class="hero-banner">
        <div class="container">
            <div class="hero-grid">
                <div class="paper-card">
                    <h1>¡Checklist para Circular en Auto o Moto!</h1>
                    <p class="hero-subtitle">Todo lo que necesitás para salir a la ruta seguro.</p>
                    <h2>Revisá tu Documentación Obligatoria:</h2>
                    <ul class="docs-list">
                        <li>VTV / RTO Vigente</li>
                        <li>Seguro del Auto / Moto</li>
                        <li>Cédula Verde / Azul</li>
                        <li>Licencia de Conducir</li>
                        <li>Matafuegos</li>
                        <li>Balizas Triángulo</li>
                    </ul>
                    <a class="btn btn-blue btn-large" href="<?php echo esc_url(home_url('/checklist-auto/')); ?>">¡Recordame los Vencimientos!</a>
                </div>

                <div class="hero-visuals">
                    <div class="road-visual">
                        <div class="vehicle car"></div>
                        <div class="vehicle moto"></div>
                    </div>
                    <div class="mi-app-card">
                        <div class="phone-mockup">
                            <span>Mi Argentina</span>
                            <small>Cédula · Licencia · Seguro</small>
                        </div>
                        <div>
                            <h3>Llevá Todo Digital en Mi Argentina</h3>
                            <p>Accedé a tus documentos desde el celular.</p>
                            <a class="btn btn-orange" href="<?php echo esc_url(home_url('/mi-argentina/')); ?>">Ingresá a Mi Argentina</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="service-cards">
        <div class="container cards-3">
            <article class="promo-card promo-blue">
                <h3>¡Cotizá tu Seguro Ahora!</h3>
                <p>Mejores Precios y Beneficios</p>
                <a class="btn btn-green" href="<?php echo esc_url(home_url('/checklist-auto/')); ?>">Cotizá Online</a>
            </article>
            <article class="promo-card promo-sky">
                <h3>Auxilio y Asistencia 24hs</h3>
                <p>Servicio en el Momento</p>
                <a class="btn btn-orange" href="<?php echo esc_url(home_url('/vtv/')); ?>">Solicitá Auxilio</a>
            </article>
            <article class="promo-card promo-light">
                <h3>Gestores y Trámites Vehiculares</h3>
                <p>¡Todo en un solo lugar!</p>
                <a class="btn btn-red" href="<?php echo esc_url(home_url('/checklist-moto/')); ?>">Ver Servicios</a>
            </article>
        </div>
    </section>

    <section class="turno-banner">
        <div class="container">
            <div class="turno-card">
                <h2>¡No te Quedes en el Camino!</h2>
                <p>Turnos de VTV, <strong>Talleres Mecánicos</strong> y más...</p>
                <a class="btn btn-yellow btn-large" href="<?php echo esc_url(home_url('/vtv/')); ?>">Sacá tu Turno Ahora</a>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
