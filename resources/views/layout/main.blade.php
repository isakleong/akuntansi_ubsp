<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>

    <link rel="stylesheet" href="/main/assets/css/main/app.css" />
    <link rel="stylesheet" href="/main/assets/css/main/app-dark.css" />
    <link rel="shortcut icon" href="/main/assets/images/logo/favicon.svg" type="image/x-icon" />
    <link rel="shortcut icon" href="/main/assets/images/logo/favicon.png" type="image/png" />

    @yield('vendorCSS')

    <link rel="stylesheet" href="/main/assets/css/shared/iconly.css" />
</head>

<body>
    <div id="app">
        <div id="main" class="layout-horizontal">
            <header class="mb-5">
                <div class="header-top">
                    <div class="container">
                        <div class="logo">
                            <a href="/"><img src="/main/assets/images/logo/logo.png" alt="Logo" style="height: 50px;"/></a>
                        </div>
                        <div class="header-top-right">
                            <div class="dropdown">
                                <a href="#" id="topbarUserDropdown"
                                    class="user-dropdown d-flex align-items-center dropend dropdown-toggle"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="avatar avatar-md2">
                                        <img src="/main/assets/images/faces/1.jpg" alt="Avatar" />
                                    </div>
                                    <div class="text">
                                        <h6 class="user-dropdown-name">Isak Leong</h6>
                                        <p class="user-dropdown-status text-sm text-muted">
                                            Anggota
                                        </p>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end shadow-lg"
                                    aria-labelledby="topbarUserDropdown">
                                    <!-- <li><a class="dropdown-item" href="#">My Account</a></li>
                                    <li><a class="dropdown-item" href="#">Settings</a></li> -->
                                    <!-- <li><hr class="dropdown-divider" /></li> -->
                                    <li><a class="dropdown-item" href="auth-login.html">Keluar</a></li>
                                </ul>
                            </div>
                            <!-- Burger button responsive -->
                            <a href="#" class="burger-btn d-block d-xl-none">
                                <i class="bi bi-justify fs-3"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <nav class="main-navbar">
                    <div class="container">
                        <ul>
                            <li class="menu-item">
                                <a href="/" class="menu-link">
                                    <span><i class="bi bi-house-door-fill"></i> Beranda</span>
                                </a>
                            </li>

                            <li class="menu-item active has-sub">
                                <a href="#" class="menu-link">
                                    <span><i class="bi bi-collection-fill"></i> Tabungan</span>
                                </a>
                                <div class="submenu">
                                    <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                                    <div class="submenu-group-wrapper">
                                        <ul class="submenu-group">
                                            <li class="submenu-item">
                                                <a href="{{route('saving')}}" class="submenu-link">Pengajuan</a>
                                            </li>
                                            <li class="submenu-item">
                                                <a href="{{route('saving-recap')}}" class="submenu-link">Rekap
                                                    Tabungan</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li class="menu-item has-sub">
                                <a href="#" class="menu-link">
                                    <span><i class="bi bi-cash-stack"></i> Kredit</span>
                                </a>
                                <div class="submenu">
                                    <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                                    <div class="submenu-group-wrapper">
                                        <ul class="submenu-group">
                                            <li class="submenu-item">
                                                <a href="table.html" class="submenu-link">Pengajuan</a>
                                            </li>
                                            <li class="submenu-item">
                                                <a href="table-datatable.html" class="submenu-link">Rekap Kredit</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li class="menu-item has-sub">
                                <a href="#" class="menu-link">
                                    <span><i class="bi bi-file-bar-graph-fill"></i> Laporan</span>
                                </a>
                                <div class="submenu">
                                    <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                                    <div class="submenu-group-wrapper">
                                        <ul class="submenu-group">
                                            <li class="submenu-item">
                                                <a href="table.html" class="submenu-link">Jurnal Harian</a>
                                            </li>
                                            <li class="submenu-item">
                                                <a href="table-datatable.html" class="submenu-link">Buku Besar</a>
                                            </li>
                                            <li class="submenu-item">
                                                <a href="table-datatable.html" class="submenu-link">Neraca Saldo</a>
                                            </li>
                                            <li class="submenu-item">
                                                <a href="table-datatable.html" class="submenu-link">Laba Rugi</a>
                                            </li>
                                            <li class="submenu-item">
                                                <a href="table-datatable.html" class="submenu-link">Neraca</a>
                                            </li>
                                            <li class="submenu-item">
                                                <a href="table-datatable.html" class="submenu-link">Hutang</a>
                                            </li>
                                            <li class="submenu-item">
                                                <a href="table-datatable.html" class="submenu-link">Piutang</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item">
                                <a href="index.html" class="menu-link">
                                    <span><i class="bi bi-file-person-fill"></i> Pengaturan</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            @yield('content')

            <footer>
                <div class="container">
                    <div class="footer clearfix mb-0 text-muted">
                        <div class="float-end">
                            <p>2023 &copy; Sistem Akuntansi UBSP</p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="/main/assets/js/bootstrap.js"></script>
    <script src="/main/assets/js/app.js"></script>
    <script src="/main/assets/js/pages/horizontal-layout.js"></script>

    <script src="/main/assets/extensions/apexcharts/apexcharts.min.js"></script>
    <script src="/main/assets/js/pages/dashboard.js"></script>

    @yield('vendorJS')
</body>

</html>
