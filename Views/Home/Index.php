<main class="d-flex justify-content-center align-items-center">
    <p>Index</p>
    <br>
    <?php
    if($this->view->data != null) {
        foreach ($this->view->data as $key => $value) {
            echo $key . " = " . $value . "<br>";
        }
    }
    ?>
</main>