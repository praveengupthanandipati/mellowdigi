<?php
$siteData = json_decode(file_get_contents(__DIR__ . '/data/site-data.json'), true);

$pageTitle       = 'Learn & Grow | MellowDigi Tutorials';
$pageDescription = 'Explore free tutorials on SEO, social media, AI tools, content marketing, analytics and more. Master digital skills with MellowDigi\'s expert-crafted educational content.';
$pageKeywords    = 'tutorials, educational content, digital marketing, SEO, social media, AI tools, content marketing, analytics, email marketing, web development, graphic design, video editing, freelancing, business strategy, online learning, free courses, MellowDigi';
$pageUrl         = 'https://www.mellowdigi.com/tutorial-educational-content.php';
include __DIR__ . '/components/header.php';

$stats = [
    ['number' => '50+', 'label' => 'Tutorials'],
    ['number' => '12', 'label' => 'Categories'],
    ['number' => '100%', 'label' => 'Free Access'],
];

$categories = [
    ['label' => 'All', 'filter' => 'all'],
    ['label' => 'SEO', 'filter' => 'seo'],
    ['label' => 'Social Media', 'filter' => 'social-media'],
    ['label' => 'Content Marketing', 'filter' => 'content-marketing'],
    ['label' => 'AI Tools', 'filter' => 'ai-tools'],
    ['label' => 'Analytics', 'filter' => 'analytics'],
    ['label' => 'Email Marketing', 'filter' => 'email-marketing'],
    ['label' => 'Web Development', 'filter' => 'web-development'],
    ['label' => 'Graphic Design', 'filter' => 'graphic-design'],
    ['label' => 'Video Editing', 'filter' => 'video-editing'],
    ['label' => 'Freelancing', 'filter' => 'freelancing'],
    ['label' => 'Business Strategy', 'filter' => 'business-strategy'],
];

$tutorials = [
    ['icon' => 'search', 'accent' => '#2BACE2', 'category' => 'SEO', 'filter' => 'seo', 'level' => 'Beginner', 'duration' => '45 mins', 'title' => 'SEO Fundamentals for Beginners', 'description' => 'Learn the core principles of Search Engine Optimization and how to rank your content higher on Google. Understand keyword research, on-page optimization and link building strategies.'],
    ['icon' => 'instagram', 'accent' => '#3DB54A', 'category' => 'Social Media', 'filter' => 'social-media', 'level' => 'Intermediate', 'duration' => '30 mins', 'title' => 'Instagram Growth Hacks 2025', 'description' => 'Actionable strategies to grow your Instagram following organically and boost engagement. Learn about content calendars, reel strategies and community building.'],
    ['icon' => 'pencil', 'accent' => '#F99E1F', 'category' => 'Content Marketing', 'filter' => 'content-marketing', 'level' => 'Advanced', 'duration' => '60 mins', 'title' => 'Content Marketing That Converts', 'description' => 'Master the art of storytelling and create content that drives leads and sales. Explore blog writing, video scripts and persuasive copywriting techniques.'],
    ['icon' => 'network', 'accent' => '#8B5CF6', 'category' => 'AI Tools', 'filter' => 'ai-tools', 'level' => 'Beginner', 'duration' => '50 mins', 'title' => 'AI Tools for Content Creators', 'description' => 'Discover how ChatGPT, Midjourney and other AI tools can supercharge your creative workflow. Learn prompt engineering and ethical AI usage.'],
    ['icon' => 'layout', 'accent' => '#F43F5E', 'category' => 'Analytics', 'filter' => 'analytics', 'level' => 'Intermediate', 'duration' => '70 mins', 'title' => 'Google Analytics 4 Masterclass', 'description' => 'Navigate GA4 like a pro. Track traffic, user behavior and conversion data with confidence. Set up goals, events and custom reports.'],
    ['icon' => 'mail', 'accent' => '#2BACE2', 'category' => 'Email Marketing', 'filter' => 'email-marketing', 'level' => 'Advanced', 'duration' => '55 mins', 'title' => 'Email Marketing Automation', 'description' => 'Build email sequences that nurture leads and maximize ROI using automation tools. Master segmentation, personalization and A/B testing.'],
    ['icon' => 'codebrackets', 'accent' => '#3DB54A', 'category' => 'Web Development', 'filter' => 'web-development', 'level' => 'Beginner', 'duration' => '90 mins', 'title' => 'WordPress Website Setup Guide', 'description' => 'Build a professional website from scratch using WordPress. Learn theme selection, plugin installation and essential security practices.'],
    ['icon' => 'palette', 'accent' => '#F99E1F', 'category' => 'Graphic Design', 'filter' => 'graphic-design', 'level' => 'Beginner', 'duration' => '40 mins', 'title' => 'Canva Design Mastery', 'description' => "Create stunning graphics for social media, presentations and marketing materials. Master Canva's advanced features and design principles."],
    ['icon' => 'video', 'accent' => '#8B5CF6', 'category' => 'Video Editing', 'filter' => 'video-editing', 'level' => 'Intermediate', 'duration' => '80 mins', 'title' => 'Video Editing with DaVinci Resolve', 'description' => 'Edit professional-quality videos using DaVinci Resolve. Learn color grading, audio mixing and visual effects.'],
];

