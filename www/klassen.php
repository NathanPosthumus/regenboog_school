<?php
include 'database.php';

$sql = "SELECT * FROM klassen";
$result = mysqli_query($conn, $sql);
$klassen = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table class="klassen">
        <th>
            <?php foreach($klassen as $klas): ?>
                <tr>
                    <td><?php echo $klas['naam']; ?></td>
                    <td><?php echo $klas['lokaal']; ?></td>
                    <td><?php echo $klas['juf_meester']; ?></td>
                    <td><?php echo $klas['aantal_leerlingen']; ?></td>
                    <td><?php echo $klas['verdieping']; ?></td>
                </tr>
            <?php endforeach; ?>
        </th>
    </table>
</body>
</html>
      