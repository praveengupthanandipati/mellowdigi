<?php
$siteData = json_decode(file_get_contents(__DIR__ . '/data/site-data.json'), true);

$pageTitle       = 'Events | MellowDigi';
$pageDescription = 'Join MellowDigi at our upcoming workshops, webinars, client meetups and industry events covering design, video, photography and digital marketing.';
$pageKeywords    = 'design events, marketing workshops, photography masterclass, branding webinar, MellowDigi events';
$pageUrl         = 'https://www.mellowdigi.com/events.php';
include __DIR__ . '/components/header.php';

$heroIcons = [
    ['icon' => 'billboard', 'label' => 'Workshops, Meetups &amp; Webinars'],
];

$stats = [
    ['number' => '6', 'label' => 'Upcoming Events'],
    ['number' => '500+', 'label' => 'Attendees Hosted'],
    ['number' => 'Monthly', 'label' => 'New Events'],
];

$events = [
    ['image' => 'img/recent-projects/home_1.jpg', 'accent' => '#2BACE2', 'day' => '14', 'month' => 'Aug', 'title' => 'MellowDigi Design Workshop 2026', 'date' => 'August 14, 2026 &middot; 10:00 AM', 'venue' => 'MellowDigi Studio, Hyderabad', 'description' => 'A hands-on session on building a cohesive brand identity from scratch. Walk away with practical logo, color and typography exercises.'],
    ['image' => 'img/recent-projects/home_2.jpg', 'accent' => '#3DB54A', 'day' => '03', 'month' => 'Sep', 'title' => 'Digital Marketing Summit', 'date' => 'September 3, 2026 &middot; 9:30 AM', 'venue' => 'HITEC City Convention Center, Hyderabad', 'description' => 'Industry experts break down the latest trends in SEO, paid ads and social media strategy for growing brands. Includes live Q&amp;A.'],
    ['image' => 'img/recent-projects/home_3.jpg', 'accent' => '#F99E1F', 'day' => '20', 'month' => 'Sep', 'title' => 'Photography &amp; Videography Masterclass', 'date' => 'September 20, 2026 &middot; 11:00 AM', 'venue' => 'MellowDigi Studio, Hyderabad', 'description' => 'Learn lighting, composition and storytelling techniques from our in-house photographers and videographers, with live shoot demos.'],
    ['image' => 'img/recent-projects/home_4.jpg', 'accent' => '#8B5CF6', 'day' => '05', 'month' => 'Oct', 'title' => 'Client Appreciation Meetup', 'date' => 'October 5, 2026 &middot; 6:00 PM', 'venue' => 'The Terrace, Banjara Hills, Hyderabad', 'description' => 'An evening of networking and celebration with the clients and partners who make our work possible. Food, drinks and good company.'],
    ['image' => 'img/startup.jpg', 'accent' => '#F43F5E', 'day' => '18', 'month' => 'Oct', 'title' => 'Webinar: Branding for Startups', 'date' => 'October 18, 2026 &middot; 5:00 PM', 'venue' => 'Online (Zoom)', 'description' => 'A free live session on building a credible brand identity on a lean startup budget, with time reserved for audience questions.'],
    ['image' => 'img/recent-projects/home_1.jpg', 'accent' => '#14B8A6', 'day' => '08', 'month' => 'Nov', 'title' => 'Portfolio Showcase Night', 'date' => 'November 8, 2026 &middot; 7:00 PM', 'venue' => 'MellowDigi Studio, Hyderabad', 'description' => 'A look back at our favorite projects of the year, presented by the team behind them, followed by an open studio tour.'],
];
?>

     <!-- main -->
     <main>
        <!-- banner-->
         <section class="banner">
            <div class="container-fluid nav-shell">
                <div class="row align-items-center banner-hero">
                    <div class="col-lg-6">
                        <p class="eyebrow" data-animate>Events</p>
                        <h1 class="banner-title" data-animate data-delay="120">
                            Where <span class="text-gradient-brand">ideas</span> come together.
                        </h1>
                        <p class="banner-text max-width-700" data-animate data-delay="220">
                            From hands-on workshops to client meetups and free webinars, our events
                            bring together designers, marketers and business owners who care about
                            doing great creative work.
                        </p>
                        <div class="d-flex flex-wrap gap-3 mb-4" data-animate data-delay="280">
                            <a href="#upcoming-events" class="btn-hero-cta">View Upcoming Events</a>
                            <a href="contact.php" class="btn-hero-cta">Contact Us</a>
                        </div>
                        <div class="row row-cols-3 g-3 tutorial-stats" data-animate data-delay="320">
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

         <!-- upcoming events -->
         <section class="bottom-services-section" id="upcoming-events">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Upcoming Events</p>
                        <h2 class="section-heading">Join us at our next event</h2>
                    </div>
                </div>
                <div class="row g-4">
                    <?php foreach ($events as $i => $event): ?>
                    <div class="col-12" data-animate data-delay="<?php echo ($i % 3) * 90; ?>">
                        <div class="event-card" style="--accent:<?php echo $esc($event['accent']); ?>">
                            <div class="row g-0 align-items-center">
                                <div class="col-lg-4">
                                    <div class="event-card-media">
                                        <img src="<?php echo $esc($event['image']); ?>" alt="<?php echo $esc($event['title']); ?>" loading="lazy">
                                        <span class="event-card-date-badge">
                                            <span class="event-day"><?php echo $esc($event['day']); ?></span>
                                            <span class="event-month"><?php echo $esc($event['month']); ?></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="event-card-body">
                                        <h3 class="event-card-title"><?php echo $event['title']; ?></h3>
                                        <div class="event-card-meta">
                                            <span>
                                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>
                                                <?php echo $event['date']; ?>
                                            </span>
                                            <span>
                                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s7-7.58 7-12.5A7 7 0 0 0 5 9.5C5 14.42 12 22 12 22z"/><circle cx="12" cy="9.5" r="2.5"/></svg>
                                                <?php echo $esc($event['venue']); ?>
                                            </span>
                                        </div>
                                        <p class="event-card-desc"><?php echo $event['description']; ?></p>
                                        <a href="contact.php" class="btn-hero-cta">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ upcoming events -->

         <!-- let's talk -->
         <section class="founder-section">
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-8" data-animate>
                        <p class="eyebrow">Stay in the Loop</p>
                        <h2 class="section-heading">Don't want to miss an event?</h2>
                        <p class="banner-text mt-3 mx-auto" data-animate data-delay="80">
                            Get in touch and we'll keep you posted on upcoming workshops, webinars
                            and meetups near you.
                        </p>
                        <div class="d-flex flex-wrap gap-3 justify-content-center mt-4" data-animate data-delay="150">
                            <a href="contact.php" class="btn-hero-cta">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ let's talk -->

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
                            <p class="mt-3 mb-0">Follow us on YouTube, Instagram, LinkedIn and Twitter/X for event announcements and highlights.</p>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ contact -->
     </main>
     <!--/ main -->

<?php include __DIR__ . '/components/footer.php'; ?>
