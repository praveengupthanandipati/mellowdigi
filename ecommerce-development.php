<?php
$siteData = json_decode(file_get_contents(__DIR__ . '/data/site-data.json'), true);

$pageTitle       = 'E-Commerce Development | MellowDigi';
$pageDescription = 'Sell more, stress less. MellowDigi builds custom e-commerce websites that are fast, secure and designed to convert visitors into loyal customers.';
$pageKeywords    = 'e-commerce development, online store builder, Shopify development, WooCommerce development, custom e-commerce website, payment gateway integration, shopping cart development, B2B e-commerce, multi-vendor marketplace, MellowDigi e-commerce';
$pageUrl         = 'https://www.mellowdigi.com/ecommerce-development.php';
include __DIR__ . '/components/header.php';

$handles = [
    'Product displays that make items irresistible',
    'Shopping carts that work flawlessly',
    "Checkout processes that don't frustrate customers",
    'Payment systems that are secure and reliable',
    'Inventory management that keeps track of every item',
];

$services = [
    ['icon' => 'webmobile', 'accent' => '#2BACE2', 'title' => 'Custom E-Commerce Websites', 'subtitle' => 'No Templates', 'description' => 'We build online stores tailored to your products, brand and customers. No templates &mdash; just a store designed for your business.', 'items' => []],
    ['icon' => 'layout', 'accent' => '#3DB54A', 'title' => 'Platform-Based Solutions', 'subtitle' => 'Already Using a Platform?', 'description' => 'We optimize and customize:', 'items' => ['Shopify', 'WooCommerce (WordPress)', 'Magento', 'BigCommerce', 'Wix E-commerce', 'Custom-built solutions']],
    ['icon' => 'idcard', 'accent' => '#F99E1F', 'title' => 'Payment Gateway Integration', 'subtitle' => 'However Customers Prefer to Pay', 'description' => 'We integrate secure payment options so your customers can pay the way they prefer:', 'items' => ['Credit / Debit Cards', 'PayPal, Stripe, Razorpay', 'UPI, Google Pay, Apple Pay', 'Buy Now, Pay Later options', 'Bank Transfers']],
    ['icon' => 'box', 'accent' => '#8B5CF6', 'title' => 'Inventory &amp; Order Management', 'subtitle' => 'Track, Manage, Fulfill', 'description' => 'We build systems that help you track stock, manage orders and fulfill shipments effortlessly.', 'items' => []],
    ['icon' => 'network', 'accent' => '#F43F5E', 'title' => 'Shopping Cart Development', 'subtitle' => 'Reduce Abandonment', 'description' => 'Smooth, user-friendly cart experiences that reduce abandonment and increase sales.', 'items' => []],
    ['icon' => 'photostack', 'accent' => '#14B8A6', 'title' => 'Product Catalog Setup', 'subtitle' => 'Organized to Sell', 'description' => 'We organize your products with:', 'items' => ['High-quality image optimization', 'Clear product descriptions', 'Pricing and variation management &mdash; size, color, etc.', 'Customer reviews and ratings']],
    ['icon' => 'briefcase', 'accent' => '#2BACE2', 'title' => 'Shipping &amp; Tax Configuration', 'subtitle' => 'Streamlined Fulfillment', 'description' => 'We set up shipping options, calculate taxes and integrate with shipping providers to streamline fulfillment.', 'items' => []],
    ['icon' => 'phone', 'accent' => '#3DB54A', 'title' => 'Mobile-Responsive Design', 'subtitle' => 'Every Device', 'description' => 'Your store works perfectly on every device &mdash; phones, tablets and desktops.', 'items' => []],
    ['icon' => 'search', 'accent' => '#F99E1F', 'title' => 'Post-Launch Support', 'subtitle' => "We Don't Disappear", 'description' => "We don't disappear after launch. We offer ongoing maintenance, updates and improvements.", 'items' => []],
];

