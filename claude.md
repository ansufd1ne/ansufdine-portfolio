
Contexte

Je refais à la main un portfolio généré par Lovable (React + Tailwind) en PHP + CSS + JavaScript vanilla, en gardant le même design, la même mise en page et les mêmes sections.

Objectif : obtenir un site statique (rendu côté serveur simple via includes PHP) qui ressemble visuellement au portfolio Lovable :
	•	Hero (Nom, titre, texte, boutons)
	•	À propos (bloc texte + citation + 3 cards stats)
	•	Compétences (3 colonnes avec barres de progression)
	•	Projets (cards avec tags + boutons Code/Démo)
	•	Parcours (timeline / cartes)
	•	Contact (form + coordonnées + disponibilité)
	•	Bouton flottant “Télécharger le CV”

Le site doit être responsive, fluide, moderne, et fidèle au style dark/bleu.



Stack imposée
	•	PHP (includes + sections) — pas de framework
	•	CSS pur (un fichier principal)
	•	JS pur (un fichier principal)
	•	Pas de Tailwind, pas de React, pas de build Vite



Arborescence cible (à respecter)

Le projet doit respecter cette structure :

ansufdine-portfolio/
├── public/
│   ├── index.php
│   ├── assets/
│   │   ├── hero-image.jpg
│   │   ├── tech-background.jpg
│   │   └── placeholder.svg
│   ├── css/
│   │   └── style.css
│   └── js/
│       └── main.js
├── includes/
│   ├── config.php
│   ├── head.php
│   ├── navbar.php
│   └── footer.php
├── sections/
│   ├── hero.php
│   ├── about.php
│   ├── skills.php
│   ├── projects.php
│   ├── timeline.php
│   └── contact.php
├── data/
│   ├── projects.php
│   ├── skills.php
│   └── timeline.php
├── api/
│   └── contact_submit.php
├── robots.txt
├── README.md
└── claude.md




Mapping Lovable -> PHP

Lovable avait ces composants :
	•	Navbar.tsx -> includes/navbar.php
	•	Hero.tsx -> sections/hero.php
	•	About.tsx -> sections/about.php
	•	Skills.tsx -> sections/skills.php
	•	Projects.tsx -> sections/projects.php
	•	Timeline.tsx -> sections/timeline.php
	•	Contact.tsx -> sections/contact.php
	•	Footer.tsx -> includes/footer.php
	•	CVButton.tsx -> bouton flottant global (dans index.php ou footer.php)

La page principale doit être :
	•	public/index.php qui inclut toutes les sections dans l’ordre.



Contenu / Données

Données à centraliser

Les listes doivent être dans /data/*.php :
	•	compétences + pourcentages
	•	projets (titre, description, tags, lien code, lien démo)
	•	parcours (dates, titre, lieu, description)

Contenu texte

Garder le ton actuel du portfolio :
	•	“Ansufdine Ousseni”
	•	“Développeur Web & Étudiant BTS CIEL”
	•	Intro courte
	•	À propos : texte + valeurs (discipline, curiosité, rigueur, esprit d’équipe)
	•	Citation (Albert Schweitzer)
	•	Cards stats : âge, BTS CIEL, Montpellier (les chiffres peuvent être modifiables facilement)

⚠️ Important : le site doit être facilement personnalisable : tout ce qui est “contenu” doit être modifiable sans toucher au HTML (idéalement via config.php + data/*).



Design attendu (style)

Look & feel général
	•	Fond dark bleu (dégradés légers)
	•	Sections espacées, gros titres centrés
	•	Cards arrondies, effet glass/blur léger, bordures discrètes
	•	Hover doux (transform + shadow)
	•	Typo clean (system font ok, ou Google Font type Inter si simple)
	•	Responsive : desktop 2 colonnes quand possible, mobile 1 colonne

Eléments clés visibles dans le rendu Lovable
	•	Navbar en haut (AO à gauche + ancres à droite)
	•	Hero : bloc texte gauche + image droite arrondie
	•	Boutons : “Voir mes projets” + “Télécharger mon CV”
	•	Bouton flottant bas droite “Télécharger le CV”
	•	Skills : 3 colonnes (Frontend/Backend/Outils) + barres horizontales + %
	•	Projets : cards avec grande zone image (placeholder gradient), tags, boutons Code/Démo
	•	Timeline : cartes / style timeline
	•	Contact : form à gauche, coordonnées + dispo à droite



Fonctionnalités JS (main.js)
	•	Smooth scroll vers ancres (#about, #skills, etc.)
	•	Highlight lien actif dans la navbar selon la section visible (IntersectionObserver)
	•	Animation légère au scroll (fade/translate) sur les sections/cards (option simple)
	•	Formulaire contact :
	•	Submit AJAX vers /api/contact_submit.php
	•	Afficher succès/erreur proprement
	•	Validation minimale (nom/email/message)



Backend minimal (contact_submit.php)

But : pas besoin de vraie BDD.
	•	Vérifier POST + champs requis
	•	Anti-spam simple : honeypot hidden input
	•	Réponse JSON : { ok: true, message: "..." }
	•	(Option) envoyer un email via mail() si configuré, sinon stocker dans un fichier .txt dans /data/messages.log (fallback)



Contraintes de qualité
	•	Code propre, lisible, commenté juste ce qu’il faut
	•	Pas de dépendances inutiles
	•	CSS organisé :
	•	variables :root
	•	base / layout / components / utilities
	•	Accessibilité minimale :
	•	labels form
	•	contrastes corrects
	•	focus visible



Plan de travail (ordre)
	1.	Créer public/index.php + includes (head/navbar/footer)
	2.	Recréer sections une par une en respectant l’ordre
	3.	Créer style.css pour reproduire le design
	4.	Créer data/* et brancher les loops PHP
	5.	Ajouter main.js (scroll/active link/animations/form)
	6.	Ajouter api/contact_submit.php
	7.	Vérifier responsive + cohérence globale



Définition des ancres

Navbar doit pointer vers :
	•	#about
	•	#skills
	•	#projects
	•	#timeline
	•	#contact



Livrable attendu

À la fin, je veux :
	•	Un projet PHP fonctionnel en local
	•	Qui ressemble visuellement au portfolio Lovable
	•	Sans React / Tailwind / Vite
	•	Avec un seul point d’entrée : public/index.php

