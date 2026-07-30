<?php
$siteData = json_decode(file_get_contents(__DIR__ . '/data/site-data.json'), true);

$pageTitle       = 'Mobile App Development | MellowDigi';
$pageDescription = "Your business in your customers' pockets. MellowDigi builds custom mobile apps for iOS and Android that engage users and drive growth.";
$pageKeywords    = 'mobile app development, iOS app development, Android app development, cross-platform app development, custom mobile apps, app UI/UX design, app store optimization, React Native, Flutter, MellowDigi apps';
$pageUrl         = 'https://www.mellowdigi.com/mobile-app-development.php';
include __DIR__ . '/components/header.php';

$traits = [
    'Solve real problems for your users',
    'Reflect your brand beautifully',
    'Work seamlessly on phones and tablets',
    'Grow with your business',
];

$services = [
    ['icon' => 'layout', 'accent' => '#2BACE2', 'title' => 'Custom App Development', 'subtitle' => 'Not Generic Templates', 'description' => 'We build apps tailored to your business needs &mdash; not generic templates. Every app is designed for your specific users and goals.'],
    ['icon' => 'phone', 'accent' => '#3DB54A', 'title' => 'iOS App Development', 'subtitle' => 'iPhone &amp; iPad', 'description' => "Native apps for iPhone and iPad using Swift and Apple's latest technologies."],
    ['icon' => 'webmobile', 'accent' => '#F99E1F', 'title' => 'Android App Development', 'subtitle' => 'Phones &amp; Tablets', 'description' => 'Native apps for Android phones and tablets using Kotlin and Java.'],
    ['icon' => 'network', 'accent' => '#8B5CF6', 'title' => 'Cross-Platform Development', 'subtitle' => 'One App, Every Device', 'description' => 'One app that works on both iOS and Android using React Native or Flutter. Save time and money while reaching everyone.'],
    ['icon' => 'palette', 'accent' => '#F43F5E', 'title' => 'App UI/UX Design', 'subtitle' => 'Interfaces People Enjoy', 'description' => 'Beautiful, intuitive interfaces that users actually enjoy using.'],
    ['icon' => 'codebrackets', 'accent' => '#14B8A6', 'title' => 'Backend Development', 'subtitle' => 'The Engine Behind the App', 'description' => 'Powerful servers, databases and APIs that keep your app running smoothly.'],
    ['icon' => 'briefcase', 'accent' => '#2BACE2', 'title' => 'App Maintenance &amp; Support', 'subtitle' => 'Fresh &amp; Functional', 'description' => 'Ongoing updates, bug fixes and improvements to keep your app fresh and functional.'],
    ['icon' => 'search', 'accent' => '#3DB54A', 'title' => 'App Store Optimization (ASO)', 'subtitle' => 'Get Discovered', 'description' => 'We help your app get discovered on the Apple App Store and Google Play Store.'],
    ['icon' => 'idcard', 'accent' => '#F99E1F', 'title' => 'App Analytics Integration', 'subtitle' => 'Data-Driven Decisions', 'description' => 'Track user behavior, engagement and performance to make data-driven decisions.'],
];

