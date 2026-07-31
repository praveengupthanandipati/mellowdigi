<?php
$siteData = json_decode(file_get_contents(__DIR__ . '/data/site-data.json'), true);

$pageTitle       = 'Product Catalog Development | MellowDigi';
$pageDescription = 'MellowDigi designs digital, print and B2B product catalogs — e-catalogs, flipbooks, lookbooks and sales catalogs — that turn browsers into buyers.';
$pageKeywords    = 'product catalog design, e-catalog development, digital flipbook catalog, print catalog design, B2B sales catalog, product catalog development, MellowDigi catalogs';
$pageUrl         = 'https://www.mellowdigi.com/product-catalog-development.php';
include __DIR__ . '/components/header.php';

$categories = [
    [
        'icon' => 'webmobile', 'accent' => '#2BACE2',
        'title' => 'Digital Catalogs (E-Catalogs &amp; Flipbooks)',
        'subtitle' => 'Interactive, Searchable, Shareable',
        'intro' => 'Your products need to be accessible anywhere, anytime. We create dynamic digital catalogs that work seamlessly on desktops, tablets and phones.',
        'items' => [
            ['title' => 'Interactive Flipbooks', 'description' => 'Page-turning digital experiences that mimic the feel of a print catalog, complete with clickable links and embedded videos.'],
            ['title' => 'Searchable &amp; Filterable', 'description' => 'Smart navigation that lets customers find exactly what they need in seconds.'],
            ['title' => 'Hyperlinked Product Pages', 'description' => 'Direct links to your e-commerce store, inquiry forms or product detail pages.'],
            ['title' => 'Analytics Tracking', 'description' => 'See which products are getting the most views and how customers are engaging with your catalog.'],
        ],
    ],
    [
        'icon' => 'printer', 'accent' => '#3DB54A',
        'title' => 'Print Catalogs',
        'subtitle' => 'Tangible, Trustworthy, Timeless',
        'intro' => "In a digital-first world, a beautiful print catalog makes a powerful statement. It shows you're established, serious and confident in your offerings.",
        'items' => [
            ['title' => 'Full Product Showcases', 'description' => 'Comprehensive catalogs that display your entire product line with consistency and clarity.'],
            ['title' => 'Lookbooks &amp; Seasonal Collections', 'description' => 'Curated, lifestyle-focused catalogs that tell a story about your brand aesthetic.'],
            ['title' => 'Spec Sheets &amp; Technical Catalogs', 'description' => 'For B2B and industrial clients — detailed product specifications, dimensions, materials and certifications presented cleanly.'],
            ['title' => 'Mini-Catalogs &amp; Leave-Behinds', 'description' => 'Compact, digestible versions perfect for trade shows, meetings or direct mail.'],
        ],
    ],
    [
        'icon' => 'layout', 'accent' => '#F99E1F',
        'title' => 'Product Category Pages (Web)',
        'subtitle' => 'The Online Catalog That Sells',
        'intro' => "Your website's product pages are your always-on catalog. We design category and product detail pages structured for both user experience and SEO.",
        'items' => [
            ['title' => 'Category Navigation', 'description' => 'Logical, intuitive groupings that help customers browse effortlessly.'],
            ['title' => 'Product Detail Layouts', 'description' => 'Clean, information-rich pages with high-quality imagery, specs, pricing and CTAs.'],
            ['title' => 'Comparison Tools', 'description' => 'Side-by-side product comparisons that help customers make informed decisions.'],
            ['title' => 'SEO-Optimized Structure', 'description' => 'Pages search engines love, driving organic traffic to your catalog.'],
        ],
    ],
    [
        'icon' => 'briefcase', 'accent' => '#8B5CF6',
        'title' => 'Sales Catalogs (B2B / Wholesale)',
        'subtitle' => 'Equip Your Distributors &amp; Sales Team',
        'intro' => 'Your channel partners need materials that represent your brand perfectly. We create catalogs specifically designed for B2B sales teams, distributors and retailers.',
        'items' => [
            ['title' => 'Wholesale Price Lists', 'description' => 'Clear pricing tiers, bulk order info and minimum order quantities.'],
            ['title' => 'Trade-Show Specific Catalogs', 'description' => 'Curated selections for events, highlighting new arrivals and bestsellers.'],
            ['title' => 'Rep-Friendly Layouts', 'description' => 'Easy-to-navigate formats with product codes, availability and ordering instructions.'],
        ],
    ],
    [
        'icon' => 'book', 'accent' => '#F43F5E',
        'title' => 'Visual Product Guides &amp; Lookbooks',
        'subtitle' => 'Inspiration Meets Information',
        'intro' => "Sometimes customers don't know what they need until they see it in action. We create visually rich guides that inspire and educate.",
        'items' => [
            ['title' => 'Style &amp; Application Guides', 'description' => 'Showing products in real-life scenarios to help customers visualize usage.'],
            ['title' => 'Collection Narratives', 'description' => 'Telling the story behind your product line to build emotional connection and brand loyalty.'],
            ['title' => 'How-To &amp; Installation Guides', 'description' => 'Step-by-step visual instructions that reduce support calls and increase customer satisfaction.'],
        ],
    ],
];

