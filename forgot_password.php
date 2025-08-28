<?php
include 'db.php';

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $result = $conn->query("SELECT * FROM users WHERE email = '$email'");

    if ($result->num_rows === 1) {
        // You can replace this logic with OTP or email reset link in real projects
        $user = $result->fetch_assoc();
        $_SESSION['reset_user'] = $user['id'];
        header("Location: reset_password.php");
        exit;
    } else {
        $message = "Email not found!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body {
            background: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .card {
            padding: 30px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            border-radius: 10px;
        }
    </style>
    <script>
    // Prevent back and forward navigation
    history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.pushState(null, null, location.href);
    };
</script>

</head>
<body>
<div class="card col-md-4">
    <h4 class="text-center mb-3">Forgot Password</h4>
    <?php if ($message): ?>
        <div class="alert alert-danger"><?= $message ?></div>
    <?php endif; ?>
    <form method="POST">
        <input type="email" name="email" class="form-control mb-3" placeholder="Enter registered email" required>
        <button class="btn btn-primary w-100">Submit</button>
        <div class="mt-2 text-center"><a href="index.php">Back to Login</a></div>
    </form>
</div>
</body>
</html>
