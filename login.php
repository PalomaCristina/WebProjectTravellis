<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style-login.css">
    <title>Login</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <!-- Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
            <nav class="navbar">
            <div class="container">
                <a class="navbar-brand" href="#!"><i class="fas fa-globe-americas"></i> Travellis</a>
                <a type="button" class="btn btn-primary" href="./index.php"> Voltar</a>
            </div>
        </nav>
    <main class="login">
        <div class="login_container">
            <h1 class="login_title">Entre</h1>
            <form action="consultar_usuario.php" class="login_form" method="POST">
                <input class="login_input" name="email" type="email" placeholder="E-mail">
                	<span class="login_input_border"></span>
                		<input class="login_input" name="senha" type="password" id="senha" placeholder="Senha">
                			<span class="login_input_border" ></span>
                                <a class="login_reset" href="#">Esqueceu a senha?</a>
                                <button class="login_submit">Login</button>
                                    <div class="login-reset-background">
                                <label class="checkbox-wrap">Salvar senha
                            <input type="checkbox" checked>
                        <span class="checkmark"></span>
                  </label>
                </div>
                <a href="./register.php" class="login_register">?? novo por aqui? <strong>Cadastre-se</strong></a>
                	<div class="login-reset-background">
                    </div>
            	</div>
            </form>
    </main>

     <!-- Bootstrap core JS-->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>