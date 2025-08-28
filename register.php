<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <style>
        body {
            background-color: white; 
            font-family: 'Segoe UI', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background-color: white; 
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0px 4px 15px rgba(255, 255, 255, 0.1);
            width: 450px;
            text-align: center;
            height: 500px;
        }
        button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            background-color: #5362edff;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s ease;
        }
        button:hover {
            background-color: #333;
        }
    </style>    
</head>
<body>
    <div class="container-fluid d-flex align-items-center justify-content-center full-height">
        <div class="login-container">

            <!-- Title -->
            <div style="margin-bottom:40px; color:blue;">
                <h3 class="text-center">📝 Register</h3>
            </div>
            
            <!-- Register Form -->
            <form method="post" action="register.php">
                <input type="text" name="name" class="form-control mb--4" placeholder="Enter Name" required><br>
                <input type="email" name="email" class="form-control mb--4" placeholder="Enter Email" required><br>
                <input type="password" name="password" class="form-control mb-2" placeholder="Enter Password" required><br>
                
                <button type="submit">Register</button>

                <div class="mt-2 text-center">
                    <a href="index1.php">Already have an account?</a>
                </div>
            </form>

        </div>
    </div>

    <!-- Disable back/forward navigation -->
    <script>
        history.pushState(null, null, location.href);
        window.onpopstate = function () {
            history.pushState(null, null, location.href);
        };
    </script>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Validate name: only letters and spaces allowed
        if (!preg_match("/^[a-zA-Z ]+$/", $name)) {
            echo "<div class='alert alert-danger'>Name must contain only letters and spaces.</div>";
            exit;
        }

        // Validate password length
        if (strlen($password) < 10) {
            echo "<div class='alert alert-danger'>Password must be at least 10 characters long.</div>";
            exit;
        }

        // Hash password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Prepare insert query
        $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $hashedPassword);

        if ($stmt->execute()) {
            // Redirect to login page
            header("Location: index.php");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }

    // Prevent caching and force browser to always reload
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
    ?>
</body>
</html>
