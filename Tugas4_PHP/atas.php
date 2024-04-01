<?php
include_once 'webmenu.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toko Beras | Vino Zaky Edria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/111b8c6336.js" crossorigin="anonymous"></script>
</head>
<style>
    <style>

        #footer {
            background-color: #f8f9fa;
            color: #333;
            text-align: center;
            padding: 20px;
            margin-top: 50px;
        }

        /* Rating Stars */
        .rating {
            unicode-bidi: bidi-override;
            direction: rtl;
            text-align: right !important;
        }

        .rating>span {
            display: inline-block;
            position: relative;
            width: 1.1em;
        }

        .rating>span:hover:before,
        .rating>span:hover~span:before {
            content: "\f005";
            position: absolute;
            color: gold;
        }
</style>

<body>
<nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">Toko Beras <i class="fas fa-seedling"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <?php
                    foreach ($menu_atas as $key => $value) {
                        if (!empty($_GET['hal']) && $_GET['hal'] == $key) {
                    ?>
                            <li class="nav-item">
                                <a class="nav-link active" href="index.php?hal=<?= $key ?>"><?= $value ?></a>
                            </li>
                        <?php
                        } else {
                        ?>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?hal=<?= $key ?>"><?= $value ?></a>
                            </li>
                    <?php
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>

</body>

</html>