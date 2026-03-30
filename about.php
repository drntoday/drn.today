<?php
$page_title = 'About Us | DRN.today - Founder & AI Development';
$page_description = 'Learn about DRN.today and founder Somnath Kurmi. We build practical AI automation agents and custom software solutions for growing businesses.';
include 'includes/header.php';
?>

<!-- HERO SECTION -->
<section id="home" class="page-hero" style="min-height: 60vh;">
    <div class="hero-bg-glow hero-layer" data-speed="0.2"></div>
    <div class="container hero-content reveal">
        <h1>The Team Behind <span class="text-gradient">DRN.today</span></h1>
        <p>We are a development studio focused on practical AI automation. We help businesses save time and cut costs by integrating intelligent agents into daily workflows.</p>
        <div class="hero-buttons" style="display: flex; gap: 20px; justify-content: center; margin-top: 30px;">
            <div class="magnetic-wrap">
                <a href="#founder" class="btn btn-primary"> Meet the Founder </a>
            </div>
        </div>
    </div>
</section>

<!-- FOUNDER SECTION -->
<section id="founder" class="section-padding">
    <div class="container">
        <div class="bio-grid" style="display: grid; grid-template-columns: 1fr 1.2fr; gap: 50px; align-items: center;">
            <div class="bio-image reveal tilt-card" style="padding: 0; overflow: hidden; border-radius: 16px; background: linear-gradient(135deg, rgba(6,182,212,0.05), rgba(139,92,246,0.05)); border: 1px solid var(--glass-border); display: flex; align-items: center; justify-content: center;">
                <img src="<?php echo asset('images/somnath-kurmi.jpg'); ?>" alt="Somnath Kurmi - Founder of DRN.today" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div class="bio-text reveal">
                <span style="color: var(--accent-cyan); font-weight: 600; text-transform: uppercase; letter-spacing: 2px; font-size: 0.85rem;">Founder</span>
                <h2 style="font-size: 2.2rem; margin: 10px 0 20px;">Somnath Kurmi</h2>
                <p>Somnath Kurmi is a software engineer and the founder of DRN.today. With a background in full-stack development, he transitioned into the AI space to solve a recurring problem he saw in the industry: businesses struggling with operational inefficiency.</p>
                <p>He founded DRN.today (Developers Resource Nexus) to bridge the gap between complex AI technology and practical business application. His approach is hands-on—he works directly with clients to identify bottlenecks and deploys custom AI agents to handle them.</p>
                <blockquote style="border-left: 3px solid var(--primary-blue); padding-left: 20px; margin: 20px 0; color: var(--white); font-size: 1rem;">
                    "My goal isn't to build flashy tech demos. It's to build systems that actually run parts of your business while you sleep."
                </blockquote>
                <a href="<?php echo FOUNDER_LINKEDIN; ?>" target="_blank" class="btn btn-secondary" style="padding: 10px 20px; margin-top: 10px;">
                    LinkedIn Profile
                </a>
            </div>
        </div>
    </div>
</section>

<!-- PHILOSOPHY -->
<section id="philosophy" class="section-padding" style="background: rgba(0,0,0,0.2);">
    <div class="container">
        <div class="section-title reveal">
            <h2 class="text-gradient">How We Work</h2>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 25px;">
            <div class="ai-card tilt-card reveal">
                <div class="ai-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                </div>
                <h3>Practical Over Hype</h3>
                <p>We focus on tools that deliver immediate ROI. If an automation doesn't save you time or money, we don't build it.</p>
            </div>

            <div class="ai-card tilt-card reveal">
                <div class="ai-icon" style="color: var(--accent-cyan);">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                </div>
                <h3>Direct Collaboration</h3>
                <p>As a founder-led studio, you work directly with the architect. No sales reps, no miscommunication—just solutions.</p>
            </div>

            <div class="ai-card tilt-card reveal">
                <div class="ai-icon" style="color: var(--primary-purple);">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                </div>
                <h3>Transparent Code</h3>
                <p>We document everything. You own the code, the agents, and the logic. We believe in empowering your team, not creating dependency.</p>
            </div>
        </div>
    </div>
