<?php
$page_title = 'Case Studies | DRN.today — Agentic AI & Automation Engagements';
$page_description = 'Explore DRN.today\'s engagement profiles across logistics, fintech, healthcare, e-commerce and more. See how Agentic AI and automation deliver measurable business outcomes.';
include 'includes/header.php';
?>

<!-- HERO SECTION -->
<section class="page-hero" style="min-height: 55vh;">
    <div class="hero-bg-glow hero-layer" data-speed="0.2"></div>
    <div class="holo-panel holo-1 hero-layer" data-speed="0.05"></div>
    <div class="holo-panel holo-2 hero-layer" data-speed="0.08"></div>
    <div class="holo-panel holo-3 hero-layer" data-speed="0.03"></div>

    <div class="container reveal" style="text-align: center; max-width: 850px;">
        <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="index.php" style="color: var(--accent-cyan);">Home</a>
            <span>/</span>
            <span>Case Studies</span>
        </nav>
        <h1 style="font-size: clamp(2.2rem, 5vw, 3.6rem); font-weight: 800; line-height: 1.1; margin-bottom: 20px; letter-spacing: -2px;">What We've <span class="text-gradient">Built</span></h1>
        <p style="font-size: 1.15rem; color: var(--gray); margin-bottom: 10px; font-weight: 300; letter-spacing: 0.5px;">Engagement Profiles & Documented Outcomes</p>
        <p style="font-size: 1rem; color: var(--gray); max-width: 650px; margin: 0 auto;">A look at the types of problems we solve, the systems we engineer, and the measurable results our solutions deliver across industries.</p>
        <div class="sb" style="display: inline-flex; align-items: center; gap: 10px; background: rgba(16,185,129,0.1); border: 1px solid rgba(16,185,129,0.3); border-radius: 50px; padding: 10px 25px; margin-top: 30px;">
            <span class="sbd" style="width: 8px; height: 8px; background: var(--success-green); border-radius: 50%; box-shadow: 0 0 10px var(--success-green); animation: badgePulse 2s infinite;"></span>
            15+ Successful Deployments
        </div>
    </div>
</section>

<!-- FILTERS -->
<section style="padding: 60px 0 0; position: relative; z-index: 2;">
    <div class="container">
        <div class="fb rv" id="filterBar" style="display: flex; justify-content: center; gap: 10px; flex-wrap: wrap; margin-bottom: 60px;">
            <button class="fbtn on" data-filter="all" style="padding: 11px 26px; border-radius: 50px; border: 1px solid var(--glass-border); background: var(--glass-bg); color: var(--gray); font-family: inherit; font-size: 0.82rem; font-weight: 600; text-transform: uppercase;">All Engagements</button>
            <button class="fbtn" data-filter="ai">Agentic AI</button>
            <button class="fbtn" data-filter="web">Web & App Dev</button>
            <button class="fbtn" data-filter="automation">Automation</button>
            <button class="fbtn" data-filter="enterprise">Enterprise</button>
        </div>
    </div>
</section>