$appTypes = [
    ['icon' => 'box', 'accent' => '#2BACE2', 'title' => 'E-Commerce Apps', 'description' => 'Shop, browse and buy right from your phone.'],
    ['icon' => 'instagram', 'accent' => '#3DB54A', 'title' => 'Social Media Apps', 'description' => 'Connect, share and engage with communities.'],
    ['icon' => 'phone', 'accent' => '#F99E1F', 'title' => 'On-Demand Apps', 'description' => 'Food delivery, ride-hailing, home services.'],
    ['icon' => 'search', 'accent' => '#8B5CF6', 'title' => 'Health &amp; Fitness Apps', 'description' => 'Track workouts, monitor health, book appointments.'],
    ['icon' => 'book', 'accent' => '#F43F5E', 'title' => 'Education Apps', 'description' => 'Online courses, tutorials and learning platforms.'],
    ['icon' => 'idcard', 'accent' => '#14B8A6', 'title' => 'Finance Apps', 'description' => 'Banking, payments, budgeting and investment tracking.'],
    ['icon' => 'billboard', 'accent' => '#2BACE2', 'title' => 'Real Estate Apps', 'description' => 'Property listings, virtual tours and agent connections.'],
    ['icon' => 'pin', 'accent' => '#3DB54A', 'title' => 'Travel &amp; Hospitality Apps', 'description' => 'Book flights, hotels and experiences.'],
    ['icon' => 'briefcase', 'accent' => '#F99E1F', 'title' => 'Business &amp; Productivity Apps', 'description' => 'Project management, collaboration and task tracking.'],
    ['icon' => 'clapperboard', 'accent' => '#8B5CF6', 'title' => 'Entertainment Apps', 'description' => 'Streaming, gaming and content consumption.'],
    ['icon' => 'call', 'accent' => '#F43F5E', 'title' => 'Healthcare Apps', 'description' => 'Telemedicine, appointment booking and patient management.'],
    ['icon' => 'codebrackets', 'accent' => '#14B8A6', 'title' => 'Custom Apps', 'description' => 'Whatever your business needs. We build it.'],
];

$featureGroups = [
    [
        'title' => 'Performance &amp; Trust',
        'features' => [
            'User-Friendly Interface &mdash; intuitive design that requires zero training',
            'Fast Performance &mdash; apps that load instantly and run smoothly',
            'Secure Authentication &mdash; passwordless login, biometric and OTP verification',
            'Real-Time Updates &mdash; live data syncing and notifications',
            'Scalable Architecture &mdash; grows with your user base',
        ],
    ],
    [
        'title' => 'Engagement &amp; Reach',
        'features' => [
            'Push Notifications &mdash; keep users engaged and informed',
            'Payment Integration &mdash; secure in-app purchases, subscriptions and wallets',
            'Offline Capability &mdash; some features work even without internet',
            'Social Media Integration &mdash; easy login and content sharing',
            'Analytics Dashboard &mdash; track user behavior and app performance',
            'Cross-Platform Compatibility &mdash; works on multiple devices and screen sizes',
        ],
    ],
];

$reasons = [
    ['title' => 'User-Centered Design', 'description' => 'We build apps people actually want to use.'],
    ['title' => 'Technical Excellence', 'description' => 'Clean code, robust architecture and rigorous testing.'],
    ['title' => 'End-to-End Service', 'description' => "From idea to launch and beyond &mdash; we handle it all."],
    ['title' => 'Transparent Process', 'description' => "You're involved at every stage. No surprises."],
    ['title' => 'On-Time Delivery', 'description' => 'We respect your timeline and budget.'],
    ['title' => 'Stress-Free Experience', 'description' => "We manage the complexity so you don't have to."],
    ['title' => 'Long-Term Partnership', 'description' => 'We support your app long after launch.'],
];

$process = [
    ['step' => '01', 'title' => 'Discovery &amp; Strategy', 'description' => "We understand your goals, target audience and business needs. We research your competitors and define your app's unique value."],
    ['step' => '02', 'title' => 'UX/UI Design', 'description' => 'We design the user journey and create beautiful, intuitive screens. You review and approve the designs before development begins.'],
    ['step' => '03', 'title' => 'Development', 'description' => 'We build your app &mdash; frontend, backend and everything in between. We use agile methodology with regular updates.'],
    ['step' => '04', 'title' => 'Testing', 'description' => 'We test every feature rigorously &mdash; functionality, performance, security and usability. We fix every issue before you see it.'],
    ['step' => '05', 'title' => 'Deployment', 'description' => 'We submit your app to the Apple App Store and Google Play Store. We handle all the technical requirements and guidelines.'],
    ['step' => '06', 'title' => 'Launch &amp; Marketing', 'description' => 'We help you launch with a bang &mdash; promotional strategies, app store optimization and user acquisition support.'],
    ['step' => '07', 'title' => 'Maintenance &amp; Updates', 'description' => 'We monitor performance, fix bugs and release updates to keep your app current and competitive.'],
];

