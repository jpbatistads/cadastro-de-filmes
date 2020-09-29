<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Meu Cinema</title>
</head>

<body>
    <nav class="nav-extended purple lighten-3 ">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li><a href="galeria.php">Galeria</a></li>
                <li><a href="cadastrar.php">Cadastrar</a></li>
            </ul>
        </div>
        <div class="nav-header center">
            <h1>Meu Cinema</h1>
        </div>
        <div class="nav-content purple darken-1">
            <ul class="tabs tabs-transparent">
                <li class="tab"><a class="active" href="#test1">Todos</a></li>
                <li class="tab"><a class="active" href="#test2">Assistidos</a></li>
                <li class="tab"><a href="#test3">Favoritos</a></li>
            </ul>
        </div>
    </nav>

    <div class="row">
        <div class="col s3">
            <div class="card hoverable">
                <div class="card-image">
                    <img src="https://image.tmdb.org/t/p/original/dODKvv9o9BOemWavnulutJBHM80.jpg">
                   
                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite</i></a>
                </div>
                <div class="card-content">
                    <p class="valign-wrapper">
                        <i class="material-icons amber-text">stars</i>8,0
                    </p>
                    <span class="card-title">Homem Aranha</span>
                    <p>Peter Parker está tentando saber mais sobre sua origem. Ele encontra uma pasta que pertenceu ao seu pai e quer descobrir por que seus pais desapareceram. Sua busca o leva a Oscorp e ao dr. Curt Connors, que tem como alterego o letal Lagarto.</p>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col s3">
            <div class="card hoverable">
                <div class="card-image">
                    <img src="https://image.tmdb.org/t/p/original/v0BiswYPEZzZTYazvwktPTOTMpP.jpg">
                    
                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite</i></a>
                </div>
                <div class="card-content">
                    <p class="valign-wrapper">
                        <i class="material-icons amber-text">stars</i>7,0
                    </p>
                    <span class="card-title">Homem Aranha</span>
                    <p>Um ladrão profissional com dívidas de 40 milhões de dólares deve cometer um último golpe - roubar um cassino aéreo futurista cheio dos criminosos mais perigosos do mundo.</p>
                </div>
            </div>
        </div>
    </div>
    </div>

    



</body>

</html>