<?php
$currentPage = basename($_SERVER['PHP_SELF'] ?? 'index.php');
$servicePages = ['computer-services.php', 'seo-services.php', 'pay-per-link.php', 'website-promotion.php'];
$computerPrices = [100, 150, 200, 250, 300, 350, 400, 500];
?>
<a class="skip-link" href="#main-content">Skip to main content</a>

<header class="site-header">
    <div class="site-topbar">
        <div class="container site-topbar-inner">
            <p>Computer support and digital growth services</p>
            <div class="site-topbar-links">
                <a href="mailto:info@globalrepairgeek.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> info@globalrepairgeek.com</a>
                <a href="tel:+13202476747"><i class="fa fa-phone" aria-hidden="true"></i> 1-320-247-6747</a>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-default site-navbar" aria-label="Primary navigation">
        <div class="container site-navbar-inner">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false" aria-controls="main-menu">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand site-brand" href="index.php" aria-label="L and A LLC home">
                    <img src="assets/images/logo-la-llc-black.png" alt="L&amp;A LLC">
                </a>
            </div>

            <div id="main-menu" class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li class="<?php echo $currentPage === 'index.php' ? 'active' : ''; ?>"><a href="index.php">Home</a></li>
                    <li class="<?php echo $currentPage === 'about-us.php' ? 'active' : ''; ?>"><a href="about-us.php">About</a></li>
                    <li class="dropdown <?php echo in_array($currentPage, $servicePages, true) ? 'active' : ''; ?>">
                        <a href="seo-services.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="computer-services.php"><i class="fa fa-laptop" aria-hidden="true"></i> Computer Services</a></li>
                            <li><a href="seo-services.php"><i class="fa fa-line-chart" aria-hidden="true"></i> SEO Services</a></li>
                            <li><a href="pay-per-link.php"><i class="fa fa-mouse-pointer" aria-hidden="true"></i> Pay Per Click</a></li>
                            <li><a href="website-promotion.php"><i class="fa fa-bullhorn" aria-hidden="true"></i> Website Promotion</a></li>
                        </ul>
                    </li>
                    <li class="<?php echo $currentPage === 'portfolio.php' ? 'active' : ''; ?>"><a href="portfolio.php">Portfolio</a></li>
                    <li class="<?php echo $currentPage === 'pricingbox.php' ? 'active' : ''; ?>"><a href="pricingbox.php">SEO Pricing</a></li>
                    <li class="dropdown site-nav-prices <?php echo $currentPage === 'pricing-mail.php' ? 'active' : ''; ?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Computer Services <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <?php foreach ($computerPrices as $price): ?>
                            <li><a href="pricing-mail.php?amount=<?php echo $price; ?>">$<?php echo $price; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <li class="site-nav-cta <?php echo $currentPage === 'contact.php' ? 'active' : ''; ?>"><a href="contact.php">Contact us</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
