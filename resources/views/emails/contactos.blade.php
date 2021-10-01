<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enaclas Emails</title>
</head>
<body>
    <header>
        <h1>Correo Electrónico desde el formulario de la página web</h1>
        <h4> Información de contacto</h4>
    </header>
    <main>
        <p><strong>Nombre :</strong>{{$correo['nombre']}} </p>
        <p><strong>Email :</strong>{{$correo['email']}} </p>
        <p><strong>Telefono :</strong>{{$correo['telefono']}} </p>
        <p><strong>Asunto :</strong>{{$correo['asunto']}} </p>
        <p><strong>Mensaje :</strong></p><p>{{$correo['mensaje']}} </p>
    </main>
    <footer>
         <!-- Copyright -->
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="p-small">Copyright © <a href="https://enaclas.herokuapp.com/">Enaclas</a></p>
                    </div> <!-- end of col -->
                </div> <!-- enf of row -->
            </div> <!-- end of container -->
        </div> <!-- end of copyright --> 
        <!-- end of copyright -->
    </footer>

</body>
</html>