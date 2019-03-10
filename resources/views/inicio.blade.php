<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="js/jquery-3.3.1.min.js"></script>
</head>
<body>
    <label for="">Nombre</label>
    <input type="text" name="nombre" id="nombre">
    <input type="hidden" name="_token" value="{{csrf_token()}}" id="token">
    <button id="botonEnviar">Guardar</button>
    
    <script>
        $("#botonEnviar").click(function(){

            var datos = $("#nombre").val();
            var token = $("#token").val();

            $.ajax({
                url: 'http://127.0.0.1:8000/inicio',
                type: 'POST',
                headers:{'X-CSRF-TOKEN': token},
                dataType: 'json',
                data: {datos: datos},
            })
                .done(function() {
                    console.log("success");
                    console.log("llegando perras");
                })
                .fail(function() {
                    console.log("error");
                })
                .always(function() {
                    console.log("complete");
                });
        });
    </script>
</body>
</html>