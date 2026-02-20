<?php
$gallery     = content_url('uploads/bealys/gallery/');
$maps_query  = urlencode(BEALYS_ADDRESS . ', ' . BEALYS_CITY);
$phone_clean = preg_replace('/[^0-9+]/', '', BEALYS_PHONE);
?>

<section id="contact" class="contact-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Nous trouver</h2>
            <div class="section-underline"></div>
            <p class="section-description">
                Venez nous rendre visite, nous serons ravis de vous accueillir ! Stationnement gratuit disponible - Facile d'accès, une place se libère toujours.
            </p>
        </div>

        <div class="contact-content">
            <div class="contact-info">
                <div class="info-card">
                    <div class="info-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                    </div>
                    <h3>Adresse</h3>
                    <p>
                        <?php echo esc_html(BEALYS_ADDRESS); ?><br>
                        <?php echo esc_html(BEALYS_CITY . ', ' . BEALYS_PROVINCE); ?><br>
                        <?php echo esc_html(BEALYS_POSTAL); ?>
                    </p>
                    <a href="https://maps.google.com/?q=<?php echo esc_attr($maps_query); ?>"
                       target="_blank"
                       class="btn btn-link">
                        Obtenir l'itinéraire
                    </a>
                </div>

                <div class="info-card">
                    <div class="info-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                    </div>
                    <h3>Téléphone & Email</h3>
                    <p>
                        <a href="tel:<?php echo esc_attr($phone_clean); ?>">
                            <?php echo esc_html(BEALYS_PHONE); ?>
                        </a>
                    </p>
                    <p style="margin-top: 12px;">
                        <a href="mailto:<?php echo esc_attr(BEALYS_EMAIL); ?>">
                            <?php echo esc_html(BEALYS_EMAIL); ?>
                        </a>
                    </p>
                </div>

                <div class="info-card">
                    <div class="info-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                        </svg>
                    </div>
                    <h3>Heures d'ouverture</h3>
                    <div class="hours-list">
                        <div class="hours-row">
                            <span class="day">Lundi - Samedi</span>
                            <span class="time">10h - 20h</span>
                        </div>
                        <div class="hours-row">
                            <span class="day">Dimanche</span>
                            <span class="time">11h - 17h</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="contact-gallery">
            <div class="gallery-row gallery-row-right">
                <div class="gallery-track">
                    <?php for ($i = 1; $i <= 5; $i++): ?>
                    <img src="<?php echo esc_url($gallery . 'gallery-' . $i . '.jpg'); ?>" alt="Marché Bealys" loading="lazy">
                    <?php endfor; ?>
                    <?php for ($i = 1; $i <= 5; $i++): ?>
                    <img src="<?php echo esc_url($gallery . 'gallery-' . $i . '.jpg'); ?>" alt="Marché Bealys" loading="lazy">
                    <?php endfor; ?>
                </div>
            </div>
            <div class="gallery-row gallery-row-left">
                <div class="gallery-track">
                    <?php for ($i = 6; $i <= 10; $i++): ?>
                    <img src="<?php echo esc_url($gallery . 'gallery-' . $i . '.jpg'); ?>" alt="Marché Bealys" loading="lazy">
                    <?php endfor; ?>
                    <?php for ($i = 6; $i <= 10; $i++): ?>
                    <img src="<?php echo esc_url($gallery . 'gallery-' . $i . '.jpg'); ?>" alt="Marché Bealys" loading="lazy">
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>
</section>
