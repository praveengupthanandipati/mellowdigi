<?php
$siteData = json_decode(file_get_contents(__DIR__ . '/data/site-data.json'), true);

$pageTitle       = 'Corporate Branding & Identity Services | MellowDigi';
$pageDescription = 'Build a strong, memorable brand identity with MellowDigi — logo design, brand guidelines, color & typography, brand messaging and stationery design for startups and growing businesses.';
$pageKeywords    = 'corporate branding, brand identity design, logo design agency, brand guidelines, stationery design, MellowDigi branding services';
$pageUrl         = 'https://www.mellowdigi.com/corporate-branding.php';
include __DIR__ . '/components/header.php';

$offers = [
    ['icon' => 'pencil', 'accent' => '#2BACE2', 'title' => 'Logo Design', 'description' => 'Clean, modern logos that capture your brand personality.'],
    ['icon' => 'book', 'accent' => '#3DB54A', 'title' => 'Brand Guidelines', 'description' => 'A simple brand book covering logo, color, font and tone usage.'],
    ['icon' => 'palette', 'accent' => '#F99E1F', 'title' => 'Color Palette & Typography', 'description' => 'Colors and fonts chosen to make your brand feel professional.'],
    ['icon' => 'megaphone', 'accent' => '#8B5CF6', 'title' => 'Brand Messaging', 'description' => 'A clear brand voice that connects with your customers.'],
    ['icon' => 'idcard', 'accent' => '#F43F5E', 'title' => 'Stationery Design', 'description' => 'Business cards, letterheads and email signatures, on-brand.'],
];

$reasons = [
    ['title' => 'We Keep It Simple', 'description' => 'No confusing jargon — we explain everything in plain English.'],
    ['title' => 'Startup Friendly', 'description' => 'We understand small budgets and big dreams.'],
    ['title' => 'Fast & Reliable', 'description' => 'We deliver on time, every time.'],
    ['title' => 'Custom & Creative', 'description' => 'Every brand is different. We design uniquely for you.'],
    ['title' => 'End-to-End Support', 'description' => 'From idea to final delivery, we are with you at every step.'],
];

$process = [
    ['step' => '01', 'title' => 'Discovery', 'description' => 'We listen to your ideas, goals and vision.'],
    ['step' => '02', 'title' => 'Research', 'description' => 'We study your industry, competitors and audience.'],
    ['step' => '03', 'title' => 'Design', 'description' => 'We create initial logo concepts and brand elements.'],
    ['step' => '04', 'title' => 'Feedback', 'description' => 'You share your thoughts — we refine and improve.'],
    ['step' => '05', 'title' => 'Final Delivery', 'description' => 'We provide all brand assets in ready-to-use formats.'],
];

$audiences = ['Startups & New Businesses', 'Small & Medium Enterprises', 'Freelancers & Professionals', 'E-Commerce Brands', 'Service-Based Companies'];

$heroIcons = [
    ['icon' => 'pencil', 'label' => 'Logo Design'],
    ['icon' => 'book', 'label' => 'Brand Guidelines'],
    ['icon' => 'palette', 'label' => 'Color & Typography'],
    ['icon' => 'megaphone', 'label' => 'Brand Messaging'],
    ['icon' => 'idcard', 'label' => 'Stationery Design'],
];
?>

     <!-- main -->
     <main>
        <!-- banner-->
         <section class="banner">
            <div class="container-fluid nav-shell">
                <div class="row align-items-center banner-hero">
                    <div class="col-lg-6">
                        <p class="eyebrow" data-animate>Corporate Branding &amp; Identity</p>
                        <h1 class="banner-title" data-animate data-delay="120">
                            Your brand. Your story. <span class="text-gradient-brand">Made simple.</span>
                        </h1>
                        <p class="banner-text max-width-700" data-animate data-delay="220">
                            Your brand is more than just a logo — it's how people feel when they hear
                            your name. At MellowDigi, we help startups and growing businesses build a
                            strong, memorable identity that connects with the right audience.
                        </p>
                        <p class="banner-text max-width-700" data-animate data-delay="260">
                            Whether you're launching a new business or refreshing an old one, we make
                            branding easy, clear and effective.
                        </p>
                        <a href="contact.html" class="btn-hero-cta" data-animate data-delay="320">Let's Connect</a>
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
                        <h2 class="section-heading">Everything your brand identity needs</h2>
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
                    <img src="img/startup.jpg" alt="MellowDigi branding team at work">
                </div>
                <div class="col-lg-6 startup-content">
                    <div class="startup-content-inner">
                        <h2 class="startup-heading" data-animate>Why choose MellowDigi?</h2>
                        <h3 class="startup-subheading" data-animate data-delay="80">Branding that's built around you</h3>
                        <p class="startup-text" data-animate data-delay="160">
                            We've worked with founders who know exactly what they want, and with
                            founders who've never thought about branding before. Either way, our job is
                            to make the process feel easy.
                        </p>
                        <ul class="startup-checklist" data-animate data-delay="220">
                            <?php foreach ($reasons as $reason): ?>
                            <li><strong><?php echo $esc($reason['title']); ?></strong> — <?php echo $esc($reason['description']); ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <a href="contact.html" class="btn-hero-cta" data-animate data-delay="280">Let's Talk Branding</a>
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
                        <h2 class="section-heading">Five steps from idea to finished brand</h2>
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
                        <h2 class="section-heading">Built for businesses at every stage</h2>
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
                        <p class="eyebrow">Let's Build Your Brand Together</p>
                        <h2 class="section-heading">Your brand is the first impression. Make it count.</h2>
                        <p class="founder-bio">
                            Whether you need a complete brand makeover or just a fresh logo, MellowDigi
                            is here to help.
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
        <?php include __DIR__ . '/components/enquiry-form.php'; ?>
     </main>
     <!--/ main -->

<?php include __DIR__ . '/components/footer.php'; ?>
