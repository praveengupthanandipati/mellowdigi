<?php
$siteData = json_decode(file_get_contents(__DIR__ . '/data/site-data.json'), true);

$pageTitle       = 'Client Testimonials | MellowDigi';
$pageDescription = "Don't just take our word for it — see what MellowDigi clients say about working with our branding, web, video and marketing team.";
$pageKeywords    = 'client testimonials, client reviews, MellowDigi reviews, creative agency testimonials, branding agency reviews';
$pageUrl         = 'https://www.mellowdigi.com/clients.php';
include __DIR__ . '/components/header.php';

$heroIcons = [
    ['icon' => 'quote', 'label' => 'Client Testimonials &amp; Success Stories'],
];

$stats = [
    ['number' => '250+', 'label' => 'Projects Delivered'],
    ['number' => '40+', 'label' => 'Industries Served'],
    ['number' => '98%', 'label' => 'Client Retention'],
    ['number' => '12+', 'label' => 'Years Combined Experience'],
];

$testimonials = [
    ['accent' => '#2BACE2', 'initials' => 'AK', 'text' => 'Working with MellowDigi across time zones has been completely seamless. They understood our brand from the first call and made the entire process easy, even with our team based overseas.', 'name' => 'Andrei Kovalenko', 'company' => 'Nimbus Technologies'],
    ['accent' => '#3DB54A', 'initials' => 'SM', 'text' => 'MellowDigi has been a game changer for our marketing team. From concept to delivery, everything is organized and easy to track &mdash; we always know exactly where a project stands.', 'name' => 'Sarah Mitchell', 'company' => 'Crestview University'],
    ['accent' => '#F99E1F', 'initials' => 'NR', 'text' => "Their support team answered every question quickly and in a genuinely friendly way. I'd recommend MellowDigi to anyone who wants a creative partner that actually listens.", 'name' => 'Natasha Reyes', 'company' => 'Loom &amp; Thread'],
    ['accent' => '#8B5CF6', 'initials' => 'IF', 'text' => 'Absolutely love working with this team. Every deliverable arrives on time and exactly as briefed &mdash; no back and forth, no hassle.', 'name' => 'Isabella Ferreira', 'company' => 'Urban Roots Co.'],
    ['accent' => '#F43F5E', 'initials' => 'NP', 'text' => "Very easy to work with, and updates always came in real time. We haven't experienced a single missed deadline yet.", 'name' => 'Nez Patel', 'company' => 'Sundial Beverages'],
    ['accent' => '#14B8A6', 'initials' => 'SC', 'text' => 'The customer service is excellent. I always appreciate how far they go to help, even when a request falls outside the original scope.', 'name' => 'Sean Carter', 'company' => 'Meridian Consulting'],
    ['accent' => '#2BACE2', 'initials' => 'KL', 'text' => "Whenever we reach out, we get a response almost immediately &mdash; and it's always a real person who actually understands our project.", 'name' => 'Kate Lindqvist', 'company' => 'Pulse Health'],
    ['accent' => '#3DB54A', 'initials' => 'AR', 'text' => 'From onboarding to final delivery, the process was seamless. Their team was responsive and guided us through every step of the campaign.', 'name' => 'Alex Romero', 'company' => 'Cargo Line Freight'],
];

$clientLogos = [
    ['initials' => 'NT', 'accent' => '#2BACE2', 'name' => 'Nimbus Technologies'],
    ['initials' => 'CU', 'accent' => '#3DB54A', 'name' => 'Crestview University'],
    ['initials' => 'LT', 'accent' => '#F99E1F', 'name' => 'Loom &amp; Thread'],
    ['initials' => 'UR', 'accent' => '#8B5CF6', 'name' => 'Urban Roots Co.'],
    ['initials' => 'SB', 'accent' => '#F43F5E', 'name' => 'Sundial Beverages'],
    ['initials' => 'MC', 'accent' => '#14B8A6', 'name' => 'Meridian Consulting'],
    ['initials' => 'PH', 'accent' => '#2BACE2', 'name' => 'Pulse Health'],
    ['initials' => 'CF', 'accent' => '#3DB54A', 'name' => 'Cargo Line Freight'],
];

