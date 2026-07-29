<?php
$siteData = json_decode(file_get_contents(__DIR__ . '/data/site-data.json'), true);

$pageTitle       = 'Corporate & Executive Interviews | MellowDigi';
$pageDescription = 'Exclusive interviews with corporate leaders, CEOs and visionaries. Gain actionable insights on leadership, innovation, strategy and the future of business. Watch, listen or read.';
$pageKeywords    = 'executive interviews, corporate interviews, leadership insights, CEO interviews, business strategy, industry leaders, thought leadership, management, digital transformation, entrepreneurship, C-suite interviews, podcast, video interviews, leadership lessons, business growth, MellowDigi';
$pageUrl         = 'https://www.mellowdigi.com/corporate-executive-interviews.php';
include __DIR__ . '/components/header.php';

$stats = [
    ['number' => '25+', 'label' => 'Executive Interviews'],
    ['number' => '15+', 'label' => 'Industries Covered'],
    ['number' => '100+', 'label' => 'Hours of Wisdom'],
    ['number' => 'Weekly', 'label' => 'New Interviews'],
];

$introPoints = [
    'Real-world insights from the frontlines of business',
    'Proven strategies that have delivered measurable results',
    'Leadership lessons that transcend industries',
    'Behind-the-scenes stories of triumphs, failures and resilience',
];

$categories = [
    ['label' => 'All', 'filter' => 'all'],
    ['label' => 'Marketing &amp; Advertising (6)', 'filter' => 'marketing-advertising'],
    ['label' => 'Technology &amp; AI (5)', 'filter' => 'technology-ai'],
    ['label' => 'Leadership &amp; Management (4)', 'filter' => 'leadership-management'],
    ['label' => 'Finance &amp; Investment (3)', 'filter' => 'finance-investment'],
    ['label' => 'Sustainability &amp; Impact (3)', 'filter' => 'sustainability-impact'],
    ['label' => 'Entrepreneurship &amp; Startups (4)', 'filter' => 'entrepreneurship-startups'],
    ['label' => 'HR &amp; Organizational Culture (3)', 'filter' => 'hr-organizational-culture'],
    ['label' => 'Media &amp; Content Creation (3)', 'filter' => 'media-content-creation'],
    ['label' => 'Healthcare &amp; Biotech (2)', 'filter' => 'healthcare-biotech'],
    ['label' => 'Education &amp; EdTech (2)', 'filter' => 'education-edtech'],
];

