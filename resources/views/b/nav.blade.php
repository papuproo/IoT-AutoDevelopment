<nav>
        <ul>
            <li class="{{ setActive('index') }}"><a href="{{ route('index') }}">@lang('Inicio')</a></li>
            <li class="{{ setActive('iot') }}"><a href="{{ route('iot') }}">@lang('Internet de las Cosas')</a></li>
            <li class="{{ setActive('jetstream') }}"><a href="{{ route('jetstream') }}">@lang('Conocer acerca de Jetstream')</a></li>
            <li class="{{ setActive('projects.*') }}"><a href="{{ route('projects.index') }}">@lang('Mis avances con el analisis de datos')</a></li>
            <!-- En la lista de arriba, donde esta projects, hay que tener cuidado con el @lang pues creo que si va a afectar el nombre como tal, nada mas para tenerlo a la vista, ok? -->
        </ul>
    </nav>