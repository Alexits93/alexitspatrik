<header>
    <div class="px-3 d-flex justify-content-between align-items-center h-100">
        <a href="#" class="d-block d-lg-none text-center mobile-menu-button"><i class="fas fa-bars"></i></a>
        <div class="d-flex align-items-center">
            <img src="{{ URL::to('images/logo.png') }}" class="logo mr-2" alt="Alexits Patrik" title="Alexits Patrik" />
            <a href="{{ url()->to('/admin') }}">alexitspatrik</a>
        </div>
        <div><a href="{{ route('admin-logout') }}"><i class="fas fa-sign-out-alt"></i> Sign Out</a></div>
    </div>
</header>