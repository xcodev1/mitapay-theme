<?php
/**
 * Footer Template for MitaPay Theme
 * Powered by Cronotics Technology
 */
?>

</main>

<footer class="main-footer">
    <div class="container">
        <div class="footer-links">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer',
                'menu_class' => 'footer-menu',
                'container' => false,
            ));
            ?>
        </div>

        <div class="footer-info">
            <p>© <?php echo date('Y'); ?> MitaPay. All Rights Reserved.</p>
            <p>Powered by <strong>Cronotics Technology</strong> 🚀</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
