
    <header>
        <nav>
            <li><a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'activo' : ''}}">inicio</a></li>
               
            <li><a href="{{route('cursos.index')}}" class="{{request()->routeIs('cursos.*') ? 'activo' : ''}}">cursos</a></li>
        
            <li><a href="{{route('nosotros')}}"  class="{{request()->routeIs('nosotros') ? 'activo' : ''}}">nosotros</a></li>
            {{-- @dump(request()->routeIs('nosotros'))| --}} 
            <li><a href="{{route('contacto.index')}}" class="{{request()->routeIs('contacto.index') ? 'activo' : ''}}">contactanos</a></li>
        
        </nav>   
    </header>