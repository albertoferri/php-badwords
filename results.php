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
    // var_dump($badword)

    // Calcola la lunghezza del testo
    $length = strlen($text);

    // Sostituisci la parola da censurare con ***
    $censored_text = str_replace($badword, '***', $text);
    // var_dump($censored_text)
    $censored_length = strlen($censored_text);
?>

<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <p id="first">
                <?php
                    echo "Il tuo testo: $text <br>";
                    echo "Lunghezza del testo: $length <br>";
                ?>
            </p>
            <p id="second">
                <?php
                    echo "Testo censurato: $censored_text <br>";
                    echo "Lunghezza del testo censurato: $censored_length <br>";
                ?>
            </p>
        </div>
    </div>
</div>


    

    <!-- link bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>