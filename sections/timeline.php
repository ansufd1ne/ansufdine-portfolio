<?php
// sections/timeline.php
// =====================
// Section "Parcours"
// Contient :
// - Timeline verticale
// - Études + projets
// - Alternance gauche / droite sur desktop

$timelineEvents = [
  [
    'year' => '2024 - 2025',
    'title' => 'BUT Informatique',
    'subtitle' => "IUT d'Annecy",
    'description' => 'Formation universitaire axée sur le développement logiciel et les systèmes d’information.',
    'icon' => '🎓',
    'color' => 'primary',
  ],
  [
    'year' => '2025 - 2027',
    'title' => 'BTS CIEL',
    'subtitle' => 'Montpellier',
    'description' => 'Option développement – spécialisation en cybersécurité, informatique, réseaux et électronique.',
    'icon' => '🎓',
    'color' => 'secondary',
  ],
  [
    'year' => '2024 - Présent',
    'title' => 'Projets Parallèles',
    'subtitle' => 'Ansufdine (entreprise)',
    'description' => 'Création et refonte de sites web, développement de solutions e-commerce.',
    'icon' => '💼',
    'color' => 'accent',
  ],
];
?>

<section id="timeline" class="timeline-section">

  <div class="container">

    <!-- Titre -->
    <h2 class="timeline-title fade-in">Parcours</h2>

    <!-- Sous-titre -->
    <p class="timeline-subtitle">
      Mon cheminement académique et professionnel
    </p>

    <div class="timeline-wrapper">

      <!-- Ligne centrale -->
      <div class="timeline-line"></div>

      <!-- Événements -->
      <?php foreach ($timelineEvents as $index => $event): ?>
        <?php $isLeft = $index % 2 === 0; ?>

        <div
          class="timeline-item fade-in-up <?= $isLeft ? 'left' : 'right'; ?>"
          style="animation-delay: <?= $index * 0.2 ?>s"
        >

          <!-- Carte -->
          <div class="timeline-card glass">

            <div class="timeline-header">
              <span class="timeline-icon <?= $event['color']; ?>">
                <?= $event['icon']; ?>
              </span>
              <span class="timeline-year">
                <?= $event['year']; ?>
              </span>
            </div>

            <h3 class="timeline-title-card">
              <?= $event['title']; ?>
            </h3>

            <p class="timeline-subtitle-card">
              <?= $event['subtitle']; ?>
            </p>

            <p class="timeline-description">
              <?= $event['description']; ?>
            </p>

          </div>

          <!-- Point -->
          <span class="timeline-dot"></span>

        </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>