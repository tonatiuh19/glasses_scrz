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
VALUES ('QuienesSomos', '$mobile', '$today')";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
    <div class="hero-v1">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mr-auto text-center text-lg-left">
            <span class="d-block subheading"></span>
            <h1 class=" mb-3"></h1>
            <h3 class="mb-5">Santa Cruz fue fundado pensando en las comunidades que mas necesitan ayuda. Ofrecemos gafas formuladas, con diseño de vanguardia a precios justos, promoviendo proyectos sociales.</h3>
            <p class="mb-4"><a href="../tienda/" class="btn btn-primary">Tienda</a></p>



          </div>
          <div class="col-lg-6">
            <div class="embed-responsive embed-responsive-16by9">
              <video class="video" src="../images/daniel.mp4" autoplay loop muted></video>
            </div>
          </div>
          
        </div>
      </div>
    </div>


    <!-- MAIN -->

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
            "button": "Soltar en la bolsa"
          }
        },
        "option": {},
        "cart": {
          "text": {
            "total": "Subtotal",
            "button": "Pagar"
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


    <div class="site-section">
      <div class="container">
        <div class="row mb-3">
          <div class="col-lg-7 text-center mx-auto">
            <h2 class="section-heading">Nuestra propuesta de valor</h2>
            
          </div>
        </div>
        <div class="row">
        <div class="col-lg-12 text-center mx-auto">
          <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0"></li>
              <li data-target="#demo" data-slide-to="1" class="active"></li>
              <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
              <div class="carousel-item">
                <img src="../images/FotosPersonas/carrouselFirst.jpg" width="1020" alt="">
                <div class="carousel-caption d-none d-md-block">
                  <span class="btn btn-dark"><h3>Promover proyectos sociales</h3></span>
                  <p></p>
                </div>
              </div>
              <div class="carousel-item active">
                <img src="../images/FotosPersonas/carrouselsec.jpg" width="1020" alt="">
                <div class="carousel-caption d-none d-md-block">
                <span class="btn btn-dark"><h3>Diseños de vanguardia</h3></span>
                  <p></p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="../images/FotosPersonas/carrouselThird.jpg" width="1020" alt="">
                <div class="carousel-caption d-none d-md-block">
                <span class="btn btn-dark"><h3>Precios justos</h3></span>
                  <p></p>
                </div>
              </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>

            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-7 mx-auto text-center">
            <h2 class="mb-4 section-heading">Estamos convencidos que SI es posible: ayudar, construir, educar, formar e inspirar nuevas generaciones.</h2>       
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