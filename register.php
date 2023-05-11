<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="scss/sb-admin-2.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />

</head>

<body>

    <section class="h-100vh h-custom gradient-custom-2">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12">
                    <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                        <div class="card-body p-0">
                            <div class="row g-0">
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <h3 class="fw-normal mb-5" style="color: #4835d4;">Informacion general</h3>
                                        <form class="user">
                                            <div class="row">
                                                <div class="col-md-6 mb-4 pb-2">

                                                    <div class="form-outline">
                                                        <input type="text" id="exampleFirstName"
                                                            class="form-control form-control-lg" />
                                                        <label class="form-label" for="form3Examplev2">Nombre/s</label>
                                                    </div>

                                                </div>
                                                <div class="col-md-6 mb-4 pb-2">

                                                    <div class="form-outline">
                                                        <input type="text" id="exampleLastName"
                                                            class="form-control form-control-lg" />
                                                        <label class="form-label"
                                                            for="form3Examplev3">Apellido/s</label>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="mb-4">
                                                <select class="form-select" aria-label="Default select example"
                                                    id="exampleSelectGender">
                                                    <option selected>Genero</option>
                                                    <option value="Masculino">Masculino</option>
                                                    <option value="Femenino">Femenino</option>
                                                    <option value="Prefiero no decirlo">Prefiero no decirlo</option>
                                                </select>
                                            </div>

                                            <div class="mb-4 pb-2">
                                                <div class="form-outline">
                                                    <input type="email" id="exampleInputEmail"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Examplev4">Email</label>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6 mb-4 pb-2 mb-md-0 pb-md-0">

                                                    <div class="form-outline">
                                                        <input type="password" id="exampleInputPassword"
                                                            class="form-control form-control-lg" />
                                                        <label class="form-label"
                                                            for="form3Examplev5">Contraseña</label>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">

                                                    <div class="form-outline">
                                                        <input type="password" id="exampleRepeatPassword"
                                                            class="form-control form-control-lg" />
                                                        <label class="form-label" for="form3Examplev5">Repite la
                                                            contraseña</label>
                                                    </div>

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6 bg-indigo text-white">
                                    <div class="p-5">
                                        <h3 class="fw-normal mb-5">Informacion detallada</h3>
                                        
                                        <div class="row">
                                            <div class="col-md-5 mb-4 pb-2">

                                                <select class="form-select" aria-label="Default select example"
                                                    id="exampleSelectPais">
                                                    <option selected value="Pais">Pais</option>

                                        <?php
                                                include "php/get_solicitudesRegistro.php";
                                        ?>

                                        <div class="row">
                                            <div class="col-md-5 mb-4 pb-2">

                                                <label class="form-label text-white" for="customFile">Fotografia</label>
                                                <input type="file" class="form-control" id="exampleSelectFoto" />

                                            </div>
                                            <div class="col-md-7 mb-4 pb-2">

                                                <label class="form-label text-white" for="customFile">CV</label>
                                                <input type="file" class="form-control" id="exampleSelectCV" />

                                            </div>
                                        </div>

                                        <div class="form-check d-flex justify-content-start mb-4 pb-3">
                                            <input required class="form-check-input me-3" type="checkbox" value=""
                                                id="form2Example3c" />
                                            <label class="form-check-label text-white" for="form2Example3">
                                                Acepto los <a href="#!" class="text-white"><u>Terminos y
                                                        Condiciones</u></a> del sitio
                                            </label>
                                        </div>

                                        <button id="register" type="button" class="btn btn-light btn-lg"
                                            data-mdb-ripple-color="dark">Registrarse</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script defer src="js/register.js"></script>

</body>

</html>