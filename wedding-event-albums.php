<?php
$siteData = json_decode(file_get_contents(__DIR__ . '/data/site-data.json'), true);

$pageTitle       = 'Wedding & Event Albums | MellowDigi';
$pageDescription = 'Premium wedding and event photo albums by Mellow Digi. Layflat, flush mount, leather, and premium print options. Custom sizes with fast delivery.';
$pageKeywords    = 'wedding album printing, event photo album, layflat album printing, flush mount album, leather wedding albums, custom photo albums, wedding album design, pre-wedding album, guest album printing, Mellow Digi wedding albums, photographer album printing, premium photo books';
$pageUrl         = 'https://www.mellowdigi.com/wedding-event-albums.php';
include __DIR__ . '/components/header.php';

$promise = ['Layflat &amp; Flush Mount Binding', 'Premium Leather &amp; Fabric Covers', 'Premium Photo Paper', 'Custom Sizes', '5-7 Day Delivery'];

$albums = [
    [
        'icon' => 'layout', 'accent' => '#2BACE2', 'title' => 'Layflat Albums', 'subtitle' => 'No Crease. Full View.',
        'description' => 'Pages open completely flat with no center crease &mdash; perfect for panoramic shots and group photos.',
        'specs' => [
            ['name' => 'Binding', 'detail' => 'Layflat (center hinge)'],
            ['name' => 'Paper', 'detail' => '300 GSM thick photo paper'],
            ['name' => 'Cover', 'detail' => 'Hardbound, Fabric, or Leather'],
            ['name' => 'Pages', 'detail' => '20 to 100+'],
            ['name' => 'Best For', 'detail' => 'Weddings, pre-wedding shoots, family portraits'],
        ],
    ],
    [
        'icon' => 'book', 'accent' => '#3DB54A', 'title' => 'Flush Mount Albums', 'subtitle' => 'Thick, Rigid, Premium.',
        'description' => 'Pages are mounted on thick cardboard, creating a sturdy, luxurious feel. The ultimate heirloom.',
        'specs' => [
            ['name' => 'Binding', 'detail' => 'Flush Mount (rigid pages)'],
            ['name' => 'Paper', 'detail' => '400 GSM thick photo paper'],
            ['name' => 'Cover', 'detail' => 'Premium Leather or Wooden'],
            ['name' => 'Pages', 'detail' => '20 to 80+'],
            ['name' => 'Best For', 'detail' => 'Luxury weddings, anniversaries, milestone events'],
        ],
    ],
    [
        'icon' => 'photostack', 'accent' => '#F99E1F', 'title' => 'Matted / Framed Albums', 'subtitle' => 'Classic, Elegant, Traditional.',
        'description' => 'Photos are mounted with a matte border around each image, giving a classic photo-frame feel.',
        'specs' => [
            ['name' => 'Binding', 'detail' => 'Flush Mount or Screw-Bound'],
            ['name' => 'Paper', 'detail' => '250 GSM with matte border'],
            ['name' => 'Cover', 'detail' => 'Leather or Fabric Hardbound'],
            ['name' => 'Pages', 'detail' => '20 to 50+'],
            ['name' => 'Best For', 'detail' => "Traditional weddings, parents' anniversaries"],
        ],
    ],
    [
        'icon' => 'refresh', 'accent' => '#8B5CF6', 'title' => 'Screw-Bound / Spiral Albums', 'subtitle' => 'Affordable, Flexible, Easy to Print.',
        'description' => 'Pages are bound with screws or spiral, allowing for easy page removal or addition. Great for guests.',
        'specs' => [
            ['name' => 'Binding', 'detail' => 'Screw-Bound or Spiral'],
            ['name' => 'Paper', 'detail' => '200 GSM photo paper'],
            ['name' => 'Cover', 'detail' => 'Acrylic or Hardboard'],
            ['name' => 'Pages', 'detail' => '10 to 50+'],
            ['name' => 'Best For', 'detail' => 'Guest albums, baby showers, birthday parties'],
        ],
    ],
    [
        'icon' => 'tag', 'accent' => '#F43F5E', 'title' => 'Mini Albums (Parent/Guest Albums)', 'subtitle' => 'Compact, Cute, Shareable.',
        'description' => "A smaller version of your main album &mdash; perfect as thank-you gifts for parents, bridesmaids, or guests.",
        'specs' => [
            ['name' => 'Size', 'detail' => '6x6 inch, 8x8 inch'],
            ['name' => 'Binding', 'detail' => 'Layflat or Spiral'],
            ['name' => 'Pages', 'detail' => '10 to 30'],
            ['name' => 'Best For', 'detail' => 'Parent gifts, bridesmaid gifts, return gifts'],
        ],
    ],
];

