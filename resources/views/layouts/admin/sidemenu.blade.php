<div id="sidemenu" class="col-2 col-xl-1 px-0 d-none d-lg-block">
    <ul>
        <li class="{{ active('admin.dashboard*') }}"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></li>
        <li class="{{ active('admin.portfolio*') }}"><a href="{{ route('admin.portfolio.index') }}">Portfolio</a></li>
        <li class="{{ active('admin.socials*') }}"><a href="{{ route('admin.socials.index') }}">Social</a></li>
        <li class="{{ active('admin.pages*') }}"><a href="{{ route('admin.pages.index') }}">Text pages</a></li>
        <li class="{{ active('admin.settings*') }}"><a href="{{ route('admin.settings.index') }}">Settings</a></li>
    </ul>
</div>