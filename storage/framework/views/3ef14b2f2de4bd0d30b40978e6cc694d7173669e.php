 <!--pedira la planilla master a utilizar-->

<?php $__env->startSection('content'); ?>
    <div style="width: 45%; padding:20px; margin-top:20px; ">

        <form action="<?php echo e(route('todos-update' , ['id'=> $todo->id])); ?>" method="POST" >
            <?php echo method_field('PATCH'); ?>
            <!--Para que nos deje mandar una directiva debemos mencionar-->
            <?php echo csrf_field(); ?>

            <?php if(session('success')): ?>
            <h6 style="border: 2px solid rgb(4, 236, 4); padding:5px"><?php echo e(session('success')); ?></h6>
            <?php endif; ?>
            <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <h6 style="border: 2px solid rgb(247, 27, 27); padding:5px"><?php echo e($message); ?></h6>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <div>
                <label for="title">Titulo de Tarea: </label>
                <input type="text" name="title" id="title" value="<?php echo e($todo->title); ?>" >
            </div> 
            <hr>
            <button type="submit">Actualizar Tarea</button>
        </form>

       

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\laravel_practica\tareaLaravel\resources\views/tareas/show.blade.php ENDPATH**/ ?>