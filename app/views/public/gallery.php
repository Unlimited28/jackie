<?php
$this->layout('main', ['title' => 'Gallery - Royal Ambassadors']);
?>

<style>
    /* This style block should be moved to a dedicated CSS file in a later refactor. */
    .page-header {
        padding-top: 120px;
        padding-bottom: 60px;
        text-align: center;
        background: linear-gradient(180deg, rgba(15, 27, 55, 0.5), transparent);
    }
    .page-header h1 {
        font-size: 2.8rem;
        font-weight: 800;
    }
    .page-header p {
        font-size: 1.1rem;
        color: var(--muted);
        max-width: 600px;
        margin: 16px auto 0;
    }
    .content-section {
        padding: 80px 24px;
        max-width: 1200px;
        margin: 0 auto;
    }
    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 24px;
    }
    .gallery-item {
        border-radius: var(--radius);
        overflow: hidden;
        border: 1px solid rgba(255,255,255,.07);
        box-shadow: var(--shadow);
        transition: var(--transition);
        position: relative;
    }
    .gallery-item:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 35px rgba(0,0,0,.4);
    }
    .gallery-item img {
        width: 100%;
        height: 250px;
        object-fit: cover;
        display: block;
    }
    .gallery-item .caption {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 20px;
        background: linear-gradient(to top, rgba(10,18,36,1), rgba(10,18,36,0.7) 70%, transparent);
    }
    .gallery-item .caption h4 {
        font-weight: 700;
        color: var(--text);
    }
    .gallery-item .caption p {
        color: var(--muted);
        font-size: 0.9rem;
    }
</style>

<!-- Page Header -->
<header class="page-header">
    <h1>Our Gallery</h1>
    <p>A glimpse into our events, camps, and community activities.</p>
</header>

<!-- Main Content Section -->
<main class="content-section">
    <div class="gallery-grid">
        <div class="gallery-item">
            <img src="<?= asset('assets/images/new_1.jpg') ?>" alt="Gallery Image 1">
            <div class="caption">
                <h4>Annual Camp Meeting</h4>
                <p>Faith, fellowship, and fun under the stars.</p>
            </div>
        </div>
        <div class="gallery-item">
            <img src="<?= asset('assets/images/new_2.jpg') ?>" alt="Gallery Image 2">
            <div class="caption">
                <h4>Leadership Training</h4>
                <p>Equipping the next generation of leaders.</p>
            </div>
        </div>
        <div class="gallery-item">
            <img src="<?= asset('assets/images/new_3.jpg') ?>" alt="Gallery Image 3">
            <div class="caption">
                <h4>Community Outreach</h4>
                <p>Serving the community with love and compassion.</p>
            </div>
        </div>
        <div class="gallery-item">
            <img src="<?= asset('assets/images/new_4.jpg') ?>" alt="Gallery Image 4">
            <div class="caption">
                <h4>Sports Festival</h4>
                <p>Building teamwork and sportsmanship.</p>
            </div>
        </div>
        <div class="gallery-item">
            <img src="<?= asset('assets/images/new_5.jpg') ?>" alt="Gallery Image 5">
            <div class="caption">
                <h4>Bible Study Session</h4>
                <p>Diving deep into the Word of God.</p>
            </div>
        </div>
        <div class="gallery-item">
            <img src="<?= asset('assets/images/new_6.jpg') ?>" alt="Gallery Image 6">
            <div class="caption">
                <h4>Music and Worship</h4>
                <p>Lifting our voices in praise.</p>
            </div>
        </div>
    </div>
</main>
