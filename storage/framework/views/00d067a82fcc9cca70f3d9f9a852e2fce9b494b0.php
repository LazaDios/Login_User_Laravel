 <!--menu de navegacion-->

<?php $__env->startSection('content'); ?>

<div style="width: 45%; padding:20px; margin-top:20px; ">
    <form action="<?php echo e(route('categoria.index')); ?>" method="POST" >
        <!--Para que nos deje mandar una directiva debemos mencionar-->
        <?php echo csrf_field(); ?>

        <?php if(session('success')): ?>
        <h6 style="border: 2px solid rgb(4, 236, 4); padding:5px"><?php echo e(session('success')); ?></h6>
        <?php endif; ?>

        <?php $__errorArgs = ['name'];
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
            <label for="name">Nombre de la Categoria: </label>
            <input type="text" name="name" id="name">
        </div> 
        <hr>
        <div>
            <label for="color">Color de la Categoria: </label>
            <input type="color" name="color" id="color">
        </div> 
        <hr>
        <button type="submit">Crear Nueva Categoria</button>
    </form>

    <!--Para mostrar los elementos-->
   <div class="">
       <?php $__currentLoopData = $categoria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

       <a href="<?php echo e(route('categoria.show' , ['category' => $category->id])); ?>">
        <span style="background-color: <?php echo e($category->color); ?>" >  </span> <?php echo e($category->color); ?>

        </a>
        <br>
        <button>
            
        </button>
           
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </div>
    
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\laravel_practica\tareaLaravel\resources\views/categoria/index.blade.php ENDPATH**/ ?>