<!-- FEATURED CASE STUDY -->
<section class="sp" style="padding-top: 60px;">
    <div class="container">
        <div class="fc tc rv" id="featCard" data-category="ai enterprise" style="background: var(--glass-bg); backdrop-filter: blur(var(--glass-blur)); border: 1px solid var(--glass-border); border-radius: 20px; overflow: hidden; max-width: 1000px; margin: 0 auto;">
            <div class="fin" style="display: grid; grid-template-columns: 1fr 1fr;">
                <div class="fcon" style="padding: 50px;">
                    <div class="fl" style="display: inline-flex; align-items: center; gap: 8px; background: linear-gradient(90deg, var(--primary-blue), var(--primary-purple)); padding: 6px 16px; border-radius: 4px; margin-bottom: 20px;">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        Highlighted Engagement
                    </div>
                    <div style="color: var(--accent-cyan); font-size: 0.8rem; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px;">Logistics & Supply Chain</div>
                    <h2 style="font-size: 1.7rem; font-weight: 800; margin-bottom: 20px;">Autonomous Supply Chain Agent</h2>
                    <div class="clab ch" style="color: var(--danger-red); font-size: 0.72rem; font-weight: 700; text-transform: uppercase;">Problem Pattern</div>
                    <p style="color: var(--gray); font-size: 0.88rem; margin-bottom: 16px;">Mid-size logistics networks typically face 20-30% stockout rates from manual inventory tracking across multiple warehouses, leading to significant revenue loss from missed fulfillments.</p>
                    <div class="clab sl" style="color: var(--success-green); font-size: 0.72rem; font-weight: 700; text-transform: uppercase;">System Built</div>
                    <p style="color: var(--gray); font-size: 0.88rem; margin-bottom: 20px;">Autonomous agent monitoring 500+ SKUs across distributed warehouses, using ML demand forecasting to predict reorder points and auto-generate purchase orders before stockouts occur.</p>
                    <div class="rr" style="display: flex; align-items: flex-start; gap: 10px; margin-bottom: 10px;"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg><div><strong>70% reduction</strong> <span>in stockout frequency</span></div></div>
                    <div class="rr"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg><div><strong>40% decrease</strong> <span>in logistics overhead</span></div></div>
                    <div class="rr"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg><div><strong>$420K+ annual</strong> <span>savings documented</span></div></div>
                    <div style="background: rgba(16,185,129,0.08); border: 1px solid rgba(16,185,129,0.2); border-radius: 8px; padding: 14px 20px; margin: 20px 0; text-align: center; color: var(--success-green); font-weight: 700;">25% Stockout Rate → 7.5%</div>
                    <a href="contact.php" class="btn bp bsm rb" style="margin-top: 10px;">Discuss Similar Requirements</a>
                </div>
                <div class="fsvg" style="display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, rgba(59,130,246,0.06) 0%, rgba(139,92,246,0.06) 100%); min-height: 420px;">
                    <svg width="180" height="180" viewBox="0 0 200 200" fill="none">
                        <rect x="30" y="60" width="50" height="40" rx="4" stroke="#3B82F6" stroke-width="1.5" opacity="0.6"/>
                        <rect x="120" y="40" width="50" height="60" rx="4" stroke="#06B6D4" stroke-width="1.5" opacity="0.6"/>
                        <rect x="70" y="120" width="50" height="40" rx="4" stroke="#8B5CF6" stroke-width="1.5" opacity="0.6"/>
                        <line x1="80" y1="80" x2="120" y2="70" stroke="#10B981" stroke-width="1" stroke-dasharray="4 4"/>
                        <line x1="145" y1="100" x2="95" y2="120" stroke="#10B981" stroke-width="1" stroke-dasharray="4 4"/>
                        <circle cx="55" cy="80" r="8" fill="#3B82F6" opacity="0.3"/><circle cx="55" cy="80" r="3" fill="#3B82F6" opacity="0.8"/>
                        <circle cx="145" cy="70" r="8" fill="#06B6D4" opacity="0.3"/><circle cx="145" cy="70" r="3" fill="#06B6D4" opacity="0.8"/>
                        <circle cx="95" cy="140" r="8" fill="#8B5CF6" opacity="0.3"/><circle cx="95" cy="140" r="3" fill="#8B5CF6" opacity="0.8"/>
                        <text x="100" y="190" text-anchor="middle" fill="#9CA3AF" font-size="8" font-family="Inter">SUPPLY CHAIN NETWORK</text>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CASE STUDY GRID -->
