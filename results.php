<!DOCTYPE html>
<html lang="it" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<?php
    // Prendi i dati dal form
    $text = $_GET['textarea'];
    $badword = $_GET['badWords'];

    // Calcola la lunghezza del testo
    $length = strlen($text);

    // Sostituisci la parola da censurare con ***
    $censored_text = str_replace($badword, '***', $text);
    $censored_length = strlen($censored_text);
?>

<div class="container">
    <div class="row">
        <div class="col-12 mt-5">
            <h1 class="text-center">La tua frase censurata!</h1>
        </div>
        <div class="col-6 offset-3">
            <div class="row mt-5">
                <div class="col-12 mb-4">
                    <h3 class="w-50 d-inline text-center">FRASE NON CENSURATA</h3>
                    <h3 class="ps-5 d-inline">FRASE CENSURATA</h3>
                </div>
                <p class="col-6 text-center d-flex flex-column" id="first">
                    <?php
                        echo "Testo: $text <br>";
                        echo "Lunghezza del testo: $length <br>";
                    ?>
                </p>
                <p class="col-6 text-center" id="second">
                    <?php
                        echo "Testo : $censored_text <br>";
                        echo "Lunghezza del testo censurato: $censored_length <br>";
                    ?>
                </p>

            </div>
        </div>
    </div>
</div>


    

    <!-- link bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>