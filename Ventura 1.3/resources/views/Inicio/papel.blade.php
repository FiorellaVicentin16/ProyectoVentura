@extends('layouts.app')

@section('content')
<style>
body, html {height: 100%}
.fondo {
    background-image: url('../images/Fondo Papel.png');
    min-height: 170%;
    background-position:center;
    background-size:cover;

}

</style>

<div class="Img-Fonde">
<div class="text-center">
<div class="container top-letras">         
 <p class="Lato-Regular naranja pequenio margen-derecho margen-izquierdo espacio-arriba" size=6>
  Los papeles se reciclan en el contenedor de color azul.<br>
El primer paso para el procedimiento de reciclaje consiste en añadir<br> 
   un disolventes químicos para que las fibras del papel se separen.
<br>El segundo paso consiste en una criba de todo aquel material que no es papel.
<br>El tercer paso consiste en centrifugar todo el material, <br>
para que estos se separen por su densidad para dar lugar al<br>
Cuarto paso, que es la flotación donde se elimina la tinta con burbujas de aire.<br>
Toda esta pasta de papel se lava a continuación para eliminar <br>
las pequeñas partículas que pudieran quedar para finalmente blanquear <br> 
el papel con peróxido de hidrógeno o hidrosulfito de sodio.<br>
Los acabados brillos plastificados o encerado papeles de envolver regalos no son apto<br>
 por su baja calidad lo que no permitiría obtener nuevo papel</p></div>
</div>
	<center>
	  
	 <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
	  <div class="boton1"><a><img src="../images/ButtonPapel.png" alt="boton1" /><p class="LatoBlack peque">JUGAR</p></a></div>
  
</button>
</center>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">PREGUNTA</h4>
        <div>
          <div><h5 class="modal-title" id="myModalLabel">Pregunta....</h5></div>
          <div class="radio">
             <label><input type="radio" name="optradio">Option 1</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio">Option 2</label>
          </div>
          <div class="radio disabled">
              <label><input type="radio" name="optradio" disabled>Option 3</label>
          </div>






        </div>
     
    </div>
  </div>
</div>
</div>


<div class="tooltip"></div>

</div>
@endsection