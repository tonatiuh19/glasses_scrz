<?php
/*echo ("<SCRIPT LANGUAGE='JavaScript'>
window.location.href='../';
</SCRIPT>");*/
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Santa Cruz</title>
    <meta charset='utf-8' />

    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"/>
    <script src='release/JeelizNNCwidget.js'></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel='stylesheet' href='css/JeeWidget.css' />

    <script>
      let _isResized = false;
      function test_resizeCanvas() {
        // halves the height:
        let halfHeightPx = Math.round(window.innerHeight / 2).toString() + 'px';

        const domWidget = document.getElementById('JeeWidget');
        domWidget.style.maxHeight = (_isResized) ? 'none' : halfHeightPx;

        _isResized = !_isResized;
      }

      // entry point:
      function main() {
        JEEWIDGET.start({
          sku: 'aliexpress_steampunk_gold_clear',
          searchImageMask: '',
          searchImageColor: 0xeeeeee,
          callbackReady: function(){
            console.log('INFO: JEEWIDGET is ready :)');
          },
          onError: function(errorLabel){ // this function catches errors, so you can display custom integrated messages
            alert('An error happened. errorLabel =' + errorLabel)
            switch(errorLabel) {
              case 'NOFILE':
                // the user send an image, but it is not here
                break;

              case 'WRONGFILEFORMAT':
                // the user upload a file which is not an image or corrupted
                break;

              case 'INVALID_SKU':
                // the provided SKU does not match with a glasses model
                break;

              case 'FALLBACK_UNAVAILABLE':
                // we cannot switch to file upload mode. browser too old?
                break;

              case 'PLACEHOLDER_NULL_WIDTH':
              case 'PLACEHOLDER_NULL_HEIGHT':
                // Something is wrong with the placeholder
                // (element whose id='JeeWidget')
                break;

              case 'FATAL':
              default:
                // a bit error happens:(
                break;
            } // end switch
          } // end onError()
        }) // end JEEWIDGET.start call
      } // end main()
    </script>
  </head>

  <body onload="main()">
    <div class='content'>


      <div class='header'>
        <div class="headerTitle">
          Espejo virtual - Santa Cruz
        </div>
      </div>



      <div id='JeeWidget'>
        <!-- MAIN CANVAS: -->
        <!--
         canvas with id='JeeWidgetCanvas' is the canvas where the VTO widget will be rendered
         it should have CSS attribute position: absolute so that it can be resized without
         changing the total size of the placeholder
        -->
        <canvas id='JeeWidgetCanvas'></canvas>

        <div class='JeeWidgetControls JeeWidgetControlsTop'>
          <!-- ADJUST BUTTON: -->
          <button id='JeeWidgetAdjust'>
            <div class="buttonIcon"><i class="fas fa-arrows-alt"></i></div>Adjust
          </button>

          <!-- RESIZE WIDGET BUTTON: -->
          <button id='buttonResizeCanvas' onclick='test_resizeCanvas();'>
            <div class="buttonIcon"><i class="fas fa-sync-alt"></i></div>Resize widget
          </button>
        </div>

        <!-- CHANGE MODEL BUTTONS: -->
        <div class='JeeWidgetControls' id='JeeWidgetChangeModelContainer'>
          <button onclick="JEEWIDGET.load('rayban_aviator_or_vertFlash')">Model 1</button>
          <button onclick="JEEWIDGET.load('rayban_round_cuivre_pinkBrownDegrade')">Model 2</button>
          <button onclick="JEEWIDGET.load('rayban_wayfarer_denimNoir_bleuMirroir')">Model 3</button>
        </div>

        <!-- BEGIN ADJUST NOTICE -->
        <div id='JeeWidgetAdjustNotice'>
          Move the glasses to adjust them.
          <button class='JeeWidgetBottomButton' id='JeeWidgetAdjustExit'>Quit</button>
        </div>
        <!-- END AJUST NOTICE -->

        <!-- BEGIN LOADING WIDGET (not model) -->
        <div id='JeeWidgetLoading'>
           <div class='JeeWidgetLoadingText'>
              LOADING...
            </div>
        </div>
        <!-- END LOADING -->

      </div>
    </div>
  </body>
</html>
