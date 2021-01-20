<?php
require_once('../admin/header.php');
if (!($_GET["id"])) {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.location.href='../';
    </SCRIPT>");
}
//http://localhost:8014/gracias/?id=10058986044211039870
?>
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center p-5">
                <i class="fas fa-heart text-danger fas fa-camera fa-5x"></i>
                <h1 class="jumbotron-heading">¡Muchas gracias por tu compra!</h1>
                <p class="lead text-muted">Con esto ayudas a mucha gente.</p>
                
                <hr>
                
            </div>
            <div class="col-sm-12">
                
                <h3 class="lead text-muted">Ahora llena los siguientes campos para completar tu pedido:</h3><p></p>
                <form>
                    <div class="form-group">
                       
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo electrónico">
                        <small id="emailHelp" class="form-text text-muted">Aqui enviaremos tu guia de tu pedido.</small>
                    </div>
                    <label for="inputAddress">¿A donde enviamos tus gafas?</label>
                    <div class="form-group">
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Direccion:">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <input type="text" class="form-control" placeholder="Ciudad" id="inputCity">
                        </div>
                       
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" placeholder="Codigo postal" id="inputZip">
                        </div>
                    </div>
                    <label for="inputAddress">Adjunta aqui tu formula si lo requieres:</label>
                    <div class="form-group">
                        
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <div class="form-check text-center">
                        <p>
                            <input type="checkbox" class="form-check-input" checked id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Acepto recibir noticias y ofertas.</label>
                        </p>
                    </div>
                    <div class="form-group row text-center">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-success">Completar pedido</button>
                        </div>
                    </div>
                </form>
               
            </div>
        </div>
    </div>
</div>
<?php
require_once('../admin/footer.php');
?>