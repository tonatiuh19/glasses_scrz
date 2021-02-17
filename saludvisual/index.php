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
VALUES ('SaludVisual', '$mobile', '$today')";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
   
    <!-- MAIN -->


    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-7 text-center mx-auto">
            <span class="btn btn-primary"><h1 >Edúcate</h1></span>
          </div>
        </div>
       
        <div class="row">
          <div class="col-lg-12 text-center mx-auto mb-2">
            <h2 class="section-heading">Astigmatismo</h2>
            <hr>
          </div>
          <div class="col-lg-12 mx-auto mb-2">
            <p>El astigmatismo es una patología óptica común que produce visión borrosa 
. Se produce cuando la curva de la córnea tiene una forma ligeramente irregular, 
lo que impide que la luz se enfoque correctamente en la parte posterior del ojo. 
Esto le impide ver con perfecta nitidez. El astigmatismo a menudo se presenta en el
 nacimiento y puede manifestarse junto con miopía o hipermetropía.</p>
          </div>

          <div class="col-lg-12 text-center mx-auto mb-2">
            <h2 class="section-heading">Eje</h2>
            <hr>
          </div>
          <div class="col-lg-12 mx-auto mb-2">
            <p>Es aquel numero/angulo en la formula medica que determina la direccion de la corrección del 
astigmatisco. el cilindro y el eje siempre deben ir presentes en la formula.</p>
          </div>

          <div class="col-lg-12 text-center mx-auto mb-2">
            <h2 class="section-heading">Lentes de alto indice</h2>
            <hr>
          </div>
          <div class="col-lg-12 mx-auto mb-2">
            <p>Aquellos lentes que se utilizan para prescripciones/formulas muy altas. y no debes 
utilizar lentes gruesos. tenemos la solución: Lentes plasticos de alto indice donde la 
elegancia resalta su calidad.</p>
          </div>

          <div class="col-lg-12 text-center mx-auto mb-2">
            <h2 class="section-heading">Hidrofobico</h2>
            <hr>
          </div>
          <div class="col-lg-12 mx-auto mb-2">
            <p>Hace referencia a una tecnologia la cual hace que resbale el agua en los lentes. cuenta
con una barrera que repele cualquier suciedad o efecto contaminante y es de gran 
ayuda a la hora de realizar cualquier actividad deportiva. repele agua, aceite o grasa 
lo que facilita su limpieza.</p>
          </div>

          <div class="col-lg-12 text-center mx-auto mb-2">
            <h2 class="section-heading">Miopia</h2>
            <hr>
          </div>
          <div class="col-lg-12 mx-auto mb-2">
            <p>La miopía es un trastorno común de la visión en el que puedes ver con claridad
los objetos que están cerca tuyo, pero ver borrosos los objetos alejados. 
Se produce cuando la forma del ojo hace que los rayos de luz se inclinen (refracten) 
incorrectamente, lo que enfoca las imágenes delante de la retina en lugar de sobre la retina</p>
            <p>La miopía puede manifestarse gradualmente o de forma rápida, y con frecuencia empeora durante
 la niñez y la adolescencia. La miopía suele heredarse.</p>
          </div>

          <div class="col-lg-12 text-center mx-auto mb-2">
            <h2 class="section-heading">El grado de tu hipermetropía afecta tu capacidad de enfoque. </h2>
            <hr>
          </div>
          <div class="col-lg-12 mx-auto mb-2">
            <p>Las personas con hipermetropía grave pueden ver claramente solo los objetos 
que se encuentran a gran distancia, mientras que las que tienen hipermetropía 
leve pueden ver claramente los objetos que están más cerca.
</p>
          </div>

          <div class="col-lg-12 text-center mx-auto mb-2">
            <h2 class="section-heading">Lentes monofocales</h2>
            <hr>
          </div>
          <div class="col-lg-12 mx-auto mb-2">
            <p>Son los lentes más comunes.Se usan para corregir defectos visuales como miopía, 
hipermetropía y astigmatismo. 
Se caracterizan por tener un solo foco, es decir, una sola graduación. </p>
          </div>

          <div class="col-lg-12 text-center mx-auto mb-2">
            <h2 class="section-heading">Lentes bifocales</h2>
            <hr>
          </div>
          <div class="col-lg-12 mx-auto mb-2">
            <p>Diseñados para corregir dos distancias,generalmente una para ver de lejos y una para ver de cerca.
Usados especialmente por las personas con presbicia (vista cansada a causa de la edad).</p>
          </div>

          <div class="col-lg-12 text-center mx-auto mb-2">
            <h2 class="section-heading">Lentes Progresivos</h2>
            <hr>
          </div>
          <div class="col-lg-12 mx-auto mb-2">
            <p>Son lentes diseñados para corregir todas las distancias sin línea visible 
