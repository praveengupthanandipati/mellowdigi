<?php
$siteData = json_decode(file_get_contents(__DIR__ . '/data/site-data.json'), true);

$pageTitle       = 'Presentation Design | MellowDigi';
$pageDescription = 'MellowDigi designs investor pitch decks, sales decks, internal presentations and keynote decks that turn your ideas into a visual story audiences remember.';
$pageKeywords    = 'presentation design, pitch deck design, investor pitch deck, sales deck design, keynote design, PowerPoint design, MellowDigi presentation design';
$pageUrl         = 'https://www.mellowdigi.com/presentation-design.php';
include __DIR__ . '/components/header.php';

$categories = [
    [
        'icon' => 'briefcase', 'accent' => '#2BACE2',
        'title' => 'Investor Pitch Decks',
        'subtitle' => 'Win the Room, Secure the Bag',
        'intro' => 'Your pitch deck is often the first deep dive an investor takes into your world. We design decks that follow a narrative arc built to drive action.',
        'items' => [
            ['title' => 'The Problem/Solution Framework', 'description' => 'Clear, concise storytelling that highlights the gap in the market.'],
            ['title' => 'Market Data Visualization', 'description' => 'Transforming complex spreadsheets into easy-to-digest charts and graphs.'],
            ['title' => 'Traction &amp; Roadmap Slides', 'description' => 'Visually showcasing your milestones and future potential.'],
            ['title' => 'The "Ask" Page', 'description' => 'A clear, compelling financial summary that makes saying "yes" easy.'],
        ],
    ],
    [
        'icon' => 'megaphone', 'accent' => '#3DB54A',
        'title' => 'Sales &amp; Client Decks',
        'subtitle' => 'Close Deals Faster',
        'intro' => 'Your sales team needs a weapon, not a distraction. We build client-facing presentations that guide prospects from "maybe" to "let\'s sign."',
        'items' => [
            ['title' => 'Consultative Storytelling', 'description' => "Framing your services as the direct solution to your client's pain points."],
            ['title' => 'Case Study Integration', 'description' => 'Weaving in social proof and success metrics seamlessly.'],
            ['title' => 'Product Demo Slides', 'description' => 'Highlighting your features in a way that feels exciting, not overwhelming.'],
            ['title' => 'Competitive Comparison', 'description' => 'Visually positioning yourself as the clear winner in the market.'],
        ],
    ],
    [
        'icon' => 'network', 'accent' => '#F99E1F',
        'title' => 'Internal &amp; Team Decks',
        'subtitle' => 'Align Your Tribe',
        'intro' => 'Communication breaks down when presentations are boring. We turn internal updates, quarterly reviews and all-hands meetings into engaging visual experiences.',
        'items' => [
            ['title' => 'Quarterly Business Reviews (QBRs)', 'description' => 'Making data-driven strategy updates easy to digest.'],
            ['title' => 'Culture Decks', 'description' => 'Onboarding and mission presentations that instill your values from day one.'],
            ['title' => 'Process Mapping', 'description' => 'Visual workflows and SOPs that ensure everyone is on the same page.'],
        ],
    ],
    [
        'icon' => 'billboard', 'accent' => '#8B5CF6',
        'title' => 'Conference &amp; Keynote Decks',
        'subtitle' => 'Command the Stage',
        'intro' => 'Speaking at a major industry event? Your slides need to look massive and memorable. We design high-resolution, cinematic presentations that stand out on the big screen.',
        'items' => [
            ['title' => 'Large-Format Designs', 'description' => 'Optimized for widescreen projection and LED walls.'],
            ['title' => 'Motion Graphics', 'description' => 'Subtle animations that add energy without being distracting.'],
            ['title' => 'Speaker Notes', 'description' => 'We include layout notes to help you stay on track during your talk.'],
        ],
    ],
];

