<?php
require_once('../admin/header.php');
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
      <?php
      $sql = "SELECT sku, code_number, marketing_name, price, description, reference, color, design, mercadopago_link, mercadopago_script, mirror, active FROM products WHERE active=1";
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
              
              echo '<div class="card-body text-center">
                <p class="card-text">'.$row["marketing_name"].'</p>
                <p class="text-muted">$'.number_format($priceNew).' <del class="small">$'.number_format($priceOld).'</del></p>
                <div class="d-flex justify-content-between align-items-center">';
                  echo '<button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#a'.$row["sku"].'">Seleccionar gafas</button>';
                  /*echo '<div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#a'.$row["sku"].'">Seleccionar gafas</button>';
                    echo "<a href=\"../espejovirtual/\" \n";
                    echo "                      target=\"popup\" \n";
                    echo "                      class=\"btn btn-sm btn-outline-primary\"\n";
                    echo "                      onclick=\"window.open('../espejovirtual/?sku=".$row["mirror"]."','popup','width=600,height=600,scrollbars=no,resizable=no'); return false;\">\n";
                    echo "                        Abir espejo\n";
                    echo "                    </a>";
                    
                  echo '</div>';*/
                  
                echo '</div>
              </div>
            </div>
          </div>';
          $folder_path = 'img/'.$row["sku"].'/principal/';
          if (!file_exists($folder_path)) {
            mkdir($folder_path, 0777, true);
          }

          echo ' <div class="modal fade" id="a'.$row["sku"].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 parent">';
                            $dir = 'img/'.$row["sku"].'';
                            // Initiate array which will contain the image name
                            $imgs_arr = array();
                            // Check if image directory exists
                            if (file_exists($dir) && is_dir($dir) ) {
                              
                                // Get files from the directory
                                $dir_arr = scandir($dir);
                                $arr_files = array_diff($dir_arr, array('.','..') );
                                foreach ($arr_files as $file) {
                                  //Get the file path
                                  $file_path = $dir."/".$file;
                                  // Get extension
                                  $ext = pathinfo($file_path, PATHINFO_EXTENSION);
                                  if ($ext=="jpg" || $ext=="png" || $ext=="JPG" || $ext=="PNG") {
                                    array_push($imgs_arr, $file);
                                  }
                                  
                                }
                                $count_img_index = count($imgs_arr) - 1;
                                $random_img = $imgs_arr[rand( 0, $count_img_index )];
                            }
                            echo '<img src="'.$dir."/".$random_img.'">';
                            echo '</div>
                            <div class="col-sm-4">
                              <h4><b>¿Que tipo de prescripcion necesitas?</b></h4>
                              <p>
                              <form>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="exampleRadios" id="singleV'.$row["sku"].'" onclick="checkboxes'.$row["sku"].'()" value="option1">
                                  <label class="form-check-label" for="exampleRadios1">
                                    Vision normal
                                  </label>
                                  <p><small>Corrige de un campo de visión.</small></p>
                                </div>
                                <div class="form-check disabled">
                                  <input class="form-check-input" type="radio" name="exampleRadios" id="prescription'.$row["sku"].'" onclick="checkboxes'.$row["sku"].'()" value="option3">
                                  <label class="form-check-label" for="exampleRadios3">
                                    Progresivas
                                  </label>
                                  <p><small>Corrige los campos de visión cercanos, intermedios y lejanos en una lente para que no tengas que cambiar entre varios pares.</small></p>
                                </div>
                                <div class="form-check disabled">
                                  <input class="form-check-input" type="radio" name="exampleRadios" id="read'.$row["sku"].'" onclick="checkboxes'.$row["sku"].'()" value="option3">
                                  <label class="form-check-label" for="exampleRadios3">
                                    Para leer o sin prescripcion
                                  </label>
                                  <p><small>Ofrece un aumento simple para leer o no (no se necesita prescipcion).</small></p>
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
            
            <div class="modal fade" id="bRead'.$row["sku"].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 parent">';
                            $dir2 = 'img/'.$row["sku"].'';
                            // Initiate array which will contain the image name
                            $imgs_arr2 = array();
                            // Check if image directory exists
                            if (file_exists($dir2) && is_dir($dir2) ) {
                              
                                // Get files from the directory
                                $dir_arr2 = scandir($dir2);
                                $arr_files2 = array_diff($dir_arr2, array('.','..') );
                                foreach ($arr_files2 as $file2) {
                                  //Get the file path
                                  $file_path2 = $dir2."/".$file2;
                                  // Get extension
                                  $ext2 = pathinfo($file_path2, PATHINFO_EXTENSION);
                                  if ($ext2=="jpg" || $ext2=="png" || $ext2=="JPG" || $ext2=="PNG") {
                                    array_push($imgs_arr2, $file2);
                                  }
                                  
                                }
                                $count_img_index2 = count($imgs_arr2) - 1;
                                $random_img2 = $imgs_arr2[rand( 0, $count_img_index2 )];
                            }
                            echo '<img src="'.$dir2."/".$random_img2.'">';
                            echo '</div>
                            <div class="col-sm-4">
                              <h4 id="textTitleGlasses'.$row["sku"].'"></h4>
                              <p>
                              <form>
                                <p>
                                </p>
                                <h4>
                                  <b>Selecciona si necesitas aumento:</b>
                                </h4>
                                <p>
                                  <div class="text-center">
                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <input class="form-check-input" type="radio" name="mag" id="magni0'.$row["sku"].'" onclick="radiosMani'.$row["sku"].'()" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                        &nbsp;0.00
                                        </label>
                                      </div>
                                      <div class="form-group col-md-6">
                                        <input class="form-check-input" type="radio" name="mag" id="magni025'.$row["sku"].'" onclick="radiosMani'.$row["sku"].'()" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">
                                          +0.25
                                        </label>
                                      </div>
                                    </div>
                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <input class="form-check-input" type="radio" name="mag" id="magni050'.$row["sku"].'" onclick="radiosMani'.$row["sku"].'()" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">
                                          +0.50
                                        </label>
                                      </div>
                                      <div class="form-group col-md-6">
                                        <input class="form-check-input" type="radio" name="mag" id="magni075'.$row["sku"].'" onclick="radiosMani'.$row["sku"].'()" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">
                                          +0.75
                                        </label>
                                      </div>
                                    </div>
                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <input class="form-check-input" type="radio" name="mag" id="magni1'.$row["sku"].'" onclick="radiosMani'.$row["sku"].'()" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">
                                          +1.00
                                        </label>
                                      </div>
                                      <div class="form-group col-md-6">
                                        <input class="form-check-input" type="radio" name="mag" id="magni125'.$row["sku"].'" onclick="radiosMani'.$row["sku"].'()" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">
                                          +1.25
                                        </label>
                                      </div>
                                    </div>
                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <input class="form-check-input" type="radio" name="mag" id="magni150'.$row["sku"].'" onclick="radiosMani'.$row["sku"].'()" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">
                                          +1.50
                                        </label>
                                      </div>
                                      <div class="form-group col-md-6">
                                        <input class="form-check-input" type="radio" name="mag" id="magni175'.$row["sku"].'" onclick="radiosMani'.$row["sku"].'()" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">
                                          +1.75
                                        </label>
                                      </div>
                                    </div>
                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <input class="form-check-input" type="radio" name="mag" id="magni2'.$row["sku"].'" onclick="radiosMani'.$row["sku"].'()" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">
                                          +2.00
                                        </label>
                                      </div>
                                      <div class="form-group col-md-6">
                                        <input class="form-check-input" type="radio" name="mag" id="magni225'.$row["sku"].'" onclick="radiosMani'.$row["sku"].'()" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">
                                          +2.25
                                        </label>
                                      </div>
                                    </div>
                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <input class="form-check-input" type="radio" name="mag" id="magni250'.$row["sku"].'" onclick="radiosMani'.$row["sku"].'()" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">
                                          +2.50
                                        </label>
                                      </div>
                                      <div class="form-group col-md-6">
                                        <input class="form-check-input" type="radio" name="mag" id="magni275'.$row["sku"].'" onclick="radiosMani'.$row["sku"].'()" value="option1">
                                        <label class="form-check-label" for="exampleRadios1">
                                          +2.75
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                </p>
                                <p>
                                  <button type="button" class="btn btn-dark bottomBtn" id="beforeBottom'.$row["sku"].'"><i class="fas fa-arrow-circle-left"></i> Atras</button>
                                  <button type="button" class="btn btn-success bottomBtnPurchase" id="purchaseBottom'.$row["sku"].'" onclick="btnGoToModalB'.$row["sku"].'()">Siguiente <i class="fas fa-arrow-circle-right"></i></button>
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
            
            <div class="modal fade" id="b'.$row["sku"].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 parent">';
                            $dir3 = 'img/'.$row["sku"].'';
                            // Initiate array which will contain the image name
                            $imgs_arr3 = array();
                            // Check if image directory exists
                            if (file_exists($dir3) && is_dir($dir3) ) {
                              
                                // Get files from the directory
                                $dir_arr3 = scandir($dir3);
                                $arr_files3 = array_diff($dir_arr3, array('.','..') );
                                foreach ($arr_files3 as $file3) {
                                  //Get the file path
                                  $file_path3 = $dir3."/".$file3;
                                  // Get extension
                                  $ext3 = pathinfo($file_path3, PATHINFO_EXTENSION);
                                  if ($ext3=="jpg" || $ext3=="png" || $ext3=="JPG" || $ext3=="PNG") {
                                    array_push($imgs_arr3, $file3);
                                  }
                                  
                                }
                                $count_img_index3 = count($imgs_arr3) - 1;
                                $random_img3 = $imgs_arr3[rand( 0, $count_img_index3 )];
                            }
                            echo '<img src="'.$dir3."/".$random_img3.'">';
                            echo '</div>
                            <div class="col-sm-4">
                              <h4 id="textTitleGlasses'.$row["sku"].'"></h4>
                              <p>
                              <form>
                                <p>
                                </p>
                                <h4>
                                  <b>Con tu pago se incluye lo siguiente:</b>
                                </h4>
                                <p>
                                  <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                      Gafas con material flexible de policarbonato
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                      Filtro Blue-light
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                      Envio incluido
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                      Funda y tela para limpiar tus gafas
                                    </li>
                                    <div id="prescriptionLi'.$row["sku"].'">
                                      <li class="list-group-item d-flex justify-content-between align-items-center" >
                                        Prescripcion
                                      </li>
                                    </div>
                                  </ul>
                                </p>
                                <p>
                                  <button type="button" class="btn btn-dark bottomBtn" id="beforeBottom'.$row["sku"].'"><i class="fas fa-arrow-circle-left"></i> Atras</button>
                                  <button type="button" class="btn btn-success bottomBtnPurchase" id="purchaseBottom'.$row["sku"].'" onclick="btnCheckout'.$row["sku"].'()">Siguiente <i class="fas fa-arrow-circle-right"></i></button>
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
            
            <div class="modal fade" id="c'.$row["sku"].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 parent">';
                            $dir4 = 'img/'.$row["sku"].'';
                            // Initiate array which will contain the image name
                            $imgs_arr4 = array();
                            // Check if image directory exists
                            if (file_exists($dir4) && is_dir($dir4) ) {
                              
                                // Get files from the directory
                                $dir_arr4 = scandir($dir4);
                                $arr_files4 = array_diff($dir_arr4, array('.','..') );
                                foreach ($arr_files4 as $file4) {
                                  //Get the file path
                                  $file_path4 = $dir4."/".$file4;
                                  // Get extension
                                  $ext4 = pathinfo($file_path4, PATHINFO_EXTENSION);
                                  if ($ext4=="jpg" || $ext4=="png" || $ext4=="JPG" || $ext4=="PNG") {
                                    array_push($imgs_arr4, $file4);
                                  }
                                  
                                }
                                $count_img_index4 = count($imgs_arr4) - 1;
                                $random_img4 = $imgs_arr4[rand( 0, $count_img_index4 )];
                            }
                            echo '<img src="'.$dir4."/".$random_img4.'">';
                            echo '</div>
                            <div class="col-sm-4">
                              <h4 id="textTitleGlasses'.$row["sku"].'"></h4>
                              <p>
                              <form action="loading/" method="post" name="buy'.$row["sku"].'">
                                <p>
                                </p>
                                <h4>
                                  <b>Finalizar compra:</b>
                                </h4>
                                <p>
                                  <div class="alert alert-danger p-1 text-center" id="alertForm'.$row["sku"].'" role="alert">
                                    Por favor llena los campos faltantes
                                  </div>
                                  <div class="alert alert-danger p-1 text-center" id="alertEmail'.$row["sku"].'" role="alert">
                                    El correo es invalido
                                  </div>
                                  <div class="form-group">
                                    <input type="email" class="form-control" id="mail'.$row["sku"].'" name="mail" aria-describedby="emailHelp" placeholder="Escribe tu correo" required>
                                    <small id="emailHelp" class="form-text text-muted">Aqui enviaremos tu guia.</small>
                                  </div>
                                  <hr>
                                  <label for="exampleInputPassword1">Captura tu domicilio:</label>
                                  <div class="form-group">
                                    <input type="text" class="form-control" name="street" placeholder="Calle" id="street'.$row["sku"].'" required>
                                    <input type="hidden" name="idProduct" value="'.$row["sku"].'">
                                    <input type="hidden" name="link" value="'.$row["mercadopago_link"].'">
                                    <input type="hidden" name="prescri" id="myPrescri'.$row["sku"].'" value="0">
                                    <input type="hidden" name="magni" id="myMagni'.$row["sku"].'" value="0">
                                    <input type="hidden" name="typeOf" id="typeOf'.$row["sku"].'" value="0">
                                  </div>
                                  <div class="form-row">
                                    <div class="col">
                                      <select class="form-control" name="city" id="city'.$row["sku"].'" required>
                                        <option value="" selected>Ciudad</option>
                                        <option value="Arauca">Arauca</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Barranquilla">Barranquilla</option>
                                        <option value="Bogotá">Bogotá</option>
                                        <option value="Bucaramanga">Bucaramanga</option>
                                        <option value="Cali">Cali</option>
                                        <option value="Cartagena">Cartagena</option>
                                        <option value="Cúcuta">Cúcuta</option>
                                        <option value="Florencia">Florencia</option>
                                        <option value="Ibagué">Ibagué</option>
                                        <option value="Leticia">Leticia</option>
                                        <option value="Manizales">Manizales</option>
                                        <option value="Medellín">Medellín</option>
                                        <option value="Mitú">Mitú</option>
                                        <option value="Mocoa">Mocoa</option>
                                        <option value="Montería">Montería</option>
                                        <option value="Neiva">Neiva</option>
                                        <option value="Pasto">Pasto</option>
                                        <option value="Pereira">Pereira</option>
                                        <option value="Popayán">Popayán</option>
                                        <option value="Puerto Carreño">Puerto Carreño</option>
                                        <option value="Puerto Inírida">Puerto Inírida</option>
                                        <option value="Quibdó">Quibdó</option>
                                        <option value="Riohacha">Riohacha</option>
                                        <option value="San Andrés">San Andrés</option>
                                        <option value="San José del Guaviare">San José del Guaviare</option>
                                        <option value="Santa Marta">Santa Marta</option>
                                        <option value="Sincelejo">Sincelejo</option>
                                        <option value="Tunja">Tunja</option>
                                        <option value="Valledupar">Valledupar</option>
                                        <option value="Villavicencio">Villavicencio</option>
                                        <option value="Yopal">Yopal</option>
                                      </select>
                                    </div>
                                    <div class="col">
                                      <input type="text" class="form-control" name="cp" id="cp'.$row["sku"].'" placeholder="Codigo Postal" required>
                                    </div>
                                  </div>
                                  <p>
                                    <div class="custom-file" id="prescFile'.$row["sku"].'">
                                      <input type="file" class="custom-file-input" name="prescription">
                                      <label class="custom-file-label" for="customFile">Adjunta aqui tu prescripcion</label>
                                    </div>
                                  </p>
                                </p>
                                <p>
                                  <button type="button" class="btn btn-dark bottomBtn" id="beforeBottomPurchase'.$row["sku"].'"><i class="fas fa-arrow-circle-left"></i> Atras</button>
                                  <button type="button" class="btn btn-success bottomBtnPurchase" onclick="formPayment'.$row["sku"].'()">Pagar <i class="fas fa-arrow-circle-right"></i></button>
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
            <script>
            $("#alertForm'.$row["sku"].'").hide();
            $("#alertEmail'.$row["sku"].'").hide();
            const checkboxes'.$row["sku"].' = () =>{
                if (document.getElementById("singleV'.$row["sku"].'").checked) {
                    $("#a'.$row["sku"].'").modal("hide"); 
                    document.getElementById("prescription'.$row["sku"].'").innerHTML = "Vision Normal";
                    document.getElementById("prescFile'.$row["sku"].'").setAttribute("required", "");
                    $("#prescriptionLi'.$row["sku"].'").show();
                    $("#prescFile'.$row["sku"].'").show();
                    document.getElementById("typeOf'.$row["sku"].'").value = "1";
                    $("#b'.$row["sku"].'").modal("show");  
                }else if(document.getElementById("prescription'.$row["sku"].'").checked){
                    $("#a'.$row["sku"].'").modal("hide"); 
                    document.getElementById("prescription'.$row["sku"].'").innerHTML = "Con prescripcion";
                    document.getElementById("prescFile'.$row["sku"].'").setAttribute("required", "");
                    $("#prescriptionLi'.$row["sku"].'").show();
                    $("#prescFile'.$row["sku"].'").show();
                    document.getElementById("typeOf'.$row["sku"].'").value = "2";
                    $("#b'.$row["sku"].'").modal("show"); 
                }else if(document.getElementById("read'.$row["sku"].'").checked){
                    $("#a'.$row["sku"].'").modal("hide"); 
                    document.getElementById("read'.$row["sku"].'").innerHTML = "Para Leer";
                    $("#prescriptionLi'.$row["sku"].'").hide();
                    document.getElementById("typeOf'.$row["sku"].'").value = "3";
                    $("#bRead'.$row["sku"].'").modal("show"); 
                }
            }
            
            const radiosMani'.$row["sku"].' = () =>{
                if (document.getElementById("magni0'.$row["sku"].'").checked) {
                    document.getElementById("myMagni'.$row["sku"].'").value = "0";
                }else if(document.getElementById("magni025'.$row["sku"].'").checked){
                    document.getElementById("myMagni'.$row["sku"].'").value = "0.25";
                }else if(document.getElementById("magni050'.$row["sku"].'").checked){
                    document.getElementById("myMagni'.$row["sku"].'").value = "0.50";
                }else if(document.getElementById("magni075'.$row["sku"].'").checked){
                    document.getElementById("myMagni'.$row["sku"].'").value = "0.75";
                }else if(document.getElementById("magni1'.$row["sku"].'").checked){
                    document.getElementById("myMagni'.$row["sku"].'").value = "1.00";
                }else if(document.getElementById("magni125'.$row["sku"].'").checked){
                    document.getElementById("myMagni'.$row["sku"].'").value = "1.25";
                }else if(document.getElementById("magni150'.$row["sku"].'").checked){
                    document.getElementById("myMagni'.$row["sku"].'").value = "1.50";
                }else if(document.getElementById("magni175'.$row["sku"].'").checked){
                    document.getElementById("myMagni'.$row["sku"].'").value = "1.75";
                }else if(document.getElementById("magni2'.$row["sku"].'").checked){
                    document.getElementById("myMagni'.$row["sku"].'").value = "2.00";
                }else if(document.getElementById("magni225'.$row["sku"].'").checked){
                    document.getElementById("myMagni'.$row["sku"].'").value = "2.25";
                }else if(document.getElementById("magni250'.$row["sku"].'").checked){
                    document.getElementById("myMagni'.$row["sku"].'").value = "2.50";
                }else if(document.getElementById("magni275'.$row["sku"].'").checked){
                    document.getElementById("myMagni'.$row["sku"].'").value = "2.75";
                }
            }
            
            const btnCheckout'.$row["sku"].' = () =>{
                $("#b'.$row["sku"].'").modal("hide"); 
                $("#c'.$row["sku"].'").modal("show");
            }
            
            const btnGoToModalB'.$row["sku"].' = () =>{
                $("#bRead'.$row["sku"].'").modal("hide"); 
                $("#b'.$row["sku"].'").modal("show");
            }
            
            const formPayment'.$row["sku"].' = () => {
                $("#alertForm'.$row["sku"].'").hide();
                $("#alertEmail'.$row["sku"].'").hide();
                const email = document.getElementById("mail'.$row["sku"].'").value;
                const street = document.getElementById("street'.$row["sku"].'").value;
                const city = document.getElementById("city'.$row["sku"].'").value;
                const cp = document.getElementById("cp'.$row["sku"].'").value;
                let ready = false;
                
                if(email === ""){
                    document.getElementById("mail'.$row["sku"].'").style.borderColor = "red";
                    $("#alertForm'.$row["sku"].'").show();
                }else if(street === ""){
                    document.getElementById("street'.$row["sku"].'").style.borderColor = "red";
                    $("#alertForm'.$row["sku"].'").show();
                }else if(city === ""){
                    document.getElementById("city'.$row["sku"].'").style.borderColor = "red";
                    $("#alertForm'.$row["sku"].'").show();
                }else if(cp === ""){
                    document.getElementById("cp'.$row["sku"].'").style.borderColor = "red";
                    $("#alertForm'.$row["sku"].'").show();
                }else if(!validateEmail(email)){
                    document.getElementById("mail'.$row["sku"].'").style.borderColor = "red";
                    $("#alertEmail'.$row["sku"].'").show();
                }else{
                    $("#alertForm'.$row["sku"].'").hide();
                    $("#alertEmail'.$row["sku"].'").hide();
                    document.getElementById("mail'.$row["sku"].'").style.borderColor = "green";
                    document.getElementById("street'.$row["sku"].'").style.borderColor = "green";
                    document.getElementById("city'.$row["sku"].'").style.borderColor = "green";
                    document.getElementById("cp'.$row["sku"].'").style.borderColor = "green";
                    ready = true;
                }
                
            
                if(ready){
                    document.buy'.$row["sku"].'.submit();
                }
                
            }
            </script>';

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

 <!--Modal 
 <div class="modal fade" id="a" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 parent">
                  <img src="img/COL0012/principal/IMG_3897.jpg">
                </div>
                <div class="col-sm-4">
                  <h4><b>¿Que tipo de prescripcion necesitas?</b></h4>
                  <p>
                  <form>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="exampleRadios" id="singleV" onclick="checkboxes()" value="option1">
                      <label class="form-check-label" for="exampleRadios1">
                        Vision normal
                      </label>
                      <p><small>Corrige de un campo de visión.</small></p>
                    </div>
                    <div class="form-check disabled">
                      <input class="form-check-input" type="radio" name="exampleRadios" id="prescription" onclick="checkboxes()" value="option3">
                      <label class="form-check-label" for="exampleRadios3">
                        Progresivas
                      </label>
                      <p><small>Corrige los campos de visión cercanos, intermedios y lejanos en una lente para que no tengas que cambiar entre varios pares.</small></p>
                    </div>
                    <div class="form-check disabled">
                      <input class="form-check-input" type="radio" name="exampleRadios" id="read" onclick="checkboxes()" value="option3">
                      <label class="form-check-label" for="exampleRadios3">
                        Para leer o sin prescripcion
                      </label>
                      <p><small>Ofrece un aumento simple para leer o no (no se necesita prescipcion).</small></p>
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

