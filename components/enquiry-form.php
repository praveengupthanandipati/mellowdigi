<?php
$enquiryCurrentFile = isset($pageUrl) ? basename(parse_url($pageUrl, PHP_URL_PATH)) : '';
?>
         <!-- enquiry form -->
         <section class="bottom-services-section" id="enquiry">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Get In Touch</p>
                        <h2 class="section-heading">Send us an enquiry</h2>
                        <p class="banner-text max-width-700" data-animate data-delay="80">
                            Tell us a bit about your project and we'll get back to you within one
                            business day.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-9" data-animate data-delay="100">
                        <form class="enquiry-form" onsubmit="return false;">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="enquiryName" class="enquiry-label">Full Name</label>
                                    <input type="text" id="enquiryName" name="name" class="enquiry-input" placeholder="Your full name" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="enquiryEmail" class="enquiry-label">Email Address</label>
                                    <input type="email" id="enquiryEmail" name="email" class="enquiry-input" placeholder="you@example.com" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="enquiryPhone" class="enquiry-label">Phone Number</label>
                                    <input type="tel" id="enquiryPhone" name="phone" class="enquiry-input" placeholder="+91 77999 71112">
                                </div>
                                <div class="col-md-6">
                                    <label for="enquiryService" class="enquiry-label">Service</label>
                                    <select id="enquiryService" name="service" class="enquiry-input enquiry-select">
                                        <?php foreach ($siteData['megaMenu'] as $group): ?>
                                        <optgroup label="<?php echo $esc($group['title']); ?>">
                                            <?php foreach ($group['items'] as $item):
                                                $isCurrent = basename(parse_url($item['url'], PHP_URL_PATH)) === $enquiryCurrentFile;
                                            ?>
                                            <option value="<?php echo $esc($item['label']); ?>"<?php echo $isCurrent ? ' selected' : ''; ?>><?php echo $esc($item['label']); ?></option>
                                            <?php endforeach; ?>
                                        </optgroup>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="enquiryMessage" class="enquiry-label">Project Details</label>
                                    <textarea id="enquiryMessage" name="message" class="enquiry-input enquiry-textarea" rows="4" placeholder="Tell us about your project, timeline and budget"></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn-hero-cta">Send Enquiry</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
         </section>
         <!--/ enquiry form -->
