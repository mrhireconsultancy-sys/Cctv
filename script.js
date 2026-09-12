// Mobile menu
const menuBtn = document.getElementById('menuBtn');
const navLinks = document.getElementById('navLinks');
menuBtn.addEventListener('click', () => navLinks.classList.toggle('open'));
navLinks.querySelectorAll('a').forEach(a =>
  a.addEventListener('click', () => navLinks.classList.remove('open'))
);

// Reveal on scroll
const revealEls = document.querySelectorAll('.reveal, .stagger');
if ('IntersectionObserver' in window) {
  const io = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.classList.add('in');
        io.unobserve(e.target);
      }
    });
  }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
  revealEls.forEach(el => io.observe(el));
} else {
  revealEls.forEach(el => el.classList.add('in'));
}

// Header scroll shadow
const siteHeader = document.getElementById('siteHeader');
window.addEventListener('scroll', () => {
  siteHeader.classList.toggle('scrolled', window.scrollY > 8);
}, { passive: true });

// Scroll progress bar
const progressBar = document.getElementById('scrollProgress');
window.addEventListener('scroll', () => {
  const scrollTop = window.scrollY;
  const docHeight = document.documentElement.scrollHeight - window.innerHeight;
  const progress = docHeight > 0 ? (scrollTop / docHeight) * 100 : 0;
  progressBar.style.width = progress + '%';
}, { passive: true });

// Contact form — submits to contact.php via fetch
const quoteForm = document.getElementById('quoteForm');
const formStatus = document.getElementById('formStatus');

quoteForm.addEventListener('submit', async (e) => {
  e.preventDefault();
  formStatus.textContent = 'Sending...';
  formStatus.className = 'form-status';

  try {
    const res = await fetch(quoteForm.action, {
      method: 'POST',
      body: new FormData(quoteForm)
    });
    const data = await res.json();
    formStatus.textContent = data.message;
    formStatus.className = 'form-status ' + (data.success ? 'ok' : 'err');
    if (data.success) quoteForm.reset();
  } catch (err) {
    formStatus.textContent = 'Something went wrong. Please call us instead.';
    formStatus.className = 'form-status err';
  }
});