<div class="modal fade" id="bRead" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                    <h4>
                      <b>Selecciona si necesitas aumento:</b>
                    </h4>
                    <p>
                      <div class="text-center">
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <input class="form-check-input" type="radio" name="mag" id="magni0" onclick="radiosMani()" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                            &nbsp;0.00
                            </label>
                          </div>
                          <div class="form-group col-md-6">
                            <input class="form-check-input" type="radio" name="mag" id="magni025" onclick="radiosMani()" value="option1">
                            <label class="form-check-label" for="exampleRadios1">
                              +0.25
                            </label>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <input class="form-check-input" type="radio" name="mag" id="magni050" onclick="radiosMani()" value="option1">
                            <label class="form-check-label" for="exampleRadios1">
                              +0.50
                            </label>
                          </div>
                          <div class="form-group col-md-6">
                            <input class="form-check-input" type="radio" name="mag" id="magni075" onclick="radiosMani()" value="option1">
                            <label class="form-check-label" for="exampleRadios1">
                              +0.75
                            </label>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <input class="form-check-input" type="radio" name="mag" id="magni1" onclick="radiosMani()" value="option1">
                            <label class="form-check-label" for="exampleRadios1">
                              +1.00
                            </label>
                          </div>
                          <div class="form-group col-md-6">
                            <input class="form-check-input" type="radio" name="mag" id="magni125" onclick="radiosMani()" value="option1">
                            <label class="form-check-label" for="exampleRadios1">
                              +1.25
                            </label>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <input class="form-check-input" type="radio" name="mag" id="magni150" onclick="radiosMani()" value="option1">
                            <label class="form-check-label" for="exampleRadios1">
                              +1.50
                            </label>
                          </div>
                          <div class="form-group col-md-6">
                            <input class="form-check-input" type="radio" name="mag" id="magni175" onclick="radiosMani()" value="option1">
                            <label class="form-check-label" for="exampleRadios1">
                              +1.75
                            </label>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <input class="form-check-input" type="radio" name="mag" id="magni2" onclick="radiosMani()" value="option1">
                            <label class="form-check-label" for="exampleRadios1">
                              +2.00
                            </label>
                          </div>
                          <div class="form-group col-md-6">
                            <input class="form-check-input" type="radio" name="mag" id="magni225" onclick="radiosMani()" value="option1">
                            <label class="form-check-label" for="exampleRadios1">
                              +2.25
                            </label>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <input class="form-check-input" type="radio" name="mag" id="magni250" onclick="radiosMani()" value="option1">
                            <label class="form-check-label" for="exampleRadios1">
                              +2.50
                            </label>
                          </div>
                          <div class="form-group col-md-6">
                            <input class="form-check-input" type="radio" name="mag" id="magni275" onclick="radiosMani()" value="option1">
                            <label class="form-check-label" for="exampleRadios1">
                              +2.75
                            </label>
                          </div>
                        </div>
                      </div>
                    </p>
                    <p>
                      <button type="button" class="btn btn-dark bottomBtn" id="beforeBottom"><i class="fas fa-arrow-circle-left"></i> Atras</button>
                      <button type="button" class="btn btn-success bottomBtnPurchase" id="purchaseBottom" onclick="btnGoToModalB()">Siguiente <i class="fas fa-arrow-circle-right"></i></button>
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
                    <h4>
                      <b>Con tu pago se incluye lo siguiente:</b>
                    </h4>
                    <p>
                      <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          Gafas con material flexible de policarbonato
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          Filtro Blue-light
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          Envio incluido
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          Funda y tela para limpiar tus gafas
                        </li>
                        <div id="prescriptionLi">
                          <li class="list-group-item d-flex justify-content-between align-items-center" >
                            Prescripcion
                          </li>
                        </div>
                      </ul>
                    </p>
                    <p>
                      <button type="button" class="btn btn-dark bottomBtn" id="beforeBottom"><i class="fas fa-arrow-circle-left"></i> Atras</button>
                      <button type="button" class="btn btn-success bottomBtnPurchase" id="purchaseBottom" onclick="btnCheckout()">Siguiente <i class="fas fa-arrow-circle-right"></i></button>
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

