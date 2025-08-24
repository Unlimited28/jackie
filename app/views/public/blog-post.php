<?php
$this->layout('main', ['title' => 'Blog Post - Royal Ambassadors']);
?>

<style>
    /* This style block should be moved to a dedicated CSS file in a later refactor. */
    .blog-layout {
        display: grid;
        grid-template-columns: 1fr;
        gap: 48px;
        padding: 80px 24px;
        max-width: 1200px;
        margin: 0 auto;
    }
    @media (min-width: 992px) {
        .blog-layout {
            grid-template-columns: 2.5fr 1fr;
        }
    }
    .post-content {
        color: var(--muted);
        line-height: 1.8;
        font-size: 1.1rem;
    }
    .post-content h2 {
        color: var(--text);
        font-size: 1.8rem;
        margin: 32px 0 16px;
    }
    .post-content blockquote {
        border-left: 4px solid var(--accent-1);
        padding-left: 24px;
        margin: 24px 0;
        font-style: italic;
        color: var(--text);
    }
    .post-feature-image {
        width: 100%;
        height: auto;
        max-height: 450px;
        object-fit: cover;
        border-radius: var(--radius);
        margin-bottom: 32px;
    }
    .post-meta {
        color: var(--muted);
        font-size: 0.9rem;
        margin-bottom: 16px;
    }
    .post-meta span {
        margin-right: 16px;
    }
    .sidebar-widget {
        background: var(--panel);
        border: 1px solid rgba(255,255,255,.07);
        border-radius: var(--radius);
        padding: 24px;
        margin-bottom: 32px;
    }
    .sidebar-widget h4 {
        font-size: 1.2rem;
        font-weight: 600;
        margin-bottom: 20px;
        padding-bottom: 12px;
        border-bottom: 1px solid rgba(255,255,255,.1);
    }
    .sidebar-widget ul {
        list-style: none;
    }
    .sidebar-widget ul li a {
        color: var(--muted);
        text-decoration: none;
        transition: var(--transition);
        display: block;
        padding: 8px 0;
    }
    .sidebar-widget ul li a:hover {
        color: var(--accent-2);
    }
    .page-header {
        padding-top: 120px;
        padding-bottom: 60px;
    }
    .page-header h1 {
        font-size: 2.8rem;
        font-weight: 800;
        line-height: 1.3;
    }
</style>

<div class="blog-layout">
    <!-- Main Content -->
    <main class="blog-single-post">
        <header class="page-header" style="padding: 0; text-align: left; padding-bottom: 30px;">
            <h1 style="background: linear-gradient(135deg, var(--text), var(--accent-2)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                The Importance of Youth Leadership in the Church
            </h1>
            <div class="post-meta" style="margin-top: 16px;">
                <span><i class="ri-user-line"></i> Super Admin</span>
                <span><i class="ri-calendar-line"></i> Aug 15, 2025</span>
                <span><i class="ri-folder-line"></i> Leadership</span>
            </div>
        </header>

        <img src="<?= asset('assets/images/blog/blog-inside-post.jpg') ?>" alt="Blog Post Image" class="post-feature-image">

        <article class="post-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et finibus erat. Nulla facilisi. Vivamus vitae convallis metus. Nunc consequat, justo nec volutpat vestibulum, sapien elit consequat massa, vel gravida enim tellus a nisl. In hac habitasse platea dictumst.</p>

            <blockquote>
                "The youth of today are the leaders of tomorrow." This statement has never been more true than within the context of the church.
            </blockquote>

            <p>Phasellus ut ex id leo finibus commodo. Integer nec nulla eget est accumsan ullamcorper. Curabitur vel turpis nec arcu rhoncus placerat. Donec ut justo ac arcu semper ultricies. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

            <h2>Our Approach at Royal Ambassadors</h2>
            <p>At Royal Ambassadors, we are committed to providing a structured environment where young individuals can discover and develop their God-given leadership potential. Our programs are designed to instill values of responsibility, service, and faith.</p>
        </article>

    </main>

    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="sidebar-widget">
            <h4>Categories</h4>
            <ul>
                <li><a href="#">Leadership</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Community</a></li>
                <li><a href="#">Faith</a></li>
            </ul>
        </div>
        <div class="sidebar-widget">
            <h4>Recent Posts</h4>
            <ul>
                <li><a href="#">The Importance of Youth Leadership</a></li>
                <li><a href="#">Recap: Annual State Camp 2025</a></li>
                <li><a href="#">Serving the Community: Our Latest Outreach</a></li>
            </ul>
        </div>
    </aside>
</div>
