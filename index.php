 <?php
//    echo "<pre>";
//    var_dump($_SERVER["PHP_SELF"]);
//    echo "</pre>";
    require_once "Services/Mapper.php";
    $mapper = new Mapper();
    $mapper->Redirect($_SERVER["PHP_SELF"], empty($_GET) ? $_POST : $_GET);
?>


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