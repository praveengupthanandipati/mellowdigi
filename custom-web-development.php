<?php
$siteData = json_decode(file_get_contents(__DIR__ . '/data/site-data.json'), true);

$pageTitle       = 'Custom Web Development | MellowDigi';
$pageDescription = 'Custom websites built for your business, not a template. MellowDigi creates fast, secure and scalable web platforms that grow with you.';
$pageKeywords    = 'custom web development, web application development, custom website design, e-commerce development, SaaS platform development, CRM development, booking system development, full-stack development, MellowDigi web development';
$pageUrl         = 'https://www.mellowdigi.com/custom-web-development.php';
include __DIR__ . '/components/header.php';

$benefits = [
    'Exactly the features you need &mdash; nothing more, nothing less',
    'A design that truly reflects your brand',
    'Room to grow and add new features later',
    'Security and performance optimized for your specific use case',
];

$services = [
    ['icon' => 'webmobile', 'accent' => '#2BACE2', 'title' => 'Custom Websites', 'subtitle' => 'Professional &amp; Visually Stunning', 'description' => 'From corporate sites to portfolio showcases &mdash; we build professional, visually stunning websites that tell your story.'],
    ['icon' => 'codebrackets', 'accent' => '#3DB54A', 'title' => 'Web Applications', 'subtitle' => 'Beyond the Brochure Site', 'description' => 'Need something more than a brochure site? We build custom business applications, client portals, dashboards and internal tools.'],
    ['icon' => 'box', 'accent' => '#F99E1F', 'title' => 'E-Commerce Development', 'subtitle' => 'Built to Convert', 'description' => 'Custom online stores with seamless payment integration, inventory management and a checkout experience that converts.'],
    ['icon' => 'network', 'accent' => '#8B5CF6', 'title' => 'SaaS Platforms', 'subtitle' => 'Scalable From Day One', 'description' => 'We build scalable Software-as-a-Service platforms for startups and growing businesses in EdTech, FinTech, Healthcare and more.'],
    ['icon' => 'book', 'accent' => '#F43F5E', 'title' => 'Booking &amp; Reservation Systems', 'subtitle' => 'For Service-Based Businesses', 'description' => 'Custom scheduling solutions for service-based businesses &mdash; from appointment booking to resource management.'],
    ['icon' => 'briefcase', 'accent' => '#14B8A6', 'title' => 'CRM &amp; ERP Solutions', 'subtitle' => 'Streamline Your Operations', 'description' => 'Custom business management systems that streamline your operations, from lead tracking to order fulfillment.'],
];

$techStack = [
    ['accent' => '#2BACE2', 'title' => 'Front-End', 'items' => ['React', 'Angular', 'Vue.js', 'HTML5', 'CSS3', 'JavaScript']],
    ['accent' => '#3DB54A', 'title' => 'Back-End', 'items' => ['Node.js', 'PHP (Laravel)', 'Python (Django)', 'TypeScript']],
    ['accent' => '#F99E1F', 'title' => 'CMS &amp; E-Commerce', 'items' => ['WordPress', 'WooCommerce', 'Custom Solutions']],
    ['accent' => '#8B5CF6', 'title' => 'Database', 'items' => ['MySQL', 'PostgreSQL', 'MongoDB']],
    ['accent' => '#F43F5E', 'title' => 'Infrastructure', 'items' => ['Linux Servers', 'Cloud Deployment', 'SSL / Security Configuration']],
];

$process = [
    ['step' => '01', 'title' => 'Discovery', 'description' => 'We talk to you. We understand your goals, your audience and your vision. We ask the right questions to build the right solution.'],
    ['step' => '02', 'title' => 'Planning &amp; Architecture', 'description' => 'We design the technical blueprint &mdash; database structure, system architecture and feature roadmap.'],
    ['step' => '03', 'title' => 'Design', 'description' => 'Our designers create a beautiful, user-friendly interface that reflects your brand.'],
    ['step' => '04', 'title' => 'Development', 'description' => 'We write clean, efficient code. We build your platform with modern frameworks that ensure performance and security.'],
    ['step' => '05', 'title' => 'Testing', 'description' => 'We test everything &mdash; functionality, performance, security and user experience. We fix every issue before you see it.'],
    ['step' => '06', 'title' => 'Launch', 'description' => 'We deploy your website, handle the migration and make sure everything runs smoothly.'],
    ['step' => '07', 'title' => 'Maintenance &amp; Support', 'description' => "Your website is live, but we're not done. We offer ongoing support, updates and improvements."],
];

