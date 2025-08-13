<main class="d-flex justify-content-center align-items-center">
    <p>Index</p>
    <?php
    foreach($data as $key => $value) {
        echo $key . " = " . $value;
    }
    ?>
</main>