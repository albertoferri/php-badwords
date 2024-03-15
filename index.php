<!DOCTYPE html>
<html lang="it" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>

    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    
    <div class="container">
        <div class="row mt-5">
            <h1 class="text-center mb-4">Pagina del form</h1>

            <form class="col-6 offset-3" action="results.php" method="GET">
                <div class="mb-3">
                    <label for="Textarea" class="form-label">Scrivi la frase che vuoi</label>
                    <textarea class="form-control" id="Textarea" name="textarea" rows="3" placeholder="Scrivi..."></textarea>
                </div>
                <div class="mb-3">
                    <label for="badWords" class="form-label">Scrivi una parola che ritieni sia bannabile</label>
                    <input type="text" class="form-control" id="badWords" name="badWords" placeholder="La tua parola">
                    <input class="mt-3 px-3 py-2 text-uppercase bg-warning border-0 rounded-2 text-black fw-bold" type="submit">
                </div>
            </form>

        </div>
    </div>


    <!-- link bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>