$process = [
    ['step' => '01', 'title' => 'Discovery &amp; Content Audit', 'description' => 'We review your product inventory, current assets (images, descriptions, spec sheets) and business objectives, identifying gaps and opportunities.'],
    ['step' => '02', 'title' => 'Information Architecture', 'description' => 'We organize your products into logical categories, sub-categories and hierarchies, and map out how a customer will browse and what information matters most.'],
    ['step' => '03', 'title' => 'Visual Design &amp; Layout', 'description' => 'We design custom templates, apply your brand guidelines and create a layout that makes products pop, prioritizing readability, visual balance and easy navigation.'],
    ['step' => '04', 'title' => 'Imagery Optimization', 'description' => 'We provide guidance on product photography — or create CGI/renderings if needed — then retouch and optimize every image for print and digital.'],
    ['step' => '05', 'title' => 'Review, Refine &amp; Finalize', 'description' => 'We share drafts for feedback, tweak and polish, and make sure every detail, from SKU numbers to price tags, is accurate and aligned.'],
    ['step' => '06', 'title' => 'Delivery &amp; Distribution', 'description' => 'You get your final catalog in every format — print-ready PDFs, web-optimized versions, interactive flipbooks and platform-compatible files — plus guidelines for future updates.'],
];

$reasons = [
    ['title' => 'We Start Small and Scale With You', 'description' => "We know you might not have thousands of products or a massive budget. We help you start with a minimum-viable catalog and expand as your inventory grows — starting small is better than not starting at all."],
    ['title' => 'Design That Drives Action', 'description' => 'Every element we design — from product sequencing to call-to-action placement — is intentional. We design for conversion, not just aesthetics.'],
    ['title' => 'Consistent Across Every Channel', 'description' => 'We ensure your catalog visuals, tone and structure align perfectly with your website, social media and sales collateral, so your brand becomes instantly recognizable.'],
    ['title' => 'We Handle the Messy Data', 'description' => "Product catalogs often involve messy spreadsheets, outdated images and missing specs. We roll up our sleeves and help you organize and clean up your product data."],
];

$elements = [
    ['icon' => 'photostack', 'accent' => '#2BACE2', 'title' => 'High-Quality Images', 'description' => 'Products sell visually — blurry photos kill trust.'],
    ['icon' => 'idcard', 'accent' => '#3DB54A', 'title' => 'Clear Product Names &amp; SKUs', 'description' => 'Makes ordering easy and reduces errors.'],
    ['icon' => 'search', 'accent' => '#F99E1F', 'title' => 'Key Specs &amp; Details', 'description' => 'Answers customer questions upfront.'],
    ['icon' => 'briefcase', 'accent' => '#8B5CF6', 'title' => 'Pricing &amp; Availability', 'description' => 'Transparency builds confidence and speeds decisions.'],
    ['icon' => 'megaphone', 'accent' => '#F43F5E', 'title' => 'Call-to-Action', 'description' => 'Guides the customer to the next step — buy, inquire, download.'],
    ['icon' => 'palette', 'accent' => '#14B8A6', 'title' => 'Brand Consistency', 'description' => 'Reinforces professionalism and builds recognition.'],
];