</section>

<!-- MISSION & VISION -->
<section id="mission" class="section-padding">
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 40px;">
            <div class="ai-card reveal">
                <h3 style="color: var(--white); font-size: 1.3rem; margin-bottom: 15px;">Our Mission</h3>
                <p style="color: var(--gray); font-size: 1rem; line-height: 1.8;">
                    To help small and medium-sized businesses compete with larger corporations by giving them access to the same automation technologies, without the enterprise price tag.
                </p>
            </div>
            
            <div class="ai-card reveal">
                <h3 style="color: var(--white); font-size: 1.3rem; margin-bottom: 15px;">Our Vision</h3>
                <p style="color: var(--gray); font-size: 1rem; line-height: 1.8;">
                    To create a network of businesses that operate efficiently with lean teams, supported by AI agents that handle the repetitive work, allowing humans to focus on strategy and growth.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- STATS -->
<section id="stats" class="section-padding">
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; text-align: center;">
            <div class="reveal">
                <div style="font-size: 2.5rem; font-weight: 800; color: var(--white);">5+</div>
                <div style="color: var(--accent-cyan); font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px;">Years in Tech</div>
            </div>
            <div class="reveal">
                <div style="font-size: 2.5rem; font-weight: 800; color: var(--white);">30+</div>
                <div style="color: var(--accent-cyan); font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px;">Projects Delivered</div>
            </div>
            <div class="reveal">
                <div style="font-size: 2.5rem; font-weight: 800; color: var(--white);">100%</div>
                <div style="color: var(--accent-cyan); font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px;">Client Ownership</div>
            </div>
        </div>
    </div>
</section>

<!-- TEAM & PARTNERS -->
<section id="team" class="section-padding" style="background: rgba(0,0,0,0.2);">
    <div class="container">
        <div class="section-title reveal">
            <h2>The Team</h2>
            <p>A lean, expert-driven structure.</p>
        </div>

        <div class="team-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
            <!-- Founder Card -->
            <div class="team-card reveal" style="background: var(--glass-bg); border: 1px solid var(--glass-border); border-radius: 16px; padding: 30px; text-align: center; transition: 0.3s;">
                <div class="team-icon" style="width: 60px; height: 60px; background: rgba(255,255,255,0.05); border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; color: var(--accent-cyan);">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                </div>
                <h3>Somnath Kurmi</h3>
                <span class="role" style="color: var(--primary-purple); font-size: 0.85rem; font-weight: 600; margin-bottom: 15px; display: block;">Founder & Lead Engineer</span>
                <p style="color: var(--gray); font-size: 0.85rem;">Oversees project architecture, AI model training, and client strategy. The primary point of contact for all DRN.today clients.</p>
            </div>

            <!-- Partner Network -->
            <div class="team-card reveal" style="background: var(--glass-bg); border: 1px solid var(--glass-border); border-radius: 16px; padding: 30px; text-align: center; transition: 0.3s;">
                <div class="team-icon" style="width: 60px; height: 60px; background: rgba(139, 92, 246, 0.1); border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; color: var(--primary-purple);">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                </div>
                <h3>Specialist Partners</h3>
                <span class="role" style="color: var(--primary-purple); font-size: 0.85rem; font-weight: 600; margin-bottom: 15px; display: block;">Extended Network</span>
                <p style="color: var(--gray); font-size: 0.85rem;">For large-scale projects, we collaborate with trusted UI/UX designers and cloud architects to ensure enterprise-grade delivery.</p>
            </div>

            <!-- Tech Stack -->
            <div class="team-card reveal" style="background: var(--glass-bg); border: 1px solid var(--glass-border); border-radius: 16px; padding: 30px; text-align: center; transition: 0.3s;">
                <div class="team-icon" style="width: 60px; height: 60px; background: rgba(6, 182, 212, 0.1); border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; color: var(--accent-cyan);">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
                </div>
                <h3>Core Stack</h3>
                <span class="role" style="color: var(--primary-purple); font-size: 0.85rem; font-weight: 600; margin-bottom: 15px; display: block;">Our Toolkit</span>
                <p style="color: var(--gray); font-size: 0.85rem;">Python, LangChain, Node.js, React, and Cloud APIs. We use robust, industry-standard tools to build reliable systems.</p>
            </div>
        </div>
    </div>
