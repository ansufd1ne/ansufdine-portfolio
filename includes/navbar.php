<?php
/**
 * NAVBAR (équivalent de Navbar.tsx)
 * - Fixe en haut, transparente au départ
 * - Devient "glass" + ombre après 50px de scroll
 * - Menu desktop (md+) + menu mobile (toggle)
 * - Scroll smooth vers les sections (#about, #skills, etc.)
 *
 * Dépendances :
 * - assets/js/main.js (pour le scroll + toggle + effet scroll)
 * - assets/css/style.css (pour .navbar, .glass, etc.)
 */
?>

<nav id="navbar" class="navbar">
  <div class="container navbar__inner">

    <!-- Logo / Brand : clique => remonte vers la section hero -->
    <button type="button"
            class="navbar__brand text-gradient"
            data-scroll-to="hero"
            aria-label="Aller à l'accueil">
      AO
    </button>

    <!-- Liens Desktop (affichés à partir de md) -->
    <div class="navbar__links navbar__links--desktop">
      <button type="button" class="navbar__link" data-scroll-to="about">À propos</button>
      <button type="button" class="navbar__link" data-scroll-to="skills">Compétences</button>
      <button type="button" class="navbar__link" data-scroll-to="projects">Projets</button>
      <button type="button" class="navbar__link" data-scroll-to="timeline">Parcours</button>
      <button type="button" class="navbar__link" data-scroll-to="contact">Contact</button>
    </div>

    <!-- Bouton menu mobile (affiché seulement en mobile) -->
    <button type="button"
            id="mobileMenuBtn"
            class="navbar__burger"
            aria-label="Ouvrir/fermer le menu"
            aria-expanded="false"
            aria-controls="mobileMenu">
      <!-- Icônes “simples” (tu pourras remplacer par FontAwesome si tu veux) -->
      <span class="icon icon--menu" aria-hidden="true">☰</span>
      <span class="icon icon--close" aria-hidden="true">✕</span>
    </button>

  </div>

  <!-- Menu Mobile (caché par défaut) -->
  <div id="mobileMenu" class="navbar__mobile" hidden>
    <div class="navbar__mobileInner">
      <button type="button" class="navbar__link" data-scroll-to="about">À propos</button>
      <button type="button" class="navbar__link" data-scroll-to="skills">Compétences</button>
      <button type="button" class="navbar__link" data-scroll-to="projects">Projets</button>
      <button type="button" class="navbar__link" data-scroll-to="timeline">Parcours</button>
      <button type="button" class="navbar__link" data-scroll-to="contact">Contact</button>
    </div>
  </div>
</nav>