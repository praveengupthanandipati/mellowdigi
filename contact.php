<?php
$siteData = json_decode(file_get_contents(__DIR__ . '/data/site-data.json'), true);

$pageTitle       = 'Contact Us | MellowDigi';
$pageDescription = "Get in touch with MellowDigi for branding, video, photography, web and digital marketing projects. Call, email or send us a message &mdash; we reply within one business day.";
$pageKeywords    = 'contact MellowDigi, get a quote, creative agency contact, Hyderabad digital agency';
$pageUrl         = 'https://www.mellowdigi.com/contact.php';
include __DIR__ . '/components/header.php';

$heroIcons = [
    ['icon' => 'call', 'label' => "Let's Start a Conversation"],
];

$contactInfo = [
    ['icon' => 'call', 'accent' => '#2BACE2', 'title' => 'Phone', 'value' => '+91 77999 71112', 'link' => 'tel:+917799971112'],
    ['icon' => 'mail', 'accent' => '#3DB54A', 'title' => 'Email', 'value' => 'info@mellowdigi.com', 'link' => 'mailto:info@mellowdigi.com'],
    ['icon' => 'pin', 'accent' => '#F99E1F', 'title' => 'Office Address', 'value' => 'Hyderabad, Telangana, India', 'link' => null],
    ['icon' => 'clock', 'accent' => '#8B5CF6', 'title' => 'Office Timings', 'value' => 'Mon &ndash; Sat, 9:00 AM &ndash; 9:00 PM IST', 'link' => null],
];
?>

     <!-- main -->
     <main>
        <!-- banner-->
         <section class="banner">
            <div class="container-fluid nav-shell">
                <div class="row align-items-center banner-hero">
                    <div class="col-lg-6">
                        <p class="eyebrow" data-animate>Contact Us</p>
                        <h1 class="banner-title" data-animate data-delay="120">
                            Let's start a <span class="text-gradient-brand">conversation</span>.
                        </h1>
                        <p class="banner-text max-width-700" data-animate data-delay="220">
                            Have a project in mind, or just want to say hello? Reach out by phone,
                            email or the form below &mdash; our team typically replies within one
                            business day.
                        </p>
                        <div class="d-flex flex-wrap gap-3 mb-4" data-animate data-delay="280">
                            <a href="tel:+917799971112" class="btn-hero-cta">Call Us</a>
                            <a href="mailto:info@mellowdigi.com" class="btn-hero-cta">Email Us</a>
                        </div>
                        <span class="tutorial-level-badge" data-animate data-delay="340">Response Time: Within 1 Business Hour</span>
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

         <!-- contact info -->
         <section class="bottom-services-section pb-0">
            <div class="container-fluid nav-shell">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
                    <?php foreach ($contactInfo as $i => $item): ?>
                    <div class="col" data-animate data-delay="<?php echo ($i % 4) * 90; ?>">
                        <div class="why-card h-100 mb-0" style="--accent:<?php echo $esc($item['accent']); ?>">
                            <span class="popular-service-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><?php echo $siteData['icons'][$item['icon']]; ?></svg>
                            </span>
                            <h3><?php echo $esc($item['title']); ?></h3>
                            <?php if ($item['link']): ?>
                            <a class="contact-info-value" href="<?php echo $esc($item['link']); ?>"><?php echo $item['value']; ?></a>
                            <?php else: ?>
                            <p class="contact-info-value mb-0"><?php echo $item['value']; ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ contact info -->

         <!-- contact form & map -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Get In Touch</p>
                        <h2 class="section-heading">Send us a message</h2>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6" data-animate>
                        <div class="contact-form-card">
                            <form class="enquiry-form" id="contactForm" novalidate>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="contactName" class="enquiry-label">Full Name</label>
                                        <input type="text" id="contactName" name="name" class="enquiry-input" placeholder="Your full name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="contactEmail" class="enquiry-label">Email Address</label>
                                        <input type="email" id="contactEmail" name="email" class="enquiry-input" placeholder="you@example.com" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="contactPhone" class="enquiry-label">Phone Number</label>
                                        <input type="tel" id="contactPhone" name="phone" class="enquiry-input" placeholder="+91 77999 71112">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="contactSubject" class="enquiry-label">Subject</label>
                                        <input type="text" id="contactSubject" name="subject" class="enquiry-input" placeholder="What is this about?">
                                    </div>
                                    <div class="col-12">
                                        <label for="contactMessage" class="enquiry-label">Message</label>
                                        <textarea id="contactMessage" name="message" class="enquiry-input enquiry-textarea" rows="5" placeholder="Tell us about your project, timeline and budget" required></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn-hero-cta" id="contactSubmitBtn">Send Message</button>
                                    </div>
                                </div>
                                <p class="form-error-message" id="contactError" hidden></p>
                            </form>
                            <div class="form-success-message" id="contactSuccess" hidden>
                                <span class="form-success-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                                </span>
                                <h3>Message Sent!</h3>
                                <p id="contactSuccessText">Thanks for reaching out &mdash; our team will get back to you within one business day.</p>
                                <button type="button" class="btn-hero-cta" id="contactResetBtn">Send Another Message</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-animate data-delay="100">
                        <div class="contact-map-wrap">
                            <iframe src="https://maps.google.com/maps?q=Hyderabad,Telangana,India&z=13&output=embed" title="MellowDigi office location" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ contact form & map -->
     </main>
     <!--/ main -->

<?php include __DIR__ . '/components/footer.php'; ?>

<script>
(function () {
    var form = document.getElementById('contactForm');
    var successBox = document.getElementById('contactSuccess');
    var successText = document.getElementById('contactSuccessText');
    var errorBox = document.getElementById('contactError');
    var submitBtn = document.getElementById('contactSubmitBtn');
    var resetBtn = document.getElementById('contactResetBtn');
    if (!form) return;

    form.addEventListener('submit', function (e) {
        e.preventDefault();
        errorBox.hidden = true;
        submitBtn.disabled = true;
        var originalLabel = submitBtn.textContent;
        submitBtn.textContent = 'Sending...';

        fetch('send-contact.php', {
            method: 'POST',
            body: new FormData(form)
        })
            .then(function (res) { return res.json().then(function (data) { return { ok: res.ok, data: data }; }); })
            .then(function (result) {
                if (result.ok && result.data.success) {
                    successText.textContent = result.data.message;
                    form.hidden = true;
                    successBox.hidden = false;
                } else {
                    errorBox.textContent = result.data.message || 'Something went wrong. Please try again.';
                    errorBox.hidden = false;
                }
            })
            .catch(function () {
                errorBox.textContent = "We couldn't reach the server. Please check your connection and try again.";
                errorBox.hidden = false;
            })
            .finally(function () {
                submitBtn.disabled = false;
                submitBtn.textContent = originalLabel;
            });
    });

    if (resetBtn) {
        resetBtn.addEventListener('click', function () {
            form.reset();
            form.hidden = false;
            successBox.hidden = true;
        });
    }
})();
</script>
