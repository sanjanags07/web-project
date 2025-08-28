<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Online Exam</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&family=Roboto&display=swap" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
    body {
      margin: 0;
      padding: 0;
      background: url('images/indexff.jpg') no-repeat center center fixed;
      height: 100vh;
      font-family: 'Roboto', sans-serif;
      background-size: cover;
      background-repeat: no-repeat;
      overflow: hidden;
    }

    .navbar {
      background-color: rgba(255, 255, 255, 0.3);
      backdrop-filter: blur(10px);
    }

    .nav-link {
      color: #000 !important;
      font-weight: 500;
      margin-right: 15px;
    }

    .main-content {
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      height: 70vh;
      flex-direction: column;
      position: relative;
    }

    .main-content h1 {
      font-family: 'Berlin Sans FB Demi', Berlin Sans FB Demi;
      font-size: 4rem;
      margin-right:200px;
      color: #fff;
      text-shadow: 2px 2px 5px #000;
    }

    .emoji {
      font-size: 4rem;
      animation: bounce 2s infinite;
    }

    @keyframes bounce {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-15px); }
    }

    .navbar-brand img {
      height: 40px;
    }
    .navbar {
      background-color: #ffffffff;
    }
    .navbar-brand{
        font-family: 'Berlin Sans FB Demi', Berlin Sans FB Demie;
    }

    .main-content {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 50px 20px;
    }
    .main-content img {
        width: 300px;
        margin-top: 20px;
        animation: float 3s ease-in-out infinite;
    }
    .glow-button {
        animation: glow 1.5s infinite alternate;
    }
    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-15px); }
    }

    #chat-icon {
      position: fixed;
      bottom: 20px;
      right: 20px;
      font-size: 40px;
      cursor: pointer;
    }

    #chat-box {
      display: none;
      position: fixed;
      bottom: 80px;
      right: 20px;
      width: 300px;
      background: #f1f1f1;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
    }

    .chat-header {
      background: #007bff;
      color: white;
      padding: 10px;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
    }

    .chat-body {
      padding: 10px;
      height: 150px;
      overflow-y: auto;
    }

    .footer {
      position: absolute;
      bottom: -140px;
      width: 100%;
      margin-right: 155px;
      text-align: center;
      color: #fff;
      font-size: 14px;
    }

    h1 {
      animation: fadeInUp 2s ease-in-out;
    }

    @keyframes fadeInUp {
      0% {
        opacity: 0;
        transform: translateY(20px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .btn-primary {
      background-color: teal;
      border-color: teal;
    }

    .btn-primary:hover {
      background-color: #006d6d;
      border-color: #006d6d;
    }

    html {
      scroll-behavior: smooth;
    }

    /* ===== Professional Blue & White Theme ===== */
    body {
      background: linear-gradient(135deg, #ffffff, #e6f0ff);
      font-family: 'Roboto', sans-serif;
      overflow-x: hidden;
      position: relative;
    }

    /* Add abstract wave shapes */
    body::before, body::after {
      content: "";
      position: absolute;
      left: 0;
      width: 100%;
      height: 250px;
      background-repeat: no-repeat;
      background-size: cover;
      z-index: -1;
    }

    /* Top wave */
    body::before {
      top: 0;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 320'%3E%3Cpath fill='%23007bff' fill-opacity='0.15' d='M0,224L60,197.3C120,171,240,117,360,117.3C480,117,600,171,720,197.3C840,224,960,224,1080,202.7C1200,181,1320,139,1380,117.3L1440,96L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z'%3E%3C/path%3E%3C/svg%3E");
    }

    /* Bottom wave */
    body::after {
      bottom: 0;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 320'%3E%3Cpath fill='%23007bff' fill-opacity='0.2' d='M0,160L60,149.3C120,139,240,117,360,128C480,139,600,181,720,181.3C840,181,960,139,1080,117.3C1200,96,1320,96,1380,96L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z'%3E%3C/path%3E%3C/svg%3E");
    }

    /* Navbar */
    .navbar {
      background: #ffffff !important;
      box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    }

    /* Headings */
    h1, h4 {
      color: #003366;
      text-shadow: none;
    }

    /* Buttons */
    .btn-primary {
      background: #007bff;
      border: none;
      transition: 0.3s ease;
    }

    .btn-primary:hover {
      background: #0056b3;
    }

    /* Footer */
    .footer {
      background: #003366;
      color: #fff;
      padding: 15px 0;
      position: relative;
      bottom: 0;
      width: 100%;
      font-size: 14px;
      text-align: center;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container-fluid">
      <a  class="navbar-brand fw-bold text-dark" href="index.php"> 
        <img src="images/index-logo.jpg" style="margin-left:15px;" alt="Logo">  Master The Minute
      </a>
      <div class="ms-auto">
        <a href="index1.php" class="nav-link d-inline">Login</a>
        <a href="register.php" class="nav-link d-inline">Sign Up</a>
        <a href="about.php" class="btn btn-primary">About</a>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="main-content">
    <h1 id="typing-text" style="letter-spacing: 3px;"></h1>
    <script>
      const text = "🖰 ONLINE\u2002EXAM\u2002PORTAL";
      let i = 0;
      function typeText() {
          if (i < text.length) {
              document.getElementById("typing-text").innerHTML += text.charAt(i);
              i++;
              setTimeout(typeText, 100);
          }
      }
      typeText();
      function openChat() {
        var box = document.getElementById("chat-box");
        box.style.display = box.style.display === "none" ? "block" : "none";
      }
    </script>
    <div  style="margin-right: 155px; font-family:'Berlin Sans FB Demi';">
      <h4> Test with Confidence. Anytime. Anywhere</h4>
    </div>
  </div>

  <!-- Chatbot Icon -->
  <div id="chat-icon" onclick="openChat()">🤖</div>
  <div id="chat-box">
    <div class="chat-header">ExamBot</div>
    <div class="chat-body">
      <p><strong>Bot:</strong> Hello! Need help?</p>
    </div>
    <input type="text" id="user-input" placeholder="Type a message..." />
  </div>

  <!-- Footer -->
  <div class="footer">
    &copy; 2025 Online Exam Portal | Empowering Smarter Education
  </div>

</body>
</html>
