       <?php
session_start();

require 'dbconnect.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];    
    $username = $_POST['username'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $message = '';

    $sql = 'INSERT INTO nova(username,name,surname,email,password) VALUES (:username, :name, :surname, :email, :password)';
    $query = $pdo->prepare($sql);
    
    if (empty($username)) {
        $message = "Username is required!";
    } else {
        $query->bindParam('username', $username);
    }
    if (empty($name)) {
        $message = "Name is required!";
    } else {
        $query->bindParam('name', $name);
    }
    if (empty($surname)) {
        $message = "Surname is required!";
    } else {
        $query->bindParam('surname', $surname);
    }
    if (empty($email)) {
        $message = "Email is required!";
    } else {
        $query->bindParam('email', $email);
    }
    if (empty($password)) {
        $message = "Password is required!";
    } else {
        $query->bindParam('password', $password);
    }

    if($query->execute()){
        $message = "Successfully created your account!";
    } else {
        $message = "A problem occured creating your account!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <?php
        if (!empty($message)) : ?>
            <div class="alert alert-primary">
                <?php echo $message ?>
            </div>
        <?php endif; ?>

        <div class="card" style="width: 500px; margin: 0 auto">
            <div class="card-header">
                Register
            </div>
            <form action="signup.php" method="post" class="p-1">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username" class="form-control" required minlength="4">
                </div>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" required minlength="4">
                </div>
                <div class="form-group">
                    <label for="surname">Surname:</label>
                    <input type="text" name="surname" id="surname" class="form-control" required minlength="4">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" class="form-control" required minlength="6">
                </div>
                <input type="submit" name="submit" value="Register" class="btn btn-primary mt-1">
                <p>Are you a member? <a href="login.php">Login</a></p>
            </form>
        </div>
    </div>
</body>

</html>