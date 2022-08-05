<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-css/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-css/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="css/style.css">
    <title>Smart-Blogger</title>
</head>
<body>
    <!-----Nav Bar------->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark ">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)">Smart-Blogger</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Tech News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Politics</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Business</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Search">
        <button class="btn btn-primary" type="button">Search</button>
      </form>
    </div>
  </div>
</nav>
<!----HEADER TEXT SECTION----->
<div class="text-section">
    <h1>Welcome To Smart Blogger</h1>
    <p>The home of real news</p>
</div>
<div class="forms-section">
 <div class="form">
    <form action="includes/signup.inc.php" method="post">
        <h2>Signup Here</h2>
        <label for="username">Username</label>
        <input type="text" name="username"><br><br>

        <label for="username">Email</label>
        <input type="text" name="email"><br><br>

        <label for="username">Password</label>
        <input type="text" name="password"><br><br>

        <label for="username">Confirm Password</label>
        <input type="text" name="password-confirm"><br><br>

        <button type ="submit" name="submit">Submit</button>
    </form>
</div>
<div class="form">
<form action="" method="post">
        <h2>Login Here</h2>
        <label for="username">Username</label>
        <input type="text"><br><br>


        <label for="username">Password</label>
        <input type="text"><br><br>


        <button>Submit</button>
    </form>
</div>
</div>
</body>
</html>