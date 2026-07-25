<?php
$siteData = json_decode(file_get_contents(__DIR__ . '/data/site-data.json'), true);

$pageTitle       = 'UI/UX Design & Prototyping | MellowDigi';
$pageDescription = 'Beautiful design meets seamless experience. MellowDigi creates user-friendly websites and apps that your customers will love to use.';
$pageKeywords    = 'UI/UX design, user experience design, user interface design, prototyping services, web design agency, app design services, wireframing services, mobile-first design, user research, MellowDigi design';
$pageUrl         = 'https://www.mellowdigi.com/uiux-design.php';
include __DIR__ . '/components/header.php';

$services = [
    [
        'icon' => 'search', 'accent' => '#2BACE2',
        'title' => 'User Research &amp; Discovery',
        'subtitle' => 'Understanding Your Users First',
        'description' => 'Before we design anything, we understand your users.',
        'items' => ['Who are they?', 'What do they need?', 'What frustrates them?', 'What do they expect?'],
    ],
    [
        'icon' => 'layout', 'accent' => '#3DB54A',
        'title' => 'Information Architecture',
        'subtitle' => 'Logical, Easy-to-Follow Structure',
        'description' => 'We organize your content in a logical, easy-to-follow structure.',
        'items' => ['Clear navigation menus', 'Logical page hierarchy', 'Easy-to-find information', 'Simple user journeys'],
    ],
    [
        'icon' => 'pencil', 'accent' => '#F99E1F',
        'title' => 'Wireframing',
        'subtitle' => 'Blueprint-Like Sketches',
        'description' => 'We create simple, blueprint-like sketches of your pages.',
        'items' => ['Layout and structure', 'Content placement', 'Navigation flow', 'Key features and functions'],
    ],
    [
        'icon' => 'palette', 'accent' => '#8B5CF6',
        'title' => 'Visual UI Design',
        'subtitle' => 'Where Things Get Beautiful',
        'description' => 'This is where things get beautiful.',
        'items' => ['Modern, appealing color schemes', 'Clean typography', 'Consistent branding', 'Engaging visuals and icons', 'Mobile-responsive designs'],
    ],
    [
        'icon' => 'clapperboard', 'accent' => '#F43F5E',
        'title' => 'Interactive Prototyping',
        'subtitle' => 'Static Designs, Brought to Life',
        'description' => 'We bring static designs to life.',
        'items' => ['Clickable prototypes that feel like real products', 'User flow testing', 'Interactive elements &mdash; buttons, menus, forms', 'Realistic product preview'],
    ],
    [
        'icon' => 'idcard', 'accent' => '#14B8A6',
        'title' => 'User Testing &amp; Iteration',
        'subtitle' => 'Tested With Real Users',
        'description' => 'We test our designs with real users.',
        'items' => ['Gather feedback', 'Identify pain points', 'Make improvements', 'Perfect the experience'],
    ],
];

$process = [
    ['step' => '01', 'title' => 'Research &amp; Discovery', 'description' => 'We talk to you and your users. We understand your goals, your audience and your vision.'],
    ['step' => '02', 'title' => 'Strategy &amp; Structure', 'description' => 'We plan the layout, navigation and content organization. You approve the blueprint.'],
    ['step' => '03', 'title' => 'Wireframing', 'description' => 'We create simple sketches of your pages. You see the structure without the visual noise.'],
    ['step' => '04', 'title' => 'Visual Design', 'description' => 'We add colors, fonts, images and style. Your brand comes to life!'],
    ['step' => '05', 'title' => 'Prototyping', 'description' => 'We build an interactive, clickable version of your design. You can test it, share it and experience it.'],
    ['step' => '06', 'title' => 'Testing &amp; Refinement', 'description' => 'We gather feedback, make improvements and polish every detail.'],
    ['step' => '07', 'title' => 'Handoff', 'description' => 'We deliver all design files, assets and style guides ready for development.'],
];