$process = [
    ['step' => '01', 'title' => 'Discovery &amp; Storyboarding', 'description' => 'We sit down (or Zoom) to understand your audience, your goals and the single most important message you need to convey, then map out the story flow slide-by-slide.'],
    ['step' => '02', 'title' => 'Visual Wireframing', 'description' => 'Before we go all-in on design, we create a "skeleton" of the deck, nailing the structure and narrative logic before adding color.'],
    ['step' => '03', 'title' => 'High-Fidelity Design', 'description' => 'We apply your brand colors, typography and imagery, and design custom graphics that make your data pop and your product look premium.'],
    ['step' => '04', 'title' => 'Feedback &amp; Refinement', 'description' => 'We share a live link to the draft. You review, we tweak, and iterate until the deck feels like you.'],
    ['step' => '05', 'title' => 'Final Delivery &amp; Handoff', 'description' => 'You receive the file in multiple formats (PPTX, PDF, Google Slides), plus a style guide so your team can edit text without breaking the design.'],
];

$reasons = [
    ['title' => 'We Speak "Startup"', 'description' => 'We know the metric obsession, the "hockey stick" graphs and the pressure of Demo Day. We don\'t need a two-hour briefing to "get it" — we move fast, pivot easily and charge fairly.'],
    ['title' => 'Design Meets Psychology', 'description' => "We don't just make things pretty. Our designs are rooted in visual hierarchy and cognitive psychology, so we know where the eye travels first and how to guide it toward your call-to-action."],
    ['title' => 'One Less Thing to Stress About', 'description' => "You're busy building the product and running the company. Let us handle the visual heavy lifting so you can focus on your delivery."],
];

