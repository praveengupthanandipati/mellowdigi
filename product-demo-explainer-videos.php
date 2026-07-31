<?php
$siteData = json_decode(file_get_contents(__DIR__ . '/data/site-data.json'), true);

$pageTitle       = 'Product Demo & Explainer Videos | MellowDigi';
$pageDescription = 'Make your product the hero of the story. MellowDigi creates product demos, explainer videos and motion graphics that turn complex ideas into compelling, conversion-driving narratives.';
$pageKeywords    = 'product demo video, explainer video production, motion graphics animation, SaaS explainer video, product walkthrough video, animated explainer, brand animation, MellowDigi video production';
$pageUrl         = 'https://www.mellowdigi.com/product-demo-explainer-videos.php';
include __DIR__ . '/components/header.php';

$brandStory = [
    ['accent' => '#2BACE2', 'title' => 'More Than Just Features', 'description' => "In today's fast-paced digital world, a product is more than just its features; it's the solution to your customer's problems. But even the best product can go unnoticed if its value isn't communicated clearly and compellingly. At Mellow, we bridge that gap."],
    ['accent' => '#3DB54A', 'title' => 'A Story That Drives Action', 'description' => "We create product demos and explainer videos that do more than just show; they tell a story that resonates with your audience and drives action. Our approach blends creative storytelling with cutting-edge production techniques, ensuring your product doesn't just perform &mdash; it shines."],
];

$services = [
    ['icon' => 'clapperboard', 'accent' => '#2BACE2', 'title' => 'Explainer Videos', 'description' => "Simplify complex ideas with engaging, easy-to-understand animations. We turn technical jargon into clear, compelling narratives that educate and captivate your target audience. These videos are perfect for explaining your product's core value proposition quickly and effectively."],
    ['icon' => 'video', 'accent' => '#3DB54A', 'title' => 'Product Demo Videos', 'description' => 'Showcase your product in action with a cinematic touch. We create polished, walkthrough-style videos that highlight key features and demonstrate real-world applications. Whether for a website, a sales pitch or a product launch, our demo videos build confidence and drive conversions.'],
    ['icon' => 'palette', 'accent' => '#F99E1F', 'title' => 'Motion Graphics &amp; Animation', 'description' => "Bring your brand to life with dynamic motion graphics and custom animations. From logo animation to character animation, we design visual elements that are not only eye-catching but also perfectly aligned with your brand's personality, creating a memorable and immersive brand experience."],
];

$process = [
    ['step' => '01', 'title' => 'Conceptualisation &amp; Scripting', 'description' => 'We start by understanding your goals, your product and your audience. Our team of writers then crafts a compelling script that transforms your message into a powerful narrative that leaves a lasting impression.'],
    ['step' => '02', 'title' => 'Production', 'description' => 'This is where the magic happens. We use a mix of tools and techniques &mdash; from live-action filming to 2D and 3D animation &mdash; to bring your story to life. Every frame, transition and scene is thoughtfully crafted to immerse your audience in your product\'s world.'],
    ['step' => '03', 'title' => 'Sound Design &amp; Music', 'description' => 'Sound is the heartbeat of a powerful video. We collaborate with sound artists to create an auditory experience &mdash; from a captivating voiceover to a custom music score &mdash; that enhances the emotional impact and lingers in the viewer\'s mind long after the video ends.'],
    ['step' => '04', 'title' => 'Post-Production', 'description' => 'In the editing suite, the final piece comes together. Our editors meticulously piece together each frame, adding visual effects, color grading and the final touches to create a truly polished and professional product demo or explainer video.'],
];

$whyChoose = [
    ['title' => 'Strategic Storytelling', 'description' => 'We are storytellers at heart. We focus on crafting a narrative that connects with your audience on an emotional level, building &ldquo;brand love&rdquo; and creating a lasting bond between your customers and your product.'],
    ['title' => 'Technical Excellence', 'description' => 'Our team combines creative vision with technical expertise. We use the latest production techniques to ensure your videos are not only beautiful but also effective in achieving your business goals.'],
    ['title' => 'A Tailored Approach', 'description' => "We don't believe in a one-size-fits-all solution. We work closely with you to develop a custom video strategy that aligns with your brand tone, marketing objectives and target audience."],
];

$portfolioHighlights = [
    ['title' => 'SaaS Explainers', 'description' => 'Crisp animated walkthroughs that turn dense product logic into a two-minute story.'],
    ['title' => 'App Walkthroughs', 'description' => 'Screen-capture led demos that guide viewers through real product flows.'],
    ['title' => 'Motion Graphic Openers', 'description' => 'Punchy branded intros and title sequences built for launches and pitch decks.'],
    ['title' => 'Character Animation', 'description' => 'Custom illustrated characters that give abstract products a relatable voice.'],
    ['title' => 'Feature Launch Videos', 'description' => 'Fast-turnaround clips built to announce a single feature with maximum clarity.'],
];

$testimonials = [
    ['accent' => '#2BACE2', 'initials' => 'PM', 'text' => "We had a great product but a terrible time explaining it. Mellow turned our messy feature list into a two-minute story that our sales team now uses on every single call. Sign-ups from our landing page doubled within a month.", 'name' => 'Head of Product', 'company' => '[SaaS Startup]'],
    ['accent' => '#3DB54A', 'initials' => 'CM', 'text' => "The explainer video Mellow made distilled eighteen months of product development into ninety seconds anyone could understand. Our investors loved it, and so did our customers.", 'name' => 'Co-Founder', 'company' => '[Fintech Platform]'],
    ['accent' => '#F99E1F', 'initials' => 'BM', 'text' => "The motion graphics work was on another level. Every transition felt intentional, and the finished piece finally looked as good as our product actually is.", 'name' => 'Brand Manager', 'company' => '[Consumer Tech Brand]'],
];