$metrics = [
    ['metric' => 'Downloads', 'why' => 'Measures initial reach and visibility.'],
    ['metric' => 'Active Users', 'why' => 'Shows true engagement.'],
    ['metric' => 'Retention Rate', 'why' => 'Indicates how sticky your app is.'],
    ['metric' => 'Session Duration', 'why' => 'Reflects user interest.'],
    ['metric' => 'Conversion Rate', 'why' => 'Measures revenue generation.'],
    ['metric' => 'Crash Rate', 'why' => 'Indicates stability and performance.'],
    ['metric' => 'App Store Rating', 'why' => 'Affects discoverability and trust.'],
];

$faqs = [
    ['question' => 'How long does it take to build a mobile app?', 'answer' => 'A simple app: 2&ndash;3 months. A complex app with many features: 4&ndash;6 months or more. We give you a realistic timeline upfront.', 'items' => []],
    ['question' => 'How much does mobile app development cost?', 'answer' => 'Every app is unique. Costs depend on features, platforms, design complexity and backend requirements. Contact us for a custom quote.', 'items' => []],
    ['question' => 'Should I build for iOS or Android first?', 'answer' => 'It depends on your audience. We recommend starting with the platform where your target users are most active. We can help you decide.', 'items' => []],
    ['question' => "What's the difference between native and cross-platform?", 'answer' => 'Native apps are built specifically for iOS or Android. They offer the best performance and user experience. Cross-platform apps work on both with one codebase &mdash; faster and cheaper but slightly less optimized.', 'items' => []],
    ['question' => 'Will my app work on both phones and tablets?', 'answer' => 'Yes! We design responsive apps that adapt to different screen sizes and devices.', 'items' => []],
    ['question' => 'Do you help with app store submission?', 'answer' => 'Yes! We handle the entire submission process for both Apple App Store and Google Play Store.', 'items' => []],
    ['question' => 'Can I update my app after launch?', 'answer' => 'Absolutely. We provide ongoing maintenance and update services. You can also manage certain content through an admin panel.', 'items' => []],
    ['question' => 'How do I make money from my app?', 'answer' => 'We can integrate monetization strategies including:', 'items' => ['Paid downloads', 'In-app purchases', 'Subscriptions', 'Advertisements', 'Affiliate marketing']],
    ['question' => 'What happens to my app if my business grows?', 'answer' => 'We build scalable architecture, so your app can handle increased users and new features without breaking.', 'items' => []],
    ['question' => 'Do you maintain the app after launch?', 'answer' => 'Yes! We offer maintenance packages that include bug fixes, security updates, OS compatibility and feature enhancements.', 'items' => []],
];