<div class="modal fade" id="c" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 parent">
                  <img src="img/COL0012/IMG_3897.jpg">
                </div>
                <div class="col-sm-4">
                  <h4 id="textTitleGlasses"></h4>
                  <p>
                  <form action="loading/" method="post" name="buy">
                    <p>
                    </p>
                    <h4>
                      <b>Finalizar compra:</b>
                    </h4>
                    <p>
                      <div class="alert alert-danger p-1 text-center" id="alertForm" role="alert">
                        Por favor llena los campos faltantes
                      </div>
                      <div class="alert alert-danger p-1 text-center" id="alertEmail" role="alert">
                        El correo es invalido
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control" id="mail" name="mail" aria-describedby="emailHelp" placeholder="Escribe tu correo" required>
                        <small id="emailHelp" class="form-text text-muted">Aqui enviaremos tu guia.</small>
                      </div>
                      <hr>
                      <label for="exampleInputPassword1">Captura tu domicilio:</label>
                      <div class="form-group">
                        <input type="text" class="form-control" name="street" placeholder="Calle" id="street" required>
                        <input type="hidden" name="idProduct" value="Calle">
                        <input type="hidden" name="link" value="Calle">
                        <input type="hidden" name="prescri" id="myPrescri" value="0">
                        <input type="hidden" name="magni" id="myMagni" value="0">
                      </div>
                      <div class="form-row">
                        <div class="col">
                          <select class="form-control" name="city" id="city" required>
                            <option value="" selected>Ciudad</option>
                            <option value="Arauca">Arauca</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Barranquilla">Barranquilla</option>
                            <option value="Bogotá">Bogotá</option>
                            <option value="Bucaramanga">Bucaramanga</option>
                            <option value="Cali">Cali</option>
                            <option value="Cartagena">Cartagena</option>
                            <option value="Cúcuta">Cúcuta</option>
                            <option value="Florencia">Florencia</option>
                            <option value="Ibagué">Ibagué</option>
                            <option value="Leticia">Leticia</option>
                            <option value="Manizales">Manizales</option>
                            <option value="Medellín">Medellín</option>
                            <option value="Mitú">Mitú</option>
                            <option value="Mocoa">Mocoa</option>
                            <option value="Montería">Montería</option>
                            <option value="Neiva">Neiva</option>
                            <option value="Pasto">Pasto</option>
                            <option value="Pereira">Pereira</option>
                            <option value="Popayán">Popayán</option>
                            <option value="Puerto Carreño">Puerto Carreño</option>
                            <option value="Puerto Inírida">Puerto Inírida</option>
                            <option value="Quibdó">Quibdó</option>
                            <option value="Riohacha">Riohacha</option>
                            <option value="San Andrés">San Andrés</option>
                            <option value="San José del Guaviare">San José del Guaviare</option>
                            <option value="Santa Marta">Santa Marta</option>
                            <option value="Sincelejo">Sincelejo</option>
                            <option value="Tunja">Tunja</option>
                            <option value="Valledupar">Valledupar</option>
                            <option value="Villavicencio">Villavicencio</option>
                            <option value="Yopal">Yopal</option>
                          </select>
                        </div>
                        <div class="col">
                          <input type="text" class="form-control" name="cp" id="cp" placeholder="Codigo Postal" required>
                        </div>
                      </div>
                      <p>
                        <div class="custom-file" id="prescFile">
                          <input type="file" class="custom-file-input" name="prescription">
                          <label class="custom-file-label" for="customFile">Adjunta aqui tu prescripcion</label>
                        </div>
                      </p>
                    </p>
                    <p>
                      <button type="button" class="btn btn-dark bottomBtn" id="beforeBottomPurchase"><i class="fas fa-arrow-circle-left"></i> Atras</button>
                      <button type="button" class="btn btn-success bottomBtnPurchase" onclick="formPayment()">Pagar <i class="fas fa-arrow-circle-right"></i></button>
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
<script>
$("#alertForm").hide();
$("#alertEmail").hide();
const checkboxes = () =>{
    if (document.getElementById("singleV").checked) {
        $("#a").modal("hide"); 
        document.getElementById("prescription").innerHTML = "Vision Normal";
        document.getElementById("prescFile").setAttribute("required", "");
        $("#prescriptionLi").show();
        $("#prescFile").show();
        $("#b").modal("show");  
    }else if(document.getElementById("prescription").checked){
        $("#a").modal("hide"); 
        document.getElementById("prescription").innerHTML = "Con prescripcion";
        document.getElementById("prescFile").setAttribute("required", "");
        $("#prescriptionLi").show();
        $("#prescFile").show();
        $("#b").modal("show"); 
    }else if(document.getElementById("read").checked){
        $("#a").modal("hide"); 
        document.getElementById("read").innerHTML = "Para Leer";
        $("#prescriptionLi").hide();
        $("#bRead").modal("show"); 
    }
}

