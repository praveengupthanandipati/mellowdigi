<?php
$siteData = json_decode(file_get_contents(__DIR__ . '/data/site-data.json'), true);

$pageTitle       = 'Outdoor Posters & Banners | MellowDigi';
$pageDescription = 'High-impact outdoor printing services by Mellow Digi. Premium posters, vinyl banners, and flex printing for events, stores, and campaigns. Fast delivery.';
$pageKeywords    = 'outdoor banner printing, flex banner printing India, vinyl banner printing, poster printing services, standee printing, corrugated board printing, event banner printing, store opening banners, real estate signage, Mellow Digi outdoor prints, custom size banners, weather-proof printing';
$pageUrl         = 'https://www.mellowdigi.com/outdoor-posters-banners.php';
include __DIR__ . '/components/header.php';

$promise = ['Fade-resistant inks', 'Weather-proof materials', 'Custom sizes', 'Fast 3-5 day delivery'];

$products = [
    ['icon' => 'billboard', 'accent' => '#2BACE2', 'title' => 'Vinyl Banners', 'subtitle' => 'Tough, Durable, Weather-Proof', 'description' => 'Perfect for outdoor events, storefronts and construction sites. Available with grommets (metal eyelets) for easy hanging and hemmed edges for extra strength.', 'bestFor' => 'Store openings, events, construction sites, roadside advertising.'],
    ['icon' => 'photostack', 'accent' => '#3DB54A', 'title' => 'Flex Posters &amp; Banners', 'subtitle' => 'Lightweight, Vibrant, Affordable', 'description' => "Our flex material is the go-to choice for outdoor advertising. It's durable, easy to install and delivers stunning color reproduction.", 'bestFor' => 'Hoardings, building wraps, event backdrops, real estate boards.'],
    ['icon' => 'box', 'accent' => '#F99E1F', 'title' => 'Corrugated Plastic Boards', 'subtitle' => 'Rigid, Reusable, Professional', 'description' => 'A sturdy, waterproof board that stands up to wind and rain. Perfect for directional signs, election campaigns and real estate signage.', 'bestFor' => 'Directional signs, election campaigns, real estate boards, outdoor events.'],
    ['icon' => 'layout', 'accent' => '#8B5CF6', 'title' => 'Poster Prints (Indoor &amp; Outdoor)', 'subtitle' => 'High-Resolution, Eye-Catching', 'description' => 'From A3 to massive custom sizes, our poster prints are sharp, vibrant and built to impress. Choose glossy for pop or matte for a premium feel.', 'bestFor' => 'Retail window displays, event promotions, exhibitions, office branding.'],
    ['icon' => 'briefcase', 'accent' => '#F43F5E', 'title' => 'Standees &amp; Pop-Up Displays', 'subtitle' => 'Portable, Professional, Attention-Grabbing', 'description' => 'Lightweight and easy to set up anywhere. Perfect for trade shows, retail stores and photo booths.', 'bestFor' => 'Trade shows, retail stores, photo booths, conferences.'],
    ['icon' => 'network', 'accent' => '#14B8A6', 'title' => 'Mesh Banners', 'subtitle' => 'Wind-Pass Through, Durable', 'description' => 'Specially designed for high-wind areas. The mesh allows air to pass through, reducing stress on the banner and structure.', 'bestFor' => 'Construction sites, stadiums, high-rise buildings.'],
];

$materials = [
    ['name' => 'Flex Material', 'detail' => 'General outdoor use &mdash; lightweight, affordable, vibrant colors.'],
    ['name' => 'Vinyl (Premium)', 'detail' => 'Long-term outdoor use &mdash; heavy-duty, weather-proof, tear-resistant.'],
    ['name' => 'Corrugated Plastic', 'detail' => 'Rigid signage &mdash; waterproof, wind-resistant, reusable.'],
    ['name' => 'Mesh Banner', 'detail' => 'High-wind areas &mdash; wind-pass through, durable, long-lasting.'],
    ['name' => 'Gloss Paper', 'detail' => 'Indoor posters &mdash; high-shine, vibrant, affordable.'],
    ['name' => 'Matte Paper', 'detail' => 'Premium indoor use &mdash; non-glare, soft finish, professional feel.'],
];

