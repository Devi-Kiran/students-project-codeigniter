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
      background-color: white;
      border-radius: 10px 50px 20px 50px;
      padding: 60px 50px;
      box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.4);
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="form-container">
          <h2 class="text-center">LOGIN</h2>
          <form method="post">
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
            <a href="/ametecs-students-project/public/signup" class="btn btn-outline-primary btn-block">Signup</a>
          </form>
          <div class="text-danger">
              <?= $validation?>
              <?= $error?>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
