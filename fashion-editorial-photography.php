<?php
$siteData = json_decode(file_get_contents(__DIR__ . '/data/site-data.json'), true);

$pageTitle       = 'Fashion & Editorial Photography | MellowDigi';
$pageDescription = 'Where vision meets vogue. MellowDigi creates bold, editorial-ready fashion photography — from high-fashion campaigns and lookbooks to magazine-worthy storytelling.';
$pageKeywords    = 'fashion photography, editorial photography, high-fashion campaigns, lookbook photography, catalog photography, model portfolio photography, fashion photographer, MellowDigi fashion';
$pageUrl         = 'https://www.mellowdigi.com/fashion-editorial-photography.php';
include __DIR__ . '/components/header.php';

$brandStory = [
    ['accent' => '#2BACE2', 'title' => 'Identity, Culture &amp; Emotion', 'description' => "At Mellow Digi, we don't just take pictures of clothes; we tell stories of identity, culture and emotion. Our Fashion &amp; Editorial photography is a blend of high-end aesthetic and raw, authentic connection."],
    ['accent' => '#3DB54A', 'title' => 'Fashion Is A Statement', 'description' => "We understand that fashion is more than fabric &mdash; it is a statement. Whether we are shooting on a bustling city street, in a minimalist studio or against a dramatic natural landscape, our goal is to elevate your brand's visual identity. We work closely with designers, stylists and models to craft images that are bold, evocative and editorial-ready."],
];

$services = [
    ['icon' => 'camera', 'accent' => '#2BACE2', 'title' => 'High-Fashion Campaigns', 'description' => 'Striking, conceptual shoots designed for luxury labels and mass-market brands. We focus on dramatic lighting, unique angles and high-retouch quality to make your collection pop.'],
    ['icon' => 'photostack', 'accent' => '#3DB54A', 'title' => 'Lookbook &amp; Catalog Production', 'description' => 'Clean, consistent and conversion-focused imagery. We ensure every stitch, texture and silhouette is accurately represented to drive sales, while still maintaining a high-art aesthetic.'],
    ['icon' => 'book', 'accent' => '#F99E1F', 'title' => 'Editorial Storytelling', 'description' => 'Narrative-driven shoots for magazines, blogs and digital publications. We bring concepts to life, creating a sequence of images that feel cinematic and immersive.'],
    ['icon' => 'idcard', 'accent' => '#8B5CF6', 'title' => 'Model &amp; Talent Portfolios', 'description' => 'We help aspiring and professional models build standout portfolios. Our editorial eye highlights versatility, range and unique features to get you noticed by top agencies.'],
];

$process = [
    ['step' => '01', 'title' => 'Pre-Production &amp; Moodboarding', 'description' => "We start with a deep-dive consultation. We discuss your brand DNA, the story you want to tell and build a visual mood board that aligns your team's vision."],
    ['step' => '02', 'title' => 'Styling &amp; Art Direction', 'description' => 'Our team collaborates with your stylists (or provides our own) to ensure hair, makeup, wardrobe and set design are flawless.'],
    ['step' => '03', 'title' => 'The Shoot', 'description' => 'We create a relaxed yet professional atmosphere on set. We direct models with precision to capture authentic expressions and dynamic movement.'],
    ['step' => '04', 'title' => 'Post-Production &amp; Retouching', 'description' => 'We meticulously edit each frame. From color grading to skin retouching, we ensure every image meets the high standards of modern digital and print media.'],
];

$whyChoose = [
    ['title' => 'Editorial Eye', 'description' => 'We have a background in fine art and commercial design, giving your images a sophisticated magazine-quality finish.'],
    ['title' => 'Adaptability', 'description' => 'Whether you need bright, clean e-commerce shots or dark, moody editorial features, we adapt our style to your specific brief.'],
    ['title' => 'Speed &amp; Efficiency', 'description' => 'We respect deadlines. We deliver high-resolution, fully optimized images on time, every time.'],
    ['title' => 'Full-Service Team', 'description' => 'No need to source external stylists or makeup artists &mdash; we can assemble the perfect crew for your specific project.'],
];

$portfolioHighlights = [
    'High-Contrast Studio Shots',
    'Outdoor Lifestyle Editorials',
    'Detail-Oriented Product Focus',
    'Dynamic Action Shots',
];

