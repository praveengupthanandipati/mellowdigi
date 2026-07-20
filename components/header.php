<?php
// Falls back to loading the shared data file if this component is ever
// included on its own, without index.php having decoded it first.
$siteData = $siteData ?? json_decode(file_get_contents(__DIR__ . '/../data/site-data.json'), true);

// Per-page SEO overrides: set $pageTitle / $pageDescription / $pageKeywords /
// $pageUrl before including this file. Sensible homepage defaults otherwise.
$siteName   = 'MellowDigi';
$siteUrl    = 'https://www.mellowdigi.com'; // TODO: replace with the live production domain
$pageTitle       = $pageTitle       ?? 'MellowDigi Interactive Media | Digital Solutions & Creative Services';
$pageDescription = $pageDescription ?? 'MellowDigi is a full-service digital creative agency offering photography, video production, branding, print design, web & mobile development and digital marketing — all under one roof.';
$pageKeywords    = $pageKeywords    ?? 'digital agency, branding agency, photography services, video production, web development, digital marketing agency, MellowDigi';
$pageUrl         = $pageUrl         ?? $siteUrl . '/';
$pageImage       = $pageImage       ?? $siteUrl . '/img/fav.png'; // TODO: swap in a dedicated 1200x630 social share image

// Escape everything going into HTML attributes/text so a quote or special
// character in any of the above can never break the markup.
$esc = function ($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary SEO -->
    <title><?php echo $esc($pageTitle); ?></title>
    <meta name="description" content="<?php echo $esc($pageDescription); ?>">
    <meta name="keywords" content="<?php echo $esc($pageKeywords); ?>">
    <meta name="author" content="<?php echo $esc($siteName); ?>">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <link rel="canonical" href="<?php echo $esc($pageUrl); ?>">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $esc($pageUrl); ?>">
    <meta property="og:site_name" content="<?php echo $esc($siteName); ?>">
    <meta property="og:title" content="<?php echo $esc($pageTitle); ?>">
    <meta property="og:description" content="<?php echo $esc($pageDescription); ?>">
    <meta property="og:image" content="<?php echo $esc($pageImage); ?>">
    <meta property="og:locale" content="en_US">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="<?php echo $esc($pageUrl); ?>">
    <meta name="twitter:title" content="<?php echo $esc($pageTitle); ?>">
    <meta name="twitter:description" content="<?php echo $esc($pageDescription); ?>">
    <meta name="twitter:image" content="<?php echo $esc($pageImage); ?>">

    <!-- Misc -->
    <meta name="theme-color" content="#121212">
    <link rel="icon" type="image/png" href="img/fav.png">

    <!-- Structured data (schema.org Organization) -->
    <script type="application/ld+json">
    <?php
    echo json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => $siteName,
        'url' => $siteUrl,
        'logo' => $siteUrl . '/img/logo.svg',
        'description' => $pageDescription,
        'contactPoint' => [
            '@type' => 'ContactPoint',
            'telephone' => '+91-98765-43210',
            'contactType' => 'customer service',
            'email' => 'hello@mellowdigi.com',
        ],
    ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    ?>
    </script>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="pageLoader" class="page-loader" aria-hidden="true">
        <span class="loader-ring"></span>
    </div>
    <noscript><style>.page-loader{display:none!important;}</style></noscript>

    <!-- header -->
    <header class="site-header">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid nav-shell">
                <a class="navbar-brand" href="index.php">
                    <img src="img/logo.svg" alt="MellowDigi" class="logo-img">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"
                    aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mainNav">
                    <ul class="navbar-nav mx-lg-auto align-items-lg-center">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item mega-dropdown">
                            <div class="nav-link-row">
                                <a class="nav-link" href="services.html">Services</a>
                                <button class="mega-toggle-btn d-lg-none" type="button" aria-expanded="false"
                                    aria-controls="servicesMegaMenu" aria-label="Toggle Services submenu">
                                    <span class="caret"></span>
                                </button>
                            </div>
                            <div class="mega-menu" id="servicesMegaMenu">
                                <div class="container-fluid nav-shell">
                                    <div class="row g-4">
                                        <?php foreach ($siteData['megaMenu'] as $category): ?>
                                        <div class="col-6 col-lg-2">
                                            <a href="services.html" class="mega-menu-title"><?php echo $esc($category['title']); ?></a>
                                            <ul class="mega-menu-list">
                                                <?php foreach ($category['items'] as $item): ?>
                                                <li><a href="<?php echo $esc($item['url']); ?>"><?php echo $esc($item['label']); ?></a></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="portfolio.html">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="solutions.html">Solutions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="clients.html">Our Clients</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.html">Blog</a>
                        </li>
                    </ul>
                    <a class="btn-contact" href="contact.html">
                        Contact
                        <svg width="12" height="12" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M3 11L11 3M11 3H4M11 3V10" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
            </div>
        </nav>
    </header>
     <!--/ header -->
