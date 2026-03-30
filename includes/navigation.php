<?php
$current = current_page();
?>
<header id="navbar">
    <div class="container nav-container">
        <a href="index.php" class="logo">DRN<span>.today</span></a>
        <ul class="nav-links">
            <li><a href="index.php" <?php echo $current === 'index' ? 'class="active"' : ''; ?>>Home</a></li>
            <li><a href="ai-agents.php" <?php echo $current === 'ai-agents' ? 'class="active"' : ''; ?>>AI Solutions</a></li>
            <li><a href="services.php" <?php echo $current === 'services' ? 'class="active"' : ''; ?>>Services</a></li>
            <li><a href="case-studies.php" <?php echo $current === 'case-studies' ? 'class="active"' : ''; ?>>Case Studies</a></li>
            <li><a href="contact.php" <?php echo $current === 'contact' ? 'class="active"' : ''; ?>>Contact</a></li>
            <li><a href="contact.php" class="nav-cta">Get Proposal</a></li>
        </ul>
        <div class="hamburger"><span class="bar"></span><span class="bar"></span><span class="bar"></span></div>
    </div>
</header>

