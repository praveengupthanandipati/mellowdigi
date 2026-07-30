<?php
$siteData = json_decode(file_get_contents(__DIR__ . '/data/site-data.json'), true);

$pageTitle       = 'Corporate Print Materials | MellowDigi';
$pageDescription = 'Professional corporate printing services by Mellow Digi. Business cards, letterheads, presentation folders, annual reports, and more. Bulk orders with fast delivery.';
$pageKeywords    = 'corporate printing services, business card printing, letterhead printing, presentation folder printing, annual report printing, corporate stationery India, bulk printing services, ID card printing, corporate diaries printing, professional print media, Mellow Digi corporate printing, branded stationery';
$pageUrl         = 'https://www.mellowdigi.com/corporate-print-materials.php';
include __DIR__ . '/components/header.php';

$promise = ['Full Corporate Stationery Suite', 'Bulk &amp; Small Orders Welcome', 'Premium Paper Stocks', 'Brand Consistency', '3-5 Day Delivery'];

$products = [
    ['icon' => 'idcard', 'accent' => '#2BACE2', 'title' => 'Corporate Business Cards', 'subtitle' => 'First Impressions Matter', 'description' => 'Standard, slim, or premium finishes. Matte, gloss, spot UV, foil stamping and embossing available.', 'bestFor' => 'All employees, executives, and leadership.'],
    ['icon' => 'mail', 'accent' => '#3DB54A', 'title' => 'Letterheads &amp; Envelopes', 'subtitle' => 'Professional Correspondence', 'description' => 'Custom-printed letterheads with matching envelopes. Choose from standard or premium paper stocks.', 'bestFor' => 'Official letters, proposals, invoices.'],
    ['icon' => 'briefcase', 'accent' => '#F99E1F', 'title' => 'Presentation Folders', 'subtitle' => 'Impress Clients &amp; Investors', 'description' => 'Sleek folders with business card slots and internal pockets. Perfect for pitch decks, proposals, and client kits.', 'bestFor' => 'Investor meetings, client proposals, sales kits.'],
    ['icon' => 'book', 'accent' => '#8B5CF6', 'title' => 'Annual Reports &amp; Brochures', 'subtitle' => 'Showcase Your Growth', 'description' => 'Multi-page booklets and reports with professional binding. Saddle-stitch, perfect binding, or wire-o.', 'bestFor' => 'Annual reports, company profiles, service catalogues.'],
    ['icon' => 'pencil', 'accent' => '#F43F5E', 'title' => 'Notepads &amp; Memo Blocks', 'subtitle' => 'Everyday Branding', 'description' => 'Custom-branded notepads, sticky notes, and desk pads. Keep your brand top-of-mind every day.', 'bestFor' => 'Employee desks, meeting rooms, client gifts.'],
    ['icon' => 'tag', 'accent' => '#14B8A6', 'title' => 'Compliment Slips &amp; Vouchers', 'subtitle' => 'Small Touches, Big Impact', 'description' => 'Branded compliment slips and thank-you cards for packages, deliveries, and client communications.', 'bestFor' => 'E-commerce packaging, client thank-yous, internal communications.'],
    ['icon' => 'certificate', 'accent' => '#2BACE2', 'title' => 'ID Cards &amp; Lanyards', 'subtitle' => 'Professional Identity', 'description' => 'Custom employee ID cards with lanyards. Includes photo, name, designation, and company logo.', 'bestFor' => 'Employees, visitors, event staff, conference attendees.'],
    ['icon' => 'clock', 'accent' => '#3DB54A', 'title' => 'Corporate Diaries &amp; Calendars', 'subtitle' => 'Year-Round Visibility', 'description' => 'Custom-branded diaries, planners, and wall calendars. A gift that keeps your brand visible all year.', 'bestFor' => 'Client gifts, employee onboarding, New Year giveaways.'],
    ['icon' => 'billboard', 'accent' => '#F99E1F', 'title' => 'Tents &amp; Table Top Displays', 'subtitle' => 'Brand Presence at Events', 'description' => 'Acrylic or cardboard table tents, counter displays, and standees for offices, events, and trade shows.', 'bestFor' => 'Conferences, exhibitions, office receptions, retail counters.'],
    ['icon' => 'megaphone', 'accent' => '#8B5CF6', 'title' => 'Marketing Collaterals', 'subtitle' => 'Campaign-Ready Prints', 'description' => 'Flyers, brochures, posters, banners, and standees for marketing campaigns, product launches, and events.', 'bestFor' => 'Marketing campaigns, product launches, trade shows.'],
];