$storeTypes = [
    ['icon' => 'box', 'accent' => '#2BACE2', 'title' => 'Physical Products', 'description' => 'Clothing, electronics, beauty, furniture, groceries and more.'],
    ['icon' => 'photostack', 'accent' => '#3DB54A', 'title' => 'Digital Products', 'description' => 'E-books, courses, software, music and downloads.'],
    ['icon' => 'idcard', 'accent' => '#F99E1F', 'title' => 'Subscription-Based', 'description' => 'Monthly boxes, memberships, recurring services.'],
    ['icon' => 'network', 'accent' => '#8B5CF6', 'title' => 'Dropshipping Stores', 'description' => 'No inventory? No problem. We integrate with dropshipping suppliers.'],
    ['icon' => 'layout', 'accent' => '#F43F5E', 'title' => 'Multi-Vendor Marketplaces', 'description' => 'Platforms where multiple sellers offer their products.'],
    ['icon' => 'briefcase', 'accent' => '#14B8A6', 'title' => 'B2B E-Commerce', 'description' => 'Wholesale stores with bulk ordering and special pricing.'],
];

$featureGroups = [
    [
        'title' => 'Performance &amp; Trust',
        'features' => [
            'Fast Loading Speed &mdash; shoppers leave slow sites, so we optimize for speed',
            'Secure Checkout &mdash; SSL encryption and PCI compliance for safe transactions',
            'Easy Navigation &mdash; customers find what they need in seconds',
            'Search &amp; Filter &mdash; advanced product search and filtering options',
            'SEO-Friendly &mdash; built to rank on Google and attract organic traffic',
        ],
    ],
    [
        'title' => 'Customer Experience &amp; Growth',
        'features' => [
            'Wishlist Functionality &mdash; customers save items for later',
            'Abandoned Cart Recovery &mdash; automated reminders to bring customers back',
            'Customer Accounts &mdash; easy login, order tracking and reordering',
            'Analytics Integration &mdash; track sales, traffic and customer behavior',
            'Multi-Currency &amp; Multi-Language &mdash; sell to customers worldwide',
        ],
    ],
];

$reasons = [
    ['title' => 'Conversion Focused', 'description' => "We don't just build stores &mdash; we build stores that sell."],
    ['title' => 'Secure &amp; Reliable', 'description' => "Your customers' data and payments are always protected."],
    ['title' => 'Scalable Solutions', 'description' => 'As you grow, your store grows with you.'],
    ['title' => 'User-Friendly Admin', 'description' => "You don't need to be a tech expert to manage your store."],
    ['title' => 'Stress-Free Experience', 'description' => 'We handle the complexity so you can focus on selling.'],
    ['title' => 'Ongoing Support', 'description' => "We're here whenever you need us &mdash; even after launch."],
];

$process = [
    ['step' => '01', 'title' => 'Discovery', 'description' => 'We understand your products, target audience and business goals.'],
    ['step' => '02', 'title' => 'Strategy &amp; Planning', 'description' => 'We decide the best platform, features and design approach for your store.'],
    ['step' => '03', 'title' => 'Design', 'description' => 'We create a visually stunning, brand-aligned store design.'],
    ['step' => '04', 'title' => 'Development', 'description' => 'We build your store &mdash; integrating payment systems, product catalogs and shipping.'],
    ['step' => '05', 'title' => 'Testing', 'description' => 'We test everything: payments, checkout, navigation, mobile responsiveness and security.'],
    ['step' => '06', 'title' => 'Launch', 'description' => 'We go live &mdash; ensuring a smooth transition with zero downtime.'],
    ['step' => '07', 'title' => 'Marketing Integration', 'description' => 'We connect your store with Google Analytics, Facebook Pixel and email marketing tools.'],
    ['step' => '08', 'title' => 'Post-Launch Support', 'description' => 'We monitor, maintain and continuously improve your store.'],
];

$challenges = [
    ['challenge' => 'Low conversions', 'solution' => 'We optimize design and checkout flow for higher sales.'],
    ['challenge' => 'Abandoned carts', 'solution' => 'We implement recovery email automation.'],
    ['challenge' => 'Security concerns', 'solution' => 'We add SSL, secure payment gateways and fraud protection.'],
    ['challenge' => 'Slow loading', 'solution' => 'We optimize code, images and hosting for speed.'],
    ['challenge' => 'Hard to manage', 'solution' => 'We build intuitive admin panels for easy store management.'],
    ['challenge' => 'Not mobile-friendly', 'solution' => 'We create fully responsive stores that work on all devices.'],
    ['challenge' => 'Poor product search', 'solution' => 'We add advanced search and filter functionality.'],
];

