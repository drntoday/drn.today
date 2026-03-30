<?php
$page_title = 'Welcome to the Age of Agentic AI';
$page_description = 'Deploy autonomous AI agents that act, learn, and scale your business. Built by Somnath Kurmi at DRN.today — Developers Resource Nexus.';
include 'includes/header.php';
?>

<!-- SECTION 1: HERO -->
<section class="page-hero">
    <div class="hero-bg-glow hero-layer" data-speed="0.2"></div>
    <div class="holo-panel holo-1 hero-layer" data-speed="0.05"></div>
    <div class="holo-panel holo-2 hero-layer" data-speed="0.08"></div>
    <div class="holo-panel holo-3 hero-layer" data-speed="0.03"></div>
    <div class="holo-panel holo-4 hero-layer" data-speed="0.06"></div>
    <div class="container hero-content">
        <div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(139, 92, 246, 0.1); border: 1px solid rgba(139, 92, 246, 0.3); border-radius: 50px; padding: 8px 22px; font-size: 0.78rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: var(--primary-purple); margin-bottom: 30px;">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            Agentic AI Systems
        </div>
        <h1 style="font-size: clamp(2.4rem, 5.5vw, 4rem); font-weight: 800; line-height: 1.05; margin-bottom: 24px; letter-spacing: -2px; text-shadow: 0 0 40px rgba(59, 130, 246, 0.3);">Welcome to the Age of<br><span class="text-gradient">Agentic AI</span></h1>
        <p style="font-size: 1.15rem; color: var(--gray); max-width: 660px; margin: 0 auto 16px; font-weight: 400; line-height: 1.7;">Autonomous intelligence that doesn't just respond — it acts, learns, and scales your business while you sleep.</p>
        <div class="typing-wrapper" style="margin-bottom: 10px;">I automate... <span class="typing-text" id="typingText"></span><span class="typing-cursor"></span></div>
        <div class="hero-ctas">
            <div class="magnetic-wrap"><a href="<?php echo whatsapp_link(); ?>" target="_blank" class="btn btn-primary ripple-btn" style="font-size: 1.05rem; padding: 18px 42px;">Deploy Your First Agent</a></div>
            <a href="<?php echo telegram_link(); ?>" target="_blank" class="hero-cta-secondary">Talk to Founder <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
        </div>
        <div class="founder-indicator"><span class="founder-dot"></span>Direct reply from Somnath Kurmi — Founder</div>
    </div>
</section>

