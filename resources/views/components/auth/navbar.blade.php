<ul class="menu-inner py-1">
    <li class="menu-item {{ request()->is('home') ? 'active' : '' }}">
        <a href="/home" class="menu-link">
            <i class="menu-icon tf-icons mdi mdi-home-outline"></i>
            <div data-i18n="Home">Home</div>
        </a>
    </li>

    @if (Auth()->user()->role == 'Kepala')
        <li
            class="menu-item {{ request()->is(['users/officers', 'users/members', 'confirmation-account']) ? 'active' : '' }}">
            <a class="menu-link menu-toggle">
                <i class="menu-icon tf-icons mdi mdi-human"></i>
                <div data-i18n="Users">Users</div>
                <div class="badge bg-danger rounded-pill ms-auto {{ $pending == null ? 'd-none' : '' }}">
                    {{ $pending }}
                </div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('users.officers') }}" class="menu-link">
                        <div data-i18n="Data-User">Admin</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('users.members') }}" class="menu-link">
                        <div data-i18n="Data-User">Anggota</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('confirmations.index') }}" class="menu-link">
                        <div data-i18n="Konfirmasi-Akun">Konfirmasi Akun</div>
                        <div class="badge bg-danger rounded-pill ms-auto {{ $pending == null ? 'd-none' : '' }}">
                            {{ $pending }}
                        </div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item {{ request()->is('reports') ? 'active' : '' }}">
            <a href="/reports" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-cash"></i>
                <div data-i18n="reports">Laporan</div>
            </a>
        </li>
    @else
        <li
            class="menu-item {{ request()->is(['users/officers', 'users/members', 'confirmation-account']) ? 'active' : '' }}">
            <a class="menu-link menu-toggle">
                <i class="menu-icon tf-icons mdi mdi-human"></i>
                <div data-i18n="Users">Users</div>
                <div class="badge bg-danger rounded-pill ms-auto {{ $pending == null ? 'd-none' : '' }}">
                    {{ $pending }}
                </div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('users.officers') }}" class="menu-link">
                        <div data-i18n="Data-User">Admin</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('users.members') }}" class="menu-link">
                        <div data-i18n="Data-User">Anggota</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('confirmations.index') }}" class="menu-link">
                        <div data-i18n="Konfirmasi-Akun">Konfirmasi Akun</div>
                        <div class="badge bg-danger rounded-pill ms-auto {{ $pending == null ? 'd-none' : '' }}">
                            {{ $pending }}
                        </div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item {{ request()->is('categories') ? 'active' : '' }}">
            <a href="/categories" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-shape"></i>
                <div data-i18n="categories">Kategori Buku</div>
            </a>
        </li>

        <li class="menu-item {{ request()->is('books') ? 'active' : '' }}">
            <a href="/books" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-book"></i>
                <div data-i18n="books">Buku</div>
            </a>
        </li>

        <li class="menu-item {{ request()->is(['transactions/borrow', 'waiting']) ? 'active' : '' }}">
            <a class="menu-link menu-toggle">
                <i class="menu-icon tf-icons mdi mdi-sync-circle"></i>
                <div data-i18n="borrow">Peminjaman</div>
                <div class="badge bg-danger rounded-pill ms-auto {{ $waiting == null ? 'd-none' : '' }}">
                    {{ $waiting }}
                </div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('transactions.borrow') }}" class="menu-link">
                        <div data-i18n="Data-User">Konfirmasi</div>
                        <div class="badge bg-danger rounded-pill ms-auto {{ $waiting == null ? 'd-none' : '' }}">
                            {{ $waiting }}
                        </div>
                    </a>
                </li>
            </ul>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('transactions.borrow') }}" class="menu-link">
                        <div data-i18n="Data-User">Buku DIpinjam</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item {{ request()->is(['transactions/return', 'penalties']) ? 'active' : '' }}">
            <a class="menu-link menu-toggle">
                <i class="menu-icon tf-icons mdi mdi-sync"></i>
                <div data-i18n="return">Pengembalian</div>
                <div class="badge bg-danger rounded-pill ms-auto {{ $late_days == null ? 'd-none' : '' }}">
                    {{ $late_days }}
                </div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('transactions.return') }}" class="menu-link">
                        <div data-i18n="Data-User">Buku Kembali</div>
                    </a>
                </li>
            </ul>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('penalties.index') }}" class="menu-link">
                        <div data-i18n="Data-User">Denda</div>
                        <div class="badge bg-danger rounded-pill ms-auto {{ $late_days == null ? 'd-none' : '' }}">
                            {{ $late_days }}
                        </div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item {{ request()->is('reports') ? 'active' : '' }}">
            <a href="/reports" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-text"></i>
                <div data-i18n="reports">Laporan</div>
            </a>
        </li>
    @endif

</ul>
