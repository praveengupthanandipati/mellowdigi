<?php
$siteData = json_decode(file_get_contents(__DIR__ . '/data/site-data.json'), true);

$pageTitle       = 'Business Cards & Stationery Printing | MellowDigi';
$pageDescription = 'Premium business card and stationery printing for Indian startups and SMEs. Explore foil stamping, spot UV, eco-friendly paper, and fast delivery by Mellow Digi.';
$pageKeywords    = 'business card printing India, premium stationery printing, startup business cards, spot UV printing, foil stamping cards, digital print media, branded letterheads, Mellow Digi prints, physical print media solutions';
$pageUrl         = 'https://www.mellowdigi.com/business-cards-stationery.php';
include __DIR__ . '/components/header.php';

$whyMatters = [
    ['title' => 'Quality You Can Feel', 'description' => 'We use high-GSM (thick) papers, tactile textures and premium lamination that feels expensive because it is.'],
    ['title' => 'Digital Precision', 'description' => 'Our state-of-the-art digital presses ensure your colors are vibrant and sharp, matching your screen designs perfectly.'],
    ['title' => 'Zero Compromise', 'description' => 'From the first business card to your 500th letterhead, every piece is checked for perfection.'],
];

$products = [
    ['icon' => 'idcard', 'accent' => '#2BACE2', 'title' => 'Premium Business Cards', 'description' => "The cornerstone of networking. Choose from Standard, Slim or Square sizes. We offer matte, gloss and textured finishes to match your brand's personality."],
    ['icon' => 'certificate', 'accent' => '#3DB54A', 'title' => 'Spot UV &amp; Foil Cards', 'description' => 'Make your logo pop. Our foil stamping (Gold, Silver, Rose Gold, Holographic) and Spot UV coatings add a glossy, raised texture that catches the light — and the eye.'],
    ['icon' => 'mail', 'accent' => '#F99E1F', 'title' => 'Branded Letterheads &amp; Envelopes', 'description' => 'Professionalism starts with the mail. Custom-printed letterheads and matching envelopes ensure your proposals, invoices and official correspondence look cohesive and corporate.'],
    ['icon' => 'briefcase', 'accent' => '#8B5CF6', 'title' => 'Presentation Folders', 'description' => 'Impress investors or clients with sleek folders featuring business card slots and internal pockets. Perfect for proposals, pitch decks and real estate portfolios.'],
    ['icon' => 'book', 'accent' => '#F43F5E', 'title' => 'Custom Notepads &amp; Memo Blocks', 'description' => 'Keep your brand top-of-mind in the office. Custom-branded sticky notes, desk pads and notepads turn everyday office supplies into subtle marketing tools.'],
    ['icon' => 'tag', 'accent' => '#14B8A6', 'title' => 'Compliment Slips &amp; Vouchers', 'description' => 'Short notes go a long way. Add a branded touch to your deliveries or packages with elegant compliment slips.'],
];

$finishes = [
    ['icon' => 'certificate', 'accent' => '#2BACE2', 'title' => 'Spot UV Gloss', 'description' => 'A high-gloss layer applied to specific areas (like your logo) to create a striking contrast with a matte background.'],
    ['icon' => 'target', 'accent' => '#3DB54A', 'title' => 'Foil Stamping', 'description' => 'Heat-transfer metallic foils (Gold, Silver, Rose Gold, Copper) to give your cards a luxurious, premium jewelry feel.'],
    ['icon' => 'pencil', 'accent' => '#F99E1F', 'title' => 'Embossing &amp; Debossing', 'description' => 'Raise your text (Embossing) or press it in (Debossing) for a tactile, 3D experience that begs to be touched.'],
    ['icon' => 'idcard', 'accent' => '#8B5CF6', 'title' => 'Round Cornering', 'description' => 'Soft, rounded edges that look modern and feel smooth in the hand.'],
    ['icon' => 'refresh', 'accent' => '#F43F5E', 'title' => 'Eco-Friendly Kraft', 'description' => 'For the environmentally conscious, we offer recycled and sustainable paper stocks with a raw, organic look.'],
];

$process = [
    ['step' => '01', 'accent' => '#2BACE2', 'title' => 'Upload &amp; Brief', 'items' => ['Share your design files (PDF, AI or PSD)', "Tell us your vision — no design? Our team can assist for free"]],
    ['step' => '02', 'accent' => '#3DB54A', 'title' => 'Preview &amp; Approve', 'items' => ["We'll send you a digital proof (mockup) to review", 'We never print until you say "perfect"']],
    ['step' => '03', 'accent' => '#F99E1F', 'title' => 'Print &amp; Deliver', 'items' => ['We fire up the presses and run a rigorous quality check', 'Your order ships securely to your doorstep']],
];

$faqs = [
    ['question' => 'What is the minimum order quantity (MOQ)?', 'answer' => 'We have a low MOQ! You can order as few as 50 business cards, making it perfect for freelancers and new startups testing the waters.'],
    ['question' => "I don't have a design. Can you help?", 'answer' => 'Absolutely. We offer basic design assistance for free with printing orders and full design packages for larger stationery sets.'],
    ['question' => 'What file formats do you accept?', 'answer' => 'We accept high-resolution PDFs, AI (Adobe Illustrator), PSD, JPG and PNG files. We recommend PDF for the best print results.'],
    ['question' => 'How long does delivery take?', 'answer' => 'Standard delivery takes 3&ndash;5 business days after design approval. Express options are available upon request for urgent orders.'],
];

