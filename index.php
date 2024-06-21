<?php

include __DIR__ . "/models/Movie.php";

include __DIR__ . "/store.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP OOP</title>
</head>

<body>
    <h1 class="display-4 fw-bold text-warning text-center my-4"> MOVIES</h1>
    <div class="row mx-0 justify-content-center">
        <div class="col-3">
            <ul class="list-group">

                <?php foreach ($movies as $index => $movie) { ?>

                    <li class="list-group-item text-center fw-bold">
                        <?= $movie->infoMovie(); ?>
                    </li>

                <?php } ?>

            </ul>

        </div>
    </div>



</body>

</html>