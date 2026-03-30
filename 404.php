<?php
$page_title = '404 - Page Not Found | DRN.today';
$page_description = 'The page you\'re looking for doesn\'t exist or has been moved. Let our AI agents guide you back to DRN.today.';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found | DRN.today</title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <meta name="author" content="<?php echo FOUNDER_NAME; ?>">

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://drn.today/404">
    <meta property="og:title" content="404 - Page Not Found | DRN.today">
    <meta property="og:description" content="Even our AI agents couldn't find this page. Let's get you back on track.">
    <meta property="og:image" content="https://drn.today/og-404.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo asset('css/style.css'); ?>">

    <style>
        /* Additional 404-specific styles */
        body {
            background-color: var(--bg-color);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Minimal Top Bar */
        .minimal-bar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 60px;
            z-index: 1000;
            background: rgba(11, 15, 26, 0.85);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255,255,255,0.05);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 30px;
        }

        .minimal-bar .logo {
            font-size: 1.3rem;
            font-weight: 800;
            letter-spacing: -1px;
            position: relative;
            color: var(--white);
            text-decoration: none;
        }

        .minimal-bar .logo::after {
            content: 'SYS.ONLINE';
            position: absolute;
            bottom: -4px;
            right: 0;
            font-size: 0.45rem;
            color: var(--accent-cyan);
            letter-spacing: 2px;
            opacity: 0.7;
        }

        .minimal-bar .back-link {
            font-size: 0.82rem;
            color: var(--gray);
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: 0.3s;
            text-decoration: none;
        }

        .minimal-bar .back-link:hover {
            color: var(--accent-cyan);
            text-shadow: 0 0 10px var(--accent-cyan);
        }

        /* Error Section */
        .error-section {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 80px 20px 60px;
            position: relative;
            z-index: 5;
            min-height: calc(100vh - 200px);
        }

        .error-content {
            text-align: center;
            max-width: 750px;
            width: 100%;
        }

        .error-card {
            background: rgba(11, 15, 26, 0.85);
            backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            box-shadow: var(--glass-shadow);
            border-radius: 24px;
            padding: 60px 50px;
            position: relative;
            overflow: hidden;
        }

        .error-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: var(--energy-gradient);
            z-index: 10;
        }

        .error-number {
            font-size: clamp(7rem, 18vw, 12rem);
            font-weight: 800;
            line-height: 1;
            letter-spacing: -8px;
            position: relative;
            animation: floatNumber 6s ease-in-out infinite;
        }

        @keyframes floatNumber {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-12px); }
        }

        .error-number-glow {
            position: absolute;
            inset: -50%;
            background: radial-gradient(circle, rgba(59,130,246,0.18) 0%, rgba(139,92,246,0.08) 40%, transparent 70%);
            border-radius: 50%;
            animation: pulseGlow404 4s infinite alternate;
            pointer-events: none;
            z-index: -1;
        }

        @keyframes pulseGlow404 {
            0% { transform: scale(1); opacity: 0.6; }
            100% { transform: scale(1.4); opacity: 1; }
        }

        .scan-line {
            position: absolute;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--accent-cyan), transparent);
            opacity: 0;
            animation: scanDown 3s ease-in-out infinite;
            pointer-events: none;
            z-index: 10;
        }

        .scan-line:nth-child(2) { animation-delay: 1.5s; }

        @keyframes scanDown {
            0% { top: 0; opacity: 0; }
            10% { opacity: 0.5; }
            90% { opacity: 0.5; }
            100% { top: 100%; opacity: 0; }
        }

        .error-svg-area {
            width: 100%;
            max-width: 280px;
            height: 200px;
            margin: 0 auto 30px;
        }

        .error-title {
            font-size: clamp(1.5rem, 4vw, 2.2rem);
            font-weight: 800;
            margin-bottom: 12px;
        }

        .error-subtitle {
            color: var(--gray);
            font-size: 1.05rem;
            margin-bottom: 8px;
        }

        .error-friendly {
            color: var(--gray);
            font-size: 0.95rem;
            opacity: 0.7;
            margin-bottom: 35px;
            font-style: italic;
        }

        .btn-group {
            display: flex;
            gap: 16px;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 40px;
        }

        .search-bar {
            display: flex;
            max-width: 460px;
            margin: 0 auto 40px;
            border: 1px solid var(--glass-border);
            border-radius: 8px;
            overflow: hidden;
            background: rgba(255,255,255,0.02);
        }

        .search-bar:focus-within {
            border-color: var(--primary-blue);
            box-shadow: 0 0 20px rgba(59, 130, 246, 0.15);
        }

        .search-bar input {
            flex: 1;
            padding: 14px 20px;
            background: transparent;
            border: none;
            outline: none;
            color: var(--white);
            font-family: inherit;
            font-size: 0.9rem;
        }

        .search-bar input::placeholder { color: rgba(156, 163, 175, 0.5); }

        .search-bar button {
            padding: 14px 24px;
            background: rgba(59, 130, 246, 0.15);
            border: none;
            border-left: 1px solid var(--glass-border);
            color: var(--primary-blue);
            font-family: inherit;
            font-weight: 700;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: 0.3s;
        }

        .search-bar button:hover {
            background: var(--primary-blue);
            color: var(--white);
        }

        .quick-links {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 12px;
            max-width: 500px;
            margin: 0 auto 30px;
        }

        .quick-link {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 8px;
            padding: 20px 12px;
            background: rgba(255,255,255,0.02);
            border: 1px solid rgba(255,255,255,0.06);
            border-radius: 12px;
            transition: 0.3s;
            text-decoration: none;
        }

        .quick-link:hover {
            border-color: rgba(255,255,255,0.15);
            background: rgba(255,255,255,0.04);
            transform: translateY(-4px);
        }

        .quick-link-icon {
            width: 32px;
            height: 32px;
            color: var(--accent-cyan);
        }

        .quick-link span {
            font-size: 0.78rem;
            font-weight: 600;
            color: var(--gray);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .quick-link:hover span { color: var(--white); }

        .easter-egg {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255,255,255,0.05);
        }

        .easter-egg p {
            font-size: 0.8rem;
            color: rgba(156, 163, 175, 0.4);
            font-style: italic;
        }

        .egg-counter {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            margin-top: 8px;
            font-family: 'Courier New', monospace;
            font-size: 0.72rem;
            color: rgba(139, 92, 246, 0.4);
            letter-spacing: 1px;
        }

        @keyframes blinkDot {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.3; }
        }

        @keyframes radarSweep {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        @keyframes bobRobot {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-4px); }
        }

        @media (max-width: 768px) {
            .error-section { padding: 80px 15px 50px; }
            .error-card { padding: 35px 20px; }
            .error-svg-area { height: 160px; max-width: 220px; }
            .btn-group { flex-direction: column; align-items: center; }
            .btn-group .btn { width: 100%; max-width: 300px; }
            .quick-links { grid-template-columns: repeat(2, 1fr); max-width: 320px; }
            .minimal-bar { padding: 0 20px; }
            .search-bar { flex-direction: column; }
            .search-bar button { border-left: none; border-top: 1px solid var(--glass-border); }
        }

        @media (max-width: 480px) {
            .quick-links { grid-template-columns: repeat(2, 1fr); gap: 8px; }
            .quick-link { padding: 14px 8px; }
            .quick-link span { font-size: 0.7rem; }
            .quick-link-icon { width: 26px; height: 26px; }
        }
    </style>
