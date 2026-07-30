<?php
$siteData = json_decode(file_get_contents(__DIR__ . '/data/site-data.json'), true);

$pageTitle       = 'Product & Food Photography | MellowDigi';
$pageDescription = 'Sell more with visuals that work. MellowDigi creates sales-driving product and food photography — from clean e-commerce packshots to mouth-watering food imagery.';
$pageKeywords    = 'product photography, food photography, e-commerce photography, packshot photography, menu photography, food photography for delivery apps, product photography for Amazon and Shopify, MellowDigi photography';
$pageUrl         = 'https://www.mellowdigi.com/product-food-photography.php';
include __DIR__ . '/components/header.php';

$differentiators = [
    ['accent' => '#2BACE2', 'title' => 'Commercial Focus, Not Just Art', 'description' => "Every image is created with a specific use in mind &mdash; whether it's for a product page, a social media ad, a menu or a catalog. We prioritize the details that matter for sales: clarity, accurate color representation and consistent styling."],
    ['accent' => '#3DB54A', 'title' => 'Consistency Is King', 'description' => "We build a coherent visual language for your brand. Our shoots are designed for consistency across product lines, ensuring your store looks professional, trustworthy and premium. We establish a consistent &ldquo;look&rdquo; regarding lighting, scale, color and cropping."],
    ['accent' => '#F99E1F', 'title' => 'Production-Ready Delivery', 'description' => 'We provide clean, retouched images, organized files and vertical crop options (e.g., 1:1, 4:5, 9:16) for various platforms. This streamlines your workflow and makes content deployment instant.'],
];

$categories = [
    [
        'icon' => 'box', 'accent' => '#2BACE2',
        'title' => 'Product Photography',
        'intro' => 'From individual SKUs to full product lines, we deliver high-resolution, detailed imagery for e-commerce giants (Amazon, Shopify) and your own website. We offer:',
        'items' => [
            ['title' => 'Clean Packshots', 'description' => 'White background, high-clarity images for catalogs and e-commerce.'],
            ['title' => 'Lifestyle Photography', 'description' => 'Showcasing your product in its natural environment to tell a story and evoke a feeling, making it relatable for your customer.'],
            ['title' => '360&deg; &amp; Detail Shots', 'description' => 'Interactive spins and macro photography for high-ticket items that require closer inspection, proven to reduce return rates.'],
        ],
    ],
    [
        'icon' => 'photostack', 'accent' => '#F43F5E',
        'title' => 'Food Photography',
        'intro' => 'We make your food look irresistible, driving orders for restaurants, food brands and delivery apps. Industry studies show professional food photography can increase order conversion by up to 40% compared to smartphone shots. We specialize in:',
        'items' => [
            ['title' => 'Menu &amp; Delivery App Photography', 'description' => "Appetizing, platform-compliant visuals for Uber Eats, DoorDash, Zomato and more. We understand the technical requirements so you don't have to."],
            ['title' => 'Editorial Recipe Content', 'description' => 'Full visual stories &mdash; from ingredients to the finished dish &mdash; perfect for websites, cookbooks and social media campaigns.'],
            ['title' => 'Seasonal &amp; Campaign Sets', 'description' => 'Context-rich imagery for holidays, launches and special promotions, showing your product in celebratory or seasonal settings.'],
        ],
    ],
];

$process = [
    ['step' => '01', 'title' => 'Brief &amp; Align', 'description' => 'We start with a clear brief and references, understanding your brand voice, target audience and specific usage requirements.'],
    ['step' => '02', 'title' => 'Shoot Day', 'description' => 'We efficiently execute the shoot, managing the setup, lighting and styling to ensure the results match our plan.'],
    ['step' => '03', 'title' => 'Delivery', 'description' => 'You receive a curated selection of polished, production-ready images, neatly organized and ready to publish.'],
];

$heroIcons = [
    ['icon' => 'camera', 'label' => 'Product &amp; Food Photography'],
];
?>

     <!-- main -->
     <main>
        <!-- banner-->
         <section class="banner">
            <div class="container-fluid nav-shell">
                <div class="row align-items-center banner-hero">
                    <div class="col-lg-6">
                        <p class="eyebrow" data-animate>Product &amp; Food Photography</p>
                        <h1 class="banner-title" data-animate data-delay="120">
                            Sell more with <span class="text-gradient-brand">visuals that work</span>
                        </h1>
                        <p class="banner-text max-width-700" data-animate data-delay="220">
                            In the digital marketplace, your product image is the first handshake,
                            the first impression and often the deciding factor in a purchase. A
                            poor-quality photo doesn't just look unprofessional &mdash; it loses
                            sales. For food brands, an unappetizing image costs you orders, plain and
                            simple.
                        </p>
                        <p class="banner-text max-width-700" data-animate data-delay="260">
                            At MellowDigi, we don't just take pictures. We create sales-driving visual
                            assets &mdash; from sleek e-commerce packshots to mouth-watering food
                            photography &mdash; that capture attention, build trust and convert
                            viewers into customers.
                        </p>
                        <div class="d-flex flex-wrap gap-3" data-animate data-delay="320">
                            <a href="portfolio.html" class="btn-hero-cta">See Our Portfolio</a>
                            <a href="contact.html" class="btn-hero-cta">Request a Quote</a>
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

         <!-- what we deliver -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">What We Deliver</p>
                        <h2 class="section-heading">The MellowDigi difference</h2>
                    </div>
                </div>
                <div class="row g-4">
                    <?php foreach ($differentiators as $i => $item): ?>
                    <div class="col-lg-4">
                        <div class="why-card<?php echo $i === 0 ? ' why-card-intro' : ''; ?>" style="--accent:<?php echo $esc($item['accent']); ?>" data-animate data-delay="<?php echo $i * 90; ?>">
                            <h3><?php echo $item['title']; ?></h3>
                            <p><?php echo $item['description']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ what we deliver -->

         <!-- our services -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Our Services</p>
                        <h2 class="section-heading">Tailored for your brand</h2>
                    </div>
                </div>
                <div class="row g-4">
                    <?php foreach ($categories as $i => $category): ?>
                    <div class="col-lg-6">
                        <div class="why-card<?php echo $i === 0 ? ' why-card-intro' : ''; ?>" style="--accent:<?php echo $esc($category['accent']); ?>" data-animate data-delay="<?php echo $i * 90; ?>">
                            <h3><?php echo $category['title']; ?></h3>
                            <p><?php echo $category['intro']; ?></p>
                            <ul class="startup-checklist">
                                <?php foreach ($category['items'] as $item): ?>
                                <li><strong><?php echo $item['title']; ?></strong> &mdash; <?php echo $item['description']; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ our services -->

         <!-- how we work -->
         <section class="who-we-are">
            <div class="bg-bubble bubble-blue" aria-hidden="true"></div>
            <div class="bg-bubble bubble-green" aria-hidden="true"></div>
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">How We Work</p>
                        <h2 class="section-heading">From brief to delivery</h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
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
         <!--/ how we work -->

         <!-- cta -->
         <section class="founder-section">
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row align-items-center g-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Ready to Elevate Your Brand?</p>
                        <h2 class="section-heading">Let's create visuals that elevate your brand and drive sales.</h2>
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
                            <a href="contact.html" class="btn-hero-cta">Request a Quote</a>
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
