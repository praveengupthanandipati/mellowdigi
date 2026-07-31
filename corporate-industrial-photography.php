<?php
$siteData = json_decode(file_get_contents(__DIR__ . '/data/site-data.json'), true);

$pageTitle       = 'Corporate & Industrial Photography | MellowDigi';
$pageDescription = 'Your brand deserves more than stock photos. MellowDigi creates authentic corporate and industrial photography that builds trust, from leadership headshots to manufacturing floors.';
$pageKeywords    = 'corporate photography, industrial photography, business headshots, manufacturing photography, workplace photography, B2B photography, technical photography, MellowDigi corporate';
$pageUrl         = 'https://www.mellowdigi.com/corporate-industrial-photography.php';
include __DIR__ . '/components/header.php';

$offerings = [
    ['icon' => 'idcard', 'accent' => '#2BACE2', 'title' => 'Corporate Headshots &amp; Team Portraits', 'description' => 'Consistent, professional images for team pages, LinkedIn and annual reports.'],
    ['icon' => 'layout', 'accent' => '#3DB54A', 'title' => 'Office &amp; Workplace Photography', 'description' => 'Showcase your culture and environment to attract talent and impress investors.'],
    ['icon' => 'box', 'accent' => '#F99E1F', 'title' => 'Industrial &amp; Manufacturing Documentation', 'description' => 'Capturing processes, machinery and facilities for training, safety manuals and promotional materials.'],
    ['icon' => 'search', 'accent' => '#8B5CF6', 'title' => 'Product &amp; Technical Photography', 'description' => 'Precision imaging for scientific instruments, hardware and technical products.'],
    ['icon' => 'network', 'accent' => '#F43F5E', 'title' => 'Event &amp; Conference Coverage', 'description' => 'Documenting company milestones, conferences and networking events.'],
];

$payoffs = [
    ['title' => 'Builds Trust', 'description' => 'Real faces and real facilities are more engaging than generic models.'],
    ['title' => 'Boosts SEO', 'description' => 'Original images keep visitors on your site longer, which search engines love.'],
    ['title' => 'Repurposes Content', 'description' => 'One shoot provides endless assets for LinkedIn, proposals and your website.'],
];

