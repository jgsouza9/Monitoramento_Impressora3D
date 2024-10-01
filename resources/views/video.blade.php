<html>
 <head>
  <title>Hawkin - Monitorar</title>

  @vite('resources/css/cameraPage.css')
  @vite('resources/js/timerCamera.js')
 </head>
 <body>
  <div class="container">
   <div class="video-container">
    <img src= "{{ $cameraUrl }}" alt="Feed da Câmera" height="600" width="900"/>
   </div>
   <div class="timer-container">
    <div class="timer" id="timer">10:00</div>
    <button class="stop-button" id="stop-button">Começar</button>
   </div>
  </div>
 </body>
</html>