const radiosMani = () =>{
    if (document.getElementById("magni0").checked) {
        document.getElementById("myMagni").value = "0";
    }else if(document.getElementById("magni025").checked){
        document.getElementById("myMagni").value = "0.25";
    }else if(document.getElementById("magni050").checked){
        document.getElementById("myMagni").value = "0.50";
    }else if(document.getElementById("magni075").checked){
        document.getElementById("myMagni").value = "0.75";
    }else if(document.getElementById("magni1").checked){
        document.getElementById("myMagni").value = "1.00";
    }else if(document.getElementById("magni125").checked){
        document.getElementById("myMagni").value = "1.25";
    }else if(document.getElementById("magni150").checked){
        document.getElementById("myMagni").value = "1.50";
    }else if(document.getElementById("magni175").checked){
        document.getElementById("myMagni").value = "1.75";
    }else if(document.getElementById("magni2").checked){
        document.getElementById("myMagni").value = "2.00";
    }else if(document.getElementById("magni225").checked){
        document.getElementById("myMagni").value = "2.25";
    }else if(document.getElementById("magni250").checked){
        document.getElementById("myMagni").value = "2.50";
    }else if(document.getElementById("magni275").checked){
        document.getElementById("myMagni").value = "2.75";
    }
}

const btnCheckout = () =>{
    $("#b").modal("hide"); 
    $("#c").modal("show");
}