$interviews = [
    [
        'icon' => 'megaphone', 'accent' => '#2BACE2', 'filter' => 'marketing-advertising', 'industry' => 'Marketing &amp; Advertising',
        'title' => 'The Future of Digital Marketing with Sarah Mitchell, CMO of TechVibe',
        'description' => 'Sarah Mitchell, Chief Marketing Officer at TechVibe, shares her journey from startup founder to leading marketing strategy for a global tech firm &mdash; covering the evolution of digital marketing, how AI is reshaping strategy, building high-performing remote teams and the importance of ethical marketing.',
        'duration' => '45 mins', 'date' => 'July 2026', 'takeaway' => '7 actionable strategies for modern marketers',
        'quote' => "Marketing isn't about selling anymore; it's about building relationships. The brands that win are the ones that genuinely care about their customers.",
    ],
    [
        'icon' => 'target', 'accent' => '#3DB54A', 'filter' => 'sustainability-impact', 'industry' => 'Energy &amp; Sustainability',
        'title' => 'Leading Through Crisis: Lessons from Rajiv Mehta, CEO of GreenEnergy Solutions',
        'description' => 'Rajiv Mehta took over as CEO of GreenEnergy Solutions during one of the most challenging economic downturns. He shares how he navigated turbulent times, transformed organizational culture and positioned the company for sustainable growth &mdash; from crisis decision-making to leading with empathy and purpose.',
        'duration' => '55 mins', 'date' => 'June 2026', 'takeaway' => '5 leadership principles for uncertain times',
        'quote' => "Crisis doesn't build character; it reveals it. True leaders emerge during the toughest moments.",
    ],
    [
        'icon' => 'network', 'accent' => '#F99E1F', 'filter' => 'technology-ai', 'industry' => 'Technology &amp; Innovation',
        'title' => 'Innovation at Scale with Dr. Ananya Krishnan, Director of R&amp;D at InnovateCorp',
        'description' => "Dr. Ananya Krishnan oversees research and development for one of the world's leading tech conglomerates. She takes us through her journey from academia to corporate innovation leadership &mdash; balancing innovation with business viability and the future of AI in product development.",
        'duration' => '50 mins', 'date' => 'May 2026', 'takeaway' => '6 pillars of sustainable innovation',
        'quote' => "Innovation isn't just about ideas; it's about execution. The best ideas mean nothing without the right team and culture to bring them to life.",
    ],
    [
        'icon' => 'tag', 'accent' => '#8B5CF6', 'filter' => 'entrepreneurship-startups', 'industry' => 'Branding &amp; Personal Development',
        'title' => 'Building a Personal Brand That Matters with Vikram Shah, Founder of BrandMasters',
        'description' => "Vikram Shah, founder of one of Asia's fastest-growing branding agencies, shares his insights on personal branding for executives and entrepreneurs &mdash; why it's non-negotiable in 2026, building authentic authority and leveraging social media as a C-suite leader.",
        'duration' => '40 mins', 'date' => 'April 2026', 'takeaway' => '8 steps to build a memorable personal brand',
        'quote' => "Your personal brand is what people say about you when you leave the room. Make sure it's something you're proud of.",
    ],
    [
        'icon' => 'users', 'accent' => '#F43F5E', 'filter' => 'hr-organizational-culture', 'industry' => 'HR &amp; Org. Development',
        'title' => 'Diversity, Equity &amp; Inclusion with Priya Menon, Chief People Officer at GlobalConnect',
        'description' => 'Priya Menon is a leading voice in HR and organizational development. She shares her expertise on creating truly inclusive workplaces &mdash; moving beyond performative DEI, measuring its impact on business performance and the future of employee well-being.',
        'duration' => '50 mins', 'date' => 'March 2026', 'takeaway' => '5 DEI strategies that deliver results',
        'quote' => "Diversity is being invited to the party; inclusion is being asked to dance. True belonging comes when everyone feels they can be their authentic selves.",
    ],
    [
        'icon' => 'video', 'accent' => '#14B8A6', 'filter' => 'media-content-creation', 'industry' => 'Media &amp; Entertainment',
        'title' => 'The Creator Economy Revolution with Ankit Desai, Co-Founder of CreatorHub',
        'description' => 'Ankit Desai has been at the forefront of the creator economy, empowering thousands of creators to monetize their passion &mdash; exploring how platforms are evolving, financial literacy for freelancers and the future of work in the gig economy.',
        'duration' => '48 mins', 'date' => 'February 2026', 'takeaway' => '5 trends shaping the creator economy',
        'quote' => "The creator economy isn't a trend; it's a fundamental shift in how value is created and distributed. The future belongs to those who create.",
    ],
];

$formats = [
    ['icon' => 'video', 'title' => 'Video Interviews', 'description' => 'Watch the full conversation on our YouTube channel &mdash; visual engagement, closed captions, average length 40&ndash;60 minutes.'],
    ['icon' => 'headphones', 'title' => 'Audio Podcasts', 'description' => 'Listen on the go via Spotify, Apple Podcasts and Google Podcasts. Download for offline listening; transcripts included.'],
    ['icon' => 'book', 'title' => 'Written Transcripts', 'description' => 'Read the full interview in text format with key takeaways highlighted &mdash; easy to reference, share and search.'],
    ['icon' => 'layout', 'title' => 'Executive Summaries', 'description' => 'A quick 5-minute read with 3&ndash;5 key insights and actionable takeaways &mdash; perfect for busy professionals.'],
];

