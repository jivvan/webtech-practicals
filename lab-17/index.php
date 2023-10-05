<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body class="container mt-5">
    <h1 class='display-1'>Register Student</h1>
    <br>
    <form class="row g-3" method="post" action="#">
  <div class="col-md-6">
    <label for="name" class="form-label">Name</label>
    <input name="name" type="text" class="form-control">
  </div>
  <div class="col-md-6">
    <label for="roll" class="form-label">Roll No</label>
    <input name="roll" type="number" class="form-control">
  </div>
  <div class="col-12">
    <label for="address" class="form-label">Address</label>
    <input type="text" name="address" class="form-control" placeholder="1234 Main St">
  </div>
  <div class="col-md-4">
    <label for="gender" class="form-label">Gender</label>
    <select name="gender" class="form-select">
      <option value="male">Male</option>
      <option value="female">Female</option>
      <option value="other">Other</option>
    </select>
  </div>
  <div class="col-12 mt-3">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>
<br>
<br>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $name = $_POST['name'];
            $roll = $_POST['roll'];
            $address = $_POST['address'];
            $gender = $_POST['gender'];
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Congratulations!</strong> Student with name '.$name.' created successfully!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
          </div>';
        }
    ?>
</body>
</html>