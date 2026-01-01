<?php
// sections/projects.php
// =====================
// Section "Projets"
// Contient :
// - Cartes de projets
// - Dégradé en image de fond
// - Tags (technos)
// - Boutons Code / Démo

$projects = [
  [
    'title' => 'Mwoibaco',
    'description' => 'Site e-commerce moderne pour la vente de planners numériques avec système de paiement intégré et interface utilisateur intuitive.',
    'tags' => ['React', 'E-commerce', 'Tailwind'],
    'github' => '#',
    'demo' => '#',
    'gradient' => 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)',
  ],
  [
    'title' => 'Application de Gestion de Budget',
    'description' => 'Application web complète permettant de suivre ses dépenses et revenus avec visualisation des données en temps réel.',
    'tags' => ['PHP', 'PostgreSQL', 'Chart.js'],
    'github' => '#',
    'demo' => '#',
    'gradient' => 'linear-gradient(135deg, #f093fb 0%, #f5576c 100%)',
  ],
  [
    'title' => 'Refonte AO Visions Studio',
    'description' => 'Refonte complète du site web de l\'entreprise avec un design moderne, responsive et optimisé SEO.',
    'tags' => ['React', 'SEO', 'Design'],
    'github' => '#',
    'demo' => '#',
    'gradient' => 'linear-gradient(135deg, #4facfe 0%, #00f2fe 100%)',
  ],
  [
    'title' => 'Portfolio HTML/CSS',
    'description' => 'Premier portfolio créé from scratch en HTML/CSS pur, démontrant la maîtrise des fondamentaux.',
    'tags' => ['HTML', 'CSS', 'Responsive'],
    'github' => '#',
    'demo' => '#',
    'gradient' => 'linear-gradient(135deg, #43e97b 0%, #38f9d7 100%)',
  ],
];
?>

<section id="projects" class="projects-section">

  <div class="container">

    <!-- Titre -->
    <h2 class="projects-title fade-in">Projets</h2>

    <!-- Sous-titre -->
    <p class="projects-subtitle">
      Une sélection de mes réalisations récentes démontrant mes compétences techniques
    </p>

    <!-- Grille des projets -->
    <div class="projects-grid">

      <?php foreach ($projects as $index => $project): ?>
        <div
          class="project-card glass fade-in-up"
          style="animation-delay: <?= $index * 0.1 ?>s"
        >

          <!-- Bandeau visuel (dégradé) -->
          <div
            class="project-cover"
            style="background: <?= $project['gradient']; ?>"
          >
            <div class="project-overlay"></div>
          </div>

          <!-- Contenu -->
          <div class="project-content">

            <h3 class="project-title">
              <?= $project['title']; ?>
            </h3>

            <p class="project-description">
              <?= $project['description']; ?>
            </p>

            <!-- Tags -->
            <div class="project-tags">
              <?php foreach ($project['tags'] as $tag): ?>
                <span class="project-tag"><?= $tag; ?></span>
              <?php endforeach; ?>
            </div>

            <!-- Boutons -->
            <div class="project-links">
              <a
                href="<?= $project['github']; ?>"
                target="_blank"
                class="btn-outline"
              >
                💻 Code
              </a>

              <a
                href="<?= $project['demo']; ?>"
                target="_blank"
                class="btn-primary"
              >
                🔗 Démo
              </a>
            </div>

          </div>
        </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>