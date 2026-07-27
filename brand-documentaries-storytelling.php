<?php
$siteData = json_decode(file_get_contents(__DIR__ . '/data/site-data.json'), true);

$pageTitle       = 'Brand Documentaries & Storytelling | MellowDigi';
$pageDescription = 'Beyond the image, into the soul. MellowDigi crafts brand documentaries and visual storytelling — from founder origin films to behind-the-scenes cinematics.';
$pageKeywords    = 'brand documentary photography, visual storytelling, behind-the-scenes video, founder portraiture, brand film production, day-in-the-life content, corporate documentary, MellowDigi storytelling';
$pageUrl         = 'https://www.mellowdigi.com/brand-documentaries-storytelling.php';
include __DIR__ . '/components/header.php';

$brandStory = [
    ['accent' => '#2BACE2', 'title' => 'Authenticity Is The Ultimate Luxury', 'description' => 'In a world flooded with perfectly curated, sterile content, authenticity is the ultimate luxury. At Mellow Digi, we specialize in Brand Documentaries and Visual Storytelling &mdash; a deep, immersive approach that moves beyond product shots and into the very essence of who you are.'],
    ['accent' => '#3DB54A', 'title' => 'Building A Visual Legacy', 'description' => "This isn't about a single photoshoot. This is about building a visual legacy. We embed ourselves into your world &mdash; your workshops, your design studios, your founder's journey and your community &mdash; to craft a raw, honest and profoundly human narrative. Through a blend of still photography, cinematic video and intimate interviews, we create content that doesn't just show what you do, but why you do it. We turn your brand's mission into a movement."],
];

$services = [
    ['icon' => 'book', 'accent' => '#2BACE2', 'title' => 'Brand Origin Documentaries', 'description' => 'Tell the story of your founding. We capture the struggles, the breakthroughs and the passion that started it all. From the messy workshop to the first sale, we document the human element behind the logo.'],
    ['icon' => 'clapperboard', 'accent' => '#3DB54A', 'title' => 'Behind-the-Scenes (BTS) Cinematics', 'description' => 'Pull back the curtain. Show your audience the craftsmanship, the late nights and the artistry that goes into your products or services. BTS content builds trust, transparency and deep emotional connection.'],
    ['icon' => 'idcard', 'accent' => '#F99E1F', 'title' => 'Founder &amp; Team Portraiture (Lifestyle)', 'description' => "Candid, unscripted portraits of the people who make your brand tick. We capture personality, vulnerability and leadership in natural environments &mdash; whether that's a bustling office, a quiet studio or out in the field."],
    ['icon' => 'video', 'accent' => '#8B5CF6', 'title' => 'Day-in-the-Life Content', 'description' => 'Follow a product from conception to completion, or follow a team member through their daily rhythm. This serialized storytelling approach is perfect for social media takeovers, email campaigns and long-form editorial pieces.'],
    ['icon' => 'network', 'accent' => '#F43F5E', 'title' => 'Community &amp; Culture Stories', 'description' => "Showcase the impact of your brand on the people you serve. We document events, customer interactions and community initiatives to highlight your brand's role in the wider world."],
    ['icon' => 'photostack', 'accent' => '#14B8A6', 'title' => 'Legacy &amp; Anniversary Films', 'description' => "Celebrate milestones. Whether it's your 10th anniversary or a major rebrand, we create timeless visual narratives that honor your past and inspire your future."],
];

$process = [
    ['step' => '01', 'title' => 'Deep Discovery (The Immersion Phase)', 'description' => "We begin with a &ldquo;listening tour.&rdquo; We conduct in-depth interviews with your founders, employees and even customers. We study your brand values, your mission and your market positioning. We don't just capture visuals; we capture context."],
    ['step' => '02', 'title' => 'Creative Treatment &amp; Storyboarding', 'description' => 'We develop a comprehensive narrative arc. We outline key moments, visual metaphors and emotional beats that align with your brand voice. This becomes our shared blueprint for the project.'],
    ['step' => '03', 'title' => 'On-Location Production', 'description' => "We bring a minimal, unobtrusive crew to your natural environment. We prioritize authenticity over staging. Whether we're filming on a factory floor, in a kitchen or on a mountain top, we blend in to capture genuine moments, not rehearsed performances."],
    ['step' => '04', 'title' => 'Post-Production (The Edit)', 'description' => 'This is where the story comes alive. We meticulously edit for pace, tone and emotion. We grade for cinematic color, score with original or licensed music and craft a final cut that feels more like a mini-film than a commercial.'],
];

