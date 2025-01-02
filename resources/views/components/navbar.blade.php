<nav class="navbar navbar-expand-sm bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('series.index') }}">{{ __('app.name') }}</a>
        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="{{ __("Toggle navigation") }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle"
                       href="#"
                       role="button"
                       data-bs-toggle="dropdown"
                       aria-expanded="false">
                        {{ __('series.plural') }}
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('series.index') }}">{{ __("List") }}</a></li>
                        <li><a class="dropdown-item" href="{{ route('series.create') }}">{{ __("Insert") }}</a></li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>
</nav>
