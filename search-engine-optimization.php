<?php
$siteData = json_decode(file_get_contents(__DIR__ . '/data/site-data.json'), true);

$pageTitle       = 'Search Engine Optimization (SEO) | MellowDigi';
$pageDescription = 'Get found on Google without the headache. MellowDigi provides simple, effective SEO services that drive organic traffic and grow your business.';
$pageKeywords    = 'search engine optimization, SEO services, organic traffic, google ranking, local SEO, website optimization, keyword research, online visibility, MellowDigi SEO';
$pageUrl         = 'https://www.mellowdigi.com/search-engine-optimization.php';
include __DIR__ . '/components/header.php';

$services = [
    [
        'icon' => 'layout', 'accent' => '#2BACE2',
        'title' => 'On-Page SEO',
        'subtitle' => 'Every Page, Search-Friendly',
        'description' => 'We make sure every page on your website is search-friendly.',
        'items' => ['Writing clear titles and descriptions', 'Using the right keywords &mdash; the words people actually search for', 'Making your content easy to read and helpful'],
    ],
    [
        'icon' => 'network', 'accent' => '#3DB54A',
        'title' => 'Off-Page SEO',
        'subtitle' => "Your Website's Reputation",
        'description' => 'We build your website&rsquo;s reputation. When other trusted websites link to you, Google sees you as an authority. We help you earn those valuable backlinks.',
        'items' => [],
    ],
    [
        'icon' => 'pin', 'accent' => '#F99E1F',
        'title' => 'Local SEO',
        'subtitle' => 'Show Up Near You',
        'description' => 'Are you a local business? We help you show up in local searches like &ldquo;best coffee shop near me&rdquo; or &ldquo;plumber in Mumbai.&rdquo; We optimize your Google My Business profile and local listings.',
        'items' => [],
    ],
    [
        'icon' => 'codebrackets', 'accent' => '#8B5CF6',
        'title' => 'Technical SEO',
        'subtitle' => 'The Behind-the-Scenes Stuff',
        'description' => 'We fix the behind-the-scenes stuff that matters.',
        'items' => ['Making your website load fast', 'Ensuring it works perfectly on mobile phones', 'Fixing broken links and errors'],
    ],
];

$process = [
    ['step' => '01', 'title' => 'Research', 'description' => 'We study your business, your competitors and the words your customers use to find you.'],
    ['step' => '02', 'title' => 'Strategy', 'description' => "We create a clear plan to improve your website's visibility. You'll know exactly what we're doing and why."],
    ['step' => '03', 'title' => 'Implementation', 'description' => 'We optimize your website, create quality content and build your online reputation.'],
    ['step' => '04', 'title' => 'Monitor &amp; Improve', 'description' => 'We track your rankings, analyze what&rsquo;s working, and keep improving. SEO is never &ldquo;done&rdquo; &mdash; it grows with you.'],
];

$reasons = [
    ['title' => 'No Jargon', 'description' => "We explain everything in simple terms. You'll always understand what we're doing."],
    ['title' => 'Transparent Reporting', 'description' => 'We send you easy-to-read reports showing your rankings and growth.'],
    ['title' => 'Long-Term Results', 'description' => 'We don&rsquo;t do shortcuts or &ldquo;black hat&rdquo; tricks. We build sustainable SEO that lasts.'],
    ['title' => 'Calm &amp; Stress-Free', 'description' => 'SEO takes time, and we manage your expectations honestly. No pressure, just progress.'],
];

$faqs = [
    ['question' => 'How long does SEO take to show results?', 'answer' => "SEO is a long-term game. Typically, you can start seeing improvements in 3 to 6 months. We'll keep you updated on progress every step of the way."],
    ['question' => 'Will I show up on the first page of Google?', 'answer' => "We aim for the top! But results depend on competition and industry. We work hard to improve your rankings, and we're always honest about what's achievable."],
    ['question' => 'Do I need to write blogs for SEO to work?', 'answer' => 'Blogging helps a lot! It gives Google fresh content to index. We can help you create blog topics or write them for you.'],
    ['question' => "What's the difference between SEO and paid ads?", 'answer' => 'SEO brings organic (free) traffic over time. Paid ads give you instant visibility but stop working when you stop paying. We recommend both for best results.'],
];