$covers = [
    ['name' => 'Premium Leather', 'detail' => 'Luxurious, soft-touch, timeless &mdash; luxury weddings, premium events.'],
    ['name' => 'Fabric (Linen/Silk)', 'detail' => 'Elegant, textured, sophisticated &mdash; classic weddings, traditional themes.'],
    ['name' => 'Wooden Cover', 'detail' => 'Rustic, unique, handcrafted &mdash; outdoor, rustic, or boho weddings.'],
    ['name' => 'Acrylic Cover', 'detail' => 'Modern, glossy, contemporary &mdash; modern weddings, corporate events.'],
    ['name' => 'Photo Cover', 'detail' => 'Personalized image on cover &mdash; all events, personal touch.'],
];

$printQuality = [
    ['name' => 'Print Technology', 'detail' => 'High-resolution digital printing (1200 DPI)'],
    ['name' => 'Paper Type', 'detail' => 'Premium matte, glossy, or pearl finish'],
    ['name' => 'Paper Thickness', 'detail' => '200 GSM to 400 GSM (depending on album type)'],
    ['name' => 'Color Accuracy', 'detail' => '100% color-matched to your photos'],
    ['name' => 'Coating', 'detail' => 'Scratch-resistant and fade-proof'],
];

$process = [
    ['step' => '01', 'accent' => '#2BACE2', 'title' => 'Share Your Photos', 'items' => ['Upload your high-resolution images', 'Via Google Drive, Dropbox, or WhatsApp']],
    ['step' => '02', 'accent' => '#3DB54A', 'title' => 'Approve the Layout', 'items' => ['We design your album layout and send a digital proof', 'You review and say "Yes"']],
    ['step' => '03', 'accent' => '#F99E1F', 'title' => 'We Print &amp; Deliver', 'items' => ['We print and quality-check your album', 'Shipped to your doorstep in 5&ndash;7 days']],
];

$designItems = [
    ['icon' => 'layout', 'text' => 'Page layouts with photo placement'],
    ['icon' => 'pencil', 'text' => 'Backgrounds, borders, and text'],
    ['icon' => 'palette', 'text' => 'Color correction and enhancement'],
    ['icon' => 'book', 'text' => 'Cover design (photo or text)'],
];

$faqs = [
    ['question' => 'What is the minimum order?', 'answer' => 'None! Order 1 album or 50 mini albums.'],
    ['question' => 'How long does delivery take?', 'answer' => '5&ndash;7 business days after design approval. Express options available.'],
    ['question' => 'What file format do I need?', 'answer' => 'JPEG or PNG (high resolution recommended). 300 DPI preferred.'],
    ['question' => 'What is the max number of pages?', 'answer' => 'Up to 100+ pages, depending on album type.'],
    ['question' => 'Can I change the design?', 'answer' => "Yes! We offer unlimited revisions until you're 100% satisfied."],
    ['question' => 'Do you offer design services?', 'answer' => 'Yes, absolutely free with every album order.'],
    ['question' => 'Can I see a sample before ordering?', 'answer' => 'Yes. Request a physical sample kit.'],
];