$heroIcons = [
    ['icon' => 'phone', 'label' => 'Mobile App Development'],
];
?>

     <!-- main -->
     <main>
        <!-- banner-->
         <section class="banner">
            <div class="container-fluid nav-shell">
                <div class="row align-items-center banner-hero">
                    <div class="col-lg-6">
                        <p class="eyebrow" data-animate>Mobile App Development</p>
                        <h1 class="banner-title" data-animate data-delay="120">
                            Your business, <span class="text-gradient-brand">in their pocket</span>
                        </h1>
                        <p class="banner-text max-width-700" data-animate data-delay="220">
                            Your customers live on their phones. Isn't it time your business joined
                            them? At MellowDigi, we build custom mobile apps that are fast, intuitive
                            and designed to keep users coming back.
                        </p>
                        <p class="banner-text max-width-700" data-animate data-delay="260">
                            Whether you need an iOS app, an Android app or both &mdash; we create
                            digital experiences that fit right into your customers' daily lives.
                        </p>
                        <div class="d-flex flex-wrap gap-3" data-animate data-delay="320">
                            <a href="portfolio.html" class="btn-hero-cta">See Our Work</a>
                            <a href="contact.html" class="btn-hero-cta">Let's Build Your App</a>
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

         <!-- what is mobile app development -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">What Is Mobile App Development?</p>
                        <h2 class="section-heading">Think of it like a loyalty card that never leaves their pocket</h2>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="why-card why-card-intro" style="--accent:#2BACE2" data-animate>
                            <h3>Always Accessible, Always Visible</h3>
                            <p>Unlike a website, an app lives right on your customer's phone &mdash;
                            always accessible, always visible. It sends notifications, remembers
                            preferences and creates a personalized experience that keeps your brand
                            top of mind.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="why-card" style="--accent:#3DB54A" data-animate data-delay="90">
                            <h3>We Build Apps That</h3>
                            <ul class="startup-checklist">
                                <?php foreach ($traits as $trait): ?>
                                <li><?php echo $trait; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ what is mobile app development -->

         <!-- what we offer -->
         <section class="popular-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Our Mobile App Services</p>
                        <h2 class="section-heading">Everything it takes to ship a great app</h2>
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

         <!-- types of apps -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Types of Apps We Build</p>
                        <h2 class="section-heading">Whatever your industry, there's an app for it</h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
                    <?php foreach ($appTypes as $i => $type): ?>
                    <div class="col" data-animate data-delay="<?php echo ($i % 3) * 80; ?>">
                        <div class="popular-service-card" style="--accent:<?php echo $esc($type['accent']); ?>">
                            <span class="popular-service-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><?php echo $siteData['icons'][$type['icon']]; ?></svg>
                            </span>
                            <h6><?php echo $type['title']; ?></h6>
                            <p><?php echo $esc($type['description']); ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ types of apps -->

         <!-- key features -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Key Features We Include in Every App</p>
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
                        <h2 class="section-heading">From discovery to ongoing updates</h2>
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
                    <img src="img/startup.jpg" alt="MellowDigi mobile app team at work">
                </div>
                <div class="col-lg-6 startup-content">
                    <div class="startup-content-inner">
                        <h2 class="startup-heading" data-animate>Why choose MellowDigi for mobile apps?</h2>
                        <h3 class="startup-subheading" data-animate data-delay="80">Apps people actually want to use</h3>
                        <p class="startup-text" data-animate data-delay="160">
                            From idea to launch and beyond &mdash; we handle it all, and stay with
                            you as a long-term partner after your app ships.
                        </p>
                        <ul class="startup-checklist" data-animate data-delay="220">
                            <?php foreach ($reasons as $reason): ?>
                            <li><strong><?php echo $reason['title']; ?></strong> &mdash; <?php echo $reason['description']; ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <a href="contact.html" class="btn-hero-cta" data-animate data-delay="280">Let's Talk Apps</a>
                    </div>
                </div>
            </div>
         </section>
         <!--/ why choose us -->

         <!-- app success metrics -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">App Success Metrics</p>
                        <h2 class="section-heading">What we track, and why it matters</h2>
                    </div>
                </div>
                <div class="row g-4">
                    <?php foreach ($metrics as $i => $item): ?>
                    <div class="col-lg-6">
                        <div class="why-card<?php echo $i === 0 ? ' why-card-intro' : ''; ?>" data-animate data-delay="<?php echo ($i % 2) * 90; ?>">
                            <h3><?php echo $esc($item['metric']); ?></h3>
                            <p><?php echo $esc($item['why']); ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ app success metrics -->

         <!-- the mellow guarantee -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-8" data-animate>
                        <p class="eyebrow">The Mellow Guarantee</p>
                        <h2 class="section-heading">Your app should be more than just code &mdash; it should be an experience.</h2>
                        <p class="banner-text max-width-700 mx-auto">
                            We promise to build a product that users love, businesses benefit from,
                            and you're proud to put your name on.
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
                                        <?php if (!empty($faq['items'])): ?>
                                        <ul class="startup-checklist">
                                            <?php foreach ($faq['items'] as $item): ?>
                                            <li><?php echo $esc($item); ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                        <?php endif; ?>
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
                        <p class="eyebrow">Ready to Build Your App?</p>
                        <h2 class="section-heading">Your customers are waiting. Let's create a mobile experience they'll love and return to again and again.</h2>
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
                            <a href="contact.html" class="btn-hero-cta">Start Your App Project</a>
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
