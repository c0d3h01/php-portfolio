document.addEventListener("DOMContentLoaded", () => {
  initSmoothScroll();
  initHoverEffects();
  initTypingEffect();
  initSkillAnimations();
  initIntersectionAnimations();
  initFormEnhancements();
  initParticles();
  initTimelineAnimations();
  initMobileMenu();
});

/* -------------------------
   Smooth Scroll Animation
------------------------- */
function initSmoothScroll() {
  document.querySelectorAll('nav a[href^="?"]').forEach((link) => {
    link.addEventListener("click", () => {
      document.body.style.opacity = "0.8";
      setTimeout(() => (document.body.style.opacity = "1"), 300);
    });
  });
}

/* -------------------------
   Project Card Hover
------------------------- */
function initHoverEffects() {
  document.querySelectorAll(".project-card").forEach((card) => {
    card.addEventListener(
      "mouseenter",
      () => (card.style.transform = "translateY(-10px) scale(1.02)")
    );
    card.addEventListener(
      "mouseleave",
      () => (card.style.transform = "translateY(0) scale(1)")
    );
  });
}

/* -------------------------
   Typing Effect (Hero Title)
------------------------- */
function initTypingEffect() {
  const heroTitle = document.querySelector(".hero h1");
  if (!heroTitle) return;
  const text = heroTitle.textContent;
  heroTitle.textContent = "";
  let i = 0;
  (function type() {
    if (i < text.length) {
      heroTitle.textContent += text.charAt(i++);
      setTimeout(type, 100);
    }
  })();
}

/* -------------------------
   Skill Tag Animation
------------------------- */
function initSkillAnimations() {
  document.querySelectorAll(".skill-tag").forEach((tag, idx) => {
    tag.style.animation = `fadeInUp 0.6s ease forwards`;
    tag.style.animationDelay = `${idx * 0.1}s`;
    tag.style.opacity = "0";
    tag.style.transform = "translateY(20px)";
  });
}

/* -------------------------
   Intersection Observer
------------------------- */
function initIntersectionAnimations() {
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.style.opacity = "1";
          entry.target.style.transform = "translateY(0)";
        }
      });
    },
    { threshold: 0.1, rootMargin: "0px 0px -50px 0px" }
  );

  document
    .querySelectorAll(".skill-category, .project-card, .timeline-item")
    .forEach((el) => {
      el.style.opacity = "0";
      el.style.transform = "translateY(30px)";
      el.style.transition = "all 0.6s ease";
      observer.observe(el);
    });
}

/* -------------------------
   Contact Form Enhancements
------------------------- */
function initFormEnhancements() {
  const form = document.querySelector("form");
  if (!form) return;

  form.querySelectorAll("input, textarea").forEach((input) => {
    input.addEventListener("focus", () =>
      input.parentNode.classList.add("focused")
    );
    input.addEventListener("blur", () => {
      if (!input.value) input.parentNode.classList.remove("focused");
    });
    input.addEventListener(
      "input",
      () =>
        (input.style.borderColor = input.checkValidity()
          ? "#10b981"
          : "#ef4444")
    );
  });

  form.addEventListener("submit", function () {
    const btn = this.querySelector('button[type="submit"]');
    const originalText = btn.textContent;
    btn.textContent = "Sending...";
    btn.disabled = true;
    setTimeout(() => {
      btn.textContent = originalText;
      btn.disabled = false;
    }, 2000);
  });
}

/* -------------------------
   Hero Particle Effect
------------------------- */
function initParticles() {
  const hero = document.querySelector(".hero");
  if (!hero) return;
  for (let i = 0; i < 50; i++) {
    const p = document.createElement("div");
    Object.assign(p.style, {
      position: "absolute",
      width: `${Math.random() * 4 + 2}px`,
      height: `${Math.random() * 4 + 2}px`,
      background: "rgba(255, 255, 255, 0.1)",
      borderRadius: "50%",
      left: `${Math.random() * 100}%`,
      top: `${Math.random() * 100}%`,
      animation: `float ${
        Math.random() * 3 + 2
      }s ease-in-out infinite alternate`,
      pointerEvents: "none",
    });
    hero.appendChild(p);
  }
}

/* -------------------------
   Timeline Animation
------------------------- */
function initTimelineAnimations() {
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach(
        (entry) =>
          entry.isIntersecting && entry.target.classList.add("animate-in")
      );
    },
    { threshold: 0.3 }
  );

  document.querySelectorAll(".timeline-item").forEach((item, idx) => {
    item.style.animationDelay = `${idx * 0.2}s`;
    observer.observe(item);
  });
}

/* -------------------------
   Mobile Menu
------------------------- */
function initMobileMenu() {
  const nav = document.querySelector("nav");
  if (!nav) return;

  const toggle = document.createElement("button");
  toggle.className = "menu-toggle";
  toggle.textContent = "☰";
  nav.appendChild(toggle);

  toggle.addEventListener("click", () => {
    const navLinks = document.querySelector(".nav-links");
    if (navLinks) {
      navLinks.style.display =
        navLinks.style.display === "flex" ? "none" : "flex";
    }
  });
}

/* -------------------------
   Inject Extra CSS
------------------------- */
(function injectCSS() {
  const css = `
        @keyframes float { 0% { transform: translateY(0); } 100% { transform: translateY(-10px); } }
        .timeline-item.animate-in { animation: slideInLeft 0.6s ease forwards; }
        @keyframes slideInLeft { from { opacity: 0; transform: translateX(-50px); } to { opacity: 1; transform: translateX(0); } }
        .skill-tag, .project-card { transition: all 0.3s ease; }
        @media (max-width: 768px) {
            .nav-links { display: none; flex-direction: column; background: rgba(0,0,0,0.9); padding: 2rem; }
        }
    `;
  const style = document.createElement("style");
  style.textContent = css;
  document.head.appendChild(style);
})();
