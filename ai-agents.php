<?php
$page_title = 'Agentic AI Solutions | DRN.today — Autonomous AI Agents for Enterprise';
$page_description = 'Deploy autonomous AI agents that perceive, reason, and execute complex business workflows. Workflow automation, customer support, lead qualification, and more.';
include 'includes/header.php';
?>

<!-- HERO SECTION -->
<section class="page-hero" style="min-height: 70vh;">
    <div class="hero-bg-glow hero-layer" data-speed="0.2"></div>
    <div class="holo-panel holo-1 hero-layer" data-speed="0.05"></div>
    <div class="holo-panel holo-2 hero-layer" data-speed="0.08"></div>
    <div class="holo-panel holo-3 hero-layer" data-speed="0.03"></div>

    <div class="container reveal" style="max-width: 900px;">
        <div class="breadcrumb" style="display: flex; gap: 10px; align-items: center; margin-bottom: 25px; font-size: 0.85rem; color: var(--gray);">
            <a href="index.php" style="color: var(--accent-cyan);">Home</a>
            <span>/</span>
            <span style="color: var(--white);">AI Agents</span>
        </div>
        <h1 style="font-size: clamp(2.2rem, 5.5vw, 4rem); font-weight: 800; line-height: 1.1; margin-bottom: 25px; letter-spacing: -2px; text-shadow: 0 0 40px rgba(59, 130, 246, 0.3);">
            <span class="text-gradient">Agentic AI</span> Solutions
        </h1>
        <p style="font-size: 1.3rem; color: var(--gray); margin-bottom: 20px; font-weight: 300; letter-spacing: 1px; text-transform: uppercase; opacity: 0.8;">
            Autonomous Agents That Think, Act, and Scale Your Business
        </p>
        <p style="font-size: 1.05rem; color: var(--gray); margin-bottom: 45px; max-width: 750px; line-height: 1.8; font-weight: 400;">
            Move beyond simple chatbots. Deploy autonomous AI agents that perceive, reason, and execute complex business workflows without human intervention.
        </p>
        <div class="hero-buttons" style="display: flex; gap: 25px; flex-wrap: wrap;">
            <div class="magnetic-wrap">
                <a href="#solutions" class="btn btn-primary">Explore Solutions</a>
            </div>
            <div class="magnetic-wrap">
                <a href="contact.php" class="btn btn-secondary">Book Consultation</a>
            </div>
        </div>
    </div>
</section>

<!-- KEY STATS BAR -->
<section style="padding: 40px 0; border-bottom: 1px solid var(--glass-border); background: rgba(11, 15, 26, 0.5); position: relative; z-index: 2;">
    <div class="container">
        <div id="stats-bar" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 30px; text-align: center;">
            <div class="reveal">
                <div class="stat-number" data-target="6" style="font-size: 2.2rem;">0</div>
                <div class="stat-label" style="font-size: 0.8rem;">Agent Types</div>
            </div>
            <div class="reveal">
                <div class="stat-number" data-target="80" style="font-size: 2.2rem;">0</div>
                <div class="stat-label" style="font-size: 0.8rem;">% Task Automation</div>
            </div>
            <div class="reveal">
                <div class="stat-number" data-target="24" style="font-size: 2.2rem;">0</div>
                <div class="stat-label" style="font-size: 0.8rem;">/7 Availability</div>
            </div>
            <div class="reveal">
                <div class="stat-number" data-target="99" style="font-size: 2.2rem;">0</div>
                <div class="stat-label" style="font-size: 0.8rem;">% Accuracy Rate</div>
            </div>
        </div>
    </div>
</section>

