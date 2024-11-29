<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-header">ADMIN PANEL</li>
        <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
                <i class="nav-icon fas fa-regular fa-envelope"></i>
                <p>
                    Posts
                </p>
                <span class="badge badge-info right">{{ $posts->total()}}</span>
            </a>
        </li>
    </ul>
</nav>
