<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title?></title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    body {
      background-image: url("https://images.rawpixel.com/image_800/czNmcy1wcml2YXRlL3Jhd3BpeGVsX2ltYWdlcy93ZWJzaXRlX2NvbnRlbnQvbHIvcm0yMjItbWluZC0xNl8xLmpwZw.jpg");
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
      font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
    .form-container {
      border-radius: 10px 50px 20px 50px;
      box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.4);
    }
  </style>
</head>
<body class="vh-100 d-flex justify-content-center align-items-center" >
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="form-container bg-white p-5">
          <h2 class="text-center">LOGIN</h2>
          <div class="text-danger">
              <?= $validation?>
              <?= $error?>
          </div>
          <form method="post">
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" id="email" name="email">
              <span>Error messagre</span>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <div class="d-flex align-items-center">
                <input id="password" type="password" class="form-control mr-2" id="password" name="password">
                <i id="showPasswordBtn" class="fas fa-eye" style="cursor: pointer;"></i>
              </div>
              <!-- <input type="password" class="form-control" id="password" name="password"> -->
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
            <a href="/ametecs-students-project/public/signup" class="btn btn-outline-primary btn-block">Signup</a>
          </form>
          
        </div>
      </div>
    </div>
  </div>

  <script>
    const showPasswordBtn = document.getElementById('showPasswordBtn');
    const passwordInput = document.getElementById('password');

    showPasswordBtn.addEventListener('click', () => {
      if (passwordInput.type === "password") {
        passwordInput.type = "text";
        showPasswordBtn.classList.remove("fa-eye");
        showPasswordBtn.classList.add("fa-eye-slash");
      } else {
        passwordInput.type = "password";
        showPasswordBtn.classList.remove("fa-eye-slash");
        showPasswordBtn.classList.add("fa-eye");
      }
    });
  </script>
</body>
</html>