<section class="sp" style="padding-top: 0;">
    <div class="container">
        <div class="nr" id="noRes" style="text-align: center; padding: 80px 20px; color: var(--gray); display: none;">No engagements found for this filter. <a href="#" onclick="document.querySelector('[data-filter=all]').click();return false;" style="color:var(--accent-cyan);">Show all</a></div>
        <div class="cg" id="caseGrid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(360px, 1fr)); gap: 28px;">

            <!-- 1: Analytics Dashboard -->
            <div class="cc tc rv" data-category="web enterprise" style="background: var(--glass-bg); backdrop-filter: blur(var(--glass-blur)); border: 1px solid var(--glass-border); border-radius: 16px; overflow: hidden;">
                <div class="csa" style="width: 100%; height: 180px; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, rgba(59,130,246,0.04) 0%, rgba(139,92,246,0.04) 100%);">
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none"><rect x="10" y="55" width="12" height="30" rx="2" fill="#3B82F6" opacity="0.4"/><rect x="28" y="40" width="12" height="45" rx="2" fill="#3B82F6" opacity="0.6"/><rect x="46" y="25" width="12" height="60" rx="2" fill="#06B6D4" opacity="0.7"/><polyline points="16,52 34,37 52,22" stroke="#10B981" stroke-width="1.5"/></svg>
                </div>
                <div class="ccb" style="padding: 28px;">
                    <div class="ctgs"><span class="ctg tdev">Web Development</span><span class="ctg tauto">Data Analytics</span></div>
                    <h3>Real-Time Analytics Dashboard</h3>
                    <div class="cind">Fintech & Financial Services</div>
                    <div class="clab ch">Problem</div><p>Analysts spending 40+ hours/week manually compiling reports from disconnected data sources.</p>
                    <div class="clab sl">System Built</div><p>AI-powered dashboard with automated data aggregation, scheduled report generation, and predictive trend analysis.</p>
                    <div class="ckm">40 hrs → 4 hrs per week</div>
                    <div class="cms"><div class="cmi"><div class="cmv">90%</div><div class="cml">Less Report Time</div></div><div class="cmi"><div class="cmv">$95K</div><div class="cml">Annual Savings</div></div></div>
                    <div class="cactions"><a href="contact.php" class="btn bs bsm rb">Discuss Similar Project</a></div>
                </div>
            </div>

            <!-- 2: AI Support Agent -->
            <div class="cc tc rv" data-category="ai automation">
                <div class="csa">
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none"><rect x="15" y="20" width="70" height="50" rx="8" stroke="#3B82F6" stroke-width="1.5" fill="none"/><circle cx="35" cy="45" r="8" stroke="#06B6D4" stroke-width="1.5" fill="none"/><circle cx="35" cy="45" r="3" fill="#06B6D4"/><text x="50" y="95" text-anchor="middle" fill="#9CA3AF" font-size="6">AI AGENT</text></svg>
                </div>
                <div class="ccb">
                    <div class="ctgs"><span class="ctg tai">Agentic AI</span><span class="ctg tauto">Automation</span></div>
                    <h3>24/7 Customer Support Agent</h3>
                    <div class="cind">SaaS & Technology</div>
                    <div class="clab ch">Problem</div><p>800+ daily support tickets with 4+ hour average response time. Team overwhelmed.</p>
                    <div class="clab sl">System Built</div><p>Tier-1 AI agent handling common queries, sentiment-based escalation, and context-aware responses.</p>
                    <div class="ckm">4 hrs → 30 sec response</div>
                    <div class="cms"><div class="cmi"><div class="cmv">80%</div><div class="cml">Auto-Resolved</div></div><div class="cmi"><div class="cmv">6x</div><div class="cml">Capacity Boost</div></div></div>
                    <div class="cactions"><a href="contact.php" class="btn bs bsm rb">Discuss Similar Project</a></div>
                </div>
            </div>

            <!-- 3: Real Estate CRM -->
            <div class="cc tc rv" data-category="web automation">
                <div class="csa">
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none"><path d="M50 15 L15 40 L15 85 L40 85 L40 60 L60 60 L60 85 L85 85 L85 40 Z" stroke="#8B5CF6" stroke-width="1.5"/><text x="50" y="97" text-anchor="middle" fill="#9CA3AF" font-size="6">REAL ESTATE CRM</text></svg>
                </div>
                <div class="ccb">
                    <div class="ctgs"><span class="ctg tdev">Web Development</span><span class="ctg tauto">Automation</span></div>
                    <h3>AI-Powered Real Estate CRM</h3>
                    <div class="cind">Real Estate</div>
                    <div class="clab ch">Problem</div><p>40% of leads lost to inadequate follow-up. Manual lead tracking across spreadsheets.</p>
                    <div class="clab sl">System Built</div><p>Custom CRM with AI lead scoring, automated multi-channel follow-ups, property matching engine.</p>
                    <div class="ckm">45% → 78% lead conversion</div>
                    <div class="cms"><div class="cmi"><div class="cmv">2.5x</div><div class="cml">Conversion Rate</div></div><div class="cmi"><div class="cmv">70%</div><div class="cml">Less Follow-up Time</div></div></div>
                    <div class="cactions"><a href="contact.php" class="btn bs bsm rb">Discuss Similar Project</a></div>
                </div>
            </div>

            <!-- 4: E-commerce Automation -->
            <div class="cc tc rv" data-category="automation enterprise">
                <div class="csa">
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none"><rect x="10" y="30" width="35" height="45" rx="4" stroke="#3B82F6"/><rect x="55" y="20" width="35" height="55" rx="4" stroke="#06B6D4"/><circle cx="72" cy="42" r="8" stroke="#10B981"/><path d="M68 42 L71 45 L76 39" stroke="#10B981"/><text x="50" y="95" text-anchor="middle" fill="#9CA3AF" font-size="6">ORDER AUTOMATION</text></svg>
                </div>
                <div class="ccb">
                    <div class="ctgs"><span class="ctg tdev">Software Dev</span><span class="ctg tauto">Automation</span></div>
                    <h3>E-Commerce Order Automation</h3>
                    <div class="cind">E-Commerce & Retail</div>
                    <div class="clab ch">Problem</div><p>15% order error rate from manual processing. Delayed shipments, wrong items.</p>
                    <div class="clab sl">System Built</div><p>End-to-end automation: real-time order sync, inventory management, auto shipping labels.</p>
                    <div class="ckm">15% error rate → 0.1%</div>
                    <div class="cms"><div class="cmi"><div class="cmv">99.9%</div><div class="cml">Order Accuracy</div></div><div class="cmi"><div class="cmv">$275K</div><div class="cml">Annual Savings</div></div></div>
                    <div class="cactions"><a href="contact.php" class="btn bs bsm rb">Discuss Similar Project</a></div>
                </div>
            </div>

            <!-- 5: Lead Qualification -->
            <div class="cc tc rv" data-category="ai automation">
                <div class="csa">
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none"><circle cx="25" cy="50" r="10" stroke="#F87171"/><circle cx="50" cy="35" r="10" stroke="#F59E0B"/><circle cx="75" cy="50" r="10" stroke="#10B981"/><text x="50" y="97" text-anchor="middle" fill="#9CA3AF" font-size="6">LEAD SCORING</text></svg>
                </div>
                <div class="ccb">
                    <div class="ctgs"><span class="ctg tai">Agentic AI</span><span class="ctg tauto">Automation</span></div>
                    <h3>AI Lead Qualification Agent</h3>
                    <div class="cind">B2B Sales & Marketing</div>
                    <div class="clab ch">Problem</div><p>Sales reps spending 60% of time on unqualified leads. 8% closing rate.</p>
                    <div class="clab sl">System Built</div><p>AI agent scoring inbound leads by intent signals, personalizing outreach, auto-scheduling meetings.</p>
                    <div class="ckm">8% → 22% close rate</div>
                    <div class="cms"><div class="cmi"><div class="cmv">3x</div><div class="cml">Qualified Leads</div></div><div class="cmi"><div class="cmv">80%</div><div class="cml">Less Admin Time</div></div></div>
                    <div class="cactions"><a href="contact.php" class="btn bs bsm rb">Discuss Similar Project</a></div>
                </div>
            </div>

            <!-- 6: Healthcare Scheduling -->
            <div class="cc tc rv" data-category="ai web">
                <div class="csa">
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none"><rect x="15" y="20" width="70" height="65" rx="6" stroke="#06B6D4"/><text x="50" y="97" text-anchor="middle" fill="#9CA3AF" font-size="6">APPOINTMENT AGENT</text></svg>
                </div>
                <div class="ccb">
                    <div class="ctgs"><span class="ctg tai">Agentic AI</span><span class="ctg tdev">App Development</span></div>
                    <h3>Healthcare Scheduling Agent</h3>
                    <div class="cind">Healthcare</div>
                    <div class="clab ch">Problem</div><p>30% no-show rate from manual scheduling. Staff bogged down by phone calls.</p>
                    <div class="clab sl">System Built</div><p>AI agent handling booking, automated reminders, intelligent rescheduling, waitlist management.</p>
                    <div class="ckm">30% no-show → 4.5%</div>
                    <div class="cms"><div class="cmi"><div class="cmv">85%</div><div class="cml">Fewer No-Shows</div></div><div class="cmi"><div class="cmv">3x</div><div class="cml">Staff Efficiency</div></div></div>
                    <div class="cactions"><a href="contact.php" class="btn bs bsm rb">Discuss Similar Project</a></div>
                </div>
            </div>

            <!-- 7: Manufacturing IoT -->
            <div class="cc tc rv" data-category="automation enterprise">
                <div class="csa">
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none"><rect x="15" y="50" width="20" height="30" rx="2" stroke="#3B82F6"/><rect x="40" y="35" width="20" height="45" rx="2" stroke="#06B6D4"/><rect x="65" y="45" width="20" height="35" rx="2" stroke="#8B5CF6"/><text x="50" y="95" text-anchor="middle" fill="#9CA3AF" font-size="6">IoT MONITORING</text></svg>
                </div>
                <div class="ccb">
                    <div class="ctgs"><span class="ctg tauto">Automation</span><span class="ctg tent">Enterprise</span></div>
                    <h3>Manufacturing Predictive Monitor</h3>
                    <div class="cind">Manufacturing</div>
                    <div class="clab ch">Problem</div><p>Unplanned equipment downtime costing $50K+ per incident. Reactive maintenance.</p>
                    <div class="clab sl">System Built</div><p>IoT sensor integration with ML anomaly detection, predictive maintenance alerts, automated work orders.</p>
                    <div class="ckm">60% less unplanned downtime</div>
                    <div class="cms"><div class="cmi"><div class="cmv">45%</div><div class="cml">Lower Maint. Cost</div></div><div class="cmi"><div class="cmv">$300K</div><div class="cml">Annual Savings</div></div></div>
                    <div class="cactions"><a href="contact.php" class="btn bs bsm rb">Discuss Similar Project</a></div>
                </div>
            </div>

            <!-- 8: Document Processing -->
            <div class="cc tc rv" data-category="ai automation enterprise">
                <div class="csa">
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none"><rect x="20" y="15" width="35" height="45" rx="3" stroke="#8B5CF6"/><rect x="45" y="30" width="35" height="45" rx="3" stroke="#3B82F6"/><text x="50" y="95" text-anchor="middle" fill="#9CA3AF" font-size="6">DOC PROCESSING</text></svg>
                </div>
                <div class="ccb">
                    <div class="ctgs"><span class="ctg tai">Agentic AI</span><span class="ctg tauto">Automation</span><span class="ctg tent">Enterprise</span></div>
                    <h3>Intelligent Document Processing</h3>
                    <div class="cind">Legal & Compliance</div>
                    <div class="clab ch">Problem</div><p>Hundreds of contracts and compliance documents processed manually each week.</p>
                    <div class="clab sl">System Built</div><p>AI-powered document extraction, clause analysis, risk flagging, automated compliance checking.</p>
                    <div class="ckm">3 days → 2 hours per batch</div>
                    <div class="cms"><div class="cmi"><div class="cmv">95%</div><div class="cml">Extraction Accuracy</div></div><div class="cmi"><div class="cmv">$180K</div><div class="cml">Annual Savings</div></div></div>
                    <div class="cactions"><a href="contact.php" class="btn bs bsm rb">Discuss Similar Project</a></div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- STATS SECTION -->
