<?php if ($section === 'contact'): ?>
    <section class="content-section">
        <div class="container">
            <div class="section-header">
                <h2>Get In Touch</h2>
                <p>Let's work together to bring your ideas to life</p>
            </div>
            <div class="contact-grid">
                <div class="contact-info">
                    <h3>Contact Information</h3>
                    <div class="contact-item">
                        <strong>Email:</strong> <?php echo $developer['email']; ?>
                    </div>
                    <div class="contact-item">
                        <strong>Phone:</strong> <?php echo $developer['phone']; ?>
                    </div>
                    <div class="contact-item">
                        <strong>Location:</strong> <?php echo $developer['location']; ?>
                    </div>
                </div>
                <div class="contact-form">
                    <h3>Send Me a Message</h3>
                    <?php if ($message): ?>
                        <div
                            class="<?php echo strpos($message, 'Thank you') !== false ? 'success-message' : 'error-message'; ?>">
                            <?php echo $message; ?>
                        </div>
                    <?php endif; ?>
                    <form method="POST">
                        <input type="hidden" name="section" value="contact">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>