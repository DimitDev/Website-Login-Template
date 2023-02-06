<?php 

session_start();

	include("connection.php");
	include("functions.php");

  if ($_SERVER["REQUEST_METHOD"] == "POST")
  {
    //IF POST
    $user_name =$_POST['user_name'];
    $user_pass =$_POST['user_pass'];

    if(!empty($user_name) && !empty($user_pass))
    {
      //rand is for a random id , replace before using . input your own fields 
      $user_id = rand(1000000000,9999999999);
      $query = "insert into users (user_id,user_name,user_pass) values ('$user_id','$user_name','$user_pass')";

      mysqli_query($connect,$query);

      header("Location: login.php");
      die;

    }
    else
    {
      echo "Invalid";
    }
    
  }

?>

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <link href="styles.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

<form method="post">
<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center" >

            <h1 class="mb-5">{ DEMO }</h3>
            <h3 class="mb-5">Sign up</h3>

            <div class="form-outline mb-4">
              <input type="user_name" name="user_name" id="user_name" class="form-control form-control-lg" placeholder="Username" />
            </div>

            <div class="form-outline mb-4">
              <input type="password" name="user_pass" id="user_pass" class="form-control form-control-lg" placeholder="Password" />
            </div>

            <div class="d-grid mb-4">
              <button type="submit"  class="btn btn-primary">Register</button>
            </div>

            <div>
              <a href="login.php" style="border-radius: 1rem;">Already have an account?</a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</form>

</body>

</html>