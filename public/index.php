<?php
/**
 * public/index.php
 * Rôle : page d'accueil (équivalent React: pages/Index.tsx)
 * - On assemble le site en incluant les sections dans le bon ordre.
 * - Ici, on reste SIMPLE : chaque section est un fichier PHP.
 */

require_once __DIR__ . '/../includes/config.php'; // config globale (chemins, constantes, etc.)
require_once __DIR__ . '/../includes/head.php';   // <head> + ouverture <body>
require_once __DIR__ . '/../includes/navbar.php'; // Navbar (header)

?>
<main>
  <?php
    // Même ordre que dans Index.tsx
    require_once __DIR__ . '/../sections/hero.php';
    require_once __DIR__ . '/../sections/about.php';
    require_once __DIR__ . '/../sections/skills.php';
    require_once __DIR__ . '/../sections/projects.php';
    require_once __DIR__ . '/../sections/timeline.php';
    require_once __DIR__ . '/../sections/contact.php';
  ?>
</main>

<?php
require_once __DIR__ . '/../includes/footer.php'; // Footer + fermeture </body></html>

// Bouton flottant “Télécharger le CV” (équivalent de <CVButton />)
require_once __DIR__ . '/../includes/cv-button.php';