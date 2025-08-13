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
    <?php
    echo "<pre>";
    var_dump($_SERVER["PHP_SELF"]);
    echo "</pre>";
        require_once "Services/Mapper.php";
        $mapper = new Mapper();
        $mapper->Redirect($_SERVER["PHP_SELF"], empty($_GET) ? $_POST : $_GET);
    ?>
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