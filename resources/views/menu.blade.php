<li class="nav-item {{ request()->routeIs('Home')?'active':'' }}">
    <a class="nav-link" href="{{ route('Home') }}">Главная <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item {{ request()->routeIs('news.index')?'active':'' }}">
    <a class="nav-link" href="{{ route('news.index') }}">Новости</a>
</li>
<li class="nav-item {{ request()->routeIs('news.category.index')?'active':'' }}">
    <a class="nav-link" href="{{ route('news.category.index') }}">Категории</a>
</li>
<li class="nav-item {{ request()->routeIs('vue')?'active':'' }}">
    <a class="nav-link" href="{{ route('vue') }}">Vue Demo</a>
</li>

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="{{ route('admin.index') }}" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Админка
    </a>

    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        @include('admin.menu')
    </div>
</li>


