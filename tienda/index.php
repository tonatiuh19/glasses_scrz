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
VALUES ('Tienda', '$mobile', '$today')";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
<link rel="stylesheet" href="css/store.css">
    <main role="main">

<section class="jumbotron text-center">
  <div class="container">
    <h1 class="jumbotron-heading">Mira el mundo a través de nuestros lentes.</h1>
    <p>
      <a href="#" class="btn btn-primary my-2">Responsabilidad Social</a>
      <a href="#" class="btn btn-secondary my-2">Salud Visual</a>
    </p>
  </div>
</section>

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
        id: '262636994711',
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
        id: '262636961943',
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

</main>

<?php
require_once('../admin/footer.php');
?>
<script src="js/store.js"></script>