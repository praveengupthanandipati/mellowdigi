<?php
$siteData = json_decode(file_get_contents(__DIR__ . '/data/site-data.json'), true);

$pageTitle       = 'Live Stream Production | MellowDigi';
$pageDescription = 'Professional live stream production services for corporate events, webinars, conferences and concerts. HD quality, multi-camera and reliable streaming.';
$pageKeywords    = 'live stream production, live streaming, live broadcast, video production, streaming services, corporate streaming, webinar production, MellowDigi';
$pageUrl         = 'https://www.mellowdigi.com/live-streamp-production.php';
include __DIR__ . '/components/header.php';

$stats = [
    ['number' => '500+', 'label' => 'Live Events Produced'],
    ['number' => '99.9%', 'label' => 'Uptime Guarantee'],
    ['number' => '24/7', 'label' => 'Technical Support'],
    ['number' => 'Multi-Platform', 'label' => 'Streaming Support'],
];

$workflow = [
    ['step' => '01', 'accent' => '#2BACE2', 'title' => 'Pre-Production Planning', 'items' => ['Concept development and storyboarding', 'Equipment selection and setup', 'Rehearsal coordination', 'Backup and contingency planning']],
    ['step' => '02', 'accent' => '#3DB54A', 'title' => 'Production Execution', 'items' => ['Multi-camera switching', 'Professional audio mixing', 'Real-time graphics and overlays', 'Remote camera operation', 'Live switching and directing']],
    ['step' => '03', 'accent' => '#F99E1F', 'title' => 'Post-Production', 'items' => ['Recording and archiving', 'Video editing and highlights', 'Clip creation for social media', 'Analytics and engagement reports']],
];

$platforms = ['YouTube Live', 'Facebook Live', 'LinkedIn Live', 'Twitch', 'Vimeo', 'Custom RTMP destinations', 'Corporate websites (embedded)', 'Zoom Webinars', 'Microsoft Teams'];

$equipment = [
    ['icon' => 'camera', 'accent' => '#2BACE2', 'title' => 'Cameras', 'items' => ['Sony FX9 / FX6 (Cinema-grade)', 'Blackmagic URSA Broadcast', 'PTZ cameras (remote controlled)', '4K/HD options available']],
    ['icon' => 'headphones', 'accent' => '#3DB54A', 'title' => 'Audio', 'items' => ['Wireless lavalier mics', 'Shotgun mics', 'Audio mixers (Yamaha, Behringer)', 'Live audio monitoring']],
    ['icon' => 'layout', 'accent' => '#F99E1F', 'title' => 'Switching &amp; Streaming', 'items' => ['Blackmagic ATEM series', 'vMix / OBS / Wirecast', 'Dedicated streaming encoders', 'Cloud-based production tools']],
    ['icon' => 'network', 'accent' => '#8B5CF6', 'title' => 'Connectivity', 'items' => ['Bonded cellular (LiveU, Dejero)', 'Dedicated fiber internet', '5G backup', 'Redundant connections']],
];

$whoWeServe = [
    ['icon' => 'briefcase', 'title' => 'Corporate', 'description' => 'Town halls, earnings calls, internal communications.'],
    ['icon' => 'graduationcap', 'title' => 'Education', 'description' => 'Virtual classrooms, graduation ceremonies, lectures.'],
    ['icon' => 'medical', 'title' => 'Healthcare', 'description' => 'Medical conferences, training sessions.'],
    ['icon' => 'megaphone', 'title' => 'Non-Profits', 'description' => 'Fundraising events, awareness campaigns.'],
    ['icon' => 'video', 'title' => 'Media', 'description' => 'Live news, sports, entertainment.'],
    ['icon' => 'clapperboard', 'title' => 'Events', 'description' => 'Conferences, product launches, concerts.'],
    ['icon' => 'tag', 'title' => 'E-Commerce', 'description' => 'Live shopping, product demonstrations.'],
];

