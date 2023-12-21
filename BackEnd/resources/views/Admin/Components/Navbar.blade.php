<nav class="side-nav">
    <ul>
        <li>
            <a href="{{ route('barang') }}" class="side-menu">
                <div class="side-menu__icon"> <i data-lucide="hard-drive"></i> </div>
                <div class="side-menu__title"> Data Penjualan </div>
            </a>
        </li>
        <li>
            <a href="" class="side-menu">
                <div class="side-menu__icon"> <i data-lucide="users"></i> </div>
                <div class="side-menu__title"> Data User </div>
            </a>
        </li>
        <li>
            <a href="{{ route('barangmasuk') }}" class="side-menu">
                <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                <div class="side-menu__title"> Data Barang Masuk </div>
            </a>
        </li>
        <li>
            <a href="{{ route('Staff') }}" class="side-menu">
                <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                <div class="side-menu__title"> Data staff </div>
            </a>
        </li>
        </li>
        <li class="side-nav__devider my-6"></li>
        <li>
            <a href="{{ route('login') }}" class="side-menu">
                <div class="side-menu__title">
                    Logout
                </div>
            </a>
        </li>
    </ul>
</nav>
