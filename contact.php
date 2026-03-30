<?php
$page_title = 'Contact DRN.today | Strategic Inquiries';
$page_description = 'Engage with DRN.today for enterprise AI solutions and strategic automation consulting. Direct access to leadership and regional offices in Bihar and Haryana.';
include 'includes/header.php';
?>

<!-- HERO SECTION -->
<section id="home" class="page-hero" style="min-height: 60vh;">
    <div class="hero-bg-glow"></div>
    <div class="container hero-content reveal">
        <div class="breadcrumb"><a href="index.php">Home</a> / Contact</div>
        <h1>Strategic <span class="text-gradient">Engagement</span></h1>
        <p style="color: var(--gray); font-size: 1.2rem; max-width: 600px; margin: 0 auto;">
            Initiate a dialogue with our principal architects. We are prepared to deploy resources that align with your strategic objectives.
        </p>
    </div>
</section>

<!-- CHANNELS GRID -->
<section id="channels" style="position: relative; z-index: 5;">
    <div class="container">
        <div class="channels-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; margin-top: -80px; position: relative; z-index: 5;">
            <!-- WhatsApp -->
            <div class="glass-card tilt-card channel-card reveal" style="padding: 50px 30px; text-align: center;">
                <div class="channel-icon" style="width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); transition: 0.4s;">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="#25D366"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                </div>
                <h3 style="font-size: 1.5rem; margin-bottom: 15px;">Priority Messaging</h3>
                <p style="color: var(--gray); margin-bottom: 30px; font-size: 1rem;">Secure immediate operational support. Ideal for time-sensitive deployments and rapid coordination.</p>
                <a href="<?php echo whatsapp_link(); ?>" target="_blank" class="btn btn-whatsapp ripple-btn">Engage Channel</a>
            </div>

            <!-- Telegram -->
            <div class="glass-card tilt-card channel-card reveal" style="padding: 50px 30px; text-align: center;">
                <div class="channel-icon" style="width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); transition: 0.4s;">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="#0088cc"><path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/></svg>
                </div>
                <h3 style="font-size: 1.5rem; margin-bottom: 15px;">Technical Liaison</h3>
                <p style="color: var(--gray); margin-bottom: 30px; font-size: 1rem;">Encrypted channel for architectural discussions, file transfers, and team synchronization.</p>
                <a href="<?php echo telegram_link(); ?>" target="_blank" class="btn btn-telegram ripple-btn">Initiate Protocol</a>
            </div>

            <!-- Phone -->
            <div class="glass-card tilt-card channel-card reveal" style="padding: 50px 30px; text-align: center;">
                <div class="channel-icon" style="width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); transition: 0.4s;">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="var(--primary-purple)" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                </div>
                <h3 style="font-size: 1.5rem; margin-bottom: 15px;">Executive Line</h3>
                <p style="color: var(--gray); margin-bottom: 30px; font-size: 1rem;">Direct verbal communication with senior leadership for strategic alignment and consultation.</p>
                <a href="tel:<?php echo PHONE; ?>" class="btn btn-secondary ripple-btn" style="border-color: var(--primary-purple); color: var(--primary-purple);">Connect</a>
            </div>

            <!-- Email -->
            <div class="glass-card tilt-card channel-card reveal" style="padding: 50px 30px; text-align: center;">
                <div class="channel-icon" style="width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); transition: 0.4s;">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="var(--danger-red)" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                </div>
                <h3 style="font-size: 1.5rem; margin-bottom: 15px;">Formal Correspondence</h3>
                <p style="color: var(--gray); margin-bottom: 30px; font-size: 1rem;">For Requests for Proposal (RFP), contracts, and official documentation submissions.</p>
                <a href="mailto:<?php echo EMAIL; ?>" class="btn btn-secondary ripple-btn" style="border-color: var(--danger-red); color: var(--danger-red);">Transmit</a>
            </div>
        </div>
    </div>
</section>

