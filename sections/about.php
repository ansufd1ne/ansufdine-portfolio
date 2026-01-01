<?php
// sections/about.php
// ==================
// Section "À propos"
// Contient :
// - Titre de section
// - Texte de présentation dans une carte "glass"
// - Citation inspirante
// - 3 cartes infos (âge / formation / ville)
?>

<section id="about" class="about-section">

  <div class="container about-container">

    <!-- Titre -->
    <h2 class="about-title fade-in">
      À propos
    </h2>

    <div class="about-content fade-in-up">

      <!-- Bloc texte principal -->
      <div class="about-text glass">
        <p>
          Passionné par la technologie depuis mon plus jeune âge, je poursuis actuellement
          un <span class="highlight">BTS CIEL</span>
          (Cybersécurité, Informatique et réseaux, Électronique)
          option développement à Montpellier.
        </p>

        <p>
          Mon parcours m'a permis d'acquérir des compétences solides en développement web,
          de la conception d'interfaces utilisateur modernes au déploiement de solutions
          backend performantes. Je suis constamment à la recherche de nouveaux défis techniques
          et de projets innovants.
        </p>

        <p>
          Au-delà du code, je m'efforce de cultiver les valeurs qui me définissent :
          la <span class="highlight">discipline</span>,
          la <span class="highlight">curiosité</span>,
          la <span class="highlight">rigueur</span> et
          l'<span class="highlight">esprit d'équipe</span>.
        </p>
      </div>

      <!-- Citation -->
      <div class="about-quote-wrapper">
        <div class="quote-icon">“</div>

        <blockquote class="about-quote glass">
          Le succès n'est pas la clé du bonheur. Le bonheur est la clé du succès.
          Si vous aimez ce que vous faites, vous réussirez.

          <footer>
            — Albert Schweitzer
          </footer>
        </blockquote>
      </div>

      <!-- Cartes infos -->
      <div class="about-cards">

        <div class="about-card glass">
          <div class="about-card-value text-gradient">19 ans</div>
          <div class="about-card-label">Étudiant motivé</div>
        </div>

        <div class="about-card glass">
          <div class="about-card-value text-gradient">BTS CIEL</div>
          <div class="about-card-label">Formation actuelle</div>
        </div>

        <div class="about-card glass">
          <div class="about-card-value text-gradient">Montpellier</div>
          <div class="about-card-label">Localisation</div>
        </div>

      </div>

    </div>
  </div>
</section>