$formats = ['PDF (High-Res Print Ready)', 'PDF (Web Optimized)', 'Interactive Flipbook (HTML5)', 'PowerPoint / Google Slides (Editable)', 'Excel/CSV Data Sheets (with product info)', 'Website Integration (Category Pages)'];

$heroIcons = [
    ['icon' => 'book', 'label' => 'Product Catalog Development'],
];
?>

     <!-- main -->
     <main>
        <!-- banner-->
         <section class="banner">
            <div class="container-fluid nav-shell">
                <div class="row align-items-center banner-hero">
                    <div class="col-lg-6">
                        <p class="eyebrow" data-animate>Product Catalog Development</p>
                        <h1 class="banner-title" data-animate data-delay="120">
                            Your products deserve a <span class="text-gradient-brand">better showcase</span>
                        </h1>
                        <p class="banner-text max-width-700" data-animate data-delay="220">
                            A product catalog is more than a list of items — it's your silent
                            salesperson, working 24/7 to educate, inspire and convert. Whether you're
                            launching a new collection, expanding your B2B reach, or simply want to
                            present your offerings with the polish they deserve, MellowDigi crafts
                            catalogs that turn browsers into buyers.
                        </p>
                        <p class="banner-text max-width-700" data-animate data-delay="260">
                            We blend stunning visuals with strategic organization so your products
                            don't just sit on a page — they sell themselves.
                        </p>
                        <div class="d-flex flex-wrap gap-3" data-animate data-delay="320">
                            <a href="portfolio.html" class="btn-hero-cta">See Our Catalog Work</a>
                            <a href="contact.php" class="btn-hero-cta">Start Your Catalog</a>
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
                                <span class="cycle-label"><?php echo $esc($slide['label']); ?></span>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ banner-->

         <!-- why product catalogs matter -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Why Product Catalog Development Matters</p>
                        <h2 class="section-heading">Cutting through the endless scroll</h2>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="why-card why-card-intro" style="--accent:#2BACE2" data-animate>
                            <h3>Trust, Built Page by Page</h3>
                            <p>In a world of endless scrolling, a well-crafted catalog cuts through the
                            noise. It's a tangible (or beautifully digital) asset that builds trust,
                            answers questions before they're asked, and positions your brand as
                            professional and reliable.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="why-card" style="--accent:#3DB54A" data-animate data-delay="90">
                            <h3>The Numbers Speak Volumes</h3>
                            <p>Customers who interact with a well-designed product catalog are 80% more
                            likely to make a purchase. For B2B businesses, catalogs are still the #1
                            sales enablement tool used by field teams. A scattered, cluttered catalog
                            confuses customers and costs you sales — a thoughtfully designed one does
                            the heavy lifting for your sales team.</p>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ why product catalogs matter -->

         <!-- what we offer -->
         <section class="popular-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Our Catalog Development Services</p>
                        <h2 class="section-heading">A catalog for every stage of the sale</h2>
                    </div>
                </div>
                <div class="row g-4">
                    <?php foreach ($categories as $i => $category): ?>
                    <div class="col-6 col-md-4 col-lg" data-animate data-delay="<?php echo $i * 80; ?>">
                        <div class="popular-service-card" style="--accent:<?php echo $esc($category['accent']); ?>">
                            <span class="popular-service-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><?php echo $siteData['icons'][$category['icon']]; ?></svg>
                            </span>
                            <h6><?php echo $category['title']; ?></h6>
                            <p><?php echo $esc($category['subtitle']); ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ what we offer -->

         <!-- catalog categories detail -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">A Closer Look</p>
                        <h2 class="section-heading">What's inside each catalog</h2>
                    </div>
                </div>
                <div class="row g-4">
                    <?php foreach ($categories as $i => $category): ?>
                    <div class="col-lg-6">
                        <div class="why-card<?php echo $i === 0 ? ' why-card-intro' : ''; ?>" style="--accent:<?php echo $esc($category['accent']); ?>" data-animate data-delay="<?php echo ($i % 2) * 90; ?>">
                            <h3><?php echo $category['title']; ?></h3>
                            <p><?php echo $esc($category['intro']); ?></p>
                            <ul class="startup-checklist">
                                <?php foreach ($category['items'] as $item): ?>
                                <li><strong><?php echo $item['title']; ?></strong> — <?php echo $item['description']; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ catalog categories detail -->

         <!-- our process -->
         <section class="who-we-are">
            <div class="bg-bubble bubble-blue" aria-hidden="true"></div>
            <div class="bg-bubble bubble-green" aria-hidden="true"></div>
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Our Process</p>
                        <h2 class="section-heading">From raw data to beautiful catalog</h2>
                        <p class="banner-text max-width-700" data-animate data-delay="80">
                            We don't just arrange products on a page. We build a catalog that reflects
                            your brand and serves your business goals.
                        </p>
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
         <!--/ our process -->

         <!-- why choose us -->
         <section class="home_startup">
            <div class="row g-0 align-items-stretch">
                <div class="col-lg-6 startup-image" data-animate>
                    <img src="img/startup.jpg" alt="MellowDigi product catalog design team at work">
                </div>
                <div class="col-lg-6 startup-content">
                    <div class="startup-content-inner">
                        <h2 class="startup-heading" data-animate>Why startups choose MellowDigi for catalogs</h2>
                        <h3 class="startup-subheading" data-animate data-delay="80">We start small and scale with you</h3>
                        <p class="startup-text" data-animate data-delay="160">
                            Product catalogs often involve messy spreadsheets, outdated images and
                            missing specs. We roll up our sleeves so the end result is accurate,
                            organized and professional.
                        </p>
                        <ul class="startup-checklist" data-animate data-delay="220">
                            <?php foreach ($reasons as $reason): ?>
                            <li><strong><?php echo $esc($reason['title']); ?></strong> — <?php echo $esc($reason['description']); ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <a href="contact.php" class="btn-hero-cta" data-animate data-delay="280">Let's Talk Catalogs</a>
                    </div>
                </div>
            </div>
         </section>
         <!--/ why choose us -->

         <!-- what makes a great catalog -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">What Makes a Great Product Catalog?</p>
                        <h2 class="section-heading">The elements we make sure every catalog has</h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
                    <?php foreach ($elements as $i => $element): ?>
                    <div class="col" data-animate data-delay="<?php echo $i * 80; ?>">
                        <div class="popular-service-card" style="--accent:<?php echo $esc($element['accent']); ?>">
                            <span class="popular-service-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><?php echo $siteData['icons'][$element['icon']]; ?></svg>
                            </span>
                            <h6><?php echo $element['title']; ?></h6>
                            <p><?php echo $esc($element['description']); ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ what makes a great catalog -->

         <!-- catalog formats -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Catalog Formats We Offer</p>
                        <h2 class="section-heading">Built for however your customers browse</h2>
                    </div>
                </div>
                <div class="audience-pills" data-animate data-delay="100">
                    <?php foreach ($formats as $format): ?>
                    <span class="audience-pill"><?php echo $esc($format); ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ catalog formats -->

         <!-- cta -->
         <section class="founder-section">
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row align-items-center g-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Ready to Showcase Your Products Like Never Before?</p>
                        <h2 class="section-heading">Whether you're launching your first catalog or modernizing an old one, we're here to help.</h2>
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
                            <a href="contact.php" class="btn-hero-cta">Get a Free Catalog Audit</a>
                            <a href="contact.php" class="btn-hero-cta">Request a Quote</a>
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
