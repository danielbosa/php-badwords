<?php

$paragraph = $_GET['paragraph'];
$censored = $_GET['censored'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style.css">

    <title>PHP</title>
</head>
<body>
    <p>
        Paragrafo originale: <?php echo $paragraph ?>
    </p>
    <p>
    Lunghezza paragrafo inserito:
        <?php echo strlen($paragraph) ?>
    </p>
    <!-- Altro modo -->
    <!-- <p>
        <?php echo "Lunghezza paragrafo inserito:" . strlen($paragraph) ?>
    </p> -->

    <p>
        Paragrafo censurato: <?php echo str_ireplace($censored,"***",$paragraph) ?>
    </p>
    <p>
    Lunghezza paragrafo censurato:
        <?php echo strlen(str_ireplace($censored,"***",$paragraph)) ?>
    </p>
</body>
</html>