$reasons = [
    ['title' => 'Built for You', 'description' => 'Every line of code is written with your specific business needs in mind.'],
    ['title' => 'Scalable &amp; Secure', 'description' => 'We build platforms that grow with you, not break when you succeed.'],
    ['title' => 'Full Support', 'description' => "From planning to launch to ongoing maintenance &mdash; we're with you for the long haul."],
    ['title' => 'Transparent Process', 'description' => 'No hidden costs. No surprises. Just honest communication at every step.'],
    ['title' => 'Stress-Free Experience', 'description' => 'We manage the complexity so you don&rsquo;t have to. You focus on your business; we focus on your website.'],
];

$faqs = [
    ['question' => 'How long does custom development take?', 'answer' => "It depends on complexity. A simple website: 2&ndash;4 weeks. A complex web application: 1&ndash;3 months. We'll give you a realistic timeline upfront."],
    ['question' => 'How much does a custom website cost?', 'answer' => 'Every project is unique. We provide a detailed quote after understanding your requirements &mdash; no generic pricing, just what fits your needs.'],
    ['question' => 'Do you maintain websites after launch?', 'answer' => 'Absolutely! We offer maintenance packages that include security updates, performance optimization and feature enhancements.'],
    ['question' => 'What if I already have a website? Can you redesign it?', 'answer' => 'Yes! We can rebuild your existing site using modern technologies while preserving your content and SEO value.'],
    ['question' => 'Will my website work on mobile devices?', 'answer' => 'Yes. All our websites are fully responsive and optimized for phones, tablets and desktops.'],
    ['question' => 'Can I update content myself later?', 'answer' => 'If we use a CMS like WordPress, yes. We can also build custom admin panels that let you manage content without touching code.'],
    ['question' => 'What if I need new features later?', 'answer' => 'We build your platform to be extensible. Adding new features is easier and faster because the foundation is solid.'],
];

