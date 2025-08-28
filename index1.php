<?php 
include 'db.php';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $u = $_POST['username'];
            $p = $_POST['password'];
            $res = $conn->query("SELECT * FROM users WHERE name='$u'");
            if ($res->num_rows === 1) {
                $row = $res->fetch_assoc();
                if (password_verify($p, $row['password'])) {
                    $_SESSION['user'] = $row;
                    if ($row['role'] === 'admin') header('Location:admin/dashboard.php');
                    else header('Location: user/dashboard.php');
                    exit();
                }
            }
            echo "<div class='alert alert-danger text-center mt-3'>❌ Invalid credentials!</div>";
        }

        // header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
        // header("Cache-Control: post-check=0, pre-check=0", false);
        // header("Pragma: no-cache");
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        
body {
    background-color:light white; /* Black background */
    font-family: 'Segoe UI', Tahoma, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* Login Box */
.login-container {
    background-color: #fff; /* White card */
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0px 4px 15px rgba(255, 255, 255, 0.1);
    width: 350px;
    text-align: center;
}

/* Heading */
.login-container h2 {
    color: #000;
    margin-bottom: 20px;
}

/* Input Group */
.input-group {
    margin-bottom: 15px;
}

.input-group input {
    width: 100%;
    padding: 12px;
    border: 1px solid #000;
    border-radius: 8px;
    outline: none;
    font-size: 14px;
    background-color: #fff;
    color: #000;
    transition: all 0.3s ease;
}

.input-group input:focus {
    border-color: #555;
    box-shadow: 0px 0px 8px rgba(0,0,0,0.2);
}

/* Login Button */
button {
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 8px;
    background-color: #5557eaff;
    color: #fff;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s ease;
}

button:hover {
    background-color: #333;
}

/* Links */
.links {
    margin-top: 15px;
  
}

.links a {
    display: block;
    color: black;
    text-decoration: underline;
    font-size: 14px;
    margin: 5px 0;
    transition: 0.3s ease;
}

.links a:hover {
    
     color: #555;
}

    </style>
</head>
<body>
<div class="container-fluid d-flex align-items-center justify-content-center full-height">
    <div class="login-container">
        

    <h2>🔒 Login</h2> 
    <form method="POST">
        <div class="password-wrapper mb-3">
             <input type="text" name="username" class="form-control mb-3" placeholder="Username" required>
        </div>
        <div class="password-wrapper mb-3">
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
        </div>
        <button type="submit">Login</button>
    </form>
    <div class="links">
        <a href="forgot_password.php" >Forgot Password?</a>
        <a href="register.php">New user? Register</a>
    </div>
</div>

    </div>
</div>


</body>
</html>