$whyExecutives = [
    ['icon' => 'search', 'title' => 'Unfiltered Access', 'description' => 'We go beyond the PR scripts to bring you honest, candid conversations that reveal the real person behind the title.'],
    ['icon' => 'network', 'title' => 'Diverse Perspectives', 'description' => 'We actively seek voices from different industries, backgrounds and geographies for a rich tapestry of viewpoints.'],
    ['icon' => 'target', 'title' => 'Actionable Insights', 'description' => 'Every interview is curated to provide practical, applicable knowledge you can implement in your own career.'],
    ['icon' => 'certificate', 'title' => 'Quality Over Quantity', 'description' => 'We prioritize depth over breadth &mdash; each interview is thoroughly researched and thoughtfully crafted.'],
    ['icon' => 'users', 'title' => 'Community-Driven', 'description' => 'We listen to our audience. Many of our interviews are shaped by what our community wants to learn.'],
];

$hosts = [
    ['accent' => '#2BACE2', 'initials' => 'MD', 'name' => 'Maya Deshpande', 'role' => 'Lead Interviewer &amp; Editor-in-Chief', 'bio' => '15+ years in business journalism. Former senior correspondent at Economic Times. Passionate about human stories and leadership. Style: warm, insightful and deeply curious.'],
    ['accent' => '#3DB54A', 'initials' => 'RC', 'name' => 'Rohan Chatterjee', 'role' => 'Co-Host &amp; Business Strategist', 'bio' => 'MBA from Harvard Business School. Former management consultant at McKinsey. Expert in corporate strategy. Style: analytical, direct and thought-provoking.'],
    ['accent' => '#F99E1F', 'initials' => 'KN', 'name' => 'Kavya Nair', 'role' => 'Tech &amp; Innovation Correspondent', 'bio' => 'Computer science background turned journalist. Passionate about demystifying complex technology topics. Style: energetic, accessible and future-focused.'],
];

$upcoming = [
    ['guest' => 'Sunil Gupta, Managing Director, Horizon Ventures', 'topic' => 'The Art of Venture Capital and Startup Valuation', 'date' => 'August 5, 2026', 'peek' => "We'll dive into how VCs really evaluate startups, what they look for beyond the pitch deck and how founders can position themselves for success."],
    ['guest' => 'Dr. Lisa Park, Chief Medical Officer, HealthTech Inc.', 'topic' => 'Digital Health Innovation and Patient-Centric Care', 'date' => 'August 12, 2026', 'peek' => "We'll explore how AI is revolutionizing healthcare delivery, the challenges of digital adoption and what the future of patient care looks like."],
    ['guest' => 'Marcus Thompson, Head of Global Strategy, FutureWorks', 'topic' => 'Navigating Geopolitical Risks in Business', 'date' => 'August 19, 2026', 'peek' => "We'll discuss how businesses can navigate trade tensions, regulatory changes and shifting global dynamics without losing momentum."],
];

$engagement = [
    ['icon' => 'mail', 'title' => 'Ask Questions', 'description' => 'Submit questions for upcoming guests &mdash; we feature the best in our interviews. Email interviews@mellowdigi.com.'],
    ['icon' => 'network', 'title' => 'Join the Discussion', 'description' => 'Comment on each interview, share your insights and connect with other professionals.'],
    ['icon' => 'users', 'title' => 'Suggest a Guest', 'description' => 'Who would you love to hear from? Nominate leaders you admire and help shape our lineup.'],
    ['icon' => 'megaphone', 'title' => 'Share Your Story', 'description' => 'How has an interview impacted your journey? Tag us on social media with #MellowDigiInterviews.'],
];

$testimonials = [
    ['accent' => '#2BACE2', 'initials' => 'AJ', 'text' => "I've been following MellowDigi interviews for over a year now, and they've completely changed how I think about leadership. The guests are world-class, and the questions are always spot-on.", 'name' => 'Amit Joshi', 'company' => 'Senior Product Manager, Mumbai'],
    ['accent' => '#3DB54A', 'initials' => 'NP', 'text' => 'As a young entrepreneur, these interviews have been my MBA. The practical advice and real-world stories have helped me avoid countless mistakes.', 'name' => 'Neha Patel', 'company' => 'Founder, Fitspire'],
    ['accent' => '#F99E1F', 'initials' => 'SR', 'text' => "The diversity of guests is incredible. I've learned as much from the marketing interviews as I have from the HR and sustainability conversations. Truly interdisciplinary learning.", 'name' => 'Dr. Sanjay Reddy', 'company' => 'Professor, IIM Bangalore'],
    ['accent' => '#8B5CF6', 'initials' => 'JW', 'text' => "I appreciate that MellowDigi doesn't just scratch the surface. They ask tough questions and get real answers. This is content that matters.", 'name' => 'Jennifer Wong', 'company' => 'Director of Operations, Singapore'],
    ['accent' => '#F43F5E', 'initials' => 'DF', 'text' => 'The executive summaries are a lifesaver for someone like me with limited time. I can get the key insights in minutes and then dive deeper when I have more time.', 'name' => 'Daniel Fernandez', 'company' => 'Vice President, Dubai'],
];

