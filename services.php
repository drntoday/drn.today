<?php
$page_title = 'Our Services | DRN.today — Agentic AI, Web, App & Software Development';
$page_description = 'Explore DRN.today\'s full suite of services: Agentic AI, Web Development, Software Development, App Development, AI Chatbots, Machine Learning, and WordPress Solutions.';
include 'includes/header.php';
?>

<!-- PAGE HERO -->
<section class="page-hero" style="min-height: 50vh; padding-bottom: 60px;">
    <div class="hero-bg-glow hero-layer" data-speed="0.2"></div>
    <div class="holo-panel holo-1 hero-layer" data-speed="0.05"></div>
    <div class="holo-panel holo-2 hero-layer" data-speed="0.08"></div>

    <div class="container page-hero-content reveal" style="text-align: center; max-width: 800px;">
        <nav class="breadcrumb" style="display: flex; align-items: center; gap: 10px; margin-bottom: 25px; justify-content: center;">
            <a href="index.php" style="color: var(--gray);">Home</a>
            <span class="sep" style="color: var(--accent-cyan);">/</span>
            <span>Services</span>
        </nav>
        <h1 style="font-size: clamp(2.5rem, 5vw, 4rem); font-weight: 800; line-height: 1.1; margin-bottom: 20px; letter-spacing: -2px;">Our <span class="text-gradient">Expertise</span></h1>
        <p style="font-size: 1.15rem; color: var(--gray); margin-bottom: 15px;">Comprehensive digital solutions tailored for the future.</p>
        <div class="hero-philosophy" style="max-width: 650px; margin: 25px auto 0; padding: 20px 30px; background: rgba(255,255,255,0.02); border: 1px solid var(--glass-border); border-radius: 12px; font-size: 0.95rem; color: var(--gray); position: relative;">
            We don't sell hours — we engineer outcomes. Every service at DRN.today is designed to eliminate bottlenecks, reduce costs, and create measurable business velocity. From autonomous AI agents to pixel-perfect interfaces, we build systems that work while you sleep.
        </div>
    </div>
</section>

