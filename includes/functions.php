<?php
require_once __DIR__ . '/config.php';

/**
 * Get current page filename without extension
 */
function current_page() {
    return basename($_SERVER['PHP_SELF'], '.php');
}

/**
 * Check if current page is active for navigation
 */
function is_active($page) {
    return current_page() === $page ? 'active' : '';
}

/**
 * Safe output (prevent XSS)
 */
function e($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

/**
 * Get asset path
 */
function asset($path) {
    return '/assets/' . ltrim($path, '/');
}

/**
 * Get full WhatsApp link
 */
function whatsapp_link() {
    return 'https://wa.me/' . WHATSAPP_NUMBER;
}

/**
 * Get Telegram link
 */
function telegram_link() {
    return 'https://t.me/' . TELEGRAM_USERNAME;
}
?>