$partners = [
    'Global Leadership Institute', 'Harvard Business Review India', 'Entrepreneur Association',
    'Tech Asia Network', 'Women in Leadership Alliance', 'Young CEOs Forum',
];

$resources = [
    ['icon' => 'printer', 'accent' => '#2BACE2', 'title' => 'Leadership Playbooks', 'description' => 'Downloadable guides and frameworks distilled from our best interviews.'],
    ['icon' => 'video', 'accent' => '#3DB54A', 'title' => 'Executive Webinars', 'description' => 'Live sessions with industry experts, straight from the interview series.'],
    ['icon' => 'book', 'accent' => '#F99E1F', 'title' => 'Case Study Library', 'description' => 'Deep dives into the strategies behind our guests\' biggest wins.'],
    ['icon' => 'graduationcap', 'accent' => '#8B5CF6', 'title' => 'Online Courses', 'description' => 'Structured learning paths for career and leadership advancement.'],
    ['icon' => 'users', 'accent' => '#F43F5E', 'title' => 'Executive Coaching', 'description' => 'One-on-one sessions with certified coaches drawn from our guest network.'],
];

$faqs = [
    ['question' => 'Are the interviews available for free?', 'answer' => 'Yes, all our interviews are completely free to access. We believe in democratizing leadership education.'],
    ['question' => 'How often do you release new interviews?', 'answer' => 'We release a new interview every week, typically on Thursdays.'],
    ['question' => 'Can I suggest a guest for an interview?', 'answer' => 'Absolutely! We love hearing from our community. Email us at interviews@mellowdigi.com with your suggestion.'],
    ['question' => "I'm an executive interested in being interviewed. How can I apply?", 'answer' => 'We\'re always looking for diverse voices. Please reach out to us at executive@mellowdigi.com with your background and the topics you\'d like to discuss.'],
    ['question' => 'Are transcripts available for all interviews?', 'answer' => 'Yes, every interview includes a complete written transcript for easy reference and accessibility.'],
    ['question' => 'Can I use snippets from the interviews for my own content?', 'answer' => "You're welcome to share snippets with proper attribution to MellowDigi. Please refer to our content usage policy for guidelines."],
    ['question' => 'Do you offer corporate subscriptions for teams?', 'answer' => 'Yes, we offer corporate packages that include exclusive content, team workshops and live sessions. Contact our team for details.'],
    ['question' => 'How are guests selected?', 'answer' => "We select guests based on their expertise, influence and ability to provide unique insights &mdash; and we factor in our audience's requests and emerging industry trends."],
];