$whyChoose = [
    ['title' => 'Human-Centered Approach', 'description' => 'We believe every brand has a story worth telling. We treat your narrative with the respect and sensitivity it deserves.'],
    ['title' => 'Multi-Format Expertise', 'description' => 'We deliver a complete content ecosystem &mdash; high-res stills, short-form vertical videos (Reels/TikToks), mid-form social content and long-form documentaries (3&ndash;15 mins).'],
    ['title' => 'Unobtrusive &amp; Authentic', 'description' => 'We are flies on the wall, not directors barking orders. We capture real moments, genuine laughter and unfiltered emotion.'],
    ['title' => 'End-to-End Service', 'description' => 'From concept development to final delivery, we handle everything &mdash; including scripting, cinematography, sound design and color grading.'],
    ['title' => 'High-Emotional ROI', 'description' => 'Content that connects emotionally outperforms traditional advertising. Our documentaries foster brand loyalty, trust and advocacy.'],
];

$portfolioHighlights = [
    ['title' => 'Founder Interviews', 'description' => 'Intimate, black-and-white portraits of founders in their element.'],
    ['title' => 'Craftsmanship BTS', 'description' => 'Hands working raw materials, close-ups of tools and the creation process.'],
    ['title' => 'Team Dynamics', 'description' => 'Candid moments of collaboration, laughter and brainstorming.'],
    ['title' => 'Community Impact', 'description' => 'Events, customer testimonials and real-world brand interactions.'],
    ['title' => 'Environmental Shots', 'description' => "The spaces, cities and landscapes that define your brand's identity."],
];

$testimonials = [
    ['accent' => '#2BACE2', 'initials' => 'CEO', 'text' => "Mellow Digi didn't just film our company &mdash; they understood our soul. The documentary they created for our 20th anniversary brought our entire team to tears. It wasn't a commercial; it was a family album. Our clients finally understood why we do what we do.", 'name' => 'CEO', 'company' => '[Manufacturing Brand]'],
    ['accent' => '#3DB54A', 'initials' => 'F', 'text' => "We were nervous about opening our doors to a camera crew. But the Mellow team made us feel so comfortable that we forgot they were there. The final piece was raw, real and absolutely beautiful. We've used it in every pitch since.", 'name' => 'Founder', 'company' => '[Creative Agency]'],
    ['accent' => '#F99E1F', 'initials' => 'HM', 'text' => 'We wanted to show our customers the sustainable practices behind our products. Mellow Digi captured it so poetically. Our engagement rates skyrocketed because people finally connected with our mission.', 'name' => 'Head of Marketing', 'company' => '[Eco-Brand]'],
];

$heroIcons = [
    ['icon' => 'clapperboard', 'label' => 'Brand Documentaries &amp; Storytelling'],
];
?>

     <!-- main -->
     <main>
        <!-- banner-->
         <section class="banner">
            <div class="container-fluid nav-shell">
                <div class="row align-items-center banner-hero">
                    <div class="col-lg-6">
                        <p class="eyebrow" data-animate>Brand Documentaries &amp; Storytelling</p>
                        <h1 class="banner-title" data-animate data-delay="120">
                            Beyond the image. Into the <span class="text-gradient-brand">soul</span>.
                        </h1>
                        <p class="banner-text max-width-700" data-animate data-delay="220">
                            We don't just photograph your brand &mdash; we uncover its heartbeat,
                            capture its journey and share its truth with the world.
                        </p>
                        <p class="banner-text max-width-700" data-animate data-delay="260">
                            In a world flooded with perfectly curated, sterile content, authenticity is
                            the ultimate luxury. We move beyond product shots and into the very essence
                            of who you are.
                        </p>
                        <div class="d-flex flex-wrap gap-3" data-animate data-delay="320">
                            <a href="portfolio.html" class="btn-hero-cta">See Our Portfolio</a>
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
                        <h2 class="section-heading">Building a visual legacy</h2>
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
                        <p class="eyebrow">The MellowDigi Approach</p>
                        <h2 class="section-heading">How we work</h2>
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
                    <img src="img/startup.jpg" alt="MellowDigi crew filming a brand documentary on location">
                </div>
                <div class="col-lg-6 startup-content">
                    <div class="startup-content-inner">
                        <h2 class="startup-heading" data-animate>Why Choose MellowDigi?</h2>
                        <h3 class="startup-subheading" data-animate data-delay="80">Storytelling with substance</h3>
                        <p class="startup-text" data-animate data-delay="160">
                            We bring a documentary crew's patience and a brand strategist's eye to
                            every narrative we capture.
                        </p>
                        <ul class="startup-checklist" data-animate data-delay="220">
                            <?php foreach ($whyChoose as $item): ?>
                            <li><strong><?php echo $item['title']; ?></strong> &mdash; <?php echo $item['description']; ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <a href="contact.html" class="btn-hero-cta" data-animate data-delay="280">Let's Talk Storytelling</a>
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
                            <h3>Documentary &amp; Storytelling Highlights</h3>
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
                        <p class="eyebrow">Your Story Deserves to Be Told.</p>
                        <h2 class="section-heading">Let's craft a visual narrative that resonates, inspires and endures.</h2>
                        <p class="founder-bio">
                            Whether you're launching, evolving or celebrating a milestone &mdash; we're
                            ready to listen.
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
                            <a href="contact.html" class="btn-hero-cta">Let's Tell Your Story</a>
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
