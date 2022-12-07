
<?php $__env->startSection('title', 'Register'); ?>

<?php $__env->startSection('content'); ?>

    <h1 class="text-center pt-5"  >Hola , Registrate!</h1>
    <?php echo csrf_field(); ?>

    <form action="" class="w-50 justify-content-center" method="POST" >
        <div class="form-group">
            <label for="name">NOMBRE: </label>
            <input type="name" name="nombre" class="form-control" id="name">
        </div>
        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p  class="w-50 bg-danger border " ><?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>


        <div class="form-group">
            <label for="email">CORREO ELECTRONICO: </label>
            <input type="email" name="email" class="form-control" id="email">
        </div>

        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p  class="w-50 bg-danger border " ><?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="PassWord , plis">
        </div>

        <div class="form-group">
            <label for="password_c">Password:</label>
            <input type="password" name="password_c" class="form-control" id="password_c" placeholder="Password Confirmation" >
        </div>

        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p  class="w-50 bg-danger border " ><?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <button type="submit" class="btn btn-primary">Submit</button>
        
    </form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layauts.app ', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Login\resources\views/auth/registre.blade.php ENDPATH**/ ?>