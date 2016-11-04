<?php $__env->startSection('content'); ?>
<style>
body, html {height: 100%}
.fondo {
    background-image: url('../images/juego.png');
    min-height: 100%;
    background-position:center;
    background-size:cover;

}

</style>

<div class"fondo"></div>


 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>