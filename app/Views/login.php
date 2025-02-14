<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  <title>Signin Template · Bootstrap v5.0</title>

  <link rel="canonical" href="./css/signin.css">
  <!-- Bootstrap core CSS -->
  <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>

  <!-- Custom styles for this template -->
  <link href="./css/signin.css" rel="stylesheet">
</head>

<body class="text-start">
  <main class="form-signin">
    <form method="post" id="form">
    <?php echo csrf_field(); ?>
      <div id="grupo1" class="grupo visible">
        <img class="mb-4" src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72"
          height="57">
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
        <div class="form-floating">
          <input name="email" type="text" class="form-control" id="email" placeholder="name@example.com" >
          <label>Email address</label>
        </div>
        <div class="checkbox mb-3">
          <label>
            <input name="remember-me" type="checkbox" value="remember-me">Remember me
          </label>
        </div>
        <div id="fakeButton" class="w-100 btn btn-lg btn-primary">Next</div>
        <p class="mt-5 mb-3 text-muted">&copy; 2017–2024</p>
      </div>
      <div id="grupo2" class="grupo hidden">
        <img class="mb-4" src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72"
          height="57">
        <h1 class="h3 mb-3 fw-normal">email@dominio.com</h1>
        <div class="form-floating">
          <input name="senha" type="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label>Password</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017–2024</p>
      </div>
    </form>
  </main>
<script src="./js/script.js"></script>
</body>
</html>