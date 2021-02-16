<?php
require_once('../admin/cnn.php');
//require_once('../admin/visitors.php');
//visitors('EspejoVirtual');
date_default_timezone_set('America/Mexico_City');
if (!($_GET["sku"])) {
  $sku='aliexpress_steampunk_gold_clear';
}else{
  $sku = $_GET["sku"];
  //$sku='aliexpress_steampunk_gold_clear';
}
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

  </head>

  <body onload="main()">
    <div class='content'>



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
            <div class="buttonIcon"><i class="fas fa-arrows-alt"></i></div>Ajustar
          </button>


        <!-- BEGIN ADJUST NOTICE -->
        <div id='JeeWidgetAdjustNotice'>
          Mueve las gafas para ajustarlas
          <button class='JeeWidgetBottomButton' id='JeeWidgetAdjustExit'>Cerrar</button>
        </div>
        <!-- END AJUST NOTICE -->

        <!-- BEGIN LOADING WIDGET (not model) -->
        <div id='JeeWidgetLoading'>
           <div class='JeeWidgetLoadingText'>
              Cargando
            </div>
        </div>
        <!-- END LOADING -->

      </div>
    </div>


    <?php
      echo '<script>
      // entry point:
      function main() {
        JEEWIDGET.start({
          sku: "'.$sku.'",
          searchImageMask: "",
          searchImageColor: 0xeeeeee,
          callbackReady: function(){
            console.log("INFO: JEEWIDGET is ready :)");
          },
          onError: function(errorLabel){ // this function catches errors, so you can display custom integrated messages
            alert("An error happened. errorLabel =" + errorLabel)
            switch(errorLabel) {
              case "NOFILE":
                // the user send an image, but it is not here
                break;

              case "WRONGFILEFORMAT":
                // the user upload a file which is not an image or corrupted
                break;

              case "INVALID_SKU":
                // the provided SKU does not match with a glasses model
                break;

              case "FALLBACK_UNAVAILABLE":
                // we cannot switch to file upload mode. browser too old?
                break;

              case "PLACEHOLDER_NULL_WIDTH":
              case "PLACEHOLDER_NULL_HEIGHT":
               
                break;

              case "FATAL":
              default:
                // a bit error happens:(
                break;
            } // end switch
          } // end onError()
        }) // end JEEWIDGET.start call
      } // end main()
    </script>';
    ?>
    
  </body>
</html>