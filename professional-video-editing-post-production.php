<?php
$siteData = json_decode(file_get_contents(__DIR__ . '/data/site-data.json'), true);

$pageTitle       = 'Professional Video Editing & Post-Production | MellowDigi';
$pageDescription = 'Expert video editing, color grading, audio post-production, VFX and motion graphics services. Corporate, YouTube, commercials and more.';
$pageKeywords    = 'video editing, post-production, color grading, motion graphics, VFX, audio mixing, video production, content creation, corporate video editing, MellowDigi';
$pageUrl         = 'https://www.mellowdigi.com/professional-video-editing-post-production.php';
include __DIR__ . '/components/header.php';

$checkIcon = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7"/></svg>';

$stats = [
    ['number' => '1,000+', 'label' => 'Projects Completed'],
    ['number' => '4K/8K', 'label' => 'Editing Capability'],
    ['number' => '48-Hour', 'label' => 'Turnaround Available'],
    ['number' => '100%', 'label' => 'Client Satisfaction'],
];

$services = [
    ['icon' => 'video', 'accent' => '#2BACE2', 'title' => 'Video Editing', 'items' => ['Cutting and trimming', 'Multi-camera sync', 'Timeline assembly', 'Narrative structuring', 'Pacing and rhythm adjustment']],
    ['icon' => 'palette', 'accent' => '#3DB54A', 'title' => 'Color Correction &amp; Grading', 'items' => ['Color balancing', 'Look creation (cinematic, vintage, corporate)', 'HDR grading', 'Skin tone enhancement', 'Scene-to-scene matching']],
    ['icon' => 'headphones', 'accent' => '#F99E1F', 'title' => 'Audio Post-Production', 'items' => ['Noise reduction', 'Audio mixing and balancing', 'Voice-over recording', 'Sound effects and Foley', 'Music composition and licensing']],
    ['icon' => 'refresh', 'accent' => '#8B5CF6', 'title' => 'Visual Effects (VFX)', 'items' => ['Motion graphics', 'Green screen removal', 'Text animation', 'Transitions and effects', 'Logo reveals and lower thirds']],
    ['icon' => 'layout', 'accent' => '#F43F5E', 'title' => 'Motion Graphics &amp; Animation', 'items' => ['Animated titles', 'Lower thirds', 'Intros and outros', 'Animated infographics', '2D and 3D animation']],
    ['icon' => 'book', 'accent' => '#14B8A6', 'title' => 'Subtitles &amp; Captions', 'items' => ['Manual transcription', 'Auto-captions (AI-powered)', 'Multi-language subtitles', 'Burn-in or soft subtitles', 'Accessibility compliance']],
    ['icon' => 'box', 'accent' => '#2BACE2', 'title' => 'File Conversion &amp; Formatting', 'items' => ['Social media optimization', 'Aspect ratio adjustments (16:9, 9:16, 1:1)', 'Compression and encoding', '4K to HD conversion', 'DVD/Blu-ray authoring']],
];

$packages = [
    ['name' => 'Quick Edit', 'accent' => '#2BACE2', 'featured' => false, 'price' => '$299', 'duration' => '2&ndash;3 days', 'bestFor' => 'Social media, short-form content, interviews', 'features' => ['Basic cut and trim', 'Color correction', 'Audio cleaning', 'One round of revisions']],
    ['name' => 'Professional Edit', 'accent' => '#F99E1F', 'featured' => true, 'price' => '$799', 'duration' => '5&ndash;7 days', 'bestFor' => 'Corporate videos, promos, YouTube content', 'features' => ['Full editing with narrative structure', 'Color grading (cinematic)', 'Audio mixing', 'Custom graphics (titles, lower thirds)', '2 rounds of revisions']],
    ['name' => 'Premium Production', 'accent' => '#8B5CF6', 'featured' => false, 'price' => '$2,499', 'duration' => '10&ndash;14 days', 'bestFor' => 'Documentaries, commercials, music videos, films', 'features' => ['Advanced multi-camera editing', 'Professional color grading', 'Full audio post-production', 'Custom motion graphics', 'VFX and compositing', '3 rounds of revisions']],
];

$addons = [
    ['name' => 'Rush order (24&ndash;48 hrs)', 'price' => '+50%'],
    ['name' => 'Original music composition', 'price' => '$400'],
    ['name' => 'Voice-over recording', 'price' => '$150'],
    ['name' => 'Additional revisions', 'price' => '$50/revision'],
    ['name' => 'Multi-language captions', 'price' => '$100/language'],
];