<section class="sp" style="background: radial-gradient(circle at 50% 50%, rgba(59,130,246,0.06) 0%, transparent 60%);">
    <div class="container">
        <div class="st rv" style="text-align: center; margin-bottom: 80px;"><h2 class="tg">Aggregate Impact</h2><p>Documented outcomes across all engagements.</p></div>
        <div class="sg" id="statsGrid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(170px, 1fr)); gap: 18px;">
            <div class="sc tc rv"><div class="sn" data-target="12500" data-prefix="" data-suffix="+">0</div><div class="slb">Hours Saved</div></div>
            <div class="sc tc rv"><div class="sn" data-target="2.8" data-prefix="$" data-suffix="M+">0</div><div class="slb">Cost Savings</div></div>
            <div class="sc tc rv"><div class="sn" data-target="15" data-prefix="" data-suffix="+">0</div><div class="slb">Deployments</div></div>
            <div class="sc tc rv"><div class="sn" data-target="98" data-prefix="" data-suffix="%">0</div><div class="slb">Satisfaction</div></div>
            <div class="sc tc rv"><div class="sn" data-target="5.2" data-prefix="" data-suffix="x">0</div><div class="slb">Average ROI</div></div>
            <div class="sc tc rv"><div class="sn" data-target="30" data-prefix="" data-suffix="+">0</div><div class="slb">Projects Shipped</div></div>
        </div>
    </div>
