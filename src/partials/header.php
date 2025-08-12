<header>
    <nav class="container">
        <a href="?section=home" class="logo"><?= htmlspecialchars($developer['name']) ?></a>

        <button class="menu-toggle" aria-label="Toggle Menu">
            <i class="fa fa-bars"></i>
        </button>

        <ul class="nav-links">
            <?php
            $navItems = [
                'home' => 'Home',
                'skills' => 'Skills',
                'projects' => 'Projects',
                'experience' => 'Experience',
                'contact' => 'Contact'
            ];

            foreach ($navItems as $key => $label) {
                $active = ($section === $key) ? 'active' : '';
                echo "<li><a href=\"?section={$key}\" class=\"{$active}\">{$label}</a></li>";
            }
            ?>
        </ul>
    </nav>
</header>