<!-- SERVICES OVERVIEW -->
<section class="section-padding" id="all-services">
    <div class="container">
        <div class="section-title reveal">
            <h2 class="text-gradient">Full Service Suite</h2>
            <p>Six specialized verticals. One unified mission: to automate and accelerate your business.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 30px;">

            <!-- SERVICE 1: Web Development -->
            <div class="service-detail-card tilt-card reveal" style="background: var(--glass-bg); backdrop-filter: blur(var(--glass-blur)); border: 1px solid var(--glass-border); border-radius: 20px; overflow: hidden; display: flex; flex-direction: column;">
                <div class="card-svg-area" style="width: 100%; height: 200px; display: flex; align-items: center; justify-content: center; background: rgba(0,0,0,0.3); border-bottom: 1px solid var(--glass-border);">
                    <svg width="140" height="140" viewBox="0 0 200 200" fill="none">
                        <rect x="30" y="25" width="140" height="100" rx="10" stroke="#3B82F6" stroke-width="2.5" fill="rgba(59,130,246,0.05)"/>
                        <line x1="30" y1="50" x2="170" y2="50" stroke="#3B82F6" stroke-width="1.5" opacity="0.5"/>
                        <circle cx="42" cy="38" r="4" fill="#F87171"/>
                        <circle cx="55" cy="38" r="4" fill="#FBBF24"/>
                        <circle cx="68" cy="38" r="4" fill="#34D399"/>
                        <text x="85" y="42" font-family="monospace" font-size="10" fill="rgba(255,255,255,0.3)">index.html</text>
                        <polyline points="50,75 65,90 85,65" stroke="#06B6D4" stroke-width="2.5"/>
                        <line x1="95" y1="80" x2="150" y2="80" stroke="rgba(255,255,255,0.2)" stroke-width="2"/>
                        <rect x="55" y="140" width="90" height="35" rx="6" stroke="#3B82F6" stroke-width="1.5" fill="rgba(59,130,246,0.03)" stroke-dasharray="4 3"/>
                        <text x="72" y="162" font-family="monospace" font-size="9" fill="rgba(255,255,255,0.25)">&lt;/&gt;</text>
                    </svg>
                </div>
                <div class="card-body" style="padding: 30px; flex: 1;">
                    <div class="card-icon" style="width: 56px; height: 56px; border-radius: 14px; background: rgba(59,130,246,0.1); display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/><line x1="14" y1="4" x2="10" y2="20"/></svg>
                    </div>
                    <h3 style="font-size: 1.3rem; margin-bottom: 12px;">Web Development</h3>
                    <p class="card-desc" style="color: var(--gray); font-size: 0.95rem; margin-bottom: 20px;">High-performance websites and web applications built with modern technologies like React, Vue, Next.js, and Node.js. Engineered for speed, scalability, and conversion.</p>
                    <div class="feature-tags" style="display: flex; flex-wrap: wrap; gap: 8px; margin-bottom: 25px;">
                        <span class="feature-tag" style="padding: 6px 14px; border-radius: 20px; background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.08); font-size: 0.8rem; color: var(--accent-cyan);">Responsive Design</span>
                        <span class="feature-tag">SEO Optimization</span>
                        <span class="feature-tag">CMS Integration</span>
                        <span class="feature-tag">E-commerce</span>
                    </div>
                    <div class="card-cta"><a href="web-development.php" class="btn btn-secondary btn-sm ripple-btn">Learn More &rarr;</a></div>
                </div>
            </div>

            <!-- SERVICE 2: Software Development -->
            <div class="service-detail-card tilt-card reveal">
                <div class="card-svg-area">
                    <svg width="140" height="140" viewBox="0 0 200 200" fill="none">
                        <rect x="45" y="30" width="110" height="140" rx="10" stroke="#8B5CF6" stroke-width="2.5" fill="rgba(139,92,246,0.05)"/>
                        <rect x="55" y="50" width="90" height="25" rx="5" stroke="#8B5CF6" stroke-width="1.5" fill="rgba(139,92,246,0.08)"/>
                        <rect x="60" y="55" width="30" height="6" rx="2" fill="#06B6D4" opacity="0.5"/>
                        <rect x="55" y="85" width="90" height="25" rx="5" stroke="#8B5CF6" stroke-width="1.5" fill="rgba(139,92,246,0.08)"/>
                        <rect x="60" y="90" width="40" height="6" rx="2" fill="#34D399" opacity="0.5"/>
                        <rect x="55" y="120" width="90" height="25" rx="5" stroke="#8B5CF6" stroke-width="1.5" fill="rgba(139,92,246,0.08)"/>
                        <rect x="60" y="125" width="25" height="6" rx="2" fill="#FBBF24" opacity="0.5"/>
                        <circle cx="100" cy="170" r="8" stroke="#8B5CF6" stroke-width="1.5" fill="rgba(139,92,246,0.1)"/>
                        <line x1="100" y1="166" x2="100" y2="174" stroke="#06B6D4" stroke-width="1.5"/>
                        <text x="32" y="62" text-anchor="middle" fill="#9CA3AF" font-size="5" font-family="Inter">SOFTWARE</text>
                    </svg>
                </div>
                <div class="card-body">
                    <div class="card-icon">
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18"/><path d="M9 21V9"/></svg>
                    </div>
                    <h3>Software Development</h3>
                    <p class="card-desc">Custom SaaS solutions and desktop software tailored to your operational needs. From internal tools to market-ready products, we engineer it all.</p>
                    <div class="feature-tags">
                        <span class="feature-tag">Custom CRM</span>
                        <span class="feature-tag">ERP Systems</span>
                        <span class="feature-tag">Inventory Mgmt</span>
                        <span class="feature-tag">Analytics</span>
                    </div>
                    <div class="card-cta"><a href="software-development.php" class="btn btn-secondary btn-sm ripple-btn">Learn More &rarr;</a></div>
                </div>
            </div>

            <!-- SERVICE 3: App Development -->
            <div class="service-detail-card tilt-card reveal">
                <div class="card-svg-area">
                    <svg width="140" height="140" viewBox="0 0 200 200" fill="none">
                        <rect x="60" y="20" width="80" height="160" rx="14" stroke="#06B6D4" stroke-width="2.5" fill="rgba(6,182,212,0.05)"/>
                        <circle cx="100" cy="165" r="6" stroke="#06B6D4" stroke-width="1.5" fill="none"/>
                        <rect x="72" y="48" width="56" height="30" rx="6" fill="rgba(6,182,212,0.1)" stroke="#06B6D4" stroke-width="1"/>
                        <rect x="78" y="54" width="25" height="5" rx="2" fill="#3B82F6" opacity="0.6"/>
                        <rect x="72" y="86" width="26" height="26" rx="6" fill="rgba(139,92,246,0.1)" stroke="#8B5CF6" stroke-width="1" opacity="0.6"/>
                        <rect x="102" y="86" width="26" height="26" rx="6" fill="rgba(59,130,246,0.1)" stroke="#3B82F6" stroke-width="1" opacity="0.6"/>
                        <text x="32" y="62" text-anchor="middle" fill="#9CA3AF" font-size="5" font-family="Inter">MOBILE</text>
                    </svg>
                </div>
                <div class="card-body">
                    <div class="card-icon">
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg>
                    </div>
                    <h3>App Development</h3>
                    <p class="card-desc">Native and cross-platform mobile applications for iOS and Android using React Native and Flutter. Ship once, run everywhere.</p>
                    <div class="feature-tags">
                        <span class="feature-tag">Push Notifications</span>
                        <span class="feature-tag">Offline Mode</span>
                        <span class="feature-tag">Biometric Auth</span>
                        <span class="feature-tag">Real-time Sync</span>
                    </div>
                    <div class="card-cta"><a href="app-development.php" class="btn btn-secondary btn-sm ripple-btn">Learn More &rarr;</a></div>
                </div>
            </div>

            <!-- SERVICE 4: AI Chatbots -->
            <div class="service-detail-card tilt-card reveal">
                <div class="card-svg-area">
                    <svg width="140" height="140" viewBox="0 0 200 200" fill="none">
                        <path d="M40 80 C40 60, 55 45, 80 45 L120 45 C145 45, 160 60, 160 80 L160 110 C160 130, 145 145, 120 145 L90 145 L65 165 L70 145 L80 145 C55 145, 40 130, 40 110 Z" stroke="#34D399" stroke-width="2.5" fill="rgba(52,211,153,0.05)"/>
                        <circle cx="80" cy="85" r="5" fill="#06B6D4" opacity="0.7"/>
                        <circle cx="100" cy="85" r="5" fill="#3B82F6" opacity="0.7"/>
                        <circle cx="120" cy="85" r="5" fill="#8B5CF6" opacity="0.7"/>
                        <circle cx="45" cy="55" r="12" stroke="#3B82F6" stroke-width="1.5" fill="rgba(59,130,246,0.08)" opacity="0.6"/>
                        <text x="32" y="62" text-anchor="middle" fill="#9CA3AF" font-size="5" font-family="Inter">CHATBOT</text>
                    </svg>
                </div>
                <div class="card-body">
                    <div class="card-icon">
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
                    </div>
                    <h3>AI Chatbots</h3>
                    <p class="card-desc">Intelligent conversational interfaces for customer support and internal operations. Resolve 80% of queries without human intervention.</p>
                    <div class="feature-tags">
                        <span class="feature-tag">24/7 Availability</span>
                        <span class="feature-tag">Multi-language</span>
                        <span class="feature-tag">CRM Integration</span>
                        <span class="feature-tag">Sentiment Analysis</span>
                    </div>
                    <div class="card-cta"><a href="ai-chatbots.php" class="btn btn-secondary btn-sm ripple-btn">Learn More &rarr;</a></div>
                </div>
            </div>

            <!-- SERVICE 5: Machine Learning -->
            <div class="service-detail-card tilt-card reveal">
                <div class="card-svg-area">
                    <svg width="140" height="140" viewBox="0 0 200 200" fill="none">
                        <circle cx="100" cy="40" r="10" stroke="#F87171" stroke-width="2" fill="rgba(248,113,113,0.1)"/>
                        <circle cx="55" cy="90" r="10" stroke="#3B82F6" stroke-width="2" fill="rgba(59,130,246,0.1)"/>
                        <circle cx="100" cy="90" r="10" stroke="#8B5CF6" stroke-width="2" fill="rgba(139,92,246,0.1)"/>
                        <circle cx="145" cy="90" r="10" stroke="#06B6D4" stroke-width="2" fill="rgba(6,182,212,0.1)"/>
                        <circle cx="100" cy="145" r="10" stroke="#F87171" stroke-width="2" fill="rgba(248,113,113,0.1)"/>
                        <text x="32" y="62" text-anchor="middle" fill="#9CA3AF" font-size="5" font-family="Inter">ML</text>
                    </svg>
                </div>
                <div class="card-body">
                    <div class="card-icon">
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm0 18a8 8 0 1 1 8-8 8 8 0 0 1-8 8z"/><path d="M12 6v6l4 2"/></svg>
                    </div>
                    <h3>Machine Learning</h3>
                    <p class="card-desc">Data-driven models that predict trends, classify information, and automate decision-making. Turn raw data into competitive advantage.</p>
                    <div class="feature-tags">
                        <span class="feature-tag">Predictive Analytics</span>
                        <span class="feature-tag">Computer Vision</span>
                        <span class="feature-tag">NLP</span>
                        <span class="feature-tag">Recommendations</span>
                    </div>
                    <div class="card-cta"><a href="machine-learning.php" class="btn btn-secondary btn-sm ripple-btn">Learn More &rarr;</a></div>
                </div>
            </div>

            <!-- SERVICE 6: WordPress Solutions -->
            <div class="service-detail-card tilt-card reveal">
                <div class="card-svg-area">
                    <svg width="140" height="140" viewBox="0 0 200 200" fill="none">
                        <rect x="35" y="30" width="130" height="30" rx="6" stroke="#FBBF24" stroke-width="2" fill="rgba(251,191,36,0.05)"/>
                        <rect x="35" y="68" width="40" height="60" rx="6" stroke="#FBBF24" stroke-width="2" fill="rgba(251,191,36,0.05)"/>
                        <rect x="82" y="68" width="83" height="28" rx="6" stroke="#FBBF24" stroke-width="2" fill="rgba(251,191,36,0.05)"/>
                        <rect x="35" y="136" width="130" height="34" rx="6" stroke="#FBBF24" stroke-width="2" fill="rgba(251,191,36,0.05)"/>
                        <circle cx="165" cy="40" r="10" fill="rgba(251,191,36,0.15)" stroke="#FBBF24" stroke-width="1" opacity="0.5"/>
                        <text x="161" y="44" font-family="serif" font-weight="bold" font-size="11" fill="#FBBF24" opacity="0.6">W</text>
                        <text x="32" y="62" text-anchor="middle" fill="#9CA3AF" font-size="5" font-family="Inter">WORDPRESS</text>
                    </svg>
                </div>
                <div class="card-body">
                    <div class="card-icon">
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                    </div>
                    <h3>WordPress Solutions</h3>
                    <p class="card-desc">Custom themes, plugins, and performance optimization for CMS platforms. Make WordPress faster, safer, and smarter.</p>
                    <div class="feature-tags">
                        <span class="feature-tag">Custom Themes</span>
                        <span class="feature-tag">Plugin Development</span>
                        <span class="feature-tag">Speed Optimization</span>
                        <span class="feature-tag">Security Hardening</span>
                    </div>
                    <div class="card-cta"><a href="wordpress-solutions.php" class="btn btn-secondary btn-sm ripple-btn">Learn More &rarr;</a></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- OUR PROCESS -->
