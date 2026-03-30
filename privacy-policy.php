<?php
$page_title = 'Privacy Policy | DRN.today — Data Protection & Privacy';
$page_description = 'DRN.today\'s Privacy Policy. Learn how we collect, use, store, and protect your personal information when you use our website, AI solutions, and communication channels.';
include 'includes/header.php';
?>

<!-- HERO SECTION -->
<section class="hero" style="min-height: 45vh; position: relative; display: flex; align-items: center; justify-content: center; padding-top: var(--header-height); overflow: hidden;">
    <div class="hglow" style="position: absolute; width: 800px; height: 800px; background: radial-gradient(circle, rgba(59,130,246,0.15) 0%, rgba(11,15,26,0) 70%); border-radius: 50%; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: -2;"></div>
    <div class="container rv" style="text-align: center; max-width: 850px; z-index: 2;">
        <nav class="bc" aria-label="Breadcrumb" style="display: flex; align-items: center; gap: 8px; font-size: 0.85rem; color: var(--gray); margin-bottom: 25px; justify-content: center;">
            <a href="index.php" style="color: var(--accent-cyan);">Home</a>
            <span>/</span>
            <span>Privacy Policy</span>
        </nav>
        <div style="margin-bottom: 24px;">
            <svg width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="var(--accent-cyan)" stroke-width="1.5"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
        </div>
        <h1 style="font-size: clamp(2.2rem, 5vw, 3.6rem); font-weight: 800; line-height: 1.1; margin-bottom: 20px; letter-spacing: -2px;">Privacy <span class="tg">Policy</span></h1>
        <p style="font-size: 1.15rem; color: var(--gray); font-weight: 300;">How we collect, use, and protect your information</p>
        <div class="dbadge" style="display: inline-flex; align-items: center; gap: 10px; background: rgba(139,92,246,0.1); border: 1px solid rgba(139,92,246,0.3); border-radius: 50px; padding: 10px 25px; font-size: 0.85rem; color: var(--primary-purple); font-weight: 600; margin-top: 25px;">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
            Last Updated: March 29, 2026
        </div>
    </div>
</section>

