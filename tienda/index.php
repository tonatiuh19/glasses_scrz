<?php
require_once('../admin/header.php');
?>
<link rel="stylesheet" href="css/store.css">
    <main role="main">

<section class="jumbotron text-center">
  <div class="container">
    <h1 class="jumbotron-heading">Aqui esta la tienda</h1>
    <p class="lead text-muted">Mensaje de compranos.</p>
    <p>
      <a href="#" class="btn btn-primary my-2">Responsabilidad Social</a>
      <a href="#" class="btn btn-secondary my-2">Salud Visual</a>
    </p>
  </div>
</section>

<div class="album py-5 bg-light">
  <div class="container">

    <div class="row">
      <?php
      $sql = "SELECT sku, code_number, marketing_name, price, description, reference, color, design, mercadopago_link, mercadopago_script, active FROM products WHERE active=1";
      $result = $conn->query($sql);
      
      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          $priceOld = $row["price"]+($row["price"]*.30);
          
          $priceNew = $row["price"];
         
          echo '<div class="col-md-4">
            <div class="card mb-4 box-shadow">';
              foreach(glob('img/'.$row["sku"].'/principal/*.{jpg,png}', GLOB_BRACE) as $file) {
                if (preg_match('/(\.jpg|\.jpeg|\.png|\.bmp)$/', $file)) {
                  echo '<img class="card-img-top" src="'.$file.'" alt="Card image cap">';
                }else{
                  echo '<img class="card-img-top" src="https://static.vecteezy.com/system/resources/previews/001/201/154/non_2x/glasses-png.png" alt="Card image cap">';
                }
              }
              
              echo '<div class="card-body">
                <p class="card-text">'.$row["marketing_name"].'</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#e'.$row["sku"].'">Comprar</button>
    
                  </div>
                  <p class="text-muted">$'.$priceNew.' <del class="small">$'.$priceOld.'</del></p>
                </div>
              </div>
            </div>
          </div>';
          $folder_path = 'img/'.$row["sku"].'/principal/';
          if (!file_exists($folder_path)) {
            mkdir($folder_path, 0777, true);
          }

          echo '<div class="modal fade" id="e'.$row["sku"].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
             
              <div class="modal-body">
                <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                              <div class="container-fluid px-sm-1 py-5 mx-auto">
                                <div class="row justify-content-center">
                                    <div class="d-flex">
                                        <div class="card">
                                            <div class="d-flex flex-column thumbnails">';
                                                $x=0;
                                                foreach(glob('img/'.$row["sku"].'/*.{jpg,png}', GLOB_BRACE) as $file) {
                                                  if (preg_match('/(\.jpg|\.jpeg|\.png|\.bmp)$/', $file)) {
                                                    if($x==0){
                                                      echo '<div id="f'.$x.'" class="tb tb-active"> <img class="thumbnail-img fit-image" src="'.$file.'"> </div>';
                                                    }else{
                                                      echo '<div id="f'.$x.'" class="tb"> <img class="thumbnail-img fit-image" src="'.$file.'"> </div>';
                                                    }
                                                  }
                                                  $x++;
                                                }

                                            echo '</div>';
                                            $y=0;
                                            foreach(glob('img/'.$row["sku"].'/*.{jpg,png}', GLOB_BRACE) as $file) {
                                              if (preg_match('/(\.jpg|\.jpeg|\.png|\.bmp)$/', $file)) {
                                                if($y==0){
                                                  echo ' <fieldset id="f'.$y.'1" class="active">
                                                      <div class="product-pic"> <img class="pic0" src="'.$file.'"> </div>
                                                  </fieldset>';
                                                }else{
                                                  echo ' <fieldset id="f'.$y.'1">
                                                <div class="product-pic"> <img class="pic0" src="'.$file.'"> </div>
                                            </fieldset>';
                                                }
                                              }
                                              $y++;
                                            }
                                        
                                        echo '</div>
                                    </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <h1>'.$row["marketing_name"].'</h1>
                              <p><h3 class="text-warning">$'.$row["price"].'</h3>
                              </p>
                              <p>'.$row["description"].'
                                <p><small>Modelo: #'.$row["sku"].'</small></p>  
                              </p>
                              <p>Una vez aprobado tu pago podras completar los campos faltantes, como tu correo a donde enviaremos los detalles de tu pedido, formula etc.</h3>
                              </p>
                              <p><a href="'.$row["mercadopago_link"].'" class="btn btn-warning">Iniciar pedido <i class="fas fa-arrow-alt-circle-right"></i></a></p>
                            </div>
                        
                    </div> 
                </div>
              </div>
            </div>
          </div>
        </div>';
        }
      } else {
        echo "0 results";
      }
      $conn->close();
      ?>

    </div>
  </div>
</div>

</main>

<!-- Modal 
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
     
      <div class="modal-body">
        <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                      <div class="container-fluid px-sm-1 py-5 mx-auto">
                        <div class="row justify-content-center">
                            <div class="d-flex">
                                <div class="card">
                                    <div class="d-flex flex-column thumbnails">
                                        <div id="f1" class="tb tb-active"> <img class="thumbnail-img fit-image" src="https://i.imgur.com/wL1uRBk.jpg"> </div>
                                        <div id="f2" class="tb"> <img class="thumbnail-img fit-image" src="https://i.imgur.com/3NusNP2.jpg"> </div>
                                        <div id="f3" class="tb"> <img class="thumbnail-img fit-image" src="https://i.imgur.com/pXUPOVR.jpg"> </div>
                                        <div id="f4" class="tb"> <img class="thumbnail-img fit-image" src="https://i.imgur.com/xX5Qmsa.jpg"> </div>
                                    </div>
                                    <fieldset id="f11" class="active">
                                        <div class="product-pic"> <img class="pic0" src="https://i.imgur.com/wL1uRBk.jpg"> </div>
                                    </fieldset>
                                    <fieldset id="f21" class="">
                                        <div class="product-pic"> <img class="pic0" src="https://i.imgur.com/3NusNP2.jpg"> </div>
                                    </fieldset>
                                    <fieldset id="f31" class="">
                                        <div class="product-pic"> <img class="pic0" src="https://i.imgur.com/pXUPOVR.jpg"> </div>
                                    </fieldset>
                                    <fieldset id="f41" class="">
                                        <div class="product-pic"> <img class="pic0" src="https://i.imgur.com/xX5Qmsa.jpg"> </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <h1>Nombre</h1>
                      <p><h3 class="text-warning">$20</h3>
                      </p>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
                        <p><small>Modelo: #123456</small></p>  
                      </p>
                      <p><button class="btn btn-warning">Comprar</button></p>
                    </div>
                
            </div> 
        </div>
      </div>
    </div>
  </div>
</div>-->
<?php
require_once('../admin/footer.php');
?>
<script src="js/store.js"></script>