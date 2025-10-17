(function () {
  const stickyCta = document.querySelector('.ysq-lp-sticky-cta');
  const revealOffset = 180;

  function handleScroll() {
    if (!stickyCta) {
      return;
    }

    if (window.scrollY > revealOffset) {
      stickyCta.classList.add('is-visible');
    } else {
      stickyCta.classList.remove('is-visible');
    }
  }

  function handleAnchorClick(event) {
    const targetId = event.currentTarget.getAttribute('href');
    if (!targetId || !targetId.startsWith('#')) {
      return;
    }

    const target = document.querySelector(targetId);
    if (!target) {
      return;
    }

    event.preventDefault();
    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
  }

  function applyCtaLinks() {
    const data = window.ysqLpTheme || {};
    const cta = data.cta || {};

    if (cta.form) {
      document.querySelectorAll('[data-cta-target="form"]').forEach(function (link) {
        link.setAttribute('href', cta.form);
        link.removeAttribute('data-scroll');
      });
    }

    if (cta.whatsapp) {
      document.querySelectorAll('[data-cta-target="whatsapp"]').forEach(function (link) {
        link.setAttribute('href', cta.whatsapp);
        link.setAttribute('target', '_blank');
        link.setAttribute('rel', 'noopener');
        link.removeAttribute('data-scroll');
      });
    }

    if (data.videoUrl) {
      document.querySelectorAll('.lp-video-embed iframe').forEach(function (frame) {
        frame.setAttribute('src', data.videoUrl);
        frame.setAttribute('loading', 'lazy');
        frame.setAttribute('decoding', 'async');
      });
    }
  }

  window.addEventListener('scroll', handleScroll, { passive: true });
  document.addEventListener('DOMContentLoaded', function () {
    handleScroll();
    applyCtaLinks();

    document.querySelectorAll('a[data-scroll="smooth"]').forEach(function (anchor) {
      anchor.addEventListener('click', handleAnchorClick);
    });
  });

  window.ysqLpLead = function () {
    console.log('lead');
  };
})();
