<?php
$siteData = json_decode(file_get_contents(__DIR__ . '/data/site-data.json'), true);

$pageTitle       = 'Wedding & Event Cinematography | MellowDigi';
$pageDescription = 'Forever in motion. MellowDigi crafts cinematic wedding and event films — from full-day coverage and elopements to same-day edits and destination weddings.';
$pageKeywords    = 'wedding cinematography, wedding videography, event videography, same-day edit wedding film, destination wedding videographer, elopement film, wedding highlight film, MellowDigi cinematography';
$pageUrl         = 'https://www.mellowdigi.com/wedding-event-cinematography.php';
include __DIR__ . '/components/header.php';

$brandStory = [
    ['accent' => '#2BACE2', 'title' => 'A Living, Breathing Story', 'description' => "Your wedding day isn't just an event &mdash; it's a living, breathing story unfolding in real-time. A story of promises whispered, hands held tightly, tears of joy and celebrations that echo into the night. At Mellow Digi, we don't just film weddings; we become silent witnesses to your most profound moments, capturing them with artistry, discretion and deep emotional intelligence."],
    ['accent' => '#3DB54A', 'title' => 'Storytellers, Not Directors', 'description' => 'We step into your world not as directors, but as storytellers. Our approach is unobtrusive, organic and deeply human. We let the day unfold naturally &mdash; the nervous laughter before the walk down the aisle, the quiet gaze exchanged during the vows, the unbridled joy on the dance floor. We are there to catch it all, without ever interrupting the magic.'],
    ['accent' => '#F99E1F', 'title' => 'Timeless Emotional Films', 'description' => "From intimate elopements to grand, multi-day celebrations, we craft cinematic films that feel less like &ldquo;wedding videos&rdquo; and more like timeless, emotional short films. Years from now, when you press play, we want you to feel that day all over again &mdash; the warmth, the love and the sheer, beautiful chaos of it all."],
];

$services = [
    ['icon' => 'video', 'accent' => '#2BACE2', 'title' => 'Wedding Films (Full-Day Coverage)', 'description' => 'Comprehensive cinematic coverage from preparation to the final farewell. We capture every ritual, every emotion and every unscripted moment in between. The result is a meticulously crafted highlight film (3&ndash;8 mins) and a full-length documentary edit of your entire day.'],
    ['icon' => 'book', 'accent' => '#3DB54A', 'title' => 'Elopement &amp; Intimate Ceremonies', 'description' => 'For couples who prefer quiet, meaningful celebrations. We capture the raw intimacy of small gatherings &mdash; the whispered vows, the breathtaking backdrops and the profound connection of a private commitment.'],
    ['icon' => 'clapperboard', 'accent' => '#F99E1F', 'title' => 'Engagement &amp; Pre-Wedding Films', 'description' => 'A romantic cinematic short film that captures your love story in your chosen location. Perfect for save-the-dates, social media reveals or simply as a treasured keepsake of this beautiful chapter.'],
    ['icon' => 'megaphone', 'accent' => '#8B5CF6', 'title' => 'Live Event Coverage (Corporate &amp; Social)', 'description' => 'From milestone birthdays and anniversaries to corporate galas and product launches. We capture the energy, the glamour and the key moments that define your special occasion.'],
    ['icon' => 'photostack', 'accent' => '#F43F5E', 'title' => 'Same-Day Edits (SDEs)', 'description' => 'A highlight reel edited and screened during the wedding reception itself. Guests relive the ceremony and preparation moments just hours after they happened &mdash; a stunning surprise that adds instant magic to the celebration.'],
    ['icon' => 'pin', 'accent' => '#14B8A6', 'title' => 'Destination Weddings', 'description' => 'We travel wherever love takes you. Beachside, mountaintop, vineyard or castle &mdash; we bring our signature cinematic eye to any backdrop, capturing the spirit of your destination alongside your love story.'],
];

