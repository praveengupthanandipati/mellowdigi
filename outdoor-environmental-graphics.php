<?php
$siteData = json_decode(file_get_contents(__DIR__ . '/data/site-data.json'), true);

$pageTitle       = 'Outdoor & Environmental Graphics | MellowDigi';
$pageDescription = 'MellowDigi designs outdoor environmental graphics — exterior signage, wayfinding, window graphics and more — that turn physical spaces into brand experiences.';
$pageKeywords    = 'outdoor environmental graphics, exterior signage, wayfinding design, window graphics, brand environments, MellowDigi outdoor graphics services';
$pageUrl         = 'https://www.mellowdigi.com/outdoor-environmental-graphics.php';
include __DIR__ . '/components/header.php';

$offers = [
    ['icon' => 'billboard', 'accent' => '#2BACE2', 'title' => 'Exterior Building Signage', 'description' => 'Facade graphics, dimensional letters and illuminated signs that announce your brand.'],
    ['icon' => 'pin', 'accent' => '#3DB54A', 'title' => 'Wayfinding &amp; Directional Systems', 'description' => 'Intuitive navigation graphics that make a space easier — and more on-brand — to move through.'],
    ['icon' => 'megaphone', 'accent' => '#F99E1F', 'title' => 'Event &amp; Promotional Graphics', 'description' => 'Temporary installations for exhibitions, activations and campaigns.'],
    ['icon' => 'box', 'accent' => '#8B5CF6', 'title' => 'Vehicle &amp; Fleet Graphics', 'description' => 'Mobile brand extensions that travel with you, wherever the vehicle goes.'],
    ['icon' => 'layout', 'accent' => '#F43F5E', 'title' => 'Monument &amp; Totem Signs', 'description' => 'High-impact statements at entrances and key locations.'],
    ['icon' => 'photostack', 'accent' => '#14B8A6', 'title' => 'Window Graphics', 'description' => 'Branded storefront treatments that attract and engage from the street.'],
];

$reasons = [
    ['title' => 'Strategy-Led Design', 'description' => 'Every graphic starts with real brand research and competitive analysis, not a template.'],
    ['title' => 'One Creative Team', 'description' => 'Designers, artists and strategists working together, so brand and space tell the same story.'],
    ['title' => 'Consistent Everywhere', 'description' => 'The same visual language across digital and physical touchpoints, from your website to your storefront.'],
    ['title' => 'Startup Friendly', 'description' => 'We understand small budgets and big dreams.'],
    ['title' => 'End-to-End Partnership', 'description' => 'From first concept to final installation, we stay involved at every step.'],
];

$process = [
    ['step' => '01', 'title' => 'Brand Discovery', 'description' => 'We research your brand, audience and positioning before sketching a single graphic.'],
    ['step' => '02', 'title' => 'Concept Design', 'description' => 'We translate your brand identity into exterior-ready visual concepts.'],
    ['step' => '03', 'title' => 'Material &amp; Durability Planning', 'description' => 'We choose substrates, finishes and lighting built to handle the elements.'],
    ['step' => '04', 'title' => 'Production-Ready Files', 'description' => 'We prepare fabrication-ready artwork and specifications for your installer.'],
    ['step' => '05', 'title' => 'Installation Support', 'description' => 'We stay involved through fabrication and installation to protect the final result.'],
];

$audiences = ['Retail &amp; Storefront Brands', 'Corporate Offices &amp; Campuses', 'Event &amp; Exhibition Organizers', 'Real Estate &amp; Property Developers', 'Startups &amp; New Businesses'];

