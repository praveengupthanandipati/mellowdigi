<?php
$siteData = json_decode(file_get_contents(__DIR__ . '/data/site-data.json'), true);

$pageTitle       = 'Logo Design & Visual Systems | MellowDigi';
$pageDescription = 'MellowDigi designs distinctive logos and complete visual identity systems — typography, color, iconography and style guides that keep your brand consistent everywhere it shows up.';
$pageKeywords    = 'logo design, visual identity system, brand visual system, logo designer, style guide design, MellowDigi logo design services';
$pageUrl         = 'https://www.mellowdigi.com/logodesign-visualsystem.php';
include __DIR__ . '/components/header.php';

$offers = [
    ['icon' => 'pencil', 'accent' => '#2BACE2', 'title' => 'Logo Design', 'description' => 'Primary, secondary and icon marks that work at any size, from favicon to signage.'],
    ['icon' => 'palette', 'accent' => '#3DB54A', 'title' => 'Visual Identity System', 'description' => 'A unified system of color, imagery and iconography built around your logo.'],
    ['icon' => 'layout', 'accent' => '#F99E1F', 'title' => 'Typography & Grid System', 'description' => 'Font pairings, sizing scales and layout grids for consistent design.'],
    ['icon' => 'box', 'accent' => '#8B5CF6', 'title' => 'Icon & Graphic Library', 'description' => 'A custom set of icons and graphic elements that extend your brand.'],
    ['icon' => 'book', 'accent' => '#F43F5E', 'title' => 'Brand Style Guide', 'description' => 'Clear rules for logo usage, colors, fonts and imagery, so everything stays on-brand.'],
];

$reasons = [
    ['title' => 'Systems, Not Just Logos', 'description' => 'We design a complete visual language, not a single image.'],
    ['title' => 'Scalable By Design', 'description' => 'Every mark works from a tiny favicon to a giant hoarding.'],
    ['title' => 'Consistent Everywhere', 'description' => 'One visual system across web, print, social and packaging.'],
    ['title' => 'Startup Friendly', 'description' => 'We understand small budgets and big dreams.'],
    ['title' => 'End-to-End Support', 'description' => 'From first sketch to final files, we are with you at every step.'],
];

$process = [
    ['step' => '01', 'title' => 'Discovery', 'description' => 'We learn about your brand, audience and goals.'],
    ['step' => '02', 'title' => 'Concept Sketching', 'description' => 'We sketch multiple logo directions and visual concepts.'],
    ['step' => '03', 'title' => 'Digital Design', 'description' => 'We refine the strongest concept into a polished, vector logo.'],
    ['step' => '04', 'title' => 'System Building', 'description' => 'We extend the logo into a full system — color, type and icons.'],
    ['step' => '05', 'title' => 'Style Guide & Handover', 'description' => 'We package everything into a style guide with ready-to-use files.'],
];

$audiences = ['Startups & New Businesses', 'Small & Medium Enterprises', 'Businesses Rebranding', 'E-Commerce Brands', 'Service-Based Companies'];