<!-- WHAT IS AGENTIC AI? -->
<section class="section-padding">
    <div class="container">
        <div class="section-title reveal">
            <h2>What is <span class="text-gradient">Agentic AI</span>?</h2>
            <p>The next evolution beyond traditional automation and simple chatbots.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px; margin-bottom: 50px;">
            <div class="diff-card tilt-card reveal">
                <div class="diff-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
                </div>
                <h4 style="margin-bottom: 8px; font-size: 1.05rem;">Full Autonomy</h4>
                <p style="color: var(--gray); font-size: 0.9rem;">Operates independently without step-by-step human instructions. Sets its own sub-goals.</p>
            </div>
            <div class="diff-card tilt-card reveal">
                <div class="diff-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                </div>
                <h4 style="margin-bottom: 8px; font-size: 1.05rem;">Goal-Oriented</h4>
                <p style="color: var(--gray); font-size: 0.9rem;">Works toward defined business outcomes, adapting its approach as conditions change.</p>
            </div>
            <div class="diff-card tilt-card reveal">
                <div class="diff-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
                </div>
                <h4 style="margin-bottom: 8px; font-size: 1.05rem;">Multi-Step Reasoning</h4>
                <p style="color: var(--gray); font-size: 0.9rem;">Breaks complex problems into sequential steps, handling dependencies automatically.</p>
            </div>
            <div class="diff-card tilt-card reveal">
                <div class="diff-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
                </div>
                <h4 style="margin-bottom: 8px; font-size: 1.05rem;">Tool Use</h4>
                <p style="color: var(--gray); font-size: 0.9rem;">Interacts with external systems — APIs, databases, CRMs, email — just like a human would.</p>
            </div>
        </div>

        <div class="founder-quote reveal" style="max-width: 800px; margin: 0 auto; border-left: 3px solid var(--primary-purple); padding: 30px 35px; background: rgba(139, 92, 246, 0.05); border-radius: 0 12px 12px 0; position: relative;">
            <p style="font-size: 1.15rem; font-style: italic; color: #d1d5db; line-height: 1.8; position: relative; z-index: 1;">
                "Agentic AI isn't about replacing humans — it's about giving your business a tireless digital workforce that handles complexity so your team can focus on strategy and creativity. The companies that adopt this first will have an unfair advantage."
            </p>
            <div style="margin-top: 18px; display: flex; align-items: center; gap: 15px;">
                <div style="width: 45px; height: 45px; border-radius: 50%; background: linear-gradient(135deg, var(--primary-blue), var(--primary-purple)); display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1rem;">SK</div>
                <div>
                    <div style="font-weight: 700; font-size: 0.95rem;">Somnath Kurmi</div>
                    <div style="color: var(--accent-cyan); font-size: 0.8rem;">Founder, DRN.today</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- AGENTIC AI SOLUTIONS GRID -->
