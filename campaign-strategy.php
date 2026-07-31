<?php
$siteData = json_decode(file_get_contents(__DIR__ . '/data/site-data.json'), true);

$pageTitle       = 'Campaign Strategy & Execution | MellowDigi';
$pageDescription = 'From big ideas to real results. MellowDigi designs and executes powerful marketing campaigns that capture attention, drive engagement and grow your business.';
$pageKeywords    = 'campaign strategy, marketing campaign execution, multi-channel campaigns, product launch strategy, brand awareness campaigns, lead generation campaigns, influencer marketing, campaign management, MellowDigi campaigns';
$pageUrl         = 'https://www.mellowdigi.com/campaign-strategy.php';
include __DIR__ . '/components/header.php';

$services = [
    [
        'icon' => 'briefcase', 'accent' => '#2BACE2',
        'title' => 'Campaign Strategy',
        'subtitle' => 'A Solid Plan, First',
        'description' => 'We start with a solid plan.',
        'items' => ['Defining your goals &mdash; brand awareness, sales, leads?', 'Identifying your target audience', 'Choosing the right platforms &mdash; social media, email, website, ads', 'Setting a realistic budget and timeline'],
    ],
    [
        'icon' => 'palette', 'accent' => '#3DB54A',
        'title' => 'Creative Development',
        'subtitle' => 'Bringing the Campaign to Life',
        'description' => 'We bring your campaign to life with:',
        'items' => ['Eye-catching visuals and graphics', 'Compelling copy that tells your story', 'Engaging videos and reels', 'Consistent branding across all channels'],
    ],
    [
        'icon' => 'network', 'accent' => '#F99E1F',
        'title' => 'Multi-Channel Execution',
        'subtitle' => "We Don't Limit You to One Place",
        'description' => 'We execute your campaign across:',
        'items' => ['Social Media &mdash; Instagram, Facebook, LinkedIn, TikTok', 'Email Marketing', 'Paid Advertising &mdash; Google Ads, Social Ads', 'Website Landing Pages', 'Influencer Collaborations'],
    ],
    [
        'icon' => 'search', 'accent' => '#8B5CF6',
        'title' => 'Tracking &amp; Optimization',
        'subtitle' => "We Don't Launch and Leave",
        'description' => 'Once your campaign is live, we:',
        'items' => ['Monitor campaign performance daily', 'Track key metrics &mdash; reach, engagement, conversions', 'Make real-time adjustments for better results', 'Send you clear, simple reports'],
    ],
];

$campaignTypes = [
    ['icon' => 'box', 'accent' => '#2BACE2', 'title' => 'Product Launches', 'description' => 'Create buzz and drive sales for new offerings.'],
    ['icon' => 'billboard', 'accent' => '#3DB54A', 'title' => 'Seasonal Promotions', 'description' => 'Capitalize on holidays and special events.'],
    ['icon' => 'megaphone', 'accent' => '#F99E1F', 'title' => 'Brand Awareness', 'description' => 'Get your name in front of new audiences.'],
    ['icon' => 'mail', 'accent' => '#8B5CF6', 'title' => 'Lead Generation', 'description' => 'Attract potential customers and grow your email list.'],
    ['icon' => 'phone', 'accent' => '#F43F5E', 'title' => 'Retargeting Campaigns', 'description' => 'Re-engage people who already showed interest.'],
    ['icon' => 'instagram', 'accent' => '#14B8A6', 'title' => 'Influencer Campaigns', 'description' => 'Partner with trusted voices in your industry.'],
];

$process = [
    ['step' => '01', 'title' => 'Discovery', 'description' => 'We sit down with you to understand your goals, audience and budget. We ask the right questions to shape the perfect campaign.'],
    ['step' => '02', 'title' => 'Strategy Development', 'description' => 'We create a detailed campaign roadmap. This includes creative concepts, channel selection, timeline and budget allocation.'],
    ['step' => '03', 'title' => 'Creative Production', 'description' => 'Our designers and writers craft compelling content that aligns with your brand voice and campaign goals.'],
    ['step' => '04', 'title' => 'Launch', 'description' => 'We execute the campaign across your chosen channels with precision timing and coordination.'],
    ['step' => '05', 'title' => 'Monitor &amp; Optimize', 'description' => 'We track performance, analyze data and make adjustments to maximize results.'],
    ['step' => '06', 'title' => 'Report &amp; Learn', 'description' => "We deliver a comprehensive report showing what worked, what didn't and key learnings for future campaigns."],
];