$projectTypes = [
    ['icon' => 'webmobile', 'accent' => '#2BACE2', 'title' => 'Websites', 'description' => 'Corporate sites, e-commerce stores, blogs, portfolios.'],
    ['icon' => 'phone', 'accent' => '#3DB54A', 'title' => 'Mobile Apps', 'description' => 'iOS, Android and cross-platform apps.'],
    ['icon' => 'codebrackets', 'accent' => '#F99E1F', 'title' => 'Web Applications', 'description' => 'Dashboards, SaaS platforms, admin panels.'],
    ['icon' => 'billboard', 'accent' => '#8B5CF6', 'title' => 'Landing Pages', 'description' => 'High-converting pages for campaigns.'],
    ['icon' => 'box', 'accent' => '#F43F5E', 'title' => 'Digital Products', 'description' => 'Software, tools and interactive experiences.'],
];

$reasons = [
    ['title' => 'User-First Approach', 'description' => 'We design for people, not just screens. Your users always come first.'],
    ['title' => 'Beautiful + Functional', 'description' => "We don't sacrifice usability for aesthetics. You get both."],
    ['title' => 'Transparent Process', 'description' => "You're involved every step of the way. No surprises."],
    ['title' => 'Mobile-Friendly', 'description' => 'Every design works perfectly on phones, tablets and desktops.'],
    ['title' => 'Stress-Free Collaboration', 'description' => 'We explain everything in simple terms and make the process enjoyable.'],
];

$faqs = [
    ['question' => "What's the difference between UI and UX?", 'answer' => 'UX (User Experience) is about how the product works and feels. UI (User Interface) is about how it looks. Both are equally important, and we handle both!'],
    ['question' => 'How long does the design process take?', 'answer' => "It depends on the project complexity. A simple website may take 2&ndash;4 weeks, while a complex app might take 1&ndash;3 months. We'll give you a clear timeline upfront."],
    ['question' => 'Do I need to provide content (text, images)?', 'answer' => "We can work with your existing content or help you create new content. We'll guide you on what's needed."],
    ['question' => "Can I see my design before it's final?", 'answer' => 'Absolutely! You review and approve designs at every stage &mdash; wireframes, visual designs and prototypes. Your feedback shapes the final product.'],
    ['question' => 'Will my design work on mobile phones?', 'answer' => 'Yes! We design with a &ldquo;mobile-first&rdquo; approach, ensuring everything looks and works perfectly on all devices.'],
    ['question' => 'Do you provide development services too?', 'answer' => 'We focus on design, but we work closely with trusted developers (or your team) to ensure smooth implementation.'],
    ['question' => 'What is a prototype?', 'answer' => "A prototype is a clickable, interactive version of your design. It's like a demo that lets you experience the product before it's actually built."],
];

