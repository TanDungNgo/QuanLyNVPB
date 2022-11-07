<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <title>Login</title>
  <style>
    .wrapper {
      margin: 40px 250px;
    }
    body{
      background-color: #33CCFF;
    }
  </style>
</head>

<body>
  <div class="wrapper">
    <div class="card">
      <h4 align="center">Login</h4>
      <div class="card-body">
        <form action="Xulilogin.php" target="_top" enctype="multipart/form-data" method="POST">
          <div class="form-group">
            <input type="email" name="username" class="form-control mb-3" placeholder="Nhap username" />
          </div>
          <div class="form-group">
            <input type="password" name="password" class="form-control mb-3" placeholder="Nhap password" />
          </div>
          <div className="form-group">
            <input type="submit" value="Signin" class="form-control btn btn-primary" />
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>