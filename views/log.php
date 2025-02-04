<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" media="screen" href="views/cadlog.css">
    <link rel="stylesheet" type="text/css" media="screen" href="cadlog.css">
    <script src="log.js"></script>
</head>

<body>
    <header>
        <img alt="Logo" class="logo" src="logo.png">
        <div class="info">
            <a href="../">início:)</a>
        </div>
    </header>
    <div id="main">
        <div class="signup">
            <form class="form" method="POST" action="../controllers/login.php">
                <div class="maintitle">
                    <h1>Login</h1>
                </div>
                <div class="line"></div>
                <div class="subtitle">
                    <p>As informações devem ser as mesmas <br>fornecidas no cadastro:</p>
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="text" id="email" name="email" placeholder="" autocomplete="on">
                </div>
                <div class="form-group">
                    <label for="password">Senha</label>
                    <input type="password" id="password" name="password" autocomplete="on">
                    <i id="togglePassword" class="toggle-password">🐵</i>
                </div>
                <div class="button">
                    <input type="submit" onclick="Validate()" value="Entrar">
                </div>

                <br>
                <div class="subtitle">
                    <p>Ainda não possui cadastro? crie um<a href="log.php"> aqui</a></p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>