<section id="solutions" class="section-padding" style="background: rgba(0,0,0,0.2);">
    <div class="container">
        <div class="section-title reveal">
            <h2 class="text-gradient">AI Agent Solutions</h2>
            <p>Six specialized agents designed to automate your most critical business functions.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 30px;">

            <!-- Agent 1: Workflow Automation -->
            <div class="solution-card tilt-card reveal" style="background: var(--glass-bg); backdrop-filter: blur(var(--glass-blur)); border: 1px solid var(--glass-border); border-radius: 16px; padding: 40px 30px; position: relative; overflow: hidden;">
                <div class="solution-icon" style="width: 65px; height: 65px; border-radius: 14px; display: flex; align-items: center; justify-content: center; margin-bottom: 25px; background: rgba(59, 130, 246, 0.1); color: var(--primary-blue);">
                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
                </div>
                <h3 style="font-size: 1.3rem; margin-bottom: 10px;">Workflow Automation Agent</h3>
                <p style="color: var(--gray); font-size: 0.9rem; margin-bottom: 18px; line-height: 1.7;">Autonomous agent that identifies repetitive tasks and builds automation pipelines without manual configuration.</p>
                <div style="display: flex; flex-wrap: wrap; gap: 6px;">
                    <span class="capability-tag" style="display: inline-flex; align-items: center; gap: 6px; padding: 6px 14px; background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.08); border-radius: 20px; font-size: 0.8rem; color: var(--gray);">Data Entry</span>
                    <span class="capability-tag">Invoice Processing</span>
                    <span class="capability-tag">Email Routing</span>
                    <span class="capability-tag">Task Scheduling</span>
                </div>
                <div class="roi-badge" style="display: inline-flex; align-items: center; gap: 8px; padding: 10px 18px; background: rgba(52, 211, 153, 0.1); border: 1px solid rgba(52, 211, 153, 0.3); border-radius: 8px; color: var(--success-green); font-weight: 700; margin-top: 20px;">Save 100+ hours/month</div>
            </div>

            <!-- Agent 2: Customer Support -->
            <div class="solution-card tilt-card reveal">
                <div class="solution-icon" style="background: rgba(6, 182, 212, 0.1); color: var(--accent-cyan);">
                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                </div>
                <h3 style="font-size: 1.3rem; margin-bottom: 10px;">Customer Support Agent</h3>
                <p style="color: var(--gray); font-size: 0.9rem; margin-bottom: 18px; line-height: 1.7;">24/7 intelligent agent that handles customer inquiries with human-like understanding and empathy.</p>
                <div style="display: flex; flex-wrap: wrap; gap: 6px;">
                    <span class="capability-tag">Multi-language</span>
                    <span class="capability-tag">Sentiment Analysis</span>
                    <span class="capability-tag">Escalation Logic</span>
                    <span class="capability-tag">Ticket Resolution</span>
                </div>
                <div class="roi-badge">Resolve 80% of queries instantly</div>
            </div>

            <!-- Agent 3: Lead Qualification -->
            <div class="solution-card tilt-card reveal">
                <div class="solution-icon" style="background: rgba(139, 92, 246, 0.1); color: var(--primary-purple);">
                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
                </div>
                <h3 style="font-size: 1.3rem; margin-bottom: 10px;">Lead Qualification Agent</h3>
                <p style="color: var(--gray); font-size: 0.9rem; margin-bottom: 18px; line-height: 1.7;">Autonomous sales agent that pre-qualifies leads, nurtures prospects, and schedules meetings automatically.</p>
                <div style="display: flex; flex-wrap: wrap; gap: 6px;">
                    <span class="capability-tag">Lead Scoring</span>
                    <span class="capability-tag">Follow-up Emails</span>
                    <span class="capability-tag">Calendar Integration</span>
                    <span class="capability-tag">CRM Sync</span>
                </div>
                <div class="roi-badge">2x sales conversion rate</div>
            </div>

            <!-- Agent 4: Data Analysis -->
            <div class="solution-card tilt-card reveal">
                <div class="solution-icon" style="background: rgba(52, 211, 153, 0.1); color: var(--success-green);">
                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
                </div>
                <h3 style="font-size: 1.3rem; margin-bottom: 10px;">Data Analysis Agent</h3>
                <p style="color: var(--gray); font-size: 0.9rem; margin-bottom: 18px; line-height: 1.7;">Agent that analyzes data, generates actionable insights, and creates reports automatically on schedule.</p>
                <div style="display: flex; flex-wrap: wrap; gap: 6px;">
                    <span class="capability-tag">Pattern Detection</span>
                    <span class="capability-tag">Anomaly Alerts</span>
                    <span class="capability-tag">Report Generation</span>
                    <span class="capability-tag">Dashboard Updates</span>
                </div>
                <div class="roi-badge">90% faster decision-making</div>
            </div>

            <!-- Agent 5: Supply Chain -->
            <div class="solution-card tilt-card reveal">
                <div class="solution-icon" style="background: rgba(251, 191, 36, 0.1); color: #FBBF24;">
                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
                </div>
                <h3 style="font-size: 1.3rem; margin-bottom: 10px;">Supply Chain Agent</h3>
                <p style="color: var(--gray); font-size: 0.9rem; margin-bottom: 18px; line-height: 1.7;">Manages inventory levels, predicts demand fluctuations, and optimizes logistics autonomously.</p>
                <div style="display: flex; flex-wrap: wrap; gap: 6px;">
                    <span class="capability-tag">Stock Monitoring</span>
                    <span class="capability-tag">Reorder Triggers</span>
                    <span class="capability-tag">Vendor Comms</span>
                    <span class="capability-tag">Delivery Tracking</span>
                </div>
                <div class="roi-badge">30% reduction in stockouts</div>
            </div>

            <!-- Agent 6: HR & Recruitment -->
            <div class="solution-card tilt-card reveal">
                <div class="solution-icon" style="background: rgba(248, 113, 113, 0.1); color: var(--danger-red);">
                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                </div>
                <h3 style="font-size: 1.3rem; margin-bottom: 10px;">HR & Recruitment Agent</h3>
                <p style="color: var(--gray); font-size: 0.9rem; margin-bottom: 18px; line-height: 1.7;">Automates candidate screening, interview scheduling, and onboarding workflows end-to-end.</p>
                <div style="display: flex; flex-wrap: wrap; gap: 6px;">
                    <span class="capability-tag">Resume Parsing</span>
                    <span class="capability-tag">Skills Matching</span>
                    <span class="capability-tag">Interview Coord</span>
                    <span class="capability-tag">Doc Collection</span>
                </div>
                <div class="roi-badge">70% faster hiring process</div>
            </div>
        </div>
    </div>
