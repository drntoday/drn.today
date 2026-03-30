<?php include __DIR__ . '/social-dock.php'; ?>

<footer style="background:#060910; padding:80px 0 30px; border-top:1px solid rgba(255,255,255,0.05); position:relative; z-index:2;">
    <div class="container">
        <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap:40px; margin-bottom:60px;">
            <div>
                <a href="index.php" class="logo" style="margin-bottom:15px; display:block; color:var(--white); font-size:1.8rem;">DRN<span>.today</span></a>
                <div style="font-size: 0.8rem; color: var(--accent-cyan); text-transform: uppercase; letter-spacing: 2px; margin-bottom: 15px; font-weight: 700;">Developers Resource Nexus</div>
                <p style="color:var(--gray); font-size:0.9rem; line-height:1.6; margin-bottom: 20px;">Engineering intelligent systems that allow businesses to scale on autopilot.</p>
                <div style="border-left: 2px solid var(--primary-purple); padding-left: 15px;">
                    <div style="color: var(--white); font-size: 0.95rem; font-weight: 600;">Founded by <?php echo FOUNDER_NAME; ?></div>
                    <div style="color: var(--gray); font-size: 0.8rem;">Lead Architect & Visionary</div>
                </div>
            </div>
            <div>
                <h4 style="color:var(--white); margin-bottom:20px; font-size:1.1rem;">Explore</h4>
                <ul>
                    <li style="margin-bottom:12px;"><a href="ai-agents.php" style="color:var(--gray); font-size:0.9rem;">AI Solutions</a></li>
                    <li style="margin-bottom:12px;"><a href="services.php" style="color:var(--gray); font-size:0.9rem;">Services</a></li>
                    <li style="margin-bottom:12px;"><a href="case-studies.php" style="color:var(--accent-cyan); font-size:0.9rem;">Case Studies</a></li>
                    <li style="margin-bottom:12px;"><a href="contact.php" style="color:var(--gray); font-size:0.9rem;">Contact</a></li>
                    <li style="margin-bottom:12px;"><a href="privacy-policy.php" style="color:var(--gray); font-size:0.9rem;">Privacy Policy</a></li>
                    <li style="margin-bottom:12px;"><a href="terms-of-service.php" style="color:var(--gray); font-size:0.9rem;">Terms of Service</a></li>
                </ul>
            </div>
            <div>
                <h4 style="color:var(--white); margin-bottom:20px; font-size:1.1rem;">Connect</h4>
                <div class="social-links">
                    <a href="https://www.linkedin.com/in/somnath-kurmi-027128385" target="_blank" class="social-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg></a>
                    <a href="https://x.com/drn_today" target="_blank" class="social-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2H21.5l-7.19 8.21L22.5 22h-6.48l-5.08-6.64L4.7 22H1.44l7.7-8.8L1.5 2h6.64l4.58 6.05L18.24 2zm-1.14 18h1.8L7.04 4h-1.9l11.96 16z"/></svg></a>
                    <a href="https://github.com/drntoday" target="_blank" class="social-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"/></svg></a>
                </div>
            </div>
        </div>
        <div style="text-align:center; padding-top:30px; border-top:1px solid rgba(255,255,255,0.05); color:var(--gray); font-size:0.8rem;">
            &copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?> (Developers Resource Nexus). All rights reserved. Built by <a href="<?php echo FOUNDER_LINKEDIN; ?>" style="color:var(--primary-blue);"><?php echo FOUNDER_NAME; ?></a>.
        </div>
    </div>
</footer>

<script src="<?php echo asset('js/main.js'); ?>"></script>
</body>
</html>

