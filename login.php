<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link rel="stylesheet" type="" href="style.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>
<body>
<div class="container">
      <div class="login-box">
            <div class="row">
                        <div class="col-md-6 login-left">
                              <h2>Login Here</h2>
                              <form action="validation.php" method="POST">
                                    <div class="form-group">
                                          <label>Username</label>
                                          <input type="text" name="user" class="form-control" required>

                                    </div>
                                    <div class="form-group">
                                          <label>Password</label>
                                          <input type="password" name="password" class="form-control" required>
                                          
                                    </div>
                                    <button type="submit" class="btn btn-primary">Login</button>
                              </form>
                        </div>
                        <div class="col-md-6 login-right">
                              <h2>Register Here</h2>
                              <form action="registr.php" method="POST">
                                    <div class="form-group">
                                          <label>Username</label>
                                          <input type="text" name="user" class="form-control" required>

                                    </div>
                                    <div class="form-group">
                                          <label>Password</label>
                                          <input type="password" name="password" class="form-control" required>
                                          
                                    </div>
                                    <button type="submit" class="btn btn-primary">Register</button>
                              </form>
                        </div>
            </div>
      </div>

</div>
</body>
</html>