<!-- EXECUTIVE ACCESS SECTION -->
<section id="executive-access" class="section-padding" style="background: linear-gradient(180deg, transparent 0%, rgba(59,130,246,0.05) 100%);">
    <div class="container">
        <div class="glass-card exec-card" style="padding: 80px; text-align: center; background: linear-gradient(135deg, rgba(59,130,246,0.1) 0%, rgba(139,92,246,0.05) 100%);">
            <div class="availability-badge" style="display: inline-flex; align-items: center; gap: 10px; background: rgba(16, 185, 129, 0.1); border: 1px solid rgba(16, 185, 129, 0.3); border-radius: 50px; padding: 10px 20px; margin-bottom: 30px; font-weight: 600; text-transform: uppercase; font-size: 0.85rem; color: var(--success-green);">
                <div class="pulse-dot" style="width: 8px; height: 8px; background: var(--success-green); border-radius: 50%; animation: pulse 2s infinite;"></div>
                PRINCIPAL ARCHITECT AVAILABLE
            </div>
            <h2 style="font-size: 2.5rem; margin-bottom: 20px;">Direct Consultation with <span class="text-gradient">Somnath Kurmi</span></h2>
            <p style="color: var(--gray); max-width: 700px; margin: 0 auto 40px; font-size: 1.1rem;">
                Engage directly with our founder to align your business objectives with high-precision automation strategies. We prioritize clarity, efficiency, and measurable outcomes.
            </p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo whatsapp_link(); ?>" target="_blank" class="btn btn-whatsapp">Request Strategy Call</a>
                <a href="tel:<?php echo PHONE; ?>" class="btn btn-secondary">Executive Office</a>
            </div>
        </div>
    </div>
</section>

<!-- LOCATIONS SECTION -->
<section id="locations" class="section-padding">
    <div class="container">
        <div class="section-title reveal">
            <h2>Operational <span class="text-gradient">Headquarters</span></h2>
            <p>Strategic hubs for development, client support, and R&D operations.</p>
        </div>

        <div class="locations-layout" style="display: flex; flex-direction: column; gap: 40px;">
            <div class="addresses-row" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
                <!-- Primary HQ: Bihar -->
                <div class="glass-card location-card reveal" style="padding: 40px; height: 100%;">
                    <span class="loc-badge" style="display: inline-block; padding: 5px 15px; background: rgba(59, 130, 246, 0.1); color: var(--primary-blue); border-radius: 20px; font-size: 0.8rem; font-weight: 600; margin-bottom: 20px; letter-spacing: 1px;">PRIMARY HQ</span>
                    <h3 class="loc-title" style="font-size: 1.8rem; margin-bottom: 15px;">Bihar, India</h3>
                    <p class="loc-address" style="color: var(--gray); margin-bottom: 30px; line-height: 1.8;">
                        DRN.today Development Center<br>
                        Bikramganj, Rohtas District<br>
                        Bihar - 802212, India
                    </p>
                    <div style="margin-top: 20px; padding-top: 20px; border-top: 1px solid var(--glass-border);">
                        <p style="color: var(--white); font-weight: 600; margin-bottom: 5px;">Operating Hours</p>
                        <p style="color: var(--gray); font-size: 0.9rem;">Monday - Saturday: 10:00 AM - 7:00 PM IST</p>
                    </div>
                </div>

                <!-- Regional Office: Haryana -->
                <div class="glass-card location-card reveal" style="padding: 40px; height: 100%;">
                    <span class="loc-badge" style="display: inline-block; padding: 5px 15px; background: rgba(139, 92, 246, 0.1); color: var(--primary-purple); border-radius: 20px; font-size: 0.8rem; font-weight: 600; margin-bottom: 20px; letter-spacing: 1px;">REGIONAL OFFICE</span>
                    <h3 class="loc-title" style="font-size: 1.8rem; margin-bottom: 15px;">Haryana, India</h3>
                    <p class="loc-address" style="color: var(--gray); margin-bottom: 30px; line-height: 1.8;">
                        DRN.today Northern Division<br>
                        Jagadhri, Yamunanagar<br>
                        Haryana - 135003, India
                    </p>
                    <div style="margin-top: 20px; padding-top: 20px; border-top: 1px solid var(--glass-border);">
                        <p style="color: var(--white); font-weight: 600; margin-bottom: 5px;">Availability</p>
                        <p style="color: var(--gray); font-size: 0.9rem;">By Appointment Only</p>
                    </div>
                </div>
            </div>

            <!-- Google Map Embed (Bikramganj, Bihar) -->
            <div class="map-wrapper reveal" style="border-radius: 16px; overflow: hidden; border: 1px solid var(--glass-border); height: 450px; width: 100%; position: relative;">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3606.746542697538!2d84.0667!3d25.2589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398d2c3e0c7b5f1d%3A0x6b1a5c8b8b8b8b8b!2sBikramganj%2C%20Bihar%20802212!5e0!3m2!1sen!2sin!4v1699999999999!5m2!1sen!2sin" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade"
                    style="width: 100%; height: 100%; border: 0; filter: invert(90%) hue-rotate(180deg) brightness(95%) contrast(90%);">
                </iframe>
            </div>
        </div>
    </div>