</section>

<!-- TIMELINE -->
<section id="journey" class="section-padding">
    <div class="container">
        <div class="section-title reveal">
            <h2>Our Journey</h2>
        </div>
        <div style="max-width: 700px; margin: 0 auto;">
            <div class="timeline" style="position: relative; padding-left: 30px; border-left: 2px solid var(--glass-border); margin-top: 20px;">
                <div class="timeline-item" style="position: relative; margin-bottom: 30px; padding-left: 30px;">
                    <span class="timeline-date" style="font-family: 'Courier New', monospace; color: var(--accent-cyan); font-size: 0.85rem; font-weight: 700;">2020</span>
                    <div class="timeline-content">
                        <h3 style="font-size: 1.1rem; margin: 5px 0;">Freelance Foundation</h3>
                        <p style="color: var(--gray); font-size: 0.9rem;">Started as an independent software development consultancy, focusing on web and mobile applications for local businesses.</p>
                    </div>
                </div>
                
                <div class="timeline-item" style="position: relative; margin-bottom: 30px; padding-left: 30px;">
                    <span class="timeline-date" style="font-family: 'Courier New', monospace; color: var(--accent-cyan); font-size: 0.85rem; font-weight: 700;">2022</span>
                    <div class="timeline-content">
                        <h3 style="font-size: 1.1rem; margin: 5px 0;">Process Automation</h3>
                        <p style="color: var(--gray); font-size: 0.9rem;">Shifted focus to backend automation. began integrating scripts and APIs to automate manual data entry and reporting tasks for clients.</p>
                    </div>
                </div>

                <div class="timeline-item" style="position: relative; margin-bottom: 30px; padding-left: 30px;">
                    <span class="timeline-date" style="font-family: 'Courier New', monospace; color: var(--accent-cyan); font-size: 0.85rem; font-weight: 700;">2024</span>
                    <div class="timeline-content">
                        <h3 style="font-size: 1.1rem; margin: 5px 0;">Agentic AI Integration</h3>
                        <p style="color: var(--gray); font-size: 0.9rem;">Launched DRN.today. Adopted Large Language Models (LLMs) and Agentic frameworks to build systems that can reason and execute complex tasks.</p>
                    </div>
                </div>

                <div class="timeline-item" style="position: relative; margin-bottom: 30px; padding-left: 30px;">
                    <span class="timeline-date" style="font-family: 'Courier New', monospace; color: var(--accent-cyan); font-size: 0.85rem; font-weight: 700;">Today</span>
                    <div class="timeline-content">
                        <h3 style="font-size: 1.1rem; margin: 5px 0;">Scaling Operations</h3>
                        <p style="color: var(--gray); font-size: 0.9rem;">Actively deploying AI agents for client support, lead generation, and workflow management across India and global markets.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section id="cta" class="section-padding" style="background: linear-gradient(180deg, var(--bg-color) 0%, rgba(59,130,246,0.05) 100%);">
    <div class="container">
        <div class="ai-card reveal" style="text-align: center; max-width: 800px; margin: 0 auto; padding: 50px 30px; background: var(--glass-bg); backdrop-filter: blur(var(--glass-blur)); border: 1px solid var(--glass-border);">
            <h2 style="font-size: 2rem; margin-bottom: 20px;">Let's Discuss Your Automation Needs</h2>
            <p style="color: var(--gray); font-size: 1rem; margin-bottom: 30px;">
                If you have a process that feels repetitive, it can likely be automated. Let's talk about what's possible.
            </p>
            <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo whatsapp_link(); ?>" target="_blank" class="btn btn-primary" style="background: #25D366; border-color: #25D366;">
                    WhatsApp Us
                </a>
                <a href="contact.php" class="btn btn-secondary">
                    Contact Form
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
