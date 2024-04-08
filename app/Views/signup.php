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
          <h2 class="text-center">SIGNUP</h2>
          <form method="post">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" name="user_name" value="<?= set_value('user_name')?>" autocomplete="off">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" id="email" name="email" value="<?= set_value('email')?>" autocomplete="off">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <div class="d-flex align-items-center">
                <input id="password" type="password" class="form-control mr-2" id="password" name="password" value="<?= set_value('password')?>">
                <i id="showPasswordBtn" class="fas fa-eye" style="cursor: pointer;"></i>
              </div>
            </div>
            <div class="form-group">
              <label for="phone">Phone</label>
              <input type="tel" class="form-control" id="phone" name="mobile_number" value="<?= set_value('mobile_number')?>" maxlength="10" autocomplete="off">
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



































<!-- when it try to signup with alredy existing email in codeigniter 4. it is showing this error.
CodeIgniter\Database\Exceptions\DatabaseException #1062
Duplicate entry 'ka@gmail.com' for key 'email'
SYSTEMPATH\Database\BaseConnection.php at line 647

640                     }
641                 }
642 
643                 // Let others do something with this query.
644                 Events::trigger('DBQuery', $query);
645 
646                 if ($exception !== null) {
  647                     throw new DatabaseException(
    648                         $exception->getMessage(),
    649                         $exception->getCode(),
650                         $exception
651                     );
652                 }
653 
654                 return false;

but i want to show error in frontend like "this user is already existinh" -->
