<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todas las solicitudes</title>
    <style>
        table{
            border-style: solid;
            border-width: 5px;
            border-color: rgb(3, 68, 68);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-align: justify;
        }
        th{
            border-style: solid;
            border-width: 2px;
            border-color: rgb(5, 85, 85);
        }

        h1{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: rgb(30, 6, 75);
        }
        h2{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: rgb(6, 47, 75);
        }
    </style>
</head>
<body>
    <h1>Control de solicitantes</h1>

    <h2>Información personal</h2>

    <table>
        <tr>
            <th>NOMBRE</th>
            <th>CURP</th>
            <th>DIRECCION</th>
            <th>IMF</th>
            <th>EDAD</th>
            <th>TELEFONO</th>
            <th>SEXO</th>
            <th>LIMITACION</th>
            <th>ESCOLARIDAD</th>
            <th>PLANTEL</th>
            <th>ETNIAL</th>
            <th>OPCIONES</th>
        </tr>
        @foreach ($aplicaciones as $aplicacion)
    
        <tr>
            <th>{{$aplicacion->nombre}}</th>
            <th>{{$aplicacion->curp}}</th>
            <th>{{$aplicacion->direccion}}</th>
            <th>{{$aplicacion->imf}}</th>
            <th>{{$aplicacion->edad}}</th>
            <th>{{$aplicacion->telefono}}</th>
            <th>{{$aplicacion->sexo}}</th>
            <th>{{$aplicacion->limitacion}}</th>
            <th>{{$aplicacion->escolaridad}}</th>
            <th>{{$aplicacion->plantel}}</th>
            <th>{{$aplicacion->etnia}}</th>
            <th>
                <a href="solicitud/{{$aplicacion->id}}">Ver detalles</a>
            </th>
            
        </tr>
        @endforeach
    </table>


</body>
</html>