<?php $__env->startSection('content'); ?>
 <style>

body, html {height: 100%}
.Img{
    background-image: url('../images/Contacto.png');
    min-height: 100%;
    background-position: center;
    background-size: cover;
}
.espacio{
	margin-top:0px;
}
</style>
   <div class="Img">

      <div class="container Lato pequenio">
	<div class="row">
    	<div class="col-sm-6">
    		 
            <p class="animated bounce Lato mediano naranja">¿Quienes Somos?</p>
   			<p class="nClaro">Somos un grupo de desarrolladores de sitios web, que pertenece al <strong class="naranja">Informatorio</strong></p>
            <p class="Lato chico animated bounceInLeft naranja">Nuestro Facebook es: </p><span class="azul"><i class="fa fa-facebook-official" aria-hidden="true"></i><a class="azul" href="https://www.facebook.com/Ventura/"> Ventura</a></span><br><p class="lato medio animated bounceInLeft naranja">Y nuestro correo es:</p><span class="azul"><i class="fa fa-envelope-o" aria-hidden="true"></i> <a class="azul"href="mailto:learning_group@outlook.com">learning_group@outlook.com</a></span>
        </div>  
    </div>
  </div>

  
  
        


   </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>