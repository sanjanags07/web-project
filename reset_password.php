<?php
include 'db.php';
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$message = '';

if (!isset($_SESSION['reset_user'])) {
    header("Location: index1.php");
    exit;
}

$userId = $_SESSION['reset_user'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    if (strlen($_POST['password']) < 10) {
        echo "<div class='alert alert-danger'>Password must be at least 10 characters long.</div>";
        exit;
    }

    $newPass = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $conn->query("UPDATE users SET password = '$newPass' WHERE id = $userId");
    unset($_SESSION['reset_user']);
    $message = "Password updated successfully! <a href='index1.php'>Login now</a>";
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
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
    <h4 class="text-center mb-3">Reset Password</h4>
    <?php if ($message): ?>
        <div class="alert alert-success"><?= $message ?></div>
    <?php else: ?>
        <form method="POST">
            <input type="password" name="password" class="form-control mb-3" placeholder="New Password" required>
            <button class="btn btn-success w-100">Reset Password</button>
        </form>
    
    <?php endif; ?>
</div>
</body>
</html>