$heroIcons = [
    ['icon' => 'clapperboard', 'label' => 'Product Demo &amp; Explainer Videos'],
];
?>

     <!-- main -->
     <main>
        <!-- banner-->
         <section class="banner">
            <div class="container-fluid nav-shell">
                <div class="row align-items-center banner-hero">
                    <div class="col-lg-6">
                        <p class="eyebrow" data-animate>Product Demo &amp; Explainer Videos</p>
                        <h1 class="banner-title" data-animate data-delay="120">
                            Make your product the <span class="text-gradient-brand">hero</span> of the story.
                        </h1>
                        <p class="banner-text max-width-700" data-animate data-delay="220">
                            In today's fast-paced digital world, a product is more than just its
                            features; it's the solution to your customer's problems. But even the
                            best product can go unnoticed if its value isn't communicated clearly
                            and compellingly.
                        </p>
                        <p class="banner-text max-width-700" data-animate data-delay="260">
                            At Mellow, we bridge that gap. We create product demos and explainer
                            videos that do more than just show; they tell a story that resonates
                            with your audience and drives action.
                        </p>
                        <div class="d-flex flex-wrap gap-3" data-animate data-delay="320">
                            <a href="portfolio.html" class="btn-hero-cta">See Our Portfolio</a>
                            <a href="contact.php" class="btn-hero-cta">Book a Consultation</a>
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

         <!-- brand story -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Our Approach</p>
                        <h2 class="section-heading">Bridging the gap between product and audience</h2>
                    </div>
                </div>
                <div class="row g-4">
                    <?php foreach ($brandStory as $i => $item): ?>
                    <div class="col-lg-6">
                        <div class="why-card<?php echo $i === 0 ? ' why-card-intro' : ''; ?>" style="--accent:<?php echo $esc($item['accent']); ?>" data-animate data-delay="<?php echo $i * 90; ?>">
                            <h3><?php echo $item['title']; ?></h3>
                            <p><?php echo $item['description']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ brand story -->

         <!-- what we offer -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">What We Offer</p>
                        <h2 class="section-heading">Our services</h2>
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
                            <p><?php echo $service['description']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ what we offer -->

         <!-- how we work -->
         <section class="who-we-are">
            <div class="bg-bubble bubble-blue" aria-hidden="true"></div>
            <div class="bg-bubble bubble-green" aria-hidden="true"></div>
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Our Process</p>
                        <h2 class="section-heading">From concept to screen</h2>
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
         <!--/ how we work -->

         <!-- why choose us -->
         <section class="home_startup">
            <div class="row g-0 align-items-stretch">
                <div class="col-lg-6 startup-image" data-animate>
                    <img src="img/startup.jpg" alt="MellowDigi production crew filming a product demo video">
                </div>
                <div class="col-lg-6 startup-content">
                    <div class="startup-content-inner">
                        <h2 class="startup-heading" data-animate>Why Mellow?</h2>
                        <h3 class="startup-subheading" data-animate data-delay="80">Storytelling that shines</h3>
                        <p class="startup-text" data-animate data-delay="160">
                            Our approach blends creative storytelling with cutting-edge production
                            techniques, ensuring your product doesn't just perform &mdash; it shines.
                        </p>
                        <ul class="startup-checklist" data-animate data-delay="220">
                            <?php foreach ($whyChoose as $item): ?>
                            <li><strong><?php echo $item['title']; ?></strong> &mdash; <?php echo $item['description']; ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <a href="contact.php" class="btn-hero-cta" data-animate data-delay="280">Let's Talk Video</a>
                    </div>
                </div>
            </div>
         </section>
         <!--/ why choose us -->

         <!-- our portfolio -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Our Portfolio</p>
                        <h2 class="section-heading">A glimpse into our world</h2>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-8">
                        <div class="why-card why-card-intro" style="--accent:#F43F5E" data-animate>
                            <h3>Product Demo &amp; Explainer Highlights</h3>
                            <ul class="startup-checklist">
                                <?php foreach ($portfolioHighlights as $i => $highlight): ?>
                                <li><strong><?php echo $esc($highlight['title']); ?></strong> &mdash; <?php echo $esc($highlight['description']); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex align-items-center">
                        <div data-animate data-delay="90">
                            <p class="banner-text">Ready to see the full body of work?</p>
                            <a href="portfolio.html" class="btn-hero-cta">See Our Portfolio</a>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ our portfolio -->

         <!-- testimonials -->
         <section class="testimonials-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Social Proof</p>
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
         <!--/ testimonials -->

         <!-- cta -->
         <section class="founder-section">
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row align-items-center g-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Ready to Turn Viewers Into Customers?</p>
                        <h2 class="section-heading">Let's tell your product's story.</h2>
                        <p class="founder-bio">
                            Whether you need a sharp explainer, a cinematic product demo or motion
                            graphics that make your brand pop, we're ready to bring it to screen.
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
                        <div class="d-flex flex-wrap gap-3 justify-content-lg-end">
                            <a href="contact.php" class="btn-hero-cta">Let's Tell Your Story</a>
                            <a href="contact.php" class="btn-hero-cta">Book a Consultation</a>
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
