<?php
// sections/skills.php
// ===================
// Section "Compétences"
// Contient :
// - 3 cartes (Frontend / Backend / Outils)
// - Icône + titre
// - Barres de progression avec pourcentage

$skillCategories = [
  [
    'icon'  => '💻', // Frontend
    'title' => 'Frontend',
    'color' => 'primary',
    'skills' => [
      ['name' => 'HTML/CSS',     'level' => 90],
      ['name' => 'JavaScript',   'level' => 85],
      ['name' => 'React',        'level' => 80],
      ['name' => 'Tailwind CSS', 'level' => 85],
    ]
  ],
  [
    'icon'  => '🖥️', // Backend
    'title' => 'Backend',
    'color' => 'secondary',
    'skills' => [
      ['name' => 'PHP',    'level' => 75],
      ['name' => 'SQL',    'level' => 80],
      ['name' => 'C#',     'level' => 70],
      ['name' => 'Python', 'level' => 65],
    ]
  ],
  [
    'icon'  => '🛠️', // Outils
    'title' => 'Outils',
    'color' => 'accent',
    'skills' => [
      ['name' => 'GitHub',  'level' => 85],
      ['name' => 'VS Code', 'level' => 90],
      ['name' => 'Figma',   'level' => 75],
      ['name' => 'Notion',  'level' => 80],
    ]
  ],
];
?>

<section id="skills" class="skills-section">

  <div class="container">

    <!-- Titre -->
    <h2 class="skills-title fade-in">Compétences</h2>

    <!-- Sous-titre -->
    <p class="skills-subtitle">
      Un ensemble de technologies et d'outils que je maîtrise pour créer des solutions complètes
    </p>

    <!-- Grille des catégories -->
    <div class="skills-grid">

      <?php foreach ($skillCategories as $index => $category): ?>
        <div
          class="skills-card glass fade-in-up"
          style="animation-delay: <?= $index * 0.1 ?>s"
        >

          <!-- Titre de catégorie -->
          <div class="skills-card-header">
            <span class="skills-icon <?= $category['color']; ?>">
              <?= $category['icon']; ?>
            </span>
            <h3><?= $category['title']; ?></h3>
          </div>

          <!-- Liste des compétences -->
          <div class="skills-list">

            <?php foreach ($category['skills'] as $skill): ?>
              <div class="skill-item">

                <!-- Nom + % -->
                <div class="skill-label">
                  <span><?= $skill['name']; ?></span>
                  <span class="skill-percent"><?= $skill['level']; ?>%</span>
                </div>

                <!-- Barre -->
                <div class="skill-bar">
                  <div
                    class="skill-bar-fill"
                    style="width: <?= $skill['level']; ?>%;"
                  ></div>
                </div>

              </div>
            <?php endforeach; ?>

          </div>

        </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>