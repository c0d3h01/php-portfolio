<?php if ($section === 'experience'): ?>
    <section class="content-section">
        <div class="container">
            <div class="section-header">
                <h2>Professional Experience</h2>
                <p>My journey in software development and key achievements</p>
            </div>
            <div class="timeline">
                <?php foreach ($experience as $job): ?>
                    <div class="timeline-item">
                        <div class="timeline-content">
                            <div class="timeline-date"><?php echo $job['duration']; ?></div>
                            <h3 class="timeline-title"><?php echo $job['position']; ?></h3>
                            <div class="timeline-company"><?php echo $job['company']; ?></div>
                            <p><?php echo $job['description']; ?></p>
                            <ul class="achievements">
                                <?php foreach ($job['achievements'] as $achievement): ?>
                                    <li><?php echo $achievement; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>