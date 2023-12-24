<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.css">
  <title>Document</title>
</head>
<body>

  <form action="register.php" method="post">
  <div class="mb-3">
      <label for="">Full Name 
        <input type="text" class="form-control" name="fullname">
      </label>
</div>

<div class="mb-3">
      <label for="">Username 
        <input type="text" class="form-control" name="uname">
      </label>
</div>

<div class="mb-3">
      <label for="">Password 
        <input type="password" class="form-control" name="pass1">
      </label>
</div>

<div class="mb-3">
      <label for="">Confirm Password
        <input type="password" class="form-control" name="pass2">
      </label>
</div>

<div class="mb-3">
          <input type="submit" class="btn btn-success">
      </div>

  </form>
  
</body>
<script src="js/bootstrap.js"></script>
</html>