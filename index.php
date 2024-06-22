<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Nombre - Página Personal</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">



</head>

<body>
    <header class="bg-secondary text-white text-center py-5">
        <h1>Blog de Esteban Dominguez</h1>
        <p>Trabajo Práctico Final de la catedra de Virtualizacion</p>
    </header>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img src="foto_tfi.jpg" class="card-img-top" alt="Tu Foto">
                    <div class="card-body">
                        <h5 class="card-title">Sobre mi</h5>
                        <p class="card-text">Tengo 25 años</p>
                        <p class="card-text">Soy alumno de 5to año de la carrera de Ingeniera de Sistemas de Informacion</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Aqui les dejo el PDF con los paso a paso de como crear este blog</h5>
                        <div class="text-center">
                            <a href="dominguezbaez_tfi.pdf" class="btn btn-danger" download>
                                <i class="fas fa-file-pdf mr-2"></i> Descargar PDF
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Informacion Personal</h5>
                        <p class="card-text">Aqui dejo algunos datos personales que fueron cargados en al base de datos.</p>
                        <table class="table table-striped table-bordered mt-4">
                            <tr>
                                <th>Legajo</th>
                                <th>Apellido</th>
                                <th>Nombre</th>
                                <th>email</th>
                            </tr>
                            <tbody>
                                <?php
                                    $servername = "192.168.77.213";
                                    $username = "estebanconsulta";
                                    $password = "estebanconsulta";
                                    $database = "alumno";
                                    $port = 3306;

                                    $mysqli = new mysqli($servername, $username, $password, $database, $port);
                                    if($mysqli -> connect_error){
                                        die("Conexion fallida: " . $mysqli -> connect_error);
                                    }
                                    $query = "SELECT * FROM datosPersonales";
                                    $result = $mysqli ->query($query);
                                
                                    while($row = $result -> fetch_assoc()){
                                        echo " <tr>
                                        <td>" . $row["legajo"] . "</td>
                                        <td>" . $row["apellido"] . "</td>
                                        <td>" . $row["nombre"] . "</td>
                                        <td>" . $row["email"] . "</td>
                                        </tr>";
                                        
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Dominguez Baez Felix Esteban</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>