<?php
$siteData = json_decode(file_get_contents(__DIR__ . '/data/site-data.json'), true);

$pageTitle       = 'Marketing Collateral Design | MellowDigi';
$pageDescription = 'MellowDigi designs marketing collateral — from brand foundation assets to sales enablement, digital and print materials — that builds trust and turns conversations into conversions.';
$pageKeywords    = 'marketing collateral design, sales enablement materials, brand collateral, brochure design, pitch deck design, case study design, MellowDigi marketing collateral';
$pageUrl         = 'https://www.mellowdigi.com/marketing-collateral.php';
include __DIR__ . '/components/header.php';

$categories = [
    [
        'icon' => 'idcard', 'accent' => '#2BACE2',
        'title' => 'Brand Foundation Assets',
        'subtitle' => 'Your Visual Identity, Standardized',
        'intro' => "We start by building a cohesive visual language that ensures every piece of collateral feels unmistakably you.",
        'items' => [
            ['title' => 'Logo &amp; Brand Kit', 'description' => 'Consistent logos, color codes and typography that work across all platforms.'],
            ['title' => 'Professional Bios', 'description' => 'One-page sheets featuring headshots, experience and key credentials for your team.'],
            ['title' => 'Business Cards', 'description' => 'A tangible touchpoint that keeps you top-of-mind after every meeting.'],
            ['title' => 'Pocket Folders', 'description' => 'Custom-branded folders to organize and present your sales materials professionally.'],
        ],
    ],
    [
        'icon' => 'webmobile', 'accent' => '#3DB54A',
        'title' => 'Digital Collateral',
        'subtitle' => 'Online Assets That Convert',
        'intro' => 'Digital collateral meets your audience where they already are — online.',
        'items' => [
            ['title' => 'Landing Pages', 'description' => 'Purpose-built pages designed to capture leads and promote specific offers.'],
            ['title' => 'Blog Posts', 'description' => 'Educational content that boosts SEO, demonstrates expertise and nurtures leads.'],
            ['title' => 'E-books &amp; Whitepapers', 'description' => 'Long-form content that positions you as a thought leader and generates qualified leads.'],
            ['title' => 'Infographics', 'description' => 'Visually engaging assets that simplify complex information and are highly shareable.'],
            ['title' => 'Email Templates', 'description' => 'Branded, professional templates for newsletters, announcements and follow-ups.'],
        ],
    ],
    [
        'icon' => 'briefcase', 'accent' => '#F99E1F',
        'title' => 'Sales Enablement Materials',
        'subtitle' => 'Equip Your Team to Close Deals',
        'intro' => "Your sales team needs tools that work as hard as they do.",
        'items' => [
            ['title' => 'Firm or Company Summary', 'description' => 'A concise one-pager that clearly articulates your value proposition, ideal clients and services — perfect for emailing as a PDF or handing out in meetings.'],
            ['title' => 'Service Sheets', 'description' => 'Detailed one-pagers on each service you offer, making it easy to mix and match for different prospects.'],
            ['title' => 'Case Studies', 'description' => 'Real-world success stories that build trust and show prospects what you can achieve for them.'],
            ['title' => 'PowerPoint &amp; Pitch Decks', 'description' => 'Professionally designed presentation templates that ensure brand consistency and reduce prep time.'],
        ],
    ],
    [
        'icon' => 'printer', 'accent' => '#8B5CF6',
        'title' => 'Print &amp; Event Collateral',
        'subtitle' => 'Make a Lasting Impression',
        'intro' => 'Even in a digital world, physical materials create memorable moments.',
        'items' => [
            ['title' => 'Brochures &amp; Flyers', 'description' => 'Professional, easy-to-read materials that are quick to skim and effective as leave-behinds.'],
            ['title' => 'Event Standees &amp; Table Tops', 'description' => 'Attention-grabbing displays for trade shows and networking events.'],
            ['title' => 'Product Catalogs', 'description' => 'Comprehensive overviews of your offerings, perfect for showcasing your full range.'],
        ],
    ],
    [
        'icon' => 'mail', 'accent' => '#F43F5E',
        'title' => 'Retention &amp; Loyalty Collateral',
        'subtitle' => 'Keep Customers Coming Back',
        'intro' => 'Acquiring customers is only half the battle.',
        'items' => [
            ['title' => 'Newsletters', 'description' => 'Regular updates that keep your audience informed about new features, industry news and exclusive offers.'],
            ['title' => 'Re-engagement Campaigns', 'description' => 'Strategic emails designed to win back inactive customers.'],
            ['title' => 'Customer Magazines', 'description' => 'Engaging, brand-focused content that deepens customer relationships.'],
        ],
    ],
];

$journey = [
    ['icon' => 'search', 'accent' => '#2BACE2', 'stage' => 'Awareness', 'types' => 'Blog posts, infographics, landing pages, brochures'],
    ['icon' => 'book', 'accent' => '#3DB54A', 'stage' => 'Consideration', 'types' => 'Case studies, e-books, whitepapers, brand stories'],
    ['icon' => 'briefcase', 'accent' => '#F99E1F', 'stage' => 'Decision', 'types' => 'Proposals, presentations, detailed service sheets'],
    ['icon' => 'mail', 'accent' => '#8B5CF6', 'stage' => 'Loyalty', 'types' => 'Newsletters, customer magazines, re-engagement emails'],
];

$reasons = [
    ['title' => 'We Get It', 'description' => "We're a startup too. We know the challenges of limited budgets, tight timelines and the need to make every dollar count — so we focus on collateral that delivers measurable results, not just pretty designs."],
    ['title' => 'Smart Growth, Not Just Growth', 'description' => 'We help you start with the essentials and scale strategically. Whether you need a full suite or a single asset to get started, we tailor our services to your stage and goals.'],
];

