<?php
// index.php — CCTV Design & Installation website
$siteName = "SecureView CCTV";
$phone    = "+91 90000 12345";
$email    = "info@secureviewcctv.in";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $siteName; ?> — CCTV Design &amp; Installation</title>
<meta name="description" content="Professional CCTV system design, supply and installation — site survey, camera layout, NVR setup and ongoing monitoring support.">
<link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="scroll-progress" id="scrollProgress" aria-hidden="true"></div>

<header id="siteHeader">
  <nav class="nav wrap">
    <a href="#top" class="logo"><span class="mark"></span><?php echo $siteName; ?></a>
    <button class="menu-btn" id="menuBtn" aria-label="Menu"><span></span><span></span><span></span></button>
    <div class="nav-links" id="navLinks">
      <a href="#cameras">Camera Types</a>
      <a href="#process">Process</a>
      <a href="#pricing">Pricing</a>
      <a href="#contact" class="nav-cta">Get a Free Survey</a>
    </div>
  </nav>
</header>

<main id="top">

  <!-- HERO with animated camera scan -->
  <section class="hero">
    <div class="hero-glow" aria-hidden="true"></div>
    <div class="wrap hero-grid">
      <div>
        <span class="badge">CCTV Design &amp; Installation</span>
        <h1>See every corner of your property, day and night.</h1>
        <p class="lead">We design the camera layout, run the cabling, configure the NVR and hand you a system that actually covers your blind spots — with remote viewing set up before we leave.</p>
        <div class="hero-ctas">
          <a href="#contact" class="btn btn-primary">Get a Free Survey</a>
          <a href="#cameras" class="btn btn-ghost">See Camera Types</a>
        </div>
      </div>

      <div class="hero-visual">
        <svg viewBox="0 0 420 320" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <rect x="10" y="10" width="400" height="300" rx="14" fill="rgba(255,255,255,0.04)" stroke="rgba(255,255,255,0.12)"/>
          <g id="camGroup">
            <rect x="30" y="50" width="46" height="26" rx="5" fill="#0F3A64" stroke="#2E7BD6" stroke-width="1.5"/>
            <circle cx="76" cy="63" r="7" fill="#0B2A4A" stroke="#6AA9F5" stroke-width="1.5"/>
            <circle cx="76" cy="63" r="2.5" fill="#6AA9F5"/>
          </g>
          <path id="scanCone" d="M76 63 L 340 20 L 340 220 Z" fill="url(#scanGrad)" opacity="0.35"/>
          <defs>
            <linearGradient id="scanGrad" x1="0" y1="0" x2="1" y2="0">
              <stop offset="0%" stop-color="#2E7BD6" stop-opacity="0.5"/>
              <stop offset="100%" stop-color="#2E7BD6" stop-opacity="0"/>
            </linearGradient>
          </defs>
          <g fill="#6AA9F5" opacity="0.8">
            <rect x="220" y="120" width="18" height="30" rx="2"/>
            <rect x="270" y="150" width="18" height="30" rx="2"/>
            <rect x="180" y="180" width="18" height="30" rx="2"/>
          </g>
          <circle cx="76" cy="63" r="4" fill="#ff4d4d">
            <animate attributeName="opacity" values="1;0.2;1" dur="1.6s" repeatCount="indefinite"/>
          </circle>
        </svg>
      </div>
    </div>

    <div class="stats-bar">
      <div class="wrap stats-grid">
        <div class="stat"><b>24/7</b><span>Remote monitoring setup</span></div>
        <div class="stat"><b>Fixed</b><span>Itemised camera quotes</span></div>
        <div class="stat"><b>1 visit</b><span>Survey to install, fast</span></div>
      </div>
    </div>
  </section>

  <!-- CAMERA TYPES -->
  <section id="cameras">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="kicker">Camera Types</div>
        <h2>The right camera for the right spot</h2>
        <p>We mix camera types on a single site based on distance, lighting and what needs covering.</p>
      </div>
      <div class="feature-strip stagger">
        <div class="feature-item">
          <div class="fi cam-dome"></div>
          <h4>Dome Cameras</h4>
          <p>Discreet, vandal-resistant — good for indoor ceilings and reception areas.</p>
        </div>
        <div class="feature-item">
          <div class="fi cam-bullet"></div>
          <h4>Bullet Cameras</h4>
          <p>Long-range, visible deterrent — ideal for gates, driveways and perimeters.</p>
        </div>
        <div class="feature-item">
          <div class="fi cam-ptz"></div>
          <h4>PTZ Cameras</h4>
          <p>Pan-tilt-zoom for large open areas that need active monitoring.</p>
        </div>
        <div class="feature-item">
          <div class="fi cam-nvr"></div>
          <h4>NVR &amp; Storage</h4>
          <p>Network recorders sized to how many days of footage you need kept.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- PROCESS -->
  <section id="process" class="bg-tint">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="kicker">How it works</div>
        <h2>Survey to live footage, in five steps</h2>
      </div>
      <div class="process stagger">
        <div class="step"><span class="num">1</span><h4>Site survey</h4><p>We walk the property and mark blind spots and entry points.</p></div>
        <div class="step"><span class="num">2</span><h4>Camera layout</h4><p>A coverage plan showing where every camera points.</p></div>
        <div class="step"><span class="num">3</span><h4>Installation</h4><p>Mounting, cabling and NVR setup on-site.</p></div>
        <div class="step"><span class="num">4</span><h4>Testing</h4><p>Every camera checked for angle, focus and night vision.</p></div>
        <div class="step"><span class="num">5</span><h4>Remote access</h4><p>Live view configured on your phone before we leave.</p></div>
      </div>
    </div>
  </section>

  <!-- PRICING -->
  <section id="pricing">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="kicker">Pricing</div>
        <h2>Simple packages, itemised quotes</h2>
        <p>Every quote breaks out cameras, cabling, NVR and labour separately.</p>
      </div>
      <div class="pricing-grid stagger">
        <div class="price-card">
          <h4>Starter</h4>
          <div class="price">4 Cameras</div>
          <p>Home or small shop coverage with 1 month storage.</p>
          <a href="#contact" class="btn btn-outline">Request Quote</a>
        </div>
        <div class="price-card featured">
          <h4>Business</h4>
          <div class="price">8 Cameras</div>
          <p>Full office/warehouse coverage, 15-day storage, remote app.</p>
          <a href="#contact" class="btn btn-primary">Request Quote</a>
        </div>
        <div class="price-card">
          <h4>Enterprise</h4>
          <div class="price">16+ Cameras</div>
          <p>Multi-zone with PTZ and central monitoring dashboard.</p>
          <a href="#contact" class="btn btn-outline">Request Quote</a>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT FORM (PHP handled) -->
  <section id="contact" class="bg-tint">
    <div class="wrap">
      <div class="section-head reveal">
        <div class="kicker">Get in touch</div>
        <h2>Request a free site survey</h2>
      </div>

      <div class="contact-grid reveal">
        <form class="contact-card" id="quoteForm" action="contact.php" method="POST">
          <div class="form-row">
            <label>Name</label>
            <input type="text" name="name" required>
          </div>
          <div class="form-row">
            <label>Phone</label>
            <input type="tel" name="phone" required>
          </div>
          <div class="form-row">
            <label>Email</label>
            <input type="email" name="email" required>
          </div>
          <div class="form-row">
            <label>Property type &amp; rough camera count</label>
            <textarea name="message" rows="4" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary" style="width:100%">Send Request</button>
          <div id="formStatus" class="form-status"></div>
        </form>

        <div class="contact-card">
          <div class="contact-item">
            <div class="ic">☎</div>
            <div><div class="label">Phone</div><div class="value"><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></div></div>
          </div>
          <div class="contact-item">
            <div class="ic">✉</div>
            <div><div class="label">Email</div><div class="value"><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></div></div>
          </div>
          <div class="contact-item">
            <div class="ic">⏰</div>
            <div><div class="label">Hours</div><div class="value">Mon–Sat, 9:30am – 6:30pm</div></div>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<footer>
  <div class="wrap footer-row">
    <a href="#top" class="logo"><span class="mark"></span><?php echo $siteName; ?></a>
    <div class="footer-copy">© <?php echo date("Y"); ?> <?php echo $siteName; ?>. All rights reserved.</div>
  </div>
</footer>

<script src="assets/script.js"></script>
</body>
</html>
