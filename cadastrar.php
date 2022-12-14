<?php
require_once 'Classes/usuarios.php';
$u = new Usuario;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cadastrar</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPlan</h3>
                            </a>
                            <h3>Cadastrar</h3>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text"  name="nome" class="form-control" id="floatingText" placeholder="jhondoe">
                            <label for="floatingText">Nome</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email"  name="telefone" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password"  name="senha" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Senha</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password"  name="confSenha" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Confirmar Senha</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Mantenha conectado</label>
                            </div>
                            <a href="">Esqueceu a senha?</a>
                        </div>
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Entrar</button>
                        <p class="text-center mb-0">N??o tem conta? <a href="">Procure o RH</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
    </div>

    <?php
    //verificar se o usuario clicou no botao cadastrar
    if (isset($_POST['nome'])) 
    {
        $nome = addslashes($_POST['nome']); //addslashes para evitar comando de hackers
        $telefone = addslashes($_POST['telefone']);
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);
        $confirmarSenha = addslashes($_POST['confSenha']);

        //verificar se n??o est?? vazio
        if (!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirmarSenha)) 
        {
            $u->conectar("projeto_login", "localhost", "root", "");
            if ($u->msgErro == "") //n??o houve erro esta ok
            {
                if ($senha == $confirmarSenha) //verificando se senha e confirmar senha s??o iguais
                {
                    if ($u->cadastrar($nome, $telefone, $email, $senha)) 
                    {
                        ?>
                        <div id="msg-sucesso">
                            Cadastrado com sucesso! Acesse para entrar!";
                        </div>
                        <?php
                    } else 
                    {
                        ?>
                        <div class="msg-erro">
                            Email j?? est?? cadastrado
                        </div>
                        <?php
                    }
                } else 
                {
                    ?>
                    <div class="msg-erro">
                        Opss ! A senha e o confirmar senha n??o s??o id??nticos
                    </div>
                    <?php
                }
            } else 
            {
                ?>
                <div class="msg-erro">
                    <?php echo "Erro: " . $u->$msgErro;?>
                </div>
                <?php
            }
        } else 
        {
            ?>
            <div class="msg-erro">
                Preecha todos os campos do formul??rio
            </div>
            <?php
        }
    }
    ?>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>