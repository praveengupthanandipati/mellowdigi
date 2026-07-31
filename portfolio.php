<?php
$siteData = json_decode(file_get_contents(__DIR__ . '/data/site-data.json'), true);

$pageTitle       = 'Portfolio | MellowDigi';
$pageDescription = 'Explore a selection of MellowDigi projects across branding, web development, video production and digital marketing.';
$pageKeywords    = 'portfolio, case studies, branding projects, web development projects, video editing portfolio, MellowDigi';
$pageUrl         = 'https://www.mellowdigi.com/portfolio.php';
include __DIR__ . '/components/header.php';

$heroIcons = [
    ['icon' => 'photostack', 'label' => 'Portfolio &amp; Case Studies'],
];

$stats = [
    ['number' => '250+', 'label' => 'Projects Delivered'],
    ['number' => '40+', 'label' => 'Industries Served'],
    ['number' => '98%', 'label' => 'Client Retention'],
    ['number' => '12+', 'label' => 'Years Combined Experience'],
];

$portfolioProjects = [
    ['image' => 'img/recent-projects/home_1.jpg', 'accent' => '#2BACE2', 'title' => 'Startup Brand Identity', 'client' => 'Nimbus Technologies', 'work' => 'Brand Identity'],
    ['image' => 'img/recent-projects/home_2.jpg', 'accent' => '#3DB54A', 'title' => 'Higher Education Rebrand', 'client' => 'Crestview University', 'work' => 'Brand Strategy'],
    ['image' => 'img/recent-projects/home_3.jpg', 'accent' => '#F99E1F', 'title' => 'Fashion Brand Identity', 'client' => 'Loom &amp; Thread', 'work' => 'Brand Identity'],
    ['image' => 'img/recent-projects/home_4.jpg', 'accent' => '#8B5CF6', 'title' => 'Logistics Brand System', 'client' => 'Cargo Line Freight', 'work' => 'Visual Identity'],
    ['image' => 'img/startup.jpg', 'accent' => '#F43F5E', 'title' => 'E-Commerce Storefront', 'client' => 'Urban Roots Co.', 'work' => 'Web Development'],
    ['image' => 'img/recent-projects/home_1.jpg', 'accent' => '#14B8A6', 'title' => 'Product Launch Campaign', 'client' => 'Sundial Beverages', 'work' => 'Social Media Marketing'],
    ['image' => 'img/recent-projects/home_2.jpg', 'accent' => '#2BACE2', 'title' => 'Corporate Brand Film', 'client' => 'Meridian Consulting', 'work' => 'Video Editing'],
    ['image' => 'img/recent-projects/home_3.jpg', 'accent' => '#3DB54A', 'title' => 'Wellness App Interface', 'client' => 'Pulse Health', 'work' => 'UI/UX Design'],
];
?>

     <!-- main -->
     <main>
        <!-- banner-->
         <section class="banner">
            <div class="container-fluid nav-shell">
                <div class="row align-items-center banner-hero">
                    <div class="col-lg-6">
                        <p class="eyebrow" data-animate>Our Work</p>
                        <h1 class="banner-title" data-animate data-delay="120">
                            A <span class="text-gradient-brand">portfolio</span> built on results.
                        </h1>
                        <p class="banner-text max-width-700" data-animate data-delay="220">
                            A look at the brands, products and campaigns we've helped bring to
                            life across branding, web, video and marketing.
                        </p>
                        <div class="d-flex flex-wrap gap-3 mb-4" data-animate data-delay="280">
                            <a href="contact.php" class="btn-hero-cta">Start a Project</a>
                            <a href="#enquiry" class="btn-hero-cta">Send an Enquiry</a>
                        </div>
                        <div class="row row-cols-2 row-cols-sm-4 g-3 tutorial-stats" data-animate data-delay="320">
                            <?php foreach ($stats as $stat): ?>
                            <div class="col">
                                <div class="who-stat">
                                    <h3><?php echo $esc($stat['number']); ?></h3>
                                    <p><?php echo $esc($stat['label']); ?></p>
                                </div>
                            </div>
                            <?php endforeach; ?>
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

         <!-- portfolio grid -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Recent Work</p>
                        <h2 class="section-heading">Projects we're proud of</h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
                    <?php foreach ($portfolioProjects as $i => $project): ?>
                    <div class="col" data-animate data-delay="<?php echo ($i % 4) * 90; ?>">
                        <div class="portfolio-card" style="--accent:<?php echo $esc($project['accent']); ?>">
                            <div class="portfolio-card-media">
                                <img src="<?php echo $esc($project['image']); ?>" alt="<?php echo $esc($project['title']); ?> — <?php echo $esc($project['client']); ?>" loading="lazy">
                            </div>
                            <div class="portfolio-card-body">
                                <span class="portfolio-card-work"><?php echo $project['work']; ?></span>
                                <h3 class="portfolio-card-title"><?php echo $esc($project['title']); ?></h3>
                                <p class="portfolio-card-client"><?php echo $project['client']; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ portfolio grid -->

         <!-- get a quote -->
         <section class="founder-section">
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row align-items-center g-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Pricing Inquiry</p>
                        <h2 class="section-heading">Get a custom quote</h2>
                        <p class="founder-bio">
                            Every project is unique. We'll provide a tailored quote after
                            understanding your specific needs.
                        </p>
                        <ul class="footer-contact">
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><?php echo $siteData['icons']['mail']; ?></svg>
                                <span>Email: info@mellowdigi.com</span>
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><?php echo $siteData['icons']['call']; ?></svg>
                                <span>Phone: +91 77999 71112</span>
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><?php echo $siteData['icons']['network']; ?></svg>
                                <span>Live Chat: Available on website</span>
                            </li>
                        </ul>
                        <span class="tutorial-level-badge">Response Time: Within 1 business hour</span>
                    </div>
                    <div class="col-lg-5 text-lg-end" data-animate data-delay="150">
                        <p class="founder-bio">Ready to start your project?</p>
                        <div class="d-flex flex-wrap gap-3 justify-content-lg-end">
                            <a href="contact.php" class="btn-hero-cta">Request a Quote</a>
                            <a href="contact.php" class="btn-hero-cta">Book a Consultation</a>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ get a quote -->

         <!-- contact -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row g-4">
                    <div class="col-lg-6" data-animate>
                        <div class="why-card why-card-intro h-100 mb-0" style="--accent:#2BACE2">
                            <h3>MellowDigi Interactive Media</h3>
                            <ul class="footer-contact">
                                <li>
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><?php echo $siteData['icons']['pin']; ?></svg>
                                    <span>Hyderabad, Telangana</span>
                                </li>
                                <li>
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><?php echo $siteData['icons']['call']; ?></svg>
                                    <span>+91 77999 71112</span>
                                </li>
                                <li>
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><?php echo $siteData['icons']['mail']; ?></svg>
                                    <span>info@mellowdigi.com</span>
                                </li>
                                <li>
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><?php echo $siteData['icons']['webmobile']; ?></svg>
                                    <span>www.mellowdigi.com</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6" data-animate data-delay="90">
                        <div class="why-card h-100 mb-0" style="--accent:#3DB54A">
                            <h3>Business Hours</h3>
                            <div class="addon-list">
                                <div class="addon-row">
                                    <span class="addon-name">Monday &ndash; Saturday</span>
                                    <span class="addon-price">9:00 AM &ndash; 9:00 PM IST</span>
                                </div>
                                <div class="addon-row">
                                    <span class="addon-name">Emergency Support</span>
                                    <span class="addon-price">24/7 Available</span>
                                </div>
                            </div>
                            <p class="mt-3 mb-0">Follow us on YouTube, Instagram, LinkedIn and Twitter/X to see more of our work.</p>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ contact -->
     </main>
     <!--/ main -->

<?php include __DIR__ . '/components/footer.php'; ?>