const btnGoToModalB = () =>{
    $("#bRead").modal("hide"); 
    $("#b").modal("show");
}

const formPayment = () => {
    $("#alertForm").hide();
    $("#alertEmail").hide();
    const email = document.getElementById("mail").value;
    const street = document.getElementById("street").value;
    const city = document.getElementById("city").value;
    const cp = document.getElementById("cp").value;
    let ready = false;
    
    if(email === ""){
        document.getElementById("mail").style.borderColor = "red";
        $("#alertForm").show();
    }else if(street === ""){
        document.getElementById("street").style.borderColor = "red";
        $("#alertForm").show();
    }else if(city === ""){
        document.getElementById("city").style.borderColor = "red";
        $("#alertForm").show();
    }else if(cp === ""){
        document.getElementById("cp").style.borderColor = "red";
        $("#alertForm").show();
    }else if(!validateEmail(email)){
        document.getElementById("mail").style.borderColor = "red";
        $("#alertEmail").show();
    }else{
        $("#alertForm").hide();
        $("#alertEmail").hide();
        document.getElementById("mail").style.borderColor = "green";
        document.getElementById("street").style.borderColor = "green";
        document.getElementById("city").style.borderColor = "green";
        document.getElementById("cp").style.borderColor = "green";
        ready = true;
    }
    

    if(ready){
        document.buy.submit();
    }
    
}
</script>-->
<?php
require_once('../admin/footer.php');
?>
<script src="js/store.js"></script>