$process = [
    ['step' => '01', 'title' => 'The Discovery Call', 'description' => 'We begin with coffee (virtual or in-person). We get to know you as a couple &mdash; your story, your vibe, your vision. Do you want a cinematic, dramatic feel? A bright, airy, documentary style? Something entirely unique? We listen deeply.'],
    ['step' => '02', 'title' => 'Custom Storyboarding', 'description' => "We don't use generic templates. We study your timeline, your venue and your cultural traditions. We identify key moments and visual opportunities, ensuring we're always in the right place at the right time."],
    ['step' => '03', 'title' => 'The Day-Of (Silent Presence)', 'description' => 'On your wedding day, we become invisible storytellers. We use lightweight, professional cinema cameras and audio equipment to move fluidly through the crowds. We never interrupt, never stage, never distract. We simply observe and capture.'],
    ['step' => '04', 'title' => 'Post-Production (The Heart of the Film)', 'description' => 'This is where the magic deepens. We spend weeks meticulously editing your film &mdash; curating the best moments, color-grading each frame to cinematic perfection and layering in audio that matters: your vows, your speeches, the ambient sounds of laughter and music. We score your film with licensed music that elevates every emotional beat.'],
    ['step' => '05', 'title' => 'Delivery &amp; Keepsakes', 'description' => 'You receive your final films in stunning 4K resolution, delivered digitally for easy sharing. We also offer custom USB boxes and cinematic prints as physical keepsakes.'],
];

$whyChoose = [
    ['title' => 'Story Over Poses', 'description' => "We don't direct. We observe. We capture the real you, not a staged performance."],
    ['title' => 'Cinematic Quality', 'description' => 'We use high-end cinema cameras, professional lighting and advanced color grading to give your film a rich, feature-film aesthetic.'],
    ['title' => 'Multiple Camera Angles', 'description' => "For key moments like the ceremony and speeches, we deploy multiple cameras to capture every angle &mdash; your partner's face, your family's reactions, the full scope of the moment."],
    ['title' => 'Drone Coverage', 'description' => '(Weather permitting) We offer stunning aerial shots to capture the grandeur of your venue and the beauty of your surroundings.'],
    ['title' => 'Audio Excellence', 'description' => 'We record crystal-clear audio from lapel microphones and on-camera mics, ensuring your vows, readings and speeches are captured with pristine clarity.'],
    ['title' => 'Unmatched Emotion', 'description' => "We don't just deliver a video. We deliver an emotional time capsule that will make you cry, laugh and fall in love all over again &mdash; every single time you watch it."],
];

$portfolioHighlights = [
    ['title' => 'The Prep', 'description' => 'Bridal gowns hanging, cufflinks being fastened, nervous smiles.'],
    ['title' => 'The Ceremony', 'description' => 'First looks, walking down the aisle, the ring exchange, the kiss.'],
    ['title' => 'The Portraits', 'description' => 'Dreamy, golden-hour couple shots with cinematic bokeh.'],
    ['title' => 'The Reception', 'description' => 'Speeches, first dances, cake cutting and the party on the dance floor.'],
    ['title' => 'The Details', 'description' => 'Rings, bouquets, table settings and intimate close-ups of decor.'],
    ['title' => 'The Getaway', 'description' => 'Confetti, sparklers and the emotional farewell.'],
];

$testimonials = [
    ['accent' => '#2BACE2', 'initials' => 'SJ', 'text' => "We were skeptical about having a videographer, thinking it might feel intrusive. Mellow Digi proved us so wrong. We didn't even notice they were there, and when we saw our film, we were in tears. They captured moments we didn't even know happened. It was perfect.", 'name' => 'Sarah &amp; James', 'company' => '[Wedding Date]'],
    ['accent' => '#3DB54A', 'initials' => 'PM', 'text' => 'Our same-day edit brought our entire reception to a standstill. People were crying, cheering and watching in complete awe. It was the highlight of the night. Mellow Digi is worth every single penny.', 'name' => 'Priya &amp; Michael', 'company' => '[Wedding Date]'],
    ['accent' => '#F99E1F', 'initials' => 'ED', 'text' => "We had a destination wedding in Tuscany, and Mellow Digi made the journey with us. The film they delivered wasn't just a wedding video &mdash; it was a love letter to our day, our location and our families. Pure magic.", 'name' => 'Elena &amp; David', 'company' => '[Wedding Date]'],
];

