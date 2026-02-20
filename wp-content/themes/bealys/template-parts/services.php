<?php $img = content_url('uploads/bealys/services/'); ?>

<section id="services" class="services-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Ce qu'on vous propose</h2>
            <div class="section-underline"></div>
            <p class="section-description">
                Bien plus qu'une épicerie, découvrez tous nos services
            </p>
        </div>

        <div class="services-grid">
            <!-- Service 1: Épicerie -->
            <div class="service-card">
                <div class="service-image">
                    <img src="<?php echo esc_url($img . 'epicerie.jpg'); ?>" alt="Épicerie africaine, caribéenne et latino" loading="lazy">
                </div>
                <h3>Épicerie africaine, caribéenne & latino</h3>
                <p>Large sélection de produits frais, épices authentiques, poissons et produits de beauté afro.</p>
                <ul class="service-features">
                    <li>Produits frais quotidiennement</li>
                    <li>Épices et condiments authentiques</li>
                    <li>Poissons et fruits de mer</li>
                    <li>Produits cosmétiques afro</li>
                </ul>
            </div>

            <!-- Service 2: Traiteur -->
            <div class="service-card">
                <div class="service-image">
                    <img src="<?php echo esc_url($img . 'traiteur.jpg'); ?>" alt="Service traiteur" loading="lazy">
                </div>
                <h3>Service traiteur</h3>
                <p>Commandez vos plats africains et caribéens pour vos événements. Cuisine authentique préparée avec amour.</p>
                <ul class="service-features">
                    <li>Plats traditionnels authentiques</li>
                    <li>Événements et réceptions</li>
                    <li>Commandes sur mesure</li>
                    <li>Cuisine fraîche et savoureuse</li>
                </ul>
            </div>

            <!-- Service 3: Transfert d'argent Ria -->
            <div class="service-card">
                <div class="service-image">
                    <img src="<?php echo esc_url($img . 'ria.jpg'); ?>" alt="Transfert d'argent Ria" loading="lazy">
                </div>
                <h3>Transfert d'argent Ria</h3>
                <p>Envoyez de l'argent rapidement et en toute sécurité vers plus de 160 pays à travers le monde.</p>
                <ul class="service-features">
                    <li>Service rapide et fiable</li>
                    <li>Frais compétitifs</li>
                    <li>Plus de 160 pays desservis</li>
                    <li>Transactions sécurisées</li>
                </ul>
            </div>
        </div>
    </div>
</section>
