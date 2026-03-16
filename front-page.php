<?php
get_header();
$theme_uri = get_template_directory_uri();
?>
<main id="main-content" class="landing-home">

    <!-- ═══════════════════════════════════════════
         HERO BANNER
    ═══════════════════════════════════════════ -->
    <section class="hero-banner">
        <div class="container">

            <!-- Title row (above the grid) -->
            <div class="hero-title-row">
                <h1>¡Checklist para <em>Circular</em> en <em>Auto</em> o <em>Moto</em>!</h1>
                <p class="hero-sub">Todo lo que necesitás para salir a la ruta seguro.</p>
            </div>

            <div class="hero-grid">

                <!-- LEFT: Checklist card -->
                <div class="paper-card">
                    <p class="paper-card-title">Revisá tu Documentación Obligatoria:</p>
                    <p class="paper-card-sub">Asegurate de tener todo al día.</p>

                    <ul class="docs-list">
                        <li><span class="check-icon">✔</span> VTV / RTO Vigente</li>
                        <li><span class="check-icon">✔</span> Seguro del Auto / Moto</li>
                        <li><span class="check-icon">✔</span> Cédula Verde / Azul</li>
                        <li><span class="check-icon">✔</span> Licencia de Conducir</li>
                        <li><span class="check-icon">✔</span> Matafuegos</li>
                        <li><span class="check-icon">✔</span> Balizas Triángulo</li>
                    </ul>

                    <a class="btn btn-blue btn-large"
                       href="<?php echo esc_url(home_url('/checklist-auto/')); ?>">
                        ¡Recordame los Vencimientos!
                    </a>

                    <!-- Document thumbnails -->
                    <div class="doc-thumbs">
                        <div class="doc-thumb">
                            <span class="doc-thumb-icon">🪪</span>
                            <span class="doc-thumb-label">Cédula<br>Verde</span>
                        </div>
                        <div class="doc-thumb">
                            <span class="doc-thumb-icon">🪪</span>
                            <span class="doc-thumb-label">Licencia<br>Digital</span>
                        </div>
                        <div class="doc-thumb">
                            <span class="doc-thumb-icon">🛡️</span>
                            <span class="doc-thumb-label">Seguro<br>Online</span>
                        </div>
                    </div>
                </div>

                <!-- RIGHT: vehicles + Mi Argentina -->
                <div class="hero-visuals">

                    <!-- Car + Moto photo / CSS scene -->
                    <div class="road-visual" role="img" aria-label="Auto y moto en la ruta">
                        <?php
                        $hero_img = $theme_uri . '/images/hero-vehicles.jpg';
                        ?>
                        <img src="<?php echo esc_url($hero_img); ?>"
                             alt="Auto y moto en la ruta argentina"
                             loading="eager"
                             onerror="this.style.display='none'">
                        <!-- CSS fallback scene -->
                        <div class="road-scene" aria-hidden="true">
                            <div class="vehicle-car"></div>
                            <div class="vehicle-moto"></div>
                        </div>
                    </div>

                    <!-- Mi Argentina card -->
                    <div class="mi-app-card">
                        <div class="phone-mockup" role="img" aria-label="App Mi Argentina">
                            <?php $phone_img = $theme_uri . '/images/mi-argentina-app.jpg'; ?>
                            <img src="<?php echo esc_url($phone_img); ?>"
                                 alt="Pantalla de la app Mi Argentina"
                                 onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'">
                            <!-- CSS phone UI fallback -->
                            <div class="phone-ui" style="display:none">
                                <div class="phone-status-bar">
                                    <div class="app-icon"></div>
                                    <span>Mi Argentina</span>
                                </div>
                                <div class="phone-items">
                                    <div class="phone-item">
                                        <div class="phone-item-icon cedula"></div>
                                        <div class="phone-item-text">Cédula Digital<br><small style="opacity:.7">Ver documento</small></div>
                                        <span class="phone-item-arrow">›</span>
                                    </div>
                                    <div class="phone-item">
                                        <div class="phone-item-icon licencia"></div>
                                        <div class="phone-item-text">Licencia Virtual<br><small style="opacity:.7">Ver documento</small></div>
                                        <span class="phone-item-arrow">›</span>
                                    </div>
                                    <div class="phone-item">
                                        <div class="phone-item-icon seguro"></div>
                                        <div class="phone-item-text">Seguro Online<br><small style="opacity:.7">Ver documento</small></div>
                                        <span class="phone-item-arrow">›</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mi-app-info">
                            <h3>Llevá Todo Digital en Mi Argentina</h3>
                            <p>Accedé a tus documentos desde el celular.</p>
                            <a class="btn btn-orange"
                               href="<?php echo esc_url(home_url('/mi-argentina/')); ?>">
                                Ingresá a Mi Argentina ›
                            </a>
                        </div>
                    </div>

                </div><!-- .hero-visuals -->

            </div><!-- .hero-grid -->
        </div>
    </section>

    <!-- ═══════════════════════════════════════════
         SERVICE CARDS
    ═══════════════════════════════════════════ -->
    <section class="service-cards">
        <div class="container cards-3">

            <article class="promo-card promo-blue">
                <div class="promo-card-bg"
                     style="background-image: url('<?php echo esc_url($theme_uri . '/images/seguro-auto.jpg'); ?>');">
                </div>
                <div class="promo-card-content">
                    <div>
                        <h3>¡Cotizá tu Seguro Ahora!</h3>
                        <p>Mejores Precios y Beneficios</p>
                    </div>
                    <a class="btn btn-green"
                       href="<?php echo esc_url(home_url('/checklist-auto/')); ?>">
                        Cotizá Online ›
                    </a>
                </div>
            </article>

            <article class="promo-card promo-sky">
                <div class="promo-card-bg"
                     style="background-image: url('<?php echo esc_url($theme_uri . '/images/auxilio-grua.jpg'); ?>');">
                </div>
                <div class="promo-card-content">
                    <div>
                        <h3>Auxilio y Asistencia 24hs</h3>
                        <p>Servicio en el Momento</p>
                    </div>
                    <a class="btn btn-orange"
                       href="<?php echo esc_url(home_url('/vtv/')); ?>">
                        Solicitá Auxilio ›
                    </a>
                </div>
            </article>

            <article class="promo-card promo-light">
                <div class="promo-card-bg"
                     style="background-image: url('<?php echo esc_url($theme_uri . '/images/gestores-tramites.jpg'); ?>');">
                </div>
                <div class="promo-card-content">
                    <div>
                        <h3>Gestores y Trámites Vehiculares</h3>
                        <p>¡Todo en un solo lugar!</p>
                    </div>
                    <a class="btn btn-red"
                       href="<?php echo esc_url(home_url('/checklist-moto/')); ?>">
                        Ver Servicios ›
                    </a>
                </div>
            </article>

        </div>
    </section>

    <!-- ═══════════════════════════════════════════
         TURNO BANNER
    ═══════════════════════════════════════════ -->
    <section class="turno-banner">
        <div class="container">
            <div class="turno-card">
                <h2>¡No te Quedes en el Camino!</h2>
                <p>Turnos de VTV, <strong>Talleres Mecánicos</strong> y más...</p>
                <a class="btn btn-yellow btn-large"
                   href="<?php echo esc_url(home_url('/vtv/')); ?>">
                    Sacá tu Turno Ahora ›
                </a>
            </div>
        </div>
    </section>

</main>
<?php
get_footer();