<?php
$siteData = json_decode(file_get_contents(__DIR__ . '/data/site-data.json'), true);

$pageTitle       = 'Promotional & Commercial Videos | MellowDigi';
$pageDescription = 'Turn attention into action. MellowDigi creates promotional and commercial videos — product launches, ad films and performance marketing content engineered to drive measurable results.';
$pageKeywords    = 'promotional video production, commercial video, ad film production, product launch video, performance marketing video, social media video ads, Meta ads video, YouTube Shorts video, MellowDigi video production';
$pageUrl         = 'https://www.mellowdigi.com/promotional-commercial-videos.php';
include __DIR__ . '/components/header.php';

$brandStory = [
    ['accent' => '#2BACE2', 'title' => 'Turn Attention Into Action', 'description' => 'In the crowded digital marketplace, capturing attention is the first battle &mdash; but winning it requires more than a flashy visual. It demands a message that stops the scroll and moves the audience. At Mellow, we create promotional and commercial videos designed to do exactly that.'],
    ['accent' => '#3DB54A', 'title' => 'Cinematic Quality, Strategic Insight', 'description' => 'We craft stories that are not only compelling but are also engineered to drive measurable results, turning viewers into customers and brands into icons. Our work blends cinematic quality with strategic marketing insight, ensuring every second of your video works to build your brand and boost your bottom line.'],
];

$services = [
    ['icon' => 'megaphone', 'accent' => '#2BACE2', 'title' => 'Product Launch Videos', 'description' => 'Generate excitement and build anticipation for your latest innovation. A product launch is a moment, and we make it a movement. We create high-impact videos that introduce your new product or service to the world with the fanfare it deserves, driving leads and sales from day one.'],
    ['icon' => 'clapperboard', 'accent' => '#3DB54A', 'title' => 'Advertising Videos (Ad Films)', 'description' => 'From 15-second social spots to two-minute cinematic commercials, we create ad films that are impossible to ignore. We capture attention in the opening seconds and keep viewers hooked, tailoring every frame to make your product irresistible to your ideal customer.'],
    ['icon' => 'search', 'accent' => '#F99E1F', 'title' => 'Performance Marketing Videos', 'description' => 'Our expertise extends to creating high-performing video ads for digital platforms like Meta and Google. We design content not just to look good, but to convert, with a focus on dynamic hooks, pacing and clear calls-to-action.'],
    ['icon' => 'phone', 'accent' => '#8B5CF6', 'title' => 'Social Media &amp; Platform-Specific Content', 'description' => "We understand that each platform has its own language. Whether it's a short-form video for Instagram Reels, a high-retention clip for YouTube Shorts or a professional video for LinkedIn, our content is optimized for the right pacing, typography, subtitles and format for maximum engagement. We can adapt a single concept into multiple variations for A/B testing across different placements and dimensions (1:1, 4:5, 9:16, 16:9)."],
];

$process = [
    ['step' => '01', 'title' => 'Concept &amp; Strategy', 'description' => "We start by understanding your brand, your product and your target audience. Our team of writers and strategists work together to build a compelling narrative that not only tells your story but also achieves your specific business goals &mdash; whether that's brand awareness, lead generation or direct sales."],
    ['step' => '02', 'title' => 'Production', 'description' => 'This is where creativity comes to life. We use a mix of live-action filming, dynamic motion graphics and 2D/3D animation to create visually stunning content. Every frame, transition and scene is crafted to immerse your audience and reinforce your brand identity.'],
    ['step' => '03', 'title' => 'Sound Design &amp; Music', 'description' => 'Sound is the heartbeat of a powerful video. We collaborate with sound artists to create an auditory experience that enhances the emotional impact of your film. From a captivating voiceover to a custom music score, we ensure your message lingers long after the video ends.'],
    ['step' => '04', 'title' => 'Post-Production &amp; Optimization', 'description' => 'In the editing suite, the final piece comes together. Our editors meticulously piece together each frame, adding visual effects, color grading and the finishing touches to create a polished final product. For digital campaigns, this stage also involves creating platform-specific versions and multiple variations for A/B testing to optimize performance.'],
];

$whyChoose = [
    ['title' => 'Strategic Storytelling', 'description' => 'We are storytellers first and marketers second. We focus on crafting a narrative that connects with your audience on an emotional level, building &ldquo;brand love&rdquo; and creating a lasting bond between your customers and your brand.'],
    ['title' => 'Performance-Focused', 'description' => 'We create content that is not just beautiful but also works hard for your business. We understand the mechanics of advertising and design our videos to capture attention and drive action.'],
    ['title' => 'Technical Excellence &amp; Adaptability', 'description' => 'Our team combines creative vision with technical expertise, using the latest production techniques and tools, including AI-driven workflows, to deliver high-quality results efficiently. We adapt our content seamlessly to fit any platform or format, from cinematic commercials to snackable social media clips.'],
];