$clientValues = [
    ['icon' => 'clock', 'accent' => '#2BACE2', 'title' => 'On-Time Delivery', 'description' => 'Every project ships on schedule, without exception.'],
    ['icon' => 'headphones', 'accent' => '#3DB54A', 'title' => 'Responsive Support', 'description' => 'Quick answers from real people &mdash; not automated replies.'],
    ['icon' => 'tag', 'accent' => '#F99E1F', 'title' => 'Transparent Pricing', 'description' => 'Clear quotes with no hidden fees or surprise charges.'],
    ['icon' => 'refresh', 'accent' => '#8B5CF6', 'title' => 'Easy Onboarding', 'description' => 'A simple setup process with guidance at every step.'],
    ['icon' => 'users', 'accent' => '#F43F5E', 'title' => 'Dedicated Project Management', 'description' => 'A single point of contact who keeps every project on track.'],
    ['icon' => 'layout', 'accent' => '#14B8A6', 'title' => 'Seamless Collaboration', 'description' => 'Clean, intuitive review tools that make feedback effortless.'],
];

$communityQuotes = [
    ['quote' => 'Trabalhar com a MellowDigi à distância foi surpreendentemente simples &mdash; pedidos rápidos e sem burocracia.', 'translation' => 'Working with MellowDigi remotely was surprisingly simple &mdash; fast turnarounds and no red tape.', 'name' => 'Mikhail Orlov', 'role' => 'Founder, E-Commerce Brand'],
    ['quote' => 'Entregas sempre no prazo. Como pequena empresa, ter uma equipe criativa tão organizada faz toda a diferença.', 'translation' => 'Deliveries are always on time. As a small business, having such an organized creative team makes all the difference.', 'name' => 'Alexander Duarte', 'role' => 'Owner, Retail Business'],
    ['quote' => 'Com a MellowDigi, lançar nossa campanha ficou muito mais leve &mdash; comunicação rápida, sem dor de cabeça.', 'translation' => 'With MellowDigi, launching our campaign became much easier &mdash; fast communication, no headaches.', 'name' => 'Nadezhda Silva', 'role' => 'Marketing Manager'],
    ['quote' => 'Uso os serviços da MellowDigi há mais de cinco meses e tudo funciona perfeitamente. Processo rápido, sem nenhum problema.', 'translation' => "I've used MellowDigi's services for over five months and everything works perfectly. Fast process, without any issues.", 'name' => 'Victor Almeida', 'role' => 'Product Manager'],
];
?>

     <!-- main -->
     <main>
        <!-- banner-->
         <section class="banner">
            <div class="container-fluid nav-shell">
                <div class="row align-items-center banner-hero">
                    <div class="col-lg-6">
                        <p class="eyebrow" data-animate>Client Testimonials</p>
                        <h1 class="banner-title" data-animate data-delay="120">
                            What our <span class="text-gradient-brand">clients say</span>.
                        </h1>
                        <p class="banner-text max-width-700" data-animate data-delay="220">
                            We believe our work speaks for itself. But don't just take our word for
                            it &mdash; here's what our clients and partners have to say about their
                            experience working with MellowDigi.
                        </p>
                        <div class="d-flex flex-wrap gap-3 mb-4" data-animate data-delay="280">
                            <a href="contact.php" class="btn-hero-cta">Get Started Today</a>
                            <a href="portfolio.php" class="btn-hero-cta">See Our Work</a>
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

         <!-- trusted by businesses worldwide -->
         <section class="bottom-services-section pb-0">
            <div class="container-fluid nav-shell">
                <div class="row">
                    <div class="col-lg-8" data-animate>
                        <p class="eyebrow">Trusted Worldwide</p>
                        <h2 class="section-heading">Trusted by businesses worldwide</h2>
                        <p class="banner-text max-width-700 mt-3" data-animate data-delay="80">
                            Our clients range from startups and small businesses to established
                            brands. They trust MellowDigi to handle the complexities of branding,
                            content and campaign delivery, so they can focus on what they do best.
                        </p>
                        <span class="tutorial-level-badge" data-animate data-delay="140">&#9733; 4.9/5 &mdash; Rated Excellent by Our Clients</span>
                    </div>
                </div>
            </div>
         </section>
         <!--/ trusted by businesses worldwide -->

         <!-- our clients -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row row-cols-2 row-cols-sm-4 g-4">
                    <?php foreach ($clientLogos as $i => $client): ?>
                    <div class="col" data-animate data-delay="<?php echo ($i % 4) * 90; ?>">
                        <div class="client-logo-item" style="--accent:<?php echo $esc($client['accent']); ?>">
                            <span class="client-logo-badge"><?php echo $esc($client['initials']); ?></span>
                            <p class="client-logo-name"><?php echo $client['name']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ our clients -->

         <!-- client testimonials -->
         <section class="testimonials-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Client Testimonials</p>
                        <h2 class="section-heading">Here's what our community has to say</h2>
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
                            <p class="testimonial-text"><?php echo $t['text']; ?></p>
                            <div class="testimonial-author">
                                <span class="testimonial-avatar"><?php echo $esc($t['initials']); ?></span>
                                <div class="testimonial-author-info">
                                    <h6><?php echo $esc($t['name']); ?></h6>
                                    <span><?php echo $t['company']; ?></span>
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
         <!--/ client testimonials -->

         <!-- what our clients value -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">What Our Clients Value</p>
                        <h2 class="section-heading">Why clients choose to stay with us</h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
                    <?php foreach ($clientValues as $i => $item): ?>
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
         <!--/ what our clients value -->

         <!-- voices from our community -->
         <section class="who-we-are">
            <div class="bg-bubble bubble-blue" aria-hidden="true"></div>
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Global Reach</p>
                        <h2 class="section-heading">Voices from our community</h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-lg-2 g-4">
                    <?php foreach ($communityQuotes as $i => $q): ?>
                    <div class="col" data-animate data-delay="<?php echo ($i % 2) * 110; ?>">
                        <div class="why-card h-100" style="--accent:#f5811f">
                            <span class="popular-service-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><?php echo $siteData['icons']['quote']; ?></svg>
                            </span>
                            <p class="mb-2">&ldquo;<?php echo $q['quote']; ?>&rdquo;</p>
                            <p class="tutorial-card-takeaway mb-3"><?php echo $q['translation']; ?></p>
                            <div class="quote-card-author">
                                <h6><?php echo $esc($q['name']); ?></h6>
                                <span><?php echo $esc($q['role']); ?></span>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ voices from our community -->

         <!-- join our growing community -->
         <section class="founder-section">
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-8" data-animate>
                        <p class="eyebrow">Join Our Growing Community</p>
                        <h2 class="section-heading">Ready to see why our clients love us?</h2>
                        <p class="banner-text mt-3 mx-auto" data-animate data-delay="80">
                            Whether you're a startup, a growing brand or an established business,
                            MellowDigi is here to help you bring your projects to life with ease.
                        </p>
                        <div class="d-flex flex-wrap gap-3 justify-content-center mt-4" data-animate data-delay="150">
                            <a href="contact.php" class="btn-hero-cta">Get Started Today</a>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ join our growing community -->

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
                            <p class="mt-3 mb-0">Follow us on YouTube, Instagram, LinkedIn and Twitter/X to see more of our client work.</p>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ contact -->
     </main>
     <!--/ main -->

<?php include __DIR__ . '/components/footer.php'; ?>