$heroIcons = [
    ['icon' => 'search', 'label' => 'Search Engine Optimization (SEO)'],
];
?>

     <!-- main -->
     <main>
        <!-- banner-->
         <section class="banner">
            <div class="container-fluid nav-shell">
                <div class="row align-items-center banner-hero">
                    <div class="col-lg-6">
                        <p class="eyebrow" data-animate>Search Engine Optimization (SEO)</p>
                        <h1 class="banner-title" data-animate data-delay="120">
                            Be found. Be <span class="text-gradient-brand">chosen</span>.
                        </h1>
                        <p class="banner-text max-width-700" data-animate data-delay="220">
                            When people search for what you offer, do they find you? Search Engine
                            Optimization (SEO) is how you show up on Google when it matters most.
                        </p>
                        <p class="banner-text max-width-700" data-animate data-delay="260">
                            At MellowDigi, we make SEO simple, transparent and effective. No
                            confusing tech talk &mdash; just real results that help your business grow.
                        </p>
                        <div class="d-flex flex-wrap gap-3" data-animate data-delay="320">
                            <a href="portfolio.html" class="btn-hero-cta">See Our Work</a>
                            <a href="contact.html" class="btn-hero-cta">Ready to Get Found?</a>
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

         <!-- what is seo -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">What Is SEO? (In Plain English)</p>
                        <h2 class="section-heading">Think of SEO like a map for Google</h2>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="why-card why-card-intro" style="--accent:#2BACE2" data-animate>
                            <h3>Helping Google Find Its Answer</h3>
                            <p>When someone types a question into Google, the search engine wants to
                            show the best, most helpful answer. SEO helps Google understand that your
                            website is that answer &mdash; we optimize your site so search engines can
                            easily find it, understand it and show it to the right people.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="why-card" style="--accent:#3DB54A" data-animate data-delay="90">
                            <h3>Simple, Right? Let Us Handle It.</h3>
                            <p>You don&rsquo;t need to learn the algorithm to benefit from it. We
                            translate the technical side of search into a clear plan, then quietly
                            do the work &mdash; so you can stay focused on running your business while
                            your visibility grows in the background.</p>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ what is seo -->

         <!-- what we offer -->
         <section class="popular-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Our SEO Services</p>
                        <h2 class="section-heading">What we do to get you found</h2>
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
                        <h2 class="section-heading">What's inside every SEO engagement</h2>
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
                        <h2 class="section-heading">How we work</h2>
                        <p class="banner-text max-width-700" data-animate data-delay="80">
                            No black boxes. You'll always know exactly what we're doing and why.
                        </p>
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
                    <img src="img/startup.jpg" alt="MellowDigi SEO team at work">
                </div>
                <div class="col-lg-6 startup-content">
                    <div class="startup-content-inner">
                        <h2 class="startup-heading" data-animate>Why choose MellowDigi for SEO?</h2>
                        <h3 class="startup-subheading" data-animate data-delay="80">Calm, honest and built to last</h3>
                        <p class="startup-text" data-animate data-delay="160">
                            SEO takes time, and we manage your expectations honestly &mdash; no
                            pressure, just steady, sustainable progress.
                        </p>
                        <ul class="startup-checklist" data-animate data-delay="220">
                            <?php foreach ($reasons as $reason): ?>
                            <li><strong><?php echo $reason['title']; ?></strong> &mdash; <?php echo $reason['description']; ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <a href="contact.html" class="btn-hero-cta" data-animate data-delay="280">Let's Talk SEO</a>
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
                        <h2 class="section-heading">SEO is a marathon, not a sprint.</h2>
                        <p class="banner-text max-width-700 mx-auto">
                            We promise honest communication, realistic timelines and a team that
                            genuinely cares about your success.
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
                        <p class="eyebrow">Stop Hiding. Start Ranking.</p>
                        <h2 class="section-heading">Imagine your website on the first page of Google. More visibility. More traffic. More customers.</h2>
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
                            <a href="contact.html" class="btn-hero-cta">Let's Make It Happen</a>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ cta -->
     </main>
     <!--/ main -->

<?php include __DIR__ . '/components/footer.php'; ?>