$portfolioHighlights = [
    ['title' => 'Product Launch Films', 'description' => 'High-energy reveals built to generate day-one buzz and sales momentum.'],
    ['title' => 'Ad Films &amp; Commercials', 'description' => 'From 15-second spots to two-minute cinematic pieces, tailored to the platform.'],
    ['title' => 'Performance Video Ads', 'description' => 'Meta and Google-ready creative built around hooks, pacing and clear CTAs.'],
    ['title' => 'Platform Cutdowns', 'description' => 'One concept, adapted across Reels, Shorts, LinkedIn and every aspect ratio.'],
    ['title' => 'A/B Test Variants', 'description' => 'Multiple edits of a single concept, built to find the highest-converting cut.'],
];

$testimonials = [
    ['accent' => '#2BACE2', 'initials' => 'GM', 'text' => "Our product launch video from Mellow did exactly what we needed &mdash; it made the launch feel like an event. We saw a spike in sign-ups the day it went live and kept referencing it in every pitch afterward.", 'name' => 'Growth Marketing Lead', 'company' => '[Consumer App]'],
    ['accent' => '#3DB54A', 'initials' => 'PA', 'text' => "Mellow didn't just deliver a pretty ad film &mdash; they delivered a set of variants built for our actual media plan. Our click-through rate on Meta jumped noticeably once we swapped in their cuts.", 'name' => 'Performance Marketing Manager', 'company' => '[D2C Brand]'],
    ['accent' => '#F99E1F', 'initials' => 'BD', 'text' => "We needed one concept working across Reels, Shorts and LinkedIn, and Mellow handled every format without losing the core idea. It felt like getting five campaigns for the price of one shoot.", 'name' => 'Brand Director', 'company' => '[B2B SaaS]'],
];

$heroIcons = [
    ['icon' => 'megaphone', 'label' => 'Promotional &amp; Commercial Videos'],
];
?>

     <!-- main -->
     <main>
        <!-- banner-->
         <section class="banner">
            <div class="container-fluid nav-shell">
                <div class="row align-items-center banner-hero">
                    <div class="col-lg-6">
                        <p class="eyebrow" data-animate>Promotional &amp; Commercial Videos</p>
                        <h1 class="banner-title" data-animate data-delay="120">
                            Turn attention into <span class="text-gradient-brand">action</span>.
                        </h1>
                        <p class="banner-text max-width-700" data-animate data-delay="220">
                            In the crowded digital marketplace, capturing attention is the first
                            battle &mdash; but winning it requires more than a flashy visual. It
                            demands a message that stops the scroll and moves the audience.
                        </p>
                        <p class="banner-text max-width-700" data-animate data-delay="260">
                            At Mellow, we create promotional and commercial videos designed to do
                            exactly that &mdash; stories engineered to drive measurable results,
                            turning viewers into customers and brands into icons.
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
                        <h2 class="section-heading">Stories built to move an audience &mdash; and the numbers</h2>
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
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
                    <?php foreach ($services as $i => $service): ?>
                    <div class="col" data-animate data-delay="<?php echo ($i % 4) * 80; ?>">
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
                    <img src="img/startup.jpg" alt="MellowDigi production crew filming a commercial video">
                </div>
                <div class="col-lg-6 startup-content">
                    <div class="startup-content-inner">
                        <h2 class="startup-heading" data-animate>Why Mellow?</h2>
                        <h3 class="startup-subheading" data-animate data-delay="80">Storytelling that performs</h3>
                        <p class="startup-text" data-animate data-delay="160">
                            Our work blends cinematic quality with strategic marketing insight,
                            ensuring every second of your video works to build your brand and
                            boost your bottom line.
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
                            <h3>Promotional &amp; Commercial Highlights</h3>
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
                        <p class="eyebrow">Ready to Make Your Brand's Voice Heard?</p>
                        <h2 class="section-heading">Let's create something that demands attention.</h2>
                        <p class="founder-bio">
                            Whether it's a product launch, an ad film or a full performance
                            marketing rollout, we're ready to bring your brand's story to screen.
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
                            <a href="contact.php" class="btn-hero-cta">Let's Create Something</a>
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
