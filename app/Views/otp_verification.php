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
          <h2 class="text-center">OTP Verification</h2>
      
          <form method="post">
            <div class="form-group">
              <label for="email">OTP</label>
              <input type="text" class="form-control" id="otp" name="otp">      
            </div>
            <button type="submit" class="btn btn-primary btn-block">enter</button>
          </form>
          <div class="text-success">
              <?= $information?>
          </div>
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
