<div id="mobile-menu" class="d-block d-lg-none">
    <ul>
        <li class="{{ active('admin.dashboard*') }}"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></li>
        <li><a href="#">Portfolio</a></li>
        <li class="{{ active('admin.socials*') }}"><a href="{{ route('admin.socials.index') }}">Social</a></li>
        <li><a href="#">Text pages</a></li>
        <li class="{{ active('admin.settings*') }}"><a href="{{ route('admin.settings.index') }}">Settings</a></li>
    </ul>
</div>