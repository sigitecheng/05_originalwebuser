<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">

        <!-- ################################################################# -->
        @can('admin') <!-- PENGGABUNGAN ANTARA MIDLEWARE DAN GET   -->


        <!--  PEKERJAAN YANG HARUS DI KERJAKAN DULU  -->
        <ul class="nav flex-column mt-4">
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Front Office Admin
            </h6>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin_dashboardinvoicepesanan/all_invoicepesanan*') ? 'active' : '' }}" href="/admin_dashboardinvoicepesanan/all_invoicepesanan">
                    <span data-feather="bookmark" class="align-text-bottom"></span>
                    Invoice Pesanan
                </a>
            </li>
        </ul>
        @endcan

        <!-- ###################################################### -->

        ---------------


        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    My Post
                </a>
            </li>



            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" href="/dashboard/categories">
                    <span data-feather="codepen" class="align-text-bottom"></span>
                    Categories
                </a>
            </li>

            <!-- ####################################################################################### -->
        </ul>

        @can('admin') <!-- PENGGABUNGAN ANTARA MIDLEWARE DAN GET   -->
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>My Orders</span>
        </h6>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('user_dashboard/tabel_barangbarang*') ? 'active' : '' }}" href="/user_dashboard/tabel_barangbarang">
                    <span data-feather="bookmark" class="align-text-bottom"></span>
                    Invoice Pesanan
                </a>
            </li>
        </ul>
        @endcan


        <!-- ############################### -->
        <!-- UNTUK MENGHILANGKAN BEBERAPA FITUR, INI DI LAKUKAN AGAR HAK AKSES HANYA DAPAT DI LAKUKAN OLEH YANG NAMANYA ADMIN SAJA  -->
        @can('admin') <!-- PENGGABUNGAN ANTARA MIDLEWARE DAN GET   -->
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Item Categories</span>
        </h6>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin_itembarangdanharga*') ? 'active' : '' }}" href="/admin_itembarangdanharga/all_category">
                    <span data-feather="codepen" class="align-text-bottom"></span>
                    Barang dan Harga
                </a>
            </li>

            ----------------

            <li class="nav-item">
                <a class="nav-link" href="/admin_itembarangdanharga">
                    <span data-feather="shopping-cart" class="align-text-bottom"></span>
                    Jenis Barang
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="users" class="align-text-bottom"></span>
                    Daftar Pelanggan
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                    Hasil Penjualan
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="layers" class="align-text-bottom"></span>
                    Bussiness Intelligent
                </a>
            </li>
        </ul>
        @endcan

        @can('admin') <!-- PENGGABUNGAN ANTARA MIDLEWARE DAN GET   -->
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Report Penjualan</span>
        </h6>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" href="/dashboard/categories">
                    <span data-feather="codepen" class="align-text-bottom"></span>
                    Post Categories
                </a>
            </li>
        </ul>
        @endcan


        <!-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-body-secondary text-uppercase">
                        <span>Saved reports</span>
                        <a class="link-secondary" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle" class="align-text-bottom"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text" class="align-text-bottom"></span>
                                Current month
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text" class="align-text-bottom"></span>
                                Last quarter
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text" class="align-text-bottom"></span>
                                Social engagement
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text" class="align-text-bottom"></span>
                                Year-end sale
                            </a>
                        </li>
                    </ul> -->
    </div>
</nav>