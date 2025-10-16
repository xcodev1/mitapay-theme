
/**
 * MitaPay Theme - Main JavaScript
 * Handles mobile menu toggle & basic UI interactions
 * Powered by Cronotics Technology
 */

document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.querySelector(".mobile-menu-toggle");
    const navMenu = document.querySelector(".main-nav .nav-menu");

    if (menuToggle && navMenu) {
        menuToggle.addEventListener("click", () => {
            navMenu.classList.toggle("active");
            menuToggle.classList.toggle("open");
        });
    }

    // Optional: Smooth scroll for anchor links
    const smoothLinks = document.querySelectorAll('a[href^="#"]');
    for (const link of smoothLinks) {
        link.addEventListener("click", function (e) {
            const targetId = this.getAttribute("href").substring(1);
            const targetElement = document.getElementById(targetId);
            if (targetElement) {
                e.preventDefault();
                targetElement.scrollIntoView({ behavior: "smooth" });
            }
        });
    }

    console.log("✅ MitaPay Theme JS Loaded");
});
