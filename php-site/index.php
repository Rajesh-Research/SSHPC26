<?php require __DIR__ . '/data.php'; ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Join the International Sports Science & Human Performance Conclave 2026 at Woxsen University, Hyderabad, exploring nutrition, clean sport, EMG, sports technology and research.">
  <meta name="keywords" content="Sports Science Conference India, Human Performance Conference, Sports Nutrition Workshop, Anti-Doping Workshop India, EMG Workshop India, Sports Technology Conference, Woxsen University Sports Science">
  <meta name="theme-color" content="#071b1d">
  <title><?= e($event['name']) ?> | Woxsen University</title>
  <link rel="icon" href="assets/images/favicon.svg" type="image/svg+xml">
  <link rel="preload" href="assets/images/athlete-hero.webp" as="image" type="image/webp">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<a class="skip-link" href="#main">Skip to content</a>
<header class="site-header">
  <a class="brand" href="#home" aria-label="Woxsen University home"><img src="assets/images/logos/woxsen.png" alt="Woxsen University"></a>
  <nav class="desktop-nav" aria-label="Main navigation">
    <a href="#about">About</a><a href="#tracks">Tracks</a><a href="#schedule">Schedule</a><a href="#research">Poster Challenge</a><a href="#speakers">Speakers</a><a href="#audience">Who Can Attend</a><a href="#venue">Venue</a>
  </nav>
  <a class="button header-cta" href="<?= e($event['registration_url']) ?>" target="_blank" rel="noopener">Register now <span>↗</span></a>
  <details class="mobile-menu"><summary aria-label="Open navigation"><span></span><span></span><span></span></summary><nav aria-label="Mobile navigation"><a href="#about">About</a><a href="#tracks">Tracks</a><a href="#schedule">Schedule</a><a href="#research">Poster Challenge</a><a href="#speakers">Speakers</a><a href="#audience">Who Can Attend</a><a href="<?= e($event['registration_url']) ?>" target="_blank" rel="noopener">Registration</a><a href="#venue">Venue</a><a href="#contact">Contact</a></nav></details>
</header>

