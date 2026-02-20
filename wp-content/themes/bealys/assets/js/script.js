/**
 * Marché Bealys - JavaScript principal
 */

document.addEventListener('DOMContentLoaded', function() {
    
    // ===========================
    // Header scroll behavior - Banner disparaît, menu devient sticky
    // ===========================
    const navbar = document.querySelector('.navbar');
    const topBanner = document.querySelector('.top-banner-section');

    // Seuils avec hystérésis pour éviter l'effet de "danse"
    const scrollThresholdDown = 100; // Scroll vers le bas : cacher à 100px
    const scrollThresholdUp = 20;    // Scroll vers le haut : réafficher seulement à 20px

    let lastScrollPosition = 0;
    let bannerHidden = false;

    function handleScroll() {
        const scrollPosition = window.scrollY;
        const scrollingDown = scrollPosition > lastScrollPosition;

        if (scrollingDown && scrollPosition > scrollThresholdDown && !bannerHidden) {
            // Scroll vers le bas : cacher la banner et fixer le menu
            if (topBanner) topBanner.classList.add('hide');
            if (navbar) navbar.classList.add('sticky');
            bannerHidden = true;
        } else if (!scrollingDown && scrollPosition < scrollThresholdUp && bannerHidden) {
            // Scroll vers le haut et presque en haut : réafficher la banner
            if (topBanner) topBanner.classList.remove('hide');
            if (navbar) navbar.classList.remove('sticky');
            bannerHidden = false;
        }

        lastScrollPosition = scrollPosition;
    }

    // Écouter le scroll avec requestAnimationFrame pour de meilleures performances
    let ticking = false;
    window.addEventListener('scroll', function() {
        if (!ticking) {
            window.requestAnimationFrame(function() {
                handleScroll();
                ticking = false;
            });
            ticking = true;
        }
    });

    // Vérifier la position au chargement de la page
    handleScroll();

    // ===========================
    // Navigation mobile toggle
    // ===========================
    const navToggle = document.querySelector('.nav-toggle');
    const navWrapper = document.querySelector('.nav-wrapper');
    const navLinks = document.querySelectorAll('.nav-link');

    if (navToggle && navWrapper) {
        navToggle.addEventListener('click', function() {
            navWrapper.classList.toggle('active');
            this.classList.toggle('active');
        });
    }

    // Fermer le menu mobile quand on clique sur un lien
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            if (navWrapper) {
                navWrapper.classList.remove('active');
            }
            if (navToggle) {
                navToggle.classList.remove('active');
            }
        });
    });
    
    // ===========================
    // Smooth scroll pour les ancres
    // ===========================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));

            if (target) {
                // Calculer la hauteur du header
                // Si la navbar est sticky, utiliser sa hauteur, sinon utiliser toute la hauteur du site-header
                const navbar = document.querySelector('.navbar');
                const headerHeight = navbar && navbar.classList.contains('sticky')
                    ? navbar.offsetHeight
                    : document.querySelector('.site-header').offsetHeight;

                const targetPosition = target.offsetTop - headerHeight;

                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // ===========================
    // Active nav link on scroll
    // ===========================
    const sections = document.querySelectorAll('section[id]');
    
    function updateActiveLink() {
        const scrollPosition = window.scrollY + 150;
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;
            const sectionId = section.getAttribute('id');
            
            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${sectionId}`) {
                        link.classList.add('active');
                    }
                });
            }
        });
    }
    
    window.addEventListener('scroll', updateActiveLink);

    // ===========================
    // Animation on scroll (fade in)
    // ===========================
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);
    
    // Animer les cartes et sections
    const animatedElements = document.querySelectorAll(
        '.product-category, .promo-card, .info-card, .feature-item, .service-card'
    );

    animatedElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(20px)';
        el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
        observer.observe(el);
    });
    
    // ===========================
    // Lazy loading images
    // ===========================
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    if (img.dataset.src) {
                        img.src = img.dataset.src;
                        img.removeAttribute('data-src');
                    }
                    imageObserver.unobserve(img);
                }
            });
        });
        
        document.querySelectorAll('img[data-src]').forEach(img => {
            imageObserver.observe(img);
        });
    }
    
    // ===========================
    // Prévenir le submit de formulaire (si ajouté plus tard)
    // ===========================
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            // Logique de soumission à implémenter
        });
    });

    // ===========================
    // Cookie Banner - Loi 25
    // ===========================
    const cookieBanner = document.getElementById('cookie-banner');
    const cookieAccept = document.getElementById('cookie-accept');
    const cookieDecline = document.getElementById('cookie-decline');

    // Vérifier si l'utilisateur a déjà fait un choix
    const cookieConsent = localStorage.getItem('cookieConsent');

    if (!cookieConsent) {
        // Afficher le banner après un court délai
        setTimeout(() => {
            cookieBanner.style.display = 'block';
        }, 1000);
    }

    if (cookieAccept) {
        cookieAccept.addEventListener('click', function() {
            localStorage.setItem('cookieConsent', 'accepted');
            cookieBanner.style.display = 'none';
        });
    }

    if (cookieDecline) {
        cookieDecline.addEventListener('click', function() {
            localStorage.setItem('cookieConsent', 'declined');
            cookieBanner.style.display = 'none';
            // Désactiver Google Analytics si refusé
            if (window.gtag) {
                window['ga-disable-GA_MEASUREMENT_ID'] = true;
            }
        });
    }

    // ===========================
    // Fonction utilitaire shuffle
    // ===========================
    function shuffleArray(array) {
        const shuffled = [...array];
        for (let i = shuffled.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [shuffled[i], shuffled[j]] = [shuffled[j], shuffled[i]];
        }
        return shuffled;
    }

    // ===========================
    // Images catégories - Ordre aléatoire par session
    // ===========================
    const productsGallery = document.querySelector('.products-masonry');
    if (productsGallery) {
        const storageKey = 'products-gallery-order';
        const masonryItems = Array.from(productsGallery.querySelectorAll('.masonry-item'));

        // Vérifier si un ordre est déjà enregistré pour cette session
        let shuffledOrder = sessionStorage.getItem(storageKey);

        if (!shuffledOrder) {
            // Créer un nouvel ordre aléatoire
            const indices = masonryItems.map((_, i) => i);
            const shuffledIndices = shuffleArray(indices);
            shuffledOrder = JSON.stringify(shuffledIndices);
            sessionStorage.setItem(storageKey, shuffledOrder);
        }

        // Appliquer l'ordre
        const order = JSON.parse(shuffledOrder);
        const fragment = document.createDocumentFragment();

        order.forEach(i => {
            if (masonryItems[i]) {
                fragment.appendChild(masonryItems[i].cloneNode(true));
            }
        });

        // Vider la galerie et ajouter les items dans le nouvel ordre
        productsGallery.innerHTML = '';
        productsGallery.appendChild(fragment);
    }

    // ===========================
    // Tags animés - Ordre aléatoire par session
    // ===========================

    const tagsTracks = document.querySelectorAll('.tags-track');

    tagsTracks.forEach((track, index) => {
        const lineNumber = track.getAttribute('data-line');
        const storageKey = `tags-order-line-${lineNumber}`;

        // Récupérer tous les tags de cette ligne
        const tags = Array.from(track.querySelectorAll('.tag'));

        // Vérifier si un ordre est déjà enregistré pour cette session
        let shuffledOrder = sessionStorage.getItem(storageKey);

        if (!shuffledOrder) {
            // Créer un nouvel ordre aléatoire
            const indices = tags.map((_, i) => i);
            const shuffledIndices = shuffleArray(indices);
            shuffledOrder = JSON.stringify(shuffledIndices);
            sessionStorage.setItem(storageKey, shuffledOrder);
        }

        // Appliquer l'ordre
        const order = JSON.parse(shuffledOrder);
        const fragment = document.createDocumentFragment();

        order.forEach(i => {
            if (tags[i]) {
                fragment.appendChild(tags[i].cloneNode(true));
            }
        });

        // Vider la track et ajouter les tags dans le nouvel ordre
        track.innerHTML = '';
        track.appendChild(fragment);

        // Dupliquer les tags plusieurs fois pour remplir toute la largeur
        const firstSet = Array.from(track.children);
        // Dupliquer 3 fois pour assurer un remplissage complet
        for (let i = 0; i < 3; i++) {
            firstSet.forEach(tag => {
                track.appendChild(tag.cloneNode(true));
            });
        }
    });

    console.log('Marché Bealys - Site chargé avec succès!');
});