$software = [
    ['icon' => 'video', 'accent' => '#2BACE2', 'title' => 'Editing Platforms', 'items' => ['Adobe Premiere Pro', 'DaVinci Resolve', 'Final Cut Pro X', 'Avid Media Composer', 'After Effects (VFX)']],
    ['icon' => 'palette', 'accent' => '#3DB54A', 'title' => 'Color Grading', 'items' => ['DaVinci Resolve Studio', 'Color grading panels', 'HDR mastering tools']],
    ['icon' => 'headphones', 'accent' => '#F99E1F', 'title' => 'Audio', 'items' => ['Pro Tools', 'Adobe Audition', 'iZotope RX (noise reduction)', 'Logic Pro']],
    ['icon' => 'codebrackets', 'accent' => '#8B5CF6', 'title' => 'VFX &amp; Animation', 'items' => ['Adobe After Effects', 'Cinema 4D', 'Blender (3D)', 'Fusion']],
];

$whoWeServe = [
    ['icon' => 'briefcase', 'title' => 'Corporate', 'description' => 'Training videos, internal communications, case studies.'],
    ['icon' => 'video', 'title' => 'Content Creators', 'description' => 'YouTube videos, vlogs, social media content.'],
    ['icon' => 'megaphone', 'title' => 'Marketing Agencies', 'description' => 'Commercials, ads, brand videos.'],
    ['icon' => 'clapperboard', 'title' => 'Film &amp; TV', 'description' => 'Documentaries, short films, indie productions.'],
    ['icon' => 'graduationcap', 'title' => 'Educational', 'description' => 'Online courses, lectures, training materials.'],
    ['icon' => 'billboard', 'title' => 'Events', 'description' => 'Conference recordings, highlight reels.'],
    ['icon' => 'tag', 'title' => 'E-Commerce', 'description' => 'Product demonstrations, promotional videos.'],
    ['icon' => 'users', 'title' => 'Non-Profits', 'description' => 'Fundraising videos, impact stories.'],
    ['icon' => 'camera', 'title' => 'Weddings &amp; Events', 'description' => 'Highlight films, full ceremony edits.'],
];

$turnaround = [
    ['name' => 'Standard', 'time' => '5&ndash;7 business days'],
    ['name' => 'Expedited', 'time' => '2&ndash;3 business days'],
    ['name' => 'Rush (additional fee)', 'time' => '24&ndash;48 hours'],
    ['name' => 'Same-Day', 'time' => 'Available for select projects'],
];

$whyChoose = [
    ['icon' => 'palette', 'title' => 'Professional Color Grading', 'description' => 'Grading expertise that gives every project a consistent, cinematic look.'],
    ['icon' => 'headphones', 'title' => 'Clean, Noise-Free Audio', 'description' => 'Balanced mixes and clean sound on every delivery.'],
    ['icon' => 'pencil', 'title' => 'Creative Storytelling', 'description' => 'An editorial approach focused on pacing, rhythm and narrative.'],
    ['icon' => 'target', 'title' => 'Attention to Detail', 'description' => 'Every frame reviewed &mdash; nothing ships until it is right.'],
    ['icon' => 'clock', 'title' => 'On-Time Delivery', 'description' => 'Every time, without exception.'],
    ['icon' => 'refresh', 'title' => 'Unlimited Revisions', 'description' => 'Available on select packages until you are fully satisfied.'],
    ['icon' => 'certificate', 'title' => 'Secure File Transfer', 'description' => 'End-to-end encrypted transfer for every project.'],
    ['icon' => 'codebrackets', 'title' => 'Industry-Standard Software', 'description' => 'Premiere Pro, DaVinci Resolve, After Effects and more.'],
    ['icon' => 'billboard', 'title' => 'Award-Winning Portfolio', 'description' => 'A track record of work our clients are proud to share.'],
];

