<?php
$siteData = json_decode(file_get_contents(__DIR__ . '/data/site-data.json'), true);

$pageTitle       = 'Social Media Marketing & Management | MellowDigi';
$pageDescription = "Stop scrolling, start converting. MellowDigi offers strategic social media management that builds communities and drives revenue. Let's grow your brand, calmly.";
$pageKeywords    = 'social media management, social media marketing agency, content creation agency, instagram marketing, facebook advertising, community management, digital strategy, brand awareness, MellowDigi social media';
$pageUrl         = 'https://www.mellowdigi.com/social-media-marketing.php';
include __DIR__ . '/components/header.php';

$services = [
    ['icon' => 'pencil', 'accent' => '#2BACE2', 'title' => 'Strategic Content Creation', 'subtitle' => 'Thumb-Stopping Visuals &amp; Copy', 'description' => "We don't do &ldquo;random.&rdquo; We craft thumb-stopping visuals and copy tailored to your specific audience persona. From carousels to Reels, we tell your story in a way that resonates."],
    ['icon' => 'network', 'accent' => '#3DB54A', 'title' => 'Community Management', 'subtitle' => 'A Two-Way Street', 'description' => 'Social media is a two-way street. We reply, engage and foster relationships with your followers, turning strangers into loyal advocates for your brand.'],
    ['icon' => 'megaphone', 'accent' => '#F99E1F', 'title' => 'Paid Social Advertising', 'subtitle' => 'Need a Boost?', 'description' => 'We manage high-ROI ad campaigns across Meta, Instagram and LinkedIn. We optimize for conversions, not just &ldquo;Likes.&rdquo;'],
    ['icon' => 'search', 'accent' => '#8B5CF6', 'title' => 'Analytics &amp; Reporting', 'subtitle' => 'Beyond the Vanity Metrics', 'description' => 'We cut through the vanity metrics &mdash; goodbye, &ldquo;Impressions.&rdquo; We track what matters: engagement rates, click-throughs and growth towards your bottom line.'],
];

$process = [
    ['step' => '01', 'title' => 'Discovery', 'description' => 'We dive deep into your brand, competitors and ideal customer. We build the foundation.'],
    ['step' => '02', 'title' => 'Strategy', 'description' => 'We create a content calendar aligned with your business goals, not just trending sounds.'],
    ['step' => '03', 'title' => 'Creation &amp; Execution', 'description' => 'We design high-quality graphics, write compelling copy and schedule posts at optimal times.'],
    ['step' => '04', 'title' => 'Monitor &amp; Optimize', 'description' => "We watch the data. If something isn't working, we pivot fast and double down on what is."],
];

$reasons = [
    ['title' => 'The &ldquo;Mellow&rdquo; Strategy', 'description' => 'We prioritize quality over quantity. No spammy tactics. Just intentional, high-value content.'],
    ['title' => 'Data-Backed Decisions', 'description' => 'We use AI and analytics to know exactly when to post and what to post.'],
    ['title' => 'Dedicated Team', 'description' => 'You get a dedicated content strategist and designer who treat your brand like their own.'],
    ['title' => 'Transparent Reporting', 'description' => 'Monthly reports delivered straight to your inbox &mdash; without the fluff.'],
];

$faqs = [
    ['question' => 'How often will you post on my account?', 'answer' => 'We recommend 3&ndash;5 times per week for optimal growth, but we customize this based on your industry and capacity.'],
    ['question' => 'Do I need to approve everything before it goes live?', 'answer' => 'Absolutely! You maintain full control. We send a monthly content calendar for your approval.'],
    ['question' => 'How long until I see results?', 'answer' => 'While organic growth takes time, many clients see increased engagement within the first 30 days.'],
    ['question' => 'What platforms do you manage?', 'answer' => 'Instagram, Facebook, LinkedIn, TikTok and Twitter/X.'],
];

$platforms = ['Instagram', 'Facebook', 'LinkedIn', 'TikTok', 'Twitter/X'];

