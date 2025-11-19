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
    <h1>Register User</h1>
    <form action="register_process.php" method="POST">
        <div>
            <label for="firstname">First Name</label>
            <input type="text" name="firstname" placeholder="First Name" required>
        </div>
        <div>
            <label for="lastname">Last Name</label>
            <input type="text" name="lastname" placeholder="Last Name" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Email" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Password" required>
        </div>
        <div>
            <label for="role">Role</label>
            <input type="text" name="role" placeholder="Role" required>
        </div>
        <div>
            <label for="address">Address</label>
            <input type="text" name="address" placeholder="Address" required>
        </div>
        <div>
            <label for="city">City</label>
            <input type="text" name="city" placeholder="City" required>
        </div>
        <div>
            <label for="zipcode">Zip Code</label>
            <input type="text" name="zipcode" placeholder="Zip Code" required>
        </div>
        <div>
            <label for="phonenumber">Phone Number</label>
            <input type="text" name="phonenumber" placeholder="Phone Number" required>
        </div>

        <button type="submit">Register</button>
    </form>
</body>
</html>