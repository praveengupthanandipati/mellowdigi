<?php
$siteData = json_decode(file_get_contents(__DIR__ . '/data/site-data.json'), true);

$pageTitle       = 'Macro & Detail Photography | MellowDigi';
$pageDescription = 'Seeing the unseen. MellowDigi creates striking macro and detail photography — from jewelry and product textures to botanical and culinary close-ups.';
$pageKeywords    = 'macro photography, detail photography, product texture photography, jewelry photography, watch photography, focus stacking photography, close-up photography, MellowDigi macro';
$pageUrl         = 'https://www.mellowdigi.com/macro-detail-photography.php';
include __DIR__ . '/components/header.php';

$brandStory = [
    ['accent' => '#2BACE2', 'title' => 'A Window Into A Hidden World', 'description' => 'At Mellow Digi, we believe that true artistry lies in the details. Macro photography is our window into a hidden world &mdash; where water droplets become galaxies, fabric weaves become landscapes and product engravings become works of art.'],
    ['accent' => '#3DB54A', 'title' => 'The Soul Of The Subject', 'description' => 'While standard photography shows the whole picture, Macro &amp; Detail photography reveals the soul of the subject. Whether we are capturing the delicate sparkle of fine jewelry, the rich grain of luxury leather or the intricate veins of a botanical specimen, we bring a scientific level of precision paired with an artistic eye. We transform the mundane into the magnificent, frame by frame.'],
];

$services = [
    ['icon' => 'search', 'accent' => '#2BACE2', 'title' => 'Product Detail &amp; Texture Shots', 'description' => 'Extreme close-ups that highlight material quality, craftsmanship and finish. Perfect for luxury goods, textiles, cosmetics and artisanal products where quality is defined by the touch and feel.'],
    ['icon' => 'network', 'accent' => '#3DB54A', 'title' => 'Jewelry &amp; Watch Photography', 'description' => 'Capturing the brilliance of gemstones, the polish of metals and the intricate mechanical movements of timepieces. We use specialized lighting and focus-stacking techniques to ensure every facet is razor-sharp.'],
    ['icon' => 'photostack', 'accent' => '#F99E1F', 'title' => 'Food &amp; Culinary Macro', 'description' => 'Elevating ingredients and plated dishes to an art form. From the steam rising off a hot meal to the crystalline structure of sea salt, we make every detail look delectable and editorial.'],
    ['icon' => 'palette', 'accent' => '#8B5CF6', 'title' => 'Botanical &amp; Nature Macros', 'description' => 'Perfect for lifestyle brands, wellness companies and editorial features. We capture the vibrant colors, delicate textures and organic patterns of flowers, leaves and natural elements.'],
    ['icon' => 'layout', 'accent' => '#F43F5E', 'title' => 'Industrial &amp; Architectural Details', 'description' => 'Showcasing the precision of engineering, the rust of aged metal or the geometric patterns of modern architecture. We find beauty in the structural and mechanical.'],
];

$process = [
    ['step' => '01', 'title' => 'Consultation &amp; Subject Analysis', 'description' => 'We start by understanding your subject and your goal. Is this for e-commerce zoom functionality? A magazine spread? A brand campaign? We tailor our approach accordingly.'],
    ['step' => '02', 'title' => 'Lighting Engineering', 'description' => 'Macro photography requires specialized lighting. We use ring lights, fiber-optic illuminators and diffused natural light to eliminate harsh shadows and reveal true colors and textures without glare.'],
    ['step' => '03', 'title' => 'Focus Stacking (The Magic)', 'description' => 'Because macro lenses have an extremely shallow depth of field, we use a technique called focus stacking. We capture dozens (or even hundreds) of images at different focal points and blend them together in post-production to create one perfectly sharp image from front to back.'],
    ['step' => '04', 'title' => 'Meticulous Retouching', 'description' => 'We remove dust specs, polish reflections and enhance contrast to ensure every minute detail is flawlessly presented without looking unnatural.'],
];

$whyChoose = [
    ['title' => 'Technical Excellence', 'description' => 'We use professional macro lenses (up to 1:1 magnification), focus rails and tethered shooting to achieve absolute precision.'],
    ['title' => 'Artistic Vision', 'description' => "Technical sharpness means nothing without composition. We frame each detail with an artist's eye for balance, color and negative space."],
    ['title' => 'High-Resolution Output', 'description' => 'Our images are captured at ultra-high resolutions, allowing your clients to zoom in infinitely without losing quality &mdash; perfect for large format prints and high-end e-commerce.'],
    ['title' => 'Versatility', 'description' => 'From tiny watch parts to sprawling architectural facades, we adapt our macro techniques to subjects of any scale.'],
];