<main id="main">
  <section class="hero" id="home">
    <div class="hero-grid"></div><div class="hero-overlay"></div>
    <div class="hero-content">
      <p class="eyebrow">The science behind the next level</p>
      <h1>International<br>Sports Science<br><span>&amp; Human Performance</span><br>Conclave <em>2026</em></h1>
      <p class="hero-subtitle"><?= e($event['subtitle']) ?></p>
      <p class="theme"><?= e($event['theme']) ?></p>
      <div class="event-meta"><span><b>25–26</b> November 2026</span><span><b>Woxsen University</b> Hyderabad, India</span></div>
      <div class="actions"><a class="button" href="<?= e($event['registration_url']) ?>" target="_blank" rel="noopener">Register now <span>↗</span></a><a class="button button-ghost" href="#about">Explore the conclave <span>↓</span></a></div>
    </div>
    <div class="signal-card" aria-hidden="true"><div><span>Surface EMG</span><span>Human performance</span></div><svg viewBox="0 0 800 130" role="img"><path class="grid-line" d="M0 32H800M0 65H800M0 98H800M100 0V130M200 0V130M300 0V130M400 0V130M500 0V130M600 0V130M700 0V130"/><path class="signal-line" d="M0 65H85l9-8 9 15 13-12 18 7 15-5 14 22 12-48 12 75 11-90 14 103 14-116 16 120 16-91 19 59 17-22 21 13 28-6h58l13-19 15 34 14-56 15 89 16-110 17 126 17-122 18 105 17-73 19 43 22-20 30 5h63l11-12 13 24 14-40 16 61 17-78 18 91 18-72 20 49 22-25 30 7H800"/></svg><small>Illustrative signal · not clinical data</small></div>
    <p class="hero-foot">02 days <i></i> 05 pillars <i></i> International exchange <i></i> Hands-on learning</p>
  </section>

  <section class="partner-strip" aria-label="Organiser and collaborating organisations">
    <?php foreach ($partners as $partner): ?><article class="partner"><span><?= e(strtoupper($partner['status'])) ?></span><img src="<?= e($partner['logo']) ?>" alt="<?= e($partner['name']) ?>"></article><?php endforeach; ?>
  </section>

  <section class="section intro" id="about">
    <div><p class="eyebrow dark-label">The conclave / 2026</p><h2>Where sports science meets <span>human performance.</span></h2></div>
    <div class="intro-copy"><p class="lead">Better performance begins with better understanding.</p><p>Bringing together students, researchers, coaches, sports professionals, scientists, technology experts and international institutions for two days of learning, experimentation and meaningful exchange.</p><p>Explore how nutrition, clean sport, biomechanics, performance technology, innovation, research and global knowledge exchange can enhance athlete health and human performance.</p><p>Expert-led sessions, technical demonstrations, hands-on learning, research presentations and innovation showcases come together on one multidisciplinary platform.</p></div>
    <div class="stats"><div><strong>02</strong><span>Days of learning</span></div><div><strong>05</strong><span>Integrated pillars</span></div><div><strong>International</strong><span>Knowledge exchange</span></div><div><strong>Hands-on</strong><span>Technical exposure</span></div></div>
  </section>

  <section class="section impact"><p class="eyebrow dark-label">Built around real-world impact</p><h2>Beyond a conference.<br><span>A human performance experience.</span></h2><div class="feature-grid"><?php foreach ([['Clean sport','Anti-doping awareness, athlete responsibilities and ethical practice.'],['Sports nutrition','Evidence-based nutrition, recovery and supplementation awareness.'],['Performance technology','Explore muscle activation, movement and athlete assessment.'],['Research & innovation','Exchange ideas at the intersection of sport, science and technology.'],['Professional exposure','Connect with coaches, researchers and performance professionals.']] as $feature): ?><article><b>◆</b><h3><?= e($feature[0]) ?></h3><p><?= e($feature[1]) ?></p></article><?php endforeach; ?></div></section>

  <section class="section dark-section" id="tracks"><header class="section-head"><div><p class="eyebrow">Five pillars. Every dimension.</p><h2>Five integrated <span>experiences.</span></h2></div><p>From what fuels an athlete to global knowledge exchange. Explore performance science, research and technology from every angle.</p></header><div class="track-grid"><?php foreach ($tracks as $i => $track): ?><article class="track-card"><div class="track-visual"><span>0<?= $i + 1 ?></span><i></i></div><div class="track-body"><small><?= e($track['label']) ?></small><h3><?= e($track['title']) ?></h3><p><?= e($track['description']) ?></p><details><summary>Explore track <span>+</span></summary><ul><?php foreach ($track['topics'] as $topic): ?><li><?= e($topic) ?></li><?php endforeach; ?></ul></details><a href="<?= e($event['registration_url']) ?>" target="_blank" rel="noopener">Apply for this track <span>↗</span></a></div></article><?php endforeach; ?></div></section>

  <section class="section emg-section"><div><p class="eyebrow">The featured masterclass</p><h2>From muscle signals<br>to <span>performance insights.</span></h2><p>Modern sport increasingly depends on objective performance data. Discover how surface electromyography brings muscle activation into focus.</p><p>Explore applications in movement assessment, strength and conditioning, rehabilitation and human-performance research.</p><a class="button" href="<?= e($event['registration_url']) ?>" target="_blank" rel="noopener">Apply for the masterclass ↗</a></div><div class="emg-panel" aria-label="Illustrative EMG signal"><span>Signal explorer / sEMG concept visual</span><svg viewBox="0 0 800 150"><path class="grid-line" d="M0 37H800M0 75H800M0 112H800M100 0V150M200 0V150M300 0V150M400 0V150M500 0V150M600 0V150M700 0V150"/><path class="signal-line" d="M0 76H70l8-7 7 12 8-8 22 4 15-3 10 15 9-35 8 48 7-70 9 94 8-109 9 116 11-90 10 49 14-27 12 15 23-4h55l12-15 10 27 11-44 10 72 10-97 12 121 12-135 14 123 12-92 14 63 12-39 14 22 17-6h67l10-9 11 19 11-28 11 47 12-79 13 99 13-111 15 122 13-100 14 62 15-37 15 20 15-5h90"/></svg><div class="signal-stages"><span><b>01</b>Muscle activation</span><span><b>02</b>Signal capture</span><span><b>03</b>Movement analysis</span><span><b>04</b>Performance interpretation</span></div><small>Educational illustration. Not a medical measurement or diagnosis.</small></div></section>

  <section class="section research" id="research"><div><p class="eyebrow dark-label">Research poster & innovation challenge</p><h2>Present.<br>Discuss.<br><span>Innovate.</span></h2><p>The National Sports Science Research Poster & Innovation Challenge provides an interdisciplinary platform for students, scholars and young professionals to showcase research addressing contemporary challenges in sport, health and human performance.</p><div class="recognition"><small>Proposed recognition</small><p><b>₹10,000</b> Best Research Poster</p><p><b>₹5,000</b> Best Student Innovation</p></div><span class="button disabled" aria-disabled="true">Submissions opening soon</span><p class="fine">Submission guidelines and important dates will be announced shortly.</p></div><div class="research-list"><?php foreach ($research as $i => $category): ?><article><span>0<?= $i + 1 ?></span><h3><?= e($category) ?></h3><b>↗</b></article><?php endforeach; ?></div></section>

  <section class="section programme" id="schedule"><header class="section-head light-head"><div><p class="eyebrow dark-label">The programme</p><h2>Two days of science, technology & performance.</h2></div><p>Tentative programme</p></header><div class="days"><?php foreach ($programme as $day): ?><article class="day"><header><span><?= e($day['day']) ?></span><h3><?= e($day['date']) ?></h3><p><?= e($day['theme']) ?></p></header><ol><?php foreach ($day['sessions'] as $session): ?><li><span></span><?= e($session) ?></li><?php endforeach; ?></ol></article><?php endforeach; ?></div></section>

  <section class="section speakers" id="speakers"><header class="section-head"><div><p class="eyebrow">Ideas from the people behind the science</p><h2>Learn from experts.</h2></div><p>Conversations connecting academic thinking with the realities of modern sport.</p></header><div class="speaker-grid"><?php foreach (['Sports Science','Human Performance','Sports Technology'] as $speaker): ?><article><div class="speaker-mark">◎</div><small><?= e(strtoupper($speaker)) ?></small><h3>Expert speakers &amp;<br>resource persons</h3><span>To be announced</span></article><?php endforeach; ?></div></section>

  <section class="section audience" id="audience"><p class="eyebrow dark-label">One platform. Many perspectives.</p><h2>Built for the future of sport.</h2><p>If your work, study or ambition connects to human performance, you belong in this conversation.</p><div class="audience-grid"><?php foreach ($audiences as $audience): ?><div><span>◇</span><?= e($audience) ?></div><?php endforeach; ?></div><div class="takeaways"><h3>What you take back</h3><div><?php foreach ($gains as $gain): ?><p><span>✓</span><?= e($gain) ?></p><?php endforeach; ?></div><small>Participation / workshop certification as applicable. Certification details will be communicated to registered participants.</small></div></section>

  <section class="section registration dark-section" id="registration"><header class="section-head"><div><p class="eyebrow">Be part of what’s next</p><h2>Join the conclave.</h2></div><p><?= e($event['date']) ?><br><?= e($event['venue']) ?>, <?= e($event['location']) ?><br><span class="pill">Registration now open</span></p></header><div class="registration-grid"><?php foreach ($registration as $i => $category): ?><article><small>0<?= $i + 1 ?> / Registration</small><h3><?= e($category['name']) ?></h3><strong><?= e($category['fee']) ?></strong><p><?= e($category['details']) ?></p><a href="<?= e($event['registration_url']) ?>" target="_blank" rel="noopener">Register now <span>↗</span></a></article><?php endforeach; ?></div><p class="fine">Fees and inclusions are based on the current registration model and may be updated by the organising team.</p></section>

  <section class="section industry"><div><p class="eyebrow dark-label">Sports technology & industry</p><h2>Showcase the future of sports technology.</h2><p>Organisations working in wearables, biomechanics, analytics, athlete monitoring, fitness, rehabilitation and human-performance solutions are invited to engage through demonstrations and knowledge exchange.</p><a class="button dark-button" href="<?= e($event['registration_url']) ?>" target="_blank" rel="noopener">Express interest / Apply ↗</a></div><div class="radar" aria-hidden="true"><span>SPORT × SCIENCE × INNOVATION</span><i></i><b>+</b></div></section>

  <section class="section venue" id="venue"><div class="campus-gallery"><figure><img src="assets/images/campus/woxsen-campus.png" alt="Woxsen University campus entrance"><figcaption>A destination for new thinking.</figcaption></figure><figure><img src="assets/images/campus/sports-facilities.png" alt="Woxsen University illuminated sports facilities"><figcaption>Sports facilities at Woxsen University</figcaption></figure></div><div><p class="eyebrow dark-label">The venue</p><h2>Woxsen University.<br><span>Hyderabad, India.</span></h2><p>Two days of interdisciplinary learning, research and knowledge exchange at Woxsen University.</p><p>Campus arrival instructions, travel guidance and accommodation details will be communicated to registered participants.</p><a class="button dark-button" href="<?= e($event['map_url']) ?>" target="_blank" rel="noopener">Get directions ↗</a></div></section>

  <section class="section faq"><div><p class="eyebrow dark-label">Before you join</p><h2>A few things to know.</h2></div><div><?php foreach ($faqs as $faq): ?><details><summary><?= e($faq[0]) ?><span>+</span></summary><p><?= e($faq[1]) ?></p></details><?php endforeach; ?></div></section>

  <section class="section contact" id="contact"><div><p class="eyebrow dark-label">Let’s start a conversation</p><h2>Connect with the organising team.</h2><p>For participation, research, institutional groups and industry enquiries.</p><dl><div><dt>Event coordinator</dt><dd>To be announced</dd></div><div><dt>Academic coordinator</dt><dd>To be announced</dd></div><div><dt>Email / Phone</dt><dd>Contact details coming soon</dd></div><div><dt>Woxsen University</dt><dd>Hyderabad, India</dd></div></dl></div><aside><p class="eyebrow dark-label">Ready to participate?</p><h3>Use the official registration form for delegate, research and industry participation.</h3><a class="button dark-button" href="<?= e($event['registration_url']) ?>" target="_blank" rel="noopener">Open registration form ↗</a></aside></section>

  <section class="closing"><p class="eyebrow">The next level starts with understanding</p><h2>The future of sport<br>is <span>scientific.</span></h2><p>Join researchers, students, coaches, professionals and innovators shaping the next generation of human performance.</p><div class="actions"><a class="button" href="<?= e($event['registration_url']) ?>" target="_blank" rel="noopener">Register now ↗</a><a class="button button-ghost" href="#schedule">Explore programme ↓</a></div><small><?= e(strtoupper($event['date'])) ?> · WOXSEN UNIVERSITY, HYDERABAD</small></section>
</main>

<footer><div class="footer-main"><a class="brand" href="#home"><img src="assets/images/logos/woxsen.png" alt="Woxsen University"></a><p><?= e($event['name']) ?><br><?= e($event['date']) ?><br><?= e($event['venue']) ?>, <?= e($event['location']) ?></p><nav><a href="#about">About</a><a href="#tracks">Tracks</a><a href="#schedule">Programme</a><a href="#research">Poster Challenge</a><a href="<?= e($event['registration_url']) ?>" target="_blank" rel="noopener">Registration</a><a href="#venue">Venue</a><a href="#contact">Contact</a></nav></div><div class="footer-bottom"><span>© 2026 International Sports Science & Human Performance Conclave</span><span>Privacy · Terms</span></div></footer>
</body>
</html>