<!-- SECTION 2: THE AGENTIC DIFFERENCE -->
<section class="section-padding" id="agentic-difference" style="background: rgba(0,0,0,0.2);">
    <div class="container">
        <div class="section-title reveal">
            <h2>The <span class="text-gradient">Agentic</span> Difference</h2>
            <p>Not chatbots. Not automation scripts. Autonomous agents.</p>
        </div>
        <div class="diff-grid">
            <div class="diff-card tilt-card reveal">
                <div class="diff-icon">
                    <div class="diff-icon-glow"></div>
                    <svg class="float-icon" viewBox="0 0 80 80" fill="none">
                        <circle cx="40" cy="40" r="28" stroke="#3B82F6" stroke-width="1.5" fill="none" opacity="0.4"/>
                        <circle cx="40" cy="40" r="18" stroke="#3B82F6" stroke-width="1.5" fill="none" opacity="0.6"/>
                        <circle cx="40" cy="40" r="8" fill="#3B82F6" opacity="0.3"/>
                        <circle cx="40" cy="40" r="3" fill="#3B82F6"/>
                        <path d="M40 12 L40 6" stroke="#06B6D4" stroke-width="1.5" stroke-linecap="round"/>
                        <path d="M40 74 L40 68" stroke="#06B6D4" stroke-width="1.5" stroke-linecap="round"/>
                        <path d="M12 40 L6 40" stroke="#06B6D4" stroke-width="1.5" stroke-linecap="round"/>
                        <path d="M74 40 L68 40" stroke="#06B6D4" stroke-width="1.5" stroke-linecap="round"/>
                        <circle cx="40" cy="6" r="2.5" fill="#06B6D4" opacity="0.7"/>
                        <circle cx="40" cy="74" r="2.5" fill="#06B6D4" opacity="0.7"/>
                        <circle cx="6" cy="40" r="2.5" fill="#06B6D4" opacity="0.7"/>
                        <circle cx="74" cy="40" r="2.5" fill="#06B6D4" opacity="0.7"/>
                    </svg>
                </div>
                <h3>Autonomous</h3>
                <p>Operates independently without human instructions. Sets its own goals, makes decisions, and executes tasks end-to-end.</p>
            </div>
            <div class="diff-card tilt-card reveal">
                <div class="diff-icon">
                    <div class="diff-icon-glow"></div>
                    <svg class="float-icon-delay" viewBox="0 0 80 80" fill="none">
                        <path d="M20 55 L30 35 L40 45 L55 20 L65 30" stroke="#8B5CF6" stroke-width="2" fill="none"/>
                        <circle cx="55" cy="20" r="3" fill="#8B5CF6"/>
                        <path d="M15 60 Q30 58 40 50 Q50 42 60 30 Q65 25 70 28" stroke="#8B5CF6" stroke-width="1" fill="none" stroke-dasharray="3 3" opacity="0.4"/>
                        <circle cx="20" cy="55" r="15" stroke="#8B5CF6" stroke-width="0.8" fill="none" opacity="0.2"/>
                        <circle cx="55" cy="20" r="10" stroke="#06B6D4" stroke-width="0.8" fill="none" opacity="0.2"/>
                        <text x="40" y="75" text-anchor="middle" fill="#9CA3AF" font-size="6" font-family="Inter">LEARNING</text>
                    </svg>
                </div>
                <h3>Intelligent</h3>
                <p>Learns from your data, adapts to changing conditions, and continuously improves its performance over time.</p>
            </div>
            <div class="diff-card tilt-card reveal">
                <div class="diff-icon">
                    <div class="diff-icon-glow"></div>
                    <svg class="float-icon-delay2" viewBox="0 0 80 80" fill="none">
                        <circle cx="40" cy="40" r="28" stroke="#10B981" stroke-width="1.5" fill="none" opacity="0.3"/>
                        <path d="M40 12 A28 28 0 0 1 68 40" stroke="#10B981" stroke-width="3" fill="none"/>
                        <circle cx="40" cy="40" r="5" fill="#10B981" opacity="0.5"/>
                        <circle cx="40" cy="40" r="2" fill="#10B981"/>
                        <path d="M55 25 L62 18" stroke="#06B6D4" stroke-width="1"/>
                        <path d="M60 40 L68 40" stroke="#06B6D4" stroke-width="1"/>
                        <path d="M55 55 L60 62" stroke="#06B6D4" stroke-width="1"/>
                        <path d="M25 55 L18 62" stroke="#06B6D4" stroke-width="1"/>
                        <path d="M20 40 L12 40" stroke="#06B6D4" stroke-width="1"/>
                        <path d="M25 25 L18 18" stroke="#06B6D4" stroke-width="1"/>
                        <text x="40" y="75" text-anchor="middle" fill="#9CA3AF" font-size="6" font-family="Inter">24/7</text>
                    </svg>
                </div>
                <h3>24/7 Operation</h3>
                <p>Works around the clock without breaks. Your business never sleeps when AI agents are running the show.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 3: HOW IT WORKS -->
<section class="section-padding">
    <div class="container">
        <div class="section-title reveal">
            <h2>How It <span class="text-gradient">Works</span></h2>
            <p>From discovery to deployment in three phases.</p>
        </div>
        <div class="steps-container reveal">
            <div class="step-connector"></div>
            <div class="step-connector step-connector-2"></div>
            <svg class="step-arrow step-arrow-1" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
            <svg class="step-arrow step-arrow-2" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
            <div class="step-item step-1">
                <div class="step-number">01</div>
                <h3>Discovery</h3>
                <p>We analyze your workflows, identify bottlenecks, and map the highest-impact automation opportunities.</p>
            </div>
            <div class="step-item step-2">
                <div class="step-number">02</div>
                <h3>Deployment</h3>
                <p>We build and deploy your custom AI agent, trained on your data and integrated with your existing systems.</p>
            </div>
            <div class="step-item step-3">
                <div class="step-number">03</div>
                <h3>Scale</h3>
                <p>Your agent operates autonomously, learning and improving. Your business runs on autopilot.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 4: THE AGENT'S MIND SIMULATOR -->