<section class="section-padding" id="process" style="background: radial-gradient(circle at 50% 50%, rgba(59,130,246,0.05) 0%, transparent 60%);">
    <div class="container">
        <div class="section-title reveal">
            <h2>Our Process</h2>
            <p>A battle-tested framework that delivers predictable, high-quality results every time.</p>
        </div>
        <div class="process-timeline" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 0; position: relative;">
            <div class="process-step" style="text-align: center; padding: 0 20px;">
                <div class="step-number" style="width: 90px; height: 90px; border-radius: 50%; background: var(--glass-bg); border: 2px solid var(--glass-border); display: flex; align-items: center; justify-content: center; margin: 0 auto 25px;">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                </div>
                <div class="step-label" style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 2px; color: var(--accent-cyan); margin-bottom: 10px;">Phase 01</div>
                <h3 style="font-size: 1.15rem; margin-bottom: 10px;">Discovery &amp; Requirements</h3>
                <p style="color: var(--gray); font-size: 0.9rem;">We deep-dive into your business goals, current systems, and pain points to map the exact scope of work.</p>
            </div>
            <div class="process-step">
                <div class="step-number">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/></svg>
                </div>
                <div class="step-label">Phase 02</div>
                <h3>Planning &amp; Architecture</h3>
                <p>System design, tech stack selection, wireframes, and a detailed project roadmap with milestones.</p>
            </div>
            <div class="process-step">
                <div class="step-number">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
                </div>
                <div class="step-label">Phase 03</div>
                <h3>Development &amp; Testing</h3>
                <p>Agile sprints with continuous integration, code reviews, and rigorous QA at every stage.</p>
            </div>
            <div class="process-step">
                <div class="step-number">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                </div>
                <div class="step-label">Phase 04</div>
                <h3>Deployment &amp; Support</h3>
                <p>Zero-downtime launch, monitoring dashboards, and ongoing maintenance with SLA-backed support.</p>
            </div>
        </div>
    </div>
