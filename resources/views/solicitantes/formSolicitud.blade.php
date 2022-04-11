<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de solicitud</title>
</head>
<body>
    <h1>Hello</h1><br><br>
    @isset($application)
        <form action="/solicitud/{{$application->id}}" method="POST">
        @method('PATCH')
    @else            
            <form action="/solicitud" method="POST"> <!--ruta que recibe la info y redirecciona, la ruta es la definida en web para el controlador-->
    @endisset
            

   
        @csrf
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre"><br>
        <label for="curp">CURP</label>
        <input type="text" name="curp" required><br>
        <label for="direccion">Dirreción</label>
        <input type="text" name="direccion" required><br>
        <label for="imf">Ingreso mensual familiar</label>
        <input type="text" name="imf" required><br>
        <label for="edad">Edad</label>
        <input type="text" name="edad" required><br>
        <label for="telefono">Teléfono</label>
        <input type="text" name="telefono" required><br>
        <label for="sexo">Sexo</label>
        <select name="sexo">
            <option value="mujer">Mujer</option>
            <option value="hombre">Hombre</option>
        </select><br>
        <label for="limitacion">Limitación</label>
        <select name="limitacion">
            <option value="motriz">Motriz</option>
            <option value="auditiva">Auditiva</option>
            <option value="visual">Visual</option>
            <option value="intelectual">Intelectual</option>
            <option value="No aplica">No aplica</option>
        </select><br>
        <label for="escolaridad">Escolaridad</label>
        <input type="text" name="escolaridad"><br>
        <label for="plantel">Plantel</label>
        <input type="text" name="plantel"><br>
        <label for="etnia">Etnia</label>
        <input type="text" name="etnia"><br>
        <input type="submit" value="Guardar">
    </form>

</body>
</html>