<?php
$siteData = json_decode(file_get_contents(__DIR__ . '/data/site-data.json'), true);

$pageTitle       = 'MellowDigi Interactive Media | Digital Solutions & Creative Services';
$pageDescription = 'MellowDigi is a full-service digital creative agency offering photography, video production, branding, print design, web & mobile development and digital marketing — all under one roof.';
$pageKeywords    = 'digital agency, branding agency, photography services, video production, web development, digital marketing agency, MellowDigi';
$pageUrl         = 'https://www.mellowdigi.com/';
include __DIR__ . '/components/header.php';
?>

     <!-- main -->
     <main>
        <!-- banner-->
         <section class="banner">
            <div class="container-fluid nav-shell">
                <div class="row align-items-center banner-hero">
                    <div class="col-lg-5">
                        <p class="eyebrow" data-animate>Digital Solutions &amp; Services</p>
                        <h1 class="banner-title" data-animate data-delay="120">
                            We craft <span class="text-gradient-brand">digital experiences</span> that help your brand grow
                        </h1>
                        <p class="banner-text max-width-700" data-animate data-delay="220">
                            From photography and video to branding, print, web development and digital
                            marketing — MellowDigi is the complete creative team behind ambitious brands.
                        </p>
                        <a href="contact.php" class="btn-hero-cta" data-animate data-delay="320">Let's Connect</a>
                    </div>
                    <div class="col-lg-7 align-self-center">
                        <div class="service-icon-cycle" data-animate data-delay="200">
                            <svg width="0" height="0" style="position:absolute" aria-hidden="true">
                                <defs>
                                    <linearGradient id="brandIconGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" stop-color="#2BACE2"/>
                                        <stop offset="50%" stop-color="#3DB54A"/>
                                        <stop offset="100%" stop-color="#F99E1F"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                            <?php foreach ($siteData['heroIconCycle'] as $i => $slide): ?>
                            <div class="icon-slide<?php echo $i === 0 ? ' is-default' : ''; ?>" style="--slot:<?php echo $i; ?>">
                                <svg class="cycle-icon" viewBox="0 0 24 24" fill="none" stroke="url(#brandIconGradient)" stroke-width="0.2" stroke-linecap="round" stroke-linejoin="round"><?php echo $siteData['icons'][$slide['icon']]; ?></svg>
                                <span class="cycle-label"><?php echo $esc($slide['label']); ?></span>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <div class="row g-4 banner-services">
                    <?php foreach ($siteData['bannerServices'] as $i => $service): ?>
                    <div class="col-6 col-lg-2" data-animate data-delay="<?php echo $i * 60; ?>">
                        <a href="services.html" class="service-chip">
                            <span class="service-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><?php echo $siteData['icons'][$service['icon']]; ?></svg>
                            </span>
                            <h6><?php echo $service['title']; ?></h6>
                            <p><?php echo $service['description']; ?></p>
                        </a>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ banner-->

         <!-- who we are-->
         <section class="who-we-are">
            <div class="bg-bubble bubble-blue" aria-hidden="true"></div>
            <div class="bg-bubble bubble-green" aria-hidden="true"></div>
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row g-4">
                    <div class="col-lg-4">
                        <p class="eyebrow" data-animate>Who We Are</p>
                        <h2 class="section-heading" data-animate data-delay="100">
                            We are a team of passionate digital creators and problem solvers
                        </h2>
                    </div>
                    <div class="col-lg-5">
                        <p class="who-text" data-animate data-delay="200">
                            MellowDigi brings photographers, video producers, designers and developers
                            together under one roof. Every project is handled by specialists who care
                            about the details, so your brand shows up consistently everywhere it matters.
                        </p>
                        <p class="who-text" data-animate data-delay="280">
                            From the first brief to the final delivery, we work closely with you at every
                            step — because the best results come from a real partnership, not a hand-off.
                        </p>
                    </div>
                    <div class="col-lg-3">
                        <?php foreach ($siteData['whoWeAreStats'] as $i => $stat): ?>
                        <div class="who-stat" data-animate data-delay="<?php echo 360 + $i * 80; ?>">
                            <h3><?php echo $esc($stat['number']); ?></h3>
                            <p><?php echo $esc($stat['label']); ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
         </section>
         <!--/ who we are-->

         <!-- recent projects-->
          <section class="recent-projects-section">
            <div class="container-fluid nav-shell">
                <div class="row align-items-end">
                     <div class="col-lg-6" data-animate>
                        <p class="eyebrow">Our Work</p>
                        <h2 class="section-heading">A Taste of What We Create</h2>
                    </div>
                    <div class="col-lg-6" data-animate data-delay="100">
                        <p class="recent-projects-intro">
                            We're a young studio building our portfolio one project at a time. Here's a
                            look at the kind of branding and design work we love to create.
                        </p>
                    </div>
                   
                </div>
            </div>

            <div class="projects-swiper swiper-container" data-animate data-delay="200">
                <div class="swiper-wrapper">
                    <?php foreach ($siteData['recentProjects'] as $project): ?>
                    <div class="swiper-slide project-card">
                        <img src="<?php echo $esc($project['image']); ?>" alt="<?php echo $esc($project['title']); ?> — <?php echo $project['category']; ?>" loading="lazy">
                        <div class="project-card-overlay">
                            <h6><?php echo $esc($project['title']); ?></h6>
                            <p><?php echo $project['category']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
          </section>
          <!--/ recent projects-->

           <!-- startup-->
           <section class="home_startup">
            <div class="row g-0 align-items-stretch">
                <div class="col-lg-6 startup-image" data-animate>
                    <img src="img/startup.jpg" alt="Startup team collaborating in the office">
                </div>
                <div class="col-lg-6 startup-content">
                    <div class="startup-content-inner">
                        <h2 class="startup-heading" data-animate>Are you a startup?</h2>
                        <h3 class="startup-subheading" data-animate data-delay="80">We help startups launch faster</h3>
                        <p class="startup-text" data-animate data-delay="160">
                            Building a company from scratch is hard enough — your brand, website and
                            marketing shouldn't be what holds you back. MellowDigi partners with
                            early-stage teams to turn a rough idea into a polished, professional
                            presence, fast.
                        </p>
                        <p class="startup-text" data-animate data-delay="220">
                            From your first logo to a fully launched website and go-to-market campaign,
                            we handle the creative and technical heavy lifting so you can stay focused
                            on building your product and talking to customers.
                        </p>
                        <p class="startup-why" data-animate data-delay="260">Why startups choose MellowDigi</p>
                        <ul class="startup-checklist" data-animate data-delay="300">
                            <li>Fast turnaround — most startup packages ship in weeks, not months</li>
                            <li>One team for branding, web &amp; marketing, so nothing falls through the cracks</li>
                            <li>Pricing that fits early-stage budgets and scales as you grow</li>
                            <li>Direct access to your project team, from kickoff to launch</li>
                        </ul>
                        <a href="contact.php" class="btn-hero-cta" data-animate data-delay="360">Let's Talk About Your Startup</a>
                    </div>
                </div>
            </div>
           </section>
           <!--/ startup-->

           <!-- popular services -->
           <section class="popular-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Popular Services</p>
                        <h2 class="section-heading">Explore our most requested services</h2>
                    </div>
                </div>
                <div class="row g-4">
                    <?php foreach ($siteData['popularServices'] as $i => $service): ?>
                    <div class="col-6 col-md-4 col-lg-3" data-animate data-delay="<?php echo ($i % 4) * 70; ?>">
                        <div class="popular-service-card" style="--accent:<?php echo $esc($service['accent']); ?>">
                            <span class="popular-service-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><?php echo $siteData['icons'][$service['icon']]; ?></svg>
                            </span>
                            <h6><?php echo $service['title']; ?></h6>
                            <p><?php echo $service['description']; ?></p>
                            <a href="<?php echo $esc($service['link']); ?>" class="popular-service-link">Learn more <span>&rarr;</span></a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
           </section>
            <!--/ popular services-->

            <!-- our promise -->
            <section class="testimonials-section">
                <div class="container-fluid nav-shell">
                    <div class="row mb-5">
                        <div class="col-lg-7" data-animate>
                            <p class="eyebrow">Our Promise</p>
                            <h2 class="section-heading">What working with us looks like</h2>
                        </div>
                    </div>
                </div>

                <div class="testimonials-swiper swiper-container" data-animate data-delay="150">
                    <div class="swiper-wrapper">
                        <?php foreach ($siteData['ourPromises'] as $p): ?>
                        <div class="swiper-slide">
                            <div class="testimonial-card" style="--accent:<?php echo $esc($p['accent']); ?>">
                                <span class="testimonial-quote-icon">
                                    <svg width="34" height="26" viewBox="0 0 34 26" fill="currentColor"><path d="M14.5 0L9 12H15V26H0V13L6 0H14.5ZM33.5 0L28 12H34V26H19V13L25 0H33.5Z"/></svg>
                                </span>
                                <h6><?php echo $esc($p['title']); ?></h6>
                                <p class="testimonial-text"><?php echo $esc($p['text']); ?></p>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </section>
            <!--/ our promise -->
     </main>
     <!--/ main -->

<?php include __DIR__ . '/components/footer.php'; ?>