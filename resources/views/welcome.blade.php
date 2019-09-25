<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>fily</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css"/>
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Serif" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/fontawesome-all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="main.js"></script>
    <style>
    *{
        margin: auto;
        padding: auto; 
        margin-top:0px;
        margin-bottom: 10px;
        font-family: arial, sans-serif;
    }
    </style>
</head>

<body>

    <div class="container-fluid">

        <div class="col-lg-12 ">
            <div class="col-lg-2">
                <img src="https://www.trestintas.com/sites/all/themes/megaw/images/3TLogoIllustratedWallpaper.png" alt="Los Angeles" style="width:100%;">
            </div>
            <div class="col-lg-10 bg-primary  text-white">
                <div class="col-lg-4 text-center ">
                    <b>
                        <h1>wallpaper citis </h1>
                    </b>
                </div>
                <div class="col-lg-8 text-right">
                    <div class="btn-group ">
                        <button type="button" class="btn btn-primary">Home</button>
                        <button type="button" class="btn btn-primary">Samsung</button>
                        <a href="{{ route('login') }}"><button type="button" class="btn btn-primary"><b>Iniciar seccion</b></button></a>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="container">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="http://www.technocrazed.com/wp-content/uploads/2015/12/city-wallpaper-46-640x360.jpg" alt="Los Angeles" style="width:100%;">
                        </div>
                        <div class="item">
                            <img src="http://www.technocrazed.com/wp-content/uploads/2015/12/city-wallpaper-45-640x360.jpg" alt="Chicago" style="width:100%;">
                        </div>
                        <div class="item">
                            <img src="http://www.technocrazed.com/wp-content/uploads/2015/12/city-wallpaper-1-640x360.jpg" alt="New york" style="width:100%;">
                        </div>
                    </div>
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-12 bg-success text-white">
            <div class="col-sm-8 ">
                <b>
                    <h2>¿Qué son los Volcanes?</h2>
                </b>
                <h4>Se define a un volcán como una montaña o cerro con apertura en la parte alta de la misma a manera de chimenea, por medio de la cual escapan los materiales tipo líquido, solido o gaseoso, que salen desde las profundidades de la tierra. Los volcanes vienen siendo grietas de la corteza terrestre, estructuras geológicas compuestas por material fragmentado y corrientes de lava que se dejan ver al exterior de los mismos mediante una erupción volcánica, que ocurre a consecuencia del aumento de la temperatura del magna, el cual por su parte se define como la combinación de roca fúndica y compuestos volátiles y solidos que se encuentran en la superficie terrestre.</h4>
            </div>
            <div class="col-sm-4">
                <img src="http://www.technocrazed.com/wp-content/uploads/2015/12/city-wallpaper-6-640x360.jpg" alt="Los Angeles" style="width:100%;">
            </div>
        </div>

        <div class="col-lg-12">
            <div class="col-sm-4 bg-info ">
                <img src="http://www.technocrazed.com/wp-content/uploads/2015/12/city-wallpaper-15-640x360.jpg" alt="Los Angeles" style="width:100%;">
                <p><b>Volcán El Escondido (Volcán San Diego):</b></p> ubicado al nor oriente del Departamento de Caldas, es hoy considerado el volcán masa joven de Colombia.
            </div>
            <div class="col-sm-4 bg-warning">
                <img src="http://www.technocrazed.com/wp-content/uploads/2015/12/city-wallpaper-10-640x360.jpg" alt="Chicago" style="width:100%;">
                <p><b>Volcán Sotará:</b></p> ubicado en el departamento del Cauca, a 25 km al sur este de la ciudad de Popayán.
            </div>
            <div class="col-sm-4 bg-danger">
                <img src="http://www.technocrazed.com/wp-content/uploads/2015/12/city-wallpaper-11-640x360.jpg" alt="Los Angeles" style="width:100%;">
                <p><b>Volcán Romeral:</b></p> ubicado en el departamento de Caldas, en el lado norte de la cadena volcánica Ruiz-Tolima
            </div>
        </div>

        <div class="col-lg-12">
            <div class="col-sm-6">
                <div class="col-sm-4">
                    <img src="http://www.technocrazed.com/wp-content/uploads/2015/12/city-wallpaper-20-640x360.jpg" alt="Chicago" style="width:100%;">
                </div>
                <div class="col-sm-8">
                    <h5>
                        <p><b>Volcán Romeral:</b></p> ubicado en el departamento de Caldas a 22 km de la ciudad de Manizales.
                    </h5>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="col-sm-4">
                    <img src="http://www.technocrazed.com/wp-content/uploads/2015/12/city-wallpaper-22-640x360.jpg" alt="Chicago" style="width:100%;">
                </div>
                <div class="col-sm-8">
                    <h5>
                        <p><b>Volcán Romeral:</b></p> ubicado en el departamento de Caldas a 22 km de la ciudad de Manizales.
                    </h5>
                </div>
            </div>
        </div>

        <div class="col-lg-12 bg-primary text-white">
            <footer class="bg_footer">
                <div class="container ">
                    <div class="row">
                        <div class="col-lg-12" style="text-align: center;">
                            <p class="txt_footer">
                                <strong> Sistema de Información - fily </strong><br>
                            </p>
                            <hr>
                            <strong style="color:#fff;">
                                Dirección: Cra. 3 # 5-79. Teléfono: (+57 2) 8243925. Popayán (Cauca), Colombia.
                            </strong>
                            <p></p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

    </div>

</body>

</html>
