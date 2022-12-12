<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Signup</title>
</head>
<body>


<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;Please sign in</h1>
<form action="Control/Signup.php" method="post">

  <div class="container">
    <br>
    <label for="Uname"><b>Username</b></label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" placeholder="Enter Username" name="Uname" required>
    <br><br>
    <label for="psw"><b>Password</b></label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="password" placeholder="Enter Password" name="psw" required>
    <br><br>
    <label for="psw"><b>Repeat Password</b></label>
    &nbsp;&nbsp;
    <input type="password" placeholder="Enter Password" name="psw" required>
    <br><br>
    <button type="submit">Signup</button>
  </div>
  <div class="container" style="background-color:#f1f1f1">
  </div>
</form>
</body>
</html>