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
                    <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#a">Seleccionar gafas</button>
    
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

 <!--Modal -->
 <div class="modal fade" id="a" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 parent">
                  <img src="img/COL0012/principal/IMG_3897.jpg">
                </div>
                <div class="col-sm-4">
                  <h4>¿Que tipo de prescripcion necesitas?</h4>
                  <p>
                  <form>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="exampleRadios" id="singleV" onclick="checkboxes()" value="option1">
                      <label class="form-check-label" for="exampleRadios1">
                        Vision normal
                      </label>
                    </div>
                    <div class="form-check"> 
                      <input class="form-check-input" type="radio" name="exampleRadios" id="progressive" onclick="checkboxes()" value="option2">
                      <label class="form-check-label" for="exampleRadios2">
                        Progresivas
                      </label>
                    </div>
                    <div class="form-check disabled">
                      <input class="form-check-input" type="radio" name="exampleRadios" id="prescription" onclick="checkboxes()" value="option3">
                      <label class="form-check-label" for="exampleRadios3">
                        Con prescripcion
                      </label>
                    </div>
                    <div class="form-check disabled">
                      <input class="form-check-input" type="radio" name="exampleRadios" id="read" onclick="checkboxes()" value="option3">
                      <label class="form-check-label" for="exampleRadios3">
                        Para leer
                      </label>
                    </div>
                  </form>
                  </p>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="b" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 parent">
                  <img src="img/COL0012/IMG_3896.jpg">
                </div>
                <div class="col-sm-4">
                  <h4 id="textTitleGlasses"></h4>
                  <p>
                  <form>
                    <p>
                    </p>
                    <p>
                      Con tu pago se incluye lo siguiente:
                    </p>
                    <p>
                      <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          Gafas con material flexible de policarbonato
                          <span class="badge badge-dark badge-pill">$ 20</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          Filtro Blue-light
                          <span class="badge badge-dark badge-pill">$ 0</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          Envio
                          <span class="badge badge-dark badge-pill">$ 0</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center prescriptionLi" id="">
                          Prescripcion
                          <span class="badge badge-dark badge-pill">$ 0</span>
                        </li>
                      </ul>
                    </p>
                    <p>
                      <button type="button" class="btn btn-dark bottomBtn" id="beforeBottom"><i class="fas fa-arrow-circle-left"></i> Atras</button>
                      <button type="submit" class="btn btn-success bottomBtnPurchase" id="purchaseBottom">Siguiente <i class="fas fa-arrow-circle-right"></i></button>
                    </p>
                  </form>
                  </p>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
require_once('../admin/footer.php');
?>
<script src="js/store.js"></script>