 <?php
    require_once "Services/Mapper.php";
    $mapper = new Mapper();
    $mapper->Redirect($_SERVER["PHP_SELF"], empty($_GET) ? $_POST : $_GET);
?>


<script>
    const isDarkTheme = window.matchMedia("(prefers-color-scheme: dark)").matches;

    if (isDarkTheme) {
        console.log("Tema escuro ativado");
        document.getElementById("body").style.backgroundColor = "#7F7F7F"
    } else {
        console.log("Tema claro ativado");
    }
</script>
</html>