$benefits = [
    ['icon' => 'graduationcap', 'title' => 'Expert-Crafted Content', 'description' => 'Developed by industry professionals with years of real-world experience.'],
    ['icon' => 'clock', 'title' => 'Bite-Sized Lessons', 'description' => 'Learn at your own pace, anytime, anywhere. Perfect for busy schedules.'],
    ['icon' => 'target', 'title' => 'Practical &amp; Actionable', 'description' => 'Real-world exercises and case studies to reinforce your learning.'],
    ['icon' => 'users', 'title' => 'Community Support', 'description' => 'Join a network of like-minded learners and grow together.'],
    ['icon' => 'tag', 'title' => 'Always Free', 'description' => 'Quality education accessible to everyone, no hidden costs.'],
    ['icon' => 'refresh', 'title' => 'Regular Updates', 'description' => 'New tutorials added weekly to keep you ahead of the curve.'],
    ['icon' => 'certificate', 'title' => 'Certificate of Completion', 'description' => 'Earn recognition for your achievements.'],
];

$testimonials = [
    ['accent' => '#2BACE2', 'initials' => 'PS', 'text' => 'MellowDigi transformed my understanding of digital marketing. The tutorials are clear, concise and incredibly practical. I landed my first client within a month!', 'name' => 'Priya Sharma', 'company' => 'Freelance Marketer'],
    ['accent' => '#3DB54A', 'initials' => 'RV', 'text' => "The AI tools tutorial was a game-changer for me. I've integrated ChatGPT into my workflow and saved hours of content creation time. Highly recommended!", 'name' => 'Rahul Verma', 'company' => 'Content Creator'],
    ['accent' => '#F99E1F', 'initials' => 'AR', 'text' => 'I was a complete beginner, but MellowDigi made learning SEO so easy. The step-by-step guides and real-world examples helped me rank my blog on page one!', 'name' => 'Ananya Reddy', 'company' => 'Blogger'],
];

$instructors = [
    ['accent' => '#2BACE2', 'initials' => 'MP', 'name' => 'Dr. Meera Patel', 'expertise' => 'SEO &amp; Analytics', 'bio' => '10+ years of experience in digital strategy. Former Head of SEO at a Fortune 500 company.'],
    ['accent' => '#3DB54A', 'initials' => 'AS', 'name' => 'Arjun Singh', 'expertise' => 'Social Media &amp; Content', 'bio' => 'Social media strategist with a passion for creative storytelling. Managed campaigns for global brands.'],
    ['accent' => '#F99E1F', 'initials' => 'SK', 'name' => 'Sneha Krishnan', 'expertise' => 'AI &amp; Automation', 'bio' => 'AI researcher and educator. Helps businesses leverage AI tools for growth and efficiency.'],
];

$upcoming = [
    ['title' => 'TikTok Marketing Mastery', 'status' => 'Launching Next Week'],
    ['title' => 'LinkedIn Lead Generation', 'status' => 'Coming in 2 Weeks'],
    ['title' => 'Podcasting 101', 'status' => 'Coming in 1 Month'],
];