proporcionando una transición suave y continua entre las distancias .
El poder de lente varía progresivamente, aumentando hacia el borde inferior del lente, 
permitiéndole al usuario ver a todas las distancias de visión sin salto de imagen como
ocurre con los bifocales convencionales. De hecho, los lentes progresivos brindan una 
corrección más natural de la presbicia y ofrecen una apariencia más juvenil que los bifocales.</p>
          </div>

          <div class="col-lg-12 text-center mx-auto mb-2">
            <h2 class="section-heading">CR39</h2>
            <hr>
          </div>
          <div class="col-lg-12 mx-auto mb-2">
            <p>Es un material orgánico conocido como plástico convencional, de bajo índice (1.5),
 de bajo costo y se usa principalmente para elaborar lentes de bajo poder donde el espesor 
y el peso no son factores importantes. Es un material muy estable con excelente óptica y se 
deja colorear fácilmente. Desventajas: grueso, estéticamente no cumple con expectativas y 
tiende a amarillarse con el tiempo.</p>
          </div>

          <div class="col-lg-12 text-center mx-auto mb-2">
            <h2 class="section-heading">Policarbonato</h2>
            <hr>
          </div>
          <div class="col-lg-12 mx-auto mb-2">
            <p>Es el material de los lentes los cuales son mas delgados y livianos. Son resistentes a los 
impactos y se recomiendan para deportistas y uso industrial. </p>
          </div>

          <div class="col-lg-12 text-center mx-auto mb-2">
            <h2 class="section-heading">Policarbonato</h2>
            <hr>
          </div>
          <div class="col-lg-12 mx-auto mb-2">
            <p>Es un recubrimiento que se aplica al lente en el vacio para reducir aquel refjelo de la luz
en los lentes y mejorar la salud visual del paciente. es ideal para usuarios de computador
y para manejar de noche. la mayoría de lentes antirreflejo ofrecen tratamiento hidrofobico,
anti estatico mejorando la comodidad del paciente. </p>
          </div>

          <div class="col-lg-12 text-center mx-auto mb-2">
            <h2 class="section-heading">Filtro blue block- Blue</h2>
            <hr>
          </div>
          <div class="col-lg-12 mx-auto mb-2">
            <p>Quimico que se aplica a la matriz del lente bajo altas temperaturas. impide que los rayos uv
pasen al ojo. </p>
          </div>

          <div class="col-lg-12 text-center mx-auto mb-2">
            <h2 class="section-heading">Lentes fotosensibles-Fotocromaticos</h2>
            <hr>
          </div>
          <div class="col-lg-12 mx-auto mb-2">
            <p>Son lentes que cambian de claros a oscuros según las condiciones de iluminación. 
Los lentes fotocromáticos son lentes que reaccionan a los cambios de iluminación,
 más exactamente, a la presencia de luz ultravioleta (UV).
</p>
            <p>Estos lentes se ven claros en ambientes interiores y se oscurecen al ser expuestos a la luz,
 en forma proporcional a la cantidad de radiación ultravioleta.</p>
          </div>

          <div class="col-lg-12 text-center mx-auto mb-2">
            <h2 class="section-heading">OD</h2>
            <hr>
          </div>
          <div class="col-lg-12 mx-auto mb-2">
            <p>Aquella abreviacion que aparece en tu prescripcion: se refiere a oculus dexter, 
es ojo derecho en latin.</p>
          </div>

          <div class="col-lg-12 text-center mx-auto mb-2">
            <h2 class="section-heading">OS</h2>
            <hr>
          </div>
          <div class="col-lg-12 mx-auto mb-2">
            <p>Aquella abreviación que aparece en tu prescripción: Se refuere a Oculus Sinister
es ojo izquiero en latin.</p>
          </div>

          <div class="col-lg-12 text-center mx-auto mb-2">
            <h2 class="section-heading">Optometra</h2>
            <hr>
          </div>
          <div class="col-lg-12 mx-auto mb-2">
            <p>Profesional de la salud que prescribe gafas y lentes de contacto. pueden tambien diagnosticar
patologías del ojo y prescribir medicación.</p>
          </div>

          <div class="col-lg-12 text-center mx-auto mb-2">
            <h2 class="section-heading">Oftalmologo</h2>
            <hr>
          </div>
          <div class="col-lg-12 mx-auto mb-2">
            <p>Medico especialista que se dedica a tratar y diagnosticar condiciones visuales asi como 
tambien realiza cirugías. el oftalmologo tambien puede prescribir una formula medica, lentes
de contacto, y medicar.</p>
          </div>

          <div class="col-lg-12 text-center mx-auto mb-2">
            <h2 class="section-heading">Phoropter</h2>
            <hr>
          </div>
          <div class="col-lg-12 mx-auto mb-2">
            <p>Instrumento que se utiliza para medir el error de refracción para determinar la prescripción 
de lentes de un individuo durante el examen ocular.</p>
          </div>

          <div class="col-lg-12 text-center mx-auto mb-2">
            <h2 class="section-heading">Distancia pupilar</h2>
            <hr>
          </div>
          <div class="col-lg-12 mx-auto mb-2">
            <p>Es la distancia entre el centro de tu pupila derecha y el centro de tu pupila izquierda,
medida en milímetros. Conocer este número significa que podemos asegurarnos de que siempre
mires a través de la parte correcta del lente.</p>
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