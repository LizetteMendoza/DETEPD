    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Perfil Solicitante</title>
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
        <h1>Solicitud de {{$application->curp}}</h1>

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
            
            <tr>
                <th>{{$application->nombre}}</th>
                <th>{{$application->curp}}</th>
                <th>{{$application->direccion}}</th>
                <th>{{$application->imf}}</th>
                <th>{{$application->edad}}</th>
                <th>{{$application->telefono}}</th>
                <th>{{$application->sexo}}</th>
                <th>{{$application->limitacion}}</th>
                <th>{{$application->escolaridad}}</th>
                <th>{{$application->plantel}}</th>
                <th>{{$application->etnia}}</th>
                <th>
                    <a href="{{$application->id}}/edit">Editar</a>
                    <form action="{{$application->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Borra">
                    </form>
                    
                </th>
            </tr>
        </table>

    </body>
    </html>