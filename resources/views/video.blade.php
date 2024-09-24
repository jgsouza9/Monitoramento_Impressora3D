<html>
 <head>
  <title>Hawkin - Monitorar</title>

  @vite('resources/css/cameraPage.css')
 </head>
 <body>
  <div class="container">
   <div class="video-container">
    <img src= "{{ $cameraUrl }}" alt="Feed da Câmera" height="600" width="900"/>
   </div>
   <div class="timer-container">
    <div class="timer">06:23:05</div>
    <button class="stop-button">Parar</button>
   </div>
  </div>
 </body>
</html>