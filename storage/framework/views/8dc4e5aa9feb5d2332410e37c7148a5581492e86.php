<!DOCTYPE html>
<html lang="en">
<head>
<!-- CSRF Token -->
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Scripts -->
<script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

  <title>Todo App</title>


</head>
<body>
  <?php echo $__env->yieldContent('content'); ?>
</body>
</html><?php /**PATH C:\todo\resources\views/layouts/app.blade.php ENDPATH**/ ?>