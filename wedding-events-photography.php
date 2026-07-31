<?php
$siteData = json_decode(file_get_contents(__DIR__ . '/data/site-data.json'), true);

$pageTitle       = 'Wedding & Events Photography | MellowDigi';
$pageDescription = 'Candid, unfiltered wedding photography. MellowDigi captures the real moments — laughter, tears and everything in between — so you can relive your day exactly as it happened.';
$pageKeywords    = 'wedding photography, candid wedding photography, documentary wedding photography, event photography, wedding photographer, storytelling photography, MellowDigi weddings';
$pageUrl         = 'https://www.mellowdigi.com/wedding-events-photography.php';
include __DIR__ . '/components/header.php';

$features = [
    ['icon' => 'camera', 'accent' => '#2BACE2', 'title' => 'Unobtrusive &amp; Relaxed Style', 'description' => 'We blend in like guests to capture natural, unposed moments.'],
    ['icon' => 'book', 'accent' => '#3DB54A', 'title' => 'Storytelling Focus', 'description' => 'We document the full narrative of your day, from the preparations to the last dance.'],
    ['icon' => 'photostack', 'accent' => '#F99E1F', 'title' => 'Emotion &amp; Authenticity', 'description' => 'We prioritize genuine reactions over forced poses.'],
    ['icon' => 'webmobile', 'accent' => '#8B5CF6', 'title' => 'High-Quality Digital', 'description' => 'We use professional digital technology to ensure every memory is preserved beautifully.'],
    ['icon' => 'box', 'accent' => '#F43F5E', 'title' => 'Extra Services', 'description' => 'Ask us about add-ons like a second photographer or Polaroid images for an instant, nostalgic touch.'],
];

$heroIcons = [
    ['icon' => 'camera', 'label' => 'Wedding &amp; Events Photography'],
];
?>

     <!-- main -->
     <main>
        <!-- banner-->
         <section class="banner">
            <div class="container-fluid nav-shell">
                <div class="row align-items-center banner-hero">
                    <div class="col-lg-6">
                        <p class="eyebrow" data-animate>Wedding &amp; Events Photography</p>
                        <h1 class="banner-title" data-animate data-delay="120">
                            Your wedding, <span class="text-gradient-brand">unfiltered</span>
                        </h1>
                        <p class="banner-text max-width-700" data-animate data-delay="220">
                            Your wedding day is a whirlwind of laughter, happy tears and a thousand
                            little moments you don't want to forget. But often, the day goes by in a
                            blur. You need more than just someone with a camera; you need a witness.
                        </p>
                        <p class="banner-text max-width-700" data-animate data-delay="260">
                            We don't just take your picture. We capture your feeling.
                        </p>
                        <div class="d-flex flex-wrap gap-3" data-animate data-delay="320">
                            <a href="portfolio.html" class="btn-hero-cta">See Our Portfolio</a>
                            <a href="contact.php" class="btn-hero-cta">Find Your Witness</a>
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

         <!-- what makes us different -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">The &ldquo;Mellow&rdquo; Approach</p>
                        <h2 class="section-heading">We are your fly on the wall</h2>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="why-card why-card-intro" style="--accent:#2BACE2" data-animate>
                            <h3>The Moments In Between</h3>
                            <p>We believe the best photos aren't the stiff, posed ones. They're the
                            moments in between. The teary-eyed glance from your partner before you
                            walk down the aisle. The joyous, chaotic spin on the dance floor. The
                            quiet, stolen kiss when no one is looking.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="why-card" style="--accent:#3DB54A" data-animate data-delay="90">
                            <h3>Documenting the Soul of Your Celebration</h3>
                            <p>With a relaxed and unobtrusive style, we get to know you and your story,
                            capturing the genuine, raw emotions that make your day uniquely yours. Our
                            approach is less about directing and more about documenting the soul of
                            your celebration.</p>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ what makes us different -->

         <!-- key features -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">What to Look For in a Wedding Photographer</p>
                        <h2 class="section-heading">What we bring to your day</h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
                    <?php foreach ($features as $i => $feature): ?>
                    <div class="col" data-animate data-delay="<?php echo ($i % 3) * 80; ?>">
                        <div class="popular-service-card" style="--accent:<?php echo $esc($feature['accent']); ?>">
                            <span class="popular-service-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><?php echo $siteData['icons'][$feature['icon']]; ?></svg>
                            </span>
                            <h6><?php echo $feature['title']; ?></h6>
                            <p><?php echo $feature['description']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ key features -->

         <!-- cta -->
         <section class="founder-section">
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row align-items-center g-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Ready to Find Your Witness?</p>
                        <h2 class="section-heading">We don't just take your picture. We capture your feeling.</h2>
                        <p class="founder-bio">
                            Let's document your day exactly as it happens &mdash; unfiltered and
                            full of emotion.
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
                            <a href="contact.php" class="btn-hero-cta">Inquire Now</a>
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