$heroIcons = [
    ['icon' => 'idcard', 'label' => 'Business Cards &amp; Stationery'],
];
?>

     <!-- main -->
     <main>
        <!-- banner-->
         <section class="banner">
            <div class="container-fluid nav-shell">
                <div class="row align-items-center banner-hero">
                    <div class="col-lg-6">
                        <p class="eyebrow" data-animate>Business Cards &amp; Stationery</p>
                        <h1 class="banner-title" data-animate data-delay="120">
                            Your brand deserves more than <span class="text-gradient-brand">just paper</span>.
                        </h1>
                        <p class="banner-text max-width-700" data-animate data-delay="220">
                            In a digital world, physical media is a luxury. At Mellow Digi, we believe your
                            business card isn't just a piece of paper — it's a handshake, a memory and a
                            promise. We combine cutting-edge digital printing technology with a curated
                            selection of luxury papers to help startups, freelancers and SMEs make an
                            unforgettable first impression.
                        </p>
                        <div class="d-flex flex-wrap gap-3" data-animate data-delay="320">
                            <a href="#finishes" class="btn-hero-cta">Explore Our Finishes</a>
                            <a href="contact.html" class="btn-hero-cta">Get a Quote</a>
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

         <!-- why physical print media still matters -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Why Physical Print Media Still Matters</p>
                        <h2 class="section-heading">The "Mellow" difference: print that speaks volumes</h2>
                        <p class="banner-text max-width-700" data-animate data-delay="80">
                            As a startup ourselves, we know the pressure of standing out. That is why Mellow
                            Digi is dedicated to bridging the gap between digital design and physical
                            excellence. We aren't just printers; we are your brand's silent salesperson.
                        </p>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
                    <?php foreach ($whyMatters as $i => $item): ?>
                    <div class="col" data-animate data-delay="<?php echo $i * 90; ?>">
                        <div class="why-card h-100">
                            <h3><?php echo $esc($item['title']); ?></h3>
                            <p><?php echo $esc($item['description']); ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ why physical print media still matters -->

         <!-- what we print -->
         <section class="popular-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Our Stationery Suite</p>
                        <h2 class="section-heading">What we print</h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
                    <?php foreach ($products as $i => $product): ?>
                    <div class="col" data-animate data-delay="<?php echo ($i % 3) * 90; ?>">
                        <div class="popular-service-card h-100" style="--accent:<?php echo $esc($product['accent']); ?>">
                            <span class="popular-service-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><?php echo $siteData['icons'][$product['icon']]; ?></svg>
                            </span>
                            <h6><?php echo $product['title']; ?></h6>
                            <p><?php echo $product['description']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ what we print -->

         <!-- finishes & customization -->
         <section class="who-we-are" id="finishes">
            <div class="bg-bubble bubble-blue" aria-hidden="true"></div>
            <div class="bg-bubble bubble-green" aria-hidden="true"></div>
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Finishes &amp; Customization</p>
                        <h2 class="section-heading">Customize your print. Elevate your brand.</h2>
                        <p class="banner-text max-width-700" data-animate data-delay="80">
                            We know that startups want to look unique. Choose your weapon.
                        </p>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
                    <?php foreach ($finishes as $i => $item): ?>
                    <div class="col" data-animate data-delay="<?php echo ($i % 3) * 90; ?>">
                        <div class="process-step h-100">
                            <span class="popular-service-icon" style="--accent:<?php echo $esc($item['accent']); ?>">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><?php echo $siteData['icons'][$item['icon']]; ?></svg>
                            </span>
                            <h6><?php echo $item['title']; ?></h6>
                            <p><?php echo $item['description']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ finishes & customization -->

         <!-- how it works -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">How It Works</p>
                        <h2 class="section-heading">Simple steps to stunning print</h2>
                        <p class="banner-text max-width-700" data-animate data-delay="80">
                            Getting your stationery printed with Mellow Digi is as easy as 1-2-3. We handle
                            the heavy lifting so you can focus on growing your business.
                        </p>
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

         <!-- faq -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">FAQ</p>
                        <h2 class="section-heading">Quick questions</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10">
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
                                        <p><?php echo $esc($faq['answer']); ?></p>
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
                            <p>Mellow Digi is a new-age print media startup dedicated to helping Indian
                            businesses look their best. We combine the art of traditional print with the
                            speed of digital technology, ensuring premium quality at affordable prices. We
                            are small, agile and passionate about paper.</p>
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
                        <p class="eyebrow">Ready to Make Your Mark?</p>
                        <h2 class="section-heading">Stop handing out generic, flimsy cards.</h2>
                        <p class="founder-bio">
                            Let's create stationery that gets noticed, remembered and talked about. At
                            Mellow Digi, we're not just printing for you; we're printing with you — helping
                            you build a brand that feels as good as it looks.
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
                                <span>Hyderabad, Telangana</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-5 text-lg-end" data-animate data-delay="150">
                        <p class="founder-bio">Ready to start?</p>
                        <div class="d-flex flex-wrap gap-3 justify-content-lg-end">
                            <a href="contact.html" class="btn-hero-cta">Get a Free Quote</a>
                            <a href="contact.html" class="btn-hero-cta">Order Now</a>
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