$heroIcons = [
    ['icon' => 'idcard', 'label' => 'Marketing Collateral'],
];
?>

     <!-- main -->
     <main>
        <!-- banner-->
         <section class="banner">
            <div class="container-fluid nav-shell">
                <div class="row align-items-center banner-hero">
                    <div class="col-lg-6">
                        <p class="eyebrow" data-animate>Marketing Collateral</p>
                        <h1 class="banner-title" data-animate data-delay="120">
                            Turn <span class="text-gradient-brand">conversations into conversions</span>
                        </h1>
                        <p class="banner-text max-width-700" data-animate data-delay="220">
                            Your brand speaks volumes — let's make sure it says the right things. At
                            MellowDigi, we craft marketing collateral that doesn't just look good; it
                            tells your story, builds trust and drives action.
                        </p>
                        <p class="banner-text max-width-700" data-animate data-delay="260">
                            From sleek digital assets to print materials that leave a lasting impression,
                            we help startups like yours stand out in a crowded market.
                        </p>
                        <div class="d-flex flex-wrap gap-3" data-animate data-delay="320">
                            <a href="portfolio.html" class="btn-hero-cta">Explore Our Work</a>
                            <a href="contact.html" class="btn-hero-cta">Let's Talk</a>
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

         <!-- what is marketing collateral -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">What Is Marketing Collateral?</p>
                        <h2 class="section-heading">And why does it matter for a startup</h2>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="why-card why-card-intro" style="--accent:#2BACE2" data-animate>
                            <h3>The Toolkit Behind Every Sale</h3>
                            <p>Marketing collateral is any material that communicates your brand's message
                            and value to your audience. Think of it as the toolkit your sales team uses to
                            educate, persuade and convert prospects. Unlike flashy ads that scream for
                            attention, great collateral shows why you're the best choice by demonstrating
                            expertise and building credibility.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="why-card" style="--accent:#3DB54A" data-animate data-delay="90">
                            <h3>Remembered, Not Overlooked</h3>
                            <p>For a startup, strong collateral can be the difference between being
                            remembered and being overlooked. It guides potential customers through their
                            buying journey — from first hearing your name to becoming loyal advocates.</p>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ what is marketing collateral -->

         <!-- what we offer -->
         <section class="popular-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Our Collateral Services</p>
                        <h2 class="section-heading">Five categories, built to work together</h2>
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

         <!-- collateral categories detail -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">A Closer Look</p>
                        <h2 class="section-heading">What's inside each category</h2>
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
         <!--/ collateral categories detail -->

         <!-- our approach -->
         <section class="who-we-are">
            <div class="bg-bubble bubble-blue" aria-hidden="true"></div>
            <div class="bg-bubble bubble-green" aria-hidden="true"></div>
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Our Approach</p>
                        <h2 class="section-heading">Collateral that works together</h2>
                        <p class="banner-text max-width-700" data-animate data-delay="80">
                            We don't just design pieces in isolation. We build cohesive systems where
                            each asset supports the others and guides prospects through the buyer's
                            journey.
                        </p>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
                    <?php foreach ($journey as $i => $stage): ?>
                    <div class="col" data-animate data-delay="<?php echo $i * 80; ?>">
                        <div class="popular-service-card" style="--accent:<?php echo $esc($stage['accent']); ?>">
                            <span class="popular-service-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><?php echo $siteData['icons'][$stage['icon']]; ?></svg>
                            </span>
                            <h6><?php echo $esc($stage['stage']); ?></h6>
                            <p><?php echo $esc($stage['types']); ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ our approach -->

         <!-- why choose us -->
         <section class="home_startup">
            <div class="row g-0 align-items-stretch">
                <div class="col-lg-6 startup-image" data-animate>
                    <img src="img/startup.jpg" alt="MellowDigi marketing collateral design team at work">
                </div>
                <div class="col-lg-6 startup-content">
                    <div class="startup-content-inner">
                        <h2 class="startup-heading" data-animate>Why startups choose MellowDigi</h2>
                        <h3 class="startup-subheading" data-animate data-delay="80">We get it — because we're a startup too</h3>
                        <p class="startup-text" data-animate data-delay="160">
                            As one marketing expert puts it, "Starting free doesn't mean starting
                            small — it means starting smart." We help you build your collateral toolkit
                            one strategic piece at a time.
                        </p>
                        <ul class="startup-checklist" data-animate data-delay="220">
                            <?php foreach ($reasons as $reason): ?>
                            <li><strong><?php echo $esc($reason['title']); ?></strong> — <?php echo $esc($reason['description']); ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <a href="contact.html" class="btn-hero-cta" data-animate data-delay="280">Let's Talk Collateral</a>
                    </div>
                </div>
            </div>
         </section>
         <!--/ why choose us -->

         <!-- cta -->
         <section class="founder-section">
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row align-items-center g-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Ready to Build Your Collateral Toolkit?</p>
                        <h2 class="section-heading">Every great brand starts with a story. Let us help you tell yours.</h2>
                        <p class="founder-bio">
                            Whether you need a single asset or a full suite of collateral, MellowDigi is
                            here to help.
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
                        <a href="contact.html" class="btn-hero-cta">Get a Free Consultation</a>
                    </div>
                </div>
            </div>
         </section>
         <!--/ cta -->
        <?php include __DIR__ . '/components/enquiry-form.php'; ?>
     </main>
     <!--/ main -->

<?php include __DIR__ . '/components/footer.php'; ?>
