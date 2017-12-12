<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Landing Page Bootstrap</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <?php wp_head() ?>
</head>
<body>
   <header>
        <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="img/latam_logo.png" alt="Logo"></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Link</a>
            </li>
          </ul>

        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
      <!-- H1 -->
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8"><h1>COMIENZA UNA NUEVA VIDA <br>Y ÚNETE AL MUNDO TECNOLÓGICO</h1></div>
        <div class="col-md-2"></div>
    </div>
    <!-- H1 -->
    <!-- BOTONES -->
    <div class="container buttons">
        <div class="row">
            <div class="col-md-4"></div> 
            <div class="col-md-2">
                <button type="button" class="btn btn-primary right">Comienza aquí</button>
            </div>
             <div class="col-md-2">
                 <button type="button" class=" left btn btn-success">Más info</button>
            </div>
            <div class="col-md-4"></div>

            </div>
        </div>
        <!-- BOTONES -->
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <p class="text">Hay una escasez gigante de desarrolladores en el mundo, y más aún en Latinoamérica. Se necesitan más desarrolladores y tú puedes ser uno!</p>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</header>