</section>

<!-- TECHNOLOGY STACK -->
<section class="section-padding" id="tech-stack">
    <div class="container">
        <div class="section-title reveal">
            <h2 class="text-gradient">Technology Stack</h2>
            <p>We use best-in-class tools across every layer of the stack.</p>
        </div>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px;">
            <div class="tech-category reveal" style="background: var(--glass-bg); border: 1px solid var(--glass-border); border-radius: 16px; padding: 30px;">
                <h4 style="color: var(--accent-cyan); font-size: 0.8rem; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 20px;">Frontend</h4>
                <div class="tech-list" style="display: flex; flex-wrap: wrap; gap: 10px;">
                    <span class="tech-pill">React</span>
                    <span class="tech-pill">Next.js</span>
                    <span class="tech-pill">Vue.js</span>
                    <span class="tech-pill">Angular</span>
                    <span class="tech-pill">TypeScript</span>
                    <span class="tech-pill">Tailwind CSS</span>
                </div>
            </div>
            <div class="tech-category reveal">
                <h4>Backend</h4>
                <div class="tech-list">
                    <span class="tech-pill">Node.js</span>
                    <span class="tech-pill">Python</span>
                    <span class="tech-pill">Laravel</span>
                    <span class="tech-pill">Django</span>
                    <span class="tech-pill">Express.js</span>
                    <span class="tech-pill">FastAPI</span>
                </div>
            </div>
            <div class="tech-category reveal">
                <h4>Mobile</h4>
                <div class="tech-list">
                    <span class="tech-pill">React Native</span>
                    <span class="tech-pill">Flutter</span>
                    <span class="tech-pill">Swift</span>
                    <span class="tech-pill">Kotlin</span>
                </div>
            </div>
            <div class="tech-category reveal">
                <h4>AI / ML</h4>
                <div class="tech-list">
                    <span class="tech-pill">LangChain</span>
                    <span class="tech-pill">TensorFlow</span>
                    <span class="tech-pill">OpenAI API</span>
                    <span class="tech-pill">PyTorch</span>
                    <span class="tech-pill">Hugging Face</span>
                </div>
            </div>
            <div class="tech-category reveal">
                <h4>Databases</h4>
                <div class="tech-list">
                    <span class="tech-pill">PostgreSQL</span>
                    <span class="tech-pill">MongoDB</span>
                    <span class="tech-pill">MySQL</span>
                    <span class="tech-pill">Redis</span>
                    <span class="tech-pill">Pinecone</span>
                </div>
            </div>
            <div class="tech-category reveal">
                <h4>Cloud &amp; DevOps</h4>
                <div class="tech-list">
                    <span class="tech-pill">AWS</span>
                    <span class="tech-pill">Google Cloud</span>
                    <span class="tech-pill">Azure</span>
                    <span class="tech-pill">Vercel</span>
                    <span class="tech-pill">Docker</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WHY CHOOSE OUR SERVICES -->
