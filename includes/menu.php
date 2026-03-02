<?php
$menu_items = [
    'Home' => BASE_URL.'index.php',
    'About' => BASE_URL.'pages/about.php',
    'Services' => [
        'Flatbed' => BASE_URL.'pages/services/flatbed.php',
        'Stepdeck' => BASE_URL.'pages/services/stepdeck.php',
        'Reefer' => BASE_URL.'pages/services/reefer.php'
    ],
    'Tracking' => BASE_URL.'pages/tracking.php',
    'Safety & Compliance' => BASE_URL.'pages/safety.php',
    'Careers' => BASE_URL.'pages/careers.php',
    'Employee Portal' => BASE_URL.'employee-portal/login.php',
    'Contact' => BASE_URL.'pages/contact.php'
];
?>
<nav class="main-menu">
    <div class="hamburger">&#9776;</div>
    <ul class="menu-list">
        <?php foreach($menu_items as $label => $link): ?>
            <?php if(is_array($link)): ?>
                <li class="has-submenu">
                    <span><?= $label ?></span>
                    <ul class="submenu">
                        <?php foreach($link as $sub_label => $sub_link): ?>
                            <li><a href="<?= $sub_link ?>"><?= $sub_label ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </li>
            <?php else: ?>
                <li><a href="<?= $link ?>"><?= $label ?></a></li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</nav>