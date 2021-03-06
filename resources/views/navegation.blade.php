<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ url('/') }}" style="font: oblique bold 120% cursive;">Travel System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" style="font: oblique bold 120% cursive;" href="{{ url('/') }}">Inicio<span class="sr-only"></span></a>
            </li> 
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" style="font: oblique bold 120% cursive;" href="{{ url('rutas') }}" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Rutas
                
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" style="font: oblique bold 120% cursive;" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Compra
                
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" style="font: oblique bold 120% cursive;" href="{{ url('clientes/registrar') }}" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Registrar
                
            </li>
            
            
            </u>

              
            
            
        </div>
        </nav>