</section>

<!-- ADDITIONAL CONTACT INFO SECTION -->
<section class="section-padding" style="background: radial-gradient(circle at 50% 50%, rgba(59,130,246,0.05) 0%, transparent 60%);">
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
            <!-- Business Hours -->
            <div class="glass-card reveal" style="padding: 35px;">
                <div class="info-icon" style="color: var(--accent-cyan); margin-bottom: 20px;">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                </div>
                <h3 style="font-size: 1.3rem; margin-bottom: 15px;">Response Time</h3>
                <p style="color: var(--gray); line-height: 1.7;">Within 2-4 hours during business hours</p>
                <p style="color: var(--gray); margin-top: 10px;">Founder available via WhatsApp for urgent matters</p>
            </div>

            <!-- Direct Contact -->
            <div class="glass-card reveal" style="padding: 35px;">
                <div class="info-icon" style="color: var(--success-green); margin-bottom: 20px;">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                </div>
                <h3 style="font-size: 1.3rem; margin-bottom: 15px;">Office Locations</h3>
                <p style="color: var(--gray); line-height: 1.7;">
                    <strong style="color: var(--white);">Bihar:</strong> Bikramganj, Rohtas - 802212<br>
                    <strong style="color: var(--white);">Haryana:</strong> Jagadhri, Yamunanagar - 135003
                </p>
            </div>

            <!-- Support -->
            <div class="glass-card reveal" style="padding: 35px;">
                <div class="info-icon" style="color: var(--primary-purple); margin-bottom: 20px;">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                </div>
                <h3 style="font-size: 1.3rem; margin-bottom: 15px;">24/7 Support</h3>
                <p style="color: var(--gray); line-height: 1.7;">Existing clients have priority access to our engineering team</p>
                <a href="mailto:<?php echo EMAIL; ?>" style="color: var(--accent-cyan); margin-top: 10px; display: inline-block;">contact@drn.today</a>
            </div>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="section-padding" style="background: linear-gradient(180deg, var(--bg-color) 0%, rgba(59,130,246,0.08) 100%);">
    <div class="container">
        <div class="cta-gateway reveal" style="position: relative; border-radius: 28px; padding: 80px 50px; text-align: center; overflow: hidden; background: rgba(59, 130, 246, 0.06); border: 1px solid rgba(59, 130, 246, 0.2);">
            <div class="cta-gateway-pulse"></div>
            <div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(59, 130, 246, 0.1); border: 1px solid rgba(59, 130, 246, 0.3); border-radius: 50px; padding: 6px 18px; font-size: 0.72rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: var(--primary-blue); margin-bottom: 24px;">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                Connect Now
            </div>
            <h2 style="font-size: clamp(2rem, 4vw, 2.8rem); margin-bottom: 20px; font-weight: 800; letter-spacing: -1px;">Ready to <span class="text-gradient">Automate</span> Your Business?</h2>
            <p style="color: var(--white); font-size: 1.1rem; margin-bottom: 10px; max-width: 580px; margin-left: auto; margin-right: auto; opacity: 0.9; line-height: 1.7;">Start with a free consultation. Direct access to founder Somnath Kurmi — no sales team, no gatekeepers.</p>
            <div class="cta-buttons" style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap; margin-top: 40px;">
                <a href="<?php echo whatsapp_link(); ?>" target="_blank" class="cta-contact-btn whatsapp-btn ripple-btn">
                    <svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                    WhatsApp
                </a>
                <a href="<?php echo telegram_link(); ?>" target="_blank" class="cta-contact-btn telegram-btn ripple-btn">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                    Telegram
                </a>
                <a href="mailto:<?php echo EMAIL; ?>" class="cta-contact-btn form-btn ripple-btn">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="M22 7l-8.97 5.7a1.94 1.94 0 01-2.06 0L2 7"/></svg>
                    Email Us
                </a>
            </div>
            <p style="margin-top: 24px; font-size: 0.82rem; color: var(--gray);">Response within 2 hours. Every inquiry goes directly to the founder.</p>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
