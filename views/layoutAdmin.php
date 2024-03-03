<!DOCTYPE html>

<head>
    <title>The Electric Buffalo | Panel Administrador</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Suez+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/../build/css/main.css">
    <link rel="stylesheet" type="text/css" href="/../build/css/datatables.css">
    <link href="https://cdn.datatables.net/v/dt/dt-1.13.8/datatables.min.css" rel="stylesheet">

    <link rel="stylesheet" href="/../build/css/app.css">
    <link rel="stylesheet" href="/../build/css/app.css.map">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/91eae316a2.js" crossorigin="anonymous"></script>
    <script src="/../build/js/jquery-3.7.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">


</head>

<body class="app sidebar-mini">
    <header class="app-header"><a class="app-header__logo" href="/index.php">The Electric Buffalo</a>
        <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>

        <ul class="app-nav">
            <li class="app-search">
                <input class="app-search__input" type="search" placeholder="Buscar">
                <button class="app-search__button"><i class="bi bi-search"></i></button>


                <!-- User Menu -->
            <li class="dropdown"><a class="app-nav__item" href="#" data-bs-toggle="dropdown" aria-label="Open Profile Menu"><i class="bi bi-person"></i></a>
                <ul class="dropdown-menu settings-menu dropdown-menu-right">
                    <li><a class="dropdown-item" href="page-user.html"><i class="bi bi-gear me-2 fs-5"></i> Settings</a></li>
                    <li><a class="dropdown-item" href="page-user.html"><i class="bi bi-person me-2 fs-5"></i> Profile</a></li>
                    <li><a class="dropdown-item" href="/logout.php"><i class="bi bi-box-arrow-right me-2 fs-5"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">

        <ul class="app-menu">
            <li><a class="app-menu__item" href="/admin"><i class="app-menu__icon bi bi-speedometer"></i><span class="app-menu__label">Administrador</span></a></li>
            <!-- NOTICIAS -->
            <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon bi bi-newspaper"></i><span class="app-menu__label">Noticias</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
                <ul class="treeview-menu">
                    <li><a class="treeview-item" href="/noticias/listado"><i class="icon bi bi-circle-fill"></i>Listado de Noticias</a></li>
                </ul>
            </li>

            <!-- CATEGORIAS -->
            <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon bi bi-table"></i><span class="app-menu__label">Categorías</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
                <ul class="treeview-menu">
                    <li><a class="treeview-item" href="/categorias/listado"><i class="icon bi bi-circle-fill"></i>Listado de Categorías</a></li>
                </ul>
            </li>

            <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon bi bi-vinyl"></i><span class="app-menu__label">Productos</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
                <ul class="treeview-menu">
                    <li><a class="treeview-item" href="/productos/listado"><i class="icon fa-solid fa-record-vinyl"></i>Listado de Productos</a></li>
                    <li><a class="treeview-item" href="/discos/listado"><i class="icon fa-solid fa-record-vinyl"></i>Listado de Discos</a></li>
                    <li><a class="treeview-item" href="form-components.html"><i class="icon fa-solid fa-shirt"></i>Listado de Camisetas</a></li>
                </ul>

            </li>

            <!-- DISCOS -->
            <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon bi bi-vinyl"></i><span class="app-menu__label">Discos</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
                <ul class="treeview-menu">
                    <li><a class="treeview-item" href="/discos/listado"><i class="icon bi bi-circle-fill"></i>Listado de Discos</a></li>
                </ul>
            </li>
            <!-- CAMISETAS -->
            <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa-solid fa-shirt"></i><span class="app-menu__label">Camisetas</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
                <ul class="treeview-menu">
                    <li><a class="treeview-item" href="form-components.html"><i class="icon bi bi-circle-fill"></i>Listado de Camisetas</a></li>
                </ul>
            </li>

            <!-- MUSICOS -->
            <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon bi bi-music-note-beamed"></i><span class="app-menu__label">Músicos</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
                <ul class="treeview-menu">
                    <li><a class="treeview-item" href="/musicos/listado"><i class="icon bi bi-circle-fill"></i>Listado de Músicos</a></li>
                </ul>
            </li>

            <!-- INSTRUMENTOS -->
            <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa-solid fa-guitar"></i></i><span class="app-menu__label">Instrumentos</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
                <ul class="treeview-menu">
                    <li><a class="treeview-item" href="/instrumentos/listado"><i class="icon bi bi-circle-fill"></i>Listado de Instrumentos</a></li>
                </ul>
            </li>

            <!-- USUARIOS -->
            <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon bi bi-people"></i><span class="app-menu__label">Usuarios</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
                <ul class="treeview-menu">
                    <li><a class="treeview-item" href="/usuarios/listado"><i class="icon bi bi-circle-fill"></i>Listado de Usuarios</a></li>
                </ul>
            </li>

        </ul>
    </aside>
    <!-- FIN HEADER -->

    <?php echo $contenido; ?>

    <!-- FOOTER -->
    <script src="/../build/js/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <script src="/../build/js/bootstrap.min.js"></script>
    <script src="/../build/js/sidebars.js"></script>
    <script src="/../build/js/main.js"></script>


    <script src="https://cdn.datatables.net/v/dt/dt-1.13.8/datatables.min.js"></script>

</body>

</html>