$heroIcons = [
    ['icon' => 'video', 'label' => 'Wedding &amp; Event Cinematography'],
];
?>

     <!-- main -->
     <main>
        <!-- banner-->
         <section class="banner">
            <div class="container-fluid nav-shell">
                <div class="row align-items-center banner-hero">
                    <div class="col-lg-6">
                        <p class="eyebrow" data-animate>Wedding &amp; Event Cinematography</p>
                        <h1 class="banner-title" data-animate data-delay="120">
                            Forever in <span class="text-gradient-brand">motion</span>.
                        </h1>
                        <p class="banner-text max-width-700" data-animate data-delay="220">
                            Because memories aren't static. They're laughter, tears, stolen glances
                            and heartbeat moments &mdash; preserved in breathtaking motion.
                        </p>
                        <p class="banner-text max-width-700" data-animate data-delay="260">
                            Your wedding day isn't just an event &mdash; it's a living, breathing story
                            unfolding in real-time. We don't just film weddings; we become silent
                            witnesses to your most profound moments.
                        </p>
                        <div class="d-flex flex-wrap gap-3" data-animate data-delay="320">
                            <a href="contact.html" class="btn-hero-cta">Check Availability</a>
                            <a href="contact.html" class="btn-hero-cta">Book a Consultation</a>
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
                        <p class="eyebrow">Our Brand Story</p>
                        <h2 class="section-heading">Silent witnesses to your story</h2>
                    </div>
                </div>
                <div class="row g-4">
                    <?php foreach ($brandStory as $i => $item): ?>
                    <div class="col-lg-4">
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
                        <p class="eyebrow">Our Services</p>
                        <h2 class="section-heading">What we offer</h2>
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
                        <p class="eyebrow">The MellowDigi Experience</p>
                        <h2 class="section-heading">How we work</h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
                    <?php foreach ($process as $i => $step): ?>
                    <div class="col" data-animate data-delay="<?php echo ($i % 3) * 80; ?>">
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
                    <img src="img/startup.jpg" alt="MellowDigi cinematography crew filming a wedding ceremony">
                </div>
                <div class="col-lg-6 startup-content">
                    <div class="startup-content-inner">
                        <h2 class="startup-heading" data-animate>Why Choose MellowDigi?</h2>
                        <h3 class="startup-subheading" data-animate data-delay="80">Cinematic quality, silent presence</h3>
                        <p class="startup-text" data-animate data-delay="160">
                            We deliver an emotional time capsule that will make you cry, laugh and
                            fall in love all over again, every single time you watch it.
                        </p>
                        <ul class="startup-checklist" data-animate data-delay="220">
                            <?php foreach ($whyChoose as $item): ?>
                            <li><strong><?php echo $item['title']; ?></strong> &mdash; <?php echo $item['description']; ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <a href="contact.html" class="btn-hero-cta" data-animate data-delay="280">Let's Talk Cinematography</a>
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
                            <h3>Wedding &amp; Event Highlights</h3>
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
                        <h2 class="section-heading">What our couples say</h2>
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
                        <p class="eyebrow">Your Love Story Awaits.</p>
                        <h2 class="section-heading">Let us preserve it.</h2>
                        <p class="founder-bio">
                            Your wedding day will pass in a beautiful blur. Let us give you the gift
                            of reliving it &mdash; every laugh, every tear, every glance, every dance
                            &mdash; for the rest of your lives. Because some stories are too beautiful
                            to forget.
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
                            <a href="contact.html" class="btn-hero-cta">Check Availability</a>
                            <a href="contact.html" class="btn-hero-cta">Book a Consultation</a>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ cta -->
     </main>
     <!--/ main -->

<?php include __DIR__ . '/components/footer.php'; ?>
