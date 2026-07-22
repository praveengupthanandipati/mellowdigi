<?php
$siteData = json_decode(file_get_contents(__DIR__ . '/data/site-data.json'), true);

$pageTitle       = 'Packaging Design | MellowDigi';
$pageDescription = 'MellowDigi designs packaging that bridges your brand and your customers — sensory, strategic and functional packaging design built around your visual identity.';
$pageKeywords    = 'packaging design, product packaging design, brand packaging, packaging design agency, MellowDigi packaging services';
$pageUrl         = 'https://www.mellowdigi.com/packaging-design.php';
include __DIR__ . '/components/header.php';

$offers = [
    ['icon' => 'pencil', 'accent' => '#2BACE2', 'title' => 'Packaging Concept &amp; Structure', 'description' => 'From first sketch to structural form, packaging that protects your product and stands out on the shelf.'],
    ['icon' => 'palette', 'accent' => '#3DB54A', 'title' => 'Visual Identity Extension', 'description' => 'Your logo, color palette and typography carried through onto every package, so it feels unmistakably you.'],
    ['icon' => 'printer', 'accent' => '#F99E1F', 'title' => 'Materials &amp; Finishes', 'description' => 'Textures and finishes chosen to convey the right feel — refined, rugged or somewhere in between.'],
    ['icon' => 'box', 'accent' => '#8B5CF6', 'title' => 'Functional &amp; Protective Design', 'description' => 'Packaging built to do its job first — protect the product — then present it beautifully.'],
    ['icon' => 'megaphone', 'accent' => '#F43F5E', 'title' => 'Brand-Aligned Packaging Strategy', 'description' => 'Packaging designed to work with your wider marketing and brand strategy, not as an afterthought.'],
];

$reasons = [
    ['title' => 'Small, Dedicated Team', 'description' => 'A small team of designers who care about getting your packaging right, not a factory churning out templates.'],
    ['title' => 'Quality Over Quantity', 'description' => "We'd rather take on fewer projects and do exceptional work than spread ourselves thin."],
    ['title' => 'Sensory-Led Design', 'description' => 'We think about how packaging feels in the hand, not just how it looks in a render.'],
    ['title' => 'Startup Friendly', 'description' => 'We understand small budgets and big dreams.'],
    ['title' => 'End-to-End Support', 'description' => "From concept to production-ready files, we're with you at every step."],
];

$process = [
    ['step' => '01', 'title' => 'Discovery', 'description' => "We dive into your brand's visual identity, story and product needs."],
    ['step' => '02', 'title' => 'Concept Sketching', 'description' => 'We sketch structural and visual directions for your packaging.'],
    ['step' => '03', 'title' => 'Sensory Exploration', 'description' => "We explore materials, textures and finishes that fit your brand's feel."],
    ['step' => '04', 'title' => 'Design Refinement', 'description' => 'We refine the strongest concept into production-ready packaging design.'],
    ['step' => '05', 'title' => 'Handover &amp; Production Support', 'description' => 'We package every file and spec you need to go to print.'],
];

$audiences = ['Startups & New Businesses', 'Small & Medium Enterprises', 'E-Commerce Brands', 'Product-Based Businesses', 'Businesses Rebranding'];

$heroIcons = [
    ['icon' => 'box', 'label' => 'Packaging Design'],
];
?>

     <!-- main -->
     <main>
        <!-- banner-->
         <section class="banner">
            <div class="container-fluid nav-shell">
                <div class="row align-items-center banner-hero">
                    <div class="col-lg-6">
                        <p class="eyebrow" data-animate>Packaging Design</p>
                        <h1 class="banner-title" data-animate data-delay="120">
                            Packaging that <span class="text-gradient-brand">tells your brand's story</span>
                        </h1>
                        <p class="banner-text max-width-700" data-animate data-delay="220">
                            Packaging is more than a container — it's a touchpoint that bridges your
                            brand and your customers. We treat packaging as an extension of your visual
                            identity, so every unboxing moment reinforces your story and values.
                        </p>
                        <p class="banner-text max-width-700" data-animate data-delay="260">
                            We start with your visual identity — logo, color, brand collateral — and
                            carry it through the entire customer journey, from the first glance on a
                            shelf to the moment the package is opened.
                        </p>
                        <a href="contact.html" class="btn-hero-cta" data-animate data-delay="320">Let's Design Your Packaging</a>
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
                                <span class="cycle-label"><?php echo $esc($slide['label']); ?></span>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ banner-->

         <!-- our approach -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Our Approach</p>
                        <h2 class="section-heading">Design that appeals to more than the eyes</h2>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="why-card why-card-intro" style="--accent:#2BACE2" data-animate>
                            <h3>Sensory &amp; Emotional Branding</h3>
                            <p>Great packaging appeals to more than just the eyes. We think about tactile
                            materials and visual cues that forge a stronger emotional connection with
                            whoever's holding the product — the right texture can make something feel
                            more considered, more valuable, more you.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="why-card" style="--accent:#3DB54A" data-animate data-delay="90">
                            <h3>Strategic &amp; Functional Design</h3>
                            <p>We design with purpose — packaging that protects, displays and
                            communicates. Whatever your product needs, from shelf presence to shipping
                            durability, the solution is built around it, not bolted on afterward.</p>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ our approach -->

         <!-- what we offer -->
         <section class="popular-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">What We Offer</p>
                        <h2 class="section-heading">Packaging design, as part of your brand system</h2>
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
                    <img src="img/startup.jpg" alt="MellowDigi packaging design team at work">
                </div>
                <div class="col-lg-6 startup-content">
                    <div class="startup-content-inner">
                        <h2 class="startup-heading" data-animate>Why choose MellowDigi?</h2>
                        <h3 class="startup-subheading" data-animate data-delay="80">Packaging built around your brand, not a template</h3>
                        <p class="startup-text" data-animate data-delay="160">
                            MellowDigi is a small, dedicated team of designers focused on creative
                            quality over volume. We'd rather partner closely on fewer packaging
                            projects and get every detail right than take on more than we can give
                            proper attention to.
                        </p>
                        <ul class="startup-checklist" data-animate data-delay="220">
                            <?php foreach ($reasons as $reason): ?>
                            <li><strong><?php echo $esc($reason['title']); ?></strong> — <?php echo $esc($reason['description']); ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <a href="contact.html" class="btn-hero-cta" data-animate data-delay="280">Let's Talk Packaging</a>
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
                        <h2 class="section-heading">Five steps from concept to production-ready</h2>
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
                        <h2 class="section-heading">Built for products that deserve to stand out</h2>
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
                        <p class="eyebrow">Let's Design Your Packaging</p>
                        <h2 class="section-heading">The box is the first thing they hold. Make it count.</h2>
                        <p class="founder-bio">
                            Whether you need a first packaging concept or a full redesign, MellowDigi
                            is here to help.
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
