<?php
// sections/hero.php
// =================
// Hero = section d'accueil.
// - Texte + boutons
// - Image à droite sur grand écran
// - indicateur de scroll en bas

function asset($path) {
    return '/path/to/your/project/' . ltrim($path, '/');
}

$heroImage = asset('assets/img/hero-image.jpg');
$cvFile    = asset('assets/cv/Ansufdine_Ousseni_CV.pdf');
?>

<section id="hero" class="hero">
  <!-- Fond très léger -->
  <div class="hero-bg"></div>

  <div class="container hero-grid">
    <!-- Bloc texte -->
    <div class="hero-text fade-in-up">
      <p class="hero-kicker">Bienvenue sur mon portfolio</p>

      <h1 class="hero-title">Ansufdine Ousseni</h1>

      <h2 class="hero-subtitle text-gradient">
        Développeur Web & Étudiant BTS CIEL
      </h2>

      <p class="hero-desc">
        Étudiant en BTS CIEL à Montpellier, passionné par le développement web
        et les systèmes connectés. Je combine rigueur technique et créativité
        pour créer des solutions modernes et performantes.
      </p>

      <div class="hero-actions">
        <!-- Bouton 1 : scroll vers projets -->
        <button class="btn btn-primary" type="button" data-scroll="#projects">
          Voir mes projets →
        </button>

        <!-- Bouton 2 : download CV -->
        <a class="btn btn-outline" href="<?= $cvFile; ?>" download>
          ⬇️ Télécharger mon CV
        </a>
      </div>
    </div>

    <!-- Image -->
    <div class="hero-image-wrap fade-in">
      <div class="hero-glow"></div>

      <img
        src="<?= $heroImage; ?>"
        alt="Ansufdine Ousseni - Développeur Web"
        class="hero-image"
      />
    </div>
  </div>

  <!-- Indicateur scroll -->
  <div class="scroll-indicator" aria-hidden="true">
    <div class="scroll-pill">
      <div class="scroll-dot"></div>
    </div>
  </div>
</section>