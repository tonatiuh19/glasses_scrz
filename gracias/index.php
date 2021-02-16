<?php
require_once('../admin/header.php');
//require_once('../admin/visitors.php');
//visitors('PagoSuccess');
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
            <div class="col-sm-12 text-center">
                <h3 class="lead text-muted">Una vez confirmado tu pago nos pondremos en contacto contigo via email.</h3>
                <p>Enviamos tu comprobante de pago al siguiente numero o correo:</p><p></p>
                <p><span class="btn btn-dark"><i class="fab fa-whatsapp-square"></i> 3229502390</span><br><a href="mailto:compras@santacrz.com" class="btn btn-dark"><i class="fas fa-envelope"></i> Correo</a></p>
            </div>
        </div>
    </div>
</div>
<?php
require_once('../admin/footer.php');
?>