<section class="section-padding" id="why-choose">
    <div class="container">
        <div class="section-title reveal">
            <h2 class="text-gradient">Why Choose Our Services?</h2>
            <p>What sets DRN.today apart from every other agency.</p>
        </div>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 20px;">
            <div class="benefit-card reveal" style="background: rgba(255,255,255,0.02); border: 1px solid var(--glass-border); padding: 30px; border-radius: 16px; display: flex; align-items: flex-start; gap: 20px;">
                <div class="benefit-icon" style="color: var(--primary-purple); min-width: 50px; height: 50px; display: flex; align-items: center; justify-content: center; background: rgba(139,92,246,0.1); border-radius: 12px;">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                </div>
                <div class="benefit-content"><h4>Founder-Led Delivery</h4><p>Every project is personally overseen by Somnath Kurmi — no juniors running your critical systems.</p></div>
            </div>
            <div class="benefit-card reveal">
                <div class="benefit-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg></div>
                <div class="benefit-content"><h4>ROI-Focused Approach</h4><p>We don't build features for the sake of it. Every line of code must contribute to revenue or cost reduction.</p></div>
            </div>
            <div class="benefit-card reveal">
                <div class="benefit-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <div class="benefit-content"><h4>Enterprise-Grade Security</h4><p>Bank-level encryption, SOC 2 compliance practices, and rigorous security audits on every deliverable.</p></div>
            </div>
        </div>
    </div>
