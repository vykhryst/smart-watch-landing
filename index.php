<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Watch Ultra - Last Days of Sale</title>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'YOUR_GTM_ID');
    </script>
    <!-- End Google Tag Manager -->

    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=YOUR_GTM_ID"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <header id="header" class="header">
        <div class="container header-wrap">
            <div class="logo">WATCH<span>ULTRA</span></div>

            <nav class="nav">
                <a href="#how-it-works">How it works</a>
                <a href="#features">Benefits</a>
                <a href="#comparison">Comparison</a>
                <a href="#reviews">Reviews</a>
            </nav>

            <a href="#order-form" class="btn-small">Order now</a>
        </div>
    </header>

    <section class="hero">
        <div class="container hero-grid">
            <div class="hero-text">
                <div class="scarcity-badge">🔥 2025 BESTSELLER</div>
                <h1>Your style.<br>Your rhythm.<br>Smart Watch Ultra.</h1>
                <p class="subtitle">
                    Health monitoring, GPS tracking and up to 7 days on a single charge.
                    Get maximum features for a minimal price.
                </p>

                <div class="price-wrap">
                    <div class="old-price">$199</div>
                    <div class="new-price">$99</div>
                </div>

                <div class="timer-block">
                    <span>Offer ends in:</span>
                    <div id="timer" class="timer">00:00:00</div>
                </div>

                <a href="#order-form" class="btn-main pulse-effect">GET WITH DISCOUNT</a>
                <p class="guarantee-text"><i class="ri-shield-check-fill"></i> Money-back guarantee</p>
            </div>

            <div class="hero-gallery">
                <div class="main-image">
                    <img id="currentImg" src="assets/img/main-image.png" alt="Smart Watch">
                </div>
                <div class="thumbnails">
                    <img src="assets/img/main-image.png" onclick="changeImage(this)" class="active-thumb" alt="Smart Watch front">
                    <img src="assets/img/watch-front.png" onclick="changeImage(this)" alt="Smart Watch display">
                    <img src="assets/img/watch-side.png" onclick="changeImage(this)" alt="Smart Watch side view">
                    <img src="assets/img/watch-hand.png" onclick="changeImage(this)" alt="Smart Watch on wrist">
                </div>
            </div>
        </div>
    </section>

    <section id="how-it-works" class="section how-it-works">
        <div class="container">
            <h2 class="section-title">How to Get Your Watch?</h2>
            <div class="steps-grid">
                <div class="step-item">
                    <div class="step-circle">1</div>
                    <h3>Request</h3>
                    <p>Fill in the simple form below. It takes about 30 seconds.</p>
                </div>
                <div class="step-item">
                    <div class="step-circle">2</div>
                    <h3>Phone call</h3>
                    <p>Our manager will call you to confirm your order details.</p>
                </div>
                <div class="step-item">
                    <div class="step-circle">3</div>
                    <h3>Payment</h3>
                    <p>You check the watch upon delivery and only then pay.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="features" class="section features">
        <div class="container">
            <h2 class="section-title">Future-ready technology</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="icon-box"><i class="ri-battery-2-charge-line"></i></div>
                    <h3>7 days battery</h3>
                    <p>Powerful battery that lasts up to a week.</p>
                </div>
                <div class="feature-card">
                    <div class="icon-box"><i class="ri-smartphone-line"></i></div>
                    <h3>Sync with phone</h3>
                    <p>Works with both Android and iPhone (iOS).</p>
                </div>
                <div class="feature-card">
                    <div class="icon-box"><i class="ri-heart-pulse-line"></i></div>
                    <h3>Health 24/7</h3>
                    <p>Heart rate, blood pressure, SpO₂ and sleep monitoring.</p>
                </div>
                <div class="feature-card">
                    <div class="icon-box"><i class="ri-shield-check-line"></i></div>
                    <h3>1-year warranty</h3>
                    <p>Official warranty card included in the box.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="comparison" class="section comparison">
        <div class="container">
            <h2 class="section-title">Honest comparison</h2>
            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Specification</th>
                            <th class="our-product">Smart Watch Ultra</th>
                            <th>Typical copies</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Battery life</td>
                            <td class="highlight">Up to 7 days</td>
                            <td>About 1 day</td>
                        </tr>
                        <tr>
                            <td>Display</td>
                            <td class="highlight">HD AMOLED (vivid)</td>
                            <td>Dim TFT</td>
                        </tr>
                        <tr>
                            <td>Water resistance</td>
                            <td class="highlight">IP67 (full protection)</td>
                            <td>None</td>
                        </tr>
                        <tr>
                            <td>Menu</td>
                            <td class="highlight"><i class="ri-check-line"></i> Smooth, no lag</td>
                            <td><i class="ri-close-line"></i> Slow and laggy</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section id="reviews" class="section reviews">
        <div class="container">
            <h2 class="section-title">What do customers say?</h2>

            <div class="reviews-wrapper">
                <button class="slider-btn prev-btn" onclick="slideReviews(-1)"><i class="ri-arrow-left-s-line"></i></button>

                <div class="reviews-slider" id="reviewsSlider">
                    <div class="review-card">
                        <div class="stars">⭐⭐⭐⭐⭐</div>
                        <p>"Ordered yesterday, picked it up today. The quality is amazing! Looks 10/10."</p>
                        <span>– Andrii V., Kyiv</span>
                    </div>
                    <div class="review-card">
                        <div class="stars">⭐⭐⭐⭐⭐</div>
                        <p>"Very comfortable, barely feel it on the wrist. Screen is bright even in the sun."</p>
                        <span>– Olena M., Odesa</span>
                    </div>
                    <div class="review-card">
                        <div class="stars">⭐⭐⭐⭐⭐</div>
                        <p>"You won't find anything better for this price. All notifications come instantly."</p>
                        <span>– Serhii K., Lviv</span>
                    </div>
                    <div class="review-card">
                        <div class="stars">⭐⭐⭐⭐⭐</div>
                        <p>"Got it as a gift for my husband. He's thrilled, the battery really lasts long."</p>
                        <span>– Iryna D., Kharkiv</span>
                    </div>
                    <div class="review-card">
                        <div class="stars">⭐⭐⭐⭐☆</div>
                        <p>"Fast delivery. The watch is great, I figured out the settings in 5 minutes."</p>
                        <span>– Maksym, Dnipro</span>
                    </div>
                    <div class="review-card">
                        <div class="stars">⭐⭐⭐⭐⭐</div>
                        <p>"Service is excellent. The manager explained everything. The watch looks very premium."</p>
                        <span>– Viktoriia, Poltava</span>
                    </div>
                </div>

                <button class="slider-btn next-btn" onclick="slideReviews(1)"><i class="ri-arrow-right-s-line"></i></button>
            </div>
        </div>
    </section>

    <section id="order-form" class="section order-section">
        <div class="container">
            <div class="order-wrapper">
                <div class="order-info">
                    <div class="stock-warning">
                        <i class="ri-alarm-warning-fill"></i> ATTENTION
                    </div>
                    <h3>Stock Running Out!</h3>
                    <p class="stock-text">Due to high demand, only this many left in stock:</p>

                    <div class="big-number">
                        7 <span>units</span>
                    </div>

                    <p class="sub-stock">Next shipment in 2 months, but price will be 40% higher.</p>
                </div>

                <div class="order-card">
                    <div class="form-header">
                        <h4>Order form</h4>
                        <p>Lock in the price <span class="highlight-price">$99</span></p>
                    </div>

                    <form action="order.php" method="POST" class="main-form">
                        <div class="input-box">
                            <label>Your name</label>
                            <div class="input-with-icon">
                                <i class="ri-user-3-line"></i>
                                <input type="text" name="name" placeholder="Enter your name">
                            </div>
                        </div>

                        <div class="input-box">
                            <label>Phone number</label>
                            <div class="input-with-icon">
                                <i class="ri-phone-line"></i>
                                <input type="tel" name="phone" placeholder="+38 (0__) ___ __ __">
                            </div>
                        </div>

                        <div class="input-box">
                            <label>Email (optional)</label>
                            <div class="input-with-icon">
                                <i class="ri-mail-line"></i>
                                <input type="text" name="email" placeholder="email@example.com">
                            </div>
                        </div>

                        <input type="hidden" name="utm_source">
                        <input type="hidden" name="utm_medium">
                        <input type="hidden" name="utm_campaign">
                        <input type="hidden" name="utm_term">
                        <input type="hidden" name="utm_content">

                        <input type="hidden" name="fbclid">
                        <input type="hidden" name="gclid">
                        <input type="hidden" name="sub_id">
                        <input type="hidden" name="sub_id2">

                        <button type="submit" class="btn-submit pulse-effect">CONFIRM ORDER</button>

                        <div class="security-icons">
                            <span><i class="ri-lock-2-line"></i> Secure</span>
                            <span><i class="ri-check-double-line"></i> Pay on delivery</span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>© 2025 Smart Watch Shop. All rights reserved.</p>
            <p style="font-size: 0.8rem; color: #555; margin-top: 10px;">Privacy Policy | Public offer agreement</p>
        </div>
    </footer>

    <div id="fake-notification" class="notification">
        <div class="notif-icon">📦</div>
        <div class="notif-content">
            <span class="notif-name">...</span>
            <span class="notif-text">has just placed an order</span>
        </div>
    </div>

    <script src="assets/js/main.js"></script>
</body>

</html>