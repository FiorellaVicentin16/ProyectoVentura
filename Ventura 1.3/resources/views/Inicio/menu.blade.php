@extends('layouts.app')

@section('content')
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
      
        <div class="top-center"><a href="{{ url('/papel') }}"><img src="../images/BotonPapel.png"></a></div>
        <div class="col-sm-6"><a href="{{ url('/organicos') }}"><img src="../images/Botonorg.png"></a></div><br>
        <div class="col-sm-6"><a href="{{ url('/plasticos') }}"><img src="../images/BotonPlasticos.png"></a></div><br>
        <div class="col-sm-6"><a href="{{ url('/baterias') }}"><img src="../images/BotonBateria.png"></a></div>
        <div class="col-sm-6"><a href="{{ url('/vidrio') }}"><img src="../images/BotonVidrio.png"></a></div>
        
      
        
    
    </center>
  </div>
      
  
@endsection