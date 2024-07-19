<!DOCTYPE html>
<html lang="pt/BR">
<head>
	<link rel="stylesheet" href="<?=url("assets/css/core-login-style.css")?>">
    <script src="<?=url("assets/js/core-login.script.js")?>"></script>
	<script src="https://kit.fontawesome.com/d90824391e.js" crossorigin="anonymous"></script>
	<title>Login - Painel de Administração</title>
</head>
<body>
    <main>
        <div class="box">
            <div class="title">
                <i class="fas fa-atom"></i>
                <h3>Painel de Administração</h3>
            </div>
                <div class="content">
                    <form action="assets/php/validaLogin.php" method="post">
                        <h6>Recupere sua conta...</h6>
                        <label for="login">
                            <i class="fas fa-user"></i>
                            <input type="text" name="email" placeholder="Seu email" autocomplete="off">
                        </label>
                    <br>
                <button class="forgot">Recuperar sua senha</button>
            </form>
            </div>
            <div class="box2">
                <h1>Eu tenho uma conta?</h1>
                <a href="/admin"><button class="login">Faça seu login</button></a>
                <h2>Ainda não tem uma conta?</h2>
                <a href="/admin/recovery"><button class="cadastrar">Lembrar senha</button></a>
            </div>
        </div>

        <?php if(isset($message)): ?>
            <div class="alert" id="alert">
                <span class="closebtn" onclick="closeAlert()">&times;</span> 
                <strong>Informativo! - <?=$message?></strong>
            </div>
        <?php endif; ?>
    </main>
</body>
</html>