$testimonials = [
    ['accent' => '#2BACE2', 'initials' => 'CD', 'text' => "Mellow Digi completely understood our brand's aesthetic. The editorial spread they shot for our Fall collection looked like it belonged in Vogue. Their attention to lighting and texture is unmatched.", 'name' => 'Creative Director', 'company' => '[Brand Name]'],
    ['accent' => '#3DB54A', 'initials' => 'FS', 'text' => 'Working with the Mellow team was seamless. They made the models feel comfortable and captured exactly the vibe we were going for. Absolutely professional.', 'name' => 'Fashion Stylist', 'company' => '[Agency Name]'],
];

$heroIcons = [
    ['icon' => 'camera', 'label' => 'Fashion &amp; Editorial Photography'],
];
?>

     <!-- main -->
     <main>
        <!-- banner-->
         <section class="banner">
            <div class="container-fluid nav-shell">
                <div class="row align-items-center banner-hero">
                    <div class="col-lg-6">
                        <p class="eyebrow" data-animate>Fashion &amp; Editorial Photography</p>
                        <h1 class="banner-title" data-animate data-delay="120">
                            Where vision meets <span class="text-gradient-brand">vogue</span>.
                        </h1>
                        <p class="banner-text max-width-700" data-animate data-delay="220">
                            Capturing the narrative behind the fabric, the mood behind the movement
                            and the art in every frame.
                        </p>
                        <p class="banner-text max-width-700" data-animate data-delay="260">
                            At MellowDigi, we don't just take pictures of clothes; we tell stories of
                            identity, culture and emotion &mdash; a blend of high-end aesthetic and
                            raw, authentic connection.
                        </p>
                        <div class="d-flex flex-wrap gap-3" data-animate data-delay="320">
                            <a href="portfolio.html" class="btn-hero-cta">See Our Portfolio</a>
                            <a href="contact.html" class="btn-hero-cta">Book a Shoot</a>
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
                        <h2 class="section-heading">Fashion is more than fabric</h2>
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

         <!-- our services -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Our Services</p>
                        <h2 class="section-heading">What we do</h2>
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
         <!--/ our services -->

         <!-- how it works -->
         <section class="who-we-are">
            <div class="bg-bubble bubble-blue" aria-hidden="true"></div>
            <div class="bg-bubble bubble-green" aria-hidden="true"></div>
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">The MellowDigi Process</p>
                        <h2 class="section-heading">How it works</h2>
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
         <!--/ how it works -->

         <!-- why choose us -->
         <section class="home_startup">
            <div class="row g-0 align-items-stretch">
                <div class="col-lg-6 startup-image" data-animate>
                    <img src="img/startup.jpg" alt="MellowDigi fashion and editorial photography shoot on set">
                </div>
                <div class="col-lg-6 startup-content">
                    <div class="startup-content-inner">
                        <h2 class="startup-heading" data-animate>Why Choose MellowDigi?</h2>
                        <h3 class="startup-subheading" data-animate data-delay="80">Editorial eye, full-service crew</h3>
                        <p class="startup-text" data-animate data-delay="160">
                            From concept to final retouch, we bring a magazine-quality finish and a
                            team built to match your brief.
                        </p>
                        <ul class="startup-checklist" data-animate data-delay="220">
                            <?php foreach ($whyChoose as $item): ?>
                            <li><strong><?php echo $item['title']; ?></strong> &mdash; <?php echo $item['description']; ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <a href="contact.html" class="btn-hero-cta" data-animate data-delay="280">Let's Talk Fashion Photography</a>
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
                            <h3>Fashion &amp; Editorial Highlights</h3>
                            <ul class="startup-checklist">
                                <?php foreach ($portfolioHighlights as $i => $highlight): ?>
                                <li><strong><?php echo $esc($highlight); ?></strong></li>
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
                        <p class="eyebrow">Ready to Create Iconic Imagery?</p>
                        <h2 class="section-heading">Let's bring your fashion narrative to life.</h2>
                        <p class="founder-bio">
                            Whether you are launching a new collection, updating your lookbook or need
                            editorial content for a magazine spread, we are here to make it
                            unforgettable.
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
                            <a href="contact.html" class="btn-hero-cta">Get a Quote</a>
                            <a href="contact.html" class="btn-hero-cta">Book a Shoot</a>
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