$reasons = [
    ['title' => 'Creative + Strategic', 'description' => 'We balance bold creativity with data-backed strategy.'],
    ['title' => 'End-to-End Service', 'description' => 'From brainstorming to reporting, we handle everything.'],
    ['title' => 'Stress-Free Experience', 'description' => 'We manage the details so you can focus on your business.'],
    ['title' => 'Results-Driven', 'description' => 'We don&rsquo;t just make pretty campaigns &mdash; we make campaigns that work.'],
    ['title' => 'Transparent Communication', 'description' => "You'll always know what's happening and why."],
];

$testimonials = [
    ['accent' => '#2BACE2', 'initials' => 'HC', 'text' => 'MellowDigi executed our product launch campaign flawlessly. They understood our vision, created stunning content, and delivered results that exceeded our expectations. Our sales increased by 40% during the campaign period.', 'name' => 'Happy Client Name', 'company' => 'Company Name'],
    ['accent' => '#3DB54A', 'initials' => 'SC', 'text' => 'We had a tight deadline and a small budget, but MellowDigi made it work. Their strategic approach and creative execution helped us reach new customers we never thought possible.', 'name' => 'Satisfied Client Name', 'company' => 'Company Name'],
];

$faqs = [
    ['question' => 'How long does a campaign take?', 'answer' => "It depends on the scope. A simple social media campaign can take 2&ndash;3 weeks, while larger multi-channel campaigns may take 1&ndash;3 months. We'll give you a clear timeline upfront."],
    ['question' => 'What platforms do you run campaigns on?', 'answer' => 'We work across social media (Instagram, Facebook, LinkedIn, TikTok), Google Ads, email marketing, websites and more. We choose the best platforms for your goals.'],
    ['question' => 'How much does a campaign cost?', 'answer' => 'Every campaign is unique. We tailor our pricing based on your goals, channels and complexity. Contact us for a custom quote.'],
    ['question' => 'Do you manage the budget for paid ads?', 'answer' => 'Absolutely! We handle the entire ad spend management, ensuring your budget is used efficiently for maximum ROI.'],
    ['question' => 'How do you measure success?', 'answer' => 'We track metrics that matter to you &mdash; whether that&rsquo;s sales, leads, website traffic or brand awareness. We report on what aligns with your goals.'],
    ['question' => 'Can you help with influencer collaborations?', 'answer' => 'Yes! We can identify, reach out to and manage influencer partnerships as part of your campaign.'],
];