$heroIcons = [
    ['icon' => 'briefcase', 'label' => 'Corporate &amp; Industrial Photography'],
];
?>

     <!-- main -->
     <main>
        <!-- banner-->
         <section class="banner">
            <div class="container-fluid nav-shell">
                <div class="row align-items-center banner-hero">
                    <div class="col-lg-6">
                        <p class="eyebrow" data-animate>Corporate &amp; Industrial Photography</p>
                        <h1 class="banner-title" data-animate data-delay="120">
                            Your brand deserves more than <span class="text-gradient-brand">stock photos</span>
                        </h1>
                        <p class="banner-text max-width-700" data-animate data-delay="220">
                            In the B2B world, trust is your most valuable currency, and your imagery
                            is the first handshake. But generic stock photos and grainy smartphone
                            shots don't tell the story of your expertise, your people or your
                            precision.
                        </p>
                        <p class="banner-text max-width-700" data-animate data-delay="260">
                            At MellowDigi, we create visuals that work as hard as you do. We help you
                            close the gap between how your business is and how it appears.
                        </p>
                        <div class="d-flex flex-wrap gap-3" data-animate data-delay="320">
                            <a href="portfolio.html" class="btn-hero-cta">See Our Portfolio</a>
                            <a href="contact.php" class="btn-hero-cta">Stop Looking Like Everyone Else</a>
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <div class="service-icon-cycle single-icon" data-animate data-delay="180">
                            <svg width="0" height="0" style="position:absolute" aria-hidden="true">
                                <defs>
                                    <linearGradient id="brandIconGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" stop-color="#2BACE2"/>
                                        <stop offset="50%" stop-color="#3DB54A"/>
                                        <stop offset="100%" stop-color="#F99E1F"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                            <?php foreach ($heroIcons as $i => $slide): ?>
                            <div class="icon-slide<?php echo $i === 0 ? ' is-default' : ''; ?>" style="--slot:<?php echo $i; ?>">
                                <svg class="cycle-icon" viewBox="0 0 24 24" fill="none" stroke="url(#brandIconGradient)" stroke-width="0.2" stroke-linecap="round" stroke-linejoin="round"><?php echo $siteData['icons'][$slide['icon']]; ?></svg>
                                <span class="cycle-label"><?php echo $slide['label']; ?></span>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ banner-->

         <!-- how we build your visual foundation -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Here's How We Build Your Visual Foundation</p>
                        <h2 class="section-heading">From the boardroom to the factory floor</h2>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="why-card why-card-intro" style="--accent:#2BACE2" data-animate>
                            <h3>Corporate Photography</h3>
                            <p>From polished leadership headshots to candid team moments, we capture
                            the authentic culture that attracts top talent and builds stakeholder
                            confidence.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="why-card" style="--accent:#3DB54A" data-animate data-delay="90">
                            <h3>Industrial &amp; Technical Photography</h3>
                            <p>We specialize in manufacturing plants, labs and engineering
                            environments. We understand the safety protocols and can document complex
                            machinery and processes with clarity and accuracy &mdash; often in
                            hazardous or low-light conditions.</p>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ how we build your visual foundation -->

         <!-- key service offerings -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Key Service Offerings</p>
                        <h2 class="section-heading">What we shoot for growing businesses</h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
                    <?php foreach ($offerings as $i => $offering): ?>
                    <div class="col" data-animate data-delay="<?php echo ($i % 3) * 80; ?>">
                        <div class="popular-service-card" style="--accent:<?php echo $esc($offering['accent']); ?>">
                            <span class="popular-service-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><?php echo $siteData['icons'][$offering['icon']]; ?></svg>
                            </span>
                            <h6><?php echo $offering['title']; ?></h6>
                            <p><?php echo $offering['description']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ key service offerings -->

         <!-- why it pays off -->
         <section class="home_startup">
            <div class="row g-0 align-items-stretch">
                <div class="col-lg-6 startup-image" data-animate>
                    <img src="img/startup.jpg" alt="MellowDigi corporate photography team on location">
                </div>
                <div class="col-lg-6 startup-content">
                    <div class="startup-content-inner">
                        <h2 class="startup-heading" data-animate>What a professional shoot does for you</h2>
                        <h3 class="startup-subheading" data-animate data-delay="80">More than a photoshoot</h3>
                        <p class="startup-text" data-animate data-delay="160">
                            Authentic, professional imagery builds trust faster than any tagline. It
                            shows you have high standards, makes your team look approachable and
                            proves you invest in quality.
                        </p>
                        <ul class="startup-checklist" data-animate data-delay="220">
                            <?php foreach ($payoffs as $payoff): ?>
                            <li><strong><?php echo $esc($payoff['title']); ?></strong> &mdash; <?php echo $esc($payoff['description']); ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <a href="contact.php" class="btn-hero-cta" data-animate data-delay="280">Let's Talk Corporate Photography</a>
                    </div>
                </div>
            </div>
         </section>
         <!--/ why it pays off -->

         <!-- cta -->
         <section class="founder-section">
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row align-items-center g-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Ready to Elevate Your Brand?</p>
                        <h2 class="section-heading">Think beyond just a photoshoot. Think of it as a visual asset library that powers your website, social media, marketing collateral and proposals for years to come.</h2>
                        <ul class="footer-contact">
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><?php echo $siteData['icons']['call']; ?></svg>
                                <span>Call us: +91 77999 71112</span>
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><?php echo $siteData['icons']['mail']; ?></svg>
                                <span>Email us: info@mellowdigi.com</span>
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><?php echo $siteData['icons']['webmobile']; ?></svg>
                                <span>Visit us: www.mellowdigi.com</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-5 text-lg-end" data-animate data-delay="150">
                        <p class="founder-bio">Ready to start?</p>
                        <div class="d-flex flex-wrap gap-3 justify-content-lg-end">
                            <a href="contact.php" class="btn-hero-cta">Inquire Now</a>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ cta -->
        <?php include __DIR__ . '/components/enquiry-form.php'; ?>
     </main>
     <!--/ main -->

<?php include __DIR__ . '/components/footer.php'; ?>