$sizes = [
    ['name' => 'Posters', 'detail' => 'A3, A2, A1, A0 &mdash; windows, events, exhibitions.'],
    ['name' => 'Flex Banners', 'detail' => '2ft&times;4ft, 3ft&times;6ft, 4ft&times;8ft &mdash; storefronts, hoardings, events.'],
    ['name' => 'Vinyl Banners', 'detail' => '2ft&times;4ft, 3ft&times;6ft, 4ft&times;8ft &mdash; long-term outdoor use.'],
    ['name' => 'Standees', 'detail' => '2ft&times;6ft, 3ft&times;6ft &mdash; trade shows, retail, events.'],
    ['name' => 'Corrugated Boards', 'detail' => '2ft&times;3ft, 3ft&times;4ft, 4ft&times;8ft &mdash; directional signs, real estate.'],
];

$process = [
    ['step' => '01', 'accent' => '#2BACE2', 'title' => 'Tell Us Your Need', 'items' => ['Share your design or just describe your vision', 'Not sure? Our design team can help']],
    ['step' => '02', 'accent' => '#3DB54A', 'title' => 'Approve the Proof', 'items' => ["We'll send you a digital mockup", 'We print only when you say "Perfect"']],
    ['step' => '03', 'accent' => '#F99E1F', 'title' => 'We Print &amp; Deliver', 'items' => ['Our printers roll, we quality-check everything', 'Your order reaches your doorstep in 3&ndash;5 days']],
];

$designItems = [
    ['icon' => 'palette', 'text' => 'Eye-catching poster designs'],
    ['icon' => 'layout', 'text' => 'Banner layouts with bold typography'],
    ['icon' => 'target', 'text' => 'Custom sizes and formats'],
    ['icon' => 'tag', 'text' => 'Branded templates for future use'],
];

$faqs = [
    ['question' => "What's the minimum order quantity?", 'answer' => 'No minimum! Order just 1 poster or 1 banner &mdash; we print what you need.'],
    ['question' => 'How long does delivery take?', 'answer' => 'Standard delivery takes 3&ndash;5 business days. Express options available for urgent orders.'],
    ['question' => 'What file format should I upload?', 'answer' => 'We accept PDF (recommended), AI, PSD, JPEG and PNG. 300 DPI resolution recommended for best results.'],
    ['question' => 'Do you provide installation services?', 'answer' => 'We provide delivery only. However, we can recommend trusted installation partners in your city.'],
    ['question' => 'Are your outdoor prints waterproof?', 'answer' => 'Yes! Our flex, vinyl and corrugated materials are completely weather-proof and fade-resistant.'],
    ['question' => 'Can I get a physical sample before ordering?', 'answer' => "Yes! Request a free sample kit and we'll mail it to you."],
];