<section class="section-padding sim-section" id="agent-sim">
    <div class="container sim-container">
        <div class="section-title reveal">
            <h2>The Agent's <span class="text-gradient">Mind</span></h2>
            <p>Watch how our AI agents think, decide, and act — in real-time.</p>
        </div>
        <div class="sim-terminal reveal">
            <div class="sim-scanline"></div>
            <div class="sim-header">
                <div class="sim-header-left">
                    <div class="sim-header-dots"><span></span><span></span><span></span></div>
                    <span class="sim-header-title">agent_process.exe</span>
                </div>
                <div class="sim-status-badge">
                    <span class="sim-status-dot"></span>
                    Active
                </div>
            </div>
            <div class="sim-body">
                <svg class="sim-neural-svg" viewBox="0 0 100 100" fill="none">
                    <line class="nn-line" x1="20" y1="20" x2="50" y2="35" stroke="#06B6D4" stroke-width="0.8" opacity="0.5"/>
                    <line class="nn-line" x1="80" y1="20" x2="50" y2="35" stroke="#3B82F6" stroke-width="0.8" opacity="0.5"/>
                    <line class="nn-line" x1="50" y1="35" x2="35" y2="60" stroke="#06B6D4" stroke-width="0.8" opacity="0.5"/>
                    <line class="nn-line" x1="50" y1="35" x2="65" y2="60" stroke="#8B5CF6" stroke-width="0.8" opacity="0.5"/>
                    <line class="nn-line" x1="35" y1="60" x2="50" y2="85" stroke="#3B82F6" stroke-width="0.8" opacity="0.5"/>
                    <line class="nn-line" x1="65" y1="60" x2="50" y2="85" stroke="#06B6D4" stroke-width="0.8" opacity="0.5"/>
                    <circle class="nn-dot" cx="20" cy="20" r="2.5" fill="#06B6D4"/>
                    <circle class="nn-dot" cx="80" cy="20" r="2.5" fill="#3B82F6"/>
                    <circle class="nn-dot" cx="50" cy="35" r="3" fill="#8B5CF6"/>
                    <circle class="nn-dot" cx="35" cy="60" r="2.5" fill="#06B6D4"/>
                    <circle class="nn-dot" cx="65" cy="60" r="2.5" fill="#3B82F6"/>
                    <circle class="nn-dot" cx="50" cy="85" r="3" fill="#10B981"/>
                </svg>
                <div class="sim-output" id="simOutput"></div>
            </div>
            <div class="sim-footer">
                <div class="sim-scenarios" id="simScenarios">
                    <button class="sim-scenario-btn active" data-scenario="support" onclick="runScenario('support', this)">
                        <span class="sim-btn-icon">🛒</span>
                        <span>Customer Support</span>
                    </button>
                    <button class="sim-scenario-btn" data-scenario="inventory" onclick="runScenario('inventory', this)">
                        <span class="sim-btn-icon">📦</span>
                        <span>Inventory Check</span>
                    </button>
                    <button class="sim-scenario-btn" data-scenario="lead" onclick="runScenario('lead', this)">
                        <span class="sim-btn-icon">🎯</span>
                        <span>Lead Qualification</span>
                    </button>
                    <button class="sim-scenario-btn" data-scenario="refund" onclick="runScenario('refund', this)">
                        <span class="sim-btn-icon">💰</span>
                        <span>Refund Request</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="sim-cta-row reveal">
            <a href="<?php echo telegram_link(); ?>" target="_blank" class="sim-cta-text">Want to see your business process automated? Talk to Founder <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
        </div>
    </div>
</section>

