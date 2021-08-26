<!DOCTYPE html> 

<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Racer</title>
  <link href="common.css" rel="stylesheet" type="text/css" />
  <script src="https://kit.fontawesome.com/7d5dd4076f.js" crossorigin="anonymous"></script> 
</head> 

<body> 
  <div id="containerStats" >
    <table id="controls">
      <tbody id="tbody">
        <tr style="display:none;">
          <td id="fps" colspan="2"></td>
        </tr>
    
        <tr>
          <th><label for="resolution">Resolution :</label></th>
          <td>
            <select id="resolution" >
              <option value='fine'>Fine (1280x960)</option>
              <option selected value='high'>High (1024x768)</option>
              <option value='medium'>Medium (640x480)</option>
              <option value='low'>Low (480x360)</option>
            </select>
          </td>
        </tr>
        <tr>
          <th><label for="lanes">Lanes :</label></th>
          <td>
            <select id="lanes">
              <option>1</option>
              <option>2</option>
              <option selected>3</option>
              <option>4</option>
            </select>
          </td>
        </tr>
        <tr>
          <th><label for="roadWidth">Road Width (<span id="currentRoadWidth"></span>) :</label></th>
          <td><input id="roadWidth" type='range' min='500' max='3000' title="integer (500-3000)"></td>
        </tr>
        <tr>
          <th><label for="cameraHeight">CameraHeight (<span id="currentCameraHeight"></span>) :</label></th>
          <td><input id="cameraHeight" type='range' min='500' max='5000' title="integer (500-5000)"></td>
        </tr>
        <tr>
          <th><label for="drawDistance">Draw Distance (<span id="currentDrawDistance"></span>) :</label></th>
          <td><input id="drawDistance" type='range' min='100' max='500' title="integer (100-500)"></td>
        </tr>
        <tr>
          <th><label for="fieldOfView">Field of View (<span id="currentFieldOfView"></span>) :</label></th>
          <td><input id="fieldOfView" type='range' min='80' max='140' title="integer (80-140)"></td>
        </tr>
        <tr>
          <th><label for="fogDensity">Fog Density (<span id="currentFogDensity"></span>) :</label></th>
          <td><input id="fogDensity" type='range' min='0' max='50' title="integer (0-50)"></td>
        </tr>
      </tbody>
     
    </table>
  
    <div id='instructions'>
      <p>Use the <b>arrow keys</b> to drive the car.</p>
      <p>Cross the finish line before time runs out.</p>
      <p>Double click for fullscreen.</p>
      <p>Press CONTROL for turbo.</p>
    </div>
  </div>
  

  <!-- <audio id='music'>
    <source src="music/jsracer_soundtrack.ogg">
    <source src="music/lsracer_soundtrack.mp3">
  </audio>
  <span id="mute"></span> -->
  
    <div id="racer">
      

      <canvas id="canvas" >
        Sorry, this example cannot be run because your browser does not support the &lt;canvas&gt; element
      </canvas>

      <div id='gamepad'>
        <div id='gamepad-turbo' class='gamepad-button'><i style="opacity:0.7;color:rgba(126, 252, 0, 0.9);" class="fas fa-rocket fa-2x"></i></div>
        <div id='gamepad-up' class='gamepad-button'><i style="opacity:0.7;color:black;" class="fas fa-angle-double-up fa-2x"></i></div>
        <div id='gamepad-left' class='gamepad-button'><i style="opacity:0.7;" class="fas fa-angle-double-left fa-2x"></i></div>
        <div id='gamepad-right' class='gamepad-button'><i style="opacity:0.7;" class="fas fa-angle-double-right fa-2x"></i></div>
        <div id='gamepad-down' class='gamepad-button'><i style="opacity:0.7;color:black;" class="fas fa-angle-double-down fa-2x"></i></div>
      </div>
    </div>
  
    <div id="hud">
      <span id="speed" class="hud"><span id="speed_value" class="value">0</span> mph</span>
      <span id="current_lap_time" class="hud">Time: <span id="current_lap_time_value" class="value">0.0</span></span> 
      <span id="current_level" class="hud">Level: <span id="current_level_value" class="value">0</span></span> 
      <span id="turbo_left" class="hud">Turbo: <span id="turbo_left_value" class="value">0</span></span> 
      <span id="remaining_time" class="hud">Time: <span id="remaining_time_value" class="value">0.0</span></span> 
      <span id="last_lap_time" class="hud">Last Lap: <span id="last_lap_time_value" class="value">0.0</span></span>
      <span id="fast_lap_time" class="hud">Fastest Lap: <span id="fast_lap_time_value" class="value">0.0</span></span>
    </div>

    <?php
    function isMobileDevice() {
      return preg_match("/(android|webos|avantgo|iphone|ipad|ipod|blackberry|iemobile|bolt|boost|cricket|docomo|fone|hiptop|mini|opera mini|kitkat|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
    }
    if(isMobileDevice()){?>
      <script>
      document.getElementById("controls").style.display = "none";
      document.getElementById("containerStats").style.display = "none";
      document.getElementById("instructions").style.display = "none";
      document.getElementById("racer").style.height = "94%";
    </script>
    <?php
    }
    else { ?>
      <script>
        document.getElementById("gamepad").style.display = "none";
      </script>
    <?php }
    ?>
    
  <script src="stats.js"></script>
  <script src="common.js"></script>
  <script src="racer.js"></script>
  <script>
    racer(1); // initiate the game
  </script>


    
</body> 
</html>