$heroIcons = [
    ['icon' => 'book', 'label' => 'Tutorials &amp; Educational Content'],
];
?>

     <!-- main -->
     <main>
        <!-- banner-->
         <section class="banner">
            <div class="container-fluid nav-shell">
                <div class="row align-items-center banner-hero">
                    <div class="col-lg-6">
                        <p class="eyebrow" data-animate>Tutorials &amp; Educational Content</p>
                        <h1 class="banner-title" data-animate data-delay="120">
                            Unlock your potential with <span class="text-gradient-brand">MellowDigi</span>
                        </h1>
                        <p class="banner-text max-width-700" data-animate data-delay="220">
                            Explore our curated library of tutorials, guides and educational
                            resources designed to elevate your digital skills. Whether you're a
                            beginner or a seasoned professional, we have something for everyone.
                        </p>
                        <form class="tutorial-search-form max-width-700" role="search" data-animate data-delay="260" onsubmit="return false;">
                            <span class="tutorial-search-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><?php echo $siteData['icons']['search']; ?></svg>
                            </span>
                            <input type="search" id="tutorialSearchInput" class="tutorial-search-input" placeholder="Search for tutorials (e.g., SEO, Social Media, AI, Analytics)...">
                        </form>
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

         <!-- category filter -->
         <section class="bottom-services-section pb-0">
            <div class="container-fluid nav-shell">
                <div class="row mb-4">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Browse by Category</p>
                        <h2 class="section-heading">Find the right lesson, fast</h2>
                    </div>
                </div>
                <div class="audience-pills tutorial-filter-bar" id="tutorialFilterBar" data-animate data-delay="100">
                    <?php foreach ($categories as $i => $cat): ?>
                    <button type="button" class="audience-pill tutorial-filter-btn<?php echo $i === 0 ? ' is-active' : ''; ?>" data-filter="<?php echo $esc($cat['filter']); ?>"><?php echo $esc($cat['label']); ?></button>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ category filter -->

         <!-- featured tutorials -->
         <section class="bottom-services-section" id="tutorialsGrid">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Featured Tutorials</p>
                        <h2 class="section-heading">Hand-picked lessons to get you started</h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4" id="tutorialCardsRow">
                    <?php foreach ($tutorials as $i => $tut): ?>
                    <div class="col tutorial-card-col" data-category="<?php echo $esc($tut['filter']); ?>" data-title="<?php echo $esc(strtolower($tut['title'])); ?>" data-animate data-delay="<?php echo ($i % 3) * 90; ?>">
                        <div class="tutorial-card" style="--accent:<?php echo $esc($tut['accent']); ?>">
                            <div class="tutorial-card-top">
                                <span class="tutorial-card-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><?php echo $siteData['icons'][$tut['icon']]; ?></svg>
                                </span>
                                <span class="tutorial-category-badge"><?php echo $esc($tut['category']); ?></span>
                            </div>
                            <h6><?php echo $esc($tut['title']); ?></h6>
                            <p><?php echo $esc($tut['description']); ?></p>
                            <div class="tutorial-card-meta">
                                <span class="tutorial-level-badge"><?php echo $esc($tut['level']); ?></span>
                                <span class="tutorial-duration">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 3"/></svg>
                                    <?php echo $esc($tut['duration']); ?>
                                </span>
                            </div>
                            <a href="blog.html" class="popular-service-link">Start Learning <span>&rarr;</span></a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="tutorial-no-results is-hidden" id="tutorialNoResults">
                    <p class="tutorial-no-results-headline">&#128269; No tutorials found</p>
                    <p class="banner-text">Try adjusting your search or filter to find what you're looking for. You can also explore our full library of resources.</p>
                    <ul class="startup-checklist">
                        <li>Check your spelling</li>
                        <li>Use fewer keywords</li>
                        <li>Browse by category instead</li>
                    </ul>
                </div>
            </div>
         </section>
         <!--/ featured tutorials -->

         <!-- why learn with us -->
         <section class="who-we-are">
            <div class="bg-bubble bubble-blue" aria-hidden="true"></div>
            <div class="bg-bubble bubble-green" aria-hidden="true"></div>
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Why Choose Us</p>
                        <h2 class="section-heading">Why learn with MellowDigi?</h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
                    <?php foreach ($benefits as $i => $benefit): ?>
                    <div class="col" data-animate data-delay="<?php echo ($i % 4) * 80; ?>">
                        <div class="process-step">
                            <span class="popular-service-icon" style="--accent:#f5811f">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><?php echo $siteData['icons'][$benefit['icon']]; ?></svg>
                            </span>
                            <h6><?php echo $benefit['title']; ?></h6>
                            <p><?php echo $benefit['description']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ why learn with us -->

         <!-- newsletter cta -->
         <section class="founder-section" id="newsletterCta">
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row align-items-center g-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Ready to Start Your Journey?</p>
                        <h2 class="section-heading">Get weekly tutorials in your inbox</h2>
                        <p class="founder-bio">
                            Subscribe to our newsletter and get weekly tutorials, tips and
                            resources delivered directly to your inbox. Never miss an update!
                        </p>
                        <p class="founder-bio mb-0">
                            &#127775; First 100 subscribers get exclusive access to premium content.
                        </p>
                    </div>
                    <div class="col-lg-5" data-animate data-delay="150">
                        <form class="newsletter-form" onsubmit="return false;">
                            <label for="newsletterEmail" class="visually-hidden">Enter your email address</label>
                            <input type="email" id="newsletterEmail" class="newsletter-input" placeholder="Enter your email address" required>
                            <button type="submit" class="btn-hero-cta">Subscribe Now</button>
                        </form>
                    </div>
                </div>
            </div>
         </section>
         <!--/ newsletter cta -->

         <!-- testimonials -->
         <section class="testimonials-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Social Proof</p>
                        <h2 class="section-heading">What our learners say</h2>
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

         <!-- featured instructors -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Meet Our Experts</p>
                        <h2 class="section-heading">Featured instructors</h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
                    <?php foreach ($instructors as $i => $instructor): ?>
                    <div class="col" data-animate data-delay="<?php echo $i * 90; ?>">
                        <div class="popular-service-card instructor-card" style="--accent:<?php echo $esc($instructor['accent']); ?>">
                            <span class="founder-avatar instructor-avatar"><?php echo $esc($instructor['initials']); ?></span>
                            <h6><?php echo $esc($instructor['name']); ?></h6>
                            <p class="founder-role instructor-expertise"><?php echo $instructor['expertise']; ?></p>
                            <p><?php echo $instructor['bio']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ featured instructors -->

         <!-- coming soon -->
         <section class="bottom-services-section pt-0">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Coming Soon</p>
                        <h2 class="section-heading">New tutorials on the way</h2>
                    </div>
                </div>
                <div class="row g-4 align-items-stretch">
                    <?php foreach ($upcoming as $i => $item): ?>
                    <div class="col-lg-4" data-animate data-delay="<?php echo $i * 90; ?>">
                        <div class="why-card h-100 mb-0">
                            <h3><?php echo $esc($item['title']); ?></h3>
                            <span class="tutorial-level-badge"><?php echo $esc($item['status']); ?></span>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <div class="col-lg-4 d-flex align-items-center" data-animate data-delay="270">
                        <div>
                            <p class="banner-text mb-3">Stay tuned! Subscribe to get notified when new tutorials drop.</p>
                            <a href="#newsletterCta" class="btn-hero-cta">Subscribe Now</a>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ coming soon -->
        <?php include __DIR__ . '/components/enquiry-form.php'; ?>
     </main>
     <!--/ main -->

