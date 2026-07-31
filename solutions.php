<?php
$siteData = json_decode(file_get_contents(__DIR__ . '/data/site-data.json'), true);

$pageTitle       = 'Solutions | MellowDigi';
$pageDescription = "From brand strategy and identity to motion graphics and integrated brand experiences — explore MellowDigi's end-to-end creative solutions.";
$pageKeywords    = 'brand strategy, brand identity, design thinking, motion graphics, logo animation, video branding, brand guidelines, visual storytelling, MellowDigi';
$pageUrl         = 'https://www.mellowdigi.com/solutions.php';
include __DIR__ . '/components/header.php';

$heroIcons = [
    ['icon' => 'layout', 'label' => 'Brand, Motion &amp; Visual Solutions'],
];

$brandStrategy = [
    ['icon' => 'target', 'accent' => '#2BACE2', 'title' => 'Brand Strategy &amp; Positioning', 'description' => "We help you define a unique and compelling brand image that resonates with your target audience &mdash; backed by deep research and a roadmap for long-term success."],
    ['icon' => 'idcard', 'accent' => '#3DB54A', 'title' => 'Brand Identity Development', 'description' => 'Cohesive, memorable brand identities built on clear visual cues that customers can instantly recognize and remember.'],
    ['icon' => 'pencil', 'accent' => '#F99E1F', 'title' => 'Design Thinking', 'description' => 'A creative problem-solving approach &mdash; empathize, define, ideate and test &mdash; to create innovative, effective designs.'],
];

$motionIdentity = [
    ['icon' => 'refresh', 'accent' => '#2BACE2', 'title' => 'Logo Animation', 'description' => 'Transform your static logo into a dynamic, animated element that leaves a lasting impression on your audience.'],
    ['icon' => 'clapperboard', 'accent' => '#3DB54A', 'title' => 'Motion Graphics', 'description' => 'Eye-catching visual effects and animated graphics for videos and presentations that capture attention and convey your message.'],
    ['icon' => 'video', 'accent' => '#F99E1F', 'title' => 'Video Branding', 'description' => 'Consistent visual styles and templates across all your video content, so your brand is instantly recognizable.'],
    ['icon' => 'users', 'accent' => '#8B5CF6', 'title' => 'Character Animation', 'description' => 'Unique animated characters that represent your brand and tell your story in a memorable, relatable way.'],
];

