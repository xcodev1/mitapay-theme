<?php
/**
 * Front Page Template for MitaPay Theme
 * Dashboard-like homepage similar to aimtoget.com
 * Powered by Cronotics Technology
 */
get_header();
?>

<section class="hero-section">
    <div class="container">
        <h1>Welcome to <span class="brand">MitaPay</span></h1>
        <p>Your all-in-one platform for Airtime, Data, Bills & Payments 💳</p>
        <div class="hero-buttons">
            <a href="<?php echo site_url('/register'); ?>" class="btn-primary">Get Started</a>
            <a href="<?php echo site_url('/login'); ?>" class="btn-secondary">Login</a>
        </div>
    </div>
</section>

<section class="services-section">
    <div class="container">
        <h2>What you can do with MitaPay</h2>
        <div class="services-grid">
            <div class="service-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/airtime.svg" alt="Airtime">
                <h3>Airtime Purchase</h3>
                <p>Buy airtime for all networks instantly at the best rates.</p>
            </div>
            <div class="service-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/data.svg" alt="Data">
                <h3>Data Bundles</h3>
                <p>Get cheap data bundles for MTN, Glo, Airtel & 9mobile.</p>
            </div>
            <div class="service-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/utility.svg" alt="Bills">
                <h3>Pay Bills</h3>
                <p>Pay electricity, cable, and other bills seamlessly.</p>
            </div>
            <div class="service-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/airtime-to-cash.svg" alt="Airtime to Cash">
                <h3>Airtime to Cash</h3>
                <p>Convert excess airtime to instant cash — fast and easy.</p>
            </div>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <h2>Join thousands of smart users today</h2>
        <a href="<?php echo site_url('/register'); ?>" class="btn-primary">Create Free Account</a>
    </div>
</section>

<?php get_footer(); ?>