</head>
<body>

    <!-- Background layers -->
    <div class="hud-overlay"></div>
    <div id="cursor-dot"></div>
    <div id="cursor-outline"></div>
    <canvas id="neural-canvas"></canvas>

    <!-- Minimal Top Bar -->
    <nav class="minimal-bar" aria-label="Error page navigation">
        <a href="index.php" class="logo">DRN<span>.today</span></a>
        <a href="index.php" class="back-link">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>
            Back to Safety
        </a>
    </nav>

    <!-- Main 404 Content -->
    <main class="error-section" role="main">
        <div class="error-content">
            <div class="error-card tilt-card">
                <div class="scan-line"></div>
                <div class="scan-line"></div>

                <!-- SVG: Robot Agent with Radar -->
                <div class="error-svg-area">
                    <svg viewBox="0 0 280 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="140" cy="100" r="80" stroke="rgba(59,130,246,0.08)" stroke-width="1" fill="none"/>
                        <circle cx="140" cy="100" r="55" stroke="rgba(59,130,246,0.1)" stroke-width="1" fill="none"/>
                        <circle cx="140" cy="100" r="30" stroke="rgba(59,130,246,0.12)" stroke-width="1" fill="none"/>
                        <g style="transform-origin: 140px 100px; animation: radarSweep 4s linear infinite;">
                            <path d="M140 100 L140 20 A80 80 0 0 1 220 100 Z" fill="rgba(6,182,212,0.06)" stroke="none"/>
                            <line x1="140" y1="100" x2="140" y2="20" stroke="rgba(6,182,212,0.3)" stroke-width="1.5"/>
                        </g>
                        <circle cx="140" cy="100" r="15" fill="none" stroke="rgba(6,182,212,0.4)" stroke-width="1" style="animation: radarPulse 3s ease-out infinite;"/>
                        <g style="animation: bobRobot 3s ease-in-out infinite;">
                            <line x1="140" y1="52" x2="140" y2="40" stroke="#3B82F6" stroke-width="1.5"/>
                            <circle cx="140" cy="37" r="3" fill="#3B82F6" opacity="0.8" style="animation: blinkDot 1.5s infinite;"/>
                            <rect x="118" y="52" width="44" height="32" rx="8" stroke="#3B82F6" stroke-width="1.5" fill="rgba(59,130,246,0.05)"/>
                            <circle cx="131" cy="68" r="5" stroke="#06B6D4" stroke-width="1.5" fill="none"/>
                            <circle cx="131" cy="68" r="2" fill="#06B6D4" style="animation: blinkDot 2s infinite;"/>
                            <circle cx="149" cy="68" r="5" stroke="#06B6D4" stroke-width="1.5" fill="none"/>
                            <circle cx="149" cy="68" r="2" fill="#06B6D4" style="animation: blinkDot 2s infinite 0.3s;"/>
                            <path d="M132 78 Q140 74 148 78" stroke="#9CA3AF" stroke-width="1" fill="none"/>
                            <rect x="112" y="90" width="56" height="40" rx="6" stroke="#3B82F6" stroke-width="1.5" fill="rgba(59,130,246,0.03)"/>
                            <circle cx="140" cy="105" r="4" stroke="#8B5CF6" stroke-width="1" fill="none"/>
                            <circle cx="140" cy="105" r="2" fill="#8B5CF6" opacity="0.6" style="animation: blinkDot 1.8s infinite;"/>
                            <line x1="112" y1="96" x2="98" y2="110" stroke="#3B82F6" stroke-width="1.5"/>
                            <line x1="168" y1="96" x2="182" y2="108" stroke="#3B82F6" stroke-width="1.5"/>
                            <circle cx="186" cy="104" r="8" stroke="#06B6D4" stroke-width="1" fill="rgba(6,182,212,0.05)"/>
                        </g>
                        <text x="60" y="60" fill="rgba(139,92,246,0.3)" font-size="18" font-weight="700" style="animation: floatNumber 5s ease-in-out infinite 0.5s;">?</text>
                        <text x="220" y="55" fill="rgba(59,130,246,0.25)" font-size="14" font-weight="700" style="animation: floatNumber 4s ease-in-out infinite 1s;">?</text>
                        <text x="140" y="195" text-anchor="middle" fill="rgba(156,163,175,0.35)" font-size="7" letter-spacing="3">AGENT SEARCHING...</text>
                    </svg>
                </div>

                <!-- 404 Number -->
                <div style="position: relative; display: inline-block; margin-bottom: 15px;">
                    <div class="error-number-glow"></div>
                    <div class="error-number text-gradient">404</div>
                </div>

                <h1 class="error-title">Page Not Found</h1>
                <p class="error-subtitle">The page you're looking for doesn't exist or has been moved.</p>
                <p class="error-friendly">"Don't worry though — our AI agents are still working hard. Let's get you back on track."</p>

                <!-- Search Bar -->
                <div class="search-bar">
                    <input type="text" placeholder="Search our site..." aria-label="Search site" id="searchInput">
                    <button type="button" id="searchBtn" class="ripple-btn">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                        Search
                    </button>
                </div>

                <!-- Action Buttons -->
                <div class="btn-group">
                    <div class="magnetic-wrap">
                        <a href="index.php" class="btn btn-primary ripple-btn">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                            Back to Home
                        </a>
                    </div>
                    <div class="magnetic-wrap">
                        <a href="contact.php" class="btn btn-secondary ripple-btn">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                            Contact Support
                        </a>
                    </div>
                    <div class="magnetic-wrap">
                        <a href="case-studies.php" class="btn btn-ghost btn-sm ripple-btn">Browse Case Studies</a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="quick-links">
                    <a href="index.php" class="quick-link reveal">
                        <svg class="quick-link-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                        <span>Home</span>
                    </a>
                    <a href="ai-agents.php" class="quick-link reveal">
                        <svg class="quick-link-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="3"/><path d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42"/></svg>
                        <span>AI Solutions</span>
                    </a>
                    <a href="services.php" class="quick-link reveal">
                        <svg class="quick-link-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
                        <span>Services</span>
                    </a>
                    <a href="case-studies.php" class="quick-link reveal">
                        <svg class="quick-link-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
                        <span>Case Studies</span>
                    </a>
                    <a href="contact.php" class="quick-link reveal">
                        <svg class="quick-link-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        <span>Contact Us</span>
                    </a>
                    <a href="about.php" class="quick-link reveal">
                        <svg class="quick-link-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                        <span>About</span>
                    </a>
                </div>

                <!-- Easter Egg -->
                <div class="easter-egg reveal">
                    <p>"Error 404? Even our AI agents couldn't find this one."</p>
                    <div class="egg-counter">
                        <span class="egg-counter-dot"></span>
                        HIDDEN_CORNER_DISCOVERED: TRUE
                    </div>
                </div>

            </div>
        </div>
    </main>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- Additional 404 Script -->
    <script>
        // Search bar functionality
        const searchInput = document.getElementById('searchInput');
        const searchBtn = document.getElementById('searchBtn');

        function handleSearch() {
            const query = searchInput.value.trim();
            if (!query) {
                searchInput.style.borderColor = 'var(--danger-red)';
                searchInput.placeholder = 'Please enter a search term...';
                setTimeout(() => {
                    searchInput.style.borderColor = '';
                    searchInput.placeholder = 'Search our site...';
                }, 2000);
            } else {
                const originalText = searchBtn.innerHTML;
                searchBtn.innerHTML = '...';
                searchBtn.style.pointerEvents = 'none';
                setTimeout(() => {
                    searchBtn.innerHTML = originalText;
                    searchBtn.style.pointerEvents = '';
                    searchInput.value = '';
                    searchInput.placeholder = 'No results — try navigating from links below';
                    setTimeout(() => {
                        searchInput.placeholder = 'Search our site...';
                    }, 3000);
                }, 800);
            }
        }

        if (searchBtn) {
            searchBtn.addEventListener('click', handleSearch);
        }
        if (searchInput) {
            searchInput.addEventListener('keydown', (e) => {
                if (e.key === 'Enter') handleSearch();
            });
        }

        // Keyboard shortcut: ESC -> Home
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                window.location.href = 'index.php';
            }
        });

        // Trigger reveal animations on load
        document.querySelectorAll('.reveal').forEach(el => {
            setTimeout(() => el.classList.add('active'), 100);
        });
    </script>
</body>
</html>