$heroIcons = [
    ['icon' => 'megaphone', 'label' => 'Social Media Marketing &amp; Management'],
];
?>

     <!-- main -->
     <main>
        <!-- banner-->
         <section class="banner">
            <div class="container-fluid nav-shell">
                <div class="row align-items-center banner-hero">
                    <div class="col-lg-6">
                        <p class="eyebrow" data-animate>Social Media Marketing &amp; Management</p>
                        <h1 class="banner-title" data-animate data-delay="120">
                            Your brand voice, <span class="text-gradient-brand">amplified</span>
                        </h1>
                        <p class="banner-text max-width-700" data-animate data-delay="220">
                            Social media isn't just about posting &mdash; it's about connecting. At
                            MellowDigi, we take the chaos out of content creation, combining
                            data-driven strategy with authentic storytelling to build communities
                            that actually care about what you have to say.
                        </p>
                        <p class="banner-text max-width-700" data-animate data-delay="260">
                            We manage the noise so you can focus on the product. From strategy to
                            scheduling to the numbers that matter, we've got your feed covered.
                        </p>
                        <div class="d-flex flex-wrap gap-3" data-animate data-delay="320">
                            <a href="portfolio.html" class="btn-hero-cta">See Our Work</a>
                            <a href="contact.html" class="btn-hero-cta">Let's Talk About Your Goals</a>
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

         <!-- the problem / the mellow solution -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Feeling the Burnout?</p>
                        <h2 class="section-heading">The chaos ends here</h2>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="why-card why-card-intro" style="--accent:#2BACE2" data-animate>
                            <h3>Sound Familiar?</h3>
                            <p>Struggling to keep up with the &ldquo;algorithm gods.&rdquo; Running out
                            of content ideas that aren't boring. Posting consistently but still seeing
                            zero ROI. If social media has started to feel like a second job, you're not
                            alone &mdash; and you don't have to do it alone either.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="why-card" style="--accent:#3DB54A" data-animate data-delay="90">
                            <h3>We Take the Stress Off Your Shoulders</h3>
                            <p>MellowDigi manages the noise so you can focus on the product. We don't
                            just post; we curate, engage and convert &mdash; turning your social channels
                            into a genuine growth engine instead of one more thing on your to-do list.</p>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ the problem / the mellow solution -->

         <!-- what we offer -->
         <section class="popular-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Our Social Media Services</p>
                        <h2 class="section-heading">Everything your feed needs to convert</h2>
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
                        <h2 class="section-heading">What's inside every plan</h2>
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

         <!-- our process -->
         <section class="who-we-are">
            <div class="bg-bubble bubble-blue" aria-hidden="true"></div>
            <div class="bg-bubble bubble-green" aria-hidden="true"></div>
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Our Process</p>
                        <h2 class="section-heading">How we work</h2>
                        <p class="banner-text max-width-700" data-animate data-delay="80">
                            We don't just schedule posts. We build a strategy that reflects your
                            brand and moves the numbers that matter.
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
                    <img src="img/startup.jpg" alt="MellowDigi social media team at work">
                </div>
                <div class="col-lg-6 startup-content">
                    <div class="startup-content-inner">
                        <h2 class="startup-heading" data-animate>Why choose MellowDigi?</h2>
                        <h3 class="startup-subheading" data-animate data-delay="80">The &ldquo;Mellow&rdquo; strategy</h3>
                        <p class="startup-text" data-animate data-delay="160">
                            We prioritize quality over quantity &mdash; no spammy tactics, just
                            intentional, high-value content that builds a community that actually
                            cares.
                        </p>
                        <ul class="startup-checklist" data-animate data-delay="220">
                            <?php foreach ($reasons as $reason): ?>
                            <li><strong><?php echo $reason['title']; ?></strong> &mdash; <?php echo $reason['description']; ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <a href="contact.html" class="btn-hero-cta" data-animate data-delay="280">Let's Talk Social</a>
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
                        <h2 class="section-heading">Peace of mind is the greatest ROI.</h2>
                        <p class="banner-text max-width-700 mx-auto">
                            We guarantee consistent, authentic engagement that aligns with your
                            brand's values.
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

         <!-- platforms we manage -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Platforms We Manage</p>
                        <h2 class="section-heading">Wherever your audience scrolls, we're there</h2>
                    </div>
                </div>
                <div class="audience-pills" data-animate data-delay="100">
                    <?php foreach ($platforms as $platform): ?>
                    <span class="audience-pill"><?php echo $esc($platform); ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ platforms we manage -->

         <!-- cta -->
         <section class="founder-section">
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row align-items-center g-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Ready to Build a Community?</p>
                        <h2 class="section-heading">Stop treating social media like a chore. Start treating it like your greatest asset.</h2>
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
                            <a href="contact.html" class="btn-hero-cta">Let's Get Started</a>
                            <a href="contact.html" class="btn-hero-cta">Request a Free Audit</a>
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
