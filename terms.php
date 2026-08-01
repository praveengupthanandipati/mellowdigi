<?php
$siteData = json_decode(file_get_contents(__DIR__ . '/data/site-data.json'), true);

$pageTitle       = 'Terms &amp; Conditions | MellowDigi';
$pageDescription = "Read the Terms and Conditions that govern the use of MellowDigi's website and the procurement of our design, development and digital services.";
$pageKeywords    = 'terms and conditions, MellowDigi terms, service agreement, creative agency terms';
$pageUrl         = 'https://www.mellowdigi.com/terms.php';
include __DIR__ . '/components/header.php';

$tocItems = [
    ['id' => 'definitions', 'label' => '1. Definitions'],
    ['id' => 'acceptance-of-terms', 'label' => '2. Acceptance of Terms'],
    ['id' => 'scope-of-work', 'label' => '3. Scope of Work and Proposals'],
    ['id' => 'fees-and-payment', 'label' => '4. Fees, Invoicing &amp; Payment'],
    ['id' => 'intellectual-property', 'label' => '5. Intellectual Property Rights'],
    ['id' => 'timeline-and-delivery', 'label' => '6. Project Timeline &amp; Delivery'],
    ['id' => 'client-responsibilities', 'label' => '7. Client Responsibilities'],
    ['id' => 'testing-and-acceptance', 'label' => '8. Testing, Acceptance &amp; Revisions'],
    ['id' => 'warranty-and-support', 'label' => '9. Warranty and Support'],
    ['id' => 'limitation-of-liability', 'label' => '10. Limitation of Liability'],
    ['id' => 'indemnification', 'label' => '11. Indemnification'],
    ['id' => 'confidentiality', 'label' => '12. Confidentiality'],
    ['id' => 'termination', 'label' => '13. Termination'],
    ['id' => 'force-majeure', 'label' => '14. Force Majeure'],
    ['id' => 'governing-law', 'label' => '15. Governing Law &amp; Disputes'],
    ['id' => 'entire-agreement', 'label' => '16. Entire Agreement'],
    ['id' => 'amendments', 'label' => '17. Amendments'],
    ['id' => 'severability', 'label' => '18. Severability'],
    ['id' => 'waiver', 'label' => '19. Waiver'],
    ['id' => 'contact-information', 'label' => '20. Contact Information'],
    ['id' => 'key-terms-summary', 'label' => 'Summary of Key Terms'],
];