</section>

<!-- HOW IT WORKS -->
<section id="how-it-works" class="section-padding" style="background: radial-gradient(circle at 50% 50%, rgba(59,130,246,0.05) 0%, transparent 60%);">
    <div class="container">
        <div class="section-title reveal">
            <h2>How Agentic AI <span class="text-gradient">Works</span></h2>
            <p>Four-stage autonomous loop that powers every agent we deploy.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
            <div class="flow-step reveal" style="text-align: center; padding: 40px 25px; position: relative;">
                <div class="flow-number" style="width: 70px; height: 70px; border-radius: 50%; margin: 0 auto 25px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: 800; position: relative; background: rgba(59, 130, 246, 0.15); color: var(--primary-blue); border: 2px solid rgba(59, 130, 246, 0.3);">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                </div>
                <h3 style="font-size: 1.2rem; margin-bottom: 10px; color: var(--primary-blue);">Perception</h3>
                <p style="color: var(--gray); font-size: 0.9rem; line-height: 1.7;">Agent ingests data from multiple sources — emails, APIs, databases, documents, and real-time feeds.</p>
            </div>
            <div class="flow-step reveal">
                <div class="flow-number" style="background: rgba(139, 92, 246, 0.15); color: var(--primary-purple); border: 2px solid rgba(139, 92, 246, 0.3);">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2z"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
                </div>
                <h3 style="font-size: 1.2rem; margin-bottom: 10px; color: var(--primary-purple);">Reasoning</h3>
                <p style="color: var(--gray); font-size: 0.9rem; line-height: 1.7;">AI processes the input, breaks down the goal into sub-tasks, and creates an execution plan.</p>
            </div>
            <div class="flow-step reveal">
                <div class="flow-number" style="background: rgba(6, 182, 212, 0.15); color: var(--accent-cyan); border: 2px solid rgba(6, 182, 212, 0.3);">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                </div>
                <h3 style="font-size: 1.2rem; margin-bottom: 10px; color: var(--accent-cyan);">Action</h3>
                <p style="color: var(--gray); font-size: 0.9rem; line-height: 1.7;">Agent executes tasks across tools — sending emails, updating CRMs, generating reports, triggering workflows.</p>
            </div>
            <div class="flow-step reveal">
                <div class="flow-number" style="background: rgba(52, 211, 153, 0.15); color: var(--success-green); border: 2px solid rgba(52, 211, 153, 0.3);">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
                </div>
                <h3 style="font-size: 1.2rem; margin-bottom: 10px; color: var(--success-green);">Learning</h3>
                <p style="color: var(--gray); font-size: 0.9rem; line-height: 1.7;">Agent evaluates outcomes, learns from feedback, and continuously improves its performance over time.</p>
            </div>
        </div>
    </div>
</section>