$faqs = [
    ['question' => 'Which e-commerce platform is best for me?', 'answer' => "It depends on your business size, budget and needs. We recommend the best option for you &mdash; whether it's Shopify, WooCommerce, Magento or a custom build."],
    ['question' => 'How long does it take to build an e-commerce store?', 'answer' => 'A basic store: 2&ndash;4 weeks. A complex store with custom features: 1&ndash;3 months. We give you a clear timeline upfront.'],
    ['question' => 'Can I migrate my existing store to a new platform?', 'answer' => 'Yes! We can migrate your products, customers and order history to a new platform with minimal disruption.'],
    ['question' => 'How secure is my store?', 'answer' => 'We implement SSL certificates, secure payment gateways and follow PCI compliance standards to keep your store and customer data safe.'],
    ['question' => 'Will my store be mobile-friendly?', 'answer' => 'Absolutely. Every store we build is fully responsive and works perfectly on all devices.'],
    ['question' => 'Can I manage my store myself?', 'answer' => "Yes! We build user-friendly admin panels that let you add products, process orders and manage inventory without needing technical skills."],
    ['question' => 'Do you integrate with shipping providers?', 'answer' => 'Yes. We integrate with major shipping carriers like FedEx, DHL, Blue Dart and more.'],
    ['question' => 'How much does e-commerce development cost?', 'answer' => 'Every store is different. We provide a custom quote based on your requirements. Contact us for a free estimate.'],
    ['question' => 'Do you offer ongoing support?', 'answer' => 'Yes! We offer maintenance packages for security updates, performance optimization and new feature additions.'],
];