<!-- CONTENT SECTION -->
<section class="sp" style="padding-top: 40px;">
    <div class="container">
        <div class="pw" style="max-width: 800px; margin: 0 auto;">

            <!-- TOOLBAR -->
            <div class="tb" style="display: flex; justify-content: flex-end; gap: 10px; margin-bottom: 40px;">
                <button class="tbb" id="bprint" style="display: inline-flex; align-items: center; gap: 6px; padding: 8px 16px; border-radius: 8px; background: var(--glass-bg); border: 1px solid var(--glass-border); color: var(--gray); font-family: inherit; font-size: 0.75rem; font-weight: 600; text-transform: uppercase; cursor: none;">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 6 2 18 2 18 9"/><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/><rect x="6" y="14" width="12" height="8"/></svg>
                    Print
                </button>
                <button class="tbb" id="btoc">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="8" y1="6" x2="21" y2="6"/><line x1="8" y1="12" x2="21" y2="12"/><line x1="8" y1="18" x2="21" y2="18"/></svg>
                    Contents
                </button>
            </div>

            <!-- TABLE OF CONTENTS -->
            <div class="toc tc rv" id="toc" style="background: var(--glass-bg); backdrop-filter: blur(var(--glass-blur)); border: 1px solid var(--glass-border); border-radius: 16px; padding: 32px 36px; margin-bottom: 40px;">
                <h3 style="font-size: 0.85rem; text-transform: uppercase; letter-spacing: 1.5px; color: var(--accent-cyan); font-weight: 700; margin-bottom: 18px; display: flex; align-items: center; gap: 8px;">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="8" y1="6" x2="21" y2="6"/><line x1="8" y1="12" x2="21" y2="12"/><line x1="8" y1="18" x2="21" y2="18"/></svg>
                    Table of Contents
                </h3>
                <div class="tl" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(260px, 1fr)); gap: 4px;">
                    <a href="#s1"><span class="tn">01</span> Introduction</a>
                    <a href="#s2"><span class="tn">02</span> Information We Collect</a>
                    <a href="#s3"><span class="tn">03</span> How We Use Your Information</a>
                    <a href="#s4"><span class="tn">04</span> Data Sharing & Disclosure</a>
                    <a href="#s5"><span class="tn">05</span> Data Security</a>
                    <a href="#s6"><span class="tn">06</span> Your Rights</a>
                    <a href="#s7"><span class="tn">07</span> Cookies & Tracking</a>
                    <a href="#s8"><span class="tn">08</span> Third-Party Links</a>
                    <a href="#s9"><span class="tn">09</span> Children's Privacy</a>
                    <a href="#s10"><span class="tn">10</span> Changes to This Policy</a>
                    <a href="#s11"><span class="tn">11</span> Contact Information</a>
                </div>
            </div>

            <!-- SECTION 1: INTRODUCTION -->
            <div class="pc tc rv" id="s1" style="background: var(--glass-bg); backdrop-filter: blur(var(--glass-blur)); border: 1px solid var(--glass-border); border-radius: 16px; padding: 36px 40px; margin-bottom: 24px;">
                <div class="sn" style="display: inline-flex; align-items: center; justify-content: center; width: 36px; height: 36px; border-radius: 8px; background: linear-gradient(135deg, rgba(59,130,246,0.2), rgba(139,92,246,0.2)); border: 1px solid rgba(59,130,246,0.3); font-family: 'Courier New', monospace; font-size: 0.9rem; font-weight: 800; color: var(--primary-blue); margin-bottom: 16px;">01</div>
                <h2 style="font-size: 1.3rem; font-weight: 800; margin-bottom: 16px; color: var(--white);">Introduction</h2>
                <p>DRN.today ("we," "us," or "our"), operating as Developers Resource Nexus, is committed to protecting and respecting your privacy. This Privacy Policy describes how we collect, use, store, and disclose information when you visit our website at <a href="https://drn.today" style="color: var(--accent-cyan);">drn.today</a>, engage with our AI and automation services, communicate with us through any channel, or otherwise interact with us.</p>
                <p>This policy applies to all information processed by DRN.today, including information collected through our website, WhatsApp, Telegram, email, phone communications, and any related services.</p>
                <div class="hb g" style="background: rgba(16,185,129,0.08); border: 1px solid rgba(16,185,129,0.2); border-radius: 10px; padding: 16px 20px; margin: 16px 0;">
                    <p><strong>Our commitment:</strong> We only collect information that is necessary for the purposes described in this policy. We do not engage in indiscriminate data harvesting, and we never sell your personal information to third parties.</p>
                </div>
                <p>By accessing or using our services, you acknowledge that you have read and understood this Privacy Policy. If you do not agree with the terms of this policy, please do not access our website or use our services.</p>
            </div>

            <!-- SECTION 2: INFORMATION WE COLLECT -->
            <div class="pc tc rv" id="s2">
                <div class="sn">02</div>
                <h2>Information We Collect</h2>
                <p>We collect several categories of information to provide and improve our services:</p>
                <div class="sh"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg> Personal Information</div>
                <ul class="pl">
                    <li><strong>Name</strong> — when you provide it through our contact form, email, or direct messaging</li>
                    <li><strong>Email address</strong> — for correspondence, service delivery, and account-related communications</li>
                    <li><strong>Phone number</strong> — when voluntarily shared for project discussions or consultations</li>
                    <li><strong>Business details</strong> — company name, industry, role, and project requirements discussed during consultations</li>
                </ul>
                <div class="sh"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg> Communication Data</div>
                <ul class="pl">
                    <li><strong>WhatsApp messages</strong> — content of conversations when you reach out via our WhatsApp business number (<?php echo PHONE; ?>)</li>
                    <li><strong>Telegram messages</strong> — content of conversations when you contact us through @drntoday</li>
                    <li><strong>Email correspondence</strong> — content, attachments, and metadata of emails sent to <?php echo EMAIL; ?></li>
                </ul>
                <div class="sh"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg> Usage Data</div>
                <ul class="pl">
                    <li><strong>Pages visited</strong> — which sections of drn.today you access</li>
                    <li><strong>Time spent</strong> — duration of visits to specific pages</li>
                    <li><strong>Referral source</strong> — how you arrived at our website</li>
                </ul>
                <div class="sh"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg> Technical Data</div>
                <ul class="pl">
                    <li><strong>IP address</strong> — collected automatically when you visit our website</li>
                    <li><strong>Browser type and version</strong> — Chrome, Firefox, Safari, Edge, etc.</li>
                    <li><strong>Operating system</strong> — Windows, macOS, Linux, iOS, Android</li>
                </ul>
            </div>

            <!-- SECTION 3: HOW WE USE YOUR INFORMATION -->
            <div class="pc tc rv" id="s3">
                <div class="sn">03</div>
                <h2>How We Use Your Information</h2>
                <ul class="pl">
                    <li><strong>Service delivery:</strong> To provide, maintain, and improve our AI, automation, and web development services</li>
                    <li><strong>Communication:</strong> To respond to your inquiries, provide consultation, share project updates, and deliver requested proposals</li>
                    <li><strong>Website improvement:</strong> To analyze usage patterns, identify areas for improvement, and optimize user experience</li>
                    <li><strong>Security:</strong> To detect, prevent, and address technical issues, security threats, and fraud</li>
                    <li><strong>Legal compliance:</strong> To comply with applicable laws, regulations, and legal processes</li>
                </ul>
                <div class="hb b" style="background: rgba(59,130,246,0.08); border: 1px solid rgba(59,130,246,0.2);"><p>We will <strong>not</strong> use your personal information for purposes materially different from those described above without providing you with notice and, where required by law, obtaining your consent.</p></div>
            </div>

            <!-- SECTION 4: DATA SHARING -->
            <div class="pc tc rv" id="s4">
                <div class="sn">04</div>
                <h2>Data Sharing and Disclosure</h2>
                <div class="hb g"><p><strong>We do not sell your personal information.</strong> This is a non-negotiable principle of how DRN.today operates. Your data is never traded, sold, or monetized through third-party data brokers.</p></div>
                <p>We may share your information only in the following limited circumstances:</p>
                <div class="sh"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="8" rx="2"/><rect x="2" y="14" width="20" height="8" rx="2"/></svg> Service Providers</div>
                <p>We engage trusted third-party service providers who perform functions on our behalf, such as web hosting, analytics, and communication platforms. These providers are bound by confidentiality obligations.</p>
                <div class="sh"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg> Legal Requirements</div>
                <p>We may disclose your information if required to do so by law, in response to valid legal process, or when we believe in good faith that disclosure is necessary to protect our rights, your safety, or the safety of others.</p>
            </div>

            <!-- SECTION 5: DATA SECURITY -->
            <div class="pc tc rv" id="s5">
                <div class="sn">05</div>
                <h2>Data Security</h2>
                <p>We implement appropriate technical and organizational measures to protect your personal information:</p>
                <div class="cg" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(210px, 1fr)); gap: 12px; margin: 16px 0;">
                    <div class="ci" style="display: flex; align-items: flex-start; gap: 12px; padding: 16px; background: rgba(255,255,255,0.02); border-radius: 10px;"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg><div><div class="cil">Encryption</div><div class="civ">TLS 1.3, AES-256</div></div></div>
                    <div class="ci"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/><polyline points="10 17 15 12 10 7"/><line x1="15" y1="12" x2="3" y2="12"/></svg><div><div class="cil">Access Control</div><div class="civ">Role-based auth</div></div></div>
                    <div class="ci"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/><path d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg><div><div class="cil">Audits</div><div class="civ">Regular reviews</div></div></div>
                </div>
                <div class="hb r"><p><strong>Important disclaimer:</strong> While we implement robust security measures, no method of transmission over the Internet or electronic storage is 100% secure. We cannot guarantee absolute security.</p></div>
            </div>

            <!-- SECTION 6: YOUR RIGHTS -->
            <div class="pc tc rv" id="s6">
                <div class="sn">06</div>
                <h2>Your Rights</h2>
                <p>Depending on your jurisdiction, you may have certain rights regarding your personal information:</p>
                <div class="rg" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(220px, 1fr)); gap: 12px; margin: 16px 0;">
                    <div class="ri"><h4>Right to Access</h4><p>Request a copy of the personal data we hold about you.</p></div>
                    <div class="ri"><h4>Right to Rectification</h4><p>Request correction of inaccurate or incomplete data.</p></div>
                    <div class="ri"><h4>Right to Erasure</h4><p>Request deletion of your data, subject to legal obligations.</p></div>
                    <div class="ri"><h4>Right to Portability</h4><p>Receive your data in a structured, machine-readable format.</p></div>
                </div>
                <p>To exercise any of these rights, contact us at <a href="mailto:<?php echo EMAIL; ?>"><?php echo EMAIL; ?></a> or message us on WhatsApp at <a href="<?php echo whatsapp_link(); ?>"><?php echo PHONE; ?></a>. We will respond to your request within 30 days.</p>
            </div>

            <!-- SECTION 7: COOKIES -->
            <div class="pc tc rv" id="s7">
                <div class="sn">07</div>
                <h2>Cookies and Tracking</h2>
                <p>Our website may use cookies to enhance your browsing experience. A cookie is a small text file placed on your device when you visit a website.</p>
                <ul class="pl">
                    <li><strong>Essential cookies:</strong> Required for basic operation of our website</li>
                    <li><strong>Analytics cookies:</strong> Help us understand how visitors interact with our website</li>
                </ul>
                <p>You can control and manage cookies through your browser settings. Disabling cookies may affect the functionality of our website.</p>
            </div>

            <!-- SECTION 8: THIRD-PARTY LINKS -->
            <div class="pc tc rv" id="s8">
                <div class="sn">08</div>
                <h2>Third-Party Links</h2>
                <p>Our website may contain links to external websites and platforms, including WhatsApp, Telegram, LinkedIn, GitHub, and X (Twitter). These third-party websites have their own privacy policies, which we strongly encourage you to review. DRN.today is not responsible for the privacy practices of any third-party websites.</p>
            </div>

            <!-- SECTION 9: CHILDREN'S PRIVACY -->
            <div class="pc tc rv" id="s9">
                <div class="sn">09</div>
                <h2>Children's Privacy</h2>
                <p>Our services are not directed to individuals under the age of 13. We do not knowingly collect personal information from children under 13 years of age. If we become aware that we have inadvertently collected personal information from a child under 13, we will take immediate steps to delete that information.</p>
            </div>

            <!-- SECTION 10: CHANGES TO POLICY -->
            <div class="pc tc rv" id="s10">
                <div class="sn">10</div>
                <h2>Changes to This Policy</h2>
                <p>We reserve the right to update or modify this Privacy Policy at any time. When we make changes, we will update the "Last Updated" date at the top of this page. We encourage you to review this Privacy Policy periodically to stay informed about how we protect your information.</p>
            </div>

            <!-- SECTION 11: CONTACT INFORMATION -->
            <div class="pc tc rv" id="s11">
                <div class="sn">11</div>
                <h2>Contact Information</h2>
                <p>If you have any questions, concerns, or requests regarding this Privacy Policy or our data practices, please reach out to us through any of the following channels:</p>
                <div class="cg">
                    <a href="mailto:<?php echo EMAIL; ?>" class="ci"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg><div><div class="cil">Email</div><div class="civ"><?php echo EMAIL; ?></div></div></a>
                    <a href="<?php echo whatsapp_link(); ?>" target="_blank" class="ci"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg><div><div class="cil">WhatsApp</div><div class="civ"><?php echo PHONE; ?></div></div></a>
                    <a href="<?php echo telegram_link(); ?>" target="_blank" class="ci"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg><div><div class="cil">Telegram</div><div class="civ">@drntoday</div></div></a>
                </div>
                <div class="hb g" style="margin-top: 18px;"><p><strong>Direct response guaranteed.</strong> All privacy-related inquiries are handled personally by Somnath Kurmi, founder of DRN.today. You will receive a direct, human response.</p></div>
            </div>

        </div>
    </div>
