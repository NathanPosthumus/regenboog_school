<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Klas</title>
</head>
<body>

    <h2>Klas Maken</h2>
    <form action="create_klas_process.php" method="POST">
        <div class="form-group">
            <label for="naam_klas">Klasnaam</label>
            <input type="text" name="naam" id="naam_klas" placeholder="Klasnaam" required>
        </div>

        <div class="form-group">
            <label for="naam_lokaal">Naam Lokaal</label>
            <input type="text" name="lokaal" id="naam_lokaal" placeholder="Naam Lokaal" required>
        </div>

        <div class="form-group">
            <label for="naam_juf_meester">Naam Juf of Meester</label>
            <input type="text" name="juf_meester" id="naam_juf_meester" placeholder="Naam Juf of Meester" required>
        </div>

        <div class="form-group">
            <label for="aantal_leerlingen">Aantal Leerlingen</label>
            <input type="text" name="aantal_leerlingen" id="aantal_leerlingen" placeholder="Aantal Leerlingen" required>
        </div>

        <div class="form-group">
            <label for="verdieping">Verdieping</label>
            <input type="text" name="verdieping" id="verdieping" placeholder="Verdieping" required>
        </div>

        <button type="submit">Klas Maken</button>

    </form>

    <!-- method is post bij forms -->
    <!-- for en id hetzelfde? als je op de label klikt, gaat die naar het input veld met dat id -->
    <!-- name bepaald de sleutel in de database waar de waarde in komt te staan -->
    
    
</body>
</html>