$heroIcons = [
    ['icon' => 'book', 'label' => 'Wedding &amp; Event Albums'],
];
?>

     <!-- main -->
     <main>
        <!-- banner-->
         <section class="banner">
            <div class="container-fluid nav-shell">
                <div class="row align-items-center banner-hero">
                    <div class="col-lg-6">
                        <p class="eyebrow" data-animate>Wedding &amp; Event Albums</p>
                        <h1 class="banner-title" data-animate data-delay="120">
                            Your memories. <span class="text-gradient-brand">Our craft</span>.
                        </h1>
                        <p class="banner-text max-width-700" data-animate data-delay="220">
                            Premium wedding &amp; event albums that last a lifetime.
                        </p>
                        <p class="banner-text max-width-700" data-animate data-delay="260">
                            Your wedding or event deserves more than a hard drive full of files. At
                            Mellow Digi, we turn your favorite moments into heirloom-quality albums &mdash;
                            thick pages, stunning colors, and premium materials that feel as special as the
                            day itself.
                        </p>
                        <ul class="startup-checklist" data-animate data-delay="290">
                            <?php foreach ($promise as $item): ?>
                            <li><?php echo $item; ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="d-flex flex-wrap gap-3" data-animate data-delay="320">
                            <a href="#albums" class="btn-hero-cta">Explore Albums</a>
                            <a href="contact.php" class="btn-hero-cta">Get a Quote</a>
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

         <!-- choose your album -->
         <section class="bottom-services-section" id="albums">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Album Types</p>
                        <h2 class="section-heading">Choose your album</h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-lg-2 g-4">
                    <?php foreach ($albums as $i => $album): ?>
                    <div class="col" data-animate data-delay="<?php echo ($i % 2) * 100; ?>">
                        <div class="why-card h-100 mb-0" style="--accent:<?php echo $esc($album['accent']); ?>">
                            <span class="popular-service-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><?php echo $siteData['icons'][$album['icon']]; ?></svg>
                            </span>
                            <h3><?php echo $esc($album['title']); ?></h3>
                            <p class="text-muted mb-2"><?php echo $esc($album['subtitle']); ?></p>
                            <p><?php echo $album['description']; ?></p>
                            <div class="addon-list">
                                <?php foreach ($album['specs'] as $spec): ?>
                                <div class="addon-row">
                                    <span class="addon-name"><?php echo $esc($spec['name']); ?></span>
                                    <span class="addon-price"><?php echo $esc($spec['detail']); ?></span>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ choose your album -->

         <!-- covers & print quality -->
         <section class="who-we-are">
            <div class="bg-bubble bubble-blue" aria-hidden="true"></div>
            <div class="bg-bubble bubble-green" aria-hidden="true"></div>
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Covers &amp; Print Quality</p>
                        <h2 class="section-heading">Covers that make a statement</h2>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6" data-animate>
                        <div class="why-card h-100 mb-0" style="--accent:#2BACE2">
                            <h3>Cover Options</h3>
                            <div class="addon-list">
                                <?php foreach ($covers as $c): ?>
                                <div class="addon-row">
                                    <span class="addon-name"><?php echo $esc($c['name']); ?></span>
                                    <span class="addon-price"><?php echo $c['detail']; ?></span>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-animate data-delay="90">
                        <div class="why-card h-100 mb-0" style="--accent:#3DB54A">
                            <h3>Paper &amp; Printing Quality</h3>
                            <div class="addon-list">
                                <?php foreach ($printQuality as $p): ?>
                                <div class="addon-row">
                                    <span class="addon-name"><?php echo $esc($p['name']); ?></span>
                                    <span class="addon-price"><?php echo $esc($p['detail']); ?></span>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ covers & print quality -->

         <!-- how it works -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">How It Works</p>
                        <h2 class="section-heading">In 3 simple steps</h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
                    <?php foreach ($process as $i => $step): ?>
                    <div class="col" data-animate data-delay="<?php echo $i * 100; ?>">
                        <div class="why-card h-100" style="--accent:<?php echo $esc($step['accent']); ?>">
                            <span class="workflow-badge" style="--accent:<?php echo $esc($step['accent']); ?>"><?php echo $esc($step['step']); ?></span>
                            <h3><?php echo $step['title']; ?></h3>
                            <ul class="startup-checklist">
                                <?php foreach ($step['items'] as $item): ?>
                                <li><?php echo $esc($item); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ how it works -->

         <!-- design services -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row g-4">
                    <div class="col-lg-6" data-animate>
                        <div class="why-card why-card-intro h-100 mb-0" style="--accent:#F99E1F">
                            <p class="eyebrow mb-2">Design Services</p>
                            <h3>Don't have a layout? We'll design it.</h3>
                            <p>We understand &mdash; designing a wedding album can be overwhelming. Our team
                            will professionally design your album layout for free with every order.</p>
                            <p class="mb-0">You just share the photos. We handle the rest.</p>
                        </div>
                    </div>
                    <div class="col-lg-6" data-animate data-delay="90">
                        <div class="why-card h-100 mb-0" style="--accent:#2BACE2">
                            <h3>What we design</h3>
                            <ul class="startup-checklist">
                                <?php foreach ($designItems as $item): ?>
                                <li><?php echo $esc($item['text']); ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <a href="contact.php" class="btn-hero-cta">Let's Design Your Album</a>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ design services -->

         <!-- faq -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">FAQ</p>
                        <h2 class="section-heading">Quick answers</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="faq-accordion" id="faqAccordion" data-animate data-delay="100">
                            <?php foreach ($faqs as $i => $faq): ?>
                            <div class="faq-item">
                                <h3><button class="faq-question" type="button" data-bs-toggle="collapse" data-bs-target="#faqAnswer<?php echo $i; ?>" aria-expanded="false" aria-controls="faqAnswer<?php echo $i; ?>">
                                    <span><?php echo $esc($faq['question']); ?></span>
                                    <span class="faq-icon" aria-hidden="true">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9l6 6 6-6"/></svg>
                                    </span>
                                </button></h3>
                                <div class="collapse" id="faqAnswer<?php echo $i; ?>" data-bs-parent="#faqAccordion">
                                    <div class="faq-answer-body">
                                        <p><?php echo $faq['answer']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ faq -->

         <!-- about us blurb -->
         <section class="bottom-services-section pt-0">
            <div class="container-fluid nav-shell">
                <div class="row">
                    <div class="col-lg-8" data-animate>
                        <div class="why-card why-card-intro mb-0" style="--accent:#3DB54A">
                            <h3>About Mellow Digi</h3>
                            <p>Mellow Digi is a new-age print media startup based in Hyderabad, Telangana. We
                            help couples, event planners and photographers create heirloom-quality albums
                            that capture life's most beautiful moments. Small, agile and obsessed with
                            quality.</p>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ about us blurb -->

         <!-- cta -->
         <section class="founder-section">
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row align-items-center g-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Your Story Deserves to Be Printed</p>
                        <h2 class="section-heading">Turn your memories into a tangible heirloom.</h2>
                        <p class="founder-bio">
                            Don't let your wedding or event photos stay on a phone. Turn them into a
                            beautiful, tangible album that you'll cherish forever. At Mellow Digi, we
                            combine craftsmanship, premium materials and care to create albums you'll be
                            proud to show off.
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
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><?php echo $siteData['icons']['pin']; ?></svg>
                                <span>Based in: Hyderabad, Telangana</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-5 text-lg-end" data-animate data-delay="150">
                        <p class="founder-bio">Ready to start?</p>
                        <a href="contact.php" class="btn-hero-cta">Get a Free Quote Today</a>
                    </div>
                </div>
            </div>
         </section>
         <!--/ cta -->
        <?php include __DIR__ . '/components/enquiry-form.php'; ?>
     </main>
     <!--/ main -->

<?php include __DIR__ . '/components/footer.php'; ?>