$materials = [
    ['name' => 'Paper Types', 'detail' => 'Matte, Gloss, Kraft, Textured, Recycled'],
    ['name' => 'Paper Weight', 'detail' => '80 GSM to 400 GSM'],
    ['name' => 'Finishes', 'detail' => 'Matte Lamination, Gloss Lamination, Spot UV, Aqueous Coating'],
    ['name' => 'Special Effects', 'detail' => 'Foil Stamping (Gold/Silver/Rose Gold), Embossing, Debossing, Die-Cutting'],
    ['name' => 'Binding Options', 'detail' => 'Saddle-Stitch, Perfect Binding, Wire-O, Spiral, Screw-Bound'],
    ['name' => 'Colors', 'detail' => 'Full-color (CMYK), Pantone Matching Available'],
];

$industries = [
    ['name' => 'Startups &amp; SMEs', 'detail' => 'Business cards, letterheads, brochures, presentation folders.'],
    ['name' => 'Corporate Offices', 'detail' => 'ID cards, notepads, diaries, annual reports, stationery.'],
    ['name' => 'Real Estate', 'detail' => 'Brochures, presentation folders, flyers, banners, rack cards.'],
    ['name' => 'Healthcare', 'detail' => 'Prescription pads, patient education brochures, ID cards.'],
    ['name' => 'Education', 'detail' => 'Certificates, brochures, ID cards, event banners, notepads.'],
    ['name' => 'Retail', 'detail' => 'Flyers, posters, banners, standees, loyalty cards.'],
    ['name' => 'Events &amp; Hospitality', 'detail' => 'Menus, place cards, event brochures, banners, standees.'],
];

$bulkFeatures = ['Free Design &amp; Branding Setup', 'Consistent Branding Across All Materials', 'Dedicated Account Manager', 'Volume Discounts'];

$process = [
    ['step' => '01', 'accent' => '#2BACE2', 'title' => 'Share Your Requirements', 'items' => ['Tell us what you need &mdash; products, quantities, and any design files', "Not sure? We'll guide you"]],
    ['step' => '02', 'accent' => '#3DB54A', 'title' => 'Approve the Proof', 'items' => ['We send a digital mockup for every item', 'We print only when you say "Perfect"']],
    ['step' => '03', 'accent' => '#F99E1F', 'title' => 'We Print &amp; Deliver', 'items' => ['We quality-check every piece', 'Shipped to your doorstep in 3&ndash;5 days']],
];

$designItems = [
    ['icon' => 'idcard', 'text' => 'Business card layouts'],
    ['icon' => 'mail', 'text' => 'Letterhead &amp; envelope templates'],
    ['icon' => 'briefcase', 'text' => 'Presentation folder designs'],
    ['icon' => 'book', 'text' => 'Brochures, reports, and catalogues'],
    ['icon' => 'tag', 'text' => 'Complete brand stationery guidelines'],
];

$faqs = [
    ['question' => 'What is the minimum order quantity?', 'answer' => "No minimum! Order 50 cards or 5,000 &mdash; we're flexible."],
    ['question' => 'How long does delivery take?', 'answer' => 'Standard: 3&ndash;5 business days. Express: 1&ndash;2 days (additional cost).'],
    ['question' => 'What file format do you accept?', 'answer' => 'PDF (recommended), AI, PSD, JPEG, PNG. 300 DPI resolution preferred.'],
    ['question' => 'Do you offer bulk discounts?', 'answer' => 'Yes! Volume discounts start at 500+ units. Request a custom quote.'],
    ['question' => 'Can I maintain brand consistency?', 'answer' => "Absolutely. We'll ensure color matching, paper choices, and finishes are consistent across all materials."],
    ['question' => 'Do you provide design services?', 'answer' => 'Yes, free design assistance with every corporate order. Full design services also available.'],
    ['question' => 'Can I get a sample before ordering?', 'answer' => 'Yes. Request a physical sample kit with paper and finish samples.'],
];

