<?php
/**
 * Front Page Template for MitaPay Theme
 * Powered by Cronotics Technology
 */
get_header();
?>

<section class="hero-section">
    <div class="hero-content">
        <h1>Welcome to MitaPay</h1>
        <p>Digital financial services at your fingertips — fast, secure & reliable.</p>
        <a href="<?php echo site_url('/register'); ?>" class="btn-primary">Get Started</a>
    </div>
</section>

<section class="services-section">
    <h2>Our Services</h2>
    <div class="service-cards">
        <div class="service-card">
            <h3>Airtime & Data</h3>
            <p>Buy airtime and data at the best rates in seconds.</p>
        </div>
        <div class="service-card">
            <h3>Utility Bills</h3>
            <p>Pay your electricity, cable TV, internet & more easily.</p>
        </div>
        <div class="service-card">
            <h3>Wallet & Payments</h3>
            <p>Deposit, withdraw & transfer securely with your MitaPay wallet.</p>
        </div>
    </div>
</section>

<section class="cta-section">
    <h2>Join thousands using MitaPay daily 🚀</h2>
    <a href="<?php echo site_url('/register'); ?>" class="btn-secondary">Create Account</a>
</section>

<?php get_footer(); ?>
