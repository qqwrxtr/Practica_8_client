<?php
session_start();

$isRoot = isset($_SESSION['is_root']) && $_SESSION['is_root'] == 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <header>
        <a href="#" class="logo">SonicVizion<span>.</span></a>
        <div class="menuToggle" onclick="toggleMenu();"></div>
        <ul class="navigation">
            <li><a href="#banner" onclick="toggleMenu();">Acasă</a></li>
            <li><a href="#about" onclick="toggleMenu();">Despre</a></li>
            <li><a href="#products" onclick="toggleMenu();">Produse</a></li>
            <li><a href="#expert" onclick="toggleMenu();">Experiență</a></li>
            <li><a href="#testimonials" onclick="toggleMenu();">Recomandări</a></li>
            <li><a href="#contact" onclick="toggleMenu();">Contacte</a></li>
            
            <?php
            echo '<li><a href="/vasea/logout.php">Logout</a></li>';
            if ($isRoot) {
                echo '<li><a href="/vasea/admin/static/index.php">Admin Panel</a></li>';
            }
            ?>
        </ul>
    </header>
</body>
</html>