<!-- SECTION 5: CAPABILITIES GRID -->
<section class="section-padding" id="capabilities" style="background: radial-gradient(circle at 50% 50%, rgba(59,130,246,0.05) 0%, transparent 60%);">
    <div class="container">
        <div class="section-title reveal">
            <h2>Agent <span class="text-gradient">Capabilities</span></h2>
            <p>What our autonomous systems can do for your business.</p>
        </div>
        <div class="cap-grid">
            <div class="cap-card tilt-card reveal">
                <div class="cap-icon">
                    <svg viewBox="0 0 48 48" fill="none"><path d="M8 12 L20 12 L20 8 L28 14 L20 20 L20 16 L8 16 Z" fill="#3B82F6" opacity="0.7"/><rect x="6" y="24" width="36" height="4" rx="2" stroke="#3B82F6" stroke-width="1.5" fill="none"/><rect x="6" y="32" width="28" height="4" rx="2" stroke="#3B82F6" stroke-width="1.5" fill="none"/><rect x="6" y="40" width="20" height="4" rx="2" stroke="#3B82F6" stroke-width="1.5" fill="none"/><circle cx="38" cy="38" r="6" stroke="#10B981" stroke-width="1.5" fill="none"/><path d="M35 38 L37 40 L41 36" stroke="#10B981" stroke-width="1.5"/></svg>
                </div>
                <h4>Workflow Automation</h4>
                <p>Eliminate manual tasks with intelligent process orchestration.</p>
            </div>
            <div class="cap-card tilt-card reveal">
                <div class="cap-icon">
                    <svg viewBox="0 0 48 48" fill="none"><rect x="6" y="8" width="36" height="28" rx="4" stroke="#06B6D4" stroke-width="1.5" fill="none"/><circle cx="17" cy="22" r="6" stroke="#06B6D4" stroke-width="1.5" fill="none"/><circle cx="17" cy="22" r="2" fill="#06B6D4"/><path d="M26 18 L36 18 L36 26 L26 26 Z" stroke="#10B981" stroke-width="1" fill="none"/><rect x="14" y="40" width="20" height="4" rx="2" stroke="#06B6D4" stroke-width="1" fill="none"/><path d="M24 36 L24 40" stroke="#06B6D4" stroke-width="1"/></svg>
                </div>
                <h4>Customer Support</h4>
                <p>24/7 AI agents that resolve tickets and escalate intelligently.</p>
            </div>
            <div class="cap-card tilt-card reveal">
                <div class="cap-icon">
                    <svg viewBox="0 0 48 48" fill="none"><circle cx="14" cy="18" r="8" stroke="#F87171" stroke-width="1.5" fill="none"/><circle cx="34" cy="18" r="8" stroke="#F59E0B" stroke-width="1.5" fill="none"/><circle cx="24" cy="36" r="8" stroke="#10B981" stroke-width="1.5" fill="none"/><line x1="20" y1="22" x2="22" y2="30" stroke="#9CA3AF" stroke-width="1"/><line x1="28" y1="22" x2="26" y2="30" stroke="#9CA3AF" stroke-width="1"/><path d="M24 28 L24 44" stroke="#10B981" stroke-width="1.5" stroke-dasharray="3 2"/></svg>
                </div>
                <h4>Lead Qualification</h4>
                <p>Score, prioritize, and nurture leads with zero manual effort.</p>
            </div>
            <div class="cap-card tilt-card reveal">
                <div class="cap-icon">
                    <svg viewBox="0 0 48 48" fill="none"><rect x="6" y="6" width="16" height="16" rx="3" stroke="#8B5CF6" stroke-width="1.5" fill="none"/><rect x="26" y="6" width="16" height="16" rx="3" stroke="#3B82F6" stroke-width="1.5" fill="none"/><rect x="6" y="26" width="16" height="16" rx="3" stroke="#06B6D4" stroke-width="1.5" fill="none"/><rect x="26" y="26" width="16" height="16" rx="3" stroke="#10B981" stroke-width="1.5" fill="none"/><line x1="22" y1="14" x2="26" y2="14" stroke="#9CA3AF" stroke-width="1"/><line x1="22" y1="34" x2="26" y2="34" stroke="#9CA3AF" stroke-width="1"/><line x1="14" y1="22" x2="14" y2="26" stroke="#9CA3AF" stroke-width="1"/><line x1="34" y1="22" x2="34" y2="26" stroke="#9CA3AF" stroke-width="1"/><circle cx="24" cy="24" r="3" stroke="#F59E0B" stroke-width="1" fill="none"/></svg>
                </div>
                <h4>CRM Integration</h4>
                <p>Connect every tool into one unified, intelligent system.</p>
            </div>
            <div class="cap-card tilt-card reveal">
                <div class="cap-icon">
                    <svg viewBox="0 0 48 48" fill="none"><rect x="8" y="20" width="14" height="20" rx="2" stroke="#3B82F6" stroke-width="1.5" fill="none"/><rect x="26" y="14" width="14" height="26" rx="2" stroke="#06B6D4" stroke-width="1.5" fill="none"/><path d="M15 15 L15 10 L31 6 L31 10" stroke="#10B981" stroke-width="1" fill="none"/><circle cx="15" cy="12" r="2" fill="#10B981" opacity="0.6"/><circle cx="31" cy="8" r="2" fill="#10B981" opacity="0.6"/><circle cx="15" cy="30" r="3" fill="#3B82F6" opacity="0.3"/><circle cx="33" cy="27" r="3" fill="#06B6D4" opacity="0.3"/></svg>
                </div>
                <h4>Supply Chain</h4>
                <p>Predictive inventory management and autonomous reorder systems.</p>
            </div>
            <div class="cap-card tilt-card reveal">
                <div class="cap-icon">
                    <svg viewBox="0 0 48 48" fill="none"><polyline points="6,36 14,24 22,30 30,12 38,18 44,8" stroke="#10B981" stroke-width="2" fill="none"/><circle cx="44" cy="8" r="3" fill="#10B981" opacity="0.6"/><rect x="6" y="40" width="38" height="3" rx="1" stroke="#9CA3AF" stroke-width="0.8" fill="none" opacity="0.3"/><path d="M10 40 L10 36" stroke="#3B82F6" stroke-width="1" opacity="0.4"/><path d="M22 40 L22 30" stroke="#3B82F6" stroke-width="1" opacity="0.4"/><path d="M34 40 L34 18" stroke="#3B82F6" stroke-width="1" opacity="0.4"/></svg>
                </div>
                <h4>Predictive Analytics</h4>
                <p>Forecast trends, detect anomalies, and make data-driven decisions.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 6: ENGINEERING EXCELLENCE -->
