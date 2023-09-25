<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        /* Estilo para el fondo de pantalla */
        body {
            background-image: url('ruta-de-tu-imagen-de-fondo.jpg');
            /* Reemplaza 'ruta-de-tu-imagen-de-fondo.jpg' con la ruta de tu imagen de fondo */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center center;
            background-color: #f5f5f5;
        }

        /* Estilo para el contenedor principal */
        .container {
            background-color: rgba(255, 255, 255, 0.8);
            /* Color de fondo con opacidad */
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 50px;
        }

        /* Estilo para el borde rectangular vertical */
        .formulario {
            border-right: 2px solid #ff6600;
            /* Cambia el color y grosor del borde según tus preferencias */
            padding-right: 20px;
        }

        /* Estilo para centrar verticalmente el formulario */
        .centrar-verticalmente {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Estilo para cambiar el color de los enlaces dentro del formulario */
        .formulario a {
            color: #ff6600;
        }

        /* Estilo para el botón */
        .btn-primary {
            background-color: #ff6600;
            border-color: #ff6600;
        }

        .btn-primary:hover {
            background-color: #ff5500;
            border-color: #ff5500;
        }

        /* Estilo para separar los campos */
        .col-md-3 {
            margin-bottom: 20px;
            /* Espacio entre los campos */
        }
    </style>
</head>

<body>
    <br>
    <br>
    <br>

    <div class="mx-auto" style="width: 900px;">
        <form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data"
            class="row g-3 needs-validation" novalidate>
            @csrf
            @include('empleado.form')


        </form>


    </div>

    <!-- Bootstrap JavaScript Libraries -->

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
    <!-- Modales -->
    <div class="modal fade" id="modalInfoVacia" tabindex="-1" aria-labelledby="modalInfoVaciaLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalInfoVaciaLabel">Información Vacía</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Por favor, completa todos los campos antes de enviar el formulario.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalExito" tabindex="-1" aria-labelledby="modalExitoLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalExitoLabel">Formulario Enviado</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ¡Tu formulario ha sido enviado satisfactoriamente!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>


    <script>
        // Función para mostrar el modal de información vacía
        function mostrarModalInfoVacia() {
            $('#modalInfoVacia').modal('show');
        }

        // Función para mostrar el modal de éxito
        function mostrarModalExito() {
            $('#modalExito').modal('show');
        }


        // Comprobación antes de enviar el formulario
        $('form').submit(function(e) {
            e.preventDefault();

            var nombre = $('#Nombre').val();
            var apellidos = $('#Apellidos').val();
            var correo = $('#Correo').val();
            var sexo = $('#validationCustom04').val();
            var telefono = $('#Telefono').val();

            if (nombre === '' || apellidos === '' || correo === '' || sexo === null || telefono === '') {
                mostrarModalInfoVacia();
            } else {
                // Si todo está lleno, entonces se enviará el formulario
                this.submit();
                mostrarModalExito();
            }
        });
    </script>
</body>

</html>