$projects = [
    ['accent' => '#2BACE2', 'title' => 'Corporate Brand Film', 'client' => 'Leading tech company', 'stats' => [['3-Min', 'Promotional Video'], ['Multi-Cam', 'Corporate Shoot'], ['Cinematic', 'Color Grading'], ['Custom', 'Motion Graphics']]],
    ['accent' => '#3DB54A', 'title' => 'YouTube Documentary', 'client' => '45-minute documentary', 'stats' => [['5', 'Camera Sources'], ['Archival', 'Footage Integration'], ['Original', 'Sound Design &amp; Score'], ['1M+', 'YouTube Views']]],
    ['accent' => '#F99E1F', 'title' => 'Product Launch Video', 'client' => '60-second commercial', 'stats' => [['Green Screen', 'VFX'], ['Product', 'Animation'], ['Professional', 'Audio Mix'], ['4K', 'Broadcast Delivery']]],
    ['accent' => '#8B5CF6', 'title' => 'Wedding Highlight Film', 'client' => '5-minute cinematic edit', 'stats' => [['Color Graded', 'To Match Vibe'], ['Licensed', 'Background Music'], ['Drone', 'Footage Integration'], ['Social', 'Media Ready']]],
];

$howItWorks = [
    ['step' => '01', 'accent' => '#2BACE2', 'title' => 'Submit Your Raw Footage', 'items' => ['Upload via our secure portal (Google Drive, Dropbox, WeTransfer)', 'FTP transfer available for large files (50GB+)']],
    ['step' => '02', 'accent' => '#3DB54A', 'title' => 'Consultation &amp; Brief', 'items' => ['Discuss creative direction', 'Provide reference videos', 'Set expectations and deadlines']],
    ['step' => '03', 'accent' => '#F99E1F', 'title' => 'First Draft Delivery', 'items' => ['We send a preview link', 'You review and provide feedback', 'Revisions cycle begins']],
    ['step' => '04', 'accent' => '#8B5CF6', 'title' => 'Final Delivery', 'items' => ['Video exported in your preferred format', 'Multiple formats delivered (MP4, ProRes, MOV)', 'All project files included (optional)']],
];

$delivery = [
    ['icon' => 'box', 'accent' => '#2BACE2', 'title' => 'We Deliver In', 'items' => ['MP4 (H.264, H.265)', 'ProRes (422, 4444)', 'MOV (QuickTime)', 'AVI (Windows)', 'GIF (short animations)', 'Custom formats on request']],
    ['icon' => 'layout', 'accent' => '#3DB54A', 'title' => 'Resolution', 'items' => ['1080p (Full HD)', '4K (UHD)', '8K (optional)', 'Custom aspect ratios']],
    ['icon' => 'megaphone', 'accent' => '#F99E1F', 'title' => 'Social Media Optimized', 'items' => ['YouTube (16:9)', 'Instagram (1:1, 9:16)', 'LinkedIn (16:9)', 'TikTok (9:16)', 'Facebook (16:9, 1:1)']],
];

$faqs = [
    ['question' => 'What file formats do you accept?', 'answer' => 'Any format: MP4, MOV, AVI, MXF, raw camera files (ARRI, RED, Sony) and more.'],
    ['question' => 'How do I send large files?', 'answer' => 'We provide secure FTP access for files over 50GB. For smaller files, use our cloud upload portal.'],
    ['question' => 'Can you match a specific style or video?', 'answer' => "Yes. Share reference videos and we'll replicate the style, pacing and grading."],
    ['question' => 'Do you provide stock footage or music?', 'answer' => 'Yes, we have access to licensed music and stock footage libraries.'],
    ['question' => 'How many revisions do I get?', 'answer' => 'Package-dependent: Quick Edit (1), Professional (2), Premium (3). Additional revisions available.'],
    ['question' => 'Do you do voice-overs?', 'answer' => 'Yes, we offer professional voice-over recording in multiple languages and accents.'],
    ['question' => 'Can you add subtitles?', 'answer' => 'Yes, we provide manual and AI-generated captions in multiple languages.'],
    ['question' => 'Is my footage secure?', 'answer' => 'Absolutely. We use encrypted file transfer and sign NDAs upon request.'],
    ['question' => "What if I'm not satisfied?", 'answer' => "We work until you're 100% happy. Revisions are unlimited on premium packages."],
    ['question' => 'Do you keep project files?', 'answer' => 'Yes, we archive projects for 30 days. Extended storage available upon request.'],
];

