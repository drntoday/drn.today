<?php
$page_title = 'Terms of Service | DRN.today — Legal Terms & Conditions';
$page_description = 'Terms of Service for DRN.today. Read the legal terms governing your use of our website, AI solutions, automation services, and consulting engagements.';
include 'includes/header.php';
?>

<!-- HERO SECTION -->
<section class="hero" style="min-height: 45vh; position: relative; display: flex; align-items: center; justify-content: center; padding-top: var(--header-height); overflow: hidden;">
    <div class="hglow" style="position: absolute; width: 800px; height: 800px; background: radial-gradient(circle, rgba(139,92,246,0.15) 0%, rgba(11,15,26,0) 70%); border-radius: 50%; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: -2;"></div>
    <div class="container rv" style="text-align: center; max-width: 850px; z-index: 2;">
        <nav class="bc" aria-label="Breadcrumb" style="display: flex; align-items: center; gap: 8px; font-size: 0.85rem; color: var(--gray); margin-bottom: 25px; justify-content: center;">
            <a href="index.php" style="color: var(--accent-cyan);">Home</a>
            <span>/</span>
            <span>Terms of Service</span>
        </nav>
        <div style="margin-bottom: 24px;">
            <svg width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="var(--primary-purple)" stroke-width="1.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
        </div>
        <h1 style="font-size: clamp(2.2rem, 5vw, 3.6rem); font-weight: 800; line-height: 1.1; margin-bottom: 20px; letter-spacing: -2px;">Terms of <span class="tg">Service</span></h1>
        <p style="font-size: 1.15rem; color: var(--gray); font-weight: 300;">Legal terms governing your use of DRN.today's website and services</p>
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
                <button class="tbb" id="bprint" style="display: inline-flex; align-items: center; gap: 6px; padding: 8px 16px; border-radius: 8px; background: var(--glass-bg); border: 1px solid var(--glass-border); color: var(--gray); font-size: 0.75rem; font-weight: 600; text-transform: uppercase;">
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
                <h3 style="font-size: 0.85rem; text-transform: uppercase; letter-spacing: 1.5px; color: var(--primary-purple); font-weight: 700; margin-bottom: 18px;">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="8" y1="6" x2="21" y2="6"/><line x1="8" y1="12" x2="21" y2="12"/><line x1="8" y1="18" x2="21" y2="18"/></svg>
                    Table of Contents
                </h3>
                <div class="tl" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(260px, 1fr)); gap: 4px;">
                    <a href="#s1"><span class="tn">01</span> Acceptance of Terms</a>
                    <a href="#s2"><span class="tn">02</span> Services Description</a>
                    <a href="#s3"><span class="tn">03</span> User Responsibilities</a>
                    <a href="#s4"><span class="tn">04</span> Intellectual Property</a>
                    <a href="#s5"><span class="tn">05</span> Payment Terms</a>
                    <a href="#s6"><span class="tn">06</span> Refund Policy</a>
                    <a href="#s7"><span class="tn">07</span> Delivery & Timelines</a>
                    <a href="#s8"><span class="tn">08</span> Client Obligations</a>
                    <a href="#s9"><span class="tn">09</span> Confidentiality</a>
                    <a href="#s10"><span class="tn">10</span> Limitation of Liability</a>
                    <a href="#s11"><span class="tn">11</span> Disclaimer of Warranties</a>
                    <a href="#s12"><span class="tn">12</span> Indemnification</a>
                    <a href="#s13"><span class="tn">13</span> Termination</a>
                    <a href="#s14"><span class="tn">14</span> Governing Law</a>
                    <a href="#s15"><span class="tn">15</span> Dispute Resolution</a>
                    <a href="#s16"><span class="tn">16</span> Changes to Terms</a>
                    <a href="#s17"><span class="tn">17</span> Contact Information</a>
                </div>
            </div>

            <!-- SECTION 1: ACCEPTANCE OF TERMS -->
            <div class="pc tc rv" id="s1">
                <div class="sn">01</div>
                <h2>Acceptance of Terms</h2>
                <p>By accessing or using the website at <a href="https://drn.today">drn.today</a> (the "Website") or engaging any services provided by DRN.today, operating as Developers Resource Nexus ("we," "us," or "our"), you agree to be bound by these Terms of Service ("Terms"). These Terms constitute a legally binding agreement between you ("Client," "User," or "you") and DRN.today.</p>
                <p>If you do not agree with any part of these Terms, you must not access the Website or use our services. Your continued use of the Website or services following the posting of any changes to these Terms constitutes acceptance of those changes.</p>
                <div class="hb r"><p><strong>Important:</strong> If you are entering into a formal service engagement with us, a separate Statement of Work (SOW) or project proposal may supplement these Terms. In the event of any conflict between the SOW and these Terms, the SOW shall prevail for the specific engagement it covers.</p></div>
            </div>

            <!-- SECTION 2: SERVICES DESCRIPTION -->
            <div class="pc tc rv" id="s2">
                <div class="sn">02</div>
                <h2>Services Description</h2>
                <p>DRN.today provides the following categories of services:</p>
                <ul class="pl">
                    <li><strong>AI Agent Development:</strong> Design, development, and deployment of autonomous AI agents</li>
                    <li><strong>Software Development:</strong> Custom software solutions including backend systems and APIs</li>
                    <li><strong>Web Development:</strong> Full-stack web application development and website design</li>
                    <li><strong>App Development:</strong> Mobile and cross-platform application development</li>
                    <li><strong>Automation Engineering:</strong> Workflow automation and process optimization</li>
                    <li><strong>Consulting:</strong> Technical advisory and AI strategy consulting</li>
                </ul>
                <p>All services are provided "as described" in the applicable project proposal or statement of work. We reserve the right to modify or discontinue any service with reasonable written notice to affected clients.</p>
            </div>

            <!-- SECTION 3: USER RESPONSIBILITIES -->
            <div class="pc tc rv" id="s3">
                <div class="sn">03</div>
                <h2>User Responsibilities</h2>
                <ul class="pl">
                    <li><strong>Legal age:</strong> You are at least 18 years of age and have the legal capacity to enter into binding agreements</li>
                    <li><strong>Accuracy:</strong> All information you provide is accurate, complete, and current</li>
                    <li><strong>Credentials:</strong> You will maintain the confidentiality of any account credentials provided</li>
                    <li><strong>Lawful use:</strong> You will use our services only for lawful purposes</li>
                    <li><strong>No abuse:</strong> You will not attempt to reverse engineer, hack, or disrupt our systems</li>
                </ul>
                <div class="hb r"><p><strong>Violation of these responsibilities may result in immediate suspension or termination of your access to our services.</strong></p></div>
            </div>

            <!-- SECTION 4: INTELLECTUAL PROPERTY -->
            <div class="pc tc rv" id="s4">
                <div class="sn">04</div>
                <h2>Intellectual Property</h2>
                <p><strong>Client Deliverables:</strong> Upon receipt of full payment, all custom code, designs, and deliverables specifically created for the Client shall be transferred to the Client.</p>
                <p><strong>DRN.today Retained Rights:</strong> We retain the right to use general-purpose code snippets, architectural patterns, and libraries for internal purposes and future client projects. Any such reuse will be fully anonymized.</p>
                <p><strong>Website & Branding:</strong> All content on drn.today is the exclusive property of DRN.today. You may not reproduce or distribute any Website content without our prior written consent.</p>
            </div>

            <!-- SECTION 5: PAYMENT TERMS -->
            <div class="pc tc rv" id="s5">
                <div class="sn">05</div>
                <h2>Payment Terms</h2>
                <ul class="pl">
                    <li><strong>Custom quotes:</strong> All pricing is provided via custom quotes based on project scope</li>
                    <li><strong>Advance payment:</strong> A 50% advance payment is typically required before work commences</li>
                    <li><strong>Milestone payments:</strong> Payment schedules are defined in the project proposal</li>
                    <li><strong>Final payment:</strong> The remaining balance is due upon project completion</li>
                </ul>
                <div class="hb y"><p><strong>Late payments:</strong> Payments not received within 7 business days may incur a late fee of 1.5% per month. We reserve the right to suspend work on overdue projects.</p></div>
            </div>

            <!-- SECTION 6: REFUND POLICY -->
            <div class="pc tc rv" id="s6">
                <div class="sn">06</div>
                <h2>Refund Policy</h2>
                <ul class="pl">
                    <li><strong>Completed work:</strong> No refunds for work already completed or delivered</li>
                    <li><strong>Deposits:</strong> Advance payments are non-refundable</li>
                    <li><strong>Our failure:</strong> If we fail to deliver as promised, a partial refund may be considered</li>
                </ul>
                <div class="hb g"><p><strong>Dispute resolution:</strong> All refund disputes are handled directly by our founder, Somnath Kurmi. Contact us at <a href="mailto:<?php echo EMAIL; ?>"><?php echo EMAIL; ?></a> or WhatsApp at <a href="<?php echo whatsapp_link(); ?>"><?php echo PHONE; ?></a>.</p></div>
            </div>

            <!-- SECTION 7: DELIVERY & TIMELINES -->
            <div class="pc tc rv" id="s7">
                <div class="sn">07</div>
                <h2>Delivery & Timelines</h2>
                <ul class="pl">
                    <li><strong>Estimates only:</strong> All timelines provided are estimates, not guarantees</li>
                    <li><strong>Scope changes:</strong> Changes may result in timeline adjustments</li>
                    <li><strong>Client delays:</strong> Delays caused by the Client may extend delivery timelines</li>
                    <li><strong>Communication:</strong> We will communicate proactively about any material delays</li>
                </ul>
            </div>

            <!-- SECTION 8: CLIENT OBLIGATIONS -->
            <div class="pc tc rv" id="s8">
                <div class="sn">08</div>
                <h2>Client Obligations</h2>
                <ul class="pl">
                    <li><strong>Single point of contact:</strong> Designate a primary contact for decisions and feedback</li>
                    <li><strong>Timely feedback:</strong> Provide feedback within 3 business days</li>
                    <li><strong>Assets and access:</strong> Provide necessary assets and access as requested</li>
                    <li><strong>Testing:</strong> Perform user acceptance testing within specified timeframes</li>
                </ul>
            </div>

            <!-- SECTION 9: CONFIDENTIALITY -->
            <div class="pc tc rv" id="s9">
                <div class="sn">09</div>
                <h2>Confidentiality</h2>
                <p>Both parties agree to hold all confidential information in strict confidence and not to disclose it to any third party without prior written consent, except as required by law or as necessary to perform the services.</p>
            </div>

            <!-- SECTION 10: LIMITATION OF LIABILITY -->
            <div class="pc tc rv" id="s10">
                <div class="sn">10</div>
                <h2>Limitation of Liability</h2>
                <div class="hb r"><p><strong>This section limits our liability. Please read it carefully.</strong></p></div>
                <ul class="pl">
                    <li><strong>No indirect damages:</strong> We shall not be liable for any indirect, incidental, or consequential damages</li>
                    <li><strong>Total liability cap:</strong> Our total liability shall not exceed the total amount actually paid by the Client for the specific engagement</li>
                    <li><strong>Third-party services:</strong> We are not liable for issues caused by third-party services or platforms</li>
                </ul>
            </div>

            <!-- SECTION 11: DISCLAIMER OF WARRANTIES -->
            <div class="pc tc rv" id="s11">
                <div class="sn">11</div>
                <h2>Disclaimer of Warranties</h2>
                <p>Our services are provided "as is" and "as available" without warranties of any kind. We specifically disclaim all implied warranties, including merchantability and fitness for a particular purpose.</p>
            </div>

            <!-- SECTION 12: INDEMNIFICATION -->
            <div class="pc tc rv" id="s12">
                <div class="sn">12</div>
                <h2>Indemnification</h2>
                <p>You agree to indemnify and hold harmless DRN.today from any claims arising from your violation of these Terms or misuse of our services.</p>
            </div>

            <!-- SECTION 13: TERMINATION -->
            <div class="pc tc rv" id="s13">
                <div class="sn">13</div>
                <h2>Termination</h2>
                <p>The Client may terminate a project agreement with written notice. Upon termination, the Client shall pay for all work completed up to the date of termination. We may terminate if the Client fails to make payment or materially breaches these Terms.</p>
            </div>

            <!-- SECTION 14: GOVERNING LAW -->
            <div class="pc tc rv" id="s14">
                <div class="sn">14</div>
                <h2>Governing Law</h2>
                <p>These Terms shall be governed by the laws of <strong>India</strong>. The parties submit to the exclusive jurisdiction of the courts of <strong>Bihar, India</strong>.</p>
            </div>

            <!-- SECTION 15: DISPUTE RESOLUTION -->
            <div class="pc tc rv" id="s15">
                <div class="sn">15</div>
                <h2>Dispute Resolution</h2>
                <p>We believe in resolving disputes amicably. Contact us directly at <a href="mailto:<?php echo EMAIL; ?>"><?php echo EMAIL; ?></a> for informal resolution. If unresolved within 30 days, the dispute shall be submitted to binding arbitration in Bihar, India.</p>
            </div>

            <!-- SECTION 16: CHANGES TO TERMS -->
            <div class="pc tc rv" id="s16">
                <div class="sn">16</div>
                <h2>Changes to Terms</h2>
                <p>We may modify these Terms at any time. Updated Terms will be posted on this page with a revised "Last Updated" date. Your continued use of our services constitutes acceptance of the updated Terms.</p>
            </div>

            <!-- SECTION 17: CONTACT INFORMATION -->
            <div class="pc tc rv" id="s17">
                <div class="sn">17</div>
                <h2>Contact Information</h2>
                <p>For any questions regarding these Terms, please contact us:</p>
                <div class="cg">
                    <a href="mailto:<?php echo EMAIL; ?>" class="ci"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg><div><div class="cil">Email</div><div class="civ"><?php echo EMAIL; ?></div></div></a>
                    <a href="<?php echo whatsapp_link(); ?>" target="_blank" class="ci"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg><div><div class="cil">WhatsApp</div><div class="civ"><?php echo PHONE; ?></div></div></a>
                    <a href="<?php echo telegram_link(); ?>" target="_blank" class="ci"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg><div><div class="cil">Telegram</div><div class="civ">@drntoday</div></div></a>
                </div>
                <div class="hb g" style="margin-top: 18px;"><p><strong>Direct response guaranteed.</strong> All legal inquiries are handled personally by Somnath Kurmi.</p></div>
            </div>

        </div>
    </div>
