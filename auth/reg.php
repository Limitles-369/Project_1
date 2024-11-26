<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="../asset/CSS/login.css">
<title>Reg</title>
</head>
<body>
  <div class="form-box">
    <form class="form" action="/project_1/api/reg_api.php" method="POST">
      <span class="title">Register Here</span>
      <span class="subtitle">Create a free account with your email.</span>

      <div class="form-container">
        <input type="text" class="input" placeholder="Full Name" name="name" required>
        <input type="email" class="input" placeholder="Email" name="email" required>
        <input type="password" class="input" placeholder="Password" name="password" required>
        <input type="password" class="input" placeholder="Confirm Password" name="confirm_password" required>

      </div>

      <button type="submit">Submit</button>
    </form>
    <div class="form-section">
      <p> Already have an account? <a href="./login.php">Log In</a> </p>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>