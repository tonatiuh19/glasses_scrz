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
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" src="https://static.vecteezy.com/system/resources/previews/001/201/154/non_2x/glasses-png.png" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#exampleModal">Comprar</button>

              </div>
              <p class="text-muted">$ 19.00 <del class="small">$17.80</del></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="https://static.vecteezy.com/system/resources/previews/001/201/154/non_2x/glasses-png.png" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-primary">Comprar</button>
                
              </div>
              <p class="text-muted">$ 19.00 <del class="small">$17.80</del></p>
            </div>
          </div>
        </div>
      </div>
   
      
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" src="https://static.vecteezy.com/system/resources/previews/001/201/154/non_2x/glasses-png.png" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-primary">Comprar</button>

              </div>
              <p class="text-muted">$ 19.00 <del class="small">$17.80</del></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</main>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
     
      <div class="modal-body">
        <div class="container">
            <div class="card">
                <div class="row">
                    <aside class="col-sm-5 border-right">
            <article class="gallery-wrap"> 
            <div class="img-big-wrap">
            <div> <a href="#"><img src="https://s9.postimg.org/tupxkvfj3/image.jpg"></a></div>
            </div> <!-- slider-product.// -->
            <div class="img-small-wrap">
            <div class="item-gallery"> <img src="https://s9.postimg.org/tupxkvfj3/image.jpg"> </div>
            <div class="item-gallery"> <img src="https://s9.postimg.org/tupxkvfj3/image.jpg"> </div>
            <div class="item-gallery"> <img src="https://s9.postimg.org/tupxkvfj3/image.jpg"> </div>
            <div class="item-gallery"> <img src="https://s9.postimg.org/tupxkvfj3/image.jpg"> </div>
            </div> <!-- slider-nav.// -->
            </article> <!-- gallery-wrap .end// -->
                    </aside>
                    <aside class="col-sm-7">
            <article class="card-body p-5">
                <h3 class="title mb-3">Original Version of Some product name</h3>

            <p class="price-detail-wrap"> 
                <span class="price h3 text-warning"> 
                    <span class="currency">$</span><span class="num">19.00</span>
                </span> 
                <!--<span>/per kg</span> -->
            </p> <!-- price-detail-wrap .// -->
            <dl class="item-property">
            <dt>Description</dt>
            <dd><p>Here goes description consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco </p></dd>
            </dl>
            <dl class="param param-feature">
            <dt>Model#</dt>
            <dd>12345611</dd>
            </dl>  <!-- item-property-hor .// -->
            <dl class="param param-feature">
            <dt>Color</dt>
            <dd>Black and white</dd>
            </dl>  <!-- item-property-hor .// -->
           

            <hr>
                <div class="row">
                    <div class="col-sm-5">
                        <dl class="param param-inline">
                        <dt>Cantidad: </dt>
                        <dd>
                            <select class="form-control form-control-sm" style="width:70px;">
                                <option> 1 </option>
                                <option> 2 </option>
                                <option> 3 </option>
                                <option> 4 </option>
                            </select>
                        </dd>
                        </dl>  <!-- item-property .// -->
                    </div> <!-- col.// -->
                    <!--<div class="col-sm-7">
                        <dl class="param param-inline">
                            <dt>Size: </dt>
                            <dd>
                                <label class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                <span class="form-check-label">SM</span>
                                </label>
                                <label class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                <span class="form-check-label">MD</span>
                                </label>
                                <label class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                <span class="form-check-label">XXL</span>
                                </label>
                            </dd>
                        </dl>   item-property .//
                    </div> col.// -->
                </div> <!-- row.// -->
                <hr>
                <div class="row">
                    <div class="col-sm-6"><a href="#" class="btn btn-lg btn-primary "> Comprar ahora </a></div>
                    <div class="col-sm-6"><a href="#" class="btn btn-lg btn-outline-primary"> <i class="fas fa-shopping-cart"></i> Añadir a tu bolsa </a></div>
                </div>
            </article> <!-- card-body.// -->
                    </aside> <!-- col.// -->
                </div> <!-- row.// -->
            </div> <!-- card.// -->
        </div>
      </div>
     
    </div>
  </div>
</div>
<?php
require_once('../admin/footer.php');
?>