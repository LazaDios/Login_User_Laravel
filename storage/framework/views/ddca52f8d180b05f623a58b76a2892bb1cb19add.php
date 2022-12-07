<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis tareas</title>
    <link rel="stylesheet" href="">
    <style>
        #menu{
             width: 99%;
            height: 40px;
            border-bottom: 1px solid rgb(189, 188, 188);
            margin-top: 10px;
            padding: 10px;    
        }
        #menu a{
           text-decoration: none; 
           margin: 5px;
           padding: 0px;
           color: rgb(77, 137, 137);
        }
        #menu a:hover{
           color: rgb(23, 23, 23);
           animation: both;
           border-bottom: 2px solid gray;
        }
        #ele:hover{ padding: 3px;}
        #title1{text-align: center;}
    </style>
</head>

<body>

    <h2 id="title1"> Mis tareas</h2>
    <hr>
    <nav id="menu">
        <a id="ele" href="<?php echo e(route('todos')); ?>"> categorias</a>
        <a id="ele" href="<?php echo e(route('categoria.index')); ?>"> tareas</a>
    </nav>



    <!--Directiva para hacer referencia a esta planilla en cualquier otro documento-->
    <?php echo $__env->yieldContent('content'); ?>

</body>
</html><?php /**PATH C:\Users\ASUS\Desktop\laravel_practica\tareaLaravel\resources\views/app.blade.php ENDPATH**/ ?>