$heroIcons = [
    ['icon' => 'pencil', 'label' => 'Logo Design'],
    ['icon' => 'palette', 'label' => 'Visual Identity'],
    ['icon' => 'layout', 'label' => 'Typography & Grid'],
    ['icon' => 'box', 'label' => 'Icon Library'],
    ['icon' => 'book', 'label' => 'Style Guide'],
];
?>

     <!-- main -->
     <main>
        <!-- banner-->
         <section class="banner">
            <div class="container-fluid nav-shell">
                <div class="row align-items-center banner-hero">
                    <div class="col-lg-6">
                        <p class="eyebrow" data-animate>Logo Design &amp; Visual Systems</p>
                        <h1 class="banner-title" data-animate data-delay="120">
                            One great mark. <span class="text-gradient-brand">A whole visual system.</span>
                        </h1>
                        <p class="banner-text max-width-700" data-animate data-delay="220">
                            Your logo is just the beginning. We design complete visual systems — color,
                            typography, iconography and imagery — so every touchpoint feels
                            unmistakably you.
                        </p>
                        <p class="banner-text max-width-700" data-animate data-delay="260">
                            From a single favicon to a full style guide, we build visual systems that
                            stay consistent as your business grows.
                        </p>
                        <a href="contact.html" class="btn-hero-cta" data-animate data-delay="320">Let's Design Your Logo</a>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <div class="service-icon-cycle" data-animate data-delay="180">
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
                                <span class="cycle-label"><?php echo $esc($slide['label']); ?></span>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ banner-->

         <!-- what we offer -->
         <section class="popular-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">What We Offer</p>
                        <h2 class="section-heading">Everything your visual identity needs</h2>
                    </div>
                </div>
                <div class="row g-4">
                    <?php foreach ($offers as $i => $offer): ?>
                    <div class="col-6 col-md-4 col-lg" data-animate data-delay="<?php echo $i * 80; ?>">
                        <div class="popular-service-card" style="--accent:<?php echo $esc($offer['accent']); ?>">
                            <span class="popular-service-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><?php echo $siteData['icons'][$offer['icon']]; ?></svg>
                            </span>
                            <h6><?php echo $esc($offer['title']); ?></h6>
                            <p><?php echo $esc($offer['description']); ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ what we offer -->

         <!-- why choose us -->
         <section class="home_startup">
            <div class="row g-0 align-items-stretch">
                <div class="col-lg-6 startup-image" data-animate>
                    <img src="img/startup.jpg" alt="MellowDigi logo and visual system design team at work">
                </div>
                <div class="col-lg-6 startup-content">
                    <div class="startup-content-inner">
                        <h2 class="startup-heading" data-animate>Why choose MellowDigi?</h2>
                        <h3 class="startup-subheading" data-animate data-delay="80">Visual systems built to grow with you</h3>
                        <p class="startup-text" data-animate data-delay="160">
                            We've designed logos for founders who arrived with a clear vision, and for
                            founders who just had a name and an idea. Either way, we turn it into a
                            complete visual system you can use everywhere.
                        </p>
                        <ul class="startup-checklist" data-animate data-delay="220">
                            <?php foreach ($reasons as $reason): ?>
                            <li><strong><?php echo $esc($reason['title']); ?></strong> — <?php echo $esc($reason['description']); ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <a href="contact.html" class="btn-hero-cta" data-animate data-delay="280">Let's Talk Visual Identity</a>
                    </div>
                </div>
            </div>
         </section>
         <!--/ why choose us -->

         <!-- our process -->
         <section class="who-we-are">
            <div class="bg-bubble bubble-blue" aria-hidden="true"></div>
            <div class="bg-bubble bubble-green" aria-hidden="true"></div>
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Our Process</p>
                        <h2 class="section-heading">Five steps from sketch to complete system</h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-5 g-4">
                    <?php foreach ($process as $i => $step): ?>
                    <div class="col" data-animate data-delay="<?php echo $i * 80; ?>">
                        <div class="process-step">
                            <span class="process-step-number"><?php echo $esc($step['step']); ?></span>
                            <h6><?php echo $esc($step['title']); ?></h6>
                            <p><?php echo $esc($step['description']); ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ our process -->

         <!-- who we help -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Who We Help</p>
                        <h2 class="section-heading">Built for brands that need to scale visually</h2>
                    </div>
                </div>
                <div class="audience-pills" data-animate data-delay="100">
                    <?php foreach ($audiences as $audience): ?>
                    <span class="audience-pill"><?php echo $esc($audience); ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ who we help -->

         <!-- cta -->
         <section class="founder-section">
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row align-items-center g-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Let's Build Your Visual Identity</p>
                        <h2 class="section-heading">Your logo is the seed. Let's grow the whole system.</h2>
                        <p class="founder-bio">
                            Whether you need a brand-new logo or a complete visual system refresh,
                            MellowDigi is here to help.
                        </p>
                        <ul class="footer-contact">
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><?php echo $siteData['icons']['call']; ?></svg>
                                <span>Call us: +91 98765 43210</span>
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><?php echo $siteData['icons']['mail']; ?></svg>
                                <span>Email us: hello@mellowdigi.com</span>
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><?php echo $siteData['icons']['webmobile']; ?></svg>
                                <span>Visit us: www.mellowdigi.com</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-5 text-lg-end" data-animate data-delay="150">
                        <p class="founder-bio">Ready to start?</p>
                        <a href="contact.html" class="btn-hero-cta">Contact Us Now</a>
                    </div>
                </div>
            </div>
         </section>
         <!--/ cta -->
     </main>
     <!--/ main -->

<?php include __DIR__ . '/components/footer.php'; ?>