</section>

<!-- DATA REQUEST SECTION -->
<section class="sp" style="background: radial-gradient(circle at 50% 50%, rgba(59,130,246,0.06) 0%, transparent 60%);">
    <div class="container">
        <div class="pw" style="max-width: 800px; margin: 0 auto;">
            <div class="rqc tc rv" style="background: var(--glass-bg); backdrop-filter: blur(var(--glass-blur)); border: 1px solid var(--glass-border); border-radius: 20px; padding: 50px; text-align: center;">
                <div class="rqi" style="width: 70px; height: 70px; border-radius: 50%; margin: 0 auto 24px; display: flex; align-items: center; justify-content: center; background: rgba(59,130,246,0.1); border: 1px solid rgba(59,130,246,0.3);">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
                </div>
                <h2 style="font-size: 1.6rem; margin-bottom: 12px;">Data Request</h2>
                <p style="color: var(--gray); font-size: 0.95rem; margin: 0 auto 30px;">Exercise your privacy rights directly. Submit a request and receive a personal response from our founder.</p>
                <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
                    <div class="mw"><button class="bs bsm rb" id="brd"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg> Request My Data</button></div>
                    <div class="mw"><button class="bd bsm rb" id="bdd"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg> Delete My Data</button></div>
                </div>
                <p style="margin-top: 16px; font-size: 0.78rem; color: var(--gray);">Requests are processed within 30 days. Identity verification may be required.</p>
            </div>
        </div>
    </div>
