
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - Online Exam Portal</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #f0f8ff, #e6f7ff);
      color: #333;
    }
    .hero {
      background: linear-gradient(135deg, #007bff, #00c6ff);
      color: white;
      padding: 100px 20px;
      border-radius: 15px;
      text-align: center;
      margin-bottom: 50px;
      box-shadow: 0px 8px 20px rgba(0,0,0,0.1);
    }
    .hero h1 {
      font-size: 3rem;
      font-weight: bold;
    }
    .hero p {
      font-size: 1.2rem;
      margin-top: 15px;
    }
    .card {
      border: none;
      border-radius: 15px;
      box-shadow: 0px 6px 15px rgba(0,0,0,0.1);
      transition: transform 0.3s;
    }
    .card:hover {
      transform: translateY(-10px);
    }
    .icon {
      font-size: 40px;
      color: #007bff;
      margin-bottom: 15px;
    }
    footer {
      margin-top: 50px;
      padding: 20px 0;
      background: #007bff;
      color: white;
      text-align: center;
      border-radius: 15px 15px 0 0;
    }
  </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>

  <!-- Hero Section -->
  <div class="container">
    <div class="hero">
      <h1>About Our Online Exam Portal</h1>
      <p>Your smart, secure, and simple way to take exams anytime, anywhere.</p>
    </div>
  </div>

  <!-- Features Section -->
  <div class="container">
    <div class="row text-center g-4">
      <div class="col-md-4">
        <div class="card p-4">
          <div class="icon"><i class="bi bi-laptop"></i></div>
          <h4>Easy Access</h4>
          <p>Students can attempt exams online from any device with a clean and user-friendly interface.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card p-4">
          <div class="icon"><i class="bi bi-graph-up-arrow"></i></div>
          <h4>Instant Results</h4>
          <p>Automatic evaluation provides instant scoring and detailed feedback for better learning.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card p-4">
          <div class="icon"><i class="bi bi-shield-lock"></i></div>
          <h4>Secure & Reliable</h4>
          <p>Our system ensures exam integrity with secure login and monitored sessions.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Why Choose Us -->
  <div class="container mt-5">
    <h2 class="text-center mb-4">Why Choose Our Portal?</h2>
    <ul class="list-group list-group-flush shadow-sm">
      <li class="list-group-item">✔️ Flexible exam scheduling and accessibility</li>
      <li class="list-group-item">✔️ Teachers can create, edit, and manage exams with ease</li>
      <li class="list-group-item">✔️ Detailed performance analysis and history tracking</li>
      <li class="list-group-item">✔️ Supports multiple subjects and question types</li>
      <li class="list-group-item">✔️ Designed for both schools and competitive exams</li>
    </ul>
  </div>

  <!-- Back Button -->
  <div class="container text-center mt-4">
    <a href="index.php" class="btn btn-lg btn-outline-primary px-4">⬅ Back to Home</a>
  </div>

  <!-- Footer -->
  <footer>
    <p>© 2025 Online Exam Portal | Empowering Smarter Education</p>
  </footer>

</body>
</html>
