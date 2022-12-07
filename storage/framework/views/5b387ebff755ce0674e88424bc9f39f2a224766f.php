
<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('content'); ?>

    <div class="container mx-2 p-3 bg-ligth border-button">

        <h1 class="text-center pt-5"  >Bienvenido , Abrir Seccion :)</h1>

    </div>


    <form action="" class="w-50" method="POST" >
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" name="email" class="form-control" id="email">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control" id="pwd">
        </div>

        <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p  class="w-50 bg-danger border alert " >ha ocurrido un error, al iniciar seccion!</p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <button type="submit" class="btn btn-primary">Submit</button>
        
    </form>

    

    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layauts.app ', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Login\resources\views/auth/login.blade.php ENDPATH**/ ?>