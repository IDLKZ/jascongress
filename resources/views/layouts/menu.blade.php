
<li class="nav-item {{ Request::is('banners*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('banners.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Баннер</span>
    </a>
</li>

<li class="nav-item {{ Request::is('teams*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('teams.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Команда</span>
    </a>
</li>
<li class="nav-item {{ Request::is('blogs*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('blogs.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Новости</span>
    </a>
</li>
<li class="nav-item {{ Request::is('settings*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('settings.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Настройки</span>
    </a>
</li>

