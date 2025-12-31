/**
 * Ici : Navbar
 * - Effet "glass" après 50px de scroll (comme isScrolled dans React)
 * - Menu mobile open/close
 * - Scroll smooth vers les sections
 */

(function () {
    // ====== Helpers ======
    function $(selector) {
      return document.querySelector(selector);
    }
    function $all(selector) {
      return Array.from(document.querySelectorAll(selector));
    }
  
    // ====== Elements ======
    const navbar = $("#navbar");
    const mobileBtn = $("#mobileMenuBtn");
    const mobileMenu = $("#mobileMenu");
  
    // Si la navbar n’existe pas (page différente), on stop proprement
    if (!navbar) return;
  
    // ====== 1) Effet "glass" au scroll ======
    function handleNavbarScroll() {
      // équivalent : window.scrollY > 50
      const scrolled = window.scrollY > 50;
  
      if (scrolled) navbar.classList.add("glass", "shadow-md");
      else navbar.classList.remove("glass", "shadow-md");
    }
  
    window.addEventListener("scroll", handleNavbarScroll);
    handleNavbarScroll(); // exécute au chargement (au cas où on arrive au milieu de page)
  
    // ====== 2) Scroll smooth vers les sections ======
    function scrollToSection(id) {
      const el = document.getElementById(id);
      if (!el) return;
  
      el.scrollIntoView({ behavior: "smooth" });
  
      // Si menu mobile ouvert, on le ferme automatiquement
      closeMobileMenu();
    }
  
    // Clique sur tous les boutons qui ont data-scroll-to="..."
    $all("[data-scroll-to]").forEach((btn) => {
      btn.addEventListener("click", () => {
        const targetId = btn.getAttribute("data-scroll-to");
        if (targetId) scrollToSection(targetId);
      });
    });
  
    // ====== 3) Menu mobile open/close ======
    function openMobileMenu() {
      if (!mobileMenu || !mobileBtn) return;
  
      mobileMenu.hidden = false;
      mobileMenu.classList.add("is-open");
  
      mobileBtn.setAttribute("aria-expanded", "true");
      navbar.classList.add("mobile-open");
    }
  
    function closeMobileMenu() {
      if (!mobileMenu || !mobileBtn) return;
  
      mobileMenu.classList.remove("is-open");
      mobileMenu.hidden = true;
  
      mobileBtn.setAttribute("aria-expanded", "false");
      navbar.classList.remove("mobile-open");
    }
  
    function toggleMobileMenu() {
      // hidden=true => fermé
      if (mobileMenu.hidden) openMobileMenu();
      else closeMobileMenu();
    }
  
    if (mobileBtn && mobileMenu) {
      mobileBtn.addEventListener("click", toggleMobileMenu);
    }
  
    // Bonus : fermer le menu si l’utilisateur clique en dehors
    document.addEventListener("click", (e) => {
      if (!mobileMenu || mobileMenu.hidden) return;
  
      const clickedInsideNavbar = navbar.contains(e.target);
      if (!clickedInsideNavbar) closeMobileMenu();
    });
  
    // Bonus : fermer le menu avec ESC
    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape") closeMobileMenu();
    });
  })();