<section class="section-padding" id="engineering" style="background: rgba(0,0,0,0.2);">
    <div class="container">
        <div class="section-title reveal">
            <h2>Engineering <span class="text-gradient">Excellence</span></h2>
            <p>Beyond AI — full-stack development for modern enterprises.</p>
        </div>
        <div class="eng-grid">
            <!-- Web Development -->
            <div class="eng-card tilt-card reveal">
                <div class="eng-icon">
                    <div class="eng-icon-glow"></div>
                    <svg class="eng-icon-float" viewBox="0 0 64 64" fill="none">
                        <circle cx="32" cy="32" r="22" stroke="#3B82F6" stroke-width="1" fill="none" opacity="0.3" stroke-dasharray="4 3"/>
                        <path d="M10 32 Q10 12 32 12 Q54 12 54 32 Q54 52 32 52 Q10 52 10 32" stroke="#06B6D4" stroke-width="1.2" fill="none" opacity="0.5"/>
                        <path d="M20 24 L28 20 L36 24 L36 36 L28 40 L20 36 Z" stroke="#3B82F6" stroke-width="1.5" fill="none"/>
                        <path d="M28 20 L28 40" stroke="#3B82F6" stroke-width="1" opacity="0.5"/>
                        <path d="M20 24 L36 36" stroke="#06B6D4" stroke-width="0.8" opacity="0.4"/>
                        <path d="M36 24 L20 36" stroke="#06B6D4" stroke-width="0.8" opacity="0.4"/>
                        <circle cx="32" cy="10" r="2" fill="#10B981" opacity="0.7"/>
                        <circle cx="54" cy="32" r="2" fill="#10B981" opacity="0.7"/>
                        <circle cx="32" cy="54" r="2" fill="#10B981" opacity="0.7"/>
                        <circle cx="10" cy="32" r="2" fill="#10B981" opacity="0.7"/>
                        <text x="32" y="62" text-anchor="middle" fill="#9CA3AF" font-size="5" font-family="Inter">WEB</text>
                    </svg>
                </div>
                <h3>Web Development</h3>
                <p>High-performance websites and web applications built with React, Next.js, and modern frameworks.</p>
                <div class="eng-tags"><span class="eng-tag">Responsive</span><span class="eng-tag">SEO Optimized</span><span class="eng-tag">CMS Integration</span></div>
                <a href="web-development.php" class="eng-link">Learn More <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
            </div>
            <!-- Software Development -->
            <div class="eng-card tilt-card reveal">
                <div class="eng-icon">
                    <div class="eng-icon-glow"></div>
                    <svg class="eng-icon-rotate" viewBox="0 0 64 64" fill="none">
                        <rect x="12" y="18" width="40" height="30" rx="4" stroke="#8B5CF6" stroke-width="1.5" fill="none" opacity="0.6"/>
                        <rect x="18" y="12" width="28" height="30" rx="4" stroke="#3B82F6" stroke-width="1.5" fill="none" opacity="0.8"/>
                        <rect x="24" y="6" width="16" height="30" rx="3" stroke="#06B6D4" stroke-width="1.5" fill="none"/>
                        <circle cx="32" cy="21" r="6" stroke="#10B981" stroke-width="1.2" fill="none"/>
                        <path d="M29 21 L31 23 L35 19" stroke="#10B981" stroke-width="1.2" stroke-linecap="round" fill="none"/>
                        <path d="M27 30 L37 30" stroke="#06B6D4" stroke-width="0.8" opacity="0.5"/>
                        <path d="M28 33 L36 33" stroke="#06B6D4" stroke-width="0.8" opacity="0.5"/>
                        <text x="32" y="62" text-anchor="middle" fill="#9CA3AF" font-size="5" font-family="Inter">SOFTWARE</text>
                    </svg>
                </div>
                <h3>Software Development</h3>
                <p>Custom SaaS platforms, desktop applications, and enterprise software tailored to your workflows.</p>
                <div class="eng-tags"><span class="eng-tag">Scalable</span><span class="eng-tag">Secure</span><span class="eng-tag">API-First</span></div>
                <a href="software-development.php" class="eng-link">Learn More <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
            </div>
            <!-- App Development -->
            <div class="eng-card tilt-card reveal">
                <div class="eng-icon">
                    <div class="eng-icon-glow"></div>
                    <svg class="eng-icon-float" viewBox="0 0 64 64" fill="none">
                        <rect x="18" y="8" width="28" height="48" rx="6" stroke="#3B82F6" stroke-width="1.5" fill="none"/>
                        <rect x="22" y="14" width="20" height="32" rx="2" stroke="#06B6D4" stroke-width="1" fill="none" opacity="0.4"/>
                        <circle cx="32" cy="52" r="2.5" stroke="#3B82F6" stroke-width="1" fill="none"/>
                        <path d="M27 6 L37 6" stroke="#3B82F6" stroke-width="1.5"/>
                        <rect x="25" y="18" width="14" height="4" rx="1" fill="#8B5CF6" opacity="0.4"/>
                        <rect x="25" y="25" width="10" height="4" rx="1" fill="#3B82F6" opacity="0.3"/>
                        <rect x="25" y="32" width="14" height="4" rx="1" fill="#06B6D4" opacity="0.3"/>
                        <rect x="25" y="39" width="8" height="4" rx="1" fill="#10B981" opacity="0.3"/>
                        <circle cx="42" cy="16" r="5" stroke="#10B981" stroke-width="1" fill="none" opacity="0.5"/>
                        <path d="M40 16 L41.5 17.5 L44.5 14.5" stroke="#10B981" stroke-width="1"/>
                        <text x="32" y="62" text-anchor="middle" fill="#9CA3AF" font-size="5" font-family="Inter">MOBILE</text>
                    </svg>
                </div>
                <h3>App Development</h3>
                <p>Native and cross-platform mobile apps for iOS and Android using React Native and Flutter.</p>
                <div class="eng-tags"><span class="eng-tag">Fast</span><span class="eng-tag">Offline Support</span><span class="eng-tag">Biometric Auth</span></div>
                <a href="app-development.php" class="eng-link">Learn More <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
            </div>
            <!-- WordPress Solutions -->
            <div class="eng-card tilt-card reveal">
                <div class="eng-icon">
                    <div class="eng-icon-glow"></div>
                    <svg class="eng-icon-pulse" viewBox="0 0 64 64" fill="none">
                        <circle cx="32" cy="32" r="24" stroke="#3B82F6" stroke-width="1.2" fill="none" opacity="0.3"/>
                        <circle cx="32" cy="32" r="18" stroke="#06B6D4" stroke-width="1" fill="none" opacity="0.2"/>
                        <path d="M16 18 L24 46" stroke="#3B82F6" stroke-width="2.5"/>
                        <path d="M48 18 L40 46" stroke="#3B82F6" stroke-width="2.5"/>
                        <path d="M16 18 Q26 14 32 22 Q38 30 48 18" stroke="#3B82F6" stroke-width="2.5" fill="none"/>
                        <path d="M22 32 Q26 38 30 32 Q34 26 38 32" stroke="#06B6D4" stroke-width="1.2" fill="none" opacity="0.6"/>
                        <circle cx="32" cy="32" r="4" fill="#10B981" opacity="0.2"/>
                        <text x="32" y="62" text-anchor="middle" fill="#9CA3AF" font-size="5" font-family="Inter">WORDPRESS</text>
                    </svg>
                </div>
                <h3>WordPress Solutions</h3>
                <p>Custom themes, plugins, and performance optimization for enterprise-grade WordPress sites.</p>
                <div class="eng-tags"><span class="eng-tag">Custom Themes</span><span class="eng-tag">Plugin Dev</span><span class="eng-tag">Speed Optimization</span></div>
                <a href="wordpress-solutions.php" class="eng-link">Learn More <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 7: FINAL CTA -->