$heroIcons = [
    ['icon' => 'layout', 'label' => 'UI/UX Design &amp; Prototyping'],
];
?>

     <!-- main -->
     <main>
        <!-- banner-->
         <section class="banner">
            <div class="container-fluid nav-shell">
                <div class="row align-items-center banner-hero">
                    <div class="col-lg-6">
                        <p class="eyebrow" data-animate>UI/UX Design &amp; Prototyping</p>
                        <h1 class="banner-title" data-animate data-delay="120">
                            Design that feels good. <span class="text-gradient-brand">Experiences that stick.</span>
                        </h1>
                        <p class="banner-text max-width-700" data-animate data-delay="220">
                            Your website or app is often the first impression customers have of your
                            brand. Does it feel welcoming? Is it easy to use?
                        </p>
                        <p class="banner-text max-width-700" data-animate data-delay="260">
                            At MellowDigi, we design digital experiences that are not just beautiful
                            &mdash; they're intuitive. We combine stunning visuals with smart user
                            experience (UX) design to create products people actually enjoy using.
                        </p>
                        <div class="d-flex flex-wrap gap-3" data-animate data-delay="320">
                            <a href="portfolio.html" class="btn-hero-cta">See Our Work</a>
                            <a href="contact.html" class="btn-hero-cta">Let's Design Something Beautiful</a>
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

         <!-- what is uiux design -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">What Is UI/UX Design &amp; Prototyping?</p>
                        <h2 class="section-heading">Think of it like building a beautiful, easy-to-navigate store</h2>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="why-card why-card-intro" style="--accent:#2BACE2" data-animate>
                            <h3>UX Is the Layout, UI Is the Interior</h3>
                            <p>UX (User Experience) is like the store layout &mdash; can customers
                            easily find what they're looking for? Is the experience smooth and
                            pleasant? UI (User Interface) is like the store's interior design &mdash;
                            are the colors inviting, is the signage clear, does everything look
                            beautiful and professional?</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="why-card" style="--accent:#3DB54A" data-animate data-delay="90">
                            <h3>Prototyping Is the Mini-Model</h3>
                            <p>Prototyping is like creating a mini-model of the store before you
                            build it. It lets you test, tweak and perfect the design &mdash; saving
                            time and money. We do all of this for your website, mobile app or
                            digital product.</p>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ what is uiux design -->

         <!-- what we offer -->
         <section class="popular-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Our UI/UX Services</p>
                        <h2 class="section-heading">Everything from research to handoff</h2>
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
                        <h2 class="section-heading">What's inside every design engagement</h2>
                    </div>
                </div>
                <div class="row g-4">
                    <?php foreach ($services as $i => $service): ?>
                    <div class="col-lg-6">
                        <div class="why-card<?php echo $i === 0 ? ' why-card-intro' : ''; ?>" style="--accent:<?php echo $esc($service['accent']); ?>" data-animate data-delay="<?php echo ($i % 2) * 90; ?>">
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

         <!-- our process -->
         <section class="who-we-are">
            <div class="bg-bubble bubble-blue" aria-hidden="true"></div>
            <div class="bg-bubble bubble-green" aria-hidden="true"></div>
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Our Simple Process</p>
                        <h2 class="section-heading">From first sketch to final handoff</h2>
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

         <!-- types of projects -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Types of Projects We Design</p>
                        <h2 class="section-heading">Wherever your users show up, we design for it</h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
                    <?php foreach ($projectTypes as $i => $type): ?>
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
         <!--/ types of projects -->

         <!-- why choose us -->
         <section class="home_startup">
            <div class="row g-0 align-items-stretch">
                <div class="col-lg-6 startup-image" data-animate>
                    <img src="img/startup.jpg" alt="MellowDigi UI/UX design team at work">
                </div>
                <div class="col-lg-6 startup-content">
                    <div class="startup-content-inner">
                        <h2 class="startup-heading" data-animate>Why choose MellowDigi for UI/UX?</h2>
                        <h3 class="startup-subheading" data-animate data-delay="80">Designed for people, not just screens</h3>
                        <p class="startup-text" data-animate data-delay="160">
                            We don't sacrifice usability for aesthetics &mdash; you get both, delivered
                            through a transparent process that keeps you involved every step of the way.
                        </p>
                        <ul class="startup-checklist" data-animate data-delay="220">
                            <?php foreach ($reasons as $reason): ?>
                            <li><strong><?php echo $reason['title']; ?></strong> &mdash; <?php echo $reason['description']; ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <a href="contact.html" class="btn-hero-cta" data-animate data-delay="280">Let's Talk Design</a>
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
                        <h2 class="section-heading">Great design is invisible.</h2>
                        <p class="banner-text max-width-700 mx-auto">
                            When done right, users don't notice it &mdash; they just enjoy it. We
                            promise to create designs that feel intuitive, look stunning and make
                            your users smile.
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
                <div class="row g-4">
                    <?php foreach ($faqs as $i => $faq): ?>
                    <div class="col-lg-6">
                        <div class="why-card<?php echo $i === 0 ? ' why-card-intro' : ''; ?>" data-animate data-delay="<?php echo ($i % 2) * 90; ?>">
                            <h3><?php echo $esc($faq['question']); ?></h3>
                            <p><?php echo $faq['answer']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
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
                        <p class="eyebrow">Ready to Create Something Beautiful?</p>
                        <h2 class="section-heading">Your users deserve an experience they'll love. Let's design a digital product that stands out and delivers results.</h2>
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
                            <a href="contact.html" class="btn-hero-cta">Start Your Design Project</a>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ cta -->
     </main>
     <!--/ main -->

<?php include __DIR__ . '/components/footer.php'; ?>
