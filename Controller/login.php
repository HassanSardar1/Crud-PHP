<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://localhost/project/View/Login.css">
<?php
    $title = 'User Login'; 
    require_once 'path.php';
    require_once $header;
    require_once $conn; 
    
    //If data was submitted via a form POST request, then...
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = strtolower(trim($_POST['username']));
        $password = $_POST['password'];
        $new_password = md5($password.$username);

        $result = $user->getUser($username,$new_password);
        if(!$result){
            echo '<div class="alert alert-danger">Username or Password is incorrect! Please try again. </div>';
        }else{
            $_SESSION['username'] = $username;
            $_SESSION['userid'] = $result['id'];
            header("Location: viewrecords.php");
        }

    }
?>

<h1 class="text-center"><?php echo $title ?> </h1>
<form>

<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTY-z4IAWtQfQbZlNmvYk3Om8ThTB42L-neM2AhkCXYww&s" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form>
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
      <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>

<?php include_once $footer ?>