$brandExperiences = [
    ['icon' => 'book', 'accent' => '#2BACE2', 'title' => 'Brand Guidelines', 'description' => "A comprehensive framework for consistency across every touchpoint &mdash; applied correctly for a unified, professional brand presence."],
    ['icon' => 'photostack', 'accent' => '#3DB54A', 'title' => 'Visual Storytelling', 'description' => 'Motion graphics and visual elements woven into your identity to create immersive brand experiences that help you stand out.'],
];
?>

     <!-- main -->
     <main>
        <!-- banner-->
         <section class="banner">
            <div class="container-fluid nav-shell">
                <div class="row align-items-center banner-hero">
                    <div class="col-lg-6">
                        <p class="eyebrow" data-animate>Our Solutions</p>
                        <h1 class="banner-title" data-animate data-delay="120">
                            From vision to <span class="text-gradient-brand">visual mastery</span>.
                        </h1>
                        <p class="banner-text max-width-700" data-animate data-delay="220">
                            Exceptional digital solutions are born from a deep understanding of your
                            brand's story and goals. We combine creative strategy with cutting-edge
                            design to deliver visuals that don't just look good &mdash; they resonate,
                            engage and drive results, spanning your brand's identity all the way
                            through to graphics, 3D and video.
                        </p>
                        <div class="d-flex flex-wrap gap-3 mb-4" data-animate data-delay="280">
                            <a href="contact.php" class="btn-hero-cta">Contact Us</a>
                            <a href="portfolio.php" class="btn-hero-cta">See Our Work</a>
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

         <!-- brand & design strategy -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-8" data-animate>
                        <p class="eyebrow">Brand &amp; Design Strategy</p>
                        <h2 class="section-heading">Purposeful from the first pixel</h2>
                        <p class="banner-text max-width-700 mt-3" data-animate data-delay="80">
                            Before a single pixel is created, we invest time in understanding your
                            brand, your audience and your market. This strategic foundation ensures
                            every visual element we produce is purposeful and aligned with your
                            business objectives.
                        </p>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
                    <?php foreach ($brandStrategy as $i => $item): ?>
                    <div class="col" data-animate data-delay="<?php echo ($i % 3) * 90; ?>">
                        <div class="why-card h-100 mb-0" style="--accent:<?php echo $esc($item['accent']); ?>">
                            <span class="popular-service-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><?php echo $siteData['icons'][$item['icon']]; ?></svg>
                            </span>
                            <h3><?php echo $item['title']; ?></h3>
                            <p><?php echo $item['description']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ brand & design strategy -->

         <!-- graphics & motion identity -->
         <section class="who-we-are">
            <div class="bg-bubble bubble-blue" aria-hidden="true"></div>
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-8" data-animate>
                        <p class="eyebrow">Graphics &amp; Motion Identity</p>
                        <h2 class="section-heading">Your brand's story, in motion</h2>
                        <p class="banner-text max-width-700 mt-3" data-animate data-delay="80">
                            We breathe life into your brand's story through dynamic visuals and
                            compelling motion graphics &mdash; captivating animations that set your
                            brand apart across every digital platform.
                        </p>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
                    <?php foreach ($motionIdentity as $i => $item): ?>
                    <div class="col" data-animate data-delay="<?php echo ($i % 4) * 90; ?>">
                        <div class="why-card h-100" style="--accent:<?php echo $esc($item['accent']); ?>">
                            <span class="popular-service-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><?php echo $siteData['icons'][$item['icon']]; ?></svg>
                            </span>
                            <h3><?php echo $item['title']; ?></h3>
                            <p><?php echo $item['description']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ graphics & motion identity -->

         <!-- integrated brand experiences -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-8" data-animate>
                        <p class="eyebrow">Integrated Brand Experiences</p>
                        <h2 class="section-heading">Strategy, design and execution &mdash; connected</h2>
                        <p class="banner-text max-width-700 mt-3" data-animate data-delay="80">
                            We connect the dots between strategy, design and execution to deliver
                            comprehensive brand solutions that make a tangible impact.
                        </p>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-lg-2 g-4">
                    <?php foreach ($brandExperiences as $i => $item): ?>
                    <div class="col" data-animate data-delay="<?php echo ($i % 2) * 110; ?>">
                        <div class="why-card h-100 mb-0" style="--accent:<?php echo $esc($item['accent']); ?>">
                            <span class="popular-service-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><?php echo $siteData['icons'][$item['icon']]; ?></svg>
                            </span>
                            <h3><?php echo $item['title']; ?></h3>
                            <p><?php echo $item['description']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ integrated brand experiences -->

         <!-- our approach -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-9" data-animate>
                        <p class="eyebrow">Our Approach</p>
                        <h2 class="section-heading">Quality, backed by understanding</h2>
                        <p class="banner-text mt-3 mx-auto" data-animate data-delay="80">
                            Our work is driven by a commitment to quality and a deep understanding
                            of the market. We've helped clients from startups to established brands
                            secure funding and achieve market leadership by building brands with
                            emotional gravitas and visual grandeur. As a team of designers and
                            strategists, we're dedicated to creating solutions that are not only
                            visually stunning but also strategically sound.
                        </p>
                    </div>
                </div>
            </div>
         </section>
         <!--/ our approach -->

         <!-- let's create something exceptional -->
         <section class="founder-section">
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-8" data-animate>
                        <p class="eyebrow">Get Started</p>
                        <h2 class="section-heading">Let's create something exceptional.</h2>
                        <div class="d-flex flex-wrap gap-3 justify-content-center mt-4" data-animate data-delay="120">
                            <a href="contact.php" class="btn-hero-cta">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ let's create something exceptional -->

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
                            <p class="mt-3 mb-0">Follow us on YouTube, Instagram, LinkedIn and Twitter/X for more of our brand and design work.</p>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ contact -->
     </main>
     <!--/ main -->

<?php include __DIR__ . '/components/footer.php'; ?>
