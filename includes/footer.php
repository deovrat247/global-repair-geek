<section class="site-cta" aria-labelledby="site-cta-title">
    <div class="container site-cta-inner">
        <div>
            <span class="eyebrow eyebrow-light">Let’s solve what’s slowing you down</span>
            <h2 id="site-cta-title">Need technical support or a stronger online presence?</h2>
        </div>
        <div class="site-cta-actions">
            <a class="button button-light" href="contact.php">Start a conversation</a>
            <a class="button button-outline-light" href="tel:+13202476747"><i class="fa fa-phone" aria-hidden="true"></i> 1-320-247-6747</a>
        </div>
    </div>
</section>

<footer id="footer" class="site-footer">
    <div class="container footer-grid">
        <div class="footer-brand">
            <a href="index.php" aria-label="L and A LLC home">
                <img src="assets/images/logo-la-llc-white.png" alt="L&amp;A LLC">
            </a>
            <p>Practical computer support and digital marketing services for individuals and growing businesses.</p>
        </div>

        <div class="footer-column">
            <h3>Services</h3>
            <ul>
                <li><a href="computer-services.php">Computer Services</a></li>
                <li><a href="seo-services.php">SEO Services</a></li>
                <li><a href="pay-per-link.php">Pay Per Click</a></li>
                <li><a href="website-promotion.php">Website Promotion</a></li>
            </ul>
        </div>

        <div class="footer-column">
            <h3>Company</h3>
            <ul>
                <li><a href="about-us.php">About us</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="pricingbox.php">Pricing</a></li>
                <li><a href="privacy-policy.php">Privacy Policy</a></li>
                <li><a href="terms-conditions.php">Terms &amp; Conditions</a></li>
            </ul>
        </div>

        <div class="footer-column footer-contact">
            <h3>Get in touch</h3>
            <address>
                <p><i class="fa fa-map-marker" aria-hidden="true"></i><span>108 Ash St NE<br>New London, MN 56273</span></p>
                <p><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+13202476747">1-320-247-6747</a></p>
                <p><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:info@globalrepairgeek.com">info@globalrepairgeek.com</a></p>
            </address>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container footer-bottom-inner">
            <p>&copy; <?php echo date('Y'); ?> L&amp;A LLC. All rights reserved.</p>
            <a href="contact.php">Support &amp; enquiries <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>
    </div>
</footer>

<a class="back-to-top" href="#" aria-label="Back to top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>

<script>
(function () {
    var header = document.querySelector('.site-header');
    var reduceMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    // Header shadow and back-to-top button appear once the page has moved.
    var toTop = document.querySelector('.back-to-top');
    function onScroll() {
        if (header) { header.classList.toggle('is-scrolled', window.scrollY > 8); }
        if (toTop) { toTop.classList.toggle('is-shown', window.scrollY > 600); }
    }
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();

    // Smooth scrolling for in-page links such as "Explore services".
    document.addEventListener('click', function (event) {
        var link = event.target.closest ? event.target.closest('a[href^="#"]') : null;
        if (!link || link.classList.contains('back-to-top')) { return; }
        var id = link.getAttribute('href').slice(1);
        var target = id ? document.getElementById(id) : null;
        if (!target) { return; }
        event.preventDefault();
        target.scrollIntoView({ behavior: reduceMotion ? 'auto' : 'smooth', block: 'start' });
    });

    // Fade sections in as they enter the viewport.
    var items = document.querySelectorAll('[data-reveal]');
    if (!items.length || reduceMotion || !('IntersectionObserver' in window)) { return; }
    document.documentElement.classList.add('reveal-ready');
    var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, { rootMargin: '0px 0px -6% 0px', threshold: 0.08 });
    items.forEach(function (item) { observer.observe(item); });
})();
</script>
