(function () {
  "use strict";

  // Utility helpers
  function $(sel, ctx) {
    return (ctx || document).querySelector(sel);
  }
  function $all(sel, ctx) {
    return Array.prototype.slice.call((ctx || document).querySelectorAll(sel));
  }
  function on(el, ev, fn, opts) {
    el && el.addEventListener(ev, fn, opts || false);
  }
  function clamp(n, min, max) {
    return Math.min(Math.max(n, min), max);
  }

  // Ensure AOS exists
  function ensureAOS(ready) {
    if (window.AOS && typeof window.AOS.init === "function") {
      ready();
      return;
    }
    const link = document.createElement("link");
    link.rel = "stylesheet";
    link.href = "https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css";
    document.head.appendChild(link);

    const script = document.createElement("script");
    script.src = "https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js";
    script.onload = ready;
    document.head.appendChild(script);
  }

  // Sticky Navbar
  function setupStickyNav() {
    const nav = $(".main-nav");
    if (!nav) return;

    const applyStickyStyles = () => {
      nav.classList.add("is-sticky");
      nav.style.backgroundColor = "rgba(255,255,255,1)";
      nav.style.color = "#fe4177"
      nav.querySelectorAll("a").forEach(link => (link.style.color = "#fe4177"));
      nav.style.boxShadow = "0 8px 20px rgba(0,0,0,.08)";
    };

    const removeStickyStyles = () => {
      nav.classList.remove("is-sticky");
      nav.style.backgroundColor = "";
      nav.style.color = "";
      nav.querySelectorAll("a").forEach(link => (link.style.color = ""));
      nav.style.boxShadow = "";
    };

    function onScroll() {
      if (window.scrollY > 10) applyStickyStyles();
      else removeStickyStyles();
    }
    on(window, "scroll", onScroll, { passive: true });
    onScroll();
  }
  function animateNumber(el, toValue, opts) {
    const options = Object.assign({ duration: 1200 }, opts || {});
    const start = performance.now();
    const from = parseFloat((el.textContent || "0").replace(/[^\d.]/g, "")) || 0;
    const to = parseFloat(toValue) || 0;
    const delta = to - from;
    const ease = t => 1 - (1 - t) * (1 - t);

    function tick(now) {
      const elapsed = now - start;
      const p = clamp(elapsed / options.duration, 0, 1);
      const value = from + delta * ease(p);
      el.textContent = Math.round(value).toString();
      if (p < 1) requestAnimationFrame(tick);
    }
    requestAnimationFrame(tick);
  }

  function setupCounters() {
    const basisRadios = $all('#pricing-basis-options input[name="pricing-basis"]');
    const odos = $all(".odometer.price");

    if (!basisRadios.length || !odos.length) return;

    const initialBasis = (basisRadios.find(r => r.checked) || basisRadios[0])?.value || "monthly";

    odos.forEach(el => {
      el.__monthly = el.getAttribute("data-monthly");
      el.__yearly = el.getAttribute("data-yearly");
      el.textContent = initialBasis === "yearly" ? el.__yearly : el.__monthly;
    });

    basisRadios.forEach(radio => {
      on(radio, "change", () => {
        const basis = radio.value; 
        odos.forEach(el => {
          const targetValue = basis === "yearly" ? el.__yearly : el.__monthly;
          if (window.Odometer && el.classList.contains("odometer")) {
            try {
              el.innerHTML = "";
              setTimeout(() => (el.innerHTML = targetValue || "0"), 50);
            } catch {
              animateNumber(el, targetValue || 0);
            }
          } else {
            animateNumber(el, targetValue || 0);
          }
        });
      });
    });
  }

  function setupAOS() {
    ensureAOS(() => {
      window.AOS.init({
        offset: 100,
        duration: 800,
        easing: "ease-out-quad",
        once: false,
        mirror: true
      });
    });
  }

  function setupSmoothScroll() {
    $all('a.scrollto[href^="#"]').forEach(a => {
      on(a, "click", function (e) {
        const id = this.getAttribute("href");
        const target = $(id);
        if (!target) return;
        e.preventDefault();
        const y = target.getBoundingClientRect().top + window.pageYOffset - 70;
        window.scrollTo({ top: y, behavior: "smooth" });
      });
    });
  }
  function setupSwiper() {
    const containers = document.querySelectorAll(".swiper-container");
    containers.forEach(container => {
      const items = parseInt(container.dataset.swShowItems) || 3;
      const space = parseInt(container.dataset.swSpaceBetween) || 30;
      const autoplay = parseInt(container.dataset.swAutoplay) || 3000;
      const loop = container.dataset.swLoop === "true";

      new Swiper(container, {
        slidesPerView: items,
        spaceBetween: space,
        loop: loop,
        autoplay: { delay: autoplay, disableOnInteraction: false },
        breakpoints: {
          320: { slidesPerView: 2 },
          768: { slidesPerView: 3 },
          992: { slidesPerView: 5 }
        }
      });
    });
  }
  on(document, "DOMContentLoaded", () => {
    setupStickyNav();
    setupCounters();
    setupAOS();
    setupSmoothScroll();
    setupSwiper();
  });
})();
