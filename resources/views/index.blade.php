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
        body{font-family: "Century Gothic", sans-serif;}
        .header{height: 4.5rem;background-color: #171717;color: #ffffff;}
        .head-info{height: 100%}
    </style>
</head>
<body>
    <div class="header">
        <div class="container head-info">
            <div class="float-left">
                <h3 class="mt-3">Evento deportivo</h3>
            </div>
        </div>
    </div>
    <div class="body">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card m-4" style="width: 18rem;">
                        <img src="https://www.flaticon.es/svg/static/icons/svg/32/32364.svg" class="card-img-top p-2" alt="" height="200">
                        <div class="card-body">
                            <h5 class="card-title">LOCALIDADES</h5>
                            <p class="card-text">Localidades permitidas en el evento</p>
                            <a href="{{ route('localidades.index') }}" class="btn btn-primary btn-block"><i class="fas fa-chevron-circle-right"></i> IR</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card m-4" style="width: 18rem;">
                        <img src="https://www.flaticon.es/svg/static/icons/svg/1107/1107170.svg" class="card-img-top p-2" alt="" height="200">
                        <div class="card-body">
                            <h5 class="card-title">EQUIPOS</h5>
                            <p class="card-text">Equipos participantes del evento</p>
                            <a href="{{ route('equipos.index') }}" class="btn btn-primary btn-block"><i class="fas fa-chevron-circle-right"></i> IR</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card m-4" style="width: 18rem;">
                        <img src="https://www.flaticon.es/svg/static/icons/svg/1107/1107163.svg" class="card-img-top p-2" alt="" height="200">
                        <div class="card-body">
                            <h5 class="card-title">JUGADORES</h5>
                            <p class="card-text">Jugadores inscritos para el evento</p>
                            <a href="{{ route('jugadores.index') }}" class="btn btn-primary btn-block"><i class="fas fa-chevron-circle-right"></i> IR</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