$heroIcons = [
    ['icon' => 'billboard', 'label' => 'Outdoor &amp; Environmental Graphics'],
];
?>

     <!-- main -->
     <main>
        <!-- banner-->
         <section class="banner">
            <div class="container-fluid nav-shell">
                <div class="row align-items-center banner-hero">
                    <div class="col-lg-6">
                        <p class="eyebrow" data-animate>Outdoor &amp; Environmental Graphics</p>
                        <h1 class="banner-title" data-animate data-delay="120">
                            Brand experiences that <span class="text-gradient-brand">live beyond the screen</span>
                        </h1>
                        <p class="banner-text max-width-700" data-animate data-delay="220">
                            We see outdoor environmental graphics as more than signage — they're brand
                            experiences that turn physical spaces into immersive storytelling
                            environments. Our approach blends strategic brand thinking with creative
                            visual design to create outdoor graphics that captivate, inform and leave a
                            lasting impression.
                        </p>
                        <p class="banner-text max-width-700" data-animate data-delay="260">
                            We're a digital-first studio, but we know brands exist in the physical world
                            too. From building facades to wayfinding systems, every exterior graphic
                            should communicate your brand's story with clarity and impact.
                        </p>
                        <a href="contact.html" class="btn-hero-cta" data-animate data-delay="320">Let's Take Your Brand Outdoors</a>
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
                        <h2 class="section-heading">Every graphic starts with brand strategy</h2>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="why-card why-card-intro" style="--accent:#2BACE2" data-animate>
                            <h3>Strategic Brand-Driven Design</h3>
                            <p>We start with a deep dive into your brand's essence — research into your
                            unique selling proposition, your audience and your positioning. That
                            strategic foundation makes sure every outdoor graphic we design is
                            purposeful and aligned with your broader brand narrative.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="why-card" style="--accent:#3DB54A" data-animate data-delay="90">
                            <h3>Comprehensive Visual Identity</h3>
                            <p>Outdoor graphics are an extension of your brand identity, not a separate
                            thing. We develop visual cues customers recognize instantly, so material,
                            color and typography stay consistent whether the touchpoint is digital or
                            physical.</p>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ our approach -->

         <!-- design approach -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Our Design Approach</p>
                        <h2 class="section-heading">Durability meets aesthetics</h2>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="why-card why-card-intro" style="--accent:#F99E1F" data-animate>
                            <h3>Durability Meets Aesthetics</h3>
                            <p>Outdoor graphics have to withstand the elements while still looking
                            sharp. Our designs account for:</p>
                            <ul class="startup-checklist">
                                <li>Weather resistance — engineered for UV protection and durability against environmental exposure</li>
                                <li>Material selection — the right substrate, from vinyl film to acrylic and aluminum panels, chosen for longevity and visual performance</li>
                                <li>Illumination options — LED lighting integrated for visibility and impact, even after dark</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="why-card" style="--accent:#8B5CF6" data-animate data-delay="90">
                            <h3>Experiential Impact</h3>
                            <p>Great outdoor graphics do more than advertise — they create experiences.
                            Whether it's a facade, a wayfinding system or an event space, we design for
                            how people actually interact with your brand in physical environments:</p>
                            <ul class="startup-checklist">
                                <li>Scale and visibility from different distances and angles</li>
                                <li>Integration with architectural elements</li>
                                <li>Sensory engagement through texture, color and lighting</li>
                                <li>Brand storytelling that unfolds across the space</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ design approach -->

         <!-- what we offer -->
         <section class="popular-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Our Capabilities</p>
                        <h2 class="section-heading">Built on brand strategy and visual identity</h2>
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
                    <img src="img/startup.jpg" alt="MellowDigi outdoor and environmental graphics team at work">
                </div>
                <div class="col-lg-6 startup-content">
                    <div class="startup-content-inner">
                        <h2 class="startup-heading" data-animate>Why choose MellowDigi?</h2>
                        <h3 class="startup-subheading" data-animate data-delay="80">A small team dedicated to creative excellence</h3>
                        <p class="startup-text" data-animate data-delay="160">
                            Our work is rooted in a deep understanding of brand strategy — from market
                            research and competitive analysis to crafting a compelling brand narrative.
                            We partner with you to make sure every outdoor graphic not only looks
                            stunning, but drives real brand recognition.
                        </p>
                        <ul class="startup-checklist" data-animate data-delay="220">
                            <?php foreach ($reasons as $reason): ?>
                            <li><strong><?php echo $esc($reason['title']); ?></strong> — <?php echo $esc($reason['description']); ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <a href="contact.html" class="btn-hero-cta" data-animate data-delay="280">Let's Talk Outdoor Graphics</a>
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
                        <h2 class="section-heading">Five steps from research to installation</h2>
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
                        <h2 class="section-heading">Built for brands that show up in physical spaces</h2>
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
                        <p class="eyebrow">Ready to Bring Your Brand Outdoors?</p>
                        <h2 class="section-heading">Let's create something unforgettable.</h2>
                        <p class="founder-bio">
                            Whether it's a single storefront window or a full exterior signage system,
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
