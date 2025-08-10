<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <style>
        body{
            background-color: #f2f2f2;
        }
        main{
            height: 100vh;
        }
    </style>
</head>
<body>
    <main class="d-flex justify-content-center align-items-center">
        <div>
            <?php
                include "connection.php";
                $email = $_POST["email"] ?? "";
                $pwd = $_POST["pwd"] ?? "";

                if(!empty($email) && !empty($pwd)){
                    // $sql = "INSERT INTO users (email, pwd) VALUES ('" . $email . "','" . $pwd . "')";
                    // $stmt = $conn->prepare($sql);
                    // $stmt->execute();

                    $x = $conn->execute_query("SELECT * FROM users WHERE email='" . $email . "' && pwd='" . $pwd . "'");
                    setcookie("id", $x->fetch_column(0));
                }
            ?>
            <section class="border border-secondary rounded p-3">
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" id="txt" class="form-control" placeholder="exemple@gmail.com">
                    </div>
                    <div class="form-group mt-3">
                        <label for="password">Senha</label>
                        <input type="password" name="pwd" id="password" class="form-control">
                    </div>
                    <input type="submit" value="Enviar" class="btn btn-primary mt-3">
                </form>
            <section>
        </div>
    </main>

</body>
<script>
    const isDarkTheme = window.matchMedia("(prefers-color-scheme: dark)").matches;

    if (isDarkTheme) {
    // O tema do sistema é escuro
    console.log("Tema escuro ativado");
    // Adicione aqui o código para aplicar o tema escuro ao seu site
    } else {
    // O tema do sistema é claro
    console.log("Tema claro ativado");
    // Adicione aqui o código para aplicar o tema claro ao seu site
    }
</script>
</html>