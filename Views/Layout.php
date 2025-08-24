<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $this->view->name ?? "Page" ?></title>
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
<body id="body">

    <h3>Layout</h3>

    <?php

    $view = $this->view->getViewPath();
    include "Views/" . $view;

    ?>
</body>
<?php

