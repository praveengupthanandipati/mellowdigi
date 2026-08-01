<?php
$siteData = json_decode(file_get_contents(__DIR__ . '/data/site-data.json'), true);

$pageTitle       = 'Privacy Policy | MellowDigi';
$pageDescription = 'Read the MellowDigi Privacy Policy to learn how we collect, use, disclose and safeguard your information across our website and services.';
$pageKeywords    = 'privacy policy, MellowDigi privacy, data protection, GDPR, CCPA';
$pageUrl         = 'https://www.mellowdigi.com/privacy.php';
include __DIR__ . '/components/header.php';

$tocItems = [
    ['id' => 'information-we-collect', 'label' => '1. Information We Collect'],
    ['id' => 'how-we-use', 'label' => '2. How We Use Your Information'],
    ['id' => 'data-sharing', 'label' => '3. Data Sharing and Disclosure'],
    ['id' => 'data-security', 'label' => '4. Data Security'],
    ['id' => 'your-rights', 'label' => '5. Your Data Protection Rights'],
    ['id' => 'data-retention', 'label' => '6. Retention of Data'],
    ['id' => 'third-party-links', 'label' => '7. Third-Party Links'],
    ['id' => 'childrens-privacy', 'label' => "8. Children's Privacy"],
    ['id' => 'contact-us', 'label' => '9. Contact Us'],
    ['id' => 'changes-to-policy', 'label' => '10. Changes to This Policy'],
    ['id' => 'client-ip-addendum', 'label' => 'Addendum: Client Projects (IP)'],
];
?>

     <!-- main -->
     <main>
        <!-- banner-->
         <section class="banner">
            <div class="container-fluid nav-shell">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-8">
                        <p class="eyebrow">Legal</p>
                        <h1 class="banner-title">
                            Privacy <span class="text-gradient-brand">Policy</span>
                        </h1>
                        <p class="banner-text mx-auto max-width-700">
                            How MellowDigi collects, uses, discloses and safeguards your
                            information when you visit our website or engage our services.
                        </p>
                        <span class="tutorial-level-badge">Last Updated: August 1, 2026</span>
                    </div>
                </div>
            </div>
         </section>
         <!--/ banner-->

         <!-- privacy policy content -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row g-5">
                    <div class="col-lg-4">
                        <div class="legal-toc">
                            <p class="eyebrow mb-0">On This Page</p>
                            <nav class="legal-toc-nav">
                                <?php foreach ($tocItems as $item): ?>
                                <a href="#<?php echo $esc($item['id']); ?>"><?php echo $esc($item['label']); ?></a>
                                <?php endforeach; ?>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="legal-content">
                            <p>
                                Mellow Digi (&ldquo;we,&rdquo; &ldquo;us,&rdquo; or &ldquo;our&rdquo;)
                                operates the website
                                <a class="contact-info-value" href="https://www.mellowdigi.com">www.mellowdigi.com</a>
                                and provides services including Animation, Web Development, Graphic
                                Designing, Web Designing, Mobile Application Development and Digital
                                Solutions (collectively, the &ldquo;Services&rdquo;). This Privacy
                                Policy explains how we collect, use, disclose and safeguard your
                                information when you visit our website or engage our services.
                            </p>
                            <p>
                                By using our Services, you agree to the collection and use of
                                information in accordance with this policy.
                            </p>

                            <h2 id="information-we-collect">1. Information We Collect</h2>
                            <p>We collect various types of information to provide and improve our Services to you.</p>

                            <h3>A. Personal Data</h3>
                            <p>While using our Services, we may ask you to provide us with personally identifiable information that can be used to contact or identify you. This includes:</p>
                            <ul>
                                <li><strong>Identity Data:</strong> Name, company name, job title.</li>
                                <li><strong>Contact Data:</strong> Email address, phone number, billing address and shipping address.</li>
                                <li><strong>Project Data:</strong> Specific requirements, briefs, sketches or raw materials provided for the purpose of project delivery.</li>
                            </ul>

                            <h3>B. Usage Data</h3>
                            <p>We automatically collect information when you visit our website, such as:</p>
                            <ul>
                                <li>Your device&rsquo;s Internet Protocol (IP) address.</li>
                                <li>Browser type and version.</li>
                                <li>Pages of our website that you visit and the time spent on those pages.</li>
                                <li>The referring URL (the site that led you to us).</li>
                                <li>Diagnostic data, such as crash logs.</li>
                            </ul>

                            <h3>C. Cookies and Tracking Technologies</h3>
                            <p>
                                We use cookies and similar tracking technologies to track activity on
                                our website and hold certain information. These may include session
                                cookies (to operate our service) and preference cookies (to remember
                                your settings). You can instruct your browser to refuse all cookies
                                or to indicate when a cookie is being sent.
                            </p>

                            <h2 id="how-we-use">2. How We Use Your Information</h2>
                            <p>Mellow Digi uses the collected data for various purposes:</p>
                            <ul>
                                <li><strong>To Deliver Services:</strong> To develop, design and deliver animations, websites, graphics and mobile applications you have commissioned.</li>
                                <li><strong>Client Communication:</strong> To respond to inquiries, send project updates, invoices and technical notices.</li>
                                <li><strong>Portfolio Showcase:</strong> To display final project results (with your explicit consent) in our portfolio or social media channels.</li>
                                <li><strong>Improvement:</strong> To analyze usage trends to improve user experience on our website and the quality of our services.</li>
                                <li><strong>Legal Compliance:</strong> To comply with legal obligations, resolve disputes and enforce our agreements.</li>
                            </ul>

                            <h2 id="data-sharing">3. Data Sharing and Disclosure</h2>
                            <p>We respect your privacy. We do not sell or rent your personal data to third parties. However, we may share your data in the following situations:</p>
                            <ul>
                                <li><strong>Service Providers:</strong> We may share data with trusted third-party vendors who assist us in operating our business (e.g., hosting providers, cloud storage, email delivery services, payment gateways). These parties are obligated to keep your data confidential.</li>
                                <li><strong>Business Transfers:</strong> If Mellow Digi is involved in a merger, acquisition or asset sale, your data may be transferred. We will notify you before your data is transferred and becomes subject to a different Privacy Policy.</li>
                                <li><strong>Legal Obligations:</strong> We may disclose your data if required to do so by law or in response to valid requests by public authorities (e.g., a court or government agency).</li>
                            </ul>

                            <h2 id="data-security">4. Data Security</h2>
                            <p>
                                The security of your data is important to us. We implement a variety
                                of security measures to maintain the safety of your personal
                                information, including encrypted connections (SSL) and restricted
                                access to internal databases. However, remember that no method of
                                transmission over the internet is 100% secure. While we strive to use
                                commercially acceptable means to protect your data, we cannot
                                guarantee its absolute security.
                            </p>

                            <h2 id="your-rights">5. Your Data Protection Rights (GDPR &amp; CCPA)</h2>
                            <p>Depending on your location (e.g., EU, UK, California), you may have specific rights regarding your personal data:</p>
                            <ul>
                                <li><strong>Right to Access:</strong> You have the right to request copies of your personal data.</li>
                                <li><strong>Right to Rectification:</strong> You have the right to request that we correct any inaccurate information.</li>
                                <li><strong>Right to Erasure (&ldquo;Right to be Forgotten&rdquo;):</strong> You have the right to request that we delete your personal data, subject to certain conditions (e.g., outstanding legal obligations).</li>
                                <li><strong>Right to Object:</strong> You have the right to object to our processing of your data for marketing purposes.</li>
                                <li><strong>Right to Data Portability:</strong> You have the right to request that we transfer the data we have collected to another organization, or directly to you.</li>
                            </ul>
                            <p>To exercise any of these rights, please contact us using the details provided in Section 9.</p>

                            <h2 id="data-retention">6. Retention of Data</h2>
                            <p>
                                We will retain your personal data only for as long as is necessary
                                for the purposes set out in this Privacy Policy. We may retain and
                                use your data to the extent necessary to comply with our legal
                                obligations (e.g., tax laws), resolve disputes and enforce our legal
                                agreements and policies.
                            </p>

                            <h2 id="third-party-links">7. Third-Party Links</h2>
                            <p>
                                Our website or client deliverables may contain links to third-party
                                sites (e.g., social media, fonts, plugins). We are not responsible
                                for the privacy practices or the content of these external sites. We
                                encourage you to review the privacy policy of every site you visit.
                            </p>

                            <h2 id="childrens-privacy">8. Children's Privacy</h2>
                            <p>
                                Our Services are not directed at individuals under the age of 13. We
                                do not knowingly collect personally identifiable information from
                                children. If you are a parent or guardian and you are aware that your
                                child has provided us with personal data, please contact us.
                            </p>

                            <h2 id="contact-us">9. Contact Us</h2>
                            <p>If you have any questions, concerns or requests regarding this Privacy Policy, please contact us at:</p>
                            <ul>
                                <li><strong>Mellow Digi</strong></li>
                                <li>Email: <a class="contact-info-value" href="mailto:info@mellowdigi.com">info@mellowdigi.com</a></li>
                                <li>Address: Hyderabad, Telangana, India</li>
                                <li>Phone: <a class="contact-info-value" href="tel:+917799971112">+91 77999 71112</a></li>
                            </ul>

                            <h2 id="changes-to-policy">10. Changes to This Policy</h2>
                            <p>
                                We may update our Privacy Policy from time to time. We will notify
                                you of any changes by posting the new Privacy Policy on this page and
                                updating the &ldquo;Last Updated&rdquo; date at the top. We encourage
                                you to review this page periodically for any changes.
                            </p>

                            <hr>

                            <h2 id="client-ip-addendum">Addendum for Client Projects (Intellectual Property)</h2>
                            <p>
                                For client deliverables, any materials, source code, designs or
                                animations developed by Mellow Digi remain the property of Mellow
                                Digi until full payment has been received. We will not retain or use
                                client-provided proprietary assets (e.g., logos, trademarks) for
                                purposes other than fulfilling the project scope, except with
                                explicit written consent.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ privacy policy content -->
     </main>
     <!--/ main -->

<?php include __DIR__ . '/components/footer.php'; ?>