$heroIcons = [
    ['icon' => 'idcard', 'label' => 'Corporate &amp; Executive Interviews'],
];
?>

     <!-- main -->
     <main>
        <!-- banner-->
         <section class="banner">
            <div class="container-fluid nav-shell">
                <div class="row align-items-center banner-hero">
                    <div class="col-lg-6">
                        <p class="eyebrow" data-animate>Corporate &amp; Executive Interviews</p>
                        <h1 class="banner-title" data-animate data-delay="120">
                            Insights that <span class="text-gradient-brand">inspire</span>.
                        </h1>
                        <p class="banner-text max-width-700" data-animate data-delay="220">
                            Gain unprecedented access to the minds shaping the digital landscape.
                            Exclusive conversations with industry leaders, CEOs and visionaries who
                            are redefining success in the digital age.
                        </p>
                        <p class="banner-text max-width-700" data-animate data-delay="240">
                            <strong>Insights That Inspire &nbsp;|&nbsp; Strategies That Work &nbsp;|&nbsp; Leaders Who Lead</strong>
                        </p>
                        <div class="row row-cols-2 row-cols-sm-4 g-3 tutorial-stats" data-animate data-delay="300">
                            <?php foreach ($stats as $stat): ?>
                            <div class="col">
                                <div class="who-stat">
                                    <h3><?php echo $esc($stat['number']); ?></h3>
                                    <p><?php echo $esc($stat['label']); ?></p>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="quote-callout" style="--accent:#F99E1F" data-animate data-delay="360">
                            <span class="quote-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><?php echo $siteData['icons']['quote']; ?></svg>
                            </span>
                            <p>&ldquo;The future belongs to those who learn, unlearn, and relearn.&rdquo;</p>
                            <span class="quote-attribution">&mdash; Industry Leader</span>
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

         <!-- why interviews matter -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Why It Matters</p>
                        <h2 class="section-heading">Why corporate &amp; executive interviews matter</h2>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="why-card why-card-intro" style="--accent:#2BACE2" data-animate>
                            <h3>Learn From Those Who've Paved the Way</h3>
                            <p>
                                In today's fast-paced digital economy, staying ahead means learning
                                from those who have already paved the way. Our Corporate &amp;
                                Executive Interviews series brings you face-to-face with the
                                decision-makers, innovators and changemakers driving transformation
                                across industries. Dive into our library of conversations and
                                discover what it truly takes to lead in the modern world.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="why-card" style="--accent:#3DB54A" data-animate data-delay="90">
                            <h3>What You'll Take Away</h3>
                            <ul class="startup-checklist">
                                <?php foreach ($introPoints as $point): ?>
                                <li><?php echo $esc($point); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ why interviews matter -->

         <!-- category filter -->
         <section class="bottom-services-section pb-0">
            <div class="container-fluid nav-shell">
                <div class="row mb-4">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Browse by Category</p>
                        <h2 class="section-heading">Find conversations that resonate with you</h2>
                    </div>
                </div>
                <div class="audience-pills tutorial-filter-bar" id="tutorialFilterBar" data-animate data-delay="100">
                    <?php foreach ($categories as $i => $cat): ?>
                    <button type="button" class="audience-pill tutorial-filter-btn<?php echo $i === 0 ? ' is-active' : ''; ?>" data-filter="<?php echo $esc($cat['filter']); ?>"><?php echo $cat['label']; ?></button>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ category filter -->

         <!-- featured interviews -->
         <section class="bottom-services-section" id="tutorialsGrid">
            <div class="container-fluid nav-shell">
                <div class="row mb-5 align-items-end">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Featured Conversations</p>
                        <h2 class="section-heading">Our most impactful interviews</h2>
                    </div>
                    <div class="col-lg-5" data-animate data-delay="100">
                        <form class="tutorial-search-form mb-0" role="search" onsubmit="return false;">
                            <span class="tutorial-search-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><?php echo $siteData['icons']['search']; ?></svg>
                            </span>
                            <input type="search" id="tutorialSearchInput" class="tutorial-search-input" placeholder="Search interviews by guest or topic...">
                        </form>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-lg-2 g-4" id="tutorialCardsRow">
                    <?php foreach ($interviews as $i => $item): ?>
                    <div class="col tutorial-card-col" data-category="<?php echo $esc($item['filter']); ?>" data-title="<?php echo $esc(strtolower($item['title'])); ?>" data-animate data-delay="<?php echo ($i % 2) * 90; ?>">
                        <div class="tutorial-card" style="--accent:<?php echo $esc($item['accent']); ?>">
                            <div class="tutorial-card-top">
                                <span class="tutorial-card-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><?php echo $siteData['icons'][$item['icon']]; ?></svg>
                                </span>
                                <span class="tutorial-category-badge"><?php echo $item['industry']; ?></span>
                            </div>
                            <h6><?php echo $item['title']; ?></h6>
                            <p><?php echo $item['description']; ?></p>
                            <div class="tutorial-card-meta">
                                <span class="tutorial-duration">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 3"/></svg>
                                    <?php echo $esc($item['duration']); ?>
                                </span>
                                <span class="tutorial-level-badge"><?php echo $esc($item['date']); ?></span>
                            </div>
                            <p class="tutorial-card-takeaway"><strong>Key Takeaway:</strong> <?php echo $esc($item['takeaway']); ?></p>
                            <div class="quote-callout">
                                <span class="quote-icon" aria-hidden="true">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><?php echo $siteData['icons']['quote']; ?></svg>
                                </span>
                                <p>&ldquo;<?php echo $esc($item['quote']); ?>&rdquo;</p>
                            </div>
                            <a href="blog.html" class="popular-service-link">View Full Interview <span>&rarr;</span></a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="tutorial-no-results is-hidden" id="tutorialNoResults">
                    <p class="tutorial-no-results-headline">&#128269; No interviews found</p>
                    <p class="banner-text">Try adjusting your search or filter to find what you're looking for. New conversations are added every week.</p>
                    <ul class="startup-checklist">
                        <li>Check your spelling</li>
                        <li>Use fewer keywords</li>
                        <li>Browse by category instead</li>
                    </ul>
                </div>
            </div>
         </section>
         <!--/ featured interviews -->

         <!-- how to access -->
         <section class="who-we-are">
            <div class="bg-bubble bubble-blue" aria-hidden="true"></div>
            <div class="bg-bubble bubble-green" aria-hidden="true"></div>
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">How to Access</p>
                        <h2 class="section-heading">Choose the format that works for you</h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
                    <?php foreach ($formats as $i => $format): ?>
                    <div class="col" data-animate data-delay="<?php echo ($i % 4) * 80; ?>">
                        <div class="process-step">
                            <span class="popular-service-icon" style="--accent:#f5811f">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><?php echo $siteData['icons'][$format['icon']]; ?></svg>
                            </span>
                            <h6><?php echo $format['title']; ?></h6>
                            <p><?php echo $format['description']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ how to access -->

         <!-- why executives choose us -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Trusted Worldwide</p>
                        <h2 class="section-heading">Why executives choose MellowDigi interviews</h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-5 g-4">
                    <?php foreach ($whyExecutives as $i => $item): ?>
                    <div class="col" data-animate data-delay="<?php echo ($i % 5) * 70; ?>">
                        <div class="process-step h-100">
                            <span class="popular-service-icon" style="--accent:#f5811f">
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
         <!--/ why executives choose us -->

         <!-- hosts -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">The Faces Behind the Conversations</p>
                        <h2 class="section-heading">Meet our interview hosts</h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4 mb-5">
                    <?php foreach ($hosts as $i => $host): ?>
                    <div class="col" data-animate data-delay="<?php echo $i * 90; ?>">
                        <div class="popular-service-card instructor-card" style="--accent:<?php echo $esc($host['accent']); ?>">
                            <span class="founder-avatar instructor-avatar"><?php echo $esc($host['initials']); ?></span>
                            <h6><?php echo $esc($host['name']); ?></h6>
                            <p class="founder-role instructor-expertise"><?php echo $host['role']; ?></p>
                            <p><?php echo $host['bio']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="quote-callout" style="--accent:#3DB54A" data-animate>
                            <span class="quote-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><?php echo $siteData['icons']['quote']; ?></svg>
                            </span>
                            <p>&ldquo;Our mission is simple: to bring you the wisdom of the world's most influential leaders, one conversation at a time.&rdquo;</p>
                            <span class="quote-attribution">&mdash; Maya Deshpande</span>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ hosts -->

         <!-- coming soon -->
         <section class="who-we-are">
            <div class="bg-bubble bubble-blue" aria-hidden="true"></div>
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Coming Soon</p>
                        <h2 class="section-heading">Upcoming interviews</h2>
                    </div>
                </div>
                <div class="row g-4 align-items-stretch mb-4">
                    <?php foreach ($upcoming as $i => $item): ?>
                    <div class="col-lg-4" data-animate data-delay="<?php echo $i * 90; ?>">
                        <div class="why-card h-100 mb-0">
                            <span class="tutorial-level-badge mb-3 d-inline-block"><?php echo $esc($item['date']); ?></span>
                            <h3><?php echo $esc($item['guest']); ?></h3>
                            <p><strong><?php echo $esc($item['topic']); ?></strong></p>
                            <p><?php echo $esc($item['peek']); ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="row">
                    <div class="col-lg-7" data-animate>
                        <p class="banner-text mb-3">Subscribe to get notified when new interviews drop.</p>
                        <a href="#newsletterCta" class="btn-hero-cta">Subscribe Now</a>
                    </div>
                </div>
            </div>
         </section>
         <!--/ coming soon -->

         <!-- community engagement -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Join the Conversation</p>
                        <h2 class="section-heading">Our interviews are a starting point, not the end</h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
                    <?php foreach ($engagement as $i => $item): ?>
                    <div class="col" data-animate data-delay="<?php echo ($i % 4) * 80; ?>">
                        <div class="process-step">
                            <span class="popular-service-icon" style="--accent:#f5811f">
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
         <!--/ community engagement -->

         <!-- testimonials -->
         <section class="testimonials-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Social Proof</p>
                        <h2 class="section-heading">What our community says</h2>
                    </div>
                </div>
            </div>

            <div class="testimonials-swiper swiper-container" data-animate data-delay="150">
                <div class="swiper-wrapper">
                    <?php foreach ($testimonials as $t): ?>
                    <div class="swiper-slide">
                        <div class="testimonial-card" style="--accent:<?php echo $esc($t['accent']); ?>">
                            <span class="testimonial-quote-icon">
                                <svg width="34" height="26" viewBox="0 0 34 26" fill="currentColor"><path d="M14.5 0L9 12H15V26H0V13L6 0H14.5ZM33.5 0L28 12H34V26H19V13L25 0H33.5Z"/></svg>
                            </span>
                            <div class="testimonial-stars">
                                <?php for ($s = 0; $s < 5; $s++): ?>
                                <svg viewBox="0 0 24 24"><path d="M12 2.5l2.9 6.2 6.6.7-5 4.6 1.4 6.6-5.9-3.4-5.9 3.4 1.4-6.6-5-4.6 6.6-.7z"/></svg>
                                <?php endfor; ?>
                            </div>
                            <p class="testimonial-text"><?php echo $esc($t['text']); ?></p>
                            <div class="testimonial-author">
                                <span class="testimonial-avatar"><?php echo $esc($t['initials']); ?></span>
                                <div class="testimonial-author-info">
                                    <h6><?php echo $esc($t['name']); ?></h6>
                                    <span><?php echo $esc($t['company']); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
         </section>
         <!--/ testimonials -->

         <!-- partners -->
         <section class="bottom-services-section pb-0">
            <div class="container-fluid nav-shell">
                <div class="row mb-4">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Proud Partners</p>
                        <h2 class="section-heading">Supported by leaders in professional growth</h2>
                    </div>
                </div>
                <div class="audience-pills mb-4" data-animate data-delay="100">
                    <?php foreach ($partners as $partner): ?>
                    <span class="audience-pill"><?php echo $esc($partner); ?></span>
                    <?php endforeach; ?>
                </div>
                <p class="banner-text" data-animate data-delay="140">
                    Interested in becoming a partner or sponsor? Let's talk &mdash; email
                    <a href="mailto:partnerships@mellowdigi.com">partnerships@mellowdigi.com</a>.
                </p>
            </div>
         </section>
         <!--/ partners -->

         <!-- resources -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">More From MellowDigi</p>
                        <h2 class="section-heading">Resources for executives</h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-5 g-4">
                    <?php foreach ($resources as $i => $resource): ?>
                    <div class="col" data-animate data-delay="<?php echo ($i % 5) * 70; ?>">
                        <div class="popular-service-card h-100" style="--accent:<?php echo $esc($resource['accent']); ?>">
                            <span class="popular-service-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><?php echo $siteData['icons'][$resource['icon']]; ?></svg>
                            </span>
                            <h6><?php echo $esc($resource['title']); ?></h6>
                            <p><?php echo $esc($resource['description']); ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
         </section>
         <!--/ resources -->

         <!-- newsletter cta -->
         <section class="founder-section" id="newsletterCta">
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row align-items-center g-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Never Miss an Interview</p>
                        <h2 class="section-heading">Get weekly interview highlights in your inbox</h2>
                        <p class="founder-bio">
                            Sneak peeks of upcoming guests, exclusive bonus content and every new
                            conversation &mdash; delivered straight to your inbox. You can also
                            find us on YouTube, Spotify, Apple Podcasts and Google Podcasts.
                        </p>
                        <p class="founder-bio mb-0">
                            &#9989; All interview content is completely free &nbsp;&middot;&nbsp;
                            &#9989; Corporate packages available for teams
                        </p>
                    </div>
                    <div class="col-lg-5" data-animate data-delay="150">
                        <form class="newsletter-form" onsubmit="return false;">
                            <label for="newsletterEmail" class="visually-hidden">Enter your email address</label>
                            <input type="email" id="newsletterEmail" class="newsletter-input" placeholder="Enter your email address" required>
                            <button type="submit" class="btn-hero-cta">Subscribe Now</button>
                        </form>
                    </div>
                </div>
            </div>
         </section>
         <!--/ newsletter cta -->

         <!-- faq -->
         <section class="bottom-services-section">
            <div class="container-fluid nav-shell">
                <div class="row mb-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Frequently Asked Questions</p>
                        <h2 class="section-heading">Questions, answered before you ask</h2>
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

         <!-- contact cta -->
         <section class="founder-section">
            <div class="bg-bubble bubble-orange" aria-hidden="true"></div>
            <div class="container-fluid nav-shell">
                <div class="row align-items-center g-5">
                    <div class="col-lg-7" data-animate>
                        <p class="eyebrow">Get in Touch</p>
                        <h2 class="section-heading">Have a question, suggestion or partnership idea?</h2>
                        <p class="founder-bio">
                            We'd love to hear from you. Whether it's a guest suggestion, a
                            question for an upcoming interview or a partnership inquiry, our
                            team is here to help.
                        </p>
                        <ul class="footer-contact">
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><?php echo $siteData['icons']['call']; ?></svg>
                                <span>Call us: +91 98765 43210</span>
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><?php echo $siteData['icons']['mail']; ?></svg>
                                <span>Email us: interviews@mellowdigi.com</span>
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><?php echo $siteData['icons']['webmobile']; ?></svg>
                                <span>Visit us: www.mellowdigi.com</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-5 text-lg-end" data-animate data-delay="150">
                        <p class="founder-bio">Ready to be part of the conversation?</p>
                        <div class="d-flex flex-wrap gap-3 justify-content-lg-end">
                            <a href="contact.html" class="btn-hero-cta">Get Involved Today</a>
                            <a href="contact.html" class="btn-hero-cta">Suggest a Guest</a>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!--/ contact cta -->
     </main>
     <!--/ main -->