$portfolioHighlights = [
    ['title' => 'Textures', 'description' => 'Woven fabrics, cracked paint, brushed metal.'],
    ['title' => 'Objects', 'description' => 'Rings, watch faces, perfume bottles, cut gemstones.'],
    ['title' => 'Nature', 'description' => 'Dew drops, petals, butterfly wings, wood grain.'],
    ['title' => 'Food', 'description' => 'Herbs, spices, chocolate shavings, citrus zest.'],
];

$testimonials = [
    ['accent' => '#2BACE2', 'initials' => 'FB', 'text' => 'Mellow Digi captured our jewelry collection in a way we never thought possible. They made tiny diamonds look like galaxies. The focus and clarity were absolutely breathtaking. It completely elevated our brand\'s perceived value.', 'name' => 'Founder', 'company' => '[Fine Jewelry Brand]'],
    ['accent' => '#3DB54A', 'initials' => 'CL', 'text' => "We needed extreme close-ups for our sustainable fabric line to show the organic weaves. The Mellow team nailed it. They turned fabric into art. Our customers could literally 'see' the quality through the screen.", 'name' => 'Creative Lead', 'company' => '[Eco-Fashion Label]'],
];

$heroIcons = [
    ['icon' => 'search', 'label' => 'Macro &amp; Detail Photography'],
];
?>

     <!-- main -->
     <main>
        <!-- banner-->
         <section class="banner">
            <div class="container-fluid nav-shell">
                <div class="row align-items-center banner-hero">
                    <div class="col-lg-6">
                        <p class="eyebrow" data-animate>Macro &amp; Detail Photography</p>
                        <h1 class="banner-title" data-animate data-delay="120">
                            The devil is in the <span class="text-gradient-brand">details</span>.
                        </h1>
                        <p class="banner-text max-width-700" data-animate data-delay="220">
                            Seeing the unseen. Capturing the textures, patterns and intricate beauty
                            that the naked eye often misses.
                        </p>
                        <p class="banner-text max-width-700" data-animate data-delay="260">
                            At MellowDigi, we believe that true artistry lies in the details &mdash;
                            where water droplets become galaxies, fabric weaves become landscapes and
                            product engravings become works of art.
                        </p>
                        <div class="d-flex flex-wrap gap-3" data-animate data-delay="320">
                            <a href="portfolio.html" class="btn-hero-cta">See Our Portfolio</a>
                            <a href="contact.html" class="btn-hero-cta">Book a Shoot</a>
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

         <!-- brand story -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Our Brand Story</p>
                        <h2 class="section-heading">The soul of the subject</h2>
                    </div>
                </div>
                <div class="row g-4">
                    <?php foreach ($brandStory as $i => $item): ?>
                    <div class="col-lg-6">
                        <div class="why-card<?php echo $i === 0 ? ' why-card-intro' : ''; ?>" style="--accent:<?php echo $esc($item['accent']); ?>" data-animate data-delay="<?php echo $i * 90; ?>">
                            <h3><?php echo $item['title']; ?></h3>
                            <p><?php echo $item['description']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ brand story -->

         <!-- our services -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Our Services</p>
                        <h2 class="section-heading">What we do</h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
                    <?php foreach ($services as $i => $service): ?>
                    <div class="col" data-animate data-delay="<?php echo ($i % 3) * 80; ?>">
                        <div class="popular-service-card" style="--accent:<?php echo $esc($service['accent']); ?>">
                            <span class="popular-service-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><?php echo $siteData['icons'][$service['icon']]; ?></svg>
                            </span>
                            <h6><?php echo $service['title']; ?></h6>
                            <p><?php echo $service['description']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ our services -->

         <!-- how it works -->
         <section class="who-we-are">
            <div class="bg-bubble bubble-blue" aria-hidden="true"></div>
            <div class="bg-bubble bubble-green" aria-hidden="true"></div>
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">The MellowDigi Process</p>
                        <h2 class="section-heading">How it works</h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
                    <?php foreach ($process as $i => $step): ?>
                    <div class="col" data-animate data-delay="<?php echo $i * 80; ?>">
                        <div class="process-step">
                            <span class="process-step-number"><?php echo $esc($step['step']); ?></span>
                            <h6><?php echo $step['title']; ?></h6>
                            <p><?php echo $step['description']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ how it works -->

         <!-- why choose us -->
         <section class="home_startup">
            <div class="row g-0 align-items-stretch">
                <div class="col-lg-6 startup-image" data-animate>
                    <img src="img/startup.jpg" alt="MellowDigi macro and detail photography close-up shoot">
                </div>
                <div class="col-lg-6 startup-content">
                    <div class="startup-content-inner">
                        <h2 class="startup-heading" data-animate>Why Choose MellowDigi for Macro?</h2>
                        <h3 class="startup-subheading" data-animate data-delay="80">Technical precision, artistic eye</h3>
                        <p class="startup-text" data-animate data-delay="160">
                            From focus-stacked sharpness to gallery-worthy composition, we bring both
                            the science and the art to every close-up.
                        </p>
                        <ul class="startup-checklist" data-animate data-delay="220">
                            <?php foreach ($whyChoose as $item): ?>
                            <li><strong><?php echo $item['title']; ?></strong> &mdash; <?php echo $item['description']; ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <a href="contact.html" class="btn-hero-cta" data-animate data-delay="280">Let's Talk Macro Photography</a>
                    </div>
                </div>
            </div>
         </section>
         <!--/ why choose us -->

         <!-- our portfolio -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Our Portfolio</p>
                        <h2 class="section-heading">A glimpse into our world</h2>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-8">
                        <div class="why-card why-card-intro" style="--accent:#F43F5E" data-animate>
                            <h3>Macro &amp; Detail Highlights</h3>
                            <ul class="startup-checklist">
                                <?php foreach ($portfolioHighlights as $i => $highlight): ?>
                                <li><strong><?php echo $esc($highlight['title']); ?></strong> &mdash; <?php echo $esc($highlight['description']); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex align-items-center">
                        <div data-animate data-delay="90">
                            <p class="banner-text">Ready to see the full body of work?</p>
                            <a href="portfolio.html" class="btn-hero-cta">See Our Portfolio</a>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ our portfolio -->

         <!-- testimonials -->
         <section class="testimonials-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Social Proof</p>
                        <h2 class="section-heading">What our clients say</h2>
                    </div>
                </div>
            </div>

            <div class="testimonials-swiper swiper-container" data-animate data-delay="150">
                <div class="swiper-wrapper">
                    <?php foreach ($testimonials as $t): ?>
                    <div class="swiper-slide">
                        <div class="testimonial-card" style="--accent:<?php echo $esc($t['accent']); ?>">
                            <span class="testimonial-quote-icon">
                                <svg width="34" height="26" viewBox="0 0 34 26" fill="currentColor"><path d="M14.5 0L9 12H15V26H0V13L6 0H14.5ZM33.5 0L28 12H34V26H19V13L25 0H33.5Z"/></svg>
                            </span>
                            <div class="testimonial-stars">
                                <?php for ($s = 0; $s < 5; $s++): ?>
                                <svg viewBox="0 0 24 24"><path d="M12 2.5l2.9 6.2 6.6.7-5 4.6 1.4 6.6-5.9-3.4-5.9 3.4 1.4-6.6-5-4.6 6.6-.7z"/></svg>
                                <?php endfor; ?>
                            </div>
                            <p class="testimonial-text"><?php echo $esc($t['text']); ?></p>
                            <div class="testimonial-author">
                                <span class="testimonial-avatar"><?php echo $esc($t['initials']); ?></span>
                                <div class="testimonial-author-info">
                                    <h6><?php echo $esc($t['name']); ?></h6>
                                    <span><?php echo $esc($t['company']); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
         </section>
         <!--/ testimonials -->

         <!-- cta -->
         <section class="founder-section">
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row align-items-center g-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Look Closer. Discover More.</p>
                        <h2 class="section-heading">Ready to showcase the intricate details that make your product or subject truly special?</h2>
                        <p class="founder-bio">
                            Let MellowDigi reveal the beauty hidden in plain sight.
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
                        <div class="d-flex flex-wrap gap-3 justify-content-lg-end">
                            <a href="contact.html" class="btn-hero-cta">Get a Quote</a>
                            <a href="contact.html" class="btn-hero-cta">Book a Shoot</a>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ cta -->
     </main>
     <!--/ main -->

<?php include __DIR__ . '/components/footer.php'; ?>
