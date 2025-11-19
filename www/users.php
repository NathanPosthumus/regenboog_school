<?php
include 'database.php';

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

<?php include 'navbar.php'; ?>

    <table class="klassen">
        <th>
            <?php foreach($users as $user): ?>
                <tr>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['firstname']; ?></td>
                    <td><?php echo $user['lastname']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['password']; ?></td>
                    <td><?php echo $user['role']; ?></td>
                    <td><?php echo $user['address']; ?></td>
                    <td><?php echo $user['city']; ?></td>
                    <td><?php echo $user['zipcode']; ?></td>
                    <td><?php echo $user['phonenumber']; ?></td>
                </tr>
            <?php endforeach; ?>
        </th>
    </table>
</body>
</html>
      

<!-- id
firstname
lastname
email
password
role
address
city
zipcode
phonenumber -->