$heroIcons = [
    ['icon' => 'megaphone', 'label' => 'Campaign Strategy &amp; Execution'],
];
?>

     <!-- main -->
     <main>
        <!-- banner-->
         <section class="banner">
            <div class="container-fluid nav-shell">
                <div class="row align-items-center banner-hero">
                    <div class="col-lg-6">
                        <p class="eyebrow" data-animate>Campaign Strategy &amp; Execution</p>
                        <h1 class="banner-title" data-animate data-delay="120">
                            Big ideas. <span class="text-gradient-brand">Flawless execution.</span>
                        </h1>
                        <p class="banner-text max-width-700" data-animate data-delay="220">
                            A great campaign isn't just about creativity &mdash; it's about strategy
                            that works. At MellowDigi, we don't just dream up exciting campaigns; we
                            bring them to life with precision.
                        </p>
                        <p class="banner-text max-width-700" data-animate data-delay="260">
                            From product launches to brand awareness, we plan, create and execute
                            campaigns that connect with your audience and deliver measurable results.
                        </p>
                        <div class="d-flex flex-wrap gap-3" data-animate data-delay="320">
                            <a href="portfolio.html" class="btn-hero-cta">See Our Work</a>
                            <a href="contact.php" class="btn-hero-cta">Ready to Launch Something Amazing?</a>
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

         <!-- what is campaign strategy -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">What Is Campaign Strategy &amp; Execution?</p>
                        <h2 class="section-heading">Think of a campaign like a movie premiere</h2>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="why-card why-card-intro" style="--accent:#2BACE2" data-animate>
                            <h3>A Great Story, a Talented Cast, a Perfect Release Date</h3>
                            <p>You need a great story (strategy), a talented cast (creatives) and a
                            perfect release date (timing). Most importantly, you need someone to manage
                            everything behind the scenes so the show goes smoothly. That's what we do.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="why-card" style="--accent:#3DB54A" data-animate data-delay="90">
                            <h3>Every Detail, From First Idea to Final Result</h3>
                            <p>We plan every detail of your marketing campaign &mdash; from the first
                            idea to the final result &mdash; and make sure it reaches the right people
                            at the right time.</p>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ what is campaign strategy -->

         <!-- what we offer -->
         <section class="popular-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Our Campaign Services</p>
                        <h2 class="section-heading">What we do to bring a campaign to life</h2>
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
                        <h2 class="section-heading">What's inside every campaign</h2>
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

         <!-- types of campaigns -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Types of Campaigns We Execute</p>
                        <h2 class="section-heading">Whatever the goal, we've built for it</h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
                    <?php foreach ($campaignTypes as $i => $type): ?>
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
         <!--/ types of campaigns -->

         <!-- our process -->
         <section class="who-we-are">
            <div class="bg-bubble bubble-blue" aria-hidden="true"></div>
            <div class="bg-bubble bubble-green" aria-hidden="true"></div>
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Our Simple Process</p>
                        <h2 class="section-heading">From first idea to final report</h2>
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
                    <img src="img/startup.jpg" alt="MellowDigi campaign team at work">
                </div>
                <div class="col-lg-6 startup-content">
                    <div class="startup-content-inner">
                        <h2 class="startup-heading" data-animate>Why choose MellowDigi for campaigns?</h2>
                        <h3 class="startup-subheading" data-animate data-delay="80">Creative, strategic and stress-free</h3>
                        <p class="startup-text" data-animate data-delay="160">
                            We don't just make pretty campaigns &mdash; we make campaigns that work,
                            and we handle the details so you can focus on your business.
                        </p>
                        <ul class="startup-checklist" data-animate data-delay="220">
                            <?php foreach ($reasons as $reason): ?>
                            <li><strong><?php echo $reason['title']; ?></strong> &mdash; <?php echo $reason['description']; ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <a href="contact.php" class="btn-hero-cta" data-animate data-delay="280">Let's Talk Campaigns</a>
                    </div>
                </div>
            </div>
         </section>
         <!--/ why choose us -->

         <!-- campaign success stories -->
         <section class="testimonials-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Campaign Success Stories</p>
                        <h2 class="section-heading">What our clients say</h2>
                    </div>
                </div>
            </div>

            <div class="testimonials-swiper swiper-container" data-animate data-delay="150">
                <div class="swiper-wrapper">
                    <?php foreach ($testimonials as $t): ?>
                    <div class="swiper-slide">
                        <div class="testimonial-card" style="--accent:<?php echo $esc($t['accent']); ?>">
                            <span class="testimonial-quote-icon">
                                <svg width="34" height="26" viewBox="0 0 34 26" fill="currentColor"><path d="M14.5 0L9 12H15V26H0V13L6 0H14.5ZM33.5 0L28 12H34V26H19V13L25 0H33.5Z"/></svg>
                            </span>
                            <div class="testimonial-stars">
                                <?php for ($s = 0; $s < 5; $s++): ?>
                                <svg viewBox="0 0 24 24"><path d="M12 2.5l2.9 6.2 6.6.7-5 4.6 1.4 6.6-5.9-3.4-5.9 3.4 1.4-6.6-5-4.6 6.6-.7z"/></svg>
                                <?php endfor; ?>
                            </div>
                            <p class="testimonial-text"><?php echo $esc($t['text']); ?></p>
                            <div class="testimonial-author">
                                <span class="testimonial-avatar"><?php echo $esc($t['initials']); ?></span>
                                <div class="testimonial-author-info">
                                    <h6><?php echo $esc($t['name']); ?></h6>
                                    <span><?php echo $esc($t['company']); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
         </section>
         <!--/ campaign success stories -->

         <!-- the mellow guarantee -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-8" data-animate>
                        <p class="eyebrow">The Mellow Guarantee</p>
                        <h2 class="section-heading">Your campaign deserves passion, precision and calm.</h2>
                        <p class="banner-text max-width-700 mx-auto">
                            We promise to treat your campaign like it's our own &mdash; with attention
                            to detail, creative excellence and an approach that makes the process
                            enjoyable.
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
                        <p class="eyebrow">Ready to Make Some Noise?</p>
                        <h2 class="section-heading">Every great campaign starts with a conversation. Tell us about your goals, and we'll build a campaign that delivers.</h2>
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
                            <a href="contact.php" class="btn-hero-cta">Start Your Campaign</a>
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