$heroIcons = [
    ['icon' => 'briefcase', 'label' => 'Corporate Print Materials'],
];
?>

     <!-- main -->
     <main>
        <!-- banner-->
         <section class="banner">
            <div class="container-fluid nav-shell">
                <div class="row align-items-center banner-hero">
                    <div class="col-lg-6">
                        <p class="eyebrow" data-animate>Corporate Print Materials</p>
                        <h1 class="banner-title" data-animate data-delay="120">
                            Print that <span class="text-gradient-brand">means business</span>.
                        </h1>
                        <p class="banner-text max-width-700" data-animate data-delay="220">
                            Corporate stationery &amp; collaterals that build trust.
                        </p>
                        <p class="banner-text max-width-700" data-animate data-delay="260">
                            Your brand's physical touchpoints say everything about your professionalism.
                            From business cards to annual reports, Mellow Digi delivers premium corporate
                            print materials that make your business look credible, polished, and ready
                            for growth.
                        </p>
                        <ul class="startup-checklist" data-animate data-delay="290">
                            <?php foreach ($promise as $item): ?>
                            <li><?php echo $item; ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="d-flex flex-wrap gap-3" data-animate data-delay="320">
                            <a href="#products" class="btn-hero-cta">Explore Corporate Solutions</a>
                            <a href="#enquiry" class="btn-hero-cta">Get a Bulk Quote</a>
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

         <!-- complete corporate print solutions -->
         <section class="popular-services-section" id="products">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Complete Corporate Print Solutions</p>
                        <h2 class="section-heading">Everything your business needs on paper</h2>
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
                            <p class="text-muted mb-2"><?php echo $product['subtitle']; ?></p>
                            <p><?php echo $product['description']; ?></p>
                            <p class="mb-0"><strong>Best for:</strong> <?php echo $product['bestFor']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ complete corporate print solutions -->

         <!-- material & finish options -->
         <section class="who-we-are">
            <div class="bg-bubble bubble-blue" aria-hidden="true"></div>
            <div class="bg-bubble bubble-green" aria-hidden="true"></div>
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Material &amp; Finish Options</p>
                        <h2 class="section-heading">Quality that reflects your brand</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8" data-animate>
                        <div class="why-card mb-0">
                            <div class="addon-list">
                                <?php foreach ($materials as $m): ?>
                                <div class="addon-row">
                                    <span class="addon-name"><?php echo $m['name']; ?></span>
                                    <span class="addon-price"><?php echo $m['detail']; ?></span>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ material & finish options -->

         <!-- industry use cases -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Industry Use Cases</p>
                        <h2 class="section-heading">Who we serve</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8" data-animate>
                        <div class="why-card mb-0">
                            <div class="addon-list">
                                <?php foreach ($industries as $ind): ?>
                                <div class="addon-row">
                                    <span class="addon-name"><?php echo $ind['name']; ?></span>
                                    <span class="addon-price"><?php echo $ind['detail']; ?></span>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ industry use cases -->

         <!-- custom bulk orders -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row g-4 align-items-stretch">
                    <div class="col-lg-6" data-animate>
                        <div class="why-card why-card-intro h-100 mb-0" style="--accent:#8B5CF6">
                            <h3>Custom Bulk Orders</h3>
                            <p>Need a large volume of stationery for your entire organization? We offer
                            custom bulk pricing for 500+ units.</p>
                        </div>
                    </div>
                    <div class="col-lg-6" data-animate data-delay="90">
                        <div class="why-card h-100 mb-0" style="--accent:#2BACE2">
                            <ul class="startup-checklist">
                                <?php foreach ($bulkFeatures as $feature): ?>
                                <li><?php echo $feature; ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <a href="#enquiry" class="btn-hero-cta">Request a Bulk Quote</a>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ custom bulk orders -->

         <!-- how it works -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">How It Works</p>
                        <h2 class="section-heading">Simple &amp; professional</h2>
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
                                <li><?php echo $item; ?></li>
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
                            <h3>Need a design? We've got you.</h3>
                            <p>No design team? No problem. Mellow Digi offers professional graphic design
                            services for all corporate materials.</p>
                            <p class="mb-0"><strong>Special Offer:</strong> First-time corporate clients get
                            a free design consultation with every order.</p>
                        </div>
                    </div>
                    <div class="col-lg-6" data-animate data-delay="90">
                        <div class="why-card h-100 mb-0" style="--accent:#2BACE2">
                            <h3>What we design</h3>
                            <ul class="startup-checklist">
                                <?php foreach ($designItems as $item): ?>
                                <li><?php echo $item['text']; ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <a href="#enquiry" class="btn-hero-cta">Talk to Our Designer</a>
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
                        <h2 class="section-heading">Quick answers for busy professionals</h2>
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
                            <p>Mellow Digi is a new-age print media startup based in Hyderabad, Telangana.
                            We help startups, SMEs and corporates build their brand through premium,
                            consistent, and high-quality print materials. Small, agile and obsessed with
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
                        <p class="eyebrow">Ready to Elevate Your Corporate Image?</p>
                        <h2 class="section-heading">Let's make your brand unforgettable.</h2>
                        <p class="founder-bio">
                            Your brand deserves to look its best &mdash; from the first business card to
                            the last annual report. Mellow Digi delivers professional, consistent, and
                            high-quality corporate print materials that build trust and credibility.
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
                        <a href="contact.html" class="btn-hero-cta">Get a Free Quote Today</a>
                    </div>
                </div>
            </div>
         </section>
         <!--/ cta -->
        <?php include __DIR__ . '/components/enquiry-form.php'; ?>
     </main>
     <!--/ main -->

<?php include __DIR__ . '/components/footer.php'; ?>
