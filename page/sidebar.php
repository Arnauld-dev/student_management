<!-- Sidebar Left -->
<aside class="sidebar-left" style="background-color: #2c3e50; color: white; height: 100vh; width: 250px; overflow-y: auto; position: fixed; left: 0; top: 0; z-index: 1000;">
    <div class="sidebar-header">
        <div class="logo">
            <h2>Administrateur</h2>
        </div>
    </div>
    
    <nav class="sidebar-nav">
        <ul class="sidebar-menu">
            <li class="menu-item">
                <a href="<?php echo isset($base_path) ? $base_path : ''; ?>dasboardadmin.php" class="menu-link">
                    <span>Tableau de bord</span>
                </a>
            </li>
            <li class="menu-item has-submenu">
                <a href="#" class="menu-link">
                    <span>Classe</span>
                </a>
                <ul class="sidebar-submenu">
                    <li><a href="<?php echo isset($base_path) ? $base_path : ''; ?>admin_panel/classe/addclass.php">Ajouter Classe</a></li>
                    <li><a href="<?php echo isset($base_path) ? $base_path : ''; ?>admin_panel/classe/displayclass.php">Afficher Classe</a></li>
                </ul>
            </li>
            <li class="menu-item has-submenu">
                <a href="#" class="menu-link">
                    <span>Étudiants</span>
                </a>
                <ul class="sidebar-submenu">
                    <li><a href="<?php echo isset($base_path) ? $base_path : ''; ?>admin_panel/student/addStudent.php">Ajouter Étudiant</a></li>
                    <li><a href="<?php echo isset($base_path) ? $base_path : ''; ?>admin_panel/student/displayStudent.php">Afficher Étudiants</a></li>
                </ul>
            </li>
            <li class="menu-item has-submenu">
                <a href="#" class="menu-link">
                    <span>Devoirs</span>
                </a>
                <ul class="sidebar-submenu">
                    <li><a href="<?php echo isset($base_path) ? $base_path : ''; ?>admin_panel/homework/addhomework.php">Ajouter Devoir</a></li>
                    <li><a href="<?php echo isset($base_path) ? $base_path : ''; ?>admin_panel/homework/displayhomework.php">Afficher Devoirs</a></li>
                </ul>
            </li>
            <li class="menu-item has-submenu">
                <a href="#" class="menu-link">
                    <span>Avis</span>
                </a>
                <ul class="sidebar-submenu">
                    <li><a href="<?php echo isset($base_path) ? $base_path : ''; ?>admin_panel/notice/addnotice.php">Ajouter Avis</a></li>
                    <li><a href="<?php echo isset($base_path) ? $base_path : ''; ?>admin_panel/notice/displaynotice.php">Afficher Avis</a></li>
                </ul>
            </li>
            <li class="menu-item has-submenu">
                <a href="#" class="menu-link">
                    <span>Avis publics</span>
                </a>
                <ul class="sidebar-submenu">
                    <li><a href="<?php echo isset($base_path) ? $base_path : ''; ?>admin_panel/notice_public/addpublic.php">Ajouter Avis Public</a></li>
                    <li><a href="<?php echo isset($base_path) ? $base_path : ''; ?>admin_panel/notice_public/displaynoticpublic.php">Afficher Avis Publics</a></li>
                </ul>
            </li>
            <li class="menu-item has-submenu">
                <a href="#" class="menu-link">
                    <span>Pages</span>
                </a>
                <ul class="sidebar-submenu">
                    <li><a href="<?php echo isset($base_path) ? $base_path : ''; ?>admin_panel/pageinformation/about.php">À propos</a></li>
                    <li><a href="<?php echo isset($base_path) ? $base_path : ''; ?>admin_panel/pageinformation/contactus.php">Nous Contacter</a></li>
                </ul>
            </li>
            <li class="menu-item">
                <a href="#" class="menu-link">
                    <span>Recherche</span>
                </a>
            </li>
            <li class="menu-item has-submenu">
                <a href="#" class="menu-link">
                    <span>Rapports</span>
                </a>
                <ul class="sidebar-submenu">
                    <li><a href="#">Étudiants</a></li>
                    <li><a href="#">Devoirs</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</aside>

<script>
document.querySelectorAll('.menu-item.has-submenu > .menu-link').forEach(function(link) {
    link.addEventListener('click', function(e) {
        e.preventDefault();
        
        const menuItem = this.parentElement;
        const submenu = menuItem.querySelector('.sidebar-submenu');
        
        // Fermer tous les autres sous-menus
    document.querySelectorAll('.menu-item.has-submenu').forEach(function(item) {
        if (item !== menuItem) {
            item.classList.remove('open');
            item.querySelector('.sidebar-submenu').classList.remove('open');
        }
    });
        
        // Toggle le menu actuel
        menuItem.classList.toggle('open');
        submenu.classList.toggle('open');
    });
});
</script>
