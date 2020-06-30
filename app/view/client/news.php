<?php
require_once(RUTA_APP . 'templates/templateClient.php');
$title = 'Home Safe - inicio';
$header = template::header($title);
?>

<section>
    <div class="container">
        <h3 class="section-title mt-3">Noticias</h3>
        <div class="row" id="news">
        <div class="loader col-lg-12 text-center m-5" v-if="loaderProduct">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin:auto;background:#fff;display:block;" width="200px" height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                <path fill="none" stroke="#7d7c7c" stroke-width="8" stroke-dasharray="42.76482137044271 42.76482137044271" d="M24.3 30C11.4 30 5 43.3 5 50s6.4 20 19.3 20c19.3 0 32.1-40 51.4-40 C88.6 30 95 43.3 95 50s-6.4 20-19.3 20C56.4 70 43.6 30 24.3 30z" stroke-linecap="round" style="transform:scale(0.8);transform-origin:50px 50px">
                    <animate attributeName="stroke-dashoffset" repeatCount="indefinite" dur="3.125s" keyTimes="0;1" values="0;256.58892822265625"></animate>
                </path>
            </svg>
        </div>
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