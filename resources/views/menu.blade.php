<li class="nav-item {{(request()->is('/')) ? 'active' : '' }}">
    <a class="nav-link" href="{{route('inicio')}}">Home <span class="sr-only">(current)</span></a>
</li>

{{-- Con este comando desaparecerán los siguientes iconos dependiendo de si estás logueado o no --}}
@auth
<li class="nav-item {{(request()->is('usuarios*')) ? 'active' : '' }}">
        <a class="nav-link" href="{{route('users')}}">Usuarios</a>
</li>
<li class="nav-item {{(request()->is('pasteles*')) ? 'active' : '' }}">
        <a class="nav-link" href="{{asset('pasteles')}}" tabindex="-1">Pasteles</a>
</li>
<li class="nav-item {{(request()->is('articulos')) ? 'active' : '' }}">
        <a class="nav-link" href="{{asset('articulos')}}" tabindex="-1">Articulos</a>
</li>
@endauth