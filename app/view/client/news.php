<?php
require_once(RUTA_APP . 'templates/templateClient.php');
$title = 'Home Safe - inicio';
$header = template::header($title);
?>

<section>
    <div class="container">
        <h3 class="section-title mt-3">Noticias</h3>
        <div class="row" id="news">
            <div class="col-lg-4 mt-3" v-for="item in newarray">
                <div class="card mb-3">
                    <img :src="item.imagen_n" class="card-img-top" :alt="item.titulo_noticia">
                    <div class="card-body">
                        <h5 class="card-title" v-cloak>{{item.titulo_noticia}}</h5>
                        <p class="card-text" v-cloak>{{item.noticia}}</p>
                        <p class="card-text"><small class="text-muted">Leer más</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="<?php echo RUTA_PADRE ?>app/core/vue/client/news.js"></script>

<?php
require_once(RUTA_APP . 'templates/templateClient.php');
$footer = template::footer();
?>