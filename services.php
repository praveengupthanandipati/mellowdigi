<?php
$siteData = json_decode(file_get_contents(__DIR__ . '/data/site-data.json'), true);

$pageTitle       = 'Our Services | MellowDigi';
$pageDescription = 'Explore every MellowDigi service — brand strategy & identity, digital marketing, web & mobile development, photography, video production and print media — all under one roof.';
$pageKeywords    = 'digital agency services, branding services, digital marketing, web development, mobile apps, photography, video production, print design, MellowDigi';
$pageUrl         = 'https://www.mellowdigi.com/services.php';
include __DIR__ . '/components/header.php';

$accents = ['#2BACE2', '#3DB54A', '#F99E1F', '#8B5CF6', '#F43F5E', '#14B8A6'];

// Card text comes from each service page's own $pageDescription, so this page
// stays in sync with the individual service pages.
$serviceDescription = function ($url) {
    $file = __DIR__ . '/' . basename($url);
    if (is_file($file) && preg_match('~\$pageDescription\s*=\s*([\'"])(.*?)(?<!\\\\)\1\s*;~s', file_get_contents($file), $m)) {
        return html_entity_decode(stripslashes($m[2]), ENT_QUOTES, 'UTF-8');
    }
    return '';
};

// One entry per mega menu category, with the matching icon and intro line.
$categories = [];
foreach ($siteData['megaMenu'] as $i => $category) {
    $categories[] = [
        'id'          => $slugify($category['title']),
        'title'       => $category['title'],
        'icon'        => $siteData['heroIconCycle'][$i]['icon'] ?? 'layout',
        'description' => html_entity_decode($siteData['bannerServices'][$i]['description'] ?? '', ENT_QUOTES, 'UTF-8'),
        'items'       => $category['items'],
    ];
}
?>

     <!-- main -->
     <main>
        <!-- banner-->
         <section class="banner">
            <div class="container-fluid nav-shell">
                <div class="row align-items-center banner-hero">
                    <div class="col-lg-7">
                        <p class="eyebrow" data-animate>Our Services</p>
                        <h1 class="banner-title" data-animate data-delay="120">
                            Everything your brand needs, <span class="text-gradient-brand">under one roof</span>.
                        </h1>
                        <p class="banner-text max-width-700" data-animate data-delay="220">
                            From strategy and identity to websites, apps, photography, video and print
                            &mdash; one team handles every discipline, so nothing gets lost between handoffs.
                        </p>
                        <div class="d-flex flex-wrap gap-3 mb-4" data-animate data-delay="280">
                            <a href="contact.php" class="btn-hero-cta">Contact Us</a>
                            <a href="portfolio.php" class="btn-hero-cta">See Our Work</a>
                        </div>
                    </div>
                </div>

                <div class="row g-4 banner-services">
                    <?php foreach ($categories as $i => $category): ?>
                    <div class="col-6 col-lg-2" data-animate data-delay="<?php echo $i * 60; ?>">
                        <a href="#<?php echo $esc($category['id']); ?>" class="service-chip">
                            <span class="service-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><?php echo $siteData['icons'][$category['icon']]; ?></svg>
                            </span>
                            <h6><?php echo $esc($category['title']); ?></h6>
                            <p><?php echo $esc($category['description']); ?></p>
                        </a>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ banner-->

         <?php foreach ($categories as $c => $category): ?>
         <!-- <?php echo $esc($category['title']); ?> -->
         <section id="<?php echo $esc($category['id']); ?>" class="services-category <?php echo $c % 2 ? 'who-we-are' : 'bottom-services-section'; ?>">
            <?php if ($c % 2): ?>
            <div class="bg-bubble bubble-blue" aria-hidden="true"></div>
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <?php endif; ?>
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-8" data-animate>
                        <p class="eyebrow"><?php echo count($category['items']); ?> Services</p>
                        <h2 class="section-heading"><?php echo $esc($category['title']); ?></h2>
                        <p class="banner-text max-width-700 mt-3" data-animate data-delay="80"><?php echo $esc($category['description']); ?></p>
                    </div>
                </div>
                <div class="row g-4">
                    <?php foreach ($category['items'] as $i => $item): ?>
                    <div class="col-12 col-sm-6 col-lg-3" data-animate data-delay="<?php echo ($i % 4) * 70; ?>">
                        <div class="popular-service-card h-100" style="--accent:<?php echo $accents[($c + $i) % count($accents)]; ?>">
                            <span class="popular-service-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><?php echo $siteData['icons'][$category['icon']]; ?></svg>
                            </span>
                            <h6><?php echo $esc($item['label']); ?></h6>
                            <p><?php echo $esc($serviceDescription($item['url'])); ?></p>
                            <a href="<?php echo $esc($item['url']); ?>" class="popular-service-link">Learn more <span>&rarr;</span></a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ <?php echo $esc($category['title']); ?> -->
         <?php endforeach; ?>

         <!-- get started -->
         <section class="founder-section">
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-8" data-animate>
                        <p class="eyebrow">Get Started</p>
                        <h2 class="section-heading">Not sure which service you need?</h2>
                        <p class="banner-text mt-3 mx-auto" data-animate data-delay="80">
                            Tell us what you're working on and we'll recommend the right mix.
                        </p>
                        <div class="d-flex flex-wrap gap-3 justify-content-center mt-4" data-animate data-delay="120">
                            <a href="contact.php" class="btn-hero-cta">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ get started -->
     </main>
     <!--/ main -->

<?php include __DIR__ . '/components/footer.php'; ?>