</section>

<!-- INDUSTRIES WE SERVE -->
<section class="sp" style="background: rgba(0,0,0,0.2);">
    <div class="container">
        <div class="st rv"><h2>Industries We Serve</h2><p>Intelligent automation tailored for your vertical.</p></div>
        <div class="ig" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(180px, 1fr)); gap: 16px;">
            <div class="ic tc rv"><svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg><h4>Logistics</h4></div>
            <div class="ic tc rv"><svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg><h4>Fintech</h4></div>
            <div class="ic tc rv"><svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg><h4>E-Commerce</h4></div>
            <div class="ic tc rv"><svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg><h4>Healthcare</h4></div>
            <div class="ic tc rv"><svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg><h4>Real Estate</h4></div>
            <div class="ic tc rv"><svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg><h4>SaaS</h4></div>
            <div class="ic tc rv"><svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg><h4>Manufacturing</h4></div>
            <div class="ic tc rv"><svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg><h4>Education</h4></div>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="sp" style="background: linear-gradient(180deg, var(--bg-color) 0%, rgba(59,130,246,0.1) 100%);">
    <div class="container">
        <div class="cta rv" style="background: rgba(59,130,246,0.1); border: 1px solid var(--primary-blue); border-radius: 20px; padding: 70px 50px; text-align: center;">
            <h2 style="font-size: 2.5rem; margin-bottom: 20px;">Have a Similar <span class="tg">Challenge?</span></h2>
            <p style="color: var(--white); font-size: 1.15rem; margin-bottom: 40px;">Tell us about your problem. We'll map out the solution architecture and projected outcomes—no commitment required.</p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <div class="mw"><a href="contact.php" class="btn bp" style="font-size: 1.1rem; padding: 20px 45px;">Start a Conversation</a></div>
                <div class="mw"><a href="<?php echo whatsapp_link(); ?>" target="_blank" class="btn bs" style="background: #25D366; border-color: #25D366; color: var(--white); font-size: 1.1rem; padding: 20px 45px;">WhatsApp Us</a></div>
            </div>
            <p style="margin-top: 20px; font-size: 0.85rem; color: var(--gray);">Direct response from Somnath Kurmi. No sales team, no gatekeepers.</p>
        </div>
    </div>