$whyChoose = [
    ['icon' => 'users', 'title' => 'Experienced Production Team', 'description' => 'Seasoned crews who have run hundreds of live broadcasts.'],
    ['icon' => 'camera', 'title' => 'State-of-the-Art Equipment', 'description' => 'Cinema-grade cameras and broadcast-quality gear.'],
    ['icon' => 'refresh', 'title' => 'Reliable &amp; Redundant Systems', 'description' => 'Backup power, cameras and connectivity on every shoot.'],
    ['icon' => 'layout', 'title' => 'Scalable Solutions', 'description' => 'Packages that flex to fit any budget or event size.'],
    ['icon' => 'clock', 'title' => 'Quick Setup &amp; Breakdown', 'description' => 'Efficient load-in and strike so venues stay on schedule.'],
    ['icon' => 'network', 'title' => 'Real-Time Monitoring', 'description' => 'Live support watching every stream, start to finish.'],
    ['icon' => 'tag', 'title' => 'Customizable Packages', 'description' => 'Add exactly the crew, cameras and add-ons you need.'],
    ['icon' => 'target', 'title' => 'Post-Event Analytics', 'description' => 'Engagement reports and insights after every broadcast.'],
];

$projects = [
    ['accent' => '#2BACE2', 'title' => 'Tech Summit 2026', 'stats' => [['3-Day', 'Conference'], ['8', 'Speakers, 4 Time Zones'], ['5,000+', 'Concurrent Viewers'], ['99.9%', 'Uptime']]],
    ['accent' => '#3DB54A', 'title' => 'Global Product Launch', 'stats' => [['15', 'Countries Streamed'], ['3', 'Languages Supported'], ['10,000+', 'Registrations'], ['4K', 'Broadcast Quality']]],
    ['accent' => '#F99E1F', 'title' => 'Virtual Fundraising Gala', 'stats' => [['2 Hrs', 'Live Event'], ['2,500+', 'Donors Participated'], ['$500K+', 'Funds Raised'], ['Real-Time', 'Donation Tracking']]],
];

$weProvide = ['All cameras, audio and lighting equipment', 'Production crew and directors', 'Streaming encoders and software', 'Backup systems and redundancy'];
$clientProvides = ['Venue / location (or we can help find one)', 'Internet connection (minimum 10 Mbps upload)', 'Content and presentation materials', 'On-site coordinator (if needed)'];

$faqs = [
    ['question' => 'How far in advance should I book?', 'answer' => 'At least 2 weeks for standard events, and 4&ndash;6 weeks for large-scale productions.'],
    ['question' => 'Do you offer remote production?', 'answer' => 'Yes, we can produce events remotely with on-site camera operators.'],
    ['question' => 'What if my internet goes down?', 'answer' => 'We provide backup internet and cellular bonding to keep you live.'],
    ['question' => 'Can I get a recording afterward?', 'answer' => 'Yes, recording is included with every production.'],
    ['question' => 'Do you support multiple languages?', 'answer' => 'Yes, we offer live translation and subtitling services.'],
];

