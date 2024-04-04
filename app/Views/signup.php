<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title?></title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-image: url("https://images.rawpixel.com/image_800/czNmcy1wcml2YXRlL3Jhd3BpeGVsX2ltYWdlcy93ZWJzaXRlX2NvbnRlbnQvbHIvcm0yMjItbWluZC0xNl8xLmpwZw.jpg");
      background-repeat: no-repeat;
      background-position: center;
      height: 100vh;
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
    .form-container {
      background-color: rgba(255, 255, 255, 0.8);
      border-radius: 10px;
      padding: 60px;
      box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.4);
    }
    .form-section {
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="form-container">
          <h2 class="text-center">SIGNUP</h2>
          <form method="post" action="<?= $_SERVER['PHP_SELF']?>">
            <div class="form-section">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" name="user_name" autocomplete="off">
            </div>
            <div class="form-section">
              <label for="email">Email</label>
              <input type="text" class="form-control" id="email" name="email" autocomplete="off">
            </div>
            <div class="form-section">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-section">
              <label for="phone">Phone</label>
              <input type="tel" class="form-control" id="phone" name="mobile_number" maxlength="10" autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Signup</button>
            <a href="/ametecs-students-project/public" class="btn btn-outline-primary btn-block">Login</a>
          </form>
          <div class="text-danger">
              <?= $validation?>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