<!-- TECHNOLOGY STACK -->
<section class="section-padding">
    <div class="container">
        <div class="section-title reveal">
            <h2>Powered by <span class="text-gradient">Cutting-Edge Tech</span></h2>
            <p>The infrastructure behind our autonomous agents.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 25px;">
            <!-- LLMs -->
            <div class="reveal" style="background: var(--glass-bg); border: 1px solid var(--glass-border); border-radius: 16px; padding: 30px;">
                <h4 style="color: var(--primary-blue); font-size: 0.8rem; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 20px; font-weight: 700;">Large Language Models</h4>
                <div style="display: flex; flex-wrap: wrap; gap: 10px;">
                    <span class="tech-badge">GPT-4o</span>
                    <span class="tech-badge">Claude</span>
                    <span class="tech-badge">Gemini</span>
                    <span class="tech-badge">Llama</span>
                </div>
            </div>

            <!-- Frameworks -->
            <div class="reveal" style="background: var(--glass-bg); border: 1px solid var(--glass-border); border-radius: 16px; padding: 30px;">
                <h4 style="color: var(--primary-purple); font-size: 0.8rem; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 20px; font-weight: 700;">Agent Frameworks</h4>
                <div style="display: flex; flex-wrap: wrap; gap: 10px;">
                    <span class="tech-badge">LangChain</span>
                    <span class="tech-badge">AutoGen</span>
                    <span class="tech-badge">CrewAI</span>
                    <span class="tech-badge">LangGraph</span>
                </div>
            </div>

            <!-- Tools -->
            <div class="reveal" style="background: var(--glass-bg); border: 1px solid var(--glass-border); border-radius: 16px; padding: 30px;">
                <h4 style="color: var(--accent-cyan); font-size: 0.8rem; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 20px; font-weight: 700;">Integration Tools</h4>
                <div style="display: flex; flex-wrap: wrap; gap: 10px;">
                    <span class="tech-badge">Zapier</span>
                    <span class="tech-badge">Make</span>
                    <span class="tech-badge">REST APIs</span>
                    <span class="tech-badge">Webhooks</span>
                </div>
            </div>

            <!-- Infrastructure -->
            <div class="reveal" style="background: var(--glass-bg); border: 1px solid var(--glass-border); border-radius: 16px; padding: 30px;">
                <h4 style="color: var(--success-green); font-size: 0.8rem; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 20px; font-weight: 700;">Infrastructure</h4>
                <div style="display: flex; flex-wrap: wrap; gap: 10px;">
                    <span class="tech-badge">AWS</span>
                    <span class="tech-badge">GCP</span>
                    <span class="tech-badge">Azure</span>
                    <span class="tech-badge">Vector DB</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- USE CASES BY INDUSTRY -->
<section class="section-padding" style="background: rgba(0,0,0,0.2);">
    <div class="container">
        <div class="section-title reveal">
            <h2>Use Cases by <span class="text-gradient">Industry</span></h2>
            <p>AI agents tailored to your specific sector and operational needs.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 20px;">
            <div class="industry-card tilt-card reveal" style="background: var(--glass-bg); backdrop-filter: blur(var(--glass-blur)); border: 1px solid var(--glass-border); border-radius: 16px; padding: 35px 25px; text-align: center;">
                <div class="industry-icon" style="width: 55px; height: 55px; border-radius: 14px; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; background: rgba(139, 92, 246, 0.1); color: var(--primary-purple);">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>
                </div>
                <h4 style="font-size: 1rem; margin-bottom: 5px;">E-commerce</h4>
                <span class="industry-use-case">Inventory management</span>
                <span class="industry-use-case">24/7 customer support</span>
                <span class="industry-use-case">Personalization engine</span>
            </div>
            <div class="industry-card tilt-card reveal">
                <div class="industry-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
                </div>
                <h4 style="font-size: 1rem; margin-bottom: 5px;">Healthcare</h4>
                <span class="industry-use-case">Appointment scheduling</span>
                <span class="industry-use-case">Patient follow-ups</span>
                <span class="industry-use-case">Record management</span>
            </div>
            <div class="industry-card tilt-card reveal">
                <div class="industry-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                </div>
                <h4 style="font-size: 1rem; margin-bottom: 5px;">Finance</h4>
                <span class="industry-use-case">Fraud detection</span>
                <span class="industry-use-case">Report generation</span>
                <span class="industry-use-case">Compliance checks</span>
            </div>
            <div class="industry-card tilt-card reveal">
                <div class="industry-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                </div>
                <h4 style="font-size: 1rem; margin-bottom: 5px;">Real Estate</h4>
                <span class="industry-use-case">Lead nurturing</span>
                <span class="industry-use-case">Property matching</span>
                <span class="industry-use-case">Viewing scheduling</span>
            </div>
            <div class="industry-card tilt-card reveal">
                <div class="industry-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18"/><path d="M9 21V9"/></svg>
                </div>
                <h4 style="font-size: 1rem; margin-bottom: 5px;">Manufacturing</h4>
                <span class="industry-use-case">Quality control</span>
                <span class="industry-use-case">Supply chain ops</span>
                <span class="industry-use-case">Predictive maintenance</span>
            </div>
            <div class="industry-card tilt-card reveal">
                <div class="industry-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
                </div>
                <h4 style="font-size: 1rem; margin-bottom: 5px;">Education</h4>
                <span class="industry-use-case">Student support</span>
                <span class="industry-use-case">Grading assistance</span>
                <span class="industry-use-case">Enrollment automation</span>
            </div>
        </div>
    </div>
