<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>Signin Template · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="sign-in.css" rel="stylesheet">
  </head>
  <body class="d-flex align-items-center py-4 bg-body-tertiary">




<main class="form-signin w-50 m-auto">



  <form method="POST" action="<?php echo e(route('kirim_data_login')); ?>">
  <?php echo csrf_field(); ?>

    <img class="mb-4" src="<?php echo e(asset('assets/img/bootstrap-logo.svg')); ?>" alt="" width="72" height="57">
    <br/>  <?php echo e($errors->first('email')); ?>

    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control py-2 mb-4" name="password" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>


    <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p>
  </form>
</main>
<script src="<?php echo e(asset('assets/js/bootstrap.bundle.min.js')); ?>"></script>

    </body>
</html>
<?php /**PATH C:\xampp8\htdocs\RecoachingLaravel2023-LaravelInventory\resources\views/login_form.blade.php ENDPATH**/ ?>