</section>

<!-- PROJECT TIERS -->
<section class="section-padding" id="project-tiers" style="background: rgba(0,0,0,0.2);">
    <div class="container">
        <div class="section-title reveal">
            <h2>Project Tiers</h2>
            <p>Flexible engagement models designed for businesses at every stage. Custom quotes provided after discovery.</p>
        </div>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
            <div class="tier-card reveal" style="background: var(--glass-bg); backdrop-filter: blur(var(--glass-blur)); border: 1px solid var(--glass-border); border-radius: 20px; padding: 40px 30px; text-align: center;">
                <div class="tier-label" style="font-size: 0.8rem; text-transform: uppercase; letter-spacing: 2px; color: var(--gray);">Tier 01</div>
                <div class="tier-name" style="font-size: 1.8rem; font-weight: 800;">Starter</div>
                <div class="tier-desc" style="color: var(--gray); font-size: 0.85rem; margin-bottom: 30px;">Perfect for MVPs and small projects</div>
                <ul class="tier-features" style="text-align: left; margin-bottom: 30px;">
                    <li style="padding: 10px 0; border-bottom: 1px solid rgba(255,255,255,0.05); display: flex; align-items: center; gap: 10px;"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>Single platform (Web or App)</li>
                    <li style="padding: 10px 0; border-bottom: 1px solid rgba(255,255,255,0.05);"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>Up to 5 pages/screens</li>
                    <li style="padding: 10px 0; border-bottom: 1px solid rgba(255,255,255,0.05);"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>2 rounds of revisions</li>
                    <li style="padding: 10px 0;"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>30-day post-launch support</li>
                </ul>
                <a href="contact.php" class="btn btn-secondary btn-sm ripple-btn" style="width:100%;">Get Quote</a>
            </div>
            <div class="tier-card featured reveal" style="border-color: var(--primary-blue); background: rgba(59,130,246,0.05); position: relative;">
                <div class="tier-label">Tier 02</div>
                <div class="tier-name">Professional</div>
                <div class="tier-desc">For growing businesses that need AI</div>
                <ul class="tier-features">
                    <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>Multi-platform delivery</li>
                    <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>AI Chatbot integration</li>
                    <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>Unlimited revisions</li>
                    <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>90-day priority support</li>
                </ul>
                <a href="contact.php" class="btn btn-primary btn-sm ripple-btn" style="width:100%;">Get Quote</a>
            </div>
            <div class="tier-card reveal">
                <div class="tier-label">Tier 03</div>
                <div class="tier-name">Enterprise</div>
                <div class="tier-desc">Full-scale digital transformation</div>
                <ul class="tier-features">
                    <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>Agentic AI systems</li>
                    <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>Custom ML models</li>
                    <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>Dedicated project team</li>
                    <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>12-month SLA support</li>
                </ul>
                <a href="contact.php" class="btn btn-secondary btn-sm ripple-btn" style="width:100%;">Get Quote</a>
            </div>
        </div>
    </div>