<script>
document.addEventListener('DOMContentLoaded', function () {
    var searchInput = document.getElementById('tutorialSearchInput');
    var filterBar = document.getElementById('tutorialFilterBar');
    var cardCols = document.querySelectorAll('.tutorial-card-col');
    var noResults = document.getElementById('tutorialNoResults');
    var activeFilter = 'all';

    function applyFilters() {
        var query = (searchInput.value || '').trim().toLowerCase();
        var visibleCount = 0;

        cardCols.forEach(function (col) {
            var matchesCategory = activeFilter === 'all' || col.dataset.category === activeFilter;
            var matchesSearch = query === '' || col.dataset.title.indexOf(query) !== -1;
            var show = matchesCategory && matchesSearch;
            col.classList.toggle('is-hidden', !show);
            if (show) { visibleCount++; }
        });

        noResults.classList.toggle('is-hidden', visibleCount !== 0);
    }

    if (searchInput) {
        searchInput.addEventListener('input', applyFilters);
    }

    if (filterBar) {
        filterBar.addEventListener('click', function (e) {
            var btn = e.target.closest('.tutorial-filter-btn');
            if (!btn) { return; }
            filterBar.querySelectorAll('.tutorial-filter-btn').forEach(function (b) {
                b.classList.remove('is-active');
            });
            btn.classList.add('is-active');
            activeFilter = btn.dataset.filter;
            applyFilters();
        });
    }
});
</script>

<?php include __DIR__ . '/components/footer.php'; ?>
