<?php
/**
 * The front page template file
 *
 * This is the template that displays the front page of the site.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package farm
 */

get_header(); ?>

<main id="main" class="site-main">
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <div class="container">
                <h1 class="hero-title animate-fade-in">به کسب‌وکار کشاورزی ما خوش آمدید</h1>
                <p class="hero-subtitle animate-fade-in-delay">مرجع کامل شما برای خرید کودها و سموم باکیفیت</p>
                <div class="hero-buttons animate-fade-in-delay-2">
                    <a href="<?php echo esc_url( home_url( '/products' ) ); ?>" class="btn btn-primary">اکنون خرید کنید</a>
                    <a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="btn btn-secondary">درباره ما</a>
                </div>
            </div>
        </div>
        <div class="hero-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <h2 class="section-title">چرا ما را انتخاب کنید؟</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
                            <path d="M2 17l10 5 10-5M2 12l10 5 10-5"></path>
                        </svg>
                    </div>
                    <h3>کیفیت برتر</h3>
                    <p>محصولات با بالاترین استانداردهای کیفیت و تأیید شده</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                    </div>
                    <h3>ارسال سریع</h3>
                    <p>ارسال سریع و ایمن به سراسر کشور</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                    </div>
                    <h3>پشتیبانی 24/7</h3>
                    <p>پشتیبانی کامل و مشاوره تخصصی در تمام ساعات</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                        </svg>
                    </div>
                    <h3>قیمت مناسب</h3>
                    <p>بهترین قیمت‌ها با تضمین کیفیت</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>آماده شروع هستید؟</h2>
                <p>همین حالا محصولات باکیفیت ما را مشاهده کنید</p>
                <a href="<?php echo esc_url( home_url( '/products' ) ); ?>" class="btn btn-large">مشاهده محصولات</a>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();