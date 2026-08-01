     <?php
     // Same fallback pattern as header.php, in case footer.php is ever
     // included without index.php having decoded the data file first.
     $siteData = $siteData ?? json_decode(file_get_contents(__DIR__ . '/../data/site-data.json'), true);
     $esc = $esc ?? function ($value) { return htmlspecialchars($value, ENT_QUOTES, 'UTF-8'); };
     ?>
     <!-- footer -->
     <footer class="site-footer">
        <div class="bg-bubble bubble-blue" aria-hidden="true"></div>
        <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
        <div class="container-fluid nav-shell footer-top">
            <div class="row g-4">
                <div class="col-lg-4" data-animate>
                    <a href="index.php" class="footer-brand">
                        <img src="img/logo.svg" alt="MellowDigi" class="footer-logo">
                    </a>
                    <p class="footer-about">
                        A full-service creative team covering photography, video, branding, print,
                        web &amp; mobile and digital marketing — everything a growing brand needs,
                        under one roof.
                    </p>
                    <div class="footer-socials">
                        <?php foreach ($siteData['footer']['socials'] as $social): ?>
                        <a href="<?php echo $esc($social['url']); ?>" aria-label="<?php echo $esc($social['label']); ?>">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><?php echo $siteData['icons'][$social['icon']]; ?></svg>
                        </a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-6 col-lg-2" data-animate data-delay="80">
                    <h6 class="footer-heading">Quick Links</h6>
                    <ul class="footer-links">
                        <?php foreach ($siteData['footer']['quickLinks'] as $link): ?>
                        <li><a href="<?php echo $esc($link['url']); ?>"><?php echo $esc($link['label']); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="col-6 col-lg-2" data-animate data-delay="140">
                    <h6 class="footer-heading">Services</h6>
                    <ul class="footer-links">
                        <?php foreach ($siteData['footer']['services'] as $link): ?>
                        <li><a href="<?php echo $esc($link['url']); ?>"><?php echo $link['label']; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="col-lg-4" data-animate data-delay="200">
                    <h6 class="footer-heading">Get in Touch</h6>
                    <ul class="footer-contact">
                        <?php foreach ($siteData['footer']['contact'] as $entry): ?>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><?php echo $siteData['icons'][$entry['icon']]; ?></svg>
                            <span><?php echo $esc($entry['text']); ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <a href="contact.php" class="btn-hero-cta footer-cta">Let's Connect</a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container-fluid nav-shell footer-bottom-inner">
                <p>&copy; <?php echo date('Y'); ?> MellowDigi. All rights reserved.</p>
                <div class="footer-legal">
                    <a href="privacy.php">Privacy Policy</a>
                    <a href="terms.php">Terms of Service</a>
                </div>
            </div>
        </div>
     </footer>
     <!--/ footer -->

     <!-- floating actions -->
     <a href="https://wa.me/910000000000" class="whatsapp-float" target="_blank" rel="noopener" aria-label="Chat with us on WhatsApp">
        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 0 0-8.6 15L2 22l5.2-1.4A10 10 0 1 0 12 2zm5.6 14.3c-.2.6-1.2 1.2-1.8 1.3-.5.1-1.1.1-1.7-.1-.4-.1-.9-.3-1.6-.6-2.7-1.2-4.5-3.9-4.6-4.1-.1-.2-1.1-1.4-1.1-2.7 0-1.3.7-1.9.9-2.2.2-.2.5-.3.7-.3h.5c.2 0 .4 0 .6.4.2.5.7 1.8.8 1.9.1.2.1.3 0 .5-.1.2-.1.3-.3.5-.1.2-.3.4-.4.5-.1.1-.3.3-.1.6.2.3.8 1.3 1.7 2.1 1.2 1 2.1 1.4 2.5 1.5.2.1.4.1.5-.1.2-.2.7-.8.9-1 .2-.2.3-.2.6-.1.2.1 1.5.7 1.8.9.3.1.4.2.5.3.1.2.1.7-.1 1.3z"/></svg>
     </a>
     <button type="button" class="back-to-top" id="backToTop" aria-label="Back to top">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 19V5M5 12l7-7 7 7"/></svg>
     </button>

     <script src="js/jquery-4.0.0.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/swiper.min.js"></script>
     <script src="js/script.js"></script>

</body>
</html>