$heroIcons = [
    ['icon' => 'palette', 'label' => 'Video Editing &amp; Post-Production'],
];
?>

     <!-- main -->
     <main>
        <!-- banner-->
         <section class="banner">
            <div class="container-fluid nav-shell">
                <div class="row align-items-center banner-hero">
                    <div class="col-lg-6">
                        <p class="eyebrow" data-animate>Professional Video Editing &amp; Post-Production</p>
                        <h1 class="banner-title" data-animate data-delay="120">
                            Bring your <span class="text-gradient-brand">vision</span> to life.
                        </h1>
                        <p class="banner-text max-width-700" data-animate data-delay="220">
                            Transform raw footage into polished, engaging content. From color
                            grading to visual effects, we bring your vision to life.
                        </p>
                        <div class="d-flex flex-wrap gap-3 mb-4" data-animate data-delay="280">
                            <a href="contact.html" class="btn-hero-cta">Get a Custom Quote</a>
                            <a href="#packages" class="btn-hero-cta">See Packages</a>
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

         <!-- services we offer -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Services We Offer</p>
                        <h2 class="section-heading">Core editing services</h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
                    <?php foreach ($services as $i => $service): ?>
                    <div class="col" data-animate data-delay="<?php echo ($i % 3) * 90; ?>">
                        <div class="why-card h-100 mb-0" style="--accent:<?php echo $esc($service['accent']); ?>">
                            <span class="popular-service-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><?php echo $siteData['icons'][$service['icon']]; ?></svg>
                            </span>
                            <h3><?php echo $service['title']; ?></h3>
                            <ul class="startup-checklist">
                                <?php foreach ($service['items'] as $item): ?>
                                <li><?php echo $esc($item); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ services we offer -->

         <!-- post-production packages -->
         <section class="who-we-are" id="packages">
            <div class="bg-bubble bubble-blue" aria-hidden="true"></div>
            <div class="bg-bubble bubble-green" aria-hidden="true"></div>
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Post-Production Packages</p>
                        <h2 class="section-heading">Pick the edit that fits your project</h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-lg-3 g-4 mb-5">
                    <?php foreach ($packages as $i => $pkg): ?>
                    <div class="col" data-animate data-delay="<?php echo $i * 110; ?>">
                        <div class="pricing-card<?php echo $pkg['featured'] ? ' pricing-card-featured' : ''; ?>" style="--accent:<?php echo $esc($pkg['accent']); ?>">
                            <?php if ($pkg['featured']): ?>
                            <span class="pricing-card-badge">Most Popular</span>
                            <?php endif; ?>
                            <h3 class="pricing-card-name"><?php echo $esc($pkg['name']); ?></h3>
                            <div class="pricing-card-price">
                                <span class="amount"><?php echo $esc($pkg['price']); ?></span>
                                <span class="period">starting at</span>
                            </div>
                            <p class="pricing-card-duration">Turnaround: <?php echo $pkg['duration']; ?></p>
                            <ul class="pricing-card-features">
                                <?php foreach ($pkg['features'] as $feature): ?>
                                <li><?php echo $checkIcon; ?><span><?php echo $esc($feature); ?></span></li>
                                <?php endforeach; ?>
                            </ul>
                            <p class="pricing-card-bestfor"><strong>Best for:</strong> <?php echo $esc($pkg['bestFor']); ?></p>
                            <a href="contact.html" class="btn-hero-cta">Get This Package</a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="row">
                    <div class="col-lg-7" data-animate>
                        <div class="why-card mb-0">
                            <h3>Add-Ons</h3>
                            <div class="addon-list">
                                <?php foreach ($addons as $addon): ?>
                                <div class="addon-row">
                                    <span class="addon-name"><?php echo $addon['name']; ?></span>
                                    <span class="addon-price"><?php echo $addon['price']; ?></span>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ post-production packages -->

         <!-- software & tools -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Software &amp; Tools</p>
                        <h2 class="section-heading">Industry-standard tools, expertly used</h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
                    <?php foreach ($software as $i => $cat): ?>
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
         <!--/ software & tools -->

         <!-- who we serve -->
         <section class="who-we-are">
            <div class="bg-bubble bubble-blue" aria-hidden="true"></div>
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Who We Serve</p>
                        <h2 class="section-heading">Editing for every kind of story</h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
                    <?php foreach ($whoWeServe as $i => $item): ?>
                    <div class="col" data-animate data-delay="<?php echo ($i % 3) * 90; ?>">
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

         <!-- turnaround times -->
         <section class="bottom-services-section pb-0">
            <div class="container-fluid nav-shell">
                <div class="row mb-4">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Turnaround Times</p>
                        <h2 class="section-heading">How fast can we move?</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7" data-animate data-delay="90">
                        <div class="why-card mb-0">
                            <div class="addon-list">
                                <?php foreach ($turnaround as $t): ?>
                                <div class="addon-row">
                                    <span class="addon-name"><?php echo $esc($t['name']); ?></span>
                                    <span class="addon-price"><?php echo $t['time']; ?></span>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ turnaround times -->

         <!-- why choose us -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Why Choose Us</p>
                        <h2 class="section-heading">Why choose MellowDigi</h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
                    <?php foreach ($whyChoose as $i => $item): ?>
                    <div class="col" data-animate data-delay="<?php echo ($i % 3) * 90; ?>">
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
                        <h2 class="section-heading">Edits that speak for themselves</h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-lg-2 g-4">
                    <?php foreach ($projects as $i => $project): ?>
                    <div class="col" data-animate data-delay="<?php echo ($i % 2) * 110; ?>">
                        <div class="project-card" style="--accent:<?php echo $esc($project['accent']); ?>">
                            <div class="project-card-header">
                                <h3><?php echo $esc($project['title']); ?></h3>
                            </div>
                            <div class="project-card-body">
                                <p class="tutorial-card-takeaway"><?php echo $esc($project['client']); ?></p>
                                <div class="project-stat-grid">
                                    <?php foreach ($project['stats'] as $stat): ?>
                                    <div class="project-stat">
                                        <span class="value"><?php echo $esc($stat[0]); ?></span>
                                        <span class="label"><?php echo $stat[1]; ?></span>
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

         <!-- how it works -->
         <section class="who-we-are">
            <div class="bg-bubble bubble-blue" aria-hidden="true"></div>
            <div class="bg-bubble bubble-green" aria-hidden="true"></div>
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">How It Works</p>
                        <h2 class="section-heading">From raw footage to final cut</h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
                    <?php foreach ($howItWorks as $i => $step): ?>
                    <div class="col" data-animate data-delay="<?php echo $i * 100; ?>">
                        <div class="why-card h-100" style="--accent:<?php echo $esc($step['accent']); ?>">
                            <span class="workflow-badge" style="--accent:<?php echo $esc($step['accent']); ?>"><?php echo $esc($step['step']); ?></span>
                            <h3><?php echo $step['title']; ?></h3>
                            <ul class="startup-checklist">
                                <?php foreach ($step['items'] as $item): ?>
                                <li><?php echo $esc($item); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ how it works -->

         <!-- delivery formats -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Delivery Formats</p>
                        <h2 class="section-heading">Delivered exactly how you need it</h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
                    <?php foreach ($delivery as $i => $cat): ?>
                    <div class="col" data-animate data-delay="<?php echo ($i % 3) * 90; ?>">
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
         <!--/ delivery formats -->

         <!-- get a quote -->
         <section class="founder-section">
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row align-items-center g-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Pricing Inquiry</p>
                        <h2 class="section-heading">Get a custom quote</h2>
                        <p class="founder-bio">
                            Every project is unique. We'll provide a tailored quote after
                            understanding your specific needs.
                        </p>
                        <ul class="footer-contact">
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><?php echo $siteData['icons']['mail']; ?></svg>
                                <span>Email: postproduction@mellowdigi.com</span>
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><?php echo $siteData['icons']['call']; ?></svg>
                                <span>Phone: +91 98765 43210</span>
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><?php echo $siteData['icons']['network']; ?></svg>
                                <span>Live Chat: Available on website</span>
                            </li>
                        </ul>
                        <span class="tutorial-level-badge">Response Time: Within 1 business hour</span>
                    </div>
                    <div class="col-lg-5 text-lg-end" data-animate data-delay="150">
                        <p class="founder-bio">Ready to start editing?</p>
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
                            <h3>MellowDigi Post-Production Studio</h3>
                            <ul class="footer-contact">
                                <li>
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><?php echo $siteData['icons']['pin']; ?></svg>
                                    <span>123 Digital Avenue, Tech City, India &ndash; 110001</span>
                                </li>
                                <li>
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><?php echo $siteData['icons']['call']; ?></svg>
                                    <span>+91 98765 43210</span>
                                </li>
                                <li>
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><?php echo $siteData['icons']['mail']; ?></svg>
                                    <span>postproduction@mellowdigi.com</span>
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
                            <p class="mt-3 mb-0">Follow us on YouTube, Instagram, LinkedIn and Twitter/X for behind-the-scenes edits and breakdowns.</p>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ contact -->
     </main>
     <!--/ main -->

<?php include __DIR__ . '/components/footer.php'; ?>