</section>

<script>
    // Filter functionality
    const filterBtns = document.querySelectorAll('.fbtn');
    const caseCards = document.querySelectorAll('#caseGrid .cc');
    const featuredCard = document.getElementById('featCard');
    const noResults = document.getElementById('noRes');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            filterBtns.forEach(b => b.classList.remove('on'));
            btn.classList.add('on');
            const filter = btn.dataset.filter;
            let visibleCount = 0;

            // Featured card
            if (featuredCard) {
                const cats = featuredCard.dataset.category || '';
                if (filter === 'all' || cats.includes(filter)) {
                    featuredCard.style.display = '';
                    visibleCount++;
                } else {
                    featuredCard.style.display = 'none';
                }
            }

            // Grid cards
            caseCards.forEach(card => {
                const cats = card.dataset.category || '';
                if (filter === 'all' || cats.includes(filter)) {
                    card.style.display = '';
                    visibleCount++;
                } else {
                    card.style.display = 'none';
                }
            });

            noResults.style.display = visibleCount === 0 ? 'block' : 'none';
        });
    });

    // Stats counter
    const statNumbers = document.querySelectorAll('.sn');
    let statsStarted = false;

    function startCount(el) {
        const target = parseFloat(el.dataset.target);
        const prefix = el.dataset.prefix || '';
        const suffix = el.dataset.suffix || '';
        const isFloat = target % 1 !== 0;
        let current = 0;
        const duration = 2000;
        const stepTime = 20;
        const steps = duration / stepTime;
        const increment = target / steps;

        const counter = setInterval(() => {
            current += increment;
            if (current >= target) {
                current = target;
                el.textContent = prefix + (isFloat ? current.toFixed(1) : Math.floor(current).toLocaleString()) + suffix;
                clearInterval(counter);
            } else {
                el.textContent = prefix + (isFloat ? current.toFixed(1) : Math.floor(current).toLocaleString()) + suffix;
            }
        }, stepTime);
    }

    const statsObserver = new IntersectionObserver((entries) => {
        if (entries[0].isIntersecting && !statsStarted) {
            statNumbers.forEach(stat => startCount(stat));
            statsStarted = true;
        }
    }, { threshold: 0.3 });
    statsObserver.observe(document.getElementById('statsGrid'));
</script>

<?php include 'includes/footer.php'; ?>
