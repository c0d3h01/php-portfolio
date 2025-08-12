<?php if ($section === 'home'): ?>
    <section class="hero">
        <div class="container hero-content">
            <h1><?php echo $developer['name']; ?></h1>
            <p class="subtitle"><?php echo $developer['title']; ?></p>
            <p class="bio"><?php echo $developer['bio']; ?></p>
            <div class="cta-buttons">
                <a href="?section=projects" class="btn btn-primary">View My Work</a>
                <a href="?section=contact" class="btn btn-outline">Get In Touch</a>
            </div>
        </div>
    </section>
<?php endif; ?>