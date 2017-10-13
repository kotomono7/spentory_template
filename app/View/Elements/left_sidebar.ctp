<?php
    $ctrl = $this->params['controller'];
    $act = $this->params['action'];
?>

<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="img/user.jpg" width="48px" height="48px" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><strong>Administrator</strong></div>
            <div class="email"><strong>admin@example.com</strong></div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profil</a></li>
                    <li role="seperator" class="divider"></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">input</i>Keluar</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <!-- Navigasi Utama -->
            <li class="header">MENU UTAMA</li>
            <li class="active">
                <a href="pages/">
                    <i class="material-icons">home</i>
                    <span>Beranda</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">shopping_cart</i>
                    <span>Transaksi</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="javascript:void(0);">
                            <span>Pembelian</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <span>Penjualan</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">local_offer</i>
                    <span>Produk</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="javascript:void(0);">
                            <span>Daftar Produk</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <span>Tambah Produk</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">assignment</i>
                    <span>Laporan</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="javascript:void(0);">
                            <span>Laporan Penjualan</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <span>Laporan Pembelian</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">extension</i>
                    <span>Lainnya</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="javascript:void(0);">
                            <span>Kategori</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <span>Lokasi</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <span>Satuan</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <span>Pemasok</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">settings</i>
                    <span>Pengaturan</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="javascript:void(0);">
                            <span>Pengaturan Aplikasi</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <span>Pengaturan Pengguna</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="copyright">
            &copy; <?php echo date('Y'); ?> <a href="/" data-toggle="tooltip" data-placement="top" title="<?php echo $appName." ".$appVersion; ?>"><?php echo $appName; ?></a>.
        </div>
        <div class="version">
            <b>Versi Sekarang: </b> <?php echo $appVersion; ?>
        </div>
    </div>
    <!-- #Footer -->
</aside>
<!-- #END# Left Sidebar -->