<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $this->view->name ?></title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f2f2f2;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card {
            border-radius: 1.2rem;
            box-shadow: 0px 6px 18px rgba(0,0,0,0.2);
        }
        .form-control:focus {
            box-shadow: none;
            border-color: #0d6efd;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card p-4">
                <h3 class="text-center mb-3">Bem-vindo</h3>
                <!-- Nav Tabs -->
                <ul class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="login-tab" data-bs-toggle="pill" data-bs-target="#login" type="button" role="tab">Login</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="signup-tab" data-bs-toggle="pill" data-bs-target="#signup" type="button" role="tab">Criar Conta</button>
                    </li>
                </ul>

                <!-- Conteúdo -->
                <div class="tab-content">
                    <!-- Login -->
                    <div class="tab-pane fade show active" id="login" role="tabpanel">
                        <form action="/home" method="post">
                            <div class="mb-3">
                                <label for="emailLogin" class="form-label">E-mail</label>
                                <input type="email" class="form-control" id="emailLogin" name="email" placeholder="seuemail@exemplo.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="senhaLogin" class="form-label">Senha</label>
                                <input type="password" class="form-control" id="senhaLogin" name="pwd" placeholder="•••••••" required>
                            </div>
                            <input type="submit" class="btn btn-primary w-100" value="Entrar">
                        </form>
                    </div>

                    <!-- Criar Conta -->
                    <div class="tab-pane fade" id="signup" role="tabpanel">
                        <form action="/home" method="post">
                            <div class="mb-3">
                                <label for="nomeCadastro" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="nomeCadastro" name="name" placeholder="Seu nome completo" required>
                            </div>
                            <div class="mb-3">
                                <label for="emailCadastro" class="form-label">E-mail</label>
                                <input type="email" class="form-control" id="emailCadastro" name="email" placeholder="seuemail@exemplo.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="senhaCadastro" class="form-label">Senha</label>
                                <input type="password" class="form-control" id="senhaCadastro" name="pwd" placeholder="•••••••" required>
                            </div>
                            <input type="submit" class="btn btn-success w-100" value="Criar Conta">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
