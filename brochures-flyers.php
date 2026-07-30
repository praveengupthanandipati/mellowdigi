<?php
$siteData = json_decode(file_get_contents(__DIR__ . '/data/site-data.json'), true);

$pageTitle       = 'Flyers & Brochure Printing | MellowDigi';
$pageDescription = 'Vibrant, premium flyer and brochure printing for startups, events and local campaigns in India. Tri-fold brochures, rack cards, spot UV and fast 3-5 day delivery by Mellow Digi.';
$pageKeywords    = 'flyer printing India, brochure printing, tri-fold brochure design, rack card printing, spot UV printing, matte and gloss flyers, event flyer printing, startup marketing print, Mellow Digi prints';
$pageUrl         = 'https://www.mellowdigi.com/brochures-flyers.php';
include __DIR__ . '/components/header.php';

$promise = ['Vivid digital printing', 'Premium paper stocks', '3-5 day delivery', 'Free design help'];

$products = [
    ['icon' => 'photostack', 'accent' => '#2BACE2', 'title' => 'Flyers &amp; Handbills', 'subtitle' => 'A6, A5, A4', 'description' => 'Perfect for events, retail offers and menus. Single or double-sided.'],
    ['icon' => 'layout', 'accent' => '#3DB54A', 'title' => 'Brochures', 'subtitle' => 'Tri-Fold, Z-Fold, Half-Fold', 'description' => 'Tell a deeper story. Great for portfolios, corporate profiles and service lists.'],
    ['icon' => 'billboard', 'accent' => '#F99E1F', 'title' => 'Rack Cards &amp; DL Flyers', 'subtitle' => 'Slim &amp; Tall', 'description' => 'Slim, tall and impossible to ignore. Ideal for mailers, hotels and counters.'],
];

$finishes = [
    ['icon' => 'book', 'accent' => '#2BACE2', 'title' => 'Matte', 'bestFor' => 'Corporate', 'description' => 'Soft, premium, no-glare.'],
    ['icon' => 'certificate', 'accent' => '#3DB54A', 'title' => 'Gloss', 'bestFor' => 'Retail / Events', 'description' => 'Shiny, vibrant, eye-catching.'],
    ['icon' => 'target', 'accent' => '#F99E1F', 'title' => 'Spot UV', 'bestFor' => 'Premium Brands', 'description' => 'Glossy highlights on logos and text.'],
    ['icon' => 'refresh', 'accent' => '#8B5CF6', 'title' => 'Eco-Kraft', 'bestFor' => 'Sustainable Brands', 'description' => 'Raw, recycled, organic look.'],
];

$process = [
    ['step' => '01', 'accent' => '#2BACE2', 'title' => 'Upload', 'items' => ['Send your PDF/AI file or tell us your idea', "Don't have a design? We'll make one"]],
    ['step' => '02', 'accent' => '#3DB54A', 'title' => 'Approve', 'items' => ['We send a digital proof', 'You say "Yes"']],
    ['step' => '03', 'accent' => '#F99E1F', 'title' => 'Deliver', 'items' => ['We print and quality-check', 'Shipped to your door in 3&ndash;5 days']],
];

$faqs = [
    ['question' => "What's the minimum order?", 'answer' => 'None! Order just 50 flyers if you want.'],
    ['question' => "I don't have a design, help?", 'answer' => 'Yes! We offer free basic design support with every order.'],
    ['question' => 'What sizes do you print?', 'answer' => 'A3, A4, A5, A6, DL and Custom. Just ask us.'],
];