</section>

<script>
    // Print functionality
    document.getElementById('bprint').addEventListener('click', () => window.print());

    // Table of contents scroll
    document.getElementById('btoc').addEventListener('click', () => {
        const toc = document.getElementById('toc');
        const headerHeight = document.getElementById('navbar').offsetHeight;
        window.scrollTo({ top: toc.offsetTop - headerHeight - 20, behavior: 'smooth' });
    });

    // TOC links smooth scroll
    document.querySelectorAll('.tl a').forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const target = document.querySelector(link.getAttribute('href'));
            if (target) {
                const headerHeight = document.getElementById('navbar').offsetHeight;
                window.scrollTo({ top: target.offsetTop - headerHeight - 20, behavior: 'smooth' });
            }
        });
    });

    // Toast notification
    function showToast(title, message, type) {
        const container = document.getElementById('tcw');
        if (!container) return;
        const toast = document.createElement('div');
        toast.className = 'toast';
        toast.innerHTML = `
            <div class="toast-icon">${type === 'success' ? '✓' : 'ℹ'}</div>
            <div class="toast-content"><div class="toast-title">${title}</div><div class="toast-message">${message}</div></div>
            <button class="toast-close" onclick="this.parentElement.remove()">×</button>
        `;
        container.appendChild(toast);
        setTimeout(() => toast.classList.add('show'), 10);
        setTimeout(() => {
            toast.classList.remove('show');
            setTimeout(() => toast.remove(), 400);
        }, 5000);
    }

    // Data request buttons
    document.getElementById('brd')?.addEventListener('click', () => {
        showToast('Data Access Request', 'Please email <?php echo EMAIL; ?> from the address associated with your data. You\'ll receive a personal response within 30 days.', 'info');
    });
    document.getElementById('bdd')?.addEventListener('click', () => {
        showToast('Data Deletion Request', 'Please email <?php echo EMAIL; ?> to verify your identity. Deletion will be processed within 30 days.', 'warning');
    });
</script>

<?php include 'includes/footer.php'; ?>