$heroIcons = [
    ['icon' => 'box', 'label' => 'E-Commerce Development'],
];
?>

     <!-- main -->
     <main>
        <!-- banner-->
         <section class="banner">
            <div class="container-fluid nav-shell">
                <div class="row align-items-center banner-hero">
                    <div class="col-lg-6">
                        <p class="eyebrow" data-animate>E-Commerce Development</p>
                        <h1 class="banner-title" data-animate data-delay="120">
                            Turn <span class="text-gradient-brand">browsers into buyers</span>
                        </h1>
                        <p class="banner-text max-width-700" data-animate data-delay="220">
                            Your online store should do more than just look good &mdash; it should
                            sell. At MellowDigi, we build e-commerce websites that are beautiful,
                            fast and optimized for conversions.
                        </p>
                        <p class="banner-text max-width-700" data-animate data-delay="260">
                            From seamless checkout experiences to secure payment integration, we
                            create online stores that your customers will love to shop from.
                        </p>
                        <div class="d-flex flex-wrap gap-3" data-animate data-delay="320">
                            <a href="portfolio.html" class="btn-hero-cta">See Our Work</a>
                            <a href="contact.php" class="btn-hero-cta">Ready to Start Selling?</a>
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

         <!-- what is ecommerce development -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">What Is E-Commerce Development?</p>
                        <h2 class="section-heading">Think of it like building a digital storefront</h2>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="why-card why-card-intro" style="--accent:#2BACE2" data-animate>
                            <h3>More Than Products Online</h3>
                            <p>It's not just about putting products online. It's about creating a
                            shopping experience that feels smooth, trustworthy and enjoyable. The
                            result? A store that sells while you sleep.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="why-card" style="--accent:#3DB54A" data-animate data-delay="90">
                            <h3>We Handle Everything</h3>
                            <ul class="startup-checklist">
                                <?php foreach ($handles as $item): ?>
                                <li><?php echo $item; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ what is ecommerce development -->

         <!-- what we offer -->
         <section class="popular-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Our E-Commerce Services</p>
                        <h2 class="section-heading">Everything your store needs to sell</h2>
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
                            <p><?php echo $service['subtitle']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ what we offer -->

         <!-- services detail -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">A Closer Look</p>
                        <h2 class="section-heading">What's inside every store</h2>
                    </div>
                </div>
                <div class="row g-4">
                    <?php foreach ($services as $i => $service): ?>
                    <div class="col-12">
                        <div class="why-card<?php echo $i === 0 ? ' why-card-intro' : ''; ?>" style="--accent:<?php echo $esc($service['accent']); ?>" data-animate data-delay="<?php echo $i * 60; ?>">
                            <h3><?php echo $service['title']; ?></h3>
                            <p><?php echo $service['description']; ?></p>
                            <?php if (!empty($service['items'])): ?>
                            <ul class="startup-checklist">
                                <?php foreach ($service['items'] as $item): ?>
                                <li><?php echo $item; ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ services detail -->

         <!-- types of stores -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Types of E-Commerce Stores We Build</p>
                        <h2 class="section-heading">Whatever you sell, however you sell it</h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
                    <?php foreach ($storeTypes as $i => $type): ?>
                    <div class="col" data-animate data-delay="<?php echo $i * 80; ?>">
                        <div class="popular-service-card" style="--accent:<?php echo $esc($type['accent']); ?>">
                            <span class="popular-service-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><?php echo $siteData['icons'][$type['icon']]; ?></svg>
                            </span>
                            <h6><?php echo $esc($type['title']); ?></h6>
                            <p><?php echo $esc($type['description']); ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ types of stores -->

         <!-- key features -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Key Features We Include in Every Store</p>
                        <h2 class="section-heading">Built in, not bolted on</h2>
                    </div>
                </div>
                <div class="row g-4">
                    <?php foreach ($featureGroups as $i => $group): ?>
                    <div class="col-lg-6">
                        <div class="why-card<?php echo $i === 0 ? ' why-card-intro' : ''; ?>" data-animate data-delay="<?php echo $i * 90; ?>">
                            <h3><?php echo $group['title']; ?></h3>
                            <ul class="startup-checklist">
                                <?php foreach ($group['features'] as $feature): ?>
                                <li><?php echo $feature; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ key features -->

         <!-- our process -->
         <section class="who-we-are">
            <div class="bg-bubble bubble-blue" aria-hidden="true"></div>
            <div class="bg-bubble bubble-green" aria-hidden="true"></div>
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Our Simple Process</p>
                        <h2 class="section-heading">From discovery to ongoing support</h2>
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
         <!--/ our process -->

         <!-- why choose us -->
         <section class="home_startup">
            <div class="row g-0 align-items-stretch">
                <div class="col-lg-6 startup-image" data-animate>
                    <img src="img/startup.jpg" alt="MellowDigi e-commerce team at work">
                </div>
                <div class="col-lg-6 startup-content">
                    <div class="startup-content-inner">
                        <h2 class="startup-heading" data-animate>Why choose MellowDigi for e-commerce?</h2>
                        <h3 class="startup-subheading" data-animate data-delay="80">We build stores that sell</h3>
                        <p class="startup-text" data-animate data-delay="160">
                            As you grow, your store grows with you &mdash; and we handle the
                            complexity so you can focus on selling.
                        </p>
                        <ul class="startup-checklist" data-animate data-delay="220">
                            <?php foreach ($reasons as $reason): ?>
                            <li><strong><?php echo $reason['title']; ?></strong> &mdash; <?php echo $reason['description']; ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <a href="contact.php" class="btn-hero-cta" data-animate data-delay="280">Let's Talk E-Commerce</a>
                    </div>
                </div>
            </div>
         </section>
         <!--/ why choose us -->

         <!-- common challenges -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Common E-Commerce Challenges We Solve</p>
                        <h2 class="section-heading">Chances are, we've solved yours before</h2>
                    </div>
                </div>
                <div class="row g-4">
                    <?php foreach ($challenges as $i => $item): ?>
                    <div class="col-lg-6">
                        <div class="why-card<?php echo $i === 0 ? ' why-card-intro' : ''; ?>" data-animate data-delay="<?php echo ($i % 2) * 90; ?>">
                            <h3><?php echo $esc($item['challenge']); ?></h3>
                            <p><?php echo $esc($item['solution']); ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ common challenges -->

         <!-- the mellow guarantee -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-8" data-animate>
                        <p class="eyebrow">The Mellow Guarantee</p>
                        <h2 class="section-heading">Your online store should be a sales machine &mdash; not a headache.</h2>
                        <p class="banner-text max-width-700 mx-auto">
                            We promise to build a platform that converts visitors into customers,
                            handles growth and makes running your business easier.
                        </p>
                    </div>
                </div>
            </div>
         </section>
         <!--/ the mellow guarantee -->

         <!-- faq -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Frequently Asked Questions</p>
                        <h2 class="section-heading">Questions, answered before you ask</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
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

         <!-- cta -->
         <section class="founder-section">
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row align-items-center g-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Ready to Build Your Online Store?</p>
                        <h2 class="section-heading">Stop losing sales to a poor online experience. Let's build a store that sells &mdash; 24/7, 365 days a year.</h2>
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
                            <a href="contact.php" class="btn-hero-cta">Start Your E-Commerce Journey</a>
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