</section>

<!-- ROI CALCULATOR -->
<section class="section-padding" style="background: radial-gradient(circle at 50% 50%, rgba(52,211,153,0.05) 0%, transparent 60%);">
    <div class="container">
        <div class="section-title reveal">
            <h2>ROI <span class="text-gradient">Calculator</span></h2>
            <p>See how much time and money an AI agent could save your business.</p>
        </div>

        <div class="calc-wrapper reveal" style="max-width: 900px; margin: 0 auto; background: var(--glass-bg); backdrop-filter: blur(var(--glass-blur)); border: 1px solid var(--glass-border); border-radius: 20px; padding: 50px; position: relative; overflow: hidden;">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;" class="calc-grid">
                <div>
                    <h4 style="margin-bottom: 30px; font-size: 1.1rem;">Your Current Setup</h4>
                    <div style="margin-bottom: 30px;">
                        <label style="display: flex; justify-content: space-between; margin-bottom: 12px; font-size: 0.9rem; color: var(--gray);">
                            <span>Manual hours/week</span>
                            <span id="hours-display" style="color: var(--accent-cyan); font-weight: 700;">40 hrs</span>
                        </label>
                        <input type="range" id="hours-slider" class="calc-slider" min="5" max="200" value="40" step="5" style="width: 100%;">
                    </div>
                    <div style="margin-bottom: 30px;">
                        <label style="display: flex; justify-content: space-between; margin-bottom: 12px; font-size: 0.9rem; color: var(--gray);">
                            <span>Avg hourly cost</span>
                            <span id="cost-display" style="color: var(--accent-cyan); font-weight: 700;">$25/hr</span>
                        </label>
                        <input type="range" id="cost-slider" class="calc-slider" min="5" max="150" value="25" step="5" style="width: 100%;">
                    </div>
                    <div style="margin-bottom: 30px;">
                        <label style="display: flex; justify-content: space-between; margin-bottom: 12px; font-size: 0.9rem; color: var(--gray);">
                            <span>Automation level</span>
                            <span id="auto-display" style="color: var(--accent-cyan); font-weight: 700;">80%</span>
                        </label>
                        <input type="range" id="auto-slider" class="calc-slider" min="30" max="95" value="80" step="5" style="width: 100%;">
                    </div>
                </div>
                <div>
                    <h4 style="margin-bottom: 30px; font-size: 1.1rem;">Estimated Savings</h4>
                    <div class="calc-result" style="margin-bottom: 20px; background: rgba(52, 211, 153, 0.08); border: 1px solid rgba(52, 211, 153, 0.3); border-radius: 16px; padding: 35px; text-align: center;">
                        <div style="color: var(--gray); font-size: 0.85rem; margin-bottom: 8px;">Hours Saved / Month</div>
                        <div class="calc-result-number" id="result-hours" style="font-size: 3rem; font-weight: 800; color: var(--success-green);">128</div>
                    </div>
                    <div class="calc-result" style="margin-bottom: 20px;">
                        <div style="color: var(--gray); font-size: 0.85rem; margin-bottom: 8px;">Cost Savings / Month</div>
                        <div class="calc-result-number" id="result-cost">$3,200</div>
                    </div>
                    <div class="calc-result">
                        <div style="color: var(--gray); font-size: 0.85rem; margin-bottom: 8px;">Annual Savings</div>
                        <div class="calc-result-number" id="result-annual">$38,400</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- COMPARISON TABLE -->
