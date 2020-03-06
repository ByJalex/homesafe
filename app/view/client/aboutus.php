<?php
require_once('../../templates/template.php');
template::header('Home Safe', 0);
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12 text-center mt-5 mb-3">
            <h1>SOBRE NOSTROS</h1>
        </div>
        <div class="col-lg-12 text-center mb-3">
            <h3>¿Quienes somos?</h3>
            <p>Somos una empresa la cual ofrece productos inteligentes para el hogar con la finalidad de proporcionar a los habitantes de El Salvador una experiencia única en la automatización del hogar.</p>
        </div>
        <div class="col-lg-6 text-center">
            <h3>Visión</h3>
            <p>En un periodo de 10 años lograr que nuestros productos y servicios estén presente en el 50% de la población haciendo de El Salvador el mejor país de centro américa en tener casa inteligente y seguridad.</p>
        </div>
        <div class="col-lg-6 text-center">
            <h3>Misión</h3>
            <p>Soomos una empresa salvadoreña comprometidos a llevar tecnología de punta a los hogares salvadoreños y brindarles de una gran experiencia de casa autónomas y gran seguridad, para ellos contaremos como productos para cada necesidad y de alta calidad.</p>
        </div>
        <div class="col-lg-12 text-center">
            <h1>Owners</h1>
        </div>
        <div class="col-lg-12 d-flex justify-content-center">
            <div class="col-lg-2 mt-4">
            <img src="../../../public/images/img_profile.jpg" alt="Image" class="img-fluid rounded" width="200">
            <p class="text-center mt-3">Guillermo Salvador Cartagena</p>
            </div>
            <div class="col-lg-2 mt-4 text-center">
            <img src="../../../public/images/owner2.jpg" alt="Image" class="img-fluid rounded" width="200">
            <p class="text-center mt-3">Josue Alfonso Ayala Martinez</p>
            </div>
        </div>
        
    </div>
</div>

<?php
require_once('../../templates/template.php');
template::footer();
?>