$heroIcons = [
    ['icon' => 'video', 'label' => 'Live Stream Production'],
];
?>

     <!-- main -->
     <main>
        <!-- banner-->
         <section class="banner">
            <div class="container-fluid nav-shell">
                <div class="row align-items-center banner-hero">
                    <div class="col-lg-6">
                        <p class="eyebrow" data-animate>Live Stream Production</p>
                        <h1 class="banner-title" data-animate data-delay="120">
                            Go live with <span class="text-gradient-brand">confidence</span>.
                        </h1>
                        <p class="banner-text max-width-700" data-animate data-delay="220">
                            Professional live streaming solutions for events, webinars, concerts
                            and corporate broadcasts. We handle the tech, so you focus on your
                            audience.
                        </p>
                        <div class="d-flex flex-wrap gap-3 mb-4" data-animate data-delay="280">
                            <a href="contact.html" class="btn-hero-cta">Get a Custom Quote</a>
                            <a href="#enquiry" class="btn-hero-cta">Send an Enquiry</a>
                        </div>
                        <div class="row row-cols-2 row-cols-sm-4 g-3 tutorial-stats" data-animate data-delay="320">
                            <?php foreach ($stats as $stat): ?>
                            <div class="col">
                                <div class="who-stat">
                                    <h3><?php echo $esc($stat['number']); ?></h3>
                                    <p><?php echo $esc($stat['label']); ?></p>
                                </div>
                            </div>
                            <?php endforeach; ?>
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

         <!-- what we offer: workflow -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">What We Offer</p>
                        <h2 class="section-heading">End-to-end live stream production</h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-lg-3 g-4">
                    <?php foreach ($workflow as $i => $phase): ?>
                    <div class="col" data-animate data-delay="<?php echo $i * 110; ?>">
                        <div class="why-card h-100" style="--accent:<?php echo $esc($phase['accent']); ?>">
                            <span class="workflow-badge" style="--accent:<?php echo $esc($phase['accent']); ?>"><?php echo $esc($phase['step']); ?></span>
                            <h3><?php echo $phase['title']; ?></h3>
                            <ul class="startup-checklist">
                                <?php foreach ($phase['items'] as $item): ?>
                                <li><?php echo $esc($item); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ what we offer -->

         <!-- platforms -->
         <section class="bottom-services-section pb-0">
            <div class="container-fluid nav-shell">
                <div class="row mb-4">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Platforms We Stream To</p>
                        <h2 class="section-heading">Everywhere your audience already is</h2>
                    </div>
                </div>
                <div class="audience-pills" data-animate data-delay="100">
                    <?php foreach ($platforms as $platform): ?>
                    <span class="audience-pill"><?php echo $esc($platform); ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ platforms -->

         <!-- equipment -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Equipment &amp; Technology</p>
                        <h2 class="section-heading">Broadcast-grade gear, every time</h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
                    <?php foreach ($equipment as $i => $cat): ?>
                    <div class="col" data-animate data-delay="<?php echo ($i % 4) * 90; ?>">
                        <div class="why-card h-100 mb-0" style="--accent:<?php echo $esc($cat['accent']); ?>">
                            <span class="popular-service-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><?php echo $siteData['icons'][$cat['icon']]; ?></svg>
                            </span>
                            <h3><?php echo $cat['title']; ?></h3>
                            <ul class="startup-checklist">
                                <?php foreach ($cat['items'] as $item): ?>
                                <li><?php echo $esc($item); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ equipment -->

         <!-- who we serve -->
         <section class="who-we-are">
            <div class="bg-bubble bubble-blue" aria-hidden="true"></div>
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Who We Serve</p>
                        <h2 class="section-heading">Industries we stream for</h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
                    <?php foreach ($whoWeServe as $i => $item): ?>
                    <div class="col" data-animate data-delay="<?php echo ($i % 4) * 80; ?>">
                        <div class="process-step h-100">
                            <span class="popular-service-icon" style="--accent:#f5811f">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><?php echo $siteData['icons'][$item['icon']]; ?></svg>
                            </span>
                            <h6><?php echo $item['title']; ?></h6>
                            <p><?php echo $item['description']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ who we serve -->

         <!-- why choose us -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Why Choose Us</p>
                        <h2 class="section-heading">Why choose MellowDigi</h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
                    <?php foreach ($whyChoose as $i => $item): ?>
                    <div class="col" data-animate data-delay="<?php echo ($i % 4) * 80; ?>">
                        <div class="process-step h-100">
                            <span class="popular-service-icon" style="--accent:#f5811f">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><?php echo $siteData['icons'][$item['icon']]; ?></svg>
                            </span>
                            <h6><?php echo $item['title']; ?></h6>
                            <p><?php echo $item['description']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ why choose us -->

         <!-- recent projects -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Recent Projects</p>
                        <h2 class="section-heading">Proof it works, at scale</h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-lg-3 g-4">
                    <?php foreach ($projects as $i => $project): ?>
                    <div class="col" data-animate data-delay="<?php echo $i * 110; ?>">
                        <div class="project-card" style="--accent:<?php echo $esc($project['accent']); ?>">
                            <div class="project-card-header">
                                <h3><?php echo $esc($project['title']); ?></h3>
                            </div>
                            <div class="project-card-body">
                                <div class="project-stat-grid">
                                    <?php foreach ($project['stats'] as $stat): ?>
                                    <div class="project-stat">
                                        <span class="value"><?php echo $esc($stat[0]); ?></span>
                                        <span class="label"><?php echo $esc($stat[1]); ?></span>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ recent projects -->

         <!-- technical requirements -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Technical Requirements</p>
                        <h2 class="section-heading">Who brings what</h2>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="why-card why-card-intro h-100 mb-0" style="--accent:#2BACE2" data-animate>
                            <span class="popular-service-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><?php echo $siteData['icons']['certificate']; ?></svg>
                            </span>
                            <h3>We Provide</h3>
                            <ul class="startup-checklist">
                                <?php foreach ($weProvide as $item): ?>
                                <li><?php echo $esc($item); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="why-card h-100 mb-0" style="--accent:#3DB54A" data-animate data-delay="90">
                            <span class="popular-service-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><?php echo $siteData['icons']['users']; ?></svg>
                            </span>
                            <h3>Client Provides</h3>
                            <ul class="startup-checklist">
                                <?php foreach ($clientProvides as $item): ?>
                                <li><?php echo $esc($item); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ technical requirements -->

         <!-- get a quote -->
         <section class="founder-section">
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row align-items-center g-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Pricing Inquiry</p>
                        <h2 class="section-heading">Get a custom quote</h2>
                        <p class="founder-bio">
                            Every event is unique. Contact us for a tailored proposal based on
                            your specific needs.
                        </p>
                        <ul class="footer-contact">
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><?php echo $siteData['icons']['mail']; ?></svg>
                                <span>Email: info@mellowdigi.com</span>
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><?php echo $siteData['icons']['call']; ?></svg>
                                <span>Phone: +91 77999 71112</span>
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><?php echo $siteData['icons']['network']; ?></svg>
                                <span>Live Chat: Available on website</span>
                            </li>
                        </ul>
                        <span class="tutorial-level-badge">Response Time: Within 2 business hours</span>
                    </div>
                    <div class="col-lg-5 text-lg-end" data-animate data-delay="150">
                        <p class="founder-bio">Ready to go live?</p>
                        <div class="d-flex flex-wrap gap-3 justify-content-lg-end">
                            <a href="contact.html" class="btn-hero-cta">Request a Quote</a>
                            <a href="contact.html" class="btn-hero-cta">Book a Consultation</a>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ get a quote -->

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

         <!-- contact -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row g-4">
                    <div class="col-lg-6" data-animate>
                        <div class="why-card why-card-intro h-100 mb-0" style="--accent:#2BACE2">
                            <h3>MellowDigi Live Stream Production</h3>
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
                                    <span class="addon-price">8:00 AM &ndash; 8:00 PM IST</span>
                                </div>
                                <div class="addon-row">
                                    <span class="addon-name">Emergency Support</span>
                                    <span class="addon-price">24/7 Available</span>
                                </div>
                            </div>
                            <p class="mt-3 mb-0">Follow us on YouTube, Instagram, LinkedIn and Twitter/X for behind-the-scenes broadcast content.</p>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ contact -->
        <?php include __DIR__ . '/components/enquiry-form.php'; ?>
     </main>
     <!--/ main -->

<?php include __DIR__ . '/components/footer.php'; ?>