$heroIcons = [
    ['icon' => 'layout', 'label' => 'Presentation Design'],
];
?>

     <!-- main -->
     <main>
        <!-- banner-->
         <section class="banner">
            <div class="container-fluid nav-shell">
                <div class="row align-items-center banner-hero">
                    <div class="col-lg-6">
                        <p class="eyebrow" data-animate>Presentation Design</p>
                        <h1 class="banner-title" data-animate data-delay="120">
                            Your ideas, <span class="text-gradient-brand">professionally packaged</span>
                        </h1>
                        <p class="banner-text max-width-700" data-animate data-delay="220">
                            You have exactly one shot to wow your audience. In the time it takes to sip a
                            coffee, your pitch deck either seals the deal or gets lost in the shuffle. At
                            MellowDigi, we don't just design slides — we architect narratives that
                            captivate investors, excite clients and align your entire team.
                        </p>
                        <p class="banner-text max-width-700" data-animate data-delay="260">
                            We take your raw data and big vision and turn them into a visual story that
                            is impossible to ignore.
                        </p>
                        <div class="d-flex flex-wrap gap-3" data-animate data-delay="320">
                            <a href="portfolio.html" class="btn-hero-cta">View Our Portfolio</a>
                            <a href="contact.html" class="btn-hero-cta">Book a Free Pitch Review</a>
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

         <!-- why presentation design matters -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Why Presentation Design Matters</p>
                        <h2 class="section-heading">Your ultimate sales tool, on every screen</h2>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="why-card why-card-intro" style="--accent:#2BACE2" data-animate>
                            <h3>More Than a Pretty Background</h3>
                            <p>A great presentation is more than just a pretty background. It is your
                            startup's ultimate sales tool. Whether you're on a Zoom call or a major stage,
                            your slides serve as your visual anchor.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="why-card" style="--accent:#3DB54A" data-animate data-delay="90">
                            <h3>The Numbers Speak Volumes</h3>
                            <p>A well-designed presentation can increase audience retention by up to 70%.
                            Yet 51% of presenters admit they "wing it" with generic templates. In a
                            competitive funding environment, a sloppy deck signals a sloppy business —
                            we make sure your presentation reflects the precision and passion you put
                            into your product.</p>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ why presentation design matters -->

         <!-- what we offer -->
         <section class="popular-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Our Presentation Design Services</p>
                        <h2 class="section-heading">A deck for every audience</h2>
                    </div>
                </div>
                <div class="row g-4">
                    <?php foreach ($categories as $i => $category): ?>
                    <div class="col-6 col-md-4 col-lg" data-animate data-delay="<?php echo $i * 80; ?>">
                        <div class="popular-service-card" style="--accent:<?php echo $esc($category['accent']); ?>">
                            <span class="popular-service-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><?php echo $siteData['icons'][$category['icon']]; ?></svg>
                            </span>
                            <h6><?php echo $esc($category['title']); ?></h6>
                            <p><?php echo $esc($category['subtitle']); ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ what we offer -->

         <!-- presentation categories detail -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">A Closer Look</p>
                        <h2 class="section-heading">What's inside each deck</h2>
                    </div>
                </div>
                <div class="row g-4">
                    <?php foreach ($categories as $i => $category): ?>
                    <div class="col-lg-6">
                        <div class="why-card<?php echo $i === 0 ? ' why-card-intro' : ''; ?>" style="--accent:<?php echo $esc($category['accent']); ?>" data-animate data-delay="<?php echo ($i % 2) * 90; ?>">
                            <h3><?php echo $esc($category['title']); ?></h3>
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
         <!--/ presentation categories detail -->

         <!-- our process -->
         <section class="who-we-are">
            <div class="bg-bubble bubble-blue" aria-hidden="true"></div>
            <div class="bg-bubble bubble-green" aria-hidden="true"></div>
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Our Design Process</p>
                        <h2 class="section-heading">Five steps from storyboard to final handoff</h2>
                        <p class="banner-text max-width-700" data-animate data-delay="80">
                            We don't just hand you a file and wave goodbye. We partner with you to
                            ensure the story is perfect.
                        </p>
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

         <!-- why choose us -->
         <section class="home_startup">
            <div class="row g-0 align-items-stretch">
                <div class="col-lg-6 startup-image" data-animate>
                    <img src="img/startup.jpg" alt="MellowDigi presentation design team at work">
                </div>
                <div class="col-lg-6 startup-content">
                    <div class="startup-content-inner">
                        <h2 class="startup-heading" data-animate>Why choose MellowDigi for presentations?</h2>
                        <h3 class="startup-subheading" data-animate data-delay="80">We speak "startup"</h3>
                        <p class="startup-text" data-animate data-delay="160">
                            You are busy building the product and running the company. Let us handle
                            the visual heavy lifting so you can focus on your delivery.
                        </p>
                        <ul class="startup-checklist" data-animate data-delay="220">
                            <?php foreach ($reasons as $reason): ?>
                            <li><strong><?php echo $esc($reason['title']); ?></strong> — <?php echo $esc($reason['description']); ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <a href="contact.html" class="btn-hero-cta" data-animate data-delay="280">Let's Talk Presentations</a>
                    </div>
                </div>
            </div>
         </section>
         <!--/ why choose us -->

         <!-- portfolio preview -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row align-items-center g-4">
                    <div class="col-lg-8" data-animate>
                        <p class="eyebrow">Portfolio Preview</p>
                        <h2 class="section-heading">See the before &amp; after</h2>
                        <p class="banner-text max-width-700">
                            Browse our portfolio for real slide transformations — the same visual
                            upgrade your deck gets when MellowDigi is behind it.
                        </p>
                    </div>
                    <div class="col-lg-4 text-lg-end" data-animate data-delay="100">
                        <a href="portfolio.html" class="btn-hero-cta">View Our Portfolio</a>
                    </div>
                </div>
            </div>
         </section>
         <!--/ portfolio preview -->

         <!-- cta -->
         <section class="founder-section">
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row align-items-center g-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Ready to Dazzle Your Audience?</p>
                        <h2 class="section-heading">Don't let your brilliant ideas get lost in a sea of bullet points.</h2>
                        <p class="founder-bio">
                            Let's create a presentation that opens doors.
                        </p>
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
                            <a href="contact.html" class="btn-hero-cta">Get a Custom Quote</a>
                            <a href="contact.html" class="btn-hero-cta">Download Our Pitch Deck Checklist</a>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ cta -->
     </main>
     <!--/ main -->

<?php include __DIR__ . '/components/footer.php'; ?>