$keyTerms = [
    ['aspect' => 'Payment', 'policy' => '50% advance before work begins; the remaining balance is due upon completion or before final delivery of source files. Late fees apply after 30 days.'],
    ['aspect' => 'IP Ownership', 'policy' => 'Transfers to the Client only upon full and final payment of all fees due.'],
    ['aspect' => 'Revisions', 'policy' => '2 rounds are included in the Proposal; additional revisions beyond this are billed at our standard hourly rate.'],
    ['aspect' => 'Warranty', 'policy' => '90 days for coding and functionality defects. Excludes third-party updates and post-delivery client modifications.'],
    ['aspect' => 'Liability Cap', 'policy' => 'Limited to the total fees paid by the Client for the specific Project giving rise to the claim.'],
    ['aspect' => 'Governing Law', 'policy' => 'The laws of Telangana, India, with disputes subject to arbitration in Hyderabad, India.'],
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
                            Terms &amp; <span class="text-gradient-brand">Conditions</span>
                        </h1>
                        <p class="banner-text mx-auto max-width-700">
                            The terms that govern your use of our website and the procurement of
                            our design, development and digital services.
                        </p>
                        <span class="tutorial-level-badge">Last Updated: August 1, 2026</span>
                    </div>
                </div>
            </div>
         </section>
         <!--/ banner-->

         <!-- terms & conditions content -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row g-5">
                    <div class="col-lg-4">
                        <div class="legal-toc">
                            <p class="eyebrow mb-0">On This Page</p>
                            <nav class="legal-toc-nav">
                                <?php foreach ($tocItems as $item): ?>
                                <a href="#<?php echo $esc($item['id']); ?>"><?php echo $item['label']; ?></a>
                                <?php endforeach; ?>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="legal-content">
                            <p>
                                Welcome to Mellow Digi (&ldquo;we,&rdquo; &ldquo;us,&rdquo; or
                                &ldquo;our&rdquo;). These Terms and Conditions (&ldquo;Terms&rdquo;)
                                govern your use of our website and the procurement of our Services,
                                including but not limited to Animation, Web Development, Graphic
                                Designing, Web Designing, Mobile Application Development and Digital
                                Solutions (collectively, the &ldquo;Services&rdquo;).
                            </p>
                            <p>
                                By accessing our website, placing an order or engaging our Services,
                                you (&ldquo;Client,&rdquo; &ldquo;you,&rdquo; or &ldquo;your&rdquo;)
                                agree to be bound by these Terms. Please read them carefully. If you
                                do not agree with any part of these Terms, you must not use our
                                Services.
                            </p>

                            <h2 id="definitions">1. Definitions</h2>
                            <ul>
                                <li><strong>&ldquo;Agreement&rdquo;</strong> means the contract between Mellow Digi and the Client comprising these Terms, the Project Proposal/Quote, and any Statement of Work (SOW).</li>
                                <li><strong>&ldquo;Deliverables&rdquo;</strong> means the final digital products, designs, source code, animations, or any other materials developed by Mellow Digi for the Client.</li>
                                <li><strong>&ldquo;Project&rdquo;</strong> refers to the specific service engagement outlined in the Proposal.</li>
                                <li><strong>&ldquo;Proposal&rdquo;</strong> means the written estimate, quote, or scope of work provided by Mellow Digi to the Client.</li>
                            </ul>

                            <h2 id="acceptance-of-terms">2. Acceptance of Terms</h2>
                            <p>By engaging Mellow Digi's Services, you confirm that:</p>
                            <ul>
                                <li>You are at least 18 years old and have the legal capacity to enter into a binding contract.</li>
                                <li>You have the authority to bind your company/organization to these Terms.</li>
                                <li>You have read, understood and agreed to these Terms.</li>
                            </ul>
                            <p>Acceptance occurs when:</p>
                            <ul>
                                <li>You sign the Proposal electronically or physically; OR</li>
                                <li>You make a payment toward the Project; OR</li>
                                <li>You provide written or verbal confirmation to proceed with the Project.</li>
                            </ul>

                            <h2 id="scope-of-work">3. Scope of Work and Proposals</h2>
                            <ul>
                                <li>All work performed by Mellow Digi shall be based on the Proposal provided and accepted by the Client.</li>
                                <li>The Proposal will define the scope, deliverables, timeline, pricing and milestones.</li>
                                <li>Any changes to the scope (&ldquo;Change Requests&rdquo;) must be submitted in writing and may result in additional charges and timeline adjustments. Mellow Digi reserves the right to accept or decline Change Requests.</li>
                                <li>Additional work beyond the defined scope will be billed at our standard hourly rates or via a separate supplementary Proposal.</li>
                            </ul>

                            <h2 id="fees-and-payment">4. Fees, Invoicing, and Payment Terms</h2>
                            <ul>
                                <li><strong>Fees:</strong> All fees are quoted in INR (&#8377;) and are exclusive of applicable taxes (e.g., GST) unless otherwise stated.</li>
                                <li><strong>Invoicing:</strong> We issue invoices upon commencement of the Project, upon achievement of milestones, and upon final delivery, as outlined in the Proposal.</li>
                            </ul>
                            <p>Payment Schedule: Typically, we require:</p>
                            <ul>
                                <li>50% Advance Payment before work commences (or as specified in the Proposal).</li>
                                <li>Remaining 50% (or milestone-based installments) due upon completion or before final delivery of source files.</li>
                            </ul>
                            <ul>
                                <li><strong>Late Payments:</strong> Payments not received within 30 days of the due date may incur a late fee of 1.5% per month (or the maximum allowed by law) on the outstanding balance.</li>
                                <li><strong>Suspension:</strong> We reserve the right to suspend work on a Project if payment is delayed by more than 30 days, without liability to the Client.</li>
                            </ul>

                            <h2 id="intellectual-property">5. Intellectual Property Rights</h2>
                            <h3>A. Ownership of Deliverables</h3>
                            <p>
                                Upon full and final payment of all fees due under the Proposal,
                                Mellow Digi assigns to the Client all ownership rights to the
                                specific Deliverables created for the Project.
                            </p>
                            <p>
                                This excludes any pre-existing materials, third-party plugins, fonts,
                                frameworks or open-source software used in the Project, which remain
                                the property of their respective owners.
                            </p>
                            <h3>B. Mellow Digi's Rights</h3>
                            <ul>
                                <li>We retain the right to use any ideas, concepts, techniques and know-how developed during the Project for future projects.</li>
                                <li>We reserve the right to display the final work in our portfolio, social media and marketing materials unless the Client requests in writing to keep the Project confidential (subject to a separate Non-Disclosure Agreement).</li>
                            </ul>
                            <h3>C. Client Content</h3>
                            <p>
                                The Client warrants that any content (text, images, logos,
                                trademarks, videos) provided to Mellow Digi is owned by the Client or
                                used with proper licensing. The Client indemnifies Mellow Digi against
                                any claims of copyright infringement arising from Client-provided
                                content.
                            </p>

                            <h2 id="timeline-and-delivery">6. Project Timeline and Delivery</h2>
                            <ul>
                                <li><strong>Estimated Timelines:</strong> All deadlines provided in the Proposal are estimates and not guarantees unless expressly stated as &ldquo;hard deadlines&rdquo; and agreed upon in writing.</li>
                                <li><strong>Client Delays:</strong> The timeline shall be extended by any delays caused by the Client, including failure to provide required content, feedback or approvals within 5 business days of request, and Change Requests that alter the original scope.</li>
                                <li><strong>Delivery:</strong> Deliverables will be delivered via email, cloud storage link (e.g., Google Drive, Dropbox), or via our project management platform.</li>
                            </ul>

                            <h2 id="client-responsibilities">7. Client Responsibilities</h2>
                            <p>The Client agrees to:</p>
                            <ul>
                                <li>Provide all necessary content, materials, access credentials and feedback in a timely manner.</li>
                                <li>Designate a single point of contact for approvals and communications.</li>
                                <li>Cooperate with Mellow Digi in good faith to facilitate the successful completion of the Project.</li>
                                <li>Test and approve final deliverables within 7 days of receiving them. If no feedback is received within this period, the work shall be deemed accepted.</li>
                            </ul>

                            <h2 id="testing-and-acceptance">8. Testing, Acceptance, and Revisions</h2>
                            <ul>
                                <li><strong>Quality Assurance:</strong> Mellow Digi performs rigorous testing on websites and applications. However, we cannot guarantee that the software or website will be error-free under all conditions or across all platforms and browsers.</li>
                                <li><strong>Revision Rounds:</strong> The Proposal includes a specific number of revision rounds (e.g., 2 rounds of design revisions). Additional revisions beyond this limit will be billed at our hourly rate.</li>
                                <li><strong>Acceptance:</strong> After final delivery, the Client has 7 days to conduct acceptance testing. If no issues are reported, the Deliverables are considered &ldquo;Accepted.&rdquo;</li>
                            </ul>

                            <h2 id="warranty-and-support">9. Warranty and Support</h2>
                            <h3>A. Limited Warranty</h3>
                            <p>
                                Mellow Digi warrants that the Deliverables will substantially conform
                                to the specifications set out in the Proposal for a period of 90 days
                                from the date of final delivery (the &ldquo;Warranty Period&rdquo;).
                                This warranty covers defects in coding/functionality and
                                incompatibility with the agreed-upon technologies.
                            </p>
                            <p>Exclusions: The warranty does not cover:</p>
                            <ul>
                                <li>Issues caused by third-party software updates (e.g., WordPress core updates, browser updates).</li>
                                <li>Errors resulting from modifications made by the Client or third parties after delivery.</li>
                                <li>Hosting environment issues, server misconfigurations, or domain-related problems.</li>
                            </ul>
                            <h3>B. Post-Warranty Support</h3>
                            <p>
                                After the Warranty Period, we offer ongoing support and maintenance
                                at our standard hourly rates or via a separate Maintenance Retainer
                                Agreement.
                            </p>

                            <h2 id="limitation-of-liability">10. Limitation of Liability</h2>
                            <p>To the maximum extent permitted by law:</p>
                            <ul>
                                <li><strong>No Consequential Damages:</strong> Mellow Digi shall not be liable for any indirect, incidental, special, consequential or punitive damages, including but not limited to loss of profits, revenue, data or business opportunities arising out of or related to the use of our Services.</li>
                                <li><strong>Cap on Liability:</strong> Our total liability to the Client, whether in contract, tort (including negligence), or otherwise, shall not exceed the total fees paid by the Client to Mellow Digi for the specific Project giving rise to the claim.</li>
                            </ul>
                            <p>This limitation applies even if Mellow Digi has been advised of the possibility of such damages.</p>

                            <h2 id="indemnification">11. Indemnification</h2>
                            <p>The Client agrees to indemnify and hold Mellow Digi harmless from any and all claims, damages, losses, liabilities and expenses (including legal fees) arising out of:</p>
                            <ul>
                                <li>The Client's breach of these Terms.</li>
                                <li>The Client's use of any Deliverables in violation of applicable laws.</li>
                                <li>Any claim that Client-provided content infringes on third-party intellectual property rights.</li>
                            </ul>

                            <h2 id="confidentiality">12. Confidentiality</h2>
                            <p>Both parties agree to keep confidential any proprietary or sensitive information disclosed during the course of the Project (&ldquo;Confidential Information&rdquo;). This obligation does not apply to:</p>
                            <ul>
                                <li>Information that is or becomes publicly available.</li>
                                <li>Information independently developed by either party.</li>
                                <li>Information required to be disclosed by law.</li>
                            </ul>

                            <h2 id="termination">13. Termination</h2>
                            <h3>A. Termination by Client</h3>
                            <p>The Client may terminate the Project at any time by providing written notice. However:</p>
                            <ul>
                                <li>The Client shall pay for all work completed up to the date of termination (calculated on a pro-rata basis or according to milestones achieved).</li>
                                <li>Any advance payments are non-refundable.</li>
                            </ul>
                            <h3>B. Termination by Mellow Digi</h3>
                            <p>We may terminate the Agreement with immediate effect if:</p>
                            <ul>
                                <li>The Client fails to make any payment when due.</li>
                                <li>The Client breaches any material term of these Terms and fails to remedy it within 7 days of written notice.</li>
                                <li>The Client becomes insolvent or files for bankruptcy.</li>
                            </ul>

                            <h2 id="force-majeure">14. Force Majeure</h2>
                            <p>
                                Neither party shall be liable for any delay or failure in
                                performance due to causes beyond their reasonable control, including
                                but not limited to acts of God, natural disasters, war, terrorism,
                                strikes, pandemics, government regulations, or internet outages. The
                                affected party shall notify the other party as soon as reasonably
                                possible.
                            </p>

                            <h2 id="governing-law">15. Governing Law and Dispute Resolution</h2>
                            <ul>
                                <li><strong>Governing Law:</strong> These Terms shall be governed by and construed in accordance with the laws of Telangana, India, without regard to its conflict of law principles.</li>
                                <li><strong>Dispute Resolution:</strong> In the event of a dispute, the parties shall first attempt to resolve the matter through good-faith negotiations. If negotiations fail, the dispute shall be submitted to binding arbitration in Hyderabad, India, in accordance with the Arbitration and Conciliation Act, 1996.</li>
                            </ul>

                            <h2 id="entire-agreement">16. Entire Agreement</h2>
                            <p>
                                These Terms, together with the Proposal and any SOW, constitute the
                                entire Agreement between Mellow Digi and the Client and supersede all
                                prior or contemporaneous communications, representations or
                                agreements, whether oral or written.
                            </p>

                            <h2 id="amendments">17. Amendments</h2>
                            <p>
                                We reserve the right to update these Terms at any time. The latest
                                version will be posted on our website with the &ldquo;Last
                                Updated&rdquo; date. For ongoing Projects, significant changes will
                                be notified to the Client via email.
                            </p>

                            <h2 id="severability">18. Severability</h2>
                            <p>
                                If any provision of these Terms is held to be invalid or
                                unenforceable, the remaining provisions shall continue in full force
                                and effect.
                            </p>

                            <h2 id="waiver">19. Waiver</h2>
                            <p>
                                The failure of either party to enforce any right or provision of
                                these Terms shall not constitute a waiver of such right or provision
                                in the future.
                            </p>

                            <h2 id="contact-information">20. Contact Information</h2>
                            <p>For any questions, clarifications, or to provide formal notices regarding these Terms, please contact us:</p>
                            <ul>
                                <li><strong>Mellow Digi</strong></li>
                                <li>Email: <a class="contact-info-value" href="mailto:info@mellowdigi.com">info@mellowdigi.com</a></li>
                                <li>Address: Hyderabad, Telangana, India</li>
                                <li>Phone: <a class="contact-info-value" href="tel:+917799971112">+91 77999 71112</a></li>
                            </ul>

                            <hr>

                            <h2 id="key-terms-summary">Summary of Key Terms (For Quick Reference)</h2>
                            <div class="legal-summary-table">
                                <?php foreach ($keyTerms as $term): ?>
                                <div class="legal-summary-row">
                                    <span class="legal-summary-aspect"><?php echo $esc($term['aspect']); ?></span>
                                    <span class="legal-summary-policy"><?php echo $term['policy']; ?></span>
                                </div>
                                <?php endforeach; ?>
                            </div>

                            <div class="legal-disclaimer">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 9v4M12 17h.01"/><path d="M10.29 3.86 1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/></svg>
                                <p>
                                    <strong>Important Legal Disclaimer:</strong> This document is a
                                    draft template and is intended for informational purposes only.
                                    It does not constitute legal advice. You must have this agreement
                                    reviewed and customized by a qualified attorney or legal
                                    professional who is familiar with the specific laws applicable to
                                    your jurisdiction and business operations.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ terms & conditions content -->
     </main>
     <!--/ main -->

<?php include __DIR__ . '/components/footer.php'; ?>