$heroIcons = [
    ['icon' => 'billboard', 'label' => 'Outdoor Posters &amp; Banners'],
];
?>

     <!-- main -->
     <main>
        <!-- banner-->
         <section class="banner">
            <div class="container-fluid nav-shell">
                <div class="row align-items-center banner-hero">
                    <div class="col-lg-6">
                        <p class="eyebrow" data-animate>Outdoor Posters &amp; Banners</p>
                        <h1 class="banner-title" data-animate data-delay="120">
                            Big, bold, <span class="text-gradient-brand">unmissable</span>.
                        </h1>
                        <p class="banner-text max-width-700" data-animate data-delay="220">
                            Outdoor posters &amp; banners that stop traffic. Your message deserves to be
                            seen &mdash; by everyone.
                        </p>
                        <p class="banner-text max-width-700" data-animate data-delay="260">
                            Whether it's a grand opening, a sale event or a brand launch, Mellow Digi
                            delivers high-impact outdoor printing that commands attention. From
                            weather-resistant vinyl banners to stunning flex posters, we bring your brand
                            to the streets.
                        </p>
                        <ul class="startup-checklist" data-animate data-delay="290">
                            <?php foreach ($promise as $item): ?>
                            <li><?php echo $esc($item); ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="d-flex flex-wrap gap-3" data-animate data-delay="320">
                            <a href="contact.html" class="btn-hero-cta">Get a Quote</a>
                            <a href="#sizes" class="btn-hero-cta">Explore Sizes</a>
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
                        <h2 class="section-heading">Pick your outdoor print</h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
                    <?php foreach ($products as $i => $product): ?>
                    <div class="col" data-animate data-delay="<?php echo ($i % 3) * 90; ?>">
                        <div class="popular-service-card h-100" style="--accent:<?php echo $esc($product['accent']); ?>">
                            <span class="popular-service-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><?php echo $siteData['icons'][$product['icon']]; ?></svg>
                            </span>
                            <h6><?php echo $product['title']; ?></h6>
                            <p class="text-muted mb-2"><?php echo $product['subtitle']; ?></p>
                            <p><?php echo $product['description']; ?></p>
                            <p class="mb-0"><strong>Best for:</strong> <?php echo $product['bestFor']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ what we print -->

         <!-- materials & sizes -->
         <section class="bottom-services-section" id="sizes">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Materials &amp; Sizes</p>
                        <h2 class="section-heading">Built to last. Built to impress.</h2>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6" data-animate>
                        <div class="why-card h-100 mb-0" style="--accent:#2BACE2">
                            <h3>Materials &amp; Finishes</h3>
                            <div class="addon-list">
                                <?php foreach ($materials as $m): ?>
                                <div class="addon-row">
                                    <span class="addon-name"><?php echo $esc($m['name']); ?></span>
                                    <span class="addon-price"><?php echo $m['detail']; ?></span>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-animate data-delay="90">
                        <div class="why-card h-100 mb-0" style="--accent:#3DB54A">
                            <h3>Popular Sizes</h3>
                            <div class="addon-list">
                                <?php foreach ($sizes as $s): ?>
                                <div class="addon-row">
                                    <span class="addon-name"><?php echo $esc($s['name']); ?></span>
                                    <span class="addon-price"><?php echo $s['detail']; ?></span>
                                </div>
                                <?php endforeach; ?>
                            </div>
                            <p class="mt-3 mb-0">Need a custom size? Just ask! We print any size you need.</p>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ materials & sizes -->

         <!-- how it works -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">How It Works</p>
                        <h2 class="section-heading">Simple &amp; fast</h2>
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

         <!-- design services -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row g-4">
                    <div class="col-lg-6" data-animate>
                        <div class="why-card why-card-intro h-100 mb-0" style="--accent:#F99E1F">
                            <p class="eyebrow mb-2">Design Services</p>
                            <h3>Need a design? We've got you.</h3>
                            <p>Don't have a print-ready file? No problem. Mellow Digi offers professional
                            design services for all outdoor prints.</p>
                            <p class="mb-0"><strong>Special Offer:</strong> First-time customers get a free
                            design consultation with every print order.</p>
                        </div>
                    </div>
                    <div class="col-lg-6" data-animate data-delay="90">
                        <div class="why-card h-100 mb-0" style="--accent:#2BACE2">
                            <h3>We can create</h3>
                            <ul class="startup-checklist">
                                <?php foreach ($designItems as $item): ?>
                                <li><?php echo $esc($item['text']); ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <a href="contact.html" class="btn-hero-cta">Talk to Our Designer</a>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ design services -->

         <!-- faq -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Frequently Asked Questions</p>
                        <h2 class="section-heading">Quick questions</h2>
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
                                        <p><?php echo $faq['answer']; ?></p>
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

         <!-- about us blurb -->
         <section class="bottom-services-section pt-0">
            <div class="container-fluid nav-shell">
                <div class="row">
                    <div class="col-lg-8" data-animate>
                        <div class="why-card why-card-intro mb-0" style="--accent:#3DB54A">
                            <h3>About Mellow Digi</h3>
                            <p>Mellow Digi is a new-age print media startup based in Hyderabad, Telangana. We
                            help startups, SMEs and event organizers make a mark with premium outdoor and
                            indoor print media. Small, agile and obsessed with quality.</p>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ about us blurb -->

         <!-- cta -->
         <section class="founder-section">
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row align-items-center g-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Ready to Make a Big Impression?</p>
                        <h2 class="section-heading">Let's create something unmissable together.</h2>
                        <p class="founder-bio">
                            Your brand deserves to be seen. Whether it's a store opening, a festival or a
                            real estate launch, Mellow Digi delivers outdoor prints that grab attention and
                            drive results.
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
