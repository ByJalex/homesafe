<?php
require_once(RUTA_APP . 'templates/templateClient.php');
$title = 'Home Safe - inicio';
$header = template::header($title);
?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mt-3">
                <h3 class="section-title">Sobre nosotros</h3>
                <p>Somos una empresa la cual ofrece productos inteligentes para el hogar con la finalidad de proporcionar a los habitantes de El Salvador una experiencia única en la automatización del hogar.</p>
            </div>
            <div class="col-lg-6 text-center mt-3">
                <h3 class="section-title">Visión</h3>
                <p>En un periodo de 10 años lograr que nuestros productos y servicios estén presente en el 50% de la población haciendo de El Salvador el mejor país de centro América en tener casa inteligente y seguridad.</p>
            </div>
            <div class="col-lg-6 text-center mt-3">
                <h3 class="section-title">Misión</h3>
                <p>Somos una empresa salvadoreña comprometidos a llevar tecnología de punta a los hogares salvadoreños y brindarles de una gran experiencia de casa autónomas y gran seguridad, para ellos contaremos como productos para cada necesidad y de alta calidad.</p>
            </div>

            <div class="col-lg-12 text-center mt-3 mb-2">
                <h3 class="section-title">Directores</h3>
                <img src="../../../public/images/img_profile.jpg" class="img-fluid rounded mb-3" width="150">
                <img src="../../../public/images/owner2.jpg" class="img-fluid rounded mb-3" width="150">
            </div>
            
        </div>
    </div>
</section>

<?php
require_once(RUTA_APP . 'templates/templateClient.php');
$footer = template::footer();
?>