$heroIcons = [
    ['icon' => 'printer', 'label' => 'Flyers &amp; Brochures'],
];
?>

     <!-- main -->
     <main>
        <!-- banner-->
         <section class="banner">
            <div class="container-fluid nav-shell">
                <div class="row align-items-center banner-hero">
                    <div class="col-lg-6">
                        <p class="eyebrow" data-animate>Flyers &amp; Brochures</p>
                        <h1 class="banner-title" data-animate data-delay="120">
                            Flyers &amp; brochures that <span class="text-gradient-brand">actually get read</span>.
                        </h1>
                        <p class="banner-text max-width-700" data-animate data-delay="220">
                            Vibrant, premium print media for startups, events and local campaigns. No
                            fuss. Just quality.
                        </p>
                        <p class="banner-text max-width-700" data-animate data-delay="260">
                            Digital ads disappear in a swipe. Print sticks around. At Mellow Digi, we turn
                            your marketing ideas into high-quality flyers and brochures that people hold
                            onto. Choose your size, pick your paper, and let us handle the rest.
                        </p>
                        <ul class="startup-checklist" data-animate data-delay="290">
                            <?php foreach ($promise as $item): ?>
                            <li><?php echo $esc($item); ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="d-flex flex-wrap gap-3" data-animate data-delay="320">
                            <a href="contact.html" class="btn-hero-cta">Get a Quote</a>
                            <a href="#enquiry" class="btn-hero-cta">Send an Enquiry</a>
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

         <!-- what we print -->
         <section class="popular-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">What We Print</p>
                        <h2 class="section-heading">Pick your print</h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
                    <?php foreach ($products as $i => $product): ?>
                    <div class="col" data-animate data-delay="<?php echo ($i % 3) * 90; ?>">
                        <div class="popular-service-card h-100" style="--accent:<?php echo $esc($product['accent']); ?>">
                            <span class="popular-service-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><?php echo $siteData['icons'][$product['icon']]; ?></svg>
                            </span>
                            <h6><?php echo $product['title']; ?> <span class="text-muted">(<?php echo $product['subtitle']; ?>)</span></h6>
                            <p><?php echo $product['description']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ what we print -->

         <!-- finishes -->
         <section class="who-we-are">
            <div class="bg-bubble bubble-blue" aria-hidden="true"></div>
            <div class="bg-bubble bubble-green" aria-hidden="true"></div>
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Finishes</p>
                        <h2 class="section-heading">Make it pop with finishes</h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
                    <?php foreach ($finishes as $i => $item): ?>
                    <div class="col" data-animate data-delay="<?php echo ($i % 4) * 90; ?>">
                        <div class="process-step h-100">
                            <span class="popular-service-icon" style="--accent:<?php echo $esc($item['accent']); ?>">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><?php echo $siteData['icons'][$item['icon']]; ?></svg>
                            </span>
                            <h6><?php echo $esc($item['title']); ?></h6>
                            <p><?php echo $esc($item['description']); ?> <strong>Best for:</strong> <?php echo $esc($item['bestFor']); ?>.</p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ finishes -->

         <!-- how it works -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">How It Works</p>
                        <h2 class="section-heading">It's easy</h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
                    <?php foreach ($process as $i => $step): ?>
                    <div class="col" data-animate data-delay="<?php echo $i * 100; ?>">
                        <div class="why-card h-100" style="--accent:<?php echo $esc($step['accent']); ?>">
                            <span class="workflow-badge" style="--accent:<?php echo $esc($step['accent']); ?>"><?php echo $esc($step['step']); ?></span>
                            <h3><?php echo $step['title']; ?></h3>
                            <ul class="startup-checklist">
                                <?php foreach ($step['items'] as $item): ?>
                                <li><?php echo $esc($item); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ how it works -->

         <!-- faq -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Got Questions?</p>
                        <h2 class="section-heading">Quick answers</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10">
                        <div class="faq-accordion" id="faqAccordion" data-animate data-delay="100">
                            <?php foreach ($faqs as $i => $faq): ?>
                            <div class="faq-item">
                                <h3><button class="faq-question" type="button" data-bs-toggle="collapse" data-bs-target="#faqAnswer<?php echo $i; ?>" aria-expanded="false" aria-controls="faqAnswer<?php echo $i; ?>">
                                    <span><?php echo $esc($faq['question']); ?></span>
                                    <span class="faq-icon" aria-hidden="true">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9l6 6 6-6"/></svg>
                                    </span>
                                </button></h3>
                                <div class="collapse" id="faqAnswer<?php echo $i; ?>" data-bs-parent="#faqAccordion">
                                    <div class="faq-answer-body">
                                        <p><?php echo $esc($faq['answer']); ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ faq -->

         <!-- cta -->
         <section class="founder-section">
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row align-items-center g-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Ready to Get Noticed?</p>
                        <h2 class="section-heading">Let's create print that makes an impact.</h2>
                        <p class="founder-bio">
                            Print that makes an impact &mdash; without breaking your startup budget.
                        </p>
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
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><?php echo $siteData['icons']['pin']; ?></svg>
                                <span>Based in: Hyderabad, Telangana</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-5 text-lg-end" data-animate data-delay="150">
                        <p class="founder-bio">Ready to start?</p>
                        <a href="contact.html" class="btn-hero-cta">Get a Free Quote Today</a>
                    </div>
                </div>
            </div>
         </section>
         <!--/ cta -->
        <?php include __DIR__ . '/components/enquiry-form.php'; ?>
     </main>
     <!--/ main -->

<?php include __DIR__ . '/components/footer.php'; ?>
