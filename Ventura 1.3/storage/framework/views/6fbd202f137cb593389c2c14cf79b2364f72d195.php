<?php $__env->startSection('content'); ?>
 <style>

body, html {height: 100%}

</style>
   <div  class="Img-menu ">
      <div id="sidebar-wrapper">
        <ul class="sidebar-nav" id="sidebar">     
          <li><a><img src="../images/BotónHome.png"></a></li>
          <li><a><img src="../images/Amigos.png"></a></li>
          <li><a><img src="../images/Chat.png"></a></li>
          <li><a><img src="../images/Logros.png"></a></li>
          <li><a><img src="../images/Rancking.png"></a></li>
          
        </ul>
       </div>
      
    <div class="conteiner-responsive ">
      <center>
      
        <div class="top-center"><a href="<?php echo e(url('/papel')); ?>"><img src="../images/BotonPapel.png"></a></div>
        <div class="col-sm-6"><a href="<?php echo e(url('/organicos')); ?>"><img src="../images/Botonorg.png"></a></div><br>
        <div class="col-sm-6"><a href="<?php echo e(url('/plasticos')); ?>"><img src="../images/BotonPlasticos.png"></a></div><br>
        <div class="col-sm-6"><a href="<?php echo e(url('/baterias')); ?>"><img src="../images/BotonBateria.png"></a></div>
        <div class="col-sm-6"><a href="<?php echo e(url('/vidrio')); ?>"><img src="../images/BotonVidrio.png"></a></div>
        
      
        
    
    </center>
  </div>
      
  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>