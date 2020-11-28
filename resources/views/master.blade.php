<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alcaldia de Bogotá</title>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/v4-shims.css">
    <style>
        body{font-family: "Century Gothic", sans-serif; font-size: 18px}
        .header{height: 4.5rem;background-color: #171717;color: #ffffff;}
        .head-info{height: 100%}
        .frm{width: 9.5rem}
        .td-id{max-width: 3.5%; width: 3.5%;}
        .w-card{width: 14.2em;}
        .card-title{padding: 1.25rem 1.25rem 0rem 1.25rem; text-align: center; margin-bottom: 0;}
        .card-img{padding: 0rem 1.25rem 0rem 1.25rem; font-size: 7em; text-align: center;}
        .num-dor {position: absolute; top: 1.4em; color: #fff; font-size: 3.5em; font-family: "Century Gothic", sans-serif; width: 100%;}
        .opc{text-align: center;}
        .row-ju{padding: 0em 1em 0em 1em;}
        .col-ju{margin: .3em; text-align: center;}
        .img-logo{text-align: center; max-width: 100%}
        .li-ju{width: 100%}
    </style>
</head>
<body>
    <div class="header">
        <div class="container head-info">
            <div class="float-left">
                <h3 class="mt-3">Evento deportivo</h3>
            </div>
            <div class="float-right">
                <a href="{{ route('localidades.index') }}" class="btn btn-light mt-3"><img src="https://www.flaticon.es/svg/static/icons/svg/32/32364.svg" height="25"> Localidades</a>
                <a href="{{ route('equipos.index') }}" class="btn btn-light mt-3"><img src="https://www.flaticon.es/svg/static/icons/svg/1107/1107170.svg" height="25"> Equipos</a>
                <a href="{{ route('jugadores.index') }}" class="btn btn-light mt-3"><img src="https://www.flaticon.es/svg/static/icons/svg/1107/1107163.svg" height="25"> Jugadores</a>
            </div>
        </div>
    </div>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