</section>

<!-- FAQ SECTION -->
<section class="section-padding" id="faq">
    <div class="container">
        <div class="section-title reveal">
            <h2>Frequently Asked Questions</h2>
            <p>Everything you need to know before starting a project with us.</p>
        </div>
        <div style="max-width: 800px; margin: 0 auto;">
            <div class="faq-item reveal" style="background: var(--glass-bg); border: 1px solid var(--glass-border); border-radius: 12px; margin-bottom: 15px;">
                <div class="faq-question" style="padding: 22px 25px; display: flex; justify-content: space-between; align-items: center; cursor: pointer; font-weight: 600; font-size: 1rem;">
                    How long does a typical project take?
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                </div>
                <div class="faq-answer" style="max-height: 0; overflow: hidden;"><div class="faq-answer-inner" style="padding: 0 25px 22px;"><p>It depends on scope. A landing page can ship in 3–5 days. A full SaaS platform with AI integrations typically takes 4–8 weeks. We provide a precise timeline during the Discovery phase.</p></div></div>
            </div>
            <div class="faq-item reveal">
                <div class="faq-question">Do you offer post-launch support?<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></div>
                <div class="faq-answer"><div class="faq-answer-inner"><p>Absolutely. Every package includes post-launch support (30 days for Starter, 90 days for Professional, 12 months for Enterprise). We also offer ongoing retainers.</p></div></div>
            </div>
            <div class="faq-item reveal">
                <div class="faq-question">What is your development process?<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></div>
                <div class="faq-answer"><div class="faq-answer-inner"><p>We follow a 4-phase process: Discovery & Requirements → Planning & Architecture → Development & Testing (Agile sprints) → Deployment & Support.</p></div></div>
            </div>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="section-padding" style="background: linear-gradient(180deg, var(--bg-color) 0%, rgba(59,130,246,0.1) 100%);">
    <div class="container">
        <div class="cta-banner-card reveal" style="background: rgba(59,130,246,0.1); border: 1px solid var(--primary-blue); border-radius: 20px; padding: 60px 40px; text-align: center;">
            <h2 style="font-size: 2.5rem; margin-bottom: 20px;">Ready to Start <span class="text-gradient">Your Project?</span></h2>
            <p style="color: var(--white); font-size: 1.15rem; margin-bottom: 40px;">Get a free, no-obligation consultation with Somnath Kurmi. We'll analyze your needs and propose a concrete plan within 24 hours.</p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <div class="magnetic-wrap"><a href="contact.php" class="btn btn-primary ripple-btn" style="padding: 20px 50px;">Get Free Consultation</a></div>
            </div>
            <p style="margin-top: 20px; font-size: 0.85rem; color: var(--gray);">Or reach us directly: <a href="<?php echo whatsapp_link(); ?>" target="_blank" style="color: #25D366;">WhatsApp</a> · <a href="<?php echo telegram_link(); ?>" target="_blank" style="color: #0088cc;">Telegram</a></p>
        </div>
    </div>
</section>

<script>
    // FAQ Accordion
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        question.addEventListener('click', () => {
            const isOpen = item.classList.contains('active');
            faqItems.forEach(i => i.classList.remove('active'));
            if (!isOpen) item.classList.add('active');
        });
    });
</script>

<?php include 'includes/footer.php'; ?>
