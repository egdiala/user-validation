<?php

require('user_validator.php');

if (isset($_POST['submit'])) {
    // validate entries
    $validation = new UserValidator($_POST);
    $errors = $validation->validateForm();

    //save data to a db
}

?>

<html lang="en">

<head>
    <title>PHP OOP Tutorial</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>

    <div class="new-user">
        <h2>Create New User</h2>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
            <label>Username:</label>
            <input type="text" name="username" value="<?= htmlspecialchars($_POST['username']) ?? '' ?>">
            <div class="error">
                <?= $errors['username'] ?? '' ?>
            </div>

            <label>Email:</label>
            <input type="text" name="email" value="<?= htmlspecialchars($_POST['email']) ?? '' ?>">
            <div class="error">
                <?= $errors['email'] ?? '' ?>
            </div>

            <input type="submit" value="submit" name="submit">
        </form>
    </div>

</body>

</html>