<section class="section-padding" id="cta-section" style="background: linear-gradient(180deg, var(--bg-color) 0%, rgba(59,130,246,0.08) 100%);">
    <div class="container">
        <div class="cta-gateway reveal">
            <div class="cta-gateway-pulse"></div>
            <div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(59, 130, 246, 0.1); border: 1px solid rgba(59, 130, 246, 0.3); border-radius: 50px; padding: 6px 18px; font-size: 0.72rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: var(--primary-blue); margin-bottom: 24px;">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                Initialize
            </div>
            <h2 style="font-size: clamp(2rem, 4vw, 2.8rem); margin-bottom: 20px; font-weight: 800; letter-spacing: -1px;">Initialize Your <span class="text-gradient">AI Agent</span></h2>
            <p style="color: var(--white); font-size: 1.1rem; margin-bottom: 10px; max-width: 580px; margin-left: auto; margin-right: auto; opacity: 0.9; line-height: 1.7;">Start with a free consultation. Direct access to founder Somnath Kurmi — no sales team, no gatekeepers.</p>
            <div class="cta-buttons">
                <a href="<?php echo whatsapp_link(); ?>" target="_blank" class="cta-contact-btn whatsapp-btn ripple-btn">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                    WhatsApp
                </a>
                <a href="<?php echo telegram_link(); ?>" target="_blank" class="cta-contact-btn telegram-btn ripple-btn">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                    Telegram
                </a>
                <a href="mailto:<?php echo EMAIL; ?>" class="cta-contact-btn form-btn ripple-btn">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="M22 7l-8.97 5.7a1.94 1.94 0 01-2.06 0L2 7"/></svg>
                    Email Us
                </a>
            </div>
            <p style="margin-top: 24px; font-size: 0.82rem; color: var(--gray);">Response within 2 hours. Every inquiry goes directly to the founder.</p>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

