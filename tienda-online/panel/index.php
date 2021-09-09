
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NINTENDO</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/estilos.css">
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class=" logo navbar navbar-expand-md bg-danger ">
      <div class="container">
        <div class="navbar-header text-light" >
          <h2 ><a class="" href="../index.php" >NINTENDO</a></h2>
        </div>
        
      </div>
    </nav>


    <div class="container" id="main">
        <div class="main-login">
            <form action="login.php" method="post">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="text-center">LOGIN</h3>
                    </div>
                    <div class="panel-body">
                        <p class="text-center">
                            <img  src="../assets/imagenes/logo.jpg"  alt="">
                        </p>
                        <div class="form-group">
                            <label>Usuario</label>
                            <input type="text" class="form-control" name="nombre_usuario" placeholder="Usuario" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="clave" placeholder="Password" required>
                        </div>

                        <button type="submit" class="btn btn-danger btn-block ">LOGIN</button>



                    </div>
                </div>
            </form>
        </div>

    </div> <!-- /container -->
<!--footeer--->
<div class="container-fluid text-center bg-secondary">
      <p class="logo small">&copy; TODOS LOS DERECHOS RESERVADOS</p>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

  </body>
</html>