<script>
document.addEventListener('DOMContentLoaded', function () {
    var searchInput = document.getElementById('tutorialSearchInput');
    var filterBar = document.getElementById('tutorialFilterBar');
    var cardCols = document.querySelectorAll('.tutorial-card-col');
    var noResults = document.getElementById('tutorialNoResults');
    var activeFilter = 'all';

    function applyFilters() {
        var query = (searchInput.value || '').trim().toLowerCase();
        var visibleCount = 0;

        cardCols.forEach(function (col) {
            var matchesCategory = activeFilter === 'all' || col.dataset.category === activeFilter;
            var matchesSearch = query === '' || col.dataset.title.indexOf(query) !== -1;
            var show = matchesCategory && matchesSearch;
            col.classList.toggle('is-hidden', !show);
            if (show) { visibleCount++; }
        });

        noResults.classList.toggle('is-hidden', visibleCount !== 0);
    }

    if (searchInput) {
        searchInput.addEventListener('input', applyFilters);
    }

    if (filterBar) {
        filterBar.addEventListener('click', function (e) {
            var btn = e.target.closest('.tutorial-filter-btn');
            if (!btn) { return; }
            filterBar.querySelectorAll('.tutorial-filter-btn').forEach(function (b) {
                b.classList.remove('is-active');
            });
            btn.classList.add('is-active');
            activeFilter = btn.dataset.filter;
            applyFilters();
        });
    }
});
</script>

<?php include __DIR__ . '/components/footer.php'; ?>
