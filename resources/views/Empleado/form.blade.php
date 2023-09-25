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

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>

    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Nombre</label>
        <input name="Nombre" id="Nombre" type="text" class="form-control" id="validationCustom01"
            value="" >
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>
    <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Apellidos</label>
        <input name="Apellidos" id="Apellidos"type="text" class="form-control" id="validationCustom02"
            value="" required>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>
    <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label">Correo</label>
        <div class="input-group has-validation">
            <span class="input--style-4" id="inputGroupPrepend">@</span>
            <input name="Correo" id="Correo" type="text" class="form-control" value=""
                id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
            <div class="invalid-feedback">
                Porfavor Digite Un Correo
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <label for="validationCustom04" class="form-label">Sexo</label>

        <select name="sexo" class="form-select" id="validationCustom04" required>
            <option selected disabled value="">chose..</option>
            <option class="form-control" value="Hombre">Hombre</option>
            <option class="form-control" value="Mujer">Mujer</option>
        </select>

        <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Telefono</label>
        <input name="Telefono" id="Telefono"type="text" class="form-control" id="validationCustom02"
            value="" required>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>


    </div>
    <div class="col-md-3">
        <label for="Foto" for="validationCustom05" class="form-label"> Foto</label>
        <input type="file" name="Foto" id="Foto">


    </div>

</div>

<br>
<div class="col-md-4  mx-auto row justify-content-center"style="text-align: right;width:220px">
<button class="btn btn-primary" type="submit" value=" Guardar Datos"> Submit form</button>
</div>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