<section class="section-padding">
    <div class="container">
        <div class="section-title reveal">
            <h2>Traditional Automation vs <span class="text-gradient">Agentic AI</span></h2>
            <p>Why the next generation of automation is fundamentally different.</p>
        </div>

        <div class="reveal" style="overflow-x: auto;">
            <table class="comparison-table" style="width: 100%; border-collapse: separate; border-spacing: 0; background: var(--glass-bg); backdrop-filter: blur(var(--glass-blur)); border: 1px solid var(--glass-border); border-radius: 16px; overflow: hidden;">
                <thead>
                    <tr>
                        <th style="padding: 20px 25px; text-align: left; font-size: 0.95rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; border-bottom: 1px solid var(--glass-border);">Feature</th>
                        <th style="padding: 20px 25px; text-align: left; font-size: 0.95rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; border-bottom: 1px solid var(--glass-border); background: rgba(248, 113, 113, 0.05); color: var(--danger-red);">Traditional Automation</th>
                        <th style="padding: 20px 25px; text-align: left; font-size: 0.95rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; border-bottom: 1px solid var(--glass-border); background: rgba(52, 211, 153, 0.05); color: var(--success-green);">Agentic AI</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td style="padding: 18px 25px; border-bottom: 1px solid rgba(255,255,255,0.05);">Decision Making</td><td style="padding: 18px 25px;">Rule-based only</td><td style="padding: 18px 25px;">Context-aware reasoning</td></tr>
                    <tr><td style="padding: 18px 25px;">Adaptability</td><td style="padding: 18px 25px;">Breaks on edge cases</td><td style="padding: 18px 25px;">Adapts to new scenarios</td></tr>
                    <tr><td style="padding: 18px 25px;">Complexity Handling</td><td style="padding: 18px 25px;">Linear workflows</td><td style="padding: 18px 25px;">Multi-step branching</td></tr>
                    <tr><td style="padding: 18px 25px;">Learning Capability</td><td style="padding: 18px 25px;">Static rules</td><td style="padding: 18px 25px;">Improves over time</td></tr>
                    <tr><td style="padding: 18px 25px;">Tool Integration</td><td style="padding: 18px 25px;">Pre-configured APIs</td><td style="padding: 18px 25px;">Learns new tools</td></tr>
                    <tr><td style="padding: 18px 25px;">Error Recovery</td><td style="padding: 18px 25px;">Requires human fix</td><td style="padding: 18px 25px;">Self-correcting</td></tr>
                    <tr><td style="padding: 18px 25px;">Natural Language</td><td style="padding: 18px 25px;">No understanding</td><td style="padding: 18px 25px;">Full comprehension</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- FAQ SECTION -->
