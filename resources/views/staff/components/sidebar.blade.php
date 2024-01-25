<nav class="side-nav">
    <ul>
        <li>
            <a href="{{ route('allbarang') }}" class="side-menu">
                <div class="side-menu__title"> Data Barang </div>
            </a>
        </li>
        <li>
            <a href="{{ route('allbarangmasuk') }}" class="side-menu">
                <div class="side-menu__title"> Data Barang Masuk </div>
            </a>
        </li>
        <li>
            <a href="{{ route('allcategorybarang') }}" class="side-menu">
                <div class="side-menu__title"> Data Barang Keluar </div>
            </a>
        </li>
        <li>
            <a href="{{ route('jadwal') }}" class="side-menu">
                <div class="side-menu__title"> Pengiriman barang </div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon"> <i data-lucide="users"></i> </div>
                <div class="side-menu__title">
                    Users
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="{{ route('UserData') }}" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Data Users </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{ route('supplier') }}" class="side-menu">
                <div class="side-menu__icon"> <i data-lucide="layout"></i> </div>
                <div class="side-menu__title">
                    Supplier
                </div>
            </a>
        </li>
        <li class="side-nav__devider my-6"></li>
        <li class="mt-6">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
        
                <button type="submit" class="flex items-center space-x-2 text-red-500 hover:text-red-700">
                    <i data-lucide="log-out" class="text-lg"></i>
                    <span>Log Out</span>
                </button>
            </form>
        </li>
        
    </ul>
</nav>
