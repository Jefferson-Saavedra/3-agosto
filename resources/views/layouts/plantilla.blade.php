<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Actividad2</title>
</head>
<body>
<!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="inicio"><span style="color:#F8E60B"><b>Inicio</b></span></a>
            <a class="nav-link" href="quienes-somos"><span style="color:#FFFFFF"><b>Quienes Somos</b></span></a>
            <a class="nav-link" href="acerca-de"><span style="color:#F8E60B"><b>Acerca de</b></span></a>
            <a class="nav-link" href="contacto"><span style="color:#FFFFFF"><b>Contacto</b></span></a>
        </div>
        </div>
        </div>
    </nav>  
<!-- End Navbar -->
    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2" style="background-color:#FFFFFF">
            <br>
                <ul class="list-group">
                    <li class="list-group-item active" aria-current="true"><b>Hola</b></li>
                    <li class="list-group-item"><span style="color:#FF6600"><b>Esto</b></span></li>
                    <li class="list-group-item active" aria-current="true"><b>Es</b></li>
                    <li class="list-group-item"><span style="color:#FF6600"><b>Una</b></span></li>
                    <li class="list-group-item active" aria-current="true"><b>Prueba</b></li>
                </ul>
            <br>
            </div>
            <!-- End Sidebar -->
            <!-- Contenido -->
            <div class="col-md-10" style="background-color:#0AF7C1">
                @yield('content')
            </div>
            <!-- End Contenido -->
        </div>
    </div>
    <footer style="background-color:#0A75F7">
        <p><b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus vitae expedita tenetur. Rerum, reiciendis officiis. Rem optio qui deleniti maiores minima voluptates, nam odit sed iure, ab voluptatibus! Animi, labore.</b></p>
    </footer>
</body>
</html>