<section class="section-padding" style="background: rgba(0,0,0,0.2);">
    <div class="container">
        <div class="section-title reveal">
            <h2>Frequently Asked <span class="text-gradient">Questions</span></h2>
            <p>Everything you need to know about deploying AI agents.</p>
        </div>

        <div style="max-width: 800px; margin: 0 auto;">
            <div class="faq-item reveal" style="background: var(--glass-bg); border: 1px solid var(--glass-border); border-radius: 12px; margin-bottom: 12px; overflow: hidden;">
                <div class="faq-question" style="padding: 22px 28px; display: flex; justify-content: space-between; align-items: center; cursor: pointer; font-weight: 600; font-size: 1.05rem;">
                    <span>What's the difference between chatbots and Agentic AI?</span>
                    <span class="faq-toggle" style="width: 30px; height: 30px; border-radius: 50%; border: 1px solid var(--glass-border); display: flex; align-items: center; justify-content: center;">+</span>
                </div>
                <div class="faq-answer" style="max-height: 0; overflow: hidden; transition: max-height 0.5s ease;">
                    <div class="faq-answer-inner" style="padding: 0 28px 22px; color: var(--gray); font-size: 0.95rem;">
                        Chatbots follow pre-written conversation trees and can only respond to anticipated inputs. Agentic AI understands context, sets its own goals, uses external tools, and executes multi-step tasks autonomously. A chatbot can answer "What are your hours?" — an AI agent can check inventory, place a reorder, email the vendor, and update your dashboard without any human input.
                    </div>
                </div>
            </div>

            <div class="faq-item reveal">
                <div class="faq-question" style="padding: 22px 28px; display: flex; justify-content: space-between; align-items: center; cursor: pointer; font-weight: 600; font-size: 1.05rem;">
                    <span>How secure are AI agents with my data?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-inner">
                        Security is foundational to our architecture. All data is encrypted in transit (TLS 1.3) and at rest (AES-256). We use enterprise-grade cloud infrastructure, implement role-based access controls, and can deploy agents in your own VPC for complete data isolation. We never use your data to train third-party models.
                    </div>
                </div>
            </div>

            <div class="faq-item reveal">
                <div class="faq-question">
                    <span>Can agents integrate with my existing tools?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-inner">
                        Absolutely. Our agents are built to work with your existing stack — CRMs (Salesforce, HubSpot), communication tools (Slack, email), databases, ERPs, and any system with an API. We also use integration platforms like Zapier and Make as bridges for tools without direct API access.
                    </div>
                </div>
            </div>

            <div class="faq-item reveal">
                <div class="faq-question">
                    <span>How long does implementation take?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-inner">
                        Most agents go from discovery to production in 2-4 weeks. Simple workflow agents can be deployed in as little as 5 business days. Complex multi-agent systems with custom integrations typically take 4-8 weeks. We follow an agile approach, delivering working iterations so you see value from day one.
                    </div>
                </div>
            </div>

            <div class="faq-item reveal">
                <div class="faq-question">
                    <span>What kind of ROI can I expect?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-inner">
                        Our clients typically see ROI within the first month. Based on our track record: Workflow agents save 100+ hours/month, Support agents resolve 80% of queries instantly, and Lead agents double conversion rates. Use our calculator above to estimate your specific savings. Most clients achieve 5-10x return on their investment within the first year.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="section-padding" style="background: linear-gradient(180deg, var(--bg-color) 0%, rgba(59,130,246,0.1) 100%);">
    <div class="container">
        <div class="ai-card reveal" style="text-align: center; max-width: 900px; margin: 0 auto; padding: 60px 40px; background: rgba(59, 130, 246, 0.1); border: 1px solid var(--primary-blue); border-radius: 16px;">
            <h2 style="font-size: 2.5rem; margin-bottom: 20px;">Ready to Deploy Your <span class="text-gradient">First AI Agent</span>?</h2>
            <p style="color: var(--white); font-size: 1.2rem; margin-bottom: 40px; max-width: 700px; margin-left: auto; margin-right: auto;">
                Join the forward-thinking companies using DRN.today to automate their future. Start with a free consultation.
            </p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo whatsapp_link(); ?>" target="_blank" class="btn btn-primary" style="background: #25D366; border-color: #25D366; font-size: 1.1rem; padding: 18px 45px;">
                    Start on WhatsApp
                </a>
                <a href="contact.php" class="btn btn-secondary" style="font-size: 1.1rem; padding: 18px 45px;">
                    Talk to Our AI Team
                </a>
            </div>
            <p style="margin-top: 20px; font-size: 0.9rem; color: var(--gray);">No spam. Direct consultation with Somnath Kurmi.</p>
        </div>
    </div>
</section>

<script>
    // ROI Calculator
    const hoursSlider = document.getElementById('hours-slider');
    const costSlider = document.getElementById('cost-slider');
    const autoSlider = document.getElementById('auto-slider');
    const hoursDisplay = document.getElementById('hours-display');
    const costDisplay = document.getElementById('cost-display');
    const autoDisplay = document.getElementById('auto-display');
    const resultHours = document.getElementById('result-hours');
    const resultCost = document.getElementById('result-cost');
    const resultAnnual = document.getElementById('result-annual');

    function updateCalc() {
        const hours = parseInt(hoursSlider.value);
        const cost = parseInt(costSlider.value);
        const autoPct = parseInt(autoSlider.value) / 100;
        hoursDisplay.textContent = hours + ' hrs';
        costDisplay.textContent = '$' + cost + '/hr';
        autoDisplay.textContent = (autoPct * 100) + '%';
        const monthlySaved = Math.round(hours * autoPct * 4.33);
        const monthlyCost = Math.round(monthlySaved * cost);
        const annualCost = monthlyCost * 12;
        resultHours.textContent = monthlySaved;
        resultCost.textContent = '$' + monthlyCost.toLocaleString();
        resultAnnual.textContent = '$' + annualCost.toLocaleString();
    }

    if (hoursSlider && costSlider && autoSlider) {
        hoursSlider.addEventListener('input', updateCalc);
        costSlider.addEventListener('input', updateCalc);
        autoSlider.addEventListener('input', updateCalc);
        updateCalc();
    }

    // FAQ Accordion
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        question.addEventListener('click', () => {
            const isOpen = item.classList.contains('open');
            faqItems.forEach(i => i.classList.remove('open'));
            if (!isOpen) item.classList.add('open');
        });
    });
</script>

<?php include 'includes/footer.php'; ?>
