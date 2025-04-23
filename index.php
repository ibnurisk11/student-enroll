<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login or Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Selamat Datang</h2>
        <p class="text-center">Please login or register to continue</p>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action="index.php" method="POST">
                            <div class="mb-3">
                                <label for="emailOrUsername" class="form-label">Email or Username</label>
                                <input type="text" class="form-control" id="emailOrUsername" name="emailOrUsername" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" name="action" value="login" class="btn btn-primary">Login</button>
                                <!-- <button type="submit" name="action" value="register" class="btn btn-secondary">Register</button> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'login') {
    $emailOrUsername = $_POST['emailOrUsername'];
    $password = md5($_POST['password']); // Encrypt the password using MD5

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'db_school_admission');

    // Check connection
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    // Query to check user credentials
    $stmt = $conn->prepare("SELECT * FROM tb_register WHERE register_email = ? AND register_password = ?");
    $stmt->bind_param("ss", $emailOrUsername, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<script>alert('Login successful!');</script>";
        header("Location: create.php"); // Redirect to create.php
        exit();
        // Redirect or perform further actions
    } else {
        echo "<script>alert('Invalid email or password.');</script>";
    }

    $stmt->close();
    $conn->close();
}
?>

<!-- if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'login') {
    $emailOrUsername = $_POST['emailOrUsername'];
    $password = md5($_POST['password']); // Encrypt the password using MD5

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'student_enroll');

    // Check connection
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    // Query to check user credentials
    $stmt = $conn->prepare("SELECT * FROM tb_register WHERE register_email = ? AND register_password = ?");
    $stmt->bind_param("ss", $emailOrUsername, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<script>alert('Login successful!');</script>";
        header("Location: create.php"); // Redirect to create.php
        exit();
    } else {
        echo "<script>alert('Invalid email or password.');</script>";
    }

    $stmt->close();
    $conn->close();
} -->