</section>

<!-- ACKNOWLEDGMENT SECTION -->
<section class="sp" style="background: radial-gradient(circle at 50% 50%, rgba(139,92,246,0.06) 0%, transparent 60%);">
    <div class="container">
        <div class="pw" style="max-width: 800px; margin: 0 auto;">
            <div class="rqc tc rv" style="background: var(--glass-bg); backdrop-filter: blur(var(--glass-blur)); border: 1px solid var(--glass-border); border-radius: 20px; padding: 50px; text-align: center;">
                <div class="rqi" style="width: 70px; height: 70px; border-radius: 50%; margin: 0 auto 24px; display: flex; align-items: center; justify-content: center; background: rgba(139,92,246,0.1); border: 1px solid rgba(139,92,246,0.3);">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                </div>
                <h2 style="font-size: 1.6rem; margin-bottom: 12px;">Acknowledge These Terms</h2>
                <p style="color: var(--gray); font-size: 0.95rem; margin: 0 auto 30px;">By proceeding with any service engagement, you confirm that you have read, understood, and agree to be bound by these Terms of Service.</p>
                <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
                    <div class="mw"><button class="bp bsm rb" id="bagree"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> I Agree to These Terms</button></div>
                    <div class="mw"><button class="bs bsm rb" id="bquest"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg> I Have Questions</button></div>
                </div>
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
        const container = document.createElement('div');
        container.style.cssText = 'position: fixed; bottom: 100px; right: 30px; z-index: 99999; display: flex; flex-direction: column; gap: 10px;';
        if (!document.querySelector('.toast-container')) {
            container.className = 'toast-container';
            document.body.appendChild(container);
        }
        const toastContainer = document.querySelector('.toast-container');
        const toast = document.createElement('div');
        toast.className = 'toast';
        toast.style.cssText = 'background: rgba(11,15,26,0.95); backdrop-filter: blur(20px); border: 1px solid var(--glass-border); border-radius: 12px; padding: 16px 20px; min-width: 280px; display: flex; align-items: flex-start; gap: 12px; transform: translateX(120%); transition: transform 0.4s;';
        toast.innerHTML = `
            <div class="toast-icon">${type === 'success' ? '✓' : 'ℹ'}</div>
            <div style="flex:1"><div style="font-weight: 700; margin-bottom: 3px;">${title}</div><div style="font-size: 0.76rem; color: var(--gray);">${message}</div></div>
            <button style="background: none; border: none; color: var(--gray); cursor: none;" onclick="this.parentElement.remove()">×</button>
        `;
        toastContainer.appendChild(toast);
        setTimeout(() => toast.style.transform = 'translateX(0)', 10);
        setTimeout(() => {
            toast.style.transform = 'translateX(120%)';
            setTimeout(() => toast.remove(), 400);
        }, 5000);
    }

    // Acknowledgment buttons
    document.getElementById('bagree')?.addEventListener('click', () => {
        showToast('Terms Acknowledged', 'Thank you. A formal agreement will be established through a signed Statement of Work for your specific project.', 'success');
    });
    document.getElementById('bquest')?.addEventListener('click', () => {
        showToast('Questions About These Terms', 'Please reach out to Somnath Kurmi directly: <?php echo EMAIL; ?> | WhatsApp: <?php echo PHONE; ?>', 'info');
    });
</script>

<?php include 'includes/footer.php'; ?>
