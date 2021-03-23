<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ url('/') }}" style="font: oblique bold 120% cursive;">Travel System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            
            <li class="nav-item">
                <a class="nav-link" style="font: oblique bold 120% cursive;" href="{{ url('rutas/detalle') }}" >
                Rutas<span class="sr-only"></span></a>
                
            </li>
            
            <li class="nav-item">
                <a class="nav-link" style="font: oblique bold 120% cursive;" href="{{ url('compra') }}" >
                Compra<span class="sr-only"></span></a>
                
            </li>
            <li class="nav-item">
                <a class="nav-link" style="font: oblique bold 120% cursive;" href="{{ url('clientes/registrar') }}" >
                Registrar<span class="sr-only"></span></a>
                
            </li>
            <li class="nav-item">
                <a class="nav-link" style="font: oblique bold 120% cursive;" href="{{ url('login') }}" >
                ADMIN<span class="sr-only"></span></a>
                
            </li>
            
            
            </u>

              
            
            
        </div>
        </nav>