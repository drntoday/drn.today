/* ============================================
   DRN.today — Global JavaScript
   ============================================ */

document.addEventListener('DOMContentLoaded', function() {

    // ============================================
    // CUSTOM CURSOR
    // ============================================
    const cursorDot = document.getElementById('cursor-dot');
    const cursorOutline = document.getElementById('cursor-outline');
    let mouseX = 0, mouseY = 0, cursorX = 0, cursorY = 0;

    if (cursorDot && cursorOutline) {
        document.addEventListener('mousemove', function(e) {
            mouseX = e.clientX;
            mouseY = e.clientY;
            cursorDot.style.left = mouseX + 'px';
            cursorDot.style.top = mouseY + 'px';
        });

        function animateCursor() {
            cursorX += (mouseX - cursorX) * 0.15;
            cursorY += (mouseY - cursorY) * 0.15;
            cursorOutline.style.left = cursorX + 'px';
            cursorOutline.style.top = cursorY + 'px';
            requestAnimationFrame(animateCursor);
        }
        animateCursor();

        const hoverTargets = document.querySelectorAll('a, button, .tilt-card, .cta-contact-btn, .sim-scenario-btn');
        hoverTargets.forEach(function(el) {
            el.addEventListener('mouseenter', function() { document.body.classList.add('hovering'); });
            el.addEventListener('mouseleave', function() { document.body.classList.remove('hovering'); });
        });
    }

    // ============================================
    // MAGNETIC BUTTONS
    // ============================================
    const magneticWraps = document.querySelectorAll('.magnetic-wrap');
    magneticWraps.forEach(function(m) {
        m.addEventListener('mousemove', function(e) {
            const rect = m.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;
            m.style.transform = 'translate(' + (x * 0.3) + 'px, ' + (y * 0.3) + 'px)';
        });
        m.addEventListener('mouseleave', function() {
            m.style.transform = 'translate(0, 0)';
        });
    });

    // ============================================
    // 3D TILT EFFECT
    // ============================================
    const tiltCards = document.querySelectorAll('.tilt-card');
    tiltCards.forEach(function(card) {
        card.addEventListener('mousemove', function(e) {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            const rotateX = ((y - centerY) / centerY) * -8;
            const rotateY = ((x - centerX) / centerX) * 8;
            card.style.setProperty('--mouse-x', x + 'px');
            card.style.setProperty('--mouse-y', y + 'px');
            card.style.transform = 'perspective(1000px) rotateX(' + rotateX + 'deg) rotateY(' + rotateY + 'deg) scale3d(1.02, 1.02, 1.02)';
        });
        card.addEventListener('mouseleave', function() {
            card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) scale3d(1, 1, 1)';
        });
    });

    // ============================================
    // NEURAL CANVAS PARTICLE SYSTEM
    // ============================================
    const canvas = document.getElementById('neural-canvas');
    if (canvas) {
        const ctx = canvas.getContext('2d');
        let particlesArray = [];
        let pulsesArray = [];

        function resizeCanvas() {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        }
        window.addEventListener('resize', function() {
            resizeCanvas();
            initParticles();
        });
        resizeCanvas();

        const mouse = { x: null, y: null, radius: 150 };
        window.addEventListener('mousemove', function(e) {
            mouse.x = e.x;
            mouse.y = e.y;
        });

        function Particle() {
            this.x = Math.random() * canvas.width;
            this.y = Math.random() * canvas.height;
            this.size = Math.random() * 2 + 0.5;
            this.baseX = this.x;
            this.baseY = this.y;
            this.density = Math.random() * 30 + 1;
            this.color = Math.random() > 0.5 ? 'rgba(59,130,246,' : 'rgba(6,182,212,';
            this.opacity = Math.random() * 0.5 + 0.1;
        }

        Particle.prototype.draw = function() {
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
            ctx.fillStyle = this.color + this.opacity + ')';
            ctx.fill();
        };

        Particle.prototype.update = function() {
            let dx = mouse.x - this.x;
            let dy = mouse.y - this.y;
            let distance = Math.sqrt(dx * dx + dy * dy);
            if (distance < mouse.radius) {
                const forceDirectionX = dx / distance;
                const forceDirectionY = dy / distance;
                const force = (mouse.radius - distance) / mouse.radius;
                this.x -= forceDirectionX * force * this.density;
                this.y -= forceDirectionY * force * this.density;
            } else {
                if (this.x !== this.baseX) {
                    let dx = this.x - this.baseX;
                    this.x -= dx / 20;
                }
                if (this.y !== this.baseY) {
                    let dy = this.y - this.baseY;
                    this.y -= dy / 20;
                }
            }
            this.x += Math.sin(Date.now() * 0.001 * this.density) * 0.2;
            this.y += Math.cos(Date.now() * 0.001 * this.density) * 0.2;
            this.draw();
        };

        function Pulse(x, y) {
            this.x = x;
            this.y = y;
            this.size = 0;
            this.opacity = 1;
        }

        Pulse.prototype.update = function() {
            this.size += 2;
            this.opacity -= 0.015;
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
            ctx.strokeStyle = 'rgba(59,130,246,' + this.opacity + ')';
            ctx.lineWidth = 1;
            ctx.stroke();
        };

        function initParticles() {
            particlesArray = [];
            const numberOfParticles = (canvas.width * canvas.height) / 15000;
            for (let i = 0; i < numberOfParticles; i++) {
                particlesArray.push(new Particle());
            }
        }

        function connectParticles() {
            for (let a = 0; a < particlesArray.length; a++) {
                for (let b = a; b < particlesArray.length; b++) {
                    let dx = particlesArray[a].x - particlesArray[b].x;
                    let dy = particlesArray[a].y - particlesArray[b].y;
                    let distance = dx * dx + dy * dy;
                    if (distance < (canvas.width / 7) * (canvas.height / 7)) {
                        let opacityValue = 1 - (distance / 20000);
                        ctx.strokeStyle = 'rgba(6,182,212,' + opacityValue * 0.15 + ')';
                        ctx.lineWidth = 1;
                        ctx.beginPath();
                        ctx.moveTo(particlesArray[a].x, particlesArray[a].y);
                        ctx.lineTo(particlesArray[b].x, particlesArray[b].y);
                        ctx.stroke();
                    }
                }
            }
        }

        setInterval(function() {
            if (pulsesArray.length < 3) {
                pulsesArray.push(new Pulse(Math.random() * canvas.width, Math.random() * canvas.height));
            }
        }, 2000);

        function animateCanvas() {
            requestAnimationFrame(animateCanvas);
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            for (let i = 0; i < particlesArray.length; i++) {
                particlesArray[i].update();
            }
            connectParticles();
            for (let i = 0; i < pulsesArray.length; i++) {
                pulsesArray[i].update();
                if (pulsesArray[i].opacity <= 0) {
                    pulsesArray.splice(i, 1);
                    i--;
                }
            }
        }
        animateCanvas();
        initParticles();
    }

    // ============================================
    // PARALLAX EFFECT
    // ============================================
    const parallaxLayers = document.querySelectorAll('.hero-layer');
    parallaxLayers.forEach(function(layer) {
        window.addEventListener('scroll', function() {
            const speed = layer.getAttribute('data-speed');
            layer.style.transform = 'translateY(' + (window.scrollY * speed) + 'px)';
        });
    });

    // ============================================
    // HEADER SCROLL EFFECT
    // ============================================
    const header = document.getElementById('navbar');
    if (header) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    }

    // ============================================
    // SCROLL REVEAL
    // ============================================
    const revealElements = document.querySelectorAll('.reveal');
    if (revealElements.length) {
        // Add hide-initially class
        revealElements.forEach(function(el) {
            el.classList.add('hide-initially');
        });

        const revealObserver = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.1, rootMargin: '0px 0px -30px 0px' });

        revealElements.forEach(function(el) {
            revealObserver.observe(el);
        });

        // Fallback: after 3 seconds, force all visible
        setTimeout(function() {
            document.querySelectorAll('.reveal.hide-initially').forEach(function(el) {
                el.classList.add('visible');
            });
        }, 3000);
    }

    // ============================================
    // MOBILE MENU
    // ============================================
    const hamburger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.nav-links');
    if (hamburger && navLinks) {
        hamburger.addEventListener('click', function() {
            hamburger.classList.toggle('active');
            navLinks.classList.toggle('active');
        });

        const navItems = document.querySelectorAll('.nav-links li a');
        navItems.forEach(function(item) {
            item.addEventListener('click', function() {
                hamburger.classList.remove('active');
                navLinks.classList.remove('active');
            });
        });
    }

    // ============================================
    // RIPPLE EFFECT
    // ============================================
    const rippleBtns = document.querySelectorAll('.ripple-btn');
    rippleBtns.forEach(function(btn) {
        btn.addEventListener('click', function(e) {
            const rect = this.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            const ripple = document.createElement('span');
            ripple.classList.add('ripple');
            ripple.style.left = x + 'px';
            ripple.style.top = y + 'px';
            this.appendChild(ripple);
            setTimeout(function() {
                ripple.remove();
            }, 1000);
        });
    });

    // ============================================
    // TYPING EFFECT (Homepage)
    // ============================================
    const typingEl = document.getElementById('typingText');
    if (typingEl) {
        const phrases = ['workflows', 'customer support', 'supply chains', 'lead qualification', 'document processing', 'predictive analytics'];
        let phraseIdx = 0, charIdx = 0, isDeleting = false, typingSpeed = 80;

        function typeLoop() {
            const current = phrases[phraseIdx];
            if (isDeleting) {
                typingEl.textContent = current.substring(0, charIdx - 1);
                charIdx--;
                typingSpeed = 40;
            } else {
                typingEl.textContent = current.substring(0, charIdx + 1);
                charIdx++;
                typingSpeed = 80;
            }

            if (!isDeleting && charIdx === current.length) {
                typingSpeed = 2000;
                isDeleting = true;
            } else if (isDeleting && charIdx === 0) {
                isDeleting = false;
                phraseIdx = (phraseIdx + 1) % phrases.length;
                typingSpeed = 400;
            }
            setTimeout(typeLoop, typingSpeed);
        }
        typeLoop();
    }

    // ============================================
    // AGENT SIMULATOR
    // ============================================
    const simOutput = document.getElementById('simOutput');
    if (simOutput) {
        let simRunning = false;
        let simTimeouts = [];

        const scenarios = {
            support: {
                lines: [
                    { text: '🧠 AGENT STATUS: ACTIVE', cls: 'sim-line-header', delay: 400 },
                    { text: '⚡ PROCESSING QUEUE: 1 request', cls: 'sim-line-header', delay: 300 },
                    { text: '', cls: 'sim-line-separator', delay: 200 },
                    { text: '━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━', cls: 'sim-line-separator', delay: 100 },
                    { text: '📥 INCOMING REQUEST:', cls: 'sim-line-label', delay: 200 },
                    { text: '━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━', cls: 'sim-line-separator', delay: 100 },
                    { text: '"Customer wants to return a defective product.', cls: 'sim-line-input', delay: 60 },
                    { text: ' Order #INV-12345. Product arrived damaged', cls: 'sim-line-input', delay: 50 },
                    { text: ' yesterday."', cls: 'sim-line-input', delay: 50 },
                    { text: '', cls: '', delay: 300 },
                    { text: '━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━', cls: 'sim-line-separator', delay: 100 },
                    { text: '🤔 REASONING:', cls: 'sim-line-label', delay: 200 },
                    { text: '━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━', cls: 'sim-line-separator', delay: 100 },
                    { text: '→ Analyzing sentiment: Negative (0.92)', cls: 'sim-line-arrow', delay: 180 },
                    { text: '→ Retrieving order #INV-12345 from CRM', cls: 'sim-line-arrow', delay: 220 },
                    { text: '→ Checking return policy: 30-day window', cls: 'sim-line-arrow', delay: 200 },
                    { text: '→ Order date: March 15, 2026 → Within policy ✓', cls: 'sim-line-arrow', delay: 180 },
                    { text: '→ Verifying product eligibility: Eligible ✓', cls: 'sim-line-arrow', delay: 160 },
                    { text: '→ Determining best action...', cls: 'sim-line-arrow', delay: 400 },
                    { text: '', cls: '', delay: 250 },
                    { text: '━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━', cls: 'sim-line-separator', delay: 100 },
                    { text: '⚡ ACTION TAKEN:', cls: 'sim-line-label', delay: 200 },
                    { text: '━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━', cls: 'sim-line-separator', delay: 100 },
                    { text: '✓ Generated return label (PDF)', cls: 'sim-line-check', delay: 160 },
                    { text: '✓ Sent email to customer with instructions', cls: 'sim-line-check', delay: 140 },
                    { text: '✓ Created refund ticket #REF-9876', cls: 'sim-line-check', delay: 120 },
                    { text: '✓ Notified warehouse for inspection', cls: 'sim-line-check', delay: 100 },
                    { text: '', cls: '', delay: 250 },
                    { text: '━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━', cls: 'sim-line-separator', delay: 100 },
                    { text: '✅ RESOLUTION', cls: 'sim-line-resolved', delay: 200 },
                    { text: '━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━', cls: 'sim-line-separator', delay: 100 },
                    { text: 'Status: RESOLVED', cls: 'sim-line-resolved', delay: 120 },
                    { text: 'Time taken: 3.2 seconds', cls: 'sim-line-stat', delay: 100 },
                    { text: 'Customer satisfaction prediction: 94%', cls: 'sim-line-stat', delay: 100 },
                    { text: '━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━', cls: 'sim-line-separator', delay: 100 }
                ]
            },
            inventory: {
                lines: [
                    { text: '🧠 AGENT STATUS: ACTIVE', cls: 'sim-line-header', delay: 400 },
                    { text: '⚡ PROCESSING QUEUE: 1 request', cls: 'sim-line-header', delay: 300 },
                    { text: '', cls: 'sim-line-separator', delay: 200 },
                    { text: '━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━', cls: 'sim-line-separator', delay: 100 },
                    { text: '📥 INCOMING REQUEST:', cls: 'sim-line-label', delay: 200 },
                    { text: '━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━', cls: 'sim-line-separator', delay: 100 },
                    { text: '"Check inventory levels for Warehouse B.', cls: 'sim-line-input', delay: 60 },
                    { text: ' Flag any items below reorder point and', cls: 'sim-line-input', delay: 50 },
                    { text: ' auto-generate POs if needed."', cls: 'sim-line-input', delay: 50 },
                    { text: '', cls: '', delay: 300 },
                    { text: '━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━', cls: 'sim-line-separator', delay: 100 },
                    { text: '🤔 REASONING:', cls: 'sim-line-label', delay: 200 },
                    { text: '━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━', cls: 'sim-line-separator', delay: 100 },
                    { text: '→ Connecting to Warehouse B inventory DB', cls: 'sim-line-arrow', delay: 250 },
                    { text: '→ Scanning 523 SKUs across 12 categories', cls: 'sim-line-arrow', delay: 300 },
                    { text: '→ Running ML demand forecast (next 14 days)', cls: 'sim-line-arrow', delay: 280 },
                    { text: '→ Found 7 items below reorder threshold', cls: 'sim-line-warn', delay: 200 },
                    { text: '→ Cross-referencing supplier lead times', cls: 'sim-line-arrow', delay: 220 },
                    { text: '→ Calculating optimal order quantities...', cls: 'sim-line-arrow', delay: 350 },
                    { text: '', cls: '', delay: 250 },
                    { text: '━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━', cls: 'sim-line-separator', delay: 100 },
                    { text: '⚡ ACTION TAKEN:', cls: 'sim-line-label', delay: 200 },
                    { text: '━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━', cls: 'sim-line-separator', delay: 100 },
                    { text: '✓ Generated PO #PO-4521 (3 items, $4,280)', cls: 'sim-line-check', delay: 160 },
                    { text: '✓ Generated PO #PO-4522 (4 items, $7,150)', cls: 'sim-line-check', delay: 140 },
                    { text: '✓ Sent POs to approved suppliers', cls: 'sim-line-check', delay: 120 },
                    { text: '✓ Updated inventory dashboard in real-time', cls: 'sim-line-check', delay: 100 },
                    { text: '✓ Scheduled delivery tracking alerts', cls: 'sim-line-check', delay: 100 },
                    { text: '', cls: '', delay: 250 },
                    { text: '━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━', cls: 'sim-line-separator', delay: 100 },
                    { text: '✅ RESOLUTION', cls: 'sim-line-resolved', delay: 200 },
                    { text: '━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━', cls: 'sim-line-separator', delay: 100 },
                    { text: 'Status: RESOLVED', cls: 'sim-line-resolved', delay: 120 },
                    { text: 'Time taken: 8.7 seconds', cls: 'sim-line-stat', delay: 100 },
                    { text: 'Stockout risk prevented: 7 items', cls: 'sim-line-stat', delay: 100 },
                    { text: '━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━', cls: 'sim-line-separator', delay: 100 }
                ]
            },
            lead: {
                lines: [
                    { text: '🧠 AGENT STATUS: ACTIVE', cls: 'sim-line-header', delay: 400 },
                    { text: '⚡ PROCESSING QUEUE: 1 request', cls: 'sim-line-header', delay: 300 },
                    { text: '', cls: 'sim-line-separator', delay: 200 },
                    { text: '━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━', cls: 'sim-line-separator', delay: 100 },
                    { text: '📥 INCOMING REQUEST:', cls: 'sim-line-label', delay: 200 },
                    { text: '━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━', cls: 'sim-line-separator', delay: 100 },
                    { text: '"New lead from website form: Priya Sharma,', cls: 'sim-line-input', delay: 60 },
                    { text: ' CTO at TechNova Inc. Budget: $50K.', cls: 'sim-line-input', delay: 50 },
                    { text: ' Interested in AI automation."', cls: 'sim-line-input', delay: 50 },
                    { text: '', cls: '', delay: 300 },
                    { text: '━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━', cls: 'sim-line-separator', delay: 100 },
                    { text: '🤔 REASONING:', cls: 'sim-line-label', delay: 200 },
                    { text: '━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━', cls: 'sim-line-separator', delay: 100 },
                    { text: '→ Enriching lead data (LinkedIn, company DB)', cls: 'sim-line-arrow', delay: 250 },
                    { text: '→ Company size: 120 employees, Series B', cls: 'sim-line-arrow', delay: 200 },
                    { text: '→ Industry fit: High (SaaS / B2B)', cls: 'sim-line-arrow', delay: 180 },
                    { text: '→ Budget alignment: $50K matches Enterprise tier', cls: 'sim-line-arrow', delay: 200 },
                    { text: '→ Lead score calculated: 92/100', cls: 'sim-line-check', delay: 220 },
                    { text: '→ Priority: HOT — route to senior sales', cls: 'sim-line-warn', delay: 300 },
                    { text: '', cls: '', delay: 250 },
                    { text: '━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━', cls: 'sim-line-separator', delay: 100 },
                    { text: '⚡ ACTION TAKEN:', cls: 'sim-line-label', delay: 200 },
                    { text: '━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━', cls: 'sim-line-separator', delay: 100 },
                    { text: '✓ Created CRM record with full enrichment', cls: 'sim-line-check', delay: 160 },
                    { text: '✓ Assigned to Senior AE (Vikram M.)', cls: 'sim-line-check', delay: 140 },
                    { text: '✓ Sent personalized welcome email to Priya', cls: 'sim-line-check', delay: 120 },
                    { text: '✓ Scheduled follow-up reminder in 4 hours', cls: 'sim-line-check', delay: 100 },
                    { text: '✓ Added to Enterprise pipeline ($50K)', cls: 'sim-line-check', delay: 100 },
                    { text: '', cls: '', delay: 250 },
                    { text: '━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━', cls: 'sim-line-separator', delay: 100 },
                    { text: '✅ RESOLUTION', cls: 'sim-line-resolved', delay: 200 },
                    { text: '━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━', cls: 'sim-line-separator', delay: 100 },
                    { text: 'Status: RESOLVED', cls: 'sim-line-resolved', delay: 120 },
                    { text: 'Time taken: 4.1 seconds', cls: 'sim-line-stat', delay: 100 },
                    { text: 'Lead score: 92/100 (HOT)', cls: 'sim-line-stat', delay: 100 },
                    { text: '━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━', cls: 'sim-line-separator', delay: 100 }
                ]
            },
            refund: {
                lines: [
                    { text: '🧠 AGENT STATUS: ACTIVE', cls: 'sim-line-header', delay: 400 },
                    { text: '⚡ PROCESSING QUEUE: 1 request', cls: 'sim-line-header', delay: 300 },
                    { text: '', cls: 'sim-line-separator', delay: 200 },
                    { text: '━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━', cls: 'sim-line-separator', delay: 100 },
                    { text: '📥 INCOMING REQUEST:', cls: 'sim-line-label', delay: 200 },
                    { text: '━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━', cls: 'sim-line-separator', delay: 100 },
                    { text: '"Requesting full refund for Order #ORD-7890.', cls: 'sim-line-input', delay: 60 },
                    { text: ' Item: Wireless Earbuds Pro. Reason: Not as', cls: 'sim-line-input', delay: 50 },
                    { text: ' described. Payment via credit card."', cls: 'sim-line-input', delay: 50 },
                    { text: '', cls: '', delay: 300 },
                    { text: '━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━', cls: 'sim-line-separator', delay: 100 },
                    { text: '🤔 REASONING:', cls: 'sim-line-label', delay: 200 },
                    { text: '━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━', cls: 'sim-line-separator', delay: 100 },
                    { text: '→ Fetching Order #ORD-7890 from payment gateway', cls: 'sim-line-arrow', delay: 280 },
                    { text: '→ Order total: $89.99 (paid 12 days ago)', cls: 'sim-line-arrow', delay: 200 },
                    { text: '→ Refund policy: 15-day return window', cls: 'sim-line-arrow', delay: 180 },
                    { text: '→ Within window: 3 days remaining ✓', cls: 'sim-line-arrow', delay: 200 },
                    { text: '→ Checking fraud indicators: None detected ✓', cls: 'sim-line-arrow', delay: 220 },
                    { text: '→ Customer history: 4 orders, 0 prior refunds', cls: 'sim-line-arrow', delay: 180 },
                    { text: '→ Decision: APPROVE full refund', cls: 'sim-line-check', delay: 350 },
                    { text: '', cls: '', delay: 250 },
                    { text: '━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━', cls: 'sim-line-separator', delay: 100 },
                    { text: '⚡ ACTION TAKEN:', cls: 'sim-line-label', delay: 200 },
                    { text: '━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━', cls: 'sim-line-separator', delay: 100 },
                    { text: '✓ Initiated refund $89.99 to credit card', cls: 'sim-line-check', delay: 160 },
                    { text: '✓ Refund ID: #RFN-5543 (3-5 biz days)', cls: 'sim-line-check', delay: 140 },
                    { text: '✓ Sent confirmation email to customer', cls: 'sim-line-check', delay: 120 },
                    { text: '✓ Updated order status: Refunded', cls: 'sim-line-check', delay: 100 },
                    { text: '✓ Logged return shipping label for item', cls: 'sim-line-check', delay: 100 },
                    { text: '', cls: '', delay: 250 },
                    { text: '━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━', cls: 'sim-line-separator', delay: 100 },
                    { text: '✅ RESOLUTION', cls: 'sim-line-resolved', delay: 200 },
                    { text: '━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━', cls: 'sim-line-separator', delay: 100 },
                    { text: 'Status: RESOLVED', cls: 'sim-line-resolved', delay: 120 },
                    { text: 'Time taken: 2.8 seconds', cls: 'sim-line-stat', delay: 100 },
                    { text: 'Refund amount: $89.99', cls: 'sim-line-stat', delay: 100 },
                    { text: '━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━', cls: 'sim-line-separator', delay: 100 }
                ]
            }
        };

        function clearSimulation() {
            simTimeouts.forEach(function(t) { clearTimeout(t); });
            simTimeouts = [];
            simOutput.innerHTML = '';
            simRunning = false;
        }

        window.runScenario = function(key, btnEl) {
            if (simRunning) clearSimulation();
            simRunning = true;

            document.querySelectorAll('.sim-scenario-btn').forEach(function(b) {
                b.classList.remove('active');
            });
            if (btnEl) btnEl.classList.add('active');

            const scenario = scenarios[key];
            if (!scenario) return;

            let totalDelay = 0;
            scenario.lines.forEach(function(line, idx) {
                const t = setTimeout(function() {
                    const div = document.createElement('div');
                    div.className = 'sim-line ' + line.cls;
                    div.textContent = line.text || '\u00A0';

                    if (idx === scenario.lines.length - 1) {
                        div.innerHTML = line.text + '<span class="sim-cursor-blink"></span>';
                    }

                    simOutput.appendChild(div);
                    requestAnimationFrame(function() {
                        requestAnimationFrame(function() {
                            div.classList.add('visible');
                        });
                    });

                    simOutput.scrollTop = simOutput.scrollHeight;

                    if (idx === scenario.lines.length - 1) {
                        simRunning = false;
                    }
                }, totalDelay);
                simTimeouts.push(t);
                totalDelay += line.delay;
            });
        };

        // Auto-run on scroll into view
        const simSection = document.getElementById('agent-sim');
        if (simSection) {
            const simObserver = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting && !simRunning && simOutput.children.length === 0) {
                        window.runScenario('support', document.querySelector('[data-scenario="support"]'));
                        simObserver.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.3 });
            simObserver.observe(simSection);
        }
    }

});
