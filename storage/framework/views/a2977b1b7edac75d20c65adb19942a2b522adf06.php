<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $__env->yieldContent('title'); ?> - Login User</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body class="bg-secondary text-dark" >



    <?php if(auth()->check()): ?>
    <!--Si ya estoy logueado entro aca-->
        <ul class="nav m-2 nav-tabs">
            <li class="nav-item">
               <p class="text-center">Welcome <b> <?php echo e(auth()->user()->name); ?></b></p>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('login.destroy')); ?>">Log Out</a>
            </li>
    </ul>

    <?php else: ?>
    <div class="row container">
            
            <ul class="nav m-2 nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo e(route('login.index')); ?>">Log In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('register.index')); ?>">Register</a>
                    </li>
            </ul>
        </div>
    <?php endif; ?>
    


    <?php echo $__env->yieldContent('content'); ?>


</body>
</html>
<?php /**PATH C:\xampp\htdocs\Login\resources\views/layauts/app.blade.php ENDPATH**/ ?>