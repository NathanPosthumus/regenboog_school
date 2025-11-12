<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Klas</title>
</head>
<body>

    <h2>leerling Maken</h2>
    <form action="leerling_create_process.php" method="POST">

        <div class="form-group">
            <label for="leerlingnaam">leerling naam</label>
            <input type="text" name="naam" id="leerlingnaam" placeholder="leerling naam" required>
        </div>

        <div class="form-group">
            <label for="leerlingachternaam">leerling achternaam</label>
            <input type="text" name="achternaam" id="leerlingachternaam" placeholder="leerling achternaam" required>
        </div>

        <div class="form-group">
            <label for="Leerlingnummer">leerling Nummer</label>
            <input type="text" name="nummer" id="Leerlingnummer" placeholder="leerling Nummer" required>
        </div>

        <button type="submit">leerling Maken</button>

    </form>

    <!-- method is post bij forms -->
    <!-- for en id hetzelfde? als je op de label klikt, gaat die naar het input veld met dat id -->
    <!-- name bepaald de sleutel in de database waar de waarde in komt te staan -->
    
    
</body>
</html>