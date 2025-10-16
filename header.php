<?php
/**
 * Header Template for MitaPay Theme
 * Powered by Cronotics Technology
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="main-header">
    <div class="container">
        <div class="logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <?php
                if (has_custom_logo()) {
                    the_custom_logo();
                } else {
                    echo '<h1 class="site-title">' . get_bloginfo('name') . '</h1>';
                }
                ?>
            </a>
        </div>

        <nav class="main-nav">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class' => 'nav-menu',
                'container' => false,
            ));
            ?>
        </nav>

        <div class="auth-buttons">
            <a href="<?php echo site_url('/login'); ?>" class="btn-login">Login</a>
            <a href="<?php echo site_url('/register'); ?>" class="btn-register">Sign Up</a>
        </div>

        <div class="mobile-menu-toggle">
            <span></span><span></span><span></span>
        </div>
    </div>
</header>

<main class="site-main">
