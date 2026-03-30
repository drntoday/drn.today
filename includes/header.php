
<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/functions.php';

$page_title = $page_title ?? 'Agentic AI & Automation Systems';
$page_description = $page_description ?? 'Deploy autonomous AI agents that act, learn, and scale your business.';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($page_title); ?> | <?php echo SITE_NAME; ?></title>
    <meta name="description" content="<?php echo e($page_description); ?>">
    <meta name="keywords" content="Agentic AI, AI Automation, Autonomous Agents, Enterprise AI, DRN.today, Somnath Kurmi">
    <meta name="author" content="<?php echo FOUNDER_NAME; ?>">

    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo SITE_URL . '/' . current_page(); ?>">
    <meta property="og:title" content="<?php echo e($page_title); ?> | <?php echo SITE_NAME; ?>">
    <meta property="og:description" content="<?php echo e($page_description); ?>">
    <meta property="og:image" content="<?php echo SITE_URL; ?>/assets/og-image.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo asset('css/style.css'); ?>">
</head>
<body>
    <div class="hud-overlay"></div>
    <div id="cursor-dot"></div>
    <div id="cursor-outline"></div>
    <canvas id="neural-canvas"></canvas>

    <?php include __DIR__ . '/navigation.php'; ?>
