<?php
require_once('../admin/header.php');
require_once('../admin/mob/Mobile_Detect.php');
date_default_timezone_set('America/Mexico_City');
$today = date("Y-m-d H:i:s");
$detect = new Mobile_Detect();
if ($detect->isMobile()){
    $mobile = 1;
}
else {
    $mobile = 0;
}
$sql = "INSERT INTO visitors (section, is_mobile, date)
VALUES ('ResponsabilidadSocial', '$mobile', '$today')";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
   <link rel="stylesheet" href="css/style.css">
    <!-- MAIN -->


    <div class="site-section">
      <div class="container" style="height: 100%;">
        <div class="row">
            <div class="col-sm-12 p-5">
                <p><h1 class="text-center">¡Pongámonos las gafas de Santa Cruz!</h1></p>
                <blockquote class="quote-card">
                    
                    <p>
                    Ante la desigualdad económica y social que vive el mundo cada día la desesperanza aumenta frente a diferentes retos socioeconómicos que vivimos. Pero nosotros tenemos un sueño: <b>mejorar la vida de Millones de personas desde diferentes aspectos (Salud, económico, educativo) a través de la venta de gafas</b> pues al ponernos los lentes de santa cruz, la desigualdad mejora sustancialmente.
Suena retador, lo sabemos, pero comprendemos el problema para atender dicha desigualdad de manera estructural y es por este motivo que invertimos el 10% de nuestra utilidad en diferentes programas sociales.
Ahora es momento de contar quien está detrás de las gafas de Santa Cruz: somos 3 amigos, empleados en 2 multinacionales y nos mueve trabajar por las personas. Es nuestra motivación principal construir este sueño por personas como Daniel quien con tan solo 5 años no tiene manera de asistir a clases o personas como Octavio que han perdido la sonrisa por tantas desilusiones que le ha traído la vida… y podríamos quedarnos escribiendo una lista interminable sobre aquellas vidas que necesitan de Santa Cruz pero lo importante es que logremos permear a todo el mundo sobre nuestro sueño para que nos ayuden a construirlo y alcancemos a través de la venta de gafas, mejorar vidas en cada rincón de Colombia y muy rápido en cada lugar del mundo.
Creemos que la humanidad puede mejorar tanta mezquindad entre pensamientos, orientación política y en general forma de ver la vida. Por eso, te invitamos a ponerte las gafas de Santa Cruz y ver la vida desde estos lentes. 
Muy pronto podrás conocer los proyectos que trabajamos en Santa Cruz, historias con sentido humano.
                    </p>
                
                    <cite>
                    Con Amor,<br>
                    Andrés, Mateo y Tonatiuh
                    </cite>
                </blockquote>
            </div>
        </div>
      </div>
    </div>

    <div class="site-section">
    <div class="album py-5 bg-light">
        <div class="container">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
          <div class="row">
          <div id='collection-component-1614212293319'></div>
      <script type="text/javascript">
      /*<![CDATA[*/
      (function () {
        var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
        if (window.ShopifyBuy) {
          if (window.ShopifyBuy.UI) {
            ShopifyBuyInit();
          } else {
            loadScript();
          }
        } else {
          loadScript();
        }
        function loadScript() {
          var script = document.createElement('script');
          script.async = true;
          script.src = scriptURL;
          (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
          script.onload = ShopifyBuyInit;
        }
        function ShopifyBuyInit() {
          var client = ShopifyBuy.buildClient({
            domain: 'santa-cruz-eyewear.myshopify.com',
            storefrontAccessToken: 'cfd6eae6f87f22474bb4dd773f5c9f68',
          });
          ShopifyBuy.UI.onReady(client).then(function (ui) {
            ui.createComponent('collection', {
              id: '248091312279',
              node: document.getElementById('collection-component-1614212293319'),
              moneyFormat: '%24%7B%7Bamount_with_comma_separator%7D%7D',
              options: {
        "product": {
          "styles": {
            "product": {
              "@media (min-width: 601px)": {
                "max-width": "calc(25% - 20px)",
                "margin-left": "20px",
                "margin-bottom": "50px",
                "width": "calc(25% - 20px)"
              }
            }
          },
          "text": {
            "button": "Soltar en carrito"
          }
        },
        "productSet": {
          "styles": {
            "products": {
              "@media (min-width: 601px)": {
                "margin-left": "-20px"
              }
            }
          }
        },
        "modalProduct": {
          "contents": {
            "img": false,
            "imgWithCarousel": true,
            "button": false,
            "buttonWithQuantity": true
          },
          "styles": {
            "product": {
              "@media (min-width: 601px)": {
                "max-width": "100%",
                "margin-left": "0px",
                "margin-bottom": "0px"
              }
            }
          },
          "text": {
            "button": "Soltar en carrito"
          }
        },
        "option": {},
        "cart": {
          "text": {
            "total": "Subtotal",
            "button": "Checkout"
          }
        },
        "toggle": {}
      },
            });
          });
        }
      })();
      /*]]>*/
      </script>

          </div>
        </div>
      </div>
    </div>



<?php
require_once('../admin/footer.php');
?>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '209754170804570'); 
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=209754170804570&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->