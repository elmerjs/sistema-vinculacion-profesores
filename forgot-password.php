<!doctype html>
<html lang="es">
<head>
    <title>Recuperar Contraseña - Temporales Unicauca</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
</head>
<body class="login-page-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center mt-4">
                <h2 class="main-title">Recuperar Contraseña</h2>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="card login-card">
                    <div class="loginBox text-center">
                        <img src="images/logounicauca.png" class="img-fluid login-logo" alt="Logo Universidad del Cauca">
                        <form method="POST" action="send-reset-link.php">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text unicauca-input-icon"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input type="email" class="form-control unicauca-input" id="email" name="email" placeholder="Email registrado" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block unicauca-btn-primary-lg">Enviar enlace de recuperación</button>
                        </form>
                        <hr class="unicauca-hr">
                        <p><a href="index.html" class="unicauca-link"><i class="fas fa-arrow-left"></i> Volver al inicio</a></p>
                        
                        <?php
                        if (isset($_GET['success'])) {
                            echo '<div class="alert alert-success mt-4" role="alert">
                                    <i class="fas fa-check-circle"></i> Se ha enviado un enlace de recuperación a tu correo electrónico.
                                  </div>';
                        }
                        if (isset($_GET['error'])) {
                            echo '<div class="alert alert-danger mt-4" role="alert">
                                    <i class="fas fa-exclamation-circle"></i> No se encontró una cuenta asociada a este correo electrónico.
                                  </div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>