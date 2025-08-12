<?php if ($section === 'projects'): ?>
    <section class="content-section">
        <div class="container">
            <div class="section-header">
                <h2>Featured Projects</h2>
                <p>Some of my recent work that I'm proud to share</p>
            </div>
            <div class="projects-grid">
                <?php foreach ($projects as $project): ?>
                    <div class="project-card">
                        <img src="<?php echo $project['image']; ?>" alt="<?php echo $project['title']; ?>"
                            class="project-image">
                        <div class="project-content">
                            <h3 class="project-title"><?php echo $project['title']; ?></h3>
                            <p class="project-description"><?php echo $project['description']; ?></p>
                            <div class="tech-tags">
                                <?php foreach ($project['technologies'] as $tech): ?>
                                    <span class="tech-tag"><?php echo $tech; ?></span>
                                <?php endforeach; ?>
                            </div>
                            <div class="project-links">
                                <a href="<?php echo $project['github']; ?>" target="_blank">GitHub</a>
                                <a href="<?php echo $project['demo']; ?>" target="_blank">Live Demo</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>