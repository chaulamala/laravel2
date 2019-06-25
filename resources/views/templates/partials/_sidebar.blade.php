<!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{asset('assets/images/icon/logoperpus.png')}}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li><a href="{{ route('dashboard') }}"><i class="fa fa-home"></i>Dashboard</a></li>

                        <li><a href="{{ route('buku') }}"><i class="fas fa-book"></i>Buku</a></li>

                        <li><a href="{{ route('anggota') }}"><i class="fas fa-user"></i>Anggota</a></li>

                        <li><a href="{{ route('peminjaman') }}"><i class="fas fa-calendar"></i>Peminjaman</a></li>

                        <li><a href="{{ route('laporan') }}"><i class="fas fa-file-text"></i>Laporan</a></li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->