$heroIcons = [
    ['icon' => 'codebrackets', 'label' => 'Custom Web Development'],
];
?>

     <!-- main -->
     <main>
        <!-- banner-->
         <section class="banner">
            <div class="container-fluid nav-shell">
                <div class="row align-items-center banner-hero">
                    <div class="col-lg-6">
                        <p class="eyebrow" data-animate>Custom Web Development</p>
                        <h1 class="banner-title" data-animate data-delay="120">
                            Your website should be as <span class="text-gradient-brand">unique as your business</span>
                        </h1>
                        <p class="banner-text max-width-700" data-animate data-delay="220">
                            Templates are easy. But they'll never truly capture what makes your
                            brand special. At MellowDigi, we build custom web platforms from the
                            ground up &mdash; tailored to your goals, your audience and your vision.
                        </p>
                        <p class="banner-text max-width-700" data-animate data-delay="260">
                            No unnecessary features. No generic designs. Just a website that works
                            exactly the way you need it to.
                        </p>
                        <div class="d-flex flex-wrap gap-3" data-animate data-delay="320">
                            <a href="portfolio.html" class="btn-hero-cta">See Our Work</a>
                            <a href="contact.html" class="btn-hero-cta">Let's Build Something Yours</a>
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

         <!-- what is custom web development -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">What Is Custom Web Development?</p>
                        <h2 class="section-heading">Build your own home, not a pre-furnished apartment</h2>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="why-card why-card-intro" style="--accent:#2BACE2" data-animate>
                            <h3>The Pre-Furnished Apartment</h3>
                            <p>A template website is like a pre-furnished apartment &mdash; it's fine
                            for some people, but you can't move walls, add rooms or change the layout
                            without breaking things. Custom development is like building your own home
                            instead.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="why-card" style="--accent:#3DB54A" data-animate data-delay="90">
                            <h3>Your Digital Home, Built the Way You Want It</h3>
                            <p>Custom development gives you:</p>
                            <ul class="startup-checklist">
                                <?php foreach ($benefits as $benefit): ?>
                                <li><?php echo $benefit; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ what is custom web development -->

         <!-- what we offer -->
         <section class="popular-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Our Custom Web Development Services</p>
                        <h2 class="section-heading">Whatever you're building, we can build it</h2>
                    </div>
                </div>
                <div class="row g-4">
                    <?php foreach ($services as $i => $service): ?>
                    <div class="col-6 col-md-4 col-lg" data-animate data-delay="<?php echo $i * 80; ?>">
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
                        <h2 class="section-heading">What's inside every build</h2>
                    </div>
                </div>
                <div class="row g-4">
                    <?php foreach ($services as $i => $service): ?>
                    <div class="col-12">
                        <div class="why-card<?php echo $i === 0 ? ' why-card-intro' : ''; ?>" style="--accent:<?php echo $esc($service['accent']); ?>" data-animate data-delay="<?php echo $i * 60; ?>">
                            <h3><?php echo $service['title']; ?></h3>
                            <p><?php echo $service['description']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ services detail -->

         <!-- technologies we work with -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Technologies We Work With</p>
                        <h2 class="section-heading">The right tools, not the trendy ones</h2>
                        <p class="banner-text max-width-700" data-animate data-delay="80">
                            Our stack prioritizes reliability, security and long-term
                            maintainability.
                        </p>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                    <?php foreach ($techStack as $i => $stack): ?>
                    <div class="col" data-animate data-delay="<?php echo $i * 80; ?>">
                        <div class="why-card" style="--accent:<?php echo $esc($stack['accent']); ?>">
                            <h3><?php echo $stack['title']; ?></h3>
                            <div class="audience-pills">
                                <?php foreach ($stack['items'] as $item): ?>
                                <span class="audience-pill"><?php echo $esc($item); ?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ technologies we work with -->

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
                    <img src="img/startup.jpg" alt="MellowDigi custom web development team at work">
                </div>
                <div class="col-lg-6 startup-content">
                    <div class="startup-content-inner">
                        <h2 class="startup-heading" data-animate>Why choose MellowDigi for custom development?</h2>
                        <h3 class="startup-subheading" data-animate data-delay="80">Built for you, not for a template</h3>
                        <p class="startup-text" data-animate data-delay="160">
                            We build platforms that grow with you, not break when you succeed &mdash;
                            and we manage the complexity so you don't have to.
                        </p>
                        <ul class="startup-checklist" data-animate data-delay="220">
                            <?php foreach ($reasons as $reason): ?>
                            <li><strong><?php echo $reason['title']; ?></strong> &mdash; <?php echo $reason['description']; ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <a href="contact.html" class="btn-hero-cta" data-animate data-delay="280">Let's Talk Development</a>
                    </div>
                </div>
            </div>
         </section>
         <!--/ why choose us -->

         <!-- the mellow guarantee -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-8" data-animate>
                        <p class="eyebrow">The Mellow Guarantee</p>
                        <h2 class="section-heading">Your website should work as hard as you do.</h2>
                        <p class="banner-text max-width-700 mx-auto">
                            We promise clean code, honest timelines and a platform that delivers
                            real business value. No shortcuts. No excuses. Just quality.
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

         <!-- cta -->
         <section class="founder-section">
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row align-items-center g-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Ready to Build Your Digital Home?</p>
                        <h2 class="section-heading">Stop settling for templates. Get a custom website that truly represents your brand and works for your business.</h2>
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
                            <a href="contact.html" class="btn-hero-cta">Start Your Project</a>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ cta -->
     </main>
     <!--/ main -->

<?php include __DIR__ . '/components/footer.php'; ?>
