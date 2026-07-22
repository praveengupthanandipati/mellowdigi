<?php
$siteData = json_decode(file_get_contents(__DIR__ . '/data/site-data.json'), true);

$pageTitle       = 'About MellowDigi | Our Story, Values & Founder';
$pageDescription = 'Meet the team behind MellowDigi — a full-service digital creative agency covering photography, video, branding, web development and digital marketing. Founded by Praveen Guptha.';
$pageKeywords    = 'about MellowDigi, digital creative agency, MellowDigi team, Praveen Guptha founder, brand strategy agency';
$pageUrl         = 'https://www.mellowdigi.com/about.php';
include __DIR__ . '/components/header.php';
?>

     <!-- main -->
     <main>
        <!-- banner-->
         <section class="banner">
            <div class="container-fluid nav-shell">
                <div class="row align-items-center banner-hero">
                    <div class="col-lg-6">
                        <p class="eyebrow" data-animate>About MellowDigi</p>
                        <h1 class="banner-title" data-animate data-delay="120">
                            The team behind <span class="text-gradient-brand">brands that grow</span>
                        </h1>
                        <p class="banner-text max-width-700" data-animate data-delay="220">
                            MellowDigi is a new digital creative studio built around a simple goal —
                            help ambitious businesses look and perform like the brand they're capable
                            of becoming. We bring photography, video, branding, print, web development
                            and digital marketing together under one roof, with a small, hands-on team
                            that's obsessed with getting the details right.
                        </p>
                        <a href="contact.html" class="btn-hero-cta" data-animate data-delay="320">Let's Connect</a>
                    </div>
                    <div class="col-lg-6">
                        <div class="emblem-stage" data-animate data-delay="180">
                            <svg class="emblem-svg" viewBox="0 0 412.2 390.4" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <polygon class="grp-left" style="--i:0" fill="#2BACE2" points="9.7,169.2 9.7,162.7 9.7,61.5 107.7,114.5 107.7,166 107.7,225.8 9.7,278.8"/>
                                <polygon class="grp-top" style="--i:1" fill="#3C3C38" points="9.7,61.5 206.7,167.6 404,61.5 305.6,8.5 206.7,58.9 107.7,8.5"/>
                                <polygon class="grp-right" style="--i:2" fill="#2BACE2" points="305.6,114.2 404,61.5 404,177.6 404,278.8 305.6,226.1 305.6,174.7"/>
                                <polygon class="grp-bottom" style="--i:3" fill="#FBBD17" points="9.7,278.8 206.7,385.2 404,278.8 305.6,225.5 206.7,276.2 107.7,225.8"/>
                                <polygon class="grp-top" style="--i:4" fill="#3DB54A" points="9.7,61.5 206.7,167.6 404,61.5 305.6,8.5 206.7,58.9 107.7,8.5"/>
                                <polygon class="grp-top" style="--i:5" fill="#78C144" points="206.7,167.6 404,61.5 305.6,8.5 206.7,58.9"/>
                                <polygon class="grp-bottom" style="--i:6" fill="#F99E1F" points="206.7,276.2 107.7,225.8 9.7,278.8 206.7,385.2"/>
                                <polygon class="grp-left" style="--i:7" fill="#1E94D2" points="107.7,169.5 107.7,225.8 9.7,278.8 9.7,169.2"/>
                                <polygon class="grp-right" style="--i:8" fill="#1E94D2" points="404,169.5 404,177.6 404,278.8 305.6,225.5 305.6,174.7 305.6,169.5"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ banner-->

         <!-- our story -->
         <section class="who-we-are">
            <div class="bg-bubble bubble-blue" aria-hidden="true"></div>
            <div class="bg-bubble bubble-green" aria-hidden="true"></div>
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row g-4">
                    <div class="col-lg-4">
                        <p class="eyebrow" data-animate>Our Story</p>
                        <h2 class="section-heading" data-animate data-delay="100">
                            Built by people who'd rather do the work than talk about it
                        </h2>
                    </div>
                    <div class="col-lg-5">
                        <p class="who-text" data-animate data-delay="200">
                            We've never chased being the biggest name in the industry — just the most
                            useful one to the businesses we work with. That's meant staying small enough
                            to care about every project, while building out the range to handle almost
                            anything a growing brand needs.
                        </p>
                        <p class="who-text" data-animate data-delay="280">
                            Photographers, video producers, designers, developers and strategists now
                            work side by side under one roof, which means fewer handoffs, fewer
                            miscommunications, and a brand that actually looks and sounds consistent
                            everywhere it shows up.
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
         <!--/ our story -->

         <!-- values -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">What Drives Us</p>
                        <h2 class="section-heading">The principles behind every project</h2>
                    </div>
                </div>
                <div class="row g-4">
                    <?php foreach (array_chunk($siteData['values'], 2) as $colIndex => $pair): ?>
                    <div class="col-lg-6">
                        <?php foreach ($pair as $i => $value): ?>
                        <div class="why-card<?php echo ($colIndex === 0 && $i === 0) ? ' why-card-intro' : ''; ?>" style="--accent:<?php echo $esc($value['accent']); ?>" data-animate data-delay="<?php echo ($colIndex * 2 + $i) * 90; ?>">
                            <h3><?php echo $esc($value['title']); ?></h3>
                            <p><?php echo $esc($value['description']); ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ values -->

         <!-- founder -->
         <section class="founder-section">
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row align-items-center g-5">
                    <div class="col-lg-3 text-center text-lg-start" data-animate>
                        <span class="founder-avatar"><?php echo $esc($siteData['founder']['initials']); ?></span>
                    </div>
                    <div class="col-lg-9" data-animate data-delay="120">
                        <p class="eyebrow">Meet the Founder</p>
                        <h2 class="section-heading"><?php echo $esc($siteData['founder']['name']); ?></h2>
                        <p class="founder-role"><?php echo $esc($siteData['founder']['role']); ?></p>
                        <p class="founder-bio"><?php echo $esc($siteData['founder']['bio']); ?></p>
                        <a href="#" class="founder-link" aria-label="Connect with <?php echo $esc($siteData['founder']['name']); ?> on LinkedIn">
                            <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="1.6"><?php echo $siteData['icons']['linkedin']; ?></svg>
                            Connect on LinkedIn
                        </a>
                    </div>
                </div>
            </div>
         </section>
         <!--/ founder -->
     </main>
     <!--/ main -->

<?php include __DIR__ . '/components/footer.php'; ?>
