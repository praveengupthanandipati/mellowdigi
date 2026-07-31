<?php
$siteData = json_decode(file_get_contents(__DIR__ . '/data/site-data.json'), true);

$pageTitle       = 'Blog | MellowDigi';
$pageDescription = 'Insights on graphic design, digital solutions, video editing, photography, videography, print media and web &amp; mobile development from the MellowDigi team.';
$pageKeywords    = 'design blog, digital marketing blog, video editing tips, photography tips, print design, web development blog, MellowDigi blog';
$pageUrl         = 'https://www.mellowdigi.com/blog.php';
include __DIR__ . '/components/header.php';

$heroIcons = [
    ['icon' => 'book', 'label' => 'Insights &amp; Ideas'],
];

$stats = [
    ['number' => '8+', 'label' => 'Articles Published'],
    ['number' => '7', 'label' => 'Categories Covered'],
    ['number' => 'Weekly', 'label' => 'New Insights'],
];

$blogPosts = [
    ['icon' => 'palette', 'accent' => '#2BACE2', 'category' => 'Graphics', 'date' => 'Jul 12, 2026', 'readTime' => '6 min read', 'title' => '10 Graphic Design Trends Shaping Brands in 2026', 'excerpt' => 'From bold maximalism to AI-assisted layouts, here are the visual trends brands are using to stand out this year.'],
    ['icon' => 'network', 'accent' => '#3DB54A', 'category' => 'Digital Solutions', 'date' => 'Jul 5, 2026', 'readTime' => '7 min read', 'title' => 'How Digital Transformation Is Reshaping Small Businesses', 'excerpt' => 'Cloud tools, automation and smart integrations are levelling the playing field for small and growing brands.'],
    ['icon' => 'search', 'accent' => '#F99E1F', 'category' => 'Digital Solutions', 'date' => 'Jun 28, 2026', 'readTime' => '5 min read', 'title' => 'SEO vs. Paid Ads: Where Should Your Budget Go First?', 'excerpt' => 'A practical breakdown of when to invest in organic growth and when paid campaigns deliver faster results.'],
    ['icon' => 'video', 'accent' => '#8B5CF6', 'category' => 'Video Editing', 'date' => 'Jun 21, 2026', 'readTime' => '8 min read', 'title' => '5 Editing Techniques That Instantly Elevate Your Footage', 'excerpt' => 'Simple color grading, pacing and sound design tweaks that separate amateur cuts from professional ones.'],
    ['icon' => 'camera', 'accent' => '#F43F5E', 'category' => 'Photography', 'date' => 'Jun 14, 2026', 'readTime' => '6 min read', 'title' => 'Behind the Lens: Composition Tips for Product Photography', 'excerpt' => 'Lighting, angles and styling techniques that make product shots convert better on every platform.'],
    ['icon' => 'clapperboard', 'accent' => '#14B8A6', 'category' => 'Videography', 'date' => 'Jun 7, 2026', 'readTime' => '7 min read', 'title' => 'Planning a Corporate Video Shoot: A Pre-Production Checklist', 'excerpt' => 'Everything to lock down before the cameras roll, from shot lists to talent releases and location scouting.'],
    ['icon' => 'printer', 'accent' => '#2BACE2', 'category' => 'Print Media', 'date' => 'May 30, 2026', 'readTime' => '5 min read', 'title' => 'Why Print Still Matters in a Digital-First World', 'excerpt' => 'Business cards, packaging and brochures still shape first impressions &mdash; here is how to make them count.'],
    ['icon' => 'codebrackets', 'accent' => '#3DB54A', 'category' => 'Web &amp; Mobile Solutions', 'date' => 'May 23, 2026', 'readTime' => '9 min read', 'title' => 'Responsive Design Mistakes That Are Costing You Conversions', 'excerpt' => 'Common layout, speed and navigation pitfalls that quietly push mobile visitors away from your site.'],
];
?>

     <!-- main -->
     <main>
        <!-- banner-->
         <section class="banner">
            <div class="container-fluid nav-shell">
                <div class="row align-items-center banner-hero">
                    <div class="col-lg-6">
                        <p class="eyebrow" data-animate>Our Blog</p>
                        <h1 class="banner-title" data-animate data-delay="120">
                            Insights, ideas &amp; <span class="text-gradient-brand">inspiration</span>.
                        </h1>
                        <p class="banner-text max-width-700" data-animate data-delay="220">
                            Notes from our team on graphic design, digital solutions, video editing,
                            photography, videography, print media and web &amp; mobile development
                            &mdash; the crafts behind everything we build.
                        </p>
                        <div class="d-flex flex-wrap gap-3 mb-4" data-animate data-delay="280">
                            <a href="contact.php" class="btn-hero-cta">Get In Touch</a>
                            <a href="portfolio.php" class="btn-hero-cta">See Our Work</a>
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

         <!-- blog posts -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Latest Articles</p>
                        <h2 class="section-heading">From the MellowDigi team</h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
                    <?php foreach ($blogPosts as $i => $post): ?>
                    <div class="col" data-animate data-delay="<?php echo ($i % 3) * 90; ?>">
                        <div class="tutorial-card" style="--accent:<?php echo $esc($post['accent']); ?>">
                            <div class="tutorial-card-top">
                                <span class="tutorial-card-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><?php echo $siteData['icons'][$post['icon']]; ?></svg>
                                </span>
                                <span class="tutorial-category-badge"><?php echo $post['category']; ?></span>
                            </div>
                            <h6><?php echo $esc($post['title']); ?></h6>
                            <p><?php echo $post['excerpt']; ?></p>
                            <div class="tutorial-card-meta">
                                <span class="tutorial-level-badge"><?php echo $esc($post['date']); ?></span>
                                <span class="tutorial-duration">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 3"/></svg>
                                    <?php echo $esc($post['readTime']); ?>
                                </span>
                            </div>
                            <a href="#" class="popular-service-link">Read More <span>&rarr;</span></a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ blog posts -->

         <!-- let's talk -->
         <section class="founder-section">
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-8" data-animate>
                        <p class="eyebrow">Have a Project in Mind?</p>
                        <h2 class="section-heading">Let's put these ideas into practice.</h2>
                        <p class="banner-text mt-3 mx-auto" data-animate data-delay="80">
                            Whatever inspired you here &mdash; design, video, photography or web
                            &mdash; our team is ready to help you bring it to life.
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
                            <p class="mt-3 mb-0">Follow us on YouTube, Instagram, LinkedIn and Twitter/X for more articles and behind-the-scenes content.</p>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ contact -->
     </main>
     <!--/ main -->

<?php include __DIR__ . '/components/footer.php'; ?>
